<?php
class produkModel extends CI_Model
{
    public function getProduct($id = null)
    {
        #...
    }

    public function addProduct($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows;
    }

    public function deleteProduct($id)
    {
        $this->db->delete('produk', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function updateProduct($data, $id)
    {
        $this->db->update('produk', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
