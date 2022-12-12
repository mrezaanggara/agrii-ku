<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('carouselModel');
        $data = [
            'title' => 'Carousel | Agriiku',
        ];
        $data['carousel'] = $this->carouselModel->getCarousel();
        $this->load->view('admin/carousel/listcarousel', $data);
    }

    public function tambahCarousel()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('carouselModel');

        $upload = $_FILES['carousel']['name'];
        if ($upload) {
            $total = sizeof($upload);
            $files = $_FILES['carousel'];
            $config['upload_path'] = './data/images/carousel/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '5500';
            $this->load->library('upload', $config);

            for ($i = 0; $i < $total; $i++) {
                $_FILES['carousel']['name'] = $files['name'][$i];
                $_FILES['carousel']['type'] = $files['type'][$i];
                $_FILES['carousel']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['carousel']['error'] = $files['error'][$i];
                $_FILES['carousel']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('carousel')) {
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];
                    $insert[$i]['carousel'] = $imageName;
                    $insert[$i]['created_at'] = (new DateTime('now'))->format('Y-m-d H:i:s');
                }
            }
            $this->carouselModel->addCarousel($insert, $data['file_name']);
        }
        redirect('admin/carousel/');
    }

    public function hapus($id)
    {
        $this->load->model('carouselModel');

        if ($id != null) {
            $data = $this->db->get_where('carousel', ['id' => $id])->row();
            $delete = $this->carouselModel->delete($id);
            if ($delete) {
                unlink("data/images/carousel/" . $data->carousel);
            }
            redirect('admin/carousel/');
        }
    }
}
