<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterPengguna extends CI_controller {
	public function index()
	{
		$data["pengguna"]=$this->User_model->getAll();
	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
	    $this->load->view('KoordinatorSOP_dan_TATIB/Pengguna/user_lihat',$data);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
	}

	public function input()
	{
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		$this->load->view('KoordinatorSOP_dan_TATIB/Pengguna/user_input');
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
	}

	public function __construct(){
		parent::__construct();
		$this->load->model("User_model");
		$this->load->library('session');
		if (!$this->session->userdata('logged_in')) {
            redirect('Login');
        }
	}
	
	public function tambah(){
		$user = $this->User_model;
		$result =$user->save();
		if($result > 0) $this->sukses();
			else $this->gagal();
	}

	function sukses(){
		
		$this->session->set_flashdata('pesan_success', ' dibuat');
		redirect('masterpengguna');
	}
	function gagal(){
		$this->session->set_flashdata('pesan_error', 'dibuat');
		redirect('masterpengguna');
		
	}

	public function hapus($id_pengguna){
        $data = array(
            'id_pengguna'   => $id_pengguna,
            'status'        => 0
        );
        $this->User_model->delete($data);
        $this->session->set_flashdata('pesan_success', 'dihapus');
		redirect('masterpengguna');
    }

	 public function view_ubah($id_pengguna){
		$where = array('id_pengguna' => $id_pengguna);
        $data['pengguna'] = $this->User_model -> view_update ($where, 'pengguna') -> result(); 
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Pengguna/User_edit', $data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }

    

    // Simpan Ubah ke Database
    public function update(){
		$id_pengguna			= $this->input->post('id_pengguna');
       
        $role                   = $this->input->post('role');
        $kelas                   = $this->input->post('kelas');

        $data = array(
			'id_pengguna'     => $id_pengguna,
			
			'role'            => $role,
			'kelas'            => $kelas,
			'status'      	  => 1
        );

        $where = array(
            'id_pengguna'       => $id_pengguna
        );

        $this->User_model->update($where,$data,'pengguna');
        $this->session->set_flashdata('pesan_success', 'diubah');
		echo "<script>alert('Data berhasil diubah') ;</script>";
        redirect('masterpengguna');
    }	
}
?>