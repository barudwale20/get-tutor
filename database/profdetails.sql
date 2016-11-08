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
-- Table structure for table `profdetails`
--

CREATE TABLE `profdetails` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(15) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profdetails`
--

INSERT INTO `profdetails` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`) VALUES
('apple', 'Samsung', 'asam@dell.com', 'neww1'),
('bla', 'bla', 'bla@hh.com', 'ghjkl'),
('Dinesh', 'Barudwale', 'dineshbarudwale@gmail.com', 'asdfg'),
('Ganpati', 'Barudwale', 'gbarudwale@gmail.com', '123'),
('John', 'Ray', 'jray12@rediffmail.com', '12345'),
('Nandhini', 'Venkateh', 'nandhini.rohini@gmail.com', 'Roshini2003'),
('Rohan', 'Patil', 'rohan.patil@gmail.com', 'rp1990'),
('rrra', 'zdczc', 'rrza@ytc.com', 'fghf'),
('shubham', 'Barudwale', 'sbarudwale123@gmail.com', 'aploiu'),
('ggg', 'ddd', 'ss@gmail.om', 'ytry'),
('Tarun', 'Nagraja', 'tnt@gmail.com', 'wqe12'),
('Walter', 'White', 'waltw@gmail.com', 'breakingbad'),
('Yen', 'Shui', 'yenshui@rediffmail.com', 'ys1029');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profdetails`
--
ALTER TABLE `profdetails`
  ADD PRIMARY KEY (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
