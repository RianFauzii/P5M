<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model
{
    private $_table ="proyek";
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
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
        $this->nama_proyek = $post["namaproyek"];
        $this->nim_pic_proyek = $post["nimpicproyek"];
        $this->nama_pic_proyek = $post["namapicproyek"];
        $this->tanggal_mulai_proyek = $post["tanggalmulaiproyek"];
        $this->tanggal_target_proyek = $post["tanggaltargetproyek"];
        $this->keterangan_proyek = $post["keteranganproyek"];
       
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