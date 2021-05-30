<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bendahara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->m_aset->cek_penyusutan_aset();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['user'] = $this->session->userdata('id_pengguna');
            $data['aset'] = $this->m_pengadaan->tampil_perencanaan_aset();
            $data['pengajuan'] = $this->m_pengajuan->tampil_pengajuan();
            $data['pengaduan'] = $this->m_pengaduan->tampil_pengaduan();
            $this->load->view('bendahara/index', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('bendahara/pemeliharaan/tambah_data_pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function pengaduan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['pengaduan'] = $this->m_pengaduan->tampil_data_pengaduan()->result();
            $this->load->view('bendahara/pengaduan/data_pengaduan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function pemeliharaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['pemeliharaan'] = $this->m_pemeliharaan->tampil_data_pemeliharaan()->result();
            $this->load->view('bendahara/pemeliharaan/data_pemeliharaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    //view pengadaan
    public function pengadaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['pengadaan'] = $this->m_pengadaan->tampil_data_pengadaan()->result();
            $data['pengadaan2'] = $this->m_pengadaan->pengadaan_habis_pakai()->result();
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('bendahara/pengadaan/data_pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pengadaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('bendahara/pengadaan/tambah_data_pengadaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function tambah_data_pengajuan_habis_pakai()
    {
        $this->form_validation->set_rules('nama_aset', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuanHabisPakai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('bendahara/pengajuan');
        }
    }

    public function tambah_data_pengajuan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('bendahara/pengajuan/tambah_data_pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function tambah_data_pengajuan_p()
    {
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('bendahara/pengajuan');
        }
    }

    public function ubah_data_pengajuan_p()
    {
        $this->form_validation->set_rules('jenis_aset', 'Jenis Aset', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('harga_total', 'Harga Total', 'required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('bendahara/pengajuan/data_pengajuan');
        } else {
            $this->m_pengajuan->ubahDataPengajuan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('bendahara/pengajuan');
        }
    }

    //view aset
    public function DataAset()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['tidak_habis_pakai'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $data['habis_pakai'] = $this->m_aset->tampil_data_aset_habis_pakai()->result();
            $data['penyusutan'] = $this->m_aset->tampil_data_penyusutan()->result();
            $data['total'] = $this->m_aset->total_nilai()->result();
            $data['tmp'] = $this->m_aset->tampil_tmp()->result();
            $data['detail'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('bendahara/aset/data_aset', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_aset()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $this->load->view('bendahara/aset/tambah_data_aset');
        } else {
            $this->load->view('errors/404');
        }
    }

    public function perencanaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['aset_tetap'] = $this->m_pengadaan->tampil_perencanaan_aset_tetap()->result();
            $data['habis_pakai'] = $this->m_pengadaan->tampil_perencanaan_habis_pakai()->result();
            $this->load->view('bendahara/perencanaan/data_perencanaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function tambah_data_perencanaan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
            $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            $this->load->view('bendahara/perencanaan/tambah_data_perencanaan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function pengajuan()
    {
        if ($this->session->userdata('level') == 'Bendahara') {
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
            $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            $this->load->view('bendahara/pengajuan/data_pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function verify_id()
    {

        $id = $this->input->post('no_aset');
        $penyusutan = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
        $no = 1;
        foreach ($penyusutan as $b) {
            if ($b->no_aset == $id) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $b->tahun_penggunaan ?></td>
                    <td><?php echo $b->no_aset ?></td>
                    <td><?php echo $b->nama_aset ?></td>
                    <td><?php echo 'Rp.' . $b->biaya_penyusutan ?></td>
                    <td><?php echo 'Rp.' . $b->akumulasi_penyusutan ?></td>
                    <td><?php echo 'Rp.' . $b->nilai_aset ?></td>
                </tr>
            <?php
            }
        }
    }
}
