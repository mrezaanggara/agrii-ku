<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/listproduk', $data);
    }

    public function addProduct()
    {
        $data = [
            'title' => 'Tambah Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/tambahproduk', $data);
    }
}
