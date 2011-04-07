-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2011 at 02:57 AM
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
  PRIMARY KEY (`AlumniID`),
  KEY `UserID` (`UserID`),
  KEY `ProjID` (`ProjID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alumni`
--


-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

DROP TABLE IF EXISTS `bio`;
CREATE TABLE IF NOT EXISTS `bio` (
  `AlumniID` int(4) NOT NULL,
  `Dummy` longtext NOT NULL,
  PRIMARY KEY (`AlumniID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio`
--


-- --------------------------------------------------------

--
-- Table structure for table `email`
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

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `ImageID` int(11) NOT NULL,
  `AlumniID` int(11) NOT NULL,
  `ProjID` int(11) NOT NULL,
  `ImageURL` varchar(256) NOT NULL,
  PRIMARY KEY (`ImageID`),
  KEY `ProjID` (`ProjID`),
  KEY `AlumniID` (`AlumniID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `ProjID` int(4) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(32) NOT NULL,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Privileges` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_2` FOREIGN KEY (`ProjID`) REFERENCES `project` (`ProjID`),
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `bio`
--
ALTER TABLE `bio`
  ADD CONSTRAINT `bio_ibfk_1` FOREIGN KEY (`AlumniID`) REFERENCES `alumni` (`AlumniID`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`AlumniID`) REFERENCES `alumni` (`AlumniID`),
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`AlumniID`) REFERENCES `alumni` (`AlumniID`),
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ProjID`) REFERENCES `project` (`ProjID`);
