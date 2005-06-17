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
// CVS version: $Id: faq.php,v 1.3 2004/07/24 15:03:53 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('FAQ_PHP', true);
global $CONFIG;

require('include/init.inc.php');

// build the ouput
$faqHeading = '';
$faqContent = '';
$anchorName = '';

foreach($lang_faq_data as $element) {
  if ((is_array($element))) {
     if ($CONFIG[$element[2]] == $element[3]) {
       $anchorName = createAnchorName($element[0]);
       $faqHeading .= '<ul style="margin-top:0px;margin-bottom:0px"><li><a href="#'.$anchorName.'">'.$element[0].'</a></li></ul>';
       $faqContent .= '<tr><td class="tablef"><i>'.$lang_faq_php['question'].'</i><a name="'.$anchorName.'"></a><b>'.$element[0].'</b></td></tr><tr><td class="tableb"><i>'.$lang_faq_php['answer'].'</i>'.$element[1].'<br />&nbsp;<br />&nbsp;<br /></td></tr>';
     }
  }
  else {
      $anchorName = createAnchorName($element);
      $faqHeading .=  '<h2><a href="#'.$anchorName.'">'.$element.'</a></h2>';
      $faqContent .=  '<tr><td class="tableh1"><a name="'.$anchorName.'"></a><h2>'.$element.'</h2></td></tr>';
  }
}
$faqHeading .= '';

//print $faqHeading;
//print '<hr>';
//print $faqContent;




pageheader($lang_faq_php['faq']);
print '<h1>'.$lang_faq_php['faq'].'</h1>';

starttable('100%',$lang_faq_php['toc']);
print '<tr>';
print '<td class="tableb">';
print $faqHeading;
print '</td>';
print '</tr>';
endtable();

print '<br />&nbsp;<br />';

starttable('100%');
print $faqContent;
endtable();
print '<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />';
pagefooter();

ob_end_flush();

function createAnchorName($anchor)
{
$anchor = trim(str_replace(' ','_',str_replace('?','',$anchor)));
return $anchor;
}



?>
