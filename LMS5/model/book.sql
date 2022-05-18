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
CREATE DATABASE lms_db;

USE lms_db;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(13) NOT NULL,
  `Book_title` varchar(100) DEFAULT NULL,
  `Book_author` varchar(100) DEFAULT NULL,
  `Book_desc` varchar(100) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `totalPages` int(11) DEFAULT NULL,
  `Book_rating` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `Book_title`, `Book_author`, `Book_desc`, `publication_date`, `totalPages`, `Book_rating`) VALUES
('9708131857575', 'C++ How To Program', 'Harvey M. Deitel, Paul J. Deitel', 'Education', '2005-12-25', 749, '4'),
('9780026515627', 'Glencoe Health, A Guide to Wellness, Student Edition', 'McGraw-Hill Education', 'Education', '1998-01-23', 448, '5'),
('9780030020780', 'Principles of Instrumental Analysis', 'Timothy A. Nieman, F. James Holler, Douglas A.Skoo', 'Education', '1998-03-02', 882, '4'),
('9780070109100', 'Fundamental Methods of Mathematical Economics', 'Wainwright Professor, Kevin', 'Education', '2004-11-12', 309, '5'),
('9780070311367', 'Introduction to Manufacturing Processes', 'John Schey', 'Education', '1999-12-14', 358, '4'),
('9780070350489', 'An Introduction to Mechanics', 'Kleppner, Daniel, Kolenkow, Robert', 'Education', '1973-06-14', 402, '5'),
('9780070542358', 'Principles of Mathematical Analysis', 'Rudin, Walter', 'Education', '1976-03-30', 856, '5'),
('9780072321111', 'Digital Communications', 'Proakis, John', 'Education', '2000-02-15', 311, '4'),
('9780072471465', 'Product Design and Development', 'Ulrich, Karl, Eppinger, Steven', 'Education', '2003-03-05', 603, '5'),
('9780072478525', 'Basic Econometrics', 'Gujarati, Damodar', 'Education', '2002-12-11', 656, '5'),
('9780072865981', 'Product Management', 'Lehmann, Donald Winer, Russell', 'Education', '2004-11-05', 829, '4'),
('9780072921939', 'Mechanical Engineering Design', 'Shigley, Joseph; Mischke, Charles; Budynas, Richar', 'Education', '2003-07-27', 526, '4'),
('9780072922189', 'Understanding Business (7th Edition)', 'William G Nickels, James McHugh, Susan McHugh', 'Education', '2004-02-26', 566, '5'),
('9780072958867', 'Database Systems Concepts', 'Henry F. Korth, Abraham Silberschatz, S. Sudarshan', 'Education', '2005-01-02', 779, '5'),
('9780073107684', 'Thermodynamics: An Engineering Approach', 'Cengel, Yunus A, Boles, Michael A.', 'Education', '2006-05-02', 498, '5'),
('9780073108742', 'Applied Linear Statistical Models', 'Kutner, Michael, Nachtsheim, Christopher, Neter, J', 'Education', '2004-12-02', 112, '5'),
('9780073109411', 'Human Anatomy', 'Michael McKinley, Valerie O\'Loughlin', 'Education', '2005-03-03', 369, '4'),
('9780073126999', 'Project Management: The Managerial Process', 'Clifford F. Gray; Erik W. Larson', 'Education', '2005-03-09', 648, '4'),
('9780130088475', 'Management', 'Hitt, Michael A.', 'Education', '2004-06-06', 797, '4'),
('9780130313584', 'Modern Operating Systems (Goal)', 'Tanenbaum, Andrew S.', 'Education', '2001-12-12', 610, '4'),
('9780130340740', 'Computer Systems: A programmer\'s Perspective', 'Bryant, Randal E., O\'Hallaron, David R.', 'Education', '2002-01-02', 255, '4'),
('9780130460196', 'Network Security: Private Communication in a Publi', 'Speciner, Mike, Periman, Radia, Kaufman, Charlie', 'Education', '2002-09-09', 621, '4'),
('9780130471109', 'Object-Oriented Software Engineering: Using UML, P', 'Bernd Bruegge, Allen H. Dutoit', 'Education', '2003-04-05', 841, '5'),
('9780131176867', 'Discrete Mathematics', 'Richard Johnsonbaugh', 'Education', '2004-03-06', 245, '4'),
('9780131963160', 'Organic Chemistry', 'Paula Yurkanis Bruice', 'No description', '2006-02-15', 624, '4'),
('9780195142518', 'Microelectronic Circuits', 'Adel S. Sedra, Kenneth C. Smith', 'Education', '2003-05-26', 537, '5'),
('9780195158335', 'Linear Systems and Signals', 'Lathi, B. P.', 'Education', '2004-02-01', 752, '5'),
('9780205473052', 'Sociology: A Down-to-Earth Approach', 'James M. Henslin', 'Education', '2007-09-29', 614, '5'),
('9780205478095', 'Family Therapy: Concepts and Methods', 'Michael P Nichols, Richard C Schwartz', 'Education', '2005-08-01', 738, '5'),
('9780321322135', 'Data Structures and Problem Solving Using Java', 'Mark Allen Weiss', 'Education', '2005-03-05', 306, '4'),
('9780321330239', 'Absolute C++ (2nd Edition)', 'Walter Savitch', 'Education', '2005-02-02', 443, '5'),
('9780321330253', 'Concepts of Programming Languages (7th Edition)', 'Robert W. Sebesta', 'Education', '2005-03-03', 343, '4'),
('9780321409492', 'Java Software Solutions: Foundations of Program De', 'John Lewis, William Loftus', 'Education', '2006-11-25', 479, '5'),
('9780558606043', 'Computer Organization and Design', 'David A. Patterson, John L. Hennessy', 'Education', '2004-07-01', 494, '5'),
('9781418835934', 'Database Systems: Design, Implemetation and Manage', 'Peter Rob, Carlos Coronel', 'Education', '2006-04-11', 731, '5'),
('9781418836399', 'C++ Programming: From Problem Analysis to Program ', 'D. S. Malik', 'Education', '2006-03-25', 738, '5'),
('9781558608320', 'Computer Networks: A Systems Approach', 'Peterson, Larry L.', 'Education', '2003-12-11', 273, '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
