<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Agriiku',
		];
		$this->load->view('splashscreen', $data);
	}

	public function home()
	{
		$this->load->model('carouselModel', 'carousel');
		$this->load->model('jenisModel', 'jenis');
		$this->load->model('kategoriModel', 'kategori');
		$this->load->model('produkModel', 'produk');
		$this->load->model('mitraModel', 'mitra');
		$data = [
			'title' => 'Agriiku | Dashboard',
		];
		$data['carousel'] = $this->carousel->getCarousel();
		$data['jenis'] = $this->jenis->getJenis();
		$data['kategori'] = $this->kategori->getKategori();
		$data['produk'] = $this->produk->newProduct();
		$data['dilihat'] = $this->produk->mostViewProduct();
		$data['mitra'] = $this->mitra->getMitra();
		$this->load->view('users/dashboard', $data);
	}
}
