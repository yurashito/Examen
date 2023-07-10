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
        echo $_GET['IdObjectif'];
        $this->ObjectifClientModel->InsererObjectif(1,$_GET['IdObjectif'],$_GET['Valeur']);
    }
}
