<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pemeliharaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function tambah_data_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $this->m_pemeliharaan->tambah_data_pemeliharaan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('bendahara/pemeliharaan');
        } else {
            $this->load->view('errors/404');
        }
    }

    public function ubah_data_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Teknisi') {
            $this->m_pemeliharaan->ubah_data_pemeliharaan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('teknisi/pemeliharaan');
        } else {
            $this->load->view('errors/404');
        }
    }
}
