<?php
	$referer = "http://irclog.moztw.org/logstatus.php";
	if ($_SERVER["HTTP_REFERER"] != $referer) {
		die("Please call this script from bot status page!");
	}
	exec('/usr/bin/python /home/moztw/irclog/var/ircbot/LumberJack.py > /dev/null &', $output, $return);
	if ($return===0) {
		print "OK";
	} else {
		print "Error!\n";
		print_r($output);
	}
?>
