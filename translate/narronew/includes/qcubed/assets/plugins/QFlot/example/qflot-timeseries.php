<?php

require('../../../../includes/configuration/prepend.inc.php');

class TimeSeries extends QForm {
		// QControls to display in the template file
		protected $flotReport;
		protected $dtgFlotDataGrid;

 		protected function Form_Create() {
		// Sample Data in array form
		$gonzaloData = array (
			'Jan-07-2008' => 8,
			'Jan-08-2008' => 1,
			'Jan-09-2008' => 4,
			'Jan-10-2008' => 5,
			'Jan-11-2008' => 5,
			'Jan-14-2008' => 7,
			'Jan-15-2008' => 1,
			'Jan-16-2008' => 4,
			'Jan-21-2008' => 5,
			'Jan-22-2008' => 2,
			'Jan-23-2008' => 7,
			'Jan-24-2008' => 2
		);
		
		// note this data set uses timestamps instead of date strings
		$melissaData = array (
			1199692800 => 3,
			1199779200 => 8,
			1199865600 => 1,
			1199952000 => 6,
			1200038400 => 6,
			1200297600 => 1,
			1200384000 => 7,
			1200470400 => 5,
			1200902400 => 2,
			1200988800 => 4,
			1201075200 => 2,
			1201161600 => 2
		);

		// set graph options
		$this->flotReport = new QFlot($this);
		$this->flotReport->DisplayVariables = true;
		$this->flotReport->VariablesTitle = "Players";
		$this->flotReport->XTimeSeries = true;
		$this->flotReport->YMin = 0;
		$this->flotReport->YTickDecimals = 0;
		$this->flotReport->Width = 780;
	
		// assign a complete array of data, and set some additional graph items
		$gonzaloSeries = new QFlotSeries('Gonzalo');
		$gonzaloSeries->Lines = true;
		$gonzaloSeries->LinesFill = true;
		$gonzaloSeries->Points = true;
		$gonzaloSeries->DataSet = $gonzaloData;
		$this->flotReport->AddSeries($gonzaloSeries);
		
		// assign an array of data, notice that this data has 
		// timestamps instead of date strings
		$melissaSeries = new QFlotSeries('Melissa');
		$melissaSeries->Lines = true;
		$melissaSeries->DataSet = $melissaData;
		$melissaSeries->XUseTimeStamps = true;
		$this->flotReport->AddSeries($melissaSeries);
		
		// show how to add data points individually
		$generatedSeries = new QFlotSeries('Bob');
		$generatedSeries->Lines = true;
		$generatedSeries->Points = true;
		$generatedSeries->XUseTimeStamps = true;
		
		// base x values on series for melissa. note: I could access it from the 
		// variable $melissaData above, but it can also be grabbed from the series
		// object 
		$i = 0;
		foreach(array_keys($melissaSeries->DataSet) as $time) {
			// add each point, with some randomness
			$y = $i + rand(-1,1);
			$generatedSeries->AddDataPoint($time, $y);
			$i++;
		}
		$this->flotReport->AddSeries($generatedSeries);
		
		// show how to add a trend line ( least squares regression )
		// you need to give the makeTrend function the number of secons you want
		// the trend to extend
		$trendSeries = $this->flotReport->MakeTrend($melissaSeries);
		$this->flotReport->AddSeries($trendSeries);
		
		// You can also create a datagrid from the graph data!
		$this->dtgFlotDataGrid = $this->flotReport->CreateDataGrid($this);
	}
}

TimeSeries::Run("TimeSeries");
?>
