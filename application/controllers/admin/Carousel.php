<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data = [
            'title' => 'Carousel | Agrii-ku',
        ];
        $this->load->view('admin/carousel/listcarousel', $data);
    }
}
