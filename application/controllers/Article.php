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
        $config['base_url'] = 'http://localhost/agrii-ku/article/index';
        $config['total_rows'] = $this->artikel->countArticle();
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);

        $data = [
            'title' => 'Agrii-ku | Artikel',
        ];
        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->artikel->getArticles($config['per_page'], $data['start']);
        $this->load->view('users/artikel', $data);
    }
}
