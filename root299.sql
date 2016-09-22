-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2016 at 11:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `root299`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `orderID` int(8) NOT NULL,
  `bookingID` int(8) NOT NULL,
  `permission` varchar(3) NOT NULL,
  `permitID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `orderID` int(8) NOT NULL,
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
  `deliveryOption` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderID`, `bookingID`, `bookingType`, `firstname`, `lastname`, `vehicleRego`, `address`, `duration`, `startDate`, `endDate`, `email`, `vehicleType`, `deliveryOption`) VALUES
(1, 1, 'normal', 'Hieu', 'Vuong', 'IFB299', '16 Clive St, Annerley', 'N/A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hieu_vuong75@yahoo.com', '4wheel', 'E-mail'),
(2, 2, 'normal', 'Urvi', 'Patel', 'MGB225', '16 Clive St, Waterford', 'N/A', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'urvi_patel@hotmail.com', '2wheel', 'Pick-up'),
(4, 3, 'normal', 'Exanple', 'User', 'ABC123', '1 Random st', 'Hourly', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Misc@email.address', '2wheel', 'Postal'),
(5, 6294764, 'normal', 'Some', 'Dude', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Dude', '2wheel', 'Deliver'),
(6, 4033304, 'normal', 'Some', 'Blike', '1234', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1@2.2', '4wheel', 'SMS');

-- --------------------------------------------------------

--
-- Table structure for table `citation`
--

CREATE TABLE `citation` (
  `orderID` int(8) NOT NULL,
  `citationID` int(8) NOT NULL,
  `citationType` varchar(7) NOT NULL,
  `officerID` int(8) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `vehicleRego` varchar(6) DEFAULT NULL,
  `vehicleType` varchar(9) NOT NULL,
  `amount` int(8) NOT NULL,
  `incidentTime` datetime NOT NULL,
  `incidentPlace` varchar(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `proof` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citation`
--

INSERT INTO `citation` (`orderID`, `citationID`, `citationType`, `officerID`, `firstname`, `lastname`, `vehicleRego`, `vehicleType`, `amount`, `incidentTime`, `incidentPlace`, `description`, `proof`) VALUES
(9, 60498, 'smoking', 9065955, 'Josh', 'Pacific', NULL, '', 250, '2016-09-22 08:35:00', 'A', 'smoking', NULL),
(10, 26679, 'smoking', 9065956, 'Hieu', 'Vuong', NULL, '', 250, '2016-09-22 10:03:00', 'B', 'keep smoking although being warned', NULL),
(14, 30012, 'smoking', 9065950, 'Hieu', 'Vuong', NULL, '', 250, '2016-09-22 12:12:00', 'Z', 'smoking', NULL),
(17, 82223, 'parking', 9039954, 'Hieu', 'Vuong', 'IFB299', '4wheel', 200, '2016-09-22 12:30:00', '', '', NULL),
(21, 20271, 'other', 9012934, 'Maro', 'Chow', 'ENB123', '', 179, '2016-09-22 12:39:00', '', 'fight in public', NULL),
(22, 27260, 'smoking', 9014958, 'Hieu', 'Vuong', NULL, '', 250, '2016-09-22 18:30:00', 'B', 'smoking and littering', NULL),
(23, 67834, 'other', 90594586, 'John', '2', '1234', '', 179, '2016-12-31 12:59:00', '', 'Public exposure', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `orderID` int(8) NOT NULL,
  `bookingID` int(8) NOT NULL,
  `permitID` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `vehicleRego` varchar(6) NOT NULL,
  `permitType` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `citationID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `orderID` int(8) NOT NULL,
  `officerID` int(16) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PayOrNot`
--

CREATE TABLE `PayOrNot` (
  `orderID` int(8) NOT NULL,
  `citationID` int(8) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `penaltyDate` datetime NOT NULL,
  `unpaidDays` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permit`
--

CREATE TABLE `permit` (
  `orderID` int(8) NOT NULL,
  `permitID` int(8) NOT NULL,
  `parkingDept` varchar(1) NOT NULL,
  `permitDuration` int(8) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `permitID` (`permitID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`);

--
-- Indexes for table `citation`
--
ALTER TABLE `citation`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `officerID` (`officerID`),
  ADD UNIQUE KEY `citationID` (`citationID`),
  ADD UNIQUE KEY `officerID_2` (`officerID`),
  ADD KEY `officerID_3` (`officerID`),
  ADD KEY `officerID_4` (`officerID`),
  ADD KEY `officerID_5` (`officerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `permitID` (`permitID`),
  ADD UNIQUE KEY `booking` (`bookingID`),
  ADD UNIQUE KEY `citationID` (`citationID`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `officerID` (`officerID`);

--
-- Indexes for table `PayOrNot`
--
ALTER TABLE `PayOrNot`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `citationID` (`citationID`);

--
-- Indexes for table `permit`
--
ALTER TABLE `permit`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `permitID` (`permitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `citation`
--
ALTER TABLE `citation`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permit`
--
ALTER TABLE `permit`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval`
--
ALTER TABLE `approval`
  ADD CONSTRAINT `approval_ibfk_1` FOREIGN KEY (`bookingID`) REFERENCES `booking` (`bookingID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`permitID`) REFERENCES `permit` (`permitID`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`citationID`) REFERENCES `citation` (`citationID`),
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`permitID`) REFERENCES `approval` (`permitID`);

--
-- Constraints for table `officer`
--
ALTER TABLE `officer`
  ADD CONSTRAINT `officer_ibfk_1` FOREIGN KEY (`officerID`) REFERENCES `citation` (`officerID`);

--
-- Constraints for table `PayOrNot`
--
ALTER TABLE `PayOrNot`
  ADD CONSTRAINT `payornot_ibfk_1` FOREIGN KEY (`citationID`) REFERENCES `citation` (`citationID`);

--
-- Constraints for table `permit`
--
ALTER TABLE `permit`
  ADD CONSTRAINT `permit_ibfk_1` FOREIGN KEY (`permitID`) REFERENCES `customer` (`permitID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
