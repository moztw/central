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
<?php $_CONTROL->pnlBreadcrumb->Render(); ?>
<?php _t('Click on any file to view or on the progress bar to translate it.') ?><br />
<div style="text-align:right;">
    <?php $_CONTROL->txtSearch->Render(); $_CONTROL->btnSearch->Render(); ?><br />
    <?php $_CONTROL->chkShowHierarchy->Render();?> <label for="<?php echo $_CONTROL->chkShowHierarchy->ControlId; ?>"><?php echo t('Show hierarchy') ?></label>
    &nbsp;&nbsp;&nbsp;
    <?php $_CONTROL->chkShowFolders->Render();?>  <label for="<?php echo $_CONTROL->chkShowFolders->ControlId; ?>"><?php echo t('Show folders') ?></label>
</div>
<?php $_CONTROL->dtgFile->Render() ?>

