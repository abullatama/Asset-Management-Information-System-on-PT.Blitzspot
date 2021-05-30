<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pengaduan extends CI_Model
{
    function tampil_data_pengaduan()
    {
        $this->db->from('pengaduan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pengaduan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $this->db->join('pengguna', 'pengguna.id_pengguna=pengaduan.id_pengguna');
        return $this->db->get();
    }
    function tampil_pengaduan1()
    {
        $this->db->from('pengaduan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pengaduan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $this->db->join('pengguna', 'pengguna.id_pengguna=pengaduan.id_pengguna');
        $this->db->where('pengaduan.id_pengguna', $this->session->userdata('id_pengguna'));
        return $this->db->count_all_results();
    }
    function tampil_pengaduan()
    {
        $this->db->from('pengaduan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pengaduan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $this->db->join('pengguna', 'pengguna.id_pengguna=pengaduan.id_pengguna');
        $this->db->where('pengaduan.tanggal', date('y-m-d'));
        return $this->db->count_all_results();
    }
    function tampil_data_pengaduan1()
    {
        $this->db->from('pengaduan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pengaduan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $this->db->join('pengguna', 'pengguna.id_pengguna=pengaduan.id_pengguna');
        if ($this->input->post("nama_aset") <> "") {
            $this->db->where('detail_aset.nama_aset', $this->input->post("nama_aset"));
        }
        $this->db->where('pengaduan.tanggal >=', $this->input->post("tanggal_awal"));
        $this->db->where('pengaduan.tanggal <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function tambah_data_pengaduan()
    {
        $this->db->select('RIGHT(pengaduan.id_pengaduan,2) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengaduan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('Y');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "PD" . $tgl . $batas;  //format kode
        $data = [
            'id_pengaduan' => $kodetampil,
            'id_pengguna' => $this->session->userdata('id_pengguna'),
            'no_aset' => $this->input->post('no_aset'),
            'keterangan' => $this->input->post('keterangan'),
            'info' => $this->upload->data('file_name'),
            'tanggal' => date('y-m-d')
        ];
        $this->db->insert('pengaduan', $data);
    }
}
