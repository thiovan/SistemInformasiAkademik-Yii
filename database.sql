-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2018 pada 12.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_matakuliah`
--

CREATE TABLE `mst_matakuliah` (
  `id` int(10) NOT NULL,
  `matakuliah` varchar(50) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `jenis` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_matakuliah`
--

INSERT INTO `mst_matakuliah` (`id`, `matakuliah`, `sks`, `semester`, `jenis`) VALUES
(1, 'BAHASA INGGRIS', 2, 4, 'P'),
(2, 'BAHASA INDONESIA', 2, 4, 'P'),
(3, 'SISTEM INFORMASI', 4, 4, 'P'),
(4, 'PEMROGRAMAN BASIS DATA', 2, 4, 'P'),
(5, 'MIKROPROSESSOR ANTARMUKA', 2, 4, 'P'),
(6, 'PEMROGRAMAN WEB FRAMEWORK', 2, 4, 'P'),
(7, 'JARINGAN KOMPUTER', 2, 4, 'P'),
(8, 'ANIMASI DESAIN', 2, 4, 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(4) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `singkat` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id`, `jenjang`, `jurusan`, `singkat`) VALUES
(1, 'D3', 'Manajemen Informatika', 'MI'),
(2, 'D3', 'Teknik Komputer', 'TK'),
(3, 'S1', 'Teknik Informatika', 'TI'),
(4, 'D3', 'Sistem Informasi', 'SI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `mahasiswa_id` char(9) DEFAULT NULL,
  `mkuliah_id` int(11) DEFAULT NULL,
  `nilai` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_krs`
--

INSERT INTO `tbl_krs` (`id`, `semester_id`, `mahasiswa_id`, `mkuliah_id`, `nilai`) VALUES
(0000000019, 1, '105001', 1, 'A'),
(0000000021, 1, '104001', 2, 'A'),
(0000000023, 1, '105001', 7, 'A'),
(0000000024, 1, '105001', 8, 'B'),
(0000000025, 1, '105001', 6, 'A'),
(0000000026, 1, '105002', 2, 'C'),
(0000000027, 1, '105003', 2, 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` char(6) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `jurusan_id`) VALUES
('104001', 'Adi Parjoko', 'Sleman', 'Sleman', '1985-01-26', 'L', 'PROTESTAN', 3),
('105001', 'Badiyanto', 'Bantul', 'Pati', '1986-10-10', 'L', 'ISLAM', 3),
('105002', 'Maria Mustikawati', 'Tegal', 'Tegal', '1987-01-02', 'P', 'ISLAM', 3),
('105003', 'Ahmad Sudiono', 'Solo', 'Pati', '1988-02-11', 'L', 'ISLAM', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id` int(11) NOT NULL,
  `ta_semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_semester`
--

INSERT INTO `tbl_semester` (`id`, `ta_semester`) VALUES
(1, '20121'),
(2, '20122'),
(3, '20131'),
(4, '20132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_matakuliah`
--
ALTER TABLE `mst_matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `smt` (`semester_id`),
  ADD KEY `mhs` (`mahasiswa_id`),
  ADD KEY `mkuliah` (`mkuliah_id`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_matakuliah`
--
ALTER TABLE `mst_matakuliah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD CONSTRAINT `FK_tbl_krs` FOREIGN KEY (`semester_id`) REFERENCES `tbl_semester` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbl_krs_mhs` FOREIGN KEY (`mahasiswa_id`) REFERENCES `tbl_mahasiswa` (`nim`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbl_krs_mkl` FOREIGN KEY (`mkuliah_id`) REFERENCES `mst_matakuliah` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `FK_tbl_mahasiswa` FOREIGN KEY (`jurusan_id`) REFERENCES `tbl_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
