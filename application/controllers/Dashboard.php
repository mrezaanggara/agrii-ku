<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('carouselModel');
		$data = [
			'title' => 'Agrii-ku | Dashboard',
		];
		$data['carousel'] = $this->carouselModel->getCarousel();
		$this->load->view('users/dashboard', $data);
	}
}
