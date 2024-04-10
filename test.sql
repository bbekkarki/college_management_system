-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 12:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`user_name`, `password`, `name`, `id`) VALUES
('bibek', 'bibek', 'bibek', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `aname` varchar(20) NOT NULL,
  `submissiondate` date NOT NULL,
  `teachername` varchar(20) NOT NULL,
  `adescription` text NOT NULL,
  `assignmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`aname`, `submissiondate`, `teachername`, `adescription`, `assignmentid`) VALUES
('sad', '2023-06-21', 'Ram babu sir', 'Software Engineering Interview Questions for Freshers 1. What are the various categories of software? 2. What are the characteristics of software?  ', 1),
('sad', '2023-06-21', 'Ram babu sir', 'Software Engineering Interview Questions for Freshers 1. What are the various categories of software? 2. What are the characteristics of software? ', 2),
('sad', '2023-06-21', 'Ram babu sir', 'Software Engineering Interview Questions for Freshers 1. What are the various categories of software? 2. What are the characteristics of software?  ', 3),
('sad', '2023-06-19', 'kumar sir', 'Software Engineering Interview Questions for Freshers ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `did` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`did`, `dname`) VALUES
(1, 'CSIT'),
(2, 'BCA'),
(3, 'BIM'),
(4, 'BBA'),
(5, 'BHM'),
(6, 'BASW'),
(7, 'BBS'),
(8, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `pid` int(10) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `pfaculty` int(10) NOT NULL,
  `pphone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pid`, `pname`, `paddress`, `pfaculty`, `pphone`) VALUES
(12, 'Rajiv thakuri', 'kathmandu', 1, '984562145'),
(13, 'Bandana Khatri', 'gulmi', 3, '9841003624'),
(14, 'Ram raja budha', 'mugu', 4, '9852365425'),
(15, 'bibek', '', 0, ''),
(18, 'dipesh', 'jhapa', 1, '9841');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignmentid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
