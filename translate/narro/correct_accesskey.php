<?php
header('Content-Type: text/plain');
require('configuration/configuration.narro.inc.php');
$request = 'UPDATE `narro_context_info` SET `suggestion_access_key` = `text_access_key` '
	 . 'WHERE `text_access_key` != `suggestion_access_key` '
	 . 'OR (`text_access_key` IS NOT NULL AND `suggestion_access_key` IS NULL) '
	 . 'OR (`text_access_key` IS NULL AND `suggestion_access_key` IS NOT NULL);';

$DB = unserialize(DB_CONNECTION_1);
$link = mysqli_connect($DB['server'], $DB['username'], $DB['password'], $DB['database']);

if (!$link) {
    die("DB Connection failed: %s\n". mysqli_connect_error());
}

if (mysqli_query($link, $request)) {
	print 'OK!';
} else {
	die("Error Message: %s\n". mysqli_error($link));
}

mysqli_close($link);
?> 
