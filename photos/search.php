<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id: search.php,v 1.5 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('SEARCH_PHP', true);

require('include/init.inc.php');

pageheader($lang_search_php[0]);

starttable(500, $lang_search_php[0]);
echo <<< EOT
        <tr>
                <form method="get" action="thumbnails.php" name="searchcpg">
               <input type="hidden" name="album" value="search">
               <input type="hidden" name="type" value="full">
        <td class="tableb" align="center" height="60">
                <input type="input" style="width: 90%" name="search" maxlength="255" value="" class="textinput">
                </td>
                        <script language="javascript" type="text/javascript">
                        <!--
                        document.searchcpg.search.focus();
                        -->
                        </script>
        </tr>
        <tr>
                <td colspan="8" align="center" class="tablef">
                        <input type="submit" value="{$lang_search_php[0]}" class="button">
                </td>
                </form>
        </tr>

EOT;
endtable();
pagefooter();
ob_end_flush();

?>
