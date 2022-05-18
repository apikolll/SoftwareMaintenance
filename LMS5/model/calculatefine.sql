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
-- Table structure for table `calculatefine`
--

CREATE TABLE `calculatefine` (
  `id` int(10) NOT NULL,
  `borrower_name` varchar(255) NOT NULL,
  `days` text NOT NULL,
  `fine` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculatefine`
--

INSERT INTO `calculatefine` (`id`, `borrower_name`, `days`, `fine`, `total`) VALUES
(13320, 'Emily A/P Kumar', '5', '0.20', '1'),
(13333, 'Ahmad Ali', '26', '0.20', '5.20'),
(14450, 'Kang Long Pong', '4', '0.20', '0.80'),
(19079, 'Siti Aishah', '10', '0.20', '2'),
(22104, 'Oon Ken Sim', '13', '0.20', '2.60'),
(22105, 'Nur Natasha Binti Samad', '36', '0.20', '7.20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculatefine`
--
ALTER TABLE `calculatefine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculatefine`
--
ALTER TABLE `calculatefine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
