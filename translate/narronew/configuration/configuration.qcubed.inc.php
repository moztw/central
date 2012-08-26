<?php
if (!defined('SERVER_INSTANCE')) {
    require_once(dirname(__FILE__) . '/configuration.narro.inc.php');
    define ('ALLOW_REMOTE_ADMIN', true);
    define ('__QCUBED_FRAMEWORK_PATH__', __NARRO_INCLUDES__ . '/qcubed');
    define ('__INCLUDES__', __QCUBED_FRAMEWORK_PATH__ . '/includes');
    define ('__CONFIGURATION__', __DOCROOT__ . __SUBDIRECTORY__ . '/configuration');
    define ('__URL_REWRITE__', 'none');
    define ('__QCUBED__', __INCLUDES__ . '/qcubed');
    define ('__PLUGINS__', __QCUBED__ . '/plugins');
    define ('__CACHE__', __NARRO_DATA__ . '/cache');
    define ('__QCUBED_CORE__', __INCLUDES__ . '/qcubed/_core');
    define ('__MODEL__', __NARRO_INCLUDES__ . '/qcubed_generated/model' );
    define ('__MODEL_GEN__', __MODEL__ . '/generated' );
    define ('__META_CONTROLS__', __NARRO_INCLUDES__ . '/qcubed_generated/meta_controls' );
    define ('__META_CONTROLS_GEN__', __META_CONTROLS__ . '/generated' );
    define ('__FORM_DRAFTS__', __SUBDIRECTORY__ . '/drafts');
    define ('__PANEL_DRAFTS__', __SUBDIRECTORY__ . '/drafts/panels');
    define ('__FORMBASE_CLASSES__', __NARRO_INCLUDES__ . '/qcubed_generated/formbase_classes_generated');
    define ('__JS_ASSETS__', __SUBDIRECTORY__ . '/includes/qcubed/assets/_core/js');
    define ('__CSS_ASSETS__', __SUBDIRECTORY__ . '/includes/qcubed/assets/_core/css');
    define ('__IMAGE_ASSETS__', __SUBDIRECTORY__ . '/includes/qcubed/assets/_core/images');
    define ('__PHP_ASSETS__', __SUBDIRECTORY__ . '/includes/qcubed/assets/_core/php');
    define ('__PLUGIN_ASSETS__', __SUBDIRECTORY__ . '/includes/qcubed/assets/plugins');
    define ('__JQUERY_BASE__',  'jquery/jquery.min.js');
    define ('__JQUERY_EFFECTS__',   'jquery/jquery-ui.custom.min.js');
    if (!defined('__JQUERY_CSS__'))
        define ('__JQUERY_CSS__', 'jquery-ui-themes/redmond/jquery-ui-1.8.16.custom.css');
    define ('__DEVTOOLS__', __PHP_ASSETS__ . '/_devtools');
    define ('__EXAMPLES__', __PHP_ASSETS__ . '/examples');
    define ('__QI18N_PO_PATH__', __QCUBED__ . '/i18n');

    if ((function_exists('date_default_timezone_set')) && (!ini_get('date.timezone')))
        date_default_timezone_set('America/Los_Angeles');

    define('__FORM_STATE_HANDLER__', 'QFileFormStateHandler');
    define('__FILE_FORM_STATE_HANDLER_PATH__', __NARRO_DATA__ . '/formstate');
    define('ERROR_PAGE_PATH', __PHP_ASSETS__ . '/error_page.php');
    define('ERROR_LOG_PATH', __NARRO_DATA__ . '/error_logs');

    if (SERVER_INSTANCE == 'prod') {
        define('ERROR_LOG_FLAG', true);

        // To enable the display of "Friendly" error pages and messages, define them here (path MUST be relative from the DOCROOT)
        define('ERROR_FRIENDLY_PAGE_PATH', __PHP_ASSETS__ . '/friendly_error_page.php');
        define('ERROR_FRIENDLY_AJAX_MESSAGE', 'Oops!  An error has occurred.\r\n\r\nThe error was logged, and we will take a look into this right away.');
    }
}
?>
