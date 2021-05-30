<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pengajuan extends CI_Model
{
    function verifikasi_pengajuan()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_barang'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga' => $this->input->post('harga_satuan'),
            'lokasi' => $this->input->post('lokasi'),
            'kondisi' => $this->input->post('kondisi_barang'),
            'tanggal_masuk' => date('y-m-d')
        ];

        $newData = [
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'harga_total' => $this->input->post('harga_total'),
            'status' => 'Selesai'
        ];

        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $newData);

        //hitung penyusutan
        $a = $this->input->post('harga_satuan');
        $b = $this->input->post('umur_ekonomis');
        $c = $a / $b;

        //cek nama aset yang sama
        $query = $this->db->get_where('detail_aset', array('nama_aset' => $this->input->post('nama_barang')));

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
                'nama_aset' => $this->input->post('nama_barang'),
                'stok' => $i,
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

    function verifikasi_pengajuan2()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_barang'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'harga' => $this->input->post('harga_satuan'),
            'kadaluwarsa' => $this->input->post('kadaluwarsa'),
        ];

        $newData = [
            'status' => 'Selesai'
        ];

        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $newData);

        $i = $this->input->post('jumlah');
        $a = 0;
        while ($a != $i) {
            $this->db->insert('aset_habis_pakai', $data);
            $a++;
        }
    }

    function tampil_pengajuan()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pengguna', 'pengguna.id_pengguna= pengajuan.id_pengguna');
        $this->db->where('status', 'Belum Diproses');
        return $this->db->count_all_results();
    }
    function tampil_pengajuan1()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pengguna', 'pengguna.id_pengguna= pengajuan.id_pengguna');
        $this->db->where('pengajuan.id_pengguna', $this->session->userdata('id_pengguna'));
        return $this->db->count_all_results();
    }
    function tampil_data_pengajuan()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pengguna', 'pengguna.id_pengguna= pengajuan.id_pengguna');
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        return $this->db->get();
    }

    function tampil_data_pengajuan1()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pengguna', 'pengguna.id_pengguna= pengajuan.id_pengguna');
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        if ($this->input->post("status") <> "") {
            $this->db->where('pengajuan.status', $this->input->post("status"));
        }
        $this->db->where('pengajuan.tanggal_masuk >=', $this->input->post("tanggal_awal"));
        $this->db->where('pengajuan.tanggal_masuk <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function tampil_pengajuan_habis_pakai()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pengguna', 'pengguna.id_pengguna= pengajuan.id_pengguna');
        $this->db->where('jenis_aset', 'Habis Pakai');
        return $this->db->get();
    }

    function tambahDataPengajuan()
    {
        if ($this->input->post('old') == "") {
            $nama = $this->input->post('new');
        } else {
            $nama = $this->input->post('old');
        }

        $this->db->select('RIGHT(pengajuan.no_pengajuan,2) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengajuan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('Y');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "PJ" . $tgl . $batas;  //format kode

        $data = [
            'no_pengajuan' => $kodetampil,
            'id_pengguna' => $this->session->userdata('id_pengguna'),
            'nama_barang' => $nama,
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Belum diproses',
            'tanggal_masuk' => date('y-m-d')
        ];

        $query = $this->db->insert('pengajuan', $data);
    }

    function tambahDataPengajuanHabisPakai()
    {
        $data = [
            'id_pengguna' => $this->session->userdata('id_pengguna'),
            'nama_barang' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => '-',
            'tipe' => '-',
            'spesifikasi' => '-',
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Belum diproses',
            'tanggal_masuk' => date('y-m-d')
        ];

        $query = $this->db->insert('pengajuan', $data);
    }

    function ubahDataPengajuan()
    {
        $data = [
            'nama_barang' => $this->input->post('old'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $data);
    }

    function ubahDataPengadaanHabisPakai()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => '-',
            'tipe' => '-',
            'spesifikasi' => '-',
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'tanggal_masuk' => date('y-m-d'),
            'status' => 'Belum Disetujui'
        ];
        $this->db->where('no_pengadaan', $this->input->post('no_pengadaan'));
        $this->db->update('pengadaan', $data);
    }

    function setujui_pengajuan()
    {
        $data = [
            'status' => 'Disetujui'
        ];
        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $data);
    }

    function tolak_pengajuan()
    {
        $data = [
            'status' => 'Ditolak',
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $data);
    }
}
