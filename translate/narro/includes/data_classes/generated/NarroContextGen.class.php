<?php
	/**
	 * The abstract NarroContextGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroContext subclass which
	 * extends this NarroContextGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroContext class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroContextGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroContext from PK Info
		 * @param integer $intContextId
		 * @return NarroContext
		 */
		public static function Load($intContextId) {
			// Use QuerySingle to Perform the Query
			return NarroContext::QuerySingle(
				QQ::Equal(QQN::NarroContext()->ContextId, $intContextId)
			);
		}

		/**
		 * Load all NarroContexts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadAll query
			try {
				return NarroContext::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroContexts
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroContext::QueryCount to perform the CountAll query
			return NarroContext::QueryCount(QQ::All());
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
			$objDatabase = NarroContext::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroContext-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_context');
			NarroContext::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_context` AS `narro_context`');

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
		 * Static Qcodo Query method to query for a single NarroContext object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroContext the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContext::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroContext object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroContext::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroContext objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroContext[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContext::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroContext::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroContext objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroContext::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroContext::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_context_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroContext-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroContext::GetSelectFields($objQueryBuilder);
				NarroContext::GetFromFields($objQueryBuilder);

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
			return NarroContext::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroContext
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_context`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`context_id` AS ' . $strAliasPrefix . 'context_id`');
			$objBuilder->AddSelectItem($strTableName . '.`text_id` AS ' . $strAliasPrefix . 'text_id`');
			$objBuilder->AddSelectItem($strTableName . '.`project_id` AS ' . $strAliasPrefix . 'project_id`');
			$objBuilder->AddSelectItem($strTableName . '.`context` AS ' . $strAliasPrefix . 'context`');
			$objBuilder->AddSelectItem($strTableName . '.`context_md5` AS ' . $strAliasPrefix . 'context_md5`');
			$objBuilder->AddSelectItem($strTableName . '.`file_id` AS ' . $strAliasPrefix . 'file_id`');
			$objBuilder->AddSelectItem($strTableName . '.`created` AS ' . $strAliasPrefix . 'created`');
			$objBuilder->AddSelectItem($strTableName . '.`modified` AS ' . $strAliasPrefix . 'modified`');
			$objBuilder->AddSelectItem($strTableName . '.`active` AS ' . $strAliasPrefix . 'active`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroContext from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroContext::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroContext
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intContextId == $objDbRow->GetColumn($strAliasPrefix . 'context_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_context__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextcommentascontext__comment_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentascontext__comment_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextCommentAsContextArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextCommentAsContextArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentascontext__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextCommentAsContextArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextCommentAsContextArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentascontext__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrocontextinfoascontext__context_info_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoascontext__context_info_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsContextArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextInfoAsContextArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextInfoAsContextArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextInfoAsContextArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsContextArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroSuggestionVoteAsContextArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroSuggestionVoteAsContextArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroSuggestionVoteAsContextArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_context__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroContext object
			$objToReturn = new NarroContext();
			$objToReturn->__blnRestored = true;

			$objToReturn->intContextId = $objDbRow->GetColumn($strAliasPrefix . 'context_id', 'Integer');
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasPrefix . 'text_id', 'Integer');
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasPrefix . 'project_id', 'Integer');
			$objToReturn->strContext = $objDbRow->GetColumn($strAliasPrefix . 'context', 'Blob');
			$objToReturn->strContextMd5 = $objDbRow->GetColumn($strAliasPrefix . 'context_md5', 'VarChar');
			$objToReturn->intFileId = $objDbRow->GetColumn($strAliasPrefix . 'file_id', 'Integer');
			$objToReturn->strCreated = $objDbRow->GetColumn($strAliasPrefix . 'created', 'VarChar');
			$objToReturn->strModified = $objDbRow->GetColumn($strAliasPrefix . 'modified', 'VarChar');
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasPrefix . 'active', 'Bit');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_context__';

			// Check for Text Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'text_id__text_id')))
				$objToReturn->objText = NarroText::InstantiateDbRow($objDbRow, $strAliasPrefix . 'text_id__', $strExpandAsArrayNodes);

			// Check for Project Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'project_id__project_id')))
				$objToReturn->objProject = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $strExpandAsArrayNodes);

			// Check for File Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'file_id__file_id')))
				$objToReturn->objFile = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'file_id__', $strExpandAsArrayNodes);




			// Check for NarroContextCommentAsContext Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextcommentascontext__comment_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextcommentascontext__comment_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextCommentAsContextArray, NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentascontext__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextCommentAsContext = NarroContextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextcommentascontext__', $strExpandAsArrayNodes);
			}

			// Check for NarroContextInfoAsContext Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextinfoascontext__context_info_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextinfoascontext__context_info_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextInfoAsContextArray, NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextInfoAsContext = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes);
			}

			// Check for NarroSuggestionVoteAsContext Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroSuggestionVoteAsContextArray, NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroSuggestionVoteAsContext = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroContexts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroContext[]
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
					$objItem = NarroContext::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroContext::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroContext object,
		 * by ContextId Index(es)
		 * @param integer $intContextId
		 * @return NarroContext
		*/
		public static function LoadByContextId($intContextId) {
			return NarroContext::QuerySingle(
				QQ::Equal(QQN::NarroContext()->ContextId, $intContextId)
			);
		}
			
		/**
		 * Load an array of NarroContext objects,
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByTextId($intTextId, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByTextId query
			try {
				return NarroContext::QueryArray(
					QQ::Equal(QQN::NarroContext()->TextId, $intTextId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by TextId Index(es)
		 * @param integer $intTextId
		 * @return int
		*/
		public static function CountByTextId($intTextId) {
			// Call NarroContext::QueryCount to perform the CountByTextId query
			return NarroContext::QueryCount(
				QQ::Equal(QQN::NarroContext()->TextId, $intTextId)
			);
		}
			
		/**
		 * Load an array of NarroContext objects,
		 * by FileId Index(es)
		 * @param integer $intFileId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByFileId($intFileId, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByFileId query
			try {
				return NarroContext::QueryArray(
					QQ::Equal(QQN::NarroContext()->FileId, $intFileId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by FileId Index(es)
		 * @param integer $intFileId
		 * @return int
		*/
		public static function CountByFileId($intFileId) {
			// Call NarroContext::QueryCount to perform the CountByFileId query
			return NarroContext::QueryCount(
				QQ::Equal(QQN::NarroContext()->FileId, $intFileId)
			);
		}
			
		/**
		 * Load an array of NarroContext objects,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByProjectId($intProjectId, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByProjectId query
			try {
				return NarroContext::QueryArray(
					QQ::Equal(QQN::NarroContext()->ProjectId, $intProjectId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectId($intProjectId) {
			// Call NarroContext::QueryCount to perform the CountByProjectId query
			return NarroContext::QueryCount(
				QQ::Equal(QQN::NarroContext()->ProjectId, $intProjectId)
			);
		}
			
		/**
		 * Load an array of NarroContext objects,
		 * by ContextMd5 Index(es)
		 * @param string $strContextMd5
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByContextMd5($strContextMd5, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByContextMd5 query
			try {
				return NarroContext::QueryArray(
					QQ::Equal(QQN::NarroContext()->ContextMd5, $strContextMd5),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by ContextMd5 Index(es)
		 * @param string $strContextMd5
		 * @return int
		*/
		public static function CountByContextMd5($strContextMd5) {
			// Call NarroContext::QueryCount to perform the CountByContextMd5 query
			return NarroContext::QueryCount(
				QQ::Equal(QQN::NarroContext()->ContextMd5, $strContextMd5)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroContext
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_context` (
							`text_id`,
							`project_id`,
							`context`,
							`context_md5`,
							`file_id`,
							`created`,
							`modified`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTextId) . ',
							' . $objDatabase->SqlVariable($this->intProjectId) . ',
							' . $objDatabase->SqlVariable($this->strContext) . ',
							' . $objDatabase->SqlVariable($this->strContextMd5) . ',
							' . $objDatabase->SqlVariable($this->intFileId) . ',
							' . $objDatabase->SqlVariable($this->strCreated) . ',
							' . $objDatabase->SqlVariable($this->strModified) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intContextId = $objDatabase->InsertId('narro_context', 'context_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_context`
						SET
							`text_id` = ' . $objDatabase->SqlVariable($this->intTextId) . ',
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . ',
							`context` = ' . $objDatabase->SqlVariable($this->strContext) . ',
							`context_md5` = ' . $objDatabase->SqlVariable($this->strContextMd5) . ',
							`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . ',
							`created` = ' . $objDatabase->SqlVariable($this->strCreated) . ',
							`modified` = ' . $objDatabase->SqlVariable($this->strModified) . ',
							`active` = ' . $objDatabase->SqlVariable($this->blnActive) . '
						WHERE
							`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
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
		 * Delete this NarroContext
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroContext with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '');
		}

		/**
		 * Delete all NarroContexts
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`');
		}

		/**
		 * Truncate narro_context table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_context`');
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
				case 'ContextId':
					/**
					 * Gets the value for intContextId (Read-Only PK)
					 * @return integer
					 */
					return $this->intContextId;

				case 'TextId':
					/**
					 * Gets the value for intTextId (Not Null)
					 * @return integer
					 */
					return $this->intTextId;

				case 'ProjectId':
					/**
					 * Gets the value for intProjectId (Not Null)
					 * @return integer
					 */
					return $this->intProjectId;

				case 'Context':
					/**
					 * Gets the value for strContext (Not Null)
					 * @return string
					 */
					return $this->strContext;

				case 'ContextMd5':
					/**
					 * Gets the value for strContextMd5 (Not Null)
					 * @return string
					 */
					return $this->strContextMd5;

				case 'FileId':
					/**
					 * Gets the value for intFileId (Not Null)
					 * @return integer
					 */
					return $this->intFileId;

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

				case 'Active':
					/**
					 * Gets the value for blnActive (Not Null)
					 * @return boolean
					 */
					return $this->blnActive;


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

				case 'Project':
					/**
					 * Gets the value for the NarroProject object referenced by intProjectId (Not Null)
					 * @return NarroProject
					 */
					try {
						if ((!$this->objProject) && (!is_null($this->intProjectId)))
							$this->objProject = NarroProject::Load($this->intProjectId);
						return $this->objProject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextCommentAsContext':
					/**
					 * Gets the value for the private _objNarroContextCommentAsContext (Read-Only)
					 * if set due to an expansion on the narro_context_comment.context_id reverse relationship
					 * @return NarroContextComment
					 */
					return $this->_objNarroContextCommentAsContext;

				case '_NarroContextCommentAsContextArray':
					/**
					 * Gets the value for the private _objNarroContextCommentAsContextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_comment.context_id reverse relationship
					 * @return NarroContextComment[]
					 */
					return (array) $this->_objNarroContextCommentAsContextArray;

				case '_NarroContextInfoAsContext':
					/**
					 * Gets the value for the private _objNarroContextInfoAsContext (Read-Only)
					 * if set due to an expansion on the narro_context_info.context_id reverse relationship
					 * @return NarroContextInfo
					 */
					return $this->_objNarroContextInfoAsContext;

				case '_NarroContextInfoAsContextArray':
					/**
					 * Gets the value for the private _objNarroContextInfoAsContextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context_info.context_id reverse relationship
					 * @return NarroContextInfo[]
					 */
					return (array) $this->_objNarroContextInfoAsContextArray;

				case '_NarroSuggestionVoteAsContext':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsContext (Read-Only)
					 * if set due to an expansion on the narro_suggestion_vote.context_id reverse relationship
					 * @return NarroSuggestionVote
					 */
					return $this->_objNarroSuggestionVoteAsContext;

				case '_NarroSuggestionVoteAsContextArray':
					/**
					 * Gets the value for the private _objNarroSuggestionVoteAsContextArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_suggestion_vote.context_id reverse relationship
					 * @return NarroSuggestionVote[]
					 */
					return (array) $this->_objNarroSuggestionVoteAsContextArray;

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

				case 'ProjectId':
					/**
					 * Sets the value for intProjectId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProject = null;
						return ($this->intProjectId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Context':
					/**
					 * Sets the value for strContext (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContext = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ContextMd5':
					/**
					 * Sets the value for strContextMd5 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContextMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'Active':
					/**
					 * Sets the value for blnActive (Not Null)
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
							throw new QCallerException('Unable to set an unsaved Text for this NarroContext');

						// Update Local Member Variables
						$this->objText = $mixValue;
						$this->intTextId = $mixValue->TextId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Project':
					/**
					 * Sets the value for the NarroProject object referenced by intProjectId (Not Null)
					 * @param NarroProject $mixValue
					 * @return NarroProject
					 */
					if (is_null($mixValue)) {
						$this->intProjectId = null;
						$this->objProject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroProject object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroProject');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED NarroProject object
						if (is_null($mixValue->ProjectId))
							throw new QCallerException('Unable to set an unsaved Project for this NarroContext');

						// Update Local Member Variables
						$this->objProject = $mixValue;
						$this->intProjectId = $mixValue->ProjectId;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved File for this NarroContext');

						// Update Local Member Variables
						$this->objFile = $mixValue;
						$this->intFileId = $mixValue->FileId;

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

			
		
		// Related Objects' Methods for NarroContextCommentAsContext
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextCommentsAsContext as an array of NarroContextComment objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextComment[]
		*/ 
		public function GetNarroContextCommentAsContextArray($objOptionalClauses = null) {
			if ((is_null($this->intContextId)))
				return array();

			try {
				return NarroContextComment::LoadArrayByContextId($this->intContextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextCommentsAsContext
		 * @return int
		*/ 
		public function CountNarroContextCommentsAsContext() {
			if ((is_null($this->intContextId)))
				return 0;

			return NarroContextComment::CountByContextId($this->intContextId);
		}

		/**
		 * Associates a NarroContextCommentAsContext
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function AssociateNarroContextCommentAsContext(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextCommentAsContext on this NarroContext with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . '
			');
		}

		/**
		 * Unassociates a NarroContextCommentAsContext
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function UnassociateNarroContextCommentAsContext(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this NarroContext with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`context_id` = null
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Unassociates all NarroContextCommentsAsContext
		 * @return void
		*/ 
		public function UnassociateAllNarroContextCommentsAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_comment`
				SET
					`context_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextCommentAsContext
		 * @param NarroContextComment $objNarroContextComment
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextCommentAsContext(NarroContextComment $objNarroContextComment) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextComment->CommentId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this NarroContext with an unsaved NarroContextComment.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`comment_id` = ' . $objDatabase->SqlVariable($objNarroContextComment->CommentId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextCommentsAsContext
		 * @return void
		*/ 
		public function DeleteAllNarroContextCommentsAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextCommentAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_comment`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroContextInfoAsContext
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextInfosAsContext as an array of NarroContextInfo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContextInfo[]
		*/ 
		public function GetNarroContextInfoAsContextArray($objOptionalClauses = null) {
			if ((is_null($this->intContextId)))
				return array();

			try {
				return NarroContextInfo::LoadArrayByContextId($this->intContextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextInfosAsContext
		 * @return int
		*/ 
		public function CountNarroContextInfosAsContext() {
			if ((is_null($this->intContextId)))
				return 0;

			return NarroContextInfo::CountByContextId($this->intContextId);
		}

		/**
		 * Associates a NarroContextInfoAsContext
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function AssociateNarroContextInfoAsContext(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextInfoAsContext on this NarroContext with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . '
			');
		}

		/**
		 * Unassociates a NarroContextInfoAsContext
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function UnassociateNarroContextInfoAsContext(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this NarroContext with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`context_id` = null
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Unassociates all NarroContextInfosAsContext
		 * @return void
		*/ 
		public function UnassociateAllNarroContextInfosAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context_info`
				SET
					`context_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextInfoAsContext
		 * @param NarroContextInfo $objNarroContextInfo
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextInfoAsContext(NarroContextInfo $objNarroContextInfo) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroContextInfo->ContextInfoId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this NarroContext with an unsaved NarroContextInfo.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_info_id` = ' . $objDatabase->SqlVariable($objNarroContextInfo->ContextInfoId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextInfosAsContext
		 * @return void
		*/ 
		public function DeleteAllNarroContextInfosAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextInfoAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context_info`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroSuggestionVoteAsContext
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroSuggestionVotesAsContext as an array of NarroSuggestionVote objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/ 
		public function GetNarroSuggestionVoteAsContextArray($objOptionalClauses = null) {
			if ((is_null($this->intContextId)))
				return array();

			try {
				return NarroSuggestionVote::LoadArrayByContextId($this->intContextId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroSuggestionVotesAsContext
		 * @return int
		*/ 
		public function CountNarroSuggestionVotesAsContext() {
			if ((is_null($this->intContextId)))
				return 0;

			return NarroSuggestionVote::CountByContextId($this->intContextId);
		}

		/**
		 * Associates a NarroSuggestionVoteAsContext
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function AssociateNarroSuggestionVoteAsContext(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroSuggestionVoteAsContext on this NarroContext with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . '
			');
		}

		/**
		 * Unassociates a NarroSuggestionVoteAsContext
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function UnassociateNarroSuggestionVoteAsContext(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this NarroContext with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`context_id` = null
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Unassociates all NarroSuggestionVotesAsContext
		 * @return void
		*/ 
		public function UnassociateAllNarroSuggestionVotesAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_suggestion_vote`
				SET
					`context_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes an associated NarroSuggestionVoteAsContext
		 * @param NarroSuggestionVote $objNarroSuggestionVote
		 * @return void
		*/ 
		public function DeleteAssociatedNarroSuggestionVoteAsContext(NarroSuggestionVote $objNarroSuggestionVote) {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this unsaved NarroContext.');
			if ((is_null($objNarroSuggestionVote->SuggestionId)) || (is_null($objNarroSuggestionVote->ContextId)) || (is_null($objNarroSuggestionVote->UserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this NarroContext with an unsaved NarroSuggestionVote.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->SuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->ContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($objNarroSuggestionVote->UserId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}

		/**
		 * Deletes all associated NarroSuggestionVotesAsContext
		 * @return void
		*/ 
		public function DeleteAllNarroSuggestionVotesAsContext() {
			if ((is_null($this->intContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroSuggestionVoteAsContext on this unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_context.context_id
		 * @var integer intContextId
		 */
		protected $intContextId;
		const ContextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.text_id
		 * @var integer intTextId
		 */
		protected $intTextId;
		const TextIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.context
		 * @var string strContext
		 */
		protected $strContext;
		const ContextDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.context_md5
		 * @var string strContextMd5
		 */
		protected $strContextMd5;
		const ContextMd5MaxLength = 255;
		const ContextMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_context.file_id
		 * @var integer intFileId
		 */
		protected $intFileId;
		const FileIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.created
		 * @var string strCreated
		 */
		protected $strCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.modified
		 * @var string strModified
		 */
		protected $strModified;
		const ModifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextCommentAsContext object
		 * (of type NarroContextComment), if this NarroContext object was restored with
		 * an expansion on the narro_context_comment association table.
		 * @var NarroContextComment _objNarroContextCommentAsContext;
		 */
		private $_objNarroContextCommentAsContext;

		/**
		 * Private member variable that stores a reference to an array of NarroContextCommentAsContext objects
		 * (of type NarroContextComment[]), if this NarroContext object was restored with
		 * an ExpandAsArray on the narro_context_comment association table.
		 * @var NarroContextComment[] _objNarroContextCommentAsContextArray;
		 */
		private $_objNarroContextCommentAsContextArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroContextInfoAsContext object
		 * (of type NarroContextInfo), if this NarroContext object was restored with
		 * an expansion on the narro_context_info association table.
		 * @var NarroContextInfo _objNarroContextInfoAsContext;
		 */
		private $_objNarroContextInfoAsContext;

		/**
		 * Private member variable that stores a reference to an array of NarroContextInfoAsContext objects
		 * (of type NarroContextInfo[]), if this NarroContext object was restored with
		 * an ExpandAsArray on the narro_context_info association table.
		 * @var NarroContextInfo[] _objNarroContextInfoAsContextArray;
		 */
		private $_objNarroContextInfoAsContextArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroSuggestionVoteAsContext object
		 * (of type NarroSuggestionVote), if this NarroContext object was restored with
		 * an expansion on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote _objNarroSuggestionVoteAsContext;
		 */
		private $_objNarroSuggestionVoteAsContext;

		/**
		 * Private member variable that stores a reference to an array of NarroSuggestionVoteAsContext objects
		 * (of type NarroSuggestionVote[]), if this NarroContext object was restored with
		 * an ExpandAsArray on the narro_suggestion_vote association table.
		 * @var NarroSuggestionVote[] _objNarroSuggestionVoteAsContextArray;
		 */
		private $_objNarroSuggestionVoteAsContextArray = array();

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
		 * in the database column narro_context.text_id.
		 *
		 * NOTE: Always use the Text property getter to correctly retrieve this NarroText object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroText objText
		 */
		protected $objText;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_context.project_id.
		 *
		 * NOTE: Always use the Project property getter to correctly retrieve this NarroProject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProject objProject
		 */
		protected $objProject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_context.file_id.
		 *
		 * NOTE: Always use the File property getter to correctly retrieve this NarroFile object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroFile objFile
		 */
		protected $objFile;






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroContext"><sequence>';
			$strToReturn .= '<element name="ContextId" type="xsd:int"/>';
			$strToReturn .= '<element name="Text" type="xsd1:NarroText"/>';
			$strToReturn .= '<element name="Project" type="xsd1:NarroProject"/>';
			$strToReturn .= '<element name="Context" type="xsd:string"/>';
			$strToReturn .= '<element name="ContextMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="File" type="xsd1:NarroFile"/>';
			$strToReturn .= '<element name="Created" type="xsd:string"/>';
			$strToReturn .= '<element name="Modified" type="xsd:string"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroContext', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroContext'] = NarroContext::GetSoapComplexTypeXml();
				NarroText::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroProject::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroFile::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroContext::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroContext();
			if (property_exists($objSoapObject, 'ContextId'))
				$objToReturn->intContextId = $objSoapObject->ContextId;
			if ((property_exists($objSoapObject, 'Text')) &&
				($objSoapObject->Text))
				$objToReturn->Text = NarroText::GetObjectFromSoapObject($objSoapObject->Text);
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = NarroProject::GetObjectFromSoapObject($objSoapObject->Project);
			if (property_exists($objSoapObject, 'Context'))
				$objToReturn->strContext = $objSoapObject->Context;
			if (property_exists($objSoapObject, 'ContextMd5'))
				$objToReturn->strContextMd5 = $objSoapObject->ContextMd5;
			if ((property_exists($objSoapObject, 'File')) &&
				($objSoapObject->File))
				$objToReturn->File = NarroFile::GetObjectFromSoapObject($objSoapObject->File);
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->strCreated = $objSoapObject->Created;
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->strModified = $objSoapObject->Modified;
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
				array_push($objArrayToReturn, NarroContext::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objText)
				$objObject->objText = NarroText::GetSoapObjectFromObject($objObject->objText, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTextId = null;
			if ($objObject->objProject)
				$objObject->objProject = NarroProject::GetSoapObjectFromObject($objObject->objProject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectId = null;
			if ($objObject->objFile)
				$objObject->objFile = NarroFile::GetSoapObjectFromObject($objObject->objFile, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFileId = null;
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroContext extends QQNode {
		protected $strTableName = 'narro_context';
		protected $strPrimaryKey = 'context_id';
		protected $strClassName = 'NarroContext';
		public function __get($strName) {
			switch ($strName) {
				case 'ContextId':
					return new QQNode('context_id', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'Context':
					return new QQNode('context', 'string', $this);
				case 'ContextMd5':
					return new QQNode('context_md5', 'string', $this);
				case 'FileId':
					return new QQNode('file_id', 'integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'Active':
					return new QQNode('active', 'boolean', $this);
				case 'NarroContextCommentAsContext':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentascontext', 'reverse_reference', 'context_id');
				case 'NarroContextInfoAsContext':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoascontext', 'reverse_reference', 'context_id');
				case 'NarroSuggestionVoteAsContext':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteascontext', 'reverse_reference', 'context_id');

				case '_PrimaryKeyNode':
					return new QQNode('context_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroContext extends QQReverseReferenceNode {
		protected $strTableName = 'narro_context';
		protected $strPrimaryKey = 'context_id';
		protected $strClassName = 'NarroContext';
		public function __get($strName) {
			switch ($strName) {
				case 'ContextId':
					return new QQNode('context_id', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'Context':
					return new QQNode('context', 'string', $this);
				case 'ContextMd5':
					return new QQNode('context_md5', 'string', $this);
				case 'FileId':
					return new QQNode('file_id', 'integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'Active':
					return new QQNode('active', 'boolean', $this);
				case 'NarroContextCommentAsContext':
					return new QQReverseReferenceNodeNarroContextComment($this, 'narrocontextcommentascontext', 'reverse_reference', 'context_id');
				case 'NarroContextInfoAsContext':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoascontext', 'reverse_reference', 'context_id');
				case 'NarroSuggestionVoteAsContext':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteascontext', 'reverse_reference', 'context_id');

				case '_PrimaryKeyNode':
					return new QQNode('context_id', 'integer', $this);
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