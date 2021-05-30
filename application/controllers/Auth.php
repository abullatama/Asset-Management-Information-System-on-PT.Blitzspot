<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
        if ($pengguna) {
            //jika user ada
            if ($password == $pengguna['password']) {
                $data = [
                    'id_pengguna' => $pengguna['id_pengguna'],
                    'nama' => $pengguna['nama'],
                    'username' => $pengguna['username'],
                    'level' => $pengguna['level'],
                    'login' => true
                ];
                $this->session->set_userdata($data);
                if ($this->session->userdata('level') == 'Bendahara') {
                    redirect('bendahara');
                } elseif ($this->session->userdata('level') == 'Direktur') {
                    redirect('direktur');
                } elseif ($this->session->userdata('level') == 'Sekretaris') {
                    redirect('sekretaris');
                } elseif ($this->session->userdata('level') == 'Teknisi') {
                    redirect('teknisi');
                } elseif ($this->session->userdata('level') == 'Staff') {
                    redirect('staff');
                } elseif ($this->session->userdata('level') == 'Admin_System') {
                    redirect('admin_system');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role"alert"> <b>Password</b> Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role"alert"> <b>Username</b> Belum Terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role"alert"> Anda telah berhasil logout! </div>');
        redirect('auth');
    }
}
