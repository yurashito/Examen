<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function index()
	{
        $data = $this->suggestionModel->getInfoUtilisateur(0);
        $donnees = $this->suggestionModel->grouperDonnees($data);
        echo '<pre>';
        echo print_r($donnees);
        echo '</pre>';
        $this->load->view('welcome_message');

	}	
}
?>