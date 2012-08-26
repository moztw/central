<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<div class="instruction_title">Making HTTP requests using QCurl</div>
		<b>QCurl</b> plugin offers offers a way make HTTP requests to get a remote webpage. It wrapps the Curl library 
		within the QCubed framework. This is basically a wrapper for a class I have found
		at <a href="http://php.net/manual/en/book.curl.php">http://php.net/manual/en/book.curl.php</a> <br /><br />
		
		Using it is really simple:
		
		<ul>
			<li>Create an instance of the the QCurl class, passing in the target URL as a parameter to the constructor</li>
			<li>Set parameters, for example: proxy server you'd like to use, or whether the HTTP request is to be sent using POST or GET</li>
			<li>Perform the actual the HTTP request by calling <b>makeHttpRequest()</b> on your QCurl object</li>
			<li>Fetch the response; inspect the HTTP response code and errors, if any.</li>
		</ul>
	</div>
	PROXY (leave blank if none is required): <br />
	<?php echo ""; $this->txtProxy->Render(); ?><br />
	URL: <br /> 
	<?php $this->txtURL->Render(); ?><br /><br />
	<?php $this->btnExecuteRequest->Render();?>
	<br /><br />
	HTTP Status: <?php $this->lblHTTPStatus->Render(); ?><br />
	Errors: <?php $this->lblError->Render(); ?><br />
	Retrieved page:<br />
	<div id="responsepage" style="height: 200px; width: 1000px; overflow: auto; border-style: thin; border-width: 1px; border-style: solid">
		<?php $this->lblResult->Render();?>
	</div>
	<?php $this->RenderEnd(); ?>

	
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>