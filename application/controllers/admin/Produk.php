<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('produkModel');
        $data = [
            'title' => 'Daftar Produk | Agrii-ku',
        ];
        $data['produk'] = $this->produkModel->getProduct();
        $this->load->view('admin/produk/listproduk', $data);
    }

    public function addProduct()
    {
        check_not_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('produkModel');
        $this->load->model('gambarModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaProduk', 'namaProduk', 'required');
        $this->form_validation->set_rules('hargaProduk', 'hargaProduk', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('stokProduk', 'stokProduk', 'required');
        $this->form_validation->set_rules('beratProduk', 'beratProduk', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('panjang', 'panjang', 'required');
        $this->form_validation->set_rules('lebar', 'lebar', 'required');
        $this->form_validation->set_rules('tinggi', 'tinggi', 'required');

        if ($this->form_validation->run() == TRUE) {
            $url = $this->input->post('video');
            $url_components = parse_url($url);
            parse_str($url_components['query'], $params);
            $link = $params['v'];

            $data = array(
                'nama' => $this->input->post('namaProduk'),
                'harga' => $this->input->post('hargaProduk'),
                'kategori' => $this->input->post('kategori'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stokProduk'),
                'berat' => $this->input->post('beratProduk'),
                'deskripsi' => $this->input->post('deskripsi'),
                'video' => $link,
                'panjang' => $this->input->post('panjang'),
                'lebar' => $this->input->post('lebar'),
                'tinggi' => $this->input->post('tinggi'),
                'created_at' => (new DateTime('now'))->format('Y-m-d H:i:s'),
            );
            if ($this->produkModel->addProduct($data)) {
                $id = $this->produkModel->getId()->id;

                $upload = $_FILES['gambar']['name'];
                if ($upload) {
                    $total = sizeof($upload);
                    $files = $_FILES['gambar'];
                    $config['upload_path'] = './data/images/product/';
                    $config['allowed_types'] = 'jpg|png|jpeg|pdf|docs';
                    $config['max_size'] = '3500';
                    $this->load->library('upload', $config);

                    for ($i = 0; $i < $total; $i++) {
                        $_FILES['gambar']['name'] = $files['name'][$i];
                        $_FILES['gambar']['type'] = $files['type'][$i];
                        $_FILES['gambar']['tmp_name'] = $files['tmp_name'][$i];
                        $_FILES['gambar']['error'] = $files['error'][$i];
                        $_FILES['gambar']['size'] = $files['size'][$i];

                        $this->upload->initialize($config);

                        if ($this->upload->do_upload('gambar')) {
                            $data = $this->upload->data();
                            $imageName = $data['file_name'];
                            $insert[$i]['gambar'] = $imageName;
                            $insert[$i]['id_produk'] = $id;
                        }
                    }
                    $this->gambarModel->addGambarProduk($insert, $data['file_name']);
                }
            }
            echo "<script> alert('Data Berhasil Disimpan!'); </script>";
        }

        $data = [
            'title' => 'Tambah Produk | Agrii-ku',
        ];

        $this->load->model('kategoriModel');
        $this->load->model('jenisModel');
        $data['kategori'] = $this->kategoriModel->getKategori();
        $data['jenis'] = $this->jenisModel->getJenis();
        $this->load->view('admin/produk/tambahproduk', $data);
    }

    public function detailProduct($id)
    {
        check_not_login();
        $this->load->model('produkModel');
        $this->load->model('gambarModel');
        $this->load->model('kategoriModel');
        $this->load->model('jenisModel');
        $data = [
            'title' => 'Detail Produk | Agrii-ku',
        ];
        $data['produk'] = $this->produkModel->getProduct($id);
        $data['gambar'] = $this->gambarModel->getDataGambar($id);
        $data['kategori'] = $this->kategoriModel->getKategori();
        $data['jenis'] = $this->jenisModel->getJenis();
        $this->load->view('admin/produk/detailproduk', $data);
    }

    public function edit()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('produkModel');
        $id = $this->input->post('id');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaProduk', 'namaProduk', 'required');
        $this->form_validation->set_rules('hargaProduk', 'hargaProduk', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('stokProduk', 'stokProduk', 'required');
        $this->form_validation->set_rules('beratProduk', 'beratProduk', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('panjang', 'panjang', 'required');
        $this->form_validation->set_rules('lebar', 'lebar', 'required');
        $this->form_validation->set_rules('tinggi', 'tinggi', 'required');

        if ($this->form_validation->run() == TRUE) {

            $id = $this->input->post('id');
            $data = array(
                'nama' => $this->input->post('namaProduk'),
                'harga' => $this->input->post('hargaProduk'),
                'kategori' => $this->input->post('kategori'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stokProduk'),
                'berat' => $this->input->post('beratProduk'),
                'deskripsi' => $this->input->post('deskripsi'),
                'panjang' => $this->input->post('panjang'),
                'lebar' => $this->input->post('lebar'),
                'tinggi' => $this->input->post('tinggi'),
                'updated_at' => (new DateTime('now'))->format('Y-m-d H:i:s'),
            );
            if ($this->produkModel->updateProduct($data, $id)) {
                echo "<script>
                alert('Data berhasil diubah!');
                window.location='" . site_url('admin/produk/detailproduct/' . $id) . "';
            </script>";
            }
        } else {
            echo "<script>
                alert('Form harus Dilengkapi');
                window.location='" . site_url('admin/produk/detailproduct/' . $id) . "';
            </script>";
        }
    }

    public function editGambar($gambar)
    {
        $this->load->model('gambarModel');
        if ($gambar != null) {
            $data = $this->db->get_where('gambar', ['gambar' => $gambar])->row();
            $delete = $this->gambarModel->delete($gambar);
            if ($delete) {
                unlink("data/images/product/" . $data->gambar);
            }
        }
    }

    public function kategori()
    {
        check_not_login();
        $data = [
            'title' => 'Katrgori Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/kategoriproduk', $data);
    }

    public function jenis()
    {
        check_not_login();
        $data = [
            'title' => 'Jenis Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/jenisproduk', $data);
    }
}
