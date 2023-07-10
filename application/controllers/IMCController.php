<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMCController extends CI_Controller {

    
	public function index()
	{
		$this->load->model('AdminModel');
		echo $this->AdminModel->IMCIdeal(1);
	}	

}
