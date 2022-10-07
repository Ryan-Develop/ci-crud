-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 07, 2022 at 03:55 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ayah`
--

CREATE TABLE `tbl_ayah` (
  `id` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ayah`
--

INSERT INTO `tbl_ayah` (`id`, `nama`, `nik`, `agama`, `ttl`, `pekerjaan`, `pendidikan_terakhir`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ryan', '12710710960001', '', 'Medan, 7 Oktober 2022', 'Wiraswasta', 'S1', '2022-10-06 01:58:03', NULL),
(16, 'Raihan Febrian', '12712102050001', 'Islam', 'Medan, 21 Februari 1993', 'Wiraswasta', 'SMK', '2022-10-06 02:45:35', '2022-10-05 19:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibu`
--

CREATE TABLE `tbl_ibu` (
  `id` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ibu`
--

INSERT INTO `tbl_ibu` (`id`, `nama`, `nik`, `agama`, `ttl`, `pekerjaan`, `pendidikan_terakhir`, `created_at`, `updated_at`) VALUES
(1, 'Eka Putri', '12711901990001', '', 'Medan, 19 Januari 1999', 'Wiraswasta', 'S1', '2022-10-06 01:52:18', '2022-10-06 01:57:46'),
(2, 'Mira Syahputri', '12710303020001', 'Islam', 'Medan, 3 Maret 1990', 'Wiraswasta', 'SMK', '2022-10-06 02:46:50', '2022-10-05 19:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `ttl` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id`, `nama`, `nim`, `jenis_kelamin`, `agama`, `prodi`, `ttl`, `alamat`, `asal_sekolah`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ryan', '1613456545', 'Laki-Laki', 'Islam', 'Sistem Komputer', 'Medan, 11 November 2011', 'Jl. Karya Gg Ambarsari No.3', 'SMK Tritech Informatika', 'ryan.jpeg', '2022-10-05 07:05:59', '2022-10-05 07:09:23'),
(2, 'Dedi Iswandi', '1613535353', 'Laki-Laki', 'Islam', 'Sistem Informasi', 'Medan, 12 September 2002', 'Jl. Kenangan Mantan No. 321 Medan', 'SMK Kemanusiaan', '', '2022-10-05 07:05:59', '2022-10-05 07:09:23'),
(6, 'Romi Agustiyan', '1234567891', 'Laki-Laki', 'Islam', 'Sistem Informasi', 'Medan, 8 Agustus 1999', 'Jl. Karya Setia No 3', 'SMK Tritech', 'asd', '2022-10-05 16:00:31', '2022-10-05 09:00:31'),
(7, 'Raihan Febrian', '1918171612', 'Laki-Laki', 'Islam', 'Teknik Mesin', 'Medan, 3 Maret 2002', 'Jl Kenangan No 56', 'SMK Tritech', 'asd', '2022-10-05 16:24:07', '2022-10-05 09:24:07'),
(13, 'Budi', '123124121', 'Laki-Laki', 'Islam', 'Teknik ', 'Medan 12 oktober 2022', 'jl melati no 3', 'SMK Tritech', 'asd', '2022-10-05 23:00:06', '2022-10-05 16:00:06'),
(14, 'Doni', '10283747594', 'Laki-Laki', 'Islam', 'Agribisnis', 'Medan, 3 Maret 2002', 'Jl. Jambu no 45', 'SMK Nusa Bangsa', 'asd', '2022-10-05 23:13:12', '2022-10-05 16:13:12'),
(15, 'Mira Syahputri', '1234567891', 'Perempuan', 'Islam', 'Ekonomi', 'Medan, 3 Maret 2002', 'Jl. Karya Setia No 3', 'SMK Martadinata', 'asd', '2022-10-05 23:38:13', '2022-10-05 16:38:13'),
(16, 'Ricky Efendi', '1232212345', 'Laki-Laki', 'Islam', 'Teknik Mesin', 'Medan, 10 Oktober 1994', 'Jl. Kenangan No 3', 'SMK Harapan', 'asd', '2022-10-06 01:34:53', '2022-10-05 18:34:53'),
(17, 'Andry Ismail Sitepu', '1234567876', 'Laki-Laki', 'Islam', 'Sistem Informasi', 'Medan, 11 September 2022', 'Jl. Besar Delitua, No.1', 'SMK Telkom ', 'asd', '2022-10-06 22:41:15', '2022-10-06 15:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id` int(32) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `alamat_sekolah` varchar(128) NOT NULL,
  `status_sekolah` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id`, `nama_sekolah`, `kode`, `alamat_sekolah`, `status_sekolah`, `created_at`, `updated_at`) VALUES
(1, 'SMK TRITECH INFORMATIKA', '01', 'Jl. Bhayangkara No 110', 'SMK', '2022-10-06 20:29:05', '2022-10-07 03:35:58'),
(2, 'SMA NEGRI 3 MEDAN', '01', 'Jl. Yos Sudarso', 'SMA', '2022-10-06 20:34:02', '2022-10-07 03:35:53'),
(3, 'SMA NEGRI 4 MEDAN', '', 'Jl. Gelas', 'SMA', '2022-10-06 22:20:27', '2022-10-07 03:35:48'),
(4, 'SMA NEGRI 1 MEDAN', '', 'Jl. Cik Di Tiro', 'SMA', '2022-10-06 22:34:56', '2022-10-06 15:34:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ayah`
--
ALTER TABLE `tbl_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ibu`
--
ALTER TABLE `tbl_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ayah`
--
ALTER TABLE `tbl_ayah`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_ibu`
--
ALTER TABLE `tbl_ibu`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
