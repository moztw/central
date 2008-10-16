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

    $strPageTitle = sprintf('%s :: ' . t('Manage'), $this->objNarroProject->ProjectName);

    require(dirname(__FILE__) . '/../includes/header.inc.php');
?>

    <?php $this->RenderBegin() ?>
        <h3><?php echo t('Project management') ?></h3>
        <p><?php echo t('Here you can edit project properties or do management related tasks.'); ?></p>
        <div style="text-align:left">
        <?php
            echo
                '<a href="narro_project_list.php">' . t('Projects') . '</a>' .
                ' -> ' .
                '<a href="narro_project_text_list.php?p=' . $this->objNarroProject->ProjectId.'">'.$this->objNarroProject->ProjectName.'</a>' .
                ' -> ' .
                t('Manage');
        ?>
        </div>
        <?php if (QApplication::$objUser->hasPermission('Can import project', $this->objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId) || QApplication::$objUser->hasPermission('Can export project', $this->objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId)) { ?>
            <br />
            <?php $this->pnlLogViewer->Render(); ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Import and export options'); ?></div>
            <div class="dotted_box_content">
            <label for="<?php echo $this->lstLogLevel->ControlId ?>"><?php echo t('Minimum logged error level') . ' ' . $this->lstLogLevel->Render(false); ?></label>
            <p class="instructions"><?php echo t('Lower values give more verbosity'); ?></p>
            <label for="<?php echo $this->chkForce->ControlId ?>"><?php echo $this->chkForce->Render(false) . ' ' . t('Force operation even if a previous operation is reported to be running'); ?></label>
            <p class="instructions"><?php echo t('Cleanup the files that are used during an import or export and allow starting another operation'); ?></p>
            </div>
            </div>
        <?php } ?>

        <?php if (QApplication::$objUser->hasPermission('Can import project', $this->objNarroProject->ProjectId , QApplication::$objUser->Language->LanguageId)) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Import project'); ?></div>
            <div class="dotted_box_content">
            <?php if ($this->objNarroProject->ProjectType != NarroProjectType::Narro) { ?>
                <label for="<?php echo $this->chkCheckEqual->ControlId ?>"><?php echo $this->chkCheckEqual->Render(false) . ' ' . t('Do not import translations that are identical to the original text'); ?></label>
                <p class="instructions"><?php echo t('Warning, if you uncheck this and choose to validate the imported suggestions all the translations identical to the original texts will be validated.'); ?></p>
                <label for="<?php echo $this->chkValidate->ControlId ?>"><?php echo $this->chkValidate->Render(false) . ' ' . t('Validate the imported translations'); ?></label>
                <p class="instructions"><?php echo t('Mark the imported suggestions as validated.'); ?></p>
                <label for="<?php echo $this->chkOnlySuggestions->ControlId ?>"><?php echo $this->chkOnlySuggestions->Render(false) . ' ' . t('Import only suggestions'); ?></label>
                <p class="instructions"><?php echo t('Do not add files, texts or contexts. Import only translation suggestions for existing texts in existing files and contexts.'); ?></p>
                <?php if (QApplication::$objUser->hasPermission('Can upload project', null, QApplication::$objUser->Language->LanguageId)) { ?>
                    <?php echo t('From an archive') . ': ' . $this->flaImportFromFile->Render(false); ?>
                    <p class="instructions"><?php echo sprintf(t('The archive must contain two directories, en-US and %s, each having the same file structure. Supported formats: %s'), QApplication::$objUser->Language->LanguageCode, 'tar.gz, zip'); ?></p>
                    <p class="instructions"><?php echo sprintf(t('If you don\'t upload an archive, the import will use the directory "%s", subdirectories "%s" and "%s". You could update those directories nightly from CVS, SVN or a web address.'), __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId, 'en-US', QApplication::$objUser->Language->LanguageCode); ?></p>
                <?php } ?>
            <?php } ?>
            <?php $this->btnImport->Render(); $this->objImportProgress->Render();?>
            <?php $this->lblImport->Render(); ?>
            </div>
            </div>
        <?php } ?>

        <?php if (QApplication::$objUser->hasPermission('Can export project', $this->objNarroProject->ProjectId, QApplication::$objUser->Language->LanguageId) && $this->objNarroProject->ProjectType != NarroProjectType::Narro) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Export project'); ?></div>
            <div class="dotted_box_content">
            <label for="<?php echo $this->lstExportArchiveType->ControlId ?>"><?php echo  t('Export archive format') . ' ' . $this->lstExportArchiveType->Render(false); ?></label>
            <p class="instructions"><?php echo t('Choose the format of the exported archive.'); ?></p>
            <label for="<?php echo $this->lstExportedSuggestion->ControlId ?>"><?php echo t('Export translations using') . ': '; ?></label>
            <?php echo $this->lstExportedSuggestion->Render(false); ?>
            <p class="instructions"><?php echo t('If you chose to use your suggestion or the most voted suggestion for each text, if you have no suggestion for a text or there aren\'t any votes, the validated suggestion will be exported instead.'); ?></p>
            <?php $this->btnExport->Render(); $this->objExportProgress->Render();?>
            <?php $this->lblExport->Render(); ?>
            <p class="instructions"><?php echo sprintf(t('You will get an archive containing two directories, en_US and %s, each having the same file structure.'), QApplication::$objUser->Language->LanguageCode); ?></p>
            </div>
            </div>
        <?php } ?>

        <?php if (QApplication::$objUser->hasPermission('Can delete project', $this->objNarroProject->ProjectId)) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title">Project maintenance</div>
            <div class="dotted_box_content">
            <?php $this->btnDelProjectContexts->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete contexts to clean up the database a bit. Before doing this, please export your work, you will loose all your validations.
            You will also loose context comments for this project. Translations and texts are kept, and you can import your project to recreate the contexts any time you want.');?>
            </p>
            <?php $this->btnDelProjectContextInfos->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete the informations about contexts to clean up the database a bit. Before doing this, please export your work, you will loose all your validations.
            Translations and texts are kept, and you can import your project to recreate the context informations any time you want. This affects only the current language');?>
            </p>
            <?php $this->btnDelProjectFiles->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete files to clean up the database a bit. Before doing this, please export your work, you will loose all your validations.
            You will also loose contexts and context comments for this project. Translations and texts are kept, and you can import your project to recreate the contexts any time you want.');?>
            </p>

            </div>
            </div>
        <?php } ?>


    <?php $this->RenderEnd() ?>

<?php require(dirname(__FILE__) . '/../includes/footer.inc.php'); ?>
