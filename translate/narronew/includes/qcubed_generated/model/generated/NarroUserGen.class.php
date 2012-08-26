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
	 * @property integer $UserId the value for intUserId (PK)
	 * @property string $Username the value for strUsername (Unique)
	 * @property string $Password the value for strPassword (Not Null)
	 * @property string $Email the value for strEmail (Unique)
	 * @property string $RealName the value for strRealName (Unique)
	 * @property string $Data the value for strData 
	 * @property-read NarroContextInfo $_NarroContextInfoAsValidatorUser the value for the private _objNarroContextInfoAsValidatorUser (Read-Only) if set due to an expansion on the narro_context_info.validator_user_id reverse relationship
	 * @property-read NarroContextInfo[] $_NarroContextInfoAsValidatorUserArray the value for the private _objNarroContextInfoAsValidatorUserArray (Read-Only) if set due to an ExpandAsArray on the narro_context_info.validator_user_id reverse relationship
	 * @property-read NarroLog $_NarroLogAsUser the value for the private _objNarroLogAsUser (Read-Only) if set due to an expansion on the narro_log.user_id reverse relationship
	 * @property-read NarroLog[] $_NarroLogAsUserArray the value for the private _objNarroLogAsUserArray (Read-Only) if set due to an ExpandAsArray on the narro_log.user_id reverse relationship
	 * @property-read NarroSuggestion $_NarroSuggestionAsUser the value for the private _objNarroSuggestionAsUser (Read-Only) if set due to an expansion on the narro_suggestion.user_id reverse relationship
	 * @property-read NarroSuggestion[] $_NarroSuggestionAsUserArray the value for the private _objNarroSuggestionAsUserArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion.user_id reverse relationship
	 * @property-read NarroSuggestionVote $_NarroSuggestionVoteAsUser the value for the private _objNarroSuggestionVoteAsUser (Read-Only) if set due to an expansion on the narro_suggestion_vote.user_id reverse relationship
	 * @property-read NarroSuggestionVote[] $_NarroSuggestionVoteAsUserArray the value for the private _objNarroSuggestionVoteAsUserArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion_vote.user_id reverse relationship
	 * @property-read NarroTextComment $_NarroTextCommentAsUser the value for the private _objNarroTextCommentAsUser (Read-Only) if set due to an expansion on the narro_text_comment.user_id reverse relationship
	 * @property-read NarroTextComment[] $_NarroTextCommentAsUserArray the value for the private _objNarroTextCommentAsUserArray (Read-Only) if set due to an ExpandAsArray on the narro_text_comment.user_id reverse relationship
	 * @property-read NarroUserRole $_NarroUserRoleAsUser the value for the private _objNarroUserRoleAsUser (Read-Only) if set due to an expansion on the narro_user_role.user_id reverse relationship
	 * @property-read NarroUserRole[] $_NarroUserRoleAsUserArray the value for the private _objNarroUserRoleAsUserArray (Read-Only) if set due to an ExpandAsArray on the narro_user_role.user_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroUserGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['UserId'] = null;
                $this->_arrHistory['Username'] = null;
                $this->_arrHistory['Password'] = null;
                $this->_arrHistory['Email'] = null;
                $this->_arrHistory['RealName'] = null;
                $this->_arrHistory['Data'] = null;
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
		 * Protected member variable that maps to the database column narro_user.real_name
		 * @var string strRealName
		 */
		protected $strRealName;
		const RealNameMaxLength = 255;
		const RealNameDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_user.data
		 * @var string strData
		 */
		protected $strData;
		const DataDefault = null;


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
		private $_objNarroContextInfoAsValidatorUserArray = null;

		/**
		 * Private member variable that stores a reference to a single NarroLogAsUser object
		 * (of type NarroLog), if this NarroUser object was restored with
		 * an expansion on the narro_log association table.
		 * @var NarroLog _objNarroLogAsUser;
		 */
		private $_objNarroLogAsUser;

		/**
		 * Private member variable that stores a reference to an array of NarroLogAsUser objects
		 * (of type NarroLog[]), if this NarroUser object was restored with
		 * an ExpandAsArray on the narro_log association table.
		 * @var NarroLog[] _objNarroLogAsUserArray;
		 */
		private $_objNarroLogAsUserArray = null;

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
		private $_objNarroSuggestionAsUserArray = null;

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
		private $_objNarroSuggestionVoteAsUserArray = null;

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
		private $_objNarroTextCommentAsUserArray = null;

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
		private $_objNarroUserRoleAsUserArray = null;

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
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intUserId = NarroUser::UserIdDefault;
			$this->strUsername = NarroUser::UsernameDefault;
			$this->strPassword = NarroUser::PasswordDefault;
			$this->strEmail = NarroUser::EmailDefault;
			$this->strRealName = NarroUser::RealNameDefault;
			$this->strData = NarroUser::DataDefault;
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
		 * Load a NarroUser from PK Info
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser
		 */
		public static function Load($intUserId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroUser::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroUsers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
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
			$objDatabase = NarroUser::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroUser-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_user');
			NarroUser::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_user');

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
		 * Static Qcubed Query method to query for a single NarroUser object.
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

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroUser::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroUser::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroUser objects.
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
			return NarroUser::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroUser objects.
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

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			$strQuery = NarroUser::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrouser', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroUser::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroUser
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_user';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			$objBuilder->AddSelectItem($strTableName, 'username', $strAliasPrefix . 'username');
			$objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'real_name', $strAliasPrefix . 'real_name');
			$objBuilder->AddSelectItem($strTableName, 'data', $strAliasPrefix . 'data');
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
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroUser
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intUserId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_user__';


						// Expanding reverse references: NarroContextInfoAsValidatorUser
						$strAlias = $strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextInfoAsValidatorUserArray)
								$objPreviousItem->_objNarroContextInfoAsValidatorUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsValidatorUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextInfoAsValidatorUserArray;
								$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextInfoAsValidatorUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextInfoAsValidatorUserArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroLogAsUser
						$strAlias = $strAliasPrefix . 'narrologasuser__log_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroLogAsUserArray)
								$objPreviousItem->_objNarroLogAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroLogAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroLogAsUserArray;
								$objChildItem = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroLogAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroLogAsUserArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionAsUser
						$strAlias = $strAliasPrefix . 'narrosuggestionasuser__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionAsUserArray)
								$objPreviousItem->_objNarroSuggestionAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionAsUserArray;
								$objChildItem = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionAsUserArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionVoteAsUser
						$strAlias = $strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionVoteAsUserArray)
								$objPreviousItem->_objNarroSuggestionVoteAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionVoteAsUserArray;
								$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionVoteAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionVoteAsUserArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroTextCommentAsUser
						$strAlias = $strAliasPrefix . 'narrotextcommentasuser__text_comment_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroTextCommentAsUserArray)
								$objPreviousItem->_objNarroTextCommentAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroTextCommentAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroTextCommentAsUserArray;
								$objChildItem = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroTextCommentAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroTextCommentAsUserArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroUserRoleAsUser
						$strAlias = $strAliasPrefix . 'narrouserroleasuser__user_role_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroUserRoleAsUserArray)
								$objPreviousItem->_objNarroUserRoleAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroUserRoleAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroUserRoleAsUserArray;
								$objChildItem = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroUserRoleAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroUserRoleAsUserArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_user__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroUser object
			$objToReturn = new NarroUser();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'user_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'user_id'] : $strAliasPrefix . 'user_id';
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'username', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'username'] : $strAliasPrefix . 'username';
			$objToReturn->strUsername = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'password'] : $strAliasPrefix . 'password';
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'real_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'real_name'] : $strAliasPrefix . 'real_name';
			$objToReturn->strRealName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'data', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'data'] : $strAliasPrefix . 'data';
			$objToReturn->strData = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UserId != $objPreviousItem->UserId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextInfoAsValidatorUserArray, $objToReturn->_objNarroContextInfoAsValidatorUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroLogAsUserArray, $objToReturn->_objNarroLogAsUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionAsUserArray, $objToReturn->_objNarroSuggestionAsUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionVoteAsUserArray, $objToReturn->_objNarroSuggestionVoteAsUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroTextCommentAsUserArray, $objToReturn->_objNarroTextCommentAsUserArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroUserRoleAsUserArray, $objToReturn->_objNarroUserRoleAsUserArray) != null) {
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
				$strAliasPrefix = 'narro_user__';




			// Check for NarroContextInfoAsValidatorUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextinfoasvalidatoruser__context_info_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextInfoAsValidatorUserArray)
				$objToReturn->_objNarroContextInfoAsValidatorUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextInfoAsValidatorUserArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextInfoAsValidatorUser = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoasvalidatoruser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroLogAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrologasuser__log_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroLogAsUserArray)
				$objToReturn->_objNarroLogAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroLogAsUserArray[] = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroLogAsUser = NarroLog::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrologasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionasuser__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionAsUserArray)
				$objToReturn->_objNarroSuggestionAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionAsUserArray[] = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionAsUser = NarroSuggestion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionVoteAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionvoteasuser__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionVoteAsUserArray)
				$objToReturn->_objNarroSuggestionVoteAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionVoteAsUserArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionVoteAsUser = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroTextCommentAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrotextcommentasuser__text_comment_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroTextCommentAsUserArray)
				$objToReturn->_objNarroTextCommentAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroTextCommentAsUserArray[] = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroTextCommentAsUser = NarroTextComment::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrotextcommentasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroUserRoleAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'narrouserroleasuser__user_role_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroUserRoleAsUserArray)
				$objToReturn->_objNarroUserRoleAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroUserRoleAsUserArray[] = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroUserRoleAsUser = NarroUserRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrouserroleasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroUsers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroUser[]
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
					$objItem = NarroUser::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroUser::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
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
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser
		*/
		public static function LoadByUserId($intUserId, $objOptionalClauses = null) {
			return NarroUser::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroUser()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroUser object,
		 * by Username Index(es)
		 * @param string $strUsername
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser
		*/
		public static function LoadByUsername($strUsername, $objOptionalClauses = null) {
			return NarroUser::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroUser()->Username, $strUsername)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroUser object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return NarroUser::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroUser()->Email, $strEmail)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroUser object,
		 * by RealName Index(es)
		 * @param string $strRealName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroUser
		*/
		public static function LoadByRealName($strRealName, $objOptionalClauses = null) {
			return NarroUser::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroUser()->RealName, $strRealName)
				),
				$objOptionalClauses
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

            if (!isset($this->_arrHistory['UserId']))
                $this->_arrHistory['UserId'] = $this->UserId;
            if (!isset($this->_arrHistory['Username']))
                $this->_arrHistory['Username'] = $this->Username;
            if (!isset($this->_arrHistory['Password']))
                $this->_arrHistory['Password'] = $this->Password;
            if (!isset($this->_arrHistory['Email']))
                $this->_arrHistory['Email'] = $this->Email;
            if (!isset($this->_arrHistory['RealName']))
                $this->_arrHistory['RealName'] = $this->RealName;
            if (!isset($this->_arrHistory['Data']))
                $this->_arrHistory['Data'] = $this->Data;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

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
							`real_name`,
							`data`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->strUsername) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strRealName) . ',
							' . $objDatabase->SqlVariable($this->strData) . '
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
                        $this->_arrHistory['UserId'] !== $this->UserId ||
                        (
                            $this->UserId instanceof QDateTime &&
                            (string) $this->_arrHistory['UserId'] !== (string) $this->UserId
                        )
                    )
                        $arrUpdateChanges[] = '`user_id` = ' . $objDatabase->SqlVariable($this->intUserId);
                    if (
                        $this->_arrHistory['Username'] !== $this->Username ||
                        (
                            $this->Username instanceof QDateTime &&
                            (string) $this->_arrHistory['Username'] !== (string) $this->Username
                        )
                    )
                        $arrUpdateChanges[] = '`username` = ' . $objDatabase->SqlVariable($this->strUsername);
                    if (
                        $this->_arrHistory['Password'] !== $this->Password ||
                        (
                            $this->Password instanceof QDateTime &&
                            (string) $this->_arrHistory['Password'] !== (string) $this->Password
                        )
                    )
                        $arrUpdateChanges[] = '`password` = ' . $objDatabase->SqlVariable($this->strPassword);
                    if (
                        $this->_arrHistory['Email'] !== $this->Email ||
                        (
                            $this->Email instanceof QDateTime &&
                            (string) $this->_arrHistory['Email'] !== (string) $this->Email
                        )
                    )
                        $arrUpdateChanges[] = '`email` = ' . $objDatabase->SqlVariable($this->strEmail);
                    if (
                        $this->_arrHistory['RealName'] !== $this->RealName ||
                        (
                            $this->RealName instanceof QDateTime &&
                            (string) $this->_arrHistory['RealName'] !== (string) $this->RealName
                        )
                    )
                        $arrUpdateChanges[] = '`real_name` = ' . $objDatabase->SqlVariable($this->strRealName);
                    if (
                        $this->_arrHistory['Data'] !== $this->Data ||
                        (
                            $this->Data instanceof QDateTime &&
                            (string) $this->_arrHistory['Data'] !== (string) $this->Data
                        )
                    )
                        $arrUpdateChanges[] = '`data` = ' . $objDatabase->SqlVariable($this->strData);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_user`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
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

		/**
		 * Reload this NarroUser from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroUser object.');

			// Reload the Object
			$objReloaded = NarroUser::Load($this->intUserId);

			// Update $this's local variables to match
			$this->intUserId = $objReloaded->intUserId;
			$this->__intUserId = $this->intUserId;
			$this->strUsername = $objReloaded->strUsername;
			$this->strPassword = $objReloaded->strPassword;
			$this->strEmail = $objReloaded->strEmail;
			$this->strRealName = $objReloaded->strRealName;
			$this->strData = $objReloaded->strData;
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

				case 'RealName':
					/**
					 * Gets the value for strRealName (Unique)
					 * @return string
					 */
					return $this->strRealName;

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
					return $this->_objNarroContextInfoAsValidatorUserArray;

				case '_NarroLogAsUser':
					/**
					 * Gets the value for the private _objNarroLogAsUser (Read-Only)
					 * if set due to an expansion on the narro_log.user_id reverse relationship
					 * @return NarroLog
					 */
					return $this->_objNarroLogAsUser;

				case '_NarroLogAsUserArray':
					/**
					 * Gets the value for the private _objNarroLogAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the narro_log.user_id reverse relationship
					 * @return NarroLog[]
					 */
					return $this->_objNarroLogAsUserArray;

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
					return $this->_objNarroSuggestionAsUserArray;

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
					return $this->_objNarroSuggestionVoteAsUserArray;

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
					return $this->_objNarroTextCommentAsUserArray;

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
					return $this->_objNarroUserRoleAsUserArray;


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

				case 'RealName':
					/**
					 * Sets the value for strRealName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRealName = QType::Cast($mixValue, QType::String));
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
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
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

			
		
		// Related Objects' Methods for NarroLogAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated NarroLogsAsUser as an array of NarroLog objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroLog[]
		*/
		public function GetNarroLogAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return NarroLog::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated NarroLogsAsUser
		 * @return int
		*/
		public function CountNarroLogsAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return NarroLog::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a NarroLogAsUser
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function AssociateNarroLogAsUser(NarroLog $objNarroLog) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateNarroLogAsUser on this NarroUser with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . '
			');
		}

		/**
		 * Unassociates a NarroLogAsUser
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function UnassociateNarroLogAsUser(NarroLog $objNarroLog) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this NarroUser with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`user_id` = null
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all NarroLogsAsUser
		 * @return void
		*/
		public function UnassociateAllNarroLogsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`narro_log`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated NarroLogAsUser
		 * @param NarroLog $objNarroLog
		 * @return void
		*/
		public function DeleteAssociatedNarroLogAsUser(NarroLog $objNarroLog) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this unsaved NarroUser.');
			if ((is_null($objNarroLog->LogId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this NarroUser with an unsaved NarroLog.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`log_id` = ' . $objDatabase->SqlVariable($objNarroLog->LogId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated NarroLogsAsUser
		 * @return void
		*/
		public function DeleteAllNarroLogsAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateNarroLogAsUser on this unsaved NarroUser.');

			// Get the Database Object for this Class
			$objDatabase = NarroUser::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`narro_log`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroUser"><sequence>';
			$strToReturn .= '<element name="UserId" type="xsd:int"/>';
			$strToReturn .= '<element name="Username" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="RealName" type="xsd:string"/>';
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
			if (property_exists($objSoapObject, 'RealName'))
				$objToReturn->strRealName = $objSoapObject->RealName;
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


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['UserId'] = $this->intUserId;
			$iArray['Username'] = $this->strUsername;
			$iArray['Password'] = $this->strPassword;
			$iArray['Email'] = $this->strEmail;
			$iArray['RealName'] = $this->strRealName;
			$iArray['Data'] = $this->strData;
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
     * @property-read QQNode $UserId
     * @property-read QQNode $Username
     * @property-read QQNode $Password
     * @property-read QQNode $Email
     * @property-read QQNode $RealName
     * @property-read QQNode $Data
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsValidatorUser
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsUser
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsUser
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsUser
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsUser
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroUser extends QQNode {
		protected $strTableName = 'narro_user';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'NarroUser';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'Username':
					return new QQNode('username', 'Username', 'VarChar', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'VarChar', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'RealName':
					return new QQNode('real_name', 'RealName', 'VarChar', $this);
				case 'Data':
					return new QQNode('data', 'Data', 'Blob', $this);
				case 'NarroContextInfoAsValidatorUser':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidatoruser', 'reverse_reference', 'validator_user_id');
				case 'NarroLogAsUser':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionAsUser':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionVoteAsUser':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteasuser', 'reverse_reference', 'user_id');
				case 'NarroTextCommentAsUser':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroUserRoleAsUser':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
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
     * @property-read QQNode $UserId
     * @property-read QQNode $Username
     * @property-read QQNode $Password
     * @property-read QQNode $Email
     * @property-read QQNode $RealName
     * @property-read QQNode $Data
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsValidatorUser
     * @property-read QQReverseReferenceNodeNarroLog $NarroLogAsUser
     * @property-read QQReverseReferenceNodeNarroSuggestion $NarroSuggestionAsUser
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsUser
     * @property-read QQReverseReferenceNodeNarroTextComment $NarroTextCommentAsUser
     * @property-read QQReverseReferenceNodeNarroUserRole $NarroUserRoleAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroUser extends QQReverseReferenceNode {
		protected $strTableName = 'narro_user';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'NarroUser';
		public function __get($strName) {
			switch ($strName) {
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'Username':
					return new QQNode('username', 'Username', 'string', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'RealName':
					return new QQNode('real_name', 'RealName', 'string', $this);
				case 'Data':
					return new QQNode('data', 'Data', 'string', $this);
				case 'NarroContextInfoAsValidatorUser':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoasvalidatoruser', 'reverse_reference', 'validator_user_id');
				case 'NarroLogAsUser':
					return new QQReverseReferenceNodeNarroLog($this, 'narrologasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionAsUser':
					return new QQReverseReferenceNodeNarroSuggestion($this, 'narrosuggestionasuser', 'reverse_reference', 'user_id');
				case 'NarroSuggestionVoteAsUser':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteasuser', 'reverse_reference', 'user_id');
				case 'NarroTextCommentAsUser':
					return new QQReverseReferenceNodeNarroTextComment($this, 'narrotextcommentasuser', 'reverse_reference', 'user_id');
				case 'NarroUserRoleAsUser':
					return new QQReverseReferenceNodeNarroUserRole($this, 'narrouserroleasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'UserId', 'integer', $this);
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
