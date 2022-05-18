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
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `Borrower_ID` varchar(10) NOT NULL,
  `Borrower_name` varchar(100) DEFAULT NULL,
  `Borrower_type` varchar(20) DEFAULT NULL,
  `Borrower_IC_num` varchar(20) DEFAULT NULL,
  `Borrower_Phone_num` varchar(20) DEFAULT NULL,
  `Borrower_email` varchar(30) DEFAULT NULL,
  `Borrower_Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`Borrower_ID`, `Borrower_name`, `Borrower_type`, `Borrower_IC_num`, `Borrower_Phone_num`, `Borrower_email`, `Borrower_Address`) VALUES
('AA17054', 'Hanana Sorfina binti Haizam', 'Non Member', '011213086352', '0124857639', 'hananasorfina@gmail.com', 'Hulu Bernam, Selangor, Malaysia.'),
('AA19034', 'Ahmad Syahmi bin Zakaria', 'Non Member', '970422070311', '0173461752', 'SyahmiZakaria@gmail.com', 'Telok Intan, Perak, Malaysia.'),
('BA19157', 'Safuan bin Rahim', 'Non Member', '981123086427', '0173265982', 'safuanrahim@gmail.com', 'Petaling Jaya, Selangor, Malaysia.'),
('BC17012', 'Sakinah Amirah binti Halim', 'Member', '950127063254', '0193264173', 'sakinahhalim@gmail.com', 'Kota Tinggi, Johor, Malaysia.'),
('CA17013', 'Halimah binti Tajul', 'Member', '980617020314', '0143678649', 'halimahTajul@gmail.com', 'Batu Pahat, Johor, Malaysia.'),
('CB18056', 'Nurul Farahani binti Mustafa', 'Member', '971213049674', '0187943169', 'farahanimustafa@gmail.com', 'Rembau, Negeri sembilan, Malaysia.'),
('CD16087', 'Siti Mariam binti Halim', 'Member', '990117082546', '0163421987', 'MariamHalim@gmail.com', 'Ayer Keroh, Melaka, Malaysia.'),
('EA17032', 'Tan Chen Long', 'Member', '960112073691', '0196473215', 'chenlong@gmail.com', 'Mentakab, Pahang, Malaysia.'),
('EE18021', 'Fadhilah binti Murad', 'Non Member', '990516027412', '0187632595', 'fadhilahmurad@gmail.com', 'Jitra, kedah, Malaysia.'),
('MA20134', 'Jefri bin Manaf', 'Member', '010603026471', '0184216794', 'Jefrimanaf@gmail.com', 'Kota Bharu, Kelantan, Malaysia.'),
('TA20563', 'Kumar A/L Madialagen', 'Member', '000719073625', '0123698524', 'kumarmadialagen@gmail.com', 'Besut, Terengganu, Malaysia.'),
('TC18463', 'Ooi Gian Lee', 'Non Member', '920312087219', '0193476247', 'GuanLee@gmail.com', 'Bukit Mertajam, Pulau Pinang, Malaysia.'),
('TC19064', 'Muhamad Amirul bin Shukri', 'Member', '980415081479', '0142375691', 'amirulshukri@gmail.com', 'Kota Kinabalu, Sabah, Malaysia.'),
('TK17094', 'Manushri A/P Suthakar', 'Non Member', '000476079258', '0172469513', 'manushri15@gmail.com', 'Kepala Batas, Pulau Pinang, Malaysia.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`Borrower_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
