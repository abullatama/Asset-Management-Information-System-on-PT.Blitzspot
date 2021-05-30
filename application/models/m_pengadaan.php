<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pengadaan extends CI_Model
{
    function verifikasi_pengadaan()
    {
        $newData = [
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'harga_total' => $this->input->post('harga_total'),
            'status' => 'Selesai'
        ];

        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->update('perencanaan_pengadaan', $newData);

        //hitung penyusutan
        $a = $this->input->post('harga_satuan');
        $b = $this->input->post('umur_ekonomis');
        $c = $a / $b;

        //cek nama aset yang sama
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
            $arr = explode(" ", $this->input->post('nama_aset'));
            $singkatan = '';
            foreach ($arr as $kata) {
                $singkatan .= substr($kata, 0, 1);
            }
            $tgl = date('Y');
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $kodetampil = $singkatan . $tgl . $batas;  //format kode

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

    function verifikasi_pengadaan2()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'harga' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_masuk' => date('y-m-d')
        ];

        $newData = [
            'harga_satuan' => $this->input->post('harga_satuan'),
            'harga_total' => $this->input->post('harga_total'),
            'jumlah' => $this->input->post('jumlah'),
            'status' => 'Selesai'
        ];

        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->update('perencanaan_pengadaan', $newData);
        $this->db->insert('aset_habis_pakai', $data);
    }

    function tampil_data_pengadaan()
    {
        $this->db->from('pengadaan');
        $this->db->join('perencanaan_pengadaan', 'perencanaan_pengadaan.no_perencanaan=pengadaan.no_perencanaan');
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        return $this->db->get();
    }
    function tampil_data_pengadaan2()
    {
        $this->db->from('pengadaan');
        $this->db->join('perencanaan_pengadaan', 'perencanaan_pengadaan.no_perencanaan=pengadaan.no_perencanaan');
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        $this->db->where('pengadaan.tanggal >=', $this->input->post("tanggal_awal"));
        $this->db->where('pengadaan.tanggal <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function tampil_perencanaan_aset_tetap()
    {
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        return $this->db->get('perencanaan_pengadaan');
    }
    function tampil_perencanaan_aset()
    {
        $this->db->where('Status', 'Belum Diajukan');
        return $this->db->count_all_results('perencanaan_pengadaan');
    }
    function tampil_perencanaan_aset_tetap1()
    {
        $this->db->where('jenis_aset', 'Tidak Habis Pakai');
        if ($this->input->post("status") <> "") {
            $this->db->where('Status', $this->input->post("status"));
        }
        $this->db->where('tanggal >=', $this->input->post("tanggal_awal"));
        $this->db->where('tanggal <=', $this->input->post("tanggal_akhir"));
        return $this->db->get('perencanaan_pengadaan');
    }

    function tampil_perencanaan_habis_pakai()
    {
        $this->db->where('jenis_aset', 'Habis Pakai');
        return $this->db->get('perencanaan_pengadaan');
    }
    function tampil_perencanaan_habis_pakai1()
    {
        $this->db->where('jenis_aset', 'Habis Pakai');
        if ($this->input->post("status") <> "") {
            $this->db->where('Status', $this->input->post("status"));
        }
        $this->db->where('tanggal >=', $this->input->post("tanggal_awal"));
        $this->db->where('tanggal <=', $this->input->post("tanggal_akhir"));
        return $this->db->get('perencanaan_pengadaan');
    }

    function pengadaan_habis_pakai()
    {
        $this->db->from('pengadaan');
        $this->db->join('perencanaan_pengadaan', 'perencanaan_pengadaan.no_perencanaan=pengadaan.no_perencanaan');
        $this->db->where('jenis_aset', 'Habis Pakai');
        return $this->db->get();
    }
    function pengadaan_habis_pakai2()
    {
        $this->db->from('pengadaan');
        $this->db->join('perencanaan_pengadaan', 'perencanaan_pengadaan.no_perencanaan=pengadaan.no_perencanaan');
        $this->db->where('jenis_aset', 'Habis Pakai');
        $this->db->where('pengadaan.tanggal >=', $this->input->post("tanggal_awal"));
        $this->db->where('pengadaan.tanggal <=', $this->input->post("tanggal_akhir"));
        return $this->db->get();
    }

    function tambahDataPengadaan()
    {
        if ($this->input->post('old') == "") {
            $nama = $this->input->post('new');
        } else {
            $nama = $this->input->post('old');
        }

        $this->db->select('RIGHT(perencanaan_pengadaan.no_perencanaan,2) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('perencanaan_pengadaan');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('Y');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "PR" . $tgl . $batas;  //format kode

        $data = [
            'no_perencanaan' => $kodetampil,
            'nama_aset' => $nama,
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'tanggal' => date('y-m-d'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Belum Diajukan'
        ];

        $query = $this->db->insert('perencanaan_pengadaan', $data);
    }
    function tambahDataPengadaanPengajuan()
    {
        $data = [
            'nama_aset' => $this->input->post('old'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'tanggal' => date('y-m-d'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => 'Belum Diajukan'
        ];

        $query = $this->db->insert('perencanaan_pengadaan', $data);
        $data = [
            'status' => 'Diproses'
        ];
        $this->db->where('no_pengajuan', $this->input->post('no_pengajuan'));
        $this->db->update('pengajuan', $data);
    }



    function tambahDataPengadaanHabisPakai()
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
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('y-m-d'),
            'status' => 'Belum Diajukan'
        ];

        $query = $this->db->insert('perencanaan_pengadaan', $data);
    }

    function ubahDataPengadaan()
    {
        $data = [
            'nama_aset' => $this->input->post('nama_aset'),
            'jenis_aset' => $this->input->post('jenis_aset'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
        ];
        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->update('perencanaan_pengadaan', $data);
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

    function setujui_pengadaan()
    {
        $data = [
            'harga_satuan' => $this->input->post('harga_satuan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga_total' => $this->input->post('harga_total'),
            'status' => 'Disetujui'
        ];
        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->update('perencanaan_pengadaan', $data);
        $data = [
            'no_perencanaan' => $this->input->post('no_perencanaan'),
            'tanggal' => date('y-m-d')
        ];
        $this->db->insert('pengadaan', $data);
    }

    function tolak_pengadaan()
    {
        $data = [
            'status' => 'Ditolak',
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->where('no_perencanaan', $this->input->post('no_perencanaan'));
        $this->db->update('perencanaan_pengadaan', $data);
    }
}
