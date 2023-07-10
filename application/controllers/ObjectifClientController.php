<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifClientController extends CI_Controller {

    
	public function index()
	{
        $this->load->model('ObjectifClientModel');
		$Tab['Objectif'] = $this->ObjectifClientModel->SelectObjectif();
		$this->load->view('infoUtilisateur',$Tab);
	}	

    public function InsererObjectif(){
        $this->load->model('ObjectifClientModel');
        $this->ObjectifClientModel->InsererObjectif(1,$_GET['IdObjectif'],$_GET['Valeur']);
        $this->index();
    }
	
}
