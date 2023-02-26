<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterPelanggaran extends CI_controller {
	public function index()
	{
		$data["pelanggaran"]=$this->Pelanggaran_model->getAll();
	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
	    $this->load->view('KoordinatorSOP_dan_TATIB/Pelanggaran/Pelanggaran_lihat',$data);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');		
	}

	public function input()
	{
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		$this->load->view('KoordinatorSOP_dan_TATIB/Pelanggaran/Pelanggaran_input');
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
	}

	public function __construct(){
		parent::__construct();
		$this->load->model("Pelanggaran_model");
		$this->load->library('session');
		if (!$this->session->userdata('logged_in')) {
            redirect('Login');
        }

	}
	public function tambah(){
		$this->form_validation->set_rules('nama_pelanggaran', 'Nama Pelanggaran', 'required');
		$this->form_validation->set_rules('jam_minus', 'Jam Minus', 'required');

		$this->form_validation->set_message('required', "%s tidak boleh kosong.");

		if($this->form_validation->run() == TRUE) {
			$pelanggaran = $this->Pelanggaran_model;
			$result =$pelanggaran->save();
			if($result > 0) $this->sukses();
			else $this->gagal();
		}
		$this->input();
		
	}

	function sukses(){
		$this->session->set_flashdata('pesan_success', ' dibuat');
		redirect('masterpelanggaran');
	}

	function gagal(){
		$this->session->set_flashdata('pesan_error', 'dibuat');
		redirect('masterpelanggaran');
	}

	public function hapus($id_pelanggaran){
        $where = array ('id_pelanggaran' => $id_pelanggaran);
        $this->Pelanggaran_model->delete($where, 'pelanggaran');
		$this->session->set_flashdata('pesan_success', 'dihapus');
		redirect('masterpelanggaran');
    }

	 public function view_ubah($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
        $data['pelanggaran'] = $this->Pelanggaran_model -> view_update ($where, 'pelanggaran') -> result(); 
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Pelanggaran/Pelanggaran_edit', $data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
        
    }

    // Simpan Ubah ke Database
    public function update(){
		$id_pelanggaran  	= $this->input->post('id_pelanggaran');
        $nama_pelanggaran   = $this->input->post('nama_pelanggaran');
		$jam_minus 		    = $this->input->post('jam_minus');

        $data = array(
			'id_pelanggaran'    => $id_pelanggaran,
			'nama_pelanggaran'  => $nama_pelanggaran,
			'jam_minus'        	=> $jam_minus
        );

        $where = array(
            'id_pelanggaran'       => $id_pelanggaran
        );

        $this->Pelanggaran_model->update($where,$data,'pelanggaran');
		$this->session->set_flashdata('pesan_success', 'diubah');
		echo "<script>alert('Data berhasil diubah') ;</script>";
        redirect('masterpelanggaran');
    }	
}
?>