<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table ="mahasiswa";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
}