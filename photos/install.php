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
  $Source: /cvsroot/coppermine/stable/install.php,v $
  $Revision: 1.14 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

// Check if standalone is installed in a portal like phpNuke (added by DJMaze)
$DIR=preg_split("/[\/\\\]/",dirname($_SERVER['PATH_TRANSLATED']));
if ($DIR[count($DIR)-2] == "modules") {
    echo "<html><body><h1>ERROR</h1>You installed the standalone Coppermine into your Nuke portal.<br>".
         "Please download and install a CPG Port: <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658\">CPG for PostNuke OR CPG for PHPnuke</a></body></html>";
    die();
} // end check

error_reporting (E_ALL ^ E_NOTICE);

require('include/sql_parse.php');
// ---------------------------- TEST PREREQUIRED --------------------------- //
function test_fs()
{
    global $errors, $DFLT;
    // include must be writable to create config file
    if (! is_dir($DFLT['cfg_d'])) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['cfg_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable($DFLT['cfg_d'])) {
        $errors .= "<hr /><br />The '{$DFLT['cfg_d']}' directory (located in the directory where you uploaded Coppermine) should be writable in order to save your configuration. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // albums must be writable to upload pictures
    if (! is_dir($DFLT['alb_d'])) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['alb_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable($DFLT['alb_d'])) {
        $errors .= "<hr /><br />The '{$DFLT['alb_d']}' directory (located in the directory where you uploaded Coppermine) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // userpics must be writable to upload pictures
    if (! is_dir("{$DFLT['alb_d']}/{$DFLT['upl_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['upl_d']}' should normally exist in the 'albums' directory. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable("{$DFLT['alb_d']}/{$DFLT['upl_d']}")) {
        $errors .= "<hr /><br />The '{$DFLT['upl_d']}' directory (located in the 'albums' directory on your server) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // edit must be writable to edit pictures
    if (! is_dir("{$DFLT['alb_d']}/{$DFLT['edit_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['edit_d']}' should normally exist in the 'albums' directory. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    } elseif (! is_writable("{$DFLT['alb_d']}/{$DFLT['edit_d']}")) {
        $errors .= "<hr /><br />The '{$DFLT['edit_d']}' directory (located in the 'albums' directory on your server) should be writable in order to allow pictures upload. Use your FTP program to change its mode to 777.<br /><br />";
    }
    // sql directory must exist
    if (! is_dir("{$DFLT['sql_d']}")) {
        $errors .= "<hr /><br />A subdirectory called '{$DFLT['sql_d']}' should normally exist in the directory where you uploaded Coppermine. The installer can't find this directory. Check that you have uploaded all Coppermine files to your server.<br /><br />";
    }
}
// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
    global $errors, $HTTP_POST_VARS;

    if (! $connect_id = @mysql_connect($HTTP_POST_VARS['dbserver'], $HTTP_POST_VARS['dbuser'], $HTTP_POST_VARS['dbpass'])) {
        $errors .= "<hr /><br />Could not create a mySQL connection, please check the SQL values entered<br /><br />MySQL error was : " . mysql_error() . "<br /><br />";
    } elseif (! mysql_select_db($HTTP_POST_VARS['dbname'], $connect_id)) {
        $errors .= "<hr /><br />mySQL could not locate a database called '{$HTTP_POST_VARS['dbname']}' please check the value entered for this<br /><br />";
    }
}

function test_admin_login()
{
    global $errors, $HTTP_POST_VARS;

    if ($HTTP_POST_VARS['admin_username'] == '' || $HTTP_POST_VARS['admin_password'] == '')
        $errors .= "<hr /><br />It is much better for you to provide a 'username' and a 'password' for the admin.<br /><br />";
    if (!preg_match('/\A\w*\Z/', $HTTP_POST_VARS['admin_username']) || !preg_match('/\A\w*\Z/', $HTTP_POST_VARS['admin_password']))
        $errors .= "<hr /><br />Admin username and password must only contain alphanumeric characters.<br /><br />";
}

function test_im()
{
    global $errors, $HTTP_POST_VARS, $DFLT, $im_installed;

    $im_installed = false;

    if ($HTTP_POST_VARS['impath'] != '') {
        if (!preg_match('|/\Z|', $HTTP_POST_VARS['impath']))
            $HTTP_POST_VARS['impath'] .= '/';
        if (!is_dir($HTTP_POST_VARS['impath'])) {
            $errors .= "<hr /><br />The installer can not find the '{$HTTP_POST_VARS['impath']}' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.<br /><br />";
        } elseif (preg_match('/ /', $HTTP_POST_VARS['impath'])) {
            $errors .= "<hr /><br />The path you have entered for ImageMagick ('{$HTTP_POST_VARS['impath']}') contains at least one space. This will cause problems in the script.<br /><br />
                        You must move ImageMagick to another directory.<br /><br />";
        } elseif (!file_exists($HTTP_POST_VARS['impath'] . 'convert') && !file_exists($HTTP_POST_VARS['impath'] . 'convert.exe')) {
            $errors .= "<hr /><br />The installer can not find the 'convert' or 'convert.exe' ImageMagick program in directory '{$HTTP_POST_VARS['impath']}'. Check that you have entered the correct directory name.<br /><br />";
        } else {
            $output = array();
            $tst_image = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/im.gif";
            exec ("{$HTTP_POST_VARS['impath']}convert images/nopic.jpg $tst_image", $output, $result);
            $size = getimagesize($tst_image);
            unlink($tst_image);
            $im_installed = ($size[2] == 1);

            if (!$im_installed)
                $errors .= "<hr /><br />The installer found the ImageMagick 'convert' program in '{$HTTP_POST_VARS['impath']}', however it can't be executed by the script.<br /><br />
                                        You may consider using GD instead of ImageMagick.<br /><br />";

            if ($result && count($output)) {
                $errors .= "The convert program said:<br /><pre>";
                foreach($output as $line) $errors .= htmlspecialchars($line);
                $errors .= "</pre><br /><br />";
            }
        }
    }

    return $im_installed;
}
// Test is safe_mode is misconfigured
function test_silly_safe_mode()
{
    global $DFLT;

    $test_file = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/dummy/dummy.txt";
    @mkdir(dirname($test_file), 0755);
    $fd = @fopen($test_file, 'w');
    if (!$fd) {
        @rmdir(dirname($test_file));
        return true;
    }
    fclose($fd);
    @unlink($test_file);
    @rmdir(dirname($test_file));
}
// -------------------------- DETECTION FUNCTIONS -------------------------- //
// What package is available for image manipulations
function detect_img_package()
{
    global $errors, $notes, $HTTP_POST_VARS, $DFLT, $im_installed;

    $no_img_package_detected = false;
    $tst_image = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd1.jpg";
    $size = @getimagesize($tst_image);
    @unlink($tst_image);
    $gd1_installed = ($size[2] == 2);

    $tst_image = "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd2.jpg";
    $size = @getimagesize($tst_image);
    @unlink($tst_image);
    $gd2_installed = ($size[2] == 2);

    if ($im_installed) {
        $HTTP_POST_VARS['thumb_method'] = 'im';
    } elseif ($gd2_installed) {
        $HTTP_POST_VARS['thumb_method'] = 'gd2';
    } elseif ($gd1_installed) {
        $HTTP_POST_VARS['thumb_method'] = 'gd1';
    } else {
        $HTTP_POST_VARS['thumb_method'] = 'gd2';
        $no_img_package_detected = true;
        $notes .= "<hr /><br />Your installation of PHP does not seem to include the 'GD' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fail. If GD is installed on your system, the script should work else you will need to install ImageMagick.<br /><br />";
    }

    if (!$no_img_package_detected) $notes .= "<br /><br />Your server supports the following image package(s): " . ($im_installed ? ' ImageMagick (im),':'') . ($gd1_installed ? ' GD Library version 1.x (gd1),':'') . ($gd2_installed ? ' GD Library version 2.x (gd2),':'') . " the installer selected '" . $HTTP_POST_VARS['thumb_method'] . "'.";
    if ($HTTP_POST_VARS['thumb_method'] == 'gd1' || $HTTP_POST_VARS['thumb_method'] == 'gd2')
        $notes .= "<br /><br /><b>Important :</b> the GD graphic library supports only JPEG and PNG images. The script will not be able to create thumbnails for GIF images. If you want the script to create thumbnails for GIF images, you need to use ImageMagick.";
}
// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
function html_header()
{

    ?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Coppermine - Installation</title><link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>
 <div align="center">
  <div style="width:600px;">
<?php
}

function html_logo()
{

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
        <td valign="top" bgcolor="#EFEFEF"><img src="images/logo.gif"><br />
        </td>
       </tr>
      </table>
<?php
}

function html_installer_locked()
{
    global $DFLT;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form action="index.php">
        <td class="tableh1" colspan="2"><h2>The installer is locked</h2>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2">The installer has already been run successfuly once and is now locked.<br /><br />If you want to run the installer again, you first need to delete the '<?php echo $DFLT['lck_f'] ?>' file that was created in the directory where you put Coppermine. You can do this with any FTP program.
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center"><br />
                <input type="submit" value="Go to the main page"><br /><br />
        </td>
           </form>
       </tr>
      </table>
<?php
}

function html_prereq_errors($error_msg)
{

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form action="install.php">
        <td class="tableh1" colspan="2"><h2>Welcome to Coppermine installation</h2>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> Before you continue with Coppermine installation, there are some problems that need to be fixed.<br /><br /><b><?php echo $error_msg ?></b>Once you are done, hit the "Try again" button.<br />
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center"><br />
                <input type="submit" value="Try again !"><br /><br />
        </td>
                </form>
       </tr>
      </table>
<?php
}

function html_input_config($error_msg = '')
{
    global $HTTP_POST_VARS, $im_installed;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form action="install.php" method="post">
        <td class="tableh1" colspan="2"><h2>Welcome to Coppermine installation</h2>
        </td>
       </tr>
<?php
    if ($error_msg) {

        ?>
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> The following errors were encountered and need to be corrected first:<br /><br /><b><?php echo $error_msg ?></b>
        </td>
       </tr>
<?php
    }

    ?>
       <tr>
        <td class="tableh2" colspan="2"><b>Your admin account</b>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> This section requires information to create your administration account. Use only alphanumeric characters. Enter the data carefully !
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>Username</b>
        </td>
        <td width="60%" class="tableb">
                <input type='text' class='textinput' name='admin_username' value='<?php echo $HTTP_POST_VARS['admin_username'] ?>'>
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>Password</b>
        </td>
        <td width="60%" class="tableb">
                <input type='text' class='textinput' name='admin_password' value='<?php echo $HTTP_POST_VARS['admin_password'] ?>'>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2"><b>Your MySQL configuration</b>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> This section requires information on how to access your MySQL database. If you don't know how to fill them, check with your webhost support.
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>MySQL Host</b><br />(localhost is usually OK)
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type='text' class='textinput' name='dbserver' value='<?php echo ($HTTP_POST_VARS['dbserver'] ? $HTTP_POST_VARS['dbserver'] : 'localhost') ?>'>
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>MySQL Database Name</b>
        </td>
        <td width="60%" class="tableb">
                <input type='text' class='textinput' name='dbname' value='<?php echo $HTTP_POST_VARS['dbname'] ?>'>
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>MySQL Username</b>
        </td>
        <td width="60%" class="tableb">
                <input type='text' class='textinput' name='dbuser' value='<?php echo $HTTP_POST_VARS['dbuser'] ?>'>
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>MySQL Password</b>
        </td>
        <td width="60%" class="tableb">
                <input type='text' class='textinput' name='dbpass' value='<?php echo $HTTP_POST_VARS['dbpass'] ?>'>
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>MySQL table prefix</b><br />(default value is OK; do not use dots!)
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type='text' class='textinput' name='table_prefix' value='<?php echo ($HTTP_POST_VARS['table_prefix'] ? $HTTP_POST_VARS['table_prefix'] : 'cpg133_') ?>'>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2"><b>ImageMagick</b>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2">Coppermine can use the <a href="http://www.imagemagick.org/" target="_blank">ImageMagick</a> 'convert' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br /><br />
        If ImageMagick is installed on your system and you want to use it, you need to input the full path to the 'convert' program below. On Windows the path should look like 'c:/ImageMagick/' (use / not \ in the path) and should not contain any space, on Unix is it something like '/usr/bin/X11/'.
        </td>
       </tr>
       <tr>
        <td width="40%" class="tableb"><b>ImageMagick path</b>
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type='text' class='textinput' name='impath' value='<?php echo $HTTP_POST_VARS['impath'] ?>'>
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center" class="tableh2"><br />
         <input type="submit" value="Let's Go !"><br /><br />
        </td>
                </form>
       </tr>
      </table>
   <img src="install.php?test_gd1=1&reload=<?php echo uniqid('') ?>" alt="" width="1" height="1" border="0">
   <img src="install.php?test_gd2=1&reload=<?php echo uniqid('') ?>" alt="" width="1" height="1" border="0">
<?php
}

function html_install_success($notes)
{
    global $DFLT, $HTTP_POST_VARS;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form action="login.php" method="post">
        <td class="tableh1" colspan="2"><h2>Installation completed</h2>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> <a href="index.php">Coppermine</a> is now properly configured and ready to roll.<br /><br /><a href="login.php?">Login</a> using the information you provided for your admin account. Do <b>not</b> hit back, do <b>not</b> re-submit the installer form!<?php echo $notes ?>
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center" class="tableh2"><br />
                 <input type="hidden" name="username" value="<?php echo $HTTP_POST_VARS['admin_username'] ?>"
                 <input type="hidden" name="password" value="<?php echo $HTTP_POST_VARS['admin_password'] ?>"
                <input type="submit" name="submitted" value="Let's continue !"><br /><br />
        </td>
                </form>
       </tr>
      </table>
<?php
}

function html_footer()
{

    ?>
  </div>
 </div>
</body>
</html>
<noscript><plaintext>
<?php
}
// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function create_tables()
{
    global $HTTP_POST_VARS, $HTTP_SERVER_VARS, $errors;

    $PHP_SELF = $HTTP_SERVER_VARS['PHP_SELF'];
    $gallery_dir = strtr(dirname($PHP_SELF), '\\', '/');
    $gallery_url_prefix = 'http://' . $HTTP_SERVER_VARS['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

    $db_schema = 'sql/schema.sql';
    $sql_query = fread(fopen($db_schema, 'r'), filesize($db_schema));

    $db_basic = 'sql/basic.sql';
    $sql_query .= fread(fopen($db_basic, 'r'), filesize($db_basic));
    // Insert the admin account
    $sql_query .= "INSERT INTO CPG_users VALUES (1, 1, 'YES', '" . $HTTP_POST_VARS['admin_username'] . "', '" . $HTTP_POST_VARS['admin_password'] . "', NOW(), NOW(), '', '', '', '', '', '', '');\n";
    // Set configuration values for image package
    $sql_query .= "REPLACE INTO CPG_config VALUES ('thumb_method', '" . $HTTP_POST_VARS['thumb_method'] . "');\n";
    $sql_query .= "REPLACE INTO CPG_config VALUES ('impath', '" . $HTTP_POST_VARS['impath'] . "');\n";
    $sql_query .= "REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '" . $gallery_url_prefix . "');\n";
    // Test write permissions for main dir
    if (!is_writable('.')) {
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n";
        $sql_query .= "REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n";
    }
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $HTTP_POST_VARS['table_prefix'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    foreach($sql_query as $q) {
        if (!mysql_query($q)) {
            $errors .= "mySQL Error: " . mysql_error() . "on query '$q'<br /><br />";
            return;
        }
    }
}
// ---------------------- CONFIGURATION FILE TEMPLATE ---------------------- //
function build_cfg_file()
{
    global $DFLT, $HTTP_POST_VARS;

    $silly_safe_mode = test_silly_safe_mode() ? "// Silly safe mode\ndefine('SILLY_SAFE_MODE', 1);\n\n" : '';

    return <<<EOT
<?php
// Coppermine configuration file
$silly_safe_mode
// MySQL configuration
\$CONFIG['dbserver'] =                         '{$HTTP_POST_VARS['dbserver']}';        // Your database server
\$CONFIG['dbuser'] =                         '{$HTTP_POST_VARS['dbuser']}';        // Your mysql username
\$CONFIG['dbpass'] =                         '{$HTTP_POST_VARS['dbpass']}';                // Your mysql password
\$CONFIG['dbname'] =                         '{$HTTP_POST_VARS['dbname']}';        // Your mysql database name


// MySQL TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =                '{$HTTP_POST_VARS['table_prefix']}';
?>
EOT;
}

function write_config_file()
{
    global $errors, $DFLT;

    test_im();
    detect_img_package();

    $config = build_cfg_file();
    @unlink($DFLT['cfg_f']);
    if ($fd = @fopen($DFLT['cfg_f'], 'wb')) {
        fwrite($fd, $config);
        fclose($fd);
    } else {
        $errors .= "<hr /><br />Unable to write config file '{$DFLT['cfg_f']}'<br /><br />";
    }
}

function lock_install()
{
    global $notes, $DFLT;

    if ($fd = @fopen($DFLT['lck_f'], 'wb')) {
        fwrite($fd, 'locked');
        fclose($fd);
    } else {
        $notes .= "<br /><br /><b>Warning :</b> the installer could not create the '{$DFLT['lck_f']}' file. In order to secure your installation, you need to delete the 'install.php' file from your server !<br /><br />";
    }
}
// --------------------------------- MAIN CODE ----------------------------- //
// Disable magic_quotes_runtime if active to allow proper reading from .sql files.
set_magic_quotes_runtime(0);
// The defaults values
$table_prefix = $HTTP_POST_VARS['table_prefix'];
$DFLT = array('cfg_d' => 'include', // The config file dir
    'lck_f' => 'include/install.lock', // Name of install lock file
    'cfg_f' => 'include/config.inc.php', // The config file name
    'alb_d' => 'albums', // The album dir
    'upl_d' => 'userpics', // The uploaded pic dir
    'edit_d' => 'edit',
    'sql_d' => 'sql'
    );

$errors = '';
$notes = '';

if ($HTTP_GET_VARS['test_gd1']) { // GD1 test
    $im = imagecreate(1, 1);
    imagecolorallocate ($im, 255, 255, 255);
    imagejpeg($im, "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd1.jpg");
    header("Content-type: image/gif");
    fpassthru(fopen('images/spacer.gif'));
} elseif ($HTTP_GET_VARS['test_gd2']) { // GD2 test
    $im = imagecreatetruecolor(1, 1);
    imagejpeg($im, "{$DFLT['alb_d']}/{$DFLT['upl_d']}/gd2.jpg");
    header("Content-type: image/gif");
    fpassthru(fopen('images/spacer.gif'));
} elseif ($HTTP_GET_VARS['phpinfo'] && !file_exists($DFLT['lck_f'])) {
    phpinfo();
} else { // The installer
    html_header();
    html_logo();
    if (file_exists($DFLT['lck_f'])) {
        html_installer_locked();
    } elseif (count($HTTP_POST_VARS)) {
        test_sql_connection();
        test_admin_login();
        write_config_file();
        if ($errors == '') create_tables();
        if ($errors != '')
            html_input_config($errors);
        else {
            lock_install();
            html_install_success($notes);
        }
    } else {
        test_fs();
        if ($errors != '')
            html_prereq_errors($errors);
        else {
            html_input_config();
        }
    }
    html_footer();
}

?>