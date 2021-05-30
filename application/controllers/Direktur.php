<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Direktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['stok'] = $this->m_aset->total_stok()->result();
            $data['mutasi'] = $this->m_aset->total_mutasi();
            $data['gudang'] = $this->m_aset->total_gudang();
            $data['tanggal'] = $this->m_aset->aset_pertahun();
            $data['tanggal'] = $this->m_aset->aset_pertahun();
            $data['detail'] = $this->m_aset->tampil_detail_aset()->result();
            // foreach ($this->m_aset->tampil_detail_aset()->result_object() as $row) {
            //     $nama[] = $row->nama_aset;
            //     $stok[] = $row->stok;
            // }
            // echo json_encode($nama);
            // echo json_encode($stok);
            $this->load->view('direktur/index', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function persetujuan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengadaan'] = $this->m_pengadaan->tampil_perencanaan_aset_tetap()->result();
            $data['pengadaan2'] = $this->m_pengadaan->tampil_perencanaan_habis_pakai()->result();
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('direktur/persetujuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function cetak_laporan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['hasil'] = $this->m_aset->cetak_laporan()->result();
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['stok'] = $this->m_aset->hasil_stok();
            $this->load->view('direktur/laporan/cetak_aset', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function cetak_laporan_pengadaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengadaan'] = $this->m_pengadaan->tampil_data_pengadaan2()->result();
            $data['pengadaan2'] = $this->m_pengadaan->pengadaan_habis_pakai2()->result();
            $this->load->view('direktur/laporan/pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function laporan_pengadaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengadaan'] = $this->m_pengadaan->tampil_data_pengadaan()->result();
            $data['pengadaan2'] = $this->m_pengadaan->pengadaan_habis_pakai()->result();
            $this->load->view('direktur/laporan/pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_mutasi()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['mutasi'] = $this->m_mutasi->tampil_data_mutasi()->result();
            $this->load->view('direktur/laporan/mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function cetak_laporan_mutasi()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['mutasi'] = $this->m_mutasi->tampil_data_mutasi1()->result();
            $this->load->view('direktur/laporan/mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_aset()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['tidak_habis_pakai'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $data['habis_pakai'] = $this->m_aset->tampil_data_aset_habis_pakai()->result();
            $data['penyusutan'] = $this->m_aset->tampil_data_penyusutan()->result();
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['detail'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('direktur/laporan/aset', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_pengajuan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
            $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            $this->load->view('direktur/laporan/pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function cetak_laporan_pengajuan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan1()->result();
            $this->load->view('direktur/laporan/pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pemeliharaan'] = $this->m_pemeliharaan->tampil_data_pemeliharaan()->result();
            $this->load->view('direktur/laporan/pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function cetak_laporan_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pemeliharaan'] = $this->m_pemeliharaan->tampil_data_pemeliharaan1()->result();
            $this->load->view('direktur/laporan/pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function persetujuan_pengajuan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
            $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            $this->load->view('direktur/persetujuan_pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_perencanaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['aset_tetap'] = $this->m_pengadaan->tampil_perencanaan_aset_tetap()->result();
            $data['habis_pakai'] = $this->m_pengadaan->tampil_perencanaan_habis_pakai()->result();
            $this->load->view('direktur/laporan/perencanaan_pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function cetak_laporan_perencanaan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['aset_tetap'] = $this->m_pengadaan->tampil_perencanaan_aset_tetap1()->result();
            $data['habis_pakai'] = $this->m_pengadaan->tampil_perencanaan_habis_pakai1()->result();
            $this->load->view('direktur/laporan/perencanaan_pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function laporan_pengaduan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['tidak_habis_pakai'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $data['habis_pakai'] = $this->m_aset->tampil_data_aset_habis_pakai()->result();
            $data['penyusutan'] = $this->m_aset->tampil_data_penyusutan()->result();
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['detail'] = $this->m_aset->tampil_detail_aset()->result();
            $data['pengaduan'] = $this->m_pengaduan->tampil_data_pengaduan()->result();
            $this->load->view('direktur/laporan/pengaduan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function cetak_laporan_pengaduan()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data['tidak_habis_pakai'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $data['habis_pakai'] = $this->m_aset->tampil_data_aset_habis_pakai()->result();
            $data['penyusutan'] = $this->m_aset->tampil_data_penyusutan()->result();
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['detail'] = $this->m_aset->tampil_detail_aset()->result();
            $data['pengaduan'] = $this->m_pengaduan->tampil_data_pengaduan1()->result();
            $this->load->view('direktur/laporan/pengaduan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function detail_stok()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data =  $this->m_pengadaan->tampil_perencanaan_aset_tetap()->result();
            foreach ($data as $a) {
                if ($this->input->post('no_perencanaan') == $a->no_perencanaan) {
                    ?><table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width:110%;">
                        <tr style="padding:8px">
                            <td> Nama Aset</td>
                            <td> :<?= $a->nama_aset ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Merek</td>
                            <td> :<?= $a->merek ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Tipe</td>
                            <td> :<?= $a->tipe ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Spesifikasi</td>
                            <td> :<?= $a->spesifikasi ?></td>
                        </tr>
                    </table>
                <?php }
            }
        } else {
            $this->load->view('errors/404');
        }
    }

    public function detail_stok2()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data =  $this->m_pengadaan->tampil_perencanaan_habis_pakai()->result();
            foreach ($data as $a) {
                if ($this->input->post('no_perencanaan') == $a->no_perencanaan) {
                    ?><table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                        <tr style="padding:8px">
                            <td> Nama Aset</td>
                            <td> :<?= $a->nama_aset ?></td>
                        </tr>
                    </table>
                <?php }
            }
        } else {
            $this->load->view('errors/404');
        }
    }

    public function detail_stok3()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data =  $this->m_pengajuan->tampil_data_pengajuan()->result();
            foreach ($data as $a) {
                if ($this->input->post('no_pengajuan') == $a->no_pengajuan) {
                    ?><table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                        <tr style="padding:8px">
                            <td> Nama Aset</td>
                            <td> :<?= $a->nama_barang ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Merek</td>
                            <td> :<?= $a->merek ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Tipe</td>
                            <td> :<?= $a->tipe ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Spesifikasi</td>
                            <td> :<?= $a->spesifikasi ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Harga Satuan</td>
                            <td> :<?= $a->harga_satuan ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Jumlah</td>
                            <td> :<?= $a->jumlah ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Harga Total</td>
                            <td> :<?= $a->harga_total ?></td>
                        </tr>
                    </table>
                <?php }
            }
        } else {
            $this->load->view('errors/404');
        }
    }



    public function detail_stok4()
    {
        if ($this->session->userdata('level') == 'Direktur') {
            $data =  $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            foreach ($data as $a) {
                if ($this->input->post('no_pengajuan') == $a->no_pengajuan) {
                    ?><table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                        <tr style="padding:8px">
                            <td> Nama Aset</td>
                            <td> :<?= $a->nama_barang ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Merek</td>
                            <td> :<?= $a->merek ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Tipe</td>
                            <td> :<?= $a->tipe ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Spesifikasi</td>
                            <td> :<?= $a->spesifikasi ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Harga Satuan</td>
                            <td> :<?= $a->harga_satuan ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Jumlah</td>
                            <td> :<?= $a->jumlah ?></td>
                        </tr>
                        <tr style="padding:8px">
                            <td> Harga Total</td>
                            <td> :<?= $a->harga_total ?></td>
                        </tr>
                    </table>
                <?php }
            }
        } else {
            $this->load->view('errors/404');
        }
    }
}
?>