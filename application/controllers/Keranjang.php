<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Agriiku | Keranjang',
        ];
        $this->load->view('users/keranjang', $data);
    }

    public function add()
    {
        $this->load->model('produkModel', 'produk');
        $stok = $this->produk->getStok($this->input->post('id'))->stok;
        $redirect_page = $this->input->post('redirect_page');
        $qty = $this->input->post('qty');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
        );

        $stokUp = $stok - $qty;
        $up = array(
            'stok' => $stokUp
        );
        $this->produk->updateProduct($up, $this->input->post('id'));
        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }

    public function delete($rowid, $id, $item)
    {
        $this->load->model('produkModel', 'produk');
        $stok = $this->produk->getStok($id)->stok;
        $up = array(
            'stok' => $stok + $item
        );
        $this->produk->updateProduct($up, $id);
        $this->cart->remove($rowid);
        redirect('keranjang');
    }
}
