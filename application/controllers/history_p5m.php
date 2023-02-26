<?php defined('BASEPATH') OR exit('No direct script access allowed');

class history_p5m extends CI_controller {

    public function index()
	{
		$data["history"]=$this->history_model->getAll();

	    $this->load->view('KoordinatorSOP_dan_TATIB/layout/Header');
		$this->load->view('KoordinatorSOP_dan_TATIB/History/history_lihat',$data);
		$this->load->view('Footer');		
	}

	public function __construct(){
		parent::__construct();
		$this->load->model("history_model");
		$this->load->library('session');
	}

	public function cobaApi(){
		echo 'ok';
	}

    }	

?>