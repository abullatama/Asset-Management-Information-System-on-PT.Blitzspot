<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function verifikasi_pengajuan()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengajuan');
        } else {
            //$detail = 1;
            //$tgl1 = date('y-m-d');
            //$tgl2 = date('Y-m-d', strtotime('+' . $detail . 'years,-1 days', strtotime($tgl1)));
            //echo $tgl2;
            $this->m_pengajuan->verifikasi_pengajuan();
            $this->session->set_flashdata('verifikasi', 'ditambahkan');
            redirect('Bendahara/pengajuan');
        }
    }

    public function verifikasi_pengajuan2()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');

        if ($this->form_validation->run() == false) {
            redirect('Bendahara/pengajuan');
        } else {
            $this->m_pengajuan->verifikasi_pengajuan2();
            $this->session->set_flashdata('verifikasi', 'ditambahkan');
            redirect('Bendahara/pengajuan');
        }
    }

    public function tambah_data_pengajuan()
    {
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('sekretaris/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Sekretaris/pengajuan');
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
            redirect('Bendahara/pengadaan');
        }
    }
    public function tambah_data_pengajuan_habis_pakai()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('sekretaris/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuanHabisPakai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Sekretaris/pengajuan');
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
                $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
                $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
                $this->m_pengajuan->setujui_pengajuan();
                $this->session->set_flashdata('setuju', 'disetujui');
                redirect('direktur/persetujuan_pengajuan');
            } else if ($submit == 'tolak') {
                $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
                $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
                $this->m_pengajuan->tolak_pengajuan();
                $this->session->set_flashdata('tolak', 'ditolak');
                redirect('direktur/persetujuan_pengajuan');
            }
        } else {
            $this->load->view('errors/404');
        }
    }
}
