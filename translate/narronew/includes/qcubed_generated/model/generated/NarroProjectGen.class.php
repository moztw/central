<?php
	/**
	 * The abstract NarroProjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroProject subclass which
	 * extends this NarroProjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroProject class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $ProjectId the value for intProjectId (Read-Only PK)
	 * @property integer $ProjectCategoryId the value for intProjectCategoryId 
	 * @property string $ProjectName the value for strProjectName (Unique)
	 * @property integer $ProjectType the value for intProjectType (Not Null)
	 * @property string $ProjectDescription the value for strProjectDescription 
	 * @property string $Data the value for strData 
	 * @property integer $Active the value for intActive (Not Null)
	 * @property NarroProjectCategory $ProjectCategory the value for the NarroProjectCategory object referenced by intProjectCategoryId 
	 * @property-read NarroContext $_NarroContextAsProject the value for the private _objNarroContextAsProject (Read-Only) if set due to an expansion on the narro_context.project_id reverse relationship
	 * @property-read NarroContext[] $_NarroContextAsProjectArray the value for the private _objNarroContextAsProjectArray (Read-Only) if set due to an ExpandAsArray on the narro_context.project_id reverse relationship
	 * @property-read NarroFile $_NarroFileAsProject the value for the private _objNarroFileAsProject (Read-Only) if set due to an expansion on the narro_file.project_id reverse relationship
	 * @property-read NarroFile[] $_NarroFileAsProjectArray the value for the private _objNarroFileAsProjectArray (Read-Only) if set due to an ExpandAsArray on the narro_file.project_id reverse relationship
	 * @property-read NarroLog $_NarroLogAsProject the value for the private _objNarroLogAsProject (Read-Only) if set due to an expansion on the narro_log.project_id reverse relationship
	 * @property-read NarroLog[] $_NarroLogAsProjectArray the value for the private _objNarroLogAsProjectArray (Read-Only) if set due to an ExpandAsArray on the narro_log.project_id reverse relationship
	 * @property-read NarroProjectProgress $_NarroProjectProgressAsProject the value for the private _objNarroProjectProgressAsProject (Read-Only) if set due to an expansion on the narro_project_progress.project_id reverse relationship
	 * @property-read NarroProjectProgress[] $_NarroProjectProgressAsProjectArray the value for the private _objNarroProjectProgressAsProjectArray (Read-Only) if set due to an ExpandAsArray on the narro_project_progress.project_id reverse relationship
	 * @property-read NarroUserRole $_NarroUserRoleAsProject the value for the private _objNarroUserRoleAsProject (Read-Only) if set due to an expansion on the narro_user_role.project_id reverse relationship
	 * @property-read NarroUserRole[] $_NarroUserRoleAsProjectArray the value for the private _objNarroUserRoleAsProjectArray (Read-Only) if set due to an ExpandAsArray on the narro_user_role.project_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroProjectGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['ProjectId'] = null;
                $this->_arrHistory['ProjectCategoryId'] = null;
                $this->_arrHistory['ProjectName'] = null;
                $this->_arrHistory['ProjectType'] = null;
                $this->_arrHistory['ProjectDescription'] = null;
                $this->_arrHistory['Data'] = null;
                $this->_arrHistory['Active'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_project.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_category_id
		 * @var integer intProjectCategoryId
		 */
		protected $intProjectCategoryId;
		const ProjectCategoryIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_name
		 * @var string strProjectName
		 */
		protected $strProjectName;
		const ProjectNameMaxLength = 255;
		const ProjectNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_type
		 * @var integer intProjectType
		 */
		protected $intProjectType;
		const ProjectTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_description
		 * @var string strProjectDescription
		 */
		protected $strProjectDescription;
		const ProjectDescriptionMaxLength = 255;
		const ProjectDescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.data
		 * @var string strData
		 */
		protected $strData;
		const DataDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.active
		 * @var integer intActive
		 */
		protected $intActive;
		const ActiveDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextAsProject object
		 * (of type NarroContext), if this NarroProject object was restored with
		 * an expansion on the narro_context association table.
		 * @var NarroContext _objNarroContextAsProject;
		 */
		private $_objNarroContextAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroContextAsProject objects
		 * (of type NarroContext[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_context association table.
		 * @var NarroContext[] _objNarroContextAsProjectArray;
		 */
		private $_objNarroContextAsProjectArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroFileAsProject object
		 * (of type NarroFile), if this NarroProject object was restored with
		 * an expansion on the narro_file association table.
		 * @var NarroFile _objNarroFileAsProject;
		 */
		private $_objNarroFileAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroFileAsProject objects
		 * (of type NarroFile[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_file association table.
		 * @var NarroFile[] _objNarroFileAsProjectArray;
		 */
		private $_objNarroFileAsProjectArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroLogAsProject object
		 * (of type NarroLog), if this NarroProject object was restored with
		 * an expansion on the narro_log association table.
		 * @var NarroLog _objNarroLogAsProject;
		 */
		private $_objNarroLogAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroLogAsProject objects
		 * (of type NarroLog[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_log association table.
		 * @var NarroLog[] _objNarroLogAsProjectArray;
		 */
		private $_objNarroLogAsProjectArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroProjectProgressAsProject object
		 * (of type NarroProjectProgress), if this NarroProject object was restored with
		 * an expansion on the narro_project_progress association table.
		 * @var NarroProjectProgress _objNarroProjectProgressAsProject;
		 */
		private $_objNarroProjectProgressAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroProjectProgressAsProject objects
		 * (of type NarroProjectProgress[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_project_progress association table.
		 * @var NarroProjectProgress[] _objNarroProjectProgressAsProjectArray;
		 */
		private $_objNarroProjectProgressAsProjectArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroUserRoleAsProject object
		 * (of type NarroUserRole), if this NarroProject object was restored with
		 * an expansion on the narro_user_role association table.
		 * @var NarroUserRole _objNarroUserRoleAsProject;
		 */
		private $_objNarroUserRoleAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroUserRoleAsProject objects
		 * (of type NarroUserRole[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_user_role association table.
		 * @var NarroUserRole[] _objNarroUserRoleAsProjectArray;
		 */
		private $_objNarroUserRoleAsProjectArray = null;

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
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_project.project_category_id.
		 *
		 * NOTE: Always use the ProjectCategory property getter to correctly retrieve this NarroProjectCategory object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProjectCategory objProjectCategory
		 */
		protected $objProjectCategory;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intProjectId = NarroProject::ProjectIdDefault;
			$this->intProjectCategoryId = NarroProject::ProjectCategoryIdDefault;
			$this->strProjectName = NarroProject::ProjectNameDefault;
			$this->intProjectType = NarroProject::ProjectTypeDefault;
			$this->strProjectDescription = NarroProject::ProjectDescriptionDefault;
			$this->strData = NarroProject::DataDefault;
			$this->intActive = NarroProject::ActiveDefault;
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
		 * Load a NarroProject from PK Info
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject
		 */
		public static function Load($intProjectId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroProject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProject()->ProjectId, $intProjectId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroProjects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroProject::QueryArray to perform the LoadAll query
			try {
				return NarroProject::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroProjects
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroProject::QueryCount to perform the CountAll query
			return NarroProject::QueryCount(QQ::All());
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
			$objDatabase = NarroProject::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroProject-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_project');
			NarroProject::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_project');

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
		 * Static Qcubed Query method to query for a single NarroProject object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProject the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroProject object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroProject::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroProject::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroProject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProject[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroProject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroProject::GetDatabase();

			$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narroproject', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroProject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroProject
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_project';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'project_id', $strAliasPrefix . 'project_id');
			$objBuilder->AddSelectItem($strTableName, 'project_category_id', $strAliasPrefix . 'project_category_id');
			$objBuilder->AddSelectItem($strTableName, 'project_name', $strAliasPrefix . 'project_name');
			$objBuilder->AddSelectItem($strTableName, 'project_type', $strAliasPrefix . 'project_type');
			$objBuilder->AddSelectItem($strTableName, 'project_description', $strAliasPrefix . 'project_description');
			$objBuilder->AddSelectItem($strTableName, 'data', $strAliasPrefix . 'data');
			$objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroProject from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroProject::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroProject
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'project_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intProjectId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_project__';


						// Expanding reverse references: NarroContextAsProject
						$strAlias = $strAliasPrefix . 'narrocontextasproject__context_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextAsProjectArray)
								$objPreviousItem->_objNarroContextAsProjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextAsProjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextAsProjectArray;
								$objChildItem = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextAsProjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextAsProjectArray[] = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroFileAsProject
						$strAlias = $strAliasPrefix . 'narrofileasproject__file_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroFileAsProjectArray)
								$objPreviousItem->_objNarroFileAsProjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroFileAsProjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroFileAsProjectArray;
								$objChildItem = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroFileAsProjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroFileAsProjectArray[] = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroLogAsProject
						$strAlias = $strAliasPrefix . 'narrologasproject__log_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroLogAsProjectArray)
								$objPreviousItem->_objNarroLogAsProjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroLogAsProjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroLogAsProjectArray;
								$objChildItem = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasproject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroLogAsProjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroLogAsProjectArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroProjectProgressAsProject
						$strAlias = $strAliasPrefix . 'narroprojectprogressasproject__project_progress_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroProjectProgressAsProjectArray)
								$objPreviousItem->_objNarroProjectProgressAsProjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroProjectProgressAsProjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroProjectProgressAsProjectArray;
								$objChildItem = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroProjectProgressAsProjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroProjectProgressAsProjectArray[] = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroUserRoleAsProject
						$strAlias = $strAliasPrefix . 'narrouserroleasproject__user_role_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroUserRoleAsProjectArray)
								$objPreviousItem->_objNarroUserRoleAsProjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsProjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroUserRoleAsProjectArray;
								$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroUserRoleAsProjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroUserRoleAsProjectArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_project__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroProject object
			$objToReturn = new NarroProject();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'project_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_id'] : $strAliasPrefix . 'project_id';
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_category_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_category_id'] : $strAliasPrefix . 'project_category_id';
			$objToReturn->intProjectCategoryId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_name'] : $strAliasPrefix . 'project_name';
			$objToReturn->strProjectName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_type'] : $strAliasPrefix . 'project_type';
			$objToReturn->intProjectType = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_description'] : $strAliasPrefix . 'project_description';
			$objToReturn->strProjectDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'data', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'data'] : $strAliasPrefix . 'data';
			$objToReturn->strData = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active'] : $strAliasPrefix . 'active';
			$objToReturn->intActive = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ProjectId != $objPreviousItem->ProjectId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextAsProjectArray, $objToReturn->_objNarroContextAsProjectArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroFileAsProjectArray, $objToReturn->_objNarroFileAsProjectArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroLogAsProjectArray, $objToReturn->_objNarroLogAsProjectArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroProjectProgressAsProjectArray, $objToReturn->_objNarroProjectProgressAsProjectArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroUserRoleAsProjectArray, $objToReturn->_objNarroUserRoleAsProjectArray) != null) {
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
				$strAliasPrefix = 'narro_project__';

			// Check for ProjectCategory Early Binding
			$strAlias = $strAliasPrefix . 'project_category_id__project_category_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objProjectCategory = NarroProjectCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for NarroContextAsProject Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextasproject__context_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextAsProjectArray)
				$objToReturn->_objNarroContextAsProjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextAsProjectArray[] = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextAsProject = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroFileAsProject Virtual Binding
			$strAlias = $strAliasPrefix . 'narrofileasproject__file_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroFileAsProjectArray)
				$objToReturn->_objNarroFileAsProjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroFileAsProjectArray[] = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroFileAsProject = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroLogAsProject Virtual Binding
			$strAlias = $strAliasPrefix . 'narrologasproject__log_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroLogAsProjectArray)
				$objToReturn->_objNarroLogAsProjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroLogAsProjectArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroLogAsProject = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroProjectProgressAsProject Virtual Binding
			$strAlias = $strAliasPrefix . 'narroprojectprogressasproject__project_progress_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroProjectProgressAsProjectArray)
				$objToReturn->_objNarroProjectProgressAsProjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroProjectProgressAsProjectArray[] = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroProjectProgressAsProject = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroUserRoleAsProject Virtual Binding
			$strAlias = $strAliasPrefix . 'narrouserroleasproject__user_role_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroUserRoleAsProjectArray)
				$objToReturn->_objNarroUserRoleAsProjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroUserRoleAsProjectArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroUserRoleAsProject = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroProjects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroProject[]
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
					$objItem = NarroProject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroProject::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroProject object,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject
		*/
		public static function LoadByProjectId($intProjectId, $objOptionalClauses = null) {
			return NarroProject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProject()->ProjectId, $intProjectId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroProject object,
		 * by ProjectName Index(es)
		 * @param string $strProjectName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject
		*/
		public static function LoadByProjectName($strProjectName, $objOptionalClauses = null) {
			return NarroProject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroProject()->ProjectName, $strProjectName)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroProject objects,
		 * by ProjectType Index(es)
		 * @param integer $intProjectType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public static function LoadArrayByProjectType($intProjectType, $objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadArrayByProjectType query
			try {
				return NarroProject::QueryArray(
					QQ::Equal(QQN::NarroProject()->ProjectType, $intProjectType),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjects
		 * by ProjectType Index(es)
		 * @param integer $intProjectType
		 * @return int
		*/
		public static function CountByProjectType($intProjectType) {
			// Call NarroProject::QueryCount to perform the CountByProjectType query
			return NarroProject::QueryCount(
				QQ::Equal(QQN::NarroProject()->ProjectType, $intProjectType)
			);
		}
			
		/**
		 * Load an array of NarroProject objects,
		 * by ProjectCategoryId Index(es)
		 * @param integer $intProjectCategoryId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public static function LoadArrayByProjectCategoryId($intProjectCategoryId, $objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadArrayByProjectCategoryId query
			try {
				return NarroProject::QueryArray(
					QQ::Equal(QQN::NarroProject()->ProjectCategoryId, $intProjectCategoryId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjects
		 * by ProjectCategoryId Index(es)
		 * @param integer $intProjectCategoryId
		 * @return int
		*/
		public static function CountByProjectCategoryId($intProjectCategoryId) {
			// Call NarroProject::QueryCount to perform the CountByProjectCategoryId query
			return NarroProject::QueryCount(
				QQ::Equal(QQN::NarroProject()->ProjectCategoryId, $intProjectCategoryId)
			);
		}
			
		/**
		 * Load an array of NarroProject objects,
		 * by Active Index(es)
		 * @param integer $intActive
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public static function LoadArrayByActive($intActive, $objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadArrayByActive query
			try {
				return NarroProject::QueryArray(
					QQ::Equal(QQN::NarroProject()->Active, $intActive),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjects
		 * by Active Index(es)
		 * @param integer $intActive
		 * @return int
		*/
		public static function CountByActive($intActive) {
			// Call NarroProject::QueryCount to perform the CountByActive query
			return NarroProject::QueryCount(
				QQ::Equal(QQN::NarroProject()->Active, $intActive)
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

            if (!isset($this->_arrHistory['ProjectId']))
                $this->_arrHistory['ProjectId'] = $this->ProjectId;
            if (!isset($this->_arrHistory['ProjectCategoryId']))
                $this->_arrHistory['ProjectCategoryId'] = $this->ProjectCategoryId;
            if (!isset($this->_arrHistory['ProjectName']))
                $this->_arrHistory['ProjectName'] = $this->ProjectName;
            if (!isset($this->_arrHistory['ProjectType']))
                $this->_arrHistory['ProjectType'] = $this->ProjectType;
            if (!isset($this->_arrHistory['ProjectDescription']))
                $this->_arrHistory['ProjectDescription'] = $this->ProjectDescription;
            if (!isset($this->_arrHistory['Data']))
                $this->_arrHistory['Data'] = $this->Data;
            if (!isset($this->_arrHistory['Active']))
                $this->_arrHistory['Active'] = $this->Active;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroProject
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_project` (
							`project_category_id`,
							`project_name`,
							`project_type`,
							`project_description`,
							`data`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intProjectCategoryId) . ',
							' . $objDatabase->SqlVariable($this->strProjectName) . ',
							' . $objDatabase->SqlVariable($this->intProjectType) . ',
							' . $objDatabase->SqlVariable($this->strProjectDescription) . ',
							' . $objDatabase->SqlVariable($this->strData) . ',
							' . $objDatabase->SqlVariable($this->intActive) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intProjectId = $objDatabase->InsertId('narro_project', 'project_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['ProjectCategoryId'] !== $this->ProjectCategoryId ||
                        (
                            $this->ProjectCategoryId instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectCategoryId'] !== (string) $this->ProjectCategoryId
                        )
                    )
                        $arrUpdateChanges[] = '`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId);
                    if (
                        $this->_arrHistory['ProjectName'] !== $this->ProjectName ||
                        (
                            $this->ProjectName instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectName'] !== (string) $this->ProjectName
                        )
                    )
                        $arrUpdateChanges[] = '`project_name` = ' . $objDatabase->SqlVariable($this->strProjectName);
                    if (
                        $this->_arrHistory['ProjectType'] !== $this->ProjectType ||
                        (
                            $this->ProjectType instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectType'] !== (string) $this->ProjectType
                        )
                    )
                        $arrUpdateChanges[] = '`project_type` = ' . $objDatabase->SqlVariable($this->intProjectType);
                    if (
                        $this->_arrHistory['ProjectDescription'] !== $this->ProjectDescription ||
                        (
                            $this->ProjectDescription instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectDescription'] !== (string) $this->ProjectDescription
                        )
                    )
                        $arrUpdateChanges[] = '`project_description` = ' . $objDatabase->SqlVariable($this->strProjectDescription);
                    if (
                        $this->_arrHistory['Data'] !== $this->Data ||
                        (
                            $this->Data instanceof QDateTime &&
                            (string) $this->_arrHistory['Data'] !== (string) $this->Data
                        )
                    )
                        $arrUpdateChanges[] = '`data` = ' . $objDatabase->SqlVariable($this->strData);
                    if (
                        $this->_arrHistory['Active'] !== $this->Active ||
                        (
                            $this->Active instanceof QDateTime &&
                            (string) $this->_arrHistory['Active'] !== (string) $this->Active
                        )
                    )
                        $arrUpdateChanges[] = '`active` = ' . $objDatabase->SqlVariable($this->intActive);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_project`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
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
		 * Delete this NarroProject
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroProject with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '');
		}

		/**
		 * Delete all NarroProjects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`');
		}

		/**
		 * Truncate narro_project table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_project`');
		}

		/**
		 * Reload this NarroProject from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroProject object.');

			// Reload the Object
			$objReloaded = NarroProject::Load($this->intProjectId);

			// Update $this's local variables to match
			$this->ProjectCategoryId = $objReloaded->ProjectCategoryId;
			$this->strProjectName = $objReloaded->strProjectName;
			$this->ProjectType = $objReloaded->ProjectType;
			$this->strProjectDescription = $objReloaded->strProjectDescription;
			$this->strData = $objReloaded->strData;
			$this->intActive = $objReloaded->intActive;
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
				case 'ProjectId':
					/**
					 * Gets the value for intProjectId (Read-Only PK)
					 * @return integer
					 */
					return $this->intProjectId;

				case 'ProjectCategoryId':
					/**
					 * Gets the value for intProjectCategoryId 
					 * @return integer
					 */
					return $this->intProjectCategoryId;

				case 'ProjectName':
					/**
					 * Gets the value for strProjectName (Unique)
					 * @return string
					 */
					return $this->strProjectName;

				case 'ProjectType':
					/**
					 * Gets the value for intProjectType (Not Null)
					 * @return integer
					 */
					return $this->intProjectType;

				case 'ProjectDescription':
					/**
					 * Gets the value for strProjectDescription 
					 * @return string
					 */
					return $this->strProjectDescription;

				case 'Data':
					/**
					 * Gets the value for strData 
					 * @return string
					 */
					return $this->strData;

				case 'Active':
					/**
					 * Gets the value for intActive (Not Null)
					 * @return integer
					 */
					return $this->intActive;


				///////////////////
				// Member Objects
				///////////////////
				case 'ProjectCategory':
					/**
					 * Gets the value for the NarroProjectCategory object referenced by intProjectCategoryId 
					 * @return NarroProjectCategory
					 */
					try {
						if ((!$this->objProjectCategory) && (!is_null($this->intProjectCategoryId)))
							$this->objProjectCategory = NarroProjectCategory::Load($this->intProjectCategoryId);
						return $this->objProjectCategory;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextAsProject':
					/**
					 * Gets the value for the private _objNarroContextAsProject (Read-Only)
					 * if set due to an expansion on the narro_context.project_id reverse relationship
					 * @return NarroContext
					 */
					return $this->_objNarroContextAsProject;

				case '_NarroContextAsProjectArray':
					/**
					 * Gets the value for the private _objNarroContextAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context.project_id reverse relationship
					 * @return NarroContext[]
					 */
					return $this->_objNarroContextAsProjectArray;

				case '_NarroFileAsProject':
					/**
					 * Gets the value for the private _objNarroFileAsProject (Read-Only)
					 * if set due to an expansion on the narro_file.project_id reverse relationship
					 * @return NarroFile
					 */
					return $this->_objNarroFileAsProject;

				case '_NarroFileAsProjectArray':
					/**
					 * Gets the value for the private _objNarroFileAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_file.project_id reverse relationship
					 * @return NarroFile[]
					 */
					return $this->_objNarroFileAsProjectArray;

				case '_NarroLogAsProject':
					/**
					 * Gets the value for the private _objNarroLogAsProject (Read-Only)
					 * if set due to an expansion on the narro_log.project_id reverse relationship
					 * @return NarroLog
					 */
					return $this->_objNarroLogAsProject;

				case '_NarroLogAsProjectArray':
					/**
					 * Gets the value for the private _objNarroLogAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_log.project_id reverse relationship
					 * @return NarroLog[]
					 */
					return $this->_objNarroLogAsProjectArray;

				case '_NarroProjectProgressAsProject':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsProject (Read-Only)
					 * if set due to an expansion on the narro_project_progress.project_id reverse relationship
					 * @return NarroProjectProgress
					 */
					return $this->_objNarroProjectProgressAsProject;

				case '_NarroProjectProgressAsProjectArray':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_project_progress.project_id reverse relationship
					 * @return NarroProjectProgress[]
					 */
					return $this->_objNarroProjectProgressAsProjectArray;

				case '_NarroUserRoleAsProject':
					/**
					 * Gets the value for the private _objNarroUserRoleAsProject (Read-Only)
					 * if set due to an expansion on the narro_user_role.project_id reverse relationship
					 * @return NarroUserRole
					 */
					return $this->_objNarroUserRoleAsProject;

				case '_NarroUserRoleAsProjectArray':
					/**
					 * Gets the value for the private _objNarroUserRoleAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_role.project_id reverse relationship
					 * @return NarroUserRole[]
					 */
					return $this->_objNarroUserRoleAsProjectArray;


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
				case 'ProjectCategoryId':
					/**
					 * Sets the value for intProjectCategoryId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProjectCategory = null;
						return ($this->intProjectCategoryId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectName':
					/**
					 * Sets the value for strProjectName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProjectName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectType':
					/**
					 * Sets the value for intProjectType (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intProjectType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectDescription':
					/**
					 * Sets the value for strProjectDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProjectDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Data':
					/**
					 * Sets the value for strData 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strData = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for intActive (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intActive = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ProjectCategory':
					/**
					 * Sets the value for the NarroProjectCategory object referenced by intProjectCategoryId 
					 * @param NarroProjectCategory $mixValue
					 * @return NarroProjectCategory
					 */
					if (is_null($mixValue)) {
						$this->intProjectCategoryId = null;
						$this->objProjectCategory = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroProjectCategory object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroProjectCategory');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroProjectCategory object
						if (is_null($mixValue->ProjectCategoryId))
							throw new QCallerException('Unable to set an unsaved ProjectCategory for this NarroProject');

						// Update Local Member Variables
						$this->objProjectCategory = $mixValue;
						$this->intProjectCategoryId = $mixValue->ProjectCategoryId;

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
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for NarroContextAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextsAsProject as an array of NarroContext objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public function GetNarroContextAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroContext::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextsAsProject
		 * @return int
		*/
		public function CountNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroContext::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function AssociateNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . '
			');
		}

		/**
		 * Unassociates a NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function UnassociateNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroContextsAsProject
		 * @return void
		*/
		public function UnassociateAllNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function DeleteAssociatedNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextsAsProject
		 * @return void
		*/
		public function DeleteAllNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroFileAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroFilesAsProject as an array of NarroFile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/
		public function GetNarroFileAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroFile::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroFilesAsProject
		 * @return int
		*/
		public function CountNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroFile::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/
		public function AssociateNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . '
			');
		}

		/**
		 * Unassociates a NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/
		public function UnassociateNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = null
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroFilesAsProject
		 * @return void
		*/
		public function UnassociateAllNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/
		public function DeleteAssociatedNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroFilesAsProject
		 * @return void
		*/
		public function DeleteAllNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroLogAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroLogsAsProject as an array of NarroLog objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public function GetNarroLogAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroLog::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroLogsAsProject
		 * @return int
		*/
		public function CountNarroLogsAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroLog::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroLogAsProject
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function AssociateNarroLogAsProject(NarroLog $objNarroLog) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsProject on this NarroProject with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . '
			');
		}

		/**
		 * Unassociates a NarroLogAsProject
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function UnassociateNarroLogAsProject(NarroLog $objNarroLog) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this NarroProject with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`project_id` = null
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroLogsAsProject
		 * @return void
		*/
		public function UnassociateAllNarroLogsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroLogAsProject
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function DeleteAssociatedNarroLogAsProject(NarroLog $objNarroLog) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this NarroProject with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroLogsAsProject
		 * @return void
		*/
		public function DeleteAllNarroLogsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroProjectProgressAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroProjectProgressesAsProject as an array of NarroProjectProgress objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		*/
		public function GetNarroProjectProgressAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroProjectProgress::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroProjectProgressesAsProject
		 * @return int
		*/
		public function CountNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroProjectProgress::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function AssociateNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . '
			');
		}

		/**
		 * Unassociates a NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function UnassociateNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = null
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroProjectProgressesAsProject
		 * @return void
		*/
		public function UnassociateAllNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function DeleteAssociatedNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroProjectProgressesAsProject
		 * @return void
		*/
		public function DeleteAllNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserRoleAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserRolesAsProject as an array of NarroUserRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserRole[]
		*/
		public function GetNarroUserRoleAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroUserRole::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserRolesAsProject
		 * @return int
		*/
		public function CountNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroUserRole::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function AssociateNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . '
			');
		}

		/**
		 * Unassociates a NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function UnassociateNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = null
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroUserRolesAsProject
		 * @return void
		*/
		public function UnassociateAllNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function DeleteAssociatedNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserRolesAsProject
		 * @return void
		*/
		public function DeleteAllNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroProject"><sequence>';
			$strToReturn .= '<element name="ProjectId" type="xsd:int"/>';
			$strToReturn .= '<element name="ProjectCategory" type="xsd1:NarroProjectCategory"/>';
			$strToReturn .= '<element name="ProjectName" type="xsd:string"/>';
			$strToReturn .= '<element name="ProjectType" type="xsd:int"/>';
			$strToReturn .= '<element name="ProjectDescription" type="xsd:string"/>';
			$strToReturn .= '<element name="Data" type="xsd:string"/>';
			$strToReturn .= '<element name="Active" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroProject', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroProject'] = NarroProject::GetSoapComplexTypeXml();
				NarroProjectCategory::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroProject::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroProject();
			if (property_exists($objSoapObject, 'ProjectId'))
				$objToReturn->intProjectId = $objSoapObject->ProjectId;
			if ((property_exists($objSoapObject, 'ProjectCategory')) &&
				($objSoapObject->ProjectCategory))
				$objToReturn->ProjectCategory = NarroProjectCategory::GetObjectFromSoapObject($objSoapObject->ProjectCategory);
			if (property_exists($objSoapObject, 'ProjectName'))
				$objToReturn->strProjectName = $objSoapObject->ProjectName;
			if (property_exists($objSoapObject, 'ProjectType'))
				$objToReturn->intProjectType = $objSoapObject->ProjectType;
			if (property_exists($objSoapObject, 'ProjectDescription'))
				$objToReturn->strProjectDescription = $objSoapObject->ProjectDescription;
			if (property_exists($objSoapObject, 'Data'))
				$objToReturn->strData = $objSoapObject->Data;
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->intActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroProject::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objProjectCategory)
				$objObject->objProjectCategory = NarroProjectCategory::GetSoapObjectFromObject($objObject->objProjectCategory, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectCategoryId = null;
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
			$iArray['ProjectId'] = $this->intProjectId;
			$iArray['ProjectCategoryId'] = $this->intProjectCategoryId;
			$iArray['ProjectName'] = $this->strProjectName;
			$iArray['ProjectType'] = $this->intProjectType;
			$iArray['ProjectDescription'] = $this->strProjectDescription;
			$iArray['Data'] = $this->strData;
			$iArray['Active'] = $this->intActive;
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
     * @property-read QQNode $ProjectId
     * @property-read QQNode $ProjectCategoryId
     * @property-read QQNodeNarroProjectCategory $ProjectCategory
     * @property-read QQNode $ProjectName
     * @property-read QQNode $ProjectType
     * @property-read QQNode $ProjectDescription
     * @property-read QQNode $Data
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContext $NarroContextAsProject
     * @property-read QQReverseReferenceNodeNarroFile $NarroFileAsProject
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsProject
     * @property-read QQReverseReferenceNodeNarroProjectProgress $NarroProjectProgressAsProject
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsProject

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroProject extends QQNode {
		protected $strTableName = 'narro_project';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'NarroProject';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'Integer', $this);
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'Integer', $this);
				case 'ProjectCategory':
					return new QQNodeNarroProjectCategory('project_category_id', 'ProjectCategory', 'Integer', $this);
				case 'ProjectName':
					return new QQNode('project_name', 'ProjectName', 'VarChar', $this);
				case 'ProjectType':
					return new QQNode('project_type', 'ProjectType', 'Integer', $this);
				case 'ProjectDescription':
					return new QQNode('project_description', 'ProjectDescription', 'VarChar', $this);
				case 'Data':
					return new QQNode('data', 'Data', 'Blob', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Integer', $this);
				case 'NarroContextAsProject':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasproject', 'reverse_reference', 'project_id');
				case 'NarroFileAsProject':
					return new QQReverseReferenceNodeNarroFile($this, 'narrofileasproject', 'reverse_reference', 'project_id');
				case 'NarroLogAsProject':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologasproject', 'reverse_reference', 'project_id');
				case 'NarroProjectProgressAsProject':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressasproject', 'reverse_reference', 'project_id');
				case 'NarroUserRoleAsProject':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasproject', 'reverse_reference', 'project_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_id', 'ProjectId', 'Integer', $this);
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
     * @property-read QQNode $ProjectId
     * @property-read QQNode $ProjectCategoryId
     * @property-read QQNodeNarroProjectCategory $ProjectCategory
     * @property-read QQNode $ProjectName
     * @property-read QQNode $ProjectType
     * @property-read QQNode $ProjectDescription
     * @property-read QQNode $Data
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContext $NarroContextAsProject
     * @property-read QQReverseReferenceNodeNarroFile $NarroFileAsProject
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsProject
     * @property-read QQReverseReferenceNodeNarroProjectProgress $NarroProjectProgressAsProject
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsProject

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroProject extends QQReverseReferenceNode {
		protected $strTableName = 'narro_project';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'NarroProject';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'integer', $this);
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'ProjectCategoryId', 'integer', $this);
				case 'ProjectCategory':
					return new QQNodeNarroProjectCategory('project_category_id', 'ProjectCategory', 'integer', $this);
				case 'ProjectName':
					return new QQNode('project_name', 'ProjectName', 'string', $this);
				case 'ProjectType':
					return new QQNode('project_type', 'ProjectType', 'integer', $this);
				case 'ProjectDescription':
					return new QQNode('project_description', 'ProjectDescription', 'string', $this);
				case 'Data':
					return new QQNode('data', 'Data', 'string', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'integer', $this);
				case 'NarroContextAsProject':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasproject', 'reverse_reference', 'project_id');
				case 'NarroFileAsProject':
					return new QQReverseReferenceNodeNarroFile($this, 'narrofileasproject', 'reverse_reference', 'project_id');
				case 'NarroLogAsProject':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologasproject', 'reverse_reference', 'project_id');
				case 'NarroProjectProgressAsProject':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressasproject', 'reverse_reference', 'project_id');
				case 'NarroUserRoleAsProject':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasproject', 'reverse_reference', 'project_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_id', 'ProjectId', 'integer', $this);
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
