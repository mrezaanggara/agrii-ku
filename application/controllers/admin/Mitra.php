<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('mitraModel');
        $data = [
            'title' => 'Mitra | Agrii-ku',
        ];
        $data['mitra'] = $this->mitraModel->getMitra();
        $this->load->view('admin/mitra', $data);
    }

    public function tambahMitra()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('mitraModel');

        $upload = $_FILES['mitra']['name'];
        if ($upload) {
            $total = sizeof($upload);
            $files = $_FILES['mitra'];
            $config['upload_path'] = './data/images/mitra/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '5500';
            $this->load->library('upload', $config);

            for ($i = 0; $i < $total; $i++) {
                $_FILES['mitra']['name'] = $files['name'][$i];
                $_FILES['mitra']['type'] = $files['type'][$i];
                $_FILES['mitra']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['mitra']['error'] = $files['error'][$i];
                $_FILES['mitra']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('mitra')) {
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];
                    $insert[$i]['mitra'] = $imageName;
                    $insert[$i]['created_at'] = (new DateTime('now'))->format('Y-m-d H:i:s');
                }
            }
            $this->mitraModel->addMitra($insert, $data['file_name']);
        }
        redirect('admin/mitra/');
    }

    public function hapus($id)
    {
        $this->load->model('mitraModel');

        if ($id != null) {
            $data = $this->db->get_where('mitra', ['id' => $id])->row();
            $delete = $this->mitraModel->delete($id);
            if ($delete) {
                unlink("data/images/mitra/" . $data->mitra);
            }
            redirect('admin/mitra/');
        }
    }
}
