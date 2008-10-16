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
	 * 
	 */
	class NarroLanguageGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroLanguage from PK Info
		 * @param integer $intLanguageId
		 * @return NarroLanguage
		 */
		public static function Load($intLanguageId) {
			// Use QuerySingle to Perform the Query
			return NarroLanguage::QuerySingle(
				QQ::Equal(QQN::NarroLanguage()->LanguageId, $intLanguageId)
			);
		}

		/**
		 * Load all NarroLanguages
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLanguage[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
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
			$objDatabase = NarroLanguage::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroLanguage-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_language');
			NarroLanguage::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_language` AS `narro_language`');

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
		 * Static Qcodo Query method to query for a single NarroLanguage object.
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
			return NarroLanguage::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroLanguage objects.
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
			return NarroLanguage::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroLanguage objects.
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

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_language_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroLanguage-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroLanguage::GetSelectFields($objQueryBuilder);
				NarroLanguage::GetFromFields($objQueryBuilder);

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
			return NarroLanguage::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroLanguage
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_language`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`language_id` AS ' . $strAliasPrefix . 'language_id`');
			$objBuilder->AddSelectItem($strTableName . '.`language_name` AS ' . $strAliasPrefix . 'language_name`');
			$objBuilder->AddSelectItem($strTableName . '.`language_code` AS ' . $strAliasPrefix . 'language_code`');
			$objBuilder->AddSelectItem($strTableName . '.`country_code` AS ' . $strAliasPrefix . 'country_code`');
			$objBuilder->AddSelectItem($strTableName . '.`encoding` AS ' . $strAliasPrefix . 'encoding`');
			$objBuilder->AddSelectItem($strTableName . '.`text_direction` AS ' . $strAliasPrefix . 'text_direction`');
			$objBuilder->AddSelectItem($strTableName . '.`special_characters` AS ' . $strAliasPrefix . 'special_characters`');
			$objBuilder->AddSelectItem($strTableName . '.`plural_form` AS ' . $strAliasPrefix . 'plural_form`');
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
		 * @return NarroLanguage
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intLanguageId == $objDbRow->GetColumn($strAliasPrefix . 'language_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_language__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextcommentaslanguage__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentaslanguage__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextCommentAsLanguageArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextCommentAsLanguageArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextCommentAsLanguageArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextCommentAsLanguageArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentaslanguage__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsLanguageArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextInfoAsLanguageArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextInfoAsLanguageArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextInfoAsLanguageArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionAsLanguageArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionAsLanguageArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionAsLanguageArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionAsLanguageArray, NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestioncommentaslanguage__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentaslanguage__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionCommentAsLanguageArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionCommentAsLanguageArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionCommentAsLanguageArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionCommentAsLanguageArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentaslanguage__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserpermissionaslanguage__user_permission_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionaslanguage__user_permission_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserPermissionAsLanguageArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserPermissionAsLanguageArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaslanguage__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserPermissionAsLanguageArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserPermissionAsLanguageArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaslanguage__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_language__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroLanguage object
			$objToReturn = new NarroLanguage();
			$objToReturn->__blnRestored = true;

			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasPrefix . 'language_id', 'Integer');
			$objToReturn->strLanguageName = $objDbRow->GetColumn($strAliasPrefix . 'language_name', 'VarChar');
			$objToReturn->strLanguageCode = $objDbRow->GetColumn($strAliasPrefix . 'language_code', 'VarChar');
			$objToReturn->strCountryCode = $objDbRow->GetColumn($strAliasPrefix . 'country_code', 'VarChar');
			$objToReturn->strEncoding = $objDbRow->GetColumn($strAliasPrefix . 'encoding', 'VarChar');
			$objToReturn->strTextDirection = $objDbRow->GetColumn($strAliasPrefix . 'text_direction', 'VarChar');
			$objToReturn->strSpecialCharacters = $objDbRow->GetColumn($strAliasPrefix . 'special_characters', 'VarChar');
			$objToReturn->strPluralForm = $objDbRow->GetColumn($strAliasPrefix . 'plural_form', 'VarChar');

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




			// Check for NarroContextCommentAsLanguage Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentaslanguage__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextcommentaslanguage__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextCommentAsLanguageArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentaslanguage__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextCommentAsLanguage = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentaslanguage__', $strExpandAsArrayNodes);
			}

			// Check for NarroContextInfoAsLanguage Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextinfoaslanguage__context_info_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextInfoAsLanguageArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextInfoAsLanguage = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoaslanguage__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionAsLanguage Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestionaslanguage__suggestion_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionAsLanguageArray, NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionAsLanguage = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionaslanguage__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionCommentAsLanguage Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestioncommentaslanguage__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestioncommentaslanguage__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionCommentAsLanguageArray, NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentaslanguage__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionCommentAsLanguage = NarroSuggestionComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestioncommentaslanguage__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserPermissionAsLanguage Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionaslanguage__user_permission_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserpermissionaslanguage__user_permission_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserPermissionAsLanguageArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaslanguage__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserPermissionAsLanguage = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionaslanguage__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroLanguages from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroLanguage[]
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
					$objItem = NarroLanguage::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroLanguage::InstantiateDbRow($objDbRow));
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
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageId($intLanguageId) {
			return NarroLanguage::QuerySingle(
				QQ::Equal(QQN::NarroLanguage()->LanguageId, $intLanguageId)
			);
		}
			
		/**
		 * Load a single NarroLanguage object,
		 * by LanguageName Index(es)
		 * @param string $strLanguageName
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageName($strLanguageName) {
			return NarroLanguage::QuerySingle(
				QQ::Equal(QQN::NarroLanguage()->LanguageName, $strLanguageName)
			);
		}
			
		/**
		 * Load a single NarroLanguage object,
		 * by LanguageCode Index(es)
		 * @param string $strLanguageCode
		 * @return NarroLanguage
		*/
		public static function LoadByLanguageCode($strLanguageCode) {
			return NarroLanguage::QuerySingle(
				QQ::Equal(QQN::NarroLanguage()->LanguageCode, $strLanguageCode)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

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
							`encoding`,
							`text_direction`,
							`special_characters`,
							`plural_form`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strLanguageName) . ',
							' . $objDatabase->SqlVariable($this->strLanguageCode) . ',
							' . $objDatabase->SqlVariable($this->strCountryCode) . ',
							' . $objDatabase->SqlVariable($this->strEncoding) . ',
							' . $objDatabase->SqlVariable($this->strTextDirection) . ',
							' . $objDatabase->SqlVariable($this->strSpecialCharacters) . ',
							' . $objDatabase->SqlVariable($this->strPluralForm) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intLanguageId = $objDatabase->InsertId('narro_language', 'language_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_language`
						SET
							`language_name` = ' . $objDatabase->SqlVariable($this->strLanguageName) . ',
							`language_code` = ' . $objDatabase->SqlVariable($this->strLanguageCode) . ',
							`country_code` = ' . $objDatabase->SqlVariable($this->strCountryCode) . ',
							`encoding` = ' . $objDatabase->SqlVariable($this->strEncoding) . ',
							`text_direction` = ' . $objDatabase->SqlVariable($this->strTextDirection) . ',
							`special_characters` = ' . $objDatabase->SqlVariable($this->strSpecialCharacters) . ',
							`plural_form` = ' . $objDatabase->SqlVariable($this->strPluralForm) . '
						WHERE
							`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
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
					 * Gets the value for strPluralForm (Not Null)
					 * @return string
					 */
					return $this->strPluralForm;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextCommentAsLanguage':
					/**
					 * Gets the value for the private _objNarroContextCommentAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_context_comment.language_id reverse relationship
					 * @return NarroContextComment
					 */
					return $this->_objNarroContextCommentAsLanguage;

				case '_NarroContextCommentAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroContextCommentAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_comment.language_id reverse relationship
					 * @return NarroContextComment[]
					 */
					return (array) $this->_objNarroContextCommentAsLanguageArray;

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
					return (array) $this->_objNarroContextInfoAsLanguageArray;

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
					return (array) $this->_objNarroSuggestionAsLanguageArray;

				case '_NarroSuggestionCommentAsLanguage':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_suggestion_comment.language_id reverse relationship
					 * @return NarroSuggestionComment
					 */
					return $this->_objNarroSuggestionCommentAsLanguage;

				case '_NarroSuggestionCommentAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroSuggestionCommentAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_comment.language_id reverse relationship
					 * @return NarroSuggestionComment[]
					 */
					return (array) $this->_objNarroSuggestionCommentAsLanguageArray;

				case '_NarroUserPermissionAsLanguage':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsLanguage (Read-Only)
					 * if set due to an expansion on the narro_user_permission.language_id reverse relationship
					 * @return NarroUserPermission
					 */
					return $this->_objNarroUserPermissionAsLanguage;

				case '_NarroUserPermissionAsLanguageArray':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsLanguageArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_permission.language_id reverse relationship
					 * @return NarroUserPermission[]
					 */
					return (array) $this->_objNarroUserPermissionAsLanguageArray;

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
					 * Sets the value for strPluralForm (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPluralForm = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for NarroContextCommentAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextCommentsAsLanguage as an array of NarroContextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment[]
		*/ 
		public function GetNarroContextCommentAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroContextComment::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextCommentsAsLanguage
		 * @return int
		*/ 
		public function CountNarroContextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroContextComment::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroContextCommentAsLanguage
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function AssociateNarroContextCommentAsLanguage(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsLanguage on this NarroLanguage with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroContextCommentAsLanguage
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function UnassociateNarroContextCommentAsLanguage(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this NarroLanguage with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`language_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroContextCommentsAsLanguage
		 * @return void
		*/ 
		public function UnassociateAllNarroContextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextCommentAsLanguage
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextCommentAsLanguage(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this NarroLanguage with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextCommentsAsLanguage
		 * @return void
		*/ 
		public function DeleteAllNarroContextCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
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

			
		
		// Related Objects' Methods for NarroSuggestionCommentAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionCommentsAsLanguage as an array of NarroSuggestionComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionComment[]
		*/ 
		public function GetNarroSuggestionCommentAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroSuggestionComment::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionCommentsAsLanguage
		 * @return int
		*/ 
		public function CountNarroSuggestionCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroSuggestionComment::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroSuggestionCommentAsLanguage
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function AssociateNarroSuggestionCommentAsLanguage(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionCommentAsLanguage on this NarroLanguage with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionCommentAsLanguage
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionCommentAsLanguage(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this NarroLanguage with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`language_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionCommentsAsLanguage
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_comment`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionCommentAsLanguage
		 * @param NarroSuggestionComment $objNarroSuggestionComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionCommentAsLanguage(NarroSuggestionComment $objNarroSuggestionComment) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroSuggestionComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this NarroLanguage with an unsaved NarroSuggestionComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionComment->CommentId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionCommentsAsLanguage
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionCommentsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionCommentAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_comment`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserPermissionAsLanguage
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserPermissionsAsLanguage as an array of NarroUserPermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserPermission[]
		*/ 
		public function GetNarroUserPermissionAsLanguageArray($objOptionalClauses = null) {
			if ((is_null($this->intLanguageId)))
				return array();

			try {
				return NarroUserPermission::LoadArrayByLanguageId($this->intLanguageId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserPermissionsAsLanguage
		 * @return int
		*/ 
		public function CountNarroUserPermissionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				return 0;

			return NarroUserPermission::CountByLanguageId($this->intLanguageId);
		}

		/**
		 * Associates a NarroUserPermissionAsLanguage
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function AssociateNarroUserPermissionAsLanguage(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsLanguage on this NarroLanguage with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroUserPermissionAsLanguage
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function UnassociateNarroUserPermissionAsLanguage(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this NarroLanguage with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`language_id` = null
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Unassociates all NarroUserPermissionsAsLanguage
		 * @return void
		*/ 
		public function UnassociateAllNarroUserPermissionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`language_id` = null
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserPermissionAsLanguage
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserPermissionAsLanguage(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this unsaved NarroLanguage.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this NarroLanguage with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserPermissionsAsLanguage
		 * @return void
		*/ 
		public function DeleteAllNarroUserPermissionsAsLanguage() {
			if ((is_null($this->intLanguageId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsLanguage on this unsaved NarroLanguage.');

			// Get the Database Object for this Class
			$objDatabase = NarroLanguage::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . '
			');
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
		const LanguageCodeMaxLength = 6;
		const LanguageCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_language.country_code
		 * @var string strCountryCode
		 */
		protected $strCountryCode;
		const CountryCodeMaxLength = 6;
		const CountryCodeDefault = null;


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
		 * Private member variable that stores a reference to a single NarroContextCommentAsLanguage object
		 * (of type NarroContextComment), if this NarroLanguage object was restored with
		 * an expansion on the narro_context_comment association table.
		 * @var NarroContextComment _objNarroContextCommentAsLanguage;
		 */
		private $_objNarroContextCommentAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroContextCommentAsLanguage objects
		 * (of type NarroContextComment[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_context_comment association table.
		 * @var NarroContextComment[] _objNarroContextCommentAsLanguageArray;
		 */
		private $_objNarroContextCommentAsLanguageArray = array();

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
		private $_objNarroContextInfoAsLanguageArray = array();

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
		private $_objNarroSuggestionAsLanguageArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionCommentAsLanguage object
		 * (of type NarroSuggestionComment), if this NarroLanguage object was restored with
		 * an expansion on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment _objNarroSuggestionCommentAsLanguage;
		 */
		private $_objNarroSuggestionCommentAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionCommentAsLanguage objects
		 * (of type NarroSuggestionComment[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_suggestion_comment association table.
		 * @var NarroSuggestionComment[] _objNarroSuggestionCommentAsLanguageArray;
		 */
		private $_objNarroSuggestionCommentAsLanguageArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserPermissionAsLanguage object
		 * (of type NarroUserPermission), if this NarroLanguage object was restored with
		 * an expansion on the narro_user_permission association table.
		 * @var NarroUserPermission _objNarroUserPermissionAsLanguage;
		 */
		private $_objNarroUserPermissionAsLanguage;

		/**
		 * Private member variable that stores a reference to an array of NarroUserPermissionAsLanguage objects
		 * (of type NarroUserPermission[]), if this NarroLanguage object was restored with
		 * an ExpandAsArray on the narro_user_permission association table.
		 * @var NarroUserPermission[] _objNarroUserPermissionAsLanguageArray;
		 */
		private $_objNarroUserPermissionAsLanguageArray = array();

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
			$strToReturn = '<complexType name="NarroLanguage"><sequence>';
			$strToReturn .= '<element name="LanguageId" type="xsd:int"/>';
			$strToReturn .= '<element name="LanguageName" type="xsd:string"/>';
			$strToReturn .= '<element name="LanguageCode" type="xsd:string"/>';
			$strToReturn .= '<element name="CountryCode" type="xsd:string"/>';
			$strToReturn .= '<element name="Encoding" type="xsd:string"/>';
			$strToReturn .= '<element name="TextDirection" type="xsd:string"/>';
			$strToReturn .= '<element name="SpecialCharacters" type="xsd:string"/>';
			$strToReturn .= '<element name="PluralForm" type="xsd:string"/>';
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
			if (property_exists($objSoapObject, 'Encoding'))
				$objToReturn->strEncoding = $objSoapObject->Encoding;
			if (property_exists($objSoapObject, 'TextDirection'))
				$objToReturn->strTextDirection = $objSoapObject->TextDirection;
			if (property_exists($objSoapObject, 'SpecialCharacters'))
				$objToReturn->strSpecialCharacters = $objSoapObject->SpecialCharacters;
			if (property_exists($objSoapObject, 'PluralForm'))
				$objToReturn->strPluralForm = $objSoapObject->PluralForm;
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
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroLanguage extends QQNode {
		protected $strTableName = 'narro_language';
		protected $strPrimaryKey = 'language_id';
		protected $strClassName = 'NarroLanguage';
		public function __get($strName) {
			switch ($strName) {
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'LanguageName':
					return new QQNode('language_name', 'string', $this);
				case 'LanguageCode':
					return new QQNode('language_code', 'string', $this);
				case 'CountryCode':
					return new QQNode('country_code', 'string', $this);
				case 'Encoding':
					return new QQNode('encoding', 'string', $this);
				case 'TextDirection':
					return new QQNode('text_direction', 'string', $this);
				case 'SpecialCharacters':
					return new QQNode('special_characters', 'string', $this);
				case 'PluralForm':
					return new QQNode('plural_form', 'string', $this);
				case 'NarroContextCommentAsLanguage':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroContextInfoAsLanguage':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionCommentAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroUserPermissionAsLanguage':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionaslanguage', 'reverse_reference', 'language_id');

				case '_PrimaryKeyNode':
					return new QQNode('language_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroLanguage extends QQReverseReferenceNode {
		protected $strTableName = 'narro_language';
		protected $strPrimaryKey = 'language_id';
		protected $strClassName = 'NarroLanguage';
		public function __get($strName) {
			switch ($strName) {
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'LanguageName':
					return new QQNode('language_name', 'string', $this);
				case 'LanguageCode':
					return new QQNode('language_code', 'string', $this);
				case 'CountryCode':
					return new QQNode('country_code', 'string', $this);
				case 'Encoding':
					return new QQNode('encoding', 'string', $this);
				case 'TextDirection':
					return new QQNode('text_direction', 'string', $this);
				case 'SpecialCharacters':
					return new QQNode('special_characters', 'string', $this);
				case 'PluralForm':
					return new QQNode('plural_form', 'string', $this);
				case 'NarroContextCommentAsLanguage':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroContextInfoAsLanguage':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionaslanguage', 'reverse_reference', 'language_id');
				case 'NarroSuggestionCommentAsLanguage':
					return new QQReverseReferenceNodeNarroSuggestionComment($this, 'narrosuggestioncommentaslanguage', 'reverse_reference', 'language_id');
				case 'NarroUserPermissionAsLanguage':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionaslanguage', 'reverse_reference', 'language_id');

				case '_PrimaryKeyNode':
					return new QQNode('language_id', 'integer', $this);
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