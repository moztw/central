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

    require(__MODEL_GEN__ . '/NarroSuggestionGen.class.php');

    /**
    * The NarroSuggestion class defined here contains any
    * customized code for the NarroSuggestion class in the
    * Object Relational Model.  It represents the "narro_suggestion" table
    * in the database, and extends from the code generated abstract NarroSuggestionGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package Narro
    * @subpackage DataObjects
    *
    * @property integer $Votes the sum of all positive and negative votes
    *
    */
    class NarroSuggestion extends NarroSuggestionGen {
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroSuggestion->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroSuggestion Object %s',  $this->intSuggestionId);
        }

        public static function LoadArrayByTextIdForCurrentLanguage($intTextId, $objOptionalClauses = null) {
            return self::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::GetLanguageId()),
                    QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId)
                ),
                $objOptionalClauses
            );
        }

        public static function CountByTextIdForCurrentLanguage($intTextId) {
            return self::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroSuggestion()->LanguageId, QApplication::GetLanguageId()),
                    QQ::Equal(QQN::NarroSuggestion()->TextId, $intTextId)
                )
            );
        }

        public function SaveWordCount($blnForceInsert = false, $blnForceUpdate = false) {
            $this->intSuggestionWordCount = NarroString::WordCount($this->strSuggestionValue);
            $this->intSuggestionCharCount = strlen($this->strSuggestionValue);

            if ((!$this->__blnRestored) || ($blnForceInsert))
                return false;

            parent::Save($blnForceInsert, $blnForceUpdate);
        }

        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            $this->intSuggestionWordCount = NarroString::WordCount($this->strSuggestionValue);
            $this->intSuggestionCharCount = mb_strlen($this->strSuggestionValue);
            $this->strSuggestionValueMd5 = md5($this->strSuggestionValue);

            if (!isset($this->blnIsImported))
                $this->blnIsImported = false;

            if ((!$this->__blnRestored) || ($blnForceInsert))
                $this->dttCreated = QDateTime::Now();
            else
                $this->dttModified = QDateTime::Now();
            parent::Save($blnForceInsert, $blnForceUpdate);

            /**
             * Update all context infos with the has suggestion property
             */
            $arrContextInfo = NarroContextInfo::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroContextInfo()->Context->TextId, $this->intTextId),
                        QQ::Equal(QQN::NarroContextInfo()->LanguageId, $this->intLanguageId),
                        QQ::Equal(QQN::NarroContextInfo()->HasSuggestions, 0)
                    )
            );

            foreach($arrContextInfo as $objOneContextInfo) {
                $objOneContextInfo->HasSuggestions = 1;
                $objOneContextInfo->Modified = QDateTime::Now();
                try {
                    $objOneContextInfo->Save();
                }
                catch (Exception $objEx) {
                    NarroLogger::LogWarn($objEx->getMessage());
                }
            }

        }
        
        public function __get($strName) {
            switch ($strName) {
                case 'Votes':
                    $mixResult = NarroSuggestionVote::QuerySingle(
                        QQ::Equal(QQN::NarroSuggestionVote()->SuggestionId, $this->SuggestionId),
                        array(
                            QQ::Sum(QQN::NarroSuggestionVote()->VoteValue, 'votes'),
                            QQ::GroupBy(QQN::NarroSuggestionVote()->SuggestionId)
                        )
                    );
                    if ($mixResult instanceof NarroSuggestionVote)
                        return $mixResult->GetVirtualAttribute('votes');
                    else
                        return 0;

                default:
                    try {
                    return parent::__get($strName);
                    break;
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
            }
        }
    }
?>