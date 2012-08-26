<?php
    /**
	 * @property-write array $Headers
	 *
	 */
	class QTabs extends QTabsBase
	{
		protected $objTabHeadersArray = array();
		protected $blnAutoRenderChildren = true;
		
		public function __construct($objParentObject) {
		    parent::__construct($objParentObject, $strControlId);
		    $this->OnSelect = new QJsClosure(
		        sprintf(
		        	"qc.pA('%s', '%s', 'QTabs_SelectEvent', ui.index, 'QFormWaitIcon')",
		        	$this->objForm->FormId,
		        	$this->strControlId,
		            $this->strControlId
	        	),
	        	array('event', 'ui')
        	);
		    
		    
		}
		
		public function ParsePostData() {
		    if ($_POST['Qform__FormControl'] == $this->strControlId && $_POST['Qform__FormEvent'] == 'QTabs_SelectEvent')
		        $this->intSelected = $_POST['Qform__FormParameter'];
		}

		protected function RenderChildren($blnDisplayOutput = true) {
			$strToReturn = $this->GetTabHeaderHtml();

			foreach ($this->GetChildControls() as $objControl) {
				if (!$objControl->Rendered) {
					$renderMethod = $objControl->strPreferedRenderMethod;
					$strToReturn .= '<div>';
					$strToReturn .= $objControl->$renderMethod($blnDisplayOutput);
					$strToReturn .= '</div>';
				}
			}

			if ($blnDisplayOutput) {
				print($strToReturn);
				return null;
			} else
				return $strToReturn;
		}

		protected function GetTabHeaderHtml() {
			$strResult = '<ul>';
			$childControls = $this->GetChildControls();
			for ($i = 0, $cnt = count($childControls); $i < $cnt; ++$i) {
				$strControlId = $childControls[$i]->ControlId;
				if (strstr($this->objTabHeadersArray[$i], '</a>'))
				    $strResult .= '<li><a href="#'.$strControlId.'" style="display:none">';
				else
				    $strResult .= '<li><a href="#'.$strControlId.'">';
				
				if (array_key_exists($key = $strControlId, $this->objTabHeadersArray) ||
						array_key_exists($key = $i, $this->objTabHeadersArray)) {
					$objHeader = $this->objTabHeadersArray[$key];
					if ($objHeader instanceof QControl) {
						$strResult .= $objHeader->GetControlHtml();
					} else {
						$strResult .= (string)$objHeader;
					}
				} else {
					$strResult .= 'Tab '. ($i+1);
				}
			    $strResult .= '</a></li>';
			}

			$strResult .= '</ul>';
			return $strResult;
		}

		/**
		 * Set the tab header for a tab
		 * @param integer|QControl|string $mixHeaderIndicator either the 0-based index of the header, or the section control or that control's id
		 * @param string|QControl $mixHeader string or control to render as the tab header
		 * @return void
		 */
		public function SetHeader($mixHeaderIndicator, $mixHeader) {
			$key = ($mixHeaderIndicator instanceof QControl) ? $mixHeaderIndicator->ControlId : $mixHeaderIndicator;
			$this->objTabHeadersArray[$key] = $mixHeader;
		}

		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				case 'Headers':
					try {
						$this->objTabHeadersArray = QType::Cast($mixValue, QType::ArrayType);
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
		
		public function __get($strName) {
		    switch ($strName) {
		        case 'SelectedTab':
		            foreach($this->GetChildControls() as $intIdx=>$ctl) {
		                if ($intIdx == $this->Selected)
		                    return $ctl;
		            }
		        default:
		            try {
		            return parent::__get($strName);
		        } catch (QCallerException $objExc) {
		            $objExc->IncrementOffset();
		            throw $objExc;
		        }
		    }
		}
		
		public function OnSelect($strFormId, $strControlId, $strParameter) {
		}
	}
?>