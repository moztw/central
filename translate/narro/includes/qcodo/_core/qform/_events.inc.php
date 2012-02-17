<?php
    abstract class QEvent extends QBaseClass {
        protected $strJavaScriptEvent;
        protected $strCondition = null;
        protected $intDelay = 0;

        public function __construct($intDelay = 0, $strCondition = null) {
            try {
                if ($intDelay)
                    $this->intDelay = QType::Cast($intDelay, QType::Integer);
                if ($strCondition) {
                    if ($this->strCondition)
                        $this->strCondition = sprintf('(%s) && (%s)', $this->strCondition, $strCondition);
                    else
                        $this->strCondition = QType::Cast($strCondition, QType::String);
                }
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        public function __get($strName) {
            switch ($strName) {
                case 'JavaScriptEvent':
                    return $this->strJavaScriptEvent;
                case 'Condition':
                    return $this->strCondition;
                case 'Delay':
                    return $this->intDelay;
                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }

    class QBlurEvent extends QEvent {
        protected $strJavaScriptEvent = 'onblur';
    }

    class QChangeEvent extends QEvent {
        protected $strJavaScriptEvent = 'onchange';
    }

    class QClickEvent extends QEvent {
        protected $strJavaScriptEvent = 'onclick';
    }

    class QDoubleClickEvent extends QEvent {
        protected $strJavaScriptEvent = 'ondblclick';
    }

    class QDragDropEvent extends QEvent {
        protected $strJavaScriptEvent = 'ondragdrop';
    }

    class QFocusEvent extends QEvent {
        protected $strJavaScriptEvent = 'onfocus';
    }

    class QKeyDownEvent extends QEvent {
        protected $strJavaScriptEvent = 'onkeydown';
    }

    class QKeyPressEvent extends QEvent {
        protected $strJavaScriptEvent = 'onkeypress';
    }

    class QKeyUpEvent extends QEvent {
        protected $strJavaScriptEvent = 'onkeyup';
    }

    class QMouseDownEvent extends QEvent {
        protected $strJavaScriptEvent = 'onmousedown';
    }

    class QMouseMoveEvent extends QEvent {
        protected $strJavaScriptEvent = 'onmousemove';
    }

    class QMouseOutEvent extends QEvent {
        protected $strJavaScriptEvent = 'onmouseout';
    }

    class QMouseOverEvent extends QEvent {
        protected $strJavaScriptEvent = 'onmouseover';
    }

    class QMouseUpEvent extends QEvent {
        protected $strJavaScriptEvent = 'onmouseup';
    }

    class QMoveEvent extends QEvent {
        protected $strJavaScriptEvent = 'onqcodomove';
    }

    class QResizeEvent extends QEvent {
        protected $strJavaScriptEvent = 'onqcodoresize';
    }

    class QSelectEvent extends QEvent {
        protected $strJavaScriptEvent = 'onselect';
    }

    // Key-Specific Events (EnterKey, EscapeKey, UpArrowKey, DownArrowKey, etc.)
    if (QApplication::IsBrowser(QBrowserType::Macintosh)) {
        require_once('_events_key_mac.inc.php');
    } else {
        require_once('_events_key_others.inc.php');
    }
?>