<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model
{
    private $_table ="pengguna";



     public function getbylogin($nama){
        $query = $this->db->select('*')
                    ->from($this->_table)
                    ->where('nama_pengguna', $nama)
                    ->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }

  public function getAll(){
        $query = $this->db->select('*')
                    ->from($this->_table)
                    ->order_by('id_pengguna', 'ASC')
                    ->get();
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }
    }

   

    public function getDataById($idAdmin){
        $query = $this->db->where('id_pengguna', $idAdmin)
                    ->limit(1)
                    ->get('role');
        if($query->num_rows() > 0){
        return $query->row();
        } else {
        return false;
        }
    }

    public function insert_data($data)
    {   
        $this->db->insert($this->_table, $data);
    }

    public function hapus($where, $_table) {
        $this->db->where($where);
        $this->db->delete($_table);
    }

    public function edit ($where, $_table) {
        return $this->db->get_where($_table,$where);
    }

    public function update_data($data, $id) {
        $this->db->where('id_pengguna',$id);
        $this->db->update('role',$data);
    }
}