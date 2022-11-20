<?php
class produkModel extends CI_Model
{
    public function getProduct($id = null)
    {
        if ($id == null) {
            $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
            $this->db->from('produk');
            $this->db->from('gambar');
            $this->db->from('kategori');
            $this->db->where('gambar.main_gambar = 1');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('gambar.id_produk=produk.id');
            $this->db->group_by('produk.id');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('*, gambar.gambar');
            $this->db->from('produk');
            $this->db->from('kategori');
            $this->db->from('jenis');
            $this->db->from('gambar');
            $this->db->where("produk.id ='" . $id . "'");
            $this->db->where('produk.jenis=jenis.id');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('gambar.id_produk=produk.id');
            return $this->db->get()->result_array();
        }
    }

    public function newProduct()
    {
        $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
        $this->db->from('produk');
        $this->db->from('gambar');
        $this->db->from('kategori');
        $this->db->where('gambar.main_gambar = 1');
        $this->db->where('produk.kategori=kategori.id');
        $this->db->where('gambar.id_produk=produk.id');
        $this->db->order_by("produk.created_at DESC");
        $this->db->limit(10);
        return $this->db->get()->result_array();
    }

    public function mostViewProduct()
    {
        $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
        $this->db->from('produk');
        $this->db->from('gambar');
        $this->db->from('kategori');
        $this->db->where('gambar.main_gambar = 1');
        $this->db->where('produk.kategori=kategori.id');
        $this->db->where('gambar.id_produk=produk.id');
        $this->db->order_by("visitor DESC");
        $this->db->limit(10);
        return $this->db->get()->result_array();
    }

    public function getProducts($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
            $this->db->from('produk');
            $this->db->from('gambar');
            $this->db->from('kategori');
            $this->db->where('gambar.main_gambar = 1');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('gambar.id_produk=produk.id');
            $this->db->group_by('produk.id');
            $this->db->like('nama', $keyword);
            //$this->db->or_like('kategori.kategori', $keyword);
            return $this->db->get('', $limit, $start)->result_array();
        } else {
            $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
            $this->db->from('produk');
            $this->db->from('gambar');
            $this->db->from('kategori');
            $this->db->where('gambar.main_gambar = 1');
            $this->db->where('produk.kategori=kategori.id');
            $this->db->where('gambar.id_produk=produk.id');
            $this->db->group_by('produk.id');
            return $this->db->get('', $limit, $start)->result_array();
        }
    }

    public function productCategories($limit, $start, $keyword)
    {
        $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori');
        $this->db->from('produk');
        $this->db->from('gambar');
        $this->db->from('kategori');
        $this->db->where('gambar.main_gambar = 1');
        $this->db->where('produk.kategori=kategori.id');
        $this->db->where('gambar.id_produk=produk.id');
        $this->db->group_by('produk.id');
        $this->db->like('kategori.kategori', $keyword);
        return $this->db->get('', $limit, $start)->result_array();
    }

    public function productJenis($limit, $start, $keyword)
    {
        $this->db->select('produk.id,produk.nama,produk.harga,produk.kategori,produk.stok,gambar.gambar,kategori.kategori,jenis.jenis');
        $this->db->from('produk');
        $this->db->from('gambar');
        $this->db->from('kategori');
        $this->db->from('jenis');
        $this->db->where('gambar.main_gambar = 1');
        $this->db->where('produk.kategori=kategori.id');
        $this->db->where('produk.jenis=jenis.id');
        $this->db->where('gambar.id_produk=produk.id');
        $this->db->group_by('produk.id');
        $this->db->like('jenis.jenis', $keyword);
        //$this->db->or_like('kategori.kategori', $keyword);
        return $this->db->get('', $limit, $start)->result_array();
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

    public function getStok($id)
    {
        $this->db->select('stok');
        $this->db->from('produk');
        $this->db->where("produk.id ='" . $id . "'");
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

    public function countProducts()
    {
        return $this->db->get('produk')->num_rows();
    }

    function update_counter($id)
    {

        //return current article views
        $this->db->where('id', urldecode($id));
        $this->db->select('visitor');
        $count = $this->db->get('produk')->row();
        // then increase by one
        /*if (empty($count)) {
           redirect();
        }*/
        $this->db->where('id', urldecode($id));
        $this->db->set('visitor', ($count->visitor + 1));
        $this->db->update('produk');
    }
}
