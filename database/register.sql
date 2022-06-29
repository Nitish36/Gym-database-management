-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 02:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `GymId` int(11) NOT NULL,
  `FullName` varchar(25) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `DateOfJoining` date DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `PhoneNumber` varchar(25) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`GymId`, `FullName`, `Age`, `DateOfJoining`, `Email`, `PhoneNumber`, `Gender`) VALUES
(1, 'Nitheesh Shetty', 21, '2001-01-02', 'shetty@gmail.com', '9809453456', 'm'),
(2, 'Nitish K', 21, '2000-11-11', 'nitish@gmail.com', '9809424510', 'm'),
(3, 'Rakshith BK', 21, '2001-03-13', 'rakshith@gmail.com', '9809423942', 'm'),
(4, 'Rajatha Bangera', 21, '2001-03-13', 'rajath@gmail.com', '9809423922', 'm'),
(5, 'shubham', 21, '2001-06-13', 'abc@gmail.com', '1234567890', 'm'),
(6, 'Shashank', 23, '2003-02-18', 'shashank@gmail.com', '9876540345', 'm'),
(7, 'Gagan', 24, '2001-01-18', 'gagan@gmail.com', '7689045672', 'm'),
(8, 'Akash', 24, '2004-02-18', 'Akash@gmail.com', '4589349056', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`GymId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
