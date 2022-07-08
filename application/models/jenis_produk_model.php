<?php
    class Jenis_produk_model extends CI_Model {
     public function get_data($table)
     {
        return $this->db->get($table);
     }
     public function insert_data($data, $table)
     {
$this->db->insert($table, $data);
     }
     public function update_data($data, $table)
     {
        $this->db->where('jenis_produk',$data["id_jenis_produk"]);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
$this->db->where($where);
$this->db->delete($table);
    }
}
?>