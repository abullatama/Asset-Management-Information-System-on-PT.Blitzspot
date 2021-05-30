<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mutasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function tambah_data_mutasi()
    {
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            redirect('sekretaris/tambah_data_mutasi');
        } else {
            $this->m_mutasi->tambahDataMutasi();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('sekretaris/mutasi');
        }
    }

    public function ubah_data_mutasi()
    {
        $this->form_validation->set_rules('perangkat1', 'Perangkat', 'required');

        if ($this->form_validation->run() == false) {
            redirect('sekretaris/ubah_detail_mutasi');
        } else {
            $this->m_mutasi->ubahDataMutasi();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('sekretaris/mutasi');
        }
    }

    public function ubah_data_mutasi2()
    {
        $this->m_mutasi->ubah_data_mutasi();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('sekretaris/mutasi');
    }

    public function verifikasi_mutasi()
    {
        $this->m_mutasi->verifikasi_mutasi();
        $this->session->set_flashdata('flash', 'diubah');
        redirect('sekretaris/mutasi');
    }
    public function detail_mutasi()
    {
        if ($this->session->userdata('level') == 'Sekretaris') {
            $id = $this->uri->segment(3);
            $data['detail'] = $this->m_mutasi->tampil_detail_perangkat($id)->result();
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('sekretaris/mutasi/detail_mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
}
