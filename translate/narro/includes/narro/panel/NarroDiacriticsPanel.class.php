<?php
/**
 * Narro is an application that allows online software translation and maintenance.
 * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
 * http://code.google.com/p/narro/
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write to the
 * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */

class NarroDiacriticsPanel extends QPanel {
    public static $arrEntities = array(
        'AElig'=>"\xc3\x86",
        'Aacute'=>"\xc3\x81",
        'Acirc'=>"\xc3\x82",
        'Agrave'=>"\xc3\x80",
        'Alpha'=>"\xce\x91",
        'Aring'=>"\xc3\x85",
        'Atilde'=>"\xc3\x83",
        'Auml'=>"\xc3\x84",
        'Beta'=>"\xce\x92",
        'Ccedil'=>"\xc3\x87",
        'Chi'=>"\xce\xa7",
        'Dagger'=>"\xe2\x80\xa1",
        'Delta'=>"\xce\x94",
        'ETH'=>"\xc3\x90",
        'Eacute'=>"\xc3\x89",
        'Ecirc'=>"\xc3\x8a",
        'Egrave'=>"\xc3\x88",
        'Epsilon'=>"\xce\x95",
        'Eta'=>"\xce\x97",
        'Euml'=>"\xc3\x8b",
        'Gamma'=>"\xce\x93",
        'Iacute'=>"\xc3\x8d",
        'Icirc'=>"\xc3\x8e",
        'Igrave'=>"\xc3\x8c",
        'Iota'=>"\xce\x99",
        'Iuml'=>"\xc3\x8f",
        'Kappa'=>"\xce\x9a",
        'Lambda'=>"\xce\x9b",
        'Mu'=>"\xce\x9c",
        'Ntilde'=>"\xc3\x91",
        'Nu'=>"\xce\x9d",
        'OElig'=>"\xc5\x92",
        'Oacute'=>"\xc3\x93",
        'Ocirc'=>"\xc3\x94",
        'Ograve'=>"\xc3\x92",
        'Omega'=>"\xce\xa9",
        'Omicron'=>"\xce\x9f",
        'Oslash'=>"\xc3\x98",
        'Otilde'=>"\xc3\x95",
        'Ouml'=>"\xc3\x96",
        'Phi'=>"\xce\xa6",
        'Pi'=>"\xce\xa0",
        'Prime'=>"\xe2\x80\xb3",
        'Psi'=>"\xce\xa8",
        'Rho'=>"\xce\xa1",
        'Scaron'=>"\xc5\xa0",
        'Sigma'=>"\xce\xa3",
        'THORN'=>"\xc3\x9e",
        'Tau'=>"\xce\xa4",
        'Theta'=>"\xce\x98",
        'Uacute'=>"\xc3\x9a",
        'Ucirc'=>"\xc3\x9b",
        'Ugrave'=>"\xc3\x99",
        'Upsilon'=>"\xce\xa5",
        'Uuml'=>"\xc3\x9c",
        'Xi'=>"\xce\x9e",
        'Yacute'=>"\xc3\x9d",
        'Yuml'=>"\xc5\xb8",
        'Zeta'=>"\xce\x96",
        'aacute'=>"\xc3\xa1",
        'acirc'=>"\xc3\xa2",
        'acute'=>"\xc2\xb4",
        'aelig'=>"\xc3\xa6",
        'agrave'=>"\xc3\xa0",
        'alefsym'=>"\xe2\x84\xb5",
        'alpha'=>"\xce\xb1",
        'and'=>"\xe2\x88\xa7",
        'ang'=>"\xe2\x88\xa0",
        'apos'=>"'",
        'aring'=>"\xc3\xa5",
        'asymp'=>"\xe2\x89\x88",
        'atilde'=>"\xc3\xa3",
        'auml'=>"\xc3\xa4",
        'bdquo'=>"\xe2\x80\x9e",
        'beta'=>"\xce\xb2",
        'brvbar'=>"\xc2\xa6",
        'bull'=>"\xe2\x80\xa2",
        'cap'=>"\xe2\x88\xa9",
        'ccedil'=>"\xc3\xa7",
        'cedil'=>"\xc2\xb8",
        'cent'=>"\xc2\xa2",
        'chi'=>"\xcf\x87",
        'circ'=>"\xcb\x86",
        'clubs'=>"\xe2\x99\xa3",
        'cong'=>"\xe2\x89\x85",
        'copy'=>"\xc2\xa9",
        'crarr'=>"\xe2\x86\xb5",
        'cup'=>"\xe2\x88\xaa",
        'curren'=>"\xc2\xa4",
        'dArr'=>"\xe2\x87\x93",
        'dagger'=>"\xe2\x80\xa0",
        'darr'=>"\xe2\x86\x93",
        'deg'=>"\xc2\xb0",
        'delta'=>"\xce\xb4",
        'diams'=>"\xe2\x99\xa6",
        'divide'=>"\xc3\xb7",
        'eacute'=>"\xc3\xa9",
        'ecirc'=>"\xc3\xaa",
        'egrave'=>"\xc3\xa8",
        'empty'=>"\xe2\x88\x85",
        'emsp'=>"\xe2\x80\x83",
        'ensp'=>"\xe2\x80\x82",
        'epsilon'=>"\xce\xb5",
        'equiv'=>"\xe2\x89\xa1",
        'eta'=>"\xce\xb7",
        'eth'=>"\xc3\xb0",
        'euml'=>"\xc3\xab",
        'euro'=>"\xe2\x82\xac",
        'exist'=>"\xe2\x88\x83",
        'fnof'=>"\xc6\x92",
        'forall'=>"\xe2\x88\x80",
        'frac12'=>"\xc2\xbd",
        'frac14'=>"\xc2\xbc",
        'frac34'=>"\xc2\xbe",
        'frasl'=>"\xe2\x81\x84",
        'gamma'=>"\xce\xb3",
        'ge'=>"\xe2\x89\xa5",
        'hArr'=>"\xe2\x87\x94",
        'harr'=>"\xe2\x86\x94",
        'hearts'=>"\xe2\x99\xa5",
        'hellip'=>"\xe2\x80\xa6",
        'iacute'=>"\xc3\xad",
        'icirc'=>"\xc3\xae",
        'iexcl'=>"\xc2\xa1",
        'igrave'=>"\xc3\xac",
        'image'=>"\xe2\x84\x91",
        'infin'=>"\xe2\x88\x9e",
        'int'=>"\xe2\x88\xab",
        'iota'=>"\xce\xb9",
        'iquest'=>"\xc2\xbf",
        'isin'=>"\xe2\x88\x88",
        'iuml'=>"\xc3\xaf",
        'kappa'=>"\xce\xba",
        'lArr'=>"\xe2\x87\x90",
        'lambda'=>"\xce\xbb",
        'lang'=>"\xe2\x8c\xa9",
        'laquo'=>"\xc2\xab",
        'larr'=>"\xe2\x86\x90",
        'lceil'=>"\xe2\x8c\x88",
        'ldquo'=>"\xe2\x80\x9c",
        'le'=>"\xe2\x89\xa4",
        'lfloor'=>"\xe2\x8c\x8a",
        'lowast'=>"\xe2\x88\x97",
        'loz'=>"\xe2\x97\x8a",
        'lrm'=>"\xe2\x80\x8e",
        'lsaquo'=>"\xe2\x80\xb9",
        'lsquo'=>"\xe2\x80\x98",
        'macr'=>"\xc2\xaf",
        'mdash'=>"\xe2\x80\x94",
        'micro'=>"\xc2\xb5",
        'middot'=>"\xc2\xb7",
        'minus'=>"\xe2\x88\x92",
        'mu'=>"\xce\xbc",
        'nabla'=>"\xe2\x88\x87",
        'nbsp'=>"\xc2\xa0",
        'ndash'=>"\xe2\x80\x93",
        'ne'=>"\xe2\x89\xa0",
        'ni'=>"\xe2\x88\x8b",
        'not'=>"\xc2\xac",
        'notin'=>"\xe2\x88\x89",
        'nsub'=>"\xe2\x8a\x84",
        'ntilde'=>"\xc3\xb1",
        'nu'=>"\xce\xbd",
        'oacute'=>"\xc3\xb3",
        'ocirc'=>"\xc3\xb4",
        'oelig'=>"\xc5\x93",
        'ograve'=>"\xc3\xb2",
        'oline'=>"\xe2\x80\xbe",
        'omega'=>"\xcf\x89",
        'omicron'=>"\xce\xbf",
        'oplus'=>"\xe2\x8a\x95",
        'or'=>"\xe2\x88\xa8",
        'ordf'=>"\xc2\xaa",
        'ordm'=>"\xc2\xba",
        'oslash'=>"\xc3\xb8",
        'otilde'=>"\xc3\xb5",
        'otimes'=>"\xe2\x8a\x97",
        'ouml'=>"\xc3\xb6",
        'para'=>"\xc2\xb6",
        'part'=>"\xe2\x88\x82",
        'permil'=>"\xe2\x80\xb0",
        'perp'=>"\xe2\x8a\xa5",
        'phi'=>"\xcf\x86",
        'pi'=>"\xcf\x80",
        'piv'=>"\xcf\x96",
        'plusmn'=>"\xc2\xb1",
        'pound'=>"\xc2\xa3",
        'prime'=>"\xe2\x80\xb2",
        'prod'=>"\xe2\x88\x8f",
        'prop'=>"\xe2\x88\x9d",
        'psi'=>"\xcf\x88",
        'rArr'=>"\xe2\x87\x92",
        'radic'=>"\xe2\x88\x9a",
        'rang'=>"\xe2\x8c\xaa",
        'raquo'=>"\xc2\xbb",
        'rarr'=>"\xe2\x86\x92",
        'rceil'=>"\xe2\x8c\x89",
        'rdquo'=>"\xe2\x80\x9d",
        'real'=>"\xe2\x84\x9c",
        'reg'=>"\xc2\xae",
        'rfloor'=>"\xe2\x8c\x8b",
        'rho'=>"\xcf\x81",
        'rlm'=>"\xe2\x80\x8f",
        'rsaquo'=>"\xe2\x80\xba",
        'rsquo'=>"\xe2\x80\x99",
        'sbquo'=>"\xe2\x80\x9a",
        'scaron'=>"\xc5\xa1",
        'sdot'=>"\xe2\x8b\x85",
        'sect'=>"\xc2\xa7",
        'shy'=>"\xc2\xad",
        'sigma'=>"\xcf\x83",
        'sigmaf'=>"\xcf\x82",
        'sim'=>"\xe2\x88\xbc",
        'spades'=>"\xe2\x99\xa0",
        'sub'=>"\xe2\x8a\x82",
        'sube'=>"\xe2\x8a\x86",
        'sum'=>"\xe2\x88\x91",
        'sup1'=>"\xc2\xb9",
        'sup2'=>"\xc2\xb2",
        'sup3'=>"\xc2\xb3",
        'sup'=>"\xe2\x8a\x83",
        'supe'=>"\xe2\x8a\x87",
        'szlig'=>"\xc3\x9f",
        'tau'=>"\xcf\x84",
        'there4'=>"\xe2\x88\xb4",
        'theta'=>"\xce\xb8",
        'thetasym'=>"\xcf\x91",
        'thinsp'=>"\xe2\x80\x89",
        'thorn'=>"\xc3\xbe",
        'tilde'=>"\xcb\x9c",
        'times'=>"\xc3\x97",
        'trade'=>"\xe2\x84\xa2",
        'uArr'=>"\xe2\x87\x91",
        'uacute'=>"\xc3\xba",
        'uarr'=>"\xe2\x86\x91",
        'ucirc'=>"\xc3\xbb",
        'ugrave'=>"\xc3\xb9",
        'uml'=>"\xc2\xa8",
        'upsih'=>"\xcf\x92",
        'upsilon'=>"\xcf\x85",
        'uuml'=>"\xc3\xbc",
        'weierp'=>"\xe2\x84\x98",
        'xi'=>"\xce\xbe",
        'yacute'=>"\xc3\xbd",
        'yen'=>"\xc2\xa5",
        'yuml'=>"\xc3\xbf",
        'zeta'=>"\xce\xb6",
        'zwj'=>"\xe2\x80\x8d",
        'zwnj'=>"\xe2\x80\x8c"
    );


    public $strTextareaControlId;

    public function __construct($objParentObject, $strControlId = null) {
        // Call the Parent
        try {
            parent::__construct($objParentObject, $strControlId);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

            $this->SetCustomStyle('title', t('Special characters that might not be on your keyboard'));
    }

    public function GetControlHtml() {
        $this->strText = '';
        $strSpecialChars = QApplication::$User->GetPreferenceValueByName('Special characters');
        if (trim($strSpecialChars) == '') {
            $strSpecialChars = QApplication::$TargetLanguage->SpecialCharacters;
        }

        foreach(explode(' ', $strSpecialChars) as $strChar) {
            $objLabel = new QLabel($this);
            $objLabel->Text = $strChar;
            $objLabel->FontSize = 20;
            $objLabel->Padding = 3;
            $objLabel->AddAction(new QMouseOverEvent(), new QJavaScriptAction("this.style.backgroundColor='red'; this.style.color='white'; this.style.cursor='crosshair'"));
            $objLabel->AddAction(new QMouseOutEvent(), new QJavaScriptAction("this.style.backgroundColor=''; this.style.color='black'; this.style.cursor='normal'"));
            $objLabel->AddAction(new QClickEvent(), new QJavaScriptAction(sprintf("qc.getControl('%s').value += '%s'; qc.getControl('%s').focus();", $this->strTextareaControlId, ((isset(self::$arrEntities[$strChar]))?self::$arrEntities[$strChar]:$strChar), $this->strTextareaControlId)));

            $this->strText .= $objLabel->Render(false);
        }


        return $this->strText;
    }
}
?>