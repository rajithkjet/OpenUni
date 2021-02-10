-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2021 at 07:36 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education1`
--

DROP TABLE IF EXISTS `education1`;
CREATE TABLE IF NOT EXISTS `education1` (
  `nic` varchar(13) NOT NULL,
  `title` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `grdate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education1`
--

INSERT INTO `education1` (`nic`, `title`, `class`, `uname`, `grdate`) VALUES
('943443580V', 'rgdghdh', 'dhdg', 'dfhdf', 'derherr');

-- --------------------------------------------------------

--
-- Table structure for table `education2`
--

DROP TABLE IF EXISTS `education2`;
CREATE TABLE IF NOT EXISTS `education2` (
  `nic` varchar(13) NOT NULL,
  `title` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `grdate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education2`
--

INSERT INTO `education2` (`nic`, `title`, `class`, `uname`, `grdate`) VALUES
('943443580V', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education3`
--

DROP TABLE IF EXISTS `education3`;
CREATE TABLE IF NOT EXISTS `education3` (
  `nic` varchar(13) NOT NULL,
  `title` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `grdate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education3`
--

INSERT INTO `education3` (`nic`, `title`, `class`, `uname`, `grdate`) VALUES
('943443580V', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `surname`, `fname`, `nic`, `mobile`, `email`) VALUES
(10, 'Karunarathne', 'Rajith', '943443580V', 712671566, 'rajithkarunarathne@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `work1`
--

DROP TABLE IF EXISTS `work1`;
CREATE TABLE IF NOT EXISTS `work1` (
  `nic` varchar(13) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `period` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work1`
--

INSERT INTO `work1` (`nic`, `cname`, `position`, `period`) VALUES
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work2`
--

DROP TABLE IF EXISTS `work2`;
CREATE TABLE IF NOT EXISTS `work2` (
  `nic` varchar(13) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `period` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work2`
--

INSERT INTO `work2` (`nic`, `cname`, `position`, `period`) VALUES
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
