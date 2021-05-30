<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function tambah_data_pengaduan()
    {
        $config['upload_path']          = './images/pengaduan/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = 'keluhan-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('info')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('sekretaris/tambah_data_pengaduan');
        } else {
            $this->m_pengaduan->tambah_data_pengaduan();
            redirect('sekretaris/pengaduan');
        }
    }
}
