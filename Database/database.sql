-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2022 at 05:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicldp_emstest`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `contact`, `address`, `dept`, `degree`) VALUES
(101, 'Rohan', 'Sharma', 'rohan121@yahoo.com', '1234', 'Male', '9421345678', 'Rajkot', 'IT', 'BCA'),
(102, 'Mohan', 'Patel', 'mohan12@gmail.com', '1234', 'Male', '9411245678', 'Jamnagar', 'Android', 'CSE'),
(103, 'Aditya', 'Shrinivasan', 'aditya91@gmail.com', '1234', 'Male', '9435124678', 'Bangalore', 'AI ML', 'MSc'),
(104, 'Shrushti', 'Sharma', 'shrushti25@gmail.com', '1234', 'Female', '9432145678', 'Pune', 'iOS', 'MSc'),
(105, 'Paras', 'Trivedi', 'paras16@yahoo.com', '1234', 'Male', '9427134568', 'Delhi', 'Python', 'BSc'),
(114, 'Santosh', 'Shah', 'santosh15@gmail.com', '1234', 'Male', '9421345678', 'Mumbai', 'Web Development', 'CSE'),
(117, 'Akshay', 'Shah', 'akshay51@gmail.com', '1234', 'Male', '9412345578', 'Delhi', 'AI ML', 'CSE'),
(118, 'Parth', 'Patel', 'parth15@gmail.com', '1234', 'Male', '9412345678', 'Mumbai', 'Python', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(103, 315, '2022-10-06', '2022-10-08', 'Sick Leave', 'Approved'),
(102, 316, '2022-10-09', '2022-10-10', 'Emergency Family Matter', 'Cancelled'),
(104, 317, '2022-10-18', '2022-10-22', 'Vacation', 'Approved'),
(101, 318, '2022-10-16', '2022-10-17', 'Professional Conference', 'Approved'),
(118, 319, '2022-10-12', '2022-10-14', 'Sick Leave', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `subdate` date DEFAULT '0000-00-00',
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `eid`, `pname`, `duedate`, `subdate`, `status`) VALUES
(231, 103, 'Machine Learning', '2022-10-05', '2022-11-12', 'Submitted'),
(232, 114, 'Website Design', '2022-10-05', '0000-00-00', 'Due'),
(233, 102, 'Android App Development', '2022-11-22', '2022-11-12', 'Submitted'),
(234, 101, 'Network Security', '2022-11-25', '0000-00-00', 'Due'),
(235, 117, 'NLP', '2022-10-04', '2022-11-12', 'Submitted'),
(236, 118, 'Python Project', '2022-10-08', '2022-11-12', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(101, 10),
(102, 0),
(103, 6),
(104, 0),
(105, 20),
(114, 0),
(117, 0),
(118, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `base`, `bonus`, `total`) VALUES
(101, 55000, 10, 60500),
(102, 16500, 5, 17325),
(103, 65000, 10, 71500),
(104, 78000, 5, 81900),
(105, 105000, 20, 126000),
(114, 30000, 5, 31500),
(117, 50000, 15, 57500),
(118, 35000, 10, 38500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `project_ibfk_1` (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
