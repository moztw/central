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

    require_once(dirname(__FILE__) . '/configuration/prepend.inc.php');

    class NarroLogForm extends NarroForm {
        protected $pnlTab;
        protected $pnlLog;
        protected $dtgLog;

        protected function Form_Create() {
            parent::Form_Create();
            
            if (!QApplication::HasPermissionForThisLang('Administrator'))
                QApplication::Redirect(NarroLink::ProjectList());

            $this->pnlTab = new QTabs($this);
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::ProjectList(t('Projects'));
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::Translate(0, '', NarroTranslatePanel::SHOW_NOT_TRANSLATED, '', 0, 0, 10, 0, 0, t('Translate'));
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::Review(0, '', NarroTranslatePanel::SHOW_NOT_APPROVED, '', 0, 0, 10, 0, 0, t('Review'));
            
            
            if (NarroLanguage::CountAllActive() > 2 || QApplication::HasPermission('Administrator')) {
                $pnlDummy = new QPanel($this->pnlTab);
                $arrHeaders[] = NarroLink::LanguageList(t('Languages'));
            }
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::UserList('', t('Users'));
            
            $pnlDummy = new QPanel($this->pnlTab);
            $arrHeaders[] = NarroLink::RoleList(0, '', t('Roles'));
            
            if (QApplication::HasPermissionForThisLang('Administrator')) {
                $this->pnlLog = new QPanel($this->pnlTab);
                $this->pnlLog->AutoRenderChildren = true;
                
                $btnClearLog = new QButton($this->pnlLog);
                $btnClearLog->Text = t('Clear the log');
                $btnClearLog->AddAction(new QClickEvent(), new QConfirmAction(t('Are you sure you want to delete all the logged messages?')));
                $btnClearLog->AddAction(new QClickEvent(), new QAjaxAction('btnClearLog_Click'));
                
                $this->dtgLog = new NarroLogDataGrid($this->pnlLog);
                // Datagrid Paginator
                $this->dtgLog->Paginator = new QPaginator($this->dtgLog);
                $this->dtgLog->PaginatorAlternate = new QPaginator($this->dtgLog);
                $this->dtgLog->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');
                $this->dtgLog->SortColumnIndex = 0;
                $this->dtgLog->SortDirection = 1;
                $colDate = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->Date);
                $colDate->OrderByClause = QQ::OrderBy(QQN::NarroLog()->LogId);
                $colDate->ReverseOrderByClause = QQ::OrderBy(QQN::NarroLog()->LogId, 0);
                
                if (QApplication::HasPermission('Administrator')) {
                    $colLanguage = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->Language->LanguageName);
                    $colLanguage->Filter = null;
                    $colLanguage->FilterAddListItem(t('-Not set-'), QQ::IsNull(QQN::NarroLog()->LanguageId));
                    foreach(NarroLanguage::LoadAll(QQ::OrderBy(QQN::NarroLanguage()->LanguageName)) as $objLanguage) {
                        $colLanguage->FilterAddListItem($objLanguage->LanguageName, QQ::Equal(QQN::NarroLog()->LanguageId, $objLanguage->LanguageId));
                    }
                }
                else
                    $this->dtgLog->AdditionalConditions = QQ::Equal(QQN::NarroLog()->LanguageId, QApplication::GetLanguageId());
                
                $colProject = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->Project->ProjectName);
                $colProject->Filter = null;
                $colProject->FilterAddListItem(t('-Not set-'), QQ::IsNull(QQN::NarroLog()->ProjectId));
                foreach(NarroProject::LoadAll(QQ::OrderBy(QQN::NarroProject()->ProjectName)) as $objProject) {
                    $colProject->FilterAddListItem($objProject->ProjectName, QQ::Equal(QQN::NarroLog()->ProjectId, $objProject->ProjectId));
                }
                
                $colUser = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->User->Username);
                $colUser->Html = '<?=(($_ITEM->UserId)?NarroLink::UserProfile($_ITEM->UserId, $_ITEM->User->Username):"")?>';
                $colUser->HtmlEntities = false;
                
                $colPriority = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->Priority);
                $colPriority->Name = 'P';
                $colPriority->Width = 16;
                $colPriority->FilterBoxSize = 1;
                $colPriority->HtmlEntities = false;
                
                $colMessage = $this->dtgLog->MetaAddColumn(QQN::NarroLog()->Message);
                $colMessage->HtmlEntities = false;
                $colMessage->Html = '<?=$_FORM->dtgLog_colMessage_Render($_ITEM)?>';
                
                $arrHeaders[] = NarroLink::Log('', t('Application Log'));
                $this->pnlTab->Selected = count($arrHeaders) - 1;
            }
            
            $this->pnlTab->Headers = $arrHeaders;
        }
        
        public function btnClearLog_Click($strFormId, $strControlId, $strParameter) {
            if (QApplication::HasPermissionForThisLang('Administrator')) {
                if (QApplication::HasPermission('Administrator'))
                    NarroLog::GetDatabase()->NonQuery(sprintf('DELETE FROM narro_log'));
                else
                    NarroLog::GetDatabase()->NonQuery(sprintf('DELETE FROM narro_log WHERE language_id=%d', QApplication::GetLanguageId()));
                $this->dtgLog->btnFilterReset_Click($strFormId, $strControlId, $strParameter);
                $this->dtgLog->Refresh();
            }
        }
        
        public function dtgLog_colMessage_Render(NarroLog $objLogEntry) {
            switch($objLogEntry->Priority) {
                case NarroLog::PRIORITY_INFO:
                    $strTag = '<div class="info"';
                    break;
                case NarroLog::PRIORITY_WARN:
                    $strTag = '<div class="warning"';
                    break;
                case NarroLog::PRIORITY_ERROR:
                    $strTag = '<div class="error"';
                    break;
                default:
                    $strTag = '<div';
            }
            
            return sprintf('%s title="%s">%s</div>', $strTag, $objLogEntry->Date, nl2br(NarroString::HtmlEntities($objLogEntry->Message)));
        }
    }

    NarroLogForm::Run('NarroLogForm');
?>
