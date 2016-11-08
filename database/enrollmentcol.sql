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
-- Table structure for table `enrollmentcol`
--

CREATE TABLE `enrollmentcol` (
  `student` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollmentcol`
--

INSERT INTO `enrollmentcol` (`student`, `faculty`, `subject`, `time`) VALUES
('barudwale20@gmail.com', 'nandhini.rohini@gmail.com', 'Networking', 'Evening'),
('barudwale20@gmail.com', 'gbarudwale@gmail.com', 'EVS', 'Evening'),
('vishals@gmail.com', 'nandhini.rohini@gmail.com', 'CS', 'Morning');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
