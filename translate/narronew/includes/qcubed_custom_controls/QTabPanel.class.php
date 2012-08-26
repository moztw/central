 <?php
    class QTabPanel extends QPanel {

        protected $arrTab;
        protected $arrTabUrl;
        protected $arrTabTitle;
        protected $strFloat;
        protected $intSelectedTab = 0;
        protected $blnUseAjax = true;

        public function __construct($objParentObject, $strControlId = null) {
            parent::__construct($objParentObject, $strControlId);

        }

        public function addTab($objPanel, $strTitle, $strUrl = null) {
            $objPanel->CssClass = 'tabs-container';
            $intTabCount = count($this->arrTab);
            $this->arrTab[$intTabCount] = $objPanel;
            $this->arrTabTitle[$intTabCount] = $strTitle;
            $this->arrTabUrl[$intTabCount] = $strUrl;
        }

        public function replaceTab($objPanel, $strTitle, $strUrl = null) {
            foreach($this->arrTabTitle as $intTabNo=>$strTabTitle) {
                if ($strTabTitle == $strTitle)
                break;
            }

            $objPanel->CssClass = 'tabs-container';
            $this->arrTab[$intTabNo] = $objPanel;
            $this->arrTabTitle[$intTabNo] = $strTitle;
            $this->arrTabUrl[$intTabNo] = $strUrl;
        }

        public function removeTabByTitle($strTitle) {
            foreach($this->arrTabTitle as $intTabIndex=>$strTabTitle) {
                if ($strTabTitle == $strTitle) {
                    unset($this->arrTab[$intTabIndex]);
                    unset($this->arrTabTitle[$intTabIndex]);
                    unset($this->arrTabUrl[$intTabIndex]);
                    $this->blnModified = true;
                    return true;
                }
            }
            return false;
        }

        public function GetControlHtml() {
            $strOutput = '<ul class="tabs-nav">';
            foreach($this->arrTab as $intTabIndex=>$objTabSection) {
                if ($this->strFloat == 'right')
                    $strLiCssClass = 'floatright ';
                else
                    $strLiCssClass = '';

                if (isset($this->arrTabUrl[$intTabIndex])) {
                    $strOutput .= sprintf('<li class="%s"><a href="%s"><span>%s</span></a></li>', $strLiCssClass, $this->arrTabUrl[$intTabIndex], $this->arrTabTitle[$intTabIndex]);
                }
                else {
                    $objLink = new QLinkButton($this);
                    $objLink->Text = sprintf('<span>%s</span>', $this->arrTabTitle[$intTabIndex]);
                    $objLink->HtmlEntities = false;
                    $objLink->ActionParameter = $intTabIndex;
                    if ($this->blnUseAjax)
                        $objLink->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'changeTab'));
                    else
                        $objLink->AddAction(new QClickEvent(), new QServerControlAction($this, 'changeTab'));



                    if ($intTabIndex == $this->intSelectedTab)
                        $strLiCssClass .= 'tabs-selected';

                    $strOutput .= sprintf('<li class="%s">%s</li>', $strLiCssClass, $objLink->Render(false));
                }
            }
            $strOutput .= '</ul>';

            foreach($this->arrTab as $intTabIndex=>$objTabSection) {
                if (!$objTabSection->CssClass)
                    $objTabSection->CssClass = 'tabs-container';

                $objTabSection->Display = ($this->intSelectedTab == $intTabIndex);

                try {
                    $strOutput .= $objTabSection->Render(false);
                }
                catch (Exception $objEx) {
                    throw $objEx;
                }
            }

            $this->strText = $strOutput;
            return parent::GetControlHtml();
        }

        public function changeTab($strFormId, $strControlId, $strParameter) {
            if (isset($this->arrTabUrl[$strParameter]))
                QApplication::Redirect($this->arrTabUrl[$strParameter]);
            else {
                $this->intSelectedTab = $strParameter;
                $this->blnModified = true;
            }
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {
                case "SelectedTab":
                    return $this->arrTab[$this->intSelectedTab];

                default:
                    try {
                        return parent::__get($strName);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "Float":
                    try {
                        $this->strFloat = QType::Cast($mixValue, QType::String);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                case "SelectedTab":
                    try {
                        if (is_integer($mixValue))
                            $this->intSelectedTab = QType::Cast($mixValue, QType::Integer);
                        else
                            foreach($this->arrTabTitle as $intSelectedTab=>$strTabTitle)
                                if ($mixValue == $strTabTitle) {
                                    $this->intSelectedTab = $intSelectedTab;
                                    break;
                                }
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                case "UseAjax":
                    try {
                        $this->blnUseAjax = QType::Cast($mixValue, QType::Boolean);
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