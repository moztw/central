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
	 * @property-read integer $PermissionId the value for intPermissionId (Read-Only PK)
	 * @property string $PermissionName the value for strPermissionName (Unique)
	 * @property-read NarroRolePermission $_NarroRolePermissionAsPermission the value for the private _objNarroRolePermissionAsPermission (Read-Only) if set due to an expansion on the narro_role_permission.permission_id reverse relationship
	 * @property-read NarroRolePermission[] $_NarroRolePermissionAsPermissionArray the value for the private _objNarroRolePermissionAsPermissionArray (Read-Only) if set due to an ExpandAsArray on the narro_role_permission.permission_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroPermissionGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['PermissionId'] = null;
                $this->_arrHistory['PermissionName'] = null;
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
		 * Private member variable that stores a reference to a single NarroRolePermissionAsPermission object
		 * (of type NarroRolePermission), if this NarroPermission object was restored with
		 * an expansion on the narro_role_permission association table.
		 * @var NarroRolePermission _objNarroRolePermissionAsPermission;
		 */
		private $_objNarroRolePermissionAsPermission;

		/**
		 * Private member variable that stores a reference to an array of NarroRolePermissionAsPermission objects
		 * (of type NarroRolePermission[]), if this NarroPermission object was restored with
		 * an ExpandAsArray on the narro_role_permission association table.
		 * @var NarroRolePermission[] _objNarroRolePermissionAsPermissionArray;
		 */
		private $_objNarroRolePermissionAsPermissionArray = null;

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

        /**
         * Associative array with database property fields as keys
        */
        protected $_arrHistory;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intPermissionId = NarroPermission::PermissionIdDefault;
			$this->strPermissionName = NarroPermission::PermissionNameDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a NarroPermission from PK Info
		 * @param integer $intPermissionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroPermission
		 */
		public static function Load($intPermissionId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroPermission::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroPermission()->PermissionId, $intPermissionId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroPermissions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroPermission[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
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
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
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
			$objQueryBuilder->AddFromItem('narro_permission');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
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
		 * Static Qcubed Query method to query for a single NarroPermission object.
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

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroPermission::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return NarroPermission::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroPermission objects.
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
			return NarroPermission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroPermission objects.
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

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			$strQuery = NarroPermission::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narropermission', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroPermission::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroPermission
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_permission';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'permission_id', $strAliasPrefix . 'permission_id');
			$objBuilder->AddSelectItem($strTableName, 'permission_name', $strAliasPrefix . 'permission_name');
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
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroPermission
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'permission_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intPermissionId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_permission__';


						// Expanding reverse references: NarroRolePermissionAsPermission
						$strAlias = $strAliasPrefix . 'narrorolepermissionaspermission__role_permission_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroRolePermissionAsPermissionArray)
								$objPreviousItem->_objNarroRolePermissionAsPermissionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroRolePermissionAsPermissionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroRolePermissionAsPermissionArray;
								$objChildItem = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionaspermission__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroRolePermissionAsPermissionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroRolePermissionAsPermissionArray[] = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionaspermission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_permission__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroPermission object
			$objToReturn = new NarroPermission();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'permission_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'permission_id'] : $strAliasPrefix . 'permission_id';
			$objToReturn->intPermissionId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'permission_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'permission_name'] : $strAliasPrefix . 'permission_name';
			$objToReturn->strPermissionName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->PermissionId != $objPreviousItem->PermissionId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroRolePermissionAsPermissionArray, $objToReturn->_objNarroRolePermissionAsPermissionArray) != null) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

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




			// Check for NarroRolePermissionAsPermission Virtual Binding
			$strAlias = $strAliasPrefix . 'narrorolepermissionaspermission__role_permission_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroRolePermissionAsPermissionArray)
				$objToReturn->_objNarroRolePermissionAsPermissionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroRolePermissionAsPermissionArray[] = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionaspermission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroRolePermissionAsPermission = NarroRolePermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrorolepermissionaspermission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroPermissions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroPermission[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroPermission::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroPermission::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
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
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroPermission
		*/
		public static function LoadByPermissionId($intPermissionId, $objOptionalClauses = null) {
			return NarroPermission::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroPermission()->PermissionId, $intPermissionId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroPermission object,
		 * by PermissionName Index(es)
		 * @param string $strPermissionName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroPermission
		*/
		public static function LoadByPermissionName($strPermissionName, $objOptionalClauses = null) {
			return NarroPermission::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroPermission()->PermissionName, $strPermissionName)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



        
       /**
        * Save the values loaded from the database to allow seeing what was modified
        */
        public function SaveHistory($blnReset = false) {
            if ($blnReset)
                $this->_arrHistory = array();

            if (!isset($this->_arrHistory['PermissionId']))
                $this->_arrHistory['PermissionId'] = $this->PermissionId;
            if (!isset($this->_arrHistory['PermissionName']))
                $this->_arrHistory['PermissionName'] = $this->PermissionName;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

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

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['PermissionName'] !== $this->PermissionName ||
                        (
                            $this->PermissionName instanceof QDateTime &&
                            (string) $this->_arrHistory['PermissionName'] !== (string) $this->PermissionName
                        )
                    )
                        $arrUpdateChanges[] = '`permission_name` = ' . $objDatabase->SqlVariable($this->strPermissionName);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_permission`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

            $blnInserted = (!$this->__blnRestored) || ($blnForceInsert);
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

		/**
		 * Reload this NarroPermission from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroPermission object.');

			// Reload the Object
			$objReloaded = NarroPermission::Load($this->intPermissionId);

			// Update $this's local variables to match
			$this->strPermissionName = $objReloaded->strPermissionName;
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

				case '_NarroRolePermissionAsPermission':
					/**
					 * Gets the value for the private _objNarroRolePermissionAsPermission (Read-Only)
					 * if set due to an expansion on the narro_role_permission.permission_id reverse relationship
					 * @return NarroRolePermission
					 */
					return $this->_objNarroRolePermissionAsPermission;

				case '_NarroRolePermissionAsPermissionArray':
					/**
					 * Gets the value for the private _objNarroRolePermissionAsPermissionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_role_permission.permission_id reverse relationship
					 * @return NarroRolePermission[]
					 */
					return $this->_objNarroRolePermissionAsPermissionArray;


				case '__Restored':
					return $this->__blnRestored;

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
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for NarroRolePermissionAsPermission
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroRolePermissionsAsPermission as an array of NarroRolePermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroRolePermission[]
		*/
		public function GetNarroRolePermissionAsPermissionArray($objOptionalClauses = null) {
			if ((is_null($this->intPermissionId)))
				return array();

			try {
				return NarroRolePermission::LoadArrayByPermissionId($this->intPermissionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroRolePermissionsAsPermission
		 * @return int
		*/
		public function CountNarroRolePermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				return 0;

			return NarroRolePermission::CountByPermissionId($this->intPermissionId);
		}

		/**
		 * Associates a NarroRolePermissionAsPermission
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/
		public function AssociateNarroRolePermissionAsPermission(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroRolePermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroRolePermissionAsPermission on this NarroPermission with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroRolePermissionAsPermission
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/
		public function UnassociateNarroRolePermissionAsPermission(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this NarroPermission with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`permission_id` = null
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . ' AND
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Unassociates all NarroRolePermissionsAsPermission
		 * @return void
		*/
		public function UnassociateAllNarroRolePermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this unsaved NarroPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_role_permission`
				SET
					`permission_id` = null
				WHERE
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Deletes an associated NarroRolePermissionAsPermission
		 * @param NarroRolePermission $objNarroRolePermission
		 * @return void
		*/
		public function DeleteAssociatedNarroRolePermissionAsPermission(NarroRolePermission $objNarroRolePermission) {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this unsaved NarroPermission.');
			if ((is_null($objNarroRolePermission->RolePermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this NarroPermission with an unsaved NarroRolePermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`
				WHERE
					`role_permission_id` = ' . $objDatabase->SqlVariable($objNarroRolePermission->RolePermissionId) . ' AND
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}

		/**
		 * Deletes all associated NarroRolePermissionsAsPermission
		 * @return void
		*/
		public function DeleteAllNarroRolePermissionsAsPermission() {
			if ((is_null($this->intPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroRolePermissionAsPermission on this unsaved NarroPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroPermission::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_role_permission`
				WHERE
					`permission_id` = ' . $objDatabase->SqlVariable($this->intPermissionId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
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


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['PermissionId'] = $this->intPermissionId;
			$iArray['PermissionName'] = $this->strPermissionName;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}


	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $PermissionId
     * @property-read QQNode $PermissionName
     *
     *
     * @property-read QQReverseReferenceNodeNarroRolePermission $NarroRolePermissionAsPermission

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroPermission extends QQNode {
		protected $strTableName = 'narro_permission';
		protected $strPrimaryKey = 'permission_id';
		protected $strClassName = 'NarroPermission';
		public function __get($strName) {
			switch ($strName) {
				case 'PermissionId':
					return new QQNode('permission_id', 'PermissionId', 'Integer', $this);
				case 'PermissionName':
					return new QQNode('permission_name', 'PermissionName', 'VarChar', $this);
				case 'NarroRolePermissionAsPermission':
					return new QQReverseReferenceNodeNarroRolePermission($this, 'narrorolepermissionaspermission', 'reverse_reference', 'permission_id');

				case '_PrimaryKeyNode':
					return new QQNode('permission_id', 'PermissionId', 'Integer', $this);
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

    /**
     * @property-read QQNode $PermissionId
     * @property-read QQNode $PermissionName
     *
     *
     * @property-read QQReverseReferenceNodeNarroRolePermission $NarroRolePermissionAsPermission

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroPermission extends QQReverseReferenceNode {
		protected $strTableName = 'narro_permission';
		protected $strPrimaryKey = 'permission_id';
		protected $strClassName = 'NarroPermission';
		public function __get($strName) {
			switch ($strName) {
				case 'PermissionId':
					return new QQNode('permission_id', 'PermissionId', 'integer', $this);
				case 'PermissionName':
					return new QQNode('permission_name', 'PermissionName', 'string', $this);
				case 'NarroRolePermissionAsPermission':
					return new QQReverseReferenceNodeNarroRolePermission($this, 'narrorolepermissionaspermission', 'reverse_reference', 'permission_id');

				case '_PrimaryKeyNode':
					return new QQNode('permission_id', 'PermissionId', 'integer', $this);
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
