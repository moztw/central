<?php
	/**
	 * The abstract NarroProjectProgressGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroProjectProgress subclass which
	 * extends this NarroProjectProgressGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroProjectProgress class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * 
	 */
	class NarroProjectProgressGen extends QBaseClass {
		///////////////////////////////
		// COMMON LOAD METHODS
		///////////////////////////////

		/**
		 * Load a NarroProjectProgress from PK Info
		 * @param integer $intProjectProgressId
		 * @return NarroProjectProgress
		 */
		public static function Load($intProjectProgressId) {
			// Use QuerySingle to Perform the Query
			return NarroProjectProgress::QuerySingle(
				QQ::Equal(QQN::NarroProjectProgress()->ProjectProgressId, $intProjectProgressId)
			);
		}

		/**
		 * Load all NarroProjectProgresses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call NarroProjectProgress::QueryArray to perform the LoadAll query
			try {
				return NarroProjectProgress::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroProjectProgresses
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroProjectProgress::QueryCount to perform the CountAll query
			return NarroProjectProgress::QueryCount(QQ::All());
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
			$objDatabase = NarroProjectProgress::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroProjectProgress-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_project_progress');
			NarroProjectProgress::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('`narro_project_progress` AS `narro_project_progress`');

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
		 * Static Qcodo Query method to query for a single NarroProjectProgress object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProjectProgress the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroProjectProgress object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProjectProgress::InstantiateDbRow($objDbResult->GetNextRow());
		}

		/**
		 * Static Qcodo Query method to query for an array of NarroProjectProgress objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroProjectProgress[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroProjectProgress::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes);
		}

		/**
		 * Static Qcodo Query method to query for a count of NarroProjectProgress objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroProjectProgress::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroProjectProgress::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'narro_project_progress_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with NarroProjectProgress-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				NarroProjectProgress::GetSelectFields($objQueryBuilder);
				NarroProjectProgress::GetFromFields($objQueryBuilder);

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
			return NarroProjectProgress::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroProjectProgress
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = '`' . $strPrefix . '`';
				$strAliasPrefix = '`' . $strPrefix . '__';
			} else {
				$strTableName = '`narro_project_progress`';
				$strAliasPrefix = '`';
			}

			$objBuilder->AddSelectItem($strTableName . '.`project_progress_id` AS ' . $strAliasPrefix . 'project_progress_id`');
			$objBuilder->AddSelectItem($strTableName . '.`project_id` AS ' . $strAliasPrefix . 'project_id`');
			$objBuilder->AddSelectItem($strTableName . '.`language_id` AS ' . $strAliasPrefix . 'language_id`');
			$objBuilder->AddSelectItem($strTableName . '.`total_text_count` AS ' . $strAliasPrefix . 'total_text_count`');
			$objBuilder->AddSelectItem($strTableName . '.`fuzzy_text_count` AS ' . $strAliasPrefix . 'fuzzy_text_count`');
			$objBuilder->AddSelectItem($strTableName . '.`approved_text_count` AS ' . $strAliasPrefix . 'approved_text_count`');
			$objBuilder->AddSelectItem($strTableName . '.`progress_percent` AS ' . $strAliasPrefix . 'progress_percent`');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroProjectProgress from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroProjectProgress::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @return NarroProjectProgress
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the NarroProjectProgress object
			$objToReturn = new NarroProjectProgress();
			$objToReturn->__blnRestored = true;

			$objToReturn->intProjectProgressId = $objDbRow->GetColumn($strAliasPrefix . 'project_progress_id', 'Integer');
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasPrefix . 'project_id', 'Integer');
			$objToReturn->intLanguageId = $objDbRow->GetColumn($strAliasPrefix . 'language_id', 'Integer');
			$objToReturn->intTotalTextCount = $objDbRow->GetColumn($strAliasPrefix . 'total_text_count', 'Integer');
			$objToReturn->intFuzzyTextCount = $objDbRow->GetColumn($strAliasPrefix . 'fuzzy_text_count', 'Integer');
			$objToReturn->intApprovedTextCount = $objDbRow->GetColumn($strAliasPrefix . 'approved_text_count', 'Integer');
			$objToReturn->intProgressPercent = $objDbRow->GetColumn($strAliasPrefix . 'progress_percent', 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'narro_project_progress__';

			// Check for Project Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'project_id__project_id')))
				$objToReturn->objProject = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $strExpandAsArrayNodes);

			// Check for Language Early Binding
			if (!is_null($objDbRow->GetColumn($strAliasPrefix . 'language_id__language_id')))
				$objToReturn->objLanguage = NarroLanguage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'language_id__', $strExpandAsArrayNodes);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroProjectProgresses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @return NarroProjectProgress[]
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
					$objItem = NarroProjectProgress::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem);
					if ($objItem) {
						array_push($objToReturn, $objItem);
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					array_push($objToReturn, NarroProjectProgress::InstantiateDbRow($objDbRow));
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroProjectProgress object,
		 * by ProjectProgressId Index(es)
		 * @param integer $intProjectProgressId
		 * @return NarroProjectProgress
		*/
		public static function LoadByProjectProgressId($intProjectProgressId) {
			return NarroProjectProgress::QuerySingle(
				QQ::Equal(QQN::NarroProjectProgress()->ProjectProgressId, $intProjectProgressId)
			);
		}
			
		/**
		 * Load a single NarroProjectProgress object,
		 * by ProjectId, LanguageId Index(es)
		 * @param integer $intProjectId
		 * @param integer $intLanguageId
		 * @return NarroProjectProgress
		*/
		public static function LoadByProjectIdLanguageId($intProjectId, $intLanguageId) {
			return NarroProjectProgress::QuerySingle(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroProjectProgress()->ProjectId, $intProjectId),
				QQ::Equal(QQN::NarroProjectProgress()->LanguageId, $intLanguageId)
				)
			);
		}
			
		/**
		 * Load an array of NarroProjectProgress objects,
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		*/
		public static function LoadArrayByLanguageId($intLanguageId, $objOptionalClauses = null) {
			// Call NarroProjectProgress::QueryArray to perform the LoadArrayByLanguageId query
			try {
				return NarroProjectProgress::QueryArray(
					QQ::Equal(QQN::NarroProjectProgress()->LanguageId, $intLanguageId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjectProgresses
		 * by LanguageId Index(es)
		 * @param integer $intLanguageId
		 * @return int
		*/
		public static function CountByLanguageId($intLanguageId) {
			// Call NarroProjectProgress::QueryCount to perform the CountByLanguageId query
			return NarroProjectProgress::QueryCount(
				QQ::Equal(QQN::NarroProjectProgress()->LanguageId, $intLanguageId)
			);
		}
			
		/**
		 * Load an array of NarroProjectProgress objects,
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroProjectProgress[]
		*/
		public static function LoadArrayByProjectId($intProjectId, $objOptionalClauses = null) {
			// Call NarroProjectProgress::QueryArray to perform the LoadArrayByProjectId query
			try {
				return NarroProjectProgress::QueryArray(
					QQ::Equal(QQN::NarroProjectProgress()->ProjectId, $intProjectId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroProjectProgresses
		 * by ProjectId Index(es)
		 * @param integer $intProjectId
		 * @return int
		*/
		public static function CountByProjectId($intProjectId) {
			// Call NarroProjectProgress::QueryCount to perform the CountByProjectId query
			return NarroProjectProgress::QueryCount(
				QQ::Equal(QQN::NarroProjectProgress()->ProjectId, $intProjectId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////



		//////////////////
		// SAVE AND DELETE
		//////////////////

		/**
		 * Save this NarroProjectProgress
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		*/
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectProgress::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_project_progress` (
							`project_id`,
							`language_id`,
							`total_text_count`,
							`fuzzy_text_count`,
							`approved_text_count`,
							`progress_percent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intProjectId) . ',
							' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							' . $objDatabase->SqlVariable($this->intTotalTextCount) . ',
							' . $objDatabase->SqlVariable($this->intFuzzyTextCount) . ',
							' . $objDatabase->SqlVariable($this->intApprovedTextCount) . ',
							' . $objDatabase->SqlVariable($this->intProgressPercent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intProjectProgressId = $objDatabase->InsertId('narro_project_progress', 'project_progress_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_project_progress`
						SET
							`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId) . ',
							`language_id` = ' . $objDatabase->SqlVariable($this->intLanguageId) . ',
							`total_text_count` = ' . $objDatabase->SqlVariable($this->intTotalTextCount) . ',
							`fuzzy_text_count` = ' . $objDatabase->SqlVariable($this->intFuzzyTextCount) . ',
							`approved_text_count` = ' . $objDatabase->SqlVariable($this->intApprovedTextCount) . ',
							`progress_percent` = ' . $objDatabase->SqlVariable($this->intProgressPercent) . '
						WHERE
							`project_progress_id` = ' . $objDatabase->SqlVariable($this->intProjectProgressId) . '
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
		 * Delete this NarroProjectProgress
		 * @return void
		*/
		public function Delete() {
			if ((is_null($this->intProjectProgressId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroProjectProgress with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroProjectProgress::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`
				WHERE
					`project_progress_id` = ' . $objDatabase->SqlVariable($this->intProjectProgressId) . '');
		}

		/**
		 * Delete all NarroProjectProgresses
		 * @return void
		*/
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectProgress::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_project_progress`');
		}

		/**
		 * Truncate narro_project_progress table
		 * @return void
		*/
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroProjectProgress::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_project_progress`');
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
				case 'ProjectProgressId':
					/**
					 * Gets the value for intProjectProgressId (Read-Only PK)
					 * @return integer
					 */
					return $this->intProjectProgressId;

				case 'ProjectId':
					/**
					 * Gets the value for intProjectId (Not Null)
					 * @return integer
					 */
					return $this->intProjectId;

				case 'LanguageId':
					/**
					 * Gets the value for intLanguageId (Not Null)
					 * @return integer
					 */
					return $this->intLanguageId;

				case 'TotalTextCount':
					/**
					 * Gets the value for intTotalTextCount (Not Null)
					 * @return integer
					 */
					return $this->intTotalTextCount;

				case 'FuzzyTextCount':
					/**
					 * Gets the value for intFuzzyTextCount (Not Null)
					 * @return integer
					 */
					return $this->intFuzzyTextCount;

				case 'ApprovedTextCount':
					/**
					 * Gets the value for intApprovedTextCount (Not Null)
					 * @return integer
					 */
					return $this->intApprovedTextCount;

				case 'ProgressPercent':
					/**
					 * Gets the value for intProgressPercent (Not Null)
					 * @return integer
					 */
					return $this->intProgressPercent;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'TotalTextCount':
					/**
					 * Sets the value for intTotalTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTotalTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FuzzyTextCount':
					/**
					 * Sets the value for intFuzzyTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intFuzzyTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovedTextCount':
					/**
					 * Sets the value for intApprovedTextCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intApprovedTextCount = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ProgressPercent':
					/**
					 * Sets the value for intProgressPercent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intProgressPercent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved Project for this NarroProjectProgress');

						// Update Local Member Variables
						$this->objProject = $mixValue;
						$this->intProjectId = $mixValue->ProjectId;

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
							throw new QCallerException('Unable to set an unsaved Language for this NarroProjectProgress');

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
		 * Protected member variable that maps to the database PK Identity column narro_project_progress.project_progress_id
		 * @var integer intProjectProgressId
		 */
		protected $intProjectProgressId;
		const ProjectProgressIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.project_id
		 * @var integer intProjectId
		 */
		protected $intProjectId;
		const ProjectIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.language_id
		 * @var integer intLanguageId
		 */
		protected $intLanguageId;
		const LanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.total_text_count
		 * @var integer intTotalTextCount
		 */
		protected $intTotalTextCount;
		const TotalTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.fuzzy_text_count
		 * @var integer intFuzzyTextCount
		 */
		protected $intFuzzyTextCount;
		const FuzzyTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.approved_text_count
		 * @var integer intApprovedTextCount
		 */
		protected $intApprovedTextCount;
		const ApprovedTextCountDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_project_progress.progress_percent
		 * @var integer intProgressPercent
		 */
		protected $intProgressPercent;
		const ProgressPercentDefault = null;


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
		 * in the database column narro_project_progress.project_id.
		 *
		 * NOTE: Always use the Project property getter to correctly retrieve this NarroProject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroProject objProject
		 */
		protected $objProject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_project_progress.language_id.
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
			$strToReturn = '<complexType name="NarroProjectProgress"><sequence>';
			$strToReturn .= '<element name="ProjectProgressId" type="xsd:int"/>';
			$strToReturn .= '<element name="Project" type="xsd1:NarroProject"/>';
			$strToReturn .= '<element name="Language" type="xsd1:NarroLanguage"/>';
			$strToReturn .= '<element name="TotalTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="FuzzyTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="ApprovedTextCount" type="xsd:int"/>';
			$strToReturn .= '<element name="ProgressPercent" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroProjectProgress', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroProjectProgress'] = NarroProjectProgress::GetSoapComplexTypeXml();
				NarroProject::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroLanguage::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroProjectProgress::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroProjectProgress();
			if (property_exists($objSoapObject, 'ProjectProgressId'))
				$objToReturn->intProjectProgressId = $objSoapObject->ProjectProgressId;
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = NarroProject::GetObjectFromSoapObject($objSoapObject->Project);
			if ((property_exists($objSoapObject, 'Language')) &&
				($objSoapObject->Language))
				$objToReturn->Language = NarroLanguage::GetObjectFromSoapObject($objSoapObject->Language);
			if (property_exists($objSoapObject, 'TotalTextCount'))
				$objToReturn->intTotalTextCount = $objSoapObject->TotalTextCount;
			if (property_exists($objSoapObject, 'FuzzyTextCount'))
				$objToReturn->intFuzzyTextCount = $objSoapObject->FuzzyTextCount;
			if (property_exists($objSoapObject, 'ApprovedTextCount'))
				$objToReturn->intApprovedTextCount = $objSoapObject->ApprovedTextCount;
			if (property_exists($objSoapObject, 'ProgressPercent'))
				$objToReturn->intProgressPercent = $objSoapObject->ProgressPercent;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroProjectProgress::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objProject)
				$objObject->objProject = NarroProject::GetSoapObjectFromObject($objObject->objProject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProjectId = null;
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

	class QQNodeNarroProjectProgress extends QQNode {
		protected $strTableName = 'narro_project_progress';
		protected $strPrimaryKey = 'project_progress_id';
		protected $strClassName = 'NarroProjectProgress';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectProgressId':
					return new QQNode('project_progress_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'TotalTextCount':
					return new QQNode('total_text_count', 'integer', $this);
				case 'FuzzyTextCount':
					return new QQNode('fuzzy_text_count', 'integer', $this);
				case 'ApprovedTextCount':
					return new QQNode('approved_text_count', 'integer', $this);
				case 'ProgressPercent':
					return new QQNode('progress_percent', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('project_progress_id', 'integer', $this);
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

	class QQReverseReferenceNodeNarroProjectProgress extends QQReverseReferenceNode {
		protected $strTableName = 'narro_project_progress';
		protected $strPrimaryKey = 'project_progress_id';
		protected $strClassName = 'NarroProjectProgress';
		public function __get($strName) {
			switch ($strName) {
				case 'ProjectProgressId':
					return new QQNode('project_progress_id', 'integer', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'integer', $this);
				case 'LanguageId':
					return new QQNode('language_id', 'integer', $this);
				case 'Language':
					return new QQNodeNarroLanguage('language_id', 'integer', $this);
				case 'TotalTextCount':
					return new QQNode('total_text_count', 'integer', $this);
				case 'FuzzyTextCount':
					return new QQNode('fuzzy_text_count', 'integer', $this);
				case 'ApprovedTextCount':
					return new QQNode('approved_text_count', 'integer', $this);
				case 'ProgressPercent':
					return new QQNode('progress_percent', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('project_progress_id', 'integer', $this);
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