<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teknisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'Teknisi') {
            $this->load->view('teknisi/index');
        } else {
            $this->load->view('errors/404');
        }
    }

    public function pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Teknisi') {
            $data['pemeliharaan'] = $this->m_pemeliharaan->tampil_data_pemeliharaan()->result();
            $this->load->view('teknisi/pemeliharaan/data_pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function tambah_data_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Teknisi') {
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('teknisi/pemeliharaan/tambah_data_pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function pengajuan()
    {
        if ($this->session->userdata('level') == 'Teknisi') {
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('teknisi/tambah_data_pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
}
