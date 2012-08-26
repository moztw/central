<?php
    class NarroForm extends QForm {
        ///////////////////////////
        // Form Preferences
        ///////////////////////////

        /**
        * If you wish to encrypt the resulting formstate data to be put on the form (via
        * QCryptography), please specify a key to use.  The default cipher and encrypt mode
        * on QCryptography will be used, and because the resulting encrypted data will be
        * sent via HTTP POST, it will be Base64 encoded.
        *
        * @var string EncryptionKey the key to use, or NULL if no encryption is required
        */
        public static $EncryptionKey = null;

        /**
        * The QFormStateHandler to use to handle the actual serialized form.  By default,
        * QFormStateHandler will be used (which simply outputs the entire serialized
        * form data stream to the form), but file- and session- based, or any custom db-
        * based FormState handling can be used as well.
        *
        * @var string FormStateHandler the classname of the FormState handler to use
        */
        public static $FormStateHandler = 'QFileFormStateHandler';

        /**
        * These are the list of core QForm JavaScript files, or JavaScript files needed by
        * a QControl, which QForm should IGNORE trying to load during a RenderBegin() or RenderAjax() call.
        *
        * In production or as a performance tweak, you may want to use the compressed "_qc_packed.js"
        * library (which is a compressed, single file version of ALL the qcodo .js files that is in _core).
        *
        * If you want to do this, MAKE SURE you FIRST MANUALLY do a <script> inclusion of "/assets/js/_core/_qc_packed.js" in
        * your HTML.  Then, you can specify that QForm "ignore" all the other qcodo _core javascripts.
        *
        * @var array
        */
        protected $strIgnoreJavaScriptFileArray = array(
            'calendar.js',
            'control.js',
            'control_dialog.js',
            'control_handle.js',
            'control_move.js',
            'control_resize.js',
            'date_time_picker.js',
            'event.js',
            'listbox.js',
            'logger.js',
            'post.js',
            'qcubed.js',
            'treenav.js',
		    __JQUERY_BASE__,
		    __JQUERY_EFFECTS__
        );

        /**
        * This should be very rarely used.
        *
        * This mechanism acts similarly to the strIgnoreJavascriptFileArray, except it applies to StyleSheets.
        * However, any QControl that specifies a StyleSheet file to include is MEANT to have that property be modified / customized.
        *
        * Therefore, there should be little to no need for this attribute.  However, it is here anyway, just in case.
        *
        * @var array
        */
        protected $strIgnoreStyleSheetFileArray = array(__JQUERY_CSS__);
        // protected $strIgnoreStyleSheetFileArray = array('datagrid.css', 'calendar.css', 'textbox.css', 'listbox.css');

        protected $pnlHeader;
        protected $pnlBreadcrumb;

        protected function Form_Create() {
            $this->pnlHeader = new NarroHeaderPanel($this);
            $this->pnlBreadcrumb = new NarroBreadcrumbPanel($this);
            // Define the Wait Icon -- we need to remember to "RENDER" this wait icon, too!
            $this->objDefaultWaitIcon = new QWaitIcon($this, 'QFormWaitIcon');
            $this->objDefaultWaitIcon->Text = sprintf('<img src="%s/horizontal_loader.gif" alt="Please Wait..."/>', __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__ . '/assets/images');
            $this->objDefaultWaitIcon->TagName = 'div';
        }

        protected function Form_Exit() {
            if (SERVER_INSTANCE == 'dev') {
                global $arrQuery;
                if (count($arrQuery) > 1) {
                    $objFirePhp = FirePHP::getInstance(true);
                    $objFirePhp->table('SQL queries', $arrQuery);
                }
            }
        }
    }
?>