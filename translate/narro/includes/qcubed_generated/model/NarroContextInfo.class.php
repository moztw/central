<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */

    require(__MODEL_GEN__ . '/NarroContextInfoGen.class.php');

    /**
    * The NarroContextInfo class defined here contains any
    * customized code for the NarroContextInfo class in the
    * Object Relational Model.  It represents the "narro_context_info" table
    * in the database, and extends from the code generated abstract NarroContextInfoGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package Narro
    * @subpackage DataObjects
    *
    */
    class NarroContextInfo extends NarroContextInfoGen {
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroContextInfo->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroContextInfo Object %s',  $this->intContextInfoId);
        }

        public static function GetContext($intContextId, $strSearchText, $intSearchType, $intFilter, $objSortInfo, $objExtraCondition) {
            switch($intSearchType) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $arrContexts = self::LoadArrayByTextValue($strSearchText, $intFilter, QQ::LimitInfo(1, 0), $objSortInfo, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $arrContexts = self::LoadArrayBySuggestionValue($strSearchText, $intFilter, QQ::LimitInfo(1, 0), $objSortInfo, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_AUTHORS:
                    $arrContexts = self::LoadArrayByAuthor($strSearchText, $intFilter, QQ::LimitInfo(1, 0), $objSortInfo, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_FILES:
                    $arrContexts = self::LoadArrayByFileName($strSearchText, $intFilter, QQ::LimitInfo(1, 0), $objSortInfo, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_CONTEXTS:
                    $arrContexts = self::LoadArrayByContext($strSearchText, $intFilter, QQ::LimitInfo(1, 0), $objSortInfo, $objExtraCondition);
                    break;
                default:
                    if ($intFilter == NarroTextListForm::SHOW_UNTRANSLATED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0));
                    elseif ($intFilter == NarroTextListForm::SHOW_APPROVED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId));
                    elseif ($intFilter == NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    else
                        $objFilterCondition = $objExtraCondition;

                    $arrContexts = self::QueryArray($objFilterCondition, array(QQ::LimitInfo(1, 0), $objSortInfo, QQ::Expand(QQN::NarroContextInfo()->Context->Text)));
            }

            if (count($arrContexts) && $arrContexts[0] instanceof NarroContextInfo)
                return $arrContexts[0];
            else
                return false;
        }

        public static function GetContextLeft($intContextId, $strSearchText, $intSearchType, $intFilter, $objSortInfo, $objExtraCondition) {
            switch($intSearchType) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $intContextCount = self::CountByTextValue($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $intContextCount = self::CountBySuggestionValue($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_AUTHORS:
                    $intContextCount = self::CountByAuthor($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_FILES:
                    $intContextCount = self::CountByFileName($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_CONTEXTS:
                    $intContextCount = self::CountByContext($strSearchText, $intFilter, $objExtraCondition);
                    break;
                default:
                    if ($intFilter == NarroTextListForm::SHOW_UNTRANSLATED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0));
                    elseif ($intFilter == NarroTextListForm::SHOW_APPROVED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId));
                    elseif ($intFilter == NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    else
                        $objFilterCondition = $objExtraCondition;

                    $intContextCount = self::QueryCount($objFilterCondition, array(QQ::OrderBy(QQN::NarroContextInfo()->ContextId)));
            }

            return $intContextCount;
        }

        public static function GetContextCount($strSearchText, $intSearchType, $intFilter, $objSortInfo, $objExtraCondition) {
            switch($intSearchType) {
                case NarroTextListForm::SEARCH_TEXTS:
                    $intContextCount = self::CountByTextValue($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_SUGGESTIONS:
                    $intContextCount = self::CountBySuggestionValue($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_AUTHORS:
                    $intContextCount = self::CountByAuthor($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_FILES:
                    $intContextCount = self::CountByFileName($strSearchText, $intFilter, $objExtraCondition);
                    break;
                case NarroTextListForm::SEARCH_CONTEXTS:
                    $intContextCount = self::CountByContext($strSearchText, $intFilter, $objExtraCondition);
                    break;
                default:
                    if ($intFilter == NarroTextListForm::SHOW_UNTRANSLATED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0));
                    elseif ($intFilter == NarroTextListForm::SHOW_APPROVED_TEXTS)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId));
                    elseif ($intFilter == NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL)
                        $objFilterCondition = QQ::AndCondition($objExtraCondition, QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    else
                        $objFilterCondition = $objExtraCondition;

                    $intContextCount = self::QueryCount($objFilterCondition);
            }

            return $intContextCount;
        }

        public static function LoadArrayByContext($strContext, $intFilter, $objLimitInfo = null, $objSortInfo = null, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (!is_object($objSortInfo))
                $objSortInfo = QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true));

            if (!is_object($objLimitInfo))
                $objLimitInfo = QQ::LimitInfo(20, 0);

            if (trim($strContext) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strContext))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Context, substr($strContext, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Context,  '%' . $strContext . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1), QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $arrContext = NarroContextInfo::QueryArray(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array($objLimitInfo, $objSortInfo, QQ::Expand(QQN::NarroContextInfo()->Context->Text)));

            return $arrContext;
        }

        public static function CountByContext($strContext, $intFilter, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (trim($strContext) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strContext))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Context, substr($strContext, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Context,  '%' . $strContext . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition));

            return $intContextCount;
        }

        public static function LoadArrayByTextValue($strTextValue, $intFilter, $objLimitInfo = null, $objSortInfo = null, $objExtraCondition = null) {

            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (!is_object($objSortInfo))
                $objSortInfo = QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true));

            if (!is_object($objLimitInfo))
                $objLimitInfo = QQ::LimitInfo(20, 0);

            if (trim($strTextValue) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strTextValue))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValue, substr($strTextValue, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->TextValue,  '%' . $strTextValue . '%');

            $objClauses = array($objLimitInfo, $objSortInfo, QQ::Expand(QQN::NarroContextInfo()->Context->Text));

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    $objClauses[] = QQ::Expand(QQN::NarroContextInfo()->ValidSuggestion);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $arrContext = NarroContextInfo::QueryArray(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), $objClauses);

            return $arrContext;
        }

        public static function CountByTextValue($strTextValue, $intFilter, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (trim($strTextValue) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strTextValue))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->TextValue, substr($strTextValue, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->TextValue,  '%' . $strTextValue . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            if (is_object($objExtraCondition))
                $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition));
            else
                $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition));

            return $intContextCount;
        }

        public static function LoadArrayBySuggestionValue($strSuggestion, $intFilter, $objLimitInfo = null, $objSortInfo = null, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (!is_object($objSortInfo))
                $objSortInfo = QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true));

            if (!is_object($objLimitInfo))
                $objLimitInfo = QQ::LimitInfo(20, 0);

            if (trim($strSuggestion) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strSuggestion))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue, substr($strSuggestion, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue,  '%' . $strSuggestion . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $arrContext = NarroContextInfo::QueryArray(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array($objLimitInfo, $objSortInfo, QQ::GroupBy(QQN::NarroContextInfo()->ContextId), QQ::Expand(QQN::NarroContextInfo()->Context->Text)));

            return $arrContext;
        }

        public static function CountBySuggestionValue($strSuggestion, $intFilter, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();
            if (trim($strSuggestion) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strSuggestion))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue, substr($strSuggestion, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->SuggestionValue,  '%' . $strSuggestion . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array(QQ::GroupBy(QQN::NarroContextInfo()->ContextId)));

            return $intContextCount;
        }

        public static function LoadArrayByAuthor($strAuthor, $intFilter, $objLimitInfo = null, $objSortInfo = null, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (!is_object($objSortInfo))
                $objSortInfo = QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true));

            if (!is_object($objLimitInfo))
                $objLimitInfo = QQ::LimitInfo(20, 0);

            if (trim($strAuthor) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strAuthor))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->Username, substr($strAuthor, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->Username,  '%' . $strAuthor . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $arrContext = NarroContextInfo::QueryArray(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array($objLimitInfo, $objSortInfo, QQ::GroupBy(QQN::NarroContextInfo()->ContextId), QQ::Expand(QQN::NarroContextInfo()->Context->Text)));

            return $arrContext;
        }

        public static function CountByAuthor($strAuthor, $intFilter, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();
            if (trim($strAuthor) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strAuthor))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->Username, substr($strAuthor, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->Text->NarroSuggestionAsText->User->Username,  '%' . $strAuthor . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array(QQ::GroupBy(QQN::NarroContextInfo()->ContextId)));

            return $intContextCount;
        }

        public static function LoadArrayByFileName($strFileName, $intFilter, $objLimitInfo = null, $objSortInfo = null, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();

            if (!is_object($objSortInfo))
                $objSortInfo = QQ::OrderBy(array(QQN::NarroContextInfo()->ContextId, true));

            if (!is_object($objLimitInfo))
                $objLimitInfo = QQ::LimitInfo(20, 0);

            if (trim($strFileName) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strFileName))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->File->FileName, substr($strFileName, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->File->FileName,  '%' . $strFileName . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $arrContext = NarroContextInfo::QueryArray(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array($objLimitInfo, $objSortInfo, QQ::GroupBy(QQN::NarroContextInfo()->ContextId), QQ::Expand(QQN::NarroContextInfo()->Context->Text)));

            return $arrContext;
        }

        public static function CountByFileName($strFileName, $intFilter, $objExtraCondition = null) {
            if (!is_object($objExtraCondition))
                $objExtraCondition = QQ::All();
            if (trim($strFileName) == '')
                $objSearchCondition = QQ::All();
            elseif (preg_match("/^'.*'$/", $strFileName))
                $objSearchCondition = QQ::Equal(QQN::NarroContextInfo()->Context->File->FileName, substr($strFileName, 1, -1));
            else
                $objSearchCondition = QQ::Like(QQN::NarroContextInfo()->Context->File->FileName,  '%' . $strFileName . '%');

            switch ($intFilter) {
                case NarroTextListForm::SHOW_UNTRANSLATED_TEXTS :
                    $objFilterCondition = QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0);
                    break;
                case NarroTextListForm::SHOW_APPROVED_TEXTS :
                    $objFilterCondition = QQ::IsNotNull(QQN::NarroContextInfo()->ValidSuggestionId);
                    break;
                case NarroTextListForm::SHOW_TEXTS_THAT_REQUIRE_APPROVAL :
                    $objFilterCondition = QQ::AndCondition(QQ::IsNull(QQN::NarroContextInfo()->ValidSuggestionId), QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 1));
                    break;
                default:
                    // no filters
                    $objFilterCondition = QQ::All();
            }

            $intContextCount = NarroContextInfo::QueryCount(QQ::AndCondition($objSearchCondition, $objFilterCondition, $objExtraCondition), array(QQ::GroupBy(QQN::NarroContextInfo()->ContextId)));

            return $intContextCount;
        }
        
        public static function GetQueryForConditions(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = array(), $blnCountOnly = false) {
            return parent::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly);
        }
        
        /**
		 * Save this NarroContextInfo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
		    if ($this->ValidSuggestionId && $this->objContext->TextId && $this->ValidSuggestion->TextId != $this->objContext->TextId)
		        throw new Exception('Tried to approve a translation for a different text.');
		    
		    if ($this->ValidSuggestionId && $this->LanguageId && $this->ValidSuggestion->LanguageId != $this->LanguageId)
		        throw new Exception('Tried to approve a translation for a different language.');
		    
		    $blnIsNew = false;
		    if (((!$this->__blnRestored) || ($blnForceInsert))) {
		        $this->blnHasSuggestions = QType::Cast(NarroSuggestion::CountByTextIdLanguageId($this->Context->TextId, $this->LanguageId), QType::Boolean);
		    }
		    $mixResult = parent::Save($blnForceInsert, $blnForceUpdate);
		}

    }
?>