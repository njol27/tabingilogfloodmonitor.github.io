-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 01:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account1`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailverify`
--

CREATE TABLE `emailverify` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `handicap` varchar(5) NOT NULL,
  `contact` int(30) NOT NULL,
  `addkey` int(10) NOT NULL,
  `home_no` int(10) NOT NULL,
  `village` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hshID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaclist`
--

CREATE TABLE `evaclist` (
  `id` int(10) NOT NULL,
  `checkn` varchar(150) NOT NULL,
  `uncheckn` varchar(150) NOT NULL,
  `color` varchar(30) NOT NULL,
  `count` int(10) NOT NULL,
  `shelter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaclist`
--

INSERT INTO `evaclist` (`id`, `checkn`, `uncheckn`, `color`, `count`, `shelter`) VALUES
(1, '', '', 'red', 0, 'sh1');

-- --------------------------------------------------------

--
-- Table structure for table `evacuation`
--

CREATE TABLE `evacuation` (
  `id` int(10) NOT NULL,
  `family` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` text NOT NULL,
  `role` text NOT NULL,
  `handicap` text NOT NULL,
  `contact` int(30) NOT NULL,
  `home_no` int(10) NOT NULL,
  `village` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `evac` varchar(100) NOT NULL,
  `arrive` varchar(30) NOT NULL,
  `eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evacuation`
--

INSERT INTO `evacuation` (`id`, `family`, `firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`, `email`, `evac`, `arrive`, `eid`) VALUES
(1, 'Lusung', 'Noel Jason', 'Lusung', 32, 'Male', 'Child', 'No', 0, 25, 'Intia Compound', 'M.Villarica', 'njlusung27@gmail.com', 'TabingIlog', '', '5144fb39838f432ff0c83fdf9d9a8d82'),
(2, '', 'sonia', 'lusung', 64, 'Female', 'Parent', 'No', 926549879, 25, 'Intia Compound', 'M.Villarica', '', 'TabingIlog', '', '5144fb39838f432ff0c83fdf9d9a8d82'),
(3, '', 'Ely', 'Lusung', 66, 'Male', 'Parent', 'No', 264669877, 25, 'Intia Compound', 'M.Villarica', '', 'TabingIlog', '', '5144fb39838f432ff0c83fdf9d9a8d82'),
(4, 'Lumbang', 'Troy', 'Lumbang', 21, 'Male', 'Child', 'No', 927654321, 0, '', '', 'troylumbang@gmail.com', 'TabingIlog', '', 'c417e1a9940565cf5b24f350434439f9'),
(5, '', 'Rey', 'Lumbang', 63, 'Male', 'Parent', 'No', 904549851, 0, '', '', '', 'TabingIlog', '', 'c417e1a9940565cf5b24f350434439f9'),
(6, '', 'Flor', 'Lumbang', 63, 'Female', 'Parent', 'No', 913565457, 0, '', '', '', 'TabingIlog', '', 'c417e1a9940565cf5b24f350434439f9'),
(7, 'orejudos', 'piolo', 'orejudos', 12, 'Male', 'GrandParent', 'Yes', 111111111, 0, '', '', 'jozeph_27@yahoo.com.ph', 'TabingIlog', '', '82448C0E12FCB6F1387BE7FB91B6E741'),
(8, '', 'harold', 'Ignacio', 23, 'Male', 'Child', 'No', 926364555, 0, '', '', '', 'TabingIlog', '', '82448C0E12FCB6F1387BE7FB91B6E741'),
(9, '', 'eseng', 'Ignacio', 26, 'Male', 'Child', 'No', 928542164, 0, '', '', '', 'TabingIlog', '', '82448C0E12FCB6F1387BE7FB91B6E741');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `fdback` varchar(100) NOT NULL,
  `star5` int(10) NOT NULL,
  `star4` int(10) NOT NULL,
  `star3` int(10) NOT NULL,
  `star2` int(10) NOT NULL,
  `star1` int(10) NOT NULL,
  `fbkey` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fdback`, `star5`, `star4`, `star3`, `star2`, `star1`, `fbkey`) VALUES
(14, 'good service and good people', 0, 4, 0, 0, 0, 3),
(15, 'need improvements', 0, 4, 0, 0, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `handicap` varchar(5) NOT NULL,
  `contact` int(30) NOT NULL,
  `home_no` int(10) NOT NULL,
  `village` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `evacID` int(10) NOT NULL,
  `hshID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`, `email`, `password`, `usertype`, `evacID`, `hshID`) VALUES
(1, 'Barangay', '', 0, '', '', '', 261234567, 0, '', '', 'brgyhall@tilog.com', 'kagawad123', 'admin', 1, '0'),
(2, 'Chairman', '', 0, '', '', '', 0, 0, '', '', 'brgy@tilog.com', 'admin123', 'chairman', 1, '0'),
(3, 'enteng', 'kabisote', 54, 'Male', 'Child', 'no', 123456789, 0, '', '', 's@g.com', 'hoy', 'user', 1, '0'),
(4, 'piolo', 'orejudos', 12, 'Male', 'GrandParent', 'Yes', 111111111, 0, '', '', 'jozeph_27@yahoo.com.ph', '0000', 'user', 0, '82448C0E12FCB6F1387BE7FB91B6E741'),
(5, 'Troy', 'Lumbang', 21, 'Male', 'Child', 'No', 927654321, 0, '', '', 'troylumbang@gmail.com', 'troy123lumbang', 'user', 0, 'c417e1a9940565cf5b24f350434439f9'),
(6, 'Raymond', 'Catorce', 23, 'Male', 'Child', 'No', 265514714, 0, '', '', 'moncatorce@gmail.com', 'emoncatorce123', 'user', 1, '5d3244bcd01164c1e8b04067eff42654'),
(12, 'Noel Jason', 'Lusung', 32, 'Male', 'Child', 'No', 0, 25, 'Intia Compound', 'M.Villarica', 'njlusung27@gmail.com', 'njol123', 'user', 0, '5144fb39838f432ff0c83fdf9d9a8d82');

-- --------------------------------------------------------

--
-- Table structure for table `memberlist`
--

CREATE TABLE `memberlist` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `ages` int(5) NOT NULL,
  `gnder` varchar(10) NOT NULL,
  `roles` varchar(20) NOT NULL,
  `handicp` varchar(5) NOT NULL,
  `cont` int(30) NOT NULL,
  `addid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberlist`
--

INSERT INTO `memberlist` (`id`, `fname`, `lname`, `ages`, `gnder`, `roles`, `handicp`, `cont`, `addid`) VALUES
(6, 'harold', 'Ignacio', 23, 'Male', 'Child', 'No', 926364555, '82448C0E12FCB6F1387BE7FB91B6E741'),
(7, 'eseng', 'Ignacio', 26, 'Male', 'Child', 'No', 928542164, '82448C0E12FCB6F1387BE7FB91B6E741'),
(8, 'sonia', 'lusung', 64, 'Female', 'Parent', 'No', 926549879, '5144fb39838f432ff0c83fdf9d9a8d82'),
(9, 'Ely', 'Lusung', 66, 'Male', 'Parent', 'No', 264669877, '5144fb39838f432ff0c83fdf9d9a8d82'),
(10, 'Rey', 'Lumbang', 63, 'Male', 'Parent', 'No', 904549851, 'c417e1a9940565cf5b24f350434439f9'),
(11, 'Flor', 'Lumbang', 63, 'Female', 'Parent', 'No', 913565457, 'c417e1a9940565cf5b24f350434439f9');

-- --------------------------------------------------------

--
-- Table structure for table `relief`
--

CREATE TABLE `relief` (
  `id` int(11) NOT NULL,
  `food` int(5) NOT NULL,
  `beverage` int(5) NOT NULL,
  `clothing` int(5) NOT NULL,
  `blanket` int(5) NOT NULL,
  `pillows` int(5) NOT NULL,
  `toilet` int(5) NOT NULL,
  `firstaid` int(5) NOT NULL,
  `medicine` varchar(30) NOT NULL,
  `medicineqty` int(5) NOT NULL,
  `vitamins` varchar(30) NOT NULL,
  `vitaminsqty` int(5) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `reliefkey` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailverify`
--
ALTER TABLE `emailverify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaclist`
--
ALTER TABLE `evaclist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuation`
--
ALTER TABLE `evacuation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberlist`
--
ALTER TABLE `memberlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relief`
--
ALTER TABLE `relief`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailverify`
--
ALTER TABLE `emailverify`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `evaclist`
--
ALTER TABLE `evaclist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `evacuation`
--
ALTER TABLE `evacuation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `memberlist`
--
ALTER TABLE `memberlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `relief`
--
ALTER TABLE `relief`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
