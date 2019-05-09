-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:59 AM
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
(6, 'Adi Saputra', 'Frs', '2017', 'Br. Tibubiu Kelod, Ds. Tibubiu, Kerambitan, Tabanan Bali'),
(7, 'Baru', 'Tab', '12', 'Bahajb'),
(8, 'Mamang KEsbor', 'Tabak', '186', 'Bakahs'),
(9, 'asasasas', 'asasasa', '1212', 'asasas'),
(10, 'zczczcz', 'zczcz', '2131', 'sasa'),
(11, 'asasasaxa', 'axaxa', '1213', 'sfasfas'),
(12, 'Anggota1', 'Tauyauy', '1976', 'Iihihih');

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
(1, 'Struktur Data A C', 'Alit INdrawan', 'Sidomulyi', '2019 AC'),
(2, 'WSN', 'Bapa anu', 'Anu A', '1027'),
(3, 'Baru', 'Baruajan', 'Baruaaa', '1762'),
(4, 'Matematika', 'Banyupirn', 'Bnanan', '1287'),
(5, 'Asa', 'Banyupirn', 'oasdouh', '197'),
(6, 'Matematika II', 'BAPakmu', 'Bapakmu', '98612');

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
(1, 9, '2019-04-27 00:00:00', NULL),
(3, 10, '2019-04-27 00:00:00', NULL),
(1, 11, '2019-05-04 00:00:00', NULL),
(3, 12, '2019-05-04 00:00:00', NULL),
(2, 13, '2019-05-04 00:00:00', NULL),
(2, 14, '2019-05-04 00:00:00', NULL),
(1, 15, '2019-05-04 00:00:00', NULL),
(1, 16, '2019-05-04 00:00:00', NULL),
(1, 17, '2019-05-04 00:00:00', NULL),
(1, 18, '2019-05-04 00:00:00', NULL),
(1, 19, '2019-05-04 00:00:00', NULL),
(1, 20, '2019-05-04 00:00:00', NULL),
(1, 21, '2019-05-04 00:00:00', NULL),
(5, 22, '2019-05-04 00:00:00', NULL),
(4, 23, '2019-05-04 00:00:00', NULL);

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
(6, 0, 1),
(7, 0, 1),
(11, 0, 1),
(12, 4, 2),
(20, 5, 1),
(21, 4, 1),
(23, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `nama`, `alamat`, `email`, `password`, `last_login`) VALUES
(1, 'Adi Saputra', 'Tabanan', 'adisaputra.local@gmail.com', '123456', '2019-05-09 01:58:51'),
(2, 'Mamang', 'Tabanan', '', '', '2019-05-09 06:18:56');

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
  MODIFY `kd_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kd_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kd_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `kd_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
