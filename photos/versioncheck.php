<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id: versioncheck.php,v 1.1 2004/08/16 21:20:47 gaugau Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('VERSIONCHECK_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }

// check if the file is being included as a pop-up; return the stuff from showdoc if true
if ($_REQUEST['pop']) { // pop-up start
$header = $_REQUEST['h'];
$text = $_REQUEST['t'];
$add_stylesheet = $_REQUEST['css'];
$style = $_REQUEST['style'];
$close = $_REQUEST['close'];
$base = $_REQUEST['base'];

if ($base != '') {
// content of header and text have been base64-encoded - decode it now
$header = @unserialize(@base64_decode($header));
$text = @unserialize(@base64_decode($text));
}

if ($close != 1) {
$close_link = '<br />&nbsp;<br /><div align="center"><a href="#" class="admin_menu" onclick="window.close();">close</a><br />&nbsp;</div>';
}

if ($header) {
$string = "<html>\n<head>\n<title>".$header."</title>\n" . '<link rel="stylesheet" href="themes/'.$add_stylesheet.'/style.css" />' . "\n</head>\n<body>\n<h2>" . $header . "</h2>\n" . $text . "\n".$close_link."\n</body>\n</html>";
}
print $string;
die;
} // pop-up end

// check if we're using a version older than cpg1.4.0
if (is_array($lang_versioncheck_php) == false) {
$older_version = true;
$lang_versioncheck_php = array(
  'title' => 'Versioncheck',
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.',
  'online_repository_unable' => 'Unable to connect to online repository',
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:',
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.',
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with <i>ini_set</i>). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.',
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.',
  'local_repository_unable' => 'Unable to connect to the repository on your server',
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.',
  'coppermine_version_header' => 'Installed Coppermine version',
  'coppermine_version_info' => 'You have currently installed: %s',
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>',
  'version_comparison' => 'Version comparison',
  'file' => 'file',
  'coppermine_version' => 'cpg version',
  'file_version' => 'file version',
  'writable' => 'writable',
  'help' => 'Help',
  'help_file_not_exist_optional1' => 'file/folder does not exist',
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.',
  'help_file_not_exist_mandatory1' => 'file/folder does not exist',
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).',
  'help_no_local_version1' => 'No local file version',
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.',
  'help_local_version_outdated1' => 'Local version outdated',
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.',
  'help_local_version_na1' => 'Unable to extract cvs version info',
  'help_local_version_na2' => 'The script could not determine what cvs version the file on your webserver is. You should upload the file from your package.',
  'help_local_version_dev1' => 'Development version',
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php',
  'your_file' => 'your file',
  'reference_file' => 'reference file',
  'summary' => 'Summary',
  'total' => 'Total files/folders checked',
  'mandatory_files_missing' => 'Mandatory files missing',
  'optional_files_missing' => 'Optional files missing',
  'files_from_older_version' => 'Files left over from outdated version',
  'file_version_outdated' => 'Outdated file versions',
);
}

if (function_exists('cpg_display_help') == false ) {
function cpg_display_help($reference = '', $width = '600', $height = '350') {
global $CONFIG, $USER;
if ($reference == '' || $CONFIG['enable_help'] == '0') {return; }
if ($CONFIG['enable_help'] == '2' && GALLERY_ADMIN_MODE == false) {return; }
$help_theme = $CONFIG['theme'];
if ($USER['theme']) {
    $help_theme = $USER['theme'];
}
// check if the help icon is there. If it isn't, display a plain question mark
if (file_exists('images/help.gif') == true) { $help_icon = '<img src="images/help.gif" width="13" height="11" border="0" alt="" title="'.$lang_versioncheck_php['help'].'" />';
} else { $help_icon = '<span style="background-color:#FFFAD3;color:#000000;font-weight:bold;border:1px solid black;font-size:8pt;margin:0px;padding:0px" title="'.$lang_versioncheck_php['help'].'"> ? </span>';
}
$help_html = "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('".$PHP_SELF."?pop=1&css=" . $help_theme . "&" . $reference . "','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=" . $width . ",height=" . $height . "')\" style=\"cursor:help;text-decoration:none\">".$help_icon."</a>";
return $help_html;
}
}

// define some vars
$counter_total_files = 0;
$counter_file_mandatory_not_exist = 0;
$counter_file_optional_not_exist = 0;
$counter_cpg_version_older = 0;
$counter_cpg_version_younger = 0;
$counter_cvs_version_older = 0;
$counter_cvs_version_younger = 0;

pageheader($lang_versioncheck_php['title']);
starttable('100%',$lang_versioncheck_php['title'],3);

echo <<< EOT
<tr>
<td colspan="3" class="tableb">{$lang_versioncheck_php['what_it_does']}</td>
</tr>
<style type="text/css">
.green {
        font-weight: bold;
        color: green;
}
.red {
        font-weight: bold;
        color: red;
}
.yellow {
        font-weight: bold;
        color:#FFBE00;
}
</style>
EOT;

if ($older_version) {
echo <<<EOT
<tr>
<td colspan="3" class="tableb">
As this file didn't come with your original version of Coppermine or was added to the package after translation was already done, there's no internationalisation - it is available in English only.
</td>
</tr>
EOT;
}

// step one:  get the data from the online repository
$online_repository_url = 'http://coppermine.sourceforge.net/repository.txt';
// connect to the online repository at sourceforge.net
@ini_set("allow_url_fopen","1");
$file = @fopen ($online_repository_url, 'r');
if ($file) {
    while (!feof ($file)) {
       $line = fgets ($file, 1024);
       $repository_info = explode ( '|', $line);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $repository_filename[] = $repository_info[1];
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = str_replace('@', '', $repository_info[5]);
       }
    }
    $online_repository_connection = 1;
    fclose($file);
    @ini_set("allow_url_fopen","0");
} else {
    $err_reason1 = sprintf($lang_versioncheck_php['online_repository_reason1'],'<a href="'.$online_repository_url.'" target="_blank">'.$online_repository_url.'</a>');
    $err_reason2 = sprintf($lang_versioncheck_php['online_repository_reason2'],'<a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen"><i>allow_url_fopen</i></a>');
    echo <<<EOT
    <tr>
    <td colspan="3" class="tableh2">
    <h2>{$lang_versioncheck_php['online_repository_unable']}</h2>
    </td>
    </tr>
    <tr><td colspan="3" class="tableb">
    {$lang_versioncheck_php['online_repository_noconnect']}
    <ul><li>
    $err_reason1
    </li><li>
    $err_reason2
    </li></ul>
    {$lang_versioncheck_php['online_repository_to_local']}
    </td></tr>
EOT;

    $online_repository_connection = 0;
// use the data that comes with the distribution
$local_file_name = 'repository.txt';
$file = cpg_offline_repository();
$line = explode ( '@', $file);
    foreach ($line as $value) {
       $repository_info = explode ( '|', $value);
       $repository_info[0] = trim($repository_info[0]);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $repository_filename[] = $repository_info[1];
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = $repository_info[5];
       }
    }
}
$currently_installed = sprintf($lang_versioncheck_php['coppermine_version_info'],'<b>' . COPPERMINE_VERSION . '</b>');
echo <<<EOT
<tr>
<td colspan="3" class="tableh2">
<h2>{$lang_versioncheck_php['coppermine_version_header']}</h2>
</td>
</tr>
<tr><td colspan="3" class="tableb">
$currently_installed
<br />
{$lang_versioncheck_php['coppermine_version_explanation']}
</td></tr>
EOT;

// step two: draw the table header
echo <<< EOT
<tr>
<td colspan="3" class="tableh2">
<h2>{$lang_versioncheck_php['version_comparison']}</h2>
</td>
</tr>
<tr>
<td class="tablef"><b>{$lang_versioncheck_php['file']}</b></td>
<td class="tablef"><b>{$lang_versioncheck_php['coppermine_version']}</b></td>
<td class="tablef"><b>{$lang_versioncheck_php['file_version']}</b></td>
<!--<td class="tablef"><b>{$lang_versioncheck_php['writable']}</b></td>-->
</tr>
EOT;


// step three: go through all files that exist in the repository and check if they're on the webserver as well
$dir = '../'.cpg_get_coppermine_path().'/'; // this is the place to start browsing
foreach ($repository_filename as $rep_file) {
$counter_total_files++;
$file_info = cpg_get_path_and_file($rep_file);
cpg_output_version_row(cpg_get_fileversion($dir.$file_info['path'], $file_info['file']), $file_info, $file_info['file']);
}

// show summary
echo <<<EOT
<tr>
  <td colspan="3" class="tableh2">
    <h2>{$lang_versioncheck_php['summary']}</h2>
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['total']}:
  </td>
  <td colspan="2" class="tableb">
    $counter_total_files
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['mandatory_files_missing']}:
  </td>
  <td colspan="2" class="tableb">
    $counter_file_mandatory_not_exist
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['optional_files_missing']}:
  </td>
  <td colspan="2" class="tableb">
    $counter_file_optional_not_exist
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['files_from_older_version']}:
  </td>
  <td colspan="2" class="tableb">
    $counter_cpg_version_older
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['file_version_outdated']}:
  </td>
  <td colspan="2" class="tableb">
    $counter_cvs_version_older
  </td>
</tr>
EOT;


endtable();
pagefooter();


////////////////////////////////// functions ///////////////////////////////

function cpg_get_coppermine_path() {
global $PHP_SELF;
$return = str_replace('/', '',strrchr(str_replace('/'.str_replace('/', '',strrchr($PHP_SELF, '/')), '', $PHP_SELF),'/'));
return $return;
}

function cpg_get_path_and_file($string) {
$return['path'] = str_replace(str_replace('/', '', strrchr($string, '/')), '', $string);
$return['file'] = str_replace('/', '', strrchr($string, '/'));
if (strstr($return['path'], '.') != FALSE && $return['file'] == '')
{
$return['file'] = $return['path'];
$return['path'] = '';
}
if (strstr($return['file'], '.') == FALSE)
{
$return['path'] = $return['path'].$return['file'];
$return['file'] = '';
}
return $return;
}

function cpg_get_fileversion($folder  = '',$file = '') {
    $handle = @fopen($folder.$file, 'r');
    $blob = @fread($handle, filesize($folder.$file));
    @fclose($handle);
    $cvs_string = '$'.'I'.'d'.':';

    $blob = str_replace('<?php','',$blob);
    $return['cpg_version'] = substr($blob,strpos($blob, 'Coppermine Photo Gallery'));
    $return['cpg_version'] = substr($return['cpg_version'],0,strpos($return['cpg_version'], '//'));
    $return['cpg_version'] = trim(str_replace('Coppermine Photo Gallery', '', $return['cpg_version']));
    if (strlen($return['cpg_version']) > 5) {$return['cpg_version']='n/a';}

    $return['cvs_version'] = substr($blob,strpos($blob, $cvs_string));
    $return['cvs_version'] = substr($return['cvs_version'],0,strpos($return['cvs_version'], 'Exp'));
    $return['cvs_version'] = str_replace($cvs_string, '', $return['cvs_version']);
    // get rid of the filename inside the string
    $return['cvs_version'] = trim(str_replace($file.',v ', '',$return['cvs_version']));
    $return['cvs_version'] = str_replace('v ', '', $return['cvs_version']);
    //if ($file=='picmgmt.inc.php' || $file=='index.php') {print $folder.$file.':'.$return['cvs_version'].'<br>';}
    $return['cvs_version'] = trim(str_replace(strstr($return['cvs_version'], ' '), '', $return['cvs_version']));
    if (strlen($return['cvs_version']) > 5) {$return['cvs_version']='n/a';}

    if (file_exists($folder.$file)) {
    $return['exists'] = 1;
    } else {
    $return['exists'] = 0;
    }

    if (is_readable($folder.$file)) {
    $return['readable'] = 1;
    } else {
    $return['readable'] = 0;
    }

    if (is_writable($folder.$file)) {
    $return['writable'] = 1;
    } else {
    $return['writable'] = 0;
    }
// check for the existance of a folder
$return['is_dir'] = 0;
if ($file == '') {
if ($handle = @opendir($folder.$file)) {
$return['is_dir'] = 1;
@closedir($handle);
}
}
return $return;
}

function cpg_output_version_row($file_version_info = '', $file_path = '', $cpg_is_file='') {
global $repository_filename,$repository_version,$repository_cvs,$repository_needed,$repository_readwrite,$lang_versioncheck_php,$counter_file_mandatory_not_exist,$counter_file_optional_not_exist,$counter_cpg_version_older,$counter_cpg_version_younger,$counter_cvs_version_older,$counter_cvs_version_younger;
$file_complete_path = $file_path['path'].$file_path['file'];
print '<tr>';
print '<td class="tableb">';
if ($cpg_is_file == '') {
print '<img src="images/folder.gif" width="16" height="16" border="0" alt="" title="" align="left" style="margin-left:0px;margin-right:10px" />';
} else {
print '<img src="images/spacer.gif" width="10" height="15" border="0" alt="" title="" style="border:1px solid black;margin-left:2px;margin-right:12px;background-color:#FFFFFF" align="left">';
}
$help_ouput = '';
if ($file_version_info['exists'] == 1) {
    $stylecolor = '';
    $helptitle = '';
} else {
    if ($repository_needed[$file_complete_path] == 'optional') {
        $stylecolor = 'yellow';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_optional1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_optional2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
        $counter_file_optional_not_exist++;
    } else {
        $stylecolor = 'red';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_mandatory1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_mandatory2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
        $counter_file_mandatory_not_exist++;
    }
}
print '<span class="'.$stylecolor.'" title="'.$helptitle.'">';
print $file_path['path'];
print $file_path['file'];
if ($stylecolor != '') {
    print '&nbsp;';
    print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
}
print '</span>';
print '</td><td class="tableb">';
// cpg version start
    $cvs_version_check = 'enable';
    if (!$repository_version[$file_complete_path]) {
        $repository_version[$file_complete_path] = '?';
    }
    if ($file_version_info['exists'] != 1)
    {
        print '-';
        $helptitle = '';
    } elseif (!$file_version_info['cpg_version'] && $repository_version[$file_complete_path] == '?') {
        print 'n/a';
    } elseif ((!$file_version_info['cpg_version'] || $file_version_info['cpg_version'] == 'n/a') && $repository_version[$file_complete_path] != '?') {
        $cvs_version_check = 'disable';
        print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
        print '?';
        print '</span>';
        print ' / ';
        print '<span title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        print '</span>';
        $helptitle = $lang_versioncheck_php['help_no_local_version1'];
        $helpoutput = $lang_versioncheck_php['help_no_local_version2'];
        $counter_cpg_version_older++;
    } elseif ((!$file_version_info['cpg_version'] || $file_version_info['cpg_version'] == 'n/a') && $repository_version[$file_complete_path] == '?') {
        $cvs_version_check = 'disable';
        print '-';
        $helptitle = '';
        $helpoutput = '';
    } elseif ($file_version_info['cpg_version'] == $repository_version[$file_complete_path]) {
        print '<span class="green" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</span>';
        print ' / ';
        print '<span class="green" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $file_version_info['cpg_version'];
        print '</span>';
        $helptitle = '';
    } elseif ($file_version_info['cpg_version'] < $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</span>';
        print ' / ';
        print '<span title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        print '</span>';
        $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
        $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
        $counter_cpg_version_older++;
    } elseif ($file_version_info['cpg_version'] > $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print '<span title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print ' / ';
        print '<span class="yellow" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        print '</span>';
        $helptitle = $lang_versioncheck_php['help_local_version_dev1'];
        $helpoutput = $lang_versioncheck_php['help_local_version_dev2'];
        $counter_cpg_version_younger++;
    } else {
        $cvs_version_check = 'disable';
        print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</span>';
        print ' / ';
        print '<span class="red" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        print '</span>';
        $counter_cpg_version_older++;
    }
   if ($helptitle != '') {
      print '&nbsp;';
      print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
   }
// cpg version end
print '</td><td class="tableb">';
// cvs version start
    $helptitle = '';
    if($file_version_info['cvs_version'] == '//') {$file_version_info['cvs_version'] = '';}
    if ($cvs_version_check != 'disable') {
        if (!$repository_cvs[$file_complete_path]) {
            $repository_cvs[$file_complete_path] = '?';
        }
        if ($file_version_info['exists'] != 1)
        {
            print '-';
        } elseif (!$file_version_info['cvs_version'] && $repository_cvs[$file_complete_path] == '?') {
            print 'n/a';
        } elseif ($file_version_info['cvs_version'] == 'n/a' && $file_version_info['cvs_version'] == 'n/a') {
            print 'n/a';
            $helptitle = '';
            $helpoutput = '';
        } elseif (!$file_version_info['cvs_version'] || $file_version_info['cvs_version'] == 'n/a') {
            print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
            $helptitle = $lang_versioncheck_php['help_local_version_na1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_na2'];
            $counter_cvs_version_older++;
        } elseif (cpg_version_compare($file_version_info['cvs_version']) == cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<span class="green" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span class="green" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
        } elseif (cpg_version_compare($file_version_info['cvs_version']) < cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
            $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
            $counter_cvs_version_older++;
        } elseif (cpg_version_compare($file_version_info['cvs_version']) > cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<span title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span class="yellow" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
            $helptitle = $lang_versioncheck_php['help_local_version_dev1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_dev2'];
            $counter_cvs_version_younger++;
        } else {
            print '<span class="red" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span class="red" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
            $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
            $counter_cvs_version_older++;
        }
    } else {
            print '-';
    }
    if ($helptitle != '') {
        print '&nbsp;';
        print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput)).'&css=1'),400,150);
    }
// cvs version end
print '</td>';
print '<!--<td class="tableb">';
// writable ? start
$stylecolor = '';
if ($file_version_info['writable'] == 0 && $repository_readwrite[$file_complete_path] == 'w') {
    $stylecolor = 'red';
} elseif ($file_version_info['writable'] == 1 && $repository_readwrite[$file_complete_path] == 'r') {
    $stylecolor = 'yellow';
}
print '<span class="'.$stylecolor.'">';
if ($file_version_info['writable'] == 1)
{
   print '&radic;';
} elseif ($file_version_info['exists'] == 1) {
  print '-';
}
print '</span>';
// writable ? end
print "</td>--></tr>\n";
}

function cpg_version_compare($version)
{
$version_info = explode ( '.', $version);
for ($i=0;$i<count($version_info);$i++) {
$return = $return + (pow('100',count($version_info)-$i)*$version_info[$i]);
}
return $return;
}

function cpg_offline_repository() {
$return = '
1.2.1|addfav.php|1.2.1||mandatory|r@
1.2.1|addpic.php|1.2.1||optional|r@
1.2.1|admin.php|1.2.1||mandatory|r@
1.2.1|albmgr.php|1.2.1||mandatory|r@
1.2.1|anycontent.php|1.2.1||mandatory|r@
1.2.1|banning.php|1.2.1||mandatory|r@
1.2.1|catmgr.php|1.2.1||mandatory|r@
1.2.1|config.php|1.2.1||mandatory|r@
1.2.1|db_input.php|1.2.1||mandatory|r@
1.2.1|delete.php|1.2.1||mandatory|r@
1.2.1|displayecard.php|1.2.1||mandatory|r@
1.2.1|displayimage.php|1.2.1||mandatory|r@
1.2.1|ecard.php|1.2.1||mandatory|r@
1.2.1|editpics.php|1.2.1||mandatory|r@
1.2.1|getlang.php|1.2.1||mandatory|r@
1.2.1|groupmgr.php|1.2.1||mandatory|r@
1.2.1|index.php|1.2.1||mandatory|r@
1.2.1|install.php|1.2.1||mandatory|r@
1.2.1|installer.css|||mandatory|r@
1.2.1|login.php|1.2.1||mandatory|r@
1.2.1|logout.php|1.2.1||mandatory|r@
1.2.1|modifyalb.php|1.2.1||mandatory|r@
1.2.1|phpinfo.php|1.2.1||mandatory|r@
1.2.1|profile.php|1.2.1||mandatory|r@
1.2.1|ratepic.php|1.2.1||mandatory|r@
1.2.1|register.php|1.2.1||mandatory|r@
1.2.1|reviewcom.php|1.2.1||mandatory|r@
1.2.1|scripts.js|||mandatory|r@
1.2.1|search.php|1.2.1||mandatory|r@
1.2.1|searchnew.php|1.2.1||mandatory|r@
1.2.1|showthumb.php|1.2.1||mandatory|r@
1.2.1|thumbnails.php|1.2.1||mandatory|r@
1.2.1|update.php|1.2.1||mandatory|r@
1.2.1|upgrade-1.0-to-1.2.php|1.2.1||mandatory|r@
1.2.1|upload.php|1.2.1||mandatory|r@
1.2.1|usermgr.php|1.2.1||mandatory|r@
1.2.1|util.php|1.2.1||mandatory|r@
1.2.1|xp_publish.php|1.2.1||mandatory|r@
1.2.1|albums|||mandatory|w@
1.2.1|albums/index.html|||optional|r@
1.2.1|albums/userpics|||mandatory|w@
1.2.1|albums/userpics/index.html|||optional|w@
1.2.1|bridge|||optional|r@
1.2.1|bridge/invisionboard.inc.php|1.2.1||optional|r@
1.2.1|bridge/phpbb.inc.php|1.2.1||optional|r@
1.2.1|bridge/vbulletin.inc.php|1.2.1||optional|r@
1.2.1|bridge/yabbse.inc.php|1.2.1||optional|r@
1.2.1|docs|||optional|r@
1.2.1|docs/credits.html|||optional|r@
1.2.1|docs/faq.htm|||optional|r@
1.2.1|docs/index.htm|||optional|r@
1.2.1|docs/README.html|||optional|r@
1.2.1|docs/pics|||optional|r@
1.2.1|images|||mandatory|r@
1.2.1|images/flags|||optional|r@
1.2.1|images/smiles|||mandatory|r@
1.2.1|include|||mandatory|w@
1.2.1|include/config.inc.php|||mandatory|r@
1.2.1|include/exif_php.inc.php|||mandatory|r@
1.2.1|include/functions.inc.php|||mandatory|r@
1.2.1|include/index.html|||mandatory|r@
1.2.1|include/init.inc.php|1.2.1||mandatory|r@
1.2.1|include/mailer.inc.php|1.2.1|1.1|mandatory|r@
1.2.1|include/picmgmt.inc.php|1.2.1||mandatory|r@
1.2.1|include/search.inc.php|1.2.1|1.1|mandatory|r@
1.2.1|include/select_lang.inc.php|1.2.1||mandatory|r@
1.2.1|include/slideshow.inc.php|||mandatory|r@
1.2.1|include/smilies.inc.php|1.2.1||mandatory|r@
1.2.1|include/sql_parse.php|1.2.1|1.1|mandatory|r@
1.2.1|lang|||mandatory|r@
1.2.1|lang/arabic.php|1.2.1||optional|r@
1.2.1|lang/arabic-utf-8.php|1.2.1||optional|r@
1.2.1|lang/bosnian.php|1.2.1||optional|r@
1.2.1|lang/bosnian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/brazilian_portuguese.php|1.2.1||optional|r@
1.2.1|lang/brazilian_portuguese-utf-8.php|1.2.1||optional|r@
1.2.1|lang/chinese_big5.php|1.2.1||optional|r@
1.2.1|lang/chinese_big5-utf-8.php|1.2.1||optional|r@
1.2.1|lang/chinese_gb.php|1.2.1||optional|r@
1.2.1|lang/chinese_gb-utf-8.php|1.2.1||optional|r@
1.2.1|lang/croatian.php|1.2.1||optional|r@
1.2.1|lang/croatian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/czech.php|1.2.1||optional|r@
1.2.1|lang/czech-utf-8.php|1.2.1||optional|r@
1.2.1|lang/danish.php|1.2.1||optional|r@
1.2.1|lang/danish-utf-8.php|1.2.1||optional|r@
1.2.1|lang/dutch.php|1.2.1||optional|r@
1.2.1|lang/dutch-utf-8.php|1.2.1||optional|r@
1.2.1|lang/english.php|1.2.1||mandatory|r@
1.2.1|lang/english-utf-8.php|1.2.1||optional|r@
1.2.1|lang/estonian.php|1.2.1||mandatory|r@
1.2.1|lang/estonian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/finnish.php|1.2.1||mandatory|r@
1.2.1|lang/finnish-utf-8.php|1.2.1||optional|r@
1.2.1|lang/french.php|1.2.1||optional|r@
1.2.1|lang/french-utf-8.php|1.2.1||optional|r@
1.2.1|lang/german.php|1.2.1||optional|r@
1.2.1|lang/german-utf-8.php|1.2.1||optional|r@
1.2.1|lang/greek.php|1.2.1||optional|r@
1.2.1|lang/greek-utf-8.php|1.2.1||optional|r@
1.2.1|lang/hebrew.php|1.2.1||optional|r@
1.2.1|lang/hebrew-utf-8.php|1.2.1||optional|r@
1.2.1|lang/hungarian.php|1.2.1||optional|r@
1.2.1|lang/hungarian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/indonesian.php|1.2.1||optional|r@
1.2.1|lang/indonesian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/italian.php|1.2.1||optional|r@
1.2.1|lang/italian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/japanese.php|1.2.1||optional|r@
1.2.1|lang/japanese-utf-8.php|1.2.1||optional|r@
1.2.1|lang/korean.php|1.2.1||optional|r@
1.2.1|lang/korean-utf-8.php|1.2.1||optional|r@
1.2.1|lang/latvian.php|1.2.1||optional|r@
1.2.1|lang/latvian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/norwegian.php|1.2.1||optional|r@
1.2.1|lang/norwegian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/portuguese.php|1.2.1||optional|r@
1.2.1|lang/portuguese-utf-8.php|1.2.1||optional|r@
1.2.1|lang/romanian.php|1.2.1||optional|r@
1.2.1|lang/romanian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/slovak.php|1.2.1||optional|r@
1.2.1|lang/slovak-utf-8.php|1.2.1||optional|r@
1.2.1|lang/slovenian.php|1.2.1||optional|r@
1.2.1|lang/slovenian-utf-8.php|1.2.1||optional|r@
1.2.1|lang/spanish.php|1.2.1||optional|r@
1.2.1|lang/spanish-utf-8.php|1.2.1||optional|r@
1.2.1|lang/swedish.php|1.2.1||optional|r@
1.2.1|lang/swedish-utf-8.php|1.2.1||optional|r@
1.2.1|lang/turkish.php|1.2.1||optional|r@
1.2.1|lang/turkish-utf-8.php|1.2.1||optional|r@
1.2.1|lang/vietnamese.php|1.2.1||optional|r@
1.2.1|lang/vietnamese-utf-8.php|1.2.1||optional|r@
1.2.1|sql/basic.sql|||mandatory|r@
1.2.1|sql/restore_config.sql|||mandatory|r@
1.2.1|sql/schema.sql|||mandatory|r@
1.2.1|sql/update.sql|||mandatory|r@
1.2.1|themes|||mandatory|r@
1.2.1|themes/default|||optional|r@
1.2.1|themes/default/style.css|||optional|r@
1.2.1|themes/default/template.html|||optional|r@
1.2.1|themes/default/theme.php|1.2.0||optional|r@
1.2.1|themes/default/images|||optional|r@
1.2.1|themes/eyeball|||optional|r@
1.2.1|themes/eyeball/style.css|||optional|r@
1.2.1|themes/eyeball/template.html|||optional|r@
1.2.1|themes/eyeball/theme.php|1.2.0||optional|r@
1.2.1|themes/eyeball/images|||optional|r@
1.2.1|themes/fruity|||optional|r@
1.2.1|themes/fruity/style.css|||optional|r@
1.2.1|themes/fruity/template.html|||optional|r@
1.2.1|themes/fruity/theme.php|1.2.0||optional|r@
1.2.1|themes/fruity/images|||optional|r@
1.2.1|themes/hardwired|||optional|r@
1.2.1|themes/hardwired/style.css|||optional|r@
1.2.1|themes/hardwired/template.html|||optional|r@
1.2.1|themes/hardwired/theme.php|1.2.0||optional|r@
1.2.1|themes/hardwired/images|||optional|r@
1.2.1|themes/igames|||optional|r@
1.2.1|themes/igames/style.css|||optional|r@
1.2.1|themes/igames/template.html|||optional|r@
1.2.1|themes/igames/theme.php|1.2.0||optional|r@
1.2.1|themes/igames/images|||optional|r@
1.2.1|themes/mac_ox_x|||optional|r@
1.2.1|themes/mac_ox_x/style.css|||optional|r@
1.2.1|themes/mac_ox_x/template.html|||optional|r@
1.2.1|themes/mac_ox_x/theme.php|||optional|r@
1.2.1|themes/mac_ox_x/images|||optional|r@
1.2.1|themes/project_vii/style.css|||optional|r@
1.2.1|themes/project_vii/template.html|||optional|r@
1.2.1|themes/project_vii/theme.php|||optional|r@
1.2.1|themes/project_vii/images|||optional|r@
1.2.1|themes/rainy_day|||optional|r@
1.2.1|themes/rainy_day/style.css|||optional|r@
1.2.1|themes/rainy_day/template.html|||optional|r@
1.2.1|themes/rainy_day/theme.php|||optional|r@
1.2.1|themes/rainy_day/images|||optional|r@
1.2.1|themes/water_drop|||optional|r@
1.2.1|themes/water_drop/style.css|||optional|r@
1.2.1|themes/water_drop/template.html|||optional|r@
1.2.1|themes/water_drop/theme.php|||optional|r@
1.2.1|themes/water_drop/images|||optional|r@
1.3.0|addfav.php|1.3.0|1.6|mandatory|r@
1.3.0|addpic.php|1.3.0|1.4|optional|r@
1.3.0|admin.php|1.3.0|1.4|mandatory|r@
1.3.0|albmgr.php|1.3.0|1.4|mandatory|r@
1.3.0|anycontent.php|1.3.0|1.7|mandatory|r@
1.3.0|banning.php|1.3.0|1.11|mandatory|r@
1.3.0|catmgr.php|1.3.0|1.9|mandatory|r@
1.3.0|config.php|1.3.0|1.15|mandatory|r@
1.3.0|db_ecard.php|1.3.0|1.5|mandatory|r@
1.3.0|db_input.php|1.3.0|1.23|mandatory|r@
1.3.0|delete.php|1.3.0|1.5|mandatory|r@
1.3.0|displayecard.php|1.3.0|1.4|mandatory|r@
1.3.0|displayimage.php|1.3.0|1.46|mandatory|r@
1.3.0|ecard.php|1.3.0|1.12|mandatory|r@
1.3.0|editOnePic.php|1.3.0|1.13|mandatory|r@
1.3.0|editpics.php||1.16|mandatory|r@
1.3.0|faq.php|1.3.0|1.4|mandatory|r@
1.3.0|forgot_passwd.php|1.3.0|1.6|mandatory|r@
1.3.0|getlang.php|1.3.0|1.4|mandatory|r@
1.3.0|groupmgr.php|1.3.0|1.7|mandatory|r@
1.3.0|image_processor.php||1.11|mandatory|r@
1.3.0|index.php|1.3.0|1.40|mandatory|r@
1.3.0|install.php|1.3.0|1.11|mandatory|r@
1.3.0|installer.css||1.3|mandatory|r@
1.3.0|login.php|1.3.0|1.7|mandatory|r@
1.3.0|logout.php|1.3.0|1.4|mandatory|r@
1.3.0|modifyalb.php|1.3.0|1.6|mandatory|r@
1.3.0|phpinfo.php|1.3.0|1.7|mandatory|r@
1.3.0|picEditor.php|1.2.0|1.15|mandatory|r@
1.3.0|profile.php|1.3.0|1.14|mandatory|r@
1.3.0|ratepic.php|1.3.0|1.6|mandatory|r@
1.3.0|register.php|1.3.0|1.5|mandatory|r@
1.3.0|reviewcom.php|1.3.0|1.7|mandatory|r@
1.3.0|scripts.js|||mandatory|r@
1.3.0|search.php|1.3.0|1.5|mandatory|r@
1.3.0|searchnew.php|1.3.0|1.17|mandatory|r@
1.3.0|showthumb.php|1.3.0|1.4|mandatory|r@
1.3.0|thumbnails.php|1.3.0|1.11|mandatory|r@
1.3.0|update.php|1.3.0|1.6|mandatory|r@
1.3.0|upgrade-1.0-to-1.2.php|1.3.0|1.5|mandatory|r@
1.3.0|upload.php|1.3|1.29|mandatory|r@
1.3.0|usermgr.php|1.3.0|1.7|mandatory|r@
1.3.0|util.php|1.3.0|1.11|mandatory|r@
1.3.0|xp_publish.php|1.3.0|1.8|mandatory|r@
1.3.0|zipdownload.php|1.3.0|1.4|mandatory|r@
1.3.0|albums|||mandatory|w@
1.3.0|albums/index.html||1.2|optional|r@
1.3.0|albums/edit|||mandatory|w@
1.3.0|albums/edit/index.html|||optional|w@
1.3.0|albums/userpics|||mandatory|w@
1.3.0|albums/userpics/index.html||1.2|optional|w@
1.3.0|bridge|||optional|r@
1.3.0|bridge/invisionboard.inc.php|1.3.0|1.12|optional|r@
1.3.0|bridge/phpbb.inc.php|1.3.0|1.18|optional|r@
1.3.0|bridge/smf.inc.php|1.3.0|1.12|optional|r@
1.3.0|bridge/vbulletin23.inc.php|1.3.0|1.6|optional|r@
1.3.0|bridge/vbulletin30.inc.php|1.3.0|1.7|optional|r@
1.3.0|bridge/woltlab21.inc.php|1.3.0|1.11|optional|r@
1.3.0|bridge/yabbse.inc.php|1.3.0|1.22|optional|r@
1.3.0|docs|||optional|r@
1.3.0|docs/credits.html||1.12|optional|r@
1.3.0|docs/faq.htm||1.11|optional|r@
1.3.0|docs/index.htm||1.41|optional|r@
1.3.0|docs/README.html||1.17|optional|r@
1.3.0|docs/theme.htm||1.2|optional|r@
1.3.0|docs/translation.htm||1.2|optional|r@
1.3.0|docs/pics|||optional|r@
1.3.0|images|||mandatory|r@
1.3.0|images/flags|||optional|r@
1.3.0|images/smiles|||mandatory|r@
1.3.0|include|||mandatory|w@
1.3.0|include/archive.php|||mandatory|r@
1.3.0|include/config.inc.php|||mandatory|r@
1.3.0|include/crop.inc.php|1.3.0|1.5|mandatory|r@
1.3.0|include/editDesc.inc.php|1.3.0|1.4|mandatory|r@
1.3.0|include/exif_php.inc.php|1.3.0|1.7|mandatory|r@
1.3.0|include/exifReader.inc.php|||mandatory|r@
1.3.0|include/functions.inc.php||1.67|mandatory|r@
1.3.0|include/imageObjectGD.class.php|1.2.0|1.4|mandatory|r@
1.3.0|include/imageObjectIM.class.php|1.2.0|1.4|mandatory|r@
1.3.0|include/index.html|||mandatory|r@
1.3.0|include/init.inc.php|1.3.0|1.33|mandatory|r@
1.3.0|include/iptc.inc.php|1.3.0|1.5|mandatory|r@
1.3.0|include/mailer.inc.php|1.3.0|1.5|mandatory|r@
1.3.0|include/media.functions.inc.php||1.4|mandatory|r@
1.3.0|include/picmgmt.inc.php|1.3.0|1.14|mandatory|r@
1.3.0|include/search.inc.php|1.3.0|1.5|mandatory|r@
1.3.0|include/select_lang.inc.php|1.3.0|1.4|mandatory|r@
1.3.0|include/slideshow.inc.php||1.7|mandatory|r@
1.3.0|include/smilies.inc.php|1.3.0|1.5|mandatory|r@
1.3.0|include/sql_parse.php|1.3.0|1.4|mandatory|r@
1.3.0|lang|||mandatory|r@
1.3.0|lang/brazilian_portuguese.php|1.3.0|1.6|optional|r@
1.3.0|lang/brazilian_portuguese-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/bulgarian.php|1.3.0|1.5|optional|r@
1.3.0|lang/bulgarian-utf-8.php|1.3.0|1.4|optional|r@
1.3.0|lang/chinese_big5.php|1.3.0|1.5|optional|r@
1.3.0|lang/chinese_big5-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/chinese_gb.php|1.3.0|1.5|optional|r@
1.3.0|lang/chinese_gb-utf-8.php|1.3.0|1.5|optional|r@
1.3.0|lang/croatian.php|1.3.0|1.5|optional|r@
1.3.0|lang/croatian-utf-8.php|1.3.0|1.5|optional|r@
1.3.0|lang/danish.php|1.3.0|1.10|optional|r@
1.3.0|lang/danish-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/dutch.php|1.3.0|1.11|optional|r@
1.3.0|lang/dutch-utf-8.php|1.3.0|1.11|optional|r@
1.3.0|lang/english.php|1.3.0|1.91|mandatory|r@
1.3.0|lang/english-utf-8.php|1.3.0|1.13|optional|r@
1.3.0|lang/french.php|1.3.0|1.14|optional|r@
1.3.0|lang/french-utf-8.php|1.2.1|1.12|optional|r@
1.3.0|lang/german.php|1.3.0|1.14|optional|r@
1.3.0|lang/german-utf-8.php|1.3.0|1.15|optional|r@
1.3.0|lang/greek.php|1.3.0|1.7|optional|r@
1.3.0|lang/greek-utf-8.php|1.3.0|1.7|optional|r@
1.3.0|lang/hebrew.php|1.3.0|1.6|optional|r@
1.3.0|lang/hebrew-utf-8.php|1.3.0|1.7|optional|r@
1.3.0|lang/hungarian.php|1.3.0|1.8|optional|r@
1.3.0|lang/hungarian-utf-8.php|1.3.0|1.9|optional|r@
1.3.0|lang/indonesian.php|1.3.0|1.5|optional|r@
1.3.0|lang/indonesian-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/italian.php|1.3.0|1.7|optional|r@
1.3.0|lang/italian-utf-8.php|1.3.0|1.7|optional|r@
1.3.0|lang/italian2.php|1.3.0|1.1|optional|r@
1.3.0|lang/italian2-utf-8.php|1.3.0|1.1|optional|r@
1.3.0|lang/japanese.php|1.3.0|1.5|optional|r@
1.3.0|lang/japanese-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/norwegian.php|1.3.0|1.6|optional|r@
1.3.0|lang/norwegian-utf-8.php|1.3.0|1.6|optional|r@
1.3.0|lang/polish.php|1.3.0|1.4|optional|r@
1.3.0|lang/polish-utf-8.php|1.3.0|1.3|optional|r@
1.3.0|lang/slovenian.php|1.3.0|1.10|optional|r@
1.3.0|lang/slovenian-utf-8.php|1.3.0|1.8|optional|r@
1.3.0|lang/spanish.php|1.3.0|1.8|optional|r@
1.3.0|lang/spanish-utf-8.php|1.3.0|1.8|optional|r@
1.3.0|sql/basic.sql||1.31|mandatory|r@
1.3.0|sql/coppermine.sql||1.18|mandatory|r@
1.3.0|sql/restore_config.sql||1.4|mandatory|r@
1.3.0|sql/schema.sql||1.12|mandatory|r@
1.3.0|sql/update.sql||1.48|mandatory|r@
1.3.0|themes|||mandatory|r@
1.3.0|themes/classic|||optional|r@
1.3.0|themes/classic/style.css||1.1|optional|r@
1.3.0|themes/classic/template.html||1.3|optional|r@
1.3.0|themes/classic/theme.php|1.3.0|1.4|optional|r@
1.3.0|themes/classic/images|||optional|r@
1.3.0|themes/eyeball|||optional|r@
1.3.0|themes/eyeball/style.css||1.11|optional|r@
1.3.0|themes/eyeball/template.html||1.8|optional|r@
1.3.0|themes/eyeball/theme.php|1.3.0|1.34|optional|r@
1.3.0|themes/eyeball/images|||optional|r@
1.3.0|themes/fruity|||optional|r@
1.3.0|themes/fruity/style.css||1.11|optional|r@
1.3.0|themes/fruity/template.html||1.8|optional|r@
1.3.0|themes/fruity/theme.php|1.3.0|1.32|optional|r@
1.3.0|themes/fruity/images|||optional|r@
1.3.0|themes/hardwired|||optional|r@
1.3.0|themes/hardwired/style.css||1.13|optional|r@
1.3.0|themes/hardwired/template.html||1.9|optional|r@
1.3.0|themes/hardwired/theme.php|1.3.0|1.35|optional|r@
1.3.0|themes/hardwired/images|||optional|r@
1.3.0|themes/igames|||optional|r@
1.3.0|themes/igames/style.css||1.12|optional|r@
1.3.0|themes/igames/template.html||1.9|optional|r@
1.3.0|themes/igames/theme.php|1.3.0|1.36|optional|r@
1.3.0|themes/igames/images|||optional|r@
1.3.0|themes/mac_ox_x|||optional|r@
1.3.0|themes/mac_ox_x/style.css||1.11|optional|r@
1.3.0|themes/mac_ox_x/template.html||1.8|optional|r@
1.3.0|themes/mac_ox_x/theme.php|1.3.0|1.33|optional|r@
1.3.0|themes/mac_ox_x/images|||optional|r@
1.3.0|themes/classic|||optional|r@
1.3.0|themes/project_vii/style.css||1.13|optional|r@
1.3.0|themes/project_vii/template.html||1.7|optional|r@
1.3.0|themes/project_vii/theme.php|1.3.0|1.34|optional|r@
1.3.0|themes/project_vii/images|||optional|r@
1.3.0|themes/rainy_day|||optional|r@
1.3.0|themes/rainy_day/style.css||1.13|optional|r@
1.3.0|themes/rainy_day/template.html||1.6|optional|r@
1.3.0|themes/rainy_day/theme.php|1.3.0|1.37|optional|r@
1.3.0|themes/rainy_day/images|||optional|r@
1.3.0|themes/styleguide|||optional|r@
1.3.0|themes/styleguide/domLib.js|||optional|r@
1.3.0|themes/styleguide/domTT.js|||optional|r@
1.3.0|themes/styleguide/readme.htm||1.2|optional|r@
1.3.0|themes/styleguide/template.html||1.4|optional|r@
1.3.0|themes/styleguide/theme.php|1.3.0|1.15|optional|r@
1.3.0|themes/styleguide/images|||optional|r@
1.3.0|themes/water_drop|||optional|r@
1.3.0|themes/water_drop/style.css||1.12|optional|r@
1.3.0|themes/water_drop/template.html||1.6|optional|r@
1.3.0|themes/water_drop/theme.php|1.3.0|1.35|optional|r@
1.3.0|themes/water_drop/images|||optional|r@
1.3.1|addfav.php|1.3.1|1.4|mandatory|r@
1.3.1|addpic.php|1.3.1|1.6|optional|r@
1.3.1|admin.php|1.3.1|1.4|mandatory|r@
1.3.1|albmgr.php|1.3.1|1.4|mandatory|r@
1.3.1|anycontent.php|1.3.1|1.4|mandatory|r@
1.3.1|banning.php|1.3.1|1.5|mandatory|r@
1.3.1|calendar.php|1.3.1|1.2|mandatory|r@
1.3.1|catmgr.php|1.3.1|1.5|mandatory|r@
1.3.1|config.php|1.3.1|1.8|mandatory|r@
1.3.1|db_ecard.php|1.3.1|1.2|mandatory|r@
1.3.1|db_input.php|1.3.1|1.4|mandatory|r@
1.3.1|delete.php|1.3.1|1.4|mandatory|r@
1.3.1|displayecard.php|1.3.1|1.4|mandatory|r@
1.3.1|displayimage.php|1.3.1|1.8|mandatory|r@
1.3.1|ecard.php|1.3.1|1.7|mandatory|r@
1.3.1|editOnePic.php|1.3.1|1.3|mandatory|r@
1.3.1|editpics.php||1.5|mandatory|r@
1.3.1|faq.php|1.3.1|1.2|mandatory|r@
1.3.1|forgot_passwd.php|1.3.1|1.3|mandatory|r@
1.3.1|getlang.php|1.3.1|1.4|mandatory|r@
1.3.1|groupmgr.php|1.3.1|1.4|mandatory|r@
1.3.1|image_processor.php|1.3.1|1.2|mandatory|r@
1.3.1|index.php|1.3.1|1.11|mandatory|r@
1.3.1|install.php|1.3.1|1.6|mandatory|r@
1.3.1|installer.css||1.3|mandatory|r@
1.3.1|login.php|1.3.1|1.4|mandatory|r@
1.3.1|logout.php|1.3.1|1.4|mandatory|r@
1.3.1|modifyalb.php|1.3.1|1.4|mandatory|r@
1.3.1|phpinfo.php|1.3.1|1.4|mandatory|r@
1.3.1|picEditor.php|1.3.1|1.2|mandatory|r@
1.3.1|profile.php|1.3.1|1.5|mandatory|r@
1.3.1|ratepic.php|1.3.1|1.4|mandatory|r@
1.3.1|register.php|1.3.1|1.4|mandatory|r@
1.3.1|reviewcom.php|1.3.1|1.4|mandatory|r@
1.3.1|scripts.js|||mandatory|r@
1.3.1|search.php|1.3.1|1.4|mandatory|r@
1.3.1|searchnew.php|1.3.1|1.5|mandatory|r@
1.3.1|showthumb.php|1.3.1|1.4|mandatory|r@
1.3.1|thumbnails.php|1.3.1|1.4|mandatory|r@
1.3.1|update.php|1.3.1|1.5|mandatory|r@
1.3.1|upgrade-1.0-to-1.2.php|1.3.1|1.5|mandatory|r@
1.3.1|upload.php|1.3.1|1.6|mandatory|r@
1.3.1|usermgr.php|1.3.1|1.5|mandatory|r@
1.3.1|util.php|1.3.1|1.5|mandatory|r@
1.3.1|xp_publish.php|1.3.1|1.4|mandatory|r@
1.3.1|zipdownload.php|1.3.1|1.2|mandatory|r@
1.3.1|albums|||mandatory|w@
1.3.1|albums/index.html||1.2|optional|r@
1.3.1|albums/edit|||mandatory|w@
1.3.1|albums/edit/index.html|||optional|w@
1.3.1|albums/userpics|||mandatory|w@
1.3.1|albums/userpics/index.html|||optional|w@
1.3.1|bridge|||optional|r@
1.3.1|bridge/invisionboard.inc.php|1.3.1|1.7|optional|r@
1.3.1|bridge/phpbb.inc.php|1.3.1|1.8|optional|r@
1.3.1|bridge/smf.inc.php|1.3.1|1.6|optional|r@
1.3.1|bridge/vbulletin.inc.php|1.3.1|1.5|optional|r@
1.3.1|bridge/vbulletin23.inc.php|1.3.1|1.5|optional|r@
1.3.1|bridge/vbulletin30.inc.php|1.3.1|1.5|optional|r@
1.3.1|bridge/vbulletin3gamma.inc.php|1.3.1|1.4|optional|r@
1.3.1|bridge/woltlab21.inc.php|1.3.1|1.5|optional|r@
1.3.1|bridge/yabbse.inc.php|1.3.1|1.7|optional|r@
1.3.1|docs|||optional|r@
1.3.1|docs/credits.html||1.6|optional|r@
1.3.1|docs/faq.htm||1.5|optional|r@
1.3.1|docs/index.htm||1.7|optional|r@
1.3.1|docs/README.html||1.6|optional|r@
1.3.1|docs/theme.htm||1.3|optional|r@
1.3.1|docs/translation.htm||1.3|optional|r@
1.3.1|docs/pics|||optional|r@
1.3.1|images|||mandatory|r@
1.3.1|images/flags|||optional|r@
1.3.1|images/smiles|||mandatory|r@
1.3.1|include|||mandatory|w@
1.3.1|include/archive.php|1.3.1|1.2|mandatory|r@
1.3.1|include/config.inc.php|||mandatory|r@
1.3.1|include/crop.inc.php|1.3.1|1.3|mandatory|r@
1.3.1|include/editDesc.inc.php|1.3.1|1.2|mandatory|r@
1.3.1|include/exif_php.inc.php|1.3.1|1.5|mandatory|r@
1.3.1|include/exifReader.inc.php|1.3.1|1.2|mandatory|r@
1.3.1|include/functions.inc.php|1.3.1|1.11|mandatory|r@
1.3.1|include/imageObjectGD.class.php|1.3.1|1.2|mandatory|r@
1.3.1|include/imageObjectIM.class.php|1.3.1|1.2|mandatory|r@
1.3.1|include/index.html|||mandatory|r@
1.3.1|include/init.inc.php|1.3.1|1.7|mandatory|r@
1.3.1|include/iptc.inc.php|1.3.1|1.2|mandatory|r@
1.3.1|include/mailer.inc.php|1.3.1|1.4|mandatory|r@
1.3.1|include/media.functions.inc.php|1.3.1|1.2|mandatory|r@
1.3.1|include/picmgmt.inc.php|1.3.1|1.6|mandatory|r@
1.3.1|include/search.inc.php|1.3.1|1.4|mandatory|r@
1.3.1|include/select_lang.inc.php|1.3.1|1.5|mandatory|r@
1.3.1|include/slideshow.inc.php|1.3.1|1.5|mandatory|r@
1.3.1|include/smilies.inc.php|1.3.1|1.4|mandatory|r@
1.3.1|include/sql_parse.php|1.3.1|1.4|mandatory|r@
1.3.1|lang|||mandatory|r@
1.3.1|lang/arabic.php|1.3.0|1.7|optional|r@
1.3.1|lang/arabic-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/brazilian_portuguese.php|1.3.0|1.6|optional|r@
1.3.1|lang/brazilian_portuguese-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/bulgarian.php|1.3.0|1.3|optional|r@
1.3.1|lang/bulgarian-utf-8.php|1.3.0|1.3|optional|r@
1.3.1|lang/chinese_big5.php|1.3.0|1.6|optional|r@
1.3.1|lang/chinese_big5-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/chinese_gb.php|1.3.0|1.6|optional|r@
1.3.1|lang/chinese_gb-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/croatian.php|1.3.0|1.6|optional|r@
1.3.1|lang/croatian-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/czech.php|1.3.0||optional|r@
1.3.1|lang/czech-utf-8.php|1.3.0||optional|r@
1.3.1|lang/danish.php|1.3.0|1.7|optional|r@
1.3.1|lang/danish-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/dutch.php|1.3.0|1.6|optional|r@
1.3.1|lang/dutch-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/english.php|1.3.0|1.10|mandatory|r@
1.3.1|lang/english-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/finnish.php|1.3.0|1.5|optional|r@
1.3.1|lang/finnish-utf-8.php|1.3.0|1.5|optional|r@
1.3.1|lang/french.php|1.3.0|1.8|optional|r@
1.3.1|lang/french-utf-8.php|1.2.1|1.8|optional|r@
1.3.1|lang/german.php|1.3.0|1.6|optional|r@
1.3.1|lang/german-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/greek.php|1.3.0|1.6|optional|r@
1.3.1|lang/greek-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/hebrew.php|1.3.0|1.7|optional|r@
1.3.1|lang/hebrew-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/hungarian.php|1.3.0|1.6|optional|r@
1.3.1|lang/hungarian-utf-8.php|1.3.0|1.6|optional|r@
1.3.1|lang/indonesian.php|1.3.0|1.5|optional|r@
1.3.1|lang/indonesian-utf-8.php|1.3.0|1.5|optional|r@
1.3.1|lang/italian.php|1.3.0|1.8|optional|r@
1.3.1|lang/italian-utf-8.php|1.3.0|1.8|optional|r@
1.3.1|lang/italian2.php|1.3.0|1.1|optional|r@
1.3.1|lang/italian2-utf-8.php|1.3.0|1.1|optional|r@
1.3.1|lang/japanese.php|1.3.0|1.7|optional|r@
1.3.1|lang/japanese-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/norwegian.php|1.3.0|1.7|optional|r@
1.3.1|lang/norwegian-utf-8.php|1.3.0|1.7|optional|r@
1.3.1|lang/polish.php|1.3.0|1.4|optional|r@
1.3.1|lang/polish-utf-8.php|1.3.0|1.4|optional|r@
1.3.1|lang/slovenian.php|1.3.0|1.5|optional|r@
1.3.1|lang/slovenian-utf-8.php|1.3.0|1.5|optional|r@
1.3.1|lang/spanish.php|1.3.0|1.5|optional|r@
1.3.1|lang/spanish-utf-8.php|1.3.0|1.5|optional|r@
1.3.1|sql/basic.sql||1.4|mandatory|r@
1.3.1|sql/schema.sql||1.3|mandatory|r@
1.3.1|sql/update.sql||1.8|mandatory|r@
1.3.1|themes|||mandatory|r@
1.3.1|themes/classic|||optional|r@
1.3.1|themes/classic/style.css||1.1|optional|r@
1.3.1|themes/classic/template.html||1.3|optional|r@
1.3.1|themes/classic/theme.php|1.3.1|1.4|optional|r@
1.3.1|themes/classic/images|||optional|r@
1.3.1|themes/eyeball|||optional|r@
1.3.1|themes/eyeball/style.css||1.2|optional|r@
1.3.1|themes/eyeball/template.html||1.8|optional|r@
1.3.1|themes/eyeball/theme.php|1.3.1|1.6|optional|r@
1.3.1|themes/eyeball/images|||optional|r@
1.3.1|themes/fruity|||optional|r@
1.3.1|themes/fruity/style.css||1.2|optional|r@
1.3.1|themes/fruity/template.html||1.8|optional|r@
1.3.1|themes/fruity/theme.php|1.3.1|1.5|optional|r@
1.3.1|themes/fruity/images|||optional|r@
1.3.1|themes/hardwired|||optional|r@
1.3.1|themes/hardwired/style.css||1.2|optional|r@
1.3.1|themes/hardwired/template.html||1.9|optional|r@
1.3.1|themes/hardwired/theme.php|1.3.1|1.7|optional|r@
1.3.1|themes/hardwired/images|||optional|r@
1.3.1|themes/igames|||optional|r@
1.3.1|themes/igames/style.css||1.2|optional|r@
1.3.1|themes/igames/template.html||1.9|optional|r@
1.3.1|themes/igames/theme.php|1.3.1|1.7|optional|r@
1.3.1|themes/igames/images|||optional|r@
1.3.1|themes/mac_ox_x|||optional|r@
1.3.1|themes/mac_ox_x/style.css||1.2|optional|r@
1.3.1|themes/mac_ox_x/template.html||1.8|optional|r@
1.3.1|themes/mac_ox_x/theme.php|1.3.1|1.6|optional|r@
1.3.1|themes/mac_ox_x/images|||optional|r@
1.3.1|themes/classic|||optional|r@
1.3.1|themes/project_vii/style.css||1.2|optional|r@
1.3.1|themes/project_vii/template.html||1.7|optional|r@
1.3.1|themes/project_vii/theme.php|1.3.1|1.6|optional|r@
1.3.1|themes/project_vii/images|||optional|r@
1.3.1|themes/rainy_day|||optional|r@
1.3.1|themes/rainy_day/style.css||1.2|optional|r@
1.3.1|themes/rainy_day/template.html||1.6|optional|r@
1.3.1|themes/rainy_day/theme.php|1.3.1|1.6|optional|r@
1.3.1|themes/rainy_day/images|||optional|r@
1.3.1|themes/styleguide|||optional|r@
1.3.1|themes/styleguide/domLib.js|||optional|r@
1.3.1|themes/styleguide/domTT.js|||optional|r@
1.3.1|themes/styleguide/readme.htm||1.2|optional|r@
1.3.1|themes/styleguide/template.html||1.4|optional|r@
1.3.1|themes/styleguide/theme.php|1.3.1|1.2|optional|r@
1.3.1|themes/styleguide/images|||optional|r@
1.3.1|themes/water_drop|||optional|r@
1.3.1|themes/water_drop/style.css||1.2|optional|r@
1.3.1|themes/water_drop/template.html||1.6|optional|r@
1.3.1|themes/water_drop/theme.php|1.3.1|1.6|optional|r@
1.3.1|themes/water_drop/images|||optional|r@
1.3.2|addfav.php|1.3.2|1.5|mandatory|r@
1.3.2|addpic.php|1.3.2|1.7|optional|r@
1.3.2|admin.php|1.3.2|1.5|mandatory|r@
1.3.2|albmgr.php|1.3.2|1.5|mandatory|r@
1.3.2|anycontent.php|1.3.2|1.5|mandatory|r@
1.3.2|banning.php|1.3.2|1.6|mandatory|r@
1.3.2|calendar.php|1.3.2|1.3|mandatory|r@
1.3.2|catmgr.php|1.3.2|1.6|mandatory|r@
1.3.2|config.php|1.3.2|1.9|mandatory|r@
1.3.2|db_ecard.php|1.3.2|1.3|mandatory|r@
1.3.2|db_input.php|1.3.2|1.6|mandatory|r@
1.3.2|delete.php|1.3.2|1.5|mandatory|r@
1.3.2|displayecard.php|1.3.2|1.5|mandatory|r@
1.3.2|displayimage.php|1.3.2|1.9|mandatory|r@
1.3.2|ecard.php|1.3.2|1.9|mandatory|r@
1.3.2|editOnePic.php|1.3.2|1.11|mandatory|r@
1.3.2|editpics.php|1.3.2|1.7|mandatory|r@
1.3.2|faq.php|1.3.2|1.3|mandatory|r@
1.3.2|forgot_passwd.php|1.3.2|1.5|mandatory|r@
1.3.2|getlang.php|1.3.2|1.5|mandatory|r@
1.3.2|groupmgr.php|1.3.2|1.5|mandatory|r@
1.3.2|image_processor.php|1.3.2|1.3|mandatory|r@
1.3.2|index.php|1.3.2|1.13|mandatory|r@
1.3.2|install.php|1.3.2|1.10|mandatory|r@
1.3.2|installer.css||1.3|mandatory|r@
1.3.2|login.php|1.3.2|1.5|mandatory|r@
1.3.2|logout.php|1.3.2|1.5|mandatory|r@
1.3.2|modifyalb.php|1.3.2|1.5|mandatory|r@
1.3.2|phpinfo.php|1.3.2|1.5|mandatory|r@
1.3.2|picEditor.php|1.3.2|1.3|mandatory|r@
1.3.2|profile.php|1.3.2|1.6|mandatory|r@
1.3.2|ratepic.php|1.3.2|1.5|mandatory|r@
1.3.2|register.php|1.3.2|1.8|mandatory|r@
1.3.2|reviewcom.php|1.3.2|1.5|mandatory|r@
1.3.2|scripts.js|||mandatory|r@
1.3.2|search.php|1.3.2|1.5|mandatory|r@
1.3.2|searchnew.php|1.3.2|1.6|mandatory|r@
1.3.2|showthumb.php|1.3.2|1.5|mandatory|r@
1.3.2|thumbnails.php|1.3.2|1.5|mandatory|r@
1.3.2|update.php|1.3.2|1.6|mandatory|r@
1.3.2|upgrade-1.0-to-1.2.php|1.3.2|1.6|mandatory|r@
1.3.2|upload.php|1.3.2|1.9|mandatory|r@
1.3.2|usermgr.php|1.3.2|1.6|mandatory|r@
1.3.2|util.php|1.3.2|1.8|mandatory|r@
1.3.2|versioncheck.php|1.4.0|1.1|optional|r@
1.3.2|xp_publish.php|1.3.2|1.5|mandatory|r@
1.3.2|zipdownload.php|1.3.2|1.3|mandatory|r@
1.3.2|albums|||mandatory|w@
1.3.2|albums/index.html||1.2|optional|r@
1.3.2|albums/edit|||mandatory|w@
1.3.2|albums/edit/index.html|||optional|w@
1.3.2|albums/userpics|||mandatory|w@
1.3.2|albums/userpics/index.html|||optional|w@
1.3.2|bridge|||optional|r@
1.3.2|bridge/invisionboard.inc.php|1.3.2|1.8|optional|r@
1.3.2|bridge/phpbb.inc.php|1.3.2|1.9|optional|r@
1.3.2|bridge/punbb.inc.php|1.3.2|1.2|optional|r@
1.3.2|bridge/smf.inc.php|1.3.2|1.7|optional|r@
1.3.2|bridge/vbulletin.inc.php|1.3.2|1.6|optional|r@
1.3.2|bridge/vbulletin23.inc.php|1.3.2|1.6|optional|r@
1.3.2|bridge/vbulletin30.inc.php|1.3.2|1.6|optional|r@
1.3.2|bridge/vbulletin3gamma.inc.php|1.3.2|1.5|optional|r@
1.3.2|bridge/woltlab21.inc.php|1.3.2|1.6|optional|r@
1.3.2|bridge/yabbse.inc.php|1.3.2|1.8|optional|r@
1.3.2|docs|||optional|r@
1.3.2|docs/credits.html||1.7|optional|r@
1.3.2|docs/faq.htm||1.5|optional|r@
1.3.2|docs/index.htm||1.7|optional|r@
1.3.2|docs/README.html||1.7|optional|r@
1.3.2|docs/theme.htm||1.3|optional|r@
1.3.2|docs/translation.htm||1.3|optional|r@
1.3.2|docs/pics|||optional|r@
1.3.2|images|||mandatory|r@
1.3.2|images/flags|||optional|r@
1.3.2|images/smiles|||mandatory|r@
1.3.2|include|||mandatory|w@
1.3.2|include/archive.php|1.3.2|1.3|mandatory|r@
1.3.2|include/config.inc.php|||mandatory|r@
1.3.2|include/crop.inc.php|1.3.2|1.4|mandatory|r@
1.3.2|include/exif_php.inc.php|1.3.2|1.6|mandatory|r@
1.3.2|include/exifReader.inc.php|1.3.2|1.3|mandatory|r@
1.3.2|include/functions.inc.php|1.3.2|1.14|mandatory|r@
1.3.2|include/imageObjectGD.class.php|1.3.2|1.3|mandatory|r@
1.3.2|include/imageObjectIM.class.php|1.3.2|1.3|mandatory|r@
1.3.2|include/index.html|||mandatory|r@
1.3.2|include/init.inc.php|1.3.2|1.10|mandatory|r@
1.3.2|include/iptc.inc.php|1.3.2|1.3|mandatory|r@
1.3.2|include/mailer.inc.php|1.3.2|1.5|mandatory|r@
1.3.2|include/media.functions.inc.php|1.3.2|1.3|mandatory|r@
1.3.2|include/picmgmt.inc.php|1.3.2|1.8|mandatory|r@
1.3.2|include/search.inc.php|1.3.2|1.5|mandatory|r@
1.3.2|include/select_lang.inc.php|1.3.2|1.6|mandatory|r@
1.3.2|include/slideshow.inc.php|1.3.2|1.6|mandatory|r@
1.3.2|include/smilies.inc.php|1.3.2|1.5|mandatory|r@
1.3.2|include/sql_parse.php|1.3.2|1.5|mandatory|r@
1.3.2|lang|||mandatory|r@
1.3.2|lang/arabic.php|1.3.2|1.8|optional|r@
1.3.2|lang/arabic-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/brazilian_portuguese.php|1.3.2|1.7|optional|r@
1.3.2|lang/brazilian_portuguese-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/bulgarian.php|1.3.2|1.4|optional|r@
1.3.2|lang/bulgarian-utf-8.php|1.3.2|1.4|optional|r@
1.3.2|lang/chinese_big5.php|1.3.2|1.7|optional|r@
1.3.2|lang/chinese_big5-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/chinese_gb.php|1.3.2|1.7|optional|r@
1.3.2|lang/chinese_gb-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/croatian.php|1.3.2|1.7|optional|r@
1.3.2|lang/croatian-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/czech.php|1.3.2|1.8|optional|r@
1.3.2|lang/czech-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/danish.php|1.3.2|1.8|optional|r@
1.3.2|lang/danish-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/dutch.php|1.3.2|1.7|optional|r@
1.3.2|lang/dutch-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/english.php|1.3.2|1.13|mandatory|r@
1.3.2|lang/english-utf-8.php|1.3.2|1.9|optional|r@
1.3.2|lang/finnish.php|1.3.2|1.6|optional|r@
1.3.2|lang/finnish-utf-8.php|1.3.2|1.6|optional|r@
1.3.2|lang/french.php|1.3.2|1.10|optional|r@
1.3.2|lang/french-utf-8.php|1.3.2|1.10|optional|r@
1.3.2|lang/german.php|1.3.2|1.7|optional|r@
1.3.2|lang/german-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/greek.php|1.3.2|1.7|optional|r@
1.3.2|lang/greek-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/hebrew.php|1.3.2|1.8|optional|r@
1.3.2|lang/hebrew-utf-8.php|1.3.2|1.9|optional|r@
1.3.2|lang/hungarian.php|1.3.2|1.7|optional|r@
1.3.2|lang/hungarian-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/indonesian.php|1.3.2|1.6|optional|r@
1.3.2|lang/indonesian-utf-8.php|1.3.2|1.6|optional|r@
1.3.2|lang/italian.php|1.3.2|1.9|optional|r@
1.3.2|lang/italian-utf-8.php|1.3.2|1.9|optional|r@
1.3.2|lang/italian2.php|1.3.2|1.2|optional|r@
1.3.2|lang/italian2-utf-8.php|1.3.2|1.2|optional|r@
1.3.2|lang/japanese.php|1.3.2|1.8|optional|r@
1.3.2|lang/japanese-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/latvian.php|1.3.2|1.8|optional|r@
1.3.2|lang/latvian-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/malay.php|1.3.2|1.2|optional|r@
1.3.2|lang/malay-utf-8.php|1.3.2|1.2|optional|r@
1.3.2|lang/norwegian.php|1.3.2|1.8|optional|r@
1.3.2|lang/norwegian-utf-8.php|1.3.2|1.8|optional|r@
1.3.2|lang/polish.php|1.3.2|1.5|optional|r@
1.3.2|lang/polish-utf-8.php|1.3.2|1.5|optional|r@
1.3.2|lang/romanian.php|1.3.2|1.6|optional|r@
1.3.2|lang/romanian-utf-8.php|1.3.2|1.6|optional|r@
1.3.2|lang/romanian_no_diacritics.php|1.3.2|1.1|optional|r@
1.3.2|lang/romanian_no_diacritics-utf-8.php|1.3.2|1.1|optional|r@
1.3.2|lang/russian.php|1.3.2|1.11|optional|r@
1.3.2|lang/russian-utf-8.php|1.3.2|1.11|optional|r@
1.3.2|lang/slovenian.php|1.3.2|1.6|optional|r@
1.3.2|lang/slovenian-utf-8.php|1.3.2|1.6|optional|r@
1.3.2|lang/spanish.php|1.3.2|1.6|optional|r@
1.3.2|lang/spanish-utf-8.php|1.3.2|1.6|optional|r@
1.3.2|lang/swedish.php|1.3.2|1.7|optional|r@
1.3.2|lang/swedish-utf-8.php|1.3.2|1.7|optional|r@
1.3.2|lang/vietnamese.php|1.3.2|1.4|optional|r@
1.3.2|lang/vietnamese-utf-8.php|1.3.2|1.4|optional|r@
1.3.2|sql/basic.sql||1.5|mandatory|r@
1.3.2|sql/schema.sql||1.3|mandatory|r@
1.3.2|sql/update.sql||1.8|mandatory|r@
1.3.2|themes|||mandatory|r@
1.3.2|themes/classic|||optional|r@
1.3.2|themes/classic/style.css||1.1|optional|r@
1.3.2|themes/classic/template.html||1.3|optional|r@
1.3.2|themes/classic/theme.php|1.3.2|1.5|optional|r@
1.3.2|themes/classic/images|||optional|r@
1.3.2|themes/eyeball|||optional|r@
1.3.2|themes/eyeball/style.css||1.2|optional|r@
1.3.2|themes/eyeball/template.html||1.8|optional|r@
1.3.2|themes/eyeball/theme.php|1.3.2|1.7|optional|r@
1.3.2|themes/eyeball/images|||optional|r@
1.3.2|themes/fruity|||optional|r@
1.3.2|themes/fruity/style.css||1.2|optional|r@
1.3.2|themes/fruity/template.html||1.9|optional|r@
1.3.2|themes/fruity/theme.php|1.3.2|1.6|optional|r@
1.3.2|themes/fruity/images|||optional|r@
1.3.2|themes/hardwired|||optional|r@
1.3.2|themes/hardwired/style.css||1.2|optional|r@
1.3.2|themes/hardwired/template.html||1.10|optional|r@
1.3.2|themes/hardwired/theme.php|1.3.2|1.9|optional|r@
1.3.2|themes/hardwired/images|||optional|r@
1.3.2|themes/igames|||optional|r@
1.3.2|themes/igames/style.css||1.2|optional|r@
1.3.2|themes/igames/template.html||1.9|optional|r@
1.3.2|themes/igames/theme.php|1.3.2|1.8|optional|r@
1.3.2|themes/igames/images|||optional|r@
1.3.2|themes/mac_ox_x|||optional|r@
1.3.2|themes/mac_ox_x/style.css||1.2|optional|r@
1.3.2|themes/mac_ox_x/template.html||1.8|optional|r@
1.3.2|themes/mac_ox_x/theme.php|1.3.2|1.7|optional|r@
1.3.2|themes/mac_ox_x/images|||optional|r@
1.3.2|themes/project_vii|||optional|r@
1.3.2|themes/project_vii/style.css||1.2|optional|r@
1.3.2|themes/project_vii/template.html||1.7|optional|r@
1.3.2|themes/project_vii/theme.php|1.3.2|1.7|optional|r@
1.3.2|themes/project_vii/images|||optional|r@
1.3.2|themes/rainy_day|||optional|r@
1.3.2|themes/rainy_day/style.css||1.2|optional|r@
1.3.2|themes/rainy_day/template.html||1.6|optional|r@
1.3.2|themes/rainy_day/theme.php|1.3.2|1.7|optional|r@
1.3.2|themes/rainy_day/images|||optional|r@
1.3.2|themes/styleguide|||optional|r@
1.3.2|themes/styleguide/domLib.js|||optional|r@
1.3.2|themes/styleguide/domTT.js|||optional|r@
1.3.2|themes/styleguide/readme.htm||1.2|optional|r@
1.3.2|themes/styleguide/template.html||1.4|optional|r@
1.3.2|themes/styleguide/theme.php|1.3.2|1.3|optional|r@
1.3.2|themes/styleguide/images|||optional|r@
1.3.2|themes/water_drop|||optional|r@
1.3.2|themes/water_drop/style.css||1.2|optional|r@
1.3.2|themes/water_drop/template.html||1.6|optional|r@
1.3.2|themes/water_drop/theme.php|1.3.2|1.7|optional|r@
1.3.2|themes/water_drop/images|||optional|r@
1.4.0|addfav.php|1.4.0|1.13|mandatory|r@
1.4.0|addpic.php|1.4.0|1.9|optional|r@
1.4.0|admin.php|1.4.0|1.6|mandatory|r@
1.4.0|albmgr.php|1.4.0|1.8|mandatory|r@
1.4.0|anycontent.php|1.4.0|1.9|mandatory|r@
1.4.0|banning.php|1.4.0|1.16|mandatory|r@
1.4.0|calendar.php|1.4.0|1.1|mandatory|r@
1.4.0|catmgr.php|1.4.0|1.16|mandatory|r@
1.4.0|config.php|1.4.0|1.35|mandatory|r@
1.4.0|db_ecard.php|1.4.0|1.8|mandatory|r@
1.4.0|db_input.php|1.4.0|1.29|mandatory|r@
1.4.0|delete.php|1.4.0|1.8|mandatory|r@
1.4.0|displayecard.php|1.4.0|1.5|mandatory|r@
1.4.0|displayimage.php|1.4.0|1.53|mandatory|r@
1.4.0|ecard.php|1.4.0|1.17|mandatory|r@
1.4.0|editOnePic.php|1.4.0|1.19|mandatory|r@
1.4.0|editpics.php|1.4.0|1.20|mandatory|r@
1.4.0|exifmgr.php|1.4.0|1.3|mandatory|r@
1.4.0|faq.php|1.4.0|1.5|mandatory|r@
1.4.0|forgot_passwd.php|1.4.0|1.9|mandatory|r@
1.4.0|getlang.php|1.4.0|1.5|mandatory|r@
1.4.0|groupmgr.php|1.4.0|1.10|mandatory|r@
1.4.0|image_processor.php|1.4.0|1.12|mandatory|r@
1.4.0|index.php|1.4.0|1.59|mandatory|r@
1.4.0|install.php|1.4.0|1.18|mandatory|r@
1.4.0|installer.css|1.4.0|1.4|mandatory|r@
1.4.0|keyword_create_dict.php|1.4.0|1.2|mandatory|r@
1.4.0|keyword_select.php|1.4.0|1.2|mandatory|r@
1.4.0|keywordmgr.php|1.4.0|1.2|mandatory|r@
1.4.0|login.php|1.4.0|1.10|mandatory|r@
1.4.0|logout.php|1.4.0|1.5|mandatory|r@
1.4.0|modifyalb.php|1.4.0|1.13|mandatory|r@
1.4.0|phpinfo.php|1.4.0|1.8|mandatory|r@
1.4.0|picEditor.php|1.4.0|1.16|mandatory|r@
1.4.0|picmgr.php|1.4.0|1.1|mandatory|r@
1.4.0|pluginmgr.php|1.4.0|1.9|mandatory|r@
1.4.0|profile.php|1.4.0|1.23|mandatory|r@
1.4.0|ratepic.php|1.4.0|1.8|mandatory|r@
1.4.0|register.php|1.4.0|1.15|mandatory|r@
1.4.0|repository.txt|||mandatory|r@
1.4.0|reviewcom.php|1.4.0|1.8|mandatory|r@
1.4.0|scripts.js|1.4.0|1.7|mandatory|r@
1.4.0|search.php|1.4.0|1.7|mandatory|r@
1.4.0|searchnew.php|1.4.0|1.19|mandatory|r@
1.4.0|showthumb.php|1.4.0|1.5|mandatory|r@
1.4.0|thumbnails.php|1.4.0|1.16|optional|r@
1.4.0|update.php|1.4.0|1.12|mandatory|r@
1.4.0|upgrade-1.0-to-1.2.php|1.4.0|1.6|mandatory|r@
1.4.0|upload.php|1.4.0|1.40|mandatory|r@
1.4.0|usermgr.php|1.4.0|1.12|mandatory|r@
1.4.0|util.php|1.4.0|1.18|mandatory|r@
1.4.0|versioncheck.php|1.4.0|1.3|mandatory|r@
1.4.0|viewlog.php|1.4.0|1.7|mandatory|r@
1.4.0|xp_publish.php|1.4.0|1.10|mandatory|r@
1.4.0|zipdownload.php|1.4.0|1.5|mandatory|r@
1.4.0|albums|||mandatory|w@
1.4.0|albums/index.html||1.2|mandatory|w@
1.4.0|albums/edit/index.html|||mandatory|w@
1.4.0|albums/edit|||mandatory|w@
1.4.0|albums/edit/index.html|||mandatory|w@
1.4.0|albums/userpics|||mandatory|w@
1.4.0|albums/userpics/index.html||1.2|mandatory|w@
1.4.0|bridge/invisionboard.inc.php|1.4.0|1.15|optional|r@
1.4.0|bridge/mambo.inc.php|1.4.0|1.15|optional|r@
1.4.0|bridge/phpbb.inc.php|1.4.0|1.21|optional|r@
1.4.0|bridge/smf.inc.php|1.4.0|1.18|optional|r@
1.4.0|bridge/vbulletin23.inc.php|1.4.0|1.9|optional|r@
1.4.0|bridge/vbulletin30.inc.php|1.4.0|1.10|optional|r@
1.4.0|bridge/woltlab21.inc.php|1.4.0|1.14|optional|r@
1.4.0|bridge/yabbse.inc.php|1.4.0|1.26|optional|r@
1.4.0|docs|||mandatory|r@
1.4.0|docs/credits.html||1.12|optional|r@
1.4.0|docs/faq.htm|||optional|r@
1.4.0|docs/index.htm||1.10|mandatory|r@
1.4.0|docs/README.html||1.17|optional|r@
1.4.0|docs/showdoc.php|1.4.0||mandatory|r@
1.4.0|docs/theme.htm|||optional|r@
1.4.0|docs/translation.htm|||optional|r@
1.4.0|docs/pics|||mandatory|r@
1.4.0|include|||mandatory|w@
1.4.0|include/archive.php|1.4.0|1.3|mandatory|r@
1.4.0|include/config.inc.php|||mandatory|r@
1.4.0|include/crop.inc.php|1.4.0|1.7|mandatory|r@
1.4.0|include/exif.php|1.4.0|1.3|mandatory|r@
1.4.0|include/exif_php.inc.php|1.4.0|1.12|mandatory|r@
1.4.0|include/exifReader.inc.php|1.4.0|1.5|mandatory|r@
1.4.0|include/functions.inc.php|1.4.0|1.100|mandatory|r@
1.4.0|include/imageObjectGD.class.php|1.4.0|1.6|mandatory|r@
1.4.0|include/imageObjectIM.class.php|1.4.0|1.5|mandatory|r@
1.4.0|include/index.html|||mandatory|r@
1.4.0|include/init.inc.php|1.4.0|1.55|mandatory|r@
1.4.0|include/iptc.inc.php|1.4.0|1.6|mandatory|r@
1.4.0|include/keyword.inc.php|1.4.0|1.2|mandatory|r@
1.4.0|include/langfallback.inc.php|1.4.0|1.5|mandatory|r@
1.4.0|include/logger.inc.php|1.4.0|1.11|mandatory|r@
1.4.0|include/mailer.inc.php|1.4.0|1.7|mandatory|r@
1.4.0|include/media.functions.inc.php|1.4.0|1.5|mandatory|r@
1.4.0|include/picmgmt.inc.php|1.4.0|1.17|mandatory|r@
1.4.0|include/plugin_api.inc.php|1.4.0|1.9|mandatory|r@
1.4.0|include/search.inc.php|1.4.0|1.7|mandatory|r@
1.4.0|include/select_lang.inc.php|1.4.0|1.6|mandatory|r@
1.4.0|include/slideshow.inc.php|1.4.0|1.8|mandatory|r@
1.4.0|include/smilies.inc.php|1.4.0|1.9|mandatory|r@
1.4.0|include/smtp.inc.php|1.4.0|1.2|mandatory|r@
1.4.0|include/sql_parse.php|1.4.0|1.5|mandatory|r@
1.4.0|include/zip.lib.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers|||mandatory|r@
1.4.0|include/makers/canon.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/fujifilm.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/gps.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/nikon.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/olympus.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/sanyo.php|1.4.0|1.2|mandatory|r@
1.4.0|lang|||mandatory|r@
1.4.0|lang/arabic.php|1.3.0|1.5|optional|r@
1.4.0|lang/arabic-utf-8.php|1.3.0|1.3|optional|r@
1.4.0|lang/brazilian_portuguese.php|1.3.0|1.6|optional|r@
1.4.0|lang/brazilian_portuguese-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/bulgarian.php|1.3.0|1.5|optional|r@
1.4.0|lang/bulgarian-utf-8.php|1.3.0|1.4|optional|r@
1.4.0|lang/chinese_big5.php|1.3.0|1.5|optional|r@
1.4.0|lang/chinese_big5-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/chinese_gb.php|1.3.0|1.5|optional|r@
1.4.0|lang/chinese_gb-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/croatian.php|1.3.0|1.5|optional|r@
1.4.0|lang/croatian-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/czech.php|1.3.0|1.6|optional|r@
1.4.0|lang/czech-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/danish.php|1.3.0|1.10|optional|r@
1.4.0|lang/danish-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/dutch.php|1.3.0|1.11|optional|r@
1.4.0|lang/dutch-utf-8.php|1.3.0|1.11|optional|r@
1.4.0|lang/english.php|1.4.0|1.137|mandatory|r@
1.4.0|lang/english-utf-8.php|1.3.0|1.13|mandatory|r@
1.4.0|lang/finnish.php|1.3.0|1.5|optional|r@
1.4.0|lang/finnish-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/french.php|1.3.0|1.15|optional|r@
1.4.0|lang/french-utf-8.php|1.2.1|1.13|optional|r@
1.4.0|lang/german.php|1.3.0|1.15|optional|r@
1.4.0|lang/german-utf-8.php|1.3.0|1.16|optional|r@
1.4.0|lang/greek.php|1.3.0|1.7|optional|r@
1.4.0|lang/greek-utf-8.php|1.3.0|1.7|optional|r@
1.4.0|lang/hebrew.php|1.3.0|1.6|optional|r@
1.4.0|lang/hebrew-utf-8.php|1.3.0|1.7|optional|r@
1.4.0|lang/hungarian.php|1.3.0|1.8|optional|r@
1.4.0|lang/hungarian-utf-8.php|1.3.0|1.9|optional|r@
1.4.0|lang/indonesian.php|1.3.0|1.5|optional|r@
1.4.0|lang/indonesian-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/italian.php|1.3.0|1.7|optional|r@
1.4.0|lang/italian2.php|1.3.0|1.1|optional|r@
1.4.0|lang/italian2-utf-8.php|1.3.0|1.1|optional|r@
1.4.0|lang/italian-utf-8.php|1.3.0|1.7|optional|r@
1.4.0|lang/japanese.php|1.3.0|1.5|optional|r@
1.4.0|lang/japanese-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/latvian.php|1.3.0|1.6|optional|r@
1.4.0|lang/latvian-utf-8.php|1.3.0|1.4|optional|r@
1.4.0|lang/malay.php|1.3.0|1.1|optional|r@
1.4.0|lang/malay-utf-8.php|1.3.0|1.1|optional|r@
1.4.0|lang/norwegian.php|1.4.0|1.8|optional|r@
1.4.0|lang/norwegian-utf-8.php|1.4.0|1.8|optional|r@
1.4.0|lang/polish.php|1.3.0|1.4|optional|r@
1.4.0|lang/polish-utf-8.php|1.3.0|1.3|optional|r@
1.4.0|lang/romanian.php|1.4.0|1.4|optional|r@
1.4.0|lang/romanian-utf-8.php|1.4.0|1.4|optional|r@
1.4.0|lang/romanian_no_diacritics.php|1.4.0|1.1|optional|r@
1.4.0|lang/romanian_no_diacritics-utf-8.php|1.4.0|1.1|optional|r@
1.4.0|lang/russian.php|1.3.1|1.6|optional|r@
1.4.0|lang/russian-utf-8.php|1.3.1|1.6|optional|r@
1.4.0|lang/slovenian.php|1.3.0|1.10|optional|r@
1.4.0|lang/slovenian-utf-8.php|1.3.0|1.8|optional|r@
1.4.0|lang/spanish.php|1.3.0|1.8|optional|r@
1.4.0|lang/spanish-utf-8.php|1.3.0|1.8|optional|r@
1.4.0|lang/swedish.php|1.3.0|1.5|optional|r@
1.4.0|lang/swedish-utf-8.php|1.3.0|1.4|optional|r@
1.4.0|logs|||mandatory|r@
1.4.0|logs/log_header.inc.php|1.4.0|1.3|mandatory|r@
1.4.0|plugins|||mandatory|r@
1.4.0|plugins/sample|||mandatory|r@
1.4.0|plugins/sample/codebase.php|1.4.0|1.4|mandatory|r@
1.4.0|plugins/sample/credits.php|1.4.0|1.2|mandatory|r@
1.4.0|plugins/sef_urls|||mandatory|r@
1.4.0|plugins/sef_urls/codebase.php|1.4.0|1.2|mandatory|r@
1.4.0|plugins/sef_urls/credits.php|1.4.0|1.2|mandatory|r@
1.4.0|plugins/sef_urls/ht.txt|||mandatory|r@
1.4.0|sql|||mandatory|r@
1.4.0|sql/basic.sql|1.4.0|1.49|mandatory|r@
1.4.0|sql/schema.sql|1.4.0|1.23|mandatory|r@
1.4.0|sql/update.sql|1.4.0|1.74|mandatory|r@
1.4.0|themes|||mandatory|r@
1.4.0|themes/classic|||optional|r@
1.4.0|themes/classic/style.css||1.4|optional|r@
1.4.0|themes/classic/template.html||1.3|optional|r@
1.4.0|themes/classic/theme.php|1.4.0|1.10|optional|r@
1.4.0|themes/classic/images|||optional|r@
1.4.0|themes/eyeball|||optional|r@
1.4.0|themes/eyeball/style.css||1.13|optional|r@
1.4.0|themes/eyeball/template.html||1.8|optional|r@
1.4.0|themes/eyeball/theme.php|1.4.0|1.39|optional|r@
1.4.0|themes/eyeball/images|||optional|r@
1.4.0|themes/fruity|||optional|r@
1.4.0|themes/fruity/style.css||1.12|optional|r@
1.4.0|themes/fruity/template.html||1.8|optional|r@
1.4.0|themes/fruity/theme.php|1.4.0|1.37|optional|r@
1.4.0|themes/fruity/images|||optional|r@
1.4.0|themes/hardwired|||optional|r@
1.4.0|themes/hardwired/style.css||1.15|optional|r@
1.4.0|themes/hardwired/template.html||1.9|optional|r@
1.4.0|themes/hardwired/theme.php|1.4.0|1.40|optional|r@
1.4.0|themes/hardwired/images|||optional|r@
1.4.0|themes/igames|||optional|r@
1.4.0|themes/igames/style.css||1.14|optional|r@
1.4.0|themes/igames/template.html||1.9|optional|r@
1.4.0|themes/igames/theme.php|1.4.0|1.42|optional|r@
1.4.0|themes/igames/images|||optional|r@
1.4.0|themes/mac_ox_x|||optional|r@
1.4.0|themes/mac_ox_x/style.css||1.12|optional|r@
1.4.0|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.0|themes/mac_ox_x/theme.php|1.4.0|1.38|optional|r@
1.4.0|themes/mac_ox_x/images|||optional|r@
1.4.0|themes/classic|||optional|r@
1.4.0|themes/project_vii/style.css||1.14|optional|r@
1.4.0|themes/project_vii/template.html||1.7|optional|r@
1.4.0|themes/project_vii/theme.php|1.4.0|1.39|optional|r@
1.4.0|themes/project_vii/images|||optional|r@
1.4.0|themes/rainy_day|||optional|r@
1.4.0|themes/rainy_day/style.css||1.14|optional|r@
1.4.0|themes/rainy_day/template.html||1.6|optional|r@
1.4.0|themes/rainy_day/theme.php|1.4.0|1.42|optional|r@
1.4.0|themes/rainy_day/images|||optional|r@
1.4.0|themes/styleguide|||optional|r@
1.4.0|themes/styleguide/domLib.js|||optional|r@
1.4.0|themes/styleguide/domTT.js|||optional|r@
1.4.0|themes/styleguide/readme.htm||1.2|optional|r@
1.4.0|themes/styleguide/template.html||1.4|optional|r@
1.4.0|themes/styleguide/theme.php|1.4.0|1.20|optional|r@
1.4.0|themes/styleguide/images|||optional|r@
1.4.0|themes/water_drop|||optional|r@
1.4.0|themes/water_drop/style.css||1.13|optional|r@
1.4.0|themes/water_drop/theme.php|1.4.0|1.40|optional|r@
1.4.0|themes/water_drop/images|||optional|r@
';
return $return;
}

?>