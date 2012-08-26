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

    class NarroProjectEditForm extends NarroGenericProjectForm {
        protected function Form_Create() {
            parent::Form_Create();
            
            if ($this->objProject instanceof NarroProject) {
                if (!QApplication::HasPermissionForThisLang('Can edit project', $this->objProject->ProjectId))
                    QApplication::HasPermissionForThisLang('Can edit project', $this->objProject->ProjectId);
            }
            else {
                if (QApplication::HasPermissionForThisLang('Can add project')) {
                    $this->pnlSelectedTab = new NarroProjectEditPanel($this->objProject, $this->pnlMainTab);
                    $this->pnlMainTab->Headers = array(NarroLink::ProjectEdit($this->objProject->ProjectId, t('Add project')));
                    return false;
                }
                else {
                    QApplication::Redirect(NarroLink::ProjectList());
                }
            }
                
            $pnlDummy = new QPanel($this->pnlMainTab);
            $arrHeaders[] = NarroLink::Project($this->objProject->ProjectId, t('Overview'));
            
            if (QApplication::HasPermissionForThisLang('Can edit project', $this->objProject->ProjectId)) {
                $this->pnlSelectedTab = new NarroProjectEditPanel($this->objProject, $this->pnlMainTab);
                $arrHeaders[] = NarroLink::ProjectEdit($this->objProject->ProjectId, t('Edit'));
                $this->pnlMainTab->Selected = count($arrHeaders) - 1;
            }
            
            $pnlDummy = new QPanel($this->pnlMainTab);
            $arrHeaders[] = NarroLink::Translate($this->objProject->ProjectId, '', 0, '', 0, 0, 10, 0, 0, t('Translate'));
            
            $pnlDummy = new QPanel($this->pnlMainTab);
            $arrHeaders[] = NarroLink::Review($this->objProject->ProjectId, '', NarroReviewPanel::SHOW_NOT_APPROVED, '', 0, 0, 10, 0, 0, t('Review'));
            
            $pnlDummy = new QPanel($this->pnlMainTab);
            $arrHeaders[] = NarroLink::ProjectFileList($this->objProject->ProjectId, '', '', t('Files'));
            
            $pnlDummy = new QPanel($this->pnlMainTab);
            $arrHeaders[] = NarroLink::ProjectLanguages($this->objProject->ProjectId, t('Languages'));
            
            if (QApplication::HasPermissionForThisLang('Can import project', $this->objProject->ProjectId)) {
                $pnlDummy = new QPanel($this->pnlMainTab);
                $arrHeaders[] = NarroLink::ProjectImport($this->objProject->ProjectId, t('Import'));
            }
            
            if (QApplication::HasPermissionForThisLang('Can export project', $this->objProject->ProjectId)) {
                $pnlDummy = new QPanel($this->pnlMainTab);
                $arrHeaders[] = NarroLink::ProjectExport($this->objProject->ProjectId, t('Export'));
            }
            
            $this->pnlMainTab->Headers = $arrHeaders;
        }
        
        protected function SetupNarroProject($intProjectId) {
            // Lookup Object PK information from Query String (if applicable)
            if (($intProjectId)) {
                $this->objProject = NarroProject::Load(($intProjectId));

                $this->pnlBreadcrumb->setElements(
                    NarroLink::ProjectList(t('Projects')),
                    $this->objProject->ProjectName
                );
            }
            else {
                $this->pnlBreadcrumb->setElements(
                    NarroLink::ProjectList(t('Projects')),
                    t('Add project')
                );
            }

        }
    }

    NarroProjectEditForm::Run('NarroProjectEditForm');
?>
