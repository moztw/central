<?php
header('Content-Type: text/plain');
require('includes/configuration.inc.php');

$DB = unserialize(DB_CONNECTION_1);
mysql_connect(
	$DB['server'],
	$DB['username'],
	$DB['password']);
	mysql_select_db($DB['database']);
	mysql_query('UPDATE `narro_context_info` SET `suggestion_access_key` =
	`text_access_key` '
	. 'WHERE `text_access_key` != `suggestion_access_key` '
	. 'OR (`text_access_key` IS NOT NULL AND `suggestion_access_key` IS NULL) '
	. 'OR (`text_access_key` IS NULL AND `suggestion_access_key` IS NOT NULL);');

print 'OK!';
?>
