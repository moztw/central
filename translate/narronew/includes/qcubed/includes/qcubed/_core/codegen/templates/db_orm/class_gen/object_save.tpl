/**
		 * Save this <%= $objTable->ClassName %>
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
<%
	foreach ($objArray = $objTable->ColumnArray as $objColumn)
		if ($objColumn->Identity)
			return '		 * @return int';
	return '		 * @return void';
%>
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = <%= $objTable->ClassName %>::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO <%= $strEscapeIdentifierBegin %><%= $objTable->Name %><%= $strEscapeIdentifierEnd %> (
<% foreach ($objTable->ColumnArray as $objColumn) { %>
	<% if ((!$objColumn->Identity) && (!$objColumn->Timestamp)) { %>
							<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %>,
	<% } %>
<% } %><%--%>
						) VALUES (
<% foreach ($objTable->ColumnArray as $objColumn) { %>
	<% if ((!$objColumn->Identity) && (!$objColumn->Timestamp)) { %>
							' . $objDatabase->SqlVariable($this-><%= $objColumn->VariableName %>) . ',
	<% } %>
<% } %><%--%>
						)
					');

<%
	foreach ($objArray = $objTable->PrimaryKeyColumnArray as $objColumn)
		if ($objColumn->Identity)
			return sprintf('					// Update Identity column and return its value
					$mixToReturn = $this->%s = $objDatabase->InsertId(\'%s\', \'%s\');',
					$objColumn->VariableName, $objTable->Name, $objColumn->Name);
%>
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)
<% foreach ($objTable->ColumnArray as $objColumn) { %>
	<% if ($objColumn->Timestamp) { %>
					if (!$blnForceUpdate) {
						// Perform the Optimistic Locking check
						$objResult = $objDatabase->Query('
							SELECT
								<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %>
							FROM
								<%= $strEscapeIdentifierBegin %><%= $objTable->Name %><%= $strEscapeIdentifierEnd %>
							WHERE
<% foreach ($objTable->PrimaryKeyColumnArray as $objPkColumn) { %>
	<% if ($objPkColumn->Identity) { %>
								<%= $strEscapeIdentifierBegin %><%= $objPkColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this-><%= $objPkColumn->VariableName %>) . ' AND
	<% } %><% if (!$objPkColumn->Identity) { %>
								<%= $strEscapeIdentifierBegin %><%= $objPkColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this->__<%= $objPkColumn->VariableName %>) . ' AND
	<% } %>
<% } %><%-----%>
						');

						$objRow = $objResult->FetchArray();
						if ($objRow[0] != $this-><%= $objColumn->VariableName %>)
							throw new QOptimisticLockingException('<%= $objTable->ClassName %>');
					}
	<% } %>
<% } %>

                    /**
                     * Make sure we change only what's changed in this instance of the object
                     * @author Alexandru Szasz <alexandru.szasz@lingo24.com>
                     */
                    $arrUpdateChanges = array();
<% foreach ($objTable->ColumnArray as $objColumn) { %>
    <% if ((!$objColumn->Identity) && (!$objColumn->Timestamp)) { %>
                    if (
                        $this->_arrHistory['<%= $objColumn->PropertyName %>'] !== $this-><%= $objColumn->PropertyName %> ||
                        (
                            $this-><%= $objColumn->PropertyName %> instanceof QDateTime &&
                            (string) $this->_arrHistory['<%= $objColumn->PropertyName %>'] !== (string) $this-><%= $objColumn->PropertyName %>
                        )
                    )
                        $arrUpdateChanges[] = '<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this-><%= $objColumn->VariableName %>);
    <% } %>
<% } %><%--%>;

                    if (count($arrUpdateChanges) == 0) return false;
					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							<%= $strEscapeIdentifierBegin %><%= $objTable->Name %><%= $strEscapeIdentifierEnd %>
						SET
                            ' . join(",\n", $arrUpdateChanges) . '
						WHERE
<% foreach ($objTable->PrimaryKeyColumnArray as $objColumn) { %>
	<% if ($objColumn->Identity) { %>
							<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this-><%= $objColumn->VariableName %>) . ' AND
	<% } %><% if (!$objColumn->Identity) { %>
							<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this->__<%= $objColumn->VariableName %>) . ' AND
	<% } %>
<% } %><%-----%>
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

            $blnInserted = (!$this->__blnRestored) || ($blnForceInsert);
			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
<% foreach ($objTable->PrimaryKeyColumnArray as $objColumn) { %>
	<% if ((!$objColumn->Identity) && ($objColumn->PrimaryKey)) { %>
			$this->__<%= $objColumn->VariableName %> = $this-><%= $objColumn->VariableName %>;
	<% } %>
<% } %>

<% foreach ($objTable->ColumnArray as $objColumn) { %>
	<% if ($objColumn->Timestamp) { %>
			// Update Local Timestamp
			$objResult = $objDatabase->Query('
				SELECT
					<%= $strEscapeIdentifierBegin %><%= $objColumn->Name %><%= $strEscapeIdentifierEnd %>
				FROM
					<%= $strEscapeIdentifierBegin %><%= $objTable->Name %><%= $strEscapeIdentifierEnd %>
				WHERE
<% foreach ($objTable->PrimaryKeyColumnArray as $objPkColumn) { %>
	<% if ($objPkColumn->Identity) { %>
					<%= $strEscapeIdentifierBegin %><%= $objPkColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this-><%= $objPkColumn->VariableName %>) . ' AND
	<% } %><% if (!$objPkColumn->Identity) { %>
					<%= $strEscapeIdentifierBegin %><%= $objPkColumn->Name %><%= $strEscapeIdentifierEnd %> = ' . $objDatabase->SqlVariable($this->__<%= $objPkColumn->VariableName %>) . ' AND
	<% } %>
<% } %><%-----%>
			');

			$objRow = $objResult->FetchArray();
			$this-><%= $objColumn->VariableName %> = $objRow[0];
	<% } %>
<% } %>

			// Return
			return $mixToReturn;
		}