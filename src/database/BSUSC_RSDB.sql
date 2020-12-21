-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2020 at 03:14 AM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BSUSC_Research_Databank`
--
CREATE DATABASE IF NOT EXISTS `BSUSC_Research_Databank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BSUSC_Research_Databank`;

-- --------------------------------------------------------

--
-- Table structure for table `Admin_table`
--

DROP TABLE IF EXISTS `Admin_table`;
CREATE TABLE `Admin_table` (
  `Admin_ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Professor_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Professor_table`
--

DROP TABLE IF EXISTS `Professor_table`;
CREATE TABLE `Professor_table` (
  `Professor_ID` int(20) NOT NULL,
  `Professor_Name` varchar(100) NOT NULL,
  `Professor_Department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ResearchStudy_table`
--

DROP TABLE IF EXISTS `ResearchStudy_table`;
CREATE TABLE `ResearchStudy_table` (
  `RS_ID` int(20) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Abstract` text NOT NULL,
  `Author` varchar(50) NOT NULL,
  `File` mediumblob NOT NULL,
  `Year` int(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Keywords` varchar(60) NOT NULL,
  `Adviser` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student_table`
--

DROP TABLE IF EXISTS `Student_table`;
CREATE TABLE `Student_table` (
  `Student_ID` int(20) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Student_Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin_table`
--
ALTER TABLE `Admin_table`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `student_id` (`Student_ID`),
  ADD KEY `professor_id` (`Professor_ID`);

--
-- Indexes for table `Professor_table`
--
ALTER TABLE `Professor_table`
  ADD PRIMARY KEY (`Professor_ID`);

--
-- Indexes for table `ResearchStudy_table`
--
ALTER TABLE `ResearchStudy_table`
  ADD PRIMARY KEY (`RS_ID`);

--
-- Indexes for table `Student_table`
--
ALTER TABLE `Student_table`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin_table`
--
ALTER TABLE `Admin_table`
  MODIFY `Admin_ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Professor_table`
--
ALTER TABLE `Professor_table`
  MODIFY `Professor_ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ResearchStudy_table`
--
ALTER TABLE `ResearchStudy_table`
  MODIFY `RS_ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Student_table`
--
ALTER TABLE `Student_table`
  MODIFY `Student_ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admin_table`
--
ALTER TABLE `Admin_table`
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`Professor_ID`) REFERENCES `Professor_table` (`Professor_ID`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`Student_ID`) REFERENCES `Student_table` (`Student_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
