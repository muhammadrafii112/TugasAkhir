<?php
class Dasbor extends CI_Controller{
    public function index()
    {
        $data['barang']= $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dasbor', $data);
        $this->load->view('templates/footer');
    }
}


?>