<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $this->load->model('usersModel', 'users');
        $data = [
            'title' => 'Daftar Artikel | Agriiku',
        ];
        $data['users'] = $this->users->getUsers();
        $this->load->view('admin/users/listadmin', $data);
    }

    public function addUsers()
    {
        check_not_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('usersModel', 'users');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'role' => $this->input->post('role'),
                'created_at' => (new DateTime('now'))->format('Y-m-d')
            );
            $this->users->addUsers($data);
            redirect('admin/users');
        }

        $data = [
            'title' => 'Tambah Admin | Agriiku',
        ];
        $this->load->view('admin/users/tambahadmin', $data);
    }

    public function editUsers()
    {
        $this->load->model('usersModel', 'users');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');
        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'role' => $this->input->post('role'),
            );
            $this->sosmed->updateUsers($data, $id);
        }
        redirect('admin/users');
    }

    public function hapusUsers($id)
    {
        $this->load->model('usersModel', 'users');
        $this->users->deleteUsers($id);
        redirect('admin/users');
    }
}
