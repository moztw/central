<?php

class QSlidePaginator extends QPaginatorBase {
	
	protected $txtPageNumber;
	
	public function __construct($objParentObject, $strControlId = null) {
		parent::__construct($objParentObject, $strControlId);
		
		$this->AddJavascriptFile(__JQUERY_BASE__);
		$this->AddPluginJavascriptFile("QSlidePaginator", "jquery.dimensions.js");
		$this->AddPluginJavascriptFile("QSlidePaginator", "ui.mouse.js");
		$this->AddPluginJavascriptFile("QSlidePaginator", "ui.slider.js");

		$this->AddPluginCssFile("QSlidePaginator", "slider.css");
	}

	protected $strCssClassSlider = 'ui-slider-1';
	protected $strCssClassHandle = 'ui-slider-handle';
	
	public function GetControlHtml() {
		$intPageNumber = max($this->intPageNumber, 1);
		$intNumberOfPages = max($this->PageCount, 1);
		$this->objPaginatedControl->DataBind();

		$strStyle = $this->GetStyleAttributes();
		if ($strStyle)
			$strStyle = sprintf(' style="%s"', $strStyle);
				
		$strToReturn = sprintf('<div id="%s" class="slide-paginator">', $this->strControlId);
		
		$this->strActionParameter = 'Text to change'; // some random text
		$strAction = str_replace("'{$this->strActionParameter}'", 'parseInt(this.value)', $this->GetActionAttributes()); // replace it with this.value
		$strAction = str_replace('onclick="', '', $strAction); // remove event name
		$strAction = str_replace('"', '', $strAction); // remove end
		
		$strCondition = sprintf('parseInt(this.value) >= 1 && parseInt(this.value) != %s && parseInt(this.value) <= %s', 
			$intPageNumber, 
			$intNumberOfPages); // execute page change only if the page has changed
		
		if (!$this->txtPageNumber) {
			$this->txtPageNumber = new QIntegerTextBox($this);
		}
		$this->txtPageNumber->RemoveAllActions('onchange');
		$this->txtPageNumber->RemoveAllActions('onkeydown');
		$this->txtPageNumber->AddAction(new QChangeEvent(0, $strCondition), new QJavaScriptAction($strAction));
		$this->txtPageNumber->AddAction(new QEnterKeyEvent(0, $strCondition), new QJavaScriptAction($strAction));
		
		$this->txtPageNumber->Text = $intPageNumber;
		
		$strToReturn .= sprintf('<div class="textbox">%s</div>', $this->txtPageNumber->Render(false));
		
		if ($intPageNumber <= 1) {
			$strToReturn .= '<div class="pagenumber right"><div>1</div></div>';
			$strToReturn .= '<div class="previous"></div>';
		} else {
			$this->strActionParameter = 1;
			$strToReturn .= sprintf('<div class="pagenumber right"><a href="" %s>1</a></div>',
				$this->GetActionAttributes());
			$this->strActionParameter = $intPageNumber - 1;
			$strToReturn .= sprintf('<a href="" %s><div class="previous"></div></a>',
				$this->GetActionAttributes());
		}
		
		$strToReturn .= sprintf('<div class="sliderbox"><div id="slider_%s" class="%s"><div class="%s" style=""/></div></div></div>',
			$this->ControlId,
			$this->strCssClassSlider,
			$this->strCssClassHandle);
			
		
		$strAction = str_replace('parseInt(this.value)', 'ui.values', $strAction); // prepare postback script for slider
		
		$strJsSlider = sprintf('$(document).ready(function(){
				$("#slider_%s").slider({ 
					steps: %s,
					minValue: %s,
					maxValue: %s,
					startValue: %s,
					axis: \'%s\',
					slide: function(e,ui) { 
						$("#%s").val(ui.values); 
					},
					change: function(e,ui) { 
						%s
					}
				});
			})',
			$this->ControlId,
			$intNumberOfPages,
			1,
			$intNumberOfPages,
			$intPageNumber,
			'horizontal',
			$this->txtPageNumber->ControlId,
			$strAction);
		
		QApplication::ExecuteJavaScript($strJsSlider);

		if ($intPageNumber >= $intNumberOfPages) {
			$strToReturn .= '<div class="next"></div>';
			$strToReturn .= sprintf('<div class="pagenumber left">%s</div>', $intNumberOfPages);
		} else {
			$this->strActionParameter = $intPageNumber + 1;
			$strToReturn .= sprintf('<a href="" %s><div class="next"></div></a>',
				$this->GetActionAttributes());
			$this->strActionParameter = $intNumberOfPages;
			$strToReturn .= sprintf('<div class="pagenumber left"><a href="" %s>%s</a></div>',
				$this->GetActionAttributes(), $intNumberOfPages);
		}
		$strToReturn .= '</div>';
		return $strToReturn;
	}
	
	public function __get($strName) {
		switch ($strName) {
			// APPEARANCE
			case "CssClassSlider":
				return $this->strCssClassSlider;
			case "CssClassHandle":
				return $this->strCssClassHandle;
			default:
				try {
					return parent::__get($strName);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
		}
	}

	public function __set($strName, $mixValue) {
		switch ($strName) {
			// APPEARANCE
			case "CssClassSlider":
				try {
					$this->strCssClassSlider = QType::Cast($mixValue, QType::String);
					break;
				} catch (QInvalidCastException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
			case "CssClassHandle":
				try {
					$this->strCssClassHandle = QType::Cast($mixValue, QType::String);
					break;
				} catch (QInvalidCastException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
			
			default:
				try {
					parent::__set($strName, $mixValue);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}
				break;
		}
	}
}
?>
