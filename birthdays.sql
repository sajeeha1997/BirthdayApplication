-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 05:15 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birthdays`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminID`, `fullName`, `email`, `mobileNo`, `designation`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 71123456, '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `listofjoin`
--

CREATE TABLE `listofjoin` (
  `treatJoinId` int(11) NOT NULL,
  `treat_Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `status_join` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listofjoin`
--

INSERT INTO `listofjoin` (`treatJoinId`, `treat_Id`, `userID`, `status_join`) VALUES
(1, 2, 0, 'join'),
(16, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `treat_Id` int(11) NOT NULL,
  `treatDate` date NOT NULL,
  `treatTime` time NOT NULL,
  `venue` varchar(50) NOT NULL,
  `notes` varchar(1000) NOT NULL,
  `treatStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`treat_Id`, `treatDate`, `treatTime`, `venue`, `notes`, `treatStatus`) VALUES
(1, '2019-07-15', '12:10:00', 'multi Media Room', 'testing', 'celebrated'),
(2, '2019-07-08', '22:00:00', 'UG', 'testing 123', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `perferredName` varchar(30) NOT NULL,
  `dateOfBirthday` date NOT NULL,
  `officialEmail` varchar(50) NOT NULL,
  `personalEmail` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `facebookLink` varchar(100) NOT NULL,
  `designaion` varchar(30) DEFAULT NULL,
  `nic` varchar(20) NOT NULL,
  `studentNo` varchar(20) DEFAULT NULL,
  `foodPreference` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organizingRole` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `perferredName`, `dateOfBirthday`, `officialEmail`, `personalEmail`, `mobile`, `facebookLink`, `designaion`, `nic`, `studentNo`, `foodPreference`, `note`, `userType`, `password`, `organizingRole`) VALUES
(1, 'dilan', 'perera', 'dilan', '1996-07-12', '', 'dupdilan@gmail.com', '0767985200', '', '', '961850797v', 'IM/2016/057', 'Non-Veg', 'test', 'Student', 'test', 0),
(2, 'nimal', 'perera', 'nimal', '1995-07-13', 'asd@gmail.com', '', '0712345678', '', '', '123456782v', '', 'Veg', '0', 'Student', 'test', 0),
(3, 'asd', 'asd', 'asd', '1948-02-04', 'bmndas@gmail.com', '', '07123456789', '', '', '123456712v', '', '', 'asd', 'Temporry Staff', 'test', 0),
(4, 'asd', 'perera', 'nimal', '1969-07-13', 'asd@gmail.com', '', '0712345678', '', 'lecture', '123456789v', '', 'Non-Veg', '0', 'Academic Staff', 'test1', 1),
(5, 'asd', 'asd', 'asd', '2000-07-14', 'asd@gmail.com', '', '0712344567', '', '', '961850792v', '', 'Veg', '', 'Administrative Staff', 'test', 0),
(6, 'lakshitha', 'kara', 'kara', '1996-07-20', 'lakshitha@gmail.com', '', '0764578945', '', '', '9617845751v', 'IM/2016/084', 'Non-Veg', '', 'Student', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `listofjoin`
--
ALTER TABLE `listofjoin`
  ADD PRIMARY KEY (`treatJoinId`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD PRIMARY KEY (`treat_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listofjoin`
--
ALTER TABLE `listofjoin`
  MODIFY `treatJoinId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
