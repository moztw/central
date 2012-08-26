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
?>
<table>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtLanguageName->ControlId ?>"><?php _t('Language name') ?></label>
</td>
<td>
<?php $_CONTROL->txtLanguageName->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtLanguageCode->ControlId ?>"><?php _t('Language code') ?></label>
</td>
<td>
<?php $_CONTROL->txtLanguageCode->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtCountryCode->ControlId ?>"><?php _t('Country code') ?></label>
</td>
<td>
<?php $_CONTROL->txtCountryCode->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtEncoding->ControlId ?>"><?php _t('Encoding') ?></label>
</td>
<td>
<?php $_CONTROL->txtEncoding->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->lstTextDirection->ControlId ?>"><?php _t('Text direction') ?></label>
</td>
<td>
<?php $_CONTROL->lstTextDirection->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtSpecialCharacters->ControlId ?>"><?php _t('Special characters') ?></label>
</td>
<td>
<?php $_CONTROL->txtSpecialCharacters->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->txtPluralForm->ControlId ?>"><?php _t('Plural formula') ?></label>
</td>
<td>
<?php $_CONTROL->txtPluralForm->Render(); ?>
</td>
</tr>
<tr>
<td>
<label for="<?php echo $_CONTROL->chkActive->ControlId ?>"><?php _t('Active') ?></label>
</td>
<td>
<?php $_CONTROL->chkActive->Render(); ?>
</td>
</tr>
<tr>
<td colspan="2" align="right">
<?php $_CONTROL->btnSave->Render() ?>
&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnCancel->Render() ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnDelete->Render() ?>
</td>
</tr>
</table>
