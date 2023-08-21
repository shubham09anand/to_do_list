-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2023 at 08:13 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-do list`
--

-- --------------------------------------------------------

--
-- Table structure for table `stickytable`
--

DROP TABLE IF EXISTS `stickytable`;
CREATE TABLE IF NOT EXISTS `stickytable` (
  `stickyID` int NOT NULL AUTO_INCREMENT,
  `UserId` int NOT NULL,
  `stickyTiltle` varchar(100) NOT NULL,
  `stickyDescription` text NOT NULL,
  `stickyTime` time NOT NULL,
  `stickyDate` date NOT NULL,
  PRIMARY KEY (`stickyID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stickytable`
--

INSERT INTO `stickytable` (`stickyID`, `UserId`, `stickyTiltle`, `stickyDescription`, `stickyTime`, `stickyDate`) VALUES
(1, 1, 'Sticky1', 'Play', '01:39:00', '2023-08-22'),
(2, 1, 'sticky2', 'play', '01:41:00', '2023-08-22'),
(3, 1, 'sticky3', 'play', '01:41:00', '2023-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `tasktable`
--

DROP TABLE IF EXISTS `tasktable`;
CREATE TABLE IF NOT EXISTS `tasktable` (
  `taskID` int NOT NULL AUTO_INCREMENT,
  `UserId` int NOT NULL,
  `taskTiltle` varchar(100) NOT NULL,
  `taskDescription` text NOT NULL,
  `taskdueDate` date NOT NULL,
  `taskPriority` varchar(100) NOT NULL,
  `taskType` varchar(100) NOT NULL,
  `taskTime` time NOT NULL,
  `taskDate` date NOT NULL,
  `taskStatus` varchar(100) NOT NULL,
  PRIMARY KEY (`taskID`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='this table is related to user task';

--
-- Dumping data for table `tasktable`
--

INSERT INTO `tasktable` (`taskID`, `UserId`, `taskTiltle`, `taskDescription`, `taskdueDate`, `taskPriority`, `taskType`, `taskTime`, `taskDate`, `taskStatus`) VALUES
(59, 1, 'Home', 'Cleaning', '2023-08-18', 'Priority 4', 'Home', '01:04:00', '2023-08-22', 'Not Completed'),
(60, 1, 'Lesiure', 'Movies', '2023-08-23', 'Priority 4', 'Lesiure', '01:05:00', '2023-08-22', 'Not Completed'),
(57, 1, 'Personal', 'sleep', '2023-08-23', 'Priority 2', 'Personal', '01:03:00', '2023-08-22', 'Not Completed'),
(58, 1, 'Study', 'Maths', '2023-08-11', 'Priority 4', 'study', '01:04:00', '2023-08-22', 'Not Completed'),
(56, 1, 'Tooday', 'Sleeping', '2023-08-22', 'Priority 2', 'Today', '01:01:00', '2023-08-22', 'Not Completed');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userJoinedOn` date NOT NULL,
  `userJoinTime` time NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `userName`, `userPassword`, `userEmail`, `userJoinedOn`, `userJoinTime`) VALUES
(41, 'Shubham Anand', '@12345', 'shubhamshelelam@gmail.com', '2023-08-19', '21:57:00'),
(40, 'sadsa', 'qwedqw', 'qweqwe12', '2023-08-19', '21:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `userprofileinfo`
--

DROP TABLE IF EXISTS `userprofileinfo`;
CREATE TABLE IF NOT EXISTS `userprofileinfo` (
  `userId` int NOT NULL,
  `userBackgroundPhoto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userProfilePhoto` text NOT NULL,
  `userFirstName` varchar(50) NOT NULL,
  `userLastName` varchar(50) NOT NULL,
  `userPhoneNumber` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userDOB` varchar(50) NOT NULL,
  `userStatus` varchar(20) NOT NULL,
  `userCountry` varchar(50) NOT NULL,
  `userState` varchar(50) NOT NULL,
  `userCity` varchar(50) NOT NULL,
  `userDiscription` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
