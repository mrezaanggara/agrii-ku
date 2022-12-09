<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Article extends REST_Controller
{
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('artikelModel', 'artikel');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $artikel = $this->artikel->getArticle();
            foreach ($artikel as $value) {
                $data[] = [
                    'id' => $value['id'],
                    'title' => $value['title'],
                    'tanggal' => formatTanggal($value['created_at']),
                ];
            }
        } else {
            $artikel = $this->artikel->getArticle($id);
            foreach ($artikel as $value) {
                $data = [
                    'id' => $value['id'],
                    'title' => $value['title'],
                    'content' => $value['content'],
                    'tanggal' => formatTanggal($value['created_at']),
                ];
            }
        }

        if ($artikel) {
            $this->response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
