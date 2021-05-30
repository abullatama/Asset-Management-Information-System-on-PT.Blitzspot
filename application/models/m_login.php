<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_login extends CI_Model
{

    function proseslogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query1 = $this->db->get('pengguna')->row();
        return $query1;
    }
}
