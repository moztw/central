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
// CVS version: $Id: select_lang.inc.php,v 1.6 2004/07/24 15:04:09 gaugau Exp $
// ------------------------------------------------------------------------- //

/**
 * phpMyAdmin Language Loading File
 */

/**
 * All the supported languages have to be listed in the array below.
 * 1. The key must be the "official" ISO 639 language code and, if required,
 *     the dialect code. It can also contains some informations about the
 *     charset (see the Russian case).
 * 2. The first of the values associated to the key is used in a regular
 *     expression to find some keywords corresponding to the language inside two
 *     environment variables.
 *     These values contains:
 *     - the "official" ISO language code and, if required, the dialect code
 *       also ('bu' for Bulgarian, 'fr([-_][[:alpha:]]{2})?' for all French
 *       dialects, 'zh[-_]tw' for Chinese traditional...);
 *     - the '|' character (it means 'OR');
 *     - the full language name.
 * 3. The second values associated to the key is the name of the file to load
 *     without the '.php' extension.
 * 4. The last values associated to the key is the language code as defined by
 *     the RFC1766.
 *
 * Beware that the sorting order (first values associated to keys by
 * alphabetical reverse order in the array) is important: 'zh-tw' (chinese
 * traditional) must be detected before 'zh' (chinese simplified) for
 * example.
 *
 * When there are more than one charset for a language, we put the -utf-8
 * first.
 */
$available_languages = array('ar' => array('ar([-_][[:alpha:]]{2})?|arabic', 'arabic-utf-8', 'ar'),
    'bg' => array('bg|bulgarian', 'bulgarian-utf-8', 'bg'),
    'ca' => array('ca|catalan', 'catalan-utf-8', 'ca'),
    'cs' => array('cs|czech', 'czech-utf-8', 'cs'),
    'da' => array('da|danish', 'danish-utf-8', 'da'),
    'de' => array('de([-_][[:alpha:]]{2})?|german', 'german-utf-8', 'de'),
    'el' => array('el|greek', 'greek-utf-8', 'el'),
    'en' => array('en([-_][[:alpha:]]{2})?|english', 'english-utf-8', 'en'),
    'es' => array('es([-_][[:alpha:]]{2})?|spanish', 'spanish-utf-8', 'es'),
    'et' => array('et|estonian', 'estonian-utf-8', 'et'),
    'fi' => array('fi|finnish', 'finnish-utf-8', 'fi'),
    'fr' => array('fr([-_][[:alpha:]]{2})?|french', 'french-utf-8', 'fr'),
    'gl' => array('gl|galician', 'galician-utf-8', 'gl'),
    'he' => array('he|hebrew', 'hebrew-iso-8859-8-i', 'he'),
    'hr' => array('hr|croatian', 'croatian-utf-8', 'hr'),
    'hu' => array('hu|hungarian', 'hungarian-utf-8', 'hu'),
    'id' => array('id|indonesian', 'indonesian-utf-8', 'id'),
    'it' => array('it|italian', 'italian-utf-8', 'it'),
    'ja' => array('ja|japanese', 'japanese-utf-8', 'ja'),
    'ko' => array('ko|korean', 'korean-ks_c_5601-1987', 'ko'),
    'ka' => array('ka|georgian', 'georgian-utf-8', 'ka'),
    'lt' => array('lt|lithuanian', 'lithuanian-utf-8', 'lt'),
    'lv' => array('lv|latvian', 'latvian-utf-8', 'lv'),
    'nl' => array('nl([-_][[:alpha:]]{2})?|dutch', 'dutch-utf-8', 'nl'),
    'no' => array('no|norwegian', 'norwegian-utf-8', 'no'),
    'pl' => array('pl|polish', 'polish-utf-8', 'pl'),
    'pt' => array('pt[-_]br|brazilian portuguese', 'brazilian_portuguese-utf-8', 'pt-BR'),
    'pt' => array('pt([-_][[:alpha:]]{2})?|portuguese', 'portuguese-utf-8', 'pt'),
    'ro' => array('ro|romanian', 'romanian-utf-8', 'ro'),
    'ru' => array('ru|russian', 'russian-utf-8', 'ru'),
    'sk' => array('sk|slovak', 'slovak-utf-8', 'sk'),
	'sl' => array('sl|slovenian', 'slovenian-utf-8', 'sl'),
    'sq' => array('sq|albanian', 'albanian-utf-8', 'sq'),
    'sr' => array('sr|serbian', 'serbian-utf-8', 'sr'),
    'sv' => array('sv|swedish', 'swedish-utf-8', 'sv'),
    'th' => array('th|thai', 'thai-utf-8', 'th'),
    'tr' => array('tr|turkish', 'turkish-utf-8', 'tr'),
    'uk' => array('uk|ukrainian', 'ukrainian-utf-8', 'uk'),
    'zh' => array('zh[-_]tw|chinese traditional', 'chinese_big5-utf-8', 'zh-TW'),
    'zh' => array('zh|chinese simplified', 'chinese_gb-utf-8', 'zh'),
    );

/**
 * Analyzes some PHP environment variables to find the most probable language
 * that should be used
 *
 * @param string $ string to analyze
 * @param integer $ type of the PHP environment variable which value is $str
 * @global array    the list of available translations
 * @global string   the retained translation keyword
 * @access private
 */
function lang_detect($str = '', $envType = '')
{
    global $available_languages;
    global $lang;

    reset($available_languages);
    while (list($key, $value) = each($available_languages)) {
        // $envType =  1 for the 'HTTP_ACCEPT_LANGUAGE' environment variable,
        // 2 for the 'HTTP_USER_AGENT' one
        if (($envType == 1 && eregi('^(' . $value[0] . ')(;q=[0-9]\\.[0-9])?$', $str)) || ($envType == 2 && eregi('(\(|\[|;[[:space:]])(' . $value[0] . ')(;|\]|\))', $str))) {
            $lang = $key;
            break;
        }
    }
}

/**
 * Get some global variables if 'register_globals' is set to 'off'
 * loic1 - 2001/25/11: use the new globals arrays defined with php 4.1+
 */
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $HTTP_ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
} else if (!empty($HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'])) {
    $HTTP_ACCEPT_LANGUAGE = $HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'];
}

if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
} else if (!empty($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) {
    $HTTP_USER_AGENT = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
}

/**
 * Do the work!
 */

$lang = '';
// 1. try to findout user's language by checking its HTTP_ACCEPT_LANGUAGE
// variable
if (empty($lang) && !empty($HTTP_ACCEPT_LANGUAGE)) {
    $accepted = explode(',', $HTTP_ACCEPT_LANGUAGE);
    $acceptedCnt = count($accepted);
    reset($accepted);
    for ($i = 0; $i < $acceptedCnt && empty($lang); $i++) {
        lang_detect($accepted[$i], 1);
    }
}
// 2. try to findout user's language by checking its HTTP_USER_AGENT variable
if (empty($lang) && !empty($HTTP_USER_AGENT)) {
    lang_detect($HTTP_USER_AGENT, 2);
}
// 3. If we catch a valid language, configure it
if (!empty($lang)) {
    $USER['lang'] = $available_languages[$lang][1];
}
// $__PMA_SELECT_LANG_LIB__
?>
