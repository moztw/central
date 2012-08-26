<?php 

require('../../../../includes/configuration/prepend.inc.php');

class ExampleForm extends QForm {
	protected $crlControl;
	protected $btnExecuteRequest;
	protected $txtURL;
	protected $txtProxy;
	protected $lblHTTPStatus;
	protected $lblError;
	protected $lblResult;
	
	protected $strHTML = "";
	
	protected function Form_Create() {
		$sampleUrl = "www.gmail.co.nz";
		$this->crlControl = new QCurl($sampleUrl);
	
		$this->txtURL = new QTextBox($this);
		$this->txtURL->Text = $sampleUrl;

		$this->txtProxy = new QTextBox($this);
		
		$this->lblHTTPStatus = new QLabel($this);
		$this->lblHTTPStatus->ForeColor = 'red';		
		
		$this->lblError = new QLabel($this);
		$this->lblError->ForeColor = 'red';
		
		$this->lblResult = new QLabel($this);		
		
		$this->btnExecuteRequest = new QButton($this);
		$this->btnExecuteRequest->Text = 'Make HTTP request!';
		$this->btnExecuteRequest->AddAction(new QClickEvent(), new QServerAction('btnExecuteRequest_Click'));
		$this->btnExecuteRequest->CausesValidation = false;
	}
	
	protected function btnExecuteRequest_Click($strFormId, $strControlId, $strParameter) {
		if($this->txtProxy->Text){
			$this->crlControl->setProxy($this->txtProxy->Text);
		}
		$this->crlControl->setUrl($this->txtURL->Text);
		$this->crlControl->makeHttpRequest();

		$this->lblHTTPStatus->Text = $this->crlControl->getHttpStatus();
		$this->lblError->Text = $this->crlControl->getLastError();
		$this->lblResult->Text = $this->crlControl->getResult();
	}
}

ExampleForm::Run('ExampleForm','qcurl.tpl.php');
?>
