<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeController extends CI_Controller {

    
	public function index()
	{
		$this->load->model('CodeFonction');
		$Tab['Code'] = $this->CodeFonction->SelectCode();
		$this->load->view('AfficherCode',$Tab);
	}	
	
	public function AjouterArgent(){
		$this->load->model('CodeFonction');
		$this->CodeFonction->DemandeCode(1,intval($_GET['IdCode']));
		// redirect("CodeController/index");
	}

}
