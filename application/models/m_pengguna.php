<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pengguna extends CI_Model
{
    function tampil_data_pengguna()
    {
        return $this->db->get('pengguna');
    }
    function tampil_data_pengguna1()
    {
        return $this->db->count_all_results('pengguna');
    }

    function tambah_data_pengguna()
    {
        $data = [
            'nama' => $this->input->post('nama_pengguna'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('jabatan'),
        ];
        $this->db->insert('pengguna', $data);
    }
    function ubah_data_pengguna()
    {
        $data = [
            'nama' => $this->input->post('nama_pengguna'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('jabatan'),
        ];
        $this->db->where('id_pengguna', $this->input->post('id_pengguna'));
        $this->db->update('pengguna', $data);
    }
    function hapus_data_pengguna()
    {
        $this->db->where('id_pengguna', $this->input->post('id_pengguna'));
        $this->db->delete('pengguna');
    }
}
