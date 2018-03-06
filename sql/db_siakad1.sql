-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mar 2018 pada 19.20
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
-- Struktur dari tabel `m_dosen`
--

CREATE TABLE `m_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `id_tipe` int(11) DEFAULT NULL,
  `id_unit_kerja` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_dosen`
--

INSERT INTO `m_dosen` (`id`, `nip`, `nama`, `kontak`, `id_tipe`, `id_unit_kerja`, `id_jabatan`) VALUES
(2, '1301178453', 'A. Agus', '082363242545', 1, 1, 1),
(4, '12345', 'Arian', '', 2, NULL, NULL),
(8, '21', 'asas', '', 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_jabatan_dosen`
--

CREATE TABLE `m_jabatan_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_jabatan_dosen`
--

INSERT INTO `m_jabatan_dosen` (`id`, `nama`) VALUES
(1, 'Asisten Ahli'),
(2, 'Lektor'),
(3, 'Lektor Kepala'),
(4, 'Guru Besar');

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
(1, 'Penelitian dan Pengabdian', 'litab'),
(2, 'Pengajaran', 'ajar'),
(3, 'Pembimbingan', 'bimbing'),
(4, 'Pengujian', 'ujii'),
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
(1, 'Menulis Jurnal', 1, 0),
(2, 'Mengajar', 2, 1),
(3, 'Membimbing', 3, 0),
(4, 'Menguji', 4, 0),
(5, 'Menerjemahkan Buku', 1, 0),
(6, 'Tunjang', 5, 0),
(7, 'Pengabdian', 1, 0),
(8, 'Penelitian', 1, 0);

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
-- Indexes for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_unit_kerja` (`id_unit_kerja`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tipe_2` (`id_tipe`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_dosen`
--
ALTER TABLE `m_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_jabatan_dosen`
--
ALTER TABLE `m_jabatan_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_status_kegiatan_lkd`
--
ALTER TABLE `m_status_kegiatan_lkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD CONSTRAINT `m_dosen_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `m_tipe_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `m_dosen_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `m_jabatan_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `m_dosen_ibfk_3` FOREIGN KEY (`id_unit_kerja`) REFERENCES `m_unit_kerja` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_kegiatan_lkd`
--
ALTER TABLE `t_kegiatan_lkd`
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kegiatan_lkd_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `m_status_kegiatan_lkd` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
