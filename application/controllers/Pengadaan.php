<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengadaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function verifikasi_pengadaan()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengadaan');
        } else {
            $data = [
                'no_aset' => $this->input->post('nama_aset'),
                'nama_aset' => $this->input->post('nama_aset'),
                'merek' => $this->input->post('merek'),
                'tipe' => $this->input->post('tipe'),
                'spesifikasi' => $this->input->post('spesifikasi'),
            ];
            $this->session->set_userdata($data);
            $this->m_pengadaan->verifikasi_pengadaan();
            $this->session->set_flashdata('verifikasi', 'ditambahkan');
            redirect('Bendahara/pengadaan');
        }
    }

    public function verifikasi_pengadaan2()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengadaan');
        } else {
            $this->m_pengadaan->verifikasi_pengadaan2();
            $this->session->set_flashdata('verifikasi', 'ditambahkan');
            redirect('Bendahara/pengadaan');
        }
    }

    public function tambah_data_pengadaan()
    {
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengadaan/tambah_data_pengadaan');
        } else {
            $this->m_pengadaan->tambahDataPengadaan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Bendahara/perencanaan');
        }
    }

    public function tambah_data_pengadaan_from_pengajuan()
    {
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengadaan/tambah_data_pengadaan');
        } else {
            $this->m_pengadaan->tambahDataPengadaanPengajuan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Bendahara/perencanaan');
        }
    }

    public function ubah_data_pengadaan()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengadaan');
        } else {
            $this->m_pengadaan->ubahDataPengadaan();
            $this->session->set_flashdata('ubah', 'diubah');
            redirect('Bendahara/perencanaan');
        }
    }
    public function tambah_data_pengadaan_habis_pakai()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengadaan/tambah_data_pengadaan');
        } else {
            $this->m_pengadaan->tambahDataPengadaanHabisPakai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Bendahara/perencanaan');
        }
    }
    public function ubah_data_pengadaan_habis_pakai()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengadaan');
        } else {
            $this->m_pengadaan->ubahDataPengadaanHabisPakai();
            $this->session->set_flashdata('ubah', 'diubah');
            redirect('Bendahara/pengadaan');
        }
    }
    public function persetujuan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $submit = $this->input->post('persetujuan');
            if ($submit == 'setuju') {
                $this->m_pengadaan->setujui_pengadaan();
                $this->session->set_flashdata('setuju', 'disetujui');
                redirect('direktur/persetujuan');
            } else if ($submit == 'tolak') {
                $this->m_pengadaan->tolak_pengadaan();
                $this->session->set_flashdata('tolak', 'ditolak');
                redirect('direktur/persetujuan');
            }
        } else {
            $this->load->view('errors/404');
        }
    }
}
