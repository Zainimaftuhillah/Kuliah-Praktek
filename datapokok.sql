-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 03:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapokok`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(10) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `date` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_siswa`, `date`, `keterangan`) VALUES
(61, 40, '2021-06-30', 'terdapat kesalahan alamat (seharusnya Jl.Salak No 49 Cawang)'),
(62, 0, '2021-07-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `NISN` int(20) NOT NULL,
  `NIPD` int(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jk_siswa` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `th_masuk` int(10) NOT NULL,
  `st_siswa` varchar(20) NOT NULL,
  `SPP` varchar(20) NOT NULL,
  `tanggal_spp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `NISN`, `NIPD`, `kelas`, `tempat`, `tanggal`, `jk_siswa`, `ayah`, `ibu`, `agama`, `alamat`, `sekolah_asal`, `th_masuk`, `st_siswa`, `SPP`, `tanggal_spp`) VALUES
(81, 'ilham', 12121212, 1212121212, 'IX', 'Bekasi', '2021-07-06', 'Laki-laki', 'ayah', 'ibu', 'ISLAM', 'Jalan jalan berjalan uhuy', 'smp 31 bekasi', 2018, 'AKTIF', '2000000', '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_spp` varchar(255) DEFAULT NULL,
  `tanggal_spp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `id_user`, `jumlah_spp`, `tanggal_spp`) VALUES
(1, 81, '2000000', '2021-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_siswa`, `username`, `password`, `namalengkap`, `level`) VALUES
(13, 0, 'admin1', 'mahendra', 'Mahendra Aditya Eriksan', 'admin'),
(38, 0, 'admin2', 'fitrah', 'Fitrah Vidianti', 'admin'),
(39, 0, 'admin3', 'lyli', 'Lyli Dahlia', 'admin'),
(40, 0, 'admin', 'zaini', 'Zaini Maftuhillah', 'admin'),
(42, 40, 'fitri', 'fitri', 'Fitri Wulandari', 'walimurid'),
(43, 73, 'farhan', 'farhan', 'Farhan Ardiyansyah', 'walimurid'),
(44, 73, 'dhafin', 'dhafin', 'Falah Dhafin', 'walimurid'),
(45, 0, '', '', '', 'admin'),
(46, 81, 'admin', 'admin123', 'Satrio', 'walimurid'),
(48, 81, 'kajo', 'kajo', 'kajo santoso', 'walimurid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lampiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
