<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

	public function komputer()
	{
		$data['title'] = 'Komputer Categories';
		$data['komputer'] = $this->model_kategori->komputer()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('komputer', $data);
		$this->load->view('layout/home/footer');
	}

	public function ponsel()
	{
		$data['title'] = 'Ponsel Categories';
		$data['ponsel'] = $this->model_kategori->ponsel()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('ponsel', $data);
		$this->load->view('layout/home/footer');
	}

	public function audio()
	{
		$data['title'] = 'Audio Categories';
		$data['audio'] = $this->model_kategori->audio()->result();
		$this->load->view('layout/home/header', $data);
		$this->load->view('audio', $data);
		$this->load->view('layout/home/footer');
	}
}
