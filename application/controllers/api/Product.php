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

    public function allProduct_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $produk = $this->produk->getProduct();
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
        } else {
            $produk = $this->produk->getProduct($id);
            $gambar = $this->gambar->getDataGambar($id);
            foreach ($produk as $value) {
                $data = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
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
}