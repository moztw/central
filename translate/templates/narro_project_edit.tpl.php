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

    $strPageTitle = ($this->blnEditMode)?t('Edit project'):t('Create project');

    require('includes/header.inc.php')
?>

    <?php $this->RenderBegin() ?>
        <h3><?php echo $strPageTitle ?></h3>
        <br class="item_divider" />
        
        <table>
        <tr>
        <td>
        <label for="<?php echo $this->txtProjectName->ControlId ?>"><?php _t('Project Name') ?> : </label>
        </td>
        <td>
        <?php $this->txtProjectName->Render(); ?>
        </td>
        </tr>
        
        <tr>
        <td>
        <label for="<?php echo $this->lstProjectTypeObject->ControlId ?>"><?php _t('Project Type') ?> : </label>
        </td>
        <td>
        <?php $this->lstProjectTypeObject->Render(); ?>
        </td>
        </tr>
        
        <tr>
        <td></td>
        <td>
        <?php $this->chkActive->Render(); ?>
        <label for="<?php echo $this->chkActive->ControlId ?>"><?php _t('Active') ?></label>
        </td>
        </tr>
        </table>


        <br />
        <?php $this->btnSave->Render() ?>
        &nbsp;&nbsp;&nbsp;
        <?php $this->btnCancel->Render() ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php $this->btnDelete->Render() ?>
    <?php $this->RenderEnd() ?>

<?php require('includes/footer.inc.php'); ?>
