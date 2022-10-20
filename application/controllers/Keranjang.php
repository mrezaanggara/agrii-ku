<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Agrii-ku | Keranjang',
        ];
        $this->load->view('users/keranjang', $data);
    }

    public function add()
    {
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
        );

        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('keranjang');
    }
}
