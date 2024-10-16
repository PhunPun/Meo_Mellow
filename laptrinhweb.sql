-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptrinhweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_product_cat`
--

CREATE TABLE `all_product_cat` (
  `id_cat` varchar(100) NOT NULL,
  `chung_loai` varchar(100) NOT NULL,
  `ten_meo` varchar(100) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `tuoi` varchar(100) NOT NULL,
  `can_nang` float NOT NULL,
  `sex` int(11) NOT NULL,
  `nguon_goc` varchar(100) NOT NULL,
  `vaccin_4_benh` int(11) NOT NULL,
  `vaccin_dai` int(11) NOT NULL,
  `vaccin_phuc_mac` int(11) NOT NULL,
  `tay_giun` int(11) NOT NULL,
  `an_hien` enum('0','1') NOT NULL DEFAULT '1',
  `trang_thai` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_product_cat`
--

INSERT INTO `all_product_cat` (`id_cat`, `chung_loai`, `ten_meo`, `anh`, `price`, `tuoi`, `can_nang`, `sex`, `nguon_goc`, `vaccin_4_benh`, `vaccin_dai`, `vaccin_phuc_mac`, `tay_giun`, `an_hien`, `trang_thai`) VALUES
('M0000', 'muop', 'Mướp xám cái', '../images/M0000.jpg', 100000, '3 tuần', 1.6, 0, 'Việt Nam', 1, 1, 1, 1, '1', '0'),
('M0001', 'muop', 'Mướp xám cái', '../images/M0001.jpg', 100000, '3 tuần', 1.7, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0002', 'muop', 'Mướp xám cái', '../images/M0002.jpg', 100000, '3 tuần', 1.7, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0003', 'muop', 'Mướp xám cái', '../images/M0003.jpg', 100000, '3 tuần', 1.7, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0004', 'muop', 'Mướp xám cái', '../images/M0004.jpg', 100000, '3 tuần', 1.7, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0005', 'muop', 'Mướp xám cái', '../images/M0005.jpg', 100000, '3 tuần', 1.7, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0010', 'muop', 'Mướp xám cái', '../images/M0010.jpg', 100000, '3 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0020', 'muop', 'Mướp xám trắng đen đực', '../images/M0020.jpg', 150000, '8 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '0'),
('M0021', 'muop', 'Mướp xám trắng đen đực', '../images/M0021.jpg', 150000, '8 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0022', 'muop', 'Mướp xám trắng đen đực', '../images/M0022.jpg', 150000, '8 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0023', 'muop', 'Mướp xám trắng đen đực', '../images/M0023.jpg', 150000, '8 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0030', 'muop', 'Mướp nâu đực', '../images/M0030.jpg', 100000, '4 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0031', 'muop', 'Mướp nâu đực', '../images/M0031.jpg', 100000, '4 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0032', 'muop', 'Mướp nâu đực', '../images/M0032.jpg', 100000, '4 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0033', 'muop', 'Mướp nâu đực', '../images/M0033.jpg', 100000, '4 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0040', 'muop', 'Mướp xám cái', '../images/M0040.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0041', 'muop', 'Mướp xám cái', '../images/M0041.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0042', 'muop', 'Mướp xám cái', '../images/M0042.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0043', 'muop', 'Mướp xám cái', '../images/M0043.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0044', 'muop', 'Mướp xám cái', '../images/M0044.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0045', 'muop', 'Mướp xám cái', '../images/M0045.jpg', 110000, '5 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0050', 'muop', 'Mướp xám đen cái', '../images/M0050.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0051', 'muop', 'Mướp xám đen cái', '../images/M0051.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0052', 'muop', 'Mướp xám đen cái', '../images/M0052.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0053', 'muop', 'Mướp xám đen cái', '../images/M0053.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0054', 'muop', 'Mướp xám đen cái', '../images/M0054.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0055', 'muop', 'Mướp xám đen cái', '../images/M0055.jpg', 130000, '6 tuần', 2, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0060', 'muop', 'Mướp xám trắng đực', '../images/M0060.jpg', 200000, '6 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0061', 'muop', 'Mướp xám trắng đực', '../images/M0061.jpg', 200000, '6 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0062', 'muop', 'Mướp xám trắng đực', '../images/M0062.jpg', 200000, '6 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0063', 'muop', 'Mướp xám trắng đực', '../images/M0063.jpg', 200000, '6 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0070', 'muop', 'Mướp xám đực', '../images/M0070.jpg', 100000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0071', 'muop', 'Mướp xám đực', '../images/M0071.jpg', 100000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M0072', 'muop', 'Mướp xám đực', '../images/M0072.jpg', 100000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1000', 'vang', 'Vàng nhạt đực', '../images/M1000.jpg', 120000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '0'),
('M1001', 'vang', 'Vàng nhạt đực', '../images/M1001.jpg', 120000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1002', 'vang', 'Vàng nhạt đực', '../images/M1002.jpg', 120000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1003', 'vang', 'Vàng nhạt đực', '../images/M1003.jpg', 120000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1004', 'vang', 'Vàng nhạt đực', '../images/M1004.jpg', 120000, '3 tuần', 1, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1010', 'vang', 'Vàng đậm cái', '../images/M1010.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '0'),
('M1011', 'vang', 'Vàng đậm cái', '../images/M1011.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1012', 'vang', 'Vàng đậm cái', '../images/M1012.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1013', 'vang', 'Vàng đậm cái', '../images/M1013.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1014', 'vang', 'Vàng đậm cái', '../images/M1014.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1015', 'vang', 'Vàng đậm cái', '../images/M1015.jpg', 120000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1020', 'vang', 'Vàng nhạt cái', '../images/M1020.jpg', 150000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1021', 'vang', 'Vàng nhạt cái', '../images/M1021.jpg', 150000, '4 tuần', 1, 0, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M1030', 'vang', 'Vàng đậm đực', '../images/M1030.jpg', 250000, '4 tuần', 2, 1, 'Việt Nam', 1, 1, 1, 1, '1', '1'),
('M2000', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2000.jpg', 10000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2001', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2001.jpg', 10000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2002', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2002.jpg', 10000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2003', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2003.jpg', 10000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2004', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2004.jpg', 10000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2010', 'tai_cup', 'Tai cụp Black Gold cái', '../images/M2010.jpg', 15000000, '5 tuần', 1.5, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '0'),
('M2011', 'tai_cup', 'Tai cụp Black Gold cái', '../images/M2011.jpg', 15000000, '5 tuần', 1.5, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2012', 'tai_cup', 'Tai cụp Black Gold cái', '../images/M2012.jpg', 15000000, '5 tuần', 1.5, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2013', 'tai_cup', 'Tai cụp Black Gold cái', '../images/M2013.jpg', 15000000, '5 tuần', 1.5, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2014', 'tai_cup', 'Tai cụp Black Gold cái', '../images/M2014.jpg', 15000000, '5 tuần', 1.5, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2020', 'tai_cup', 'Tai cụp Silver cái', '../images/M2020.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2021', 'tai_cup', 'Tai cụp Silver cái', '../images/M2021.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2022', 'tai_cup', 'Tai cụp Silver cái', '../images/M2022.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2023', 'tai_cup', 'Tai cụp Silver cái', '../images/M2023.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2024', 'tai_cup', 'Tai cụp Silver cái', '../images/M2024.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2025', 'tai_cup', 'Tai cụp Silver cái', '../images/M2025.jpg', 12000000, '5 tuần', 1.2, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2030', 'tai_cup', 'Tai cụp Silver cái', '../images/M2030.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2031', 'tai_cup', 'Tai cụp Silver cái', '../images/M2031.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2032', 'tai_cup', 'Tai cụp Silver cái', '../images/M2032.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2033', 'tai_cup', 'Tai cụp Silver cái', '../images/M2033.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2034', 'tai_cup', 'Tai cụp Silver cái', '../images/M2034.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2035', 'tai_cup', 'Tai cụp Silver cái', '../images/M2035.jpg', 11000000, '3 tuần', 0.8, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2040', 'tai_cup', 'Tai cụp Tabbi cái', '../images/M2040.jpg', 16000000, '5 tuần', 1.7, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2041', 'tai_cup', 'Tai cụp Tabbi cái', '../images/M2041.jpg', 16000000, '5 tuần', 1.7, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2042', 'tai_cup', 'Tai cụp Tabbi cái', '../images/M2042.jpg', 16000000, '5 tuần', 1.7, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2043', 'tai_cup', 'Tai cụp Tabbi cái', '../images/M2043.jpg', 16000000, '5 tuần', 1.7, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2050', 'tai_cup', 'Tai cụp Hyma cái', '../images/M2050.jpg', 23000000, '4 tuần', 1.7, 0, 'Châu Âu', 1, 1, 1, 1, '1', '0'),
('M2051', 'tai_cup', 'Tai cụp Hyma cái', '../images/M2051.jpg', 23000000, '4 tuần', 1.7, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2052', 'tai_cup', 'Tai cụp Hyma cái', '../images/M2052.jpg', 23000000, '4 tuần', 1.7, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2053', 'tai_cup', 'Tai cụp Hyma cái', '../images/M2053.jpg', 23000000, '4 tuần', 1.7, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2054', 'tai_cup', 'Tai cụp Hyma cái', '../images/M2054.jpg', 23000000, '4 tuần', 1.7, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2060', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2060.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '0'),
('M2061', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2061.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2062', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2062.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2063', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2063.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2064', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2064.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2065', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2065.jpg', 12000000, '3 tuần', 1, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2070', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2070.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2071', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2071.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2072', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2072.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2073', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2073.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2074', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2074.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2075', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2075.jpg', 16000000, '3 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2080', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2080.jpg', 20000000, '8 tuần', 2.5, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2081', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2081.jpg', 20000000, '8 tuần', 2.5, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2082', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2082.jpg', 20000000, '8 tuần', 2.5, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2083', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2083.jpg', 20000000, '8 tuần', 2.5, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2084', 'tai_cup', 'Tai cụp Tabbi đực', '../images/M2084.jpg', 20000000, '8 tuần', 2.5, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2090', 'tai_cup', 'Tai cụp trắng cái', '../images/M2090.jpg', 35000000, '8 tuần', 2.2, 0, 'Châu Âu', 1, 1, 1, 1, '1', '0'),
('M2091', 'tai_cup', 'Tai cụp trắng cái', '../images/M2091.jpg', 35000000, '8 tuần', 2.2, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2092', 'tai_cup', 'Tai cụp trắng cái', '../images/M2092.jpg', 35000000, '8 tuần', 2.2, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2093', 'tai_cup', 'Tai cụp trắng cái', '../images/M2093.jpg', 35000000, '8 tuần', 2.2, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2094', 'tai_cup', 'Tai cụp trắng cái', '../images/M2094.jpg', 35000000, '8 tuần', 2.2, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2100', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2100.jpg', 10000000, '5 tuần', 1.7, 1, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2101', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2101.jpg', 10000000, '5 tuần', 1.7, 1, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2102', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2102.jpg', 10000000, '5 tuần', 1.7, 1, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2103', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2103.jpg', 10000000, '5 tuần', 1.7, 1, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2104', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2104.jpg', 10000000, '5 tuần', 1.7, 1, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2110', 'tai_cup', 'Tai cụp Silver cái', '../images/M2110.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2111', 'tai_cup', 'Tai cụp Silver cái', '../images/M2111.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2112', 'tai_cup', 'Tai cụp Silver cái', '../images/M2112.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2113', 'tai_cup', 'Tai cụp Silver cái', '../images/M2113.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2114', 'tai_cup', 'Tai cụp Silver cái', '../images/M2114.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2115', 'tai_cup', 'Tai cụp Silver cái', '../images/M2115.jpg', 22000000, '7 tuần', 1.8, 0, 'Thái lan', 1, 1, 1, 1, '1', '1'),
('M2120', 'tai_cup', 'Tai cụp xanh xám cái', '../images/M2120.jpg', 6000000, '4 tuần', 0.8, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '0'),
('M2121', 'tai_cup', 'Tai cụp xanh xám cái', '../images/M2121.jpg', 6000000, '4 tuần', 0.8, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2122', 'tai_cup', 'Tai cụp xanh xám cái', '../images/M2122.jpg', 6000000, '4 tuần', 0.8, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2123', 'tai_cup', 'Tai cụp xanh xám cái', '../images/M2123.jpg', 6000000, '4 tuần', 0.8, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2124', 'tai_cup', 'Tai cụp xanh xám cái', '../images/M2124.jpg', 6000000, '4 tuần', 0.8, 0, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2130', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2130.jpg', 15000000, '6 tuần', 1.4, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2131', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2131.jpg', 15000000, '6 tuần', 1.4, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2132', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2132.jpg', 15000000, '6 tuần', 1.4, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2133', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2133.jpg', 15000000, '6 tuần', 1.4, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2134', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2134.jpg', 15000000, '6 tuần', 1.4, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M2140', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2140.jpg', 18000000, '6 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2141', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2141.jpg', 18000000, '6 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2142', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2142.jpg', 18000000, '6 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2143', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2143.jpg', 18000000, '6 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2144', 'tai_cup', 'Tai cụp Bicolor đực', '../images/M2144.jpg', 18000000, '6 tuần', 1.4, 1, 'Trung Quốc', 1, 1, 1, 1, '1', '1'),
('M2151', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2151.jpg', 18500000, '3 tuần', 1, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2152', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2152.jpg', 18500000, '3 tuần', 1, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2153', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2153.jpg', 18500000, '3 tuần', 1, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2154', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2154.jpg', 18500000, '3 tuần', 1, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2155', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2155.jpg', 18500000, '3 tuần', 1, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2161', 'tai_cup', 'Tai cụp Silver cái', '../images/M2161.jpg', 27500000, '9 tuần', 2.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2162', 'tai_cup', 'Tai cụp Silver cái', '../images/M2162.jpg', 27500000, '9 tuần', 2.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2163', 'tai_cup', 'Tai cụp Silver cái', '../images/M2163.jpg', 27500000, '9 tuần', 2.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2164', 'tai_cup', 'Tai cụp Silver cái', '../images/M2164.jpg', 27500000, '9 tuần', 2.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2171', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2171.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2172', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2172.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2173', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2173.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2174', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2174.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2175', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2175.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M2176', 'tai_cup', 'Tai cụp Bicolor cái', '../images/M2176.jpg', 45000000, '9 tuần', 3, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M3000', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3000.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3001', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3001.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3002', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3002.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3003', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3003.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3004', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3004.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3005', 'Ai Cập Sphynx', 'Sphynx be đực', '../images/M3005.jpg', 25500000, '9 tuần', 2.6, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3010', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3010.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '0'),
('M3011', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3011.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3012', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3012.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3013', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3013.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3014', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3014.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3015', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3015.jpg', 36000000, '5 tuần', 2.1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3020', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3020.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3021', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3021.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3022', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3022.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3023', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3023.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3024', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3024.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3025', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3025.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3026', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3026.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3027', 'Ai Cập Sphynx', 'Sphynx Cream đực', '../images/M3027.jpg', 51000000, '4 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3030', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3030.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3031', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3031.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3032', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3032.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3033', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3033.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3034', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3034.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3035', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3035.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3036', 'Ai Cập Sphynx', 'Sphynx Bicolor cái', '../images/M3036.jpg', 24000000, '2 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3040', 'Ai Cập Sphynx', 'Sphynx đốm cái', '../images/M3040.jpg', 30000000, '5 tuần', 1.3, 0, 'Canada', 1, 1, 1, 1, '1', '0'),
('M3041', 'Ai Cập Sphynx', 'Sphynx đốm cái', '../images/M3041.jpg', 30000000, '5 tuần', 1.3, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3042', 'Ai Cập Sphynx', 'Sphynx đốm cái', '../images/M3042.jpg', 30000000, '5 tuần', 1.3, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3043', 'Ai Cập Sphynx', 'Sphynx đốm cái', '../images/M3043.jpg', 30000000, '5 tuần', 1.3, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3050', 'Ai Cập Sphynx', 'Sphynx trắng đực', '../images/M3050.jpg', 43000000, '7 tuần', 2.3, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3051', 'Ai Cập Sphynx', 'Sphynx trắng đực', '../images/M3051.jpg', 43000000, '7 tuần', 2.3, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3060', 'Ai Cập Sphynx', 'Sphynx Bicolor đực', '../images/M3060.jpg', 23000000, '6 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3061', 'Ai Cập Sphynx', 'Sphynx Bicolor đực', '../images/M3061.jpg', 23000000, '6 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M3062', 'Ai Cập Sphynx', 'Sphynx Bicolor đực', '../images/M3062.jpg', 23000000, '6 tuần', 2.1, 1, 'Canada', 1, 1, 1, 1, '1', '1'),
('M4000', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4000.jpg', 12000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4001', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4001.jpg', 12000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4002', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4002.jpg', 12000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4010', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4010.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4011', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4011.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4012', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4012.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4013', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4013.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4014', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4014.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4015', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4015.jpg', 24560000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4020', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4020.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4021', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4021.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4022', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4022.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4023', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4023.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4024', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4024.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4025', 'Anh Lông Ngắn', 'ALN Golden cái, tai cụp', '../images/M4025.jpg', 43500000, '4 tuần', 2.4, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4030', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4030.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '0'),
('M4031', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4031.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4032', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4032.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4033', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4033.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4034', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4034.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4035', 'Anh Lông Ngắn', 'ALN Golden đực', '../images/M4035.jpg', 17000000, '5 tuần', 2.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4040', 'Anh Lông Ngắn', 'ALN Lilac cái', '../images/M4040.jpg', 11000000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '0'),
('M4041', 'Anh Lông Ngắn', 'ALN Lilac cái', '../images/M4041.jpg', 11000000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4042', 'Anh Lông Ngắn', 'ALN Lilac cái', '../images/M4042.jpg', 11000000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4043', 'Anh Lông Ngắn', 'ALN Lilac cái', '../images/M4043.jpg', 11000000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4050', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4050.jpg', 31000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '0'),
('M4051', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4051.jpg', 31000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4052', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4052.jpg', 31000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4053', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4053.jpg', 31000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4054', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4054.jpg', 31000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4060', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4060.jpg', 25000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4061', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4061.jpg', 25000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4062', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4062.jpg', 25000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4063', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4063.jpg', 25000000, '6 tuần', 2.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4070', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4070.jpg', 16000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '0'),
('M4071', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4071.jpg', 16000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4072', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4072.jpg', 16000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4073', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4073.jpg', 16000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4074', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4074.jpg', 16000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4080', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4080.jpg', 14000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4081', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4081.jpg', 14000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4082', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4082.jpg', 14000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4083', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4083.jpg', 14000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4084', 'Anh Lông Ngắn', 'ALN xanh xám đực', '../images/M4084.jpg', 14000000, '5 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4090', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4090.jpg', 14500000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '0'),
('M4091', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4091.jpg', 14500000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4092', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4092.jpg', 14500000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4093', 'Anh Lông Ngắn', 'ALN xanh xám cái', '../images/M4093.jpg', 14500000, '3 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4100', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4100.jpg', 36000000, '5 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4101', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4101.jpg', 36000000, '5 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4102', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4102.jpg', 36000000, '5 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4103', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4103.jpg', 36000000, '5 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4104', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4104.jpg', 36000000, '5 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4110', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4110.jpg', 16000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4111', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4111.jpg', 16000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4112', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4112.jpg', 16000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4113', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4113.jpg', 16000000, '6 tuần', 2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4120', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4120.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4121', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4121.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4122', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4122.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4123', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4123.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4124', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4124.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4125', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4125.jpg', 18000000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4130', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4130.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4131', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4131.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4132', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4132.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4133', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4133.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4134', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4134.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4135', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4135.jpg', 15000000, '7 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4140', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4140.jpg', 26000000, '7 tuần', 2.1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4141', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4141.jpg', 26000000, '7 tuần', 2.1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4142', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4142.jpg', 26000000, '7 tuần', 2.1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4143', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4143.jpg', 26000000, '7 tuần', 2.1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4144', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4144.jpg', 26000000, '7 tuần', 2.1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4150', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4150.jpg', 12300000, '3 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4151', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4151.jpg', 12300000, '3 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4152', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4152.jpg', 12300000, '3 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4153', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4153.jpg', 12300000, '3 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4154', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4154.jpg', 12300000, '3 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4160', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4160.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4161', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4161.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4162', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4162.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4163', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4163.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4164', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4164.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4165', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4165.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4166', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4166.jpg', 13300000, '3 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4170', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4170.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4171', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4171.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4172', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4172.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4173', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4173.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4174', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4174.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4175', 'Anh Lông Ngắn', 'ALN Silver đực', '../images/M4175.jpg', 24000000, '6 tuần', 1.8, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4180', 'Anh Lông Ngắn', 'ALN Tabby cái', '../images/M4180.jpg', 25000000, '6 tuần', 1.8, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4181', 'Anh Lông Ngắn', 'ALN Tabby cái', '../images/M4181.jpg', 25000000, '6 tuần', 1.8, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4182', 'Anh Lông Ngắn', 'ALN Tabby cái', '../images/M4182.jpg', 25000000, '6 tuần', 1.8, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4183', 'Anh Lông Ngắn', 'ALN Tabby cái', '../images/M4183.jpg', 25000000, '6 tuần', 1.8, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4184', 'Anh Lông Ngắn', 'ALN Tabby cái', '../images/M4184.jpg', 25000000, '6 tuần', 1.8, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4190', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4190.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4191', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4191.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4192', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4192.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4193', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4193.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4194', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4194.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4195', 'Anh Lông Ngắn', 'ALN Bicolor cái', '../images/M4195.jpg', 51000000, '9 tuần', 2.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4200', 'Anh Lông Ngắn', 'ALN Silver cái', '../images/M4200.jpg', 13000000, '5 tuần', 1.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4201', 'Anh Lông Ngắn', 'ALN Silver cái', '../images/M4201.jpg', 13000000, '5 tuần', 1.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4202', 'Anh Lông Ngắn', 'ALN Silver cái', '../images/M4202.jpg', 13000000, '5 tuần', 1.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4203', 'Anh Lông Ngắn', 'ALN Silver cái', '../images/M4203.jpg', 13000000, '5 tuần', 1.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4204', 'Anh Lông Ngắn', 'ALN Silver cái', '../images/M4204.jpg', 13000000, '5 tuần', 1.7, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4210', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4210.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4211', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4211.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4212', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4212.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4213', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4213.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4214', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4214.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4215', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4215.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4216', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4216.jpg', 33000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4220', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4220.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4221', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4221.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4222', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4222.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4223', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4223.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4224', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4224.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4225', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4225.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4226', 'Anh Lông Ngắn', 'ALN Bicolor đực', '../images/M4226.jpg', 13000000, '2 tuần', 0.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4230', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4230.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4231', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4231.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4232', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4232.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4233', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4233.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4234', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4234.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4235', 'Anh Lông Ngắn', 'ALN hông phấn đực', '../images/M4235.jpg', 53000000, '5 tuần', 2.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4240', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4240.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4241', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4241.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4242', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4242.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4243', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4243.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4244', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4244.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4245', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4245.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4246', 'Anh Lông Ngắn', 'ALN Lilac đực', '../images/M4246.jpg', 11000000, '3 tuần', 1.7, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4250', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4251', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4252', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4253', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4254', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4255', 'Anh Lông Ngắn', 'ALN Tabby đực', '../images/M4250.jpg', 31000000, '7 tuần', 3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4260', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4260.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4261', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4261.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4262', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4262.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4263', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4263.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4264', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4264.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4265', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4265.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4266', 'Anh Lông Ngắn', 'ALN Black Gold đực', '../images/M4266.jpg', 28000000, '4 tuần', 1.6, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4270', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4270.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4271', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4271.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4272', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4272.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4273', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4273.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4274', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4274.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4275', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4275.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4276', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4276.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4277', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4277.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4278', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4278.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M4279', 'Anh Lông Ngắn', 'ALN Orange đực', '../images/M4279.jpg', 48000000, '7 tuần', 1.9, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5000', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5000.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5001', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5001.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5002', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5002.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5003', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5003.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5004', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5004.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5005', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5005.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5010', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5010.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5011', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5011.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5012', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5012.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5013', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5013.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5014', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5014.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5015', 'Anh Lông Dài', 'ALD Lilac đực', '../images/M5015.jpg', 22000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5020', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5020.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5021', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5021.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5022', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5022.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5023', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5023.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5024', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5024.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5025', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5025.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5026', 'Anh Lông Dài', 'ALD Gold đực', '../images/M5026.jpg', 31000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5030', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5030.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5031', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5031.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5032', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5032.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5033', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5033.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5034', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5034.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5035', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5035.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5036', 'Anh Lông Dài', 'ALD Gold cái', '../images/M5036.jpg', 35000000, '4 tuần', 2.1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5040', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5040.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5041', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5041.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5042', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5042.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5043', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5043.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5044', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5044.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5045', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5045.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5046', 'Anh Lông Dài', 'ALD Orange cái', '../images/M5046.jpg', 25000000, '3 tuần', 1.2, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5050', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5051', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5052', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5053', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5054', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5055', 'Anh Lông Dài', 'ALD xanh xám đực', '../images/M5050.jpg', 14000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5060', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5060.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5061', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5061.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5062', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5062.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5063', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5063.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5064', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5064.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5065', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5065.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5066', 'Anh Lông Dài', 'ALD Silver đực', '../images/M5066.jpg', 34000000, '3 tuần', 1.2, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5070', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5070.jpg', 12000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5071', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5071.jpg', 12000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5072', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5072.jpg', 12000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5073', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5073.jpg', 12000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5074', 'Anh Lông Dài', 'ALD Bicolor đực', '../images/M5074.jpg', 12000000, '5 tuần', 2.3, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5080', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5080.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5081', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5081.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5082', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5082.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5083', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5083.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5084', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5084.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5085', 'Anh Lông Dài', 'ALD Bicolor cái', '../images/M5085.jpg', 45000000, '5 tuần', 2.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5090', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5090.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5091', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5091.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5092', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5092.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5093', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5093.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5094', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5094.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5095', 'Anh Lông Dài', 'ALD hồng phấn cái', '../images/M5095.jpg', 43000000, '3 tuần', 1.3, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5100', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5100.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1');
INSERT INTO `all_product_cat` (`id_cat`, `chung_loai`, `ten_meo`, `anh`, `price`, `tuoi`, `can_nang`, `sex`, `nguon_goc`, `vaccin_4_benh`, `vaccin_dai`, `vaccin_phuc_mac`, `tay_giun`, `an_hien`, `trang_thai`) VALUES
('M5101', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5101.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5102', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5102.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5103', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5103.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5104', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5104.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M5105', 'Anh Lông Dài', 'ALD Tabby cái', '../images/M5105.jpg', 14000000, '4 tuần', 1.5, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6000', 'Ba Tư', 'Ba Tư trắng đực', '../images/M6000.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6001', 'Ba Tư', 'Ba Tư trắng đực', '../images/M6001.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6002', 'Ba Tư', 'Ba Tư trắng đực', '../images/M6002.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6003', 'Ba Tư', 'Ba Tư trắng đực', '../images/M6003.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6004', 'Ba Tư', 'Ba Tư trắng đực', '../images/M6004.jpg', 12000000, '4 tuần', 1, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6010', 'Ba Tư', 'Ba Tư đen đực', '../images/M6010.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6011', 'Ba Tư', 'Ba Tư đen đực', '../images/M6011.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6012', 'Ba Tư', 'Ba Tư đen đực', '../images/M6012.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6013', 'Ba Tư', 'Ba Tư đen đực', '../images/M6013.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6014', 'Ba Tư', 'Ba Tư đen đực', '../images/M6014.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6015', 'Ba Tư', 'Ba Tư đen đực', '../images/M6015.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6016', 'Ba Tư', 'Ba Tư đen đực', '../images/M6016.jpg', 11000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M6020', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6020.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6021', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6021.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6022', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6022.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6023', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6023.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6024', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6024.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6025', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6025.jpg', 17000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6030', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6030.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6031', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6031.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6032', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6032.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6033', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6033.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6034', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6034.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6035', 'Ba Tư', 'Ba Tư trắng cái', '../images/M6035.jpg', 18000000, '7 tuần', 1.5, 0, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6040', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6041', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6042', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6043', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6044', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6045', 'Ba Tư', 'Ba Tư Bicolor đực', '../images/M6040.jpg', 25000000, '8 tuần', 2.5, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6050', 'Ba Tư', 'Ba Tư Orange đực', '../images/M6050.jpg', 22000000, '3 tuần', 1.6, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6051', 'Ba Tư', 'Ba Tư Orange đực', '../images/M6051.jpg', 22000000, '3 tuần', 1.6, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6052', 'Ba Tư', 'Ba Tư Orange đực', '../images/M6052.jpg', 22000000, '3 tuần', 1.6, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6053', 'Ba Tư', 'Ba Tư Orange đực', '../images/M6053.jpg', 22000000, '3 tuần', 1.6, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M6054', 'Ba Tư', 'Ba Tư Orange đực', '../images/M6054.jpg', 22000000, '3 tuần', 1.6, 1, 'Châu Âu', 1, 1, 1, 1, '1', '1'),
('M7000', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7000.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7001', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7001.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7002', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7002.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7003', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7003.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7004', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7004.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7005', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7005.jpg', 32000000, '4 tuần', 1, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7010', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7010.jpg', 28000000, '3 tuần', 0.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7011', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7011.jpg', 28000000, '3 tuần', 0.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7012', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7012.jpg', 28000000, '3 tuần', 0.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7013', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7013.jpg', 28000000, '3 tuần', 0.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7014', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7014.jpg', 28000000, '3 tuần', 0.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7020', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7020.jpg', 43000000, '6 tuần', 2.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7021', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7021.jpg', 43000000, '6 tuần', 2.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7022', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7022.jpg', 43000000, '6 tuần', 2.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7023', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7023.jpg', 43000000, '6 tuần', 2.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7024', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7024.jpg', 43000000, '6 tuần', 2.9, 0, 'Canada', 1, 1, 1, 1, '1', '1'),
('M7030', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7030.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7031', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7031.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7032', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7032.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7033', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7033.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7034', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7034.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7035', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7035.jpg', 21000000, '3 tuần', 0.5, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7040', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7040.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7041', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7041.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7042', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7042.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7043', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7043.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7044', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7044.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7045', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7045.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7046', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7046.jpg', 18000000, '2 tuần', 0.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M7050', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7050.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7051', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7051.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7052', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7052.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7053', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7053.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7054', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7054.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7055', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor cái', '../images/M7055.jpg', 24000000, '5 tuần', 1.5, 0, 'Nhật Bản', 1, 1, 1, 1, '1', '1'),
('M7060', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7060.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7061', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7061.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7062', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7062.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7063', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7063.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7064', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7064.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7065', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7065.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7066', 'Chân Ngắn Munchkin', 'Munchkyn Bicolor đực', '../images/M7066.jpg', 26000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M7070', 'Chân Ngắn Munchkin', 'Munchkyn Lilac đực', '../images/M7070.jpg', 25000000, '5 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M8000', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8000.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8001', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8001.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8002', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8002.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8003', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8003.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8004', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8004.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8005', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8005.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8006', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8006.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8007', 'Ragdoll', 'Ragdoll Lilac Lynx Point đực', '../images/M8007.jpg', 56000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8010', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8010.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8011', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8011.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8012', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8012.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8013', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8013.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8014', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8014.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8015', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8015.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8016', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8016.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8017', 'Ragdoll', 'Ragdoll Blue Point đực', '../images/M8017.jpg', 48000000, '5 tuần', 2.5, 1, 'Hoa Kỳ', 1, 1, 1, 1, '1', '1'),
('M8020', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8020.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8021', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8021.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8022', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8022.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8023', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8023.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8024', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8024.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8025', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8025.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8026', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8026.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8027', 'Ragdoll', 'Ragdoll Bicolor đực', '../images/M8027.jpg', 32000000, '3 tuần', 1.5, 1, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8030', 'Ragdoll', 'Ragdoll Lilac Lynx Point cái', '../images/M8030.jpg', 52000000, '6 tuần', 2.5, 0, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8031', 'Ragdoll', 'Ragdoll Lilac Lynx Point cái', '../images/M8031.jpg', 52000000, '6 tuần', 2.5, 0, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8032', 'Ragdoll', 'Ragdoll Lilac Lynx Point cái', '../images/M8032.jpg', 52000000, '6 tuần', 2.5, 0, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8033', 'Ragdoll', 'Ragdoll Lilac Lynx Point cái', '../images/M8033.jpg', 52000000, '6 tuần', 2.5, 0, 'Pháp', 1, 1, 1, 1, '1', '1'),
('M8040', 'Ragdoll', 'Ragdoll Lilac cái', '../images/M8040.jpg', 26000000, '6 tuần', 2.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M8041', 'Ragdoll', 'Ragdoll Lilac cái', '../images/M8041.jpg', 26000000, '6 tuần', 2.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M8042', 'Ragdoll', 'Ragdoll Lilac cái', '../images/M8042.jpg', 26000000, '6 tuần', 2.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M8043', 'Ragdoll', 'Ragdoll Lilac cái', '../images/M8043.jpg', 26000000, '6 tuần', 2.5, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9000', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9000.jpg', 12000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9001', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9001.jpg', 12000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9002', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9002.jpg', 12000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9003', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9003.jpg', 12000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9004', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9004.jpg', 12000000, '4 tuần', 1, 1, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9010', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9010.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9011', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9011.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9012', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9012.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9013', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9013.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9014', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9014.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9015', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9005.jpg', 18000000, '5 tuần', 1.5, 0, 'Thái Lan', 1, 1, 1, 1, '1', '1'),
('M9020', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9020.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9021', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9021.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9022', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9022.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9023', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9023.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9024', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9024.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9025', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9025.jpg', 18500000, '3 tuần', 1, 0, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9030', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9030.jpg', 19500000, '4 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9031', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9031.jpg', 19500000, '4 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9032', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9032.jpg', 19500000, '4 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9033', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9033.jpg', 19500000, '4 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9034', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9034.jpg', 19500000, '4 tuần', 1.5, 1, 'Anh', 1, 1, 1, 1, '1', '1'),
('M9040', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9040.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9041', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9041.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9042', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9042.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9043', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9043.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9044', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9044.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9045', 'Xiêm', 'Xiêm Blue Point đực', '../images/M9045.jpg', 2400000, '5 tuần', 1.8, 1, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9050', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9050.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9051', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9051.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9052', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9052.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9053', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9053.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9054', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9054.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1'),
('M9055', 'Xiêm', 'Xiêm Blue Point cái', '../images/M9055.jpg', 2536000, '7 tuần', 2.8, 0, 'Nga', 1, 1, 1, 1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `nguoi_nhan` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `ma_san_pham` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `trang_thai` enum('Đang chờ vận chuyển','Đang vận chuyển','Đã giao hàng','Đã hủy','Đã hoàn thành','Chưa thanh toán','Đang chờ xác nhận','Tạm hoãn','Đã xác nhận') NOT NULL DEFAULT 'Đang chờ xác nhận',
  `total` int(11) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `note` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `nguoi_nhan`, `phone`, `ma_san_pham`, `order_date`, `email`, `trang_thai`, `total`, `shipping_address`, `payment_method`, `note`, `id_user`) VALUES
(25, 'Phuong', 869801744, 'M2010, ', '2024-09-09', 'nguyennhuphuong23012004@gmail.com', 'Đang chờ vận chuyển', 15000000, 'abcdefhgjbd', 'COD', '', 5),
(26, 'Suit_able', 978410127, 'M2010, ', '2024-09-09', 'huy08122004@gmail.com', 'Đã xác nhận', 15000000, '111', 'COD', '', 5),
(27, 'Phuong', 869801744, 'M2010, ', '2024-09-09', 'nguyennhuphuong23012004@gmail.com', 'Đã xác nhận', 15000000, 'abcdefhgjbd', 'COD', '', 5),
(28, 'Suit_able', 978410127, 'M2050, M4000, ', '2024-09-10', 'huy08122004@gmail.com', 'Đã xác nhận', 35000000, '111', 'COD', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ma_san_pham` varchar(20) NOT NULL,
  `ten_san_pham` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `anh` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `ma_san_pham`, `ten_san_pham`, `price`, `anh`, `id_user`) VALUES
(3, 'M4050', 'ALN Bicolor cái', 31000000, '../images/M4050.jpg', 3),
(5, 'M2000', 'Tai cụp Bicolor đực', 10000000, '../images/M2000.jpg', 5),
(6, 'M2040', 'Tai cụp Tabbi cái', 16000000, '../images/M2040.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `role` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `username`, `password`, `email`, `phone`, `role`) VALUES
(3, 'phuong', '123456', 'nguyennhuphuong23012004@gmail.com', 869801744, '0'),
(5, 'phuong2', '123456', 'nguyennhuphuong23012004@gmail.com', 869801744, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_product_cat`
--
ALTER TABLE `all_product_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_donhang` (`id_user`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_cart` (`id_user`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `user_donhang` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `user_cart` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
