<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Aset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function tambah_data_aset()
    {
        if ($this->input->post('jenis_aset') == 'Tidak Habis Pakai') {
            $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
            $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('umur_ekonomis', 'Umur Ekonomis', 'required');
            $this->form_validation->set_rules('merek', 'Merek', 'required');
            $this->form_validation->set_rules('tipe', 'Tipe', 'required');
            $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
            if ($this->form_validation->run() == false) {
                redirect('Bendahara/tambah_data_aset');
            } else {
                $this->m_aset->tambah_aset_tidak_habis_pakai();
                $this->session->set_flashdata('aset', 'ditambahkan');
                redirect('Bendahara/DataAset');
            }
        } else {
            $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
            $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('kadaluwarsa', 'Kadaluwarsa', 'required');
            if ($this->form_validation->run() == false) {
                redirect('Bendahara/tambah_data_aset');
            } else {
                $this->m_aset->tambah_aset_habis_pakai();
                $this->session->set_flashdata('aset', 'ditambahkan');
                redirect('Bendahara/DataAset');
            }
        }
    }
    public function ubah_detail_aset()
    {
        $this->m_aset->ubah_detail_aset();
        $this->session->set_flashdata('aset', 'diubah');
        redirect('Bendahara/DataAset');
    }
    public function ubah_data_aset()
    {
        if ($this->input->post('jenis_aset') == 'Tidak Habis Pakai') {
            $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
            $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('penyusutan', 'Penyusutan', 'required|numeric');
            $this->form_validation->set_rules('merek', 'Merek', 'required');
            $this->form_validation->set_rules('tipe', 'Tipe', 'required');
            $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
            if ($this->form_validation->run() == false) {
                redirect('Bendahara/DataAset');
            } else {
                $this->m_aset->ubah_aset_tidak_habis_pakai();
                $this->session->set_flashdata('aset', 'diubah');
                redirect('Bendahara/DataAset');
            }
        } else {
            $this->form_validation->set_rules('nama_aset', 'Nama Aset', 'required');
            $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            if ($this->form_validation->run() == false) {
                redirect('Bendahara/DataAset');
            } else {
                $this->m_aset->ubah_aset_habis_pakai();
                $this->session->set_flashdata('aset', 'diubah');
                redirect('Bendahara/DataAset');
            }
        }
    }
    function hapus_data_aset()
    {
        if ($this->input->post('jenis_aset') == 'Tidak Habis Pakai') {
            $this->m_aset->hapus_data_aset();
            $this->session->set_flashdata('aset', 'dihapus');
            redirect('Bendahara/DataAset');
        } else {
            $this->db->where('no_aset', $this->input->post('no_aset'));
            $this->db->delete('aset_habis_pakai');
            $this->session->set_flashdata('aset', 'dihapus');
            redirect('Bendahara/DataAset');
        }
    }
}
