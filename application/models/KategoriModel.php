<?php

class kategoriModel extends CI_Model
{
    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }

    public function addKategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function deleteKategori($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateKategori($data, $id)
    {
        $this->db->update('kategori', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
