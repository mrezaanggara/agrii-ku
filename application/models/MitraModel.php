<?php

class mitraModel extends CI_Model
{
    public function getMitra()
    {
        $this->db->select('*');
        $this->db->from('mitra');
        return $this->db->get()->result_array();
    }

    public function addMitra($insert, $data)
    {
        $this->db->insert_batch('mitra', $insert);
        $this->db->where('mitra', $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->delete('mitra', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
