<?php

class jenisModel extends CI_Model
{
    public function getJenis()
    {
        $this->db->select('*');
        $this->db->from('jenis');
        return $this->db->get()->result_array();
    }
}
