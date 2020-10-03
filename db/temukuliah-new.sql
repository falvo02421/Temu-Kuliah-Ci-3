-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 10:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temukuliah-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','superadmin','siswa') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `username`, `password`, `level`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'falvo02421@gmail.com'),
(2, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin', 'falvo02421@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama`) VALUES
(1, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(120) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('siswa') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `username`, `pass`, `level`, `email`) VALUES
(100097, 'hanan', 'hanan21', '2b37661f80c1b0e51e5ed54781a7ff52', 'siswa', 'hanan@gmail.com'),
(819109, 'fauzan', '', '8733d626a0b197574a175d52e0048817', 'siswa', 'falvo02421@gmail.com'),
(81198108, 'Galuh', '', '23111cf70745859063eec8a99d6206d9', 'siswa', 'ulfa@gmail.com'),
(2147483647, 'Hukum', '', 'c7c243058a087d131190077927ce4f5e', 'siswa', 'fabismillah0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `soal_tryout`
--

CREATE TABLE `soal_tryout` (
  `id_soal` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_ujian` int(20) NOT NULL,
  `bobot` int(2) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `opsi_e` text NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `jml_benar` int(10) NOT NULL,
  `jml_salah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal_tryout`
--

INSERT INTO `soal_tryout` (`id_soal`, `id_mapel`, `id_ujian`, `bobot`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `tgl_input`, `jml_benar`, `jml_salah`) VALUES
(8, 1, 0, 5, 'siapa nama budi', 'budi', 'nama', 'siapa', '?', 'semua benar', 'a', '2020-09-25 01:48:29', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tes_siswa`
--

CREATE TABLE `tes_siswa` (
  `id` int(30) NOT NULL,
  `id_mapel` int(30) NOT NULL,
  `nama_tes` varchar(50) NOT NULL,
  `jumlah_soal` int(30) NOT NULL,
  `waktu` int(30) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `terlambat` datetime NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_siswa`
--

INSERT INTO `tes_siswa` (`id`, `id_mapel`, `nama_tes`, `jumlah_soal`, `waktu`, `tgl_mulai`, `terlambat`, `token`) VALUES
(1, 1, 'SAINTEK', 3, 120, '2020-09-28 00:02:16', '2020-09-29 00:02:16', 'BDCJDE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `soal_tryout`
--
ALTER TABLE `soal_tryout`
  ADD PRIMARY KEY (`id_soal`),
  ADD UNIQUE KEY `id_mapel` (`id_mapel`),
  ADD UNIQUE KEY `id_ujian` (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `soal_tryout`
--
ALTER TABLE `soal_tryout`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `soal_tryout`
--
ALTER TABLE `soal_tryout`
  ADD CONSTRAINT `soal_tryout_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
