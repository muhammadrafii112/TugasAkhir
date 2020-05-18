<?php
class Data_barang extends CI_Controller{
    public function index()
    {
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang',$data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nm_bg      = $this->input->post('nm_bg');
        $kt_brg     = $this->input->post('kt_brg');
        $ktgr_bg    = $this->input->post('ktgr_bg');
        $hrg_brg    = $this->input->post('hrg_brg');
        $stok       = $this->input->post('stok');
        $gmbr_bg    = $_FILES['gmbr_bg']['name'];
        if($gmbr_bg=''){}else
        {
            $config['upload_path']='/uploads';
            $config['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('gmbr_bg'))
            {
                echo "gambar gagal upload";
            }
            else
            {
                $gmbr_bg=$this->upload->data('file_name');
            }
        }
        $data = array
        (
            'nm_bg'     => $nm_bg,
            'kt_brg'    =>$kt_brg,
            'ktgr_bg'   =>$ktgr_bg,
            'hrg_brg'   =>$hrg_brg,
            'stok'      =>$stok,
            'gmbr_bg'   =>$gmbr_bg
        );
        $this->model_barang->tambah_barang($data,'tb_barang');
        redirect('admin/data_barang/index');
    }
}
?>