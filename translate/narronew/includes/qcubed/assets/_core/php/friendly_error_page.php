<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>

	<h3>An error occurred.</h3>

	<p>The error was logged to <?php echo ERROR_LOG_PATH ?> as a HTML file. Please <a href="http://code.google.com/p/narro/issues/entry">report this</a> with the HTML file attached.</p>
	
	<p>You may also want to check the list below for failures:</p>
	
<?php require(__DOCROOT__ . __NARRO_PHP_ASSETS__ . '/install.php'); require(__CONFIGURATION__ . '/footer.inc.php'); ?>