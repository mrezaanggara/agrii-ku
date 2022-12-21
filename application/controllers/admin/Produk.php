<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('produkModel');
        $data = [
            'title' => 'Daftar Produk | Agriiku',
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
            if ($url == null) {
                $link = '-';
            } else {
                $url_components = parse_url($url);
                parse_str($url_components['query'], $params);
                $link = $params['v'];
            }

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
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = '5500';
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);

                    for ($i = 0; $i < $total; $i++) {
                        $_FILES['gambar']['name'] = $files['name'][$i];
                        $_FILES['gambar']['type'] = $files['type'][$i];
                        $_FILES['gambar']['tmp_name'] = $files['tmp_name'][$i];
                        $_FILES['gambar']['error'] = $files['error'][$i];
                        $_FILES['gambar']['size'] = $files['size'][$i];

                        $this->upload->initialize($config);
                        $this->load->library('image_lib');

                        if ($this->upload->do_upload('gambar')) {
                            $gbr = $this->upload->data();

                            //compress gambar
                            $config['image_library'] = 'gd2';
                            $config['source_image'] = './data/images/product/' . $gbr['file_name'];
                            $config['create_thumb'] = FALSE;
                            $config['maintain_ratio'] = true;
                            $config['quality'] = '50%';
                            $config['width'] = 600;
                            $config['height'] = 400;
                            $config['new_image'] = './data/images/product/' . $gbr['file_name'];
                            $this->image_lib->clear();
                            $this->image_lib->initialize($config);
                            $this->image_lib->resize();

                            $imageName = $gbr['file_name'];
                            $insert[$i]['gambar'] = $imageName;
                            $insert[$i]['id_produk'] = $id;
                        }
                    }
                    $this->gambarModel->addGambarProduk($insert, $gbr['file_name']);
                }
            }
            echo "<script> alert('Data Berhasil Disimpan!'); </script>";
        }

        $data = [
            'title' => 'Tambah Produk | Agriiku',
        ];

        $this->load->model('kategoriModel');
        $this->load->model('jenisModel');
        $data['kategori'] = $this->kategoriModel->getKategori();
        $data['jenis'] = $this->jenisModel->getJenis();
        $this->load->view('admin/produk/tambahproduk', $data);
    }

    public function deleteProduct($id)
    {
        $this->load->model('produkModel');

        if ($id != null) {
            $data = $this->db->get_where('gambar', ['id_produk' => $id]);
            $imgs = $data->result_array();
            $delete = $this->produkModel->deleteProduct($id);
            if ($delete) {
                foreach ($imgs as $img) {
                    unlink("data/images/product/" . $img['gambar']);
                }
            }
            redirect('admin/produk/');
        }
    }

    public function detailProduct($id)
    {
        check_not_login();
        $this->load->model('produkModel');
        $this->load->model('gambarModel');
        $this->load->model('kategoriModel');
        $this->load->model('jenisModel');
        $data = [
            'title' => 'Detail Produk | Agriiku',
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

    public function editStatus()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('produkModel');
        $id = $this->input->post('id');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('stokProduk', 'stokProduk', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'stok' => $this->input->post('stokProduk'),
                // 'status' => $this->input->post('status'),
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

    public function editVideo()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('produkModel');
        $id = $this->input->post('id');
        $url = $this->input->post('video');
        if ($url == null) {
            $link = '-';
        } else {
            $url_components = parse_url($url);
            parse_str($url_components['query'], $params);
            $link = $params['v'];
        }
        $data = array(
            'video' => $link,
            'updated_at' => (new DateTime('now'))->format('Y-m-d H:i:s'),
        );
        if ($this->produkModel->updateProduct($data, $id)) {
            echo "<script>
            alert('Data berhasil diubah!');
            window.location='" . site_url('admin/produk/detailproduct/' . $id) . "';
        </script>";
        }
    }

    public function hapusGambar($gambar, $id)
    {
        $this->load->model('gambarModel');
        if ($gambar != null) {
            $data = $this->db->get_where('gambar', ['gambar' => $gambar])->row();
            $delete = $this->gambarModel->deleteProd($gambar, $id);
            if ($delete) {
                unlink("data/images/product/" . $data->gambar);
            }
            redirect('admin/produk/detailproduct/' . $id);
        }
    }

    public function tambahGambar()
    {
        $id = $this->input->post('id');
        $this->load->model('gambarModel');

        $upload = $_FILES['gambar']['name'];
        if ($upload) {
            $total = sizeof($upload);
            $files = $_FILES['gambar'];
            $config['upload_path'] = './data/images/product/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf|docs';
            $config['max_size'] = '5500';
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
        redirect('admin/produk/detailproduct/' . $id);
    }

    public function jenis()
    {
        check_not_login();
        $this->load->model('jenisModel');
        $data = [
            'title' => 'Jenis Produk | Agriiku',
        ];
        $data['jenis'] = $this->jenisModel->getJenis();
        $this->load->view('admin/produk/jenisproduk', $data);
    }

    public function addJenis()
    {
        $this->load->model('jenisModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'jenis' => $this->input->post('jenis')
            );
            $this->jenisModel->addJenis($data);
        }
        redirect('admin/produk/jenis');
    }

    public function hapusJenis($id)
    {
        $this->load->model('jenisModel');

        if ($id != null) {
            $data = $this->db->get_where('jenis', ['id' => $id])->row();
            $delete = $this->jenisModel->deleteJenis($id);
            if ($delete) {
                unlink("data/images/product/" . $data->gambar);
            }

            redirect('admin/produk/jenis');
        }
    }

    public function editJenis()
    {
        $this->load->model('jenisModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenis_edit', 'jenis_edit', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'jenis' => $this->input->post('jenis_edit'),
                'status' => $this->input->post('status')
            );
            $this->jenisModel->updateJenis($data, $id);
        }
        redirect('admin/produk/jenis');
    }

    public function kategori()
    {
        check_not_login();
        $this->load->model('kategoriModel');
        $data = [
            'title' => 'Kategori Produk | Agriiku',
        ];
        $data['kategori'] = $this->kategoriModel->getKategori();
        $this->load->view('admin/produk/kategoriproduk', $data);
    }

    public function addKategori()
    {
        $this->load->model('kategoriModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'kategori' => $this->input->post('kategori')
            );
            $this->kategoriModel->addKategori($data);
        }
        redirect('admin/produk/kategori');
    }

    public function hapusKategori($id)
    {
        $this->load->model('kategoriModel');

        if ($id != null) {
            $data = $this->db->get_where('kategori', ['id' => $id])->row();
            $delete = $this->kategoriModel->deleteKategori($id);
            if ($delete) {
                unlink("data/images/product/" . $data->gambar);
            }

            redirect('admin/produk/kategori');
        }
    }

    public function editKategori()
    {
        $this->load->model('kategoriModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kategori_edit', 'kategori_edit', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'kategori' => $this->input->post('kategori_edit'),
                'status' => $this->input->post('status')
            );
            $this->kategoriModel->updateKategori($data, $id);
        }
        redirect('admin/produk/kategori');
    }
}
