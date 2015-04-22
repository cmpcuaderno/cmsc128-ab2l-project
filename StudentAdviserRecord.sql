-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 07:10 PM
-- Server version: 10.0.17-MariaDB-log
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `StudentAdviserRecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `employee_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `employee_number`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1234-1234567');

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE IF NOT EXISTS `adviser` (
  `employee_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`employee_number`, `username`, `password`, `last_name`, `first_name`, `middle_name`, `specialization`, `level`) VALUES
('1234', 'mervin', 'merin', 'merinvm', 'mervin', 'merinv', 'mervin', 'mervin'),
('1234-0000001', 'adviser1', 'adviser1', 'Rowan', 'Debra', 'Su', 'Applied Computer Science: Computer Graphics and Visualization', 'Associate Professor'),
('1234-0000002', 'adviser2', 'adviser2', 'Wulf', 'Joshua', 'Pi', 'Theoretical Computer Science: Information and Coding Theory', 'Professor'),
('1234-0000003', 'adviser3', 'adviser3', 'Smith', 'Particia', 'Jan', 'Theoretical Computer Science: Algorithms and Data Structures', 'Instructor'),
('1234-0000004', 'adviser4', 'adviser4', 'Sweet', 'Joshua', 'Jill', 'Theoretical Computer Science: Concurrent, Parallel and Distributed Computing', 'Professor'),
('1234-0000005', 'adviser5', 'adviser5', 'Dale', 'Paula', 'Slea', 'Applied Computer Science: Artificial Intelligence', 'Assistant Professor'),
('2012-12345', 'michael', 'michael', 'michael', 'michael', 'michael', 'michael', 'michael');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_code` varchar(10) NOT NULL,
  `units` float NOT NULL,
  `sem_offered` enum('1st','2nd','1st/2nd','1st/2nd/Summer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `units`, `sem_offered`) VALUES
('CMSC 67', 3, '1st/2nd'),
('CMSC 68', 3, '1st'),
('CMSC 70', 3, '2nd'),
('CMSC 71', 3, '1st'),
('CMSC 72', 3, '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_number` char(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `classification` varchar(15) NOT NULL,
  `curriculum` varchar(15) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `college_address` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `relative` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_number`, `username`, `password`, `last_name`, `first_name`, `middle_name`, `classification`, `curriculum`, `contact_number`, `email_address`, `college_address`, `home_address`, `relative`) VALUES
('2012-00000', 'student1', 'student1', 'Maldonado', 'Tawnya', 'Ericson', 'Graduate', 'BSCS SPR123', '8602533171', 'TawnyaEMaldonado@dayrep.com ', '556 Hart Street\r\nEnfield, CT 06082 ', '556 Hart Street\r\nEnfield, CT 06082 ', 'a'),
('2012-0001', 'student2', 'student2', 'Fox', 'Guy', 'Sai', 'Senior', 'BSCS SPR123', '3235993066', 'GuySFox@dayrep.com ', '3418 Evergreen Lane\r\nLos Angeles, CA 90017 ', '3418 Evergreen Lane\r\nLos Angeles, CA 90017 ', 'b'),
('2012-00002', 'student3', 'student3', 'NIeves', 'Dorris', 'Por', 'Senior', 'BSCS SPR123', '9313442571', 'DorrisPNieves@armyspy.com', '4995 McDowell Street\r\nNashville, TN 37214 ', '4995 McDowell Street\r\nNashville, TN 37214 ', 'c'),
('2012-00003', 'student4', 'student4', 'Allen', 'Mary', 'Dale', 'Junior', 'BSCS SPR123', '9788048269', 'MaryDAllen@rhyta.com', '3428 Christie Way\r\nLexington, MA 02173 ', '3428 Christie Way\r\nLexington, MA 02173 ', 'd'),
('2012-00004', 'student5', 'student5', 'Martinez', 'Maureen', 'Ellan', 'Junior', 'BSCS SPR123', '6269693549', 'MaureenEMartinez@armyspy.com', '3012 Walkers Ridge Way\r\nAzusa, CA 91702 ', '3012 Walkers Ridge Way\r\nAzusa, CA 91702 ', 'e'),
('2012-00005', 'student6', 'student6', 'McClinton', 'Kathryn', 'James', 'Sophomore', 'BSCS SPR123', '4015747958', 'KathrynJMcClinton@armyspy.com', '4109 Winding Way\r\nProvidence, RI 02905 ', '4109 Winding Way\r\nProvidence, RI 02905 ', 'f'),
('2012-0006', 'student7', 'student7', 'Buckley', 'Joseph', 'Lee', 'Sophomore', 'BSCS SPR123', '2075644915', 'JosephLBuckley@jourrapide.com ', '3816 Bloomfield Way\r\nDover Foxcroft, ME 04426', '3816 Bloomfield Way\r\nDover Foxcroft, ME 04426', 'g'),
('2012-00007', 'student8', 'student8', 'Burgos', 'Jessica', 'Mael', 'Sophomore', 'BSCS SPR123', '3343965086', 'JessicaMBurgos@jourrapide.com', '4735 Fleming Street\r\nMontgomery, AL 36109 ', '4735 Fleming Street\r\nMontgomery, AL 36109 ', 'h'),
('2012-00008', 'student9', 'student9', 'Sanchez', 'Cora', 'Liz', 'Freshman', 'BSCS SPR123', '9098939191', 'CoraLSanchez@teleworm.us ', '1800 Grant Street\r\nSherman, TX 75090 ', '1800 Grant Street\r\nSherman, TX 75090 ', 'i'),
('2012-00009', 'student10', 'student10', 'Small', 'Earl', 'Neo', 'Junior', 'BSCS SPR123', '7168835356', 'EarlNSmall@dayrep.com ', '1827 Jarvis Street\r\nBuffalo, NY 14222 ', '1827 Jarvis Street\r\nBuffalo, NY 14222 ', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `student_adviser`
--

CREATE TABLE IF NOT EXISTS `student_adviser` (
  `student_number` varchar(10) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `isGraduated` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_adviser`
--

INSERT INTO `student_adviser` (`student_number`, `employee_number`, `isGraduated`, `start_date`, `end_date`) VALUES
('2012-0000', '1234-0000001', 1, NULL, NULL),
('2012-0001', '1234-0000002', 0, NULL, NULL),
('2012-0002', '1234-0000001', 0, NULL, NULL),
('2012-0003', '1234-0000002', 0, NULL, NULL),
('2012-0004', '1234-0000003', 0, NULL, NULL),
('2012-0005', '1234-0000003', 0, NULL, NULL),
('2012-0006', '1234-0000004', 0, NULL, NULL),
('2012-0007', '1234-0000004', 0, NULL, NULL),
('2012-0008', '1234-0000005', 0, NULL, NULL),
('2012-0009', '1234-0000005', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `student_number` char(10) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `year_taken` int(4) NOT NULL,
  `term_taken` enum('1st','2nd','Summer') NOT NULL,
  `final_grade` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`employee_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`employee_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_number`),
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
