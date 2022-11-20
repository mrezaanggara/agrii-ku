<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Article extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikelModel', 'artikel');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $artikel = $this->artikel->getArticle();
        } else {
            $artikel = $this->artikel->getArticle($id);
        }

        if ($artikel) {
            $this->response([
                'status' => true,
                'data' => $artikel
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
