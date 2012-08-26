<?php
	/**
	 * The NarroFileType class defined here contains
	 * code for the NarroFileType enumerated type.  It represents
	 * the enumerated values found in the "narro_file_type" table
	 * in the database.
	 *
	 * To use, you should use the NarroFileType subclass which
	 * extends this NarroFileTypeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroFileType class.
	 *
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 */
	abstract class NarroFileTypeGen extends QBaseClass {
		const GettextPo = 1;
		const OpenOfficeSdf = 2;
		const Folder = 3;
		const MozillaDtd = 4;
		const MozillaIni = 5;
		const Narro = 6;
		const MozillaInc = 7;
		const Svg = 8;
		const DumbGettextPo = 9;
		const PhpMyAdmin = 10;
		const Unsupported = 11;
		const Html = 12;
		const Srt = 13;

		const MaxId = 13;

		public static $NameArray = array(
			1 => 'GettextPo',
			2 => 'OpenOfficeSdf',
			3 => 'Folder',
			4 => 'MozillaDtd',
			5 => 'MozillaIni',
			6 => 'Narro',
			7 => 'MozillaInc',
			8 => 'Svg',
			9 => 'DumbGettextPo',
			10 => 'PhpMyAdmin',
			11 => 'Unsupported',
			12 => 'Html',
			13 => 'Srt');

		public static $TokenArray = array(
			1 => 'GettextPo',
			2 => 'OpenOfficeSdf',
			3 => 'Folder',
			4 => 'MozillaDtd',
			5 => 'MozillaIni',
			6 => 'Narro',
			7 => 'MozillaInc',
			8 => 'Svg',
			9 => 'DumbGettextPo',
			10 => 'PhpMyAdmin',
			11 => 'Unsupported',
			12 => 'Html',
			13 => 'Srt');

		public static function ToString($intNarroFileTypeId) {
			switch ($intNarroFileTypeId) {
				case 1: return 'GettextPo';
				case 2: return 'OpenOfficeSdf';
				case 3: return 'Folder';
				case 4: return 'MozillaDtd';
				case 5: return 'MozillaIni';
				case 6: return 'Narro';
				case 7: return 'MozillaInc';
				case 8: return 'Svg';
				case 9: return 'DumbGettextPo';
				case 10: return 'PhpMyAdmin';
				case 11: return 'Unsupported';
				case 12: return 'Html';
				case 13: return 'Srt';
				default:
					throw new QCallerException(sprintf('Invalid intNarroFileTypeId: %s', $intNarroFileTypeId));
			}
		}

		public static function ToToken($intNarroFileTypeId) {
			switch ($intNarroFileTypeId) {
				case 1: return 'GettextPo';
				case 2: return 'OpenOfficeSdf';
				case 3: return 'Folder';
				case 4: return 'MozillaDtd';
				case 5: return 'MozillaIni';
				case 6: return 'Narro';
				case 7: return 'MozillaInc';
				case 8: return 'Svg';
				case 9: return 'DumbGettextPo';
				case 10: return 'PhpMyAdmin';
				case 11: return 'Unsupported';
				case 12: return 'Html';
				case 13: return 'Srt';
				default:
					throw new QCallerException(sprintf('Invalid intNarroFileTypeId: %s', $intNarroFileTypeId));
			}
		}

	}
?>