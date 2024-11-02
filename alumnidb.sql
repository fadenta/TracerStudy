-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 02:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE `admint` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`id_admin`, `username`, `password`) VALUES
('1099', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_klmin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tempat_lahir` char(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tgl_lulus` date NOT NULL,
  `id_jrsn` varchar(5) NOT NULL,
  `no_tlp` int(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `usern` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='id_jrsn';

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama`, `jenis_klmin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `tgl_lulus`, `id_jrsn`, `no_tlp`, `email`, `usern`, `pass`) VALUES
('22010', 'joko', 'Laki-laki', 'Demak', '2024-10-08', 'Solo', '2024-10-24', '1', 897, 'kasih3375@gmail.com', 'alumni', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jrsn` varchar(5) NOT NULL,
  `nama_jrsn` char(20) NOT NULL,
  `fakultas` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jrsn`, `nama_jrsn`, `fakultas`) VALUES
('1', 'Teknik Informatika', 'Ilmu Kompute');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` varchar(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `judul`, `perusahaan`, `tgl`, `deskripsi`) VALUES
('09', 'Programmer', 'Software Klik', '2024-10-25', 'hjahkahdkhkwhkq');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pkrjaan` varchar(5) NOT NULL,
  `id_alumni` varchar(5) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(30) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `gaji` varchar(30) NOT NULL,
  `pengalaman_kerja` varchar(30) NOT NULL,
  `pendidikan_lanjutan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pkrjaan`, `id_alumni`, `nama_perusahaan`, `alamat_perusahaan`, `nama_jabatan`, `gaji`, `pengalaman_kerja`, `pendidikan_lanjutan`) VALUES
('01', '22010', 'Griya Karya', 'Jl.kartini', 'Web Designer', '1000000', 'Web Designer', '-'),
('02', '2020', 'Griya Karya', 'Jl.kartini', 'Web Designer', '8000000', 'Web Designer', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admint`
--
ALTER TABLE `admint`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jrsn`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pkrjaan`),
  ADD UNIQUE KEY `id_alumni` (`id_alumni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
