<?php
class SosmedModel extends CI_Model
{
    public function getSosmed()
    {
        $this->db->select('*');
        $this->db->from('sosmed');
        return $this->db->get()->result_array();
    }

    public function addSosmed($data)
    {
        $this->db->insert('sosmed', $data);
        return $this->db->affected_rows();
    }

    public function deleteSosmed($id)
    {
        $this->db->delete('sosmed', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateSosmed($data, $id)
    {
        $this->db->update('sosmed', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
