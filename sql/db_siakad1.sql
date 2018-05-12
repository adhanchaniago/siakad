-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 06:45 PM
-- Server version: 10.1.28-MariaDB
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
-- Table structure for table `m_jabatan_dosen`
--

CREATE TABLE `m_jabatan_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `minimal_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jabatan_dosen`
--

INSERT INTO `m_jabatan_dosen` (`id`, `nama`, `minimal_jam`) VALUES
(1, 'Asisten Ahli', 21),
(2, 'Lektor', 17),
(3, 'Lektor Kepala', 13),
(4, 'Guru Besar', 9);

-- --------------------------------------------------------

--
-- Table structure for table `m_status_kegiatan_lkd`
--

CREATE TABLE `m_status_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_status_kegiatan_lkd`
--

INSERT INTO `m_status_kegiatan_lkd` (`id`, `nama`) VALUES
(0, 'Not Fixed'),
(1, 'Fixed');

-- --------------------------------------------------------

--
-- Table structure for table `m_tipe_dosen`
--

CREATE TABLE `m_tipe_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_tipe_dosen`
--

INSERT INTO `m_tipe_dosen` (`id`, `nama`) VALUES
(1, 'Dosen Tetap'),
(2, 'Dosen Luar Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `m_unit_kerja`
--

CREATE TABLE `m_unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_unit_kerja`
--

INSERT INTO `m_unit_kerja` (`id`, `nama`) VALUES
(1, 'Bagian Akademik'),
(2, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `id_pegawai`, `id_status`) VALUES
(1, 3, 1),
(2, 6, 1),
(3, 8, 1),
(4, 4, 1),
(5, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_fakultas`
--

CREATE TABLE `t_admin_fakultas` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin_fakultas`
--

INSERT INTO `t_admin_fakultas` (`id`, `id_admin`, `id_fakultas`) VALUES
(3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_jurusan`
--

CREATE TABLE `t_admin_jurusan` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin_jurusan`
--

INSERT INTO `t_admin_jurusan` (`id`, `id_admin`, `id_jurusan`) VALUES
(5, 1, 11),
(4, 2, 1),
(2, 2, 9),
(3, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `t_akreditasi_sekolah`
--

CREATE TABLE `t_akreditasi_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_akreditasi_sekolah`
--

INSERT INTO `t_akreditasi_sekolah` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun`
--

CREATE TABLE `t_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_akun`
--

INSERT INTO `t_akun` (`id`, `username`, `password`) VALUES
(1, 'adminku', '$2y$10$Jz5eXfsBgPkc5jGmFW6tMuPRD3DxJXr0kMbGT1N7JBkEHjvYl4Deu'),
(2, 'dosenku', '$2y$10$kjoVdv8311uC/vRO6jHW/.MIes0yzDWNXbhCFXbzUlQ/cXfZoMNni'),
(3, 'mahasiswa', '$2y$10$ycjeCTs.yZrF1PaRkluvBOdjEmMikiP9u0mHdcAIeuENO3v3FkrHq'),
(4, 'dekanku', '$2y$10$QUXlp3YnVQV4ivA1Aws6nehcmPPxIagJWJ1EgwLq0BhERbC4jIExO'),
(5, 'rektorku', '$2y$10$BEqDmi.nf.C/YiiTH1vbTeGGaYP.meOzSIHozoad1KKRCpT4YBtfC'),
(6, 'agusagus', '$2y$10$HduBsU.K0M/grc10HVeXB.ONWNSD9jDDX7vf3iyXlytMBrFHPduGq'),
(7, 'adminsmbb', '$2y$10$vu1yUPcK8RUe5s5uX6Nx8u2HW0r/QOj3vnF1RowpDFm/ztZncpCPy'),
(9, 'ahmaadmuflih', '$2y$10$rTVFkwH0uZ4beb6Q2jDeP.bdZiu886aAbd6nbuAg64/RhEEm7mXMi'),
(10, 'assaas', '$2y$10$hjNRi8USnU.Gf/B.wbkJ9.9NpHAkxpoJE1iE9XRobuow2J7aB8guC'),
(11, 'superadmin', '$2y$10$/VKTOFzZ74vADOxHeAaxxuOVVM94uDcjltkK0KUsX3NPRlreRuC9m');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_pmb`
--

CREATE TABLE `t_akun_pmb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_config_kampus`
--

CREATE TABLE `t_config_kampus` (
  `id` int(11) NOT NULL,
  `option_code` varchar(20) NOT NULL,
  `option_type` int(11) NOT NULL,
  `option_category` int(11) NOT NULL,
  `option_name` varchar(50) NOT NULL,
  `option_data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_config_kampus`
--

INSERT INTO `t_config_kampus` (`id`, `option_code`, `option_type`, `option_category`, `option_name`, `option_data`) VALUES
(1, 'kode_badan_hukum', 2, 1, 'Kode Badan Hukum', '0'),
(2, 'kode_perguruan', 2, 1, 'Kode Perguruan Tinggi', '1'),
(3, 'nama_perguruan', 2, 1, 'Nama Perguruan Tinggi', '2'),
(4, 'singkatan', 2, 1, 'Nama Singkatan', '3'),
(5, 'tanggal_berdiri', 2, 1, 'Tanggal Berdiri', '4'),
(6, 'alamat', 2, 2, 'Alamat', '5'),
(7, 'kota', 2, 2, 'Kota', '6'),
(8, 'pos', 1, 2, 'POS', '7'),
(9, 'no_telp', 1, 2, 'No. Telepon', '8'),
(10, 'fax', 1, 2, 'Fax', '9'),
(11, 'email', 3, 2, 'Email', '10'),
(12, 'website', 2, 2, 'Website', '11'),
(13, 'no_akta', 2, 3, 'Nomor', '1'),
(14, 'tanggal_akta', 4, 3, 'Tanggal Akta', '2'),
(15, 'no_pn', 2, 3, 'Nomor P.N', '3'),
(16, 'tanggal_berdiri_akta', 4, 3, 'Tanggal Berdiri', '4'),
(17, 'no_pengesahan', 2, 4, 'No Pengesahan', '1'),
(18, 'tanggal_pengesahan', 2, 4, 'Tanggal Pengesahan', '2'),
(19, 'akreditasi', 2, 4, 'Akreditasi', '3');

-- --------------------------------------------------------

--
-- Table structure for table `t_config_lkd`
--

CREATE TABLE `t_config_lkd` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jam` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_config_lkd`
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
-- Table structure for table `t_config_option`
--

CREATE TABLE `t_config_option` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_config_option`
--

INSERT INTO `t_config_option` (`id`, `nama`) VALUES
(1, 'number'),
(2, 'text'),
(3, 'email'),
(4, 'date');

-- --------------------------------------------------------

--
-- Table structure for table `t_dekan`
--

CREATE TABLE `t_dekan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dekan`
--

INSERT INTO `t_dekan` (`id`, `id_pegawai`, `id_status`) VALUES
(1, 4, 1),
(5, 1, 1),
(6, 2, 1),
(7, 3, 1),
(10, 5, 1),
(13, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_lkd`
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
-- Dumping data for table `t_detail_lkd`
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
(27, '01:00', '02:00', 2, 14, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(28, '02:00', '03:00', 3, 14, '2018-03-22 14:00:06', '2018-03-22 14:00:06'),
(29, '07:00', '09:00', 3, 21, '2018-03-22 14:00:06', '2018-03-25 23:24:05'),
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
(56, '12:00', '15:00', 2, 42, '2018-03-22 14:12:35', '2018-03-22 14:12:35'),
(57, '00:00', '13:00', 1, 43, '2018-05-05 13:08:17', '2018-05-05 13:08:17'),
(58, '07:00', '09:00', 3, 44, '2018-05-12 15:23:02', '2018-05-12 15:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL,
  `id_tipe` int(11) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`id`, `id_pegawai`, `id_fakultas`, `id_tipe`, `id_unit_kerja`, `id_jabatan`, `id_status`) VALUES
(2, 1, 2, 1, 1, 1, 1),
(4, NULL, NULL, 2, NULL, NULL, 1),
(8, NULL, NULL, 2, 2, 2, 1),
(9, NULL, NULL, 1, 1, 1, 1),
(10, 2, 2, 1, 1, 2, 1),
(11, 4, NULL, NULL, NULL, NULL, 1),
(12, 6, 2, 1, 1, 1, 1),
(13, 7, NULL, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_fakultas`
--

CREATE TABLE `t_fakultas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_fakultas`
--

INSERT INTO `t_fakultas` (`id`, `kode`, `nama`) VALUES
(1, '12', 'FAKULTAS SYARIAH'),
(2, '13', 'FAKULTAS TARBIYAH'),
(5, '33', 'USLUHUDDIN DAN HUMANIORA'),
(6, '55', 'EKONOMI DAN BISNIS ISLAM'),
(7, '444', 'FAKULTAS DAKWAH DAN ILMU KOMUNIKASII'),
(10, '44', 'SASA');

-- --------------------------------------------------------

--
-- Table structure for table `t_gedung`
--

CREATE TABLE `t_gedung` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_gedung`
--

INSERT INTO `t_gedung` (`id`, `kode`, `nama`, `id_status`) VALUES
(1, 'KU3', 'Gedung tokong nanas', 1),
(2, 'KU2', 'AA', 1),
(3, 'KU1', 'za', 1),
(4, 'KU4', 'ASSA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_jenjang_jurusan`
--

CREATE TABLE `t_jenjang_jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jenjang_jurusan`
--

INSERT INTO `t_jenjang_jurusan` (`id`, `nama`) VALUES
(1, 'S3'),
(2, 'S2'),
(3, 'S1'),
(4, 'D4'),
(5, 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `uuid` varchar(10) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `nama_gelar` varchar(10) NOT NULL,
  `total_sks` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `no_sk_dikti` varchar(20) NOT NULL,
  `tanggal_sk_dikti` date NOT NULL,
  `tanggal_berakhir_sk_dikti` date NOT NULL,
  `file_sk_dikti` varchar(200) NOT NULL,
  `no_sk_ban` varchar(20) NOT NULL,
  `tanggal_sk_ban` date NOT NULL,
  `tanggal_berakhir_sk_ban` date NOT NULL,
  `file_sk_ban` varchar(200) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `id_semester_mulai` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`id`, `kode`, `uuid`, `nama`, `tanggal_berdiri`, `nama_gelar`, `total_sks`, `email`, `no_telp`, `no_sk_dikti`, `tanggal_sk_dikti`, `tanggal_berakhir_sk_dikti`, `file_sk_dikti`, `no_sk_ban`, `tanggal_sk_ban`, `tanggal_berakhir_sk_ban`, `file_sk_ban`, `id_fakultas`, `id_jenjang`, `id_semester_mulai`, `id_status`) VALUES
(1, 'SI', '21', 'Sistem Informasi', '2018-04-10', 'D.4', 114, 'ahmadbaso97@gmail.com', '211212', '1', '0000-00-00', '0000-00-00', '', '2', '0000-00-00', '0000-00-00', '', 5, 4, 1, 1),
(8, 'IF', '21', 'INFORMATIKA', '2018-04-10', 'D.4', 114, 'ahmadbaso97@gmail.com', '211212', '1', '1970-01-01', '1970-01-01', '', '2', '1970-01-01', '1970-01-01', '', 5, 4, 1, 1),
(9, 'EKO', '22', 'EKONOMI', '2018-12-04', 'S. E.', 144, '121@a.com', '12', '1', '2018-12-04', '1970-01-01', '', '2', '1970-01-01', '1970-01-01', '', 1, 3, 1, 1),
(10, 'TK', '123', 'TEKNIK KOMPUTER', '2017-07-13', 'S. Kom.', 144, 'ahmadbaso97@gmail.com', '121212', '1', '2018-06-14', '2018-07-11', '', '2', '2019-02-27', '2018-12-04', '', 5, 2, 1, 1),
(11, '12', '1212', 'FILSAFAT', '2018-04-19', 'S. F', 144, 'ahmadbaso97@gmail.com', '1212', 'q', '2018-04-11', '2018-04-07', '', '1', '2018-04-25', '2018-04-25', '', 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_kabupaten`
--

CREATE TABLE `t_kabupaten` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `id_provinsi` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_kabupaten`
--

INSERT INTO `t_kabupaten` (`id`, `id_provinsi`, `nama`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `t_kaprodi`
--

CREATE TABLE `t_kaprodi` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kaprodi`
--

INSERT INTO `t_kaprodi` (`id`, `id_pegawai`, `id_status`) VALUES
(1, 6, 1),
(2, 5, 1),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori_kegiatan_lkd`
--

CREATE TABLE `t_kategori_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alias` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategori_kegiatan_lkd`
--

INSERT INTO `t_kategori_kegiatan_lkd` (`id`, `nama`, `alias`) VALUES
(1, 'Pengajaran', 'ajar'),
(2, 'Pembimbingan', 'bimbing'),
(4, 'Penelitian dan Pengabdian', 'litab'),
(5, 'Kegiatan Penunjang', 'tunjang'),
(7, 'Pengujian', 'uji');

-- --------------------------------------------------------

--
-- Table structure for table `t_kegiatan_lkd`
--

CREATE TABLE `t_kegiatan_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kegiatan_lkd`
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
-- Table structure for table `t_kelas_jurusan`
--

CREATE TABLE `t_kelas_jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kelas_jurusan`
--

INSERT INTO `t_kelas_jurusan` (`id`, `kode`, `nama`) VALUES
(1, 'R', 'Reguler'),
(2, 'Ex', 'Ekstensi');

-- --------------------------------------------------------

--
-- Table structure for table `t_lkd_harian`
--

CREATE TABLE `t_lkd_harian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_lkd_harian`
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
(42, '2018-03-15', 22, '2018-03-22 14:12:35', '2018-03-22 14:12:35'),
(43, '2018-05-03', 23, '2018-05-05 13:08:17', '2018-05-05 13:08:17'),
(44, '2018-05-10', 24, '2018-05-12 15:23:02', '2018-05-12 15:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
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
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kode_pos`, `id_akun`) VALUES
(1, '1301178453', 'Baso Ahmad Muflih Yunus', 'Sengkang', '2018-03-08', 'Jalan Serikaya', '90915', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
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
-- Dumping data for table `t_pegawai`
--

INSERT INTO `t_pegawai` (`id`, `nip`, `nama`, `email`, `no_telp`, `ttd`, `id_akun`, `id_status`) VALUES
(1, '123456789', 'Surya Eka', 'suryaeka@gmail.com', '082363242545', 'assets/images/signatures/c4ca4238a0b923820dcc509a6f75849b1.png', 2, 1),
(2, '987654321', 'Andi Agus', '', '', '', 6, 1),
(3, '4545454', 'Mas Admin', 'admin@gmail.com', '01232334', '', 1, 1),
(4, '99943039493', 'Pak Dekan', 'pakdekan@gmail.com', '082363242545', 'assets/images/signatures/a87ff679a2f3e71d9181a67b7542122c1.png', 4, 1),
(5, '88888888', 'Prof. Dr. Mujiburrahman, MA', 'rektor@gmail.com', '02030303', 'assets/images/signatures/e4da3b7fbbce2345d7772b0674a318d51.png', 5, 1),
(6, '00000121', 'Pak Admin PMB', 'admin@pmb.com', '12121212', '', 7, 1),
(7, '1233', 'Labaco', 'ahmadbaso97@gmail.com', '', '', 9, 1),
(8, '12333', 'A', '', '', '', 10, 1),
(9, '029292', 'Super Admin', 'superadmin@gmail.com', '121221', '', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuan_bulanan_lkd`
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
-- Dumping data for table `t_pengajuan_bulanan_lkd`
--

INSERT INTO `t_pengajuan_bulanan_lkd` (`id`, `kode_bulan`, `id_dosen`, `status_pengajuan`, `waktu_pengajuan`, `created_at`, `updated_at`) VALUES
(1, '2-2018', 2, 1, '2018-03-20 05:35:37', '2018-03-18 02:22:06', '2018-03-20 05:35:37'),
(2, '2-2018', 10, 1, '2018-03-22 14:19:54', '2018-03-22 14:12:55', '2018-03-22 14:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuan_lkd`
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
-- Dumping data for table `t_pengajuan_lkd`
--

INSERT INTO `t_pengajuan_lkd` (`id`, `waktu_pengajuan`, `id_periode`, `id_dosen`, `status_pengajuan`, `total`, `created_at`, `updated_at`) VALUES
(1, '2018-03-19 23:05:54', 4, 2, -1, 25.8, '2018-03-14 07:23:44', '2018-03-25 23:24:58'),
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
(22, '0000-00-00 00:00:00', 4, 10, -1, 0, '2018-03-22 14:12:35', '2018-03-22 14:12:35'),
(23, '0000-00-00 00:00:00', 11, 2, -1, 0, '2018-05-05 13:08:17', '2018-05-05 13:08:17'),
(24, '2018-05-12 10:23:16', 12, 2, 1, 2, '2018-05-12 15:23:02', '2018-05-12 15:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `t_periode_lkd`
--

CREATE TABLE `t_periode_lkd` (
  `id` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_periode_lkd`
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
(10, '2018-03-19', '2018-03-25'),
(11, '2018-04-30', '2018-05-06'),
(12, '2018-05-07', '2018-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `t_provinsi`
--

CREATE TABLE `t_provinsi` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_provinsi`
--

INSERT INTO `t_provinsi` (`id`, `nama`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `t_rektor`
--

CREATE TABLE `t_rektor` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rektor`
--

INSERT INTO `t_rektor` (`id`, `id_pegawai`, `id_status`) VALUES
(1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_riwayat_login`
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
-- Table structure for table `t_role_admin`
--

CREATE TABLE `t_role_admin` (
  `id_admin` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role_admin`
--

INSERT INTO `t_role_admin` (`id_admin`, `id_role`, `id_status`) VALUES
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 6, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(4, 1, 1),
(4, 2, 1),
(4, 6, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_role_dekan`
--

CREATE TABLE `t_role_dekan` (
  `id` int(11) NOT NULL,
  `id_dekan` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role_dekan`
--

INSERT INTO `t_role_dekan` (`id`, `id_dekan`, `id_role`, `id_fakultas`, `id_status`) VALUES
(2, 1, 1, 2, 1),
(3, 7, 1, 7, 1),
(4, 10, 2, 7, 1),
(11, 5, 3, 7, 1),
(29, 13, 4, 7, 1),
(30, 6, 1, 5, 1),
(31, 6, 1, 7, 1),
(34, 7, 1, 1, 1),
(35, 7, 2, 5, 1),
(36, 1, 2, 6, 1),
(39, 7, 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_role_jurusan`
--

CREATE TABLE `t_role_jurusan` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role_jurusan`
--

INSERT INTO `t_role_jurusan` (`id`, `id_jurusan`, `id_kelas`, `id_status`) VALUES
(1, 9, 1, 1),
(2, 1, 2, 1),
(3, 9, 2, 1),
(4, 8, 1, 1),
(5, 8, 2, 1),
(6, 1, 1, 1),
(7, 10, 1, 0),
(8, 10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_role_kaprodi`
--

CREATE TABLE `t_role_kaprodi` (
  `id` int(11) NOT NULL,
  `id_kajur` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role_kaprodi`
--

INSERT INTO `t_role_kaprodi` (`id`, `id_kajur`, `id_role`, `id_jurusan`, `id_status`) VALUES
(10, 1, 1, 9, 1),
(11, 1, 1, 10, 1),
(14, 2, 1, 8, 1),
(25, 1, 1, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_role_rektor`
--

CREATE TABLE `t_role_rektor` (
  `id` int(11) NOT NULL,
  `id_rektor` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_role_rektor`
--

INSERT INTO `t_role_rektor` (`id`, `id_rektor`, `id_role`, `id_status`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_ruangan`
--

CREATE TABLE `t_ruangan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `id_gedung` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ruangan`
--

INSERT INTO `t_ruangan` (`id`, `kode`, `nama`, `kapasitas`, `id_gedung`, `id_status`) VALUES
(1, 'assa', 'asdasd', 49, 1, 0),
(2, '11.KU2', 'ABCD', 40, 2, 0),
(3, 'KU1.11.11', 'a', 11, 3, 1),
(4, 'KU2.11.11', '1', 12, 2, 1),
(5, 'KU3.12.22', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_sekolah`
--

CREATE TABLE `t_sekolah` (
  `id` int(11) NOT NULL,
  `npsn` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `file_akreditasi` varchar(100) NOT NULL,
  `link_perbaikan` varchar(100) DEFAULT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `id_tipe` int(11) NOT NULL,
  `id_akreditasi` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sekolah`
--

INSERT INTO `t_sekolah` (`id`, `npsn`, `nama`, `alamat`, `kode_pos`, `kontak`, `email`, `file_akreditasi`, `link_perbaikan`, `id_akun`, `id_tipe`, `id_akreditasi`, `id_kabupaten`, `id_status`, `created_at`, `updated_at`) VALUES
(1, '123456', '3 Banjarmasin', 'Jalan Pahlawan no 3, Kel. ABC, Kec. DEF', '22121', '21212112', 'ahmadbaso97@gmail.com', '0', NULL, NULL, 1, 1, 6371, 0, '2018-03-26 13:56:22', '2018-03-26 13:56:22'),
(9, '43434343', '2 Banjarmasin', 'jalan a', '12', '22', 'baso@4nesia.com', '', NULL, NULL, 3, 1, 5271, 0, '2018-03-26 14:03:45', '2018-03-26 14:03:45'),
(10, '03932223', '1 Banjarmasin', 'abcdef', '212112', '212112', 'ahmadbaso97@gmail.com', '', NULL, NULL, 1, 1, 6371, 0, '2018-03-26 14:09:57', '2018-03-26 14:09:57'),
(12, '333233', '1 Bandung', 'abc', '12', '2', 'dev@4nesia.com', '', NULL, NULL, 1, 1, 3273, 0, '2018-03-26 14:11:21', '2018-03-26 14:11:21'),
(13, '1234', '3 Sengkang', 'jalan cendana', '1234', '12322', 'ahmadbaso97@gmail.com', 'assets/pdf/schools/PMB_UJIAN_MASUK_MANDIRI.pdf', NULL, NULL, 1, 2, 7313, 0, '2018-03-26 23:56:27', '2018-03-26 23:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `t_semester`
--

CREATE TABLE `t_semester` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_semester`
--

INSERT INTO `t_semester` (`id`, `nama`) VALUES
(1, 'GANJIL'),
(2, 'GENAP'),
(3, 'PENDEK');

-- --------------------------------------------------------

--
-- Table structure for table `t_semester_ajaran`
--

CREATE TABLE `t_semester_ajaran` (
  `id` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_semester_ajaran`
--

INSERT INTO `t_semester_ajaran` (`id`, `id_semester`, `id_tahun`, `id_status`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_status_jurusan`
--

CREATE TABLE `t_status_jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status_jurusan`
--

INSERT INTO `t_status_jurusan` (`id`, `kode`, `nama`) VALUES
(-1, 'N', 'NON-AKTIF'),
(1, 'A', 'AKTIF'),
(2, 'B', 'ALIH BENTUK'),
(3, 'H', 'HAPUS'),
(4, 'K', 'ALIH KELOLA'),
(5, 'M', 'MERGER');

-- --------------------------------------------------------

--
-- Table structure for table `t_status_lkd`
--

CREATE TABLE `t_status_lkd` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status_lkd`
--

INSERT INTO `t_status_lkd` (`id`, `nama`) VALUES
(-1, 'Belum Mengajukan ACC'),
(0, 'Menunggu ACC'),
(1, 'Telah di-ACC');

-- --------------------------------------------------------

--
-- Table structure for table `t_status_login`
--

CREATE TABLE `t_status_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status_login`
--

INSERT INTO `t_status_login` (`id`, `nama`) VALUES
(0, 'FAILED'),
(1, 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `t_status_pengajuan_sekolah`
--

CREATE TABLE `t_status_pengajuan_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status_pengajuan_sekolah`
--

INSERT INTO `t_status_pengajuan_sekolah` (`id`, `nama`) VALUES
(-1, 'Menunggu Perbaikan'),
(0, 'Menunggu Verifikasi'),
(1, 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `t_status_user`
--

CREATE TABLE `t_status_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status_user`
--

INSERT INTO `t_status_user` (`id`, `nama`) VALUES
(0, 'Non Aktif'),
(1, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `t_tahun`
--

CREATE TABLE `t_tahun` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `tahun_awal` varchar(10) NOT NULL,
  `tahun_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tahun`
--

INSERT INTO `t_tahun` (`id`, `kode`, `tahun_awal`, `tahun_akhir`) VALUES
(1, '1718', '2017', '2018'),
(2, '1617', '2016', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `t_tipe_admin`
--

CREATE TABLE `t_tipe_admin` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tipe_admin`
--

INSERT INTO `t_tipe_admin` (`id`, `kode`, `nama`) VALUES
(1, 'super', 'Super Admin'),
(2, 'sisfo', 'Admin Sisfo'),
(3, 'smb', 'Admin SMB'),
(4, 'keuangan', 'Admin Keuangan'),
(5, 'fakultas', 'Admin Fakultas'),
(6, 'jurusan', 'Admin Jurusan');

-- --------------------------------------------------------

--
-- Table structure for table `t_tipe_dekan`
--

CREATE TABLE `t_tipe_dekan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tipe_dekan`
--

INSERT INTO `t_tipe_dekan` (`id`, `kode`, `nama`) VALUES
(1, 'dekan', 'Dekan'),
(2, 'wadek1', 'Wakil Dekan Akademik'),
(3, 'wadek2', 'Wakil Dekan Keuangan'),
(4, 'wadek3', 'Wakil Dekan Kemahasiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `t_tipe_kaprodi`
--

CREATE TABLE `t_tipe_kaprodi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tipe_kaprodi`
--

INSERT INTO `t_tipe_kaprodi` (`id`, `kode`, `nama`) VALUES
(1, 'kaprodi', 'KETUA JURUSAN'),
(2, 'sekprodi', 'SEKRETARIS JURUSAN');

-- --------------------------------------------------------

--
-- Table structure for table `t_tipe_rektor`
--

CREATE TABLE `t_tipe_rektor` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tipe_rektor`
--

INSERT INTO `t_tipe_rektor` (`id`, `kode`, `nama`) VALUES
(1, 'rektor', 'Rektor'),
(2, 'warek1', 'Pembantu Rektor I'),
(3, 'warek2', 'Pembantu Rektor II'),
(4, 'warek3', 'Pembantu Rektor III'),
(5, 'warek4', 'Pembantu Rektor IV'),
(6, 'warek5', 'Pembantu Rektor V');

-- --------------------------------------------------------

--
-- Table structure for table `t_tipe_sekolah`
--

CREATE TABLE `t_tipe_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tipe_sekolah`
--

INSERT INTO `t_tipe_sekolah` (`id`, `nama`) VALUES
(1, 'SMA'),
(2, 'SMK'),
(3, 'MA'),
(4, 'MAK');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
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
  ADD KEY `t_admin_ibfk_1` (`id_pegawai`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_admin_fakultas`
--
ALTER TABLE `t_admin_fakultas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_admin` (`id_admin`,`id_fakultas`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `t_admin_jurusan`
--
ALTER TABLE `t_admin_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_admin` (`id_admin`,`id_jurusan`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `t_akreditasi_sekolah`
--
ALTER TABLE `t_akreditasi_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_akun`
--
ALTER TABLE `t_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_akun_pmb`
--
ALTER TABLE `t_akun_pmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_config_kampus`
--
ALTER TABLE `t_config_kampus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_type` (`option_type`),
  ADD KEY `option_category` (`option_category`);

--
-- Indexes for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `t_config_option`
--
ALTER TABLE `t_config_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_dekan`
--
ALTER TABLE `t_dekan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_status` (`id_status`);

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
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_gedung`
--
ALTER TABLE `t_gedung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_jenjang_jurusan`
--
ALTER TABLE `t_jenjang_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_jenjang` (`id_jenjang`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_semester_mulai` (`id_semester_mulai`);

--
-- Indexes for table `t_kabupaten`
--
ALTER TABLE `t_kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`id_provinsi`);

--
-- Indexes for table `t_kaprodi`
--
ALTER TABLE `t_kaprodi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_status` (`id_status`);

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
-- Indexes for table `t_kelas_jurusan`
--
ALTER TABLE `t_kelas_jurusan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `t_provinsi`
--
ALTER TABLE `t_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_rektor`
--
ALTER TABLE `t_rektor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_status` (`id_status`);

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
  ADD PRIMARY KEY (`id_admin`,`id_role`),
  ADD KEY `id_tipe` (`id_role`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_role_dekan`
--
ALTER TABLE `t_role_dekan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dekan` (`id_dekan`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_role_jurusan`
--
ALTER TABLE `t_role_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_jurusan` (`id_jurusan`,`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_role_kaprodi`
--
ALTER TABLE `t_role_kaprodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kaprodi` (`id_kajur`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_prodi` (`id_jurusan`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_role_rektor`
--
ALTER TABLE `t_role_rektor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rektor` (`id_rektor`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_ruangan`
--
ALTER TABLE `t_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gedung` (`id_gedung`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_akreditasi` (`id_akreditasi`),
  ADD KEY `id_tipe_2` (`id_tipe`),
  ADD KEY `id_akun_2` (`id_akun`),
  ADD KEY `id_kabupaten` (`id_kabupaten`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_semester`
--
ALTER TABLE `t_semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_semester_ajaran`
--
ALTER TABLE `t_semester_ajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `t_status_jurusan`
--
ALTER TABLE `t_status_jurusan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `t_status_pengajuan_sekolah`
--
ALTER TABLE `t_status_pengajuan_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_status_user`
--
ALTER TABLE `t_status_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tahun`
--
ALTER TABLE `t_tahun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `t_tipe_admin`
--
ALTER TABLE `t_tipe_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tipe_dekan`
--
ALTER TABLE `t_tipe_dekan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tipe_kaprodi`
--
ALTER TABLE `t_tipe_kaprodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tipe_rektor`
--
ALTER TABLE `t_tipe_rektor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tipe_sekolah`
--
ALTER TABLE `t_tipe_sekolah`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_admin_fakultas`
--
ALTER TABLE `t_admin_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_admin_jurusan`
--
ALTER TABLE `t_admin_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_akreditasi_sekolah`
--
ALTER TABLE `t_akreditasi_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_akun`
--
ALTER TABLE `t_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_akun_pmb`
--
ALTER TABLE `t_akun_pmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_config_kampus`
--
ALTER TABLE `t_config_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `t_config_option`
--
ALTER TABLE `t_config_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_dekan`
--
ALTER TABLE `t_dekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_gedung`
--
ALTER TABLE `t_gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_jenjang_jurusan`
--
ALTER TABLE `t_jenjang_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_kaprodi`
--
ALTER TABLE `t_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `t_kelas_jurusan`
--
ALTER TABLE `t_kelas_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_pengajuan_bulanan_lkd`
--
ALTER TABLE `t_pengajuan_bulanan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_periode_lkd`
--
ALTER TABLE `t_periode_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_rektor`
--
ALTER TABLE `t_rektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_role_dekan`
--
ALTER TABLE `t_role_dekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `t_role_jurusan`
--
ALTER TABLE `t_role_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_role_kaprodi`
--
ALTER TABLE `t_role_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_role_rektor`
--
ALTER TABLE `t_role_rektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_ruangan`
--
ALTER TABLE `t_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_semester`
--
ALTER TABLE `t_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_semester_ajaran`
--
ALTER TABLE `t_semester_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_status_jurusan`
--
ALTER TABLE `t_status_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_status_login`
--
ALTER TABLE `t_status_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_status_user`
--
ALTER TABLE `t_status_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_tahun`
--
ALTER TABLE `t_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_tipe_admin`
--
ALTER TABLE `t_tipe_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_tipe_dekan`
--
ALTER TABLE `t_tipe_dekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_tipe_kaprodi`
--
ALTER TABLE `t_tipe_kaprodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_tipe_rektor`
--
ALTER TABLE `t_tipe_rektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_tipe_sekolah`
--
ALTER TABLE `t_tipe_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD CONSTRAINT `t_admin_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_admin_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_admin_fakultas`
--
ALTER TABLE `t_admin_fakultas`
  ADD CONSTRAINT `t_admin_fakultas_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id`),
  ADD CONSTRAINT `t_admin_fakultas_ibfk_2` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`);

--
-- Constraints for table `t_admin_jurusan`
--
ALTER TABLE `t_admin_jurusan`
  ADD CONSTRAINT `t_admin_jurusan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id`),
  ADD CONSTRAINT `t_admin_jurusan_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `t_jurusan` (`id`);

--
-- Constraints for table `t_config_kampus`
--
ALTER TABLE `t_config_kampus`
  ADD CONSTRAINT `t_config_kampus_ibfk_1` FOREIGN KEY (`option_type`) REFERENCES `t_config_option` (`id`);

--
-- Constraints for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  ADD CONSTRAINT `t_config_lkd_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `m_jabatan_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_config_lkd_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_dekan`
--
ALTER TABLE `t_dekan`
  ADD CONSTRAINT `t_dekan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`),
  ADD CONSTRAINT `t_dekan_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  ADD CONSTRAINT `t_detail_lkd_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `t_kegiatan_lkd` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_detail_lkd_ibfk_2` FOREIGN KEY (`id_lkd_harian`) REFERENCES `t_lkd_harian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD CONSTRAINT `t_dosen_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `m_tipe_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `m_jabatan_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_3` FOREIGN KEY (`id_unit_kerja`) REFERENCES `m_unit_kerja` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_5` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_dosen_ibfk_6` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_gedung`
--
ALTER TABLE `t_gedung`
  ADD CONSTRAINT `t_gedung_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD CONSTRAINT `t_jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`),
  ADD CONSTRAINT `t_jurusan_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `t_jenjang_jurusan` (`id`),
  ADD CONSTRAINT `t_jurusan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `t_status_jurusan` (`id`),
  ADD CONSTRAINT `t_jurusan_ibfk_4` FOREIGN KEY (`id_semester_mulai`) REFERENCES `t_semester_ajaran` (`id`);

--
-- Constraints for table `t_kabupaten`
--
ALTER TABLE `t_kabupaten`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `t_provinsi` (`id`);

--
-- Constraints for table `t_kaprodi`
--
ALTER TABLE `t_kaprodi`
  ADD CONSTRAINT `t_kaprodi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`),
  ADD CONSTRAINT `t_kaprodi_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `m_status_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  ADD CONSTRAINT `t_lkd_harian_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `t_pengajuan_lkd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD CONSTRAINT `t_mahasiswa_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD CONSTRAINT `t_pegawai_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pegawai_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_pengajuan_bulanan_lkd`
--
ALTER TABLE `t_pengajuan_bulanan_lkd`
  ADD CONSTRAINT `t_pengajuan_bulanan_lkd_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_bulanan_lkd_ibfk_2` FOREIGN KEY (`status_pengajuan`) REFERENCES `t_status_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_2` FOREIGN KEY (`status_pengajuan`) REFERENCES `t_status_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_3` FOREIGN KEY (`id_periode`) REFERENCES `t_periode_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_rektor`
--
ALTER TABLE `t_rektor`
  ADD CONSTRAINT `t_rektor_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `t_pegawai` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_rektor_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_riwayat_login`
--
ALTER TABLE `t_riwayat_login`
  ADD CONSTRAINT `t_riwayat_login_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_login` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_riwayat_login_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_akun` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `t_role_admin`
--
ALTER TABLE `t_role_admin`
  ADD CONSTRAINT `t_role_admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `t_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_role_admin_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `t_tipe_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_role_admin_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_role_dekan`
--
ALTER TABLE `t_role_dekan`
  ADD CONSTRAINT `t_role_dekan_ibfk_1` FOREIGN KEY (`id_dekan`) REFERENCES `t_dekan` (`id`),
  ADD CONSTRAINT `t_role_dekan_ibfk_2` FOREIGN KEY (`id_fakultas`) REFERENCES `t_fakultas` (`id`),
  ADD CONSTRAINT `t_role_dekan_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `t_tipe_dekan` (`id`),
  ADD CONSTRAINT `t_role_dekan_ibfk_4` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_role_jurusan`
--
ALTER TABLE `t_role_jurusan`
  ADD CONSTRAINT `t_role_jurusan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `t_jurusan` (`id`),
  ADD CONSTRAINT `t_role_jurusan_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `t_kelas_jurusan` (`id`),
  ADD CONSTRAINT `t_role_jurusan_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_role_kaprodi`
--
ALTER TABLE `t_role_kaprodi`
  ADD CONSTRAINT `t_role_kaprodi_ibfk_1` FOREIGN KEY (`id_kajur`) REFERENCES `t_kaprodi` (`id`),
  ADD CONSTRAINT `t_role_kaprodi_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `t_jurusan` (`id`),
  ADD CONSTRAINT `t_role_kaprodi_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `t_tipe_kaprodi` (`id`),
  ADD CONSTRAINT `t_role_kaprodi_ibfk_4` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_role_rektor`
--
ALTER TABLE `t_role_rektor`
  ADD CONSTRAINT `t_role_rektor_ibfk_1` FOREIGN KEY (`id_rektor`) REFERENCES `t_rektor` (`id`),
  ADD CONSTRAINT `t_role_rektor_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `t_tipe_rektor` (`id`),
  ADD CONSTRAINT `t_role_rektor_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);

--
-- Constraints for table `t_ruangan`
--
ALTER TABLE `t_ruangan`
  ADD CONSTRAINT `t_ruangan_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`),
  ADD CONSTRAINT `t_ruangan_ibfk_2` FOREIGN KEY (`id_gedung`) REFERENCES `t_gedung` (`id`);

--
-- Constraints for table `t_semester_ajaran`
--
ALTER TABLE `t_semester_ajaran`
  ADD CONSTRAINT `t_semester_ajaran_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `t_semester` (`id`),
  ADD CONSTRAINT `t_semester_ajaran_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `t_tahun` (`id`),
  ADD CONSTRAINT `t_semester_ajaran_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `t_status_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
