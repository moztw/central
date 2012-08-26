<?php
	/**
	 * The abstract NarroContextCommentGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroContextComment subclass which
	 * extends this NarroContextCommentGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroContextComment class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $CommentId the value for intCommentId (Read-Only PK)
	 * @property integer $ContextId the value for intContextId (Not Null)
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property string $CommentText the value for strCommentText (Not Null)
	 * @property string $CommentTextMd5 the value for strCommentTextMd5 (Not Null)
	 * @property NarroContext $Context the value for the NarroContext object referenced by intContextId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroContextCommentGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column narro_context_comment.comment_id
		 * @var integer intCommentId
		 */
		protected $intCommentId;
		const CommentIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context_comment.context_id
		 * @var integer intContextId
		 */
		protected $intContextId;
		const ContextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context_comment.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context_comment.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
		const ModifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context_comment.comment_text
		 * @var string strCommentText
		 */
		protected $strCommentText;
		const CommentTextDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context_comment.comment_text_md5
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




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_context_comment.context_id.
		 *
		 * NOTE: Always use the Context property getter to correctly retrieve this NarroContext object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroContext objContext
		 */
		protected $objContext;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intCommentId = NarroContextComment::CommentIdDefault;
			$this->intContextId = NarroContextComment::ContextIdDefault;
			$this->dttCreated = (NarroContextComment::CreatedDefault === null)?null:new QDateTime(NarroContextComment::CreatedDefault);
			$this->dttModified = (NarroContextComment::ModifiedDefault === null)?null:new QDateTime(NarroContextComment::ModifiedDefault);
			$this->strCommentText = NarroContextComment::CommentTextDefault;
			$this->strCommentTextMd5 = NarroContextComment::CommentTextMd5Default;
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
		 * Load a NarroContextComment from PK Info
		 * @param integer $intCommentId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment
		 */
		public static function Load($intCommentId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroContextComment::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroContextComment()->CommentId, $intCommentId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroContextComments
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroContextComment::QueryArray to perform the LoadAll query
			try {
				return NarroContextComment::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroContextComments
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroContextComment::QueryCount to perform the CountAll query
			return NarroContextComment::QueryCount(QQ::All());
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
			$objDatabase = NarroContextComment::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroContextComment-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_context_comment');
			NarroContextComment::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_context_comment');

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
		 * Static Qcubed Query method to query for a single NarroContextComment object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroContextComment the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroContextComment object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroContextComment::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroContextComment::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroContextComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroContextComment[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroContextComment::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroContextComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroContextComment::GetDatabase();

			$strQuery = NarroContextComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrocontextcomment', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroContextComment::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroContextComment
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_context_comment';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'comment_id', $strAliasPrefix . 'comment_id');
			$objBuilder->AddSelectItem($strTableName, 'context_id', $strAliasPrefix . 'context_id');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
			$objBuilder->AddSelectItem($strTableName, 'comment_text', $strAliasPrefix . 'comment_text');
			$objBuilder->AddSelectItem($strTableName, 'comment_text_md5', $strAliasPrefix . 'comment_text_md5');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroContextComment from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroContextComment::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroContextComment
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NarroContextComment object
			$objToReturn = new NarroContextComment();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'comment_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comment_id'] : $strAliasPrefix . 'comment_id';
			$objToReturn->intCommentId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'context_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'context_id'] : $strAliasPrefix . 'context_id';
			$objToReturn->intContextId = $objDbRow->GetColumn($strAliasName, 'Integer');
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
					if ($objToReturn->CommentId != $objPreviousItem->CommentId) {
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
				$strAliasPrefix = 'narro_context_comment__';

			// Check for Context Early Binding
			$strAlias = $strAliasPrefix . 'context_id__context_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objContext = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'context_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroContextComments from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroContextComment[]
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
					$objItem = NarroContextComment::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroContextComment::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroContextComment object,
		 * by CommentId Index(es)
		 * @param integer $intCommentId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment
		*/
		public static function LoadByCommentId($intCommentId, $objOptionalClauses = null) {
			return NarroContextComment::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroContextComment()->CommentId, $intCommentId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroContextComment objects,
		 * by ContextId Index(es)
		 * @param integer $intContextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment[]
		*/
		public static function LoadArrayByContextId($intContextId, $objOptionalClauses = null) {
			// Call NarroContextComment::QueryArray to perform the LoadArrayByContextId query
			try {
				return NarroContextComment::QueryArray(
					QQ::Equal(QQN::NarroContextComment()->ContextId, $intContextId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContextComments
		 * by ContextId Index(es)
		 * @param integer $intContextId
		 * @return int
		*/
		public static function CountByContextId($intContextId) {
			// Call NarroContextComment::QueryCount to perform the CountByContextId query
			return NarroContextComment::QueryCount(
				QQ::Equal(QQN::NarroContextComment()->ContextId, $intContextId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroContextComment
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroContextComment::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_context_comment` (
							`context_id`,
							`created`,
							`modified`,
							`comment_text`,
							`comment_text_md5`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intContextId) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . ',
							' . $objDatabase->SqlVariable($this->strCommentText) . ',
							' . $objDatabase->SqlVariable($this->strCommentTextMd5) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intCommentId = $objDatabase->InsertId('narro_context_comment', 'comment_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_context_comment`
						SET
							`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . ',
							`created` = ' . $objDatabase->SqlVariable($this->dttCreated) . ',
							`modified` = ' . $objDatabase->SqlVariable($this->dttModified) . ',
							`comment_text` = ' . $objDatabase->SqlVariable($this->strCommentText) . ',
							`comment_text_md5` = ' . $objDatabase->SqlVariable($this->strCommentTextMd5) . '
						WHERE
							`comment_id` = ' . $objDatabase->SqlVariable($this->intCommentId) . '
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
		 * Delete this NarroContextComment
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intCommentId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroContextComment with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroContextComment::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($this->intCommentId) . '');
		}

		/**
		 * Delete all NarroContextComments
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroContextComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`');
		}

		/**
		 * Truncate narro_context_comment table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroContextComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_context_comment`');
		}

		/**
		 * Reload this NarroContextComment from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroContextComment object.');

			// Reload the Object
			$objReloaded = NarroContextComment::Load($this->intCommentId);

			// Update $this's local variables to match
			$this->ContextId = $objReloaded->ContextId;
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
				case 'CommentId':
					/**
					 * Gets the value for intCommentId (Read-Only PK)
					 * @return integer
					 */
					return $this->intCommentId;

				case 'ContextId':
					/**
					 * Gets the value for intContextId (Not Null)
					 * @return integer
					 */
					return $this->intContextId;

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
				case 'Context':
					/**
					 * Gets the value for the NarroContext object referenced by intContextId (Not Null)
					 * @return NarroContext
					 */
					try {
						if ((!$this->objContext) && (!is_null($this->intContextId)))
							$this->objContext = NarroContext::Load($this->intContextId);
						return $this->objContext;
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
				case 'ContextId':
					/**
					 * Sets the value for intContextId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objContext = null;
						return ($this->intContextId = QType::Cast($mixValue, QType::Integer));
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
				case 'Context':
					/**
					 * Sets the value for the NarroContext object referenced by intContextId (Not Null)
					 * @param NarroContext $mixValue
					 * @return NarroContext
					 */
					if (is_null($mixValue)) {
						$this->intContextId = null;
						$this->objContext = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroContext object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroContext');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED NarroContext object
						if (is_null($mixValue->ContextId))
							throw new QCallerException('Unable to set an unsaved Context for this NarroContextComment');

						// Update Local Member Variables
						$this->objContext = $mixValue;
						$this->intContextId = $mixValue->ContextId;

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
			$strToReturn = '<complexType name="NarroContextComment"><sequence>';
			$strToReturn .= '<element name="CommentId" type="xsd:int"/>';
			$strToReturn .= '<element name="Context" type="xsd1:NarroContext"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CommentText" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentTextMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroContextComment', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroContextComment'] = NarroContextComment::GetSoapComplexTypeXml();
				NarroContext::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroContextComment::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroContextComment();
			if (property_exists($objSoapObject, 'CommentId'))
				$objToReturn->intCommentId = $objSoapObject->CommentId;
			if ((property_exists($objSoapObject, 'Context')) &&
				($objSoapObject->Context))
				$objToReturn->Context = NarroContext::GetObjectFromSoapObject($objSoapObject->Context);
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
				array_push($objArrayToReturn, NarroContextComment::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objContext)
				$objObject->objContext = NarroContext::GetSoapObjectFromObject($objObject->objContext, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intContextId = null;
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
			$iArray['CommentId'] = $this->intCommentId;
			$iArray['ContextId'] = $this->intContextId;
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
     * @property-read QQNode $CommentId
     * @property-read QQNode $ContextId
     * @property-read QQNodeNarroContext $Context
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $CommentText
     * @property-read QQNode $CommentTextMd5
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroContextComment extends QQNode {
		protected $strTableName = 'narro_context_comment';
		protected $strPrimaryKey = 'comment_id';
		protected $strClassName = 'NarroContextComment';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentId':
					return new QQNode('comment_id', 'CommentId', 'Integer', $this);
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'Integer', $this);
				case 'Context':
					return new QQNodeNarroContext('context_id', 'Context', 'Integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'CommentText', 'Blob', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'CommentTextMd5', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('comment_id', 'CommentId', 'Integer', $this);
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
     * @property-read QQNode $CommentId
     * @property-read QQNode $ContextId
     * @property-read QQNodeNarroContext $Context
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $CommentText
     * @property-read QQNode $CommentTextMd5
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroContextComment extends QQReverseReferenceNode {
		protected $strTableName = 'narro_context_comment';
		protected $strPrimaryKey = 'comment_id';
		protected $strClassName = 'NarroContextComment';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentId':
					return new QQNode('comment_id', 'CommentId', 'integer', $this);
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'integer', $this);
				case 'Context':
					return new QQNodeNarroContext('context_id', 'Context', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'CommentText', 'string', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'CommentTextMd5', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('comment_id', 'CommentId', 'integer', $this);
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
