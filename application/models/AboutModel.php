<?php
class AboutModel extends CI_Model
{
    public function getAbout()
    {
        $this->db->select('content');
        $this->db->from('aboutus');
        return $this->db->get()->result_array();
    }

    public function addAbout($data)
    {
        $this->db->update('aboutus', $data, ['id' => 1]);
        return $this->db->affected_rows();
    }
}
