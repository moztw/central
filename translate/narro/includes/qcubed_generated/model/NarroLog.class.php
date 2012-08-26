<?php
	require(__MODEL_GEN__ . '/NarroLogGen.class.php');

	/**
	 * The NarroLog class defined here contains any
	 * customized code for the NarroLog class in the
	 * Object Relational Model.  It represents the "narro_log" table
	 * in the database, and extends from the code generated abstract NarroLogGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package Narro
	 * @subpackage DataObjects
	 *
	 */
	class NarroLog extends NarroLogGen {
	    const PRIORITY_DEBUG = 0;
	    const PRIORITY_INFO = 1;
	    const PRIORITY_WARN = 2;
	    const PRIORITY_ERROR = 3;
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objNarroLog->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('NarroLog Object %s',  $this->intLogId);
		}
		
		public function __get($strName) {
			switch ($strName) {

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
?>