<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalogue extends CI_Controller
{
    public function allProduct()
    {
        $this->load->model('produkModel', 'produk');
        //load library
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('catalogue/allproduct');
        $config['total_rows'] = $this->produk->countProducts();
        $config['per_page'] = 10;

        //initialize
        $this->pagination->initialize($config);

        $data = [
            'title' => 'Agriiku | Katalog',
            'laman' => 'Semua Produk',
        ];
        $data['keyword'] = null;
        $data['start'] = $this->uri->segment(3);
        $data['produk'] = $this->produk->getProducts($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('users/semuaproduk', $data);
    }

    public function category($category)
    {
        $data = [
            'title' => 'Agriiku | Categories',
            'laman' => 'Kategori Produk',
        ];
        $this->load->model('produkModel', 'produk');
        //load library
        $this->load->library('pagination');

        //ambil data kategori
        $data['keyword'] = str_replace('%20', ' ', $category);

        //config
        $config['base_url'] = base_url('catalogue/category/') . $category;
        $this->db->like('kategori.kategori', $data['keyword']);
        $this->db->from('produk');
        $this->db->from('kategori');
        $this->db->where('produk.kategori = kategori.id');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->produk->productCategories($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('users/semuaproduk', $data);
    }

    public function jenis($jenis)
    {
        $data = [
            'title' => 'Agriiku | Jenis',
            'laman' => 'Jenis Produk',
        ];
        $this->load->model('produkModel', 'produk');
        //load library
        $this->load->library('pagination');

        //ambil data kategori
        $data['keyword'] = str_replace('%20', ' ', $jenis);

        //config
        $config['base_url'] = base_url('catalogue/jenis/') . $jenis;
        $this->db->like('jenis.jenis', $data['keyword']);
        $this->db->from('produk');
        $this->db->from('jenis');
        $this->db->where('produk.jenis = jenis.id');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['produk'] = $this->produk->productJenis($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('users/semuaproduk', $data);
    }

    public function search()
    {
        $data = [
            'title' => 'Agriiku | Search Product',
            'laman' => 'Pencarian Produk',
        ];
        $this->load->model('produkModel', 'produk');
        //load library
        $this->load->library('pagination');

        //ambil data keyword
        $data['keyword'] = $this->input->post('keyword');
        if ($data['keyword'] != null) {
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            echo "<script>
					alert('Kata kunci tidak boleh kosong..');
					window.location='" . site_url('catalogue/allproduct') . "';
				</script>";
        }

        //config
        $config['base_url'] = base_url('catalogue/search');
        $this->db->like('produk.nama', $data['keyword']);
        // $this->db->or_like('kategori.kategori', $data['keyword']);
        $this->db->from('produk');
        // $this->db->from('kategori');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['produk'] = $this->produk->getProducts($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('users/semuaproduk', $data);
    }

    public function item($id)
    {
        $this->load->model('produkModel', 'produk');
        $this->load->model('gambarModel', 'gambar');
        $data = [
            'title' => 'Agriiku | Katalog',
        ];
        $data['produk'] = $this->produk->getProduct($id);
        $data['gambar'] = $this->gambar->getDataGambar($id);
        $this->load->view('users/produk', $data);
        $this->add_count($id);
    }

    function add_count($id)
    {
        $this->load->model('produkModel', 'produk');
        // load cookie helper
        $this->load->helper('cookie');
        // this line will return the cookie which has slug name
        $check_visitor = $this->input->cookie(urldecode($id), FALSE);
        // this line will return the visitor ip address
        $ip = $this->input->ip_address();

        if ($check_visitor == false) {
            $this->produk->update_counter(urldecode($id));
        }
    }
}
