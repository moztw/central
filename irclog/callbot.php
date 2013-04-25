<?php
	$referer = "http://irclog.moztw.org/logstatus.php";
	if ($_SERVER["HTTP_REFERER"] !== $referer) {
		die("Please call this script from bot status page!");
	}
	exec("/usr/bin/sudo /etc/init.d/irclogbot restart", $output, $return);
	if ($return === 0) {
		print "OK!\n";
		//print_r($output);
	} else {
		print "Error!\n";
		print_r($output);
	}
?>
