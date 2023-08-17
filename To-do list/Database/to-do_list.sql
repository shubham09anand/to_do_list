-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2023 at 09:06 AM
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
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userJoinedOn` date NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `userName`, `userPassword`, `userEmail`, `userJoinedOn`) VALUES
(9, 'Joe Biden', '$2y$10$qLob5Wh5Gd26b7k.HydUle/mph6vjfhbZXJ07jBgRytvmuPMgxTmW', 'joe@gmail.com', '2023-07-21'),
(8, 'Shubham Aanad', 'Shubham', 'shubhamanand@gmail.com', '2023-07-21');

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
