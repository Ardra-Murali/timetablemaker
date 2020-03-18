-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2019 at 10:10 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetablemaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

DROP TABLE IF EXISTS `admindata`;
CREATE TABLE IF NOT EXISTS `admindata` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`adminid`, `name`, `password`, `gender`, `email`, `phone`) VALUES
(2, 'ardra', 'ardra', 'f', 'aardra@mail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(250) NOT NULL,
  PRIMARY KEY (`deptid`),
  UNIQUE KEY `deptname` (`deptname`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptname`) VALUES
(1, 'cse-a'),
(2, 'cse-b'),
(3, 'eee'),
(4, 'ece'),
(5, 'aei'),
(6, 'me'),
(7, 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

DROP TABLE IF EXISTS `studentdata`;
CREATE TABLE IF NOT EXISTS `studentdata` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `sem` int(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(250) NOT NULL,
  `sem` int(250) NOT NULL,
  `deptname` varchar(250) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sname` (`sname`,`sem`,`deptname`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `sname`, `sem`, `deptname`) VALUES
(1, 'a', 1, 'cse-a'),
(2, 'b', 1, 'cse-a'),
(3, 'c', 1, 'cse-a'),
(4, 'd', 1, 'cse-a'),
(5, 'e', 1, 'cse-a'),
(6, 'f', 1, 'cse-a'),
(7, 'aa', 2, 'cse-a'),
(8, 'bb', 2, 'cse-a'),
(9, 'cc', 2, 'cse-a'),
(10, 'dd', 2, 'cse-a'),
(11, 'ee', 2, 'cse-a'),
(12, 'ff', 2, 'cse-a'),
(13, 'ab', 1, 'eee'),
(14, 'ac', 1, 'cse-a'),
(15, 'af', 1, 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(250) NOT NULL,
  `sem` int(11) NOT NULL,
  `h1` varchar(250) NOT NULL,
  `h2` varchar(250) NOT NULL,
  `h3` varchar(250) NOT NULL,
  `h4` varchar(250) NOT NULL,
  `h5` varchar(250) NOT NULL,
  `h6` varchar(250) NOT NULL,
  `h7` varchar(250) NOT NULL,
  `h8` varchar(250) NOT NULL,
  `h9` varchar(250) NOT NULL,
  `h10` varchar(250) NOT NULL,
  `h11` varchar(250) NOT NULL,
  `h12` varchar(250) NOT NULL,
  `h13` varchar(250) NOT NULL,
  `h14` varchar(250) NOT NULL,
  `h15` varchar(250) NOT NULL,
  `h16` varchar(250) NOT NULL,
  `h17` varchar(250) NOT NULL,
  `h18` varchar(250) NOT NULL,
  `h19` varchar(250) NOT NULL,
  `h20` varchar(250) NOT NULL,
  `h21` varchar(250) NOT NULL,
  `h22` varchar(250) NOT NULL,
  `h23` varchar(250) NOT NULL,
  `h24` varchar(250) NOT NULL,
  `h25` varchar(250) NOT NULL,
  `h26` varchar(250) NOT NULL,
  `h27` varchar(250) NOT NULL,
  `h28` varchar(250) NOT NULL,
  `h29` varchar(250) NOT NULL,
  `h30` varchar(250) NOT NULL,
  `h1t` varchar(250) NOT NULL,
  `h2t` varchar(250) NOT NULL,
  `h3t` varchar(250) NOT NULL,
  `h4t` varchar(250) NOT NULL,
  `h5t` varchar(250) NOT NULL,
  `h6t` varchar(250) NOT NULL,
  `h7t` varchar(250) NOT NULL,
  `h8t` varchar(250) NOT NULL,
  `h9t` varchar(250) NOT NULL,
  `h10t` varchar(250) NOT NULL,
  `h11t` varchar(250) NOT NULL,
  `h12t` varchar(250) NOT NULL,
  `h13t` varchar(250) NOT NULL,
  `h14t` varchar(250) NOT NULL,
  `h15t` varchar(250) NOT NULL,
  `h16t` varchar(250) NOT NULL,
  `h17t` varchar(250) NOT NULL,
  `h18t` varchar(250) NOT NULL,
  `h19t` varchar(250) NOT NULL,
  `h20t` varchar(250) NOT NULL,
  `h21t` varchar(250) NOT NULL,
  `h22t` varchar(250) NOT NULL,
  `h23t` varchar(250) NOT NULL,
  `h24t` varchar(250) NOT NULL,
  `h25t` varchar(250) NOT NULL,
  `h26t` varchar(250) NOT NULL,
  `h27t` varchar(250) NOT NULL,
  `h28t` varchar(250) NOT NULL,
  `h29t` varchar(250) NOT NULL,
  `h30t` varchar(250) NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `deptname` (`deptname`,`sem`),
  UNIQUE KEY `h1t` (`h1t`),
  UNIQUE KEY `h2t` (`h2t`),
  UNIQUE KEY `h3t` (`h3t`),
  UNIQUE KEY `h4t` (`h4t`),
  UNIQUE KEY `h4t_2` (`h4t`),
  UNIQUE KEY `h4t_3` (`h4t`),
  UNIQUE KEY `h4t_4` (`h4t`),
  UNIQUE KEY `h4t_5` (`h4t`),
  UNIQUE KEY `h5t` (`h5t`),
  UNIQUE KEY `h6t` (`h6t`),
  UNIQUE KEY `h7t` (`h7t`),
  UNIQUE KEY `h8t` (`h8t`),
  UNIQUE KEY `h9t` (`h9t`),
  UNIQUE KEY `h10t` (`h10t`),
  UNIQUE KEY `h11t` (`h11t`),
  UNIQUE KEY `h12t` (`h12t`),
  UNIQUE KEY `h13t` (`h13t`),
  UNIQUE KEY `h14t` (`h14t`),
  UNIQUE KEY `h15t` (`h15t`),
  UNIQUE KEY `h16t` (`h16t`),
  UNIQUE KEY `h17t` (`h17t`),
  UNIQUE KEY `h18t` (`h18t`),
  UNIQUE KEY `h19t` (`h19t`),
  UNIQUE KEY `h20t` (`h20t`),
  UNIQUE KEY `h21t` (`h21t`),
  UNIQUE KEY `h22t` (`h22t`),
  UNIQUE KEY `h23t` (`h23t`),
  UNIQUE KEY `h24t` (`h24t`),
  UNIQUE KEY `h25t` (`h25t`),
  UNIQUE KEY `h26t` (`h26t`),
  UNIQUE KEY `h28t` (`h28t`),
  UNIQUE KEY `h29t` (`h29t`),
  UNIQUE KEY `h30t` (`h30t`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
