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
-- Table structure for table `profcolsub`
--

CREATE TABLE `profcolsub` (
  `email` varchar(50) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  `Time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profcolsub`
--

INSERT INTO `profcolsub` (`email`, `Subject`, `Time`) VALUES
('rrza@ytc.com', 'ChemistryMechanicsNetworking', 'Afternoon'),
('bla@hh.com', 'EVSAstrophysics', 'Morning'),
('', '', ''),
('nandhini.rohini@gmail.com', 'MathsCSNetworking', 'MorningEvening'),
('yenshui@rediffmail.com', 'EVSLanguage', 'Afternoon'),
('waltw@gmail.com', 'Maths', 'Afternoon'),
('gbarudwale@gmail.com', 'MathsEVS', 'AfternoonEvening'),
('waltw@gmail.com', 'PhysicsChemistryBiology', 'Morning');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
