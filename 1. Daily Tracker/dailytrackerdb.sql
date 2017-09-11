-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 02:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dailytrackerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `Username` text NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Username`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `group_tracker`
--

CREATE TABLE IF NOT EXISTS `group_tracker` (
  `GroupName` varchar(30) NOT NULL,
  PRIMARY KEY (`GroupName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_tracker`
--

INSERT INTO `group_tracker` (`GroupName`) VALUES
('Business Analyst'),
('Technical');

-- --------------------------------------------------------

--
-- Table structure for table `report_tracker`
--

CREATE TABLE IF NOT EXISTS `report_tracker` (
  `GroupName` varchar(30) NOT NULL,
  `LoginId` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserDate` timestamp NOT NULL,
  `UserStartTime` time NOT NULL,
  `UserEndTime` time NOT NULL,
  `TaskId` int(11) NOT NULL,
  `TaskName` varchar(20) NOT NULL,
  `TaskDate` date NOT NULL,
  `TaskStartTime` time NOT NULL,
  `TaskEndTime` time NOT NULL,
  `Status` varchar(40) NOT NULL,
  PRIMARY KEY (`GroupName`,`LoginId`,`TaskId`),
  KEY `ReportLoginId` (`LoginId`),
  KEY `TaskId` (`TaskId`),
  KEY `TaskId_2` (`TaskId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_tracker`
--

INSERT INTO `report_tracker` (`GroupName`, `LoginId`, `UserName`, `UserDate`, `UserStartTime`, `UserEndTime`, `TaskId`, `TaskName`, `TaskDate`, `TaskStartTime`, `TaskEndTime`, `Status`) VALUES
('Business Analyst', 'Radha532', 'Radha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 8, 'Assignment', '2016-05-24', '11:05:00', '01:10:00', ''),
('Business Analyst', 'Radha532', 'Radha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 11, 'PHP', '2016-05-16', '11:30:00', '12:30:00', ''),
('Business Analyst', 'Radha532', 'Radha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 12, 'SAP', '2016-05-24', '12:20:00', '05:25:00', 'InComplete'),
('Business Analyst', 'Radha532', 'Radha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 13, 'CRM', '2016-05-06', '06:30:00', '07:30:00', 'InComplete'),
('Business Analyst', 'SriPradha289', 'SriPradha', '0000-00-00 00:00:00', '18:30:00', '20:30:00', 6, 'ABCD', '2016-05-24', '13:05:00', '14:10:00', ''),
('Business Analyst', 'SriPradha289', 'SriPradha', '2016-05-06 08:04:22', '12:30:00', '01:15:00', 8, 'Assignment', '2016-05-24', '11:05:00', '01:10:00', 'Exceeded In Actual Time'),
('Business Analyst', 'SriPradha289', 'SriPradha', '2016-05-06 08:03:51', '11:30:00', '12:30:00', 11, 'PHP', '2016-05-16', '11:30:00', '12:30:00', 'Completed'),
('Business Analyst', 'SriPradha289', 'SriPradha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 12, 'SAP', '2016-05-24', '12:20:00', '05:25:00', 'InComplete'),
('Business Analyst', 'SriPradha289', 'SriPradha', '0000-00-00 00:00:00', '00:00:00', '00:00:00', 13, 'CRM', '2016-05-06', '06:30:00', '07:30:00', 'InComplete');

-- --------------------------------------------------------

--
-- Table structure for table `task_tracker`
--

CREATE TABLE IF NOT EXISTS `task_tracker` (
  `TaskId` int(11) NOT NULL AUTO_INCREMENT,
  `TaskName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `AssignedGroupName` varchar(50) NOT NULL,
  PRIMARY KEY (`TaskId`),
  KEY `AssignedGroupName` (`AssignedGroupName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `task_tracker`
--

INSERT INTO `task_tracker` (`TaskId`, `TaskName`, `Date`, `StartTime`, `EndTime`, `AssignedGroupName`) VALUES
(6, 'ABCD', '2016-05-24', '13:05:00', '14:10:00', 'Business Analyst'),
(8, 'Assignment', '2016-05-24', '11:05:00', '01:10:00', 'Business Analyst'),
(11, 'PHP', '2016-05-16', '11:30:00', '12:30:00', 'Business Analyst'),
(12, 'SAP', '2016-05-24', '12:20:00', '05:25:00', 'Business Analyst'),
(13, 'CRM', '2016-05-06', '06:30:00', '07:30:00', 'Business Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `user_tracker`
--

CREATE TABLE IF NOT EXISTS `user_tracker` (
  `UserName` varchar(40) NOT NULL,
  `LoginId` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `GroupName` varchar(20) NOT NULL,
  `emailId` varchar(60) NOT NULL,
  PRIMARY KEY (`LoginId`),
  KEY `GroupName` (`GroupName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_tracker`
--

INSERT INTO `user_tracker` (`UserName`, `LoginId`, `Password`, `GroupName`, `emailId`) VALUES
('Pradeepa', 'Pradeepa583', 'o5a0 ', 'Technical', 'PV00434293@TechMahindra.com'),
('Radha', 'Radha532', 'tg5V ', 'Business Analyst', '2345345'),
('SriPradha', 'SriPradha289', 'sri', 'Business Analyst', 'sa00434296@TechMahindra.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report_tracker`
--
ALTER TABLE `report_tracker`
  ADD CONSTRAINT `ReportGroupName` FOREIGN KEY (`GroupName`) REFERENCES `group_tracker` (`GroupName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ReportLoginId` FOREIGN KEY (`LoginId`) REFERENCES `user_tracker` (`LoginId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ReportTask` FOREIGN KEY (`TaskId`) REFERENCES `task_tracker` (`TaskId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task_tracker`
--
ALTER TABLE `task_tracker`
  ADD CONSTRAINT `TaskGroupName` FOREIGN KEY (`AssignedGroupName`) REFERENCES `group_tracker` (`GroupName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_tracker`
--
ALTER TABLE `user_tracker`
  ADD CONSTRAINT `GroupConstraint` FOREIGN KEY (`GroupName`) REFERENCES `group_tracker` (`GroupName`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
