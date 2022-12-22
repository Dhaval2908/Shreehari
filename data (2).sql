-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 12:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `PhoneNo` varchar(10) DEFAULT NULL,
  `Kamar` varchar(25) DEFAULT NULL,
  `Sit` varchar(25) DEFAULT NULL,
  `Length` varchar(25) DEFAULT NULL,
  `Moli` varchar(25) DEFAULT NULL,
  `Ghutan` varchar(25) DEFAULT NULL,
  `Galo` varchar(25) DEFAULT NULL,
  `Jhang` varchar(255) NOT NULL,
  `Length_s` varchar(25) DEFAULT NULL,
  `Chest_s` varchar(25) DEFAULT NULL,
  `Pet_s` varchar(25) DEFAULT NULL,
  `Sit_s` varchar(25) DEFAULT NULL,
  `shoulder_s` varchar(25) DEFAULT NULL,
  `Bay_s` varchar(25) DEFAULT NULL,
  `Coler_s` varchar(25) DEFAULT NULL,
  `Front_s` varchar(255) NOT NULL,
  `Text_s` varchar(255) DEFAULT NULL,
  `Text_p` varchar(255) DEFAULT NULL,
  `SNO` int(10) UNSIGNED NOT NULL,
  `ID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `SNO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
