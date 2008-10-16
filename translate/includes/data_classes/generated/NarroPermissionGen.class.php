<?php
	/**
	 * The abstract NarroPermissionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroPermission subclass which
	 * extends this NarroPermissionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroPermission class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroPermissionGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroPermission from PK Info
		 * @param integer $intPermissionId
		 * @return NarroPermission
		 */
		public static function Load($intPermissionId) {
			// Use QuerySingle to Perform the Query
			return NarroPermission::QuerySingle(
				QQ::Equal(QQN::NarroPermission()->PermissionId, $intPermissionId)
			);
		}

		/**
		 * Load all NarroPermissions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroPermission[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroPermission::QueryArray to perform the LoadAll query
			try {
				return NarroPermission::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroPermissions
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroPermission::QueryCount to perform the CountAll query
			return NarroPermission::QueryCount(QQ::All());
		}



		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroPermission-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_permission');
			NarroPermission::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_permission` AS `narro_permission`');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				$objConditions->UpdateQueryBuilder($objQueryBuilder);

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if (!is_array($objOptionalClauses))
					throw new QCallerException('Optional Clauses must be a QQ::Clause() or an array of QQClause objects');
				foreach ($objOptionalClauses as $objClause)
					$objClause->UpdateQueryBuilder($objQueryBuilder);
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single NarroPermission object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroPermission the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroPermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroPermission object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroPermission::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroPermission objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroPermission[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroPermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroPermission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroPermission objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroPermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_permission_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroPermission-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroPermission::GetSelectFields($objQueryBuilder);
				NarroPermission::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return NarroPermission::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroPermission
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_permission`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`permission_id` AS ' . $strAliasPrefix . 'permission_id`');
			$objBuilder->AddSelectItem($strTableName . '.`permission_name` AS ' . $strAliasPrefix . 'permission_name`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroPermission from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroPermission::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroPermission
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intPermissionId == $objDbRow->GetColumn($strAliasPrefix . 'permission_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_permission__';


				if ((array_key_exists($strAliasPrefix . 'narrouserpermissionaspermission__user_permission_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionaspermission__user_permission_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserPermissionAsPermissionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserPermissionAsPermissionArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaspermission__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserPermissionAsPermissionArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserPermissionAsPermissionArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaspermission__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_permission__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroPermission object
			$objToReturn = new NarroPermission();
			$objToReturn->__blnRestored = true;

			$objToReturn->intPermissionId = $objDbRow->GetColumn($strAliasPrefix . 'permission_id', 'Integer');
			$objToReturn->strPermissionName = $objDbRow->GetColumn($strAliasPrefix . 'permission_name', 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_permission__';




			// Check for NarroUserPermissionAsPermission Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionaspermission__user_permission_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserpermissionaspermission__user_permission_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserPermissionAsPermissionArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaspermission__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserPermissionAsPermission = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaspermission__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroPermissions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroPermission[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null) {
			$objToReturn = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroPermission::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroPermission::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroPermission object,
		 * by PermissionId Index(es)
		 * @param integer $intPermissionId
		 * @return NarroPermission
		*/
		public static function LoadByPermissionId($intPermissionId) {
			return NarroPermission::QuerySingle(
				QQ::Equal(QQN::NarroPermission()->PermissionId, $intPermissionId)
			);
		}
			
		/**
		 * Load a single NarroPermission object,
		 * by PermissionName Index(es)
		 * @param string $strPermissionName
		 * @return NarroPermission
		*/
		public static function LoadByPermissionName($strPermissionName) {
			return NarroPermission::QuerySingle(
				QQ::Equal(QQN::NarroPermission()->PermissionName, $strPermissionName)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroPermission
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_permission` (
							`permission_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strPermissionName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intPermissionId = $objDatabase->InsertId('narro_permission', 'permission_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_permission`
						SET
							`permission_name` = ' . $objDatabase->SqlVariable($this->strPermissionName) . '
						WHERE
							`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

				/**
		 * Delete this NarroPermission
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroPermission with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_permission`
				WHERE
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '');
		}

		/**
		 * Delete all NarroPermissions
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_permission`');
		}

		/**
		 * Truncate narro_permission table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_permission`');
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'PermissionId':
					/**
					 * Gets the value for intPermissionId (Read-Only PK)
					 * @return integer
					 */
					return $this->intPermissionId;

				case 'PermissionName':
					/**
					 * Gets the value for strPermissionName (Unique)
					 * @return string
					 */
					return $this->strPermissionName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroUserPermissionAsPermission':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsPermission (Read-Only)
					 * if set due to an expansion on the narro_user_permission.permission_id reverse relationship
					 * @return NarroUserPermission
					 */
					return $this->_objNarroUserPermissionAsPermission;

				case '_NarroUserPermissionAsPermissionArray':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsPermissionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_permission.permission_id reverse relationship
					 * @return NarroUserPermission[]
					 */
					return (array) $this->_objNarroUserPermissionAsPermissionArray;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'PermissionName':
					/**
					 * Sets the value for strPermissionName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPermissionName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS
		///////////////////////////////

			
		
		// Related Objects' Methods for NarroUserPermissionAsPermission
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserPermissionsAsPermission as an array of NarroUserPermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserPermission[]
		*/ 
		public function GetNarroUserPermissionAsPermissionArray($objOptionalClauses = null) {
			if ((is_null($this->intPermissionId)))
				return array();

			try {
				return NarroUserPermission::LoadArrayByPermissionId($this->intPermissionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserPermissionsAsPermission
		 * @return int
		*/ 
		public function CountNarroUserPermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				return 0;

			return NarroUserPermission::CountByPermissionId($this->intPermissionId);
		}

		/**
		 * Associates a NarroUserPermissionAsPermission
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function AssociateNarroUserPermissionAsPermission(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsPermission on this NarroPermission with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroUserPermissionAsPermission
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function UnassociateNarroUserPermissionAsPermission(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this NarroPermission with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`permission_id` = null
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Unassociates all NarroUserPermissionsAsPermission
		 * @return void
		*/ 
		public function UnassociateAllNarroUserPermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this unsaved NarroPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`permission_id` = null
				WHERE
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserPermissionAsPermission
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserPermissionAsPermission(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this NarroPermission with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserPermissionsAsPermission
		 * @return void
		*/ 
		public function DeleteAllNarroUserPermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsPermission on this unsaved NarroPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_permission.permission_id
		 * @var integer intPermissionId
		 */
		protected $intPermissionId;
		const PermissionIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_permission.permission_name
		 * @var string strPermissionName
		 */
		protected $strPermissionName;
		const PermissionNameMaxLength = 128;
		const PermissionNameDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroUserPermissionAsPermission object
		 * (of type NarroUserPermission), if this NarroPermission object was restored with
		 * an expansion on the narro_user_permission association table.
		 * @var NarroUserPermission _objNarroUserPermissionAsPermission;
		 */
		private $_objNarroUserPermissionAsPermission;

		/**
		 * Private member variable that stores a reference to an array of NarroUserPermissionAsPermission objects
		 * (of type NarroUserPermission[]), if this NarroPermission object was restored with
		 * an ExpandAsArray on the narro_user_permission association table.
		 * @var NarroUserPermission[] _objNarroUserPermissionAsPermissionArray;
		 */
		private $_objNarroUserPermissionAsPermissionArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;



		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroPermission"><sequence>';
			$strToReturn .= '<element name="PermissionId" type="xsd:int"/>';
			$strToReturn .= '<element name="PermissionName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroPermission', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroPermission'] = NarroPermission::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroPermission::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroPermission();
			if (property_exists($objSoapObject, 'PermissionId'))
				$objToReturn->intPermissionId = $objSoapObject->PermissionId;
			if (property_exists($objSoapObject, 'PermissionName'))
				$objToReturn->strPermissionName = $objSoapObject->PermissionName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroPermission::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroPermission extends QQNode {
		protected $strTableName = 'narro_permission';
		protected $strPrimaryKey = 'permission_id';
		protected $strClassName = 'NarroPermission';
		public function __get($strName) {
			switch ($strName) {
				case 'PermissionId':
					return new QQNode('permission_id', 'integer', $this);
				case 'PermissionName':
					return new QQNode('permission_name', 'string', $this);
				case 'NarroUserPermissionAsPermission':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionaspermission', 'reverse_reference', 'permission_id');

				case '_PrimaryKeyNode':
					return new QQNode('permission_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroPermission extends QQReverseReferenceNode {
		protected $strTableName = 'narro_permission';
		protected $strPrimaryKey = 'permission_id';
		protected $strClassName = 'NarroPermission';
		public function __get($strName) {
			switch ($strName) {
				case 'PermissionId':
					return new QQNode('permission_id', 'integer', $this);
				case 'PermissionName':
					return new QQNode('permission_name', 'string', $this);
				case 'NarroUserPermissionAsPermission':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionaspermission', 'reverse_reference', 'permission_id');

				case '_PrimaryKeyNode':
					return new QQNode('permission_id', 'integer', $this);
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