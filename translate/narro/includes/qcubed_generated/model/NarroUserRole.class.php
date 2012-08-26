<?php
	require(__MODEL_GEN__ . '/NarroUserRoleGen.class.php');

	/**
	 * The NarroUserRole class defined here contains any
	 * customized code for the NarroUserRole class in the
	 * Object Relational Model.  It represents the "narro_user_role" table
	 * in the database, and extends from the code generated abstract NarroUserRoleGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package Narro
	 * @subpackage DataObjects
	 *
	 */
	class NarroUserRole extends NarroUserRoleGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objNarroUserRole->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('NarroUserRole Object %s',  $this->intUserRoleId);
		}

	}
?>