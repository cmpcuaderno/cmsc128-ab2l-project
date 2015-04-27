-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 08:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentadviserrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `student_number` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subject1` varchar(10) NOT NULL,
  `subject2` varchar(10) NOT NULL,
  `subject3` varchar(10) NOT NULL,
  `subject4` varchar(10) NOT NULL,
  `subject5` varchar(10) NOT NULL,
  `subject6` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`student_number`, `semester`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`) VALUES
('2012-0000', '1ay1213', 'MATH17', 'SOSC1', 'SOSC2', 'ENG1', 'ENG2', 'PE1'),
('2012-0000', '2ay1213', 'CMSC11', 'CMSC56', 'NASC1', 'NASC2', 'SPCM1', 'MATH26'),
('2012-0000', '1ay1314', 'MATH27', 'CMSC57', 'CMSC21', 'HUM2', 'SPCM1', 'HUM2'),
('2012-0000', '2ay1314', 'MATH28', 'CMSC123', 'CMSC130', 'CMSC131', 'PSY1', 'SOSC3'),
('2012-0001', '1ay1213', 'MATH17', 'HUM1', 'ENG1', 'PE1', 'SOC2', 'PSY1'),
('2012-0001', '2ay1213', 'MATH26', 'CMSC11', 'CMSC2', 'NASC3', 'PE2', 'HUM3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
