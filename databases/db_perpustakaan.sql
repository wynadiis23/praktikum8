-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 05:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `kd_anggota` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `prodi` varchar(256) NOT NULL,
  `jenjang` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kd_anggota`, `nama`, `prodi`, `jenjang`, `alamat`) VALUES
(1, 'Adi', 'Tek Inform', '2016', 'Tabanan'),
(2, 'Adis', 'Tek Informa', '2015', 'Tabanan2'),
(3, 'Adi Saputra 1', 'Frs', '', 'Tabanan'),
(4, 'Adi Saputra 1', 'Frs', '', 'Tabanan'),
(5, 'Adi Saputra 1', 'Frs', '', 'Tabanan'),
(6, 'Adi Saputra', 'Frs', '2017', 'Br. Tibubiu Kelod, Ds. Tibubiu, Kerambitan, Tabanan Bali');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kd_register` int(11) NOT NULL,
  `judul_buku` varchar(256) NOT NULL,
  `pengarang` varchar(256) NOT NULL,
  `penerbit` varchar(256) NOT NULL,
  `tahun_terbit` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_register`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Struktur Data', 'Alit INdrawan', 'Sidomulyi', '2019'),
(2, 'WSN', 'Bapa anu', 'Anu', '1027'),
(3, 'Baru', 'Baruajan', 'Baruaaa', '1762');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pinjam`
--

CREATE TABLE `detil_pinjam` (
  `kd_register` int(11) NOT NULL,
  `kd_pinjam` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pinjam`
--

INSERT INTO `detil_pinjam` (`kd_register`, `kd_pinjam`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 1, '2019-04-27 00:00:00', NULL),
(1, 2, '2019-04-27 00:00:00', NULL),
(2, 3, '2019-04-27 00:00:00', NULL),
(2, 4, '2019-04-27 00:00:00', NULL),
(1, 5, '2019-04-27 00:00:00', NULL),
(1, 6, '2019-04-27 00:00:00', NULL),
(2, 7, '2019-04-27 00:00:00', NULL),
(1, 8, '2019-04-27 00:00:00', NULL),
(1, 9, '2019-04-27 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kd_pinjam` int(11) NOT NULL,
  `kd_anggota` int(11) NOT NULL,
  `kd_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kd_pinjam`, `kd_anggota`, `kd_petugas`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 2, 2),
(5, 2, 1),
(6, 0, 1),
(7, 0, 1),
(8, 2, 1),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `nama`, `alamat`) VALUES
(1, 'Adi Saputra', 'Tabanan'),
(2, 'Mamang', 'Tabanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_register`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `kd_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kd_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `kd_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;