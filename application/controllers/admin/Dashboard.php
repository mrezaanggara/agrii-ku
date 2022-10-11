<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data = [
            'title' => 'Dashboard Admin | Agrii-ku',
        ];
        $this->load->view('admin/dashboard', $data);
    }
}
