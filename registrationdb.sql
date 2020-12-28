-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 12:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationinfo`
--

CREATE TABLE `registrationinfo` (
  `personID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Email_Address` varchar(30) NOT NULL,
  `Desired_Password` varchar(20) NOT NULL,
  `Confirm_Password` varchar(20) NOT NULL,
  `Affiliation` text NOT NULL,
  `ZipCode` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationinfo`
--

INSERT INTO `registrationinfo` (`personID`, `First_Name`, `Last_Name`, `Phone_Number`, `Email_Address`, `Desired_Password`, `Confirm_Password`, `Affiliation`, `ZipCode`) VALUES
(30, 'Atia', 'Papry', '56745333', 'atia@gmail.com', 'atia', '', 'employee', 19702),
(32, 'Jay', 'Baron', '98089', 'jay@gmail.com', 'h444', '', 'Employed', 45637),
(34, 'Zannatul', 'Mawa', '3027657254', 'zannatulmawa62@gmail.com', 'mawa62', 'mawa62', 'Student', 19713),
(35, 'Kim', 'Timothy', '78695745', 'kim@gmail.com', 'kim', 'kim', 'Student', 3452);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationinfo`
--
ALTER TABLE `registrationinfo`
  ADD PRIMARY KEY (`personID`),
  ADD KEY `First_Name` (`First_Name`(3072));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationinfo`
--
ALTER TABLE `registrationinfo`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
