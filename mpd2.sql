-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2011 at 10:25 PM
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

CREATE TABLE IF NOT EXISTS `alumni` (
  `UserID` int(11) DEFAULT NULL,
  `CurrentEmployer` varchar(32) DEFAULT NULL,
  `GraduationYear` int(4) NOT NULL,
  `Industry` varchar(32) DEFAULT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `ProjID` int(4) DEFAULT NULL,
  `AlumniID` int(11) NOT NULL AUTO_INCREMENT,
  `TeamID` int(11) DEFAULT NULL,
  `info` longtext,
  `facebook` varchar(64) DEFAULT NULL,
  `twitter` varchar(64) DEFAULT NULL,
  `linkedin` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`AlumniID`),
  KEY `UserID` (`UserID`),
  KEY `ProjID` (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`UserID`, `CurrentEmployer`, `GraduationYear`, `Industry`, `FirstName`, `LastName`, `ProjID`, `AlumniID`, `TeamID`, `info`, `facebook`, `twitter`, `linkedin`) VALUES
(4, 'Microsoft', 2008, 'CS', 'John', 'Doe', 2, 4, 100, 'I''m an alumni', 'With a facebook', 'And a twitter', 'and perhaps a linkedin'),
(NULL, 'Northwestern', 1960, 'CS', 'Larry', 'Birnbaum', 2, 5, 1000, 'This is Larry', 'dummyfb', 'dummytwitter', 'dummylinkedin'),
(6, NULL, 2000, NULL, 'Mr Tester', 'Tester', NULL, 6, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 2000, NULL, 'Mr Tester', 'Tester', NULL, 7, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 2012, NULL, 'Andrew', 'Allen', NULL, 9, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

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

CREATE TABLE IF NOT EXISTS `images` (
  `ImageID` int(11) NOT NULL AUTO_INCREMENT,
  `AlumniID` int(11) DEFAULT NULL,
  `ProjID` int(11) DEFAULT NULL,
  `ImageURL` varchar(256) NOT NULL,
  `imgType` int(1) NOT NULL,
  `description` longtext,
  `TeamID` int(4) DEFAULT NULL,
  `position` int(1) DEFAULT NULL,
  PRIMARY KEY (`ImageID`),
  KEY `ProjID` (`ProjID`),
  KEY `AlumniID` (`AlumniID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `AlumniID`, `ProjID`, `ImageURL`, `imgType`, `description`, `TeamID`, `position`) VALUES
(1, NULL, 2, 'http://www.eecs.northwestern.edu/images/comprofiler/tn64_4b84458165b2b.jpg', 2, 'Here''s a cool description!', NULL, NULL),
(2, 5, NULL, 'http://www.eecs.northwestern.edu/images/comprofiler/tn65_4b844185d65de.jpg', 0, 'Larry', 1000, NULL),
(3, 4, NULL, 'http://rpmedia.ask.com/ts?u=/wikipedia/commons/thumb/7/71/EnglishSpringerSpan2_wb.jpg/150px-EnglishSpringerSpan2_wb.jpg', 1, 'Dog', 1000, NULL),
(4, NULL, 3, 'http://www.aisleone.net/wp-content/uploads/2007/07/coke.jpg', 1, 'A can of coke', NULL, NULL),
(7, 4, 2, 'flower.jpg', 0, 'flower', 100, 1),
(8, 4, 2, 'road.jpg', 0, 'road', 100, 2),
(9, 4, 2, 'traffic1.jpg', 0, '', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ProjID` int(4) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(32) NOT NULL,
  `Summary` longtext,
  `Year` int(4) NOT NULL,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjID`, `ProjectName`, `Summary`, `Year`) VALUES
(2, 'Dummy Project', 'Cool Project.', 2011),
(3, 'A second project', 'Trying out a second project', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Privileges` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Login` (`Login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Login`, `Password`, `Privileges`) VALUES
(4, 'johndoe', '6579e96f76baa00787a28653876c6127', 0),
(5, 'root', '63a9f0ea7bb98050796b649e85481845', 1),
(6, 'test', 'test', 0),
(9, 'andrew', 'a34c3d45b6018d3fd5560b103c2a00e2', 0);

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
