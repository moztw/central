<?php
	/**
	 * The abstract NarroUserGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroUser subclass which
	 * extends this NarroUserGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroUser class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroUserGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroUser from PK Info
		 * @param integer $intUserId
		 * @return NarroUser
		 */
		public static function Load($intUserId) {
			// Use QuerySingle to Perform the Query
			return NarroUser::QuerySingle(
				QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
			);
		}

		/**
		 * Load all NarroUsers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroUser::QueryArray to perform the LoadAll query
			try {
				return NarroUser::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroUsers
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroUser::QueryCount to perform the CountAll query
			return NarroUser::QueryCount(QQ::All());
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
			$objDatabase = NarroUser::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroUser-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_user');
			NarroUser::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_user` AS `narro_user`');

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
		 * Static Qcodo Query method to query for a single NarroUser object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroUser the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroUser::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroUser object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroUser::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroUser objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroUser[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroUser::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroUser::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroUser objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroUser::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroUser::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_user_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroUser-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroUser::GetSelectFields($objQueryBuilder);
				NarroUser::GetFromFields($objQueryBuilder);

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
			return NarroUser::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroUser
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_user`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`user_id` AS ' . $strAliasPrefix . 'user_id`');
			$objBuilder->AddSelectItem($strTableName . '.`username` AS ' . $strAliasPrefix . 'username`');
			$objBuilder->AddSelectItem($strTableName . '.`password` AS ' . $strAliasPrefix . 'password`');
			$objBuilder->AddSelectItem($strTableName . '.`email` AS ' . $strAliasPrefix . 'email`');
			$objBuilder->AddSelectItem($strTableName . '.`data` AS ' . $strAliasPrefix . 'data`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroUser from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroUser::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroUser
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intUserId == $objDbRow->GetColumn($strAliasPrefix . 'user_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_user__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextcommentasuser__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentasuser__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextCommentAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextCommentAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextCommentAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextCommentAsUserArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsValidatorUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextInfoAsValidatorUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextInfoAsValidatorUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextInfoAsValidatorUserArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestionasuser__suggestion_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionasuser__suggestion_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionAsUserArray, NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestioncommentasuser__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentasuser__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionCommentAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionCommentAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionCommentAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionCommentAsUserArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionVoteAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionVoteAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionVoteAsUserArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrotextcommentasuser__text_comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrotextcommentasuser__text_comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroTextCommentAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroTextCommentAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroTextCommentAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroTextCommentAsUserArray, NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserpermissionasuser__user_permission_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionasuser__user_permission_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserPermissionAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserPermissionAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserPermissionAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserPermissionAsUserArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserroleasuser__user_role_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasuser__user_role_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsUserArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserRoleAsUserArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserRoleAsUserArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserRoleAsUserArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_user__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroUser object
			$objToReturn = new NarroUser();
			$objToReturn->__blnRestored = true;

			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasPrefix . 'user_id', 'Integer');
			$objToReturn->__intUserId = $objDbRow->GetColumn($strAliasPrefix . 'user_id', 'Integer');
			$objToReturn->strUsername = $objDbRow->GetColumn($strAliasPrefix . 'username', 'VarChar');
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasPrefix . 'password', 'VarChar');
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasPrefix . 'email', 'VarChar');
			$objToReturn->strData = $objDbRow->GetColumn($strAliasPrefix . 'data', 'Blob');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_user__';




			// Check for NarroContextCommentAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentasuser__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextcommentasuser__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextCommentAsUserArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextCommentAsUser = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroContextInfoAsValidatorUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextInfoAsValidatorUserArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextInfoAsValidatorUser = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionasuser__suggestion_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestionasuser__suggestion_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionAsUserArray, NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionAsUser = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionCommentAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentasuser__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestioncommentasuser__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionCommentAsUserArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionCommentAsUser = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionVoteAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionVoteAsUserArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionVoteAsUser = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroTextCommentAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrotextcommentasuser__text_comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrotextcommentasuser__text_comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroTextCommentAsUserArray, NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroTextCommentAsUser = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserPermissionAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionasuser__user_permission_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserpermissionasuser__user_permission_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserPermissionAsUserArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserPermissionAsUser = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasuser__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserRoleAsUser Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasuser__user_role_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserroleasuser__user_role_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserRoleAsUserArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserRoleAsUser = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroUsers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroUser[]
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
					$objItem = NarroUser::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroUser::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroUser object,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return NarroUser
		*/
		public static function LoadByUserId($intUserId) {
			return NarroUser::QuerySingle(
				QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load a single NarroUser object,
		 * by Username Index(es)
		 * @param string $strUsername
		 * @return NarroUser
		*/
		public static function LoadByUsername($strUsername) {
			return NarroUser::QuerySingle(
				QQ::Equal(QQN::NarroUser()->Username, $strUsername)
			);
		}
			
		/**
		 * Load a single NarroUser object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @return NarroUser
		*/
		public static function LoadByEmail($strEmail) {
			return NarroUser::QuerySingle(
				QQ::Equal(QQN::NarroUser()->Email, $strEmail)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroUser
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_user` (
							`user_id`,
							`username`,
							`password`,
							`email`,
							`data`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->strUsername) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strData) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_user`
						SET
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`username` = ' . $objDatabase->SqlVariable($this->strUsername) . ',
							`password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`data` = ' . $objDatabase->SqlVariable($this->strData) . '
						WHERE
							`user_id` = ' . $objDatabase->SqlVariable($this->__intUserId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intUserId = $this->intUserId;


			// Return 
			return $mixToReturn;
		}

				/**
		 * Delete this NarroUser
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroUser with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '');
		}

		/**
		 * Delete all NarroUsers
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user`');
		}

		/**
		 * Truncate narro_user table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_user`');
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
				case 'UserId':
					/**
					 * Gets the value for intUserId (PK)
					 * @return integer
					 */
					return $this->intUserId;

				case 'Username':
					/**
					 * Gets the value for strUsername (Unique)
					 * @return string
					 */
					return $this->strUsername;

				case 'Password':
					/**
					 * Gets the value for strPassword (Not Null)
					 * @return string
					 */
					return $this->strPassword;

				case 'Email':
					/**
					 * Gets the value for strEmail (Unique)
					 * @return string
					 */
					return $this->strEmail;

				case 'Data':
					/**
					 * Gets the value for strData 
					 * @return string
					 */
					return $this->strData;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextCommentAsUser':
					/**
					 * Gets the value for the private _objNarroContextCommentAsUser (Read-Only)
					 * if set due to an expansion on the narro_context_comment.user_id reverse relationship
					 * @return NarroContextComment
					 */
					return $this->_objNarroContextCommentAsUser;

				case '_NarroContextCommentAsUserArray':
					/**
					 * Gets the value for the private _objNarroContextCommentAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_comment.user_id reverse relationship
					 * @return NarroContextComment[]
					 */
					return (array) $this->_objNarroContextCommentAsUserArray;

				case '_NarroContextInfoAsValidatorUser':
					/**
					 * Gets the value for the private _objNarroContextInfoAsValidatorUser (Read-Only)
					 * if set due to an expansion on the narro_context_info.validator_user_id reverse relationship
					 * @return NarroContextInfo
					 */
					return $this->_objNarroContextInfoAsValidatorUser;

				case '_NarroContextInfoAsValidatorUserArray':
					/**
					 * Gets the value for the private _objNarroContextInfoAsValidatorUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_info.validator_user_id reverse relationship
					 * @return NarroContextInfo[]
					 */
					return (array) $this->_objNarroContextInfoAsValidatorUserArray;

				case '_NarroSuggestionAsUser':
					/**
					 * Gets the value for the private _objNarroSuggestionAsUser (Read-Only)
					 * if set due to an expansion on the narro_suggestion.user_id reverse relationship
					 * @return NarroSuggestion
					 */
					return $this->_objNarroSuggestionAsUser;

				case '_NarroSuggestionAsUserArray':
					/**
					 * Gets the value for the private _objNarroSuggestionAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion.user_id reverse relationship
					 * @return NarroSuggestion[]
					 */
					return (array) $this->_objNarroSuggestionAsUserArray;

				case '_NarroSuggestionCommentAsUser':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsUser (Read-Only)
					 * if set due to an expansion on the narro_suggestion_comment.user_id reverse relationship
					 * @return NarroSuggestionComment
					 */
					return $this->_objNarroSuggestionCommentAsUser;

				case '_NarroSuggestionCommentAsUserArray':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_comment.user_id reverse relationship
					 * @return NarroSuggestionComment[]
					 */
					return (array) $this->_objNarroSuggestionCommentAsUserArray;

				case '_NarroSuggestionVoteAsUser':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsUser (Read-Only)
					 * if set due to an expansion on the narro_suggestion_vote.user_id reverse relationship
					 * @return NarroSuggestionVote
					 */
					return $this->_objNarroSuggestionVoteAsUser;

				case '_NarroSuggestionVoteAsUserArray':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_vote.user_id reverse relationship
					 * @return NarroSuggestionVote[]
					 */
					return (array) $this->_objNarroSuggestionVoteAsUserArray;

				case '_NarroTextCommentAsUser':
					/**
					 * Gets the value for the private _objNarroTextCommentAsUser (Read-Only)
					 * if set due to an expansion on the narro_text_comment.user_id reverse relationship
					 * @return NarroTextComment
					 */
					return $this->_objNarroTextCommentAsUser;

				case '_NarroTextCommentAsUserArray':
					/**
					 * Gets the value for the private _objNarroTextCommentAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_text_comment.user_id reverse relationship
					 * @return NarroTextComment[]
					 */
					return (array) $this->_objNarroTextCommentAsUserArray;

				case '_NarroUserPermissionAsUser':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsUser (Read-Only)
					 * if set due to an expansion on the narro_user_permission.user_id reverse relationship
					 * @return NarroUserPermission
					 */
					return $this->_objNarroUserPermissionAsUser;

				case '_NarroUserPermissionAsUserArray':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_permission.user_id reverse relationship
					 * @return NarroUserPermission[]
					 */
					return (array) $this->_objNarroUserPermissionAsUserArray;

				case '_NarroUserRoleAsUser':
					/**
					 * Gets the value for the private _objNarroUserRoleAsUser (Read-Only)
					 * if set due to an expansion on the narro_user_role.user_id reverse relationship
					 * @return NarroUserRole
					 */
					return $this->_objNarroUserRoleAsUser;

				case '_NarroUserRoleAsUserArray':
					/**
					 * Gets the value for the private _objNarroUserRoleAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_role.user_id reverse relationship
					 * @return NarroUserRole[]
					 */
					return (array) $this->_objNarroUserRoleAsUserArray;

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
					 * Sets the value for intUserId (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Username':
					/**
					 * Sets the value for strUsername (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUsername = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email':
					/**
					 * Sets the value for strEmail (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
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
		// ASSOCIATED OBJECTS
		///////////////////////////////

			
		
		// Related Objects' Methods for NarroContextCommentAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextCommentsAsUser as an array of NarroContextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment[]
		*/ 
		public function GetNarroContextCommentAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroContextComment::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextCommentsAsUser
		 * @return int
		*/ 
		public function CountNarroContextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroContextComment::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroContextCommentAsUser
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function AssociateNarroContextCommentAsUser(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsUser on this NarroUser with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroContextCommentAsUser
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function UnassociateNarroContextCommentAsUser(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this NarroUser with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`user_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroContextCommentsAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroContextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextCommentAsUser
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextCommentAsUser(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this NarroUser with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextCommentsAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroContextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroContextInfoAsValidatorUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextInfosAsValidatorUser as an array of NarroContextInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextInfo[]
		*/ 
		public function GetNarroContextInfoAsValidatorUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroContextInfo::LoadArrayByValidatorUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextInfosAsValidatorUser
		 * @return int
		*/ 
		public function CountNarroContextInfosAsValidatorUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroContextInfo::CountByValidatorUserId($this->intUserId);
		}

		/**
		 * Associates a NarroContextInfoAsValidatorUser
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function AssociateNarroContextInfoAsValidatorUser(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsValidatorUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsValidatorUser on this NarroUser with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`validator_user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . '
			');
		}

		/**
		 * Unassociates a NarroContextInfoAsValidatorUser
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function UnassociateNarroContextInfoAsValidatorUser(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this NarroUser with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`validator_user_id` = null
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`validator_user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroContextInfosAsValidatorUser
		 * @return void
		*/ 
		public function UnassociateAllNarroContextInfosAsValidatorUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`validator_user_id` = null
				WHERE
					`validator_user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextInfoAsValidatorUser
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextInfoAsValidatorUser(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this unsaved NarroUser.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this NarroUser with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`validator_user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextInfosAsValidatorUser
		 * @return void
		*/ 
		public function DeleteAllNarroContextInfosAsValidatorUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsValidatorUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`validator_user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionsAsUser as an array of NarroSuggestion objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestion[]
		*/ 
		public function GetNarroSuggestionAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroSuggestion::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionsAsUser
		 * @return int
		*/ 
		public function CountNarroSuggestionsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroSuggestion::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroSuggestionAsUser
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/ 
		public function AssociateNarroSuggestionAsUser(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionAsUser on this NarroUser with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionAsUser
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionAsUser(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this NarroUser with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`user_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionsAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionAsUser
		 * @param NarroSuggestion $objNarroSuggestion
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionAsUser(NarroSuggestion $objNarroSuggestion) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestion->SuggestionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this NarroUser with an unsaved NarroSuggestion.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestion->SuggestionId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionsAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionCommentAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionCommentsAsUser as an array of NarroSuggestionComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/ 
		public function GetNarroSuggestionCommentAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroSuggestionComment::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionCommentsAsUser
		 * @return int
		*/ 
		public function CountNarroSuggestionCommentsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroSuggestionComment::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroSuggestionCommentAsUser
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function AssociateNarroSuggestionCommentAsUser(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsUser on this NarroUser with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionCommentAsUser
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionCommentAsUser(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this NarroUser with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`user_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionCommentsAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionCommentAsUser
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionCommentAsUser(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this NarroUser with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionCommentsAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionVoteAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionVotesAsUser as an array of NarroSuggestionVote objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/ 
		public function GetNarroSuggestionVoteAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroSuggestionVote::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionVotesAsUser
		 * @return int
		*/ 
		public function CountNarroSuggestionVotesAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroSuggestionVote::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroSuggestionVoteAsUser
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function AssociateNarroSuggestionVoteAsUser(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsUser on this NarroUser with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionVoteAsUser
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionVoteAsUser(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this NarroUser with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`user_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionVotesAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionVotesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionVoteAsUser
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionVoteAsUser(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this NarroUser with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionVotesAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionVotesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroTextCommentAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroTextCommentsAsUser as an array of NarroTextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroTextComment[]
		*/ 
		public function GetNarroTextCommentAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroTextComment::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroTextCommentsAsUser
		 * @return int
		*/ 
		public function CountNarroTextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroTextComment::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroTextCommentAsUser
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/ 
		public function AssociateNarroTextCommentAsUser(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroTextCommentAsUser on this NarroUser with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . '
			');
		}

		/**
		 * Unassociates a NarroTextCommentAsUser
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/ 
		public function UnassociateNarroTextCommentAsUser(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this NarroUser with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`user_id` = null
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroTextCommentsAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroTextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_text_comment`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroTextCommentAsUser
		 * @param NarroTextComment $objNarroTextComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroTextCommentAsUser(NarroTextComment $objNarroTextComment) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroTextComment->TextCommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this NarroUser with an unsaved NarroTextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`text_comment_id` = ' . $objDatabase->SqlVariable($objNarroTextComment->TextCommentId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroTextCommentsAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroTextCommentsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroTextCommentAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_text_comment`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserPermissionAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserPermissionsAsUser as an array of NarroUserPermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserPermission[]
		*/ 
		public function GetNarroUserPermissionAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroUserPermission::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserPermissionsAsUser
		 * @return int
		*/ 
		public function CountNarroUserPermissionsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroUserPermission::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroUserPermissionAsUser
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function AssociateNarroUserPermissionAsUser(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsUser on this NarroUser with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroUserPermissionAsUser
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function UnassociateNarroUserPermissionAsUser(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this NarroUser with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`user_id` = null
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroUserPermissionsAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroUserPermissionsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserPermissionAsUser
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserPermissionAsUser(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this NarroUser with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserPermissionsAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroUserPermissionsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserRoleAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserRolesAsUser as an array of NarroUserRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserRole[]
		*/ 
		public function GetNarroUserRoleAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroUserRole::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserRolesAsUser
		 * @return int
		*/ 
		public function CountNarroUserRolesAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroUserRole::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroUserRoleAsUser
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function AssociateNarroUserRoleAsUser(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsUser on this NarroUser with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . '
			');
		}

		/**
		 * Unassociates a NarroUserRoleAsUser
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function UnassociateNarroUserRoleAsUser(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this NarroUser with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`user_id` = null
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroUserRolesAsUser
		 * @return void
		*/ 
		public function UnassociateAllNarroUserRolesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserRoleAsUser
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserRoleAsUser(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this NarroUser with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserRolesAsUser
		 * @return void
		*/ 
		public function DeleteAllNarroUserRolesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column narro_user.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intUserId;
		 */
		protected $__intUserId;

		/**
		 * Protected member variable that maps to the database column narro_user.username
		 * @var string strUsername
		 */
		protected $strUsername;
		const UsernameMaxLength = 128;
		const UsernameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_user.password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 64;
		const PasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_user.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 128;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_user.data
		 * @var string strData
		 */
		protected $strData;
		const DataDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextCommentAsUser object
		 * (of type NarroContextComment), if this NarroUser object was restored with
		 * an expansion on the narro_context_comment association table.
		 * @var NarroContextComment _objNarroContextCommentAsUser;
		 */
		private $_objNarroContextCommentAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroContextCommentAsUser objects
		 * (of type NarroContextComment[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_context_comment association table.
		 * @var NarroContextComment[] _objNarroContextCommentAsUserArray;
		 */
		private $_objNarroContextCommentAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroContextInfoAsValidatorUser object
		 * (of type NarroContextInfo), if this NarroUser object was restored with
		 * an expansion on the narro_context_info association table.
		 * @var NarroContextInfo _objNarroContextInfoAsValidatorUser;
		 */
		private $_objNarroContextInfoAsValidatorUser;

		/**
		 * Private member variable that stores a reference to an array of NarroContextInfoAsValidatorUser objects
		 * (of type NarroContextInfo[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_context_info association table.
		 * @var NarroContextInfo[] _objNarroContextInfoAsValidatorUserArray;
		 */
		private $_objNarroContextInfoAsValidatorUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionAsUser object
		 * (of type NarroSuggestion), if this NarroUser object was restored with
		 * an expansion on the narro_suggestion association table.
		 * @var NarroSuggestion _objNarroSuggestionAsUser;
		 */
		private $_objNarroSuggestionAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionAsUser objects
		 * (of type NarroSuggestion[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_suggestion association table.
		 * @var NarroSuggestion[] _objNarroSuggestionAsUserArray;
		 */
		private $_objNarroSuggestionAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionCommentAsUser object
		 * (of type NarroSuggestionComment), if this NarroUser object was restored with
		 * an expansion on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment _objNarroSuggestionCommentAsUser;
		 */
		private $_objNarroSuggestionCommentAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionCommentAsUser objects
		 * (of type NarroSuggestionComment[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment[] _objNarroSuggestionCommentAsUserArray;
		 */
		private $_objNarroSuggestionCommentAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionVoteAsUser object
		 * (of type NarroSuggestionVote), if this NarroUser object was restored with
		 * an expansion on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote _objNarroSuggestionVoteAsUser;
		 */
		private $_objNarroSuggestionVoteAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionVoteAsUser objects
		 * (of type NarroSuggestionVote[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote[] _objNarroSuggestionVoteAsUserArray;
		 */
		private $_objNarroSuggestionVoteAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroTextCommentAsUser object
		 * (of type NarroTextComment), if this NarroUser object was restored with
		 * an expansion on the narro_text_comment association table.
		 * @var NarroTextComment _objNarroTextCommentAsUser;
		 */
		private $_objNarroTextCommentAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroTextCommentAsUser objects
		 * (of type NarroTextComment[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_text_comment association table.
		 * @var NarroTextComment[] _objNarroTextCommentAsUserArray;
		 */
		private $_objNarroTextCommentAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserPermissionAsUser object
		 * (of type NarroUserPermission), if this NarroUser object was restored with
		 * an expansion on the narro_user_permission association table.
		 * @var NarroUserPermission _objNarroUserPermissionAsUser;
		 */
		private $_objNarroUserPermissionAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroUserPermissionAsUser objects
		 * (of type NarroUserPermission[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_user_permission association table.
		 * @var NarroUserPermission[] _objNarroUserPermissionAsUserArray;
		 */
		private $_objNarroUserPermissionAsUserArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserRoleAsUser object
		 * (of type NarroUserRole), if this NarroUser object was restored with
		 * an expansion on the narro_user_role association table.
		 * @var NarroUserRole _objNarroUserRoleAsUser;
		 */
		private $_objNarroUserRoleAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroUserRoleAsUser objects
		 * (of type NarroUserRole[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_user_role association table.
		 * @var NarroUserRole[] _objNarroUserRoleAsUserArray;
		 */
		private $_objNarroUserRoleAsUserArray = array();

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






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroUser"><sequence>';
			$strToReturn .= '<element name="UserId" type="xsd:int"/>';
			$strToReturn .= '<element name="Username" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Data" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroUser', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroUser'] = NarroUser::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroUser::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroUser();
			if (property_exists($objSoapObject, 'UserId'))
				$objToReturn->intUserId = $objSoapObject->UserId;
			if (property_exists($objSoapObject, 'Username'))
				$objToReturn->strUsername = $objSoapObject->Username;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Data'))
				$objToReturn->strData = $objSoapObject->Data;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroUser::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroUser extends QQNode {
		protected $strTableName = 'narro_user';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'NarroUser';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'Username':
					return new QQNode('username', 'string', $this);
				case 'Password':
					return new QQNode('password', 'string', $this);
				case 'Email':
					return new QQNode('email', 'string', $this);
				case 'Data':
					return new QQNode('data', 'string', $this);
				case 'NarroContextCommentAsUser':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroContextInfoAsValidatorUser':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidatoruser', 'reverse_reference', 'validator_user_id');
				case 'NarroSuggestionAsUser':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionCommentAsUser':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionVoteAsUser':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteasuser', 'reverse_reference', 'user_id');
				case 'NarroTextCommentAsUser':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroUserPermissionAsUser':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionasuser', 'reverse_reference', 'user_id');
				case 'NarroUserRoleAsUser':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroUser extends QQReverseReferenceNode {
		protected $strTableName = 'narro_user';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'NarroUser';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('user_id', 'integer', $this);
				case 'Username':
					return new QQNode('username', 'string', $this);
				case 'Password':
					return new QQNode('password', 'string', $this);
				case 'Email':
					return new QQNode('email', 'string', $this);
				case 'Data':
					return new QQNode('data', 'string', $this);
				case 'NarroContextCommentAsUser':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroContextInfoAsValidatorUser':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidatoruser', 'reverse_reference', 'validator_user_id');
				case 'NarroSuggestionAsUser':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionCommentAsUser':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionVoteAsUser':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteasuser', 'reverse_reference', 'user_id');
				case 'NarroTextCommentAsUser':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroUserPermissionAsUser':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionasuser', 'reverse_reference', 'user_id');
				case 'NarroUserRoleAsUser':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'integer', $this);
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