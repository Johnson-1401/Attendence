-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:42 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attendance.admin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attendance`.`admin`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `dates` date NOT NULL,
  `id` int(200) NOT NULL,
  `class` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table attendance.attend: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `attendance`.`attend`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contect` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(255) NOT NULL,
  `classteacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `contect`, `email`, `gender`, `dob`, `class`, `classteacher`) VALUES
(1, 'Johnson', 'kings clg', 2147483647, 'johnson01042001@gmail.com', 'Male', '2002-01-01', '2nd year', 'Mr.kumar'),
(2, 'Kumar', 'WGC, Road', 12345, 'johnson01042001@gmail.com', 'Male', '0000-00-00', '2nd year', 'Mr.kumar'),
(3, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '0000-00-00', '2nd year', 'Mr.kumar'),
(4, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '2000-07-15', '2nd year', 'Mr.kumar'),
(5, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '2020-07-04', '2nd year', 'Mr.kumar'),
(6, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '2020-07-04', '2nd year', 'Mr.kumar'),
(7, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '2020-07-04', '2nd year', 'Mr.kumar'),
(8, 'Johnson', 'WGC, Road', 2147483647, 'johnson01042001@gmail.com', 'Male', '2020-07-03', '2nd year', 'Mr.kumar'),
(9, 'Johnson', 'kings clg', 2147483647, 'johnson01042001@gmail.com', 'Male', '2000-07-04', '2nd year', 'Mr.kumar');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contect` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `subject`, `address`, `contect`, `email`, `gender`, `age`, `password`) VALUES
(1, 'Kumar', 'EVS', 'WGC, Road', '2147483647', 'johnson01042001@gmail.com', 'Male', 20, '12345'),
(2, 'Boss', 'Tamil', 'WGC, Road', '12345', 'johnson01042001@gmail.com', 'Male', 20, '123'),
(3, 'Lazy', 'Maths', 'WGC, Road', '9123545421', 'johnson01042001@gmail.com', 'Male', 20, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
