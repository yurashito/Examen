<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');

	}	
	public function  insertionInformation(){
		$data = array();
        $idUtilisateur = 1;
		$poids= $_GET['poids'];
		$taille= $_GET['taille'];
		$adresse=$_GET['adresse'];
		$tel= $_GET['telephone'];
        $this->utilisateur->insertionInfo($idUtilisateur , $poids , $taille , $adresse , $tel);
		$this->load->view('afficheLogin' , $data);
	}
	
    public function inscription(){
        $data = array();
        $nom="fehizoro" ;
        $prenom="Rampanjato";
        $genre= 1;
        $mail="Rams@gmail.com";
        $mdp="ramskely";
        $this->utilisateur->insertionInscription($nom , $prenom , $genre ,$mail , $mdp);
		$this->load->view('afficheLogin' , $data);   
    }
	public function afficheProgramme(){
		
		$resultat = $this-> programme->selectRegimeAdequat(1);
		// echo $resultat ;
		$this->load->view('afficheProgramme');
	}


}
