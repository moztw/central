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
  $Source: /cvsroot/coppermine/stable/include/smilies.inc.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:11 $
**********************************************/

// ------------------------------------------------------------------------- //
// CODE IN THIS MODULE IS TAKEN FROM phpBB                                   //
// ------------------------------------------------------------------------- //

define('SMILIES_PHP', true);
function get_smilies_table1()
{
    global $lang_smilies_inc_php;

    return array(
        array(':!:', 'icon_exclaim.gif', $lang_smilies_inc_php['Exclamation']),
        array(':?:', 'icon_question.gif', $lang_smilies_inc_php['Question']),
        array(':D', 'icon_biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':-D', 'icon_biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':grin:', 'icon_biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':)', 'icon_smile.gif', $lang_smilies_inc_php['Smile']),
        array(':-)', 'icon_smile.gif', $lang_smilies_inc_php['Smile']),
        array(':smile:', 'icon_smile.gif', $lang_smilies_inc_php['Smile']),
        array(':(', 'icon_sad.gif', $lang_smilies_inc_php['Sad']),
        array(':-(', 'icon_sad.gif', $lang_smilies_inc_php['Sad']),
        array(':sad:', 'icon_sad.gif', $lang_smilies_inc_php['Sad']),
        array(':o', 'icon_surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':-o', 'icon_surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':eek:', 'icon_surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':shock:', 'icon_eek.gif', $lang_smilies_inc_php['Shocked']),
        array(':?', 'icon_confused.gif', $lang_smilies_inc_php['Confused']),
        array(':-?', 'icon_confused.gif', $lang_smilies_inc_php['Confused']),
        array(':???:', 'icon_confused.gif', $lang_smilies_inc_php['Confused']),
        array('8)', 'icon_cool.gif', $lang_smilies_inc_php['Cool']),
        array('8-)', 'icon_cool.gif', $lang_smilies_inc_php['Cool']),
        array(':cool:', 'icon_cool.gif', $lang_smilies_inc_php['Cool']),
        array(':lol:', 'icon_lol.gif', $lang_smilies_inc_php['Laughing']),
        array(':x', 'icon_mad.gif', $lang_smilies_inc_php['Mad']),
        array(':-x', 'icon_mad.gif', $lang_smilies_inc_php['Mad']),
        array(':mad:', 'icon_mad.gif', $lang_smilies_inc_php['Mad']),
        array(':P', 'icon_razz.gif', $lang_smilies_inc_php['Razz']),
        array(':-P', 'icon_razz.gif', $lang_smilies_inc_php['Razz']),
        array(':razz:', 'icon_razz.gif', $lang_smilies_inc_php['Razz']),
        array(':oops:', 'icon_redface.gif', $lang_smilies_inc_php['Embarassed']),
        array(':cry:', 'icon_cry.gif', $lang_smilies_inc_php['Crying or Very sad']),
        array(':evil:', 'icon_evil.gif', $lang_smilies_inc_php['Evil or Very Mad']),
        array(':twisted:', 'icon_twisted.gif', $lang_smilies_inc_php['Twisted Evil']),
        array(':roll:', 'icon_rolleyes.gif', $lang_smilies_inc_php['Rolling Eyes']),
        array(':wink:', 'icon_wink.gif', $lang_smilies_inc_php['Wink']),
        array(';)', 'icon_wink.gif', $lang_smilies_inc_php['Wink']),
        array(';-)', 'icon_wink.gif', $lang_smilies_inc_php['Wink']),
        array(':idea:', 'icon_idea.gif', $lang_smilies_inc_php['Idea']),
        array(':arrow:', 'icon_arrow.gif', $lang_smilies_inc_php['Arrow']),
        array(':|', 'icon_neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':-|', 'icon_neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':neutral:', 'icon_neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':mrgreen:', 'icon_mrgreen.gif', $lang_smilies_inc_php['Mr. Green'])
        );
}

function get_smilies_table2()
{
    global $lang_smilies_inc_php;

    return array(
        array(':lol:', 'icon_lol.gif', $lang_smilies_inc_php['Laughing']),
        array(':-P', 'icon_razz.gif', $lang_smilies_inc_php['Razz']),
        array(':-D', 'icon_biggrin.gif', $lang_smilies_inc_php['Very Happy']),
        array(':-)', 'icon_smile.gif', $lang_smilies_inc_php['Smile']),
        array(':-|', 'icon_neutral.gif', $lang_smilies_inc_php['Neutral']),
        array(':-(', 'icon_sad.gif', $lang_smilies_inc_php['Sad']),
        array(':cry:', 'icon_cry.gif', $lang_smilies_inc_php['Crying or Very sad']),
        array('8-)', 'icon_cool.gif', $lang_smilies_inc_php['Cool']),
        array(':-o', 'icon_surprised.gif', $lang_smilies_inc_php['Surprised']),
        array(':-?', 'icon_confused.gif', $lang_smilies_inc_php['Confused']),
        array(':oops:', 'icon_redface.gif', $lang_smilies_inc_php['Embarassed']),
        array(':shock:', 'icon_eek.gif', $lang_smilies_inc_php['Shocked']),
        array(':-x', 'icon_mad.gif', $lang_smilies_inc_php['Mad']),
        array(':roll:', 'icon_rolleyes.gif', $lang_smilies_inc_php['Rolling Eyes']),
        array(';-)', 'icon_wink.gif', $lang_smilies_inc_php['Wink']),
        array(':idea:', 'icon_idea.gif', $lang_smilies_inc_php['Idea']),
        array(':!:', 'icon_exclaim.gif', $lang_smilies_inc_php['Exclamation']),
        array(':?:', 'icon_question.gif', $lang_smilies_inc_php['Question'])
        );
}
// Smilies code ... would this be better tagged on to the end of bbcode.php?
// Probably so and I'll move it before B2

function process_smilies($message, $url_prefix = '')
{
    static $orig, $repl;

    if (!isset($orig)) {
        global $db, $board_config;
        $orig = $repl = array();

        $smilies = get_smilies_table1();

        for($i = 0; $i < count($smilies); $i++) {
            $orig[] = "/(?<=.\W|\W.|^\W)" . preg_quote($smilies[$i][0], "/") . "(?=.\W|\W.|\W$)/";
            $repl[] = '<img src="' . $url_prefix . 'images/smiles' . '/' . ($smilies[$i][1]) . '" alt="' . ($smilies[$i][2]) . '" border="0" />';
        }
    }

    if (count($orig)) {
        $message = preg_replace($orig, $repl, ' ' . $message . ' ');
        $message = substr($message, 1, -1);
    }
    return $message;
}

// Fill smiley templates (or just the variables) with smileys
// Either in a window or inline

function generate_smilies($form = 'post', $field = 'message')
{
    $smilies = get_smilies_table2();

    $html = '<table width="100%" border="0" cellspacing="0" cellpadding="0">' . "\n" . '        <tr align="center" valign="middle">' . "\n";

    foreach($smilies as $smiley) {
        $caption = $smiley[2] . " " . $smiley[0];
        $html .= '                <td width="5%"><a href="javascript:emoticon_' . $form . '(\'' . $smiley[0] . '\')"><img src="images/smiles/' . $smiley[1] . '" alt="' . $caption . '" width="15" height="15" border="0" title="' . $caption . '"></a></td>' . "\n";
    }

    $html .= '        </tr>' . "\n" . '</table>' . "\n";

    $html .= <<<EOT

<script language="JavaScript" type="text/javascript">
<!--
function emoticon_$form(text) {
        text = ' ' + text + ' ';
        if (document.$form.$field.createTextRange && document.post.message.caretPos) {
                var caretPos = document.$form.$field.caretPos;
                caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
                document.$form.$field.focus();
        } else {
                document.$form.$field.value  += text;
                document.$form.$field.focus();
        }
}

function storeCaret_$form(textEl) {
        if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}
//-->

EOT;
    $html .= "</script>\n";
    return $html;
}

?>