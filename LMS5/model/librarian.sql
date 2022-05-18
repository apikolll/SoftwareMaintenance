-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 12:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--
USE lms_db;
-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarianID` varchar(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `phoneNum` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarianID`, `name`, `username`, `password`, `Email`, `phoneNum`) VALUES
('01', 'NUR HASYA BINTI MOHD NORDIN', 'nurhasya', 'hasya123', 'nurhasyamohdnordin@gmail.com', '01114909117'),
('02', 'KALAIVANI A/P RAMANI', 'kalaivani_', 'kalai000', 'kalaivani@gmail.com', '011616016450'),
('03', 'NURAQILA BINTI ROHANAN', 'aqila_', 'aqila123', 'nuraqila@gmail.com', '0137709817'),
('04', 'NUR BALQIS BINTI OMAR', 'balqis_omar', 'bal000', 'balqis@gmail.com', '0184012533'),
('05', 'LEE LYE ENG', 'lye_eng', 'lyeEng123', 'lyeEng@gmail.com', '0179512645'),
('06', 'NURUL FATIMAH IZZATI BINTI ZURAIMI', 'fatimah_izzati', 'fatimahizzati000', 'nurulfatimahizzati@gmail.com', '0126543653');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarianID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
