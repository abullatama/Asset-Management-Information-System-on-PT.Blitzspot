-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2020 pada 12.33
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blitzspot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_habis_pakai`
--

CREATE TABLE `aset_habis_pakai` (
  `no_aset` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `jenis_aset` varchar(20) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aset_habis_pakai`
--

INSERT INTO `aset_habis_pakai` (`no_aset`, `nama_aset`, `jenis_aset`, `jumlah`, `harga`, `tanggal_masuk`) VALUES
(2, 'HVS A4 70g', 'Habis Pakai', 3, '219000', '2019-08-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_tidak_habis_pakai`
--

CREATE TABLE `aset_tidak_habis_pakai` (
  `no_aset` varchar(50) NOT NULL,
  `no_detail` int(11) NOT NULL,
  `jenis_aset` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aset_tidak_habis_pakai`
--

INSERT INTO `aset_tidak_habis_pakai` (`no_aset`, `no_detail`, `jenis_aset`, `merek`, `tipe`, `spesifikasi`, `harga`, `lokasi`, `kondisi`, `tanggal_masuk`) VALUES
('2019041', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('2019042', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('2019043', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('2019044', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('2019LT045', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('2019LT046', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-26'),
('BR5006', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Customer', 'Baik', '2019-08-08'),
('BR5007', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Customer', 'Baik', '2019-08-08'),
('BR5008', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Customer', 'Baik', '2019-08-08'),
('BR5009', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baru', '2019-08-08'),
('BR5010', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Customer', 'Baik', '2019-08-08'),
('BR5011', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baru', '2019-08-08'),
('BR5012', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baik', '2019-08-08'),
('BR5013', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baru', '2019-08-08'),
('BR5014', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baru', '2019-08-08'),
('BR5015', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '170000', 'Gudang', 'Baru', '2019-08-08'),
('BR5016', 27, 'Tidak Habis Pakai', 'Ubiquiti', 'NS LOCO M5', 'Frequence 5,4 5.825 GHz, Transmission speed 300 Mb', '820000', 'Gudang', 'Baru', '2019-08-08'),
('BR5017', 27, 'Tidak Habis Pakai', 'Ubiquiti', 'NS LOCO M5', 'Frequence 5,4 5.825 GHz, Transmission speed 300 Mb', '820000', 'Customer', 'Baru', '2019-08-08'),
('BR5018', 28, 'Tidak Habis Pakai', 'Ubiquitii', 'Litebeam M5', '23dbi 5 GHz', '630000', 'Customer', 'Baik', '2019-08-08'),
('BR5019', 28, 'Tidak Habis Pakai', 'Ubiquitii', 'Litebeam M5', '23dbi 5 GHz', '630000', 'Gudang', 'Baru', '2019-08-08'),
('BR5020', 28, 'Tidak Habis Pakai', 'Ubiquitii', 'Litebeam M5', '23dbi 5 GHz', '630000', 'Gudang', 'Baru', '2019-08-08'),
('BR5021', 28, 'Tidak Habis Pakai', 'Ubiquitii', 'Litebeam M5', '23dbi 5 GHz', '630000', 'Gudang', 'Baru', '2019-08-08'),
('BR5022', 28, 'Tidak Habis Pakai', 'Ubiquitii', 'Litebeam M5', '23dbi 5 GHz', '630000', 'Gudang', 'Baru', '2019-08-08'),
('BR5023', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-08'),
('BR5024', 30, 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', '172500', 'Gudang', 'Baru', '2019-08-08'),
('BR5025', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276900', 'Customer', 'Baru', '2019-08-08'),
('BR5026', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276900', 'Customer', 'Baru', '2019-08-08'),
('BR5027', 31, 'Tidak Habis Pakai', 'Telebit', 'UTP Cat 5e', '100m', '255000', 'Customer', 'Baru', '2019-08-08'),
('BR5028', 31, 'Tidak Habis Pakai', 'Telebit', 'UTP Cat 5e', '100m', '255000', 'Customer', 'Baru', '2019-08-08'),
('BR5029', 31, 'Tidak Habis Pakai', 'Telebit', 'UTP Cat 5e', '100m', '255000', 'Gudang', 'Baru', '2019-08-08'),
('BR5030', 31, 'Tidak Habis Pakai', 'Telebit', 'UTP Cat 5e', '100m', '255000', 'Gudang', 'Baru', '2019-08-08'),
('BR5031', 31, 'Tidak Habis Pakai', 'Telebit', 'UTP Cat 5e', '100m', '255000', 'Gudang', 'Baru', '2019-08-08'),
('BR5032', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '172500', 'Gudang', 'Baru', '2019-08-09'),
('BR5033', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '172500', 'Gudang', 'Baru', '2019-08-09'),
('BR5034', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '172500', 'Gudang', 'Baru', '2019-08-09'),
('BR5035', 26, 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', '172500', 'Gudang', 'Baru', '2019-08-09'),
('Kabel UTP2019036', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276000', 'Gudang', 'Baru', '2019-08-26'),
('Kabel UTP2019037', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276000', 'Gudang', 'Baru', '2019-08-26'),
('Kabel UTP2019038', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276000', 'Gudang', 'Baru', '2019-08-26'),
('Kabel UTP2019039', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276000', 'Gudang', 'Baru', '2019-08-26'),
('Kabel UTP2019040', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276000', 'Gudang', 'Baru', '2019-08-26'),
('KU2019047', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276900', 'Gudang', 'Baru', '2019-08-26'),
('KU2019048', 31, 'Tidak Habis Pakai', 'Vascolink', 'UTP Cat 5e', '100m', '276900', 'Gudang', 'Baru', '2019-08-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_pokok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `kadaluwarsa` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `jumlah`, `harga_pokok`, `harga_jual`, `kadaluwarsa`, `tanggal_masuk`, `keterangan`) VALUES
(1, 'susu frisian flag', 4, 15000, 17000, '2020-09-01', '2020-03-16', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_pokok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kadaluwarsa` date NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_aset`
--

CREATE TABLE `detail_aset` (
  `no_detail` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `stok` int(50) NOT NULL,
  `minimal_stok` int(50) NOT NULL,
  `akumulasi_nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_aset`
--

INSERT INTO `detail_aset` (`no_detail`, `nama_aset`, `stok`, `minimal_stok`, `akumulasi_nilai`) VALUES
(26, 'Router', 10, 10, 2390000),
(27, 'Receiver', 1, 5, 1640000),
(28, 'Antena', 4, 5, 3150000),
(30, 'Lan Tester', 8, 0, 1380000),
(31, 'Kabel UTP', 10, 10, 3762600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_mutasi`
--

CREATE TABLE `detail_mutasi` (
  `id_detail_mutasi` int(11) NOT NULL,
  `id_mutasi` int(11) NOT NULL,
  `no_aset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_mutasi`
--

INSERT INTO `detail_mutasi` (`id_detail_mutasi`, `id_mutasi`, `no_aset`) VALUES
(58, 31, 'BR5006'),
(59, 31, 'BR5027'),
(60, 32, 'BR5007'),
(61, 32, 'BR5028'),
(62, 33, 'BR5010'),
(63, 33, 'BR5018'),
(64, 33, 'BR5027'),
(65, 34, 'BR5006'),
(66, 34, 'BR5017'),
(67, 34, 'BR5026'),
(68, 35, 'BR5008'),
(69, 35, 'BR5025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `nama_pelanggan`, `alamat`, `status`, `tanggal_keluar`, `tanggal_selesai`) VALUES
(31, 'Agus Permata', 'Kp.Rawa Pojok, Rt.06/03, Komp.Permata\r\n', 'Selesai', '2019-08-08', '2019-08-08'),
(32, 'Agus Dian', 'Kebon Manggu, no. 56 Rt05/21 Padasuka-Cimahi.\r\n', 'Aktif', '2019-08-08', '0000-00-00'),
(33, 'Ahmad Widodo', 'Perum.Graha Bukit Raya 1 Blok.E6 No.1 Cilame-Ngamprah\r\n', 'Aktif', '2019-08-08', '0000-00-00'),
(34, 'Ahmad Hikmat', 'PCI-2 Blok C6 No.55 Rt.04/20 Tanimulya, Ngamprah\r\n', 'Aktif', '2019-08-08', '0000-00-00'),
(35, 'Edi Nurochman', 'Kp.Cijerah RT.05/04 No.30 Tanimulya, Ngamprah\r\n', 'Aktif', '2019-08-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `no_pemeliharaan` varchar(11) NOT NULL,
  `no_aset` varchar(50) NOT NULL,
  `tanggal_pemeliharaan` date NOT NULL,
  `kondisi_pemeliharaan` varchar(50) NOT NULL,
  `biaya` int(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`no_pemeliharaan`, `no_aset`, `tanggal_pemeliharaan`, `kondisi_pemeliharaan`, `biaya`, `keterangan`) VALUES
('3', 'BR5023', '2019-08-09', 'Rusak Ringan', 150000, 'ganti motherboard'),
('PM2019004', 'BR5009', '2019-08-26', 'Rusak Ringan', 150000, 'ganti motherboard');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan`
--

CREATE TABLE `pengadaan` (
  `no_pengadaan` varchar(11) NOT NULL,
  `no_perencanaan` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengadaan`
--

INSERT INTO `pengadaan` (`no_pengadaan`, `no_perencanaan`, `tanggal`) VALUES
('', 'PR2019002', '2019-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` varchar(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `no_aset` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `info` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `id_pengguna`, `no_aset`, `keterangan`, `info`, `tanggal`) VALUES
('11', 6, 'BR5023', 'tidak bisa diaktifkan', 'keluhan-190808-26ea53695f.jpg', '2019-08-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `no_pengajuan` varchar(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_aset` varchar(20) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `harga_satuan` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga_total` int(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`no_pengajuan`, `id_pengguna`, `nama_barang`, `jenis_aset`, `merek`, `tipe`, `spesifikasi`, `harga_satuan`, `jumlah`, `harga_total`, `keterangan`, `status`, `tanggal_masuk`) VALUES
('18', 1, 'Laptop', 'Tidak Habis Pakai', 'Asus', 'A442U', '8th Core I5-8250u', 6700000, 1, 6700000, 'untuk keperluan operasional', 'Diproses', '2019-08-08'),
('19', 1, 'HVS A4 70g', 'Habis Pakai', '-', '-', '-', 219000, 3, 657000, 'kebutuhan operasional', 'Belum diproses', '2019-08-08'),
('20', 6, 'Lan Tester', 'Tidak Habis Pakai', 'JW-360', 'MKT006', 'UTP STP RJ45 RJ11', 172500, 2, 345000, 'untuk keperluan operasional', 'Diproses', '2019-08-08'),
('PJ2019021', 3, 'Laptop', 'Tidak Habis Pakai', 'Asus', 'ROG', 'intel ci7 hdd 1tb ram 8gb', 10500000, 1, 10500000, 'untuk keperluan instalasi jaringan', 'Belum diproses', '2019-08-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `level`) VALUES
(1, 'bendahara', '1234', 'Maqbul Arif Latama', 'Bendahara'),
(2, 'direktur', '1234', 'Adra', 'Direktur'),
(3, 'admin', '1234', 'lusi', 'Sekretaris'),
(4, 'admin_system', '1234', 'Sigit Pratama', 'Admin_System'),
(6, 'staff', '1234', 'Rendy', 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyusutan`
--

CREATE TABLE `penyusutan` (
  `id_penyusutan` int(11) NOT NULL,
  `no_aset` varchar(50) NOT NULL,
  `umur_ekonomis` int(11) NOT NULL,
  `biaya_penyusutan` int(50) NOT NULL,
  `akumulasi_penyusutan` int(50) NOT NULL,
  `tahun_penggunaan` int(11) NOT NULL,
  `nilai_aset` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyusutan`
--

INSERT INTO `penyusutan` (`id_penyusutan`, `no_aset`, `umur_ekonomis`, `biaya_penyusutan`, `akumulasi_penyusutan`, `tahun_penggunaan`, `nilai_aset`) VALUES
(196, 'BR5006', 5, 34000, 0, 1, 170000),
(197, 'BR5007', 5, 34000, 0, 1, 170000),
(198, 'BR5008', 5, 34000, 0, 1, 170000),
(199, 'BR5009', 5, 34000, 0, 1, 170000),
(200, 'BR5010', 5, 34000, 0, 1, 170000),
(201, 'BR5011', 5, 34000, 0, 1, 170000),
(202, 'BR5012', 5, 34000, 0, 1, 170000),
(203, 'BR5013', 5, 34000, 0, 1, 170000),
(204, 'BR5014', 5, 34000, 0, 1, 170000),
(205, 'BR5015', 5, 34000, 0, 1, 170000),
(206, 'BR5016', 5, 164000, 0, 1, 820000),
(207, 'BR5017', 5, 164000, 0, 1, 820000),
(208, 'BR5018', 5, 126000, 0, 1, 630000),
(209, 'BR5019', 5, 126000, 0, 1, 630000),
(210, 'BR5020', 5, 126000, 0, 1, 630000),
(211, 'BR5021', 5, 126000, 0, 1, 630000),
(212, 'BR5022', 5, 126000, 0, 1, 630000),
(213, 'BR5023', 5, 34500, 0, 1, 172500),
(214, 'BR5024', 5, 34500, 0, 1, 172500),
(215, 'BR5025', 5, 55380, 0, 1, 276900),
(216, 'BR5026', 5, 55380, 0, 1, 276900),
(217, 'BR5027', 5, 51000, 0, 1, 255000),
(218, 'BR5028', 5, 51000, 0, 1, 255000),
(219, 'BR5029', 5, 51000, 0, 1, 255000),
(220, 'BR5030', 5, 51000, 0, 1, 255000),
(221, 'BR5031', 5, 51000, 0, 1, 255000),
(222, 'BR5032', 1, 172500, 0, 1, 172500),
(223, 'BR5033', 1, 172500, 0, 1, 172500),
(224, 'BR5034', 1, 172500, 0, 1, 172500),
(225, 'BR5035', 1, 172500, 0, 1, 172500),
(226, 'Kabel UTP2019036', 5, 55200, 0, 1, 276000),
(227, 'Kabel UTP2019037', 5, 55200, 0, 1, 276000),
(228, 'Kabel UTP2019038', 5, 55200, 0, 1, 276000),
(229, 'Kabel UTP2019039', 5, 55200, 0, 1, 276000),
(230, 'Kabel UTP2019040', 5, 55200, 0, 1, 276000),
(231, '2019041', 5, 34500, 0, 1, 172500),
(232, '2019042', 5, 34500, 0, 1, 172500),
(233, '2019043', 5, 34500, 0, 1, 172500),
(234, '2019044', 5, 34500, 0, 1, 172500),
(235, '2019LT045', 5, 34500, 0, 1, 172500),
(236, '2019LT046', 5, 34500, 0, 1, 172500),
(237, 'KU2019047', 5, 55380, 0, 1, 276900),
(238, 'KU2019048', 5, 55380, 0, 1, 276900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan_pengadaan`
--

CREATE TABLE `perencanaan_pengadaan` (
  `no_perencanaan` varchar(11) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `jenis_aset` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `harga_satuan` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga_total` int(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perencanaan_pengadaan`
--

INSERT INTO `perencanaan_pengadaan` (`no_perencanaan`, `nama_aset`, `jenis_aset`, `merek`, `tipe`, `spesifikasi`, `harga_satuan`, `jumlah`, `harga_total`, `keterangan`, `Status`, `tanggal`) VALUES
('PER2019001', 'Router', 'Tidak Habis Pakai', 'D-Link', 'DIR-612', '10/100mbps', 172500, 2, 345000, 'untuk keperluan pemenuhan stok', 'Belum Diajukan', '2019-08-26'),
('PR2019002', 'Router', 'Tidak Habis Pakai', 'Vascolink', 'NS LOCO M5', '10/100mbps', 120000, 3, 360000, 'asdasd', 'Disetujui', '2019-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp`
--

CREATE TABLE `tmp` (
  `no_tmp` int(11) NOT NULL,
  `no_aset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp`
--

INSERT INTO `tmp` (`no_tmp`, `no_aset`) VALUES
(189, 'KU2019047'),
(190, 'KU2019048');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aset_habis_pakai`
--
ALTER TABLE `aset_habis_pakai`
  ADD PRIMARY KEY (`no_aset`);

--
-- Indeks untuk tabel `aset_tidak_habis_pakai`
--
ALTER TABLE `aset_tidak_habis_pakai`
  ADD PRIMARY KEY (`no_aset`),
  ADD KEY `no_detail` (`no_detail`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `detail_aset`
--
ALTER TABLE `detail_aset`
  ADD PRIMARY KEY (`no_detail`);

--
-- Indeks untuk tabel `detail_mutasi`
--
ALTER TABLE `detail_mutasi`
  ADD PRIMARY KEY (`id_detail_mutasi`),
  ADD KEY `no_aset` (`no_aset`),
  ADD KEY `id_mutasi` (`id_mutasi`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indeks untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`no_pemeliharaan`),
  ADD KEY `no_aset` (`no_aset`);

--
-- Indeks untuk tabel `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`no_pengadaan`),
  ADD KEY `no_perencanaan` (`no_perencanaan`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `no_aset` (`no_aset`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`no_pengajuan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `penyusutan`
--
ALTER TABLE `penyusutan`
  ADD PRIMARY KEY (`id_penyusutan`),
  ADD KEY `no_aset` (`no_aset`);

--
-- Indeks untuk tabel `perencanaan_pengadaan`
--
ALTER TABLE `perencanaan_pengadaan`
  ADD PRIMARY KEY (`no_perencanaan`);

--
-- Indeks untuk tabel `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`no_tmp`),
  ADD KEY `no_aset` (`no_aset`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aset_habis_pakai`
--
ALTER TABLE `aset_habis_pakai`
  MODIFY `no_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_aset`
--
ALTER TABLE `detail_aset`
  MODIFY `no_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `detail_mutasi`
--
ALTER TABLE `detail_mutasi`
  MODIFY `id_detail_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penyusutan`
--
ALTER TABLE `penyusutan`
  MODIFY `id_penyusutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT untuk tabel `tmp`
--
ALTER TABLE `tmp`
  MODIFY `no_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aset_tidak_habis_pakai`
--
ALTER TABLE `aset_tidak_habis_pakai`
  ADD CONSTRAINT `aset_tidak_habis_pakai_ibfk_1` FOREIGN KEY (`no_detail`) REFERENCES `detail_aset` (`no_detail`);

--
-- Ketidakleluasaan untuk tabel `detail_mutasi`
--
ALTER TABLE `detail_mutasi`
  ADD CONSTRAINT `detail_mutasi_ibfk_2` FOREIGN KEY (`no_aset`) REFERENCES `aset_tidak_habis_pakai` (`no_aset`),
  ADD CONSTRAINT `detail_mutasi_ibfk_3` FOREIGN KEY (`id_mutasi`) REFERENCES `mutasi` (`id_mutasi`);

--
-- Ketidakleluasaan untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD CONSTRAINT `pemeliharaan_ibfk_1` FOREIGN KEY (`no_aset`) REFERENCES `aset_tidak_habis_pakai` (`no_aset`);

--
-- Ketidakleluasaan untuk tabel `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD CONSTRAINT `pengadaan_ibfk_1` FOREIGN KEY (`no_perencanaan`) REFERENCES `perencanaan_pengadaan` (`no_perencanaan`);

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`no_aset`) REFERENCES `aset_tidak_habis_pakai` (`no_aset`);

--
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `penyusutan`
--
ALTER TABLE `penyusutan`
  ADD CONSTRAINT `penyusutan_ibfk_1` FOREIGN KEY (`no_aset`) REFERENCES `aset_tidak_habis_pakai` (`no_aset`);

--
-- Ketidakleluasaan untuk tabel `tmp`
--
ALTER TABLE `tmp`
  ADD CONSTRAINT `tmp_ibfk_1` FOREIGN KEY (`no_aset`) REFERENCES `aset_tidak_habis_pakai` (`no_aset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
