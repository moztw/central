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

$_CONTROL->ChangedCheckbox->Render();
$_CONTROL->Index->Render();
$_CONTROL->Text->RenderWithError();
$_CONTROL->Translation->RenderWithError();
$_CONTROL->Message->Render();
if ($_CONTROL->SaveIgnoreButton)
    $_CONTROL->SaveIgnoreButton->RenderWithError();
if ($_CONTROL->ContextInfo)
    $_CONTROL->ContextInfo->Render();
if ($_CONTROL->TextAccessKey)
    $_CONTROL->TextAccessKey->RenderWithName();
if ($_CONTROL->TextCommandKey)
    $_CONTROL->TextCommandKey->RenderWithName();
if (QApplication::HasPermissionForThisLang('Can suggest'))
    $_CONTROL->CopyButton->Render();
if ($_CONTROL->KeepUntranslatedButton)
    $_CONTROL->KeepUntranslatedButton->Render();
if (QApplication::HasPermissionForThisLang('Can suggest'))
    $_CONTROL->SaveButton->Render();
$_CONTROL->HelpButton->Render();
if ($_CONTROL->TranslationList) {
    $_CONTROL->TranslationList->Render();
}
if ($_CONTROL->CommentList)
    $_CONTROL->CommentList->Render();

?>
