-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 07:18 AM
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
  `professor_id` int(11) NOT NULL,
  `professor_name` varchar(255) NOT NULL,
  `professor_department` varchar(255) NOT NULL,
  `professor_username` varchar(255) NOT NULL,
  `professor_password` varchar(255) NOT NULL,
  `professor_retype_password` varchar(255) NOT NULL,
  `professor_address` varchar(255) NOT NULL,
  `professor_id_front` varchar(255) NOT NULL,
  `professor_id_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor_table`
--

INSERT INTO `professor_table` (`professor_id`, `professor_name`, `professor_department`, `professor_username`, `professor_password`, `professor_retype_password`, `professor_address`, `professor_id_front`, `professor_id_back`) VALUES
(1, 'Cruz Satan  ', 'BIT Department', 'lemon_squishy1', '72da3c48fc35d4a6c48d2a33f2a53477', '72da3c48fc35d4a6c48d2a33f2a53477', 'Bulacan bulacan', 'Cruz_Satan__front_id.jpg', 'Cruz_Satan__back_id.jpg'),
(2, 'Squishy Satan  ', 'EDUC Department', 'satan_1998', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', 'Bulacan bulacan', 'Squishy_Satan__front_id.jpg', 'Squishy_Satan__back_id.jpg'),
(3, 'World Hello  ', 'BIT Department', 'hello_world', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', 'San jose del monte, Bulacan', 'World_Hello__front_id.jpg', 'World_Hello__back_id.jpg'),
(4, 'World Hello  ', 'BIT Department', 'hello_world1', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', 'San jose del monte, Bulacan', 'World_Hello__front_id.jpg', 'World_Hello__back_id.jpg');

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
(45, 'testing upload', 'testing upload of pdf file', 'Mr. Cruz', 'testing_upload.pdf', '4th year', 'bsit', 'testing', 'Mr. Satan', 31, 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_username` varchar(255) NOT NULL,
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

INSERT INTO `student_table` (`student_id`, `student_name`, `student_username`, `student_password`, `student_retype_password`, `student_year_level`, `student_course`, `student_address`, `student_id_front`, `student_id_back`, `student_account_status`) VALUES
(23, 'Cruz Jari  ', '', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id', 'Cruz_Jari__back_id', ''),
(24, 'Cruz Jari  ', '', '62e664609f00a30f1f0830362ff8ea96', '62e664609f00a30f1f0830362ff8ea96', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', ''),
(25, 'Cruz Jari  ', '', '62e664609f00a30f1f0830362ff8ea96', '62e664609f00a30f1f0830362ff8ea96', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', ''),
(26, 'Cruz Jari  ', '', '25d55ad283aa400af464c76d713c07ad', '25d55ad283aa400af464c76d713c07ad', '4th year', 'bsit', 'Bulacan bulacan', 'Cruz_Jari__front_id.jpg', 'Cruz_Jari__back_id.jpg', ''),
(27, 'Squishy Lemon  ', 'lemon_squisy', '72da3c48fc35d4a6c48d2a33f2a53477', '72da3c48fc35d4a6c48d2a33f2a53477', '4th year', 'bsit', 'Bulacan bulacan', 'Squishy_Lemon__front_id.jpg', 'Squishy_Lemon__back_id.jpg', ''),
(28, 'Squishy1 Lemon1  ', 'lemon_squisy1', '72da3c48fc35d4a6c48d2a33f2a53477', '72da3c48fc35d4a6c48d2a33f2a53477', '4th year', 'bsit', 'Bulacan bulacan', 'Squishy1_Lemon1__front_id.jpg', 'Squishy1_Lemon1__back_id.jpg', ''),
(29, 'Baltazar Satan  ', 'satan_1999', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '4th year', 'bsit', 'Bulacan bulacan', 'Baltazar_Satan__front_id.jpg', 'Baltazar_Satan__back_id.jpg', ''),
(30, 'Baltazar Satan  ', 'satan_1990', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '4th year', 'bsit', 'Bulacan bulacan', 'Baltazar_Satan__front_id.jpg', 'Baltazar_Satan__back_id.jpg', ''),
(31, 'Squishy1 Satan  ', 'jari_cruz', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '4th year', 'bsit', 'Bulacan bulacan', 'Squishy1_Satan__front_id.jpg', 'Squishy1_Satan__back_id.jpg', ''),
(32, 'Baltazar Lemon  ', 'lemon_1998', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '4th year', 'bsit', 'Bulacan bulacan', 'Baltazar_Lemon__front_id.jpg', 'Baltazar_Lemon__back_id.jpg', '');

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
  ADD PRIMARY KEY (`professor_id`);

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
  MODIFY `professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `researchstudy_table`
--
ALTER TABLE `researchstudy_table`
  MODIFY `RS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`Professor_ID`) REFERENCES `professor_table` (`professor_id`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`Student_ID`) REFERENCES `student_table` (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
