<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

	public function index()
	{
        $data = array();
        $nom = $_POST['email'];
        $mdp=$_POST['pass'];
		$this->load->model("traitrementLogin");
        $id=$this->traitrementLogin->authentificationUtilisateur($nom , $mdp);
        $valeur =$user = $this->utilisateur->selectOneUser($nom);
        $this->session->set_userdata('idUtilisateur', $valeur[0]);
		$this->load->view('afficheLogin');
	}		
}
