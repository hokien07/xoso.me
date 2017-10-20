-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 05:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soicau646`
--

-- --------------------------------------------------------

--
-- Table structure for table `linkdudoan`
--

CREATE TABLE `linkdudoan` (
  `idLink` int(10) UNSIGNED NOT NULL,
  `linkWeb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameWeb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linkdudoan`
--

INSERT INTO `linkdudoan` (`idLink`, `linkWeb`, `nameWeb`) VALUES
(8, 'http://xoso.me/du-doan-ket-qua-xo-so-mien-bac-xsmb-c228.html', 'Dá»± Ä‘oÃ¡n XSMB'),
(9, 'http://xoso.me/thong-ke-lo-gan-xo-so-mien-bac-xsmb.html', 'Thá»‘ng kÃª lÃ´ gan'),
(10, 'http://cauvang6868.com', 'Cáº§u vip XSMB'),
(11, 'http://cauvang9999.top', 'Báº¡ch thá»§ lÃ´'),
(12, 'http://caudep24h.mobi', 'LÃ´ VIP'),
(13, 'http://cauvip3mien.net', 'Cáº§u vÃ ng 24h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linkdudoan`
--
ALTER TABLE `linkdudoan`
  ADD PRIMARY KEY (`idLink`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linkdudoan`
--
ALTER TABLE `linkdudoan`
  MODIFY `idLink` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
