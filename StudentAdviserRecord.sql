-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2015 at 03:53 PM
-- Server version: 10.0.17-MariaDB-log
-- PHP Version: 5.6.8

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
-- Table structure for table `admin_logs`
--

CREATE TABLE IF NOT EXISTS `admin_logs` (
  `log_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`log_id`, `username`, `date_time`, `action`) VALUES
(1, 'admin', '2015-04-21 11:44:59', 'Added adviser1.'),
(2, 'admin', '2015-04-21 11:44:59', 'Added adviser2.'),
(3, 'admin', '2015-04-21 17:59:35', 'admin added '),
(4, 'admin', '2015-04-21 18:01:43', 'admin added a a a'),
(5, 'admin', '2015-04-21 18:04:46', 'admin added b b b'),
(6, 'admin', '2015-04-21 18:20:13', 'admin added a a a'),
(7, 'admin', '2015-04-21 18:23:42', 'admin added a a a');

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE IF NOT EXISTS `adviser` (
  `employee_number` varchar(9) NOT NULL,
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
('123400001', 'adviser1', '128157823bc2e1ee1375e7d73f5e02ade81653a7', 'Rowan', 'Debra', 'Su', 'Applied Computer Science: Computer Graphics and Visualization', 'Associate Professor'),
('123400002', 'adviser2', '986da182d2d746bd51c7e4c58993a2a3b35ab9b6', 'Wulf', 'Joshua', 'Pi', 'Theoretical Computer Science: Information and Coding Theory', 'Professor'),
('123400003', 'adviser3', '4423d5895ac6079b269b748495c1fca72bdd6eef', 'Smith', 'Particia', 'Jan', 'Theoretical Computer Science: Algorithms and Data Structures', 'Instructor'),
('123400004', 'adviser4', '9b7e61cb295e923a4cd6533b9aefc7626a4aebec', 'Sweet', 'Joshua', 'Jill', 'Theoretical Computer Science: Concurrent, Parallel and Distributed Computing', 'Professor'),
('123400005', 'adviser5', 'b12c7d8e30d5f1f2a383c0a1ab02961554602d48', 'Dale', 'Paula', 'Slea', 'Applied Computer Science: Artificial Intelligence', 'Assistant Professor');

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
('2012-0000', 'student1', '2439e0457579ab4fd962cbd80b9206aca794cc38', 'Maldonado', 'Tawnya', 'Ericson', 'Freshman', 'BSCS SPR123', '8602533171', 'TawnyaEMaldonado@dayrep.com ', '556 Hart Street\r\nEnfield, CT 06082 ', '556 Hart Street\r\nEnfield, CT 06082 ', 'a'),
('2012-0001', 'student2', 'c241e7b7811ffbe3faba5b193717a46f9643eab1', 'Fox', 'Guy', 'Sai', 'Senior', 'BSCS SPR123', '3235993066', 'GuySFox@dayrep.com ', '3418 Evergreen Lane\r\nLos Angeles, CA 90017 ', '3418 Evergreen Lane\r\nLos Angeles, CA 90017 ', 'b'),
('2012-0002', 'student3', '32be4bedbd3a8539503a9bbbe72f9d84956affa1', 'NIeves', 'Dorris', 'Por', 'Senior', 'BSCS SPR123', '9313442571', 'DorrisPNieves@armyspy.com', '4995 McDowell Street\r\nNashville, TN 37214 ', '4995 McDowell Street\r\nNashville, TN 37214 ', 'c'),
('2012-0003', 'student4', '83aa66b2d3293d4173de58b7f2f8d8099ff971f5', 'Allen', 'Mary', 'Dale', 'Junior', 'BSCS SPR123', '9788048269', 'MaryDAllen@rhyta.com', '3428 Christie Way\r\nLexington, MA 02173 ', '3428 Christie Way\r\nLexington, MA 02173 ', 'd'),
('2012-0004', 'student5', '949544732c8a0c8e4b4fc9742bfe7be2ecef943b', 'Martinez', 'Maureen', 'Ellan', 'Junior', 'BSCS SPR123', '6269693549', 'MaureenEMartinez@armyspy.com', '3012 Walkers Ridge Way\r\nAzusa, CA 91702 ', '3012 Walkers Ridge Way\r\nAzusa, CA 91702 ', 'e'),
('2012-0005', 'student6', 'a1a5d75fc6ad073a70af60eadfa20c18b8d41c7e', 'McClinton', 'Kathryn', 'James', 'Sophomore', 'BSCS SPR123', '4015747958', 'KathrynJMcClinton@armyspy.com', '4109 Winding Way\r\nProvidence, RI 02905 ', '4109 Winding Way\r\nProvidence, RI 02905 ', 'f'),
('2012-0006', 'student7', 'b39f910e2c8eaf4a0c8a0cd17642196908a5ae74', 'Buckley', 'Joseph', 'Lee', 'Sophomore', 'BSCS SPR123', '2075644915', 'JosephLBuckley@jourrapide.com ', '3816 Bloomfield Way\r\nDover Foxcroft, ME 04426', '3816 Bloomfield Way\r\nDover Foxcroft, ME 04426', 'g'),
('2012-0007', 'student8', '248df15e39ab0e7227e01e3465e1c98a9748074c', 'Burgos', 'Jessica', 'Mael', 'Sophomore', 'BSCS SPR123', '3343965086', 'JessicaMBurgos@jourrapide.com', '4735 Fleming Street\r\nMontgomery, AL 36109 ', '4735 Fleming Street\r\nMontgomery, AL 36109 ', 'h'),
('2012-0008', 'student9', '119b5b6e7b3a0ad20406bbc3e4abe00df5889d1c', 'Sanchez', 'Cora', 'Liz', 'Freshman', 'BSCS SPR123', '9098939191', 'CoraLSanchez@teleworm.us ', '1800 Grant Street\r\nSherman, TX 75090 ', '1800 Grant Street\r\nSherman, TX 75090 ', 'i'),
('2012-0009', 'student10', 'c99696e37af88b247a291d03e701c95c6346c16a', 'Small', 'Earl', 'Neo', 'Junior', 'BSCS SPR123', '7168835356', 'EarlNSmall@dayrep.com ', '1827 Jarvis Street\r\nBuffalo, NY 14222 ', '1827 Jarvis Street\r\nBuffalo, NY 14222 ', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `student_adviser`
--

CREATE TABLE IF NOT EXISTS `student_adviser` (
  `student_number` varchar(10) NOT NULL,
  `employee_number` varchar(9) NOT NULL,
  `isGraduated` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_adviser`
--

INSERT INTO `student_adviser` (`student_number`, `employee_number`, `isGraduated`, `start_date`, `end_date`) VALUES
('2012-0000', '123400001', 0, NULL, NULL),
('2012-0001', '123400001', 0, NULL, NULL),
('2012-0002', '123400002', 0, NULL, NULL),
('2012-0003', '123400002', 0, NULL, NULL),
('2012-0004', '123400003', 0, NULL, NULL),
('2012-0005', '123400003', 0, NULL, NULL),
('2012-0006', '123400004', 0, NULL, NULL),
('2012-0007', '123400004', 0, NULL, NULL),
('2012-0008', '123400005', 0, NULL, NULL),
('2012-0009', '123400005', 0, NULL, NULL);

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
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`log_id`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
