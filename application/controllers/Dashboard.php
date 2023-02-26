<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_controller {
	public function index()
	{
		// $data["pelanggaran"]=$this->Pelanggaran_model->getAll();
	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
	    $this->load->view('KoordinatorSOP_dan_TATIB/dashboard_lihat');
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');		
	}


	public function __construct(){
		parent::__construct();
		// $this->load->model("Pelanggaran_model");
		$this->load->library('session');
	}

}
?>