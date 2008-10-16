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

    $strPageTitle = sprintf((QApplication::$objUser->hasPermission('Can suggest', $this->objNarroContextInfo->Context->ProjectId, QApplication::$objUser->Language->LanguageId))?t('Translate "%s"'):t('See suggestions for "%s"'),
        (strlen($this->objNarroContextInfo->Context->Text->TextValue)>30)?mb_substr($this->objNarroContextInfo->Context->Text->TextValue, 0, 30) . '...':$this->objNarroContextInfo->Context->Text->TextValue);

    require('includes/header.inc.php')
?>

    <?php $this->RenderBegin() ?>
        <div style="width:100%;display:block;">
            <div style="float:left">
            <?php $this->pnlNavigator->Render(); ?>
            </div>
            <br style="clear:both" />
        </div>
        <br class="item_divider" />
        <div style="width:50%;float:left";>
        <?php
        echo t('Original string') . ':';
        $this->pnlOriginalText->SetCustomStyle('background-color', '#FFFFFFF');
        $this->pnlOriginalText->SetCustomStyle('border-style', 'inset');
        $this->pnlOriginalText->SetCustomStyle('border-width', '2px');
        $this->pnlOriginalText->SetCustomStyle('border-top-color', '#929291');
        $this->pnlOriginalText->SetCustomStyle('border-left-color', '#929291');
        $this->pnlOriginalText->SetCustomStyle('border-bottom-color', '#FBFBFB');
        $this->pnlOriginalText->SetCustomStyle('border-right-color', '#FBFBFB');
        $this->pnlOriginalText->SetCustomStyle('width', '98%');
        $this->pnlOriginalText->DisplayStyle = QDisplayStyle::Block;
        $this->pnlOriginalText->Render();
        $this->txtSuggestionValue->BackColor = '#FFFFFF';
        $this->txtSuggestionValue->SetCustomStyle('width', '98%');
        ?>
        <?php if (QApplication::$objUser->hasPermission('Can suggest', $this->objNarroContextInfo->Context->ProjectId, QApplication::$objUser->Language->LanguageId)) { ?>
            <?php $this->pnlPluginMessages->Render(); ?>
            <?php echo t('Translated string'); ?>:
                <?php $this->txtSuggestionValue->Render("Rows=10"); ?>
                <br />
                <div style="float:left;">
                &nbsp;<?php $this->pnlDiacritics->Render(); ?>
                </div>
                <div style="float:right;padding-right:2%">
                &nbsp;<?php $this->btnSave->Render(); ?>
                &nbsp;<?php $this->btnSaveIgnore->Render(); ?>
                <?php if (QApplication::$objUser->hasPermission('Can validate', $this->objNarroContextInfo->Context->ProjectId, QApplication::$objUser->Language->LanguageId)) { ?>
                    &nbsp;<?php $this->btnSaveValidate->Render()?>
                <?php } ?>
                </div>
                <br style="clear:both"/>
                <div style="float:right;padding-right:2%">
                <?php $this->btnPrevious100->Render() ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php $this->btnPrevious->Render() ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php $this->lblProgress->Render(); ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php $this->btnNext->Render(); ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php $this->btnNext100->Render(); ?>
                <br />
                <div style="float:right;padding-right:2%">
                <?php $this->chkGoToNext->Render() ?> <label for="<?php echo $this->chkGoToNext->ControlId ?>"><?php echo t('After clicking buttons, automatically go to the next text') ?></label>
                </div>
                </div>


        <?php } ?>
        </div>
        <div style="width:50%;float:right";>
        <?php
        echo t('Context information') . ':';
        $this->pnlContext->DisplayStyle = QDisplayStyle::Block;
        $this->pnlContext->SetCustomStyle('background-color', '#FFFFFFF');
        $this->pnlContext->SetCustomStyle('border-style', 'inset');
        $this->pnlContext->SetCustomStyle('border-width', '2px');
        $this->pnlContext->SetCustomStyle('border-top-color', '#929291');
        $this->pnlContext->SetCustomStyle('border-left-color', '#929291');
        $this->pnlContext->SetCustomStyle('border-bottom-color', '#FBFBFB');
        $this->pnlContext->SetCustomStyle('border-right-color', '#FBFBFB');
        $this->pnlContext->SetCustomStyle('width', '90%');
        $this->pnlContext->Render();
        ?>
        <br />
        <br />
        <?php echo sprintf(t('Found in: %s'), $this->objNarroContextInfo->Context->File->FileName); ?>
        </div>
        <br style="clear:both" />
        <?php $this->pnlProgress->Render() ?>
        <?php $this->lblMessage->Render() ?>
        <br />
        <?php $this->pnlSuggestionList->Render(); ?>

        <?php if(QApplication::$objUser->UserId != NarroUser::ANONYMOUS_USER_ID && $this->txtSuggestionValue->Display) $this->txtSuggestionValue->Focus(); ?>
    <?php $this->RenderEnd() ?>

<?php require('includes/footer.inc.php'); ?>
