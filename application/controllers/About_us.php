<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function index()
    {
        $this->load->model('aboutModel');
        $data = [
            'title' => 'Agrii-ku | About us',
        ];
        $data['about'] = $this->aboutModel->getAbout();
        $this->load->view('users/about-us', $data);
    }
}
