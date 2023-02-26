<?php
  //Jika controller tidak sesuai
  defined('BASEPATH') OR exit ('No direct script access allowed');
  
Class Login extends CI_Controller{
  
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Login_user");

    }

    public function index(){
    unset($_COOKIE['npk']); 
        unset($_COOKIE['nama']); 
        unset($_COOKIE['role']);
        unset($_COOKIE['username']);
        echo "<script>
                document.cookie = 'npk=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'nama=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'role=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        </script>";
        $Data['keluar'] = 1;
    $this->load->view('login'); //Mengarah ke dashboard.php pada folder view
  }

  public function sso(){
        $data = array(
            "sso" => $this->Login_user->getbylogin($_COOKIE['nama']),
            "logged_in" => TRUE
        );
        $this->session->set_userdata($data);
        redirect('Login/default');
    }

    public function default(){

        //$this->load->view('layout/header');
        $data = $this->session->userdata();
        if($data != null){
        $this->load->view('default',$data);
        }else{
            redirect('Login/index');
        }
        //$this->load->view('layout/footer');
    }

  public function logout(){
        unset($_COOKIE['npk']); 
        unset($_COOKIE['nama']); 
        unset($_COOKIE['role']);
        unset($_COOKIE['username']);
        echo "<script>
                document.cookie = 'npk=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'nama=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = 'role=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        </script>";
        $Data['keluar'] = 1;
        // redirect(site_url('login'));
        $this->load->view('login', $Data);
    }

}
?>