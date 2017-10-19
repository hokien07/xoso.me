-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 04:04 PM
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
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `idKetQua` int(11) NOT NULL,
  `dacBiet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiNhat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiNhi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiBa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiTu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiNam` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiSau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiBay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaiTam` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay` datetime NOT NULL,
  `idTinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`idKetQua`, `dacBiet`, `giaiNhat`, `giaiNhi`, `giaiBa`, `giaiTu`, `giaiNam`, `giaiSau`, `giaiBay`, `giaiTam`, `ngay`, `idTinh`) VALUES
(1, '89570', '82009', '15073-76194', '40503-11653-56463-14935-82209-61266', '1060-6443-1009-7138', '8514-9470-1563-5565-5668-0977', '926-202-752', '32-59-35-96', '', '2017-10-18 11:51:47', 0),
(2, '59331', '32238', '14832-26425', '06682-63474-90130-47243-12183-16199', '1774-3671-1483-3777', '0052-4426-8464-2663-8934-9697', '931-850-681', '70-53-66-72', '', '2017-10-19 21:03:21', 0);

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
(1, 'http://soicau646.com/', 'Dự đoán kết quả XSMB');

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `idThongKe` tinyint(3) UNSIGNED NOT NULL,
  `tenThongKe` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (`idThongKe`, `tenThongKe`) VALUES
(1, 'Thá»‘ng kÃª Ä‘áº§u Ä‘uÃ´i loto'),
(2, 'Thá»‘ng kÃª Ä‘áº§u Ä‘uÃ´i Ä‘áº·c biá»‡t'),
(3, 'Thá»‘ng kÃª nhanh');

-- --------------------------------------------------------

--
-- Table structure for table `thongkedauduoi`
--

CREATE TABLE `thongkedauduoi` (
  `idDauDuoi` int(10) UNSIGNED NOT NULL,
  `duoi1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dau2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `idTinh` smallint(5) UNSIGNED NOT NULL,
  `tenTinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mienTinh` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`idTinh`, `tenTinh`, `mienTinh`) VALUES
(1, 'Miá»n báº¯c', 0),
(2, 'Äiá»‡n toÃ¡n', 1),
(3, 'Mega 6/45', 1),
(4, 'Max 4D', 1),
(5, 'Power 6/55', 1),
(6, 'Cáº§n ThÆ¡', 2),
(7, 'Äá»“ng Nai', 2),
(8, 'SÃ³c TrÄƒng', 2),
(9, 'CÃ  Mau', 2),
(10, 'Äá»“ng ThÃ¡p', 2),
(11, 'Báº¡c LiÃªu', 2),
(12, 'Báº¿n Tre', 2),
(13, 'VÅ©ng TÃ u', 2),
(14, 'An Giang', 2),
(15, 'BÃ¬nh Thuáº­n', 2),
(16, 'TÃ¢y Ninh', 2),
(17, 'BÃ¬nh DÆ°Æ¡ng', 2),
(18, 'TrÃ  Vinh', 2),
(19, 'VÄ©nh Long', 2),
(20, 'BÃ¬nh PhÆ°á»›c', 2),
(21, 'Háº­u Giang', 2),
(22, 'Long An', 2),
(23, 'ÄÃ  Láº¡t', 2),
(24, 'KiÃªn Giang', 2),
(25, 'Tiá»n Giang', 2),
(26, 'TP Há»“ ChÃ­ Minh', 2),
(27, 'ÄÃ  Náºµng', 3),
(28, 'KhÃ¡nh HÃ²a', 3),
(29, 'PhÃº YÃªn', 3),
(30, 'Thá»«a ThiÃªn Huáº¿', 3),
(31, 'Äáº¯c Láº¯c', 3),
(32, 'Quáº£ng Nam', 3),
(33, 'BÃ¬nh Äá»‹nh', 3),
(34, 'Quáº£ng BÃ¬nh', 3),
(35, 'Quáº£ng Trá»‹', 3),
(36, 'Gia Lai', 3),
(37, 'Ninh Thuáº­n', 3),
(38, 'Äáº¯c NÃ´ng', 3),
(39, 'Quáº£ng NgÃ£i', 3),
(40, 'Kon Tum', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idTinTuc` int(10) UNSIGNED NOT NULL,
  `urlHinh` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieuDe` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idTinTuc`, `urlHinh`, `tieuDe`) VALUES
(1, '380.jpg', '4 ngÃ y liá»n káº¿t quáº£ xá»• sá»‘ giá»‘ng há»‡t nhau'),
(2, '379.jpg', 'Xá»• sá»‘ Má»n Trung: Hai tá» vÃ© sá»‘ Ä‘á»™c Ä‘áº¯c Ä‘á»™t nhiÃªn biáº¿n máº¥t'),
(3, '378.jpg', 'Xá»• sá»‘ Mega:TrÃºng sá»‘ Ä‘á»™c Ä‘áº¯c 113 tá»· nhÆ°ng láº¡i khÃ´ng Ä‘Æ°á»£c trao thÆ°á»Ÿng'),
(4, '377.jpg', 'Xá»• sá»‘ Miá»n Nam: Tháº¯ng kiá»‡n vá»›i tá» vÃ© sá»‘ 1,5 tá»· Ä‘á»“ng, bÃ  Tuyáº¿t láº¡i may máº¯n trÃºng sá»‘ Ä‘á»™c Ä‘áº¯c'),
(5, '376.jpg', 'Xá»• sá»‘ Miá»n Nam: lÃ m rÃ¡ch tá» vÃ© sá»‘ Ä‘á»™c Ä‘áº¯c 100 triá»‡u nhÆ°ng váº«n Ä‘Æ°á»£c tráº£ thÆ°á»Ÿng'),
(6, '375.jpg', 'XS Mega: Trao thÆ°á»Ÿng cho khÃ¡ch hÃ ng táº¡i Äá»“ng Nai trÃºng 112 tá»·'),
(7, '374.jpg', 'Bá»‹ Ä‘á»™t quá»µ vÃ¬ biáº¿t mÃ¬nh trÃºng sá»‘ Ä‘á»™c Ä‘áº¯c 172 tá»· Ä‘á»“ng'),
(8, '373.jpg', 'XSMB: Kháº³ng Ä‘á»‹nh khÃ´ng cÃ³ cÃ¡ch nÃ o can thiá»‡p vÃ o viá»‡c quay sá»‘'),
(9, '372.jpg', 'Xá»• sá»‘ Miá»n Nam: TrÃºng 80 tá» vÃ© sá»‘ trong má»™t ngÃ y'),
(10, '371.jpg', 'Xá»• sá»‘ Mega 6/45: Xuáº¥t hiá»‡n khÃ¡ch hÃ ng trÃºng giáº£i Jackpot 112 tá»· ngÃ y 27/9/2017'),
(11, '381.jpg', 'Xá»• sá»‘ Mega: Láº¡i thÃªm má»™t tá»· phÃº ná»¯a táº¡i ká»³ quay 195'),
(12, '380.jpg', '4 ngÃ y liá»n káº¿t quáº£ xá»• sá»‘ giá»‘ng há»‡t nhau'),
(13, '379.jpg', 'Xá»• sá»‘ Má»n Trung: Hai tá» vÃ© sá»‘ Ä‘á»™c Ä‘áº¯c Ä‘á»™t nhiÃªn biáº¿n máº¥t'),
(14, '378.jpg', 'Xá»• sá»‘ Mega:TrÃºng sá»‘ Ä‘á»™c Ä‘áº¯c 113 tá»· nhÆ°ng láº¡i khÃ´ng Ä‘Æ°á»£c trao thÆ°á»Ÿng'),
(15, '377.jpg', 'Xá»• sá»‘ Miá»n Nam: Tháº¯ng kiá»‡n vá»›i tá» vÃ© sá»‘ 1,5 tá»· Ä‘á»“ng, bÃ  Tuyáº¿t láº¡i may máº¯n trÃºng sá»‘ Ä‘á»™c Ä‘áº¯c'),
(16, '376.jpg', 'Xá»• sá»‘ Miá»n Nam: lÃ m rÃ¡ch tá» vÃ© sá»‘ Ä‘á»™c Ä‘áº¯c 100 triá»‡u nhÆ°ng váº«n Ä‘Æ°á»£c tráº£ thÆ°á»Ÿng'),
(17, '375.jpg', 'XS Mega: Trao thÆ°á»Ÿng cho khÃ¡ch hÃ ng táº¡i Äá»“ng Nai trÃºng 112 tá»·'),
(18, '374.jpg', 'Bá»‹ Ä‘á»™t quá»µ vÃ¬ biáº¿t mÃ¬nh trÃºng sá»‘ Ä‘á»™c Ä‘áº¯c 172 tá»· Ä‘á»“ng'),
(19, '373.jpg', 'XSMB: Kháº³ng Ä‘á»‹nh khÃ´ng cÃ³ cÃ¡ch nÃ o can thiá»‡p vÃ o viá»‡c quay sá»‘'),
(20, '372.jpg', 'Xá»• sá»‘ Miá»n Nam: TrÃºng 80 tá» vÃ© sá»‘ trong má»™t ngÃ y'),
(21, 'xe-tai-cho-go-keo-lat-lai-lat-nghieng-xuong-ruong-vao-rang-san_60x60.jpg', 'Xe táº£i chá»Ÿ gá»— keo láº¥t lÃ¡i, láº­t nghiÃªng xuá»‘ng ruá»™ng vÃ o ráº¡ng sÃ¡ng'),
(22, 'xe-may-dam-xe-dap-cung-chieu-nam-thanh-nien-nga-ra-duong-tu-vong-1_60x60.jpg', 'Xe mÃ¡y Ä‘Ã¢m xe Ä‘áº¡p cÃ¹ng chiá»u, nam thanh niÃªn ngÃ£ ra Ä‘Æ°á»ng tá»­ vong'),
(23, 'mat-lai-o-to-dien-tong-nhieu-xe-may-6-cong-nhan-thuong-nang-1_60x60.jpg', 'Máº¥t lÃ¡i, Ã´ tÃ´ Ä‘iÃªn tÃ´ng nhiá»u xe mÃ¡y, 6 cÃ´ng nhÃ¢n thÆ°Æ¡ng náº·ng'),
(24, 'dong-nai-o-to-xe-may-tong-nhau-2-thanh-nien-nguy-kich_60x60.jpg', 'Äá»“ng Nai: Ã” tÃ´, xe mÃ¡y tÃ´ng nhau, 2 thanh niÃªn nguy ká»‹ch'),
(25, 'tren-duong-di-hoc-nam-sinh-lop-9-bi-xe-tai-dam-tu-von_60x60.jpg', 'TrÃªn Ä‘Æ°á»ng Ä‘i há»c, nam sinh lá»›p 9 bá»‹ xe táº£i Ä‘Ã¢m tá»­ vong'),
(26, 'ha-noi-2-xe-may-dam-nhau-tren-cau-vuot-thai-ha-3-nguoi-thuong-vong1_60x60.jpg', 'HÃ  Ná»™i: 2 xe mÃ¡y Ä‘Ã¢m nhau trÃªn cáº§u vÆ°á»£t ThÃ¡i HÃ , 3 ngÆ°á»i thÆ°Æ¡ng vong'),
(27, 'xe-tai-cho-go-keo-lat-lai-lat-nghieng-xuong-ruong-vao-rang-san_60x60.jpg', 'Xe táº£i chá»Ÿ gá»— keo láº¥t lÃ¡i, láº­t nghiÃªng xuá»‘ng ruá»™ng vÃ o ráº¡ng sÃ¡ng'),
(28, 'xe-may-dam-xe-dap-cung-chieu-nam-thanh-nien-nga-ra-duong-tu-vong-1_60x60.jpg', 'Xe mÃ¡y Ä‘Ã¢m xe Ä‘áº¡p cÃ¹ng chiá»u, nam thanh niÃªn ngÃ£ ra Ä‘Æ°á»ng tá»­ vong'),
(29, 'mat-lai-o-to-dien-tong-nhieu-xe-may-6-cong-nhan-thuong-nang-1_60x60.jpg', 'Máº¥t lÃ¡i, Ã´ tÃ´ Ä‘iÃªn tÃ´ng nhiá»u xe mÃ¡y, 6 cÃ´ng nhÃ¢n thÆ°Æ¡ng náº·ng'),
(30, 'dong-nai-o-to-xe-may-tong-nhau-2-thanh-nien-nguy-kich_60x60.jpg', 'Äá»“ng Nai: Ã” tÃ´, xe mÃ¡y tÃ´ng nhau, 2 thanh niÃªn nguy ká»‹ch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`idKetQua`),
  ADD KEY `idTinh` (`idTinh`),
  ADD KEY `ngay` (`ngay`);

--
-- Indexes for table `linkdudoan`
--
ALTER TABLE `linkdudoan`
  ADD PRIMARY KEY (`idLink`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`idThongKe`);

--
-- Indexes for table `thongkedauduoi`
--
ALTER TABLE `thongkedauduoi`
  ADD PRIMARY KEY (`idDauDuoi`),
  ADD KEY `idTinh` (`idTinh`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`idTinh`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTinTuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `idKetQua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `linkdudoan`
--
ALTER TABLE `linkdudoan`
  MODIFY `idLink` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `idThongKe` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `thongkedauduoi`
--
ALTER TABLE `thongkedauduoi`
  MODIFY `idDauDuoi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tinh`
--
ALTER TABLE `tinh`
  MODIFY `idTinh` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTinTuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
