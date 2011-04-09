-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2011 at 01:22 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mpd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--
-- Creation: Apr 05, 2011 at 08:20 PM
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE IF NOT EXISTS `alumni` (
  `UserID` int(11) DEFAULT NULL,
  `CurrentEmployer` varchar(32) NOT NULL,
  `GraduationYear` int(4) NOT NULL,
  `Industry` varchar(32) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `ProjID` int(4) NOT NULL,
  `AlumniID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) NOT NULL,
  `info` longtext,
  `facebook` varchar(64) DEFAULT NULL,
  `twitter` varchar(64) DEFAULT NULL,
  `linkedin` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`AlumniID`),
  KEY `UserID` (`UserID`),
  KEY `ProjID` (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`UserID`, `CurrentEmployer`, `GraduationYear`, `Industry`, `FirstName`, `LastName`, `ProjID`, `AlumniID`, `TeamID`, `info`, `facebook`, `twitter`, `linkedin`) VALUES
(4, 'Microsoft', 2008, 'CS', 'John', 'Doe', 2, 4, 100, 'I''m an alumni', 'With a facebook', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--
-- Creation: Apr 06, 2011 at 07:38 PM
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `Email` varchar(64) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `AlumniID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Email`),
  KEY `UserID` (`UserID`),
  KEY `AlumniID` (`AlumniID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--


-- --------------------------------------------------------

--
-- Table structure for table `images`
--
-- Creation: Apr 06, 2011 at 07:51 PM
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `ImageID` int(11) NOT NULL,
  `AlumniID` int(11) DEFAULT NULL,
  `ProjID` int(11) DEFAULT NULL,
  `ImageURL` varchar(256) NOT NULL,
  `imgType` int(1) NOT NULL,
  `description` longtext,
  PRIMARY KEY (`ImageID`),
  KEY `ProjID` (`ProjID`),
  KEY `AlumniID` (`AlumniID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `AlumniID`, `ProjID`, `ImageURL`, `imgType`, `description`) VALUES
(0, NULL, NULL, 'dummyURL', 1, 'A Cool Img');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--
-- Creation: Apr 06, 2011 at 07:45 PM
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `ProjID` int(4) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(32) NOT NULL,
  `Summary` longtext,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjID`, `ProjectName`, `Summary`) VALUES
(2, 'Dummy Project', 'Cool Project.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Apr 03, 2011 at 01:43 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Privileges` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Login`, `Password`, `Privileges`) VALUES
(4, '63a9f0ea7bb98050796b649e85481845', 'root', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `alumni_ibfk_2` FOREIGN KEY (`ProjID`) REFERENCES `project` (`ProjID`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`AlumniID`) REFERENCES `alumni` (`AlumniID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ProjID`) REFERENCES `project` (`ProjID`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`AlumniID`) REFERENCES `alumni` (`AlumniID`);
