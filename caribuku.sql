-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 10:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caribuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tahun_terbit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `penulis`, `tahun_terbit`) VALUES
(1, 'Kami (Bukan) Sarjana Kertas', 'Js. Khairen', '2019'),
(2, 'Unexpected Relationship', 'Febriani Ad', '2018'),
(3, 'Detektif Conan 96', 'Aoyama Gosho', '2019'),
(4, 'KKN Di Desa Penari', 'SIMPLEMAN', '2019'),
(5, 'Komik Rasulullah SAW Idolaku', 'Dian K & Aan W', '2018'),
(6, 'Pesan Cinta Untuk Kau & Aku', 'ayatsuci', '2019'),
(7, 'The Biology Of Belief', 'Bruce Lipton', '2019'),
(8, 'Taipan - Lahirnya Para Konglomerat Indonesia', 'William Yang', '2019'),
(9, 'Becoming', 'Michelle Obama', '2019'),
(10, 'Masak Sehat Itu Mudah', 'Inge Tumiwa - Bachrens', '2017'),
(11, 'Jokowi Menuju Cahaya', 'Alberthiene Endah', '2014'),
(12, '#Berhentidikamu', 'dr. Gia Pratama', '2016'),
(13, 'The Unofficial Exclusive Book Blackpink', '@blackpinkblinkindo', '2018'),
(14, 'Pesan Cinta Untuk Kau & Aku 2', 'ayatsuci', '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
