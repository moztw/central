<?php

	class QFlotSeries extends QBaseClass {

		protected $strSeriesName;
		protected $strLabel;
		protected $arrDataSet;
		protected $blnLines;
		protected $blnLinesFill;
		protected $blnBars;
		protected $blnPoints;
		protected $blnXUseTimeStamps;
		protected $blnYUseTimeStamps;
		
		/**
		 * Constructor for this control
		 * @param mixed $objParentObject Parent QForm or QControl that is responsible for rendering this control
		 * @param string $strControlId optional control ID
		 */
		public function __construct($strSeriesName) {
			$this->strSeriesName = $strSeriesName;
			$this->arrDataSet = array();
			// set some defaults
			$this->strLabel = $strSeriesName;
		 	$this->blnLines = true;
			$this->blnLinesFill = false;
			$this->blnBars = false;
			$this->blnPoints = false;
			$this->blnXUseTimeStamps = false;
			$this->blnYUseTimeStamps = false;
		}
		
		public function AddDataPoint($X, $Y) {
			$this->arrDataSet[$X] = $Y;
		}
		
		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				case "DataSet": return $this->arrDataSet;
				case "SeriesName": return $this->strSeriesName;
				case "Label": return $this->strLabel;
				case "LinesFill": return $this->blnLinesFill;
				case "Lines": return $this->blnLines;
				case "Bars": return $this->blnBars;
				case "Points": return $this->blnPoints;
				case "XUseTimeStamps": return $this->blnXUseTimeStamps;
				case "YUseTimeStamps": return $this->blnYUseTimeStamps;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) { $objExc->IncrementOffset(); throw $objExc; }
			}
		}

		/////////////////////////
		// Public Properties: SET
		/////////////////////////
		public function __set($strName, $mixValue) {
			switch ($strName) {

				case "DataSet":
					try {
						$this->arrDataSet = QType::Cast($mixValue, QType::ArrayType);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "Lines":
					try {
						$this->blnLines = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "LinesFill":
					try {
						$this->blnLinesFill = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "Bars":
					try {
						$this->blnBars= QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "Points":
					try {
						$this->blnPoints= QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}		
				case "SeriesName":
					try {
						$this->strSeriesName = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}			
				case "Label":
					try {
						$this->strLabel = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "XUseTimeStamps":
					try {
						$this->blnXUseTimeStamps = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YUseTimeStamps":
					try {
						$this->blnYUseTimeStamps = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}		
				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) { $objExc->IncrementOffset(); throw $objExc; }
			}
		}
	}
?>