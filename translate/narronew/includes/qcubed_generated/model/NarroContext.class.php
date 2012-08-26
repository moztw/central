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

    require(__MODEL_GEN__ . '/NarroContextGen.class.php');

    /**
    * The NarroContext class defined here contains any
    * customized code for the NarroContext class in the
    * Object Relational Model.  It represents the "narro_context" table
    * in the database, and extends from the code generated abstract NarroContextGen
    * class, which contains all the basic CRUD-type functionality as well as
    * basic methods to handle relationships and index-based loading.
    *
    * @package Narro
    * @subpackage DataObjects
    *
    */
    class NarroContext extends NarroContextGen {
        /**
        * Default "to string" handler
        * Allows pages to _p()/echo()/print() this object, and to define the default
        * way this object would be outputted.
        *
        * Can also be called directly via $objNarroContext->__toString().
        *
        * @return string a nicely formatted string representation of this object
        */
        public function __toString() {
            return sprintf('NarroContext Object %s',  $this->intContextId);
        }


        public static function LoadByTextIdFileId($intTextId, $intFileId, $objOptionalClauses = null) {
            return NarroContext::QuerySingle(
                QQ::AndCondition(
                    QQ::Equal(QQN::NarroContext()->TextId, $intTextId),
                    QQ::Equal(QQN::NarroContext()->FileId, $intFileId)
                ),
                $objOptionalClauses
            );
        }
    }
?>