<?php
	/**
	 * The NarroProjectType class defined here contains
	 * code for the NarroProjectType enumerated type.  It represents
	 * the enumerated values found in the "narro_project_type" table
	 * in the database.
	 * 
	 * To use, you should use the NarroProjectType subclass which
	 * extends this NarroProjectTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the NarroProjectType class.
	 * 
	 * @package Narro
	 * @subpackage GeneratedDataObjects
	 */
	abstract class NarroProjectTypeGen extends QBaseClass {
		const Mozilla = 1;
		const OpenOffice = 2;
		const Gettext = 3;
		const Narro = 4;
		const Svg = 5;
		const DumbGettextPo = 6;
		const Generic = 7;

		const MaxId = 7;

		public static $NameArray = array(
			1 => 'Mozilla',
			2 => 'OpenOffice',
			3 => 'Gettext',
			4 => 'Narro',
			5 => 'Svg',
			6 => 'DumbGettextPo',
			7 => 'Generic');

		public static $TokenArray = array(
			1 => 'Mozilla',
			2 => 'OpenOffice',
			3 => 'Gettext',
			4 => 'Narro',
			5 => 'Svg',
			6 => 'DumbGettextPo',
			7 => 'Generic');

		public static function ToString($intNarroProjectTypeId) {
			switch ($intNarroProjectTypeId) {
				case 1: return 'Mozilla';
				case 2: return 'OpenOffice';
				case 3: return 'Gettext';
				case 4: return 'Narro';
				case 5: return 'Svg';
				case 6: return 'DumbGettextPo';
				case 7: return 'Generic';
				default:
					throw new QCallerException(sprintf('Invalid intNarroProjectTypeId: %s', $intNarroProjectTypeId));
			}
		}

		public static function ToToken($intNarroProjectTypeId) {
			switch ($intNarroProjectTypeId) {
				case 1: return 'Mozilla';
				case 2: return 'OpenOffice';
				case 3: return 'Gettext';
				case 4: return 'Narro';
				case 5: return 'Svg';
				case 6: return 'DumbGettextPo';
				case 7: return 'Generic';
				default:
					throw new QCallerException(sprintf('Invalid intNarroProjectTypeId: %s', $intNarroProjectTypeId));
			}
		}
	}
?>