<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "pengguna";

    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE status=1;");
        return $query->result(); // return berupa array objek
        
    }


    public function save()
    {
        $post = $this->input->post();
        $this->id_pengguna      = $post["id_pengguna"];
        $this->nama_pengguna    = $post["nama_pengguna"];
        $this->role             = $post["role"];
        $this->kelas             = $post["kelas"];
        $this->status           = "1";
        return $this->db->insert($this->_table, $this);
    }
    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($data){
        $this->db->where('id_pengguna', $data['id_pengguna']);
        $this->db->update('pengguna', $data);
    }
}