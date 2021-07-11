<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisata extends CI_Model {

    public function allData()
    {
        # Query Untuk Mengambil semua data didalam database
        return $this->db->get('wisata')->result_array();
    }
    public function proses_tambah_data()
    {
        # Query Untuk Mengirimkan data yang di inputkan ke dalam database
        $data = [

            "nama" => $this->input->post('nama',TRUE),
            "cord" => $this->input->post('cord',TRUE),
            "alamat" => $this->input->post('alamat',TRUE),
            "harga" => $this->input->post('harga',TRUE)
        ];
        $this->db->insert('wisata', $data);
    }
}