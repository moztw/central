<?php

/*

compare-locales webrunner

$ /usr/local/bin/compare-locales /home/moztw/translate/var/repo/mozilla-central/browser/locales/l10n.ini /home/moztw/translate/www/l10n-base/l10n-central zh-TW

*/


header('Content-Type: text/plain');

$bin = '/usr/local/bin/compare-locales -v';
$lang = 'zh-TW';

if (!isset($_GET['app']) || !isset($_GET['branch'])) {
	print 'No app or repo is specified.';
	exit;
}

switch ($_GET['app']) {
	case 'browser':
	$ini = 'browser/locales/l10n.ini';
	$repo = 'mozilla';
	break;

	case 'sync':
	$ini = 'services/sync/locales/l10n.ini';
	$repo = 'mozilla';
	break;

	case 'mail':
	// comm-* repos reqire a 'mozilla' symlink links to mozilla-* to access toolkit.
	$ini = 'mail/locales/l10n.ini';
	$repo = 'comm';
	break;

	case 'mobile':
	// 'mobile' is actually a symlink goes to mobile-* according to mozilla-* branch they are on.
	// FIXME: current logic won't work if two mobile branches depends on the same mozilla branch.
	$ini = 'mobile/locales/l10n.ini';
	$repo = 'mozilla';
	break;

	case 'calendar':
	$ini = 'calendar/locales/l10n.ini';
	$repo = 'comm';
	break;

	case 'suite':
	$ini = 'suite/locales/l10n.ini';
	$repo = 'comm';
	break;

	case 'toolkit':
	$ini = 'toolkit/locales/l10n.ini';
	$repo = 'mozilla';
	break;
}

switch ($_GET['branch']) {
	case 'central':
//	case 'mozilla-central':
//	case 'comm-central':
//	case 'l10n-central':
	$branch = '../../var/repo/' . $repo . '-central';
	$l10n_base = 'l10n-central';
	break;

/*	case '1.9.2':
	case 'mozilla-1.9.2':
	case 'comm-1.9.2':
	case 'l10n-mozilla-1.9.2':
	$branch = '../../var/repo/' . $repo . '-1.9.2';
	$l10n_base = 'l10n-mozilla-1.9.2';
	break;
*/

	case 'beta':
	$branch = '../../var/repo/' . $repo . '-beta';
	$l10n_base = 'l10n-beta';
	break;

	case 'aurora':
	$branch = '../../var/repo/' . $repo . '-aurora';
	$l10n_base = 'l10n-aurora';
	break;		
}

if (!isset($_GET['who'])) {
	// l10n files from Narro
	$l10n_base_root = '../l10n-base/';
} else {
	if ($_GET['who'] === 'timdream') $l10n_base_root = '/home/timdream/l10n-base/';
}

if (!isset($ini) || !isset($branch) || !isset($l10n_base)) {
	print 'app or branch not vaild.';
	exit;
}

if (!isset($_GET['json']) && !isset($_GET['callback'])) {
	// not JSON nor JSONP output -- output text
	$cmd = "$bin $branch/$ini $l10n_base_root$l10n_base $lang";

	print '===============================================================================================================' . "\n";
	print $cmd . "\n";
	print date("r") . "\n";
	print '===============================================================================================================' . "\n";

	system($cmd);
} else {
	// JSON or JSONP
	header('Content-Type: text/javascript');
	if (isset($_GET['callback'])) {
		// JSONP callback
		if (!preg_match('/^[a-zA-Z0-9_]+$/', $_GET['callback'])) {
			header("HTTP/1.0 400 Bad Request"); //XSS checking failed
			print 'Bad Request';
			exit;
		}
		print $_GET['callback'];
		print '(';
	}
	$cmd = "$bin --json $branch/$ini $l10n_base_root$l10n_base $lang";
	system($cmd);
	if (isset($_GET['callback'])) {
		print ')';
	}
}

