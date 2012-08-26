<?php
	/**
	 * The abstract NarroTextCommentGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroTextComment subclass which
	 * extends this NarroTextCommentGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroTextComment class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $TextCommentId the value for intTextCommentId (Read-Only PK)
	 * @property integer $TextId the value for intTextId (Not Null)
	 * @property integer $UserId the value for intUserId (Not Null)
	 * @property integer $LanguageId the value for intLanguageId (Not Null)
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property string $CommentText the value for strCommentText (Not Null)
	 * @property string $CommentTextMd5 the value for strCommentTextMd5 (Not Null)
	 * @property NarroText $Text the value for the NarroText object referenced by intTextId (Not Null)
	 * @property NarroUser $User the value for the NarroUser object referenced by intUserId (Not Null)
	 * @property NarroLanguage $Language the value for the NarroLanguage object referenced by intLanguageId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroTextCommentGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['TextCommentId'] = null;
                $this->_arrHistory['TextId'] = null;
                $this->_arrHistory['UserId'] = null;
                $this->_arrHistory['LanguageId'] = null;
                $this->_arrHistory['Created'] = null;
                $this->_arrHistory['Modified'] = null;
                $this->_arrHistory['CommentText'] = null;
                $this->_arrHistory['CommentTextMd5'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_text_comment.text_comment_id
		 * @var integer intTextCommentId
		 */
		protected $intTextCommentId;
		const TextCommentIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.text_id
		 * @var integer intTextId
		 */
		protected $intTextId;
		const TextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
		const ModifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.comment_text
		 * @var string strCommentText
		 */
		protected $strCommentText;
		const CommentTextDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_text_comment.comment_text_md5
		 * @var string strCommentTextMd5
		 */
		protected $strCommentTextMd5;
		const CommentTextMd5MaxLength = 128;
		const CommentTextMd5Default = null;


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
		 * in the database column narro_text_comment.text_id.
		 *
		 * NOTE: Always use the Text property getter to correctly retrieve this NarroText object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroText objText
		 */
		protected $objText;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_text_comment.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this NarroUser object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroUser objUser
		 */
		protected $objUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_text_comment.language_id.
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
			$this->intTextCommentId = NarroTextComment::TextCommentIdDefault;
			$this->intTextId = NarroTextComment::TextIdDefault;
			$this->intUserId = NarroTextComment::UserIdDefault;
			$this->intLanguageId = NarroTextComment::LanguageIdDefault;
			$this->dttCreated = (NarroTextComment::CreatedDefault === null)?null:new QDateTime(NarroTextComment::CreatedDefault);
			$this->dttModified = (NarroTextComment::ModifiedDefault === null)?null:new QDateTime(NarroTextComment::ModifiedDefault);
			$this->strCommentText = NarroTextComment::CommentTextDefault;
			$this->strCommentTextMd5 = NarroTextComment::CommentTextMd5Default;
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
		 * Load a NarroTextComment from PK Info
		 * @param integer $intTextCommentId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment
		 */
		public static function Load($intTextCommentId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroTextComment::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroTextComment()->TextCommentId, $intTextCommentId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroTextComments
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroTextComment::QueryArray to perform the LoadAll query
			try {
				return NarroTextComment::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroTextComments
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroTextComment::QueryCount to perform the CountAll query
			return NarroTextComment::QueryCount(QQ::All());
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
			$objDatabase = NarroTextComment::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroTextComment-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_text_comment');
			NarroTextComment::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_text_comment');

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
		 * Static Qcubed Query method to query for a single NarroTextComment object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroTextComment the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroTextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroTextComment object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroTextComment::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroTextComment::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroTextComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroTextComment[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroTextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroTextComment::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroTextComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroTextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroTextComment::GetDatabase();

			$strQuery = NarroTextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrotextcomment', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroTextComment::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroTextComment
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_text_comment';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'text_comment_id', $strAliasPrefix . 'text_comment_id');
			$objBuilder->AddSelectItem($strTableName, 'text_id', $strAliasPrefix . 'text_id');
			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'language_id', $strAliasPrefix . 'language_id');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
			$objBuilder->AddSelectItem($strTableName, 'comment_text', $strAliasPrefix . 'comment_text');
			$objBuilder->AddSelectItem($strTableName, 'comment_text_md5', $strAliasPrefix . 'comment_text_md5');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroTextComment from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroTextComment::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroTextComment
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NarroTextComment object
			$objToReturn = new NarroTextComment();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'text_comment_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_comment_id'] : $strAliasPrefix . 'text_comment_id';
			$objToReturn->intTextCommentId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_id'] : $strAliasPrefix . 'text_id';
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'language_id'] : $strAliasPrefix . 'language_id';
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'created', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'created'] : $strAliasPrefix . 'created';
			$objToReturn->dttCreated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modified'] : $strAliasPrefix . 'modified';
			$objToReturn->dttModified = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'comment_text', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comment_text'] : $strAliasPrefix . 'comment_text';
			$objToReturn->strCommentText = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'comment_text_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comment_text_md5'] : $strAliasPrefix . 'comment_text_md5';
			$objToReturn->strCommentTextMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->TextCommentId != $objPreviousItem->TextCommentId) {
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
				$strAliasPrefix = 'narro_text_comment__';

			// Check for Text Early Binding
			$strAlias = $strAliasPrefix . 'text_id__text_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objText = NarroText::InstantiateDbRow($objDbRow, $strAliasPrefix . 'text_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'user_id__user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Language Early Binding
			$strAlias = $strAliasPrefix . 'language_id__language_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroTextComments from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroTextComment[]
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
					$objItem = NarroTextComment::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroTextComment::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroTextComment object,
		 * by TextCommentId Index(es)
		 * @param integer $intTextCommentId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment
		*/
		public static function LoadByTextCommentId($intTextCommentId, $objOptionalClauses = null) {
			return NarroTextComment::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroTextComment()->TextCommentId, $intTextCommentId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroTextComment objects,
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/
		public static function LoadArrayByTextId($intTextId, $objOptionalClauses = null) {
			// Call NarroTextComment::QueryArray to perform the LoadArrayByTextId query
			try {
				return NarroTextComment::QueryArray(
					QQ::Equal(QQN::NarroTextComment()->TextId, $intTextId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroTextComments
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @return int
		*/
		public static function CountByTextId($intTextId) {
			// Call NarroTextComment::QueryCount to perform the CountByTextId query
			return NarroTextComment::QueryCount(
				QQ::Equal(QQN::NarroTextComment()->TextId, $intTextId)
			);
		}
			
		/**
		 * Load an array of NarroTextComment objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call NarroTextComment::QueryArray to perform the LoadArrayByUserId query
			try {
				return NarroTextComment::QueryArray(
					QQ::Equal(QQN::NarroTextComment()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroTextComments
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call NarroTextComment::QueryCount to perform the CountByUserId query
			return NarroTextComment::QueryCount(
				QQ::Equal(QQN::NarroTextComment()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load an array of NarroTextComment objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroTextComment::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroTextComment::QueryArray(
					QQ::Equal(QQN::NarroTextComment()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroTextComments
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroTextComment::QueryCount to perform the CountByLanguageId query
			return NarroTextComment::QueryCount(
				QQ::Equal(QQN::NarroTextComment()->LanguageId, $intLanguageId)
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

            if (!isset($this->_arrHistory['TextCommentId']))
                $this->_arrHistory['TextCommentId'] = $this->TextCommentId;
            if (!isset($this->_arrHistory['TextId']))
                $this->_arrHistory['TextId'] = $this->TextId;
            if (!isset($this->_arrHistory['UserId']))
                $this->_arrHistory['UserId'] = $this->UserId;
            if (!isset($this->_arrHistory['LanguageId']))
                $this->_arrHistory['LanguageId'] = $this->LanguageId;
            if (!isset($this->_arrHistory['Created']))
                $this->_arrHistory['Created'] = $this->Created;
            if (!isset($this->_arrHistory['Modified']))
                $this->_arrHistory['Modified'] = $this->Modified;
            if (!isset($this->_arrHistory['CommentText']))
                $this->_arrHistory['CommentText'] = $this->CommentText;
            if (!isset($this->_arrHistory['CommentTextMd5']))
                $this->_arrHistory['CommentTextMd5'] = $this->CommentTextMd5;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroTextComment
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroTextComment::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_text_comment` (
							`text_id`,
							`user_id`,
							`language_id`,
							`created`,
							`modified`,
							`comment_text`,
							`comment_text_md5`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTextId) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . ',
							' . $objDatabase->SqlVariable($this->strCommentText) . ',
							' . $objDatabase->SqlVariable($this->strCommentTextMd5) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intTextCommentId = $objDatabase->InsertId('narro_text_comment', 'text_comment_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['TextId'] !== $this->TextId ||
                        (
                            $this->TextId instanceof QDateTime &&
                            (string) $this->_arrHistory['TextId'] !== (string) $this->TextId
                        )
                    )
                        $arrUpdateChanges[] = '`text_id` = ' . $objDatabase->SqlVariable($this->intTextId);
                    if (
                        $this->_arrHistory['UserId'] !== $this->UserId ||
                        (
                            $this->UserId instanceof QDateTime &&
                            (string) $this->_arrHistory['UserId'] !== (string) $this->UserId
                        )
                    )
                        $arrUpdateChanges[] = '`user_id` = ' . $objDatabase->SqlVariable($this->intUserId);
                    if (
                        $this->_arrHistory['LanguageId'] !== $this->LanguageId ||
                        (
                            $this->LanguageId instanceof QDateTime &&
                            (string) $this->_arrHistory['LanguageId'] !== (string) $this->LanguageId
                        )
                    )
                        $arrUpdateChanges[] = '`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId);
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
                    if (
                        $this->_arrHistory['CommentText'] !== $this->CommentText ||
                        (
                            $this->CommentText instanceof QDateTime &&
                            (string) $this->_arrHistory['CommentText'] !== (string) $this->CommentText
                        )
                    )
                        $arrUpdateChanges[] = '`comment_text` = ' . $objDatabase->SqlVariable($this->strCommentText);
                    if (
                        $this->_arrHistory['CommentTextMd5'] !== $this->CommentTextMd5 ||
                        (
                            $this->CommentTextMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['CommentTextMd5'] !== (string) $this->CommentTextMd5
                        )
                    )
                        $arrUpdateChanges[] = '`comment_text_md5` = ' . $objDatabase->SqlVariable($this->strCommentTextMd5);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_text_comment`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`text_comment_id` = ' . $objDatabase->SqlVariable($this->intTextCommentId) . '
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
		 * Delete this NarroTextComment
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intTextCommentId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroTextComment with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroTextComment::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($this->intTextCommentId) . '');
		}

		/**
		 * Delete all NarroTextComments
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroTextComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`');
		}

		/**
		 * Truncate narro_text_comment table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroTextComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_text_comment`');
		}

		/**
		 * Reload this NarroTextComment from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroTextComment object.');

			// Reload the Object
			$objReloaded = NarroTextComment::Load($this->intTextCommentId);

			// Update $this's local variables to match
			$this->TextId = $objReloaded->TextId;
			$this->UserId = $objReloaded->UserId;
			$this->LanguageId = $objReloaded->LanguageId;
			$this->dttCreated = $objReloaded->dttCreated;
			$this->dttModified = $objReloaded->dttModified;
			$this->strCommentText = $objReloaded->strCommentText;
			$this->strCommentTextMd5 = $objReloaded->strCommentTextMd5;
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
				case 'TextCommentId':
					/**
					 * Gets the value for intTextCommentId (Read-Only PK)
					 * @return integer
					 */
					return $this->intTextCommentId;

				case 'TextId':
					/**
					 * Gets the value for intTextId (Not Null)
					 * @return integer
					 */
					return $this->intTextId;

				case 'UserId':
					/**
					 * Gets the value for intUserId (Not Null)
					 * @return integer
					 */
					return $this->intUserId;

				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId (Not Null)
					 * @return integer
					 */
					return $this->intLanguageId;

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

				case 'CommentText':
					/**
					 * Gets the value for strCommentText (Not Null)
					 * @return string
					 */
					return $this->strCommentText;

				case 'CommentTextMd5':
					/**
					 * Gets the value for strCommentTextMd5 (Not Null)
					 * @return string
					 */
					return $this->strCommentTextMd5;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'User':
					/**
					 * Gets the value for the NarroUser object referenced by intUserId (Not Null)
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

				case 'UserId':
					/**
					 * Sets the value for intUserId (Not Null)
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

				case 'CommentText':
					/**
					 * Sets the value for strCommentText (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentText = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentTextMd5':
					/**
					 * Sets the value for strCommentTextMd5 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentTextMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved Text for this NarroTextComment');

						// Update Local Member Variables
						$this->objText = $mixValue;
						$this->intTextId = $mixValue->TextId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'User':
					/**
					 * Sets the value for the NarroUser object referenced by intUserId (Not Null)
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
							throw new QCallerException('Unable to set an unsaved User for this NarroTextComment');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->UserId;

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
							throw new QCallerException('Unable to set an unsaved Language for this NarroTextComment');

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
			$strToReturn = '<complexType name="NarroTextComment"><sequence>';
			$strToReturn .= '<element name="TextCommentId" type="xsd:int"/>';
			$strToReturn .= '<element name="Text" type="xsd1:NarroText"/>';
			$strToReturn .= '<element name="User" type="xsd1:NarroUser"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CommentText" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentTextMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroTextComment', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroTextComment'] = NarroTextComment::GetSoapComplexTypeXml();
				NarroText::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroUser::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroTextComment::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroTextComment();
			if (property_exists($objSoapObject, 'TextCommentId'))
				$objToReturn->intTextCommentId = $objSoapObject->TextCommentId;
			if ((property_exists($objSoapObject, 'Text')) &&
				($objSoapObject->Text))
				$objToReturn->Text = NarroText::GetObjectFromSoapObject($objSoapObject->Text);
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = NarroUser::GetObjectFromSoapObject($objSoapObject->User);
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->dttCreated = new QDateTime($objSoapObject->Created);
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->dttModified = new QDateTime($objSoapObject->Modified);
			if (property_exists($objSoapObject, 'CommentText'))
				$objToReturn->strCommentText = $objSoapObject->CommentText;
			if (property_exists($objSoapObject, 'CommentTextMd5'))
				$objToReturn->strCommentTextMd5 = $objSoapObject->CommentTextMd5;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroTextComment::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objText)
				$objObject->objText = NarroText::GetSoapObjectFromObject($objObject->objText, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTextId = null;
			if ($objObject->objUser)
				$objObject->objUser = NarroUser::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
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
			$iArray['TextCommentId'] = $this->intTextCommentId;
			$iArray['TextId'] = $this->intTextId;
			$iArray['UserId'] = $this->intUserId;
			$iArray['LanguageId'] = $this->intLanguageId;
			$iArray['Created'] = $this->dttCreated;
			$iArray['Modified'] = $this->dttModified;
			$iArray['CommentText'] = $this->strCommentText;
			$iArray['CommentTextMd5'] = $this->strCommentTextMd5;
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
     * @property-read QQNode $TextCommentId
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $CommentText
     * @property-read QQNode $CommentTextMd5
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroTextComment extends QQNode {
		protected $strTableName = 'narro_text_comment';
		protected $strPrimaryKey = 'text_comment_id';
		protected $strClassName = 'NarroTextComment';
		public function __get($strName) {
			switch ($strName) {
				case 'TextCommentId':
					return new QQNode('text_comment_id', 'TextCommentId', 'Integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'Integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'Integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'Integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'Integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'CommentText', 'Blob', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'CommentTextMd5', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('text_comment_id', 'TextCommentId', 'Integer', $this);
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
     * @property-read QQNode $TextCommentId
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $LanguageId
     * @property-read QQNodeNarroLanguage $Language
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $CommentText
     * @property-read QQNode $CommentTextMd5
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroTextComment extends QQReverseReferenceNode {
		protected $strTableName = 'narro_text_comment';
		protected $strPrimaryKey = 'text_comment_id';
		protected $strClassName = 'NarroTextComment';
		public function __get($strName) {
			switch ($strName) {
				case 'TextCommentId':
					return new QQNode('text_comment_id', 'TextCommentId', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'LanguageId', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'Language', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'CommentText', 'string', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'CommentTextMd5', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('text_comment_id', 'TextCommentId', 'integer', $this);
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
