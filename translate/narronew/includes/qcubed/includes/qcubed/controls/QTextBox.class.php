<?php
	/**
 	 * @package Controls
 	 *
 	 * @property boolean $SafeHtml whether to allow <, >, ", ', default false
 	 */
	class QTextBox extends QTextBoxBase {
		///////////////////////////
		// TextBox Preferences
		///////////////////////////

		// Feel free to specify global display preferences/defaults for all QTextBox controls
		protected $strCssClass = 'textbox';
//		protected $strFontNames = QFontFamily::Verdana;
//		protected $strFontSize = '12px';
//		protected $strWidth = '250px';

		protected $blnSafeHtml = false;
		
		public function Validate() {
		    $blnResult = parent::Validate();
		    if ($blnResult == false) return false;
		    
		    if (
		        $this->blnSafeHtml == true &&
		        (
		            strpos($this->strText, '"') ||
		            strpos($this->strText, "'") ||
		            strpos($this->strText, '<') ||
		            strpos($this->strText, '>')
	            )
            ) {
		        $this->strValidationError = t('The following characters are not allowed: &apos;, &quot;, &gt;, &lt;');
		        return false;
		    }
		    
		    return true;
		}
		
		public function __set($strName, $mixValue) {
		    $this->blnModified = true;
		
		    switch ($strName) {
		        case "SafeHtml":
		            try {
		                $this->blnSafeHtml = QType::Cast($mixValue, QType::Boolean);
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