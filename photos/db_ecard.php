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
// CVS version: $Id: db_ecard.php,v 1.3 2004/07/24 15:03:52 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('DB_ECARD_PHP', true);
global $CONFIG;

require('include/init.inc.php');
if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__, 'false');

$sort = isset($_REQUEST['sort']) ? $_REQUEST['sort'] : '';
$start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
$count = isset($_REQUEST['count']) ? $_REQUEST['count'] : '';
//set default values
$selectOptions = array(25,50,75,100);
$sortBy = 'date';
$sortDirection = 'DESC';
$sortText = $lang_db_ecard_php['ecard_by_date'];
$sortDirectionText = $lang_db_ecard_php['ecard_descending'];
if (!$start) {$startFrom = '0';}else{$startFrom=$start;}
if (!$count) {$countTo = $selectOptions[0];}else{$countTo=$count;}
$tabOutput = '';

//delete selected ecards
if (isset($_REQUEST['eid'])) {
  foreach ($_REQUEST['eid'] as $key) {
    //print $key;
    //print "<br>";
    $query = "DELETE FROM {$CONFIG['TABLE_ECARDS']} WHERE eid='$key'";
    $result = db_query($query);
    }
}

switch ($sort) {
  case 'snd' :
    $sortBy = 'sender_name';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
    break;
  case 'sna' :
    $sortBy = 'sender_name';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
    break;
  case 'sed' :
    $sortBy = 'sender_email';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
    break;
  case 'sea' :
    $sortBy = 'sender_email';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
    break;
  case 'id' :
    $sortBy = 'sender_ip';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
    break;
  case 'ia' :
    $sortBy = 'sender_ip';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
    break;
  case 'rnd' :
    $sortBy = 'recipient_name';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
    break;
  case 'rna' :
    $sortBy = 'recipient_name';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
    break;
  case 'red' :
    $sortBy = 'recipient_email';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
    break;
  case 'rea' :
    $sortBy = 'recipient_email';
    $sortDirection = 'ASC';
    $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
    break;
  case 'da' :
    $sortBy = 'date';
    $sortDirection = 'ASC';
    break;
}

if ($sortDirection == 'ASC'){$sortDirectionText = $lang_db_ecard_php['ecard_ascending'];}

// determine the total number of entries
$result = mysql_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_ECARDS']}");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['ecards_empty'], __FILE__, __LINE__, false);
$totalEcards = mysql_fetch_array($result);
$totalEcards = $totalEcards[0];
$result = mysql_query("SELECT eid, sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip FROM {$CONFIG['TABLE_ECARDS']} ORDER BY $sortBy $sortDirection LIMIT $startFrom,$countTo");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['ecards_empty'], __FILE__, __LINE__, false);

pageheader($lang_db_ecard_php['title']);

$formTarget = cpgGetUrlVars('count');
print '<form method="post" name="ecardselect" action="'.$formTarget.'" onSubmit="return defaultagree(this)">';
?>
<script language="javascript" type="text/javascript">
<!--
function checkAll(field)
{
for (i = 0; i < field.length; i++)
  field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
  field[i].checked = false ;
}

var checkobj

function agreesubmit(el){
checkobj=el
if (document.all||document.getElementById){
for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
var tempobj=checkobj.form.elements[i]
if(tempobj.type.toLowerCase()=="submit")
tempobj.disabled=!checkobj.checked
}
}
}

function defaultagree(el){
if (!document.all&&!document.getElementById){
if (window.checkobj&&checkobj.checked)
return true
else{
alert("<?php print $lang_db_ecard_php['ecards_delete_confirm']; ?>")
return false
}
}
}

-->
</script>
<?php
// create tabbed display (non-coppermine standard); maybe this could be changed later using the coppermine standard method
// step 1: calculate the number of pages
$pageTotal = ceil($totalEcards/$countTo);
// step 2: get the current url without 'start' and 'count'
$urlWithoutStart = $_SERVER["SCRIPT_NAME"]."?";
foreach ($_GET as $key => $value) {
  if ($key!='start' && $key!='count'){$urlWithoutStart.= $key . "=" . $value . "&";}
}
//print $pageTotal;
//step 3: loop through the pages & create the links
for ($page = 1 ; $page <= $pageTotal; $page++) {
if ($page != $startFrom/$countTo+1) {
  $tabOutput .= '<a href="'.$urlWithoutStart.'start='.($page-1)*$countTo.'&count='.$countTo.'">';
  }
else {
  $currentPage = $page;
  $currentStart = ($page-1)*$countTo+1;
  $currentEnd = $currentStart+$countTo-1;
  if ($currentEnd > $totalEcards) {$currentEnd =$totalEcards;}
  }
$tabOutput .= $page;
//$tabOutput .= '('.$page.'/'.$startFrom/$countTo.') ';
if ($page != $startFrom/$countTo+1) {
  $tabOutput .= '</a>';
  }
$tabOutput .= '&nbsp;';
}
$maxPage =  $page-1;


$tableHeader1 = $lang_db_ecard_php['title']." (".$lang_db_ecard_php['ecard_sorted']." ".$sortText.", ".$sortDirectionText.")";
starttable('100%',$tableHeader1,3);
print '<tr><td class="tableb_compact">';
printf($lang_db_ecard_php['ecard_number'], $currentStart, $currentEnd, $totalEcards);
print '</td><td class="tableb_compact">';
if ($maxPage > 1) {
  print $lang_db_ecard_php['ecard_goto_page'].' ';
  print $tabOutput;
}
print '</td><td align="right" class="tableb_compact">';
print $lang_db_ecard_php['ecard_records_per_page'];
print '  <select onChange="if(this.options[this.selectedIndex].value) window.location.href=\''.$formTarget.'count=\'+this.options[this.selectedIndex].value;"  name="count" class="listbox">';
foreach ($selectOptions as $key ) {
  print '   <option value="'.$key.'" ';
  if ($key == $countTo) {print 'selected="selected"';}
  print '>'.$key.'</option>';
}
print '  </select>';
print '</td></tr>';
endtable();

print '<br />';


$urlWithoutSort = cpgGetUrlVars('sort');
starttable('100%');
//print '<table border="1">';
print "<tr>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\" rowspan=\"2\"></th>
<th class=\"tableh1_compact\" colspan=\"3\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_sender']."</th>
<th class=\"tableh1_compact\" colspan=\"2\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_recipient']."</th>
<th class=\"tableh1_compact\" rowspan=\"2\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_date']." <a href=\"".$urlWithoutSort."sort=da\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=dd\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
<th class=\"tableh1_compact\" rowspan=\"2\" align=\"left\" valign=\"bottom\"></th>
</tr>";
print "<tr>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_name']." <a href=\"".$urlWithoutSort."sort=sna\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=snd\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_email']." <a href=\"".$urlWithoutSort."sort=sea\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=sed\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_ip']." <a href=\"".$urlWithoutSort."sort=ia\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=id\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_name']." <a href=\"".$urlWithoutSort."sort=rna\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=rnd\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
<th class=\"tableh1_compact\" align=\"left\" valign=\"bottom\">".$lang_db_ecard_php['ecard_email']." <a href=\"".$urlWithoutSort."sort=rea\"><img src=\"images/ascending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_ascending']."\" /></a>&nbsp;<a href=\"".$urlWithoutSort."sort=red\"><img src=\"images/descending.gif\" width=\"9\" height=\"9\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_descending']."\" /></a></th>
</tr>";
$tempClass = ' class="tableb"';
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   print "\t<tr>\n";
   print "<td".$tempClass." align=\"center\"><input type=\"Checkbox\" name=\"eid[]\" value=\"".$line['eid']."\" id=\"eidselector\" class=\"checkbox\"></td>\n";
   print "<td".$tempClass."><b class=\"thumb_caption\">".$line['sender_name']."</b></td>\n";
   print "<td".$tempClass."><span class=\"thumb_caption\"><a href=\"mailto:".$line['sender_email']."\">".$line['sender_email']."</a></span></td>\n";
   print "<td".$tempClass."><span class=\"thumb_caption\"><a href=\"http://ws.arin.net/cgi-bin/whois.pl?queryinput=".$line['sender_ip']."\">".$line['sender_ip']."</a></span></td>\n";
   print "<td".$tempClass."><b class=\"thumb_caption\">".$line['recipient_name']."</b></td>\n";
   print "<td".$tempClass."><span class=\"thumb_caption\"><a href=\"mailto:".$line['recipient_email']."\">".$line['recipient_email']."</a></span></td>\n";
   print "<td".$tempClass."><span class=\"thumb_caption\">".strftime($lastcom_date_fmt,$line['date'])."</span></td>\n";
   print "<td align=\"center\"".$tempClass."><span class=\"thumb_caption\"><a href=\"displayecard.php?data=".$line['link']."\"><img src=\"images/ecard.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"\" title=\"".$lang_db_ecard_php['ecard_display']."\" /></a></span></td>\n";
   print "\t</tr>\n";
   if ($tempClass == ' class="tableb"'){$tempClass = ' class="tableh2"';}else{$tempClass = ' class="tableb"';}
}

print '<tr><td class="tableh1_compact" align="center"><img src="images/arrow_upleft.gif" width="31" height="22" border="0" alt="" /></td>';
print '<td colspan="3" class="tableh1_compact">';
print '<input type="button" name="CheckAll" class="button" value="'.$lang_db_ecard_php['check_all'].'" onClick="checkAll(document.ecardselect.eidselector)">&nbsp;';
print '<input type="button" name="UnCheckAll" class="button" value="'.$lang_db_ecard_php['uncheck_all'].'" onClick="uncheckAll(document.ecardselect.eidselector)">';
print '</td>';
print '<td colspan="4" class="tableh1_compact" align="left">';
print '<input type="submit" class="button" name="delete" value="'.$lang_db_ecard_php['ecards_delete_selected'].'" disabled="disabled">&nbsp;';
print '<input name="agreecheck" type="checkbox" onClick="agreesubmit(this)">'.$lang_db_ecard_php['ecards_delete_sure'];
print '</td>';
print '</tr>';
endtable();

print "</form>\n";

pagefooter();



function cpgGetUrlVars($exception)
// get the url vars
{
 $cpgGetUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!=$exception){$cpgGetUrl.= $key . "=" . $value . "&";}
 }
return $cpgGetUrl;
}

?>
