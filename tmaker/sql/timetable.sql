-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2019 at 09:01 AM
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
