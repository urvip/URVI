-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql311.byetcluster.com
-- Generation Time: Oct 28, 2016 at 06:43 AM
-- Server version: 5.6.32-78.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b13_18981129_root299`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE IF NOT EXISTS `approval` (
  `orderID` int(8) NOT NULL AUTO_INCREMENT,
  `bookingID` int(8) NOT NULL,
  `permitID` varchar(10) NOT NULL,
  `amount` int(5) NOT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `permitID` (`permitID`),
  UNIQUE KEY `bookingID` (`bookingID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`orderID`, `bookingID`, `permitID`, `amount`) VALUES
(3, 4705012, 'T0SVC76FHX', 20),
(4, 9907537, 'LFTQAJ0QKS', 0),
(5, 3532266, '63PC3IGG2H', 0),
(6, 4791620, 'RRL81ECMY6', 0),
(7, 3732616, 'V4GZCGVD8E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `username` varchar(6) NOT NULL,
  `password` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`username`, `password`) VALUES
('admin', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `orderID` int(8) NOT NULL AUTO_INCREMENT,
  `bookingID` int(8) NOT NULL,
  `bookingType` varchar(7) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `vehicleRego` varchar(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `vehicleType` varchar(9) NOT NULL,
  `deliveryOption` varchar(7) NOT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `bookingID` (`bookingID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderID`, `bookingID`, `bookingType`, `firstname`, `lastname`, `vehicleRego`, `address`, `duration`, `startDate`, `endDate`, `email`, `vehicleType`, `deliveryOption`) VALUES
(45, 3732616, 'normal', 'Rick', 'asa', '132OPO', '22 Sttt St Brisbane 2000', 'monthly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'r@m.com', '2wheel', 'mail'),
(46, 4791620, 'premium', 'RR', 'RR', '1212', '1212', 'monthly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1112122@c', '2wheel', 'mail'),
(48, 7211522, 'premium', 'Ricky', 'apsdoap', '121ASD', '52 Stghj St BRISBANE 400', 'yearly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'R@m.com', '4wheel', 'walkin'),
(43, 9462616, 'normal', 'Ricky', 'Ssss', '12212', '121212', 'hour', '2012-12-01 00:00:00', '0000-00-00 00:00:00', '121212@m.com', '2wheel', 'mail'),
(42, 6735101, 'premium', 'Ricky', 'Sparks', '989RIU', '3535 Olden Rd BRISBANE 4000', 'yearly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'R@m.com', '2wheel', 'postal'),
(41, 8871114, 'premium', 'Ricky', 'Sparks', '989RIU', '3535 Olden Rd BRISBANE 4000', 'yearly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'R@m.com', '2wheel', 'postal'),
(29, 9907537, 'normal', 'Kennedy', 'Bush', 'HDT389', '9 Clavington Street, Yeronga', 'hour', '2016-10-30 13:00:00', '2016-10-30 17:00:00', 'kenbush@yahoo.com', '4wheel', 'mail'),
(37, 2552633, 'normal', 'adria', 'n', '323xd', 'sadrgfasdf', 'daily', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'asdfefa@ffdx', '2wheel', 'mail'),
(38, 3532266, 'normal', 'haha', 'haha', '123abc', '123abc', 'daily', '2015-12-31 12:59:00', '2016-12-31 23:59:00', 'haha.123@gmail.com', '4wheel', 'mail'),
(39, 9551088, 'normal', 'Ricky', 'Andrews', '984FII', '24 Old St BRISBANE 4000', 'weekly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'r@m.com', '4wheel', 'postal'),
(26, 6388612, 'normal', 'Josh', 'Pacific', 'YSN123', '20 Mark Street, Annerley', 'hour', '2016-10-15 18:00:00', '2016-10-15 20:00:00', 'josh.pacific@yahoo.com', '4wheel', 'mail');

-- --------------------------------------------------------

--
-- Table structure for table `citation`
--

CREATE TABLE IF NOT EXISTS `citation` (
  `orderID` int(8) NOT NULL AUTO_INCREMENT,
  `citationID` int(8) NOT NULL,
  `citationType` varchar(7) NOT NULL,
  `officerID` int(8) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `vehicleRego` varchar(6) DEFAULT NULL,
  `vehicleType` varchar(9) DEFAULT NULL,
  `amount` int(8) NOT NULL,
  `paid` varchar(3) NOT NULL,
  `incidentTime` datetime NOT NULL,
  `incidentPlace` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `proof` blob,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `citationID` (`citationID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `citation`
--

INSERT INTO `citation` (`orderID`, `citationID`, `citationType`, `officerID`, `firstname`, `lastname`, `vehicleRego`, `vehicleType`, `amount`, `paid`, `incidentTime`, `incidentPlace`, `email`, `description`, `proof`) VALUES
(91, 65048, 'smoking', 0, '123123', '1231231', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '2312312@g', '123123', NULL),
(90, 52924, 'other', 123456, 'John', 'Johnson', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'B', 'J@m.com', 'assault', NULL),
(89, 82818, 'parking', 1239102390, 'John', 'Johnson', '163IOP', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'C', 'J@m.com', 'parking in handicap', NULL),
(88, 36586, 'parking', 1212, '1212', '12121', '122122', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'A', '2121@v', '1212', NULL),
(86, 43525, 'smoking', 0, '123123', '1231231', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '2312312@g', '123123', NULL),
(87, 11594, 'smoking', 12731867, 'Rickkk', 'Rickk', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '2@m.a', 'smoking in class', NULL),
(85, 37548, 'other', 121212, '121222222222', '2222222', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'A', '2222@m', 'asdasdas', NULL),
(84, 50965, 'other', 122121212, 'Ricky', 'Psss', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'A', 'r@m.c', 'assault', NULL),
(83, 61984, 'parking', 1212, '121221', '121212', 'laksdl', '4wheel', 200, 'NO', '0000-00-00 00:00:00', 'B', 'alskdalsdk@m.c', '1212', NULL),
(82, 10731, 'parking', 1092301923, 'Adrian ', 'WW', '989CHC', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'B', 'r@m.com', 'parked in handicap', NULL),
(81, 84780, 'smoking', 0, '11111', '11111', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '111@mm.com', 'kjkadsjdk1', NULL),
(80, 11526, 'smoking', 999909, 'Adrian', 'Leak', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'B', 'l@m.com', 'Smoking in classroom', NULL),
(79, 91724, 'other', 121212, '121222222222', '2222222', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'A', '2222@m', 'asdasdas', NULL),
(78, 50833, 'other', 122121212, 'Ricky', 'Psss', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'A', 'r@m.c', 'assault', NULL),
(77, 75349, 'parking', 1212, '121221', '121212', 'laksdl', '4wheel', 200, 'NO', '0000-00-00 00:00:00', 'B', 'alskdalsdk@m.c', '1212', NULL),
(76, 47659, 'parking', 1092301923, 'Adrian ', 'WW', '989CHC', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'B', 'r@m.com', 'parked in handicap', NULL),
(75, 63080, 'smoking', 0, '11111', '11111', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '111@mm.com', 'kjkadsjdk1', NULL),
(74, 35091, 'smoking', 999909, 'Adrian', 'Leak', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'B', 'l@m.com', 'Smoking in classroom', NULL),
(73, 57794, 'smoking', 8888888, 'Coiasd', 'Coiasdj', NULL, NULL, 200, 'NO', '2016-10-27 11:11:00', 'E', 'asidouaso@m.com', 'why is email required', NULL),
(72, 19874, 'smoking', 111, 'ZZ', 'cc', NULL, NULL, 200, 'NO', '1111-11-11 11:11:00', 'I', 'whyisemailrequired@why.com', 'submit button broken @ proof ', NULL),
(71, 42591, 'smoking', 0, '', '', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', '', '', '', NULL),
(70, 39685, 'other', 9065954, 'Mary', 'Jane', NULL, NULL, 179, 'YES', '2016-10-14 11:14:00', 'S', 'maryjane@yahoo.com', 'urinated at inappropriate place', NULL),
(69, 64119, 'parking', 9065954, 'May', 'Weather', 'AUD999', '4wheel', 200, 'NO', '2016-10-14 10:02:00', 'F', 'mayweather@yahoo.com', 'vehicle is inappropriate', NULL),
(68, 41890, 'smoking', 9065954, 'Josh', 'Amway', NULL, NULL, 200, 'NO', '2016-10-13 13:32:00', 'D', 'jamway@yahoo.com', 'smoking and spitting', NULL),
(92, 50427, 'smoking', 12731867, 'Rickkk', 'Rickk', NULL, NULL, 200, 'NO', '0000-00-00 00:00:00', 'A', '2@m.a', 'smoking in class', NULL),
(93, 42848, 'parking', 1212, '1212', '12121', '122122', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'A', '2121@v', '1212', NULL),
(94, 60809, 'parking', 1239102390, 'John', 'Johnson', '163IOP', '2wheel', 200, 'NO', '0000-00-00 00:00:00', 'C', 'J@m.com', 'parking in handicap', NULL),
(95, 53859, 'other', 123456, 'John', 'Johnson', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'B', 'J@m.com', 'assault', NULL),
(96, 37942, 'other', 123456, 'John', 'Johnson', NULL, NULL, 179, 'NO', '0000-00-00 00:00:00', 'B', 'J@m.com', 'assault', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `orderID` int(8) NOT NULL AUTO_INCREMENT,
  `bookingID` int(8) NOT NULL,
  `permitID` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `vehicleRego` varchar(6) NOT NULL,
  `permitType` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `citationID` int(8) DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `permitID` (`permitID`),
  UNIQUE KEY `booking` (`bookingID`),
  UNIQUE KEY `citationID` (`citationID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `orderID` int(8) NOT NULL AUTO_INCREMENT,
  `officerID` int(16) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `officerID` (`officerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `OHS_auth`
--

CREATE TABLE IF NOT EXISTS `OHS_auth` (
  `code` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OHS_auth`
--

INSERT INTO `OHS_auth` (`code`) VALUES
(123456);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
