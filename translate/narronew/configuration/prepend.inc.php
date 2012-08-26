<?php
if (!defined('__PREPEND_INCLUDED__')) {
    define('__PREPEND_INCLUDED__', 1);
    require(dirname(__FILE__) . '/configuration.qcubed.inc.php');
    if (get_magic_quotes_gpc())
        require(__QCUBED_CORE__ . '/framework/DisableMagicQuotes.inc.php');
    require(__QCUBED_CORE__ . '/qcubed.inc.php');
    require_once(dirname(__FILE__) . '/QApplication.class.php');

    QDateTime::$DefaultFormat = QDateTime::FormatIso;

    function t($strText) {
        return QApplication::Translate($strText);
    }

    ///////////////////////
    // Setup Error Handling
    ///////////////////////
    if (array_key_exists('SERVER_PROTOCOL', $_SERVER)) {
        set_error_handler('QcodoHandleError', error_reporting());
        set_exception_handler('QcodoHandleException');
    }

    spl_autoload_register(array('QApplication', 'Autoload'));

    QApplication::Initialize();
    QApplication::InitializeDatabaseConnections();
    QApplication::$EncodingType = 'UTF-8';
    NarroUser::GetDatabase()->NonQuery("SET NAMES 'utf8'");
    NarroUser::RegisterPreference('Items per page', 'number', t('How many items are displayed per page'), 10);
    NarroUser::RegisterPreference('Font size', 'option', t('The application font size'), 'medium', array('x-small', 'small', 'medium', 'large', 'x-large'));
    NarroUser::RegisterPreference('Language', 'option', t('The language you are translating to'), QApplication::QueryString('l'), array(QApplication::QueryString('l')));
    NarroUser::RegisterPreference('Application language', 'option', t('The language you want to see Narro in'), (isset(QApplication::$TargetLanguage))?QApplication::$TargetLanguage->LanguageCode:NarroLanguage::SOURCE_LANGUAGE_CODE, array((isset(QApplication::$TargetLanguage))?QApplication::$TargetLanguage->LanguageCode:NarroLanguage::SOURCE_LANGUAGE_CODE));
    NarroUser::RegisterPreference('Special characters', 'text', t('Characters that are not on your keyboard, separated by spaces'), '$€');
    NarroUser::RegisterPreference('Automatically save translations', 'option', t('Save translations when moving to the next text to translate'), 'No', array('Yes', 'No'));
    NarroUser::RegisterPreference('Launch imports and exports in background', 'option', t('Launch imports and exports in background'), 'Yes', array('Yes', 'No'));
    NarroUser::RegisterPreference('Load more texts while scrolling', 'option', t('Whether to load more content if you reach the bottom of the page'), 'No', array('Yes', 'No'));
    if (!isset($argv))
        QApplication::InitializeSession();
    QApplication::InitializeUser();
    QApplication::InitializeLanguage();
    
    
    NarroProject::RegisterPreference('Export translators and reviewers in the file header as a comment', false, 0, 'option', '', 'No', array('Yes', 'No'));

    QApplication::InitializeLogging();
    QApplication::InitializeTranslationEngine();

    QApplication::$PluginHandler = new NarroPluginHandler(dirname(__FILE__) . '/../includes/narro/plugins');
}
?>
