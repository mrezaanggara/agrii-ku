<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login | Agrii-ku',
        ];
        check_already_login();
        $this->load->view('admin/login', $data);
    }
    public function auth()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model("usersModel");
            $query = $this->usersModel->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'nama' => $row->nama,
                );
                $this->session->set_userdata($params);
                echo "<script>
					alert('Selamat Datang, Login berhasil!');
					window.location='" . site_url('admin/dashboard') . "';
				</script>";
            } else {
                echo "<script>
					alert('Maaf, Username/Password yang anda masukkan salah/tidak terdaftar!');
					window.location='" . site_url('login') . "';
				</script>";
            }
        }
    }
    public function logout()
    {
        $params = array('id', 'nama');
        $this->session->unset_userdata($params);
        redirect('login');
    }
}
