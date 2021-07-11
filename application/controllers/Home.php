<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('layouts/index');
		$this->load->view('layouts/footer');
	}
	public function data_wisata()
	{
		$data['wisata'] = $this->M_wisata->allData();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('pages/data_wisata',$data);
		$this->load->view('layouts/footer');
	}
	public function tambah_data()
	{
		# Method Untuk menampilkan form tambah data
		$data['wisata'] = $this->M_wisata->allData();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('pages/tambah_data',$data);
		$this->load->view('layouts/footer');
	}
	public function proses_tambah_data()
	{
		# method tambah data ke database
		$this->M_wisata->proses_tambah_data();
		redirect('Home/data_wisata');
	}
}
