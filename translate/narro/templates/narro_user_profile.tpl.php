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

    $strPageTitle = $this->objUser->Username;

    require('includes/header.inc.php');
?>

    <?php $this->RenderBegin() ?>
        <?php $this->pnlHeader->Render() ?>
        <h1><?php echo sprintf(t('%s\'s translations'), $this->objUser->Username); ?></h1>
        <?php
            $intSuggestionCount = NarroSuggestion::CountByUserId($this->objUser->UserId);
            $objDatabase = NarroContextInfo::GetDatabase();
            $strQuery = sprintf("
                SELECT
                    DISTINCT narro_context_info.valid_suggestion_id
                FROM
                    narro_context_info, narro_suggestion
                WHERE
                    narro_context_info.valid_suggestion_id=narro_suggestion.suggestion_id AND
                    narro_suggestion.user_id=%d",
                $this->objUser->UserId);

            $objDbResult = $objDatabase->Query($strQuery);

            $intValidSuggestionCount = $objDbResult->CountRows();

            if ($intSuggestionCount && $intValidSuggestionCount) {
                echo sprintf(t('Out of a total of %d suggestions made by %s, %d were approved.'), $intSuggestionCount, $this->objUser->Username, $intValidSuggestionCount);
            }
            echo '<br />';
            echo sprintf(t('Here are the suggestions that %s made so far') . ':', $this->objUser->Username);
            echo '<br /><br />';
            $this->pnlUserSuggestions->Render();
        ?>
    <?php $this->RenderEnd() ?>

<?php require('includes/footer.inc.php'); ?>
