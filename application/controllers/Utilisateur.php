<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
    
    public function index()
	{
        $this->load->view('formulaireInsertionCompletion');
	}		
    // public function  insertionInformation(){
    //     $this->load->model("Utilisateur");
    //     $data = array();
    //     $idUtilisateur = 1;
	// 	$poids= $_GET['poids'];
	// 	$taille= $_GET['taille'];
	// 	$adresse=$_GET['adresse'];
	// 	$tel= $_GET['telephone'];
    //     $this->Utilisateur->insertionInfo($idUtilisateur , $poids , $taille , $adresse , $tel);
	// 	$this->load->view('afficheLogin' , $data);
	// }

    // public function inscription(){
	// 	$this->load->model("Utilisateur");
    //     $data = array();
    //     $nom="fehizoro" ;
    //     $prenom="Rampanjato";
    //     $genre= 1;
    //     $mail="Rams@gmail.com";
    //     $mdp="ramskely";
    //     // $this->load->model("Utilisateur");
    //     // $this->Utilisateur->insertionInscription($nom , $prenom , $genre ,$mail , $mdp);
	// 	$this->load->view('afficheLogin' , $data);   
    // }
	

}