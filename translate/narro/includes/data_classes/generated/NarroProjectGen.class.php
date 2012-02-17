<?php
	/**
	 * The abstract NarroProjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroProject subclass which
	 * extends this NarroProjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroProject class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroProjectGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroProject from PK Info
		 * @param integer $intProjectId
		 * @return NarroProject
		 */
		public static function Load($intProjectId) {
			// Use QuerySingle to Perform the Query
			return NarroProject::QuerySingle(
				QQ::Equal(QQN::NarroProject()->ProjectId, $intProjectId)
			);
		}

		/**
		 * Load all NarroProjects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadAll query
			try {
				return NarroProject::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroProjects
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroProject::QueryCount to perform the CountAll query
			return NarroProject::QueryCount(QQ::All());
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
			$objDatabase = NarroProject::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroProject-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_project');
			NarroProject::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_project` AS `narro_project`');

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
		 * Static Qcodo Query method to query for a single NarroProject object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProject the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroProject object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProject::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroProject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProject[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroProject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroProject::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_project_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroProject-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroProject::GetSelectFields($objQueryBuilder);
				NarroProject::GetFromFields($objQueryBuilder);

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
			return NarroProject::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroProject
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_project`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`project_id` AS ' . $strAliasPrefix . 'project_id`');
			$objBuilder->AddSelectItem($strTableName . '.`project_category_id` AS ' . $strAliasPrefix . 'project_category_id`');
			$objBuilder->AddSelectItem($strTableName . '.`project_name` AS ' . $strAliasPrefix . 'project_name`');
			$objBuilder->AddSelectItem($strTableName . '.`project_type` AS ' . $strAliasPrefix . 'project_type`');
			$objBuilder->AddSelectItem($strTableName . '.`project_description` AS ' . $strAliasPrefix . 'project_description`');
			$objBuilder->AddSelectItem($strTableName . '.`active` AS ' . $strAliasPrefix . 'active`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroProject from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroProject::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroProject
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intProjectId == $objDbRow->GetColumn($strAliasPrefix . 'project_id', 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'narro_project__';


				if ((array_key_exists($strAliasPrefix . 'narrocontextasproject__context_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextasproject__context_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextAsProjectArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroContextAsProjectArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroContextAsProjectArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroContextAsProjectArray, NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrofileasproject__file_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrofileasproject__file_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroFileAsProjectArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroFileAsProjectArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroFileAsProjectArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroFileAsProjectArray, NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narroprojectprogressasproject__project_progress_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narroprojectprogressasproject__project_progress_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroProjectProgressAsProjectArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroProjectProgressAsProjectArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroProjectProgressAsProjectArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroProjectProgressAsProjectArray, NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserpermissionasproject__user_permission_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionasproject__user_permission_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserPermissionAsProjectArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserPermissionAsProjectArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasproject__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserPermissionAsProjectArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserPermissionAsProjectArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasproject__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				if ((array_key_exists($strAliasPrefix . 'narrouserroleasproject__user_role_id', $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasproject__user_role_id')))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsProjectArray)) {
						$objPreviousChildItem = $objPreviousItem->_objNarroUserRoleAsProjectArray[$intPreviousChildItemCount - 1];
						$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes, $objPreviousChildItem);
						if ($objChildItem)
							array_push($objPreviousItem->_objNarroUserRoleAsProjectArray, $objChildItem);
					} else
						array_push($objPreviousItem->_objNarroUserRoleAsProjectArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes));
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'narro_project__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the NarroProject object
			$objToReturn = new NarroProject();
			$objToReturn->__blnRestored = true;

			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasPrefix . 'project_id', 'Integer');
			$objToReturn->intProjectCategoryId = $objDbRow->GetColumn($strAliasPrefix . 'project_category_id', 'Integer');
			$objToReturn->strProjectName = $objDbRow->GetColumn($strAliasPrefix . 'project_name', 'VarChar');
			$objToReturn->intProjectType = $objDbRow->GetColumn($strAliasPrefix . 'project_type', 'Integer');
			$objToReturn->strProjectDescription = $objDbRow->GetColumn($strAliasPrefix . 'project_description', 'VarChar');
			$objToReturn->intActive = $objDbRow->GetColumn($strAliasPrefix . 'active', 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_project__';

			// Check for ProjectCategory Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'project_category_id__project_category_id')))
				$objToReturn->objProjectCategory = NarroProjectCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_category_id__', $strExpandAsArrayNodes);




			// Check for NarroContextAsProject Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrocontextasproject__context_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrocontextasproject__context_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroContextAsProjectArray, NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroContextAsProject = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextasproject__', $strExpandAsArrayNodes);
			}

			// Check for NarroFileAsProject Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrofileasproject__file_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrofileasproject__file_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroFileAsProjectArray, NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroFileAsProject = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrofileasproject__', $strExpandAsArrayNodes);
			}

			// Check for NarroProjectProgressAsProject Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narroprojectprogressasproject__project_progress_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narroprojectprogressasproject__project_progress_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroProjectProgressAsProjectArray, NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroProjectProgressAsProject = NarroProjectProgress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narroprojectprogressasproject__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserPermissionAsProject Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserpermissionasproject__user_permission_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserpermissionasproject__user_permission_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserPermissionAsProjectArray, NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasproject__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserPermissionAsProject = NarroUserPermission::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserpermissionasproject__', $strExpandAsArrayNodes);
			}

			// Check for NarroUserRoleAsProject Virtual Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'narrouserroleasproject__user_role_id'))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAliasPrefix . 'narrouserroleasproject__user_role_id', $strExpandAsArrayNodes)))
					array_push($objToReturn->_objNarroUserRoleAsProjectArray, NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes));
				else
					$objToReturn->_objNarroUserRoleAsProject = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasproject__', $strExpandAsArrayNodes);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroProjects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroProject[]
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
					$objItem = NarroProject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroProject::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroProject object,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return NarroProject
		*/
		public static function LoadByProjectId($intProjectId) {
			return NarroProject::QuerySingle(
				QQ::Equal(QQN::NarroProject()->ProjectId, $intProjectId)
			);
		}
			
		/**
		 * Load a single NarroProject object,
		 * by ProjectName Index(es)
		 * @param string $strProjectName
		 * @return NarroProject
		*/
		public static function LoadByProjectName($strProjectName) {
			return NarroProject::QuerySingle(
				QQ::Equal(QQN::NarroProject()->ProjectName, $strProjectName)
			);
		}
			
		/**
		 * Load an array of NarroProject objects,
		 * by ProjectType Index(es)
		 * @param integer $intProjectType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public static function LoadArrayByProjectType($intProjectType, $objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadArrayByProjectType query
			try {
				return NarroProject::QueryArray(
					QQ::Equal(QQN::NarroProject()->ProjectType, $intProjectType),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjects
		 * by ProjectType Index(es)
		 * @param integer $intProjectType
		 * @return int
		*/
		public static function CountByProjectType($intProjectType) {
			// Call NarroProject::QueryCount to perform the CountByProjectType query
			return NarroProject::QueryCount(
				QQ::Equal(QQN::NarroProject()->ProjectType, $intProjectType)
			);
		}
			
		/**
		 * Load an array of NarroProject objects,
		 * by ProjectCategoryId Index(es)
		 * @param integer $intProjectCategoryId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProject[]
		*/
		public static function LoadArrayByProjectCategoryId($intProjectCategoryId, $objOptionalClauses = null) {
			// Call NarroProject::QueryArray to perform the LoadArrayByProjectCategoryId query
			try {
				return NarroProject::QueryArray(
					QQ::Equal(QQN::NarroProject()->ProjectCategoryId, $intProjectCategoryId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjects
		 * by ProjectCategoryId Index(es)
		 * @param integer $intProjectCategoryId
		 * @return int
		*/
		public static function CountByProjectCategoryId($intProjectCategoryId) {
			// Call NarroProject::QueryCount to perform the CountByProjectCategoryId query
			return NarroProject::QueryCount(
				QQ::Equal(QQN::NarroProject()->ProjectCategoryId, $intProjectCategoryId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroProject
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_project` (
							`project_category_id`,
							`project_name`,
							`project_type`,
							`project_description`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intProjectCategoryId) . ',
							' . $objDatabase->SqlVariable($this->strProjectName) . ',
							' . $objDatabase->SqlVariable($this->intProjectType) . ',
							' . $objDatabase->SqlVariable($this->strProjectDescription) . ',
							' . $objDatabase->SqlVariable($this->intActive) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intProjectId = $objDatabase->InsertId('narro_project', 'project_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_project`
						SET
							`project_category_id` = ' . $objDatabase->SqlVariable($this->intProjectCategoryId) . ',
							`project_name` = ' . $objDatabase->SqlVariable($this->strProjectName) . ',
							`project_type` = ' . $objDatabase->SqlVariable($this->intProjectType) . ',
							`project_description` = ' . $objDatabase->SqlVariable($this->strProjectDescription) . ',
							`active` = ' . $objDatabase->SqlVariable($this->intActive) . '
						WHERE
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
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
		 * Delete this NarroProject
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroProject with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '');
		}

		/**
		 * Delete all NarroProjects
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project`');
		}

		/**
		 * Truncate narro_project table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_project`');
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
				case 'ProjectId':
					/**
					 * Gets the value for intProjectId (Read-Only PK)
					 * @return integer
					 */
					return $this->intProjectId;

				case 'ProjectCategoryId':
					/**
					 * Gets the value for intProjectCategoryId 
					 * @return integer
					 */
					return $this->intProjectCategoryId;

				case 'ProjectName':
					/**
					 * Gets the value for strProjectName (Unique)
					 * @return string
					 */
					return $this->strProjectName;

				case 'ProjectType':
					/**
					 * Gets the value for intProjectType (Not Null)
					 * @return integer
					 */
					return $this->intProjectType;

				case 'ProjectDescription':
					/**
					 * Gets the value for strProjectDescription 
					 * @return string
					 */
					return $this->strProjectDescription;

				case 'Active':
					/**
					 * Gets the value for intActive (Not Null)
					 * @return integer
					 */
					return $this->intActive;


				///////////////////
				// Member Objects
				///////////////////
				case 'ProjectCategory':
					/**
					 * Gets the value for the NarroProjectCategory object referenced by intProjectCategoryId 
					 * @return NarroProjectCategory
					 */
					try {
						if ((!$this->objProjectCategory) && (!is_null($this->intProjectCategoryId)))
							$this->objProjectCategory = NarroProjectCategory::Load($this->intProjectCategoryId);
						return $this->objProjectCategory;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_NarroContextAsProject':
					/**
					 * Gets the value for the private _objNarroContextAsProject (Read-Only)
					 * if set due to an expansion on the narro_context.project_id reverse relationship
					 * @return NarroContext
					 */
					return $this->_objNarroContextAsProject;

				case '_NarroContextAsProjectArray':
					/**
					 * Gets the value for the private _objNarroContextAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_context.project_id reverse relationship
					 * @return NarroContext[]
					 */
					return (array) $this->_objNarroContextAsProjectArray;

				case '_NarroFileAsProject':
					/**
					 * Gets the value for the private _objNarroFileAsProject (Read-Only)
					 * if set due to an expansion on the narro_file.project_id reverse relationship
					 * @return NarroFile
					 */
					return $this->_objNarroFileAsProject;

				case '_NarroFileAsProjectArray':
					/**
					 * Gets the value for the private _objNarroFileAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_file.project_id reverse relationship
					 * @return NarroFile[]
					 */
					return (array) $this->_objNarroFileAsProjectArray;

				case '_NarroProjectProgressAsProject':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsProject (Read-Only)
					 * if set due to an expansion on the narro_project_progress.project_id reverse relationship
					 * @return NarroProjectProgress
					 */
					return $this->_objNarroProjectProgressAsProject;

				case '_NarroProjectProgressAsProjectArray':
					/**
					 * Gets the value for the private _objNarroProjectProgressAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_project_progress.project_id reverse relationship
					 * @return NarroProjectProgress[]
					 */
					return (array) $this->_objNarroProjectProgressAsProjectArray;

				case '_NarroUserPermissionAsProject':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsProject (Read-Only)
					 * if set due to an expansion on the narro_user_permission.project_id reverse relationship
					 * @return NarroUserPermission
					 */
					return $this->_objNarroUserPermissionAsProject;

				case '_NarroUserPermissionAsProjectArray':
					/**
					 * Gets the value for the private _objNarroUserPermissionAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_permission.project_id reverse relationship
					 * @return NarroUserPermission[]
					 */
					return (array) $this->_objNarroUserPermissionAsProjectArray;

				case '_NarroUserRoleAsProject':
					/**
					 * Gets the value for the private _objNarroUserRoleAsProject (Read-Only)
					 * if set due to an expansion on the narro_user_role.project_id reverse relationship
					 * @return NarroUserRole
					 */
					return $this->_objNarroUserRoleAsProject;

				case '_NarroUserRoleAsProjectArray':
					/**
					 * Gets the value for the private _objNarroUserRoleAsProjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_user_role.project_id reverse relationship
					 * @return NarroUserRole[]
					 */
					return (array) $this->_objNarroUserRoleAsProjectArray;

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
				case 'ProjectCategoryId':
					/**
					 * Sets the value for intProjectCategoryId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProjectCategory = null;
						return ($this->intProjectCategoryId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectName':
					/**
					 * Sets the value for strProjectName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProjectName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectType':
					/**
					 * Sets the value for intProjectType (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intProjectType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProjectDescription':
					/**
					 * Sets the value for strProjectDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProjectDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for intActive (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intActive = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ProjectCategory':
					/**
					 * Sets the value for the NarroProjectCategory object referenced by intProjectCategoryId 
					 * @param NarroProjectCategory $mixValue
					 * @return NarroProjectCategory
					 */
					if (is_null($mixValue)) {
						$this->intProjectCategoryId = null;
						$this->objProjectCategory = null;
						return null;
					} else {
						// Make sure $mixValue actually is a NarroProjectCategory object
						try {
							$mixValue = QType::Cast($mixValue, 'NarroProjectCategory');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED NarroProjectCategory object
						if (is_null($mixValue->ProjectCategoryId))
							throw new QCallerException('Unable to set an unsaved ProjectCategory for this NarroProject');

						// Update Local Member Variables
						$this->objProjectCategory = $mixValue;
						$this->intProjectCategoryId = $mixValue->ProjectCategoryId;

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

			
		
		// Related Objects' Methods for NarroContextAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroContextsAsProject as an array of NarroContext objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/ 
		public function GetNarroContextAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroContext::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroContextsAsProject
		 * @return int
		*/ 
		public function CountNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroContext::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function AssociateNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . '
			');
		}

		/**
		 * Unassociates a NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function UnassociateNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = null
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroContextsAsProject
		 * @return void
		*/ 
		public function UnassociateAllNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_context`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroContextAsProject
		 * @param NarroContext $objNarroContext
		 * @return void
		*/ 
		public function DeleteAssociatedNarroContextAsProject(NarroContext $objNarroContext) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroContext->ContextId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this NarroProject with an unsaved NarroContext.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`context_id` = ' . $objDatabase->SqlVariable($objNarroContext->ContextId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroContextsAsProject
		 * @return void
		*/ 
		public function DeleteAllNarroContextsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroContextAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_context`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroFileAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroFilesAsProject as an array of NarroFile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroFile[]
		*/ 
		public function GetNarroFileAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroFile::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroFilesAsProject
		 * @return int
		*/ 
		public function CountNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroFile::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function AssociateNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . '
			');
		}

		/**
		 * Unassociates a NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function UnassociateNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = null
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroFilesAsProject
		 * @return void
		*/ 
		public function UnassociateAllNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_file`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroFileAsProject
		 * @param NarroFile $objNarroFile
		 * @return void
		*/ 
		public function DeleteAssociatedNarroFileAsProject(NarroFile $objNarroFile) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroFile->FileId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this NarroProject with an unsaved NarroFile.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`file_id` = ' . $objDatabase->SqlVariable($objNarroFile->FileId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroFilesAsProject
		 * @return void
		*/ 
		public function DeleteAllNarroFilesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroFileAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_file`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroProjectProgressAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroProjectProgressesAsProject as an array of NarroProjectProgress objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		*/ 
		public function GetNarroProjectProgressAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroProjectProgress::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroProjectProgressesAsProject
		 * @return int
		*/ 
		public function CountNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroProjectProgress::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/ 
		public function AssociateNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . '
			');
		}

		/**
		 * Unassociates a NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/ 
		public function UnassociateNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = null
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroProjectProgressesAsProject
		 * @return void
		*/ 
		public function UnassociateAllNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_project_progress`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroProjectProgressAsProject
		 * @param NarroProjectProgress $objNarroProjectProgress
		 * @return void
		*/ 
		public function DeleteAssociatedNarroProjectProgressAsProject(NarroProjectProgress $objNarroProjectProgress) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroProjectProgress->ProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this NarroProject with an unsaved NarroProjectProgress.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($objNarroProjectProgress->ProjectProgressId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroProjectProgressesAsProject
		 * @return void
		*/ 
		public function DeleteAllNarroProjectProgressesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroProjectProgressAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserPermissionAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserPermissionsAsProject as an array of NarroUserPermission objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserPermission[]
		*/ 
		public function GetNarroUserPermissionAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroUserPermission::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserPermissionsAsProject
		 * @return int
		*/ 
		public function CountNarroUserPermissionsAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroUserPermission::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroUserPermissionAsProject
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function AssociateNarroUserPermissionAsProject(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserPermissionAsProject on this NarroProject with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . '
			');
		}

		/**
		 * Unassociates a NarroUserPermissionAsProject
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function UnassociateNarroUserPermissionAsProject(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this NarroProject with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`project_id` = null
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroUserPermissionsAsProject
		 * @return void
		*/ 
		public function UnassociateAllNarroUserPermissionsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_permission`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserPermissionAsProject
		 * @param NarroUserPermission $objNarroUserPermission
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserPermissionAsProject(NarroUserPermission $objNarroUserPermission) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserPermission->UserPermissionId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this NarroProject with an unsaved NarroUserPermission.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`user_permission_id` = ' . $objDatabase->SqlVariable($objNarroUserPermission->UserPermissionId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserPermissionsAsProject
		 * @return void
		*/ 
		public function DeleteAllNarroUserPermissionsAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserPermissionAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_permission`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

			
		
		// Related Objects' Methods for NarroUserRoleAsProject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroUserRolesAsProject as an array of NarroUserRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUserRole[]
		*/ 
		public function GetNarroUserRoleAsProjectArray($objOptionalClauses = null) {
			if ((is_null($this->intProjectId)))
				return array();

			try {
				return NarroUserRole::LoadArrayByProjectId($this->intProjectId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroUserRolesAsProject
		 * @return int
		*/ 
		public function CountNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				return 0;

			return NarroUserRole::CountByProjectId($this->intProjectId);
		}

		/**
		 * Associates a NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function AssociateNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . '
			');
		}

		/**
		 * Unassociates a NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function UnassociateNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = null
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Unassociates all NarroUserRolesAsProject
		 * @return void
		*/ 
		public function UnassociateAllNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_user_role`
				SET
					`project_id` = null
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes an associated NarroUserRoleAsProject
		 * @param NarroUserRole $objNarroUserRole
		 * @return void
		*/ 
		public function DeleteAssociatedNarroUserRoleAsProject(NarroUserRole $objNarroUserRole) {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');
			if ((is_null($objNarroUserRole->UserRoleId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this NarroProject with an unsaved NarroUserRole.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`user_role_id` = ' . $objDatabase->SqlVariable($objNarroUserRole->UserRoleId) . ' AND
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}

		/**
		 * Deletes all associated NarroUserRolesAsProject
		 * @return void
		*/ 
		public function DeleteAllNarroUserRolesAsProject() {
			if ((is_null($this->intProjectId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroUserRoleAsProject on this unsaved NarroProject.');

			// Get the Database Object for this Class
			$objDatabase = NarroProject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_user_role`
				WHERE
					`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . '
			');
		}




		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column narro_project.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_category_id
		 * @var integer intProjectCategoryId
		 */
		protected $intProjectCategoryId;
		const ProjectCategoryIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_name
		 * @var string strProjectName
		 */
		protected $strProjectName;
		const ProjectNameMaxLength = 255;
		const ProjectNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_type
		 * @var integer intProjectType
		 */
		protected $intProjectType;
		const ProjectTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.project_description
		 * @var string strProjectDescription
		 */
		protected $strProjectDescription;
		const ProjectDescriptionMaxLength = 255;
		const ProjectDescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project.active
		 * @var integer intActive
		 */
		protected $intActive;
		const ActiveDefault = null;


		/**
		 * Private member variable that stores a reference to a single NarroContextAsProject object
		 * (of type NarroContext), if this NarroProject object was restored with
		 * an expansion on the narro_context association table.
		 * @var NarroContext _objNarroContextAsProject;
		 */
		private $_objNarroContextAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroContextAsProject objects
		 * (of type NarroContext[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_context association table.
		 * @var NarroContext[] _objNarroContextAsProjectArray;
		 */
		private $_objNarroContextAsProjectArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroFileAsProject object
		 * (of type NarroFile), if this NarroProject object was restored with
		 * an expansion on the narro_file association table.
		 * @var NarroFile _objNarroFileAsProject;
		 */
		private $_objNarroFileAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroFileAsProject objects
		 * (of type NarroFile[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_file association table.
		 * @var NarroFile[] _objNarroFileAsProjectArray;
		 */
		private $_objNarroFileAsProjectArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroProjectProgressAsProject object
		 * (of type NarroProjectProgress), if this NarroProject object was restored with
		 * an expansion on the narro_project_progress association table.
		 * @var NarroProjectProgress _objNarroProjectProgressAsProject;
		 */
		private $_objNarroProjectProgressAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroProjectProgressAsProject objects
		 * (of type NarroProjectProgress[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_project_progress association table.
		 * @var NarroProjectProgress[] _objNarroProjectProgressAsProjectArray;
		 */
		private $_objNarroProjectProgressAsProjectArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserPermissionAsProject object
		 * (of type NarroUserPermission), if this NarroProject object was restored with
		 * an expansion on the narro_user_permission association table.
		 * @var NarroUserPermission _objNarroUserPermissionAsProject;
		 */
		private $_objNarroUserPermissionAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroUserPermissionAsProject objects
		 * (of type NarroUserPermission[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_user_permission association table.
		 * @var NarroUserPermission[] _objNarroUserPermissionAsProjectArray;
		 */
		private $_objNarroUserPermissionAsProjectArray = array();

		/**
		 * Private member variable that stores a reference to a single NarroUserRoleAsProject object
		 * (of type NarroUserRole), if this NarroProject object was restored with
		 * an expansion on the narro_user_role association table.
		 * @var NarroUserRole _objNarroUserRoleAsProject;
		 */
		private $_objNarroUserRoleAsProject;

		/**
		 * Private member variable that stores a reference to an array of NarroUserRoleAsProject objects
		 * (of type NarroUserRole[]), if this NarroProject object was restored with
		 * an ExpandAsArray on the narro_user_role association table.
		 * @var NarroUserRole[] _objNarroUserRoleAsProjectArray;
		 */
		private $_objNarroUserRoleAsProjectArray = array();

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
		 * in the database column narro_project.project_category_id.
		 *
		 * NOTE: Always use the ProjectCategory property getter to correctly retrieve this NarroProjectCategory object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProjectCategory objProjectCategory
		 */
		protected $objProjectCategory;






		////////////////////////////////////////
		// METHODS for WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroProject"><sequence>';
			$strToReturn .= '<element name="ProjectId" type="xsd:int"/>';
			$strToReturn .= '<element name="ProjectCategory" type="xsd1:NarroProjectCategory"/>';
			$strToReturn .= '<element name="ProjectName" type="xsd:string"/>';
			$strToReturn .= '<element name="ProjectType" type="xsd:int"/>';
			$strToReturn .= '<element name="ProjectDescription" type="xsd:string"/>';
			$strToReturn .= '<element name="Active" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroProject', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroProject'] = NarroProject::GetSoapComplexTypeXml();
				NarroProjectCategory::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroProject::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroProject();
			if (property_exists($objSoapObject, 'ProjectId'))
				$objToReturn->intProjectId = $objSoapObject->ProjectId;
			if ((property_exists($objSoapObject, 'ProjectCategory')) &&
				($objSoapObject->ProjectCategory))
				$objToReturn->ProjectCategory = NarroProjectCategory::GetObjectFromSoapObject($objSoapObject->ProjectCategory);
			if (property_exists($objSoapObject, 'ProjectName'))
				$objToReturn->strProjectName = $objSoapObject->ProjectName;
			if (property_exists($objSoapObject, 'ProjectType'))
				$objToReturn->intProjectType = $objSoapObject->ProjectType;
			if (property_exists($objSoapObject, 'ProjectDescription'))
				$objToReturn->strProjectDescription = $objSoapObject->ProjectDescription;
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->intActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroProject::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objProjectCategory)
				$objObject->objProjectCategory = NarroProjectCategory::GetSoapObjectFromObject($objObject->objProjectCategory, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectCategoryId = null;
			return $objObject;
		}
	}





	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	class QQNodeNarroProject extends QQNode {
		protected $strTableName = 'narro_project';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'NarroProject';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'integer', $this);
				case 'ProjectCategory':
					return new QQNodeNarroProjectCategory('project_category_id', 'integer', $this);
				case 'ProjectName':
					return new QQNode('project_name', 'string', $this);
				case 'ProjectType':
					return new QQNode('project_type', 'integer', $this);
				case 'ProjectDescription':
					return new QQNode('project_description', 'string', $this);
				case 'Active':
					return new QQNode('active', 'integer', $this);
				case 'NarroContextAsProject':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasproject', 'reverse_reference', 'project_id');
				case 'NarroFileAsProject':
					return new QQReverseReferenceNodeNarroFile($this, 'narrofileasproject', 'reverse_reference', 'project_id');
				case 'NarroProjectProgressAsProject':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressasproject', 'reverse_reference', 'project_id');
				case 'NarroUserPermissionAsProject':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionasproject', 'reverse_reference', 'project_id');
				case 'NarroUserRoleAsProject':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasproject', 'reverse_reference', 'project_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroProject extends QQReverseReferenceNode {
		protected $strTableName = 'narro_project';
		protected $strPrimaryKey = 'project_id';
		protected $strClassName = 'NarroProject';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'ProjectCategoryId':
					return new QQNode('project_category_id', 'integer', $this);
				case 'ProjectCategory':
					return new QQNodeNarroProjectCategory('project_category_id', 'integer', $this);
				case 'ProjectName':
					return new QQNode('project_name', 'string', $this);
				case 'ProjectType':
					return new QQNode('project_type', 'integer', $this);
				case 'ProjectDescription':
					return new QQNode('project_description', 'string', $this);
				case 'Active':
					return new QQNode('active', 'integer', $this);
				case 'NarroContextAsProject':
					return new QQReverseReferenceNodeNarroContext($this, 'narrocontextasproject', 'reverse_reference', 'project_id');
				case 'NarroFileAsProject':
					return new QQReverseReferenceNodeNarroFile($this, 'narrofileasproject', 'reverse_reference', 'project_id');
				case 'NarroProjectProgressAsProject':
					return new QQReverseReferenceNodeNarroProjectProgress($this, 'narroprojectprogressasproject', 'reverse_reference', 'project_id');
				case 'NarroUserPermissionAsProject':
					return new QQReverseReferenceNodeNarroUserPermission($this, 'narrouserpermissionasproject', 'reverse_reference', 'project_id');
				case 'NarroUserRoleAsProject':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasproject', 'reverse_reference', 'project_id');

				case '_PrimaryKeyNode':
					return new QQNode('project_id', 'integer', $this);
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