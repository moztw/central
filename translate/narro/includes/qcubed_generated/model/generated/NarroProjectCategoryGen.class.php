<?php
	/**
	 * The abstract NarroProjectCategoryGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroProjectCategory subclass which
	 * extends this NarroProjectCategoryGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroProjectCategory class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $ProjectCategoryId the value for intProjectCategoryId (Read-Only PK)
	 * @property string $CategoryName the value for strCategoryName (Unique)
	 * @property string $CategoryDescription the value for strCategoryDescription (Not Null)
	 * @property-read NarroProject $_NarroProjectAsProjectCategory the value for the private _objNarroProjectAsProjectCategory (Read-Only) if set due to an expansion on the narro_project.project_category_id reverse relationship
	 * @property-read NarroProject[] $_NarroProjectAsProjectCategoryArray the value for the private _objNarroProjectAsProjectCategoryArray (Read-Only) if set due to an ExpandAsArray on the narro_project.project_category_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroProjectCategoryGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['ProjectCategoryId'] = null;
                $this->_arrHistory['CategoryName'] = null;
                $this->_arrHistory['CategoryDescription'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_project_category.project_category_id
		 * @var integer intProjectCategoryId
		 */
		protected $intProjectCategoryId;
		const ProjectCategoryIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_category.category_name
		 * @var string strCategoryName
		 */
		protected $strCategoryName;
		const CategoryNameMaxLength = 255;
		const CategoryNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_category.category_description
		 * @var string strCategoryDescription
		 */
		protected $strCategoryDescription;
		const CategoryDescriptionMaxLength = 255;
		const CategoryDescriptionDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroProjectAsProjectCategory object
		 * (of type NarroProject), if this NarroProjectCategory object was restored with
		 * an expansion on the narro_project association table.
		 * @var NarroProject _objNarroProjectAsProjectCategory;
		 */
		private $_objNarroProjectAsProjectCategory;

		/**
		 * Private member variable that stores a reference to an array of NarroProjectAsProjectCategory objects
		 * (of type NarroProject[]), if this NarroProjectCategory object was restored with
		 * an ExpandAsArray on the narro_project association table.
		 * @var NarroProject[] _objNarroProjectAsProjectCategoryArray;
		 */
		private $_objNarroProjectAsProjectCategoryArray = null;

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
			$this->intProjectCategoryId = NarroProjectCategory::ProjectCategoryIdDefault;
			$this->strCategoryName = NarroProjectCategory::CategoryNameDefault;
			$this->strCategoryDescription = NarroProjectCategory::CategoryDescriptionDefault;
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
		 * Load a NarroProjectCategory from PK Info
		 * @param integer $intProjectCategoryId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectCategory
		 */
		public static function Load($intProjectCategoryId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroProjectCategory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProjectCategory()->ProjectCategoryId, $intProjectCategoryId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroProjectCategories
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectCategory[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroProjectCategory::QueryArray to perform the LoadAll query
			try {
				return NarroProjectCategory::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroProjectCategories
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroProjectCategory::QueryCount to perform the CountAll query
			return NarroProjectCategory::QueryCount(QQ::All());
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
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroProjectCategory-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_project_category');
			NarroProjectCategory::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_project_category');

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
		 * Static Qcubed Query method to query for a single NarroProjectCategory object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProjectCategory the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroProjectCategory object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroProjectCategory::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroProjectCategory::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroProjectCategory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProjectCategory[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProjectCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroProjectCategory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroProjectCategory::GetDatabase();

			$strQuery = NarroProjectCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narroprojectcategory', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroProjectCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroProjectCategory
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_project_category';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'project_category_id', $strAliasPrefix . 'project_category_id');
			$objBuilder->AddSelectItem($strTableName, 'category_name', $strAliasPrefix . 'category_name');
			$objBuilder->AddSelectItem($strTableName, 'category_description', $strAliasPrefix . 'category_description');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroProjectCategory from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroProjectCategory::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroProjectCategory
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'project_category_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intProjectCategoryId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_project_category__';


						// Expanding reverse references: NarroProjectAsProjectCategory
						$strAlias = $strAliasPrefix . 'narroprojectasprojectcategory__project_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroProjectAsProjectCategoryArray)
								$objPreviousItem->_objNarroProjectAsProjectCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroProjectAsProjectCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroProjectAsProjectCategoryArray;
								$objChildItem = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectasprojectcategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroProjectAsProjectCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroProjectAsProjectCategoryArray[] = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectasprojectcategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_project_category__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroProjectCategory object
			$objToReturn = new NarroProjectCategory();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'project_category_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_category_id'] : $strAliasPrefix . 'project_category_id';
			$objToReturn->intProjectCategoryId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'category_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'category_name'] : $strAliasPrefix . 'category_name';
			$objToReturn->strCategoryName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'category_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'category_description'] : $strAliasPrefix . 'category_description';
			$objToReturn->strCategoryDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ProjectCategoryId != $objPreviousItem->ProjectCategoryId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroProjectAsProjectCategoryArray, $objToReturn->_objNarroProjectAsProjectCategoryArray) != null) {
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
				$strAliasPrefix = 'narro_project_category__';




			// Check for NarroProjectAsProjectCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'narroprojectasprojectcategory__project_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroProjectAsProjectCategoryArray)
				$objToReturn->_objNarroProjectAsProjectCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroProjectAsProjectCategoryArray[] = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectasprojectcategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroProjectAsProjectCategory = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectasprojectcategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroProjectCategories from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroProjectCategory[]
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
					$objItem = NarroProjectCategory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroProjectCategory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroProjectCategory object,
		 * by ProjectCategoryId Index(es)
		 * @param integer $intProjectCategoryId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectCategory
		*/
		public static function LoadByProjectCategoryId($intProjectCategoryId, $objOptionalClauses = null) {
			return NarroProjectCategory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProjectCategory()->ProjectCategoryId, $intProjectCategoryId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroProjectCategory object,
		 * by CategoryName Index(es)
		 * @param string $strCategoryName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectCategory
		*/
		public static function LoadByCategoryName($strCategoryName, $objOptionalClauses = null) {
			return NarroProjectCategory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProjectCategory()->CategoryName, $strCategoryName)
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

            if (!isset($this->_arrHistory['ProjectCategoryId']))
                $this->_arrHistory['ProjectCategoryId'] = $this->ProjectCategoryId;
            if (!isset($this->_arrHistory['CategoryName']))
                $this->_arrHistory['CategoryName'] = $this->CategoryName;
            if (!isset($this->_arrHistory['CategoryDescription']))
                $this->_arrHistory['CategoryDescription'] = $this->CategoryDescription;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroProjectCategory
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_project_category` (
							`category_name`,
							`category_description`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCategoryName) . ',
							' . $objDatabase->SqlVariable($this->strCategoryDescription) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intProjectCategoryId = $objDatabase->InsertId('narro_project_category', 'project_category_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['CategoryName'] !== $this->CategoryName ||
                        (
                            $this->CategoryName instanceof QDateTime &&
                            (string) $this->_arrHistory['CategoryName'] !== (string) $this->CategoryName
                        )
                    )
                        $arrUpdateChanges[] = '`category_name` = ' . $objDatabase->SqlVariable($this->strCategoryName);
                    if (
                        $this->_arrHistory['CategoryDescription'] !== $this->CategoryDescription ||
                        (
                            $this->CategoryDescription instanceof QDateTime &&
                            (string) $this->_arrHistory['CategoryDescription'] !== (string) $this->CategoryDescription
                        )
                    )
                        $arrUpdateChanges[] = '`category_description` = ' . $objDatabase->SqlVariable($this->strCategoryDescription);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_project_category`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
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
		 * Delete this NarroProjectCategory
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroProjectCategory with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_category`
				WHERE
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '');
		}

		/**
		 * Delete all NarroProjectCategories
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_category`');
		}

		/**
		 * Truncate narro_project_category table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_project_category`');
		}

		/**
		 * Reload this NarroProjectCategory from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroProjectCategory object.');

			// Reload the Object
			$objReloaded = NarroProjectCategory::Load($this->intProjectCategoryId);

			// Update $this's local variables to match
			$this->strCategoryName = $objReloaded->strCategoryName;
			$this->strCategoryDescription = $objReloaded->strCategoryDescription;
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
				case 'ProjectCategoryId':
					/**
					 * Gets the value for intProjectCategoryId (Read-Only PK)
					 * @return integer
					 */
					return $this->intProjectCategoryId;

				case 'CategoryName':
					/**
					 * Gets the value for strCategoryName (Unique)
					 * @return string
					 */
					return $this->strCategoryName;

				case 'CategoryDescription':
					/**
					 * Gets the value for strCategoryDescription (Not Null)
					 * @return string
					 */
					return $this->strCategoryDescription;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroProjectAsProjectCategory':
					/**
					 * Gets the value for the private _objNarroProjectAsProjectCategory (Read-Only)
					 * if set due to an expansion on the narro_project.project_category_id reverse relationship
					 * @return NarroProject
					 */
					return $this->_objNarroProjectAsProjectCategory;

				case '_NarroProjectAsProjectCategoryArray':
					/**
					 * Gets the value for the private _objNarroProjectAsProjectCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_project.project_category_id reverse relationship
					 * @return NarroProject[]
					 */
					return $this->_objNarroProjectAsProjectCategoryArray;


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
				case 'CategoryName':
					/**
					 * Sets the value for strCategoryName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCategoryName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CategoryDescription':
					/**
					 * Sets the value for strCategoryDescription (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCategoryDescription = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for NarroProjectAsProjectCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroProjectsAsProjectCategory as an array of NarroProject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public function GetNarroProjectAsProjectCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectCategoryId)))
				return array();

			try {
				return NarroProject::LoadArrayByProjectCategoryId($this->intProjectCategoryId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroProjectsAsProjectCategory
		 * @return int
		*/
		public function CountNarroProjectsAsProjectCategory() {
			if ((is_null($this->intProjectCategoryId)))
				return 0;

			return NarroProject::CountByProjectCategoryId($this->intProjectCategoryId);
		}

		/**
		 * Associates a NarroProjectAsProjectCategory
		 * @param NarroProject $objNarroProject
		 * @return void
		*/
		public function AssociateNarroProjectAsProjectCategory(NarroProject $objNarroProject) {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectAsProjectCategory on this unsaved NarroProjectCategory.');
			if ((is_null($objNarroProject->ProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectAsProjectCategory on this NarroProjectCategory with an unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project`
				SET
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($objNarroProject->ProjectId) . '
			');
		}

		/**
		 * Unassociates a NarroProjectAsProjectCategory
		 * @param NarroProject $objNarroProject
		 * @return void
		*/
		public function UnassociateNarroProjectAsProjectCategory(NarroProject $objNarroProject) {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this unsaved NarroProjectCategory.');
			if ((is_null($objNarroProject->ProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this NarroProjectCategory with an unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project`
				SET
					`project_category_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($objNarroProject->ProjectId) . ' AND
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
			');
		}

		/**
		 * Unassociates all NarroProjectsAsProjectCategory
		 * @return void
		*/
		public function UnassociateAllNarroProjectsAsProjectCategory() {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this unsaved NarroProjectCategory.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project`
				SET
					`project_category_id` = null
				WHERE
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
			');
		}

		/**
		 * Deletes an associated NarroProjectAsProjectCategory
		 * @param NarroProject $objNarroProject
		 * @return void
		*/
		public function DeleteAssociatedNarroProjectAsProjectCategory(NarroProject $objNarroProject) {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this unsaved NarroProjectCategory.');
			if ((is_null($objNarroProject->ProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this NarroProjectCategory with an unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($objNarroProject->ProjectId) . ' AND
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
			');
		}

		/**
		 * Deletes all associated NarroProjectsAsProjectCategory
		 * @return void
		*/
		public function DeleteAllNarroProjectsAsProjectCategory() {
			if ((is_null($this->intProjectCategoryId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectAsProjectCategory on this unsaved NarroProjectCategory.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`
				WHERE
					`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroProjectCategory"><sequence>';
			$strToReturn .= '<element name="ProjectCategoryId" type="xsd:int"/>';
			$strToReturn .= '<element name="CategoryName" type="xsd:string"/>';
			$strToReturn .= '<element name="CategoryDescription" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroProjectCategory', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroProjectCategory'] = NarroProjectCategory::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroProjectCategory::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroProjectCategory();
			if (property_exists($objSoapObject, 'ProjectCategoryId'))
				$objToReturn->intProjectCategoryId = $objSoapObject->ProjectCategoryId;
			if (property_exists($objSoapObject, 'CategoryName'))
				$objToReturn->strCategoryName = $objSoapObject->CategoryName;
			if (property_exists($objSoapObject, 'CategoryDescription'))
				$objToReturn->strCategoryDescription = $objSoapObject->CategoryDescription;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroProjectCategory::GetSoapObjectFromObject($objObject, true));

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
			$iArray['ProjectCategoryId'] = $this->intProjectCategoryId;
			$iArray['CategoryName'] = $this->strCategoryName;
			$iArray['CategoryDescription'] = $this->strCategoryDescription;
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
     * @property-read QQNode $ProjectCategoryId
     * @property-read QQNode $CategoryName
     * @property-read QQNode $CategoryDescription
     *
     *
     * @property-read QQReverseReferenceNodeNarroProject $NarroProjectAsProjectCategory

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroProjectCategory extends QQNode {
		protected $strTableName = 'narro_project_category';
		protected $strPrimaryKey = 'project_category_id';
		protected $strClassName = 'NarroProjectCategory';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'Integer', $this);
				case 'CategoryName':
					return new QQNode('category_name', 'CategoryName', 'VarChar', $this);
				case 'CategoryDescription':
					return new QQNode('category_description', 'CategoryDescription', 'VarChar', $this);
				case 'NarroProjectAsProjectCategory':
					return new QQReverseReferenceNodeNarroProject($this, 'narroprojectasprojectcategory', 'reverse_reference', 'project_category_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'Integer', $this);
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
     * @property-read QQNode $ProjectCategoryId
     * @property-read QQNode $CategoryName
     * @property-read QQNode $CategoryDescription
     *
     *
     * @property-read QQReverseReferenceNodeNarroProject $NarroProjectAsProjectCategory

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroProjectCategory extends QQReverseReferenceNode {
		protected $strTableName = 'narro_project_category';
		protected $strPrimaryKey = 'project_category_id';
		protected $strClassName = 'NarroProjectCategory';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'integer', $this);
				case 'CategoryName':
					return new QQNode('category_name', 'CategoryName', 'string', $this);
				case 'CategoryDescription':
					return new QQNode('category_description', 'CategoryDescription', 'string', $this);
				case 'NarroProjectAsProjectCategory':
					return new QQReverseReferenceNodeNarroProject($this, 'narroprojectasprojectcategory', 'reverse_reference', 'project_category_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'integer', $this);
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
