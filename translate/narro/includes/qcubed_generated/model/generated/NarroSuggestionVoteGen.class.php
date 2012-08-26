<?php
	/**
	 * The abstract NarroSuggestionVoteGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the NarroSuggestionVote subclass which
	 * extends this NarroSuggestionVoteGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroSuggestionVote class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 * @property integer $SuggestionId the value for intSuggestionId (PK)
	 * @property integer $ContextId the value for intContextId (PK)
	 * @property integer $UserId the value for intUserId (PK)
	 * @property integer $VoteValue the value for intVoteValue (Not Null)
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property NarroSuggestion $Suggestion the value for the NarroSuggestion object referenced by intSuggestionId (PK)
	 * @property NarroContext $Context the value for the NarroContext object referenced by intContextId (PK)
	 * @property NarroUser $User the value for the NarroUser object referenced by intUserId (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroSuggestionVoteGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['SuggestionId'] = null;
                $this->_arrHistory['ContextId'] = null;
                $this->_arrHistory['UserId'] = null;
                $this->_arrHistory['VoteValue'] = null;
                $this->_arrHistory['Created'] = null;
                $this->_arrHistory['Modified'] = null;
        }
		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column narro_suggestion_vote.suggestion_id
		 * @var integer intSuggestionId
		 */
		protected $intSuggestionId;
		const SuggestionIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intSuggestionId;
		 */
		protected $__intSuggestionId;

		/**
		 * Protected member variable that maps to the database PK column narro_suggestion_vote.context_id
		 * @var integer intContextId
		 */
		protected $intContextId;
		const ContextIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intContextId;
		 */
		protected $__intContextId;

		/**
		 * Protected member variable that maps to the database PK column narro_suggestion_vote.user_id
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
		 * Protected member variable that maps to the database column narro_suggestion_vote.vote_value
		 * @var integer intVoteValue
		 */
		protected $intVoteValue;
		const VoteValueDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_vote.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_suggestion_vote.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
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

        /**
         * Associative array with database property fields as keys
        */
        protected $_arrHistory;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion_vote.suggestion_id.
		 *
		 * NOTE: Always use the Suggestion property getter to correctly retrieve this NarroSuggestion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroSuggestion objSuggestion
		 */
		protected $objSuggestion;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion_vote.context_id.
		 *
		 * NOTE: Always use the Context property getter to correctly retrieve this NarroContext object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroContext objContext
		 */
		protected $objContext;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column narro_suggestion_vote.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this NarroUser object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var NarroUser objUser
		 */
		protected $objUser;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intSuggestionId = NarroSuggestionVote::SuggestionIdDefault;
			$this->intContextId = NarroSuggestionVote::ContextIdDefault;
			$this->intUserId = NarroSuggestionVote::UserIdDefault;
			$this->intVoteValue = NarroSuggestionVote::VoteValueDefault;
			$this->dttCreated = (NarroSuggestionVote::CreatedDefault === null)?null:new QDateTime(NarroSuggestionVote::CreatedDefault);
			$this->dttModified = (NarroSuggestionVote::ModifiedDefault === null)?null:new QDateTime(NarroSuggestionVote::ModifiedDefault);
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
		 * Load a NarroSuggestionVote from PK Info
		 * @param integer $intSuggestionId
		 * @param integer $intContextId
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote
		 */
		public static function Load($intSuggestionId, $intContextId, $intUserId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroSuggestionVote::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $intSuggestionId),
					QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId),
					QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroSuggestionVotes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call NarroSuggestionVote::QueryArray to perform the LoadAll query
			try {
				return NarroSuggestionVote::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all NarroSuggestionVotes
		 * @return int
		 */
		public static function CountAll() {
			// Call NarroSuggestionVote::QueryCount to perform the CountAll query
			return NarroSuggestionVote::QueryCount(QQ::All());
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
			$objDatabase = NarroSuggestionVote::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroSuggestionVote-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_suggestion_vote');
			NarroSuggestionVote::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_suggestion_vote');

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
		 * Static Qcubed Query method to query for a single NarroSuggestionVote object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestionVote the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionVote::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new NarroSuggestionVote object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroSuggestionVote::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroSuggestionVote objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return NarroSuggestionVote[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionVote::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return NarroSuggestionVote::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroSuggestionVote objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = NarroSuggestionVote::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = NarroSuggestionVote::GetDatabase();

			$strQuery = NarroSuggestionVote::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrosuggestionvote', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroSuggestionVote::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroSuggestionVote
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_suggestion_vote';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'suggestion_id', $strAliasPrefix . 'suggestion_id');
			$objBuilder->AddSelectItem($strTableName, 'context_id', $strAliasPrefix . 'context_id');
			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'vote_value', $strAliasPrefix . 'vote_value');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a NarroSuggestionVote from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this NarroSuggestionVote::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroSuggestionVote
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the NarroSuggestionVote object
			$objToReturn = new NarroSuggestionVote();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'suggestion_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suggestion_id'] : $strAliasPrefix . 'suggestion_id';
			$objToReturn->intSuggestionId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intSuggestionId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'context_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'context_id'] : $strAliasPrefix . 'context_id';
			$objToReturn->intContextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intContextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'vote_value', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'vote_value'] : $strAliasPrefix . 'vote_value';
			$objToReturn->intVoteValue = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'created', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'created'] : $strAliasPrefix . 'created';
			$objToReturn->dttCreated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modified'] : $strAliasPrefix . 'modified';
			$objToReturn->dttModified = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->SuggestionId != $objPreviousItem->SuggestionId) {
						continue;
					}
					if ($objToReturn->ContextId != $objPreviousItem->ContextId) {
						continue;
					}
					if ($objToReturn->UserId != $objPreviousItem->UserId) {
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
				$strAliasPrefix = 'narro_suggestion_vote__';

			// Check for Suggestion Early Binding
			$strAlias = $strAliasPrefix . 'suggestion_id__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSuggestion = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suggestion_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Context Early Binding
			$strAlias = $strAliasPrefix . 'context_id__context_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objContext = NarroContext::InstantiateDbRow($objDbRow, $strAliasPrefix . 'context_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'user_id__user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = NarroUser::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroSuggestionVotes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroSuggestionVote[]
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
					$objItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single NarroSuggestionVote object,
		 * by SuggestionId, ContextId, UserId Index(es)
		 * @param integer $intSuggestionId
		 * @param integer $intContextId
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote
		*/
		public static function LoadBySuggestionIdContextIdUserId($intSuggestionId, $intContextId, $intUserId, $objOptionalClauses = null) {
			return NarroSuggestionVote::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $intSuggestionId),
					QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId),
					QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroSuggestionVote object,
		 * by SuggestionId, UserId, ContextId Index(es)
		 * @param integer $intSuggestionId
		 * @param integer $intUserId
		 * @param integer $intContextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote
		*/
		public static function LoadBySuggestionIdUserIdContextId($intSuggestionId, $intUserId, $intContextId, $objOptionalClauses = null) {
			return NarroSuggestionVote::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $intSuggestionId),
					QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId),
					QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of NarroSuggestionVote objects,
		 * by SuggestionId Index(es)
		 * @param integer $intSuggestionId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/
		public static function LoadArrayBySuggestionId($intSuggestionId, $objOptionalClauses = null) {
			// Call NarroSuggestionVote::QueryArray to perform the LoadArrayBySuggestionId query
			try {
				return NarroSuggestionVote::QueryArray(
					QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $intSuggestionId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionVotes
		 * by SuggestionId Index(es)
		 * @param integer $intSuggestionId
		 * @return int
		*/
		public static function CountBySuggestionId($intSuggestionId) {
			// Call NarroSuggestionVote::QueryCount to perform the CountBySuggestionId query
			return NarroSuggestionVote::QueryCount(
				QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $intSuggestionId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestionVote objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call NarroSuggestionVote::QueryArray to perform the LoadArrayByUserId query
			try {
				return NarroSuggestionVote::QueryArray(
					QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionVotes
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call NarroSuggestionVote::QueryCount to perform the CountByUserId query
			return NarroSuggestionVote::QueryCount(
				QQ::Equal(QQN::NarroSuggestionVote()->UserId, $intUserId)
			);
		}
			
		/**
		 * Load an array of NarroSuggestionVote objects,
		 * by ContextId Index(es)
		 * @param integer $intContextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroSuggestionVote[]
		*/
		public static function LoadArrayByContextId($intContextId, $objOptionalClauses = null) {
			// Call NarroSuggestionVote::QueryArray to perform the LoadArrayByContextId query
			try {
				return NarroSuggestionVote::QueryArray(
					QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroSuggestionVotes
		 * by ContextId Index(es)
		 * @param integer $intContextId
		 * @return int
		*/
		public static function CountByContextId($intContextId) {
			// Call NarroSuggestionVote::QueryCount to perform the CountByContextId query
			return NarroSuggestionVote::QueryCount(
				QQ::Equal(QQN::NarroSuggestionVote()->ContextId, $intContextId)
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

            if (!isset($this->_arrHistory['SuggestionId']))
                $this->_arrHistory['SuggestionId'] = $this->SuggestionId;
            if (!isset($this->_arrHistory['ContextId']))
                $this->_arrHistory['ContextId'] = $this->ContextId;
            if (!isset($this->_arrHistory['UserId']))
                $this->_arrHistory['UserId'] = $this->UserId;
            if (!isset($this->_arrHistory['VoteValue']))
                $this->_arrHistory['VoteValue'] = $this->VoteValue;
            if (!isset($this->_arrHistory['Created']))
                $this->_arrHistory['Created'] = $this->Created;
            if (!isset($this->_arrHistory['Modified']))
                $this->_arrHistory['Modified'] = $this->Modified;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this NarroSuggestionVote
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionVote::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `narro_suggestion_vote` (
							`suggestion_id`,
							`context_id`,
							`user_id`,
							`vote_value`,
							`created`,
							`modified`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSuggestionId) . ',
							' . $objDatabase->SqlVariable($this->intContextId) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->intVoteValue) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['SuggestionId'] !== $this->SuggestionId ||
                        (
                            $this->SuggestionId instanceof QDateTime &&
                            (string) $this->_arrHistory['SuggestionId'] !== (string) $this->SuggestionId
                        )
                    )
                        $arrUpdateChanges[] = '`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId);
                    if (
                        $this->_arrHistory['ContextId'] !== $this->ContextId ||
                        (
                            $this->ContextId instanceof QDateTime &&
                            (string) $this->_arrHistory['ContextId'] !== (string) $this->ContextId
                        )
                    )
                        $arrUpdateChanges[] = '`context_id` = ' . $objDatabase->SqlVariable($this->intContextId);
                    if (
                        $this->_arrHistory['UserId'] !== $this->UserId ||
                        (
                            $this->UserId instanceof QDateTime &&
                            (string) $this->_arrHistory['UserId'] !== (string) $this->UserId
                        )
                    )
                        $arrUpdateChanges[] = '`user_id` = ' . $objDatabase->SqlVariable($this->intUserId);
                    if (
                        $this->_arrHistory['VoteValue'] !== $this->VoteValue ||
                        (
                            $this->VoteValue instanceof QDateTime &&
                            (string) $this->_arrHistory['VoteValue'] !== (string) $this->VoteValue
                        )
                    )
                        $arrUpdateChanges[] = '`vote_value` = ' . $objDatabase->SqlVariable($this->intVoteValue);
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

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_suggestion_vote`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`suggestion_id` = ' . $objDatabase->SqlVariable($this->__intSuggestionId) . ' AND
							`context_id` = ' . $objDatabase->SqlVariable($this->__intContextId) . ' AND
							`user_id` = ' . $objDatabase->SqlVariable($this->__intUserId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

            $blnInserted = (!$this->__blnRestored) || ($blnForceInsert);
			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intSuggestionId = $this->intSuggestionId;
			$this->__intContextId = $this->intContextId;
			$this->__intUserId = $this->intUserId;


			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this NarroSuggestionVote
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intSuggestionId)) || (is_null($this->intContextId)) || (is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this NarroSuggestionVote with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionVote::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`
				WHERE
					`suggestion_id` = ' . $objDatabase->SqlVariable($this->intSuggestionId) . ' AND
					`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '');
		}

		/**
		 * Delete all NarroSuggestionVotes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionVote::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_suggestion_vote`');
		}

		/**
		 * Truncate narro_suggestion_vote table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = NarroSuggestionVote::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `narro_suggestion_vote`');
		}

		/**
		 * Reload this NarroSuggestionVote from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroSuggestionVote object.');

			// Reload the Object
			$objReloaded = NarroSuggestionVote::Load($this->intSuggestionId, $this->intContextId, $this->intUserId);

			// Update $this's local variables to match
			$this->SuggestionId = $objReloaded->SuggestionId;
			$this->__intSuggestionId = $this->intSuggestionId;
			$this->ContextId = $objReloaded->ContextId;
			$this->__intContextId = $this->intContextId;
			$this->UserId = $objReloaded->UserId;
			$this->__intUserId = $this->intUserId;
			$this->intVoteValue = $objReloaded->intVoteValue;
			$this->dttCreated = $objReloaded->dttCreated;
			$this->dttModified = $objReloaded->dttModified;
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
					 * Gets the value for intSuggestionId (PK)
					 * @return integer
					 */
					return $this->intSuggestionId;

				case 'ContextId':
					/**
					 * Gets the value for intContextId (PK)
					 * @return integer
					 */
					return $this->intContextId;

				case 'UserId':
					/**
					 * Gets the value for intUserId (PK)
					 * @return integer
					 */
					return $this->intUserId;

				case 'VoteValue':
					/**
					 * Gets the value for intVoteValue (Not Null)
					 * @return integer
					 */
					return $this->intVoteValue;

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


				///////////////////
				// Member Objects
				///////////////////
				case 'Suggestion':
					/**
					 * Gets the value for the NarroSuggestion object referenced by intSuggestionId (PK)
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

				case 'Context':
					/**
					 * Gets the value for the NarroContext object referenced by intContextId (PK)
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

				case 'User':
					/**
					 * Gets the value for the NarroUser object referenced by intUserId (PK)
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
				case 'SuggestionId':
					/**
					 * Sets the value for intSuggestionId (PK)
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

				case 'ContextId':
					/**
					 * Sets the value for intContextId (PK)
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

				case 'UserId':
					/**
					 * Sets the value for intUserId (PK)
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

				case 'VoteValue':
					/**
					 * Sets the value for intVoteValue (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intVoteValue = QType::Cast($mixValue, QType::Integer));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'Suggestion':
					/**
					 * Sets the value for the NarroSuggestion object referenced by intSuggestionId (PK)
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
							throw new QCallerException('Unable to set an unsaved Suggestion for this NarroSuggestionVote');

						// Update Local Member Variables
						$this->objSuggestion = $mixValue;
						$this->intSuggestionId = $mixValue->SuggestionId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Context':
					/**
					 * Sets the value for the NarroContext object referenced by intContextId (PK)
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
							throw new QCallerException('Unable to set an unsaved Context for this NarroSuggestionVote');

						// Update Local Member Variables
						$this->objContext = $mixValue;
						$this->intContextId = $mixValue->ContextId;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'User':
					/**
					 * Sets the value for the NarroUser object referenced by intUserId (PK)
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
							throw new QCallerException('Unable to set an unsaved User for this NarroSuggestionVote');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->UserId;

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
			$strToReturn = '<complexType name="NarroSuggestionVote"><sequence>';
			$strToReturn .= '<element name="Suggestion" type="xsd1:NarroSuggestion"/>';
			$strToReturn .= '<element name="Context" type="xsd1:NarroContext"/>';
			$strToReturn .= '<element name="User" type="xsd1:NarroUser"/>';
			$strToReturn .= '<element name="VoteValue" type="xsd:int"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('NarroSuggestionVote', $strComplexTypeArray)) {
				$strComplexTypeArray['NarroSuggestionVote'] = NarroSuggestionVote::GetSoapComplexTypeXml();
				NarroSuggestion::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroContext::AlterSoapComplexTypeArray($strComplexTypeArray);
				NarroUser::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, NarroSuggestionVote::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new NarroSuggestionVote();
			if ((property_exists($objSoapObject, 'Suggestion')) &&
				($objSoapObject->Suggestion))
				$objToReturn->Suggestion = NarroSuggestion::GetObjectFromSoapObject($objSoapObject->Suggestion);
			if ((property_exists($objSoapObject, 'Context')) &&
				($objSoapObject->Context))
				$objToReturn->Context = NarroContext::GetObjectFromSoapObject($objSoapObject->Context);
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = NarroUser::GetObjectFromSoapObject($objSoapObject->User);
			if (property_exists($objSoapObject, 'VoteValue'))
				$objToReturn->intVoteValue = $objSoapObject->VoteValue;
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->dttCreated = new QDateTime($objSoapObject->Created);
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->dttModified = new QDateTime($objSoapObject->Modified);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, NarroSuggestionVote::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSuggestion)
				$objObject->objSuggestion = NarroSuggestion::GetSoapObjectFromObject($objObject->objSuggestion, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSuggestionId = null;
			if ($objObject->objContext)
				$objObject->objContext = NarroContext::GetSoapObjectFromObject($objObject->objContext, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intContextId = null;
			if ($objObject->objUser)
				$objObject->objUser = NarroUser::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
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
			$iArray['SuggestionId'] = $this->intSuggestionId;
			$iArray['ContextId'] = $this->intContextId;
			$iArray['UserId'] = $this->intUserId;
			$iArray['VoteValue'] = $this->intVoteValue;
			$iArray['Created'] = $this->dttCreated;
			$iArray['Modified'] = $this->dttModified;
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
     * @property-read QQNode $SuggestionId
     * @property-read QQNodeNarroSuggestion $Suggestion
     * @property-read QQNode $ContextId
     * @property-read QQNodeNarroContext $Context
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $VoteValue
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *

     * @property-read QQNodeNarroSuggestion $_PrimaryKeyNode
     **/
	class QQNodeNarroSuggestionVote extends QQNode {
		protected $strTableName = 'narro_suggestion_vote';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestionVote';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'SuggestionId', 'Integer', $this);
				case 'Suggestion':
					return new QQNodeNarroSuggestion('suggestion_id', 'Suggestion', 'Integer', $this);
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'Integer', $this);
				case 'Context':
					return new QQNodeNarroContext('context_id', 'Context', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'Integer', $this);
				case 'VoteValue':
					return new QQNode('vote_value', 'VoteValue', 'Integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNodeNarroSuggestion('suggestion_id', 'SuggestionId', 'Integer', $this);
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
     * @property-read QQNode $SuggestionId
     * @property-read QQNodeNarroSuggestion $Suggestion
     * @property-read QQNode $ContextId
     * @property-read QQNodeNarroContext $Context
     * @property-read QQNode $UserId
     * @property-read QQNodeNarroUser $User
     * @property-read QQNode $VoteValue
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     *
     *

     * @property-read QQNodeNarroSuggestion $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroSuggestionVote extends QQReverseReferenceNode {
		protected $strTableName = 'narro_suggestion_vote';
		protected $strPrimaryKey = 'suggestion_id';
		protected $strClassName = 'NarroSuggestionVote';
		public function __get($strName) {
			switch ($strName) {
				case 'SuggestionId':
					return new QQNode('suggestion_id', 'SuggestionId', 'integer', $this);
				case 'Suggestion':
					return new QQNodeNarroSuggestion('suggestion_id', 'Suggestion', 'integer', $this);
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'integer', $this);
				case 'Context':
					return new QQNodeNarroContext('context_id', 'Context', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeNarroUser('user_id', 'User', 'integer', $this);
				case 'VoteValue':
					return new QQNode('vote_value', 'VoteValue', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNodeNarroSuggestion('suggestion_id', 'SuggestionId', 'integer', $this);
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
