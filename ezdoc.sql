-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 06:28 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admlog`
--

CREATE TABLE `admlog` (
  `id` int(11) NOT NULL,
  `un` varchar(45) NOT NULL,
  `pw` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admlog`
--

INSERT INTO `admlog` (`id`, `un`, `pw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `uemail` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `title` varchar(45) NOT NULL,
  `ptn_name` varchar(45) NOT NULL,
  `ptn_tel` varchar(10) NOT NULL,
  `app_no` int(11) NOT NULL DEFAULT 0,
  `note` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `dname` varchar(45) NOT NULL,
  `specialization` varchar(45) NOT NULL,
  `fee` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`dname`, `specialization`, `fee`, `email`, `tel`, `adate`, `atime`) VALUES
('UCASE(test)', 'General', 123, '123@fgh.com', '0712345678', '2019-08-29', '13:00:00'),
('TEST', 'General', 425, '123@sdf.com', '0712345678', '2019-08-29', '00:00:00'),
('abc', 'Dermatology', 1000, 'abc@sdf.com', '0712345678', '2019-08-21', '01:59:00'),
('Rajitha Senarathne', 'Family Medicine', 1200, 'rajitha@dental.com', '0712345678', '2019-08-18', '00:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `nic` varchar(45) NOT NULL,
  `mob` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pw` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`fname`, `lname`, `nic`, `mob`, `email`, `pw`) VALUES
('Hasee', 'Karun', '1234567', '0712345678', 'test@abc.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admlog`
--
ALTER TABLE `admlog`
  ADD PRIMARY KEY (`id`,`un`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD KEY `uemail` (`uemail`),
  ADD KEY `demail` (`demail`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admlog`
--
ALTER TABLE `admlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`uemail`) REFERENCES `user_details` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`demail`) REFERENCES `doctor_details` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
