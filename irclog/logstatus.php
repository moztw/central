<?php
function checkBot($process) {
	exec("ps ax|grep " . $process, $result);
	$length = count($result);
	if ($length >= 2) {
		return TRUE;
	} else {
		/* FIXME: Get PID of Bot process */
		//$output = intval(substr($result[$length-2], 9, 5));
		//echo $output;
		return FALSE;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MozTW IRC Bot</title>
</head>
<body>
	<h1>MozTW IRC Bot Status</h1>
<?php  if (checkBot("LumberJack.py")) {  ?>
	<p>The bot is Running!</p> 
<?php  } else {  ?>      
	<p>Call back IRC bot: <button class="respawn-ircbot">Respawn</button></p>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
<?php   }     ?>
</body>
</html>
