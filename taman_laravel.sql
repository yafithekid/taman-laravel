-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2015 at 05:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taman_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengaduan`
--

CREATE TABLE IF NOT EXISTS `kategori_pengaduan` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pengaduan`
--

INSERT INTO `kategori_pengaduan` (`id`, `nama`) VALUES
(1, 'Kebersihan'),
(2, 'Keamanan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengguna`
--

CREATE TABLE IF NOT EXISTS `kategori_pengguna` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pengguna`
--

INSERT INTO `kategori_pengguna` (`id`, `nama`) VALUES
(1, 'guest'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `penanganan`
--

CREATE TABLE IF NOT EXISTS `penanganan` (
`id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penanganan`
--

INSERT INTO `penanganan` (`id`, `id_pengguna`, `id_pengaduan`, `isi`, `tanggal`) VALUES
(1, 1, 3, 'Coba penanganan', '2015-02-10 14:58:44'),
(3, 1, 3, 'test', '2015-02-10 15:20:21'),
(5, 1, 3, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '2015-02-10 15:29:10'),
(6, 1, 3, '<script>alert(''hello'')</script>', '2015-02-10 15:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `id_taman` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `konten` text NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `id_kategori_pengaduan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `judul`, `id_taman`, `id_admin`, `email`, `gambar`, `tanggal`, `konten`, `verified`, `id_kategori_pengaduan`) VALUES
(3, 'Taman geje', 2, NULL, 'taman@taman.com', '3.jpg', '2015-02-10 08:30:24', 'test', 0, 1),
(4, 'Taman geje', 2, NULL, 'yafithekid212@gmail.com', '4.jpg', '2015-02-10 14:00:27', 'Jalan rusak', 0, 2),
(5, 'script injection', 2, NULL, 'yafithekid212@gmail.com', '5.jpg', '2015-02-10 15:32:51', '<script>alert(''hello'');</script>', 0, 1),
(6, 'Laporan yang panjang', 2, NULL, 'laporan@gmail.com', '6.jpg', '2015-02-10 15:50:30', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 0, 1),
(7, 'Dummy', 2, NULL, 'dummy@dummy.com', '7.jpg', '2015-02-10 15:52:29', 'dummy', 0, 1),
(8, 'Dummy', 2, NULL, 'dummy@dummy.com', '8.jpg', '2015-02-10 15:52:45', 'dweqeqwe', 0, 1),
(9, 'Dummy', 2, NULL, 'dummy@dummy.com', '9.jpg', '2015-02-10 15:53:05', 'dddd', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(11) NOT NULL,
  `remember_token` varchar(500) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontak` varchar(300) NOT NULL,
  `id_kategori_pengguna` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `remember_token`, `username`, `password`, `email`, `nama`, `kontak`, `id_kategori_pengguna`) VALUES
(1, 'vLf7ZsPE8zxrLCjizT49r066aEQjbMwSUxAegWkolb1DiJHt5bNdsyEVjXym', 'yafi', 'f45c294b8d111866c9bbce773e709acb7e06e7f3', 'yafi@yafi.com', 'Muhammad Yafi', 'Jalan Tubagus Ismail VIII/17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `taman`
--

CREATE TABLE IF NOT EXISTS `taman` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `koordinat_x` float NOT NULL,
  `koordinat_y` float NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taman`
--

INSERT INTO `taman` (`id`, `nama`, `alamat`, `koordinat_x`, `koordinat_y`, `gambar`) VALUES
(2, 'Taman Jomblo', 'Jalan Layang Pasupati', 6, 100, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_pengaduan`
--
ALTER TABLE `kategori_pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pengguna`
--
ALTER TABLE `kategori_pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanganan`
--
ALTER TABLE `penanganan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pengaduan` (`id_pengaduan`), ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`), ADD KEY `id_taman` (`id_taman`,`id_admin`), ADD KEY `id_admin` (`id_admin`), ADD KEY `id_kategori_pengaduan` (`id_kategori_pengaduan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`), ADD KEY `id_kategori_user` (`id_kategori_pengguna`);

--
-- Indexes for table `taman`
--
ALTER TABLE `taman`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_pengaduan`
--
ALTER TABLE `kategori_pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_pengguna`
--
ALTER TABLE `kategori_pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penanganan`
--
ALTER TABLE `penanganan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `taman`
--
ALTER TABLE `taman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penanganan`
--
ALTER TABLE `penanganan`
ADD CONSTRAINT `penanganan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penanganan_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`id_taman`) REFERENCES `taman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengaduan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_kategori_pengguna`) REFERENCES `kategori_pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
