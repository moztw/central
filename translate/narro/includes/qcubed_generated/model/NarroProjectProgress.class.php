<?php
	require(__MODEL_GEN__ . '/NarroProjectProgressGen.class.php');

	/**
	 * The NarroProjectProgress class defined here contains any
	 * customized code for the NarroProjectProgress class in the
	 * Object Relational Model.  It represents the "narro_project_progress" table 
	 * in the database, and extends from the code generated abstract NarroProjectProgressGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 * 
	 * @package Narro
	 * @subpackage DataObjects
	 * 
	 */
	class NarroProjectProgress extends NarroProjectProgressGen {
	    protected $arrPreferences;
	    
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objNarroProjectProgress->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('NarroProjectProgress Object %s',  $this->intProjectProgressId);
		}
		
		public function SetPreferenceValueByName($strName, $strValue) {
		    if (is_null($this->arrPreferences) && $this->strData)
		        $this->arrPreferences = unserialize($this->strData);
		
		    $this->arrPreferences[$strName] = $strValue;
		}
		
		public function GetPreferenceValueByName($strName) {

		    if (is_null($this->arrPreferences) && $this->strData)
		        $this->arrPreferences = unserialize($this->strData);
		
		    if (!is_null($this->arrPreferences) && isset($this->arrPreferences[$strName]))
		        return $this->arrPreferences[$strName];
	        else
		        return NarroProject::$AvailablePreferences[$strName]['default'];
		}
		
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
		    if (isset($this->arrPreferences))
		        $this->strData = serialize($this->arrPreferences);
		
		    return parent::Save($blnForceInsert, $blnForceUpdate);
		}		
	}
?>