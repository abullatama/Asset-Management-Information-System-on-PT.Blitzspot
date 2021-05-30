<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_System extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'Admin_System') {
            $data['pengguna'] = $this->m_pengguna->tampil_data_pengguna1();
            $this->load->view('admin_system/index', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function pengguna()
    {
        if ($this->session->userdata('level') == 'Admin_System') {
            $data['pengguna'] = $this->m_pengguna->tampil_data_pengguna()->result();
            $this->load->view('admin_system/data_pengguna', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pengguna()
    {
        if ($this->session->userdata('level') == 'Admin_System') {
            $this->load->view('admin_system/tambah_data_pengguna');
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pengguna_p()
    {
        if ($this->session->userdata('level') == 'Admin_System') {
            $this->m_pengguna->tambah_data_pengguna();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin_system/pengguna');
        } else {
            $this->load->view('errors/404');
        }
    }
}
