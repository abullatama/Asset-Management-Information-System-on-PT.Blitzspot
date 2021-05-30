<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'Staff') {
            $data['pengaduan'] = $this->m_pengaduan->tampil_pengaduan1();
            $data['pengajuan'] = $this->m_pengajuan->tampil_pengajuan1();
            $this->load->view('Staff/index', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function pengaduan()
    {
        if ($this->session->userdata('level') == 'Staff') {
            $data['pengaduan'] = $this->m_pengaduan->tampil_data_pengaduan()->result();
            $this->load->view('staff/pengaduan/data_pengaduan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function tambah_data_pengaduan()
    {
        if ($this->session->userdata('level') == 'Staff') {
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('staff/pengaduan/tambah_data_pengaduan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pengaduan2()
    {
        $config['upload_path']          = './images/pengaduan/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = 'keluhan-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('info')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('staff/tambah_data_pengaduan');
        } else {
            $this->m_pengaduan->tambah_data_pengaduan();
            redirect('staff/pengaduan');
        }
    }
    public function pengajuan()
    {
        if ($this->session->userdata('level') == 'Staff') {
            $data['pengajuan'] = $this->m_pengajuan->tampil_data_pengajuan()->result();
            $data['pengajuan2'] = $this->m_pengajuan->tampil_pengajuan_habis_pakai()->result();
            $this->load->view('staff/pengajuan/data_pengajuan', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_pengajuan()
    {
        if ($this->session->userdata('level') == 'Staff') {
            $data['aset'] = $this->m_aset->tampil_detail_aset()->result();
            $this->load->view('staff/pengajuan/tambah_data_pengajuan', $data);
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
            $this->load->view('staff/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('staff/pengajuan');
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
            $this->load->view('staff/pengajuan/tambah_data_pengajuan');
        } else {
            $this->m_pengajuan->tambahDataPengajuanHabisPakai();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('staff/pengajuan');
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
            $this->load->view('staff/pengajuan/data_pengajuan');
        } else {
            $this->m_pengajuan->ubahDataPengajuan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('staff/pengajuan');
        }
    }
    //view mutasi
    public function mutasi()
    {
        if ($this->session->userdata('level') == 'Sekretaris') {
            $data['aset'] = $this->m_mutasi->tampil_detail_mutasi()->result();
            $data['mutasi'] = $this->m_mutasi->tampil_data_mutasi()->result();
            $this->load->view('sekretaris/mutasi/data_mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
    public function tambah_data_mutasi()
    {
        if ($this->session->userdata('level') == 'Sekretaris') {
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $this->load->view('sekretaris/mutasi/tambah_data_mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function ubah_detail_mutasi()
    {
        if ($this->session->userdata('level') == 'Sekretaris') {
            $a = explode("%20", $this->uri->segment(4));
            $b = explode("%20", $this->uri->segment(5));
            $id = $this->uri->segment(3);

            $data['detail'] = $this->m_mutasi->tampil_detail_mutasi1($id)->result();
            $data['aset'] = $this->m_aset->tampil_data_aset_tidak_habis_pakai()->result();
            $data['nama_pelanggan'] = implode(" ", $a);
            $data['alamat'] = implode(" ", $b);
            $data['id'] = explode("%20", $this->uri->segment(3));
            $this->load->view('sekretaris/mutasi/detail_mutasi', $data);
        } else {
            $this->load->view('errors/404');
        }
    }

    public function verify_id()
    {

        $id = $this->input->post('id');
        $aset = $this->m_mutasi->tampil_detail_mutasi()->result();
        $no = 1;
        foreach ($aset as $b) {
            if ($b->id_mutasi == $id) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $b->nama_aset ?></td>
                    <td><?php echo $b->merek ?></td>
                    <td><?php echo $b->tipe ?></td>
                    <td><?php echo $b->spesifikasi ?></td>
                    <td><?php echo $b->lokasi ?></td>
                </tr>
            <?php
            }
        }
    }
}
