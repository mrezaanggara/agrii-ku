<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('aboutModel');
        $this->load->model('sosmedModel', 'sosmed');
        $data = [
            'title' => 'Edit About us | Agrii-ku',
        ];
        $data['about'] = $this->aboutModel->getAbout();
        $data['sosmed'] = $this->sosmed->getSosmed();
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

    public function addSosmed()
    {
        $this->load->model('sosmedModel', 'sosmed');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sosmed', 'sosmed', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama' => $this->input->post('sosmed'),
                'jenis' => $this->input->post('jenis'),
            );
            $this->sosmed->addSosmed($data);
        }
        redirect('admin/aboutus');
    }

    public function editSosmed()
    {
        $this->load->model('sosmedModel', 'sosmed');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis_edit', 'jenis_edit', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis_edit'),
            );
            $this->sosmed->updateSosmed($data, $id);
        }
        redirect('admin/aboutus');
    }

    public function hapusSosmed($id)
    {
        $this->load->model('sosmedModel', 'sosmed');
        $this->sosmed->deleteSosmed($id);
        redirect('admin/aboutus');
    }
}
