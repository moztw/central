<?php

//Where you install Narro (WITH tailing slash)
$narro_dir = '/home/moztw/translate/';
//Target Languages => Source Language
$LANGUAGES = array('zh-TW' => 'en-US');

//Where Narro Helper should keep files
//(you can ignore this variable if you don't use it in $PROJECTS array)
$helper_data_dir = '/home/moztw/translate/data/helper/';

//Projects
$PROJECTS = array(
	array(
		'id' => 2,
		'updatecommand' => '/home/moztw/translate/helper/fake-l10n-checkout ' . $helper_data_dir,
		'filestocopy' => array(
			'browser' => $helper_data_dir . 'l10n-en-US/browser',
			'other-licenses/branding/firefox' =>  $helper_data_dir . 'l10n-en-US/other-licenses/branding/firefox'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 3,
		'updatecommand' => null,
		'filestocopy' => array(
			'mail' => $helper_data_dir . 'l10n-en-US/mail',
			'other-licenses/branding/thunderbird' =>  $helper_data_dir . 'l10n-en-US/other-licenses/branding/thunderbird'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 4,
		'updatecommand' => null,
		'filestocopy' => array(
			'calender' => $helper_data_dir . 'l10n-en-US/calender'//,
//			'other-licenses/branding/sunbird' =>  $helper_data_dir . 'l10n-en-US/other-licenses/branding/sunbird',
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 5,
		'updatecommand' => null,
		'filestocopy' => array(
			'suite' => $helper_data_dir . 'l10n-en-US/suite'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 6,
		'updatecommand' => null,
		'filestocopy' => array(
			'extensions/inspector' => $helper_data_dir . 'l10n-en-US/extensions/inspector'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 7,
		'updatecommand' => null,
		'filestocopy' => array(
			'extensions/reporter' => $helper_data_dir . 'l10n-en-US/extensions/reporter',
			'editor/ui' => $helper_data_dir . 'l10n-en-US/editor/ui',
			'dom' => $helper_data_dir . 'l10n-en-US/dom',
			'netwerk' => $helper_data_dir . 'l10n-en-US/netwerk',
			'toolkit' => $helper_data_dir . 'l10n-en-US/toolkit',
			'security' => $helper_data_dir . 'l10n-en-US/security'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 8,
		'updatecommand' => 'wget -q http://svn.mozilla.org/addons/trunk/site/app/locale/en_US/LC_MESSAGES/messages.po'
			 . ' -O ' . $narro_dir . 'data/import/8/en-US/messages.dpo',
		'filestocopy' => array(), // Copy nothing :-)
		'purge_old_files' => false, // Delete nothing since the old one is already overwritten by wget
		'moz_files_only' => false
	),
	array(
		'id' => 9,
		'updatecommand' => 'wget -q https://svn.mozilla.org/projects/mozparty/trunk/app/locale/eng/LC_MESSAGES/default.po'
			 . ' -O ' . $narro_dir . 'data/import/9/en-US/default.dpo',
		'filestocopy' => array(), // Copy nothing :-)
		'purge_old_files' => false, // Delete nothing since the old one is already overwritten by wget
		'moz_files_only' => false
	)
);

?>