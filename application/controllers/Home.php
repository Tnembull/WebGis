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
	public function maps()
	{
		$data['wisata'] = $this->M_wisata->allData();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/topbar');
		$this->load->view('pages/maps',$data);
		$this->load->view('layouts/footer');
	}
	public function proses_tambah_data()
	{
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')){
                echo "Gagal Tambah";
            }else{
                $gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$alamat = $this->input->post('alamat',TRUE);
				$harga = $this->input->post('harga',TRUE);

				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'alamat' => $alamat,
					'harga' => $harga,
					'gambar' => $gambar,
				);
				$this->db->insert('wisata', $data);
				redirect('Home/data_wisata');
            }
		# method tambah data ke database
		// $this->M_wisata->proses_tambah_data();
		// redirect('Home/data_wisata');
	}

	public function proses_edit_data()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile')){
                $nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$alamat = $this->input->post('alamat',TRUE);
				$harga = $this->input->post('harga',TRUE);
				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'alamat' => $alamat,
					'harga' => $harga,
				);
				$this->db->where('id',$id);
				$this->db->update('wisata', $data);
				redirect('Home/data_wisata');

            }else{
                $gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$nama = $this->input->post('nama',TRUE);
				$cord = $this->input->post('cord',TRUE);
				$alamat = $this->input->post('alamat',TRUE);
				$harga = $this->input->post('harga',TRUE);
				$data = array(
					'nama' => $nama,
					'cord' => $cord,
					'alamat' => $alamat,
					'harga' => $harga,
					'gambar' => $gambar,
				);
				$this->db->where('id',$id);
				$this->db->update('wisata', $data);
				redirect('Home/data_wisata');
            }
		# method tambah data ke database
		// $this->M_wisata->proses_edit_data();
		// redirect('Home/data_wisata');
	}


	public function hapus_data($id)
	{
		# method menghapus data dari database
		$this->M_wisata->hapus_data($id);
		redirect('Home/data_wisata');
	}
}
