<?php defined('BASEPATH') OR exit('No direct script access allowed');

class p5m extends CI_controller {
	// public function index($tgl_transaksi)
	// {
	// 	$where = array('tgl_transaksi' => $tgl_transaksi);
    //     $data['p5m'] = $this->p5m_model -> view_history ($where, 'p5m') -> result(); 		
	// 	$data1["pelanggaran"]=$this->Pelanggaran_model->getAll();
	// 	$data2["mahasiswa"]=$this->Mahasiswa_model->getAll();

	//     $this->load->view('Header', $data);
	// 	$this->load->view('P5M_lihat',$data1, $data2);
	// 	$this->load->view('Footer');		
	// }

	public function lihat_p5m()
	{	
		$data["pelanggaran"]=$this->Pelanggaran_model->getAll();
		$data2["get3tabel"]=$this->P5M_model->get3tabel();
		
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Header', $data);
		$this->load->view('KoordinatorSOP_dan_TATIB/P5M/P5M_lihat',$data2);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');	
	}

	public function laporan_jam_minus()
	{	
		$data["pelanggaran"]=$this->Pelanggaran_model->getAll();
		$data1["p5m"]=$this->P5M_model->getAll();
		$data2["get3tabel"]=$this->P5M_model->get3tabel();
		
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Header', $data);
		$this->load->view('KoordinatorSOP_dan_TATIB/temp', $data1);
		$this->load->view('KoordinatorSOP_dan_TATIB/Laporan/laporan_jam_minus',$data2);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');	
	}

	public function cetak_laporan_jam_minus()
	{	
		$data["pelanggaran"]=$this->Pelanggaran_model->getAll();
		$data1["p5m"]=$this->P5M_model->getAll();
		$data2["get3tabel"]=$this->P5M_model->get3tabel();

		$this->load->view('KoordinatorSOP_dan_TATIB/Cetak/CetakLaporanJamMinusP5M',$data2);
	}


	
	public function history_lihat()
	{
		$data2["p5m"]=$this->P5M_model->getAll2();

	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		$this->load->view('KoordinatorSOP_dan_TATIB/History/history_lihat',$data2);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');		
	}

	public function input()
	{
		$data["pelanggaran"]=$this->Pelanggaran_model->getAll();
		$data2["p5m"]=$this->P5M_model->getAll();

		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Header', $data);
		$this->load->view('KoordinatorSOP_dan_TATIB/P5M/P5M_input', $data2);
		$this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
	}

	public function __construct(){
		parent::__construct();
		$this->load->model("Pelanggaran_model");
		$this->load->model("P5M_model");
		$this->load->library('session');
	}

	
	public function tambah(){
		
		date_default_timezone_set('Asia/Jakarta');

		$pelanggaran=$this->Pelanggaran_model->getAll();
		$p5m=$this->P5M_model->getAll();
		$url = file_get_contents('https://api.polytechnic.astra.ac.id:2906/api_dev/efcc359990d14328fda74beb65088ef9660ca17e/SIA/getListMahasiswa?id_konsentrasi=3');
		$dataMahasiswa = json_decode($url, true);

		$status = 0;
		$total_jam_minus = 0;
		$nim_lama = 0;
		$id_P5M = 0;

		foreach ($dataMahasiswa as $dm) {
			foreach ($pelanggaran as $m) {
				if ($this->input->post('CB_'.$dm['nim'].'_'.$m->id_pelanggaran))
				{
					if($nim_lama != $dm['nim'] ){
						$total_jam_minus = 0;
					}

					$total_jam_minus = $total_jam_minus + $this->input->post('CB_'.$dm['nim'].'_'.$m->id_pelanggaran);

					$nim_lama = $dm['nim'];

				}
			}

			if($nim_lama == $dm['nim']){

				$kirimP5M = array(
					'nim_mahasiswa'         => $dm['nim'],
					'tgl_transaksi'         => date("Y-m-d H:i:s"),
					'kelas'					=> $dm['kelas'],
					'total_jam_minus'       => $total_jam_minus
				);
				$this->db->insert('p5m' ,$kirimP5M);
			}

			$status = 0;
			$total_jam_minus = 0;
			$nim_lama = 0;
			$id_P5M = 0;
			
			foreach ($pelanggaran as $m) {
				if ($this->input->post('CB_'.$dm['nim'].'_'.$m->id_pelanggaran))
				{
					if($nim_lama != $dm['nim'] ){
						$total_jam_minus = 0;
					}

					$total_jam_minus = $total_jam_minus + $this->input->post('CB_'.$dm['nim'].'_'.$m->id_pelanggaran);

					$nim_lama = $dm['nim'];
					
					$p5m=$this->P5M_model->getAll();
					foreach ($p5m as $tr) {
						$id_P5M = $tr->id_p5m;
					}

					$kirimDetail = array(
						'id_p5M'  => $id_P5M,
						'id_pelanggaran'         => $m->id_pelanggaran
					);
			
					$this->db->insert('detail_p5m' ,$kirimDetail);

				}
			}
		}// echo "Today is " . date("Y-m-d") . "<br>";
		// echo "<script>alert('P5M Selesai') ;</script>";
		redirect ('p5m/history_lihat');
	}

	

	function sukses(){
		echo "<script>alert('Data berhasil disimpan');</script>";
		redirect ('masterpelanggaran');
	}
	function gagal(){
		echo "<script>alert('Input data Gagal') ;</script>";
	}
}
?>