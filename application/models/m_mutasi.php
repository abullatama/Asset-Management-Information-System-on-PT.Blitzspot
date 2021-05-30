<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_mutasi extends CI_Model
{
    function tampil_data_mutasi()
    {
        return $this->db->get('mutasi');
    }
    function tampil_data_mutasi1()
    {
        if ($this->input->post("status") <> "") {
            $this->db->where('status', $this->input->post("status"));
        }
        if ($this->input->post("tanggal_awal") <> "") {
            $this->db->where('tanggal_keluar >=', $this->input->post("tanggal_awal"));
            $this->db->where('tanggal_keluar <=', $this->input->post("tanggal_akhir"));
        }
        if ($this->input->post("tanggal_awal1") <> "") {
            $this->db->where('tanggal_selesai >=', $this->input->post("tanggal_awal1"));
            $this->db->where('tanggal_selesai <=', $this->input->post("tanggal_akhir1"));
        }
        return $this->db->get('mutasi');
    }
    function tampil_detail_mutasi()
    {
        $this->db->select('*');
        $this->db->from('mutasi');
        $this->db->join('detail_mutasi', 'detail_mutasi.id_mutasi= mutasi.id_mutasi');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset= detail_mutasi.no_aset');
        $this->db->join('detail_aset', 'detail_aset.no_detail= aset_tidak_habis_pakai.no_detail');
        return $this->db->get();
    }
    function tampil_detail_mutasi1($id)
    {
        $this->db->select('*');
        $this->db->from('mutasi');
        $this->db->join('detail_mutasi', 'detail_mutasi.id_mutasi= mutasi.id_mutasi');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset= detail_mutasi.no_aset');
        $this->db->join('detail_aset', 'detail_aset.no_detail= aset_tidak_habis_pakai.no_detail');
        $this->db->where('mutasi.id_mutasi', $id);
        return $this->db->get();
    }
    function tampil_detail_perangkat($id)
    {
        $this->db->select('*');
        $this->db->from('mutasi');
        $this->db->where('mutasi.id_mutasi', $id);
        $this->db->join('detail_mutasi', 'detail_mutasi.id_mutasi= mutasi.id_mutasi');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset= detail_mutasi.no_aset');
        $this->db->join('detail_aset', 'detail_aset.no_detail= aset_tidak_habis_pakai.no_detail');
        return $this->db->get();
    }

    //maaf lierrrrrrrrrr
    function tambahDataMutasi()
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'alamat' => $this->input->post('alamat'),
            'status' => 'Aktif',
            'tanggal_keluar' => date('y-m-d')
        ];
        $this->db->insert('mutasi', $data);
        //mengambil id yang baru ditambahkan
        $insert_id = $this->db->insert_id();

        //verifikasi perangkat yang dimutasi
        $data = [
            'id_mutasi' => $insert_id,
            'no_aset' => $this->input->post('no_aset')
        ];
        $this->db->insert('detail_mutasi', $data);

        $data = [
            'lokasi' => 'Customer',
            'kondisi' => 'Baik'
        ];
        $this->db->where('no_aset', $this->input->post('no_aset'));
        $this->db->update('aset_tidak_habis_pakai', $data);
        //
        $this->db->from('detail_aset');
        $this->db->where('no_detail', $this->input->post('no_detail'));
        $detail = $this->db->get();
        foreach ($detail->result() as $a) {
            $stok = $a->stok - 1;
        }
        $data = [
            'stok' => $stok
        ];
        $this->db->where('no_detail', $this->input->post('no_detail'));
        $this->db->update('detail_aset', $data);
        //
        //
        if ($this->input->post('no_aset1') != '') {
            $data = [
                'id_mutasi' => $insert_id,
                'no_aset' => $this->input->post('no_aset1')
            ];
            $this->db->insert('detail_mutasi', $data);
            $data = [
                'lokasi' => 'Customer'
            ];
            $this->db->where('no_aset', $this->input->post('no_aset1'));
            $this->db->update('aset_tidak_habis_pakai', $data);

            $this->db->from('detail_aset');
            $this->db->where('no_detail', $this->input->post('no_detail1'));
            $detail1 = $this->db->get();
            foreach ($detail1->result() as $a1) {
                $stok =  $a1->stok - 1;
            }
            $data = [
                'stok' => $stok
            ];
            $this->db->where('no_detail', $this->input->post('no_detail1'));
            $this->db->update('detail_aset', $data);
        }
        if ($this->input->post('no_aset2') != '') {
            $data = [
                'id_mutasi' => $insert_id,
                'no_aset' => $this->input->post('no_aset2')
            ];
            $this->db->insert('detail_mutasi', $data);
            $data = [
                'lokasi' => 'Customer'
            ];
            $this->db->where('no_aset', $this->input->post('no_aset2'));
            $this->db->update('aset_tidak_habis_pakai', $data);

            $this->db->from('detail_aset');
            $this->db->where('no_detail', $this->input->post('no_detail2'));
            $detail2 = $this->db->get();
            foreach ($detail2->result() as $a) { }
            $stok = $a->stok - 1;
            $data = [
                'stok' => $stok
            ];
            $this->db->where('no_detail', $this->input->post('no_detail2'));
            $this->db->update('detail_aset', $data);
        }
        if ($this->input->post('no_aset3') != '') {
            $data = [
                'id_mutasi' => $insert_id,
                'no_aset' => $this->input->post('no_aset3')
            ];
            $this->db->insert('detail_mutasi', $data);
            $data = [
                'lokasi' => 'Customer'
            ];
            $this->db->where('no_aset', $this->input->post('no_aset3'));
            $this->db->update('aset_tidak_habis_pakai', $data);

            $this->db->from('detail_aset');
            $this->db->where('no_detail', $this->input->post('no_detail3'));
            $detail3 = $this->db->get();
            foreach ($detail3->result() as $a) { }
            $stok = $a->stok - 1;
            $data = [
                'stok' => $stok
            ];
            $this->db->where('no_detail', $this->input->post('no_detail3'));
            $this->db->update('detail_aset', $data);
        }
    }

    function ubahDataMutasi()
    {
        $data = [
            'lokasi' => 'Gudang'
        ];
        $this->db->where('no_aset', $this->input->post('no_aset1'));
        $this->db->update('aset_tidak_habis_pakai', $data);

        $data = [
            'no_aset' => $this->input->post('no_aset')
        ];
        $this->db->where('id_detail_mutasi', $this->input->post('id_detail_mutasi'));
        $this->db->update('detail_mutasi', $data);

        $data = [
            'lokasi' => 'Customer'
        ];
        $this->db->where('no_aset', $this->input->post('no_aset'));
        $this->db->update('aset_tidak_habis_pakai', $data);
    }

    function ubah_data_mutasi()
    {
        $data = [
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'alamat' => $this->input->post('alamat'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
        ];
        $this->db->where('id_mutasi', $this->input->post('id_mutasi'));
        $this->db->update('mutasi', $data);
    }
    function verifikasi_mutasi()
    {
        $data = [
            'status' => 'Selesai',
            'tanggal_selesai' => date('y-m-d')
        ];
        $this->db->where('id_mutasi', $this->input->post('id_mutasi'));
        $this->db->update('mutasi', $data);

        $this->db->select('*');
        $this->db->from('mutasi');
        $this->db->join('detail_mutasi', 'detail_mutasi.id_mutasi= mutasi.id_mutasi');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset= detail_mutasi.no_aset');
        $this->db->where('detail_mutasi.id_mutasi', $this->input->post('id_mutasi'));
        $query = $this->db->get()->result();

        foreach ($query as $a) {
            $data = [
                'lokasi' => 'Gudang',
            ];
            $this->db->where('no_aset', $a->no_aset);
            $this->db->update('aset_tidak_habis_pakai', $data);

            $this->db->from('detail_aset');
            $this->db->join('aset_tidak_habis_pakai', 'detail_aset.no_detail = aset_tidak_habis_pakai.no_detail');
            $this->db->where('detail_aset.no_detail', $a->no_detail);
            $query = $this->db->get();
            foreach ($query->result() as $i) {
                $stok = $i->stok + 1;
            }
            $data = [
                'stok' => $stok
            ];
            $this->db->where('no_detail', $a->no_detail);
            $this->db->update('detail_aset', $data);
            //$this->db->where('no_aset', $a->no_aset);
            //$this->db->delete('detail_mutasi');
        }
    }
}
