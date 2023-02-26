<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class LandingPage extends CI_Controller {

    public function index()
    {
        $this->load->view('landing_page');
    }
}