<?php
    /**
     * @package Narro
     * @subpackage Templates
     *
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
<?php if ($_CONTROL->objProject->ProjectDescription) {?>
<div class="section">
    <?php echo $_CONTROL->objProject->ProjectDescription ?>
    
</div>
<?php } 
$_CONTROL->pnlProgressBar->Render();
?>
<br />
<small class="instructions"><?php echo $_CONTROL->pnlProgressBar->Instructions ?></small>
<br />
<?php
QApplication::$PluginHandler->DisplayInProjectListInProgressColumn($_CONTROL->objProject);

if (is_array(QApplication::$PluginHandler->PluginReturnValues)) {
    $strOutput .= '';
    foreach(QApplication::$PluginHandler->PluginReturnValues as $strPluginName=>$mixReturnValue) {
        if (count($mixReturnValue) == 2 && $mixReturnValue[0] instanceof NarroProject && is_string($mixReturnValue[1]) && $mixReturnValue[1] != '') {
            $strOutput .= sprintf('<span style="font-size:small" title="%s">%s</span><br />', $strPluginName, $mixReturnValue[1]);
        }
    }
    $strOutput .= '';

    echo $strOutput;
}

$_CONTROL->pnlTop->Render();
