<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('aboutModel');
        $data = [
            'title' => 'Edit About us | Agrii-ku',
        ];
        $data['about'] = $this->aboutModel->getAbout();
        $this->load->view('admin/aboutus', $data);
    }

    public function edit()
    {
        $this->load->model('aboutModel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('editor', 'editor', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'content' => str_replace('&nbsp;', ' ', $this->input->post('editor')),
            );
            $this->aboutModel->addAbout($data);
        }
        redirect('admin/aboutus');
    }
}
