-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mar 2018 pada 15.36
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jabatan_dosen`
--

CREATE TABLE `m_jabatan_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `minimal_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_jabatan_dosen`
--

INSERT INTO `m_jabatan_dosen` (`id`, `nama`, `minimal_jam`) VALUES
(1, 'Asisten Ahli', 21),
(2, 'Lektor', 17),
(3, 'Lektor Kepala', 13),
(4, 'Guru Besar', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_status_kegiatan_lkd`
--

CREATE TABLE `m_status_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_status_kegiatan_lkd`
--

INSERT INTO `m_status_kegiatan_lkd` (`id`, `nama`) VALUES
(0, 'Not Fixed'),
(1, 'Fixed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_tipe_dosen`
--

CREATE TABLE `m_tipe_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_tipe_dosen`
--

INSERT INTO `m_tipe_dosen` (`id`, `nama`) VALUES
(1, 'Dosen Tetap'),
(2, 'Dosen Luar Biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_unit_kerja`
--

CREATE TABLE `m_unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_unit_kerja`
--

INSERT INTO `m_unit_kerja` (`id`, `nama`) VALUES
(1, 'Bagian Akademik'),
(2, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `id_pegawai`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin_fakultas`
--

CREATE TABLE `t_admin_fakultas` (
  `id_admin` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_akun`
--

CREATE TABLE `t_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_akun`
--

INSERT INTO `t_akun` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$1ByKTqy1piPtfrlviA5McuYSdaoGcUqrGgMN8bbPsM1iLieFwhBlm'),
(2, 'dosenku', '$2y$10$1eilaJke0OlE5aIkQSm/6.N5RcyVupAFoiDiYcL/NCjI2OKH/ErQO'),
(3, 'mahasiswa', '$2y$10$ycjeCTs.yZrF1PaRkluvBOdjEmMikiP9u0mHdcAIeuENO3v3FkrHq'),
(4, 'dekanku', '$2y$10$VEL1FkFbf/Mpo.suE2/r1.mM0FpM4k85jNz7RpdiPwp4k69oBlN/2'),
(5, 'rektorku', '$2y$10$BEqDmi.nf.C/YiiTH1vbTeGGaYP.meOzSIHozoad1KKRCpT4YBtfC'),
(6, 'agusagus', '$2y$10$HduBsU.K0M/grc10HVeXB.ONWNSD9jDDX7vf3iyXlytMBrFHPduGq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_config_lkd`
--

CREATE TABLE `t_config_lkd` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jam` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_config_lkd`
--

INSERT INTO `t_config_lkd` (`id`, `id_jabatan`, `id_kategori`, `jam`) VALUES
(1, 1, 1, 7.5),
(2, 1, 2, 7.5),
(4, 1, 4, 15.5),
(5, 1, 5, 1),
(6, 2, 1, 7.5),
(7, 2, 2, 5.5),
(9, 2, 4, 19.5),
(10, 2, 5, 1),
(11, 3, 1, 7.5),
(12, 3, 2, 2.5),
(14, 3, 4, 23.5),
(15, 3, 5, 1),
(16, 4, 1, 7.5),
(17, 4, 2, 1),
(19, 4, 4, 27.5),
(20, 4, 5, 1),
(25, 1, 7, 0),
(26, 2, 7, 0),
(27, 3, 7, 0),
(28, 4, 7, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dekan`
--

CREATE TABLE `t_dekan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dekan`
--

INSERT INTO `t_dekan` (`id`, `id_pegawai`, `id_fakultas`) VALUES
(1, 4, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_lkd`
--

CREATE TABLE `t_detail_lkd` (
  `id` int(11) NOT NULL,
  `jam_awal` varchar(10) NOT NULL,
  `jam_akhir` varchar(10) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `id_lkd_harian` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_detail_lkd`
--

INSERT INTO `t_detail_lkd` (`id`, `jam_awal`, `jam_akhir`, `id_kegiatan`, `id_lkd_harian`, `created_at`, `updated_at`) VALUES
(3, '13:00', '16:00', 1, 1, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(4, '13:30', '14:30', 1, 3, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(5, '14:30', '15:30', 2, 3, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(6, '13:00', '15:30', 2, 2, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(7, '15:00', '16:00', 3, 2, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(8, '11:00', '13:00', 1, 2, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(9, '14:00', '15:00', 1, 4, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(10, '15:00', '18:00', 5, 5, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(11, '10:00', '11:00', 2, 5, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(14, '13:10', '16:00', 2, 6, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(15, '16:00', '18:00', 1, 6, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(16, '07:30', '09:00', 2, 7, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(17, '13:30', '15:30', 2, 7, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(18, '15:30', '19:00', 3, 7, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(19, '13:00', '16:00', 4, 8, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(20, '07:00', '09:00', 2, 8, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(21, '11:00', '12:00', 6, 8, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(22, '07:00', '11:00', 1, 9, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(23, '11:00', '15:00', 3, 9, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(27, '01:00', '02:00', 2, 14, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(28, '02:00', '03:00', 3, 14, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(29, '07:00', '09:00', 1, 21, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(30, '00:00', '10:00', 4, 2, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(31, '13:00', '15:00', 2, 23, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(32, '07:00', '09:00', 2, 24, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(33, '09:00', '12:00', 5, 24, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(34, '16:00', '18:00', 2, 24, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(35, '13:00', '15:00', 1, 24, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(36, '07:30', '09:30', 1, 26, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(37, '13:00', '15:00', 3, 26, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(38, '16:00', '17:00', 5, 26, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(39, '14:00', '16:00', 6, 27, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(40, '13:00', '15:00', 3, 28, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(41, '01:00', '15:00', 2, 29, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(42, '13:00', '15:00', 1, 30, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(43, '13:00', '15:00', 3, 31, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(44, '01:00', '03:00', 1, 33, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(45, '12:00', '14:00', 3, 33, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(46, '13:00', '14:00', 2, 34, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(47, '02:00', '14:00', 3, 35, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(48, '01:00', '02:00', 5, 36, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(49, '14:00', '15:00', 2, 35, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(50, '14:00', '16:00', 3, 37, '2018-03-22 14:01:06', '2018-03-22 14:01:06'),
(51, '15:00', '16:00', 4, 38, '2018-03-22 14:02:47', '2018-03-22 14:02:47'),
(52, '13:00', '15:00', 1, 39, '2018-03-22 14:04:58', '2018-03-22 14:04:58'),
(53, '14:00', '16:00', 2, 40, '2018-03-22 14:06:43', '2018-03-22 14:06:43'),
(54, '02:00', '15:00', 2, 41, '2018-03-22 14:07:27', '2018-03-22 14:07:27'),
(55, '08:00', '11:00', 2, 42, '2018-03-22 14:12:35', '2018-03-22 14:12:35'),
(56, '12:00', '15:00', 2, 42, '2018-03-22 14:12:35', '2018-03-22 14:12:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_tipe` int(11) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`id`, `id_pegawai`, `id_fakultas`, `id_tipe`, `id_unit_kerja`, `id_jabatan`) VALUES
(2, 1, 2, 1, 1, 1),
(4, NULL, NULL, 2, NULL, NULL),
(8, NULL, NULL, 2, 2, 2),
(9, NULL, NULL, 1, 1, 1),
(10, 2, 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_fakultas`
--

CREATE TABLE `t_fakultas` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_fakultas`
--

INSERT INTO `t_fakultas` (`id`, `nama`) VALUES
(1, 'Fakultas Syariah'),
(2, 'Fakultas Tarbiyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori_kegiatan_lkd`
--

CREATE TABLE `t_kategori_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alias` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori_kegiatan_lkd`
--

INSERT INTO `t_kategori_kegiatan_lkd` (`id`, `nama`, `alias`) VALUES
(1, 'Pengajaran', 'ajar'),
(2, 'Pembimbingan', 'bimbing'),
(4, 'Penelitian dan Pengabdian', 'litab'),
(5, 'Kegiatan Penunjang', 'tunjang'),
(7, 'Pengujian', 'uji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kegiatan_lkd`
--

CREATE TABLE `t_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kegiatan_lkd`
--

INSERT INTO `t_kegiatan_lkd` (`id`, `nama`, `id_kategori`, `id_status`) VALUES
(1, 'Menulis Jurnal', 4, 0),
(2, 'Mengajar', 1, 1),
(3, 'Membimbing', 2, 0),
(4, 'Menguji', 7, 0),
(5, 'Menerjemahkan Buku', 4, 0),
(6, 'Tunjang', 5, 0),
(7, 'Pengabdian', 4, 0),
(8, 'Penelitian', 4, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lkd_harian`
--

CREATE TABLE `t_lkd_harian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_lkd_harian`
--

INSERT INTO `t_lkd_harian` (`id`, `tanggal`, `id_pengajuan`, `created_at`, `updated_at`) VALUES
(1, '2018-03-02', 8, '2018-03-14 11:04:50', '2018-03-14 11:04:50'),
(2, '2018-03-01', 8, '2018-03-14 12:37:45', '2018-03-14 12:37:45'),
(3, '2018-03-03', 8, '2018-03-14 13:18:50', '2018-03-14 13:18:50'),
(4, '2018-02-28', 8, '2018-03-15 10:15:40', '2018-03-15 10:15:40'),
(5, '2018-02-27', 8, '2018-03-15 10:18:10', '2018-03-15 10:18:10'),
(6, '2018-03-12', 1, '2018-03-15 15:07:44', '2018-03-15 15:07:44'),
(7, '2018-03-13', 1, '2018-03-15 15:08:46', '2018-03-15 15:08:46'),
(8, '2018-03-14', 1, '2018-03-15 15:10:20', '2018-03-15 15:10:20'),
(9, '2018-03-15', 1, '2018-03-15 15:16:33', '2018-03-15 15:16:33'),
(14, '2018-02-20', 9, '2018-03-16 01:58:45', '2018-03-16 02:05:35'),
(16, '2018-03-16', 1, '2018-03-16 14:35:38', '2018-03-16 14:35:38'),
(17, '2018-03-07', 1, '2018-03-16 14:35:55', '2018-03-16 14:35:55'),
(18, '2018-03-08', 1, '2018-03-16 14:44:33', '2018-03-16 14:44:33'),
(19, '2018-03-06', 1, '2018-03-16 14:44:38', '2018-03-16 14:44:38'),
(21, '2018-01-03', 10, '2018-03-16 14:54:30', '2018-03-16 14:54:30'),
(23, '2018-03-06', 11, '2018-03-18 01:15:02', '2018-03-18 01:15:02'),
(24, '2018-03-07', 11, '2018-03-18 01:16:21', '2018-03-18 01:16:21'),
(25, '2018-03-04', 8, '2018-03-18 01:17:38', '2018-03-18 01:17:38'),
(26, '2018-03-05', 11, '2018-03-18 01:17:59', '2018-03-18 01:17:59'),
(27, '2018-03-08', 11, '2018-03-18 01:18:18', '2018-03-18 01:18:18'),
(28, '2018-02-01', 12, '2018-03-18 01:34:25', '2018-03-18 01:34:25'),
(29, '2018-03-05', 13, '2018-03-18 01:35:16', '2018-03-18 01:35:16'),
(30, '2018-02-05', 14, '2018-03-18 01:35:46', '2018-03-18 01:35:46'),
(31, '2018-02-13', 15, '2018-03-18 01:36:11', '2018-03-18 01:36:11'),
(32, '2018-03-18', 1, '2018-03-18 14:59:15', '2018-03-18 14:59:15'),
(33, '2018-03-22', 16, '2018-03-22 09:57:44', '2018-03-22 09:57:44'),
(34, '2018-02-01', 17, '2018-03-22 13:47:50', '2018-03-22 13:47:50'),
(35, '2018-03-08', 18, '2018-03-22 13:48:10', '2018-03-22 13:48:10'),
(36, '2018-02-15', 19, '2018-03-22 13:48:23', '2018-03-22 13:48:23'),
(37, '2018-02-22', 20, '2018-03-22 14:01:06', '2018-03-22 14:01:06'),
(38, '2018-02-10', 21, '2018-03-22 14:02:47', '2018-03-22 14:02:47'),
(39, '2018-02-07', 21, '2018-03-22 14:04:57', '2018-03-22 14:04:57'),
(40, '2018-02-05', 21, '2018-03-22 14:06:43', '2018-03-22 14:06:43'),
(41, '2018-02-08', 21, '2018-03-22 14:07:27', '2018-03-22 14:07:27'),
(42, '2018-03-15', 22, '2018-03-22 14:12:35', '2018-03-22 14:12:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  `id_akun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kode_pos`, `id_akun`) VALUES
(1, '1301178453', 'Baso Ahmad Muflih Yunus', 'Sengkang', '2018-03-08', 'Jalan Serikaya', '90915', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `ttd` varchar(150) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pegawai`
--

INSERT INTO `t_pegawai` (`id`, `nip`, `nama`, `email`, `no_telp`, `ttd`, `id_akun`, `id_status`) VALUES
(1, '123456789', 'Surya Eka', 'suryaeka@gmail.com', '082363242545', 'assets/images/signatures/c4ca4238a0b923820dcc509a6f75849b1.png', 2, 1),
(2, '987654321', 'Andi Agus', '', '', '', 6, 1),
(3, '4545454', 'Mas Admin', 'admin@gmail.com', '01232334', '', 1, 1),
(4, '99943039493', 'Pak Dekan', 'pakdekan@gmail.com', '082363242545', 'assets/images/signatures/a87ff679a2f3e71d9181a67b7542122c1.png', 4, 1),
(5, '88888888', 'Prof. Dr. Mujiburrahman, MA', 'rektor@gmail.com', '02030303', 'assets/images/signatures/e4da3b7fbbce2345d7772b0674a318d51.png', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengajuan_bulanan_lkd`
--

CREATE TABLE `t_pengajuan_bulanan_lkd` (
  `id` int(11) NOT NULL,
  `kode_bulan` varchar(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT '-1',
  `waktu_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pengajuan_bulanan_lkd`
--

INSERT INTO `t_pengajuan_bulanan_lkd` (`id`, `kode_bulan`, `id_dosen`, `status_pengajuan`, `waktu_pengajuan`, `created_at`, `updated_at`) VALUES
(1, '2-2018', 2, 1, '2018-03-20 05:35:37', '2018-03-18 02:22:06', '2018-03-20 05:35:37'),
(2, '2-2018', 10, 1, '2018-03-22 14:19:54', '2018-03-22 14:12:55', '2018-03-22 14:19:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengajuan_lkd`
--

CREATE TABLE `t_pengajuan_lkd` (
  `id` int(11) NOT NULL,
  `waktu_pengajuan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_periode` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT '-1',
  `total` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pengajuan_lkd`
--

INSERT INTO `t_pengajuan_lkd` (`id`, `waktu_pengajuan`, `id_periode`, `id_dosen`, `status_pengajuan`, `total`, `created_at`, `updated_at`) VALUES
(1, '2018-03-19 23:05:54', 4, 2, 1, 25.8, '2018-03-14 07:23:44', '2018-03-20 05:07:58'),
(8, '2018-03-17 18:12:51', 2, 2, 1, 25.5, '2018-03-14 08:35:42', '2018-03-20 05:03:47'),
(9, '2018-03-19 23:32:58', 1, 2, 1, 2, '2018-03-16 01:52:58', '2018-03-20 05:33:18'),
(10, '2018-03-17 18:17:30', 5, 2, -1, 2, '2018-03-16 14:54:29', '2018-03-17 18:17:30'),
(11, '2018-03-18 01:21:22', NULL, 2, 1, 18, '2018-03-18 01:15:02', '2018-03-18 01:21:22'),
(12, '2018-03-18 01:40:58', 7, 2, 1, 2, '2018-03-18 01:34:24', '2018-03-18 01:40:58'),
(13, '2018-03-17 22:08:25', 3, 2, 1, 14, '2018-03-18 01:35:16', '2018-03-20 05:03:47'),
(14, '2018-03-18 01:40:52', 8, 2, 1, 2, '2018-03-18 01:35:46', '2018-03-18 01:40:52'),
(15, '2018-03-19 23:33:03', 9, 2, 1, 2, '2018-03-18 01:36:11', '2018-03-20 05:33:18'),
(16, '2018-03-22 04:00:03', 10, 10, 1, 4, '2018-03-22 09:57:44', '2018-03-22 14:11:10'),
(17, '2018-03-22 08:10:25', 7, 10, 1, 1, '2018-03-22 13:47:50', '2018-03-22 14:11:10'),
(18, '2018-03-22 08:10:00', 3, 10, 1, 13, '2018-03-22 13:48:10', '2018-03-22 14:11:10'),
(19, '2018-03-22 08:10:16', 9, 10, 1, 1, '2018-03-22 13:48:22', '2018-03-22 14:11:10'),
(20, '2018-03-22 08:10:11', 1, 10, 1, 2, '2018-03-22 14:01:06', '2018-03-22 14:11:10'),
(21, '2018-03-22 08:10:20', 8, 10, 1, 18, '2018-03-22 14:02:47', '2018-03-22 14:11:10'),
(22, '0000-00-00 00:00:00', 4, 10, -1, 0, '2018-03-22 14:12:35', '2018-03-22 14:12:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_periode_lkd`
--

CREATE TABLE `t_periode_lkd` (
  `id` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_periode_lkd`
--

INSERT INTO `t_periode_lkd` (`id`, `tanggal_awal`, `tanggal_akhir`) VALUES
(5, '2018-01-01', '2018-01-07'),
(7, '2018-01-29', '2018-02-04'),
(8, '2018-02-05', '2018-02-11'),
(9, '2018-02-12', '2018-02-18'),
(1, '2018-02-19', '2018-02-25'),
(2, '2018-02-26', '2018-03-04'),
(3, '2018-03-05', '2018-03-11'),
(4, '2018-03-12', '2018-03-18'),
(10, '2018-03-19', '2018-03-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rektor`
--

CREATE TABLE `t_rektor` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_rektor`
--

INSERT INTO `t_rektor` (`id`, `id_pegawai`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_riwayat_login`
--

CREATE TABLE `t_riwayat_login` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_role_admin`
--

CREATE TABLE `t_role_admin` (
  `id_admin` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_role_admin`
--

INSERT INTO `t_role_admin` (`id_admin`, `id_tipe`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_status_lkd`
--

CREATE TABLE `t_status_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_status_lkd`
--

INSERT INTO `t_status_lkd` (`id`, `nama`) VALUES
(-1, 'Belum Mengajukan ACC'),
(0, 'Menunggu ACC'),
(1, 'Telah di-ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_status_login`
--

CREATE TABLE `t_status_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_status_login`
--

INSERT INTO `t_status_login` (`id`, `nama`) VALUES
(0, 'FAILED'),
(1, 'SUCCESS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_status_user`
--

CREATE TABLE `t_status_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_status_user`
--

INSERT INTO `t_status_user` (`id`, `nama`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tipe_admin`
--

CREATE TABLE `t_tipe_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tipe_admin`
--

INSERT INTO `t_tipe_admin` (`id`, `nama`) VALUES
(1, 'Super Admin'),
(2, 'Admin Sisfo'),
(3, 'Admin SMB'),
(4, 'Admin Keuangan'),
(5, 'Admin Fakultas'),
(6, 'Admin Prodi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
('mhs', '0357a7592c4734a8b1e12bc48e29e9e9', 'mhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_jabatan_dosen`
--
ALTER TABLE `m_jabatan_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_status_kegiatan_lkd`
--
ALTER TABLE `m_status_kegiatan_lkd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_tipe_dosen`
--
ALTER TABLE `m_tipe_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_unit_kerja`
--
ALTER TABLE `m_unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_admin_ibfk_1` (`id_pegawai`);

--
-- Indexes for table `t_admin_fakultas`
--
ALTER TABLE `t_admin_fakultas`
  ADD PRIMARY KEY (`id_admin`,`id_fakultas`);

--
-- Indexes for table `t_akun`
--
ALTER TABLE `t_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `t_dekan`
--
ALTER TABLE `t_dekan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `id_lkd_harian` (`id_lkd_harian`);

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_unit_kerja` (`id_unit_kerja`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tipe_2` (`id_tipe`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kategori_kegiatan_lkd`
--
ALTER TABLE `t_kategori_kegiatan_lkd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tanggal` (`tanggal`,`id_pengajuan`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_akun`);

--
-- Indexes for table `t_pengajuan_bulanan_lkd`
--
ALTER TABLE `t_pengajuan_bulanan_lkd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_bulan` (`kode_bulan`,`id_dosen`),
  ADD KEY `status_pengajuan` (`status_pengajuan`),
  ADD KEY `t_pengajuan_bulanan_lkd_ibfk_1` (`id_dosen`);

--
-- Indexes for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `status_pengajuan` (`status_pengajuan`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `t_periode_lkd`
--
ALTER TABLE `t_periode_lkd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tanggal_awal` (`tanggal_awal`,`tanggal_akhir`);

--
-- Indexes for table `t_rektor`
--
ALTER TABLE `t_rektor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `t_riwayat_login`
--
ALTER TABLE `t_riwayat_login`
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status_2` (`id_status`);

--
-- Indexes for table `t_role_admin`
--
ALTER TABLE `t_role_admin`
  ADD PRIMARY KEY (`id_admin`,`id_tipe`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `t_status_lkd`
--
ALTER TABLE `t_status_lkd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_status_login`
--
ALTER TABLE `t_status_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_status_user`
--
ALTER TABLE `t_status_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tipe_admin`
--
ALTER TABLE `t_tipe_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_jabatan_dosen`
--
ALTER TABLE `m_jabatan_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_status_kegiatan_lkd`
--
ALTER TABLE `m_status_kegiatan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_tipe_dosen`
--
ALTER TABLE `m_tipe_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_unit_kerja`
--
ALTER TABLE `m_unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_akun`
--
ALTER TABLE `t_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `t_dekan`
--
ALTER TABLE `t_dekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_kategori_kegiatan_lkd`
--
ALTER TABLE `t_kategori_kegiatan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_pengajuan_bulanan_lkd`
--
ALTER TABLE `t_pengajuan_bulanan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_periode_lkd`
--
ALTER TABLE `t_periode_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_rektor`
--
ALTER TABLE `t_rektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_status_login`
--
ALTER TABLE `t_status_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_status_user`
--
ALTER TABLE `t_status_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_tipe_admin`
--
ALTER TABLE `t_tipe_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD CONSTRAINT `t_admin_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  ADD CONSTRAINT `t_config_lkd_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `m_jabatan_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_config_lkd_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_dekan`
--
ALTER TABLE `t_dekan`
  ADD CONSTRAINT `t_dekan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dekan_ibfk_2` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  ADD CONSTRAINT `t_detail_lkd_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `t_kegiatan_lkd` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_detail_lkd_ibfk_2` FOREIGN KEY (`id_lkd_harian`) REFERENCES `t_lkd_harian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD CONSTRAINT `t_dosen_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `m_tipe_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `m_jabatan_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_3` FOREIGN KEY (`id_unit_kerja`) REFERENCES `m_unit_kerja` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_5` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `m_status_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  ADD CONSTRAINT `t_lkd_harian_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `t_pengajuan_lkd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD CONSTRAINT `t_mahasiswa_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD CONSTRAINT `t_pegawai_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pegawai_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pengajuan_bulanan_lkd`
--
ALTER TABLE `t_pengajuan_bulanan_lkd`
  ADD CONSTRAINT `t_pengajuan_bulanan_lkd_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_bulanan_lkd_ibfk_2` FOREIGN KEY (`status_pengajuan`) REFERENCES `t_status_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_2` FOREIGN KEY (`status_pengajuan`) REFERENCES `t_status_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_3` FOREIGN KEY (`id_periode`) REFERENCES `t_periode_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_rektor`
--
ALTER TABLE `t_rektor`
  ADD CONSTRAINT `t_rektor_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_riwayat_login`
--
ALTER TABLE `t_riwayat_login`
  ADD CONSTRAINT `t_riwayat_login_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_login` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_riwayat_login_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_role_admin`
--
ALTER TABLE `t_role_admin`
  ADD CONSTRAINT `t_role_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_role_admin_ibfk_2` FOREIGN KEY (`id_tipe`) REFERENCES `t_tipe_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
