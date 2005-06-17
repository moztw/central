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
// CVS version: $Id: forgot_passwd.php,v 1.5 2004/07/30 15:30:09 caspershadow Exp $
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('FORGOT_PASSWD_PHP', true);
global $CONFIG;

require('include/init.inc.php');
include_once('include/mailer.inc.php');

if (USER_ID) cpg_die(ERROR, $lang_forgot_passwd_php['err_already_logged_in'], __FILE__, __LINE__);


$lookup_failed = '';

if ($_POST['username']) {
    $results = db_query("SELECT user_group,user_active,user_name, user_password, user_email  FROM {$CONFIG['TABLE_USERS']} WHERE (user_name = '" . addslashes($HTTP_POST_VARS['username']) . "' OR  user_email = '" . addslashes($HTTP_POST_VARS['username']) . "') AND user_active = 'YES'");
    if (mysql_num_rows($results))
        { // something has been found start
        $USER_DATA = mysql_fetch_array($results);
        // check if we have an admin account (with empty email address)
        if ($USER_DATA['user_email'] == '') {
          // the password is empty. Is the current user the gallery admin?
          if ($USER_DATA['user_group'] == 1) {
            $USER_DATA['user_email'] = $CONFIG['gallery_admin_email'];
          } else {
            cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__); //not the gallery admin account
            }
        }

        // send the email
        if (!cpg_mail($USER_DATA['user_email'], sprintf($lang_forgot_passwd_php['passwd_reminder_subject'], $CONFIG['gallery_name']), sprintf($lang_forgot_passwd_php['passwd_reminder_body'], $USER_DATA['user_name'],$USER_DATA['user_password'],  $CONFIG['ecards_more_pic_target'].'login.php' ))) {
            cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__);
            }

        // output the message
        pageheader($lang_forgot_passwd_php['forgot_passwd'], "<META http-equiv=\"refresh\" content=\"3;url=login.php\">");
        $referer = 'login.php';
        msg_box($lang_forgot_passwd_php['forgot_passwd'], sprintf($lang_forgot_passwd_php['email_sent'], $USER_DATA['user_email']), $lang_continue, $referer);
        $USER_DATA['user_password'] = '***********';
        pagefooter();
        exit;
        // something has been found end
    } else {
        $lookup_failed = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <font size="1" color="red"><b>{$lang_forgot_passwd_php['err_unk_user']}<b></font>
                        </td>
                  </tr>

EOT;
    }
}

pageheader($lang_forgot_passwd_php['forgot_passwd']);


echo '<form action="forgot_passwd.php" method="post" name="passwordreminder">';
starttable('-1', $lang_forgot_passwd_php['forgot_passwd'], 2);
echo <<< EOT
            $lookup_failed
                 <tr>
                        <td class="tableb" width="40%">{$lang_forgot_passwd_php['enter_username_email']}</td>
                        <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%"></td>
                        <script language="javascript" type="text/javascript">
                        <!--
                        document.passwordreminder.username.focus();
                        -->
                        </script>
                  </tr>
                  <tr>
                        <td colspan="2" align="center" class="tablef"><input name="submitted" type="submit" class="button" value="{$lang_forgot_passwd_php['submit']}"></td>
                  </tr>

EOT;

endtable();
echo '</form>';
pagefooter();
ob_end_flush();

?>
