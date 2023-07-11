<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeController extends CI_Controller {

    
	public function index()
	{
		$this->load->model('CodeFonction');
		$Tab['Code'] = $this->CodeFonction->SelectCode();
		$this->load->view('ChoixduCode',$Tab);
	}	
	
	public function AjouterArgent(){
		$this->load->model('CodeFonction');
		$this->CodeFonction->DemandeCode(2,intval($_GET['IdCode']));
		redirect("CodeController/index");
	}

	public function ValiderCode(){
		$this->load->model('CodeFonction');
		$Tab['CodeAttente'] = $this->CodeFonction->SelectCodeEnAttenteValidation();
		$this->load->view('ValidationCode',$Tab);
	}

	public function Valider(){
		$this->load->model('CodeFonction');
		$this->CodeFonction->ConfirmationCode($_GET['IdClient'],$_GET['ValeurCode']);
	}


}
