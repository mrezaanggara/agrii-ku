<?php

class carouselModel extends CI_Model
{
    public function getCarousel()
    {
        $this->db->select('*');
        $this->db->from('carousel');
        return $this->db->get()->result_array();
    }

    public function addCarousel($insert, $data)
    {
        $this->db->insert_batch('carousel', $insert);
        $this->db->where('carousel', $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->delete('carousel', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
