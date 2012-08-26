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

    require(__MODEL_GEN__ . '/NarroLanguageGen.class.php');

    /**
    * The NarroLanguage class defined here contains any
    * customized code for the NarroLanguage class in the
    * Object Relational Model.  It represents the "narro_language" table
    * in the database, and extends from the code generated abstract NarroLanguageGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package Narro
    * @subpackage DataObjects
    *
    */
    class NarroLanguage extends NarroLanguageGen {
        const SOURCE_LANGUAGE_CODE = 'en-US';
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroLanguage->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroLanguage Object %s',  $this->intLanguageId);
        }

        public static function LoadAllActive($objOptionalClauses = null) {
            if (is_null($objOptionalClauses))
                $objOptionalClauses = array(QQ::OrderBy(QQN::NarroLanguage()->LanguageName));
            
            return
                parent::QueryArray(
                    QQ::AndCondition(
                        QQ::NotEqual(QQN::NarroLanguage()->LanguageCode, NarroLanguage::SOURCE_LANGUAGE_CODE),
                        QQ::Equal(QQN::NarroLanguage()->Active, 1)
                    ),
                    $objOptionalClauses
                );
        }

        public static function CountAllActive() {
            return parent::QueryCount(
                QQ::AndCondition(
                    QQ::NotEqual(QQN::NarroLanguage()->LanguageCode, NarroLanguage::SOURCE_LANGUAGE_CODE),
                    QQ::Equal(QQN::NarroLanguage()->Active, 1)
                )
            );
        }

        public function Save($blnForceInsert = false, $blnForceUpdate = false) {

            $mixResult = parent::Save($blnForceInsert, $blnForceUpdate);

            foreach(NarroProject::LoadAll() as $objProject) {
                $objProjectProgress = NarroProjectProgress::LoadByProjectIdLanguageId($objProject->ProjectId, $this->LanguageId);
                if (!$objProjectProgress) {
                    $objProject->CountAllTextsByLanguage($this->LanguageId);
                }
            }

            return $mixResult;
        }

        public function __get($strName) {
            switch ($strName) {
                case 'Plurals':
                    if (preg_match('/nplurals=([0-9])/i', $this->strPluralForm, $arrMatches))
                        return $arrMatches[1];
                    else
                        return 2;

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
         * Returns a tmx file
         * @param QQCondition $objLangCondition e.g. QQ::In(QQN::NarroText()->NarroSuggestionAsText->LanguageId, QApplication::GetLanguageId());
         * @return a tmx file, formatted as a string
         */
        public static function GetTmx($objLangCondition) {
            $tmx = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE tmx SYSTEM "tmx13.dtd"><tmx />');
            
            $tmx->addAttribute('version', '1.3');
            $header = $tmx->addChild('header');
            // mandatory
            $header->addAttribute('creationtool', "Narro");
            $header->addAttribute('creationtoolversion', NARRO_VERSION);
            $header->addAttribute('segtype', "sentence");
            $header->addAttribute('o-tmf', "ABCTransMem");
            $header->addAttribute('adminlang', NarroLanguage::SOURCE_LANGUAGE_CODE);
            $header->addAttribute('srclang', NarroLanguage::SOURCE_LANGUAGE_CODE);
            $header->addAttribute('datatype', "PlainText");
            // optional
            $header->addAttribute('creationdate', QDateTime::NowToString('YYYYMMDDThhmmssZ'));
            if (QApplication::$User)
                $header->addAttribute('creationid', QApplication::$User->Username);
            $header->addAttribute('changedate', "19970314T023401Z");
            $header->addAttribute('o-encoding', "utf-8");
            
            $body = $tmx->addChild('body');
            
            $strQuery = NarroText::GetQueryStatement(
                $objQueryBuilder,
                QQ::AndCondition(
                    QQ::IsNotNull(QQN::NarroText()->NarroSuggestionAsText->SuggestionId),
                    $objLangCondition
                ),
                array(
                    QQ::ExpandAsArray(QQN::NarroText()->NarroSuggestionAsText)
                ),
                array(),
                false
            );
            
            
            $objDbResult = NarroText::GetDatabase()->Query($strQuery);
            $intRowCount = $objDbResult->CountRows();
            $intLastTextId = 0;
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objText = NarroText::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, null, $objQueryBuilder->ColumnAliasArray);
                if ($intLastTextId != $objText->TextId) {
                    $intLastTextId = $objText->TextId;
                    $tu = $body->addChild('tu');
                    $tu->addAttribute('tuid', $objText->TextId);
                    $tu->addAttribute('datatype', 'Text');
                    // $tu->addAttribute('usagecount', $objText->CountNarroContextsAsText());
                    // $objLastContext = NarroContext::QuerySingle(QQ::Equal(QQN::NarroContext()->TextId, $objText->TextId), array(QQ::OrderBy(QQN::NarroContext()->Created, 0)));
                    
                    // if ($objLastContext && $objLastContext->Created instanceof QDateTime)
                        // $tu->addAttribute('lastusagedate', $objLastContext->Created->qFormat('YYYYMMDDThhmmssZ'));
            
                    $tuv = $tu->addChild('tuv');
                    $tuv->addAttribute('xml:lang', NarroLanguage::SOURCE_LANGUAGE_CODE);
                    $seg = $tuv->addChild('seg');
                    $tuv->seg = $objText->TextValue;
                    
                    if ($objText->Created instanceof QDateTime)
                        $tuv->addAttribute('creationdate', $objText->Created->qFormat('YYYYMMDDThhmmssZ'));
                    
                    if ($objText->Modified instanceof QDateTime)
                        $tuv->addAttribute('changedate', $objText->Modified->qFormat('YYYYMMDDThhmmssZ'));
                }
            
            
            
                foreach($objText->_NarroSuggestionAsTextArray as $objSuggestion) {
                    /* @var $objSuggestion NarroSuggestion */
                    $tuv = $tu->addChild('tuv');
                    $tuv->addAttribute('xml:lang', $objSuggestion->Language->LanguageCode);
                    $seg = $tuv->addChild('seg');
                    $tuv->seg = $objSuggestion->SuggestionValue;
                    if ($objSuggestion->Created instanceof QDateTime)
                        $tuv->addAttribute('creationdate', $objSuggestion->Created->qFormat('YYYYMMDDThhmmssZ'));
            
                    if ($objSuggestion->Modified instanceof QDateTime)
                        $tuv->addAttribute('changedate', $objSuggestion->Modified->qFormat('YYYYMMDDThhmmssZ'));
            
                    if ($objSuggestion->User instanceof NarroUser)
                        $tuv->addAttribute('creationid', $objSuggestion->User->RealName);
            
                    // $tuv->addAttribute('usagecount', $objSuggestion->CountNarroContextInfosAsValidSuggestion());
                    
                    // $objLastContextInfo = NarroContextInfo::QuerySingle(QQ::Equal(QQN::NarroContextInfo()->ValidSuggestionId, $objSuggestion->SuggestionId), array(QQ::OrderBy(QQN::NarroContextInfo()->Created, 0)));
                    
                    // if ($objLastContextInfo && $objLastContextInfo->Created instanceof QDateTime)
                        // $tuv->addAttribute('lastusagedate', $objLastContextInfo->Created->qFormat('YYYYMMDDThhmmssZ'));
                }
            }
            
            return $tmx->asXML();
        }

    }
?>