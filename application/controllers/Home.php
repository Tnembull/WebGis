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
		$this->load->view('datawisata',$data);
		$this->load->view('layouts/footer');
	}
}
