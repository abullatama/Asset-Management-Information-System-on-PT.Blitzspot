<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_aset extends CI_Model
{

    function tampil_data_aset_tidak_habis_pakai()
    {
        $this->db->select('*');
        $this->db->from('detail_aset');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $this->db->join('penyusutan', 'penyusutan.no_aset=aset_tidak_habis_pakai.no_aset');
        return $this->db->get();
    }
    function tampil_tmp()
    {
        $this->db->select('*');
        $this->db->from('tmp');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_aset=tmp.no_aset');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        return $this->db->get();
    }
    function total_nilai()
    {
        $this->db->select_sum('akumulasi_nilai');
        return $this->db->get('detail_aset');
    }

    function total_stok()
    {
        $this->db->select_sum('stok');
        return $this->db->get('detail_aset');
    }

    function total_mutasi()
    {
        $this->db->where('lokasi', 'customer');
        return $this->db->count_all_results('aset_tidak_habis_pakai');
    }

    function total_gudang()
    {
        $this->db->where('lokasi', 'gudang');
        return $this->db->count_all_results('aset_tidak_habis_pakai');
    }

    function tampil_data_aset_habis_pakai()
    {
        return $this->db->get('aset_habis_pakai');
    }
    function ubah_detail_aset()
    {
        $data = [
            'stok' => $this->input->post('stok'),
            'minimal_stok' => $this->input->post('minimal_stok')
        ];
        $this->db->where('no_detail', $this->input->post('no_detail'));
        $this->db->update('detail_aset', $data);
    }
    function tampi_detail_aset()
    {
        return $this->db->get('detail_aset');
    }

    function tampil_detail_aset()
    {
        $query = $this->db->get('detail_aset');
        return $query;
    }
    function cetak_laporan()
    {
        $this->db->select('*');
        $this->db->from('aset_tidak_habis_pakai');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        if ($this->input->post("nama_aset") <> "") {
            $this->db->where('detail_aset.nama_aset', $this->input->post("nama_aset"));
        }
        if ($this->input->post("lokasi") <> "") {
            $this->db->where('aset_tidak_habis_pakai.lokasi', $this->input->post("lokasi"));
        }
        if ($this->input->post("kondisi") <> "") {
            $this->db->where('aset_tidak_habis_pakai.kondisi', $this->input->post("kondisi"));
        }
        $this->db->where('aset_tidak_habis_pakai.tanggal_masuk >=', $this->input->post("tanggal_awal"));
        $this->db->where('aset_tidak_habis_pakai.tanggal_masuk <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function hasil_stok()
    {
        $this->db->select('*');
        $this->db->from('aset_tidak_habis_pakai');
        $this->db->join('detail_aset', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        if ($this->input->post("nama_aset") <> "") {
            $this->db->where('detail_aset.nama_aset', $this->input->post("nama_aset"));
        }
        if ($this->input->post("lokasi") <> "") {
            $this->db->where('aset_tidak_habis_pakai.lokasi', $this->input->post("lokasi"));
        }
        $this->db->where('aset_tidak_habis_pakai.tanggal_masuk >=', $this->input->post("tanggal_awal"));
        $this->db->where('aset_tidak_habis_pakai.tanggal_masuk <=', $this->input->post("tanggal_akhir"));
        $query = $this->db->get();
        return $query->num_rows();
    }
    function hapus_data_aset()
    {
        $where = $this->input->post('no_aset');
        //hapus tmp/////////////////////////////////////////////////
        $this->db->where('no_aset', $where);
        $this->db->delete('tmp');

        //update detail aset///////////////////////////////////////
        $this->db->where('no_aset', $where);
        $query = $this->db->get('penyusutan');
        foreach ($query->result() as $a) {
            $nilai = $a->nilai_aset;
        }
        $this->db->where('no_detail', $this->input->post('no_detail'));
        $detail = $this->db->get('detail_aset');
        foreach ($detail->result() as $b) {
            $jumlah = $b->stok;
            $akumulasi = $b->akumulasi_nilai;
        }
        $jumlah = $jumlah - 1;
        $akumulasi = $akumulasi - $nilai;
        $data = [
            'stok' => $jumlah,
            'akumulasi_nilai' => $akumulasi
        ];
        $this->db->where('no_detail', $this->input->post('no_detail'));
        $this->db->update('detail_aset', $data);

        //hapus penyusutan////////////////////////////////////////
        $this->db->where('no_aset', $where);
        $this->db->delete('penyusutan');

        //hapus aset tidak habis pakai////////////////////////////
        $this->db->where('no_aset', $where);
        $this->db->delete('aset_tidak_habis_pakai');
    }

    function tambah_aset_tidak_habis_pakai()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga' => $this->input->post('harga'),
            'lokasi' => $this->input->post('lokasi'),
            'kondisi' => $this->input->post('kondisi_barang'),
            'tanggal_masuk' => date('y-m-d')
        ];
        //hitung penyusutan
        $a = $this->input->post('harga_satuan');
        $b = $this->input->post('umur_ekonomis');
        $c = $a / $b;

        $query = $this->db->get_where('detail_aset', array('nama_aset' => $this->input->post('nama_aset')));

        $i = $this->input->post('jumlah');
        $a = 0;
        foreach ($query->result() as $detail) { }
        if ($query->num_rows() > 0) {
            //jika nama_aset yang sama dengan yang diinputkan telah terdaftar
            $nilai_aset = $detail->akumulasi_nilai + $this->input->post('harga_total');
            $stok = $detail->stok + $i;
            $data = [
                'stok' => $stok,
                'akumulasi_nilai' => $nilai_aset
            ];
            $this->db->where('no_detail', $detail->no_detail);
            $this->db->update('detail_aset', $data);
            $no = $detail->no_detail;
        } else {
            //jika nama_aset yang sama dengan yang diinputkan belum terdaftar
            $data = [
                'nama_aset' => $this->input->post('nama_aset'),
                'stok' => $i,
                'minimal_stok' => $this->input->post('minimal_stok'),
                'akumulasi_nilai' => $this->input->post('harga_total')
            ];
            $this->db->insert('detail_aset', $data);
            $no = $this->db->insert_id();
        }


        $this->db->empty_table('tmp');
        while ($a != $i) {

            $this->db->select('RIGHT(aset_tidak_habis_pakai.no_aset,2) as kode_barang', FALSE);
            $this->db->order_by('kode_barang', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('aset_tidak_habis_pakai');  //cek dulu apakah ada sudah ada kode di tabel.    
            if ($query->num_rows() <> 0) {
                //cek kode jika telah tersedia    
                $data = $query->row();
                $kode = intval($data->kode_barang) + 1;
            } else {
                $kode = 1;  //cek jika kode belum terdapat pada table
            }
            $tgl = date('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = "BR" . "5" . $batas;  //format kode

            $data = [
                'no_aset' => $kodetampil,
                'no_detail' => $no,
                'jenis_aset' => $this->input->post('jenis_aset'),
                'merek' => $this->input->post('merek'),
                'tipe' => $this->input->post('tipe'),
                'spesifikasi' => $this->input->post('spesifikasi'),
                'harga' => $this->input->post('harga_satuan'),
                'lokasi' => $this->input->post('lokasi'),
                'kondisi' => $this->input->post('kondisi_barang'),
                'tanggal_masuk' => date('y-m-d')
            ];
            $this->db->insert('aset_tidak_habis_pakai', $data);
            $penyusutan = [
                'no_aset' => $kodetampil,
                'umur_ekonomis' => $this->input->post('umur_ekonomis'),
                'biaya_penyusutan' => $c,
                'tahun_penggunaan' => 1,
                'nilai_aset' => $this->input->post('harga_satuan')
            ];
            $tmp = [
                'no_aset' => $kodetampil
            ];
            $this->db->insert('penyusutan', $penyusutan);
            $this->db->insert('tmp', $tmp);
            $a++;
        }
    }

    function ubah_aset_tidak_habis_pakai()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga' => $this->input->post('harga'),
            'lokasi' => $this->input->post('lokasi'),
            'kondisi' => $this->input->post('kondisi_barang'),
            'tanggal_masuk' => date('y-m-d')
        ];
        $this->db->where('no_aset', $this->input->post('no_aset'));
        $this->db->update('aset_tidak_habis_pakai', $data);
    }

    function tambah_aset_habis_pakai()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'harga' => $this->input->post('harga'),
            'tanggal_masuk' => date('y-m-d')
        ];
        $i = $this->input->post('jumlah');
        $a = 0;
        while ($a != $i) {
            $this->db->insert('aset_habis_pakai', $data);
            $a++;
        }
    }

    function detail()
    {
        return $this->db->get('detail_aset');
    }

    function ubah_aset_habis_pakai()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
        ];
        $this->db->where('no_aset', $this->input->post('no_aset'));
        $this->db->update('aset_habis_pakai', $data);
    }

    function tampil_data_penyusutan()
    {
        $this->db->select('*');
        $this->db->from('aset_tidak_habis_pakai');
        $this->db->join('penyusutan', 'penyusutan.no_aset= aset_tidak_habis_pakai.no_aset');
        return $this->db->get();
    }

    function cek_penyusutan_aset()
    {
        $this->db->select('*');
        $this->db->from('aset_tidak_habis_pakai');
        $this->db->join('penyusutan', 'penyusutan.no_aset= aset_tidak_habis_pakai.no_aset');
        $this->db->join('detail_aset', 'detail_aset.no_detail= aset_tidak_habis_pakai.no_detail');
        $data = $this->db->get()->result();
        foreach ($data as $a) {
            $y = $a->tahun_penggunaan;
            $x = date('Y-m-d', strtotime('+' . $y . 'years,-1 days', strtotime($a->tanggal_masuk)));
            $z = date('y-m-d');
            if ($z == $x) {
                $nilai = $a->nilai_aset;
                $penyusutan = $a->biaya_penyusutan;
                $nilai = $nilai - $penyusutan;
                $akumulasi = $a->akumulasi_penyusutan + $penyusutan;
                $tahun = $y + 1;
                $data = [
                    'akumulasi_penyusutan' => $akumulasi,
                    'tahun_penggunaan' => $tahun,
                    'nilai_aset' => $nilai
                ];
                $this->db->where('id_penyusutan', $a->id_penyusutan);
                $this->db->update('penyusutan', $data);
                //akumulasi nilai
                $this->db->select('*');
                $this->db->from('aset_tidak_habis_pakai');
                $this->db->join('penyusutan', 'penyusutan.no_aset= aset_tidak_habis_pakai.no_aset');
                $this->db->join('detail_aset', 'detail_aset.no_detail= aset_tidak_habis_pakai.no_detail');
                $this->db->select_sum('nilai_aset');
                $data1 = $this->db->get()->result();
                $no = $a->no_detail;
                foreach ($data1 as $data1) {
                    $newAkumulasi = $data1->nilai_aset;
                    $data = [
                        'akumulasi_nilai' => $newAkumulasi
                    ];
                    $this->db->where('no_detail', $no);
                    $this->db->update('detail_aset', $data);
                }
            }
        }
    }

    function aset_pertahun()
    {
        $this->db->select('*');
        $this->db->from('detail_aset');
        $this->db->join('aset_tidak_habis_pakai', 'aset_tidak_habis_pakai.no_detail=detail_aset.no_detail');
        $query = $this->db->get();

        foreach ($query as $a) { }
    }
}
