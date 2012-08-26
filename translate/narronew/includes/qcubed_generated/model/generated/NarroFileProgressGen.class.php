<?php
	/**
	 * The abstract NarroFileProgressGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroFileProgress subclass which
	 * extends this NarroFileProgressGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroFileProgress class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $FileProgressId the value for intFileProgressId (Read-Only PK)
	 * @property integer $FileId the value for intFileId (Not Null)
	 * @property integer $LanguageId the value for intLanguageId (Not Null)
	 * @property string $FileMd5 the value for strFileMd5 
	 * @property string $Header the value for strHeader 
	 * @property integer $TotalTextCount the value for intTotalTextCount (Not Null)
	 * @property integer $ApprovedTextCount the value for intApprovedTextCount (Not Null)
	 * @property integer $FuzzyTextCount the value for intFuzzyTextCount (Not Null)
	 * @property integer $ProgressPercent the value for intProgressPercent (Not Null)
	 * @property boolean $Export the value for blnExport 
	 * @property NarroFile $File the value for the NarroFile object referenced by intFileId (Not Null)
	 * @property NarroLanguage $Language the value for the NarroLanguage object referenced by intLanguageId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroFileProgressGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['FileProgressId'] = null;
                $this->_arrHistory['FileId'] = null;
                $this->_arrHistory['LanguageId'] = null;
                $this->_arrHistory['FileMd5'] = null;
                $this->_arrHistory['Header'] = null;
                $this->_arrHistory['TotalTextCount'] = null;
                $this->_arrHistory['ApprovedTextCount'] = null;
                $this->_arrHistory['FuzzyTextCount'] = null;
                $this->_arrHistory['ProgressPercent'] = null;
                $this->_arrHistory['Export'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_file_progress.file_progress_id
		 * @var integer intFileProgressId
		 */
		protected $intFileProgressId;
		const FileProgressIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.file_id
		 * @var integer intFileId
		 */
		protected $intFileId;
		const FileIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.file_md5
		 * @var string strFileMd5
		 */
		protected $strFileMd5;
		const FileMd5MaxLength = 32;
		const FileMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.header
		 * @var string strHeader
		 */
		protected $strHeader;
		const HeaderDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.total_text_count
		 * @var integer intTotalTextCount
		 */
		protected $intTotalTextCount;
		const TotalTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.approved_text_count
		 * @var integer intApprovedTextCount
		 */
		protected $intApprovedTextCount;
		const ApprovedTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.fuzzy_text_count
		 * @var integer intFuzzyTextCount
		 */
		protected $intFuzzyTextCount;
		const FuzzyTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.progress_percent
		 * @var integer intProgressPercent
		 */
		protected $intProgressPercent;
		const ProgressPercentDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file_progress.export
		 * @var boolean blnExport
		 */
		protected $blnExport;
		const ExportDefault = null;


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
		 * in the database column narro_file_progress.file_id.
		 *
		 * NOTE: Always use the File property getter to correctly retrieve this NarroFile object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroFile objFile
		 */
		protected $objFile;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_file_progress.language_id.
		 *
		 * NOTE: Always use the Language property getter to correctly retrieve this NarroLanguage object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroLanguage objLanguage
		 */
		protected $objLanguage;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intFileProgressId = NarroFileProgress::FileProgressIdDefault;
			$this->intFileId = NarroFileProgress::FileIdDefault;
			$this->intLanguageId = NarroFileProgress::LanguageIdDefault;
			$this->strFileMd5 = NarroFileProgress::FileMd5Default;
			$this->strHeader = NarroFileProgress::HeaderDefault;
			$this->intTotalTextCount = NarroFileProgress::TotalTextCountDefault;
			$this->intApprovedTextCount = NarroFileProgress::ApprovedTextCountDefault;
			$this->intFuzzyTextCount = NarroFileProgress::FuzzyTextCountDefault;
			$this->intProgressPercent = NarroFileProgress::ProgressPercentDefault;
			$this->blnExport = NarroFileProgress::ExportDefault;
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
		 * Load a NarroFileProgress from PK Info
		 * @param integer $intFileProgressId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress
		 */
		public static function Load($intFileProgressId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroFileProgress::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroFileProgress()->FileProgressId, $intFileProgressId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroFileProgresses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroFileProgress::QueryArray to perform the LoadAll query
			try {
				return NarroFileProgress::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroFileProgresses
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroFileProgress::QueryCount to perform the CountAll query
			return NarroFileProgress::QueryCount(QQ::All());
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
			$objDatabase = NarroFileProgress::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroFileProgress-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_file_progress');
			NarroFileProgress::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_file_progress');

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
		 * Static Qcubed Query method to query for a single NarroFileProgress object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroFileProgress the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFileProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroFileProgress object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroFileProgress::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroFileProgress::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroFileProgress objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroFileProgress[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFileProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroFileProgress::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroFileProgress objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFileProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroFileProgress::GetDatabase();

			$strQuery = NarroFileProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrofileprogress', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroFileProgress::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroFileProgress
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_file_progress';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'file_progress_id', $strAliasPrefix . 'file_progress_id');
			$objBuilder->AddSelectItem($strTableName, 'file_id', $strAliasPrefix . 'file_id');
			$objBuilder->AddSelectItem($strTableName, 'language_id', $strAliasPrefix . 'language_id');
			$objBuilder->AddSelectItem($strTableName, 'file_md5', $strAliasPrefix . 'file_md5');
			$objBuilder->AddSelectItem($strTableName, 'header', $strAliasPrefix . 'header');
			$objBuilder->AddSelectItem($strTableName, 'total_text_count', $strAliasPrefix . 'total_text_count');
			$objBuilder->AddSelectItem($strTableName, 'approved_text_count', $strAliasPrefix . 'approved_text_count');
			$objBuilder->AddSelectItem($strTableName, 'fuzzy_text_count', $strAliasPrefix . 'fuzzy_text_count');
			$objBuilder->AddSelectItem($strTableName, 'progress_percent', $strAliasPrefix . 'progress_percent');
			$objBuilder->AddSelectItem($strTableName, 'export', $strAliasPrefix . 'export');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroFileProgress from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroFileProgress::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroFileProgress
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NarroFileProgress object
			$objToReturn = new NarroFileProgress();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'file_progress_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'file_progress_id'] : $strAliasPrefix . 'file_progress_id';
			$objToReturn->intFileProgressId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'file_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'file_id'] : $strAliasPrefix . 'file_id';
			$objToReturn->intFileId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_id'] : $strAliasPrefix . 'language_id';
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'file_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'file_md5'] : $strAliasPrefix . 'file_md5';
			$objToReturn->strFileMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'header', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'header'] : $strAliasPrefix . 'header';
			$objToReturn->strHeader = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'total_text_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'total_text_count'] : $strAliasPrefix . 'total_text_count';
			$objToReturn->intTotalTextCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'approved_text_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'approved_text_count'] : $strAliasPrefix . 'approved_text_count';
			$objToReturn->intApprovedTextCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fuzzy_text_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fuzzy_text_count'] : $strAliasPrefix . 'fuzzy_text_count';
			$objToReturn->intFuzzyTextCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'progress_percent', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'progress_percent'] : $strAliasPrefix . 'progress_percent';
			$objToReturn->intProgressPercent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'export', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'export'] : $strAliasPrefix . 'export';
			$objToReturn->blnExport = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->FileProgressId != $objPreviousItem->FileProgressId) {
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
				$strAliasPrefix = 'narro_file_progress__';

			// Check for File Early Binding
			$strAlias = $strAliasPrefix . 'file_id__file_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFile = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'file_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Language Early Binding
			$strAlias = $strAliasPrefix . 'language_id__language_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroFileProgresses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroFileProgress[]
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
					$objItem = NarroFileProgress::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroFileProgress::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroFileProgress object,
		 * by FileProgressId Index(es)
		 * @param integer $intFileProgressId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress
		*/
		public static function LoadByFileProgressId($intFileProgressId, $objOptionalClauses = null) {
			return NarroFileProgress::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroFileProgress()->FileProgressId, $intFileProgressId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroFileProgress object,
		 * by FileId, LanguageId Index(es)
		 * @param integer $intFileId
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress
		*/
		public static function LoadByFileIdLanguageId($intFileId, $intLanguageId, $objOptionalClauses = null) {
			return NarroFileProgress::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroFileProgress()->FileId, $intFileId),
					QQ::Equal(QQN::NarroFileProgress()->LanguageId, $intLanguageId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroFileProgress objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroFileProgress::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroFileProgress::QueryArray(
					QQ::Equal(QQN::NarroFileProgress()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFileProgresses
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroFileProgress::QueryCount to perform the CountByLanguageId query
			return NarroFileProgress::QueryCount(
				QQ::Equal(QQN::NarroFileProgress()->LanguageId, $intLanguageId)
			);
		}
			
		/**
		 * Load an array of NarroFileProgress objects,
		 * by FileId Index(es)
		 * @param integer $intFileId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		*/
		public static function LoadArrayByFileId($intFileId, $objOptionalClauses = null) {
			// Call NarroFileProgress::QueryArray to perform the LoadArrayByFileId query
			try {
				return NarroFileProgress::QueryArray(
					QQ::Equal(QQN::NarroFileProgress()->FileId, $intFileId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFileProgresses
		 * by FileId Index(es)
		 * @param integer $intFileId
		 * @return int
		*/
		public static function CountByFileId($intFileId) {
			// Call NarroFileProgress::QueryCount to perform the CountByFileId query
			return NarroFileProgress::QueryCount(
				QQ::Equal(QQN::NarroFileProgress()->FileId, $intFileId)
			);
		}
			
		/**
		 * Load an array of NarroFileProgress objects,
		 * by FileId, LanguageId, Export Index(es)
		 * @param integer $intFileId
		 * @param integer $intLanguageId
		 * @param boolean $blnExport
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		*/
		public static function LoadArrayByFileIdLanguageIdExport($intFileId, $intLanguageId, $blnExport, $objOptionalClauses = null) {
			// Call NarroFileProgress::QueryArray to perform the LoadArrayByFileIdLanguageIdExport query
			try {
				return NarroFileProgress::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::NarroFileProgress()->FileId, $intFileId),
					QQ::Equal(QQN::NarroFileProgress()->LanguageId, $intLanguageId),
					QQ::Equal(QQN::NarroFileProgress()->Export, $blnExport)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFileProgresses
		 * by FileId, LanguageId, Export Index(es)
		 * @param integer $intFileId
		 * @param integer $intLanguageId
		 * @param boolean $blnExport
		 * @return int
		*/
		public static function CountByFileIdLanguageIdExport($intFileId, $intLanguageId, $blnExport) {
			// Call NarroFileProgress::QueryCount to perform the CountByFileIdLanguageIdExport query
			return NarroFileProgress::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroFileProgress()->FileId, $intFileId),
				QQ::Equal(QQN::NarroFileProgress()->LanguageId, $intLanguageId),
				QQ::Equal(QQN::NarroFileProgress()->Export, $blnExport)
				)
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

            if (!isset($this->_arrHistory['FileProgressId']))
                $this->_arrHistory['FileProgressId'] = $this->FileProgressId;
            if (!isset($this->_arrHistory['FileId']))
                $this->_arrHistory['FileId'] = $this->FileId;
            if (!isset($this->_arrHistory['LanguageId']))
                $this->_arrHistory['LanguageId'] = $this->LanguageId;
            if (!isset($this->_arrHistory['FileMd5']))
                $this->_arrHistory['FileMd5'] = $this->FileMd5;
            if (!isset($this->_arrHistory['Header']))
                $this->_arrHistory['Header'] = $this->Header;
            if (!isset($this->_arrHistory['TotalTextCount']))
                $this->_arrHistory['TotalTextCount'] = $this->TotalTextCount;
            if (!isset($this->_arrHistory['ApprovedTextCount']))
                $this->_arrHistory['ApprovedTextCount'] = $this->ApprovedTextCount;
            if (!isset($this->_arrHistory['FuzzyTextCount']))
                $this->_arrHistory['FuzzyTextCount'] = $this->FuzzyTextCount;
            if (!isset($this->_arrHistory['ProgressPercent']))
                $this->_arrHistory['ProgressPercent'] = $this->ProgressPercent;
            if (!isset($this->_arrHistory['Export']))
                $this->_arrHistory['Export'] = $this->Export;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroFileProgress
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroFileProgress::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_file_progress` (
							`file_id`,
							`language_id`,
							`file_md5`,
							`header`,
							`total_text_count`,
							`approved_text_count`,
							`fuzzy_text_count`,
							`progress_percent`,
							`export`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intFileId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->strFileMd5) . ',
							' . $objDatabase->SqlVariable($this->strHeader) . ',
							' . $objDatabase->SqlVariable($this->intTotalTextCount) . ',
							' . $objDatabase->SqlVariable($this->intApprovedTextCount) . ',
							' . $objDatabase->SqlVariable($this->intFuzzyTextCount) . ',
							' . $objDatabase->SqlVariable($this->intProgressPercent) . ',
							' . $objDatabase->SqlVariable($this->blnExport) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intFileProgressId = $objDatabase->InsertId('narro_file_progress', 'file_progress_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['FileId'] !== $this->FileId ||
                        (
                            $this->FileId instanceof QDateTime &&
                            (string) $this->_arrHistory['FileId'] !== (string) $this->FileId
                        )
                    )
                        $arrUpdateChanges[] = '`file_id` = ' . $objDatabase->SqlVariable($this->intFileId);
                    if (
                        $this->_arrHistory['LanguageId'] !== $this->LanguageId ||
                        (
                            $this->LanguageId instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageId'] !== (string) $this->LanguageId
                        )
                    )
                        $arrUpdateChanges[] = '`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId);
                    if (
                        $this->_arrHistory['FileMd5'] !== $this->FileMd5 ||
                        (
                            $this->FileMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['FileMd5'] !== (string) $this->FileMd5
                        )
                    )
                        $arrUpdateChanges[] = '`file_md5` = ' . $objDatabase->SqlVariable($this->strFileMd5);
                    if (
                        $this->_arrHistory['Header'] !== $this->Header ||
                        (
                            $this->Header instanceof QDateTime &&
                            (string) $this->_arrHistory['Header'] !== (string) $this->Header
                        )
                    )
                        $arrUpdateChanges[] = '`header` = ' . $objDatabase->SqlVariable($this->strHeader);
                    if (
                        $this->_arrHistory['TotalTextCount'] !== $this->TotalTextCount ||
                        (
                            $this->TotalTextCount instanceof QDateTime &&
                            (string) $this->_arrHistory['TotalTextCount'] !== (string) $this->TotalTextCount
                        )
                    )
                        $arrUpdateChanges[] = '`total_text_count` = ' . $objDatabase->SqlVariable($this->intTotalTextCount);
                    if (
                        $this->_arrHistory['ApprovedTextCount'] !== $this->ApprovedTextCount ||
                        (
                            $this->ApprovedTextCount instanceof QDateTime &&
                            (string) $this->_arrHistory['ApprovedTextCount'] !== (string) $this->ApprovedTextCount
                        )
                    )
                        $arrUpdateChanges[] = '`approved_text_count` = ' . $objDatabase->SqlVariable($this->intApprovedTextCount);
                    if (
                        $this->_arrHistory['FuzzyTextCount'] !== $this->FuzzyTextCount ||
                        (
                            $this->FuzzyTextCount instanceof QDateTime &&
                            (string) $this->_arrHistory['FuzzyTextCount'] !== (string) $this->FuzzyTextCount
                        )
                    )
                        $arrUpdateChanges[] = '`fuzzy_text_count` = ' . $objDatabase->SqlVariable($this->intFuzzyTextCount);
                    if (
                        $this->_arrHistory['ProgressPercent'] !== $this->ProgressPercent ||
                        (
                            $this->ProgressPercent instanceof QDateTime &&
                            (string) $this->_arrHistory['ProgressPercent'] !== (string) $this->ProgressPercent
                        )
                    )
                        $arrUpdateChanges[] = '`progress_percent` = ' . $objDatabase->SqlVariable($this->intProgressPercent);
                    if (
                        $this->_arrHistory['Export'] !== $this->Export ||
                        (
                            $this->Export instanceof QDateTime &&
                            (string) $this->_arrHistory['Export'] !== (string) $this->Export
                        )
                    )
                        $arrUpdateChanges[] = '`export` = ' . $objDatabase->SqlVariable($this->blnExport);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_file_progress`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`file_progress_id` = ' . $objDatabase->SqlVariable($this->intFileProgressId) . '
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
		 * Delete this NarroFileProgress
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intFileProgressId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroFileProgress with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroFileProgress::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($this->intFileProgressId) . '');
		}

		/**
		 * Delete all NarroFileProgresses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroFileProgress::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`');
		}

		/**
		 * Truncate narro_file_progress table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroFileProgress::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_file_progress`');
		}

		/**
		 * Reload this NarroFileProgress from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroFileProgress object.');

			// Reload the Object
			$objReloaded = NarroFileProgress::Load($this->intFileProgressId);

			// Update $this's local variables to match
			$this->FileId = $objReloaded->FileId;
			$this->LanguageId = $objReloaded->LanguageId;
			$this->strFileMd5 = $objReloaded->strFileMd5;
			$this->strHeader = $objReloaded->strHeader;
			$this->intTotalTextCount = $objReloaded->intTotalTextCount;
			$this->intApprovedTextCount = $objReloaded->intApprovedTextCount;
			$this->intFuzzyTextCount = $objReloaded->intFuzzyTextCount;
			$this->intProgressPercent = $objReloaded->intProgressPercent;
			$this->blnExport = $objReloaded->blnExport;
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
				case 'FileProgressId':
					/**
					 * Gets the value for intFileProgressId (Read-Only PK)
					 * @return integer
					 */
					return $this->intFileProgressId;

				case 'FileId':
					/**
					 * Gets the value for intFileId (Not Null)
					 * @return integer
					 */
					return $this->intFileId;

				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId (Not Null)
					 * @return integer
					 */
					return $this->intLanguageId;

				case 'FileMd5':
					/**
					 * Gets the value for strFileMd5 
					 * @return string
					 */
					return $this->strFileMd5;

				case 'Header':
					/**
					 * Gets the value for strHeader 
					 * @return string
					 */
					return $this->strHeader;

				case 'TotalTextCount':
					/**
					 * Gets the value for intTotalTextCount (Not Null)
					 * @return integer
					 */
					return $this->intTotalTextCount;

				case 'ApprovedTextCount':
					/**
					 * Gets the value for intApprovedTextCount (Not Null)
					 * @return integer
					 */
					return $this->intApprovedTextCount;

				case 'FuzzyTextCount':
					/**
					 * Gets the value for intFuzzyTextCount (Not Null)
					 * @return integer
					 */
					return $this->intFuzzyTextCount;

				case 'ProgressPercent':
					/**
					 * Gets the value for intProgressPercent (Not Null)
					 * @return integer
					 */
					return $this->intProgressPercent;

				case 'Export':
					/**
					 * Gets the value for blnExport 
					 * @return boolean
					 */
					return $this->blnExport;


				///////////////////
				// Member Objects
				///////////////////
				case 'File':
					/**
					 * Gets the value for the NarroFile object referenced by intFileId (Not Null)
					 * @return NarroFile
					 */
					try {
						if ((!$this->objFile) && (!is_null($this->intFileId)))
							$this->objFile = NarroFile::Load($this->intFileId);
						return $this->objFile;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Language':
					/**
					 * Gets the value for the NarroLanguage object referenced by intLanguageId (Not Null)
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
				case 'FileId':
					/**
					 * Sets the value for intFileId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFile = null;
						return ($this->intFileId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LanguageId':
					/**
					 * Sets the value for intLanguageId (Not Null)
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

				case 'FileMd5':
					/**
					 * Sets the value for strFileMd5 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFileMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Header':
					/**
					 * Sets the value for strHeader 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strHeader = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TotalTextCount':
					/**
					 * Sets the value for intTotalTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTotalTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovedTextCount':
					/**
					 * Sets the value for intApprovedTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intApprovedTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FuzzyTextCount':
					/**
					 * Sets the value for intFuzzyTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intFuzzyTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProgressPercent':
					/**
					 * Sets the value for intProgressPercent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intProgressPercent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Export':
					/**
					 * Sets the value for blnExport 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnExport = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'File':
					/**
					 * Sets the value for the NarroFile object referenced by intFileId (Not Null)
					 * @param NarroFile $mixValue
					 * @return NarroFile
					 */
					if (is_null($mixValue)) {
						$this->intFileId = null;
						$this->objFile = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroFile object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroFile');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroFile object
						if (is_null($mixValue->FileId))
							throw new QCallerException('Unable to set an unsaved File for this NarroFileProgress');

						// Update Local Member Variables
						$this->objFile = $mixValue;
						$this->intFileId = $mixValue->FileId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Language':
					/**
					 * Sets the value for the NarroLanguage object referenced by intLanguageId (Not Null)
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
							throw new QCallerException('Unable to set an unsaved Language for this NarroFileProgress');

						// Update Local Member Variables
						$this->objLanguage = $mixValue;
						$this->intLanguageId = $mixValue->LanguageId;

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
			$strToReturn = '<complexType name="NarroFileProgress"><sequence>';
			$strToReturn .= '<element name="FileProgressId" type="xsd:int"/>';
			$strToReturn .= '<element name="File" type="xsd1:NarroFile"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="FileMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="Header" type="xsd:string"/>';
			$strToReturn .= '<element name="TotalTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="ApprovedTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="FuzzyTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="ProgressPercent" type="xsd:int"/>';
			$strToReturn .= '<element name="Export" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroFileProgress', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroFileProgress'] = NarroFileProgress::GetSoapComplexTypeXml();
				NarroFile::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroFileProgress::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroFileProgress();
			if (property_exists($objSoapObject, 'FileProgressId'))
				$objToReturn->intFileProgressId = $objSoapObject->FileProgressId;
			if ((property_exists($objSoapObject, 'File')) &&
				($objSoapObject->File))
				$objToReturn->File = NarroFile::GetObjectFromSoapObject($objSoapObject->File);
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if (property_exists($objSoapObject, 'FileMd5'))
				$objToReturn->strFileMd5 = $objSoapObject->FileMd5;
			if (property_exists($objSoapObject, 'Header'))
				$objToReturn->strHeader = $objSoapObject->Header;
			if (property_exists($objSoapObject, 'TotalTextCount'))
				$objToReturn->intTotalTextCount = $objSoapObject->TotalTextCount;
			if (property_exists($objSoapObject, 'ApprovedTextCount'))
				$objToReturn->intApprovedTextCount = $objSoapObject->ApprovedTextCount;
			if (property_exists($objSoapObject, 'FuzzyTextCount'))
				$objToReturn->intFuzzyTextCount = $objSoapObject->FuzzyTextCount;
			if (property_exists($objSoapObject, 'ProgressPercent'))
				$objToReturn->intProgressPercent = $objSoapObject->ProgressPercent;
			if (property_exists($objSoapObject, 'Export'))
				$objToReturn->blnExport = $objSoapObject->Export;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroFileProgress::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objFile)
				$objObject->objFile = NarroFile::GetSoapObjectFromObject($objObject->objFile, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFileId = null;
			if ($objObject->objLanguage)
				$objObject->objLanguage = NarroLanguage::GetSoapObjectFromObject($objObject->objLanguage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLanguageId = null;
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
			$iArray['FileProgressId'] = $this->intFileProgressId;
			$iArray['FileId'] = $this->intFileId;
			$iArray['LanguageId'] = $this->intLanguageId;
			$iArray['FileMd5'] = $this->strFileMd5;
			$iArray['Header'] = $this->strHeader;
			$iArray['TotalTextCount'] = $this->intTotalTextCount;
			$iArray['ApprovedTextCount'] = $this->intApprovedTextCount;
			$iArray['FuzzyTextCount'] = $this->intFuzzyTextCount;
			$iArray['ProgressPercent'] = $this->intProgressPercent;
			$iArray['Export'] = $this->blnExport;
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
     * @property-read QQNode $FileProgressId
     * @property-read QQNode $FileId
     * @property-read QQNodeNarroFile $File
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $FileMd5
     * @property-read QQNode $Header
     * @property-read QQNode $TotalTextCount
     * @property-read QQNode $ApprovedTextCount
     * @property-read QQNode $FuzzyTextCount
     * @property-read QQNode $ProgressPercent
     * @property-read QQNode $Export
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroFileProgress extends QQNode {
		protected $strTableName = 'narro_file_progress';
		protected $strPrimaryKey = 'file_progress_id';
		protected $strClassName = 'NarroFileProgress';
		public function __get($strName) {
			switch ($strName) {
				case 'FileProgressId':
					return new QQNode('file_progress_id', 'FileProgressId', 'Integer', $this);
				case 'FileId':
					return new QQNode('file_id', 'FileId', 'Integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'File', 'Integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'Integer', $this);
				case 'FileMd5':
					return new QQNode('file_md5', 'FileMd5', 'VarChar', $this);
				case 'Header':
					return new QQNode('header', 'Header', 'Blob', $this);
				case 'TotalTextCount':
					return new QQNode('total_text_count', 'TotalTextCount', 'Integer', $this);
				case 'ApprovedTextCount':
					return new QQNode('approved_text_count', 'ApprovedTextCount', 'Integer', $this);
				case 'FuzzyTextCount':
					return new QQNode('fuzzy_text_count', 'FuzzyTextCount', 'Integer', $this);
				case 'ProgressPercent':
					return new QQNode('progress_percent', 'ProgressPercent', 'Integer', $this);
				case 'Export':
					return new QQNode('export', 'Export', 'Bit', $this);

				case '_PrimaryKeyNode':
					return new QQNode('file_progress_id', 'FileProgressId', 'Integer', $this);
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
     * @property-read QQNode $FileProgressId
     * @property-read QQNode $FileId
     * @property-read QQNodeNarroFile $File
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $FileMd5
     * @property-read QQNode $Header
     * @property-read QQNode $TotalTextCount
     * @property-read QQNode $ApprovedTextCount
     * @property-read QQNode $FuzzyTextCount
     * @property-read QQNode $ProgressPercent
     * @property-read QQNode $Export
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroFileProgress extends QQReverseReferenceNode {
		protected $strTableName = 'narro_file_progress';
		protected $strPrimaryKey = 'file_progress_id';
		protected $strClassName = 'NarroFileProgress';
		public function __get($strName) {
			switch ($strName) {
				case 'FileProgressId':
					return new QQNode('file_progress_id', 'FileProgressId', 'integer', $this);
				case 'FileId':
					return new QQNode('file_id', 'FileId', 'integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'File', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'integer', $this);
				case 'FileMd5':
					return new QQNode('file_md5', 'FileMd5', 'string', $this);
				case 'Header':
					return new QQNode('header', 'Header', 'string', $this);
				case 'TotalTextCount':
					return new QQNode('total_text_count', 'TotalTextCount', 'integer', $this);
				case 'ApprovedTextCount':
					return new QQNode('approved_text_count', 'ApprovedTextCount', 'integer', $this);
				case 'FuzzyTextCount':
					return new QQNode('fuzzy_text_count', 'FuzzyTextCount', 'integer', $this);
				case 'ProgressPercent':
					return new QQNode('progress_percent', 'ProgressPercent', 'integer', $this);
				case 'Export':
					return new QQNode('export', 'Export', 'boolean', $this);

				case '_PrimaryKeyNode':
					return new QQNode('file_progress_id', 'FileProgressId', 'integer', $this);
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
