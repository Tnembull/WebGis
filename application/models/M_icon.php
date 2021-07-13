<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_icon extends CI_Model {

    public function allData()
    {
        # Query Untuk Mengambil semua data didalam database
        return $this->db->get('icons')->result_array();
    }
    public function hapus_icon($id)
    {
        # Query Untuk Menghapus Data yang di pilih sesuai id dari database
        $this->db->where('id_icon', $id);
        $this->db->delete('icons');
    }
    public function ambil_id_icon($id)
    {
        # Query Untuk Mengupdate Data yang di pilih sesuai id dari database
        return $this->db->get_where('icons',['id_icon' => $id])->row_array();
    }

    public function proses_edit_icon()
    {
        # Query Untuk Mengubah data yang di dipilh sesuai id dari database
        $data = [
            "id_icon" => $this->input->post('id_icon',True),
            "nama_icon" => $this->input->post('nama', TRUE),
            
        ];
        $this->db->where('id_icon',$this->input->post('id_icon'));
        $this->db->update('icons', $data);
    }

}