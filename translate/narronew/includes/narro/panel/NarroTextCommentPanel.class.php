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

    class NarroTextCommentPanel extends QPanel {
        public $dtgComments;
        public $txtComment;
        public $btnSave;
        protected $intTextId;

        public function __construct(NarroText $objText, $objParentObject, $strControlId = null) {
            // Call the Parent
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            
            $this->blnAutoRenderChildren = true;
            
            $this->intTextId = $objText->TextId;
            
            $this->strText = sprintf('<span class="instructions">%s</span>', t('User comments'));
            
            $this->dtgComments = new NarroTextCommentDataGrid($this);
            $colComment = $this->dtgComments->MetaAddColumn(QQN::NarroTextComment()->CommentText);
            $colComment->HtmlEntities = false;
            $colComment->Html = '<?=$_CONTROL->ParentControl->colComment_Render($_ITEM)?>';
            $this->dtgComments->ShowFilter = false;
            $this->dtgComments->ShowHeader = false;
            $this->dtgComments->AdditionalConditions = QQ::Equal(QQN::NarroTextComment()->TextId, $objText->TextId);
            $this->dtgComments->AdditionalClauses = array(
                QQ::OrderBy(QQN::NarroTextComment()->Created, 1),
                QQ::Expand(QQN::NarroTextComment()->Language),
                QQ::Expand(QQN::NarroTextComment()->User)
            );
            
            $this->txtComment = new QTextBox($this);
            $this->txtComment->Name = t('Comment');
            $this->txtComment->TextMode = QTextMode::MultiLine;
            $this->txtComment->PreferedRenderMethod = 'Render';
            $this->txtComment->Columns = 80;
            $this->txtComment->ToolTip = t('Enter your comments here');
            $this->txtComment->CssClass = 'comment';
            $this->txtComment->DisplayStyle = QDisplayStyle::Block;
            $this->txtComment->Display = QApplication::HasPermissionForThisLang('Can comment');
            
            $this->btnSave = new QImageButton($this);
            $this->btnSave->AlternateText = t('Add comment');
            $this->btnSave->CssClass = 'imgbutton save';
            $this->btnSave->ToolTip = $this->btnSave->AlternateText;
            $this->btnSave->ImageUrl = __NARRO_IMAGE_ASSETS__ . '/comment.png';
            $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
            $this->btnSave->Display = QApplication::HasPermissionForThisLang('Can comment');
        }
        
        public function colComment_Render(NarroTextComment $objComment) {
            return sprintf(
            	'%s<br /><small>-- <a href="%s" tabindex="-1">%s</a> in %s, %s ago</small>',
            	$objComment->CommentText,
            	NarroLink::UserProfile($objComment->UserId),
            	$objComment->User->RealName,
            	$objComment->Language->LanguageName,
                new QDateTimeSpan(time() - strtotime($objComment->Created))
            );
        }
        
        public function btnSave_Click() {
            if (trim($this->txtComment->Text)) {
                $objComment = new NarroTextComment();
                $objComment->UserId = QApplication::GetUserId();
                $objComment->LanguageId = QApplication::GetLanguageId();
                $objComment->TextId = $this->intTextId;
                $objComment->Created = QDateTime::Now();
                $objComment->CommentText = $this->txtComment->Text;
                $objComment->CommentTextMd5 = md5($objComment->CommentText);
                $objComment->Save();
                
                $this->dtgComments->Refresh();
            }
        }
    }
?>
