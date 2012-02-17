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
        <?php $this->pnlHeader->Render() ?>
        <?php $this->pnlBreadcrumb->Render() ?>
        <h3><?php echo t('Project management') ?></h3>
        <p><?php echo t('Here you can edit project properties or do management related tasks.'); ?></p>
        <?php if (NarroApp::HasPermissionForThisLang('Can import project', $this->objNarroProject->ProjectId) || NarroApp::HasPermissionForThisLang('Can export project', $this->objNarroProject->ProjectId)) { ?>
            <br />
            <?php $this->pnlLogViewer->Render(); ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Import and export options'); ?></div>
            <div class="dotted_box_content">
            <label for="<?php echo $this->lstLogLevel->ControlId ?>"><?php echo t('Minimum logged error level') . ' ' . $this->lstLogLevel->Render(false); ?></label>
            <p class="instructions"><?php echo t('Lower values give more verbosity'); ?></p>
            <?php echo $this->btnCleanLocaleDirectory->Render(false) ?>
            <p class="instructions"><?php echo t('Delete all the files in the locale directory to get a fresh export. Be sure to backup any files not imported in the application.'); ?></p>
            </div>
            </div>
        <?php } ?>

        <?php if (NarroApp::HasPermissionForThisLang('Can import project', $this->objNarroProject->ProjectId )) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Import project'); ?></div>
            <div class="dotted_box_content">
            <label for="<?php echo $this->chkCheckEqual->ControlId ?>"><?php echo $this->chkCheckEqual->Render(false) . ' ' . t('Do not import translations that are identical to the original text'); ?></label>
            <p class="instructions"><?php echo t('Warning, if you uncheck this and choose to approve the imported suggestions all the translations identical to the original texts will be approved.'); ?></p>
            <label for="<?php echo $this->chkApprove->ControlId ?>"><?php echo $this->chkApprove->Render(false) . ' ' . t('Approve the imported translations'); ?></label>
            <p class="instructions"><?php echo t('Mark the imported suggestions as approved.'); ?></p>
            <label for="<?php echo $this->chkOnlySuggestions->ControlId ?>"><?php echo $this->chkOnlySuggestions->Render(false) . ' ' . t('Import only suggestions'); ?></label>
            <p class="instructions"><?php echo t('Do not add files, texts or contexts. Import only translation suggestions for existing texts in existing files and contexts.'); ?></p>
            <?php if (NarroApp::HasPermissionForThisLang('Can upload project', null)) { ?>
                <?php echo t('From an archive') . ': ' . $this->flaImportFromFile->Render(false); ?>
                <?php if (NarroApp::HasPermission('Can manage project')) {?>
                    <p class="instructions"><?php echo sprintf(t('The archive can contain two directories, en-US and %s, but at least %s, each having the same file structure. Supported formats: %s'), NarroApp::$Language->LanguageCode, NarroApp::$Language->LanguageCode, 'tar.gz, zip'); ?></p>
                <?php } else { ?>
                    <p class="instructions"><?php echo sprintf(t('The archive must contain the directory %s with the same structure as en-US. Supported formats: %s'), NarroApp::$Language->LanguageCode, 'tar.gz, zip'); ?></p>
                <?php } ?>
                    <p class="instructions"><?php echo sprintf(t('If you don\'t upload an archive, the import will use the directory "%s", subdirectories "%s" and "%s". You could update those directories nightly from CVS, SVN or a web address.'), __DOCROOT__ . __SUBDIRECTORY__ . __IMPORT_PATH__ . '/' . $this->objNarroProject->ProjectId, 'en-US', NarroApp::$Language->LanguageCode); ?></p>
            <?php } ?>
            <?php $this->btnImport->Render(); $this->objImportProgress->Render();?>
            <?php $this->lblImport->Render(); ?>
            </div>
            </div>
        <?php } ?>

        <?php if (NarroApp::HasPermissionForThisLang('Can export project', $this->objNarroProject->ProjectId)) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title"><?php echo t('Export project'); ?></div>
            <div class="dotted_box_content">
            <?php echo $this->chkCopyUnhandledFiles->Render();?>
            <p class="instructions"><?php echo t('If you check this option, all the unhandled files missing from your translation will be copied from the source language.'); ?></p>
            <label for="<?php echo $this->lstExportArchiveType->ControlId ?>"><?php echo  t('Export archive format') . ' ' . $this->lstExportArchiveType->Render(false); ?></label>
            <p class="instructions"><?php echo t('Choose the format of the exported archive.'); ?></p>
            <label for="<?php echo $this->lstExportedSuggestion->ControlId ?>"><?php echo t('Export translations using') . ': '; ?></label>
            <?php echo $this->lstExportedSuggestion->Render(false); ?>
            <p class="instructions"><?php echo t('If you want to export the suggestions that are not approved, you have here a few choices to do so'); ?></p>
            <?php $this->btnExport->Render(); $this->objExportProgress->Render();?>
            <?php $this->lblExport->Render(); ?>
            <p class="instructions"><?php echo sprintf(t('You will get an archive containing two directories, en-US and %s, each having the same file structure.'), NarroApp::$Language->LanguageCode); ?></p>
            </div>
            </div>
        <?php } ?>

        <?php if (NarroApp::HasPermission('Can delete project', $this->objNarroProject->ProjectId)) { ?>
            <br />
            <div class="dotted_box">
            <div class="dotted_box_title">Project maintenance</div>
            <div class="dotted_box_content">
            <?php $this->btnDelProjectContexts->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete contexts to clean up the database a bit. Before doing this, please export your work, you will loose all your approvals.
            You will also loose context comments for this project. Translations and texts are kept, and you can import your project to recreate the contexts any time you want.');?>
            </p>
            <?php $this->btnDelProjectContextInfos->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete the informations about contexts to clean up the database a bit. Before doing this, please export your work, you will loose all your approvals.
            Translations and texts are kept, and you can import your project to recreate the context informations any time you want. This affects only the current language');?>
            </p>
            <?php $this->btnDelProjectFiles->Render(); ?>
            <p class="instructions"><?php _t('Sometimes, it might help to delete files to clean up the database a bit. Before doing this, please export your work, you will loose all your approvals.
            You will also loose contexts and context comments for this project. Translations and texts are kept, and you can import your project to recreate the contexts any time you want.');?>
            </p>

            </div>
            </div>
        <?php } ?>


    <?php $this->RenderEnd() ?>

<?php require(dirname(__FILE__) . '/../includes/footer.inc.php'); ?>
