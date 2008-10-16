<?php
	/* Unless otherwise specified, all files in the Qcodo Development Framework
	 * are under the following copyright and licensing policies:
	 * 
	 * Qcodo Development Framework for PHP
	 * http://www.qcodo.com/
	 * 
	 * The Qcodo Development Framework is distributed by Quasidea Development, LLC
	 * under the terms of The MIT License.  More information can be found at
	 * http://www.opensource.org/licenses/mit-license.php
	 * 
	 * Copyright (c) 2001 - 2007, Quasidea Development, LLC
	 * 
	 * Permission is hereby granted, free of charge, to any person obtaining a copy of
	 * this software and associated documentation files (the "Software"), to deal in
	 * the Software without restriction, including without limitation the rights to
	 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
	 * of the Software, and to permit persons to whom the Software is furnished to do
	 * so, subject to the following conditions:
	 * 
	 * The above copyright notice and this permission notice shall be included in all
	 * copies or substantial portions of the Software.
	 * 
	 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	 * SOFTWARE.
	 */

	// Versioning Information
	define('QCODO_VERSION', '0.3.32 (Qcodo Beta 3)');

	// Preload Required Framework Classes
	require(__QCODO_CORE__ . '/framework/QBaseClass.class.php');
	require(__QCODO_CORE__ . '/framework/QExceptions.class.php');
	require(__QCODO_CORE__ . '/framework/QType.class.php');
	require(__QCODO_CORE__ . '/framework/QApplicationBase.class.php');

	// Setup the Error Handler
	require(__QCODO_CORE__ . '/error.inc.php');

	// Setup the Autoloader
	function __autoload($strClassName) {
		QApplication::Autoload($strClassName);
	}

	// Start Output Buffering	
	function __ob_callback($strBuffer) {
		return QApplication::OutputPage($strBuffer);
	}
	ob_start('__ob_callback');

	// Qcodo Signature
	header(sprintf('X-Powered-By: PHP/%s; Qcodo/%s', PHP_VERSION, QCODO_VERSION));

	// Preload Other Framework Classes
	require(__QCODO_CORE__ . '/framework/QDatabaseBase.class.php');
	if (version_compare(PHP_VERSION, '5.2.0', '<'))
		// Use the Legacy (Pre-5.2.0) QDateTime class
		require(__QCODO_CORE__ . '/framework/QDateTime.legacy.class.php');
	else
		// Use the New QDateTime class (which extends PHP DateTime)
		require(__QCODO_CORE__ . '/framework/QDateTime.class.php');

	// Define Classes to be Preloaded on QApplication::Initialize()
	QApplicationBase::$PreloadedClassFile['_enumerations'] = __QCODO_CORE__ . '/qform/_enumerations.inc.php';
	QApplicationBase::$PreloadedClassFile['QControlBase'] = __QCODO_CORE__ . '/qform/QControlBase.class.php';
	QApplicationBase::$PreloadedClassFile['QControl'] = __QCODO__ . '/qform/QControl.class.php';
	QApplicationBase::$PreloadedClassFile['QFormBase'] = __QCODO_CORE__ . '/qform/QFormBase.class.php';
	QApplicationBase::$PreloadedClassFile['QForm'] = __QCODO__ . '/qform/QForm.class.php';
	QApplicationBase::$PreloadedClassFile['_actions'] = __QCODO_CORE__ . '/qform/_actions.inc.php';
	QApplicationBase::$PreloadedClassFile['_events'] = __QCODO_CORE__ . '/qform/_events.inc.php';
	QApplicationBase::$PreloadedClassFile['QQ'] = __QCODO_CORE__ . '/framework/QQuery.class.php';

	// Define ClassFile Locations for FormState Handlers
	QApplicationBase::$ClassFile['QFormStateHandler'] = __QCODO_CORE__ . '/qform_state_handlers/QFormStateHandler.class.php';
	QApplicationBase::$ClassFile['QSessionFormStateHandler'] = __QCODO_CORE__ . '/qform_state_handlers/QSessionFormStateHandler.class.php';
	QApplicationBase::$ClassFile['QFileFormStateHandler'] = __QCODO_CORE__ . '/qform_state_handlers/QFileFormStateHandler.class.php';

	// Define ClassFile Locations for Framework Classes
	QApplicationBase::$ClassFile['QRssFeed'] = __QCODO_CORE__ . '/framework/QRssFeed.class.php';
	QApplicationBase::$ClassFile['QRssImage'] = __QCODO_CORE__ . '/framework/QRssFeed.class.php';
	QApplicationBase::$ClassFile['QRssCategory'] = __QCODO_CORE__ . '/framework/QRssFeed.class.php';
	QApplicationBase::$ClassFile['QRssItem'] = __QCODO_CORE__ . '/framework/QRssFeed.class.php';
	QApplicationBase::$ClassFile['QEmailServer'] = __QCODO_CORE__ . '/framework/QEmailServer.class.php';
	QApplicationBase::$ClassFile['QEmailMessage'] = __QCODO_CORE__ . '/framework/QEmailServer.class.php';
	QApplicationBase::$ClassFile['QMimeType'] = __QCODO_CORE__ . '/framework/QMimeType.class.php';
	QApplicationBase::$ClassFile['QDateTime'] = __QCODO_CORE__ . '/framework/QDateTime.class.php';
	QApplicationBase::$ClassFile['QString'] = __QCODO_CORE__ . '/framework/QString.class.php';
	QApplicationBase::$ClassFile['QStack'] = __QCODO_CORE__ . '/framework/QStack.class.php';
	QApplicationBase::$ClassFile['QCryptography'] = __QCODO_CORE__ . '/framework/QCryptography.class.php';
	QApplicationBase::$ClassFile['QSoapService'] = __QCODO_CORE__ . '/framework/QSoapService.class.php';
	QApplicationBase::$ClassFile['QI18n'] = __QCODO_CORE__ . '/framework/QI18n.class.php';
	QApplicationBase::$ClassFile['QQN'] = __DATAGEN_CLASSES__ . '/QQN.class.php';
	QApplicationBase::$ClassFile['QQueryExpansion'] = __QCODO_CORE__ . '/framework/QQueryExpansion.class.php';

	QApplicationBase::$ClassFile['QCache'] = __QCODO_CORE__ . '/framework/QCache.class.php';
	QApplicationBase::$ClassFile['QDateTimeSpan'] = __QCODO_CORE__ . '/framework/QDateTimeSpan.class.php';

	// Define ClassFile Locations for Qform Classes
	QApplicationBase::$ClassFile['QFontFamily'] = __QCODO_CORE__ . '/qform/QFontFamily.class.php';

	QApplicationBase::$ClassFile['QCalendar'] = __QCODO_CORE__ . '/qform/QCalendar.class.php';
	QApplicationBase::$ClassFile['QDateTimePicker'] = __QCODO_CORE__ . '/qform/QDateTimePicker.class.php';

	QApplicationBase::$ClassFile['QCheckBox'] = __QCODO_CORE__ . '/qform/QCheckBox.class.php';
	QApplicationBase::$ClassFile['QFileControl'] = __QCODO_CORE__ . '/qform/QFileControl.class.php';
	QApplicationBase::$ClassFile['QRadioButton'] = __QCODO_CORE__ . '/qform/QRadioButton.class.php';

	QApplicationBase::$ClassFile['QBlockControl'] = __QCODO_CORE__ . '/qform/QBlockControl.class.php';
	QApplicationBase::$ClassFile['QLabel'] = __QCODO_CORE__ . '/qform/QLabel.class.php';
	QApplicationBase::$ClassFile['QPanel'] = __QCODO_CORE__ . '/qform/QPanel.class.php';
	QApplicationBase::$ClassFile['QControlProxy'] = __QCODO_CORE__ . '/qform/QControlProxy.class.php';
	QApplicationBase::$ClassFile['QDialogBox'] = __QCODO_CORE__ . '/qform/QDialogBox.class.php';

	QApplicationBase::$ClassFile['QImageBase'] = __QCODO_CORE__ . '/qform/QImageBase.class.php';
	QApplicationBase::$ClassFile['QImageLabelBase'] = __QCODO_CORE__ . '/qform/QImageLabelBase.class.php';
	QApplicationBase::$ClassFile['QImageLabel'] = __QCODO__ . '/qform/QImageLabel.class.php';
	QApplicationBase::$ClassFile['QImageControlBase'] = __QCODO_CORE__ . '/qform/QImageControlBase.class.php';
	QApplicationBase::$ClassFile['QImageControl'] = __QCODO__ . '/qform/QImageControl.class.php';

	QApplicationBase::$ClassFile['QFileAsset'] = __QCODO__ . '/qform/QFileAsset.class.php';
	QApplicationBase::$ClassFile['QFileAssetBase'] = __QCODO_CORE__ . '/qform/QFileAssetBase.class.php';
	QApplicationBase::$ClassFile['QFileAssetDialog'] = __QCODO_CORE__ . '/qform/QFileAssetDialog.class.php';

	QApplicationBase::$ClassFile['QControlLabel'] = __QCODO_CORE__ . '/qform/QControlLabel.class.php';

	QApplicationBase::$ClassFile['QActionControl'] = __QCODO_CORE__ . '/qform/QActionControl.class.php';
	QApplicationBase::$ClassFile['QButtonBase'] = __QCODO_CORE__ . '/qform/QButtonBase.class.php';
	QApplicationBase::$ClassFile['QButton'] = __QCODO__ . '/qform/QButton.class.php';
	QApplicationBase::$ClassFile['QImageButton'] = __QCODO_CORE__ . '/qform/QImageButton.class.php';
	QApplicationBase::$ClassFile['QLinkButton'] = __QCODO_CORE__ . '/qform/QLinkButton.class.php';

	QApplicationBase::$ClassFile['QListControl'] = __QCODO_CORE__ . '/qform/QListControl.class.php';
	QApplicationBase::$ClassFile['QListItem'] = __QCODO_CORE__ . '/qform/QListItem.class.php';
	QApplicationBase::$ClassFile['QListBoxBase'] = __QCODO_CORE__ . '/qform/QListBoxBase.class.php';
	QApplicationBase::$ClassFile['QListBox'] = __QCODO__ . '/qform/QListBox.class.php';
	QApplicationBase::$ClassFile['QListItemStyle'] = __QCODO_CORE__ . '/qform/QListItemStyle.class.php';
	QApplicationBase::$ClassFile['QCheckBoxList'] = __QCODO_CORE__ . '/qform/QCheckBoxList.class.php';
	QApplicationBase::$ClassFile['QRadioButtonList'] = __QCODO_CORE__ . '/qform/QRadioButtonList.class.php';
	QApplicationBase::$ClassFile['QTreeNav'] = __QCODO_CORE__ . '/qform/QTreeNav.class.php';
	QApplicationBase::$ClassFile['QTreeNavItem'] = __QCODO_CORE__ . '/qform/QTreeNavItem.class.php';

	QApplicationBase::$ClassFile['QTextBoxBase'] = __QCODO_CORE__ . '/qform/QTextBoxBase.class.php';
	QApplicationBase::$ClassFile['QTextBox'] = __QCODO__ . '/qform/QTextBox.class.php';
	QApplicationBase::$ClassFile['QFloatTextBox'] = __QCODO_CORE__ . '/qform/QFloatTextBox.class.php';
	QApplicationBase::$ClassFile['QIntegerTextBox'] = __QCODO_CORE__ . '/qform/QIntegerTextBox.class.php';
	QApplicationBase::$ClassFile['QWriteBox'] = __QCODO_CORE__ . '/qform/QWriteBox.class.php';

	QApplicationBase::$ClassFile['QPaginatedControl'] = __QCODO_CORE__ . '/qform/QPaginatedControl.class.php';
	QApplicationBase::$ClassFile['QPaginatorBase'] = __QCODO_CORE__ . '/qform/QPaginatorBase.class.php';
	QApplicationBase::$ClassFile['QPaginator'] = __QCODO__ . '/qform/QPaginator.class.php';

	QApplicationBase::$ClassFile['QDataGridBase'] = __QCODO_CORE__ . '/qform/QDataGridBase.class.php';
	QApplicationBase::$ClassFile['QDataGridColumn'] = __QCODO_CORE__ . '/qform/QDataGridColumn.class.php';
	QApplicationBase::$ClassFile['QDataGridRowStyle'] = __QCODO_CORE__ . '/qform/QDataGridRowStyle.class.php';
	QApplicationBase::$ClassFile['QDataGrid'] = __QCODO__ . '/qform/QDataGrid.class.php';

	QApplicationBase::$ClassFile['QDataRepeater'] = __QCODO_CORE__ . '/qform/QDataRepeater.class.php';

	QApplicationBase::$ClassFile['QWaitIcon'] = __QCODO_CORE__ . '/qform/QWaitIcon.class.php';
	QApplicationBase::$ClassFile['QControlGrouping'] = __QCODO_CORE__ . '/qform/QControlGrouping.class.php';
	QApplicationBase::$ClassFile['QDropZoneGrouping'] = __QCODO_CORE__ . '/qform/QDropZoneGrouping.class.php';



	// Special Print Functions / Shortcuts
	// NOTE: These are simply meant to be shortcuts to actual Qcodo functional
	// calls to make your templates a little easier to read.  By no means do you have to
	// use them.  Your templates can just as easily make the fully-named method/function calls.
		/**
		 * Standard Print function.  To aid with possible cross-scripting vulnerabilities,
		 * this will automatically perform QApplication::HtmlEntities() unless otherwise specified.
		 *
		 * @param string $strString string value to print
		 * @param boolean $blnHtmlEntities perform HTML escaping on the string first
		 */
		function _p($strString, $blnHtmlEntities = true) {
			// Standard Print
			if ($blnHtmlEntities && (gettype($strString) != 'object'))
				print(QApplication::HtmlEntities($strString));
			else
				print($strString);
		}

		/**
		 * Standard Print as Block function.  To aid with possible cross-scripting vulnerabilities,
		 * this will automatically perform QApplication::HtmlEntities() unless otherwise specified.
		 * 
		 * Difference between _b() and _p() is that _b() will convert any linebreaks to <br/> tags.
		 * This allows _b() to print any "block" of text that will have linebreaks in standard HTML.
		 *
		 * @param string $strString
		 * @param boolean $blnHtmlEntities
		 */
		function _b($strString, $blnHtmlEntities = true) {
			// Text Block Print
			if ($blnHtmlEntities && (gettype($strString) != 'object'))
				print(nl2br(QApplication::HtmlEntities($strString)));
			else
				print(nl2br($strString));
		}

		/**
		 * Standard Print-Translated function.  Note: Because translation typically
		 * occurs on coded text strings, NO HTML ESCAPING will be performed on the string.
		 * 
		 * Uses QApplication::Translate() to perform the translation (if applicable)
		 *
		 * @param string $strString string value to print via translation
		 */
		function _t($strString) {
			// Print, via Translation (if applicable)
			print(QApplication::Translate($strString));
		}

		function _i($intNumber) {
			// Not Yet Implemented
			// Print Integer with Localized Formatting
		}

		function _f($intNumber) {
			// Not Yet Implemented
			// Print Float with Localized Formatting
		}

		function _c($strString) {
			// Not Yet Implemented
			// Print Currency with Localized Formatting
		}
	//////////////////////////////////////
?>