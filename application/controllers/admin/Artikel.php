<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('artikelModel', 'artikel');
        $data = [
            'title' => 'Daftar Artikel | Agriiku',
        ];
        $data['artikel'] = $this->artikel->getArticle();
        $this->load->view('admin/artikel/listartikel', $data);
    }

    public function tambahArtikel()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('artikelModel', 'artikel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => str_replace('&nbsp;', ' ', $this->input->post('content')),
                'kategori' => $this->input->post('kategori'),
                'created_at' => (new DateTime('now'))->format('Y-m-d H:i:s')
            );
            $this->artikel->addArticle($data);
        }
        redirect('admin/artikel');
    }

    public function editArtikel($id = null)
    {
        if (!isset($id)) redirect('admin/artikel');

        $this->load->model('artikelModel', 'artikel');
        $data = [
            'title' => 'Edit Artikel | Agriiku',
        ];
        $data['artikel'] = $this->artikel->getArticle($id);
        $this->load->view('admin/artikel/editartikel', $data);
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('artikelModel', 'artikel');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'title' => $this->input->post('title'),
                'content' => str_replace('&nbsp;', ' ', $this->input->post('content')),
                'kategori' => $this->input->post('kategori'),
            );
            $this->artikel->updateArticle($data, $id);
        }
        redirect('admin/artikel');
    }
}
