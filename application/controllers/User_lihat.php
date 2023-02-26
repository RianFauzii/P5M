<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_lihat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("materi_security_model");
        // loading session library
        $this->load->library('session');
    }

    public function index()
    {
        $data["user"] = $this->materi_security_model->getAll();
        $this->load->view('user_lihat', $data);
    }

    public function view_ubah($username){
        $where = array('username' => $username);
        $data['user'] = $this->materi_security_model -> view_update ($where, 'user') -> result();
        $this->load->view('user_edit', $data);

    }

    // Simpan Ubah ke Database
    public function ubah(){
        $nama       = $this->input->post('nama');
        $role       = $this->input->post('role');
        $kelas    = $this->input->post('kelas');

        $data = array(
        
            'nama'          => $nama,
            'role'          => $role,
            'kelas'       => $kelas
        );

        $where = array(
            'username'       => $username
        );

        $this->materi_security_model->update($where,$data, 'user');
        redirect('User_lihat');
    }

    //Hapus
    public function hapus($username){
        $where = array ('username' => $username);
        $this->materi_security_model->delete($where, 'user');
        redirect('User_lihat');
    }
}
