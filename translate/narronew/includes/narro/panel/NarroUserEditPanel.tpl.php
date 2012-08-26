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

$_CONTROL->lblMessage->Render();

if ($_CONTROL->objNarroUser->Password == md5('')) {
    _t('Note that you logged in using openid or an external database.');
    echo '<br />';
    _t('If you change your <b>username</b> or <b>password</b> here, you will have to login in the future with the data you enter here.');
    echo '<br />';
    _t('It\'s ok to change just your email address.');
}
?>

<table style="border: 1px solid #DDDDDD" cellpadding="4" cellspacing="0">
<tr class="datagrid_row datagrid_odd">
<td><label for="<?php echo $_CONTROL->txtUsername->ControlId; ?>"><?php echo $_CONTROL->txtUsername->Name; ?>:</label></td>
<td><?php $_CONTROL->txtUsername->RenderWithError(); ?></td>
</tr>
<tr class="datagrid_row datagrid_even">
<td><label for="<?php echo $_CONTROL->txtPassword->ControlId; ?>"><?php echo $_CONTROL->txtPassword->Name; ?>:</label></td>
<td><?php $_CONTROL->txtPassword->RenderWithError(); echo ' ' . t('Fill only if you want to change it'); ?></td>
</tr>
<tr class="datagrid_row datagrid_odd">
<td><label for="<?php echo $_CONTROL->txtEmail->ControlId; ?>"><?php echo $_CONTROL->txtEmail->Name; ?>:</label></td>
<td><?php $_CONTROL->txtEmail->RenderWithError(); ?></td>
</tr>
<tr class="datagrid_row datagrid_even">
<td><label for="<?php echo $_CONTROL->txtRealname->ControlId; ?>"><?php echo $_CONTROL->txtRealname->Name; ?>:</label></td>
<td><?php $_CONTROL->txtRealname->RenderWithError(); ?></td>
</tr>
</table>
<br />
<?php $_CONTROL->btnSave->Render() ?>
&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnCancel->Render() ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnDelete->Render() ?>