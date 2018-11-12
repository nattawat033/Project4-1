-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 10, 2018 at 04:07 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_profile`
--

DROP TABLE IF EXISTS `alumni_profile`;
CREATE TABLE IF NOT EXISTS `alumni_profile` (
  `AP_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_username` varchar(50) COLLATE utf8_bin NOT NULL,
  `AP_password` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `AP_nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_address` varchar(100) COLLATE utf8_bin NOT NULL,
  `AP_district` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_citty` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_addcode` int(5) NOT NULL,
  `AP_tell` varchar(10) COLLATE utf8_bin NOT NULL,
  `AP_lineID` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_facebook` varchar(50) COLLATE utf8_bin NOT NULL,
  `AP_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `job_ID` int(20) DEFAULT NULL,
  `std_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`AP_ID`),
  KEY `job_ID` (`job_ID`),
  KEY `std_ID` (`std_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `alumni_profile`
--

INSERT INTO `alumni_profile` (`AP_ID`, `AP_username`, `AP_password`, `AP_name`, `AP_nickname`, `AP_address`, `AP_district`, `AP_citty`, `AP_addcode`, `AP_tell`, `AP_lineID`, `AP_facebook`, `AP_email`, `job_ID`, `std_ID`) VALUES
(1, 'nattawat033', '5830213033', 'Nattawat Janurai', 'ten', '1465445545', 'ranot', 'songkhla', 90140, '888351327', 'ten', 'ten', 's5830213033@phuket.psu.ac.th', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Dept_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Dept_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Dept_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `edu_bg`
--

DROP TABLE IF EXISTS `edu_bg`;
CREATE TABLE IF NOT EXISTS `edu_bg` (
  `Edu_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `Edu_stID` int(20) NOT NULL,
  `Edu_gen` int(20) NOT NULL,
  `Edu_major` varchar(20) COLLATE utf8_bin NOT NULL,
  `Edu_fac` varchar(20) COLLATE utf8_bin NOT NULL,
  `Edu_univercitty` varchar(20) COLLATE utf8_bin NOT NULL,
  `Edu_county` varchar(20) COLLATE utf8_bin NOT NULL,
  `Etype_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`Edu_ID`,`AP_ID`),
  KEY `AP_ID` (`AP_ID`),
  KEY `Etype_ID` (`Etype_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `edu_bg`
--

INSERT INTO `edu_bg` (`Edu_ID`, `AP_ID`, `Edu_stID`, `Edu_gen`, `Edu_major`, `Edu_fac`, `Edu_univercitty`, `Edu_county`, `Etype_ID`) VALUES
(1, 1, 2222, 12, 'SE', 'COC', 'PSU', 'Thai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_type`
--

DROP TABLE IF EXISTS `edu_type`;
CREATE TABLE IF NOT EXISTS `edu_type` (
  `Etype_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Etpye_name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Etype_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `edu_type`
--

INSERT INTO `edu_type` (`Etype_ID`, `Etpye_name`) VALUES
(1, 'Doctor'),
(2, 'Master'),
(3, 'Bachelor');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `Fact_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Fact_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Fact_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `job_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `job_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `job_position` varchar(50) COLLATE utf8_bin NOT NULL,
  `job_address` varchar(100) COLLATE utf8_bin NOT NULL,
  `job_district` varchar(20) COLLATE utf8_bin NOT NULL,
  `job_citty` varchar(20) COLLATE utf8_bin NOT NULL,
  `job_addcode` int(5) NOT NULL,
  `job_tell` int(10) NOT NULL,
  `job_fax` int(10) NOT NULL,
  PRIMARY KEY (`job_ID`,`AP_ID`),
  KEY `AP_ID` (`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_ID`, `AP_ID`, `job_name`, `job_position`, `job_address`, `job_district`, `job_citty`, `job_addcode`, `job_tell`, `job_fax`) VALUES
(1, 1, 'Home1', 'QA', '151515', 'ranot', 'songkhla', 90140, 1111222, 22221111);

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

DROP TABLE IF EXISTS `major`;
CREATE TABLE IF NOT EXISTS `major` (
  `major_ID` int(20) NOT NULL AUTO_INCREMENT,
  `major_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`major_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

DROP TABLE IF EXISTS `professional`;
CREATE TABLE IF NOT EXISTS `professional` (
  `Prof_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `Prof_quality` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_personal` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_plan` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_language` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_computer` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_experience` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_creation` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prof_other` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Prof_ID`,`AP_ID`),
  KEY `AP_ID` (`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`Prof_ID`, `AP_ID`, `Prof_quality`, `Prof_personal`, `Prof_plan`, `Prof_language`, `Prof_computer`, `Prof_experience`, `Prof_creation`, `Prof_other`) VALUES
(1, 1, 'QQQ', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF', 'GGG', 'HHH');

-- --------------------------------------------------------

--
-- Table structure for table `psu_passport`
--

DROP TABLE IF EXISTS `psu_passport`;
CREATE TABLE IF NOT EXISTS `psu_passport` (
  `Passport_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Passport_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `card_ID` varchar(13) COLLATE utf8_bin NOT NULL,
  `std_fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `std_lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `major_ID` int(20) DEFAULT NULL,
  `Dept_ID` int(20) DEFAULT NULL,
  `Fact_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`std_ID`),
  KEY `major_ID` (`major_ID`),
  KEY `Dept_ID` (`Dept_ID`),
  KEY `Fact_ID` (`Fact_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Passport_ID` int(20) NOT NULL,
  `UType_ID` int(20) NOT NULL,
  `Staff_ID` int(20) NOT NULL,
  PRIMARY KEY (`Passport_ID`),
  KEY `Staff_ID` (`Staff_ID`),
  KEY `UType_ID` (`UType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `UType_ID` int(20) NOT NULL AUTO_INCREMENT,
  `UType_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`UType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
