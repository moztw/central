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

    require(__MODEL_GEN__ . '/NarroTextGen.class.php');

    /**
    * The NarroText class defined here contains any
    * customized code for the NarroText class in the
    * Object Relational Model.  It represents the "narro_text" table
    * in the database, and extends from the code generated abstract NarroTextGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package My Application
    * @subpackage DataObjects
    *
    */
    class NarroText extends NarroTextGen {
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroText->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroText Object %s',  $this->intTextId);
        }

        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            $this->intTextWordCount = NarroString::WordCount($this->strTextValue);
            $this->intTextCharCount = strlen($this->strTextValue);
            $this->strTextValueMd5 = md5($this->strTextValue);
            if ((!$this->__blnRestored) || ($blnForceInsert))
                $this->dttCreated = QDateTime::Now();
            else
                $this->dttModified = QDateTime::Now();
            parent::Save($blnForceInsert, $blnForceUpdate);

        }
        
        /**
        * Internally called method to assist with calling Qcubed Query for this class
        * on load methods.
        * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
        * @param QQCondition $objConditions any conditions on the query, itself
        * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
        * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
        * @param boolean $blnCountOnly only select a rowcount
        * @return string the query statement
        */
        public static function GetQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
            return self::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly);
        }
    }
?>