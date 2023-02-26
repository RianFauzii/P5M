<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_controller {
	public function index()
	{
		// $data["pelanggaran"]=$this->Pelanggaran_model->getAll();
	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
	    $this->load->view('KoordinatorSOP_dan_TATIB/Daftar/daftarMahasiswa');
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');		
	}


	public function __construct(){
		parent::__construct();
		// $this->load->model("Pelanggaran_model");
		$this->load->library('session');
		 if (!$this->session->userdata('logged_in')) {
            redirect('Login');
        }
	}

}
?>