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
		$data = $this->suggestionModel->getInfoUtilisateur(1);
        $donnees = $this->suggestionModel->grouperDonnees($data);
        echo '<pre>';
        echo print_r($donnees);
        echo '</pre>';
		// $this->load->view('welcome_message');

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
		$resultat= array();
		$resultat['regime']= $this-> programme->selectRegimeAdequat1(-10);
		$this->load->view('afficheProgramme' , $resultat);
	}
	
	public function insererProgramme(){
		$idObjectif=null;
		$data = array();
		if($_GET['nom'] != null && $_GET['idObjectif']!= null){
			$nom= $_GET['nom'];
			$idObjectif= $_GET['idObjectif'];
			$data['Aliment'] =$this->aliment->select($idObjectif) ;
			$data['Sport'] =$this->sport->select($idObjectif) ;
			$this->programme->insertionProgramme($nom , $idObjectif);
			$data['IdProgramme']= $this->programme-> getDernierProgramme();
		}
		$this->load->view('pageInsertionProgrammeAliment' , $data);
	}

	
	public function pageInsertionProgramme(){
		$resultat = array();
		$resultat['objectif']= $this->objectifClientModel->SelectObjectif();
		$this->load->view('pageInsertionProgramme' , $resultat );
	}
	
	public function RecupererLesValeurChecker(){
		$lesValeurs= $_GET['aliment'];
		$sport= $_GET['sport'];
		$idProgramme= $_GET['idProgramme'];
		for($i=0 ; $i<count($lesValeurs) ; $i++){
			echo $lesValeurs[$i];
			$this->programme->insertionAliment($idProgramme , $lesValeurs[$i]);
		}
		for($i=0 ; $i<count($sport) ; $i++){
			echo $sport[$i];
			$this->programme->insertionSport($idProgramme , $sport[$i]);
		}

		// $AlimentPourProgramme= $this->programme->selectProgrammeSportParIdProgramme(2);
		// echo "<br>".count($AlimentPourProgramme['Sport'])."<br>";
		// for($i=0 ; $i<count($AlimentPourProgramme['Sport']) ; $i++){
		// 	echo $AlimentPourProgramme['Sport'][$i]['Nom']."----------<br>";
		// }
		// echo "Poids : ".$AlimentPourProgramme['Poids']."<br>";
		// echo "Duree : ".$AlimentPourProgramme['Duree']."<br>";


		$this->load->view('valeur');
	}

}
