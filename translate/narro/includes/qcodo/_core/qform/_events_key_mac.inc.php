<?php
    class QEnterKeyEvent extends QKeyPressEvent {
        protected $strCondition = 'event.keyCode == 13';
    }
    class QEscapeKeyEvent extends QKeyPressEvent {
        protected $strCondition = 'event.keyCode == 27';
    }
    class QUpArrowKeyEvent extends QKeyPressEvent {
        protected $strCondition = 'event.keyCode == 38';
    }
    class QDownArrowKeyEvent extends QKeyPressEvent {
        protected $strCondition = 'event.keyCode == 40';
    }
?>