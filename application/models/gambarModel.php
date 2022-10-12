<?php
class gambarModel extends CI_Model
{
    public function addGambarProduk($insert, $data)
    {
        $this->db->insert_batch('gambar', $insert);
        $this->db->set('main_gambar', 1);
        $this->db->where('gambar', $data);
        $this->db->update('gambar');
    }

    public function getDataGambar($id)
    {
        $query = $this->db->query("SELECT gambar from gambar where id_produk=" . $id);
        return $query->result_array();
    }

    public function delete($gambar)
    {
        $this->db->delete('gambar', ['gambar' => $gambar]);
        return $this->db->affected_rows();
    }
}
