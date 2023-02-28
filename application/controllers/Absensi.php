<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_controller {
  public function index()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('tanggal1', 'Mulai Tanggal', 'required');
    $this->form_validation->set_rules('tanggal2', 'Sampai Tanggal', 'required|callback_valid_date_range');

    $this->form_validation->set_message('required', "%s tidak boleh kosong.");

    if ($this->form_validation->run() == FALSE)
    {
        // validasi gagal, tampilkan error
        $data["absen"]=$this->Pelanggaran_model->getAll2();
	      $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		    $this->load->view('KoordinatorSOP_dan_TATIB/Daftar/daftarAbsensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
    else
    {
        // validasi sukses, proses input tanggal
        $data["absen"]=$this->Pelanggaran_model->getAll2();
	      $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		    $this->load->view('KoordinatorSOP_dan_TATIB/Daftar/daftarAbsensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
  }

  // public function index()
  // {
	// 	$data["absen"]=$this->Pelanggaran_model->getAll2();
	//   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
	// 	$this->load->view('KoordinatorSOP_dan_TATIB/Daftar/daftarAbsensi',$data);
  //   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
  // }

  public function laporan()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('tanggal1', 'Mulai Tanggal', 'required');
    $this->form_validation->set_rules('tanggal2', 'Sampai Tanggal', 'required|callback_valid_date_range');

    if ($this->form_validation->run() == FALSE)
    {
        // validasi gagal, tampilkan error
        $data["absen"]=$this->Pelanggaran_model->getAll2();
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/Laporan_Absensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
    else
    {
        // validasi sukses, proses input tanggal
        $data["absen"]=$this->Pelanggaran_model->getAll2();
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/Laporan_Absensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
  }

  // public function laporan()
  // {
  //   $data["absen"]=$this->Pelanggaran_model->getAll2();
  //   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
  //   $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/Laporan_Absensi',$data);
  //   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
  // }

  public function laporanJamMinusAbsensi()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('tanggal1', 'Mulai Tanggal', 'required');
    $this->form_validation->set_rules('tanggal2', 'Sampai Tanggal', 'required|callback_valid_date_range');

    $this->form_validation->set_message('required', "%s tidak boleh kosong.");
    
    if ($this->form_validation->run() == FALSE)
    {
        // validasi gagal, tampilkan error
        $data["absen"]=$this->Pelanggaran_model->getAll2();
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/laporan_jam_minus_absensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
    else
    {
        // validasi sukses, proses input tanggal
        $data["absen"]=$this->Pelanggaran_model->getAll2();
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
        $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/laporan_jam_minus_absensi',$data);
        $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
    }
  }

  // public function laporanJamMinusAbsensi()
  // {
  //   $data["absen"]=$this->Pelanggaran_model->getAll2();
  //   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
  //   $this->load->view('KoordinatorSOP_dan_TATIB/Laporan/laporan_jam_minus_absensi',$data);
  //   $this->load->view('KoordinatorSOP_dan_TATIB/layout/Footer');
  // }

  public function cetakAbsensi()
  {
    $data["absen"]=$this->Pelanggaran_model->getAll2();
    $this->load->view('KoordinatorSOP_dan_TATIB/Cetak/CetakLaporanAbsensi',$data);  
  } 

  public function cetakDaftarAbsensi()
  {
    $data["absen"]=$this->Pelanggaran_model->getAll2();
    $this->load->view('KoordinatorSOP_dan_TATIB/Cetak/CetakDaftarAbsensi',$data);  
  } 

  public function cetakJamMinusAbsensi()
  {
    $data["absen"]=$this->Pelanggaran_model->getAll2();
    $this->load->view('KoordinatorSOP_dan_TATIB/Cetak/CetakLaporanJamMinusAbsensi',$data);  
  }

  public function __construct(){
    parent::__construct();
    $this->load->model("Pelanggaran_model");
    $this->load->library('session');
  }

  // public function tambah(){
  
  //   error_reporting();

  //   require 'zklibrary.php';
    
  //   $zk = new ZKLibrary('10.8.5.63', 4370);
  //   $zk->connect();
  //   $zk->disableDevice();
    
  //   $users = $zk->getUser();
  //   $attendance = $zk->getAttendance();
    
  //   $data_absensin = json_encode($attendance);
  //    echo "Data absensi: ".$data_absensin;
  //   // echo "<br>";
    
  //   $data_satuan = explode('"]', $data_absensin);
  //   echo "satu data : ".$data_satuan[0];
  //   echo "satu data : ".$data_satuan[1]; 
  //   echo "<br>";

  //   $nim = explode(",", $data_satuan[10]);
  //   echo "nim : ".$nim[1];

  //   $data_user = json_encode($users);
  //   // echo "Data user ".$data_user;
    
  //   $zk->enableDevice();
  //   $zk->disconnect(); 
  
  // }
  
  // public function getdata($date  = ''){
  //   require 'zklibrary.php';
    
  //   if($date==''){
  //     $date = date('Y-m-d');
  //   }

  //   $zk = new ZKLibrary('10.8.5.63', 4370);
  //   $zk->connect();
  //   $zk->disableDevice();
    
  //   $users = $zk->getUser();
  //   $attendance = $zk->getAttendance();
    
  //   $data_absensin = json_encode($attendance);
  //   $i=0;
    
  //   echo '<br/>';
  //   $counter = count($attendance);
  //   for($i=0;$i<$counter;$i++){
  //     if($attendance[$i][3]>$date)
  //     echo $attendance[$i][0].','.$attendance[$i][1].','.$attendance[$i][3].'<br/>';
  //   }
    
  //   // echo "Data user ".$data_user;
    
  //   $zk->enableDevice();
  //   $zk->disconnect();
    
  // }

  public function import(){
    $absen=$this->Pelanggaran_model->getAll2();
    // $date1 = $_POST['tanggal1'];
    // $date2 = date('Y-m-d', strtotime('+1 days', strtotime($_POST['tanggal2'])));

    require 'zklibrary.php';
    
    if($date==''){
      $date = date('Y-m-d');
    }

    $zk = new ZKLibrary('10.8.5.63', 4370);
    $zk->connect();
    $zk->disableDevice();
    
    $attendance = $zk->getAttendance();
    
    $i=0;
    echo '<br/>';
    $counter = count($attendance);
    for($i=0;$i<$counter;$i++){
      $cek = '';
      foreach($absen as $ab){
        $dateTabel = $ab->waktu;
        $dateAbsen = $attendance[$i][3];
        if($attendance[$i][1]>51798 && $dateTabel == $dateAbsen){
          $cek = 'tidak oke';
        }
      }

      if($attendance[$i][1]>51798 && strcmp($cek ,'tidak oke')){
        $kirimAbsen = array(
          'nim'         => $attendance[$i][1],
          'waktu'         => $attendance[$i][3]
        );
    
        $this->db->insert('absen' ,$kirimAbsen);
      }
    }
    $zk->enableDevice();
    $zk->disconnect();
  }

  public function getAbsen(){
    $absen=$this->Pelanggaran_model->getAll2();
    echo json_encode($absen);
  }

  public function valid_date_range()
  {
      $tanggal1 = $this->input->post('tanggal1');
      $tanggal2 = $this->input->post('tanggal2');
      
      if (strtotime($tanggal1) > strtotime($tanggal2))
      {
          $this->form_validation->set_message('valid_date_range', 'Tanggal akhir harus lebih besar dari tanggal awal.');
          return FALSE;
      }
      else
      {
          return TRUE;
      }
  }

}