<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Agrii-ku',
		];
		$this->load->view('splashscreen', $data);
	}

	public function home()
	{
		$this->load->model('carouselModel', 'carousel');
		$this->load->model('jenisModel', 'jenis');
		$this->load->model('kategoriModel', 'kategori');
		$this->load->model('produkModel', 'produk');
		$data = [
			'title' => 'Agrii-ku | Dashboard',
		];
		$data['carousel'] = $this->carousel->getCarousel();
		$data['jenis'] = $this->jenis->getJenis();
		$data['kategori'] = $this->kategori->getKategori();
		$data['produk'] = $this->produk->newProduct();
		$data['dilihat'] = $this->produk->mostViewProduct();
		$this->load->view('users/dashboard', $data);
	}
}
