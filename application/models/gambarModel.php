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
        $query = $this->db->query("SELECT gambar,id_produk from gambar where id_produk=" . $id);
        return $query->result_array();
    }

    public function deleteAllProd($id)
    {
        $this->db->delete('gambar', ['id_produk' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteProd($gambar, $id)
    {
        $this->db->delete('gambar', ['gambar' => $gambar]);
        $this->db->where('id_produk', ['id_produk' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteCarousel($id)
    {
        $this->db->delete('gambar', ['id_carousel' => $id]);
        return $this->db->affected_rows();
    }
}
