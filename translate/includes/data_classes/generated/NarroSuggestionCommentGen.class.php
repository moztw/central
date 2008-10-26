<?php
	/**
	 * The abstract NarroSuggestionCommentGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroSuggestionComment subclass which
	 * extends this NarroSuggestionCommentGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroSuggestionComment class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroSuggestionCommentGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroSuggestionComment from PK Info
		 * @param integer $intCommentId
		 * @return NarroSuggestionComment
		 */
		public static function Load($intCommentId) {
			// Use QuerySingle to Perform the Query
			return NarroSuggestionComment::QuerySingle(
				QQ::Equal(QQN::NarroSuggestionComment()->CommentId, $intCommentId)
			);
		}

		/**
		 * Load all NarroSuggestionComments
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroSuggestionComment::QueryArray to perform the LoadAll query
			try {
				return NarroSuggestionComment::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroSuggestionComments
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroSuggestionComment::QueryCount to perform the CountAll query
			return NarroSuggestionComment::QueryCount(QQ::All());
		}



		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroSuggestionComment-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_suggestion_comment');
			NarroSuggestionComment::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_suggestion_comment` AS `narro_suggestion_comment`');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				$objConditions->UpdateQueryBuilder($objQueryBuilder);

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if (!is_array($objOptionalClauses))
					throw new QCallerException('Optional Clauses must be a QQ::Clause() or an array of QQClause objects');
				foreach ($objOptionalClauses as $objClause)
					$objClause->UpdateQueryBuilder($objQueryBuilder);
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
		 * Static Qcodo Query method to query for a single NarroSuggestionComment object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestionComment the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroSuggestionComment object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroSuggestionComment::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroSuggestionComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestionComment[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroSuggestionComment::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroSuggestionComment objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionComment::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_suggestion_comment_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroSuggestionComment-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroSuggestionComment::GetSelectFields($objQueryBuilder);
				NarroSuggestionComment::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return NarroSuggestionComment::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroSuggestionComment
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_suggestion_comment`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`comment_id` AS ' . $strAliasPrefix . 'comment_id`');
			$objBuilder->AddSelectItem($strTableName . '.`suggestion_id` AS ' . $strAliasPrefix . 'suggestion_id`');
			$objBuilder->AddSelectItem($strTableName . '.`user_id` AS ' . $strAliasPrefix . 'user_id`');
			$objBuilder->AddSelectItem($strTableName . '.`language_id` AS ' . $strAliasPrefix . 'language_id`');
			$objBuilder->AddSelectItem($strTableName . '.`comment_text` AS ' . $strAliasPrefix . 'comment_text`');
			$objBuilder->AddSelectItem($strTableName . '.`comment_text_md5` AS ' . $strAliasPrefix . 'comment_text_md5`');
			$objBuilder->AddSelectItem($strTableName . '.`created` AS ' . $strAliasPrefix . 'created`');
			$objBuilder->AddSelectItem($strTableName . '.`modified` AS ' . $strAliasPrefix . 'modified`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroSuggestionComment from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroSuggestionComment::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroSuggestionComment
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the NarroSuggestionComment object
			$objToReturn = new NarroSuggestionComment();
			$objToReturn->__blnRestored = true;

			$objToReturn->intCommentId = $objDbRow->GetColumn($strAliasPrefix . 'comment_id', 'Integer');
			$objToReturn->intSuggestionId = $objDbRow->GetColumn($strAliasPrefix . 'suggestion_id', 'Integer');
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasPrefix . 'user_id', 'Integer');
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasPrefix . 'language_id', 'Integer');
			$objToReturn->strCommentText = $objDbRow->GetColumn($strAliasPrefix . 'comment_text', 'Blob');
			$objToReturn->strCommentTextMd5 = $objDbRow->GetColumn($strAliasPrefix . 'comment_text_md5', 'VarChar');
			$objToReturn->strCreated = $objDbRow->GetColumn($strAliasPrefix . 'created', 'VarChar');
			$objToReturn->strModified = $objDbRow->GetColumn($strAliasPrefix . 'modified', 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_suggestion_comment__';

			// Check for Suggestion Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'suggestion_id__suggestion_id')))
				$objToReturn->objSuggestion = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suggestion_id__', $strExpandAsArrayNodes);

			// Check for User Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'user_id__user_id')))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes);

			// Check for Language Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'language_id__language_id')))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroSuggestionComments from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroSuggestionComment[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null) {
			$objToReturn = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroSuggestionComment::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroSuggestionComment::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroSuggestionComment object,
		 * by CommentId Index(es)
		 * @param integer $intCommentId
		 * @return NarroSuggestionComment
		*/
		public static function LoadByCommentId($intCommentId) {
			return NarroSuggestionComment::QuerySingle(
				QQ::Equal(QQN::NarroSuggestionComment()->CommentId, $intCommentId)
			);
		}
			
		/**
		 * Load a single NarroSuggestionComment object,
		 * by SuggestionId, UserId, LanguageId, CommentTextMd5 Index(es)
		 * @param integer $intSuggestionId
		 * @param integer $intUserId
		 * @param integer $intLanguageId
		 * @param string $strCommentTextMd5
		 * @return NarroSuggestionComment
		*/
		public static function LoadBySuggestionIdUserIdLanguageIdCommentTextMd5($intSuggestionId, $intUserId, $intLanguageId, $strCommentTextMd5) {
			return NarroSuggestionComment::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroSuggestionComment()->SuggestionId, $intSuggestionId),
				QQ::Equal(QQN::NarroSuggestionComment()->UserId, $intUserId),
				QQ::Equal(QQN::NarroSuggestionComment()->LanguageId, $intLanguageId),
				QQ::Equal(QQN::NarroSuggestionComment()->CommentTextMd5, $strCommentTextMd5)
				)
			);
		}
			
		/**
		 * Load an array of NarroSuggestionComment objects,
		 * by SuggestionId Index(es)
		 * @param integer $intSuggestionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/
		public static function LoadArrayBySuggestionId($intSuggestionId, $objOptionalClauses = null) {
			// Call NarroSuggestionComment::QueryArray to perform the LoadArrayBySuggestionId query
			try {
				return NarroSuggestionComment::QueryArray(
					QQ::Equal(QQN::NarroSuggestionComment()->SuggestionId, $intSuggestionId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionComments
		 * by SuggestionId Index(es)
		 * @param integer $intSuggestionId
		 * @return int
		*/
		public static function CountBySuggestionId($intSuggestionId) {
			// Call NarroSuggestionComment::QueryCount to perform the CountBySuggestionId query
			return NarroSuggestionComment::QueryCount(
				QQ::Equal(QQN::NarroSuggestionComment()->SuggestionId, $intSuggestionId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestionComment objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call NarroSuggestionComment::QueryArray to perform the LoadArrayByUserId query
			try {
				return NarroSuggestionComment::QueryArray(
					QQ::Equal(QQN::NarroSuggestionComment()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionComments
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call NarroSuggestionComment::QueryCount to perform the CountByUserId query
			return NarroSuggestionComment::QueryCount(
				QQ::Equal(QQN::NarroSuggestionComment()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestionComment objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroSuggestionComment::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroSuggestionComment::QueryArray(
					QQ::Equal(QQN::NarroSuggestionComment()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionComments
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroSuggestionComment::QueryCount to perform the CountByLanguageId query
			return NarroSuggestionComment::QueryCount(
				QQ::Equal(QQN::NarroSuggestionComment()->LanguageId, $intLanguageId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroSuggestionComment
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_suggestion_comment` (
							`suggestion_id`,
							`user_id`,
							`language_id`,
							`comment_text`,
							`comment_text_md5`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSuggestionId) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->strCommentText) . ',
							' . $objDatabase->SqlVariable($this->strCommentTextMd5) . ',
							' . $objDatabase->SqlVariable($this->strCreated) . ',
							' . $objDatabase->SqlVariable($this->strModified) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intCommentId = $objDatabase->InsertId('narro_suggestion_comment', 'comment_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_suggestion_comment`
						SET
							`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . ',
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							`comment_text` = ' . $objDatabase->SqlVariable($this->strCommentText) . ',
							`comment_text_md5` = ' . $objDatabase->SqlVariable($this->strCommentTextMd5) . ',
							`created` = ' . $objDatabase->SqlVariable($this->strCreated) . ',
							`modified` = ' . $objDatabase->SqlVariable($this->strModified) . '
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
		 * Delete this NarroSuggestionComment
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intCommentId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroSuggestionComment with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($this->intCommentId) . '');
		}

		/**
		 * Delete all NarroSuggestionComments
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`');
		}

		/**
		 * Truncate narro_suggestion_comment table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionComment::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_suggestion_comment`');
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

				case 'SuggestionId':
					/**
					 * Gets the value for intSuggestionId (Not Null)
					 * @return integer
					 */
					return $this->intSuggestionId;

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

				case 'Created':
					/**
					 * Gets the value for strCreated (Not Null)
					 * @return string
					 */
					return $this->strCreated;

				case 'Modified':
					/**
					 * Gets the value for strModified (Not Null)
					 * @return string
					 */
					return $this->strModified;


				///////////////////
				// Member Objects
				///////////////////
				case 'Suggestion':
					/**
					 * Gets the value for the NarroSuggestion object referenced by intSuggestionId (Not Null)
					 * @return NarroSuggestion
					 */
					try {
						if ((!$this->objSuggestion) && (!is_null($this->intSuggestionId)))
							$this->objSuggestion = NarroSuggestion::Load($this->intSuggestionId);
						return $this->objSuggestion;
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
				case 'SuggestionId':
					/**
					 * Sets the value for intSuggestionId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSuggestion = null;
						return ($this->intSuggestionId = QType::Cast($mixValue, QType::Integer));
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

				case 'Created':
					/**
					 * Sets the value for strCreated (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCreated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Modified':
					/**
					 * Sets the value for strModified (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strModified = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Suggestion':
					/**
					 * Sets the value for the NarroSuggestion object referenced by intSuggestionId (Not Null)
					 * @param NarroSuggestion $mixValue
					 * @return NarroSuggestion
					 */
					if (is_null($mixValue)) {
						$this->intSuggestionId = null;
						$this->objSuggestion = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroSuggestion object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroSuggestion');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED NarroSuggestion object
						if (is_null($mixValue->SuggestionId))
							throw new QCallerException('Unable to set an unsaved Suggestion for this NarroSuggestionComment');

						// Update Local Member Variables
						$this->objSuggestion = $mixValue;
						$this->intSuggestionId = $mixValue->SuggestionId;

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
							throw new QCallerException('Unable to set an unsaved User for this NarroSuggestionComment');

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
							throw new QCallerException('Unable to set an unsaved Language for this NarroSuggestionComment');

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
		// ASSOCIATED OBJECTS
		///////////////////////////////




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_suggestion_comment.comment_id
		 * @var integer intCommentId
		 */
		protected $intCommentId;
		const CommentIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.suggestion_id
		 * @var integer intSuggestionId
		 */
		protected $intSuggestionId;
		const SuggestionIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.comment_text
		 * @var string strCommentText
		 */
		protected $strCommentText;
		const CommentTextDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.comment_text_md5
		 * @var string strCommentTextMd5
		 */
		protected $strCommentTextMd5;
		const CommentTextMd5MaxLength = 128;
		const CommentTextMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.created
		 * @var string strCreated
		 */
		protected $strCreated;
		const CreatedMaxLength = 19;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_comment.modified
		 * @var string strModified
		 */
		protected $strModified;
		const ModifiedMaxLength = 19;
		const ModifiedDefault = null;


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
		 * in the database column narro_suggestion_comment.suggestion_id.
		 *
		 * NOTE: Always use the Suggestion property getter to correctly retrieve this NarroSuggestion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroSuggestion objSuggestion
		 */
		protected $objSuggestion;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion_comment.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this NarroUser object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroUser objUser
		 */
		protected $objUser;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion_comment.language_id.
		 *
		 * NOTE: Always use the Language property getter to correctly retrieve this NarroLanguage object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroLanguage objLanguage
		 */
		protected $objLanguage;






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroSuggestionComment"><sequence>';
			$strToReturn .= '<element name="CommentId" type="xsd:int"/>';
			$strToReturn .= '<element name="Suggestion" type="xsd1:NarroSuggestion"/>';
			$strToReturn .= '<element name="User" type="xsd1:NarroUser"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="CommentText" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentTextMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="Created" type="xsd:string"/>';
			$strToReturn .= '<element name="Modified" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroSuggestionComment', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroSuggestionComment'] = NarroSuggestionComment::GetSoapComplexTypeXml();
				NarroSuggestion::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroUser::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroSuggestionComment::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroSuggestionComment();
			if (property_exists($objSoapObject, 'CommentId'))
				$objToReturn->intCommentId = $objSoapObject->CommentId;
			if ((property_exists($objSoapObject, 'Suggestion')) &&
				($objSoapObject->Suggestion))
				$objToReturn->Suggestion = NarroSuggestion::GetObjectFromSoapObject($objSoapObject->Suggestion);
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = NarroUser::GetObjectFromSoapObject($objSoapObject->User);
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if (property_exists($objSoapObject, 'CommentText'))
				$objToReturn->strCommentText = $objSoapObject->CommentText;
			if (property_exists($objSoapObject, 'CommentTextMd5'))
				$objToReturn->strCommentTextMd5 = $objSoapObject->CommentTextMd5;
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->strCreated = $objSoapObject->Created;
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->strModified = $objSoapObject->Modified;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroSuggestionComment::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSuggestion)
				$objObject->objSuggestion = NarroSuggestion::GetSoapObjectFromObject($objObject->objSuggestion, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSuggestionId = null;
			if ($objObject->objUser)
				$objObject->objUser = NarroUser::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
			if ($objObject->objLanguage)
				$objObject->objLanguage = NarroLanguage::GetSoapObjectFromObject($objObject->objLanguage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLanguageId = null;
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroSuggestionComment extends QQNode {
		protected $strTableName = 'narro_suggestion_comment';
		protected $strPrimaryKey = 'comment_id';
		protected $strClassName = 'NarroSuggestionComment';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentId':
					return new QQNode('comment_id', 'integer', $this);
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'integer', $this);
				case 'Suggestion':
					return new QQNodeNarroSuggestion('suggestion_id', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'string', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'string', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('comment_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroSuggestionComment extends QQReverseReferenceNode {
		protected $strTableName = 'narro_suggestion_comment';
		protected $strPrimaryKey = 'comment_id';
		protected $strClassName = 'NarroSuggestionComment';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentId':
					return new QQNode('comment_id', 'integer', $this);
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'integer', $this);
				case 'Suggestion':
					return new QQNodeNarroSuggestion('suggestion_id', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'CommentText':
					return new QQNode('comment_text', 'string', $this);
				case 'CommentTextMd5':
					return new QQNode('comment_text_md5', 'string', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('comment_id', 'integer', $this);
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