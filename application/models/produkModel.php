<?php
class produkModel extends CI_Model
{
    public function getProduct($id = null)
    {
        if ($id == null) {
            $this->db->select('produk.id,produk.nama,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
            $this->db->from('produk');
            $this->db->from('gambar');
            $this->db->from('kategori');
            $this->db->where('gambar.main_gambar = 1');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('gambar.id_produk=produk.id');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('*, produk.id as id_produk');
            $this->db->from('produk');
            $this->db->from('kategori');
            $this->db->from('jenis');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('produk.jenis=jenis.id');
            $this->db->where("produk.id ='" . $id . "'");
            return $this->db->get()->result_array();
        }
    }

    public function getId()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get()->row();
        return $query;
    }

    public function addProduct($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->affected_rows();
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
