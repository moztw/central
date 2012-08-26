<?php

$configPath = dirname(__FILE__) . "/../../configuration";

if (isset($__CONFIG_ONLY__) && $__CONFIG_ONLY__ == true) {
    require_once($configPath . '/configuration.qcubed.inc.php');
} else {
    require_once($configPath . '/prepend.inc.php');
}
?>