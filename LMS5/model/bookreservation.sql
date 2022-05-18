-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 12:48 AM
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
-- Table structure for table `bookreservation`
--

CREATE TABLE `bookreservation` (
  `BookReservID` int(11) NOT NULL,
  `BorrowerName` varchar(50) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `BookName` varchar(100) NOT NULL,
  `BorrowDate` date NOT NULL,
  `ReturnDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookreservation`
--

INSERT INTO `bookreservation` (`BookReservID`, `BorrowerName`, `ISBN`, `BookName`, `BorrowDate`, `ReturnDate`) VALUES
(1, 'Ahmad Syahmi bin Zakaria', '9780072321111', 'Digital Communications', '2021-02-01', '2021-04-08'),
(2, 'Ooi Gian Lee', '9780072471465', 'Product Design and Development', '2021-02-07', '2021-02-14'),
(3, 'Siti Mariam binti Halim', '9780072478525', 'Basic Econometrics', '2021-03-07', '2021-03-16'),
(4, 'Manushri A/P Suthakar', '9780072865981', 'Product Management', '2021-03-23', '2021-03-30'),
(5, 'Jefri bin Manaf', '9780072921939', 'Mechanical Engineering Design', '2021-04-01', '2021-04-10'),
(6, 'Hanana Sorfina binti Haizam', '9780070542358', 'Principles of Mathematical Analysis', '2021-04-01', '2021-04-07'),
(7, 'Muhamad Amirul bin Shukri', '9780070311367', 'Introduction to Manufacturing Processes', '2021-04-19', '2021-04-25'),
(8, 'Tan Chen Long', '9780030020780', 'Principles of Instrumental Analysis', '2021-04-30', '2021-05-24'),
(9, 'Fadhilah binti Murad', '9780026515627', 'Glencoe Health, A Guide to Wellness, Student Editi', '2021-05-01', '2021-05-07'),
(10, 'Safuan bin Rahim', '9780070109100', 'Fundamental Methods of Mathematical Economics', '2021-05-09', '2021-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookreservation`
--
ALTER TABLE `bookreservation`
  ADD PRIMARY KEY (`BookReservID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
