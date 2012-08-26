<?php
	require(__PLUGINS__ . '/QFirebug/includes/fb.php');

	abstract class QFirebug extends FB {
		public static function OutputDatabaseProfile(QDatabaseBase $objDb = null){
			if ($objDb == null) {
				$objDb = QApplication::$Database[1];
			}
			
			if($objDb->EnableProfiling){	
				$objProfileArray = $objDb->Profile;
				$intCount = count($objProfileArray) / 2;
				if ($intCount == 0) {
					parent::log(QApplication::Translate('No queries were performed.'));
				} else if ($intCount == 1) {
					parent::log(QApplication::Translate('1 query was performed.'));
				} else {
					$log = sprintf(QApplication::Translate('%s queries were performed.'), $intCount);
					parent::log($log);
				}

				for ($intIndex = 0; $intIndex < count($objProfileArray); $intIndex++) {
					$objDebugBacktrace = $objProfileArray[$intIndex]['objBacktrace'];
					$strQuery = $objProfileArray[$intIndex]['strQuery'];
					$dblTimeInfo = $objProfileArray[$intIndex]['dblTimeInfo'];
					
					$objArgs =      (array_key_exists('args',       $objDebugBacktrace)) ? $objDebugBacktrace['args']       : array();
					$strClass =     (array_key_exists('class',      $objDebugBacktrace)) ? $objDebugBacktrace['class']      : null;
					$strType =      (array_key_exists('type',       $objDebugBacktrace)) ? $objDebugBacktrace['type']       : null;
					$strFunction =  (array_key_exists('function',   $objDebugBacktrace)) ? $objDebugBacktrace['function']   : null;
					$strFile =      (array_key_exists('file',       $objDebugBacktrace)) ? $objDebugBacktrace['file']       : null;
					$strLine =      (array_key_exists('line',       $objDebugBacktrace)) ? $objDebugBacktrace['line']       : null;
					
					$called = QApplication::Translate('Called by') . ' ' . $strClass . $strType . $strFunction . '(' . implode(', ', $objArgs) . ')';
					parent::group($called);
						$file = $strFile . ' ' . QApplication::Translate('Line') . ': ' . $strLine;
						parent::log($file,QApplication::Translate('File'));
						parent::log($strQuery,QApplication::Translate('Query'));
						parent::log($dblTimeInfo,QApplication::Translate('Time Info'));
					parent::groupEnd();
				}
			} else {
				parent::log(QApplication::Translate('Profiling was not enabled for this database connection. To enable, ensure that ENABLE_PROFILING is set to TRUE.'));
			}
		}
	}
?>
