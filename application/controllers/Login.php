<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $data = array();
        $nom = 'fehizoro';
        $mdp='fehizoro';
		$this->load->model("traitrementLogin");
        $id=$this->traitrementLogin->authentificationUtilisateur($nom , $mdp);
        echo $id;
        $data['id']=$id;
		$this->load->view('afficheLogin' , $data);
	}		
	

}
