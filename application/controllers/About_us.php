<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Agrii-ku | About us',
        ];
        $this->load->view('users/about-us', $data);
    }
}
