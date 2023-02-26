<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_input extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Materi_security_model");
		// loading session library
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('KoordinatorSOP_dan_TATIB/Pengguna/user_input');
	}

	public function tambah(){
		$user = $this->Materi_security_model;
		$result =$user->save();
		if($result > 0) $this->sukses();
		else $this->gagal();
	}

	function sukses(){
		redirect(site_url('KoordinatorSOP_dan_TATIB/Pengguna/user_lihat'));
	}

	function gagal(){
		echo "<script>alert('Input data Gagal');</script>";
	}
}
