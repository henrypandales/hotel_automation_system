-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 04:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `token_no` int(10) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  PRIMARY KEY (`token_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`token_no`, `amount`) VALUES
(1, 14410),
(2, 5440);

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE IF NOT EXISTS `checking` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `roomtype` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `room` int(5) NOT NULL,
  `adults` int(5) NOT NULL,
  `child` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `checking`
--

INSERT INTO `checking` (`no`, `roomtype`, `date`, `room`, `adults`, `child`) VALUES
(1, 'singlenA/C', '2014-04-24', 1, 1, 0),
(2, 'singleA/C', '2014-05-25', 1, 1, 0),
(3, 'singleA/C', '2014-05-25', 1, 1, 0),
(5, 'Single non-A/C', '2014-02-01', 1, 1, 0),
(6, 'Single A/C', '2014-01-01', 1, 1, 0),
(7, 'Single non-A/C', '2014-01-01', 1, 1, 0),
(8, 'Single non-A/C', '2014-01-01', 1, 1, 0),
(9, 'Single A/C', '2014-04-05', 1, 1, 0),
(10, 'Single A/C', '2014-04-05', 1, 1, 0),
(11, 'Single A/C', '2014-03-29', 1, 1, 0),
(12, 'Single A/C', '2014-04-01', 1, 1, 0),
(13, 'Single A/C', '2014-05-01', 1, 1, 0),
(14, 'Single A/C', '2014-05-01', 1, 1, 0),
(15, 'Single A/C', '2014-05-01', 1, 1, 0),
(16, 'Single A/C', '2014-05-01', 1, 1, 0),
(17, 'Single A/C', '2014-05-01', 1, 1, 0),
(18, 'Single A/C', '2014-06-01', 1, 1, 0),
(19, 'Single A/C', '2014-04-05', 1, 1, 0),
(20, 'Single A/C', '2014-05-01', 1, 1, 0),
(21, 'Single A/C', '2014-05-01', 1, 1, 0),
(22, 'Single A/C', '2014-05-01', 1, 1, 0),
(23, 'Single A/C', '2014-05-01', 1, 1, 0),
(24, 'Single A/C', '2014-05-01', 1, 1, 0),
(25, 'Single A/C', '2014-05-01', 1, 1, 0),
(26, 'Single A/C', '2014-05-01', 1, 1, 0),
(27, 'Single A/C', '2014-05-01', 1, 1, 0),
(28, 'Single A/C', '2014-05-01', 1, 1, 0),
(29, 'Single A/C', '2014-05-01', 1, 1, 0),
(30, 'Single A/C', '2014-05-01', 1, 1, 0),
(31, 'Single A/C', '2014-05-01', 1, 1, 0),
(32, 'Single A/C', '2014-06-01', 1, 1, 0),
(33, 'doubleA/C', '2014-05-01', 1, 1, 0),
(34, 'singleA/C', '2014-05-01', 1, 1, 0),
(35, 'singleA/C', '2014-05-01', 1, 1, 0),
(36, 'singleA/C', '2014-05-01', 1, 1, 0),
(37, 'singleA/C', '2014-05-01', 1, 1, 0),
(38, 'singleA/C', '2014-05-05', 1, 1, 0),
(39, 'doubleA/C', '2014-06-01', 1, 1, 0),
(40, 'doublenA/C', '2014-05-01', 1, 1, 0),
(41, 'singleA/C', '2014-05-05', 1, 1, 0),
(42, 'singleA/C', '2014-05-05', 1, 1, 0),
(43, 'singleA/C', '2014-05-05', 1, 1, 0),
(44, 'doublenA/C', '2014-05-05', 1, 1, 0),
(45, 'doubleA/C', '2014-06-01', 1, 1, 0),
(46, 'singlenA/C', '2014-05-01', 1, 1, 0),
(47, 'doubleA/C', '2014-04-07', 1, 1, 0),
(48, 'doubleA/C', '2014-06-05', 2, 2, 2),
(49, 'singleA/C', '2014-05-01', 1, 1, 0),
(50, 'doubleA/C', '2014-05-01', 1, 1, 0),
(51, 'singleA/C', '2014-05-01', 3, 1, 0),
(52, 'singleA/C', '2014-06-01', 3, 1, 0),
(53, 'singleA/C', '2014-05-01', 1, 1, 0),
(54, 'singleA/C', '2014-05-01', 1, 1, 0),
(55, 'singleA/C', '2014-05-01', 1, 1, 0),
(56, 'singleA/C', '2014-07-01', 1, 1, 0),
(57, 'singleA/C', '2014-05-01', 1, 1, 0),
(58, 'singleA/C', '2014-05-01', 1, 1, 0),
(59, 'singleA/C', '2014-06-01', 1, 1, 0),
(60, 'singleA/C', '2014-05-01', 1, 1, 0),
(61, 'singleA/C', '2014-05-01', 2, 1, 0),
(62, 'singleA/C', '2014-05-01', 1, 1, 0),
(63, 'doubleA/C', '2014-06-11', 1, 2, 0),
(64, 'singleA/C', '2014-05-10', 1, 1, 0),
(65, 'singleA/C', '2014-05-08', 2, 3, 0),
(66, 'singlenA/C', '2014-05-08', 2, 3, 0),
(67, 'singleA/C', '2014-05-09', 1, 1, 0),
(68, 'singleA/C', '2014-05-03', 1, 1, 0),
(69, 'singlenA/C', '2014-05-06', 2, 2, 1),
(70, 'singleA/C', '2014-07-03', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE IF NOT EXISTS `login1` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`username`, `password`) VALUES
('sri', 'sri');

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE IF NOT EXISTS `login2` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`username`, `password`) VALUES
('masti', 'masti');

-- --------------------------------------------------------

--
-- Table structure for table `login3`
--

CREATE TABLE IF NOT EXISTS `login3` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login3`
--

INSERT INTO `login3` (`username`, `password`) VALUES
('omkar', 'omkar');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE IF NOT EXISTS `roomtype` (
  `roomno` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `uid` int(10) NOT NULL DEFAULT '0',
  `rent` int(11) NOT NULL,
  PRIMARY KEY (`roomno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`roomno`, `type`, `available`, `uid`, `rent`) VALUES
(501, 'singleA/C', 1, 0, 2100),
(502, 'singleA/C', 1, 0, 2100),
(503, 'singleA/C', 1, 0, 2100),
(504, 'singleA/C', 1, 0, 2100),
(505, 'singleA/C', 1, 0, 2100),
(506, 'singleA/C', 0, 20, 2100),
(507, 'singleA/C', 1, 0, 2100),
(508, 'singleA/C', 0, 31, 2100),
(509, 'singleA/C', 1, 0, 2100),
(510, 'singleA/C', 0, 0, 2100),
(511, 'singleA/C', 1, 0, 2100),
(512, 'singleA/C', 1, 0, 2100),
(513, 'singleA/C', 1, 0, 2100),
(514, 'singleA/C', 1, 0, 2100),
(515, 'singleA/C', 1, 0, 2100),
(516, 'singleA/C', 1, 0, 2100),
(517, 'singleA/C', 1, 0, 2100),
(518, 'singleA/C', 1, 0, 2100),
(519, 'singleA/C', 1, 0, 2100),
(520, 'singleA/C', 1, 0, 2100),
(521, 'singleA/C', 1, 0, 2100),
(522, 'singleA/C', 1, 0, 2100),
(523, 'singleA/C', 0, 0, 2100),
(524, 'singleA/C', 1, 0, 2100),
(525, 'singleA/C', 1, 0, 2100),
(526, 'singlenA/C', 1, 0, 1500),
(527, 'singlenA/C', 1, 0, 1500),
(528, 'singlenA/C', 1, 0, 1500),
(529, 'singlenA/C', 1, 0, 1500),
(530, 'singlenA/C', 1, 0, 1500),
(531, 'singlenA/C', 1, 0, 1500),
(532, 'singlenA/C', 1, 0, 1500),
(533, 'singlenA/C', 1, 0, 1500),
(534, 'singlenA/C', 1, 0, 1500),
(535, 'singlenA/C', 1, 0, 1500),
(536, 'singlenA/C', 1, 0, 1500),
(537, 'singlenA/C', 1, 0, 1500),
(538, 'singlenA/C', 1, 0, 1500),
(539, 'singlenA/C', 1, 0, 1500),
(540, 'singlenA/C', 1, 0, 1500),
(541, 'singlenA/C', 1, 0, 1500),
(542, 'singlenA/C', 1, 0, 1500),
(543, 'singlenA/C', 1, 0, 1500),
(544, 'singlenA/C', 1, 0, 1500),
(545, 'singlenA/C', 1, 0, 1500),
(546, 'singlenA/C', 1, 0, 1500),
(547, 'singlenA/C', 1, 0, 1500),
(548, 'singlenA/C', 1, 0, 1500),
(549, 'singlenA/C', 1, 0, 1500),
(550, 'singlenA/C', 1, 0, 1500),
(551, 'doubleA/C', 1, 0, 3000),
(552, 'doubleA/C', 1, 0, 3000),
(553, 'doubleA/C', 1, 0, 3000),
(554, 'doubleA/C', 1, 0, 3000),
(555, 'doubleA/C', 1, 0, 3000),
(556, 'doubleA/C', 1, 0, 3000),
(557, 'doubleA/C', 1, 0, 3000),
(558, 'doubleA/C', 1, 0, 3000),
(559, 'doubleA/C', 1, 0, 3000),
(560, 'doubleA/C', 1, 0, 3000),
(561, 'doubleA/C', 0, 0, 3000),
(562, 'doubleA/C', 1, 0, 3000),
(563, 'doubleA/C', 1, 0, 3000),
(564, 'doubleA/C', 1, 0, 3000),
(565, 'doubleA/C', 1, 0, 3000),
(566, 'doubleA/C', 1, 0, 3000),
(567, 'doubleA/C', 1, 0, 3000),
(568, 'doubleA/C', 1, 0, 3000),
(569, 'doubleA/C', 1, 0, 3000),
(570, 'doubleA/C', 0, 0, 3000),
(571, 'doubleA/C', 1, 0, 3000),
(572, 'doubleA/C', 1, 0, 3000),
(573, 'doubleA/C', 0, 0, 3000),
(574, 'doubleA/C', 1, 0, 3000),
(575, 'doubleA/C', 1, 0, 3000),
(576, 'doublenA/C', 1, 0, 2500),
(577, 'doublenA/C', 1, 0, 2500),
(578, 'doublenA/C', 1, 0, 2500),
(579, 'doublenA/C', 1, 0, 2500),
(580, 'doublenA/C', 1, 0, 2500),
(581, 'doublenA/C', 1, 0, 2500),
(582, 'doublenA/C', 1, 0, 2500),
(583, 'doublenA/C', 1, 0, 2500),
(584, 'doublenA/C', 1, 0, 2500),
(585, 'doublenA/C', 1, 0, 2500),
(586, 'doublenA/C', 1, 0, 2500),
(587, 'doublenA/C', 1, 0, 2500),
(588, 'doublenA/C', 1, 0, 2500),
(589, 'doublenA/C', 1, 0, 2500),
(590, 'doublenA/C', 1, 0, 2500),
(591, 'doublenA/C', 1, 0, 2500),
(592, 'doublenA/C', 1, 0, 2500),
(593, 'doublenA/C', 1, 0, 2500),
(594, 'doublenA/C', 1, 0, 2500),
(595, 'doublenA/C', 1, 0, 2500),
(596, 'doublenA/C', 1, 0, 2500),
(597, 'doublenA/C', 1, 0, 2500),
(598, 'doublenA/C', 1, 0, 2500),
(599, 'doublenA/C', 1, 0, 2500),
(600, 'doublenA/C', 1, 0, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `token` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dno` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `indate` date NOT NULL,
  `outdate` date NOT NULL,
  `time` time NOT NULL,
  `advance` int(10) NOT NULL,
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
