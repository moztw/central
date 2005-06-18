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
  $Source: /cvsroot/coppermine/stable/displayecard.php,v $
  $Revision: 1.6 $
  $Author: gaugau $
  $Date: 2005/04/19 03:17:10 $
**********************************************/

define('IN_COPPERMINE', true);
define('DISPLAYECARD_PHP', true);

require('include/init.inc.php');
require('include/smilies.inc.php');

if (!isset($HTTP_GET_VARS['data'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$data = array();
$data = @unserialize(@base64_decode($HTTP_GET_VARS['data']));

if (!is_array($data)) {
    cpg_die(CRITICAL_ERROR, 'Sorry but e-card data have been corrupted by your mail client', __FILE__, __LINE__);
}
// Remove HTML tags as we can't trust what we receive
foreach($data as $key => $value) $data[$key] = strtr($value, $HTML_SUBST);
// Load template parameters
$params = array('{LANG_DIR}' => $lang_text_dir,
    '{TITLE}' => sprintf($lang_ecard_php['ecard_title'], $data['sn']),
    '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
    '{VIEW_ECARD_TGT}' => '',
    '{VIEW_ECARD_LNK}' => '',
    '{PIC_URL}' => $data['p'],
    '{URL_PREFIX}' => '',
    '{GREETINGS}' => $data['g'],
    '{MESSAGE}' => nl2br(process_smilies($data['m'])),
    '{SENDER_EMAIL}' => $data['se'],
    '{SENDER_NAME}' => $data['sn'],
    '{VIEW_MORE_TGT}' => $CONFIG['ecards_more_pic_target'],
    '{VIEW_MORE_LNK}' => $lang_ecard_php['view_more_pics'],
    );
// Parse template
echo template_eval($template_ecard, $params);
ob_end_flush();

?>