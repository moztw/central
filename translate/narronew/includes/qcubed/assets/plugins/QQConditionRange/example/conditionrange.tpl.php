<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/header.inc.php'); ?>
	<?php $this->RenderBegin(); ?>

	<div class="instructions">
		<h1 class="instruction_title">QQConditionRange: Range query for QQuery</h1>
		Even though QQConditionRange can be used in the context of building any QQuery, its main motivation is its use with the QDataGrid, to allow for range filters.
	  
		So let's take the simple datagrid from the example of 
		<a href="<?php echo __EXAMPLES__ ?>/datagrid/filtering.php">"Adding Filters to Your QDataGrid"</a>, and make 
		the filter on Id column allow ranges. We would like to allow the user to use ranges such as <b>7:10</b> in 
		the filter box. To accomplish this, all we need to do is to replace <b>QQ:Equal</b> by <b>QQConditionRange</b> 
		when setting the <b>Filter</b> property of the column. Try it out on the data grid below. Note that the filter 
		still accepts simple values and treats them as before - it finds the exact matches. We can also do one-sided 
		ranges, such as <b>7:</b> (which means everything greater or equal than 7) or <b>:10</b> (which means 
		everything less or equal than 10). When setting up the <b>QQConditionRange</b> filter you can control if the 
		boundaries of the filter are inclusive or exclusive. You can also control if the values should be trimmed 
		after they are split.
	</div>

		<?php $this->dtgPersons->Render(); ?>

	<?php $this->RenderEnd(); ?>
<?php require(__DOCROOT__ . __EXAMPLES__ . '/includes/footer.inc.php'); ?>
