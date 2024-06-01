-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 05:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctorid` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `dgender` char(1) DEFAULT NULL,
  `cabinno` int(11) DEFAULT NULL,
  `dpassword` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctorid`, `dname`, `dept`, `dgender`, `cabinno`, `dpassword`, `status`) VALUES
(3, 'Durga prashad dash', 'medicine', 'M', 1, '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patientid` bigint(20) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `ppassword` varchar(255) NOT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `pcity` varchar(50) DEFAULT NULL,
  `pemail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patientid`, `pname`, `ppassword`, `paddress`, `page`, `gender`, `pcity`, `pemail`) VALUES
(3, 'saugat', '567', 'bbsr', 20, 'M', 'bbsr', 'saugatm3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `tid` int(11) NOT NULL,
  `patientid` int(11) DEFAULT NULL,
  `doctorid` int(11) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `attend` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`tid`, `patientid`, `doctorid`, `feedback`, `attend`) VALUES
(8, 3, 3, 'you are not good', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patientid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
