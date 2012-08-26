
       /**
        * Save the values loaded from the database to allow seeing what was modified
        */
        public function SaveHistory($blnReset = false) {
            if ($blnReset)
                $this->_arrHistory = array();

        <% foreach ($objTable->ColumnArray as $objColumn) { %>
            if (!isset($this->_arrHistory['<%= $objColumn->PropertyName %>']))
                $this->_arrHistory['<%= $objColumn->PropertyName %>'] = $this-><%= $objColumn->PropertyName %>;
        <% } %>
        }
