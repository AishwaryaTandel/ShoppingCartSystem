-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 01:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i1_db1_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Prod_name` varchar(20) NOT NULL,
  `Prod_type` varchar(20) NOT NULL,
  `Brand_type` varchar(20) NOT NULL,
  `Prod_desc` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Prod_img` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Name`, `Password`) VALUES
('Aishwarya', 'darshana'),
('Darshana', 'aishwarya');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `Prod_name` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Prod_type` varchar(20) NOT NULL,
  `Brand_type` varchar(20) NOT NULL,
  `Prod_desc` varchar(40) NOT NULL,
  `Cost` bigint(20) NOT NULL,
  `Prod_img` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`Prod_name`, `City`, `Prod_type`, `Brand_type`, `Prod_desc`, `Cost`, `Prod_img`, `pid`) VALUES
('MICROSOFT 111', 'CHENNAI', 'MOBILE', 'MICROSOFT', 'VERY GOOD', 15000, 'images/microsoft.jpg', 1),
('CANON360', 'HYDRABAD', 'DIGITAL CAMERA', 'CANON', '20 MEGAPIXEL / AUTOFOCUS', 20000, 'images/canon1.jpg', 2),
('NEXUS 101', 'SURAT', 'MOBILE', 'NEXUS', '15MP REAR CAMERA', 35000, 'images/nexus.jpg', 3),
('NIKON120', 'NAGPUR', 'DIGITAL CAMERA', 'NIKON', '20 MP', 22000, 'images/nikon1.jpg', 4),
('SAMSUNG GALAXY DUO', 'PANVEL', 'MOBILE', 'SAMSUNG', 'VERY GOOD', 15000, 'images/samsung2.jpg', 5),
('NIKON L1', 'KANPUR', 'DIGITAL CAMERA', 'NIKON', 'HD', 25000, 'images/nikon2.jpg', 6),
('CANON 333', 'BANGLORE', 'DIGITAL CAMERA', 'CANON', '20 MP', 18000, 'images/canon2.jpg', 7),
('NOKIA LUMIA', 'HYDRABAD', 'MOBILE', 'LUMIA', 'GOOD QUALITY', 10000, 'images/lumia.jpg', 8),
('SAMSUNG NOTE', 'KOLKATA', 'MOBILE', 'SAMSUNG', 'FRONT CAMERA 5 MP', 20000, 'images/samsung_note.jpg', 9),
('SAMSANG GALAXY J2', 'SURAT', 'MOBILE', 'SAMSUNG', 'GOOD ', 15000, 'images/samsung1.jpg', 10),
('LUMIA 520', 'MUMBAI', 'MOBILE', 'LUMIA', '10 MP CAMERA', 15000, 'images/lumia.jpg', 11),
('ONE PLUS 3T', 'MUMBAI', 'MOBILE', 'ONE PLUS', '6GB RAM+ 64GB ROM', 29999, 'images/oneplus3t.jpeg', 12),
('REDMI 4A', 'GUJRAT', 'MOBILE', 'REDMI', '16GB ROM', 20000, 'images/redmi4a.jpg', 13),
('MOTO G4 PLAY', 'DELHI', 'MOBILE', 'MOTOROLA', '8 MP PRIMARY CAMERA', 7999, 'images/motoplay.jpg', 14),
('MOTO G5 PLUS', 'GURGAON', 'MOBILE', 'MOTOROLA', '3GB RAM + 13MP PRIMARY CAMERA', 17000, 'images/motog5plus.jpg', 15),
('CANON EOS 700D', 'HARYANA', 'DSLR', 'CANON', '18 MP', 36999, 'images/canoneos700.jpg', 16),
('NIKON D3300', 'JAIPUR', 'DSLR', 'NIKON', '24.2 MP', 25790, 'images/nikond3300.jpg', 17),
('NIKON D5500', 'PUNE', 'DSLR', 'NIKON', '24.2 MP DX-FORMAT', 57550, 'images/nikond5500.jpg', 18),
('NIKON 1 J5', 'KANPUR', 'DIGITAL CAMERA', 'NIKON', '20.8 EFFECTIVE MEGAPIXELS', 24995, 'images/nikon1j5.jpg', 19),
('CANON EOS 1200D', 'NAGPUR', 'DSLR', 'CANON', '18 MP', 28999, 'images/canoneos1200d.jpg', 20),
('SONY ALPHA', 'KOCHI', 'DIGITAL CAMERA', 'SONY', '24.2 MP', 67199, 'images/sonyalpha.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Name`, `Password`) VALUES
('chhaya', 'vikas'),
('ALISHA', 'ANISHA'),
('MADHU', 'GEETA'),
('Disha', 'SIDA'),
('', ''),
('Aishwarya', 'darshana'),
('farhan', 'farrhan'),
('AISHWARYA TANDEL', 'aishwarya'),
('OM PRAKASH', 'OMOMOMOM');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(30) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`Name`, `Email`, `Contact`, `DOB`, `Password`, `uid`) VALUES
('AISHWARYA TANDEL', 'AISH@GMAIL.COM', 1234567890, '1998-02-11', 'aishwarya', 3),
('OM PRAKASH', 'OM@YAHOO.COM', 1234567880, '1987-02-13', 'OMOMOMOM', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
