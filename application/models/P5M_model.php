<?php defined('BASEPATH') OR exit('No direct script access allowed');

class P5M_model extends CI_Model
{
    private $_table ="p5m";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getAll2()
    {
        $query = $this->db->query("SELECT * FROM p5m ORDER BY tgl_transaksi DESC;");
        return $query->result();
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    private $_table1 ="detail_p5m";

    public function getAllDetail()
    {
        return $this->db->get($this->_table1)->result();
    }

    public function view_history($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function get3tabel(){
        $query = $this->db->query("SELECT detail_p5m.id_pelanggaran, detail_p5m.id_p5m, p5m.tgl_transaksi, p5m.nim_mahasiswa 
        FROM pelanggaran 
        JOIN detail_p5m ON pelanggaran.id_pelanggaran = detail_p5m.id_pelanggaran 
        JOIN p5m ON p5m.id_p5m = detail_p5m.id_p5m");
        return $query->result();
    }
}