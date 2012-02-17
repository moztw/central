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
    require_once('includes/prepend.inc.php');

    if (NarroApp::HasPermission('Administrator')) {
        foreach(NarroUser::LoadAll() as $objUser) {
            $arrUserPermissions = array();
            foreach(NarroUserPermission::LoadArrayByUserId($objUser->UserId) as $objUserPermission) {
                $objUserRole = new NarroUserRole();
                switch($objUserPermission->PermissionId) {
                    case 1:
                    case 2:
                    case 4:
                        $objUserRole->RoleId = 2;
                        break;
                    case 3:
                        $objUserRole->RoleId = 3;
                        break;
                    case 5:
                    case 6:
                    case 8:
                    case 9:
                    case 10:
                    case 18:
                    case 19:
                    case 20:
                        $objUserRole->RoleId = 4;
                        break;
                    case 7:
                    case 12:
                    case 13:
                    case 14:
                    case 15:
                    case 16:
                    case 17:
                        $objUserRole->RoleId = 5;
                        break;
                }

                if (!$objUserRole->RoleId) continue;

                $objUserRole->LanguageId = $objUserPermission->LanguageId;
                $objUserRole->ProjectId = $objUserPermission->ProjectId;
                $objUserRole->UserId = $objUserPermission->UserId;

                if (!isset($arrUserPermissions[$objUserRole->RoleId . '-' . $objUserRole->LanguageId . '-' . $objUserRole->ProjectId])) {
                    try {
                        $objUserRole->Save();
                    } catch (Exception $objEx) {
                        /**
                         * Most probably we already added the role
                         */
                        $objEx = null;
                    }
                    $arrUserPermissions[$objUserRole->RoleId . '-' . $objUserRole->LanguageId . '-' . $objUserRole->ProjectId] = 1;
                }
            }
        }
    }
    else {
        NarroApp::Redirect('narro_login.php');
    }
?>
