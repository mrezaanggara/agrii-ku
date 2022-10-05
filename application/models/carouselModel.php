<?php

class carouselModel extends CI_Model
{
    public function getCarousel()
    {
        $this->db->select('gambar');
        $this->db->from('carousel');
        return $this->db->get()->result_array();
    }
}
