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
<a><?php _t('Options')?></a>
</h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
<?php $_CONTROL->lstExportSuggestionType->RenderWithName(); ?>
<?php $_CONTROL->txtAuthor->RenderWithName(); ?>
<?php $_CONTROL->chkCleanDirectory->RenderWithName(); ?>
</div>
</div>
<?php
    $_CONTROL->pnlLogViewer->Render();
    $_CONTROL->btnExport->Render();
    $_CONTROL->btnKillProcess->Render();
    $_CONTROL->objExportProgress->Render();
    $_CONTROL->lblExport->Render();
?>

