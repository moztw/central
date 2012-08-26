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
	 * @property-read integer $ContextId the value for intContextId (Read-Only PK)
	 * @property integer $TextId the value for intTextId (Not Null)
	 * @property string $TextAccessKey the value for strTextAccessKey 
	 * @property string $TextCommandKey the value for strTextCommandKey 
	 * @property integer $ProjectId the value for intProjectId (Not Null)
	 * @property string $Context the value for strContext (Not Null)
	 * @property string $ContextMd5 the value for strContextMd5 (Not Null)
	 * @property string $Comment the value for strComment 
	 * @property string $CommentMd5 the value for strCommentMd5 
	 * @property integer $FileId the value for intFileId (Not Null)
	 * @property QDateTime $Created the value for dttCreated (Not Null)
	 * @property QDateTime $Modified the value for dttModified 
	 * @property boolean $Active the value for blnActive (Not Null)
	 * @property NarroText $Text the value for the NarroText object referenced by intTextId (Not Null)
	 * @property NarroProject $Project the value for the NarroProject object referenced by intProjectId (Not Null)
	 * @property NarroFile $File the value for the NarroFile object referenced by intFileId (Not Null)
	 * @property-read NarroContextInfo $_NarroContextInfoAsContext the value for the private _objNarroContextInfoAsContext (Read-Only) if set due to an expansion on the narro_context_info.context_id reverse relationship
	 * @property-read NarroContextInfo[] $_NarroContextInfoAsContextArray the value for the private _objNarroContextInfoAsContextArray (Read-Only) if set due to an ExpandAsArray on the narro_context_info.context_id reverse relationship
	 * @property-read NarroSuggestionVote $_NarroSuggestionVoteAsContext the value for the private _objNarroSuggestionVoteAsContext (Read-Only) if set due to an expansion on the narro_suggestion_vote.context_id reverse relationship
	 * @property-read NarroSuggestionVote[] $_NarroSuggestionVoteAsContextArray the value for the private _objNarroSuggestionVoteAsContextArray (Read-Only) if set due to an ExpandAsArray on the narro_suggestion_vote.context_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NarroContextGen extends QBaseClass implements IteratorAggregate {
        public function __construct() {
                $this->_arrHistory['ContextId'] = null;
                $this->_arrHistory['TextId'] = null;
                $this->_arrHistory['TextAccessKey'] = null;
                $this->_arrHistory['TextCommandKey'] = null;
                $this->_arrHistory['ProjectId'] = null;
                $this->_arrHistory['Context'] = null;
                $this->_arrHistory['ContextMd5'] = null;
                $this->_arrHistory['Comment'] = null;
                $this->_arrHistory['CommentMd5'] = null;
                $this->_arrHistory['FileId'] = null;
                $this->_arrHistory['Created'] = null;
                $this->_arrHistory['Modified'] = null;
                $this->_arrHistory['Active'] = null;
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
		 * Protected member variable that maps to the database column narro_context.text_access_key
		 * @var string strTextAccessKey
		 */
		protected $strTextAccessKey;
		const TextAccessKeyMaxLength = 1;
		const TextAccessKeyDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.text_command_key
		 * @var string strTextCommandKey
		 */
		protected $strTextCommandKey;
		const TextCommandKeyMaxLength = 1;
		const TextCommandKeyDefault = null;


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
		const ContextMd5MaxLength = 32;
		const ContextMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_context.comment
		 * @var string strComment
		 */
		protected $strComment;
		const CommentDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.comment_md5
		 * @var string strCommentMd5
		 */
		protected $strCommentMd5;
		const CommentMd5MaxLength = 32;
		const CommentMd5Default = null;


		/**
		 * Protected member variable that maps to the database column narro_context.file_id
		 * @var integer intFileId
		 */
		protected $intFileId;
		const FileIdDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.created
		 * @var QDateTime dttCreated
		 */
		protected $dttCreated;
		const CreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.modified
		 * @var QDateTime dttModified
		 */
		protected $dttModified;
		const ModifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column narro_context.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


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
		private $_objNarroContextInfoAsContextArray = null;

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
		private $_objNarroSuggestionVoteAsContextArray = null;

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



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intContextId = NarroContext::ContextIdDefault;
			$this->intTextId = NarroContext::TextIdDefault;
			$this->strTextAccessKey = NarroContext::TextAccessKeyDefault;
			$this->strTextCommandKey = NarroContext::TextCommandKeyDefault;
			$this->intProjectId = NarroContext::ProjectIdDefault;
			$this->strContext = NarroContext::ContextDefault;
			$this->strContextMd5 = NarroContext::ContextMd5Default;
			$this->strComment = NarroContext::CommentDefault;
			$this->strCommentMd5 = NarroContext::CommentMd5Default;
			$this->intFileId = NarroContext::FileIdDefault;
			$this->dttCreated = (NarroContext::CreatedDefault === null)?null:new QDateTime(NarroContext::CreatedDefault);
			$this->dttModified = (NarroContext::ModifiedDefault === null)?null:new QDateTime(NarroContext::ModifiedDefault);
			$this->blnActive = NarroContext::ActiveDefault;
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
		 * Load a NarroContext from PK Info
		 * @param integer $intContextId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext
		 */
		public static function Load($intContextId, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return NarroContext::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroContext()->ContextId, $intContextId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all NarroContexts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
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
			$objDatabase = NarroContext::GetDatabase();

			// Create/Build out the QueryBuilder object with NarroContext-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'narro_context');
			NarroContext::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('narro_context');

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
		 * Static Qcubed Query method to query for a single NarroContext object.
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

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = NarroContext::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return NarroContext::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of NarroContext objects.
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
			return NarroContext::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of NarroContext objects.
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

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = NarroContext::GetDatabase();

			$strQuery = NarroContext::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/narrocontext', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = NarroContext::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this NarroContext
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'narro_context';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'context_id', $strAliasPrefix . 'context_id');
			$objBuilder->AddSelectItem($strTableName, 'text_id', $strAliasPrefix . 'text_id');
			$objBuilder->AddSelectItem($strTableName, 'text_access_key', $strAliasPrefix . 'text_access_key');
			$objBuilder->AddSelectItem($strTableName, 'text_command_key', $strAliasPrefix . 'text_command_key');
			$objBuilder->AddSelectItem($strTableName, 'project_id', $strAliasPrefix . 'project_id');
			$objBuilder->AddSelectItem($strTableName, 'context', $strAliasPrefix . 'context');
			$objBuilder->AddSelectItem($strTableName, 'context_md5', $strAliasPrefix . 'context_md5');
			$objBuilder->AddSelectItem($strTableName, 'comment', $strAliasPrefix . 'comment');
			$objBuilder->AddSelectItem($strTableName, 'comment_md5', $strAliasPrefix . 'comment_md5');
			$objBuilder->AddSelectItem($strTableName, 'file_id', $strAliasPrefix . 'file_id');
			$objBuilder->AddSelectItem($strTableName, 'created', $strAliasPrefix . 'created');
			$objBuilder->AddSelectItem($strTableName, 'modified', $strAliasPrefix . 'modified');
			$objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
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
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return NarroContext
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'context_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intContextId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'narro_context__';


						// Expanding reverse references: NarroContextInfoAsContext
						$strAlias = $strAliasPrefix . 'narrocontextinfoascontext__context_info_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroContextInfoAsContextArray)
								$objPreviousItem->_objNarroContextInfoAsContextArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroContextInfoAsContextArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroContextInfoAsContextArray;
								$objChildItem = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroContextInfoAsContextArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroContextInfoAsContextArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: NarroSuggestionVoteAsContext
						$strAlias = $strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objNarroSuggestionVoteAsContextArray)
								$objPreviousItem->_objNarroSuggestionVoteAsContextArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objNarroSuggestionVoteAsContextArray)) {
								$objPreviousChildItems = $objPreviousItem->_objNarroSuggestionVoteAsContextArray;
								$objChildItem = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objNarroSuggestionVoteAsContextArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objNarroSuggestionVoteAsContextArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'narro_context__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the NarroContext object
			$objToReturn = new NarroContext();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'context_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'context_id'] : $strAliasPrefix . 'context_id';
			$objToReturn->intContextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_id'] : $strAliasPrefix . 'text_id';
			$objToReturn->intTextId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_access_key', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_access_key'] : $strAliasPrefix . 'text_access_key';
			$objToReturn->strTextAccessKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'text_command_key', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text_command_key'] : $strAliasPrefix . 'text_command_key';
			$objToReturn->strTextCommandKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'project_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'project_id'] : $strAliasPrefix . 'project_id';
			$objToReturn->intProjectId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'context', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'context'] : $strAliasPrefix . 'context';
			$objToReturn->strContext = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'context_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'context_md5'] : $strAliasPrefix . 'context_md5';
			$objToReturn->strContextMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'comment', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comment'] : $strAliasPrefix . 'comment';
			$objToReturn->strComment = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'comment_md5', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'comment_md5'] : $strAliasPrefix . 'comment_md5';
			$objToReturn->strCommentMd5 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'file_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'file_id'] : $strAliasPrefix . 'file_id';
			$objToReturn->intFileId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'created', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'created'] : $strAliasPrefix . 'created';
			$objToReturn->dttCreated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'modified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'modified'] : $strAliasPrefix . 'modified';
			$objToReturn->dttModified = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active'] : $strAliasPrefix . 'active';
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ContextId != $objPreviousItem->ContextId) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroContextInfoAsContextArray, $objToReturn->_objNarroContextInfoAsContextArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objNarroSuggestionVoteAsContextArray, $objToReturn->_objNarroSuggestionVoteAsContextArray) != null) {
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
				$strAliasPrefix = 'narro_context__';

			// Check for Text Early Binding
			$strAlias = $strAliasPrefix . 'text_id__text_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objText = NarroText::InstantiateDbRow($objDbRow, $strAliasPrefix . 'text_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Project Early Binding
			$strAlias = $strAliasPrefix . 'project_id__project_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objProject = NarroProject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'project_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for File Early Binding
			$strAlias = $strAliasPrefix . 'file_id__file_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFile = NarroFile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'file_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for NarroContextInfoAsContext Virtual Binding
			$strAlias = $strAliasPrefix . 'narrocontextinfoascontext__context_info_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroContextInfoAsContextArray)
				$objToReturn->_objNarroContextInfoAsContextArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroContextInfoAsContextArray[] = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroContextInfoAsContext = NarroContextInfo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrocontextinfoascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for NarroSuggestionVoteAsContext Virtual Binding
			$strAlias = $strAliasPrefix . 'narrosuggestionvoteascontext__suggestion_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objNarroSuggestionVoteAsContextArray)
				$objToReturn->_objNarroSuggestionVoteAsContextArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objNarroSuggestionVoteAsContextArray[] = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objNarroSuggestionVoteAsContext = NarroSuggestionVote::InstantiateDbRow($objDbRow, $strAliasPrefix . 'narrosuggestionvoteascontext__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

            $objToReturn->SaveHistory(false);
			return $objToReturn;
		}

		/**
		 * Instantiate an array of NarroContexts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return NarroContext[]
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
					$objItem = NarroContext::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = NarroContext::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
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
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext
		*/
		public static function LoadByContextId($intContextId, $objOptionalClauses = null) {
			return NarroContext::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroContext()->ContextId, $intContextId)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single NarroContext object,
		 * by TextId, ContextMd5, FileId, CommentMd5 Index(es)
		 * @param integer $intTextId
		 * @param string $strContextMd5
		 * @param integer $intFileId
		 * @param string $strCommentMd5
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext
		*/
		public static function LoadByTextIdContextMd5FileIdCommentMd5($intTextId, $strContextMd5, $intFileId, $strCommentMd5, $objOptionalClauses = null) {
			return NarroContext::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::NarroContext()->TextId, $intTextId),
					QQ::Equal(QQN::NarroContext()->ContextMd5, $strContextMd5),
					QQ::Equal(QQN::NarroContext()->FileId, $intFileId),
					QQ::Equal(QQN::NarroContext()->CommentMd5, $strCommentMd5)
				),
				$objOptionalClauses
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
			
		/**
		 * Load an array of NarroContext objects,
		 * by ProjectId, Active Index(es)
		 * @param integer $intProjectId
		 * @param boolean $blnActive
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByProjectIdActive($intProjectId, $blnActive, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByProjectIdActive query
			try {
				return NarroContext::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::NarroContext()->ProjectId, $intProjectId),
					QQ::Equal(QQN::NarroContext()->Active, $blnActive)
					),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by ProjectId, Active Index(es)
		 * @param integer $intProjectId
		 * @param boolean $blnActive
		 * @return int
		*/
		public static function CountByProjectIdActive($intProjectId, $blnActive) {
			// Call NarroContext::QueryCount to perform the CountByProjectIdActive query
			return NarroContext::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::NarroContext()->ProjectId, $intProjectId),
				QQ::Equal(QQN::NarroContext()->Active, $blnActive)
				)
			);
		}
			
		/**
		 * Load an array of NarroContext objects,
		 * by Active Index(es)
		 * @param boolean $blnActive
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return NarroContext[]
		*/
		public static function LoadArrayByActive($blnActive, $objOptionalClauses = null) {
			// Call NarroContext::QueryArray to perform the LoadArrayByActive query
			try {
				return NarroContext::QueryArray(
					QQ::Equal(QQN::NarroContext()->Active, $blnActive),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count NarroContexts
		 * by Active Index(es)
		 * @param boolean $blnActive
		 * @return int
		*/
		public static function CountByActive($blnActive) {
			// Call NarroContext::QueryCount to perform the CountByActive query
			return NarroContext::QueryCount(
				QQ::Equal(QQN::NarroContext()->Active, $blnActive)
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

            if (!isset($this->_arrHistory['ContextId']))
                $this->_arrHistory['ContextId'] = $this->ContextId;
            if (!isset($this->_arrHistory['TextId']))
                $this->_arrHistory['TextId'] = $this->TextId;
            if (!isset($this->_arrHistory['TextAccessKey']))
                $this->_arrHistory['TextAccessKey'] = $this->TextAccessKey;
            if (!isset($this->_arrHistory['TextCommandKey']))
                $this->_arrHistory['TextCommandKey'] = $this->TextCommandKey;
            if (!isset($this->_arrHistory['ProjectId']))
                $this->_arrHistory['ProjectId'] = $this->ProjectId;
            if (!isset($this->_arrHistory['Context']))
                $this->_arrHistory['Context'] = $this->Context;
            if (!isset($this->_arrHistory['ContextMd5']))
                $this->_arrHistory['ContextMd5'] = $this->ContextMd5;
            if (!isset($this->_arrHistory['Comment']))
                $this->_arrHistory['Comment'] = $this->Comment;
            if (!isset($this->_arrHistory['CommentMd5']))
                $this->_arrHistory['CommentMd5'] = $this->CommentMd5;
            if (!isset($this->_arrHistory['FileId']))
                $this->_arrHistory['FileId'] = $this->FileId;
            if (!isset($this->_arrHistory['Created']))
                $this->_arrHistory['Created'] = $this->Created;
            if (!isset($this->_arrHistory['Modified']))
                $this->_arrHistory['Modified'] = $this->Modified;
            if (!isset($this->_arrHistory['Active']))
                $this->_arrHistory['Active'] = $this->Active;
        }


		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

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
							`text_access_key`,
							`text_command_key`,
							`project_id`,
							`context`,
							`context_md5`,
							`comment`,
							`comment_md5`,
							`file_id`,
							`created`,
							`modified`,
							`active`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTextId) . ',
							' . $objDatabase->SqlVariable($this->strTextAccessKey) . ',
							' . $objDatabase->SqlVariable($this->strTextCommandKey) . ',
							' . $objDatabase->SqlVariable($this->intProjectId) . ',
							' . $objDatabase->SqlVariable($this->strContext) . ',
							' . $objDatabase->SqlVariable($this->strContextMd5) . ',
							' . $objDatabase->SqlVariable($this->strComment) . ',
							' . $objDatabase->SqlVariable($this->strCommentMd5) . ',
							' . $objDatabase->SqlVariable($this->intFileId) . ',
							' . $objDatabase->SqlVariable($this->dttCreated) . ',
							' . $objDatabase->SqlVariable($this->dttModified) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intContextId = $objDatabase->InsertId('narro_context', 'context_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
                    if (
                        $this->_arrHistory['TextId'] !== $this->TextId ||
                        (
                            $this->TextId instanceof QDateTime &&
                            (string) $this->_arrHistory['TextId'] !== (string) $this->TextId
                        )
                    )
                        $arrUpdateChanges[] = '`text_id` = ' . $objDatabase->SqlVariable($this->intTextId);
                    if (
                        $this->_arrHistory['TextAccessKey'] !== $this->TextAccessKey ||
                        (
                            $this->TextAccessKey instanceof QDateTime &&
                            (string) $this->_arrHistory['TextAccessKey'] !== (string) $this->TextAccessKey
                        )
                    )
                        $arrUpdateChanges[] = '`text_access_key` = ' . $objDatabase->SqlVariable($this->strTextAccessKey);
                    if (
                        $this->_arrHistory['TextCommandKey'] !== $this->TextCommandKey ||
                        (
                            $this->TextCommandKey instanceof QDateTime &&
                            (string) $this->_arrHistory['TextCommandKey'] !== (string) $this->TextCommandKey
                        )
                    )
                        $arrUpdateChanges[] = '`text_command_key` = ' . $objDatabase->SqlVariable($this->strTextCommandKey);
                    if (
                        $this->_arrHistory['ProjectId'] !== $this->ProjectId ||
                        (
                            $this->ProjectId instanceof QDateTime &&
                            (string) $this->_arrHistory['ProjectId'] !== (string) $this->ProjectId
                        )
                    )
                        $arrUpdateChanges[] = '`project_id` = ' . $objDatabase->SqlVariable($this->intProjectId);
                    if (
                        $this->_arrHistory['Context'] !== $this->Context ||
                        (
                            $this->Context instanceof QDateTime &&
                            (string) $this->_arrHistory['Context'] !== (string) $this->Context
                        )
                    )
                        $arrUpdateChanges[] = '`context` = ' . $objDatabase->SqlVariable($this->strContext);
                    if (
                        $this->_arrHistory['ContextMd5'] !== $this->ContextMd5 ||
                        (
                            $this->ContextMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['ContextMd5'] !== (string) $this->ContextMd5
                        )
                    )
                        $arrUpdateChanges[] = '`context_md5` = ' . $objDatabase->SqlVariable($this->strContextMd5);
                    if (
                        $this->_arrHistory['Comment'] !== $this->Comment ||
                        (
                            $this->Comment instanceof QDateTime &&
                            (string) $this->_arrHistory['Comment'] !== (string) $this->Comment
                        )
                    )
                        $arrUpdateChanges[] = '`comment` = ' . $objDatabase->SqlVariable($this->strComment);
                    if (
                        $this->_arrHistory['CommentMd5'] !== $this->CommentMd5 ||
                        (
                            $this->CommentMd5 instanceof QDateTime &&
                            (string) $this->_arrHistory['CommentMd5'] !== (string) $this->CommentMd5
                        )
                    )
                        $arrUpdateChanges[] = '`comment_md5` = ' . $objDatabase->SqlVariable($this->strCommentMd5);
                    if (
                        $this->_arrHistory['FileId'] !== $this->FileId ||
                        (
                            $this->FileId instanceof QDateTime &&
                            (string) $this->_arrHistory['FileId'] !== (string) $this->FileId
                        )
                    )
                        $arrUpdateChanges[] = '`file_id` = ' . $objDatabase->SqlVariable($this->intFileId);
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
                    if (
                        $this->_arrHistory['Active'] !== $this->Active ||
                        (
                            $this->Active instanceof QDateTime &&
                            (string) $this->_arrHistory['Active'] !== (string) $this->Active
                        )
                    )
                        $arrUpdateChanges[] = '`active` = ' . $objDatabase->SqlVariable($this->blnActive);

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`narro_context`
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
							`context_id` = ' . $objDatabase->SqlVariable($this->intContextId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

            $blnInserted = (!$this->__blnRestored) || ($blnForceInsert);
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

		/**
		 * Reload this NarroContext from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved NarroContext object.');

			// Reload the Object
			$objReloaded = NarroContext::Load($this->intContextId);

			// Update $this's local variables to match
			$this->TextId = $objReloaded->TextId;
			$this->strTextAccessKey = $objReloaded->strTextAccessKey;
			$this->strTextCommandKey = $objReloaded->strTextCommandKey;
			$this->ProjectId = $objReloaded->ProjectId;
			$this->strContext = $objReloaded->strContext;
			$this->strContextMd5 = $objReloaded->strContextMd5;
			$this->strComment = $objReloaded->strComment;
			$this->strCommentMd5 = $objReloaded->strCommentMd5;
			$this->FileId = $objReloaded->FileId;
			$this->dttCreated = $objReloaded->dttCreated;
			$this->dttModified = $objReloaded->dttModified;
			$this->blnActive = $objReloaded->blnActive;
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

				case 'TextAccessKey':
					/**
					 * Gets the value for strTextAccessKey 
					 * @return string
					 */
					return $this->strTextAccessKey;

				case 'TextCommandKey':
					/**
					 * Gets the value for strTextCommandKey 
					 * @return string
					 */
					return $this->strTextCommandKey;

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

				case 'Comment':
					/**
					 * Gets the value for strComment 
					 * @return string
					 */
					return $this->strComment;

				case 'CommentMd5':
					/**
					 * Gets the value for strCommentMd5 
					 * @return string
					 */
					return $this->strCommentMd5;

				case 'FileId':
					/**
					 * Gets the value for intFileId (Not Null)
					 * @return integer
					 */
					return $this->intFileId;

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
					return $this->_objNarroContextInfoAsContextArray;

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
					return $this->_objNarroSuggestionVoteAsContextArray;


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

				case 'TextAccessKey':
					/**
					 * Sets the value for strTextAccessKey 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTextAccessKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextCommandKey':
					/**
					 * Sets the value for strTextCommandKey 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTextCommandKey = QType::Cast($mixValue, QType::String));
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

				case 'Comment':
					/**
					 * Sets the value for strComment 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strComment = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentMd5':
					/**
					 * Sets the value for strCommentMd5 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentMd5 = QType::Cast($mixValue, QType::String));
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
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="NarroContext"><sequence>';
			$strToReturn .= '<element name="ContextId" type="xsd:int"/>';
			$strToReturn .= '<element name="Text" type="xsd1:NarroText"/>';
			$strToReturn .= '<element name="TextAccessKey" type="xsd:string"/>';
			$strToReturn .= '<element name="TextCommandKey" type="xsd:string"/>';
			$strToReturn .= '<element name="Project" type="xsd1:NarroProject"/>';
			$strToReturn .= '<element name="Context" type="xsd:string"/>';
			$strToReturn .= '<element name="ContextMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="Comment" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentMd5" type="xsd:string"/>';
			$strToReturn .= '<element name="File" type="xsd1:NarroFile"/>';
			$strToReturn .= '<element name="Created" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Modified" type="xsd:dateTime"/>';
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
			if (property_exists($objSoapObject, 'TextAccessKey'))
				$objToReturn->strTextAccessKey = $objSoapObject->TextAccessKey;
			if (property_exists($objSoapObject, 'TextCommandKey'))
				$objToReturn->strTextCommandKey = $objSoapObject->TextCommandKey;
			if ((property_exists($objSoapObject, 'Project')) &&
				($objSoapObject->Project))
				$objToReturn->Project = NarroProject::GetObjectFromSoapObject($objSoapObject->Project);
			if (property_exists($objSoapObject, 'Context'))
				$objToReturn->strContext = $objSoapObject->Context;
			if (property_exists($objSoapObject, 'ContextMd5'))
				$objToReturn->strContextMd5 = $objSoapObject->ContextMd5;
			if (property_exists($objSoapObject, 'Comment'))
				$objToReturn->strComment = $objSoapObject->Comment;
			if (property_exists($objSoapObject, 'CommentMd5'))
				$objToReturn->strCommentMd5 = $objSoapObject->CommentMd5;
			if ((property_exists($objSoapObject, 'File')) &&
				($objSoapObject->File))
				$objToReturn->File = NarroFile::GetObjectFromSoapObject($objSoapObject->File);
			if (property_exists($objSoapObject, 'Created'))
				$objToReturn->dttCreated = new QDateTime($objSoapObject->Created);
			if (property_exists($objSoapObject, 'Modified'))
				$objToReturn->dttModified = new QDateTime($objSoapObject->Modified);
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
			$iArray['ContextId'] = $this->intContextId;
			$iArray['TextId'] = $this->intTextId;
			$iArray['TextAccessKey'] = $this->strTextAccessKey;
			$iArray['TextCommandKey'] = $this->strTextCommandKey;
			$iArray['ProjectId'] = $this->intProjectId;
			$iArray['Context'] = $this->strContext;
			$iArray['ContextMd5'] = $this->strContextMd5;
			$iArray['Comment'] = $this->strComment;
			$iArray['CommentMd5'] = $this->strCommentMd5;
			$iArray['FileId'] = $this->intFileId;
			$iArray['Created'] = $this->dttCreated;
			$iArray['Modified'] = $this->dttModified;
			$iArray['Active'] = $this->blnActive;
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
     * @property-read QQNode $ContextId
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $TextAccessKey
     * @property-read QQNode $TextCommandKey
     * @property-read QQNode $ProjectId
     * @property-read QQNodeNarroProject $Project
     * @property-read QQNode $Context
     * @property-read QQNode $ContextMd5
     * @property-read QQNode $Comment
     * @property-read QQNode $CommentMd5
     * @property-read QQNode $FileId
     * @property-read QQNodeNarroFile $File
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsContext
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsContext

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNarroContext extends QQNode {
		protected $strTableName = 'narro_context';
		protected $strPrimaryKey = 'context_id';
		protected $strClassName = 'NarroContext';
		public function __get($strName) {
			switch ($strName) {
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'Integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'Integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'Integer', $this);
				case 'TextAccessKey':
					return new QQNode('text_access_key', 'TextAccessKey', 'VarChar', $this);
				case 'TextCommandKey':
					return new QQNode('text_command_key', 'TextCommandKey', 'VarChar', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'Integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'Project', 'Integer', $this);
				case 'Context':
					return new QQNode('context', 'Context', 'Blob', $this);
				case 'ContextMd5':
					return new QQNode('context_md5', 'ContextMd5', 'VarChar', $this);
				case 'Comment':
					return new QQNode('comment', 'Comment', 'Blob', $this);
				case 'CommentMd5':
					return new QQNode('comment_md5', 'CommentMd5', 'VarChar', $this);
				case 'FileId':
					return new QQNode('file_id', 'FileId', 'Integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'File', 'Integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'DateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'DateTime', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Bit', $this);
				case 'NarroContextInfoAsContext':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoascontext', 'reverse_reference', 'context_id');
				case 'NarroSuggestionVoteAsContext':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteascontext', 'reverse_reference', 'context_id');

				case '_PrimaryKeyNode':
					return new QQNode('context_id', 'ContextId', 'Integer', $this);
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
     * @property-read QQNode $ContextId
     * @property-read QQNode $TextId
     * @property-read QQNodeNarroText $Text
     * @property-read QQNode $TextAccessKey
     * @property-read QQNode $TextCommandKey
     * @property-read QQNode $ProjectId
     * @property-read QQNodeNarroProject $Project
     * @property-read QQNode $Context
     * @property-read QQNode $ContextMd5
     * @property-read QQNode $Comment
     * @property-read QQNode $CommentMd5
     * @property-read QQNode $FileId
     * @property-read QQNodeNarroFile $File
     * @property-read QQNode $Created
     * @property-read QQNode $Modified
     * @property-read QQNode $Active
     *
     *
     * @property-read QQReverseReferenceNodeNarroContextInfo $NarroContextInfoAsContext
     * @property-read QQReverseReferenceNodeNarroSuggestionVote $NarroSuggestionVoteAsContext

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNarroContext extends QQReverseReferenceNode {
		protected $strTableName = 'narro_context';
		protected $strPrimaryKey = 'context_id';
		protected $strClassName = 'NarroContext';
		public function __get($strName) {
			switch ($strName) {
				case 'ContextId':
					return new QQNode('context_id', 'ContextId', 'integer', $this);
				case 'TextId':
					return new QQNode('text_id', 'TextId', 'integer', $this);
				case 'Text':
					return new QQNodeNarroText('text_id', 'Text', 'integer', $this);
				case 'TextAccessKey':
					return new QQNode('text_access_key', 'TextAccessKey', 'string', $this);
				case 'TextCommandKey':
					return new QQNode('text_command_key', 'TextCommandKey', 'string', $this);
				case 'ProjectId':
					return new QQNode('project_id', 'ProjectId', 'integer', $this);
				case 'Project':
					return new QQNodeNarroProject('project_id', 'Project', 'integer', $this);
				case 'Context':
					return new QQNode('context', 'Context', 'string', $this);
				case 'ContextMd5':
					return new QQNode('context_md5', 'ContextMd5', 'string', $this);
				case 'Comment':
					return new QQNode('comment', 'Comment', 'string', $this);
				case 'CommentMd5':
					return new QQNode('comment_md5', 'CommentMd5', 'string', $this);
				case 'FileId':
					return new QQNode('file_id', 'FileId', 'integer', $this);
				case 'File':
					return new QQNodeNarroFile('file_id', 'File', 'integer', $this);
				case 'Created':
					return new QQNode('created', 'Created', 'QDateTime', $this);
				case 'Modified':
					return new QQNode('modified', 'Modified', 'QDateTime', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'boolean', $this);
				case 'NarroContextInfoAsContext':
					return new QQReverseReferenceNodeNarroContextInfo($this, 'narrocontextinfoascontext', 'reverse_reference', 'context_id');
				case 'NarroSuggestionVoteAsContext':
					return new QQReverseReferenceNodeNarroSuggestionVote($this, 'narrosuggestionvoteascontext', 'reverse_reference', 'context_id');

				case '_PrimaryKeyNode':
					return new QQNode('context_id', 'ContextId', 'integer', $this);
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
