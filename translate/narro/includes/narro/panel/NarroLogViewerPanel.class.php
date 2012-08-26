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
     *
     * @property integer $LanguageId
     * @property integer $ProjectId
     * @property QDateTime $DateStart
     */

    class NarroLogViewerPanel extends QPanel {
        protected $intProjectId;
        protected $intLanguageId;
        protected $dttStart;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        public function GetControlHtml() {
            $strLogContents = '';

            foreach(NarroLog::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroLog()->ProjectId, $this->intProjectId),
                    QQ::Equal(QQN::NarroLog()->LanguageId, $this->intLanguageId),
                    QQ::GreaterThan(QQN::NarroLog()->Date, $this->dttStart)
                )
            ) as $objLogEntry) {
                switch($objLogEntry->Priority) {
                    case NarroLog::PRIORITY_INFO:
                        $strLogContents .= '<div class="info"';
                        break;
                    case NarroLog::PRIORITY_WARN:
                        $strLogContents .= '<div class="warning"';
                        break;
                    case NarroLog::PRIORITY_ERROR:
                        $strLogContents .= '<div class="error"';
                        break;
                    default:
                        $strLogContents .= '<div';
                }
                
                $strLogContents .= sprintf('title="%s">%s</div>', $objLogEntry->Date, nl2br(NarroString::HtmlEntities($objLogEntry->Message)));
            }

            $this->strText = sprintf(
                '<div class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons">
                <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top">
                <span class="ui-icon ui-icon-triangle-1-s"></span>
                <a>%s</a>
                </h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="max-height:300px;overflow:auto">
                %s
                </div>
                </div>',
                t('Operation log'),
                $strLogContents
            );

            return parent::GetControlHtml();
        }

        /////////////////////////
        // Public Properties: GET
        /////////////////////////
        public function __get($strName) {
            switch ($strName) {

                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /////////////////////////
        // Public Properties: SET
        /////////////////////////
        public function __set($strName, $mixValue) {
            $this->blnModified = true;

            switch ($strName) {
                case "ProjectId":
                    try {
                        $this->intProjectId = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    
                case "LanguageId":
                    try {
                        $this->intLanguageId = QType::Cast($mixValue, QType::Integer);
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    
                case "DateStart":
                    try {
                        $this->dttStart = QType::Cast($mixValue, 'QDateTime');
                        break;
                    } catch (QInvalidCastException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
                    
                default:
                    try {
                        parent::__set($strName, $mixValue);
                        break;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }
