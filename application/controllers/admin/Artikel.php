<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Artikel | Agrii-ku',
        ];
        $this->load->view('admin/artikel/listartikel', $data);
    }
}
