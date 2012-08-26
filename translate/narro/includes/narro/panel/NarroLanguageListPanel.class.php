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

    class NarroLanguageListPanel extends QPanel {
        public $dtgLanguage;

        // DataGrid Columns
        protected $colLanguageName;
        protected $colLanguageCode;
        protected $colCountryCode;
        protected $colEncoding;
        protected $colTextDirection;
        protected $colSpecialCharacters;
        protected $colPluralForm;
        protected $colActive;
        protected $colActions;

        public $lstFilter;
        public $txtSearch;
        public $btnSearch;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            $this->strTemplate = __NARRO_INCLUDES__ . '/narro/panel/NarroLanguageListPanel.tpl.php';

            // Setup DataGrid Columns
            $this->colLanguageName = new QDataGridColumn(t('Language Name'), '<?= $_CONTROL->ParentControl->dtgLanguage_LanguageNameColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageName, false)));
            $this->colLanguageName->HtmlEntities = false;
            $this->colLanguageCode = new QDataGridColumn(t('Language Code'), '<?= $_CONTROL->ParentControl->dtgLanguage_LanguageCodeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageCode), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->LanguageCode, false)));
            $this->colCountryCode = new QDataGridColumn(t('Country Code'), '<?= $_CONTROL->ParentControl->dtgLanguage_CountryCodeColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->CountryCode), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->CountryCode, false)));
            $this->colEncoding = new QDataGridColumn(t('Encoding'), '<?= $_CONTROL->ParentControl->dtgLanguage_EncodingColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Encoding), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Encoding, false)));
            $this->colTextDirection = new QDataGridColumn(t('Text Direction'), '<?= $_CONTROL->ParentControl->dtgLanguage_TextDirectionColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->TextDirection), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->TextDirection, false)));
            $this->colSpecialCharacters = new QDataGridColumn(t('Special Characters'), '<?= $_CONTROL->ParentControl->dtgLanguage_SpecialCharactersColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters, false)));
            $this->colPluralForm = new QDataGridColumn(t('Plural Forms'), '<?= $_CONTROL->ParentControl->dtgLanguage_PluralFormColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->SpecialCharacters, false)));
            $this->colActive = new QDataGridColumn(t('Active'), '<?= $_CONTROL->ParentControl->dtgLanguage_ActiveColumn_Render($_ITEM) ?>', array('OrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Active), 'ReverseOrderByClause' => QQ::OrderBy(QQN::NarroLanguage()->Active, false)));
            $this->colActive->HtmlEntities = false;
            $this->colActions = new QDataGridColumn(t('Actions'), '<?= $_CONTROL->ParentControl->dtgLanguage_Actions_Render($_ITEM) ?>');
            $this->colActions->HtmlEntities = false;

            // Setup DataGrid
            $this->dtgLanguage = new NarroLanguageDataGrid($this);
            $this->dtgLanguage->ShowHeader = true;
            $this->dtgLanguage->Title = t('Languages');

            // Datagrid Paginator
            $this->dtgLanguage->Paginator = new QPaginator($this->dtgLanguage);
            $this->dtgLanguage->ItemsPerPage = QApplication::$User->GetPreferenceValueByName('Items per page');

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgLanguage->UseAjax = false;

            // Specify the local databind method this datagrid will use
            $this->dtgLanguage->SetDataBinder('dtgLanguage_Bind', $this);
            
            $colTranslationCount = new QDataGridColumn(t('Translations'));
            $colTranslationCount->Html = '<?=$_CONTROL->ParentControl->colTranslationCount_Render($_ITEM)?>';
            $colTranslationCount->HtmlEntities = false;
            $colTranslationCount->OrderByClause = QQ::OrderBy(QQ::Virtual('__translations_count', QQ::SubSql('SELECT COUNT(suggestion_id)')), 1);
            $colTranslationCount->ReverseOrderByClause = QQ::OrderBy(QQ::Virtual('__translations_count', QQ::SubSql('SELECT COUNT(suggestion_id)')), 0);
            $colTranslationCount->HorizontalAlign = QHorizontalAlign::Right;
            
            $colLastTranslation = new QDataGridColumn(t('Last translation'));
            $colLastTranslation->Html = '<?=$_CONTROL->ParentControl->colLastTranslation_Render($_ITEM)?>';
            $colLastTranslation->HtmlEntities = false;
            $colLastTranslation->OrderByClause = QQ::OrderBy(QQ::Virtual('last_translation'), 1);
            $colLastTranslation->ReverseOrderByClause = QQ::OrderBy(QQ::Virtual('last_translation'), 0);
            $colLastTranslation->HorizontalAlign = QHorizontalAlign::Right;

            $this->dtgLanguage->AddColumn($this->colLanguageName);
            $this->dtgLanguage->AddColumn($this->colLanguageCode);
            $this->dtgLanguage->AddColumn($this->colCountryCode);
            $this->dtgLanguage->AddColumn($colTranslationCount);
            $this->dtgLanguage->AddColumn($colLastTranslation);
            $this->dtgLanguage->AddColumn($this->colEncoding);
            $this->dtgLanguage->AddColumn($this->colTextDirection);
            $this->dtgLanguage->AddColumn($this->colSpecialCharacters);
            $this->dtgLanguage->AddColumn($this->colPluralForm);

            if (QApplication::HasPermission('Can edit language', null)) {
                $this->dtgLanguage->AddColumn($this->colActions);
                $this->dtgLanguage->AddColumn($this->colActive);
            }

            $this->dtgLanguage->SortColumnIndex = 0;

            $this->lstFilter = new QListBox($this);
            $this->lstFilter->AddItem(t('all languages'), 0);
            $this->lstFilter->AddItem(t('active languages'), 1, true);
            if (QApplication::$UseAjax)
                $this->lstFilter->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstFilter_Change'));
            else
                $this->lstFilter->AddAction(new QChangeEvent(), new QServerControlAction($this, 'lstFilter_Change'));

            $this->txtSearch = new QTextBox($this);

            $this->btnSearch = new QButton($this);
            $this->btnSearch->Text = t('Search');
            $this->btnSearch->PrimaryButton = true;

            if (QApplication::$UseAjax)
                $this->btnSearch->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSearch_Click'));
            else
                $this->btnSearch->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSearch_Click'));

        }

        public function dtgLanguage_LanguageNameColumn_Render(NarroLanguage $objLanguage) {
            if ($objLanguage->Active)
                return sprintf('<a href="%s?l=%s">%s</a>', 'projects.php', $objLanguage->LanguageCode, $objLanguage->LanguageName);
            else
                return sprintf('<a style="color:gray;font-style:italic;" href="%s?l=%s">%s</a>', basename(__FILE__), $objLanguage->LanguageCode, $objLanguage->LanguageName);
        }

        public function dtgLanguage_LanguageCodeColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->LanguageCode;
        }

        public function dtgLanguage_PluralFormColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->Plurals;
        }

        public function dtgLanguage_CountryCodeColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->CountryCode;
        }

        public function dtgLanguage_EncodingColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->Encoding;
        }

        public function dtgLanguage_TextDirectionColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->TextDirection;
        }

        public function dtgLanguage_SpecialCharactersColumn_Render(NarroLanguage $objLanguage) {
            return $objLanguage->SpecialCharacters;
        }

        public function dtgLanguage_ActiveColumn_Render(NarroLanguage $objLanguage) {
            if ($objLanguage->LanguageId == QApplication::$SourceLanguage->LanguageId || $objLanguage->LanguageId == QApplication::GetLanguageId())
                return '';
            $objCheckBox = $this->Form->GetControl('activelang' . $objLanguage->LanguageId);
            if (!$objCheckBox instanceof QCheckBox) {
                $objCheckBox = new QCheckBox($this->dtgLanguage, 'activelang' . $objLanguage->LanguageId);
                $objCheckBox->ActionParameter = $objLanguage->LanguageId;
                if (QApplication::$UseAjax)
                    $objCheckBox->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'chkActive_Click'));
                else
                    $objCheckBox->AddAction(new QClickEvent(), new QServerControlAction($this, 'chkActive_Click'));

            }
            $objCheckBox->Checked = $objLanguage->Active;
            return $objCheckBox->Render(false);
        }

        public function dtgLanguage_Actions_Render(NarroLanguage $objLanguage) {
            if (QApplication::HasPermissionForThisLang('Can edit language', null))
                return sprintf('<a href="language_edit.php?l=%s&lid=%d">%s</a>', QApplication::$TargetLanguage->LanguageCode, $objLanguage->LanguageId, t('Edit'));
        }

        public function dtgLanguage_Bind() {
            if ($this->txtSearch->Text != '')
                $objSearchCondition = QQ::Like(QQN::NarroLanguage()->LanguageName, sprintf('%%%s%%', $this->txtSearch->Text));
            else
                $objSearchCondition = QQ::All();

            switch ($this->lstFilter->SelectedValue) {
                /**
                 * Only active
                 */
                case 1:
                    $objFilterCondition = QQ::AndCondition($objSearchCondition, QQ::Equal(QQN::NarroLanguage()->Active, 1));
                    break;
                /**
                 * 0 - show all
                 */
                default:
                    $objFilterCondition = $objSearchCondition;
            }


            // Because we want to enable pagination AND sorting, we need to setup the $objClauses array to send to LoadAll()

            // Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
            $this->dtgLanguage->TotalItemCount = NarroLanguage::QueryCount($objFilterCondition);

            // Setup the $objClauses Array
            $objClauses = array(
                QQ::Expand(QQ::Virtual('last_translation', QQ::SubSql('SELECT MAX(created) FROM narro_suggestion WHERE language_id={1}', QQN::NarroLanguage()->LanguageId))),
                QQ::Count(QQN::NarroLanguage()->NarroSuggestionAsLanguage->SuggestionId, 'translations_count'), QQ::GroupBy(QQN::NarroLanguage()->LanguageId)
            );

            // If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
            // the OrderByClause to the $objClauses array
            if ($objClause = $this->dtgLanguage->OrderByClause)
                array_push($objClauses, $objClause);

            // Add the LimitClause information, as well
            if ($objClause = $this->dtgLanguage->LimitClause)
                array_push($objClauses, $objClause);

            // Set the DataSource to be the array of all NarroLanguage objects, given the clauses above
            $this->dtgLanguage->DataSource = NarroLanguage::QueryArray($objFilterCondition, $objClauses);

            QApplication::ExecuteJavaScript('highlight_datagrid();');
        }

        public function lstFilter_Change($strFormId, $strControlId, $strParameter) {
            $this->dtgLanguage->PageNumber = 1;
        }

        public function btnSearch_Click($strFormId, $strControlId, $strParameter) {
            $this->dtgLanguage->PageNumber = 1;
        }

        public function chkActive_Click($strFormId, $strControlId, $strParameter) {
            $objLanguage = NarroLanguage::Load($strParameter);
            if ($objLanguage instanceof NarroLanguage) {
                $objCheckBox = $this->Form->GetControl($strControlId);
                $objLanguage->Active = $objCheckBox->Checked;
                $objLanguage->Save();
            }
            $this->dtgLanguage->MarkAsModified();
        }
        
        public function colTranslationCount_Render(NarroLanguage $objLanguage) {
            $btnTmx = $this->dtgLanguage->GetChildControl('tmx' . $objLanguage->LanguageId);
            if (!$btnTmx instanceof QButton) {
                $btnTmx = new QButton($this->dtgLanguage, 'tmx' . $objLanguage->LanguageId);
                $btnTmx->ActionParameter = $objLanguage->LanguageId;
                $btnTmx->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnTmx_Click'));
                $btnTmx->Text = 'TMX';
                $btnTmx->ToolTip = t('Download all translations in a TMX file');
            
            }
            return $objLanguage->GetVirtualAttribute("translations_count") . ' ' . $btnTmx->Render(false);
        }
        
        public function colLastTranslation_Render(NarroLanguage $objLanguage) {
            $dttCreated = new QDateTimeSpan(time() - strtotime($objLanguage->GetVirtualAttribute('last_translation')));
            return sprintf(t('%s ago'), $dttCreated->SimpleDisplay());
        }
        
        public function btnTmx_Click($strFormId, $strControlId, $intLanguageId) {
            set_time_limit(0);
            $objLanguage = NarroLanguage::Load($intLanguageId);
            if (!$objLanguage) return false;
            
            header("Pragma: public"); // required
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: private",false); // required for certain browsers
            header("Content-Type: text/xml");
            header("Content-Disposition: attachment; filename=\"" . sprintf('%s %s.tmx', preg_replace('/^[a-z]/i', '_', __HTTP_URL__ . __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY__), $objLanguage->LanguageName) . "\";" );
            ob_clean();
            $strXml = NarroLanguage::GetTmx(QQ::Equal(QQN::NarroText()->NarroSuggestionAsText->LanguageId, $intLanguageId));
            header("Content-Length: " . strlen($strXml));
            echo $strXml;
            exit;
        }
    }
?>
