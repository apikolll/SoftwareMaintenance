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
-- Table structure for table `roomreservation`
--

CREATE TABLE `roomreservation` (
  `RoomReservID` varchar(6) NOT NULL,
  `BorrowerName` varchar(100) NOT NULL,
  `RoomID` varchar(5) NOT NULL,
  `RoomName` varchar(20) NOT NULL,
  `RoomDetails` varchar(50) NOT NULL,
  `reservDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomreservation`
--

INSERT INTO `roomreservation` (`RoomReservID`, `BorrowerName`, `RoomID`, `RoomName`, `RoomDetails`, `reservDate`) VALUES
('1', 'Halimah binti Tajul', 'L11', 'Metting Room', 'Room for lecturer and student hava a meeting', '2021-04-03'),
('2', 'Siti Mariam binti Halim', 'L12', 'Media Room', 'Room that have all the audio visual media', '2021-04-03'),
('3', 'Jefri bin Manaf', 'L13', 'Computer Room', 'Room for computer class', '2021-04-11'),
('4', 'Muhamad Amirul bin Shukri', 'L11', 'Metting Room', 'Room for lecturer and student hava a meeting', '2021-04-25'),
('5', 'Tan Chen Long', 'L14', 'Research Room', 'Room for lecturer and student so the research', '2021-05-09'),
('6', 'Kumar A/L Madialagen', 'L13', 'Computer Room', 'Room for computer class', '2021-05-11'),
('7', 'Nurul Farahani binti Mustafa', 'L14', 'Research Room', 'Room for lecturer and student so the research', '2021-05-13'),
('8', 'Sakinah Amirah binti Halim', 'L12', 'Media Room', 'Room that have all the audio visual media', '2021-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roomreservation`
--
ALTER TABLE `roomreservation`
  ADD PRIMARY KEY (`RoomReservID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
