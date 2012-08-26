<?php
	class QFlot extends QControl {
		protected $objSeriesArray;
		protected $dtgDataGrid;
		protected $strVariablesTitle;
		protected $blnXTimeSeries;
		protected $blnYTimeSeries;
		protected $fltXMin;
		protected $fltXMax;
		protected $intXTickDecimals;
		protected $fltYMin;
		protected $fltYMax;
		protected $intYTickDecimals;
		protected $blnDisplayVariables;
		protected $strYTickFormatter;
		protected $strXTickFormatter;
		protected $intWidth;
		protected $intHeight;
		protected $strJavaScripts;
		protected $blnShowTooltip;
		protected $blnGridHoverable;
		protected $blnGridClickable;

		private function setJavaScripts() {
			$this->AddJavascriptFile(__JQUERY_BASE__);
			$this->AddPluginJavascriptFile("QFlot", "jquery.flot.pack.js");

			if (QApplication::IsBrowser(QBrowserType::InternetExplorer)) {
				$this->AddPluginJavascriptFile("QFlot", "excanvas.pack.js");
			}
		}

		public function AddSeries(QFlotSeries $objSeries) {
			array_push($this->objSeriesArray, $objSeries);
		}
		
		public function GetSeries($strIndex) {
			return $this->objSeriesArray[$strIndex];
		}
		
		//todo add function to get series by series name
		
		public function CreateDataGrid($objParent) {
			// Define the DataGrid
            $this->dtgDataGrid = new QDataGrid($objParent);
			$i=0;
			foreach($this->objSeriesArray as $objSeries){
				$strX="<?= \$_ITEM[$i] ?>";
				$strY="<?= \$_ITEM[$i+1] ?>";
            	$this->dtgDataGrid->AddColumn(new QDataGridColumn($objSeries->SeriesName . ' (X)', $strX, 'Width=200'));
            	$this->dtgDataGrid->AddColumn(new QDataGridColumn($objSeries->SeriesName . ' (Y)', $strY, 'Width=200'));
				$i = $i + 2;
			}    
            $this->dtgDataGrid->UseAjax = true;
            $this->dtgDataGrid->SetDataBinder('dtgDatagrid_Bind',$this);
   			return $this->dtgDataGrid;
		}
		
		public function dtgDatagrid_Bind() {
			$i=0;
			foreach ($this->objSeriesArray as $objSeries) {
				$j=0;
				$temp = $objSeries->DataSet;
				foreach($temp as $X => $Y) {
					if($this->blnXTimeSeries) {
						if ($objSeries->XUseTimeStamps) {
							$qdtTime = QDateTime::FromTimeStamp($X);
							$Xvalue = $qdtTime->__toString();
						} else {
							$qdtTime = QDateTime::FromTimeStamp(strtotime($X));
							$Xvalue = $qdtTime->__toString();
						}
					} else {
						$Xvalue = $X;
					}
										
					if($this->blnYTimeSeries) {
						if ($objSeries->YUseTimeStamps) {
							$qdtTime = QDateTime::FromTimeStamp($Y);
							$Yvalue = $qdtTime->__toString();
						} else {
							$qdtTime = QDateTime::FromTimeStamp(strtotime($Y));
							$Yvalue = $qdtTime->__toString();
						}
					} else {
						$Yvalue=$Y;
					}
	        		$output[$j][$i] = $Xvalue;
					$output[$j][$i+1] = $Yvalue;
					$j++;
				}
				$i=$i+2;					
			}
			
			if ($objClause = $this->dtgDataGrid->LimitClause) {
		        $output = array_slice($this->arraySeries, $this->dtgDataGrid->LimitClause->Offset, $this->dtgDataGrid->ItemsPerPage);
			}
		    $this->dtgDataGrid->DataSource = $output;
		}
		
		public function MakeTrend($objSourceSeries) {
			$objTrendSeries =  new QFlotSeries($objSourceSeries->SeriesName . ' Trend');
			if ($this->blnXTimeSeries) {
				$objTrendSeries->XUseTimeStamps = true;
			}
			if ($this->blnYTimeSeries) {
				$objTrendSeries->YUseTimeStamps = true;
			}
			
			//Check if we have at least two points
			if(count($objSourceSeries->DataSet) <= 1) {
				return false;
			}
			 
			
			// take a source series and create a new series that is a least squares regression of the original
			$temp = $objSourceSeries->DataSet;
			foreach($temp as $X => $Y) {
				if($this->blnXTimeSeries) {
					// if it is a timeseries, be prepared to take epoch time or time strings
					if ($objSourceSeries->XUseTimeStamps) {
						$XValue = $X;
					} else {
						$qdtTime = QDateTime::FromTimeStamp(strtotime($X));
						$XValue = $qdtTime->Timestamp;
					}
				} else {
					$XValue = $X;
				}
				if($this->blnYTimeSeries) {
					// if it is a timeseries, be prepared to take epoch time or time strings
					if ($objSourceSeries->YUseTimeStamps) {
						$YValue = $Y;
					} else {
						$qdtTime = QDateTime::FromTimeStamp(strtotime($Y));
						$YValue = $qdtTime->Timestamp;
					}
				} else {
					$YValue = $Y;
				}
				$input[] = array($XValue,$YValue);
			}
			// set gradient and y constant for trend line
			list($gradient,$constant) = $this->line($input);
			
			//now loop through source array again, creating trend series. 
			$temp = $objSourceSeries->DataSet;
			foreach($temp as $X => $Y) {
				if($this->blnXTimeSeries) {
					// if it is a timeseries, be prepared to take epoch time or time strings
					if ($objSourceSeries->XUseTimeStamps) {
						$XValue = $X;
					} else {
						$qdtTime = QDateTime::FromTimeStamp(strtotime($X));
						$XValue = $qdtTime->Timestamp;
					}
				} else {
					$XValue = $X;
				}
				if($this->blnYTimeSeries) {
					// if it is a timeseries, be prepared to take epoch time or time strings
					if ($objSourceSeries->YUseTimeStamps) {
						$YValue = $Y;
					} else {
						$qdtTime = QDateTime::FromTimeStamp(strtotime($Y));
						$YValue = $qdtTime->Timestamp;
					}
				} else {
					$YValue = $Y;
				}
				$YValue = $gradient * $XValue + $constant;
				$objTrendSeries->AddDataPoint((string)$XValue,(string)$YValue);
		 	}
				return $objTrendSeries; 
		}

		// returns the gradient and constant for a regression line
		private function line($input) {
			$sumx=0;
			$sumy=0;
			$sumxy=0;
			$sumxx=0;
			$n=count($input);
			$i=0;

			foreach($input as $in){
				$input[$i][2]=($in[0]*$in[1]);
				$input[$i][3]=pow($in[0],2);
				//sums
				$sumx=$sumx+$in[0];
				$sumy=$sumy+$in[1];
				$sumxy=$sumxy+$input[$i][2];
				$sumxx=$sumxx+$input[$i][3];
				$i++;
			}//4each

			$xdivN=$sumx/$n;
			$ydivN=$sumy/$n;
			$gradient=($sumxy-$n*$xdivN*$ydivN)/($sumxx-$n*pow($xdivN,2));
			$constant=$ydivN-$gradient*$xdivN;
			$output=array($gradient,$constant);
			$n=count($input);
			return $output;
			//http://en.wikipedia.org/wiki/Correlation
			//
			/* OU MS284 unit 7 page 41
			ISBN= 7492 2066 2 */
		}

		// calculate a standard deviation
		private function sdv($array){
			$sumx=0;
			$sumxx=0;
			$n=count($array);
			$i=0;
			foreach($array as $in){
				$squares=$in*$in;
				//sums
				$sumx=$sumx+$in;
				$sumxx=$sumxx+$squares;
				$i++;
			}//4each
			$xdivN=$sumx/$n;
			$xxdivN=$sumxx/$n;
			$dsv=pow($xxdivN-$xdivN*$xdivN,.5);
			$output=array($xdivN,$dsv);
			return $output;
			//http://en.wikipedia.org/wiki/Standard_deviation
		}
 
		
		/**
		 * If this control needs to update itself from the $_POST data, the logic to do so
		 * will be performed in this method.
		 */
		public function ParsePostData() {}

		/**
		 * If this control has validation rules, the logic to do so
		 * will be performed in this method.
		 * @return boolean
		 */
		public function Validate() {return true;}
		
		public function Render($blnDisplayOutput = true) {
			// Call RenderHelper
			$this->RenderHelper(func_get_args(), __FUNCTION__);

			try {
				$this->strHtmlBefore = "\n<center><h1>" . $this->strName . "</center></h1>";
				$this->strHtmlBefore.= "<div id=\"" . $this->strControlId . "_flot\" style=\"width:" . $this->intWidth ."px;height:" .  $this->intHeight. "px;\"></div>";
				if($this->blnDisplayVariables){
					$this->strHtmlBefore.= "<div id=\"" . $this->strControlId . "_variables\">";
					if($this->strVariablesTitle)
						$this->strHtmlBefore.= $this->strVariablesTitle;
					$this->strHtmlBefore.= "</div>\n";
				}	
				$strOutput = $this->strHtmlBefore . $this->GetControlHtml();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Call RenderOutput, Returning its Contents
			return $this->RenderOutput($strOutput, $blnDisplayOutput);
		}

		/**
		 * Get the HTML for this Control.
		 * @return string
		 */
		
		public function GetControlHtml(){}
		public function GetEndScript() {

			$strJS = "var " . $this->strControlId . "_datasets = {\n";
			 

			$aryDataSets = null;
			$strXTicks = "";
			foreach($this->objSeriesArray as $objSeries) {
				// build the javascript graph properties for each data series
				// add various options to an array, them implode into a string at the end

				$strGraphProperties = "\t\"" . $objSeries->SeriesName . "\": {\n";;
				$aryGraphProperties = null;

				// first the labels
			    $aryGraphProperties[] = "\t\tlabel: \"" . $objSeries->Label . "\"";

				// Now the Data
				$strDataSet  = "\t\tdata: [\n";
				$aryDataPoints = null;
				
				$temp = $objSeries->DataSet;
			 	foreach($temp as $X => $Y) {
					if($this->blnXTimeSeries) {
						// if it is a timeseries, be prepared to take epoch time or time strings
						if ($objSeries->XUseTimeStamps) {
							$XValue = $X * 1000;
						} else {
							$qdtTime = QDateTime::FromTimeStamp(strtotime($X));
							$XValue = $qdtTime->Timestamp;
							$XValue = $XValue * 1000;
						}
					} else {
						$XValue = $X;
					}

					if($this->blnYTimeSeries) {
						// if it is a timeseries, be prepared to take epoch time or time strings
						if ($objSeries->YUseTimeStamps) {
							$YValue = $Y * 1000;
						} else {
							$qdtTime = QDateTime::FromTimeStamp(strtotime($Y));
							$YValue = $qdtTime->Timestamp;
							$XYalue = $XYalue * 1000;
						}
					} else {
						$YValue = $Y;
					}
					
					$aryDataPoints[] = "\t\t\t\t[" . $XValue . ", " . $YValue . "]";

			 		if($objSeries->Bars){
			 			$aryXTicks[] = "[($XValue + 0.5),'$objSeries->Label (" . round($YValue,1) . "%)']";
			 		}			
			 	}
						 				 	
				$strDataSet .= implode(",\n", $aryDataPoints);
			 	$strDataSet .= "\n\t\t]";
				$aryGraphProperties[] = "$strDataSet";

				// Now the graph options
				if($objSeries->Bars){
				 		$aryGraphProperties[] = "\t\tbars: { show: true }";
				 		$aryGraphProperties[] = "\t\tlegend: { show: false }";
				 }
				$strLineOptions = '';
			 	if($objSeries->Lines){
			 		$strLineOptions.= "\t\tlines: { show: true";
			 		if($objSeries->LinesFill)
			 			$strLineOptions.= ",fill: true";
					$strLineOptions .= "}";
					$aryGraphProperties[] = "$strLineOptions";
				}

				if($objSeries->Points) {
					$aryGraphProperties[] = "\t\tpoints: { show: true }";
				}
				if (isset($aryXTicks)) {
					$strXTicks .= implode(',',$aryXTicks);
				}
				
				$strGraphProperties .= implode(",\n", $aryGraphProperties);
				$strGraphProperties .= "\n\t}";
				$aryDataSets[] = $strGraphProperties;
			 }			 
			 
			if (isset($aryDataSets)) {
				$strJS .= implode(",\n", $aryDataSets);
			}
			$strJS .= "\n}";
		 	$strJS.= "
				var i = 0;
				jQuery.each( " . $this->strControlId . "_datasets, function(key, val) {
				    val.color = i;
				    val.shadowSize = 5;
				    ++i;
				});";			 	
			 	
			    if($this->blnDisplayVariables) {
				    $strJS.= "// insert checkboxes 
								var choiceContainer = jQuery(\"#" . $this->strControlId . "_variables\");\n
								jQuery.each(" . $this->strControlId . "_datasets, function(key, val) {
								choiceContainer.append('<br/><input type=\"checkbox\" name=\"' + key + '\" checked=\"checked\" >' + val.label + '</input>');
								});
								choiceContainer.find(\"input\").click(plotAccordingToChoices);\n";
				}

			    	$strJS.= "
								function plotAccordingToChoices() {
									var data = [];";
			
			    if($this->blnDisplayVariables) {
			    	$strJS.="
								choiceContainer.find(\"input:checked\").each(function () {
									var key = jQuery(this).attr(\"name\");
									if (key && " . $this->strControlId . "_datasets[key])
										data.push(" . $this->strControlId . "_datasets[key]);
									});";
				}
			    else {
			    	$strJS.="
								for(id in datasets)
									data.push(" . $this->strControlId . "_datasets[id]);";	
				}
					$strJS.= "
								if (data.length > 0)
									jQuery.plot(jQuery(\"#" . $this->strControlId ."_flot\"), data, {\n";

			$strJS.=	"\t\t\tyaxis: { ";
		
			if(isset($this->fltYMin))
				$aryYaxis[] = "min: $this->fltYMin";	

			if(isset($this->fltYMax))
				$aryYaxis[] = "max: $this->fltYMax";	
		
			if(isset($this->intYTickDecimals))
		 		$aryYaxis[] = "tickDecimals: $this->intYTickDecimals";	                

		 	if(isset($this->blnYTimeSeries)) {
				$aryYaxis[] = 'mode: "time"';
			}
			
			if(isset($this->strYTickFormatter)) {
				$aryYaxis[] = "tickFormatter: $this->strYTickFormatter"; 
			}			
			
			$strJS .= implode(',', $aryYaxis);

			$strJS .=	" },\n";

            if($this->blnGridClickable || $this->blnGridHoverable){
               if($this->blnGridHoverable)$gridOptions[] = "hoverable: true";
               if($this->blnGridClickable)$gridOptions[] = "clickable: true";
               $strJS.= "\t\tgrid: {" .  implode(',',$gridOptions) . "},";
            }
            
			$strJS.=	"\t\t\txaxis: { ";
			
			if(isset($aryXTicks))
				$aryXaxis[] = "ticks: [" . implode(",",$aryXTicks) . "]\n";
			
			if(isset($this->fltXMin))
				$aryXaxis[] = "min: $this->fltXMin\n";			

			if(isset($this->fltXMax))
				$aryXaxis[] = "max: $this->fltXMax\n";	
				
		 	if(isset($this->intXTickDecimals))
		 		$aryXaxis[] = "tickDecimals: $this->intXTickDecimals\n"; 	
			 			 		
		 	if(isset($this->blnXTimeSeries)) {
				$aryXaxis[] = 'mode: "time"';
			}
			
			if(isset($this->strXTickFormatter)) {
					$aryXaxis[] = "tickFormatter: $this->strXTickFormatter"; 
			}

			if(isset($aryXaxis)) $strJS .= implode(',', $aryXaxis);
			$strJS.=	" },\n";			 		
			$strJS.= "\t\t});
							}
							plotAccordingToChoices();\n\r";

            if($this->blnShowTooltip){
                $strJS.= "function showTooltip(x, y, contents) {
                            jQuery('<div id=\"tooltip\">' + contents + '</div>').css( {
                                position: 'absolute',
                                display: 'none',
                                top: y + 5,
                                left: x + 5,
                                border: '1px solid #fdd',
                                padding: '2px',
                                'background-color': '#fee',
                                opacity: 0.80
                            }).appendTo('body').fadeIn(200);
                        }

                        var previousPoint = null;
                        jQuery(\"#" . $this->strControlId . "_flot" ."\").bind(\"plothover\", function (event, pos, item) {
                            //alert('here');
                            if (item) {
                                    if (previousPoint != item.datapoint) {
                                        previousPoint = item.datapoint;

                                        jQuery(\"#tooltip\").remove();
                                        var x = item.datapoint[0].toFixed(2),
                                            y = item.datapoint[1].toFixed(2);

                                        showTooltip(item.pageX, item.pageY,
                                                    item.series.label + ' = ' + y);
                                    }
                            }
                            else {
                                jQuery(\"#tooltip\").remove();
                                previousPoint = null;
                            }
                        });";
            }
			//QApplication::ExecuteJavaScript($strJS);
			return $strJS;
		}

		/**
		 * Constructor for this control
		 * @param mixed $objParentObject Parent QForm or QControl that is responsible for rendering this control
		 * @param string $strControlId optional control ID
		 */
		public function __construct($objParentObject, $strControlId = null) {
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) { $objExc->IncrementOffset(); throw $objExc; }
			
			$this->intWidth = 500;
			$this->intHeight  = 300;
			$this->objSeriesArray = array();
            $this->setJavaScripts();
		}

		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				//case "DataSet": return $this->arrDataSet;
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
			$this->blnModified = true;

			switch ($strName) {
				case "XTimeSeries":
					try {
						$this->blnXTimeSeries = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YTimeSeries":
					try {
						$this->blnYTimeSeries = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "XMin":
					try {
						$this->fltXMin = QType::Cast($mixValue, QType::Float);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "XMax":
					try {
						$this->fltXMax = QType::Cast($mixValue, QType::Float);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YMin":
					try {
						$this->fltYMin = QType::Cast($mixValue, QType::Float);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YMax":
					try {
						$this->fltYMax = QType::Cast($mixValue, QType::Float);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YTickDecimals":
					try {
						$this->intYTickDecimals = QType::Cast($mixValue, QType::Integer);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "XTickDecimals":
					try {
						$this->intXTickDecimals = QType::Cast($mixValue, QType::Integer);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}	
				case "XTickFormatter":
					try {
						$this->strXTickFormatter = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "YTickFormatter":
					try {
						$this->strYTickFormatter = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "DisplayVariables":
					try {
						$this->blnDisplayVariables = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}	
				case "VariablesTitle":
					try {
						$this->strVariablesTitle = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "Width":
					try {
						$this->intWidth = QType::Cast($mixValue, QType::Integer);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "Height":
					try {
						$this->intHeight = QType::Cast($mixValue, QType::Integer);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "ShowTooltip":
					try {
						$this->blnShowTooltip = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "GridHoverable":
					try {
						$this->blnGridHoverable = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "GridClickable":
					try {
						$this->blnGridClickable = QType::Cast($mixValue, QType::Boolean);
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