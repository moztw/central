<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">Debugging Your Application</h1>
		
		<p>It's difficult to debug PHP applications; while there are excellent
        PHP-level debugging mechanisms such as <a href="http://www.xdebug.org/">XDebug</a>,
        it is often hard to integrate these into your environment - perhaps,
        you are working on a shared host? Maybe you don't have root access to your
        server? In that case, many PHP developers resort to using methods such as</p>
        
         <div style="padding-left: 50px"><code>
            exit ("Processed fine up to here; variable value = " . $myVar);
        </code></div>
        
        <p>We all know that these methods are rather limiting - in particular, when you
        are trying to debug advanced AJAX applications, such as QCubed apps. That's why
        we've included a better mechanism for debugging through Firebug:</p>
        
		<div><img src="qfirebug.png" alt="&quot;QFirebug Debugging Output&quot;" style="border-width: 1px; border-style: solid;" /></div>
        
        <p>Here's how to make it work:<br />Install the following prerequisites in the order specified below:</p>
        <ul>
            <li><a href="http://www.mozilla.com/en-US/products/firefox/">Firefox</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/1843">Firebug</a> (Powerful Firefox extension for debugging)</li>
            <li><a href="http://www.firephp.org/">FirePHP</a> (Firebug extension for PHP debugging)</li>
        </ul>
        
        <p>Then, come back to this page and open and enable the Firebug console by going
        to <em>Tools | Firebug | Enable Firebug</em> in the Firefox menu. Make sure that the
        Console, Script, and Net panels are enabled in Firebug.</p>
        
        <p>You can then use the <strong>QFirebug</strong> static class to output your debugging
        messages to the Firebug console. You can expect the standard <strong>log()</strong>
        methods - review the effects by clicking Button A below. It's also really
        easy to output the queries (database profile) into the console by using
        <strong>QFirebug::OutputDatabaseProfile()</strong>. Remember that you need to first
        enable the profiling for your database for it to work - see this in
        action by clicking Button B below.</p>
	</div>
	
	<p><?php $this->btnButtonA->Render(); ?>&nbsp;&nbsp;&nbsp;<?php $this->btnButtonB->Render(); ?></p>
	<p><?php $this->lblMessage->Render(); ?></p>


	<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>