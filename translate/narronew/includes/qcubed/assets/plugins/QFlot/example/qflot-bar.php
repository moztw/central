<?php

require('../../../../includes/configuration/prepend.inc.php');

class BarForm extends QForm {
	public $flotReport;
	public $arrData;

	protected function Form_Create() {
		// Sample data
		$this->arrData = array(
			"Intro" => array( //intro = label
					1 => 89.2, // 1 is the x-axis position; 89.2 is the y-axis value
			),
			"Beginner" => array(
					2 => 45
			),
			"Intermediate" => array(
					3 => 32.12
			),
			"Advanced" => array(
					4 => 4.8
			)
		);
				
		$this->flotReport = new QFlot($this);	
		$this->flotReport->DisplayVariables = true;
		$this->flotReport->YMin = 0;
		$this->flotReport->YMax = 100;
		$this->flotReport->YTickDecimals = 0;
		$this->flotReport->XTickDecimals = 0;
		$this->flotReport->Width = 780;
		$this->flotReport->XMax = count($this->arrData) + 1;
		$this->flotReport->Name = "Completed Training Levels";
		
		foreach($this->arrData as $Serie => $Data){
			$tempSerie = new QFlotSeries($Serie);
			$tempSerie->Bars = true;
			$tempSerie->DataSet = $Data;
			$this->flotReport->AddSeries($tempSerie);
		}
	}
}

BarForm::Run("BarForm");
?>
