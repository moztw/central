<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">Bar Charts with QFlot</h1>
		
		<b>QFlot</b> is a plugin that encapsulates a powerful Javascript-based graphing/plotting library
			called Flot (<a href="http://code.google.com/p/flot/">Flot homepage</a>). Quoting the project's own
			goals, "The focus is on simple usage (all settings are optional), attractive looks and interactive features 
			like zooming and mouse tracking".<br/><br/>
			
		Below, you'll find a simple example of a bar chart created using this library. First, initialize a 
		<b>QFlot</b> object. Set its visual parameters - size, dimensions (don't wait - look at the code! :)).<br/><br/>
		
		Then, get your dataset onto the graph. Here is the sample dataset we want to visualize here: <br><br>
		<div style="padding-left: 50px">
		<code>
		<?
			echo (substr_replace(str_replace(")", ")<br>", print_r($this->arrData, true)), "Array (<br>", 0, 7));
		?>
		</code></div>
		
		We want to take each element of this array (where element is "Intro", "Beginner", etc), and plot them
		on the chart as a separate bar. To do so, we set the following values for each element: the key is the position
		on the horizontal x-axis (for example, Beginner is to appear in position 2), and the value is the height of the
		bar (for example, for the Beginner bar, it has to be equal to 45).<br/><br/>
		
		To do so, we create an object of type <b>QFlotSeries</b> for each of the bars. We pass the name
		of the series to the <b>QFlotSeries</b> constructor. We then set the value of the <b>DataSet</b>
		property of the <b>QFlotSeries</b> to be the key-value pair that we deliniated earlier (the one where
		the key is the x-position and the value is the y-axis value). 
		
		The last step is registering the <b>QFlotSeries</b>	with your <b>QFlot</b> object by calling 
		<b>AddSeries()</b>. That's it! You can now render the <b>QFlot</b> object on your template file
		by calling <b>Render()</b> just like you would on any other <b>QControl</b>.
	</div>
		
	<div id="Flot" title="flot">		
		<?php $this->flotReport->Render(); ?>
	</div>
	
	<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>