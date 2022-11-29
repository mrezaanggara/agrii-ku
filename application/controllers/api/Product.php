<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Product extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produkModel', 'produk');
        $this->load->model('gambarModel', 'gambar');
        $this->load->model('jenisModel', 'jenis');
        $this->load->model('kategoriModel', 'kategori');
    }

    public function newProduct_get()
    {
        $newProduct = $this->produk->newProduct();
        foreach ($newProduct as $value) {
            $data[] = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'harga' => rupiah($value['harga']),
                'kategori' => $value['kategori'],
                'stok' => $value['stok'],
                'maingambar' => $value['gambar'],
            ];
        }

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function mostViewProduct_get()
    {
        $Product = $this->produk->mostViewProduct();
        foreach ($Product as $value) {
            $data[] = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'harga' => rupiah($value['harga']),
                'kategori' => $value['kategori'],
                'stok' => $value['stok'],
                'maingambar' => $value['gambar'],
            ];
        }

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function semuaproduk_get()
    {
        $pages = $this->get('pages');
        $row_per_pages = $this->get('limit');
        $begin = ($pages * $row_per_pages) - $row_per_pages;
        $produk = $this->produk->Products($begin, $row_per_pages);

        foreach ($produk as $value) {
            $data[] = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'harga' => rupiah($value['harga']),
                'kategori' => $value['kategori'],
                'stok' => $value['stok'],
                'maingambar' => $value['gambar'],
            ];
        }

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function detailProduct_get()
    {
        $id = $this->get('id');
        $produk = $this->produk->getProduct($id);
        $gambar = $this->gambar->getDataGambar($id);
        $this->produk->update_counter($id);
        foreach ($produk as $value) {
            $data = [
                'id' => $value['id'],
                'nama' => $value['nama'],
                'visitor' => $value['visitor'],
                'harga' => $value['harga'],
                'jenis' => $value['jenis'],
                'kategori' => $value['kategori'],
                'stok' => $value['stok'],
                'status' => $value['status'],
                'berat' => $value['berat'],
                'deskripsi' => $value['deskripsi'],
                'video' => $value['video'],
                'gambar' => $gambar,
                'panjang' => $value['panjang'],
                'lebar' => $value['lebar'],
                'tinggi' => $value['tinggi'],
            ];
        }

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function updateStock_put()
    {
        $id = $this->put('id');
        $data = [
            'stok' => $this->put('stok'),
        ];

        if ($this->produk->updateProduct($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'data was update'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data was not update'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function reverseStock_put()
    {
        $id = $this->put('id');
        $stok = $this->produk->getStok($id)->stok;
        $data = [
            'stok' => $this->put('stok') + $stok,
        ];

        if ($this->produk->updateProduct($data, $id) > 0) {
            $this->response([
                'status' => true,
                'data' => $data,
                'message' => 'data was update'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data was not update'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
