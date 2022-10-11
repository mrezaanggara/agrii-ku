<?php

class kategoriModel extends CI_Model
{
    public function getkategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }
}
