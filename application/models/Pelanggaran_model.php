<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran_model extends CI_Model
{
    private $_table ="pelanggaran";


    private $_table2 ="absen";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAll2()
    {
        $query = $this->db->query("SELECT * FROM absen ORDER BY waktu DESC;");
        return $query->result();
    }


    public function getByUsernamePassword()
    {
        $post1=$this->input->post();
        $username=$post1["username"];
        $password=$post1["pass"];
        
        $array = array('username' => $username, 'password' => $password);
        $query = $this->db->get_where($this->_table,$array);
        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pelanggaran = $post["id_pelanggaran"];
        $this->nama_pelanggaran  = $post["nama_pelanggaran"];
        $this->jam_minus    = $post["jam_minus"];
       
        return $this->db->insert($this->_table, $this);
    }
    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
}