<?php
	/**
	 * The abstract NarroTextGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroText subclass which
	 * extends this NarroTextGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroText class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $TextId the value for intTextId (Read-Only PK)
	 * @property string $TextValue the value for strTextValue (Not Null)
	 * @property string $TextValueMd5 the value for strTextValueMd5 (Unique)
	 * @property integer $TextCharCount the value for intTextCharCount (Not Null)
	 * @property integer $TextWordCount the value for intTextWordCount 
	 * @property boolean $HasComments the value for blnHasComments 
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property-read NarroContext $_NarroContextAsText the value for the private _objNarroContextAsText (Read-Only) if set due to an expansion on the narro_context.text_id reverse relationship
	 * @property-read NarroContext[] $_NarroContextAsTextArray the value for the private _objNarroContextAsTextArray (Read-Only) if set due to an ExpandAsArray on the narro_context.text_id reverse relationship
	 * @property-read NarroSuggestion $_NarroSuggestionAsText the value for the private _objNarroSuggestionAsText (Read-Only) if set due to an expansion on the narro_suggestion.text_id reverse relationship
	 * @property-read NarroSuggestion[] $_NarroSuggestionAsTextArray the value for the private _objNarroSuggestionAsTextArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion.text_id reverse relationship
	 * @property-read NarroTextComment $_NarroTextCommentAsText the value for the private _objNarroTextCommentAsText (Read-Only) if set due to an expansion on the narro_text_comment.text_id reverse relationship
	 * @property-read NarroTextComment[] $_NarroTextCommentAsTextArray the value for the private _objNarroTextCommentAsTextArray (Read-Only) if set due to an ExpandAsArray on the narro_text_comment.text_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroTextGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['TextId'] = null;
                $this->_arrHistory['TextValue'] = null;
                $this->_arrHistory['TextValueMd5'] = null;
                $this->_arrHistory['TextCharCount'] = null;
                $this->_arrHistory['TextWordCount'] = null;
                $this->_arrHistory['HasComments'] = null;
                $this->_arrHistory['Created'] = null;
                $this->_arrHistory['Modified'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_text.text_id
		 * @var integer intTextId
		 */
		protected $intTextId;
		const TextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.text_value
		 * @var string strTextValue
		 */
		protected $strTextValue;
		const TextValueDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.text_value_md5
		 * @var string strTextValueMd5
		 */
		protected $strTextValueMd5;
		const TextValueMd5MaxLength = 32;
		const TextValueMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_text.text_char_count
		 * @var integer intTextCharCount
		 */
		protected $intTextCharCount;
		const TextCharCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.text_word_count
		 * @var integer intTextWordCount
		 */
		protected $intTextWordCount;
		const TextWordCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.has_comments
		 * @var boolean blnHasComments
		 */
		protected $blnHasComments;
		const HasCommentsDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
		const ModifiedDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextAsText object
		 * (of type NarroContext), if this NarroText object was restored with
		 * an expansion on the narro_context association table.
		 * @var NarroContext _objNarroContextAsText;
		 */
		private $_objNarroContextAsText;

		/**
		 * Private member variable that stores a reference to an array of NarroContextAsText objects
		 * (of type NarroContext[]), if this NarroText object was restored with
		 * an ExpandAsArray on the narro_context association table.
		 * @var NarroContext[] _objNarroContextAsTextArray;
		 */
		private $_objNarroContextAsTextArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionAsText object
		 * (of type NarroSuggestion), if this NarroText object was restored with
		 * an expansion on the narro_suggestion association table.
		 * @var NarroSuggestion _objNarroSuggestionAsText;
		 */
		private $_objNarroSuggestionAsText;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionAsText objects
		 * (of type NarroSuggestion[]), if this NarroText object was restored with
		 * an ExpandAsArray on the narro_suggestion association table.
		 * @var NarroSuggestion[] _objNarroSuggestionAsTextArray;
		 */
		private $_objNarroSuggestionAsTextArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroTextCommentAsText object
		 * (of type NarroTextComment), if this NarroText object was restored with
		 * an expansion on the narro_text_comment association table.
		 * @var NarroTextComment _objNarroTextCommentAsText;
		 */
		private $_objNarroTextCommentAsText;

		/**
		 * Private member variable that stores a reference to an array of NarroTextCommentAsText objects
		 * (of type NarroTextComment[]), if this NarroText object was restored with
		 * an ExpandAsArray on the narro_text_comment association table.
		 * @var NarroTextComment[] _objNarroTextCommentAsTextArray;
		 */
		private $_objNarroTextCommentAsTextArray = null;

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
			$this->intTextId = NarroText::TextIdDefault;
			$this->strTextValue = NarroText::TextValueDefault;
			$this->strTextValueMd5 = NarroText::TextValueMd5Default;
			$this->intTextCharCount = NarroText::TextCharCountDefault;
			$this->intTextWordCount = NarroText::TextWordCountDefault;
			$this->blnHasComments = NarroText::HasCommentsDefault;
			$this->dttCreated = (NarroText::CreatedDefault === null)?null:new QDateTime(NarroText::CreatedDefault);
			$this->dttModified = (NarroText::ModifiedDefault === null)?null:new QDateTime(NarroText::ModifiedDefault);
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
		 * Load a NarroText from PK Info
		 * @param integer $intTextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroText
		 */
		public static function Load($intTextId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroText::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroText()->TextId, $intTextId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroTexts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroText[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroText::QueryArray to perform the LoadAll query
			try {
				return NarroText::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroTexts
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroText::QueryCount to perform the CountAll query
			return NarroText::QueryCount(QQ::All());
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
			$objDatabase = NarroText::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroText-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_text');
			NarroText::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_text');

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
		 * Static Qcubed Query method to query for a single NarroText object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroText the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroText::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroText object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroText::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroText::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroText objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroText[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroText::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroText::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroText objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroText::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroText::GetDatabase();

			$strQuery = NarroText::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrotext', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroText::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroText
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_text';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'text_id', $strAliasPrefix . 'text_id');
			$objBuilder->AddSelectItem($strTableName, 'text_value', $strAliasPrefix . 'text_value');
			$objBuilder->AddSelectItem($strTableName, 'text_value_md5', $strAliasPrefix . 'text_value_md5');
			$objBuilder->AddSelectItem($strTableName, 'text_char_count', $strAliasPrefix . 'text_char_count');
			$objBuilder->AddSelectItem($strTableName, 'text_word_count', $strAliasPrefix . 'text_word_count');
			$objBuilder->AddSelectItem($strTableName, 'has_comments', $strAliasPrefix . 'has_comments');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroText from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroText::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroText
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'text_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intTextId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_text__';


						// Expanding reverse references: NarroContextAsText
						$strAlias = $strAliasPrefix . 'narrocontextastext__context_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextAsTextArray)
								$objPreviousItem->_objNarroContextAsTextArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextAsTextArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextAsTextArray;
								$objChildItem = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextastext__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextAsTextArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextAsTextArray[] = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionAsText
						$strAlias = $strAliasPrefix . 'narrosuggestionastext__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionAsTextArray)
								$objPreviousItem->_objNarroSuggestionAsTextArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionAsTextArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionAsTextArray;
								$objChildItem = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionastext__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionAsTextArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionAsTextArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroTextCommentAsText
						$strAlias = $strAliasPrefix . 'narrotextcommentastext__text_comment_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroTextCommentAsTextArray)
								$objPreviousItem->_objNarroTextCommentAsTextArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroTextCommentAsTextArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroTextCommentAsTextArray;
								$objChildItem = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentastext__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroTextCommentAsTextArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroTextCommentAsTextArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_text__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroText object
			$objToReturn = new NarroText();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'text_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_id'] : $strAliasPrefix . 'text_id';
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_value', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_value'] : $strAliasPrefix . 'text_value';
			$objToReturn->strTextValue = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_value_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_value_md5'] : $strAliasPrefix . 'text_value_md5';
			$objToReturn->strTextValueMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_char_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_char_count'] : $strAliasPrefix . 'text_char_count';
			$objToReturn->intTextCharCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_word_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_word_count'] : $strAliasPrefix . 'text_word_count';
			$objToReturn->intTextWordCount = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'has_comments', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_comments'] : $strAliasPrefix . 'has_comments';
			$objToReturn->blnHasComments = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'created', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'created'] : $strAliasPrefix . 'created';
			$objToReturn->dttCreated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modified'] : $strAliasPrefix . 'modified';
			$objToReturn->dttModified = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->TextId != $objPreviousItem->TextId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextAsTextArray, $objToReturn->_objNarroContextAsTextArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionAsTextArray, $objToReturn->_objNarroSuggestionAsTextArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroTextCommentAsTextArray, $objToReturn->_objNarroTextCommentAsTextArray) != null) {
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
				$strAliasPrefix = 'narro_text__';




			// Check for NarroContextAsText Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextastext__context_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextAsTextArray)
				$objToReturn->_objNarroContextAsTextArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextAsTextArray[] = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextAsText = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionAsText Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionastext__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionAsTextArray)
				$objToReturn->_objNarroSuggestionAsTextArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionAsTextArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionAsText = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroTextCommentAsText Virtual Binding
			$strAlias = $strAliasPrefix . 'narrotextcommentastext__text_comment_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroTextCommentAsTextArray)
				$objToReturn->_objNarroTextCommentAsTextArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroTextCommentAsTextArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroTextCommentAsText = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentastext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroTexts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroText[]
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
					$objItem = NarroText::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroText::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroText object,
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroText
		*/
		public static function LoadByTextId($intTextId, $objOptionalClauses = null) {
			return NarroText::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroText()->TextId, $intTextId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroText object,
		 * by TextValueMd5 Index(es)
		 * @param string $strTextValueMd5
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroText
		*/
		public static function LoadByTextValueMd5($strTextValueMd5, $objOptionalClauses = null) {
			return NarroText::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroText()->TextValueMd5, $strTextValueMd5)
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

            if (!isset($this->_arrHistory['TextId']))
                $this->_arrHistory['TextId'] = $this->TextId;
            if (!isset($this->_arrHistory['TextValue']))
                $this->_arrHistory['TextValue'] = $this->TextValue;
            if (!isset($this->_arrHistory['TextValueMd5']))
                $this->_arrHistory['TextValueMd5'] = $this->TextValueMd5;
            if (!isset($this->_arrHistory['TextCharCount']))
                $this->_arrHistory['TextCharCount'] = $this->TextCharCount;
            if (!isset($this->_arrHistory['TextWordCount']))
                $this->_arrHistory['TextWordCount'] = $this->TextWordCount;
            if (!isset($this->_arrHistory['HasComments']))
                $this->_arrHistory['HasComments'] = $this->HasComments;
            if (!isset($this->_arrHistory['Created']))
                $this->_arrHistory['Created'] = $this->Created;
            if (!isset($this->_arrHistory['Modified']))
                $this->_arrHistory['Modified'] = $this->Modified;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroText
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_text` (
							`text_value`,
							`text_value_md5`,
							`text_char_count`,
							`text_word_count`,
							`has_comments`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTextValue) . ',
							' . $objDatabase->SqlVariable($this->strTextValueMd5) . ',
							' . $objDatabase->SqlVariable($this->intTextCharCount) . ',
							' . $objDatabase->SqlVariable($this->intTextWordCount) . ',
							' . $objDatabase->SqlVariable($this->blnHasComments) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intTextId = $objDatabase->InsertId('narro_text', 'text_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['TextValue'] !== $this->TextValue ||
                        (
                            $this->TextValue instanceof QDateTime &&
                            (string) $this->_arrHistory['TextValue'] !== (string) $this->TextValue
                        )
                    )
                        $arrUpdateChanges[] = '`text_value` = ' . $objDatabase->SqlVariable($this->strTextValue);
                    if (
                        $this->_arrHistory['TextValueMd5'] !== $this->TextValueMd5 ||
                        (
                            $this->TextValueMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['TextValueMd5'] !== (string) $this->TextValueMd5
                        )
                    )
                        $arrUpdateChanges[] = '`text_value_md5` = ' . $objDatabase->SqlVariable($this->strTextValueMd5);
                    if (
                        $this->_arrHistory['TextCharCount'] !== $this->TextCharCount ||
                        (
                            $this->TextCharCount instanceof QDateTime &&
                            (string) $this->_arrHistory['TextCharCount'] !== (string) $this->TextCharCount
                        )
                    )
                        $arrUpdateChanges[] = '`text_char_count` = ' . $objDatabase->SqlVariable($this->intTextCharCount);
                    if (
                        $this->_arrHistory['TextWordCount'] !== $this->TextWordCount ||
                        (
                            $this->TextWordCount instanceof QDateTime &&
                            (string) $this->_arrHistory['TextWordCount'] !== (string) $this->TextWordCount
                        )
                    )
                        $arrUpdateChanges[] = '`text_word_count` = ' . $objDatabase->SqlVariable($this->intTextWordCount);
                    if (
                        $this->_arrHistory['HasComments'] !== $this->HasComments ||
                        (
                            $this->HasComments instanceof QDateTime &&
                            (string) $this->_arrHistory['HasComments'] !== (string) $this->HasComments
                        )
                    )
                        $arrUpdateChanges[] = '`has_comments` = ' . $objDatabase->SqlVariable($this->blnHasComments);
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
							`narro_text`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
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
		 * Delete this NarroText
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroText with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text`
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '');
		}

		/**
		 * Delete all NarroTexts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text`');
		}

		/**
		 * Truncate narro_text table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_text`');
		}

		/**
		 * Reload this NarroText from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroText object.');

			// Reload the Object
			$objReloaded = NarroText::Load($this->intTextId);

			// Update $this's local variables to match
			$this->strTextValue = $objReloaded->strTextValue;
			$this->strTextValueMd5 = $objReloaded->strTextValueMd5;
			$this->intTextCharCount = $objReloaded->intTextCharCount;
			$this->intTextWordCount = $objReloaded->intTextWordCount;
			$this->blnHasComments = $objReloaded->blnHasComments;
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
				case 'TextId':
					/**
					 * Gets the value for intTextId (Read-Only PK)
					 * @return integer
					 */
					return $this->intTextId;

				case 'TextValue':
					/**
					 * Gets the value for strTextValue (Not Null)
					 * @return string
					 */
					return $this->strTextValue;

				case 'TextValueMd5':
					/**
					 * Gets the value for strTextValueMd5 (Unique)
					 * @return string
					 */
					return $this->strTextValueMd5;

				case 'TextCharCount':
					/**
					 * Gets the value for intTextCharCount (Not Null)
					 * @return integer
					 */
					return $this->intTextCharCount;

				case 'TextWordCount':
					/**
					 * Gets the value for intTextWordCount 
					 * @return integer
					 */
					return $this->intTextWordCount;

				case 'HasComments':
					/**
					 * Gets the value for blnHasComments 
					 * @return boolean
					 */
					return $this->blnHasComments;

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

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextAsText':
					/**
					 * Gets the value for the private _objNarroContextAsText (Read-Only)
					 * if set due to an expansion on the narro_context.text_id reverse relationship
					 * @return NarroContext
					 */
					return $this->_objNarroContextAsText;

				case '_NarroContextAsTextArray':
					/**
					 * Gets the value for the private _objNarroContextAsTextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context.text_id reverse relationship
					 * @return NarroContext[]
					 */
					return $this->_objNarroContextAsTextArray;

				case '_NarroSuggestionAsText':
					/**
					 * Gets the value for the private _objNarroSuggestionAsText (Read-Only)
					 * if set due to an expansion on the narro_suggestion.text_id reverse relationship
					 * @return NarroSuggestion
					 */
					return $this->_objNarroSuggestionAsText;

				case '_NarroSuggestionAsTextArray':
					/**
					 * Gets the value for the private _objNarroSuggestionAsTextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion.text_id reverse relationship
					 * @return NarroSuggestion[]
					 */
					return $this->_objNarroSuggestionAsTextArray;

				case '_NarroTextCommentAsText':
					/**
					 * Gets the value for the private _objNarroTextCommentAsText (Read-Only)
					 * if set due to an expansion on the narro_text_comment.text_id reverse relationship
					 * @return NarroTextComment
					 */
					return $this->_objNarroTextCommentAsText;

				case '_NarroTextCommentAsTextArray':
					/**
					 * Gets the value for the private _objNarroTextCommentAsTextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_text_comment.text_id reverse relationship
					 * @return NarroTextComment[]
					 */
					return $this->_objNarroTextCommentAsTextArray;


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
				case 'TextValue':
					/**
					 * Sets the value for strTextValue (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTextValue = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextValueMd5':
					/**
					 * Sets the value for strTextValueMd5 (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTextValueMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextCharCount':
					/**
					 * Sets the value for intTextCharCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTextCharCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextWordCount':
					/**
					 * Sets the value for intTextWordCount 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTextWordCount = QType::Cast($mixValue, QType::Integer));
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

			
		
		// Related Objects' Methods for NarroContextAsText
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextsAsText as an array of NarroContext objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public function GetNarroContextAsTextArray($objOptionalClauses = null) {
			if ((is_null($this->intTextId)))
				return array();

			try {
				return NarroContext::LoadArrayByTextId($this->intTextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextsAsText
		 * @return int
		*/
		public function CountNarroContextsAsText() {
			if ((is_null($this->intTextId)))
				return 0;

			return NarroContext::CountByTextId($this->intTextId);
		}

		/**
		 * Associates a NarroContextAsText
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function AssociateNarroContextAsText(NarroContext $objNarroContext) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsText on this unsaved NarroText.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsText on this NarroText with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . '
			');
		}

		/**
		 * Unassociates a NarroContextAsText
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function UnassociateNarroContextAsText(NarroContext $objNarroContext) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this unsaved NarroText.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this NarroText with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`text_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Unassociates all NarroContextsAsText
		 * @return void
		*/
		public function UnassociateAllNarroContextsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`text_id` = null
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextAsText
		 * @param NarroContext $objNarroContext
		 * @return void
		*/
		public function DeleteAssociatedNarroContextAsText(NarroContext $objNarroContext) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this unsaved NarroText.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this NarroText with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextsAsText
		 * @return void
		*/
		public function DeleteAllNarroContextsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionAsText
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionsAsText as an array of NarroSuggestion objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/
		public function GetNarroSuggestionAsTextArray($objOptionalClauses = null) {
			if ((is_null($this->intTextId)))
				return array();

			try {
				return NarroSuggestion::LoadArrayByTextId($this->intTextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionsAsText
		 * @return int
		*/
		public function CountNarroSuggestionsAsText() {
			if ((is_null($this->intTextId)))
				return 0;

			return NarroSuggestion::CountByTextId($this->intTextId);
		}

		/**
		 * Associates a NarroSuggestionAsText
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function AssociateNarroSuggestionAsText(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsText on this unsaved NarroText.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsText on this NarroText with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionAsText
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function UnassociateNarroSuggestionAsText(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this unsaved NarroText.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this NarroText with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`text_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionsAsText
		 * @return void
		*/
		public function UnassociateAllNarroSuggestionsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`text_id` = null
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionAsText
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/
		public function DeleteAssociatedNarroSuggestionAsText(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this unsaved NarroText.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this NarroText with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionsAsText
		 * @return void
		*/
		public function DeleteAllNarroSuggestionsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroTextCommentAsText
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroTextCommentsAsText as an array of NarroTextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/
		public function GetNarroTextCommentAsTextArray($objOptionalClauses = null) {
			if ((is_null($this->intTextId)))
				return array();

			try {
				return NarroTextComment::LoadArrayByTextId($this->intTextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroTextCommentsAsText
		 * @return int
		*/
		public function CountNarroTextCommentsAsText() {
			if ((is_null($this->intTextId)))
				return 0;

			return NarroTextComment::CountByTextId($this->intTextId);
		}

		/**
		 * Associates a NarroTextCommentAsText
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function AssociateNarroTextCommentAsText(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsText on this unsaved NarroText.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsText on this NarroText with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . '
			');
		}

		/**
		 * Unassociates a NarroTextCommentAsText
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function UnassociateNarroTextCommentAsText(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this unsaved NarroText.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this NarroText with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`text_id` = null
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Unassociates all NarroTextCommentsAsText
		 * @return void
		*/
		public function UnassociateAllNarroTextCommentsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`text_id` = null
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes an associated NarroTextCommentAsText
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/
		public function DeleteAssociatedNarroTextCommentAsText(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this unsaved NarroText.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this NarroText with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}

		/**
		 * Deletes all associated NarroTextCommentsAsText
		 * @return void
		*/
		public function DeleteAllNarroTextCommentsAsText() {
			if ((is_null($this->intTextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsText on this unsaved NarroText.');

			// Get the Database Object for this Class
			$objDatabase = NarroText::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroText"><sequence>';
			$strToReturn .= '<element name="TextId" type="xsd:int"/>';
			$strToReturn .= '<element name="TextValue" type="xsd:string"/>';
			$strToReturn .= '<element name="TextValueMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="TextCharCount" type="xsd:int"/>';
			$strToReturn .= '<element name="TextWordCount" type="xsd:int"/>';
			$strToReturn .= '<element name="HasComments" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroText', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroText'] = NarroText::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroText::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroText();
			if (property_exists($objSoapObject, 'TextId'))
				$objToReturn->intTextId = $objSoapObject->TextId;
			if (property_exists($objSoapObject, 'TextValue'))
				$objToReturn->strTextValue = $objSoapObject->TextValue;
			if (property_exists($objSoapObject, 'TextValueMd5'))
				$objToReturn->strTextValueMd5 = $objSoapObject->TextValueMd5;
			if (property_exists($objSoapObject, 'TextCharCount'))
				$objToReturn->intTextCharCount = $objSoapObject->TextCharCount;
			if (property_exists($objSoapObject, 'TextWordCount'))
				$objToReturn->intTextWordCount = $objSoapObject->TextWordCount;
			if (property_exists($objSoapObject, 'HasComments'))
				$objToReturn->blnHasComments = $objSoapObject->HasComments;
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
				array_push($objArrayToReturn, NarroText::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['TextId'] = $this->intTextId;
			$iArray['TextValue'] = $this->strTextValue;
			$iArray['TextValueMd5'] = $this->strTextValueMd5;
			$iArray['TextCharCount'] = $this->intTextCharCount;
			$iArray['TextWordCount'] = $this->intTextWordCount;
			$iArray['HasComments'] = $this->blnHasComments;
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
     * @property-read QQNode $TextId
     * @property-read QQNode $TextValue
     * @property-read QQNode $TextValueMd5
     * @property-read QQNode $TextCharCount
     * @property-read QQNode $TextWordCount
     * @property-read QQNode $HasComments
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *
     * @property-read QQReverseReferenceNodeNarroContext $NarroContextAsText
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsText
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsText

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroText extends QQNode {
		protected $strTableName = 'narro_text';
		protected $strPrimaryKey = 'text_id';
		protected $strClassName = 'NarroText';
		public function __get($strName) {
			switch ($strName) {
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'Integer', $this);
				case 'TextValue':
					return new QQNode('text_value', 'TextValue', 'Blob', $this);
				case 'TextValueMd5':
					return new QQNode('text_value_md5', 'TextValueMd5', 'VarChar', $this);
				case 'TextCharCount':
					return new QQNode('text_char_count', 'TextCharCount', 'Integer', $this);
				case 'TextWordCount':
					return new QQNode('text_word_count', 'TextWordCount', 'Integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'HasComments', 'Bit', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);
				case 'NarroContextAsText':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextastext', 'reverse_reference', 'text_id');
				case 'NarroSuggestionAsText':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionastext', 'reverse_reference', 'text_id');
				case 'NarroTextCommentAsText':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentastext', 'reverse_reference', 'text_id');

				case '_PrimaryKeyNode':
					return new QQNode('text_id', 'TextId', 'Integer', $this);
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
     * @property-read QQNode $TextId
     * @property-read QQNode $TextValue
     * @property-read QQNode $TextValueMd5
     * @property-read QQNode $TextCharCount
     * @property-read QQNode $TextWordCount
     * @property-read QQNode $HasComments
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *
     * @property-read QQReverseReferenceNodeNarroContext $NarroContextAsText
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsText
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsText

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroText extends QQReverseReferenceNode {
		protected $strTableName = 'narro_text';
		protected $strPrimaryKey = 'text_id';
		protected $strClassName = 'NarroText';
		public function __get($strName) {
			switch ($strName) {
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'integer', $this);
				case 'TextValue':
					return new QQNode('text_value', 'TextValue', 'string', $this);
				case 'TextValueMd5':
					return new QQNode('text_value_md5', 'TextValueMd5', 'string', $this);
				case 'TextCharCount':
					return new QQNode('text_char_count', 'TextCharCount', 'integer', $this);
				case 'TextWordCount':
					return new QQNode('text_word_count', 'TextWordCount', 'integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'HasComments', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);
				case 'NarroContextAsText':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextastext', 'reverse_reference', 'text_id');
				case 'NarroSuggestionAsText':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionastext', 'reverse_reference', 'text_id');
				case 'NarroTextCommentAsText':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentastext', 'reverse_reference', 'text_id');

				case '_PrimaryKeyNode':
					return new QQNode('text_id', 'TextId', 'integer', $this);
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
