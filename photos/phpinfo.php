<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.3.3
  $Source: /cvsroot/coppermine/stable/phpinfo.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

error_reporting (E_ALL ^ E_NOTICE);
define('IN_COPPERMINE', true);
define('PHPINFO_PHP', true);
require('include/init.inc.php');

$CONFIG['debug_mode']=0;



pageheader($lang_cpg_debug_output['phpinfo']);

if (!GALLERY_ADMIN_MODE) {
cpg_die(ERROR, $lang_errors['access_denied'] );

} else {

    ob_start();
    phpinfo();
    $string = ob_get_contents();
    $string = strchr($string, '</style>');
    $string = str_replace('</style>','',$string);
    $string = str_replace('class="p"','',$string);
    $string = str_replace('class="e"','class="tableb"',$string);
    $string = str_replace('class="v"','class="tablef"',$string);
    $string = str_replace('class="h"','class="tableh2"',$string);
    $string = str_replace('class="center"','',$string);
    ob_end_clean();

print '<div align="left" style="overflow:hidden;width:800px;text-align:left;">';
starttable('100%', $lang_phpinfo_php['php_info'], 1);
print '<tr><td class="tableb">';
print $lang_phpinfo_php['explanation'];
print '<br />';
print $lang_phpinfo_php['no_link'];
print '</td></tr>';
endtable();
print '<br />';


print $string;
print "</div>\n";


pagefooter();
ob_end_flush();
}
?>