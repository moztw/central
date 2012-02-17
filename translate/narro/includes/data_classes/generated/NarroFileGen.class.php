<?php
	/**
	 * The abstract NarroFileGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroFile subclass which
	 * extends this NarroFileGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroFile class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroFileGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroFile from PK Info
		 * @param integer $intFileId
		 * @return NarroFile
		 */
		public static function Load($intFileId) {
			// Use QuerySingle to Perform the Query
			return NarroFile::QuerySingle(
				QQ::Equal(QQN::NarroFile()->FileId, $intFileId)
			);
		}

		/**
		 * Load all NarroFiles
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroFile::QueryArray to perform the LoadAll query
			try {
				return NarroFile::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroFiles
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroFile::QueryCount to perform the CountAll query
			return NarroFile::QueryCount(QQ::All());
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
			$objDatabase = NarroFile::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroFile-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_file');
			NarroFile::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_file` AS `narro_file`');

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
		 * Static Qcodo Query method to query for a single NarroFile object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroFile the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroFile object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroFile::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroFile objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroFile[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroFile::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroFile objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroFile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroFile::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_file_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroFile-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroFile::GetSelectFields($objQueryBuilder);
				NarroFile::GetFromFields($objQueryBuilder);

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
			return NarroFile::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroFile
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_file`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`file_id` AS ' . $strAliasPrefix . 'file_id`');
			$objBuilder->AddSelectItem($strTableName . '.`file_name` AS ' . $strAliasPrefix . 'file_name`');
			$objBuilder->AddSelectItem($strTableName . '.`file_path` AS ' . $strAliasPrefix . 'file_path`');
			$objBuilder->AddSelectItem($strTableName . '.`file_md5` AS ' . $strAliasPrefix . 'file_md5`');
			$objBuilder->AddSelectItem($strTableName . '.`parent_id` AS ' . $strAliasPrefix . 'parent_id`');
			$objBuilder->AddSelectItem($strTableName . '.`type_id` AS ' . $strAliasPrefix . 'type_id`');
			$objBuilder->AddSelectItem($strTableName . '.`project_id` AS ' . $strAliasPrefix . 'project_id`');
			$objBuilder->AddSelectItem($strTableName . '.`active` AS ' . $strAliasPrefix . 'active`');
			$objBuilder->AddSelectItem($strTableName . '.`created` AS ' . $strAliasPrefix . 'created`');
			$objBuilder->AddSelectItem($strTableName . '.`modified` AS ' . $strAliasPrefix . 'modified`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroFile from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroFile::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroFile
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intFileId == $objDbRow->GetColumn($strAliasPrefix . 'file_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_file__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextasfile__context_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextasfile__context_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextAsFileArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextAsFileArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasfile__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextAsFileArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextAsFileArray, NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasfile__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'childnarrofile__file_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'childnarrofile__file_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objChildNarroFileArray)) {
						$objPreviousChildItem = $objPreviousItem->_objChildNarroFileArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childnarrofile__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objChildNarroFileArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objChildNarroFileArray, NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childnarrofile__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrofileprogressasfile__file_progress_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrofileprogressasfile__file_progress_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroFileProgressAsFileArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroFileProgressAsFileArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressasfile__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroFileProgressAsFileArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroFileProgressAsFileArray, NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressasfile__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_file__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroFile object
			$objToReturn = new NarroFile();
			$objToReturn->__blnRestored = true;

			$objToReturn->intFileId = $objDbRow->GetColumn($strAliasPrefix . 'file_id', 'Integer');
			$objToReturn->strFileName = $objDbRow->GetColumn($strAliasPrefix . 'file_name', 'VarChar');
			$objToReturn->strFilePath = $objDbRow->GetColumn($strAliasPrefix . 'file_path', 'VarChar');
			$objToReturn->strFileMd5 = $objDbRow->GetColumn($strAliasPrefix . 'file_md5', 'VarChar');
			$objToReturn->intParentId = $objDbRow->GetColumn($strAliasPrefix . 'parent_id', 'Integer');
			$objToReturn->intTypeId = $objDbRow->GetColumn($strAliasPrefix . 'type_id', 'Integer');
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasPrefix . 'project_id', 'Integer');
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasPrefix . 'active', 'Bit');
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
				$strAliasPrefix = 'narro_file__';

			// Check for Parent Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'parent_id__file_id')))
				$objToReturn->objParent = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parent_id__', $strExpandAsArrayNodes);

			// Check for Project Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'project_id__project_id')))
				$objToReturn->objProject = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $strExpandAsArrayNodes);




			// Check for NarroContextAsFile Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextasfile__context_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextasfile__context_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextAsFileArray, NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasfile__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextAsFile = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasfile__', $strExpandAsArrayNodes);
			}

			// Check for ChildNarroFile Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'childnarrofile__file_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'childnarrofile__file_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objChildNarroFileArray, NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childnarrofile__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objChildNarroFile = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childnarrofile__', $strExpandAsArrayNodes);
			}

			// Check for NarroFileProgressAsFile Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrofileprogressasfile__file_progress_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrofileprogressasfile__file_progress_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroFileProgressAsFileArray, NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressasfile__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroFileProgressAsFile = NarroFileProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileprogressasfile__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroFiles from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroFile[]
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
					$objItem = NarroFile::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroFile::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroFile object,
		 * by FileId Index(es)
		 * @param integer $intFileId
		 * @return NarroFile
		*/
		public static function LoadByFileId($intFileId) {
			return NarroFile::QuerySingle(
				QQ::Equal(QQN::NarroFile()->FileId, $intFileId)
			);
		}
			
		/**
		 * Load a single NarroFile object,
		 * by FileName, ParentId Index(es)
		 * @param string $strFileName
		 * @param integer $intParentId
		 * @return NarroFile
		*/
		public static function LoadByFileNameParentId($strFileName, $intParentId) {
			return NarroFile::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroFile()->FileName, $strFileName),
				QQ::Equal(QQN::NarroFile()->ParentId, $intParentId)
				)
			);
		}
			
		/**
		 * Load an array of NarroFile objects,
		 * by TypeId Index(es)
		 * @param integer $intTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/
		public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
			// Call NarroFile::QueryArray to perform the LoadArrayByTypeId query
			try {
				return NarroFile::QueryArray(
					QQ::Equal(QQN::NarroFile()->TypeId, $intTypeId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFiles
		 * by TypeId Index(es)
		 * @param integer $intTypeId
		 * @return int
		*/
		public static function CountByTypeId($intTypeId) {
			// Call NarroFile::QueryCount to perform the CountByTypeId query
			return NarroFile::QueryCount(
				QQ::Equal(QQN::NarroFile()->TypeId, $intTypeId)
			);
		}
			
		/**
		 * Load an array of NarroFile objects,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/
		public static function LoadArrayByProjectId($intProjectId, $objOptionalClauses = null) {
			// Call NarroFile::QueryArray to perform the LoadArrayByProjectId query
			try {
				return NarroFile::QueryArray(
					QQ::Equal(QQN::NarroFile()->ProjectId, $intProjectId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFiles
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectId($intProjectId) {
			// Call NarroFile::QueryCount to perform the CountByProjectId query
			return NarroFile::QueryCount(
				QQ::Equal(QQN::NarroFile()->ProjectId, $intProjectId)
			);
		}
			
		/**
		 * Load an array of NarroFile objects,
		 * by ParentId Index(es)
		 * @param integer $intParentId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/
		public static function LoadArrayByParentId($intParentId, $objOptionalClauses = null) {
			// Call NarroFile::QueryArray to perform the LoadArrayByParentId query
			try {
				return NarroFile::QueryArray(
					QQ::Equal(QQN::NarroFile()->ParentId, $intParentId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroFiles
		 * by ParentId Index(es)
		 * @param integer $intParentId
		 * @return int
		*/
		public static function CountByParentId($intParentId) {
			// Call NarroFile::QueryCount to perform the CountByParentId query
			return NarroFile::QueryCount(
				QQ::Equal(QQN::NarroFile()->ParentId, $intParentId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroFile
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_file` (
							`file_name`,
							`file_path`,
							`file_md5`,
							`parent_id`,
							`type_id`,
							`project_id`,
							`active`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFileName) . ',
							' . $objDatabase->SqlVariable($this->strFilePath) . ',
							' . $objDatabase->SqlVariable($this->strFileMd5) . ',
							' . $objDatabase->SqlVariable($this->intParentId) . ',
							' . $objDatabase->SqlVariable($this->intTypeId) . ',
							' . $objDatabase->SqlVariable($this->intProjectId) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . ',
							' . $objDatabase->SqlVariable($this->strCreated) . ',
							' . $objDatabase->SqlVariable($this->strModified) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intFileId = $objDatabase->InsertId('narro_file', 'file_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_file`
						SET
							`file_name` = ' . $objDatabase->SqlVariable($this->strFileName) . ',
							`file_path` = ' . $objDatabase->SqlVariable($this->strFilePath) . ',
							`file_md5` = ' . $objDatabase->SqlVariable($this->strFileMd5) . ',
							`parent_id` = ' . $objDatabase->SqlVariable($this->intParentId) . ',
							`type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . ',
							`active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
							`created` = ' . $objDatabase->SqlVariable($this->strCreated) . ',
							`modified` = ' . $objDatabase->SqlVariable($this->strModified) . '
						WHERE
							`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
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
		 * Delete this NarroFile
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroFile with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '');
		}

		/**
		 * Delete all NarroFiles
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`');
		}

		/**
		 * Truncate narro_file table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_file`');
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
				case 'FileId':
					/**
					 * Gets the value for intFileId (Read-Only PK)
					 * @return integer
					 */
					return $this->intFileId;

				case 'FileName':
					/**
					 * Gets the value for strFileName (Not Null)
					 * @return string
					 */
					return $this->strFileName;

				case 'FilePath':
					/**
					 * Gets the value for strFilePath (Not Null)
					 * @return string
					 */
					return $this->strFilePath;

				case 'FileMd5':
					/**
					 * Gets the value for strFileMd5 
					 * @return string
					 */
					return $this->strFileMd5;

				case 'ParentId':
					/**
					 * Gets the value for intParentId 
					 * @return integer
					 */
					return $this->intParentId;

				case 'TypeId':
					/**
					 * Gets the value for intTypeId (Not Null)
					 * @return integer
					 */
					return $this->intTypeId;

				case 'ProjectId':
					/**
					 * Gets the value for intProjectId (Not Null)
					 * @return integer
					 */
					return $this->intProjectId;

				case 'Active':
					/**
					 * Gets the value for blnActive (Not Null)
					 * @return boolean
					 */
					return $this->blnActive;

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
				case 'Parent':
					/**
					 * Gets the value for the NarroFile object referenced by intParentId 
					 * @return NarroFile
					 */
					try {
						if ((!$this->objParent) && (!is_null($this->intParentId)))
							$this->objParent = NarroFile::Load($this->intParentId);
						return $this->objParent;
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


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextAsFile':
					/**
					 * Gets the value for the private _objNarroContextAsFile (Read-Only)
					 * if set due to an expansion on the narro_context.file_id reverse relationship
					 * @return NarroContext
					 */
					return $this->_objNarroContextAsFile;

				case '_NarroContextAsFileArray':
					/**
					 * Gets the value for the private _objNarroContextAsFileArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context.file_id reverse relationship
					 * @return NarroContext[]
					 */
					return (array) $this->_objNarroContextAsFileArray;

				case '_ChildNarroFile':
					/**
					 * Gets the value for the private _objChildNarroFile (Read-Only)
					 * if set due to an expansion on the narro_file.parent_id reverse relationship
					 * @return NarroFile
					 */
					return $this->_objChildNarroFile;

				case '_ChildNarroFileArray':
					/**
					 * Gets the value for the private _objChildNarroFileArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_file.parent_id reverse relationship
					 * @return NarroFile[]
					 */
					return (array) $this->_objChildNarroFileArray;

				case '_NarroFileProgressAsFile':
					/**
					 * Gets the value for the private _objNarroFileProgressAsFile (Read-Only)
					 * if set due to an expansion on the narro_file_progress.file_id reverse relationship
					 * @return NarroFileProgress
					 */
					return $this->_objNarroFileProgressAsFile;

				case '_NarroFileProgressAsFileArray':
					/**
					 * Gets the value for the private _objNarroFileProgressAsFileArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_file_progress.file_id reverse relationship
					 * @return NarroFileProgress[]
					 */
					return (array) $this->_objNarroFileProgressAsFileArray;

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
				case 'FileName':
					/**
					 * Sets the value for strFileName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFileName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FilePath':
					/**
					 * Sets the value for strFilePath (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFilePath = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FileMd5':
					/**
					 * Sets the value for strFileMd5 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFileMd5 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParentId':
					/**
					 * Sets the value for intParentId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParent = null;
						return ($this->intParentId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TypeId':
					/**
					 * Sets the value for intTypeId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTypeId = QType::Cast($mixValue, QType::Integer));
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
				case 'Parent':
					/**
					 * Sets the value for the NarroFile object referenced by intParentId 
					 * @param NarroFile $mixValue
					 * @return NarroFile
					 */
					if (is_null($mixValue)) {
						$this->intParentId = null;
						$this->objParent = null;
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
							throw new QCallerException('Unable to set an unsaved Parent for this NarroFile');

						// Update Local Member Variables
						$this->objParent = $mixValue;
						$this->intParentId = $mixValue->FileId;

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
							throw new QCallerException('Unable to set an unsaved Project for this NarroFile');

						// Update Local Member Variables
						$this->objProject = $mixValue;
						$this->intProjectId = $mixValue->ProjectId;

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

			
		
		// Related Objects' Methods for NarroContextAsFile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextsAsFile as an array of NarroContext objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/ 
		public function GetNarroContextAsFileArray($objOptionalClauses = null) {
			if ((is_null($this->intFileId)))
				return array();

			try {
				return NarroContext::LoadArrayByFileId($this->intFileId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextsAsFile
		 * @return int
		*/ 
		public function CountNarroContextsAsFile() {
			if ((is_null($this->intFileId)))
				return 0;

			return NarroContext::CountByFileId($this->intFileId);
		}

		/**
		 * Associates a NarroContextAsFile
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function AssociateNarroContextAsFile(NarroContext $objNarroContext) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsFile on this NarroFile with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . '
			');
		}

		/**
		 * Unassociates a NarroContextAsFile
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function UnassociateNarroContextAsFile(NarroContext $objNarroContext) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this NarroFile with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`file_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Unassociates all NarroContextsAsFile
		 * @return void
		*/ 
		public function UnassociateAllNarroContextsAsFile() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`file_id` = null
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextAsFile
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextAsFile(NarroContext $objNarroContext) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this NarroFile with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextsAsFile
		 * @return void
		*/ 
		public function DeleteAllNarroContextsAsFile() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

			
		
		// Related Objects' Methods for ChildNarroFile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ChildNarroFiles as an array of NarroFile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/ 
		public function GetChildNarroFileArray($objOptionalClauses = null) {
			if ((is_null($this->intFileId)))
				return array();

			try {
				return NarroFile::LoadArrayByParentId($this->intFileId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ChildNarroFiles
		 * @return int
		*/ 
		public function CountChildNarroFiles() {
			if ((is_null($this->intFileId)))
				return 0;

			return NarroFile::CountByParentId($this->intFileId);
		}

		/**
		 * Associates a ChildNarroFile
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function AssociateChildNarroFile(NarroFile $objNarroFile) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildNarroFile on this unsaved NarroFile.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildNarroFile on this NarroFile with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`parent_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . '
			');
		}

		/**
		 * Unassociates a ChildNarroFile
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function UnassociateChildNarroFile(NarroFile $objNarroFile) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this unsaved NarroFile.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this NarroFile with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`parent_id` = null
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`parent_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Unassociates all ChildNarroFiles
		 * @return void
		*/ 
		public function UnassociateAllChildNarroFiles() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`parent_id` = null
				WHERE
					`parent_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes an associated ChildNarroFile
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function DeleteAssociatedChildNarroFile(NarroFile $objNarroFile) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this unsaved NarroFile.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this NarroFile with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`parent_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes all associated ChildNarroFiles
		 * @return void
		*/ 
		public function DeleteAllChildNarroFiles() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildNarroFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`parent_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroFileProgressAsFile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroFileProgressesAsFile as an array of NarroFileProgress objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFileProgress[]
		*/ 
		public function GetNarroFileProgressAsFileArray($objOptionalClauses = null) {
			if ((is_null($this->intFileId)))
				return array();

			try {
				return NarroFileProgress::LoadArrayByFileId($this->intFileId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroFileProgressesAsFile
		 * @return int
		*/ 
		public function CountNarroFileProgressesAsFile() {
			if ((is_null($this->intFileId)))
				return 0;

			return NarroFileProgress::CountByFileId($this->intFileId);
		}

		/**
		 * Associates a NarroFileProgressAsFile
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/ 
		public function AssociateNarroFileProgressAsFile(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileProgressAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileProgressAsFile on this NarroFile with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . '
			');
		}

		/**
		 * Unassociates a NarroFileProgressAsFile
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/ 
		public function UnassociateNarroFileProgressAsFile(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this NarroFile with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`file_id` = null
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . ' AND
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Unassociates all NarroFileProgressesAsFile
		 * @return void
		*/ 
		public function UnassociateAllNarroFileProgressesAsFile() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file_progress`
				SET
					`file_id` = null
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes an associated NarroFileProgressAsFile
		 * @param NarroFileProgress $objNarroFileProgress
		 * @return void
		*/ 
		public function DeleteAssociatedNarroFileProgressAsFile(NarroFileProgress $objNarroFileProgress) {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this unsaved NarroFile.');
			if ((is_null($objNarroFileProgress->FileProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this NarroFile with an unsaved NarroFileProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`
				WHERE
					`file_progress_id` = ' . $objDatabase->SqlVariable($objNarroFileProgress->FileProgressId) . ' AND
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}

		/**
		 * Deletes all associated NarroFileProgressesAsFile
		 * @return void
		*/ 
		public function DeleteAllNarroFileProgressesAsFile() {
			if ((is_null($this->intFileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileProgressAsFile on this unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroFile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file_progress`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($this->intFileId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_file.file_id
		 * @var integer intFileId
		 */
		protected $intFileId;
		const FileIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.file_name
		 * @var string strFileName
		 */
		protected $strFileName;
		const FileNameMaxLength = 255;
		const FileNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.file_path
		 * @var string strFilePath
		 */
		protected $strFilePath;
		const FilePathMaxLength = 255;
		const FilePathDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.file_md5
		 * @var string strFileMd5
		 */
		protected $strFileMd5;
		const FileMd5MaxLength = 32;
		const FileMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_file.parent_id
		 * @var integer intParentId
		 */
		protected $intParentId;
		const ParentIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.type_id
		 * @var integer intTypeId
		 */
		protected $intTypeId;
		const TypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.created
		 * @var string strCreated
		 */
		protected $strCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_file.modified
		 * @var string strModified
		 */
		protected $strModified;
		const ModifiedDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextAsFile object
		 * (of type NarroContext), if this NarroFile object was restored with
		 * an expansion on the narro_context association table.
		 * @var NarroContext _objNarroContextAsFile;
		 */
		private $_objNarroContextAsFile;

		/**
		 * Private member variable that stores a reference to an array of NarroContextAsFile objects
		 * (of type NarroContext[]), if this NarroFile object was restored with
		 * an ExpandAsArray on the narro_context association table.
		 * @var NarroContext[] _objNarroContextAsFileArray;
		 */
		private $_objNarroContextAsFileArray = array();

		/**
		 * Private member variable that stores a reference to a single ChildNarroFile object
		 * (of type NarroFile), if this NarroFile object was restored with
		 * an expansion on the narro_file association table.
		 * @var NarroFile _objChildNarroFile;
		 */
		private $_objChildNarroFile;

		/**
		 * Private member variable that stores a reference to an array of ChildNarroFile objects
		 * (of type NarroFile[]), if this NarroFile object was restored with
		 * an ExpandAsArray on the narro_file association table.
		 * @var NarroFile[] _objChildNarroFileArray;
		 */
		private $_objChildNarroFileArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroFileProgressAsFile object
		 * (of type NarroFileProgress), if this NarroFile object was restored with
		 * an expansion on the narro_file_progress association table.
		 * @var NarroFileProgress _objNarroFileProgressAsFile;
		 */
		private $_objNarroFileProgressAsFile;

		/**
		 * Private member variable that stores a reference to an array of NarroFileProgressAsFile objects
		 * (of type NarroFileProgress[]), if this NarroFile object was restored with
		 * an ExpandAsArray on the narro_file_progress association table.
		 * @var NarroFileProgress[] _objNarroFileProgressAsFileArray;
		 */
		private $_objNarroFileProgressAsFileArray = array();

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
		 * in the database column narro_file.parent_id.
		 *
		 * NOTE: Always use the Parent property getter to correctly retrieve this NarroFile object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroFile objParent
		 */
		protected $objParent;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_file.project_id.
		 *
		 * NOTE: Always use the Project property getter to correctly retrieve this NarroProject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProject objProject
		 */
		protected $objProject;






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroFile"><sequence>';
			$strToReturn .= '<element name="FileId" type="xsd:int"/>';
			$strToReturn .= '<element name="FileName" type="xsd:string"/>';
			$strToReturn .= '<element name="FilePath" type="xsd:string"/>';
			$strToReturn .= '<element name="FileMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="Parent" type="xsd1:NarroFile"/>';
			$strToReturn .= '<element name="TypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="Project" type="xsd1:NarroProject"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Created" type="xsd:string"/>';
			$strToReturn .= '<element name="Modified" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroFile', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroFile'] = NarroFile::GetSoapComplexTypeXml();
				NarroFile::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroProject::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroFile::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroFile();
			if (property_exists($objSoapObject, 'FileId'))
				$objToReturn->intFileId = $objSoapObject->FileId;
			if (property_exists($objSoapObject, 'FileName'))
				$objToReturn->strFileName = $objSoapObject->FileName;
			if (property_exists($objSoapObject, 'FilePath'))
				$objToReturn->strFilePath = $objSoapObject->FilePath;
			if (property_exists($objSoapObject, 'FileMd5'))
				$objToReturn->strFileMd5 = $objSoapObject->FileMd5;
			if ((property_exists($objSoapObject, 'Parent')) &&
				($objSoapObject->Parent))
				$objToReturn->Parent = NarroFile::GetObjectFromSoapObject($objSoapObject->Parent);
			if (property_exists($objSoapObject, 'TypeId'))
				$objToReturn->intTypeId = $objSoapObject->TypeId;
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = NarroProject::GetObjectFromSoapObject($objSoapObject->Project);
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
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
				array_push($objArrayToReturn, NarroFile::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParent)
				$objObject->objParent = NarroFile::GetSoapObjectFromObject($objObject->objParent, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParentId = null;
			if ($objObject->objProject)
				$objObject->objProject = NarroProject::GetSoapObjectFromObject($objObject->objProject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectId = null;
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroFile extends QQNode {
		protected $strTableName = 'narro_file';
		protected $strPrimaryKey = 'file_id';
		protected $strClassName = 'NarroFile';
		public function __get($strName) {
			switch ($strName) {
				case 'FileId':
					return new QQNode('file_id', 'integer', $this);
				case 'FileName':
					return new QQNode('file_name', 'string', $this);
				case 'FilePath':
					return new QQNode('file_path', 'string', $this);
				case 'FileMd5':
					return new QQNode('file_md5', 'string', $this);
				case 'ParentId':
					return new QQNode('parent_id', 'integer', $this);
				case 'Parent':
					return new QQNodeNarroFile('parent_id', 'integer', $this);
				case 'TypeId':
					return new QQNode('type_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'Active':
					return new QQNode('active', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'NarroContextAsFile':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasfile', 'reverse_reference', 'file_id');
				case 'ChildNarroFile':
					return new QQReverseReferenceNodeNarroFile($this, 'childnarrofile', 'reverse_reference', 'parent_id');
				case 'NarroFileProgressAsFile':
					return new QQReverseReferenceNodeNarroFileProgress($this, 'narrofileprogressasfile', 'reverse_reference', 'file_id');

				case '_PrimaryKeyNode':
					return new QQNode('file_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroFile extends QQReverseReferenceNode {
		protected $strTableName = 'narro_file';
		protected $strPrimaryKey = 'file_id';
		protected $strClassName = 'NarroFile';
		public function __get($strName) {
			switch ($strName) {
				case 'FileId':
					return new QQNode('file_id', 'integer', $this);
				case 'FileName':
					return new QQNode('file_name', 'string', $this);
				case 'FilePath':
					return new QQNode('file_path', 'string', $this);
				case 'FileMd5':
					return new QQNode('file_md5', 'string', $this);
				case 'ParentId':
					return new QQNode('parent_id', 'integer', $this);
				case 'Parent':
					return new QQNodeNarroFile('parent_id', 'integer', $this);
				case 'TypeId':
					return new QQNode('type_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'Active':
					return new QQNode('active', 'boolean', $this);
				case 'Created':
					return new QQNode('created', 'string', $this);
				case 'Modified':
					return new QQNode('modified', 'string', $this);
				case 'NarroContextAsFile':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasfile', 'reverse_reference', 'file_id');
				case 'ChildNarroFile':
					return new QQReverseReferenceNodeNarroFile($this, 'childnarrofile', 'reverse_reference', 'parent_id');
				case 'NarroFileProgressAsFile':
					return new QQReverseReferenceNodeNarroFileProgress($this, 'narrofileprogressasfile', 'reverse_reference', 'file_id');

				case '_PrimaryKeyNode':
					return new QQNode('file_id', 'integer', $this);
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