<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data = [
            'title' => 'Edit About us | Agrii-ku',
        ];
        $this->load->view('admin/aboutus', $data);
    }
}
