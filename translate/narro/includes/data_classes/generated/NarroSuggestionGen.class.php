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
	 * 
	 */
	class NarroSuggestionGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroSuggestion from PK Info
		 * @param integer $intSuggestionId
		 * @return NarroSuggestion
		 */
		public static function Load($intSuggestionId) {
			// Use QuerySingle to Perform the Query
			return NarroSuggestion::QuerySingle(
				QQ::Equal(QQN::NarroSuggestion()->SuggestionId, $intSuggestionId)
			);
		}

		/**
		 * Load all NarroSuggestions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
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
			$objDatabase = NarroSuggestion::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroSuggestion-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_suggestion');
			NarroSuggestion::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_suggestion` AS `narro_suggestion`');

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
		 * Static Qcodo Query method to query for a single NarroSuggestion object.
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
			return NarroSuggestion::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroSuggestion objects.
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
			return NarroSuggestion::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroSuggestion objects.
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

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_suggestion_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroSuggestion-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroSuggestion::GetSelectFields($objQueryBuilder);
				NarroSuggestion::GetFromFields($objQueryBuilder);

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
			return NarroSuggestion::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroSuggestion
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_suggestion`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`suggestion_id` AS ' . $strAliasPrefix . 'suggestion_id`');
			$objBuilder->AddSelectItem($strTableName . '.`user_id` AS ' . $strAliasPrefix . 'user_id`');
			$objBuilder->AddSelectItem($strTableName . '.`text_id` AS ' . $strAliasPrefix . 'text_id`');
			$objBuilder->AddSelectItem($strTableName . '.`language_id` AS ' . $strAliasPrefix . 'language_id`');
			$objBuilder->AddSelectItem($strTableName . '.`suggestion_value` AS ' . $strAliasPrefix . 'suggestion_value`');
			$objBuilder->AddSelectItem($strTableName . '.`suggestion_value_md5` AS ' . $strAliasPrefix . 'suggestion_value_md5`');
			$objBuilder->AddSelectItem($strTableName . '.`suggestion_char_count` AS ' . $strAliasPrefix . 'suggestion_char_count`');
			$objBuilder->AddSelectItem($strTableName . '.`has_comments` AS ' . $strAliasPrefix . 'has_comments`');
			$objBuilder->AddSelectItem($strTableName . '.`created` AS ' . $strAliasPrefix . 'created`');
			$objBuilder->AddSelectItem($strTableName . '.`modified` AS ' . $strAliasPrefix . 'modified`');
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
		 * @return NarroSuggestion
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intSuggestionId == $objDbRow->GetColumn($strAliasPrefix . 'suggestion_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_suggestion__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextinfoaspopularsuggestion__context_info_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoaspopularsuggestion__context_info_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsPopularSuggestionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextInfoAsPopularSuggestionArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaspopularsuggestion__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextInfoAsPopularSuggestionArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextInfoAsPopularSuggestionArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaspopularsuggestion__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsValidSuggestionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextInfoAsValidSuggestionArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextInfoAsValidSuggestionArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextInfoAsValidSuggestionArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestioncommentassuggestion__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentassuggestion__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionCommentAsSuggestionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionCommentAsSuggestionArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentassuggestion__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionCommentAsSuggestionArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionCommentAsSuggestionArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentassuggestion__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionVoteAsSuggestionArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_suggestion__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroSuggestion object
			$objToReturn = new NarroSuggestion();
			$objToReturn->__blnRestored = true;

			$objToReturn->intSuggestionId = $objDbRow->GetColumn($strAliasPrefix . 'suggestion_id', 'Integer');
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasPrefix . 'user_id', 'Integer');
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasPrefix . 'text_id', 'Integer');
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasPrefix . 'language_id', 'Integer');
			$objToReturn->strSuggestionValue = $objDbRow->GetColumn($strAliasPrefix . 'suggestion_value', 'Blob');
			$objToReturn->strSuggestionValueMd5 = $objDbRow->GetColumn($strAliasPrefix . 'suggestion_value_md5', 'VarChar');
			$objToReturn->intSuggestionCharCount = $objDbRow->GetColumn($strAliasPrefix . 'suggestion_char_count', 'Integer');
			$objToReturn->blnHasComments = $objDbRow->GetColumn($strAliasPrefix . 'has_comments', 'Bit');
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
				$strAliasPrefix = 'narro_suggestion__';

			// Check for User Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'user_id__user_id')))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes);

			// Check for Text Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'text_id__text_id')))
				$objToReturn->objText = NarroText::InstantiateDbRow($objDbRow, $strAliasPrefix . 'text_id__', $strExpandAsArrayNodes);

			// Check for Language Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'language_id__language_id')))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes);




			// Check for NarroContextInfoAsPopularSuggestion Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoaspopularsuggestion__context_info_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextinfoaspopularsuggestion__context_info_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextInfoAsPopularSuggestionArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaspopularsuggestion__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextInfoAsPopularSuggestion = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaspopularsuggestion__', $strExpandAsArrayNodes);
			}

			// Check for NarroContextInfoAsValidSuggestion Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextinfoasvalidsuggestion__context_info_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextInfoAsValidSuggestionArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextInfoAsValidSuggestion = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidsuggestion__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionCommentAsSuggestion Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentassuggestion__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestioncommentassuggestion__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionCommentAsSuggestionArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentassuggestion__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionCommentAsSuggestion = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentassuggestion__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionVoteAsSuggestion Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestionvoteassuggestion__suggestion_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionVoteAsSuggestionArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionVoteAsSuggestion = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteassuggestion__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroSuggestions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroSuggestion[]
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
					$objItem = NarroSuggestion::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroSuggestion::InstantiateDbRow($objDbRow));
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
		 * @return NarroSuggestion
		*/
		public static function LoadBySuggestionId($intSuggestionId) {
			return NarroSuggestion::QuerySingle(
				QQ::Equal(QQN::NarroSuggestion()->SuggestionId, $intSuggestionId)
			);
		}
			
		/**
		 * Load a single NarroSuggestion object,
		 * by TextId, LanguageId, SuggestionValueMd5 Index(es)
		 * @param integer $intTextId
		 * @param integer $intLanguageId
		 * @param string $strSuggestionValueMd5
		 * @return NarroSuggestion
		*/
		public static function LoadByTextIdLanguageIdSuggestionValueMd5($intTextId, $intLanguageId, $strSuggestionValueMd5) {
			return NarroSuggestion::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId),
				QQ::Equal(QQN::NarroSuggestion()->LanguageId, $intLanguageId),
				QQ::Equal(QQN::NarroSuggestion()->SuggestionValueMd5, $strSuggestionValueMd5)
				)
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



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

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
							`has_comments`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intTextId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->strSuggestionValue) . ',
							' . $objDatabase->SqlVariable($this->strSuggestionValueMd5) . ',
							' . $objDatabase->SqlVariable($this->intSuggestionCharCount) . ',
							' . $objDatabase->SqlVariable($this->blnHasComments) . ',
							' . $objDatabase->SqlVariable($this->strCreated) . ',
							' . $objDatabase->SqlVariable($this->strModified) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intSuggestionId = $objDatabase->InsertId('narro_suggestion', 'suggestion_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_suggestion`
						SET
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . ',
							`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							`suggestion_value` = ' . $objDatabase->SqlVariable($this->strSuggestionValue) . ',
							`suggestion_value_md5` = ' . $objDatabase->SqlVariable($this->strSuggestionValueMd5) . ',
							`suggestion_char_count` = ' . $objDatabase->SqlVariable($this->intSuggestionCharCount) . ',
							`has_comments` = ' . $objDatabase->SqlVariable($this->blnHasComments) . ',
							`created` = ' . $objDatabase->SqlVariable($this->strCreated) . ',
							`modified` = ' . $objDatabase->SqlVariable($this->strModified) . '
						WHERE
							`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
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
					 * Gets the value for intSuggestionCharCount (Not Null)
					 * @return integer
					 */
					return $this->intSuggestionCharCount;

				case 'HasComments':
					/**
					 * Gets the value for blnHasComments 
					 * @return boolean
					 */
					return $this->blnHasComments;

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

				case '_NarroContextInfoAsPopularSuggestion':
					/**
					 * Gets the value for the private _objNarroContextInfoAsPopularSuggestion (Read-Only)
					 * if set due to an expansion on the narro_context_info.popular_suggestion_id reverse relationship
					 * @return NarroContextInfo
					 */
					return $this->_objNarroContextInfoAsPopularSuggestion;

				case '_NarroContextInfoAsPopularSuggestionArray':
					/**
					 * Gets the value for the private _objNarroContextInfoAsPopularSuggestionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_info.popular_suggestion_id reverse relationship
					 * @return NarroContextInfo[]
					 */
					return (array) $this->_objNarroContextInfoAsPopularSuggestionArray;

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
					return (array) $this->_objNarroContextInfoAsValidSuggestionArray;

				case '_NarroSuggestionCommentAsSuggestion':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsSuggestion (Read-Only)
					 * if set due to an expansion on the narro_suggestion_comment.suggestion_id reverse relationship
					 * @return NarroSuggestionComment
					 */
					return $this->_objNarroSuggestionCommentAsSuggestion;

				case '_NarroSuggestionCommentAsSuggestionArray':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsSuggestionArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_comment.suggestion_id reverse relationship
					 * @return NarroSuggestionComment[]
					 */
					return (array) $this->_objNarroSuggestionCommentAsSuggestionArray;

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
					return (array) $this->_objNarroSuggestionVoteAsSuggestionArray;

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
					 * Sets the value for intSuggestionCharCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSuggestionCharCount = QType::Cast($mixValue, QType::Integer));
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
		// ASSOCIATED OBJECTS
		///////////////////////////////

			
		
		// Related Objects' Methods for NarroContextInfoAsPopularSuggestion
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextInfosAsPopularSuggestion as an array of NarroContextInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextInfo[]
		*/ 
		public function GetNarroContextInfoAsPopularSuggestionArray($objOptionalClauses = null) {
			if ((is_null($this->intSuggestionId)))
				return array();

			try {
				return NarroContextInfo::LoadArrayByPopularSuggestionId($this->intSuggestionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextInfosAsPopularSuggestion
		 * @return int
		*/ 
		public function CountNarroContextInfosAsPopularSuggestion() {
			if ((is_null($this->intSuggestionId)))
				return 0;

			return NarroContextInfo::CountByPopularSuggestionId($this->intSuggestionId);
		}

		/**
		 * Associates a NarroContextInfoAsPopularSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function AssociateNarroContextInfoAsPopularSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsPopularSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsPopularSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`popular_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . '
			');
		}

		/**
		 * Unassociates a NarroContextInfoAsPopularSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function UnassociateNarroContextInfoAsPopularSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`popular_suggestion_id` = null
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`popular_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Unassociates all NarroContextInfosAsPopularSuggestion
		 * @return void
		*/ 
		public function UnassociateAllNarroContextInfosAsPopularSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`popular_suggestion_id` = null
				WHERE
					`popular_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextInfoAsPopularSuggestion
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextInfoAsPopularSuggestion(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this NarroSuggestion with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`popular_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextInfosAsPopularSuggestion
		 * @return void
		*/ 
		public function DeleteAllNarroContextInfosAsPopularSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsPopularSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`popular_suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

			
		
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

			
		
		// Related Objects' Methods for NarroSuggestionCommentAsSuggestion
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionCommentsAsSuggestion as an array of NarroSuggestionComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/ 
		public function GetNarroSuggestionCommentAsSuggestionArray($objOptionalClauses = null) {
			if ((is_null($this->intSuggestionId)))
				return array();

			try {
				return NarroSuggestionComment::LoadArrayBySuggestionId($this->intSuggestionId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionCommentsAsSuggestion
		 * @return int
		*/ 
		public function CountNarroSuggestionCommentsAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				return 0;

			return NarroSuggestionComment::CountBySuggestionId($this->intSuggestionId);
		}

		/**
		 * Associates a NarroSuggestionCommentAsSuggestion
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function AssociateNarroSuggestionCommentAsSuggestion(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionCommentAsSuggestion
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionCommentAsSuggestion(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`suggestion_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionCommentsAsSuggestion
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionCommentsAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`suggestion_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionCommentAsSuggestion
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionCommentAsSuggestion(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this unsaved NarroSuggestion.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this NarroSuggestion with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionCommentsAsSuggestion
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionCommentsAsSuggestion() {
			if ((is_null($this->intSuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsSuggestion on this unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestion::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . '
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
		const SuggestionValueMd5MaxLength = 128;
		const SuggestionValueMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.suggestion_char_count
		 * @var integer intSuggestionCharCount
		 */
		protected $intSuggestionCharCount;
		const SuggestionCharCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.has_comments
		 * @var boolean blnHasComments
		 */
		protected $blnHasComments;
		const HasCommentsDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.created
		 * @var string strCreated
		 */
		protected $strCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion.modified
		 * @var string strModified
		 */
		protected $strModified;
		const ModifiedDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextInfoAsPopularSuggestion object
		 * (of type NarroContextInfo), if this NarroSuggestion object was restored with
		 * an expansion on the narro_context_info association table.
		 * @var NarroContextInfo _objNarroContextInfoAsPopularSuggestion;
		 */
		private $_objNarroContextInfoAsPopularSuggestion;

		/**
		 * Private member variable that stores a reference to an array of NarroContextInfoAsPopularSuggestion objects
		 * (of type NarroContextInfo[]), if this NarroSuggestion object was restored with
		 * an ExpandAsArray on the narro_context_info association table.
		 * @var NarroContextInfo[] _objNarroContextInfoAsPopularSuggestionArray;
		 */
		private $_objNarroContextInfoAsPopularSuggestionArray = array();

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
		private $_objNarroContextInfoAsValidSuggestionArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionCommentAsSuggestion object
		 * (of type NarroSuggestionComment), if this NarroSuggestion object was restored with
		 * an expansion on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment _objNarroSuggestionCommentAsSuggestion;
		 */
		private $_objNarroSuggestionCommentAsSuggestion;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionCommentAsSuggestion objects
		 * (of type NarroSuggestionComment[]), if this NarroSuggestion object was restored with
		 * an ExpandAsArray on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment[] _objNarroSuggestionCommentAsSuggestionArray;
		 */
		private $_objNarroSuggestionCommentAsSuggestionArray = array();

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
		private $_objNarroSuggestionVoteAsSuggestionArray = array();

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






		////////////////////////////////////////
		// METHODS for WEB SERVICES
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
			$strToReturn .= '<element name="HasComments" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Created" type="xsd:string"/>';
			$strToReturn .= '<element name="Modified" type="xsd:string"/>';
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
			if (property_exists($objSoapObject, 'HasComments'))
				$objToReturn->blnHasComments = $objSoapObject->HasComments;
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
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroSuggestion extends QQNode {
		protected $strTableName = 'narro_suggestion';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestion';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'SuggestionValue':
					return new QQNode('suggestion_value', 'string', $this);
				case 'SuggestionValueMd5':
					return new QQNode('suggestion_value_md5', 'string', $this);
				case 'SuggestionCharCount':
					return new QQNode('suggestion_char_count', 'integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'NarroContextInfoAsPopularSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaspopularsuggestion', 'reverse_reference', 'popular_suggestion_id');
				case 'NarroContextInfoAsValidSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidsuggestion', 'reverse_reference', 'valid_suggestion_id');
				case 'NarroSuggestionCommentAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentassuggestion', 'reverse_reference', 'suggestion_id');
				case 'NarroSuggestionVoteAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteassuggestion', 'reverse_reference', 'suggestion_id');

				case '_PrimaryKeyNode':
					return new QQNode('suggestion_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroSuggestion extends QQReverseReferenceNode {
		protected $strTableName = 'narro_suggestion';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestion';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'SuggestionValue':
					return new QQNode('suggestion_value', 'string', $this);
				case 'SuggestionValueMd5':
					return new QQNode('suggestion_value_md5', 'string', $this);
				case 'SuggestionCharCount':
					return new QQNode('suggestion_char_count', 'integer', $this);
				case 'HasComments':
					return new QQNode('has_comments', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'NarroContextInfoAsPopularSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaspopularsuggestion', 'reverse_reference', 'popular_suggestion_id');
				case 'NarroContextInfoAsValidSuggestion':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidsuggestion', 'reverse_reference', 'valid_suggestion_id');
				case 'NarroSuggestionCommentAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentassuggestion', 'reverse_reference', 'suggestion_id');
				case 'NarroSuggestionVoteAsSuggestion':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteassuggestion', 'reverse_reference', 'suggestion_id');

				case '_PrimaryKeyNode':
					return new QQNode('suggestion_id', 'integer', $this);
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