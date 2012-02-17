<?php
	/**
	 * The abstract NarroRoleGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroRole subclass which
	 * extends this NarroRoleGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroRole class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroRoleGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroRole from PK Info
		 * @param integer $intRoleId
		 * @return NarroRole
		 */
		public static function Load($intRoleId) {
			// Use QuerySingle to Perform the Query
			return NarroRole::QuerySingle(
				QQ::Equal(QQN::NarroRole()->RoleId, $intRoleId)
			);
		}

		/**
		 * Load all NarroRoles
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRole[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroRole::QueryArray to perform the LoadAll query
			try {
				return NarroRole::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroRoles
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroRole::QueryCount to perform the CountAll query
			return NarroRole::QueryCount(QQ::All());
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
			$objDatabase = NarroRole::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroRole-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_role');
			NarroRole::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_role` AS `narro_role`');

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
		 * Static Qcodo Query method to query for a single NarroRole object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroRole the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroRole object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroRole::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroRole objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroRole[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroRole::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroRole objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroRole::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_role_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroRole-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroRole::GetSelectFields($objQueryBuilder);
				NarroRole::GetFromFields($objQueryBuilder);

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
			return NarroRole::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroRole
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_role`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`role_id` AS ' . $strAliasPrefix . 'role_id`');
			$objBuilder->AddSelectItem($strTableName . '.`role_name` AS ' . $strAliasPrefix . 'role_name`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroRole from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroRole::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroRole
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intRoleId == $objDbRow->GetColumn($strAliasPrefix . 'role_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_role__';


				if ((array_key_exists($strAliasPrefix . 'narrorolepermissionasrole__role_permission_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrorolepermissionasrole__role_permission_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroRolePermissionAsRoleArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroRolePermissionAsRoleArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionasrole__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroRolePermissionAsRoleArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroRolePermissionAsRoleArray, NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionasrole__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserroleasrole__user_role_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasrole__user_role_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsRoleArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserRoleAsRoleArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasrole__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserRoleAsRoleArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserRoleAsRoleArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasrole__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_role__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroRole object
			$objToReturn = new NarroRole();
			$objToReturn->__blnRestored = true;

			$objToReturn->intRoleId = $objDbRow->GetColumn($strAliasPrefix . 'role_id', 'Integer');
			$objToReturn->strRoleName = $objDbRow->GetColumn($strAliasPrefix . 'role_name', 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_role__';




			// Check for NarroRolePermissionAsRole Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrorolepermissionasrole__role_permission_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrorolepermissionasrole__role_permission_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroRolePermissionAsRoleArray, NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionasrole__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroRolePermissionAsRole = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionasrole__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserRoleAsRole Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasrole__user_role_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserroleasrole__user_role_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserRoleAsRoleArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasrole__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserRoleAsRole = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasrole__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroRoles from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroRole[]
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
					$objItem = NarroRole::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroRole::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroRole object,
		 * by RoleId Index(es)
		 * @param integer $intRoleId
		 * @return NarroRole
		*/
		public static function LoadByRoleId($intRoleId) {
			return NarroRole::QuerySingle(
				QQ::Equal(QQN::NarroRole()->RoleId, $intRoleId)
			);
		}
			
		/**
		 * Load a single NarroRole object,
		 * by RoleName Index(es)
		 * @param string $strRoleName
		 * @return NarroRole
		*/
		public static function LoadByRoleName($strRoleName) {
			return NarroRole::QuerySingle(
				QQ::Equal(QQN::NarroRole()->RoleName, $strRoleName)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroRole
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_role` (
							`role_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strRoleName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intRoleId = $objDatabase->InsertId('narro_role', 'role_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_role`
						SET
							`role_name` = ' . $objDatabase->SqlVariable($this->strRoleName) . '
						WHERE
							`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
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
		 * Delete this NarroRole
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroRole with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role`
				WHERE
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '');
		}

		/**
		 * Delete all NarroRoles
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role`');
		}

		/**
		 * Truncate narro_role table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_role`');
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
				case 'RoleId':
					/**
					 * Gets the value for intRoleId (Read-Only PK)
					 * @return integer
					 */
					return $this->intRoleId;

				case 'RoleName':
					/**
					 * Gets the value for strRoleName (Unique)
					 * @return string
					 */
					return $this->strRoleName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroRolePermissionAsRole':
					/**
					 * Gets the value for the private _objNarroRolePermissionAsRole (Read-Only)
					 * if set due to an expansion on the narro_role_permission.role_id reverse relationship
					 * @return NarroRolePermission
					 */
					return $this->_objNarroRolePermissionAsRole;

				case '_NarroRolePermissionAsRoleArray':
					/**
					 * Gets the value for the private _objNarroRolePermissionAsRoleArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_role_permission.role_id reverse relationship
					 * @return NarroRolePermission[]
					 */
					return (array) $this->_objNarroRolePermissionAsRoleArray;

				case '_NarroUserRoleAsRole':
					/**
					 * Gets the value for the private _objNarroUserRoleAsRole (Read-Only)
					 * if set due to an expansion on the narro_user_role.role_id reverse relationship
					 * @return NarroUserRole
					 */
					return $this->_objNarroUserRoleAsRole;

				case '_NarroUserRoleAsRoleArray':
					/**
					 * Gets the value for the private _objNarroUserRoleAsRoleArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_role.role_id reverse relationship
					 * @return NarroUserRole[]
					 */
					return (array) $this->_objNarroUserRoleAsRoleArray;

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
				case 'RoleName':
					/**
					 * Sets the value for strRoleName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRoleName = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for NarroRolePermissionAsRole
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroRolePermissionsAsRole as an array of NarroRolePermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRolePermission[]
		*/ 
		public function GetNarroRolePermissionAsRoleArray($objOptionalClauses = null) {
			if ((is_null($this->intRoleId)))
				return array();

			try {
				return NarroRolePermission::LoadArrayByRoleId($this->intRoleId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroRolePermissionsAsRole
		 * @return int
		*/ 
		public function CountNarroRolePermissionsAsRole() {
			if ((is_null($this->intRoleId)))
				return 0;

			return NarroRolePermission::CountByRoleId($this->intRoleId);
		}

		/**
		 * Associates a NarroRolePermissionAsRole
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/ 
		public function AssociateNarroRolePermissionAsRole(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroRolePermissionAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroRolePermissionAsRole on this NarroRole with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroRolePermissionAsRole
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/ 
		public function UnassociateNarroRolePermissionAsRole(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this NarroRole with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`role_id` = null
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . ' AND
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Unassociates all NarroRolePermissionsAsRole
		 * @return void
		*/ 
		public function UnassociateAllNarroRolePermissionsAsRole() {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this unsaved NarroRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`role_id` = null
				WHERE
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Deletes an associated NarroRolePermissionAsRole
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/ 
		public function DeleteAssociatedNarroRolePermissionAsRole(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this NarroRole with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . ' AND
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Deletes all associated NarroRolePermissionsAsRole
		 * @return void
		*/ 
		public function DeleteAllNarroRolePermissionsAsRole() {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsRole on this unsaved NarroRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`
				WHERE
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserRoleAsRole
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserRolesAsRole as an array of NarroUserRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserRole[]
		*/ 
		public function GetNarroUserRoleAsRoleArray($objOptionalClauses = null) {
			if ((is_null($this->intRoleId)))
				return array();

			try {
				return NarroUserRole::LoadArrayByRoleId($this->intRoleId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserRolesAsRole
		 * @return int
		*/ 
		public function CountNarroUserRolesAsRole() {
			if ((is_null($this->intRoleId)))
				return 0;

			return NarroUserRole::CountByRoleId($this->intRoleId);
		}

		/**
		 * Associates a NarroUserRoleAsRole
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function AssociateNarroUserRoleAsRole(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsRole on this NarroRole with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . '
			');
		}

		/**
		 * Unassociates a NarroUserRoleAsRole
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function UnassociateNarroUserRoleAsRole(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this NarroRole with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`role_id` = null
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Unassociates all NarroUserRolesAsRole
		 * @return void
		*/ 
		public function UnassociateAllNarroUserRolesAsRole() {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this unsaved NarroRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`role_id` = null
				WHERE
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserRoleAsRole
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserRoleAsRole(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this unsaved NarroRole.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this NarroRole with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserRolesAsRole
		 * @return void
		*/ 
		public function DeleteAllNarroUserRolesAsRole() {
			if ((is_null($this->intRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsRole on this unsaved NarroRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroRole::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_role.role_id
		 * @var integer intRoleId
		 */
		protected $intRoleId;
		const RoleIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_role.role_name
		 * @var string strRoleName
		 */
		protected $strRoleName;
		const RoleNameMaxLength = 128;
		const RoleNameDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroRolePermissionAsRole object
		 * (of type NarroRolePermission), if this NarroRole object was restored with
		 * an expansion on the narro_role_permission association table.
		 * @var NarroRolePermission _objNarroRolePermissionAsRole;
		 */
		private $_objNarroRolePermissionAsRole;

		/**
		 * Private member variable that stores a reference to an array of NarroRolePermissionAsRole objects
		 * (of type NarroRolePermission[]), if this NarroRole object was restored with
		 * an ExpandAsArray on the narro_role_permission association table.
		 * @var NarroRolePermission[] _objNarroRolePermissionAsRoleArray;
		 */
		private $_objNarroRolePermissionAsRoleArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserRoleAsRole object
		 * (of type NarroUserRole), if this NarroRole object was restored with
		 * an expansion on the narro_user_role association table.
		 * @var NarroUserRole _objNarroUserRoleAsRole;
		 */
		private $_objNarroUserRoleAsRole;

		/**
		 * Private member variable that stores a reference to an array of NarroUserRoleAsRole objects
		 * (of type NarroUserRole[]), if this NarroRole object was restored with
		 * an ExpandAsArray on the narro_user_role association table.
		 * @var NarroUserRole[] _objNarroUserRoleAsRoleArray;
		 */
		private $_objNarroUserRoleAsRoleArray = array();

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
			$strToReturn = '<complexType name="NarroRole"><sequence>';
			$strToReturn .= '<element name="RoleId" type="xsd:int"/>';
			$strToReturn .= '<element name="RoleName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroRole', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroRole'] = NarroRole::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroRole::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroRole();
			if (property_exists($objSoapObject, 'RoleId'))
				$objToReturn->intRoleId = $objSoapObject->RoleId;
			if (property_exists($objSoapObject, 'RoleName'))
				$objToReturn->strRoleName = $objSoapObject->RoleName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroRole::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroRole extends QQNode {
		protected $strTableName = 'narro_role';
		protected $strPrimaryKey = 'role_id';
		protected $strClassName = 'NarroRole';
		public function __get($strName) {
			switch ($strName) {
				case 'RoleId':
					return new QQNode('role_id', 'integer', $this);
				case 'RoleName':
					return new QQNode('role_name', 'string', $this);
				case 'NarroRolePermissionAsRole':
					return new QQReverseReferenceNodeNarroRolePermission($this, 'narrorolepermissionasrole', 'reverse_reference', 'role_id');
				case 'NarroUserRoleAsRole':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasrole', 'reverse_reference', 'role_id');

				case '_PrimaryKeyNode':
					return new QQNode('role_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroRole extends QQReverseReferenceNode {
		protected $strTableName = 'narro_role';
		protected $strPrimaryKey = 'role_id';
		protected $strClassName = 'NarroRole';
		public function __get($strName) {
			switch ($strName) {
				case 'RoleId':
					return new QQNode('role_id', 'integer', $this);
				case 'RoleName':
					return new QQNode('role_name', 'string', $this);
				case 'NarroRolePermissionAsRole':
					return new QQReverseReferenceNodeNarroRolePermission($this, 'narrorolepermissionasrole', 'reverse_reference', 'role_id');
				case 'NarroUserRoleAsRole':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasrole', 'reverse_reference', 'role_id');

				case '_PrimaryKeyNode':
					return new QQNode('role_id', 'integer', $this);
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