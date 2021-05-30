<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Perencanaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function ajukan_perencanaan()
    {
        $data = [
            'Status' => 'Belum Disetujui'
        ];
        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan2'));
        $this->db->update('perencanaan_pengadaan', $data);
        $this->session->set_flashdata('flash', 'diajukan');
        redirect('bendahara/perencanaan');
    }

    public function hapus_perencanaan()
    {
        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->delete('perencanaan_pengadaan');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('bendahara/perencanaan');
    }
}
