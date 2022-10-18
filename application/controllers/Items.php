<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Agrii-ku | Shop',
        ];
        $this->load->view('users/Produk', $data);
    }
}
