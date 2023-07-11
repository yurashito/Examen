<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiqueController extends CI_Controller {
    
	public function index()
	{
        $this->load->model('StatFonction');
        $data['results'] = $this->StatFonction->getChartData();
		$this->load->view('Statistique',$data);
	}	

}
