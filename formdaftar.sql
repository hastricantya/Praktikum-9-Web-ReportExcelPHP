-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 08:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdaftar`
--

CREATE TABLE `formdaftar` (
  `jenispend` varchar(15) NOT NULL,
  `tglmsk` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nopeserta` varchar(20) NOT NULL,
  `paud` varchar(10) NOT NULL,
  `tk` varchar(10) NOT NULL,
  `seriskhun` varchar(16) NOT NULL,
  `seriijazah` varchar(16) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `cita` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `abk` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kdpos` varchar(5) NOT NULL,
  `tempattinggal` varchar(30) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kps` varchar(10) NOT NULL,
  `nokps` varchar(15) NOT NULL,
  `kwn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdaftar`
--

INSERT INTO `formdaftar` (`jenispend`, `tglmsk`, `nis`, `nopeserta`, `paud`, `tk`, `seriskhun`, `seriijazah`, `hobi`, `cita`, `namalengkap`, `jkel`, `nisn`, `nik`, `tempatlahir`, `tgllahir`, `agama`, `abk`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kdpos`, `tempattinggal`, `transport`, `nohp`, `notelp`, `email`, `kps`, `nokps`, `kwn`) VALUES
('Siswa Baru', '2021-05-03', '1', '1', 'yapaud', 'yatk', '1', '1', 'olahraga', 'pns', 'a', 'Laki-laki', '1', '1', 'a', '2021-05-04', 'Islam', 'tidakabk', 'a', '1', '1', '', 'a', 'a', '1', 'ortu', 'jalankaki', '1', '1', 'coba@gmail.com', 'Iyakps', '', 'Indonesia'),
('Siswa Baru', '2021-05-01', '123456789', '123456789', 'Ya', 'Ya', '123456789', '123456789', 'Menulis', 'Lainnya', 'Hastri Cantya Danahiswari', 'Perempuan', '123456789', '123456789', 'Makassar', '2001-09-25', 'Islam', 'Tidak Abk', 'Bandung', '1', '2', '', 'Pasirlayung', 'Cibeunying Kidul', '40192', 'Bersama Orang Tua', 'Kendaraan Pribadi', '0895325179141', '0895325179141', 'hastricantyad@gmail.com', 'Tidak', '', 'Indonesia'),
('Siswa Baru', '2021-05-05', '2', '2', 'Ya', 'Ya', '2', '2', 'olahraga', 'pns', 'f', 'Laki-laki', '2', '2', '2', '2021-05-14', 'Islam', 'tidakabk', 'f', '2', '2', '', 'f', 'f', 'f', 'ortu', 'jalankaki', '2', '2', 'coba@gmail.com', 'Tidakkps', '', 'Asing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdaftar`
--
ALTER TABLE `formdaftar`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
