<?php
	/**
	 * The abstract NarroLanguageGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroLanguage subclass which
	 * extends this NarroLanguageGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroLanguage class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $LanguageId the value for intLanguageId (Read-Only PK)
	 * @property string $LanguageName the value for strLanguageName (Unique)
	 * @property string $LanguageCode the value for strLanguageCode (Unique)
	 * @property string $CountryCode the value for strCountryCode (Not Null)
	 * @property string $DialectCode the value for strDialectCode 
	 * @property string $Encoding the value for strEncoding (Not Null)
	 * @property string $TextDirection the value for strTextDirection (Not Null)
	 * @property string $SpecialCharacters the value for strSpecialCharacters 
	 * @property string $PluralForm the value for strPluralForm 
	 * @property boolean $Active the value for blnActive 
	 * @property-read NarroContextInfo $_NarroContextInfoAsLanguage the value for the private _objNarroContextInfoAsLanguage (Read-Only) if set due to an expansion on the narro_context_info.language_id reverse relationship
	 * @property-read NarroContextInfo[] $_NarroContextInfoAsLanguageArray the value for the private _objNarroContextInfoAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_context_info.language_id reverse relationship
	 * @property-read NarroFileProgress $_NarroFileProgressAsLanguage the value for the private _objNarroFileProgressAsLanguage (Read-Only) if set due to an expansion on the narro_file_progress.language_id reverse relationship
	 * @property-read NarroFileProgress[] $_NarroFileProgressAsLanguageArray the value for the private _objNarroFileProgressAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_file_progress.language_id reverse relationship
	 * @property-read NarroLog $_NarroLogAsLanguage the value for the private _objNarroLogAsLanguage (Read-Only) if set due to an expansion on the narro_log.language_id reverse relationship
	 * @property-read NarroLog[] $_NarroLogAsLanguageArray the value for the private _objNarroLogAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_log.language_id reverse relationship
	 * @property-read NarroProjectProgress $_NarroProjectProgressAsLanguage the value for the private _objNarroProjectProgressAsLanguage (Read-Only) if set due to an expansion on the narro_project_progress.language_id reverse relationship
	 * @property-read NarroProjectProgress[] $_NarroProjectProgressAsLanguageArray the value for the private _objNarroProjectProgressAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_project_progress.language_id reverse relationship
	 * @property-read NarroSuggestion $_NarroSuggestionAsLanguage the value for the private _objNarroSuggestionAsLanguage (Read-Only) if set due to an expansion on the narro_suggestion.language_id reverse relationship
	 * @property-read NarroSuggestion[] $_NarroSuggestionAsLanguageArray the value for the private _objNarroSuggestionAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion.language_id reverse relationship
	 * @property-read NarroTextComment $_NarroTextCommentAsLanguage the value for the private _objNarroTextCommentAsLanguage (Read-Only) if set due to an expansion on the narro_text_comment.language_id reverse relationship
	 * @property-read NarroTextComment[] $_NarroTextCommentAsLanguageArray the value for the private _objNarroTextCommentAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_text_comment.language_id reverse relationship
	 * @property-read NarroUserRole $_NarroUserRoleAsLanguage the value for the private _objNarroUserRoleAsLanguage (Read-Only) if set due to an expansion on the narro_user_role.language_id reverse relationship
	 * @property-read NarroUserRole[] $_NarroUserRoleAsLanguageArray the value for the private _objNarroUserRoleAsLanguageArray (Read-Only) if set due to an ExpandAsArray on the narro_user_role.language_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroLanguageGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['LanguageId'] = null;
                $this->_arrHistory['LanguageName'] = null;
                $this->_arrHistory['LanguageCode'] = null;
                $this->_arrHistory['CountryCode'] = null;
                $this->_arrHistory['DialectCode'] = null;
                $this->_arrHistory['Encoding'] = null;
                $this->_arrHistory['TextDirection'] = null;
                $this->_arrHistory['SpecialCharacters'] = null;
                $this->_arrHistory['PluralForm'] = null;
                $this->_arrHistory['Active'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_language.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.language_name
		 * @var string strLanguageName
		 */
		protected $strLanguageName;
		const LanguageNameMaxLength = 128;
		const LanguageNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.language_code
		 * @var string strLanguageCode
		 */
		protected $strLanguageCode;
		const LanguageCodeMaxLength = 64;
		const LanguageCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.country_code
		 * @var string strCountryCode
		 */
		protected $strCountryCode;
		const CountryCodeMaxLength = 64;
		const CountryCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.dialect_code
		 * @var string strDialectCode
		 */
		protected $strDialectCode;
		const DialectCodeMaxLength = 64;
		const DialectCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.encoding
		 * @var string strEncoding
		 */
		protected $strEncoding;
		const EncodingMaxLength = 10;
		const EncodingDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.text_direction
		 * @var string strTextDirection
		 */
		protected $strTextDirection;
		const TextDirectionMaxLength = 3;
		const TextDirectionDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.special_characters
		 * @var string strSpecialCharacters
		 */
		protected $strSpecialCharacters;
		const SpecialCharactersMaxLength = 255;
		const SpecialCharactersDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.plural_form
		 * @var string strPluralForm
		 */
		protected $strPluralForm;
		const PluralFormMaxLength = 255;
		const PluralFormDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextInfoAsLanguage object
		 * (of type NarroContextInfo), if this NarroLanguage object was restored with
		 * an expansion on the narro_context_info association table.
		 * @var NarroContextInfo _objNarroContextInfoAsLanguage;
		 */
		private $_objNarroContextInfoAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroContextInfoAsLanguage objects
		 * (of type NarroContextInfo[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_context_info association table.
		 * @var NarroContextInfo[] _objNarroContextInfoAsLanguageArray;
		 */
		private $_objNarroContextInfoAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroFileProgressAsLanguage object
		 * (of type NarroFileProgress), if this NarroLanguage object was restored with
		 * an expansion on the narro_file_progress association table.
		 * @var NarroFileProgress _objNarroFileProgressAsLanguage;
		 */
		private $_objNarroFileProgressAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroFileProgressAsLanguage objects
		 * (of type NarroFileProgress[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_file_progress association table.
		 * @var NarroFileProgress[] _objNarroFileProgressAsLanguageArray;
		 */
		private $_objNarroFileProgressAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroLogAsLanguage object
		 * (of type NarroLog), if this NarroLanguage object was restored with
		 * an expansion on the narro_log association table.
		 * @var NarroLog _objNarroLogAsLanguage;
		 */
		private $_objNarroLogAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroLogAsLanguage objects
		 * (of type NarroLog[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_log association table.
		 * @var NarroLog[] _objNarroLogAsLanguageArray;
		 */
		private $_objNarroLogAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroProjectProgressAsLanguage object
		 * (of type NarroProjectProgress), if this NarroLanguage object was restored with
		 * an expansion on the narro_project_progress association table.
		 * @var NarroProjectProgress _objNarroProjectProgressAsLanguage;
		 */
		private $_objNarroProjectProgressAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroProjectProgressAsLanguage objects
		 * (of type NarroProjectProgress[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_project_progress association table.
		 * @var NarroProjectProgress[] _objNarroProjectProgressAsLanguageArray;
		 */
		private $_objNarroProjectProgressAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionAsLanguage object
		 * (of type NarroSuggestion), if this NarroLanguage object was restored with
		 * an expansion on the narro_suggestion association table.
		 * @var NarroSuggestion _objNarroSuggestionAsLanguage;
		 */
		private $_objNarroSuggestionAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionAsLanguage objects
		 * (of type NarroSuggestion[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_suggestion association table.
		 * @var NarroSuggestion[] _objNarroSuggestionAsLanguageArray;
		 */
		private $_objNarroSuggestionAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroTextCommentAsLanguage object
		 * (of type NarroTextComment), if this NarroLanguage object was restored with
		 * an expansion on the narro_text_comment association table.
		 * @var NarroTextComment _objNarroTextCommentAsLanguage;
		 */
		private $_objNarroTextCommentAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroTextCommentAsLanguage objects
		 * (of type NarroTextComment[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_text_comment association table.
		 * @var NarroTextComment[] _objNarroTextCommentAsLanguageArray;
		 */
		private $_objNarroTextCommentAsLanguageArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroUserRoleAsLanguage object
		 * (of type NarroUserRole), if this NarroLanguage object was restored with
		 * an expansion on the narro_user_role association table.
		 * @var NarroUserRole _objNarroUserRoleAsLanguage;
		 */
		private $_objNarroUserRoleAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroUserRoleAsLanguage objects
		 * (of type NarroUserRole[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_user_role association table.
		 * @var NarroUserRole[] _objNarroUserRoleAsLanguageArray;
		 */
		private $_objNarroUserRoleAsLanguageArray = null;

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
			$this->intLanguageId = NarroLanguage::LanguageIdDefault;
			$this->strLanguageName = NarroLanguage::LanguageNameDefault;
			$this->strLanguageCode = NarroLanguage::LanguageCodeDefault;
			$this->strCountryCode = NarroLanguage::CountryCodeDefault;
			$this->strDialectCode = NarroLanguage::DialectCodeDefault;
			$this->strEncoding = NarroLanguage::EncodingDefault;
			$this->strTextDirection = NarroLanguage::TextDirectionDefault;
			$this->strSpecialCharacters = NarroLanguage::SpecialCharactersDefault;
			$this->strPluralForm = NarroLanguage::PluralFormDefault;
			$this->blnActive = NarroLanguage::ActiveDefault;
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
		 * Load a NarroLanguage from PK Info
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage
		 */
		public static function Load($intLanguageId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroLanguage::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLanguage()->LanguageId, $intLanguageId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroLanguages
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroLanguage::QueryArray to perform the LoadAll query
			try {
				return NarroLanguage::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroLanguages
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroLanguage::QueryCount to perform the CountAll query
			return NarroLanguage::QueryCount(QQ::All());
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
			$objDatabase = NarroLanguage::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroLanguage-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_language');
			NarroLanguage::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_language');

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
		 * Static Qcubed Query method to query for a single NarroLanguage object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroLanguage the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLanguage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroLanguage object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroLanguage::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroLanguage::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroLanguage objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroLanguage[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLanguage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroLanguage::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroLanguage objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroLanguage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroLanguage::GetDatabase();

			$strQuery = NarroLanguage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrolanguage', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroLanguage::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroLanguage
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_language';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'language_id', $strAliasPrefix . 'language_id');
			$objBuilder->AddSelectItem($strTableName, 'language_name', $strAliasPrefix . 'language_name');
			$objBuilder->AddSelectItem($strTableName, 'language_code', $strAliasPrefix . 'language_code');
			$objBuilder->AddSelectItem($strTableName, 'country_code', $strAliasPrefix . 'country_code');
			$objBuilder->AddSelectItem($strTableName, 'dialect_code', $strAliasPrefix . 'dialect_code');
			$objBuilder->AddSelectItem($strTableName, 'encoding', $strAliasPrefix . 'encoding');
			$objBuilder->AddSelectItem($strTableName, 'text_direction', $strAliasPrefix . 'text_direction');
			$objBuilder->AddSelectItem($strTableName, 'special_characters', $strAliasPrefix . 'special_characters');
			$objBuilder->AddSelectItem($strTableName, 'plural_form', $strAliasPrefix . 'plural_form');
			$objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroLanguage from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroLanguage::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroLanguage
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'language_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intLanguageId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_language__';


						// Expanding reverse references: NarroContextInfoAsLanguage
						$strAlias = $strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextInfoAsLanguageArray)
								$objPreviousItem->_objNarroContextInfoAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextInfoAsLanguageArray;
								$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextInfoAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextInfoAsLanguageArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroFileProgressAsLanguage
						$strAlias = $strAliasPrefix . 'narrofileprogressaslanguage__file_progress_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroFileProgressAsLanguageArray)
								$objPreviousItem->_objNarroFileProgressAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroFileProgressAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroFileProgressAsLanguageArray;
								$objChildItem = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroFileProgressAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroFileProgressAsLanguageArray[] = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroLogAsLanguage
						$strAlias = $strAliasPrefix . 'narrologaslanguage__log_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroLogAsLanguageArray)
								$objPreviousItem->_objNarroLogAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroLogAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroLogAsLanguageArray;
								$objChildItem = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroLogAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroLogAsLanguageArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroProjectProgressAsLanguage
						$strAlias = $strAliasPrefix . 'narroprojectprogressaslanguage__project_progress_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroProjectProgressAsLanguageArray)
								$objPreviousItem->_objNarroProjectProgressAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroProjectProgressAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroProjectProgressAsLanguageArray;
								$objChildItem = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroProjectProgressAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroProjectProgressAsLanguageArray[] = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionAsLanguage
						$strAlias = $strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionAsLanguageArray)
								$objPreviousItem->_objNarroSuggestionAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionAsLanguageArray;
								$objChildItem = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionAsLanguageArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroTextCommentAsLanguage
						$strAlias = $strAliasPrefix . 'narrotextcommentaslanguage__text_comment_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroTextCommentAsLanguageArray)
								$objPreviousItem->_objNarroTextCommentAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroTextCommentAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroTextCommentAsLanguageArray;
								$objChildItem = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroTextCommentAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroTextCommentAsLanguageArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroUserRoleAsLanguage
						$strAlias = $strAliasPrefix . 'narrouserroleaslanguage__user_role_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroUserRoleAsLanguageArray)
								$objPreviousItem->_objNarroUserRoleAsLanguageArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsLanguageArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroUserRoleAsLanguageArray;
								$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroUserRoleAsLanguageArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroUserRoleAsLanguageArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_language__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroLanguage object
			$objToReturn = new NarroLanguage();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_id'] : $strAliasPrefix . 'language_id';
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_name'] : $strAliasPrefix . 'language_name';
			$objToReturn->strLanguageName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_code'] : $strAliasPrefix . 'language_code';
			$objToReturn->strLanguageCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'country_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'country_code'] : $strAliasPrefix . 'country_code';
			$objToReturn->strCountryCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'dialect_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'dialect_code'] : $strAliasPrefix . 'dialect_code';
			$objToReturn->strDialectCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'encoding', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'encoding'] : $strAliasPrefix . 'encoding';
			$objToReturn->strEncoding = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_direction', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_direction'] : $strAliasPrefix . 'text_direction';
			$objToReturn->strTextDirection = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'special_characters', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'special_characters'] : $strAliasPrefix . 'special_characters';
			$objToReturn->strSpecialCharacters = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'plural_form', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'plural_form'] : $strAliasPrefix . 'plural_form';
			$objToReturn->strPluralForm = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active'] : $strAliasPrefix . 'active';
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LanguageId != $objPreviousItem->LanguageId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextInfoAsLanguageArray, $objToReturn->_objNarroContextInfoAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroFileProgressAsLanguageArray, $objToReturn->_objNarroFileProgressAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroLogAsLanguageArray, $objToReturn->_objNarroLogAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroProjectProgressAsLanguageArray, $objToReturn->_objNarroProjectProgressAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionAsLanguageArray, $objToReturn->_objNarroSuggestionAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroTextCommentAsLanguageArray, $objToReturn->_objNarroTextCommentAsLanguageArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroUserRoleAsLanguageArray, $objToReturn->_objNarroUserRoleAsLanguageArray) != null) {
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
				$strAliasPrefix = 'narro_language__';




			// Check for NarroContextInfoAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextInfoAsLanguageArray)
				$objToReturn->_objNarroContextInfoAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextInfoAsLanguageArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextInfoAsLanguage = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroFileProgressAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrofileprogressaslanguage__file_progress_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroFileProgressAsLanguageArray)
				$objToReturn->_objNarroFileProgressAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroFileProgressAsLanguageArray[] = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroFileProgressAsLanguage = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroLogAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrologaslanguage__log_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroLogAsLanguageArray)
				$objToReturn->_objNarroLogAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroLogAsLanguageArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroLogAsLanguage = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroProjectProgressAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narroprojectprogressaslanguage__project_progress_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroProjectProgressAsLanguageArray)
				$objToReturn->_objNarroProjectProgressAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroProjectProgressAsLanguageArray[] = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroProjectProgressAsLanguage = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionAsLanguageArray)
				$objToReturn->_objNarroSuggestionAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionAsLanguageArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionAsLanguage = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroTextCommentAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrotextcommentaslanguage__text_comment_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroTextCommentAsLanguageArray)
				$objToReturn->_objNarroTextCommentAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroTextCommentAsLanguageArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroTextCommentAsLanguage = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroUserRoleAsLanguage Virtual Binding
			$strAlias = $strAliasPrefix . 'narrouserroleaslanguage__user_role_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroUserRoleAsLanguageArray)
				$objToReturn->_objNarroUserRoleAsLanguageArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroUserRoleAsLanguageArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroUserRoleAsLanguage = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleaslanguage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroLanguages from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroLanguage[]
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
					$objItem = NarroLanguage::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroLanguage::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroLanguage object,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageId($intLanguageId, $objOptionalClauses = null) {
			return NarroLanguage::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLanguage()->LanguageId, $intLanguageId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroLanguage object,
		 * by LanguageName Index(es)
		 * @param string $strLanguageName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageName($strLanguageName, $objOptionalClauses = null) {
			return NarroLanguage::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLanguage()->LanguageName, $strLanguageName)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroLanguage object,
		 * by LanguageCode Index(es)
		 * @param string $strLanguageCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageCode($strLanguageCode, $objOptionalClauses = null) {
			return NarroLanguage::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroLanguage()->LanguageCode, $strLanguageCode)
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

            if (!isset($this->_arrHistory['LanguageId']))
                $this->_arrHistory['LanguageId'] = $this->LanguageId;
            if (!isset($this->_arrHistory['LanguageName']))
                $this->_arrHistory['LanguageName'] = $this->LanguageName;
            if (!isset($this->_arrHistory['LanguageCode']))
                $this->_arrHistory['LanguageCode'] = $this->LanguageCode;
            if (!isset($this->_arrHistory['CountryCode']))
                $this->_arrHistory['CountryCode'] = $this->CountryCode;
            if (!isset($this->_arrHistory['DialectCode']))
                $this->_arrHistory['DialectCode'] = $this->DialectCode;
            if (!isset($this->_arrHistory['Encoding']))
                $this->_arrHistory['Encoding'] = $this->Encoding;
            if (!isset($this->_arrHistory['TextDirection']))
                $this->_arrHistory['TextDirection'] = $this->TextDirection;
            if (!isset($this->_arrHistory['SpecialCharacters']))
                $this->_arrHistory['SpecialCharacters'] = $this->SpecialCharacters;
            if (!isset($this->_arrHistory['PluralForm']))
                $this->_arrHistory['PluralForm'] = $this->PluralForm;
            if (!isset($this->_arrHistory['Active']))
                $this->_arrHistory['Active'] = $this->Active;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroLanguage
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_language` (
							`language_name`,
							`language_code`,
							`country_code`,
							`dialect_code`,
							`encoding`,
							`text_direction`,
							`special_characters`,
							`plural_form`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strLanguageName) . ',
							' . $objDatabase->SqlVariable($this->strLanguageCode) . ',
							' . $objDatabase->SqlVariable($this->strCountryCode) . ',
							' . $objDatabase->SqlVariable($this->strDialectCode) . ',
							' . $objDatabase->SqlVariable($this->strEncoding) . ',
							' . $objDatabase->SqlVariable($this->strTextDirection) . ',
							' . $objDatabase->SqlVariable($this->strSpecialCharacters) . ',
							' . $objDatabase->SqlVariable($this->strPluralForm) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intLanguageId = $objDatabase->InsertId('narro_language', 'language_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['LanguageName'] !== $this->LanguageName ||
                        (
                            $this->LanguageName instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageName'] !== (string) $this->LanguageName
                        )
                    )
                        $arrUpdateChanges[] = '`language_name` = ' . $objDatabase->SqlVariable($this->strLanguageName);
                    if (
                        $this->_arrHistory['LanguageCode'] !== $this->LanguageCode ||
                        (
                            $this->LanguageCode instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageCode'] !== (string) $this->LanguageCode
                        )
                    )
                        $arrUpdateChanges[] = '`language_code` = ' . $objDatabase->SqlVariable($this->strLanguageCode);
                    if (
                        $this->_arrHistory['CountryCode'] !== $this->CountryCode ||
                        (
                            $this->CountryCode instanceof QDateTime &&
                            (string) $this->_arrHistory['CountryCode'] !== (string) $this->CountryCode
                        )
                    )
                        $arrUpdateChanges[] = '`country_code` = ' . $objDatabase->SqlVariable($this->strCountryCode);
                    if (
                        $this->_arrHistory['DialectCode'] !== $this->DialectCode ||
                        (
                            $this->DialectCode instanceof QDateTime &&
                            (string) $this->_arrHistory['DialectCode'] !== (string) $this->DialectCode
                        )
                    )
                        $arrUpdateChanges[] = '`dialect_code` = ' . $objDatabase->SqlVariable($this->strDialectCode);
                    if (
                        $this->_arrHistory['Encoding'] !== $this->Encoding ||
                        (
                            $this->Encoding instanceof QDateTime &&
                            (string) $this->_arrHistory['Encoding'] !== (string) $this->Encoding
                        )
                    )
                        $arrUpdateChanges[] = '`encoding` = ' . $objDatabase->SqlVariable($this->strEncoding);
                    if (
                        $this->_arrHistory['TextDirection'] !== $this->TextDirection ||
                        (
                            $this->TextDirection instanceof QDateTime &&
                            (string) $this->_arrHistory['TextDirection'] !== (string) $this->TextDirection
                        )
                    )
                        $arrUpdateChanges[] = '`text_direction` = ' . $objDatabase->SqlVariable($this->strTextDirection);
                    if (
                        $this->_arrHistory['SpecialCharacters'] !== $this->SpecialCharacters ||
                        (
                            $this->SpecialCharacters instanceof QDateTime &&
                            (string) $this->_arrHistory['SpecialCharacters'] !== (string) $this->SpecialCharacters
                        )
                    )
                        $arrUpdateChanges[] = '`special_characters` = ' . $objDatabase->SqlVariable($this->strSpecialCharacters);
                    if (
                        $this->_arrHistory['PluralForm'] !== $this->PluralForm ||
                        (
                            $this->PluralForm instanceof QDateTime &&
                            (string) $this->_arrHistory['PluralForm'] !== (string) $this->PluralForm
                        )
                    )
                        $arrUpdateChanges[] = '`plural_form` = ' . $objDatabase->SqlVariable($this->strPluralForm);
                    if (
                        $this->_arrHistory['Active'] !== $this->Active ||
                        (
                            $this->Active instanceof QDateTime &&
                            (string) $this->_arrHistory['Active'] !== (string) $this->Active
                        )
                    )
                        $arrUpdateChanges[] = '`active` = ' . $objDatabase->SqlVariable($this->blnActive);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_language`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
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
		 * Delete this NarroLanguage
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroLanguage with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_language`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '');
		}

		/**
		 * Delete all NarroLanguages
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_language`');
		}

		/**
		 * Truncate narro_language table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_language`');
		}

		/**
		 * Reload this NarroLanguage from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroLanguage object.');

			// Reload the Object
			$objReloaded = NarroLanguage::Load($this->intLanguageId);

			// Update $this's local variables to match
			$this->strLanguageName = $objReloaded->strLanguageName;
			$this->strLanguageCode = $objReloaded->strLanguageCode;
			$this->strCountryCode = $objReloaded->strCountryCode;
			$this->strDialectCode = $objReloaded->strDialectCode;
			$this->strEncoding = $objReloaded->strEncoding;
			$this->strTextDirection = $objReloaded->strTextDirection;
			$this->strSpecialCharacters = $objReloaded->strSpecialCharacters;
			$this->strPluralForm = $objReloaded->strPluralForm;
			$this->blnActive = $objReloaded->blnActive;
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
				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId (Read-Only PK)
					 * @return integer
					 */
					return $this->intLanguageId;

				case 'LanguageName':
					/**
					 * Gets the value for strLanguageName (Unique)
					 * @return string
					 */
					return $this->strLanguageName;

				case 'LanguageCode':
					/**
					 * Gets the value for strLanguageCode (Unique)
					 * @return string
					 */
					return $this->strLanguageCode;

				case 'CountryCode':
					/**
					 * Gets the value for strCountryCode (Not Null)
					 * @return string
					 */
					return $this->strCountryCode;

				case 'DialectCode':
					/**
					 * Gets the value for strDialectCode 
					 * @return string
					 */
					return $this->strDialectCode;

				case 'Encoding':
					/**
					 * Gets the value for strEncoding (Not Null)
					 * @return string
					 */
					return $this->strEncoding;

				case 'TextDirection':
					/**
					 * Gets the value for strTextDirection (Not Null)
					 * @return string
					 */
					return $this->strTextDirection;

				case 'SpecialCharacters':
					/**
					 * Gets the value for strSpecialCharacters 
					 * @return string
					 */
					return $this->strSpecialCharacters;

				case 'PluralForm':
					/**
					 * Gets the value for strPluralForm 
					 * @return string
					 */
					return $this->strPluralForm;

				case 'Active':
					/**
					 * Gets the value for blnActive 
					 * @return boolean
					 */
					return $this->blnActive;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextInfoAsLanguage':
					/**
					 * Gets the value for the private _objNarroContextInfoAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_context_info.language_id reverse relationship
					 * @return NarroContextInfo
					 */
					return $this->_objNarroContextInfoAsLanguage;

				case '_NarroContextInfoAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroContextInfoAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_info.language_id reverse relationship
					 * @return NarroContextInfo[]
					 */
					return $this->_objNarroContextInfoAsLanguageArray;

				case '_NarroFileProgressAsLanguage':
					/**
					 * Gets the value for the private _objNarroFileProgressAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_file_progress.language_id reverse relationship
					 * @return NarroFileProgress
					 */
					return $this->_objNarroFileProgressAsLanguage;

				case '_NarroFileProgressAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroFileProgressAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_file_progress.language_id reverse relationship
					 * @return NarroFileProgress[]
					 */
					return $this->_objNarroFileProgressAsLanguageArray;

				case '_NarroLogAsLanguage':
					/**
					 * Gets the value for the private _objNarroLogAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_log.language_id reverse relationship
					 * @return NarroLog
					 */
					return $this->_objNarroLogAsLanguage;

				case '_NarroLogAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroLogAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_log.language_id reverse relationship
					 * @return NarroLog[]
					 */
					return $this->_objNarroLogAsLanguageArray;

				case '_NarroProjectProgressAsLanguage':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_project_progress.language_id reverse relationship
					 * @return NarroProjectProgress
					 */
					return $this->_objNarroProjectProgressAsLanguage;

				case '_NarroProjectProgressAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_project_progress.language_id reverse relationship
					 * @return NarroProjectProgress[]
					 */
					return $this->_objNarroProjectProgressAsLanguageArray;

				case '_NarroSuggestionAsLanguage':
					/**
					 * Gets the value for the private _objNarroSuggestionAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_suggestion.language_id reverse relationship
					 * @return NarroSuggestion
					 */
					return $this->_objNarroSuggestionAsLanguage;

				case '_NarroSuggestionAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroSuggestionAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion.language_id reverse relationship
					 * @return NarroSuggestion[]
					 */
					return $this->_objNarroSuggestionAsLanguageArray;

				case '_NarroTextCommentAsLanguage':
					/**
					 * Gets the value for the private _objNarroTextCommentAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_text_comment.language_id reverse relationship
					 * @return NarroTextComment
					 */
					return $this->_objNarroTextCommentAsLanguage;

				case '_NarroTextCommentAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroTextCommentAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_text_comment.language_id reverse relationship
					 * @return NarroTextComment[]
					 */
					return $this->_objNarroTextCommentAsLanguageArray;

				case '_NarroUserRoleAsLanguage':
					/**
					 * Gets the value for the private _objNarroUserRoleAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_user_role.language_id reverse relationship
					 * @return NarroUserRole
					 */
					return $this->_objNarroUserRoleAsLanguage;

				case '_NarroUserRoleAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroUserRoleAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_role.language_id reverse relationship
					 * @return NarroUserRole[]
					 */
					return $this->_objNarroUserRoleAsLanguageArray;


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
				case 'LanguageName':
					/**
					 * Sets the value for strLanguageName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLanguageName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LanguageCode':
					/**
					 * Sets the value for strLanguageCode (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLanguageCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CountryCode':
					/**
					 * Sets the value for strCountryCode (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCountryCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DialectCode':
					/**
					 * Sets the value for strDialectCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDialectCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Encoding':
					/**
					 * Sets the value for strEncoding (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEncoding = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextDirection':
					/**
					 * Sets the value for strTextDirection (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTextDirection = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SpecialCharacters':
					/**
					 * Sets the value for strSpecialCharacters 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSpecialCharacters = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PluralForm':
					/**
					 * Sets the value for strPluralForm 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPluralForm = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for blnActive 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnActive = QType::Cast($mixValue, QType::Boolean));
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

			
		
		// Related Objects' Methods for NarroContextInfoAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextInfosAsLanguage as an array of NarroContextInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextInfo[]
		*/
		public function GetNarroContextInfoAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroContextInfo::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextInfosAsLanguage
		 * @return int
		*/
		public function CountNarroContextInfosAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroContextInfo::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroContextInfoAsLanguage
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function AssociateNarroContextInfoAsLanguage(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsLanguage on this NarroLanguage with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . '
			');
		}

		/**
		 * Unassociates a NarroContextInfoAsLanguage
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function UnassociateNarroContextInfoAsLanguage(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this NarroLanguage with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`language_id` = null
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroContextInfosAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroContextInfosAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextInfoAsLanguage
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function DeleteAssociatedNarroContextInfoAsLanguage(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this NarroLanguage with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextInfosAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroContextInfosAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroFileProgressAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroFileProgressesAsLanguage as an array of NarroFileProgress objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		*/
		public function GetNarroFileProgressAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroFileProgress::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroFileProgressesAsLanguage
		 * @return int
		*/
		public function CountNarroFileProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroFileProgress::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroFileProgressAsLanguage
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/
		public function AssociateNarroFileProgressAsLanguage(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileProgressAsLanguage on this NarroLanguage with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . '
			');
		}

		/**
		 * Unassociates a NarroFileProgressAsLanguage
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/
		public function UnassociateNarroFileProgressAsLanguage(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this NarroLanguage with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`language_id` = null
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroFileProgressesAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroFileProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroFileProgressAsLanguage
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/
		public function DeleteAssociatedNarroFileProgressAsLanguage(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this NarroLanguage with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroFileProgressesAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroFileProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroLogAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroLogsAsLanguage as an array of NarroLog objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public function GetNarroLogAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroLog::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroLogsAsLanguage
		 * @return int
		*/
		public function CountNarroLogsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroLog::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroLogAsLanguage
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function AssociateNarroLogAsLanguage(NarroLog $objNarroLog) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsLanguage on this NarroLanguage with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . '
			');
		}

		/**
		 * Unassociates a NarroLogAsLanguage
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function UnassociateNarroLogAsLanguage(NarroLog $objNarroLog) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this NarroLanguage with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`language_id` = null
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroLogsAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroLogsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroLogAsLanguage
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function DeleteAssociatedNarroLogAsLanguage(NarroLog $objNarroLog) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this NarroLanguage with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroLogsAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroLogsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroProjectProgressAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroProjectProgressesAsLanguage as an array of NarroProjectProgress objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		*/
		public function GetNarroProjectProgressAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroProjectProgress::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroProjectProgressesAsLanguage
		 * @return int
		*/
		public function CountNarroProjectProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroProjectProgress::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroProjectProgressAsLanguage
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function AssociateNarroProjectProgressAsLanguage(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsLanguage on this NarroLanguage with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . '
			');
		}

		/**
		 * Unassociates a NarroProjectProgressAsLanguage
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function UnassociateNarroProjectProgressAsLanguage(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this NarroLanguage with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`language_id` = null
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroProjectProgressesAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroProjectProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroProjectProgressAsLanguage
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/
		public function DeleteAssociatedNarroProjectProgressAsLanguage(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this NarroLanguage with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroProjectProgressesAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroProjectProgressesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionsAsLanguage as an array of NarroSuggestion objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public function GetNarroSuggestionAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroSuggestion::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionsAsLanguage
		 * @return int
		*/
		public function CountNarroSuggestionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroSuggestion::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroSuggestionAsLanguage
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function AssociateNarroSuggestionAsLanguage(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsLanguage on this NarroLanguage with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionAsLanguage
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function UnassociateNarroSuggestionAsLanguage(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this NarroLanguage with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`language_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionsAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroSuggestionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionAsLanguage
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function DeleteAssociatedNarroSuggestionAsLanguage(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this NarroLanguage with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionsAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroSuggestionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroTextCommentAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroTextCommentsAsLanguage as an array of NarroTextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/
		public function GetNarroTextCommentAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroTextComment::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroTextCommentsAsLanguage
		 * @return int
		*/
		public function CountNarroTextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroTextComment::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroTextCommentAsLanguage
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function AssociateNarroTextCommentAsLanguage(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsLanguage on this NarroLanguage with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . '
			');
		}

		/**
		 * Unassociates a NarroTextCommentAsLanguage
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function UnassociateNarroTextCommentAsLanguage(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this NarroLanguage with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`language_id` = null
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroTextCommentsAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroTextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroTextCommentAsLanguage
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function DeleteAssociatedNarroTextCommentAsLanguage(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this NarroLanguage with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroTextCommentsAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroTextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserRoleAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserRolesAsLanguage as an array of NarroUserRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserRole[]
		*/
		public function GetNarroUserRoleAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroUserRole::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserRolesAsLanguage
		 * @return int
		*/
		public function CountNarroUserRolesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroUserRole::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroUserRoleAsLanguage
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function AssociateNarroUserRoleAsLanguage(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsLanguage on this NarroLanguage with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . '
			');
		}

		/**
		 * Unassociates a NarroUserRoleAsLanguage
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function UnassociateNarroUserRoleAsLanguage(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this NarroLanguage with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`language_id` = null
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroUserRolesAsLanguage
		 * @return void
		*/
		public function UnassociateAllNarroUserRolesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserRoleAsLanguage
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/
		public function DeleteAssociatedNarroUserRoleAsLanguage(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this NarroLanguage with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserRolesAsLanguage
		 * @return void
		*/
		public function DeleteAllNarroUserRolesAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroLanguage"><sequence>';
			$strToReturn .= '<element name="LanguageId" type="xsd:int"/>';
			$strToReturn .= '<element name="LanguageName" type="xsd:string"/>';
			$strToReturn .= '<element name="LanguageCode" type="xsd:string"/>';
			$strToReturn .= '<element name="CountryCode" type="xsd:string"/>';
			$strToReturn .= '<element name="DialectCode" type="xsd:string"/>';
			$strToReturn .= '<element name="Encoding" type="xsd:string"/>';
			$strToReturn .= '<element name="TextDirection" type="xsd:string"/>';
			$strToReturn .= '<element name="SpecialCharacters" type="xsd:string"/>';
			$strToReturn .= '<element name="PluralForm" type="xsd:string"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroLanguage', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroLanguage'] = NarroLanguage::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroLanguage::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroLanguage();
			if (property_exists($objSoapObject, 'LanguageId'))
				$objToReturn->intLanguageId = $objSoapObject->LanguageId;
			if (property_exists($objSoapObject, 'LanguageName'))
				$objToReturn->strLanguageName = $objSoapObject->LanguageName;
			if (property_exists($objSoapObject, 'LanguageCode'))
				$objToReturn->strLanguageCode = $objSoapObject->LanguageCode;
			if (property_exists($objSoapObject, 'CountryCode'))
				$objToReturn->strCountryCode = $objSoapObject->CountryCode;
			if (property_exists($objSoapObject, 'DialectCode'))
				$objToReturn->strDialectCode = $objSoapObject->DialectCode;
			if (property_exists($objSoapObject, 'Encoding'))
				$objToReturn->strEncoding = $objSoapObject->Encoding;
			if (property_exists($objSoapObject, 'TextDirection'))
				$objToReturn->strTextDirection = $objSoapObject->TextDirection;
			if (property_exists($objSoapObject, 'SpecialCharacters'))
				$objToReturn->strSpecialCharacters = $objSoapObject->SpecialCharacters;
			if (property_exists($objSoapObject, 'PluralForm'))
				$objToReturn->strPluralForm = $objSoapObject->PluralForm;
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroLanguage::GetSoapObjectFromObject($objObject, true));

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
			$iArray['LanguageId'] = $this->intLanguageId;
			$iArray['LanguageName'] = $this->strLanguageName;
			$iArray['LanguageCode'] = $this->strLanguageCode;
			$iArray['CountryCode'] = $this->strCountryCode;
			$iArray['DialectCode'] = $this->strDialectCode;
			$iArray['Encoding'] = $this->strEncoding;
			$iArray['TextDirection'] = $this->strTextDirection;
			$iArray['SpecialCharacters'] = $this->strSpecialCharacters;
			$iArray['PluralForm'] = $this->strPluralForm;
			$iArray['Active'] = $this->blnActive;
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
     * @property-read QQNode $LanguageId
     * @property-read QQNode $LanguageName
     * @property-read QQNode $LanguageCode
     * @property-read QQNode $CountryCode
     * @property-read QQNode $DialectCode
     * @property-read QQNode $Encoding
     * @property-read QQNode $TextDirection
     * @property-read QQNode $SpecialCharacters
     * @property-read QQNode $PluralForm
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsLanguage
     * @property-read QQReverseReferenceNodeNarroFileProgress $NarroFileProgressAsLanguage
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsLanguage
     * @property-read QQReverseReferenceNodeNarroProjectProgress $NarroProjectProgressAsLanguage
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsLanguage
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsLanguage
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsLanguage

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroLanguage extends QQNode {
		protected $strTableName = 'narro_language';
		protected $strPrimaryKey = 'language_id';
		protected $strClassName = 'NarroLanguage';
		public function __get($strName) {
			switch ($strName) {
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
				case 'LanguageName':
					return new QQNode('language_name', 'LanguageName', 'VarChar', $this);
				case 'LanguageCode':
					return new QQNode('language_code', 'LanguageCode', 'VarChar', $this);
				case 'CountryCode':
					return new QQNode('country_code', 'CountryCode', 'VarChar', $this);
				case 'DialectCode':
					return new QQNode('dialect_code', 'DialectCode', 'VarChar', $this);
				case 'Encoding':
					return new QQNode('encoding', 'Encoding', 'VarChar', $this);
				case 'TextDirection':
					return new QQNode('text_direction', 'TextDirection', 'VarChar', $this);
				case 'SpecialCharacters':
					return new QQNode('special_characters', 'SpecialCharacters', 'VarChar', $this);
				case 'PluralForm':
					return new QQNode('plural_form', 'PluralForm', 'VarChar', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Bit', $this);
				case 'NarroContextInfoAsLanguage':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaslanguage', 'reverse_reference', 'language_id');
				case 'NarroFileProgressAsLanguage':
					return new QQReverseReferenceNodeNarroFileProgress($this, 'narrofileprogressaslanguage', 'reverse_reference', 'language_id');
				case 'NarroLogAsLanguage':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologaslanguage', 'reverse_reference', 'language_id');
				case 'NarroProjectProgressAsLanguage':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionaslanguage', 'reverse_reference', 'language_id');
				case 'NarroTextCommentAsLanguage':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroUserRoleAsLanguage':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleaslanguage', 'reverse_reference', 'language_id');

				case '_PrimaryKeyNode':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
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
     * @property-read QQNode $LanguageId
     * @property-read QQNode $LanguageName
     * @property-read QQNode $LanguageCode
     * @property-read QQNode $CountryCode
     * @property-read QQNode $DialectCode
     * @property-read QQNode $Encoding
     * @property-read QQNode $TextDirection
     * @property-read QQNode $SpecialCharacters
     * @property-read QQNode $PluralForm
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsLanguage
     * @property-read QQReverseReferenceNodeNarroFileProgress $NarroFileProgressAsLanguage
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsLanguage
     * @property-read QQReverseReferenceNodeNarroProjectProgress $NarroProjectProgressAsLanguage
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsLanguage
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsLanguage
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsLanguage

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroLanguage extends QQReverseReferenceNode {
		protected $strTableName = 'narro_language';
		protected $strPrimaryKey = 'language_id';
		protected $strClassName = 'NarroLanguage';
		public function __get($strName) {
			switch ($strName) {
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
				case 'LanguageName':
					return new QQNode('language_name', 'LanguageName', 'string', $this);
				case 'LanguageCode':
					return new QQNode('language_code', 'LanguageCode', 'string', $this);
				case 'CountryCode':
					return new QQNode('country_code', 'CountryCode', 'string', $this);
				case 'DialectCode':
					return new QQNode('dialect_code', 'DialectCode', 'string', $this);
				case 'Encoding':
					return new QQNode('encoding', 'Encoding', 'string', $this);
				case 'TextDirection':
					return new QQNode('text_direction', 'TextDirection', 'string', $this);
				case 'SpecialCharacters':
					return new QQNode('special_characters', 'SpecialCharacters', 'string', $this);
				case 'PluralForm':
					return new QQNode('plural_form', 'PluralForm', 'string', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'boolean', $this);
				case 'NarroContextInfoAsLanguage':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaslanguage', 'reverse_reference', 'language_id');
				case 'NarroFileProgressAsLanguage':
					return new QQReverseReferenceNodeNarroFileProgress($this, 'narrofileprogressaslanguage', 'reverse_reference', 'language_id');
				case 'NarroLogAsLanguage':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologaslanguage', 'reverse_reference', 'language_id');
				case 'NarroProjectProgressAsLanguage':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionaslanguage', 'reverse_reference', 'language_id');
				case 'NarroTextCommentAsLanguage':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroUserRoleAsLanguage':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleaslanguage', 'reverse_reference', 'language_id');

				case '_PrimaryKeyNode':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
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
