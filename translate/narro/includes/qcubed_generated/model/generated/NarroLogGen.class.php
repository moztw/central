<?php
	/**
	 * The abstract NarroLogGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroLog subclass which
	 * extends this NarroLogGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroLog class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $LogId the value for intLogId (Read-Only PK)
	 * @property integer $LanguageId the value for intLanguageId 
	 * @property integer $ProjectId the value for intProjectId 
	 * @property integer $UserId the value for intUserId 
	 * @property string $Message the value for strMessage (Not Null)
	 * @property integer $Priority the value for intPriority (Not Null)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property NarroLanguage $Language the value for the NarroLanguage object referenced by intLanguageId 
	 * @property NarroProject $Project the value for the NarroProject object referenced by intProjectId 
	 * @property NarroUser $User the value for the NarroUser object referenced by intUserId 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroLogGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['LogId'] = null;
                $this->_arrHistory['LanguageId'] = null;
                $this->_arrHistory['ProjectId'] = null;
                $this->_arrHistory['UserId'] = null;
                $this->_arrHistory['Message'] = null;
                $this->_arrHistory['Priority'] = null;
                $this->_arrHistory['Date'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_log.log_id
		 * @var integer intLogId
		 */
		protected $intLogId;
		const LogIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.message
		 * @var string strMessage
		 */
		protected $strMessage;
		const MessageDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.priority
		 * @var integer intPriority
		 */
		protected $intPriority;
		const PriorityDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_log.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


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
		 * in the database column narro_log.language_id.
		 *
		 * NOTE: Always use the Language property getter to correctly retrieve this NarroLanguage object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroLanguage objLanguage
		 */
		protected $objLanguage;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_log.project_id.
		 *
		 * NOTE: Always use the Project property getter to correctly retrieve this NarroProject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProject objProject
		 */
		protected $objProject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_log.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this NarroUser object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroUser objUser
		 */
		protected $objUser;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLogId = NarroLog::LogIdDefault;
			$this->intLanguageId = NarroLog::LanguageIdDefault;
			$this->intProjectId = NarroLog::ProjectIdDefault;
			$this->intUserId = NarroLog::UserIdDefault;
			$this->strMessage = NarroLog::MessageDefault;
			$this->intPriority = NarroLog::PriorityDefault;
			$this->dttDate = (NarroLog::DateDefault === null)?null:new QDateTime(NarroLog::DateDefault);
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
		 * Load a NarroLog from PK Info
		 * @param integer $intLogId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog
		 */
		public static function Load($intLogId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroLog::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLog()->LogId, $intLogId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroLogs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroLog::QueryArray to perform the LoadAll query
			try {
				return NarroLog::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroLogs
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroLog::QueryCount to perform the CountAll query
			return NarroLog::QueryCount(QQ::All());
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
			$objDatabase = NarroLog::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroLog-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_log');
			NarroLog::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_log');

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
		 * Static Qcubed Query method to query for a single NarroLog object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroLog the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLog::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroLog object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroLog::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroLog::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroLog objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroLog[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLog::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroLog::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroLog objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLog::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroLog::GetDatabase();

			$strQuery = NarroLog::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrolog', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroLog::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroLog
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_log';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'log_id', $strAliasPrefix . 'log_id');
			$objBuilder->AddSelectItem($strTableName, 'language_id', $strAliasPrefix . 'language_id');
			$objBuilder->AddSelectItem($strTableName, 'project_id', $strAliasPrefix . 'project_id');
			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'message', $strAliasPrefix . 'message');
			$objBuilder->AddSelectItem($strTableName, 'priority', $strAliasPrefix . 'priority');
			$objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroLog from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroLog::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroLog
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NarroLog object
			$objToReturn = new NarroLog();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'log_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'log_id'] : $strAliasPrefix . 'log_id';
			$objToReturn->intLogId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_id'] : $strAliasPrefix . 'language_id';
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_id'] : $strAliasPrefix . 'project_id';
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'message', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'message'] : $strAliasPrefix . 'message';
			$objToReturn->strMessage = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'priority', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'priority'] : $strAliasPrefix . 'priority';
			$objToReturn->intPriority = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LogId != $objPreviousItem->LogId) {
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
				$strAliasPrefix = 'narro_log__';

			// Check for Language Early Binding
			$strAlias = $strAliasPrefix . 'language_id__language_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Project Early Binding
			$strAlias = $strAliasPrefix . 'project_id__project_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objProject = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'user_id__user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroLogs from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroLog[]
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
					$objItem = NarroLog::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroLog::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroLog object,
		 * by LogId Index(es)
		 * @param integer $intLogId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog
		*/
		public static function LoadByLogId($intLogId, $objOptionalClauses = null) {
			return NarroLog::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLog()->LogId, $intLogId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroLog objects,
		 * by LanguageId, ProjectId Index(es)
		 * @param integer $intLanguageId
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public static function LoadArrayByLanguageIdProjectId($intLanguageId, $intProjectId, $objOptionalClauses = null) {
			// Call NarroLog::QueryArray to perform the LoadArrayByLanguageIdProjectId query
			try {
				return NarroLog::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::NarroLog()->LanguageId, $intLanguageId),
					QQ::Equal(QQN::NarroLog()->ProjectId, $intProjectId)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroLogs
		 * by LanguageId, ProjectId Index(es)
		 * @param integer $intLanguageId
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByLanguageIdProjectId($intLanguageId, $intProjectId) {
			// Call NarroLog::QueryCount to perform the CountByLanguageIdProjectId query
			return NarroLog::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroLog()->LanguageId, $intLanguageId),
				QQ::Equal(QQN::NarroLog()->ProjectId, $intProjectId)
				)
			);
		}
			
		/**
		 * Load an array of NarroLog objects,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public static function LoadArrayByProjectId($intProjectId, $objOptionalClauses = null) {
			// Call NarroLog::QueryArray to perform the LoadArrayByProjectId query
			try {
				return NarroLog::QueryArray(
					QQ::Equal(QQN::NarroLog()->ProjectId, $intProjectId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroLogs
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectId($intProjectId) {
			// Call NarroLog::QueryCount to perform the CountByProjectId query
			return NarroLog::QueryCount(
				QQ::Equal(QQN::NarroLog()->ProjectId, $intProjectId)
			);
		}
			
		/**
		 * Load an array of NarroLog objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call NarroLog::QueryArray to perform the LoadArrayByUserId query
			try {
				return NarroLog::QueryArray(
					QQ::Equal(QQN::NarroLog()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroLogs
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call NarroLog::QueryCount to perform the CountByUserId query
			return NarroLog::QueryCount(
				QQ::Equal(QQN::NarroLog()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load an array of NarroLog objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroLog::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroLog::QueryArray(
					QQ::Equal(QQN::NarroLog()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroLogs
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroLog::QueryCount to perform the CountByLanguageId query
			return NarroLog::QueryCount(
				QQ::Equal(QQN::NarroLog()->LanguageId, $intLanguageId)
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

            if (!isset($this->_arrHistory['LogId']))
                $this->_arrHistory['LogId'] = $this->LogId;
            if (!isset($this->_arrHistory['LanguageId']))
                $this->_arrHistory['LanguageId'] = $this->LanguageId;
            if (!isset($this->_arrHistory['ProjectId']))
                $this->_arrHistory['ProjectId'] = $this->ProjectId;
            if (!isset($this->_arrHistory['UserId']))
                $this->_arrHistory['UserId'] = $this->UserId;
            if (!isset($this->_arrHistory['Message']))
                $this->_arrHistory['Message'] = $this->Message;
            if (!isset($this->_arrHistory['Priority']))
                $this->_arrHistory['Priority'] = $this->Priority;
            if (!isset($this->_arrHistory['Date']))
                $this->_arrHistory['Date'] = $this->Date;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroLog
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroLog::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_log` (
							`language_id`,
							`project_id`,
							`user_id`,
							`message`,
							`priority`,
							`date`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->intProjectId) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->strMessage) . ',
							' . $objDatabase->SqlVariable($this->intPriority) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intLogId = $objDatabase->InsertId('narro_log', 'log_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['LanguageId'] !== $this->LanguageId ||
                        (
                            $this->LanguageId instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageId'] !== (string) $this->LanguageId
                        )
                    )
                        $arrUpdateChanges[] = '`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId);
                    if (
                        $this->_arrHistory['ProjectId'] !== $this->ProjectId ||
                        (
                            $this->ProjectId instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectId'] !== (string) $this->ProjectId
                        )
                    )
                        $arrUpdateChanges[] = '`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId);
                    if (
                        $this->_arrHistory['UserId'] !== $this->UserId ||
                        (
                            $this->UserId instanceof QDateTime &&
                            (string) $this->_arrHistory['UserId'] !== (string) $this->UserId
                        )
                    )
                        $arrUpdateChanges[] = '`user_id` = ' . $objDatabase->SqlVariable($this->intUserId);
                    if (
                        $this->_arrHistory['Message'] !== $this->Message ||
                        (
                            $this->Message instanceof QDateTime &&
                            (string) $this->_arrHistory['Message'] !== (string) $this->Message
                        )
                    )
                        $arrUpdateChanges[] = '`message` = ' . $objDatabase->SqlVariable($this->strMessage);
                    if (
                        $this->_arrHistory['Priority'] !== $this->Priority ||
                        (
                            $this->Priority instanceof QDateTime &&
                            (string) $this->_arrHistory['Priority'] !== (string) $this->Priority
                        )
                    )
                        $arrUpdateChanges[] = '`priority` = ' . $objDatabase->SqlVariable($this->intPriority);
                    if (
                        $this->_arrHistory['Date'] !== $this->Date ||
                        (
                            $this->Date instanceof QDateTime &&
                            (string) $this->_arrHistory['Date'] !== (string) $this->Date
                        )
                    )
                        $arrUpdateChanges[] = '`date` = ' . $objDatabase->SqlVariable($this->dttDate);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_log`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`log_id` = ' . $objDatabase->SqlVariable($this->intLogId) . '
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
		 * Delete this NarroLog
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLogId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroLog with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroLog::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($this->intLogId) . '');
		}

		/**
		 * Delete all NarroLogs
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroLog::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`');
		}

		/**
		 * Truncate narro_log table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroLog::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_log`');
		}

		/**
		 * Reload this NarroLog from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroLog object.');

			// Reload the Object
			$objReloaded = NarroLog::Load($this->intLogId);

			// Update $this's local variables to match
			$this->LanguageId = $objReloaded->LanguageId;
			$this->ProjectId = $objReloaded->ProjectId;
			$this->UserId = $objReloaded->UserId;
			$this->strMessage = $objReloaded->strMessage;
			$this->intPriority = $objReloaded->intPriority;
			$this->dttDate = $objReloaded->dttDate;
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
				case 'LogId':
					/**
					 * Gets the value for intLogId (Read-Only PK)
					 * @return integer
					 */
					return $this->intLogId;

				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId 
					 * @return integer
					 */
					return $this->intLanguageId;

				case 'ProjectId':
					/**
					 * Gets the value for intProjectId 
					 * @return integer
					 */
					return $this->intProjectId;

				case 'UserId':
					/**
					 * Gets the value for intUserId 
					 * @return integer
					 */
					return $this->intUserId;

				case 'Message':
					/**
					 * Gets the value for strMessage (Not Null)
					 * @return string
					 */
					return $this->strMessage;

				case 'Priority':
					/**
					 * Gets the value for intPriority (Not Null)
					 * @return integer
					 */
					return $this->intPriority;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;


				///////////////////
				// Member Objects
				///////////////////
				case 'Language':
					/**
					 * Gets the value for the NarroLanguage object referenced by intLanguageId 
					 * @return NarroLanguage
					 */
					try {
						if ((!$this->objLanguage) && (!is_null($this->intLanguageId)))
							$this->objLanguage = NarroLanguage::Load($this->intLanguageId);
						return $this->objLanguage;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Project':
					/**
					 * Gets the value for the NarroProject object referenced by intProjectId 
					 * @return NarroProject
					 */
					try {
						if ((!$this->objProject) && (!is_null($this->intProjectId)))
							$this->objProject = NarroProject::Load($this->intProjectId);
						return $this->objProject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'User':
					/**
					 * Gets the value for the NarroUser object referenced by intUserId 
					 * @return NarroUser
					 */
					try {
						if ((!$this->objUser) && (!is_null($this->intUserId)))
							$this->objUser = NarroUser::Load($this->intUserId);
						return $this->objUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'LanguageId':
					/**
					 * Sets the value for intLanguageId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLanguage = null;
						return ($this->intLanguageId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectId':
					/**
					 * Sets the value for intProjectId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProject = null;
						return ($this->intProjectId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserId':
					/**
					 * Sets the value for intUserId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUser = null;
						return ($this->intUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Message':
					/**
					 * Sets the value for strMessage (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMessage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Priority':
					/**
					 * Sets the value for intPriority (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPriority = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for dttDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Language':
					/**
					 * Sets the value for the NarroLanguage object referenced by intLanguageId 
					 * @param NarroLanguage $mixValue
					 * @return NarroLanguage
					 */
					if (is_null($mixValue)) {
						$this->intLanguageId = null;
						$this->objLanguage = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroLanguage object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroLanguage');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroLanguage object
						if (is_null($mixValue->LanguageId))
							throw new QCallerException('Unable to set an unsaved Language for this NarroLog');

						// Update Local Member Variables
						$this->objLanguage = $mixValue;
						$this->intLanguageId = $mixValue->LanguageId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Project':
					/**
					 * Sets the value for the NarroProject object referenced by intProjectId 
					 * @param NarroProject $mixValue
					 * @return NarroProject
					 */
					if (is_null($mixValue)) {
						$this->intProjectId = null;
						$this->objProject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroProject object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroProject');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroProject object
						if (is_null($mixValue->ProjectId))
							throw new QCallerException('Unable to set an unsaved Project for this NarroLog');

						// Update Local Member Variables
						$this->objProject = $mixValue;
						$this->intProjectId = $mixValue->ProjectId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'User':
					/**
					 * Sets the value for the NarroUser object referenced by intUserId 
					 * @param NarroUser $mixValue
					 * @return NarroUser
					 */
					if (is_null($mixValue)) {
						$this->intUserId = null;
						$this->objUser = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroUser object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroUser');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroUser object
						if (is_null($mixValue->UserId))
							throw new QCallerException('Unable to set an unsaved User for this NarroLog');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->UserId;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroLog"><sequence>';
			$strToReturn .= '<element name="LogId" type="xsd:int"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="Project" type="xsd1:NarroProject"/>';
			$strToReturn .= '<element name="User" type="xsd1:NarroUser"/>';
			$strToReturn .= '<element name="Message" type="xsd:string"/>';
			$strToReturn .= '<element name="Priority" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroLog', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroLog'] = NarroLog::GetSoapComplexTypeXml();
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroProject::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroUser::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroLog::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroLog();
			if (property_exists($objSoapObject, 'LogId'))
				$objToReturn->intLogId = $objSoapObject->LogId;
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = NarroProject::GetObjectFromSoapObject($objSoapObject->Project);
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = NarroUser::GetObjectFromSoapObject($objSoapObject->User);
			if (property_exists($objSoapObject, 'Message'))
				$objToReturn->strMessage = $objSoapObject->Message;
			if (property_exists($objSoapObject, 'Priority'))
				$objToReturn->intPriority = $objSoapObject->Priority;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroLog::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLanguage)
				$objObject->objLanguage = NarroLanguage::GetSoapObjectFromObject($objObject->objLanguage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLanguageId = null;
			if ($objObject->objProject)
				$objObject->objProject = NarroProject::GetSoapObjectFromObject($objObject->objProject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectId = null;
			if ($objObject->objUser)
				$objObject->objUser = NarroUser::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['LogId'] = $this->intLogId;
			$iArray['LanguageId'] = $this->intLanguageId;
			$iArray['ProjectId'] = $this->intProjectId;
			$iArray['UserId'] = $this->intUserId;
			$iArray['Message'] = $this->strMessage;
			$iArray['Priority'] = $this->intPriority;
			$iArray['Date'] = $this->dttDate;
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
     * @property-read QQNode $LogId
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $ProjectId
     * @property-read QQNodeNarroProject $Project
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $Message
     * @property-read QQNode $Priority
     * @property-read QQNode $Date
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroLog extends QQNode {
		protected $strTableName = 'narro_log';
		protected $strPrimaryKey = 'log_id';
		protected $strClassName = 'NarroLog';
		public function __get($strName) {
			switch ($strName) {
				case 'LogId':
					return new QQNode('log_id', 'LogId', 'Integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'Integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'Project', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'Integer', $this);
				case 'Message':
					return new QQNode('message', 'Message', 'Blob', $this);
				case 'Priority':
					return new QQNode('priority', 'Priority', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('log_id', 'LogId', 'Integer', $this);
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
     * @property-read QQNode $LogId
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $ProjectId
     * @property-read QQNodeNarroProject $Project
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $Message
     * @property-read QQNode $Priority
     * @property-read QQNode $Date
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroLog extends QQReverseReferenceNode {
		protected $strTableName = 'narro_log';
		protected $strPrimaryKey = 'log_id';
		protected $strClassName = 'NarroLog';
		public function __get($strName) {
			switch ($strName) {
				case 'LogId':
					return new QQNode('log_id', 'LogId', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'Project', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'integer', $this);
				case 'Message':
					return new QQNode('message', 'Message', 'string', $this);
				case 'Priority':
					return new QQNode('priority', 'Priority', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('log_id', 'LogId', 'integer', $this);
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
