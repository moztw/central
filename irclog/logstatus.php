<?php
function checkBot($pidfile) {
	$filename = '/var/run/' . $pidfile;
	if (file_exists($filename)) {
		// if exists
		$pid = intval(file_get_contents($filename)); // get pid as a integer
		if ($pid === 1) {
			die("Program error.");	// some basic protection of intval's retun value
		}
		if (is_dir("/proc/$pid")) {	// check if it is a valid pid and alive
			return $pid;
		} else {	// pidfile exists, but process died (unclean shutdown?)
			return FALSE;
		}
	} else {
		return FALSE;
	}
}

$botpid = checkBot("LumberJack.pid");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MozTW IRC Bot</title>
</head>
<body>
	<h1>MozTW IRC Bot Status</h1>
<?php if ($botpid !== FALSE) { ?>
	<p>The bot is Running with PID <?php echo $botpid; ?>!</p> 
<?php } else { ?>
	<p>Call back IRC bot: <button class="respawn-ircbot">Respawn</button></p>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.respawn-ircbot').bind(
			'click',
				function () {
				$.get('./callbot.php',
					function (data) {
						alert(data);
						location.reload();
					}
					);
				}
			);
		});
	</script>
<?php } ?>
</body>
</html>
