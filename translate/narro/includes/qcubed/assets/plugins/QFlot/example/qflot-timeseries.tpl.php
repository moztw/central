<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">Time Series Charts with QFlot</h1>
		
		<p>In the <a href="qflot-bar.php">previous tutorial</a>, you saw how to create a basic 
		bar chart with <b>QFlot</b>. This tutorial builds upon the knowledge from the last one - 
		so if you want to build a time series graph, check it out first, still!<br/><br/>
			
		In this example, we'll create a graph of players' scores over time. Take a look at what 
		we got below.. Pretty cute chart, right? It's really easy to create with <b>QFlot</b>.
		First, let's see how each line is constructed. Each line is really just a <b>QFlotSeries</b>;
		unlike the bar chart example where each series had only one datapoint, here we have multiple
		datapoints for each.<br/><br/>
		
		So we go ahead and create <b>QFlotSeries</b> objects, setting visual parameters on each. 
		Note how one of the lines has tickmarks (little circles where the value points are) and 
		the other one doesn't. Same with the line fill (the fill underneath the series line that 
		covers the area under the curve). These are just settings like <b>Points</b> and <b>LinesFill</b>
		on the <b>QFlotSeries</b> object.<br/><br/>
		
		If you look at the code for this example, you'll also notice that the time series can be
		specified through a couple different data source formats. For example, $gonzaloData array 
		specifies the x-axis values through formatted dates; $melissaData does so through timestamps.
		<br><br>
		
		Just like on the bar chart example, we can set the <b>DataSet</b> property on the <b>QFlotSeries</b> to
		pass in an entire formatted dataset as the list of values. If you don't have one created, it
		might save you time to use the <b>AddDataPoint($time, $y)</b> method instead.<br/><br/>
		
		Last couple tricks: you can easily add a linear regression trendline to you chart by calling
		<b>MakeTrend</b> on the <b>QFlot</b> object and passing in the series you want regressed. You 
		can also create a <b>QDataGrid</b> out of the values in your chart easily - which might be
		useful to show a values table right under it, like in the example below. To do so, use
		the <b>CreateDataGrid</b> on the <b>QFlot</b> object.
	</div>
		
	   	<div id="Flot" title="flot">
	    	<?php $this->flotReport->Render(); ?>
	   	</div>
	   	
	   	<br/><br/>
	   	
		<div id=FlotDtg>   	
   			<?php $this->dtgFlotDataGrid->Render(); ?>
   		</div>	
   	
	<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>