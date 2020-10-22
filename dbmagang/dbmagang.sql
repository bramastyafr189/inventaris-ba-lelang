-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 11:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmagang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_lelang`
--

CREATE TABLE `data_lelang` (
  `id_surat` int(11) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `nama_pengirim` varchar(200) NOT NULL,
  `opd` varchar(200) NOT NULL,
  `paket` varchar(200) NOT NULL,
  `pagu` decimal(11,2) NOT NULL,
  `hps` decimal(11,2) NOT NULL,
  `nama_kepanitiaan` varchar(200) NOT NULL,
  `no_kepanitiaan` varchar(200) NOT NULL,
  `nama_cp` varchar(200) NOT NULL,
  `telp_cp` varchar(12) NOT NULL,
  `file_surat` text NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_lelang`
--

INSERT INTO `data_lelang` (`id_surat`, `tgl_kirim`, `nama_pengirim`, `opd`, `paket`, `pagu`, `hps`, `nama_kepanitiaan`, `no_kepanitiaan`, `nama_cp`, `telp_cp`, `file_surat`, `status`) VALUES
(22, '2019-05-09', 'rama', 'Dinas Koperasi, Usaha Kecil dan Menengah', 'Jasa Penyelenggaraan Pameran Jaringan Kota Pusaka Indonesia (JKPI)', '500000000.00', '498569500.00', 'Pokja', '027.2/211/VIII/JL/2018', 'bramastya', '085123123123', 'SK_Kaldik_2018.pdf', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `level`) VALUES
(1, 'BLP', 1),
(2, 'LPSE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `id_jabatan` int(11) NOT NULL DEFAULT '1',
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `id_jabatan`, `password`) VALUES
(1, 999, 'LPSE', 1, '21232f297a57a5a743894a0e4a801fc3'),
(2, 888, 'Admin', 2, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lelang`
--
ALTER TABLE `data_lelang`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_lelang`
--
ALTER TABLE `data_lelang`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_jabatan_id_jabatan_fk` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
