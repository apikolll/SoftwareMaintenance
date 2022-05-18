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
-- Table structure for table `finerecord`
--

CREATE TABLE `finerecord` (
  `id` int(10) NOT NULL,
  `borrower_name` varchar(255) NOT NULL,
  `book_title` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) NOT NULL,
  `borrowed_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finerecord`
--

INSERT INTO `finerecord` (`id`, `borrower_name`, `book_title`, `isbn`, `borrowed_date`, `return_date`) VALUES
(13320, 'Nur Ilayni', 'How to Code', '9780334621550', '2021-04-10', '2021-04-24'),
(19063, 'Kalaivani', 'How To Be Successful', '9780333146527', '2021-05-08', '2021-05-12'),
(19079, 'Nur Hasya', 'Programming Technique', '9780026515627', '2021-04-06', '2021-04-20'),
(20113, 'Nurul Fatimah', 'Discrete Mathematics', '9708131857575', '2021-04-23', '2021-04-30'),
(30112, 'Amanda A/P Jaya', 'Engineering Process', '9780664819935', '2020-12-15', '2020-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finerecord`
--
ALTER TABLE `finerecord`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finerecord`
--
ALTER TABLE `finerecord`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
