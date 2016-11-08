-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 05:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gettutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `studdetails`
--

CREATE TABLE `studdetails` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(15) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studdetails`
--

INSERT INTO `studdetails` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`) VALUES
('abcd', 'abc', 'a@gmail.com', 'ASAS'),
('aaaa', 'bbbb', 'ababc@gmail.com', 'abvc'),
('abc', 'xyz', 'abxy@gmail.com', 'abcd'),
('Shubham', 'Barudwale', 'barudwale20@gmail.com', 'apple1234'),
('Sandeep', 'Daniel', 'sdaniel@gmail.com', 'qwerty'),
('Tanmay', 'Bhatt', 'tanbhat@gmail.com', 'asdfgh'),
('Vishal', 'Singh', 'vishals@gmail.com', 'vsingh97'),
('Thomas', 'Xeviar', 'XeviarT1@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studdetails`
--
ALTER TABLE `studdetails`
  ADD PRIMARY KEY (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
