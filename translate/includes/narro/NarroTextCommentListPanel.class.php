<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008 Alexandru Szasz <alexxed@gmail.com>
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

	class NarroTextCommentListPanel extends QPanel {
		protected $strTemplate = 'templates/NarroTextCommentListPanel.tpl.php';
        public $dtgNarroTextComment;
        public $txtNarroTextComment;
        public $btnAddTextComment;
        protected $objNarroText;

        public function __construct($objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Setup DataGrid
            $this->dtgNarroTextComment = new QDataRepeater($this);
            $this->dtgNarroTextComment->Width = '100%';
            $this->dtgNarroTextComment->Display = QDisplayStyle::Block;

            // Specify Whether or Not to Refresh using Ajax
            $this->dtgNarroTextComment->UseAjax = QApplication::$blnUseAjax;

            // Specify the local databind method this datagrid will use
            $this->dtgNarroTextComment->SetDataBinder('dtgNarroTextComment_Bind', $this);

            $this->dtgNarroTextComment->Template = 'templates/NarroTextComment.tpl.php';

            $this->txtNarroTextComment = new QTextBox($this);
            $this->txtNarroTextComment->Text = '';
            $this->txtNarroTextComment->CssClass = QApplication::$Language->TextDirection . ' green3dbg';
            $this->txtNarroTextComment->Width = '60%';
            $this->txtNarroTextComment->Height = 85;
            $this->txtNarroTextComment->TextMode = QTextMode::MultiLine;
            $this->txtNarroTextComment->CrossScripting = QCrossScripting::Allow;

            $this->btnAddTextComment = new QButton($this);
            $this->btnAddTextComment->Text = t('Save');
            $this->btnAddTextComment->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnAddTextComment_Click'));

        }

        public function btnAddTextComment_Click($strFormId, $strControlId, $strParameter) {
            if (trim($this->txtNarroTextComment->Text) == '') return false;
            if (!QApplication::$objUser->hasPermission('Can comment', QApplication::QueryString('p'), QApplication::$Language->LanguageId)) return false;

            $objNarroTextComment = new NarroTextComment();
            $objNarroTextComment->TextId = $this->objNarroText->TextId;
            $objNarroTextComment->UserId = QApplication::$objUser->UserId;
            $objNarroTextComment->LanguageId = QApplication::$Language->LanguageId;
            $objNarroTextComment->Created = date('Y-m-d H:i:s');

            $strResult = QApplication::$objPluginHandler->SaveTextComment($this->txtNarroTextComment->Text);
            if (!QApplication::$objPluginHandler->Error)
                $objNarroTextComment->CommentText = $strResult;
            else
                $objNarroTextComment->CommentText = $this->txtNarroTextComment->Text;

            $objNarroTextComment->CommentTextMd5 = md5($this->txtNarroTextComment->Text);
            try {
                $objNarroTextComment->Save();
            } catch (Exception $objEx) {
                return false;
            }

            if ($this->objNarroText->HasComments != 1) {
                $this->objNarroText->HasComments = 1;
                $this->objNarroText->Modified = date('Y-m-d H:i:s');
                $this->objNarroText->Save();
            }

            $this->txtNarroTextComment->Text = '';
            $this->dtgNarroTextComment_Bind();
        }

        public function dtgNarroTextComment_Bind() {

            $this->dtgNarroTextComment->DataSource =
                NarroTextComment::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::NarroTextComment()->LanguageId, QApplication::$Language->LanguageId),
                        QQ::Equal(QQN::NarroTextComment()->TextId, $this->objNarroText->TextId)
                    ),
                    array(QQ::OrderBy(QQN::NarroTextComment()->Created, 1))
                );
        }

        public function __get($strName) {
            switch ($strName) {
                case "NarroText":
                    return $this->objNarroText;

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

        public function __set($strName, $mixValue) {
            switch ($strName) {
                case "NarroText":
                    if ($mixValue instanceof NarroText)
                        $this->objNarroText = $mixValue;
                    else
                        throw new Exception(t('NarroText should be set with an instance of NarroText'));
                    $this->MarkAsModified();
                    break;

                default:
                    try {
                        return (parent::__set($strName, $mixValue));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
	}
?>