<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function index()
    {
        $this->load->model('artikelModel', 'artikel');

        //load library
        $this->load->library('pagination');

        //config
        $config['base_url'] = base_url('article/index');
        $config['total_rows'] = $this->artikel->countArticle();
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data = [
            'title' => 'Agriiku | Artikel',
        ];
        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->artikel->getArticles($config['per_page'], $data['start']);
        $this->load->view('users/artikel', $data);
    }

    public function detail($id)
    {
        $this->load->model('artikelModel', 'artikel');
        $data = [
            'title' => 'Agriiku | Artikel',
        ];
        $data['artikel'] = $this->artikel->getArticle($id);
        $this->load->view('users/detailartikel', $data);
    }

    public function mobile($id)
    {
        $this->load->model('artikelModel', 'artikel');
        $data = [
            'title' => 'Agriiku | Artikel',
        ];
        $data['artikel'] = $this->artikel->getArticle($id);
        $this->load->view('users/mobileartikel', $data);
    }
}
