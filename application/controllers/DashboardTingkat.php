<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardTingkat extends CI_controller {
	public function index()
	{
		// $data["pelanggaran"]=$this->Pelanggaran_model->getAll();
	    $this->load->view('KoordinatorTingkat/layout/Header');
	    $this->load->view('KoordinatorTingkat/dashboard_lihat');
		$this->load->view('KoordinatorTingkat/layout/Footer');		
	}


	public function __construct(){
		parent::__construct();
		// $this->load->model("Pelanggaran_model");
		$this->load->library('session');
	}

}
?>