<?php
	/**
	 * @package Controls
	 * 
	 * @property string $BackgroundLoadingText A text, html allowed that will be displayed until the panel is rendered
	 * @property boolean $BackgroundLoading Load this panel in background via an Ajax request
	 */
	class QPanel extends QBlockControl {
		///////////////////////////
		// Private Member Variables
		///////////////////////////
		protected $strTagName = 'div';
		protected $strDefaultDisplayStyle = QDisplayStyle::Block;
		protected $blnIsBlockElement = true;
		protected $blnHtmlEntities = false;
		
		protected $blnBackgroundLoading = false;
		protected $strBackgroundLoadingText = '';
		
		public function Render($blnDisplayOutput = true) {
		    // Call RenderHelper
		    $this->RenderHelper(func_get_args(), __FUNCTION__);
		
		    if ($this->blnBackgroundLoading == false) {
    		    try {
    		        $strOutput = $this->GetControlHtml();
    		    } catch (QCallerException $objExc) {
    		        $objExc->IncrementOffset();
    		        throw $objExc;
    		    }
		    }
		    else {
		        $strOutput = $this->strBackgroundLoadingText;
		    }
		
		    // Call RenderOutput, Returning its Contents
		    return $this->RenderOutput($strOutput, $blnDisplayOutput);
		}		
		
		public function __set($strName, $mixValue) {
		    $this->blnModified = true;
		
		    switch ($strName) {
		        case "BackgroundLoadingText":
		            try {
		                $this->strBackgroundLoadingText = QType::Cast($mixValue, QType::String);
		                break;
		            } catch (QInvalidCastException $objExc) {
		                $objExc->IncrementOffset();
		                throw $objExc;
		            }
		            		        
		        case "BackgroundLoading":
		            try {
		                $this->blnBackgroundLoading = QType::Cast($mixValue, QType::Boolean);
		                QApplication::ExecuteJavaScript(sprintf("qc.pA('%s', '%s', 'QChangeEvent', '', '');", $this->Form->FormId, $this->strControlId));
		                $this->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'backgroundLoadingStart'));
		                break;
		            } catch (QInvalidCastException $objExc) {
		                $objExc->IncrementOffset();
		                throw $objExc;
		            }
		
		        default:
		            try {
		            parent::__set($strName, $mixValue);
		            break;
		        } catch (QCallerException $objExc) {
		            $objExc->IncrementOffset();
		            throw $objExc;
		        }
		    }
		}	

		public function backgroundLoadingStart() {
		    $this->blnBackgroundLoading = false;
		    $this->blnModified = true;
		    foreach($this->objActionArray as $strKey=>$objAction) {
		        if ($objAction->MethodName == 'backgroundLoadingStart')
		            unset($this->objActionArray[$strKey]);
		    }
		}
	}
?>