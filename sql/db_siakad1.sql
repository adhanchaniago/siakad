-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mar 2018 pada 14.19
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
(3, 'mahasiswa', '$2y$10$ycjeCTs.yZrF1PaRkluvBOdjEmMikiP9u0mHdcAIeuENO3v3FkrHq');

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
(3, 1, 3, 6),
(4, 1, 4, 15.5),
(5, 1, 5, 1),
(6, 2, 1, 7.5),
(7, 2, 2, 5.5),
(8, 2, 3, 4),
(9, 2, 4, 19.5),
(10, 2, 5, 1),
(11, 3, 1, 7.5),
(12, 3, 2, 2.5),
(13, 3, 3, 3),
(14, 3, 4, 23.5),
(15, 3, 5, 1),
(16, 4, 1, 7.5),
(17, 4, 2, 1),
(18, 4, 3, 0.5),
(19, 4, 4, 27.5),
(20, 4, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dekan`
--

CREATE TABLE `t_dekan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_fakultas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_lkd`
--

CREATE TABLE `t_detail_lkd` (
  `id` int(11) NOT NULL,
  `jam_awal` varchar(10) NOT NULL,
  `jam_akhir` varchar(10) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `id_lkd_harian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_detail_lkd`
--

INSERT INTO `t_detail_lkd` (`id`, `jam_awal`, `jam_akhir`, `id_kegiatan`, `id_lkd_harian`) VALUES
(3, '13:00', '16:00', 1, 1),
(4, '13:30', '14:30', 1, 3),
(5, '14:30', '15:30', 2, 3);

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
(2, 1, 1, 1, 1, 1),
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
(3, 'Pengujian', 'ujii'),
(4, 'Penelitian dan Pengabdian', 'litab'),
(5, 'Kegiatan Penunjang', 'tunjang');

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
(4, 'Menguji', 3, 0),
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
(3, '2018-03-03', 8, '2018-03-14 13:18:50', '2018-03-14 13:18:50');

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
  `id_akun` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pegawai`
--

INSERT INTO `t_pegawai` (`id`, `nip`, `nama`, `email`, `no_telp`, `id_akun`, `id_status`) VALUES
(1, '123456789', 'Surya Eka', 'suryaeka@gmail.com', '082363242545', 2, 1),
(2, '987654321', 'Andi Agus', '', '', NULL, 1),
(3, '4545454', 'Mas Admin', 'admin@gmail.com', '01232334', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengajuan_lkd`
--

CREATE TABLE `t_pengajuan_lkd` (
  `id` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `waktu_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_dosen` int(11) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pengajuan_lkd`
--

INSERT INTO `t_pengajuan_lkd` (`id`, `tanggal_awal`, `tanggal_akhir`, `waktu_pengajuan`, `id_dosen`, `status_pengajuan`, `created_at`, `updated_at`) VALUES
(1, '2018-03-12', '2018-03-18', '2018-03-14 07:23:44', 2, 0, '2018-03-14 07:23:44', '2018-03-14 07:23:44'),
(6, '0000-00-00', '0000-00-00', '2018-03-14 07:59:11', 2, NULL, '2018-03-14 07:59:11', '2018-03-14 07:59:11'),
(7, '2018-03-05', '2018-03-10', '2018-03-14 08:35:01', 2, NULL, '2018-03-14 08:35:01', '2018-03-14 08:35:01'),
(8, '2018-02-26', '2018-03-03', '2018-03-14 08:35:42', 2, NULL, '2018-03-14 08:35:42', '2018-03-14 08:35:42');

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
-- Indexes for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `status_pengajuan` (`status_pengajuan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_config_lkd`
--
ALTER TABLE `t_config_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_dekan`
--
ALTER TABLE `t_dekan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_detail_lkd`
--
ALTER TABLE `t_detail_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_lkd_harian`
--
ALTER TABLE `t_lkd_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_status_login`
--
ALTER TABLE `t_status_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `t_detail_lkd_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
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
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
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
-- Ketidakleluasaan untuk tabel `t_pengajuan_lkd`
--
ALTER TABLE `t_pengajuan_lkd`
  ADD CONSTRAINT `t_pengajuan_lkd_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `t_dosen` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

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
