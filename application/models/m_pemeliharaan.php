<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pemeliharaan extends CI_Model
{
    function tampil_data_pemeliharaan()
    {
        $this->db->select('*');
        $this->db->from('pemeliharaan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pemeliharaan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        return $this->db->get();
    }

    function tampil_data_pemeliharaan1()
    {
        $this->db->select('*');
        $this->db->from('pemeliharaan');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=pemeliharaan.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        if ($this->input->post("kondisi") <> "") {
            $this->db->where('pemeliharaan.kondisi_pemeliharaan', $this->input->post("kondisi"));
        }
        $this->db->where('pemeliharaan.tanggal_pemeliharaan >=', $this->input->post("tanggal_awal"));
        $this->db->where('pemeliharaan.tanggal_pemeliharaan <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function tambah_data_pemeliharaan()
    {
        $this->db->select('RIGHT(pemeliharaan.no_pemeliharaan,2) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pemeliharaan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('Y');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "PM" . $tgl . $batas;  //format kode
        $data = [
            'no_pemeliharaan' => $kodetampil,
            'no_aset' => $this->input->post('no_aset'),
            'tanggal_pemeliharaan' => $this->input->post('tanggal'),
            'kondisi_pemeliharaan' => $this->input->post('kondisi'),
            'biaya' => $this->input->post('biaya'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->insert('pemeliharaan', $data);
    }

    function ubah_data_pemeliharaan()
    {
        $data = [
            'no_aset' => $this->input->post('no_aset'),
            'tanggal_pemeliharaan' => $this->input->post('tanggal'),
            'kondisi_pemeliharaan' => $this->input->post('kondisi'),
            'biaya' => $this->input->post('biaya'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->where('no_pemeliharaan', $this->input->post('no_pemeliharaan'));
        $this->db->update('pemeliharaan', $data);
    }
}
