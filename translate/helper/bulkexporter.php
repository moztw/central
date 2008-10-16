<?php

proc_nice(7);

header('Content-Type: text/plain');

require('config.inc.php');

foreach ($PROJECTS as $PROJECT) {
	//export
	foreach ($LANGUAGES as $tlang => $slang) {
		print('Export project #' . $PROJECT['id'] . ' from Narro for target language ' . $tlang . " ...\n");
		system('php ' . $narro_dir . 'includes/narro/importer/importer.php'
			. ' --export --source-lang ' . $slang . ' --target-lang ' . $tlang . ' --minloglevel 2 --exported-suggestion 1 --project ' . $PROJECT['id']);
	}
}

print('Done!');
exit();


?>