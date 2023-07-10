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
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function insertion()
	{
		$this->load->view('Inscription');
	}		
	public function  insertionInformation(){
		$valeur = $this->session->userdata('idUtilisateur');
        $idUtilisateur = $valeur['IdUtilisateur'];
		$poids= $_POST['poids'];
		$taille= $_POST['taille'];
		$adresse=$_POST['adresse'];
		$tel= $_POST['numero'];
        $this->utilisateur->insertionInfo($idUtilisateur , $poids , $taille , $adresse , $tel);
		$this->load->view('choixDuSport');
	}
	
    public function inscription(){

		$data = array();
        $nom= $_POST['nom'];
        $prenom=$_POST['prenom'];
        $genre= $_POST['genre'];
        $mail=$_POST['mail'];
        $mdp=$_POST['passConf'];
        $this->utilisateur->insertionInscription($nom , $prenom , $genre ,$mail , $mdp);
		$user = $this->utilisateur->selectOneUser($nom);
		$data['user'] = $user[0];
		$this->session->set_userdata('idUtilisateur', $data);
		$this->load->view('infoUtilisateur');   
    }
	public function afficheProgramme(){
		
		$resultat = $this-> programme->selectRegimeAdequat(1);
		// echo $resultat ;
		$this->load->view('afficheProgramme');
	}


}
