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

    public function detailProduct()
    {
        $data = [
            'title' => 'Detail Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/detailproduk', $data);
    }

    public function kategori()
    {
        $data = [
            'title' => 'Katrgori Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/kategoriproduk', $data);
    }

    public function jenis()
    {
        $data = [
            'title' => 'Jenis Produk | Agrii-ku',
        ];
        $this->load->view('admin/produk/jenisproduk', $data);
    }
}
