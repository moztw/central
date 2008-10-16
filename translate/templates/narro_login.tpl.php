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

    $strPageTitle = t('Login');


    require('includes/header.inc.php')
?>

    <?php $this->RenderBegin() ?>
        <h3><?php echo t('Login') ?></h3>
        <p><?php echo t('Please login so everyone else knows who is adding those great suggestions that you will add.'); ?></p>
        <br />
        <?php $this->lblMessage->Render() ?>
        <table>
            <tr>
                <td><?php echo t('Username')?>:</td>
                <td><?php $this->txtUsername->Render() ?></td>
            </tr>
            <tr>
                <td><?php echo t('Password')?>:</td>
                <td><?php $this->txtPassword->Render() ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php $this->chkRememberLogin->Render() ?><label for="<? echo $this->chkRememberLogin->ControlId ?>"><?php echo t('Remember me')?></label></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align:right"><?php $this->btnRecoverPassword->Render();?> <?php $this->btnLogin->Render() ?></td>
            </tr>
        </table>

    <?php $this->RenderEnd() ?>

<?php require('includes/footer.inc.php'); ?>
