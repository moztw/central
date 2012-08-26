<?php
	/**
	 * The abstract NarroSuggestionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroSuggestion subclass which
	 * extends this NarroSuggestionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroSuggestion class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $SuggestionId the value for intSuggestionId (Read-Only PK)
	 * @property integer $UserId the value for intUserId 
	 * @property integer $TextId the value for intTextId (Not Null)
	 * @property integer $LanguageId the value for intLanguageId (Not Null)
	 * @property string $SuggestionValue the value for strSuggestionValue (Not Null)
	 * @property string $SuggestionValueMd5 the value for strSuggestionValueMd5 (Not Null)
	 * @property integer $SuggestionCharCount the value for intSuggestionCharCount 
	 * @property integer $SuggestionWordCount the value for intSuggestionWordCount 
	 * @property boolean $HasComments the value for blnHasComments 
	 * @property boolean $IsImported the value for blnIsImported (Not Null)
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property NarroUser $User the value for the NarroUser object referenced by intUserId 
	 * @property NarroText $Text the value for the NarroText object referenced by intTextId (Not Null)
	 * @property NarroLanguage $Language the value for the NarroLanguage object referenced by intLanguageId (Not Null)
	 * @property-read NarroContextInfo $_NarroContextInfoAsValidSuggestion the value for the private _objNarroContextInfoAsValidSuggestion (Read-Only) if set due to an expansion on the narro_context_info.valid_suggestion_id reverse relationship
	 * @property-read NarroContextInfo[] $_NarroContextInfoAsValidSuggestionArray the value for the private _objNarroContextInfoAsValidSuggestionArray (Read-Only) if set due to an ExpandAsArray on the narro_context_info.valid_suggestion_id reverse relationship
	 * @property-read NarroSuggestionVote $_NarroSuggestionVoteAsSuggestion the value for the private _objNarroSuggestionVoteAsSuggestion (Read-Only) if set due to an expansion on the narro_suggestion_vote.suggestion_id reverse relationship
	 * @property-read NarroSuggestionVote[] $_NarroSuggestionVoteAsSuggestionArray the value for the private _objNarroSuggestionVoteAsSuggestionArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion_vote.suggestion_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroSuggestionGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['SuggestionId'] = null;
                $this->_arrHistory['UserId'] = null;
                $this->_arrHistory['TextId'] = null;
                $this->_arrHistory['LanguageId'] = null;
                $this->_arrHistory['SuggestionValue'] = null;
                $this->_arrHistory['SuggestionValueMd5'] = null;
                $this->_arrHistory['SuggestionCharCount'] = null;
                $this->_arrHistory['SuggestionWordCount'] = null;
                $this->_arrHistory['HasComments'] = null;
                $this->_arrHistory['IsImported'] = null;
                $this->_arrHistory['Created'] = null;
                $this->_arrHistory['Modified'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_suggestion.suggestion_id
		 * @var integer intSuggestionId
		 */
		protected $intSuggestionId;
		const SuggestionIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.text_id
		 * @var integer intTextId
		 */
		protected $intTextId;
		const TextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.suggestion_value
		 * @var string strSuggestionValue
		 */
		protected $strSuggestionValue;
		const SuggestionValueDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.suggestion_value_md5
		 * @var string strSuggestionValueMd5
		 */
		protected $strSuggestionValueMd5;
		const SuggestionValueMd5MaxLength = 32;
		const SuggestionValueMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.suggestion_char_count
		 * @var integer intSuggestionCharCount
		 */
		protected $intSuggestionCharCount;
		const SuggestionCharCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.suggestion_word_count
		 * @var integer intSuggestionWordCount
		 */
		protected $intSuggestionWordCount;
		const SuggestionWordCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.has_comments
		 * @var boolean blnHasComments
		 */
		protected $blnHasComments;
		const HasCommentsDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.is_imported
		 * @var boolean blnIsImported
		 */
		protected $blnIsImported;
		const IsImportedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
		const ModifiedDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextInfoAsValidSuggestion object
		 * (of type NarroContextInfo), if this NarroSuggestion object was restored with
		 * an expansion on the narro_context_info association table.
		 * @var NarroContextInfo _objNarroContextInfoAsValidSuggestion;
		 */
		private $_objNarroContextInfoAsValidSuggestion;

		/**
		 * Private member variable that stores a reference to an array of NarroContextInfoAsValidSuggestion objects
		 * (of type NarroContextInfo[]), if this NarroSuggestion object was restored with
		 * an ExpandAsArray on the narro_context_info association table.
		 * @var NarroContextInfo[] _objNarroContextInfoAsValidSuggestionArray;
		 */
		private $_objNarroContextInfoAsValidSuggestionArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionVoteAsSuggestion object
		 * (of type NarroSuggestionVote), if this NarroSuggestion object was restored with
		 * an expansion on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote _objNarroSuggestionVoteAsSuggestion;
		 */
		private $_objNarroSuggestionVoteAsSuggestion;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionVoteAsSuggestion objects
		 * (of type NarroSuggestionVote[]), if this NarroSuggestion object was restored with
		 * an ExpandAsArray on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote[] _objNarroSuggestionVoteAsSuggestionArray;
		 */
		private $_objNarroSuggestionVoteAsSuggestionArray = null;

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
		 * in the database column narro_suggestion.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this NarroUser object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroUser objUser
		 */
		protected $objUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion.text_id.
		 *
		 * NOTE: Always use the Text property getter to correctly retrieve this NarroText object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroText objText
		 */
		protected $objText;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion.language_id.
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
			$this->intSuggestionId = NarroSuggestion::SuggestionIdDefault;
			$this->intUserId = NarroSuggestion::UserIdDefault;
			$this->intTextId = NarroSuggestion::TextIdDefault;
			$this->intLanguageId = NarroSuggestion::LanguageIdDefault;
			$this->strSuggestionValue = NarroSuggestion::SuggestionValueDefault;
			$this->strSuggestionValueMd5 = NarroSuggestion::SuggestionValueMd5Default;
			$this->intSuggestionCharCount = NarroSuggestion::SuggestionCharCountDefault;
			$this->intSuggestionWordCount = NarroSuggestion::SuggestionWordCountDefault;
			$this->blnHasComments = NarroSuggestion::HasCommentsDefault;
			$this->blnIsImported = NarroSuggestion::IsImportedDefault;
			$this->dttCreated = (NarroSuggestion::CreatedDefault === null)?null:new QDateTime(NarroSuggestion::CreatedDefault);
			$this->dttModified = (NarroSuggestion::ModifiedDefault === null)?null:new QDateTime(NarroSuggestion::ModifiedDefault);
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
		 * Load a NarroSuggestion from PK Info
		 * @param integer $intSuggestionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion
		 */
		public static function Load($intSuggestionId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroSuggestion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestion()->SuggestionId, $intSuggestionId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroSuggestions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroSuggestion::QueryArray to perform the LoadAll query
			try {
				return NarroSuggestion::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroSuggestions
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroSuggestion::QueryCount to perform the CountAll query
			return NarroSuggestion::QueryCount(QQ::All());
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
			$objDatabase = NarroSuggestion::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroSuggestion-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_suggestion');
			NarroSuggestion::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_suggestion');

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
		 * Static Qcubed Query method to query for a single NarroSuggestion object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestion the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroSuggestion object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroSuggestion::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroSuggestion::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroSuggestion objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestion[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroSuggestion::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroSuggestion objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroSuggestion::GetDatabase();

			$strQuery = NarroSuggestion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrosuggestion', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroSuggestion::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroSuggestion
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_suggestion';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'suggestion_id', $strAliasPrefix . 'suggestion_id');
			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'text_id', $strAliasPrefix . 'text_id');
			$objBuilder->AddSelectItem($strTableName, 'language_id', $strAliasPrefix . 'language_id');
			$objBuilder->AddSelectItem($strTableName, 'suggestion_value', $strAliasPrefix . 'suggestion_value');
			$objBuilder->AddSelectItem($strTableName, 'suggestion_value_md5', $strAliasPrefix . 'suggestion_value_md5');
			$objBuilder->AddSelectItem($strTableName, 'suggestion_char_count', $strAliasPrefix . 'suggestion_char_count');
			$objBuilder->AddSelectItem($strTableName, 'suggestion_word_count', $strAliasPrefix . 'suggestion_word_count');
			$objBuilder->AddSelectItem($strTableName, 'has_comments', $strAliasPrefix . 'has_comments');
			$objBuilder->AddSelectItem($strTableName, 'is_imported', $strAliasPrefix . 'is_imported');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroSuggestion from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroSuggestion::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroSuggestion
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intSuggestionId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_suggestion__';


						// Expanding reverse references: NarroContextInfoAsValidSuggestion
						$strAlias = $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextInfoAsValidSuggestionArray)
								$objPreviousItem->_objNarroContextInfoAsValidSuggestionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsValidSuggestionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextInfoAsValidSuggestionArray;
								$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextInfoAsValidSuggestionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextInfoAsValidSuggestionArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionVoteAsSuggestion
						$strAlias = $strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray)
								$objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray;
								$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_suggestion__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroSuggestion object
			$objToReturn = new NarroSuggestion();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_id'] : $strAliasPrefix . 'suggestion_id';
			$objToReturn->intSuggestionId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_id'] : $strAliasPrefix . 'text_id';
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_id'] : $strAliasPrefix . 'language_id';
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_value', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_value'] : $strAliasPrefix . 'suggestion_value';
			$objToReturn->strSuggestionValue = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_value_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_value_md5'] : $strAliasPrefix . 'suggestion_value_md5';
			$objToReturn->strSuggestionValueMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_char_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_char_count'] : $strAliasPrefix . 'suggestion_char_count';
			$objToReturn->intSuggestionCharCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_word_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_word_count'] : $strAliasPrefix . 'suggestion_word_count';
			$objToReturn->intSuggestionWordCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'has_comments', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_comments'] : $strAliasPrefix . 'has_comments';
			$objToReturn->blnHasComments = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'is_imported', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_imported'] : $strAliasPrefix . 'is_imported';
			$objToReturn->blnIsImported = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'created', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'created'] : $strAliasPrefix . 'created';
			$objToReturn->dttCreated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modified'] : $strAliasPrefix . 'modified';
			$objToReturn->dttModified = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->SuggestionId != $objPreviousItem->SuggestionId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextInfoAsValidSuggestionArray, $objToReturn->_objNarroContextInfoAsValidSuggestionArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray, $objToReturn->_objNarroSuggestionVoteAsSuggestionArray) != null) {
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
				$strAliasPrefix = 'narro_suggestion__';

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'user_id__user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Text Early Binding
			$strAlias = $strAliasPrefix . 'text_id__text_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objText = NarroText::InstantiateDbRow($objDbRow, $strAliasPrefix . 'text_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Language Early Binding
			$strAlias = $strAliasPrefix . 'language_id__language_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for NarroContextInfoAsValidSuggestion Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextInfoAsValidSuggestionArray)
				$objToReturn->_objNarroContextInfoAsValidSuggestionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextInfoAsValidSuggestionArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextInfoAsValidSuggestion = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionVoteAsSuggestion Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionVoteAsSuggestionArray)
				$objToReturn->_objNarroSuggestionVoteAsSuggestionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionVoteAsSuggestionArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionVoteAsSuggestion = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroSuggestions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroSuggestion[]
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
					$objItem = NarroSuggestion::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroSuggestion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroSuggestion object,
		 * by SuggestionId Index(es)
		 * @param integer $intSuggestionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion
		*/
		public static function LoadBySuggestionId($intSuggestionId, $objOptionalClauses = null) {
			return NarroSuggestion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestion()->SuggestionId, $intSuggestionId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroSuggestion object,
		 * by TextId, LanguageId, SuggestionValueMd5 Index(es)
		 * @param integer $intTextId
		 * @param integer $intLanguageId
		 * @param string $strSuggestionValueMd5
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion
		*/
		public static function LoadByTextIdLanguageIdSuggestionValueMd5($intTextId, $intLanguageId, $strSuggestionValueMd5, $objOptionalClauses = null) {
			return NarroSuggestion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId),
					QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId),
					QQ::Equal(QQN::NarroSuggestion()->SuggestionValueMd5, $strSuggestionValueMd5)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroSuggestion objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call NarroSuggestion::QueryArray to perform the LoadArrayByUserId query
			try {
				return NarroSuggestion::QueryArray(
					QQ::Equal(QQN::NarroSuggestion()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestions
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call NarroSuggestion::QueryCount to perform the CountByUserId query
			return NarroSuggestion::QueryCount(
				QQ::Equal(QQN::NarroSuggestion()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestion objects,
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public static function LoadArrayByTextId($intTextId, $objOptionalClauses = null) {
			// Call NarroSuggestion::QueryArray to perform the LoadArrayByTextId query
			try {
				return NarroSuggestion::QueryArray(
					QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestions
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @return int
		*/
		public static function CountByTextId($intTextId) {
			// Call NarroSuggestion::QueryCount to perform the CountByTextId query
			return NarroSuggestion::QueryCount(
				QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestion objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroSuggestion::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroSuggestion::QueryArray(
					QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestions
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroSuggestion::QueryCount to perform the CountByLanguageId query
			return NarroSuggestion::QueryCount(
				QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestion objects,
		 * by TextId, LanguageId Index(es)
		 * @param integer $intTextId
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public static function LoadArrayByTextIdLanguageId($intTextId, $intLanguageId, $objOptionalClauses = null) {
			// Call NarroSuggestion::QueryArray to perform the LoadArrayByTextIdLanguageId query
			try {
				return NarroSuggestion::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId),
					QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestions
		 * by TextId, LanguageId Index(es)
		 * @param integer $intTextId
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByTextIdLanguageId($intTextId, $intLanguageId) {
			// Call NarroSuggestion::QueryCount to perform the CountByTextIdLanguageId query
			return NarroSuggestion::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId),
				QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId)
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

            if (!isset($this->_arrHistory['SuggestionId']))
                $this->_arrHistory['SuggestionId'] = $this->SuggestionId;
            if (!isset($this->_arrHistory['UserId']))
                $this->_arrHistory['UserId'] = $this->UserId;
            if (!isset($this->_arrHistory['TextId']))
                $this->_arrHistory['TextId'] = $this->TextId;
            if (!isset($this->_arrHistory['LanguageId']))
                $this->_arrHistory['LanguageId'] = $this->LanguageId;
            if (!isset($this->_arrHistory['SuggestionValue']))
                $this->_arrHistory['SuggestionValue'] = $this->SuggestionValue;
            if (!isset($this->_arrHistory['SuggestionValueMd5']))
                $this->_arrHistory['SuggestionValueMd5'] = $this->SuggestionValueMd5;
            if (!isset($this->_arrHistory['SuggestionCharCount']))
                $this->_arrHistory['SuggestionCharCount'] = $this->SuggestionCharCount;
            if (!isset($this->_arrHistory['SuggestionWordCount']))
                $this->_arrHistory['SuggestionWordCount'] = $this->SuggestionWordCount;
            if (!isset($this->_arrHistory['HasComments']))
                $this->_arrHistory['HasComments'] = $this->HasComments;
            if (!isset($this->_arrHistory['IsImported']))
                $this->_arrHistory['IsImported'] = $this->IsImported;
            if (!isset($this->_arrHistory['Created']))
                $this->_arrHistory['Created'] = $this->Created;
            if (!isset($this->_arrHistory['Modified']))
                $this->_arrHistory['Modified'] = $this->Modified;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroSuggestion
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_suggestion` (
							`user_id`,
							`text_id`,
							`language_id`,
							`suggestion_value`,
							`suggestion_value_md5`,
							`suggestion_char_count`,
							`suggestion_word_count`,
							`has_comments`,
							`is_imported`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intTextId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->strSuggestionValue) . ',
							' . $objDatabase->SqlVariable($this->strSuggestionValueMd5) . ',
							' . $objDatabase->SqlVariable($this->intSuggestionCharCount) . ',
							' . $objDatabase->SqlVariable($this->intSuggestionWordCount) . ',
							' . $objDatabase->SqlVariable($this->blnHasComments) . ',
							' . $objDatabase->SqlVariable($this->blnIsImported) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intSuggestionId = $objDatabase->InsertId('narro_suggestion', 'suggestion_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['UserId'] !== $this->UserId ||
                        (
                            $this->UserId instanceof QDateTime &&
                            (string) $this->_arrHistory['UserId'] !== (string) $this->UserId
                        )
                    )
                        $arrUpdateChanges[] = '`user_id` = ' . $objDatabase->SqlVariable($this->intUserId);
                    if (
                        $this->_arrHistory['TextId'] !== $this->TextId ||
                        (
                            $this->TextId instanceof QDateTime &&
                            (string) $this->_arrHistory['TextId'] !== (string) $this->TextId
                        )
                    )
                        $arrUpdateChanges[] = '`text_id` = ' . $objDatabase->SqlVariable($this->intTextId);
                    if (
                        $this->_arrHistory['LanguageId'] !== $this->LanguageId ||
                        (
                            $this->LanguageId instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageId'] !== (string) $this->LanguageId
                        )
                    )
                        $arrUpdateChanges[] = '`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId);
                    if (
                        $this->_arrHistory['SuggestionValue'] !== $this->SuggestionValue ||
                        (
                            $this->SuggestionValue instanceof QDateTime &&
                            (string) $this->_arrHistory['SuggestionValue'] !== (string) $this->SuggestionValue
                        )
                    )
                        $arrUpdateChanges[] = '`suggestion_value` = ' . $objDatabase->SqlVariable($this->strSuggestionValue);
                    if (
                        $this->_arrHistory['SuggestionValueMd5'] !== $this->SuggestionValueMd5 ||
                        (
                            $this->SuggestionValueMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['SuggestionValueMd5'] !== (string) $this->SuggestionValueMd5
                        )
                    )
                        $arrUpdateChanges[] = '`suggestion_value_md5` = ' . $objDatabase->SqlVariable($this->strSuggestionValueMd5);
                    if (
                        $this->_arrHistory['SuggestionCharCount'] !== $this->SuggestionCharCount ||
                        (
                            $this->SuggestionCharCount instanceof QDateTime &&
                            (string) $this->_arrHistory['SuggestionCharCount'] !== (string) $this->SuggestionCharCount
                        )
                    )
                        $arrUpdateChanges[] = '`suggestion_char_count` = ' . $objDatabase->SqlVariable($this->intSuggestionCharCount);
                    if (
                        $this->_arrHistory['SuggestionWordCount'] !== $this->SuggestionWordCount ||
                        (
                            $this->SuggestionWordCount instanceof QDateTime &&
                            (string) $this->_arrHistory['SuggestionWordCount'] !== (string) $this->SuggestionWordCount
                        )
                    )
                        $arrUpdateChanges[] = '`suggestion_word_count` = ' . $objDatabase->SqlVariable($this->intSuggestionWordCount);
                    if (
                        $this->_arrHistory['HasComments'] !== $this->HasComments ||
                        (
                            $this->HasComments instanceof QDateTime &&
                            (string) $this->_arrHistory['HasComments'] !== (string) $this->HasComments
                        )
                    )
                        $arrUpdateChanges[] = '`has_comments` = ' . $objDatabase->SqlVariable($this->blnHasComments);
                    if (
                        $this->_arrHistory['IsImported'] !== $this->IsImported ||
                        (
                            $this->IsImported instanceof QDateTime &&
                            (string) $this->_arrHistory['IsImported'] !== (string) $this->IsImported
                        )
                    )
                        $arrUpdateChanges[] = '`is_imported` = ' . $objDatabase->SqlVariable($this->blnIsImported);
                    if (
                        $this->_arrHistory['Created'] !== $this->Created ||
                        (
                            $this->Created instanceof QDateTime &&
                            (string) $this->_arrHistory['Created'] !== (string) $this->Created
                        )
                    )
                        $arrUpdateChanges[] = '`created` = ' . $objDatabase->SqlVariable($this->dttCreated);
                    if (
                        $this->_arrHistory['Modified'] !== $this->Modified ||
                        (
                            $this->Modified instanceof QDateTime &&
                            (string) $this->_arrHistory['Modified'] !== (string) $this->Modified
                        )
                    )
                        $arrUpdateChanges[] = '`modified` = ' . $objDatabase->SqlVariable($this->dttModified);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_suggestion`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
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
		 * Delete this NarroSuggestion
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroSuggestion with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '');
		}

		/**
		 * Delete all NarroSuggestions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`');
		}

		/**
		 * Truncate narro_suggestion table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_suggestion`');
		}

		/**
		 * Reload this NarroSuggestion from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroSuggestion object.');

			// Reload the Object
			$objReloaded = NarroSuggestion::Load($this->intSuggestionId);

			// Update $this's local variables to match
			$this->UserId = $objReloaded->UserId;
			$this->TextId = $objReloaded->TextId;
			$this->LanguageId = $objReloaded->LanguageId;
			$this->strSuggestionValue = $objReloaded->strSuggestionValue;
			$this->strSuggestionValueMd5 = $objReloaded->strSuggestionValueMd5;
			$this->intSuggestionCharCount = $objReloaded->intSuggestionCharCount;
			$this->intSuggestionWordCount = $objReloaded->intSuggestionWordCount;
			$this->blnHasComments = $objReloaded->blnHasComments;
			$this->blnIsImported = $objReloaded->blnIsImported;
			$this->dttCreated = $objReloaded->dttCreated;
			$this->dttModified = $objReloaded->dttModified;
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
				case 'SuggestionId':
					/**
					 * Gets the value for intSuggestionId (Read-Only PK)
					 * @return integer
					 */
					return $this->intSuggestionId;

				case 'UserId':
					/**
					 * Gets the value for intUserId 
					 * @return integer
					 */
					return $this->intUserId;

				case 'TextId':
					/**
					 * Gets the value for intTextId (Not Null)
					 * @return integer
					 */
					return $this->intTextId;

				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId (Not Null)
					 * @return integer
					 */
					return $this->intLanguageId;

				case 'SuggestionValue':
					/**
					 * Gets the value for strSuggestionValue (Not Null)
					 * @return string
					 */
					return $this->strSuggestionValue;

				case 'SuggestionValueMd5':
					/**
					 * Gets the value for strSuggestionValueMd5 (Not Null)
					 * @return string
					 */
					return $this->strSuggestionValueMd5;

				case 'SuggestionCharCount':
					/**
					 * Gets the value for intSuggestionCharCount 
					 * @return integer
					 */
					return $this->intSuggestionCharCount;

				case 'SuggestionWordCount':
					/**
					 * Gets the value for intSuggestionWordCount 
					 * @return integer
					 */
					return $this->intSuggestionWordCount;

				case 'HasComments':
					/**
					 * Gets the value for blnHasComments 
					 * @return boolean
					 */
					return $this->blnHasComments;

				case 'IsImported':
					/**
					 * Gets the value for blnIsImported (Not Null)
					 * @return boolean
					 */
					return $this->blnIsImported;

				case 'Created':
					/**
					 * Gets the value for dttCreated (Not Null)
					 * @return QDateTime
					 */
					return $this->dttCreated;

				case 'Modified':
					/**
					 * Gets the value for dttModified 
					 * @return QDateTime
					 */
					return $this->dttModified;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'Text':
					/**
					 * Gets the value for the NarroText object referenced by intTextId (Not Null)
					 * @return NarroText
					 */
					try {
						if ((!$this->objText) && (!is_null($this->intTextId)))
							$this->objText = NarroText::Load($this->intTextId);
						return $this->objText;
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

				case '_NarroContextInfoAsValidSuggestion':
					/**
					 * Gets the value for the private _objNarroContextInfoAsValidSuggestion (Read-Only)
					 * if set due to an expansion on the narro_context_info.valid_suggestion_id reverse relationship
					 * @return NarroContextInfo
					 */
					return $this->_objNarroContextInfoAsValidSuggestion;

				case '_NarroContextInfoAsValidSuggestionArray':
					/**
					 * Gets the value for the private _objNarroContextInfoAsValidSuggestionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_info.valid_suggestion_id reverse relationship
					 * @return NarroContextInfo[]
					 */
					return $this->_objNarroContextInfoAsValidSuggestionArray;

				case '_NarroSuggestionVoteAsSuggestion':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsSuggestion (Read-Only)
					 * if set due to an expansion on the narro_suggestion_vote.suggestion_id reverse relationship
					 * @return NarroSuggestionVote
					 */
					return $this->_objNarroSuggestionVoteAsSuggestion;

				case '_NarroSuggestionVoteAsSuggestionArray':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsSuggestionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_vote.suggestion_id reverse relationship
					 * @return NarroSuggestionVote[]
					 */
					return $this->_objNarroSuggestionVoteAsSuggestionArray;


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

				case 'TextId':
					/**
					 * Sets the value for intTextId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objText = null;
						return ($this->intTextId = QType::Cast($mixValue, QType::Integer));
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

				case 'SuggestionValue':
					/**
					 * Sets the value for strSuggestionValue (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSuggestionValue = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SuggestionValueMd5':
					/**
					 * Sets the value for strSuggestionValueMd5 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSuggestionValueMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SuggestionCharCount':
					/**
					 * Sets the value for intSuggestionCharCount 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSuggestionCharCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SuggestionWordCount':
					/**
					 * Sets the value for intSuggestionWordCount 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSuggestionWordCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HasComments':
					/**
					 * Sets the value for blnHasComments 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnHasComments = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IsImported':
					/**
					 * Sets the value for blnIsImported (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsImported = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Created':
					/**
					 * Sets the value for dttCreated (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCreated = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Modified':
					/**
					 * Sets the value for dttModified 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttModified = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved User for this NarroSuggestion');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->UserId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Text':
					/**
					 * Sets the value for the NarroText object referenced by intTextId (Not Null)
					 * @param NarroText $mixValue
					 * @return NarroText
					 */
					if (is_null($mixValue)) {
						$this->intTextId = null;
						$this->objText = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroText object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroText');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroText object
						if (is_null($mixValue->TextId))
							throw new QCallerException('Unable to set an unsaved Text for this NarroSuggestion');

						// Update Local Member Variables
						$this->objText = $mixValue;
						$this->intTextId = $mixValue->TextId;

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
							throw new QCallerException('Unable to set an unsaved Language for this NarroSuggestion');

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

			
		
		// Related Objects' Methods for NarroContextInfoAsValidSuggestion
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextInfosAsValidSuggestion as an array of NarroContextInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextInfo[]
		*/
		public function GetNarroContextInfoAsValidSuggestionArray($objOptionalClauses = null) {
			if ((is_null($this->intSuggestionId)))
				return array();

			try {
				return NarroContextInfo::LoadArrayByValidSuggestionId($this->intSuggestionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextInfosAsValidSuggestion
		 * @return int
		*/
		public function CountNarroContextInfosAsValidSuggestion() {
			if ((is_null($this->intSuggestionId)))
				return 0;

			return NarroContextInfo::CountByValidSuggestionId($this->intSuggestionId);
		}

		/**
		 * Associates a NarroContextInfoAsValidSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function AssociateNarroContextInfoAsValidSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsValidSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsValidSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`valid_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . '
			');
		}

		/**
		 * Unassociates a NarroContextInfoAsValidSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function UnassociateNarroContextInfoAsValidSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`valid_suggestion_id` = null
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`valid_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Unassociates all NarroContextInfosAsValidSuggestion
		 * @return void
		*/
		public function UnassociateAllNarroContextInfosAsValidSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`valid_suggestion_id` = null
				WHERE
					`valid_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextInfoAsValidSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/
		public function DeleteAssociatedNarroContextInfoAsValidSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`valid_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextInfosAsValidSuggestion
		 * @return void
		*/
		public function DeleteAllNarroContextInfosAsValidSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`valid_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionVoteAsSuggestion
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionVotesAsSuggestion as an array of NarroSuggestionVote objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/
		public function GetNarroSuggestionVoteAsSuggestionArray($objOptionalClauses = null) {
			if ((is_null($this->intSuggestionId)))
				return array();

			try {
				return NarroSuggestionVote::LoadArrayBySuggestionId($this->intSuggestionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionVotesAsSuggestion
		 * @return int
		*/
		public function CountNarroSuggestionVotesAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				return 0;

			return NarroSuggestionVote::CountBySuggestionId($this->intSuggestionId);
		}

		/**
		 * Associates a NarroSuggestionVoteAsSuggestion
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/
		public function AssociateNarroSuggestionVoteAsSuggestion(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionVoteAsSuggestion
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/
		public function UnassociateNarroSuggestionVoteAsSuggestion(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`suggestion_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionVotesAsSuggestion
		 * @return void
		*/
		public function UnassociateAllNarroSuggestionVotesAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`suggestion_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionVoteAsSuggestion
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/
		public function DeleteAssociatedNarroSuggestionVoteAsSuggestion(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionVotesAsSuggestion
		 * @return void
		*/
		public function DeleteAllNarroSuggestionVotesAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroSuggestion"><sequence>';
			$strToReturn .= '<element name="SuggestionId" type="xsd:int"/>';
			$strToReturn .= '<element name="User" type="xsd1:NarroUser"/>';
			$strToReturn .= '<element name="Text" type="xsd1:NarroText"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="SuggestionValue" type="xsd:string"/>';
			$strToReturn .= '<element name="SuggestionValueMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="SuggestionCharCount" type="xsd:int"/>';
			$strToReturn .= '<element name="SuggestionWordCount" type="xsd:int"/>';
			$strToReturn .= '<element name="HasComments" type="xsd:boolean"/>';
			$strToReturn .= '<element name="IsImported" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroSuggestion', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroSuggestion'] = NarroSuggestion::GetSoapComplexTypeXml();
				NarroUser::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroText::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroSuggestion::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroSuggestion();
			if (property_exists($objSoapObject, 'SuggestionId'))
				$objToReturn->intSuggestionId = $objSoapObject->SuggestionId;
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = NarroUser::GetObjectFromSoapObject($objSoapObject->User);
			if ((property_exists($objSoapObject, 'Text')) &&
				($objSoapObject->Text))
				$objToReturn->Text = NarroText::GetObjectFromSoapObject($objSoapObject->Text);
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if (property_exists($objSoapObject, 'SuggestionValue'))
				$objToReturn->strSuggestionValue = $objSoapObject->SuggestionValue;
			if (property_exists($objSoapObject, 'SuggestionValueMd5'))
				$objToReturn->strSuggestionValueMd5 = $objSoapObject->SuggestionValueMd5;
			if (property_exists($objSoapObject, 'SuggestionCharCount'))
				$objToReturn->intSuggestionCharCount = $objSoapObject->SuggestionCharCount;
			if (property_exists($objSoapObject, 'SuggestionWordCount'))
				$objToReturn->intSuggestionWordCount = $objSoapObject->SuggestionWordCount;
			if (property_exists($objSoapObject, 'HasComments'))
				$objToReturn->blnHasComments = $objSoapObject->HasComments;
			if (property_exists($objSoapObject, 'IsImported'))
				$objToReturn->blnIsImported = $objSoapObject->IsImported;
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->dttCreated = new QDateTime($objSoapObject->Created);
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->dttModified = new QDateTime($objSoapObject->Modified);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroSuggestion::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objUser)
				$objObject->objUser = NarroUser::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
			if ($objObject->objText)
				$objObject->objText = NarroText::GetSoapObjectFromObject($objObject->objText, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTextId = null;
			if ($objObject->objLanguage)
				$objObject->objLanguage = NarroLanguage::GetSoapObjectFromObject($objObject->objLanguage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLanguageId = null;
			if ($objObject->dttCreated)
				$objObject->dttCreated = $objObject->dttCreated->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttModified)
				$objObject->dttModified = $objObject->dttModified->qFormat(QDateTime::FormatSoap);
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
			$iArray['SuggestionId'] = $this->intSuggestionId;
			$iArray['UserId'] = $this->intUserId;
			$iArray['TextId'] = $this->intTextId;
			$iArray['LanguageId'] = $this->intLanguageId;
			$iArray['SuggestionValue'] = $this->strSuggestionValue;
			$iArray['SuggestionValueMd5'] = $this->strSuggestionValueMd5;
			$iArray['SuggestionCharCount'] = $this->intSuggestionCharCount;
			$iArray['SuggestionWordCount'] = $this->intSuggestionWordCount;
			$iArray['HasComments'] = $this->blnHasComments;
			$iArray['IsImported'] = $this->blnIsImported;
			$iArray['Created'] = $this->dttCreated;
			$iArray['Modified'] = $this->dttModified;
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
     * @property-read QQNode $SuggestionId
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $SuggestionValue
     * @property-read QQNode $SuggestionValueMd5
     * @property-read QQNode $SuggestionCharCount
     * @property-read QQNode $SuggestionWordCount
     * @property-read QQNode $HasComments
     * @property-read QQNode $IsImported
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsValidSuggestion
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsSuggestion

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroSuggestion extends QQNode {
		protected $strTableName = 'narro_suggestion';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestion';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'SuggestionId', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'Integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'Integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'Integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'Integer', $this);
				case 'SuggestionValue':
					return new QQNode('suggestion_value', 'SuggestionValue', 'Blob', $this);
				case 'SuggestionValueMd5':
					return new QQNode('suggestion_value_md5', 'SuggestionValueMd5', 'VarChar', $this);
				case 'SuggestionCharCount':
					return new QQNode('suggestion_char_count', 'SuggestionCharCount', 'Integer', $this);
				case 'SuggestionWordCount':
					return new QQNode('suggestion_word_count', 'SuggestionWordCount', 'Integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'HasComments', 'Bit', $this);
				case 'IsImported':
					return new QQNode('is_imported', 'IsImported', 'Bit', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);
				case 'NarroContextInfoAsValidSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidsuggestion', 'reverse_reference', 'valid_suggestion_id');
				case 'NarroSuggestionVoteAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteassuggestion', 'reverse_reference', 'suggestion_id');

				case '_PrimaryKeyNode':
					return new QQNode('suggestion_id', 'SuggestionId', 'Integer', $this);
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
     * @property-read QQNode $SuggestionId
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $SuggestionValue
     * @property-read QQNode $SuggestionValueMd5
     * @property-read QQNode $SuggestionCharCount
     * @property-read QQNode $SuggestionWordCount
     * @property-read QQNode $HasComments
     * @property-read QQNode $IsImported
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsValidSuggestion
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsSuggestion

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroSuggestion extends QQReverseReferenceNode {
		protected $strTableName = 'narro_suggestion';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestion';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'SuggestionId', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'integer', $this);
				case 'SuggestionValue':
					return new QQNode('suggestion_value', 'SuggestionValue', 'string', $this);
				case 'SuggestionValueMd5':
					return new QQNode('suggestion_value_md5', 'SuggestionValueMd5', 'string', $this);
				case 'SuggestionCharCount':
					return new QQNode('suggestion_char_count', 'SuggestionCharCount', 'integer', $this);
				case 'SuggestionWordCount':
					return new QQNode('suggestion_word_count', 'SuggestionWordCount', 'integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'HasComments', 'boolean', $this);
				case 'IsImported':
					return new QQNode('is_imported', 'IsImported', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);
				case 'NarroContextInfoAsValidSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidsuggestion', 'reverse_reference', 'valid_suggestion_id');
				case 'NarroSuggestionVoteAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteassuggestion', 'reverse_reference', 'suggestion_id');

				case '_PrimaryKeyNode':
					return new QQNode('suggestion_id', 'SuggestionId', 'integer', $this);
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
