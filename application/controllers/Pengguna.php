<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function bendahara()
    {
        $this->load->view('bendahara/index');
    }
    public function ubah_data_pengguna()
    {
        $this->m_pengguna->ubah_data_pengguna();
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('admin_system/pengguna');
    }
    public function hapus_data_pengguna()
    {
        $this->m_pengguna->hapus_data_pengguna();
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin_system/pengguna');
    }
}
