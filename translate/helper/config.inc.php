<?php

//Where you install Narro (WITH tailing slash)
$narro_dir = '/home/timdream/narro/www/';
//Target Languages => Source Language
$LANGUAGES = array('zh-TW' => 'en-US'/*, 'zh-TW-tsundere' => 'zh-TW'*/);

//Where Narro Helper should keep files
//(you can ignore this variable if you don't use it in $PROJECTS array)
$helper_data_dir = '/home/timdream/narro/www/data/helper/';

//Projects
$PROJECTS = array(
	array(
		'id' => 2,
		'updatecommand' => '/home/timdream/narro/www/helper/fake-l10n-checkout ' . $helper_data_dir,
		'filestocopy' => array(
			'browser' => $helper_data_dir . 'l10n-en-US/browser'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 3,
		'updatecommand' => null,
		'filestocopy' => array(
			'dom' => $helper_data_dir . 'l10n-en-US/dom'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 4,
		'updatecommand' => null,
		'filestocopy' => array(
			'editor' => $helper_data_dir . 'l10n-en-US/editor'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 5,
		'updatecommand' => null,
		'filestocopy' => array(
			'extensions' => $helper_data_dir . 'l10n-en-US/extensions'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 6,
		'updatecommand' => null,
		'filestocopy' => array(
			'mail' => $helper_data_dir . 'l10n-en-US/mail'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 7,
		'updatecommand' => null,
		'filestocopy' => array(
			'netwerk' => $helper_data_dir . 'l10n-en-US/netwerk'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 8,
		'updatecommand' => null,
		'filestocopy' => array(
			'other-licenses' => $helper_data_dir . 'l10n-en-US/other-licenses'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 9,
		'updatecommand' => null,
		'filestocopy' => array(
			'security' => $helper_data_dir . 'l10n-en-US/security'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 10,
		'updatecommand' => null,
		'filestocopy' => array(
			'suite' => $helper_data_dir . 'l10n-en-US/suite'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 11,
		'updatecommand' => null,
		'filestocopy' => array(
			'toolkit' => $helper_data_dir . 'l10n-en-US/toolkit'
		),
		'purge_old_files' => true,
		'moz_files_only' => true
	),
	array(
		'id' => 12,
		'updatecommand' => 'wget -q http://svn.mozilla.org/addons/trunk/site/app/locale/en_US/LC_MESSAGES/messages.po'
			 . ' -O ' . $narro_dir . 'data/import/12/en-US/messages.dpo',
		'filestocopy' => array(), // Copy nothing :-)
		'purge_old_files' => false, // Delete nothing since the old one is already overwritten by wget
		'moz_files_only' => false
	),
	array(
		'id' => 13,
		'updatecommand' => 'wget -q https://svn.mozilla.org/projects/mozparty/trunk/app/locale/eng/LC_MESSAGES/default.po'
			 . ' -O ' . $narro_dir . 'data/import/13/en-US/default.dpo',
		'filestocopy' => array(), // Copy nothing :-)
		'purge_old_files' => false, // Delete nothing since the old one is already overwritten by wget
		'moz_files_only' => false
	)
);

?>