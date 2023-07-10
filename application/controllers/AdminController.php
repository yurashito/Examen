<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    
	public function index()
	{
        $this->load->model('AdminModel');
        $Tab['Aliment'] = $this->AdminModel->SelectAliment();
		$this->load->view('InsererAliment',$Tab);
	}
    
    public function InsererAliment(){
        $this->load->model('AdminModel');
		$this->AdminModel->InsererAliment($_GET["Nom"],$_GET["Poids"],$_GET["Montant"]);
		$this->index();
    }

    public function SupprimerAliment(){
        $this->load->model('AdminModel');
        $this->AdminModel->SupprimerAliment($_GET['IdAliment']);
        $this->index();
    }

    public function MoidifierAliment(){
        $this->load->model('AdminModel');
        $Tab['Aliment'] = $this->AdminModel->SelectAlimentWhere($_GET['IdAliment']);
        $this->load->view('UpdateAliment',$Tab);            
    }

    public function Modifier(){
        $this->load->model('AdminModel');
        $this->AdminModel->Modifier($_GET['IdAliment'],$_GET['Nom'],$_GET['Poids'],$_GET['Montant']);
        redirect('AdminController/index');
    }

// ------------------------Sport
    public function AfficherSport(){
        $this->load->model('AdminModel');
        $Tab['Sport'] = $this->AdminModel->SelectSport();
		$this->load->view('InsererSport',$Tab);
    }

    public function InsererSport(){
        $this->load->model('AdminModel');
        $this->AdminModel->InsererSport($_GET['Nom'],$_GET['Poids'],$_GET['Durre']);
        $this->AfficherSport();
    }

    public function SupprimerSport(){
        $this->load->model('AdminModel');
        $this->AdminModel->SupprimerSport($_GET['IdSport']);
        $this->AfficherSport();
    }

    public function ModifierSport(){
        $this->load->model('AdminModel');
        $Tab['Sport'] = $this->AdminModel->SelectSportWhere($_GET['IdSport']);
        $this->load->view('ModifierSport',$Tab);
    }

    public function ModifSport(){
        $this->load->model('AdminModel');
        $this->AdminModel->ModifierSport($_GET['IdSport'],$_GET['Nom'],$_GET['Poids'],$_GET['Duree']);
        $this->AfficherSport();
    }

}
