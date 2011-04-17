-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2011 at 01:11 AM
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
  `info` longtext,
  `facebook` varchar(64) DEFAULT NULL,
  `twitter` varchar(64) DEFAULT NULL,
  `linkedin` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`AlumniID`),
  KEY `UserID` (`UserID`),
  KEY `ProjID` (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`UserID`, `CurrentEmployer`, `GraduationYear`, `Industry`, `FirstName`, `LastName`, `ProjID`, `AlumniID`, `TeamID`, `info`, `facebook`, `twitter`, `linkedin`) VALUES
(4, 'Microsoft', 2008, 'CS', 'John', 'Doe', 2, 4, 1000, 'I''m an alumni', 'With a facebook', 'And a twitter', 'and perhaps a linkedin'),
(NULL, 'Northwestern', 1960, 'CS', 'Larry', 'Birnbaum', 2, 5, 1000, 'This is Larry', 'dummyfb', 'dummytwitter', 'dummylinkedin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `AlumniID`, `ProjID`, `ImageURL`, `imgType`, `description`, `TeamID`, `position`) VALUES
(1, NULL, 2, 'http://www.eecs.northwestern.edu/images/comprofiler/tn64_4b84458165b2b.jpg', 1, 'Here''s a cool description!', NULL, NULL),
(2, 5, NULL, 'http://www.eecs.northwestern.edu/images/comprofiler/tn65_4b844185d65de.jpg', 5, 'Larry', 1000, NULL),
(3, 4, NULL, 'http://rpmedia.ask.com/ts?u=/wikipedia/commons/thumb/7/71/EnglishSpringerSpan2_wb.jpg/150px-EnglishSpringerSpan2_wb.jpg', 5, 'Dog', 1000, NULL),
(4, NULL, 3, 'http://www.aisleone.net/wp-content/uploads/2007/07/coke.jpg', 1, 'A can of coke', NULL, NULL),
(5, NULL, 2, 'http://upload.wikimedia.org/wikipedia/commons/8/80/Knut_IMG_8095.jpg', 2, 'Product Opportunity Pic. Aka Knut.', NULL, 2),
(6, NULL, 2, 'http://bananier.files.wordpress.com/2010/11/young-eglantine-in-legend-of-the-guardians-the-owls-of-gahoole_gallery_primary.jpg', 3, 'A longer description just to see how the new textbox works.A longer description just to see how the new textbox works.A longer description just to see how the new textbox works.', NULL, 4),
(7, NULL, 2, 'http://4.bp.blogspot.com/_td4gOPRGXcI/THbbBBIXtgI/AAAAAAAAAuc/XDiEo_ZJEEk/s1600/gladiator+movie+2.jpg', 4, 'Final Project pic', NULL, NULL),
(8, NULL, 2, 'http://www.themovingarts.com/wp-content/uploads/2011/01/the-kings-speech.jpg', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `ProjID` int(4) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(32) NOT NULL,
  `Summary` longtext,
  `Year` int(4) NOT NULL,
  `MarketSegmentation` text,
  `TargetMarket` text,
  `MarketPositioning` text,
  `QualitativeResearch` text,
  `QuantitativeResearch` text,
  `Price` float DEFAULT NULL,
  `CountryOfOrigin` text,
  `MaterialSelection` text,
  `IntellectualProperty` text,
  `HumanFactors` text,
  `Regulations` text,
  `OtherInfo` text,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjID`, `ProjectName`, `Summary`, `Year`, `MarketSegmentation`, `TargetMarket`, `MarketPositioning`, `QualitativeResearch`, `QuantitativeResearch`, `Price`, `CountryOfOrigin`, `MaterialSelection`, `IntellectualProperty`, `HumanFactors`, `Regulations`, `OtherInfo`) VALUES
(2, 'Dummy Project', 'Cool Project.', 2011, 'Something', 'And another thing.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'A second project', 'Trying out a second project', 2010, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Login`, `Password`, `Privileges`) VALUES
(4, '63a9f0ea7bb98050796b649e85481845', 'root', 1),
(6, 'aaron', '63a9f0ea7bb98050796b649e85481845', 0);

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
