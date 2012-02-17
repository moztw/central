<?php
    class QEnterKeyEvent extends QKeyDownEvent {
        protected $strCondition = 'event.keyCode == 13';
    }
    class QEscapeKeyEvent extends QKeyDownEvent {
        protected $strCondition = 'event.keyCode == 27';
    }
    class QUpArrowKeyEvent extends QKeyDownEvent {
        protected $strCondition = 'event.keyCode == 38';
    }
    class QDownArrowKeyEvent extends QKeyDownEvent {
        protected $strCondition = 'event.keyCode == 40';
    }
?>