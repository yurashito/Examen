<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function index()
	{
        $this->load->model('StatFonction');
        $data['results'] = $this->StatFonction->getChartData();
		$data['page'] = 'home';
        $this->load->view('admin/index',$data);
	}	
	public function Aliment()
	{
        $Tab['Aliment'] = $this->AdminModel->SelectAliment();
		$Tab['page'] = 'listeAliment';
        $this->load->view('admin/index',$Tab);
	}
    
    public function InsererAliment(){
		$this->AdminModel->InsererAliment($_GET["Nom"],$_GET["Poids"],$_GET["Montant"]);
		$this->Aliment();
    }

    public function SupprimerAliment(){
        $this->AdminModel->SupprimerAliment($_GET['IdAliment']);
        $this->Aliment();
    }

    // public function ModifierAliment(){
    //     $Tab['Aliment'] = $this->AdminModel->SelectAlimentWhere($_GET['IdAliment']);
    //     $this->load->view('UpdateAliment',$Tab);            
    // }

    public function Modifier(){
        $this->AdminModel->Modifier($_GET['IdAliment'],$_GET['Nom'],$_GET['Poids'],$_GET['Montant']);
        redirect('AdminController/Aliment');
    }

// ------------------------Sport
    public function AfficherSport(){
        $Tab['Sport'] = $this->AdminModel->SelectSport();
        $Tab['page'] = 'Sports';
		$this->load->view('admin/index',$Tab);
    }

    public function InsererSport(){
        $this->AdminModel->InsererSport($_GET['Nom'],$_GET['Poids'],$_GET['Duree']);
        $this->AfficherSport();
    }

    public function SupprimerSport(){
        $this->AdminModel->SupprimerSport($_GET['IdSport']);
        $this->AfficherSport();
    }

    // public function ModifierSport(){
    //     $Tab['Sport'] = $this->AdminModel->SelectSportWhere($_GET['IdSport']);
    //     $this->load->view('ModifierSport',$Tab);
    // }

    public function ModifSport(){
        $this->AdminModel->ModifierSport($_GET['IdSport'],$_GET['Nom'],$_GET['Poids'],$_GET['Duree']);
        $this->AfficherSport();
    }

}
