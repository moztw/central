<?php
	/*
	 * This class is INTENDED to be modified.  Please define any custom "Render"-based methods
	 * to handle custom global rendering functionality for all your controls.
	 *
	 * As an EXAMPLE, a RenderWithName method is included for you.  Feel free to modify this method,
	 * or to add as many of your own as you wish.
	 *
	 * Please note: All custom render methods should start with a RenderHelper call and end with a RenderOUtput call.
	 */
	abstract class QControl extends QControlBase {
		// This will call GetControlHtml() for the bulk of the work, but will add layout html as well.  It will include
		// the rendering of the Controls' name label, any errors or warnings, instructions, and html before/after (if specified).
		// 
		// This one method can define how ALL controls should be rendered when "Rendered with Name" throughout the entire site.
		// For example:
		//			<Name>
		//			<HTML Before><Control><HTML After>
		//			<Instructions>
		//			<Error>
		//			<warning>
		public function RenderWithName($blnDisplayOutput = true) {
			////////////////////
			// Call RenderHelper
			$this->RenderHelper(func_get_args(), __FUNCTION__);
			////////////////////

			// Custom Render Functionality Here
			if ($this->strName) {
				if ($this->blnRequired)
					$strName = sprintf('<b>%s</b>', strtoupper($this->strName));
				else
					$strName = sprintf('%s', $this->strName);
			} else
				$strName = '';

			try {
				if ($this->blnEnabled)
					$strClass = 'item_label';
				else
					$strClass = 'item_label_disabled';

				// For X/HTML Standards Compliance, we want to output the HTML for the Name as either a DIV or a SPAN
				// depending on whether or not this control is considered an X/HTML "Block" Element
				if ($this->blnIsBlockElement) {
					$strToReturn = sprintf('<div class="%s">%s</div>%s%s%s',
						$strClass,
						$strName,
						$this->strHtmlBefore,
						$this->GetControlHtml(),
						$this->strHtmlAfter);
				} else {
					$strToReturn = sprintf('<span class="%s">%s</span><br/>%s%s%s',
						$strClass,
						$strName,
						$this->strHtmlBefore,
						$this->GetControlHtml(),
						$this->strHtmlAfter);
				}

				if ($this->strInstructions)
					$strToReturn .= sprintf('<br /><span class="instructions">%s</span>', $this->strInstructions);

				if ($this->strValidationError)
					$strToReturn .= sprintf('<br /><span class="warning">%s</span>', $this->strValidationError);
				else if ($this->strWarning)
					$strToReturn .= sprintf('<br /><span class="warning">%s</span>', $this->strWarning);

				$strToReturn .= '<br />';
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			////////////////////////////////////////////
			// Call RenderOutput, Returning its Contents
			return $this->RenderOutput($strToReturn, $blnDisplayOutput);
			////////////////////////////////////////////
		}
	}
?>