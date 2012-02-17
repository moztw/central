<?php
	/**
	 * The abstract NarroRolePermissionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroRolePermission subclass which
	 * extends this NarroRolePermissionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroRolePermission class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroRolePermissionGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroRolePermission from PK Info
		 * @param integer $intRolePermissionId
		 * @return NarroRolePermission
		 */
		public static function Load($intRolePermissionId) {
			// Use QuerySingle to Perform the Query
			return NarroRolePermission::QuerySingle(
				QQ::Equal(QQN::NarroRolePermission()->RolePermissionId, $intRolePermissionId)
			);
		}

		/**
		 * Load all NarroRolePermissions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRolePermission[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroRolePermission::QueryArray to perform the LoadAll query
			try {
				return NarroRolePermission::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroRolePermissions
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroRolePermission::QueryCount to perform the CountAll query
			return NarroRolePermission::QueryCount(QQ::All());
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
			$objDatabase = NarroRolePermission::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroRolePermission-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_role_permission');
			NarroRolePermission::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_role_permission` AS `narro_role_permission`');

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
		 * Static Qcodo Query method to query for a single NarroRolePermission object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroRolePermission the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRolePermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroRolePermission object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroRolePermission::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroRolePermission objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroRolePermission[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRolePermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroRolePermission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroRolePermission objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroRolePermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroRolePermission::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_role_permission_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroRolePermission-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroRolePermission::GetSelectFields($objQueryBuilder);
				NarroRolePermission::GetFromFields($objQueryBuilder);

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
			return NarroRolePermission::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroRolePermission
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_role_permission`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`role_permission_id` AS ' . $strAliasPrefix . 'role_permission_id`');
			$objBuilder->AddSelectItem($strTableName . '.`role_id` AS ' . $strAliasPrefix . 'role_id`');
			$objBuilder->AddSelectItem($strTableName . '.`permission_id` AS ' . $strAliasPrefix . 'permission_id`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroRolePermission from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroRolePermission::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroRolePermission
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the NarroRolePermission object
			$objToReturn = new NarroRolePermission();
			$objToReturn->__blnRestored = true;

			$objToReturn->intRolePermissionId = $objDbRow->GetColumn($strAliasPrefix . 'role_permission_id', 'Integer');
			$objToReturn->intRoleId = $objDbRow->GetColumn($strAliasPrefix . 'role_id', 'Integer');
			$objToReturn->intPermissionId = $objDbRow->GetColumn($strAliasPrefix . 'permission_id', 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_role_permission__';

			// Check for Role Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'role_id__role_id')))
				$objToReturn->objRole = NarroRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role_id__', $strExpandAsArrayNodes);

			// Check for Permission Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'permission_id__permission_id')))
				$objToReturn->objPermission = NarroPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'permission_id__', $strExpandAsArrayNodes);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroRolePermissions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroRolePermission[]
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
					$objItem = NarroRolePermission::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroRolePermission::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroRolePermission object,
		 * by RolePermissionId Index(es)
		 * @param integer $intRolePermissionId
		 * @return NarroRolePermission
		*/
		public static function LoadByRolePermissionId($intRolePermissionId) {
			return NarroRolePermission::QuerySingle(
				QQ::Equal(QQN::NarroRolePermission()->RolePermissionId, $intRolePermissionId)
			);
		}
			
		/**
		 * Load an array of NarroRolePermission objects,
		 * by RoleId Index(es)
		 * @param integer $intRoleId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRolePermission[]
		*/
		public static function LoadArrayByRoleId($intRoleId, $objOptionalClauses = null) {
			// Call NarroRolePermission::QueryArray to perform the LoadArrayByRoleId query
			try {
				return NarroRolePermission::QueryArray(
					QQ::Equal(QQN::NarroRolePermission()->RoleId, $intRoleId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroRolePermissions
		 * by RoleId Index(es)
		 * @param integer $intRoleId
		 * @return int
		*/
		public static function CountByRoleId($intRoleId) {
			// Call NarroRolePermission::QueryCount to perform the CountByRoleId query
			return NarroRolePermission::QueryCount(
				QQ::Equal(QQN::NarroRolePermission()->RoleId, $intRoleId)
			);
		}
			
		/**
		 * Load an array of NarroRolePermission objects,
		 * by PermissionId Index(es)
		 * @param integer $intPermissionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRolePermission[]
		*/
		public static function LoadArrayByPermissionId($intPermissionId, $objOptionalClauses = null) {
			// Call NarroRolePermission::QueryArray to perform the LoadArrayByPermissionId query
			try {
				return NarroRolePermission::QueryArray(
					QQ::Equal(QQN::NarroRolePermission()->PermissionId, $intPermissionId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroRolePermissions
		 * by PermissionId Index(es)
		 * @param integer $intPermissionId
		 * @return int
		*/
		public static function CountByPermissionId($intPermissionId) {
			// Call NarroRolePermission::QueryCount to perform the CountByPermissionId query
			return NarroRolePermission::QueryCount(
				QQ::Equal(QQN::NarroRolePermission()->PermissionId, $intPermissionId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroRolePermission
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroRolePermission::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_role_permission` (
							`role_id`,
							`permission_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intRoleId) . ',
							' . $objDatabase->SqlVariable($this->intPermissionId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intRolePermissionId = $objDatabase->InsertId('narro_role_permission', 'role_permission_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_role_permission`
						SET
							`role_id` = ' . $objDatabase->SqlVariable($this->intRoleId) . ',
							`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
						WHERE
							`role_permission_id` = ' . $objDatabase->SqlVariable($this->intRolePermissionId) . '
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
		 * Delete this NarroRolePermission
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intRolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroRolePermission with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroRolePermission::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($this->intRolePermissionId) . '');
		}

		/**
		 * Delete all NarroRolePermissions
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroRolePermission::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`');
		}

		/**
		 * Truncate narro_role_permission table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroRolePermission::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_role_permission`');
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
				case 'RolePermissionId':
					/**
					 * Gets the value for intRolePermissionId (Read-Only PK)
					 * @return integer
					 */
					return $this->intRolePermissionId;

				case 'RoleId':
					/**
					 * Gets the value for intRoleId (Not Null)
					 * @return integer
					 */
					return $this->intRoleId;

				case 'PermissionId':
					/**
					 * Gets the value for intPermissionId (Not Null)
					 * @return integer
					 */
					return $this->intPermissionId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Role':
					/**
					 * Gets the value for the NarroRole object referenced by intRoleId (Not Null)
					 * @return NarroRole
					 */
					try {
						if ((!$this->objRole) && (!is_null($this->intRoleId)))
							$this->objRole = NarroRole::Load($this->intRoleId);
						return $this->objRole;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Permission':
					/**
					 * Gets the value for the NarroPermission object referenced by intPermissionId (Not Null)
					 * @return NarroPermission
					 */
					try {
						if ((!$this->objPermission) && (!is_null($this->intPermissionId)))
							$this->objPermission = NarroPermission::Load($this->intPermissionId);
						return $this->objPermission;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

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
				case 'RoleId':
					/**
					 * Sets the value for intRoleId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRole = null;
						return ($this->intRoleId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PermissionId':
					/**
					 * Sets the value for intPermissionId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPermission = null;
						return ($this->intPermissionId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Role':
					/**
					 * Sets the value for the NarroRole object referenced by intRoleId (Not Null)
					 * @param NarroRole $mixValue
					 * @return NarroRole
					 */
					if (is_null($mixValue)) {
						$this->intRoleId = null;
						$this->objRole = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroRole object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroRole');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED NarroRole object
						if (is_null($mixValue->RoleId))
							throw new QCallerException('Unable to set an unsaved Role for this NarroRolePermission');

						// Update Local Member Variables
						$this->objRole = $mixValue;
						$this->intRoleId = $mixValue->RoleId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Permission':
					/**
					 * Sets the value for the NarroPermission object referenced by intPermissionId (Not Null)
					 * @param NarroPermission $mixValue
					 * @return NarroPermission
					 */
					if (is_null($mixValue)) {
						$this->intPermissionId = null;
						$this->objPermission = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroPermission object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroPermission');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED NarroPermission object
						if (is_null($mixValue->PermissionId))
							throw new QCallerException('Unable to set an unsaved Permission for this NarroRolePermission');

						// Update Local Member Variables
						$this->objPermission = $mixValue;
						$this->intPermissionId = $mixValue->PermissionId;

						// Return $mixValue
						return $mixValue;
					}
					break;

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




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_role_permission.role_permission_id
		 * @var integer intRolePermissionId
		 */
		protected $intRolePermissionId;
		const RolePermissionIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_role_permission.role_id
		 * @var integer intRoleId
		 */
		protected $intRoleId;
		const RoleIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_role_permission.permission_id
		 * @var integer intPermissionId
		 */
		protected $intPermissionId;
		const PermissionIdDefault = null;


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

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_role_permission.role_id.
		 *
		 * NOTE: Always use the Role property getter to correctly retrieve this NarroRole object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroRole objRole
		 */
		protected $objRole;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_role_permission.permission_id.
		 *
		 * NOTE: Always use the Permission property getter to correctly retrieve this NarroPermission object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroPermission objPermission
		 */
		protected $objPermission;






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroRolePermission"><sequence>';
			$strToReturn .= '<element name="RolePermissionId" type="xsd:int"/>';
			$strToReturn .= '<element name="Role" type="xsd1:NarroRole"/>';
			$strToReturn .= '<element name="Permission" type="xsd1:NarroPermission"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroRolePermission', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroRolePermission'] = NarroRolePermission::GetSoapComplexTypeXml();
				NarroRole::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroPermission::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroRolePermission::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroRolePermission();
			if (property_exists($objSoapObject, 'RolePermissionId'))
				$objToReturn->intRolePermissionId = $objSoapObject->RolePermissionId;
			if ((property_exists($objSoapObject, 'Role')) &&
				($objSoapObject->Role))
				$objToReturn->Role = NarroRole::GetObjectFromSoapObject($objSoapObject->Role);
			if ((property_exists($objSoapObject, 'Permission')) &&
				($objSoapObject->Permission))
				$objToReturn->Permission = NarroPermission::GetObjectFromSoapObject($objSoapObject->Permission);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroRolePermission::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objRole)
				$objObject->objRole = NarroRole::GetSoapObjectFromObject($objObject->objRole, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoleId = null;
			if ($objObject->objPermission)
				$objObject->objPermission = NarroPermission::GetSoapObjectFromObject($objObject->objPermission, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPermissionId = null;
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroRolePermission extends QQNode {
		protected $strTableName = 'narro_role_permission';
		protected $strPrimaryKey = 'role_permission_id';
		protected $strClassName = 'NarroRolePermission';
		public function __get($strName) {
			switch ($strName) {
				case 'RolePermissionId':
					return new QQNode('role_permission_id', 'integer', $this);
				case 'RoleId':
					return new QQNode('role_id', 'integer', $this);
				case 'Role':
					return new QQNodeNarroRole('role_id', 'integer', $this);
				case 'PermissionId':
					return new QQNode('permission_id', 'integer', $this);
				case 'Permission':
					return new QQNodeNarroPermission('permission_id', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('role_permission_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroRolePermission extends QQReverseReferenceNode {
		protected $strTableName = 'narro_role_permission';
		protected $strPrimaryKey = 'role_permission_id';
		protected $strClassName = 'NarroRolePermission';
		public function __get($strName) {
			switch ($strName) {
				case 'RolePermissionId':
					return new QQNode('role_permission_id', 'integer', $this);
				case 'RoleId':
					return new QQNode('role_id', 'integer', $this);
				case 'Role':
					return new QQNodeNarroRole('role_id', 'integer', $this);
				case 'PermissionId':
					return new QQNode('permission_id', 'integer', $this);
				case 'Permission':
					return new QQNodeNarroPermission('permission_id', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('role_permission_id', 'integer', $this);
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