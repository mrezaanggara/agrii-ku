<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function index()
    {
        $this->load->model('aboutModel');
        $this->load->model('sosmedModel', 'sosmed');
        $data = [
            'title' => 'Agriiku | About us',
        ];
        $data['about'] = $this->aboutModel->getAbout();
        $data['sosmed'] = $this->sosmed->getSosmed();
        $this->load->view('users/about-us', $data);
    }

    public function mobile()
    {
        $this->load->model('aboutModel', 'about');
        $data = [
            'title' => 'Agriiku | About',
        ];
        $data['about'] = $this->about->getAbout();
        $this->load->view('users/mobileaboutus', $data);
    }
}
