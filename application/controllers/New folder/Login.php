<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller {
	public function index()
	{
	$this->load->view('login');
	}
	public function __construct(){
		parent::__construct();
		$this->load->model("materi_security_model");
	}

	public function ceklogin()
	{
		$post =$this->input->post();
		if(isset($post["username"]) && isset($post["pass"])){
			$user = $this->materi_security_model;
			$data = $user->getByUsernamePassword();

			if ($data != null){
				$username = $data->username;
				$nama = $data->nama;
				$role = $data->role;
				$password = $data->password;
				
				$newdata = array(
					'user_username' => $username,
					'user_nama' => $nama,
					'user_role' => $role
				);
				$this->session->set_userdata($newdata);

				if($role == "Admin"){
					redirect(site_url('dashboard'));
				}
				else if($role == "Dosen"){
					echo "<script>alert('Hallo Dosen?');</script>";
				}	
			}
			echo "<script>alert('User atau Password tidak terdaftar?');</script>";
		}
		else
		{
			$this->load->view('login');
		}
	}
}
?>