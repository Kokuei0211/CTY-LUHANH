-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2018 at 04:40 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_tour`
--

CREATE TABLE `dat_tour` (
  `MA_KH` int(11) NOT NULL,
  `GHI_CHU` varchar(45) DEFAULT NULL,
  `SL_DAT` int(11) NOT NULL,
  `MA_TOUR` int(11) NOT NULL,
  `MA_DATTOUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dia_diem`
--

CREATE TABLE `dia_diem` (
  `MA_DD` int(11) NOT NULL,
  `DIA_CHI` varchar(100) NOT NULL,
  `MO_TA` varchar(1000) NOT NULL,
  `MA_TINH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dia_diem`
--

INSERT INTO `dia_diem` (`MA_DD`, `DIA_CHI`, `MO_TA`, `MA_TINH`) VALUES
(1, 'Bà Nà Hill - thành phố Đà Nẵng', 'Khu du lịch Bà Nà Hills tọa lạc trên đỉnh núi cao gần 1.500m, giữa vùng rừng nguyên sinh cận biển, với cảnh quan thiên nhiên tuyệt đẹp, khí hậu trong lành, mát mẻ quanh năm. Nơi đây có nhiều công trình kiến trúc đậm chất Châu Âu, phục vụ vui chơi, giải trí. Là nơi đáng đến', 43),
(6, 'Sài Gòn', 'Sài Gòn', 59);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MA_KH` int(11) NOT NULL,
  `HO_TEN_KH` varchar(45) DEFAULT NULL,
  `CMND` int(11) DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MA_KH`, `HO_TEN_KH`, `CMND`, `SDT`, `Email`) VALUES
(2, 'nhung', 124, 123, 'nhung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lich_trinh`
--

CREATE TABLE `lich_trinh` (
  `MA_LICHTRINH` int(11) NOT NULL,
  `THOI_GIAN` time NOT NULL,
  `DD_DULICH` varchar(500) NOT NULL,
  `MA_TOUR` int(11) NOT NULL,
  `DAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lich_trinh`
--

INSERT INTO `lich_trinh` (`MA_LICHTRINH`, `THOI_GIAN`, `DD_DULICH`, `MA_TOUR`, `DAY`) VALUES
(1, '05:00:00', '0', 4, '2018-08-19'),
(2, '11:00:00', 'bán ??o s?n trà', 4, '2018-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `MA_TOUR` int(11) NOT NULL,
  `GIA_TOUR` int(11) NOT NULL,
  `MA_XE` int(11) NOT NULL,
  `NGAY_DI` date NOT NULL,
  `NGAY_VE` date NOT NULL,
  `DD_DI` int(11) NOT NULL,
  `DD_DEN` int(11) NOT NULL,
  `Cover` varchar(111) NOT NULL,
  `TEN_TOUR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`MA_TOUR`, `GIA_TOUR`, `MA_XE`, `NGAY_DI`, `NGAY_VE`, `DD_DI`, `DD_DEN`, `Cover`, `TEN_TOUR`) VALUES
(4, 12, 123456, '2018-08-19', '2018-08-21', 6, 1, 'image_upload/test_2018-08-01_18:24:39.png', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `MA_XE` int(11) NOT NULL,
  `LOAI_XE` int(11) NOT NULL,
  `MAU_XE` int(11) NOT NULL,
  `SO_CHO` int(11) NOT NULL,
  `NGAY_BTRI` date NOT NULL,
  `TAI_XE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`MA_XE`, `LOAI_XE`, `MAU_XE`, `SO_CHO`, `NGAY_BTRI`, `TAI_XE`) VALUES
(123456, 0, 0, 40, '2018-07-12', 0),
(123457, 0, 0, 12, '2018-07-29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_tour`
--
ALTER TABLE `dat_tour`
  ADD PRIMARY KEY (`MA_DATTOUR`),
  ADD KEY `KH1` (`MA_KH`);

--
-- Indexes for table `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`MA_DD`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MA_KH`);

--
-- Indexes for table `lich_trinh`
--
ALTER TABLE `lich_trinh`
  ADD PRIMARY KEY (`MA_LICHTRINH`),
  ADD KEY `MA_TOUR2` (`MA_TOUR`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MA_TOUR`),
  ADD KEY `BS_XE1` (`MA_XE`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`MA_XE`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_tour`
--
ALTER TABLE `dat_tour`
  MODIFY `MA_DATTOUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `MA_DD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MA_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lich_trinh`
--
ALTER TABLE `lich_trinh`
  MODIFY `MA_LICHTRINH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `MA_TOUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_tour`
--
ALTER TABLE `dat_tour`
  ADD CONSTRAINT `dat_tour_ibfk_1` FOREIGN KEY (`MA_KH`) REFERENCES `khach_hang` (`MA_KH`);

--
-- Constraints for table `lich_trinh`
--
ALTER TABLE `lich_trinh`
  ADD CONSTRAINT `lich_trinh_ibfk_1` FOREIGN KEY (`MA_TOUR`) REFERENCES `tour` (`MA_TOUR`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `BS_XE1` FOREIGN KEY (`MA_XE`) REFERENCES `xe` (`MA_XE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
