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
    $strPageTitle = t('Register');
?>

    <p><?php echo t('Here are a few benefits for a registered user'); ?>:</p>
    <ul>
        <li><?php echo t('Be famous for your suggestions. Everyone will see that you added that cool suggestion.') ?></li>
        <li><?php echo t('Vote for your favourite suggestion.') ?></li>
        <li><?php echo t('Set your preferences and maintain your user profile.') ?></li>
    </ul>

    <br />
    <?php $_CONTROL->lblMessage->Render() ?>
    <table>
        <tr>
            <td><?php echo t('Username') ?>:</td>
            <td><?php $_CONTROL->txtUsername->RenderWithError() ?></td>
            <td><?php echo t('This is your identifier on the website. Feel free to use spaces or any character you like. We suggest entering your name.') ?></td>
        </tr>
        <tr>
            <td><?php echo t('Password') ?>:</td>
            <td><?php $_CONTROL->txtPassword->RenderWithError() ?></td>
            <td><?php echo t('Alright, you don\'t have to type it twice, but please type it carefully.') ?></td>
        </tr>
        <tr>
            <td><?php echo t('Email') ?>:</td>
            <td><?php $_CONTROL->txtEmail->RenderWithError() ?></td>
            <td><?php echo t('This is used for password recovery and opt-in notifications.') ?></td>
        </tr>
        <tr>
            <td><?php echo t('Real name') ?>:</td>
            <td><?php $_CONTROL->txtRealname->RenderWithError() ?></td>
            <td><?php echo t('Optionally, enter your real name. It can be used to give you credit for your translations. If you do not fill it, your username will be used instead.') ?></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:left"><?php $_CONTROL->btnRegister->Render() ?></td>
        </tr>
    </table>

