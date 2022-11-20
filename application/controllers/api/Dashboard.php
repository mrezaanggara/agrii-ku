<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Dashboard extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('carouselModel', 'carousel');
        $this->load->model('kategoriModel', 'kategori');
        $this->load->model('jenisModel', 'jenis');
        // $this->load->model('mitraModel', 'mitra');
    }

    public function carousel_get()
    {
        $carousel = $this->carousel->getCarousel();
        foreach ($carousel as $value) {
            $data[] = [
                'carousel' => $value['carousel']
            ];
        }

        if ($data) {
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

    public function kategori_get()
    {
        $kategori = $this->kategori->getKategori();
        foreach ($kategori as $value) {
            if ($value['status'] == 1) {
                $data[] = [
                    'id' => $value['id'],
                    'kategori' => $value['kategori'],
                    'status' => $value['status'],
                ];
            }
        }

        if ($data) {
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

    public function jenis_get()
    {
        $jenis = $this->jenis->getJenis();
        foreach ($jenis as $value) {
            if ($value['status'] == 1) {
                $data[] = [
                    'id' => $value['id'],
                    'jenis' => $value['jenis'],
                    'status' => $value['status'],
                ];
            }
        }

        if ($data) {
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

    public function mitra_get()
    {
        $mitra = $this->mitra->getMitra();

        if ($mitra) {
            $this->response([
                'status' => true,
                'data' => $mitra
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No data were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
