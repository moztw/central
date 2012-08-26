<?php
	/**
	 * Represents a range query. Unlick QQConditionBetween, this class only needs one operand. This allows it to be used
	 * as a filter in QDataGrid.
	 * The operand represents the range by using a delimitter. For example 5:13.
	 * Also, unlike between, LeftComparator and RightComparator allow controling the inclusion of the leftand right sides
	 * This class can also handle operands where one side of the range is missing, e.g. :13 or 5:.
	 * It can also handle the case where there is no delimitter, in which case it's equivalent to the Equal query.
	 */
	class QQConditionRange extends QQConditionComparison {
		protected $strDelim;
		protected $blnTrim;
		protected $strLeftComparator;
		protected $strRightComparator;

		public function __construct(QQNode $objQueryNode, $mixOperand, $strDelim, $blnTrim = true, $strLeftComparator = '>=', $strRightComparator = '<') {
			parent::__construct($objQueryNode, $mixOperand);
			$this->strDelim = $strDelim;
			$this->blnTrim = $blnTrim;
			$this->strLeftComparator = $strLeftComparator;
			$this->strRightComparator = $strRightComparator;
		}

		public function UpdateQueryBuilder(QQueryBuilder $objBuilder) {
			if ($this->mixOperand instanceof QQNamedValue)
				throw new QInvalidCastException('Range operand cannot be a QQNamedValue', 3);
			$strCol = $this->objQueryNode->GetColumnAlias($objBuilder);
			$tokens = preg_split($this->strDelim, $this->mixOperand);
			$strQuery = '';
			if (count($tokens)  >= 2) {
				$strLeftValue = $this->blnTrim ? trim($tokens[0]) : $tokens[0];
				if ($strLeftValue) {
					$strLeftValue = $objBuilder->Database->SqlVariable($strLeftValue);
					$strQuery = $strCol . $this->strLeftComparator . $strLeftValue;
				}
				$strRightValue = $this->blnTrim ? trim($tokens[1]) : $tokens[1];
				if ($strRightValue) {
					$strRightValue = $objBuilder->Database->SqlVariable($strRightValue);
					if ($strQuery) {
						 $strQuery .= ' AND ';
					}
					$strQuery .= $strCol . $this->strRightComparator . $strRightValue;
				}
			} else if (count($tokens) == 1) {
				$strValue = $this->blnTrim ? trim($tokens[0]) : $tokens[0];
				if ($strValue) {
					$strValue = $objBuilder->Database->SqlVariable($strValue);
					$strQuery = $strCol . ' = ' . $strValue;
				}
			}
			if ($strQuery) {
				$objBuilder->AddWhereItem($strQuery);
			}
		}
	}
?>
