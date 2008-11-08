<?php

proc_nice(5);

header('Content-Type: text/plain');

require('config.inc.php');

require('../includes/configuration.inc.php');
$DB = unserialize(DB_CONNECTION_1);

print("Backing up database...\n");
system('mysqldump -u ' . $DB['username'] . ' ' . $DB['database'] . ' > /home/moztw/translate/data/helper/narro-backup-$(date +%Y%m%d_%H%m%S).sql');

foreach ($PROJECTS as $PROJECT) {
	print('Processing Project #' . $PROJECT['id'] . "...\n");
	//Run update command if there is one.
	if ($PROJECT['updatecommand']) {
		print("	Running update command...\n");
		system($PROJECT['updatecommand']);
	}

	$e = false;
	foreach ($PROJECT['filestocopy'] as $dist => $filepath) {
		if (!file_exists($filepath)) {
			print("	Error: " . $filepath . " does not exist...\n");
			$e = true;
			break;
		}
	}
	if ($e) break;

	//purge old files in en-US directory
	if ($PROJECT['purge_old_files']) {
		print("	Purging old files...\n");
		foreach (scandir($narro_dir . 'data/import/' . $PROJECT['id'] . '/en-US') as $files) {
			if (in_array($files, array('.', '..'))) continue;
			rm_recurse($narro_dir . 'data/import/' . $PROJECT['id'] . '/en-US/' . $files);
		}
	}
	//copying new files
	print("	Copying files...\n");
	foreach ($PROJECT['filestocopy'] as $dist => $filepath) {
		$dist = $narro_dir . 'data/import/' . $PROJECT['id'] . '/en-US/' . $dist;
		if (is_dir($filepath)) {
			mkdir($dist, 0755, true);
			if ($PROJECT['moz_files_only']) {
				copy_moz_files('', $filepath, $dist);
			} else {
				// copy_re
			}
		} else {
			// mkdir_r
			copy(
				$filepath,
				$dist
			);
		}
	}
	//import
	foreach ($LANGUAGES as $tlang => $slang) {
		print('	Importing into Narro for target language ' . $tlang . " ...\n");
		system('php ' . $narro_dir . 'includes/narro/importer/importer.php'
			. ' --import --source-lang ' . $slang . ' --target-lang ' . $tlang . ' --minloglevel 2 --check-equal --project ' . $PROJECT['id']);
	}
}

print('Done!');
exit();

function copy_moz_files($dir, $root, $dest) {
	global $ignore;
	$A = scandir($root . $dir);
	foreach($A as $k => $v) {
		if (in_array($v, array('.', '..', 'CVS'))) continue;
		if (is_dir($root . $dir . '/' . $v)) {
			mkdir($dest . $dir . '/' . $v);
			copy_moz_files($dir . '/' . $v, $root, $dest);
			@rmdir($dest . $dir . '/' . $v); //remove empty directory.
		} else {
			if (preg_match('/\.(dtd|properties|ini)$/', $v)) {
				copy($root . $dir . '/' . $v, $dest . $dir . '/' . $v);
			}
		}
	}
}

function rm_recurse($file) {
	if (is_dir($file) && !is_link($file)) {
		foreach(scandir($file) as $sf) {
			if (in_array($sf, array('.', '..'))) continue;
			if ( !rm_recurse($file . '/' . $sf)) {
				return false;
			}
		}
		return rmdir($file);
	} else {
		return unlink($file);
	}
}

?>