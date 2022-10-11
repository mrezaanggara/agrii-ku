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
}
