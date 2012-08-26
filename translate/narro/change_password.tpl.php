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

    $strPageTitle = t('Change password');


    require(dirname(__FILE__) . '/configuration/header.inc.php')
?>

    <?php $this->RenderBegin() ?>
        <?php $this->pnlHeader->Render() ?>
        <h3><?php echo t('Change password') ?></h3>
        <p><?php echo t('Here you can change your password. Just type the new password and hit the button.'); ?></p>
        <br />
        <?php $this->lblMessage->Render() ?>
        <table>
            <tr>
                <td><?php echo t('Password')?>:</td>
                <td><?php $this->txtPassword->Render() ?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right"><?php $this->btnChangePassword->Render() ?></td>
            </tr>
        </table>

    <?php $this->RenderEnd() ?>

<?php require(dirname(__FILE__) . '/configuration/footer.inc.php'); ?>
