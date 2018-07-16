-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 09:43 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cty_luhanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_tour`
--

CREATE TABLE `dat_tour` (
  `MA_TOUR` int(11) NOT NULL,
  `MA_KH` int(11) NOT NULL,
  `GHI_CHU` varchar(45) DEFAULT NULL,
  `SL_DAT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dia diem`
--

CREATE TABLE `dia diem` (
  `MA_DD` int(11) NOT NULL,
  `DIA_CHI` varchar(45) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MO_TA` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MA_TINH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MA_KH` int(11) NOT NULL,
  `HO_TEN_KH` varchar(45) DEFAULT NULL,
  `CMND` int(11) DEFAULT NULL,
  `SDT` int(11) DEFAULT NULL,
  `Email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lich_trinh`
--

CREATE TABLE `lich_trinh` (
  `MA_LICHTRINH` int(11) NOT NULL,
  `THOI_GIAN` time NOT NULL,
  `DD_DULICH` int(11) NOT NULL,
  `MA_TOUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `MA_TOUR` int(11) NOT NULL,
  `MA_DD` int(11) NOT NULL,
  `GIA_TOUR` int(11) NOT NULL,
  `MA_XE` int(11) NOT NULL,
  `NGAY_DI` date NOT NULL,
  `NGAY_VE` date NOT NULL,
  `DD_DI` int(11) NOT NULL,
  `DD_DEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_tour`
--
ALTER TABLE `dat_tour`
  ADD KEY `MS_TOUR1` (`MA_TOUR`),
  ADD KEY `KH1` (`MA_KH`);

--
-- Indexes for table `dia diem`
--
ALTER TABLE `dia diem`
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
  ADD KEY `BS_XE1` (`MA_XE`),
  ADD KEY `MA_DD1` (`MA_DD`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`MA_XE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dia diem`
--
ALTER TABLE `dia diem`
  MODIFY `MA_DD` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_tour`
--
ALTER TABLE `dat_tour`
  ADD CONSTRAINT `KH1` FOREIGN KEY (`MA_KH`) REFERENCES `khach_hang` (`MA_KH`);

--
-- Constraints for table `lich_trinh`
--
ALTER TABLE `lich_trinh`
  ADD CONSTRAINT `MA_TOUR2` FOREIGN KEY (`MA_TOUR`) REFERENCES `dat_tour` (`MA_TOUR`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `BS_XE1` FOREIGN KEY (`MA_XE`) REFERENCES `xe` (`MA_XE`),
  ADD CONSTRAINT `MA_TOUR1` FOREIGN KEY (`MA_TOUR`) REFERENCES `dat_tour` (`MA_TOUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
