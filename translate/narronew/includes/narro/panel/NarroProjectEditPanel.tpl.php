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

<div class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons">
<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top">
<span class="ui-icon ui-icon-triangle-1-s"></span>
<a><?php _t('General')?></a>
</h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
<table>
    <tr>
        <td><?php _t('Name')?></td>
        <td><?php $_CONTROL->txtProjectName->RenderWithError(); ?></td>
    </tr>
    <tr>
        <td><?php _t('Category') ?></td>
        <td><?php $_CONTROL->lstProjectCategory->Render(); ?></td>
    </tr>
    <tr>
        <td><?php _t('Type')?></td>
        <td><?php $_CONTROL->lstProjectType->Render(); ?></td>
    </tr>
    <tr>
        <td><?php _t('Description')?></td>
        <td><?php $_CONTROL->txtProjectDescription->Render(); ?></td>
    </tr>
    <tr>
        <td><?php _t('Active')?></td>
        <td><?php $_CONTROL->txtActive->Render(); ?></td>
    </tr>
</table>
</div>
</div>

<?php if ($_CONTROL->pnlTextsSource) { ?>
    <div class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons">
    <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top">
    <span class="ui-icon ui-icon-triangle-1-s"></span>
    <a><?php _t('Texts')?></a>
    </h3>
    <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
    <?php _t('Where are the texts to translate?'); ?>
    <?php _t('Note that changing settings here will affect all future imports for all locales'); ?>
    <?php $_CONTROL->pnlTextsSource->Render() ?>
    </div>
    </div>
<?php } ?>
<?php if ($_CONTROL->pnlPreferences) { ?>
    <div class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons">
    <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top">
    <span class="ui-icon ui-icon-triangle-1-s"></span>
    <a><?php _t('Preferences')?></a>
    </h3>
    <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
    <?php $_CONTROL->pnlPreferences->Render() ?>
    </div>
    </div>
<?php } ?>

<div>
<?php $_CONTROL->btnSave->Render() ?>
&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnCancel->Render() ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php $_CONTROL->btnDelete->Render() ?>
<?php $_CONTROL->btnReset->Render() ?>
<?php $_CONTROL->lblMessage->Render();?>
</div>