-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 11:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsusc_research_databank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `Admin_ID` int(20) NOT NULL,
  `Student_ID` int(20) NOT NULL,
  `Professor_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professor_table`
--

CREATE TABLE `professor_table` (
  `Professor_ID` int(20) NOT NULL,
  `Professor_Name` varchar(100) NOT NULL,
  `Professor_Department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `researchstudy_table`
--

CREATE TABLE `researchstudy_table` (
  `RS_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Abstract` text NOT NULL,
  `Author` varchar(255) NOT NULL,
  `File` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Keywords` varchar(255) NOT NULL,
  `Adviser` varchar(255) NOT NULL,
  `Views` int(11) NOT NULL DEFAULT 0,
  `Downloads` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchstudy_table`
--

INSERT INTO `researchstudy_table` (`RS_ID`, `Title`, `Abstract`, `Author`, `File`, `Year`, `Course`, `Keywords`, `Adviser`, `Views`, `Downloads`) VALUES
(45, 'testing upload', 'testing upload of pdf file', 'Mr. Cruz', 'testing_upload.pdf', '4th year', 'bsit', 'testing', 'Mr. Satan', 30, 11);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_retype_password` varchar(255) NOT NULL,
  `student_year_level` varchar(255) NOT NULL,
  `student_course` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_id_front` varchar(255) NOT NULL,
  `student_id_back` varchar(255) NOT NULL,
  `student_account_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_name`, `student_password`, `student_retype_password`, `student_year_level`, `student_course`, `student_address`, `student_id_front`, `student_id_back`, `student_account_status`) VALUES
(23, 'Cruz Jari  ', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id', 'Cruz_Jari__back_id', ''),
(24, 'Cruz Jari  ', '62e664609f00a30f1f0830362ff8ea96', '62e664609f00a30f1f0830362ff8ea96', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', ''),
(25, 'Cruz Jari  ', '62e664609f00a30f1f0830362ff8ea96', '62e664609f00a30f1f0830362ff8ea96', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', ''),
(26, 'Cruz Jari  ', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `student_id` (`Student_ID`),
  ADD KEY `professor_id` (`Professor_ID`);

--
-- Indexes for table `professor_table`
--
ALTER TABLE `professor_table`
  ADD PRIMARY KEY (`Professor_ID`);

--
-- Indexes for table `researchstudy_table`
--
ALTER TABLE `researchstudy_table`
  ADD PRIMARY KEY (`RS_ID`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `Admin_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor_table`
--
ALTER TABLE `professor_table`
  MODIFY `Professor_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researchstudy_table`
--
ALTER TABLE `researchstudy_table`
  MODIFY `RS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`Professor_ID`) REFERENCES `professor_table` (`Professor_ID`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`Student_ID`) REFERENCES `student_table` (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
