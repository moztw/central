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

    $strPageTitle = ($this->blnEditMode)?t('Edit language'):t('Add language');

    require('includes/header.inc.php')
?>

    <?php $this->RenderBegin() ?>
        <h3><?php echo $strPageTitle ?></h3>
        <table>
        <tr>
        <td>
        <label for="<?php echo $this->txtLanguageName->ControlId ?>"><?php _t('Language name') ?></label>
        </td>
        <td>
        <?php $this->txtLanguageName->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->txtLanguageCode->ControlId ?>"><?php _t('Language code') ?></label>
        </td>
        <td>
        <?php $this->txtLanguageCode->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->txtCountryCode->ControlId ?>"><?php _t('Country code') ?></label>
        </td>
        <td>
        <?php $this->txtCountryCode->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->txtEncoding->ControlId ?>"><?php _t('Encoding') ?></label>
        </td>
        <td>
        <?php $this->txtEncoding->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->lstTextDirection->ControlId ?>"><?php _t('Text direction') ?></label>
        </td>
        <td>
        <?php $this->lstTextDirection->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->txtSpecialCharacters->ControlId ?>"><?php _t('Special characters') ?></label>
        </td>
        <td>
        <?php $this->txtSpecialCharacters->Render(); ?>
        </td>
        </tr>
        <tr>
        <td>
        <label for="<?php echo $this->txtPluralForm->ControlId ?>"><?php _t('Plural formula') ?></label>
        </td>
        <td>
        <?php $this->txtPluralForm->Render(); ?>
        </td>
        </tr>
        <tr>
        <td colspan="2" align="right">
        <?php $this->btnSave->Render() ?>
        &nbsp;&nbsp;&nbsp;
        <?php $this->btnCancel->Render() ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php $this->btnDelete->Render() ?>
        </td>
        </tr>
        </table>
    <?php $this->RenderEnd() ?>

<?php require('includes/footer.inc.php'); ?>
