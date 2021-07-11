<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisata extends CI_Model {

    public function allData()
    {
        # Query Untuk Mengambil semua data didalam database
        return $this->db->get('wisata')->result_array();
    }

}