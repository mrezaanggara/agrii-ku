<?php
class jenisModel extends CI_Model
{
    public function getJenis()
    {
        $this->db->select('*');
        $this->db->from('jenis');
        return $this->db->get()->result_array();
    }

    public function addJenis($data)
    {
        $this->db->insert('jenis', $data);
        return $this->db->affected_rows();
    }

    public function deleteJenis($id)
    {
        $this->db->delete('jenis', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateJenis($data, $id)
    {
        $this->db->update('jenis', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
