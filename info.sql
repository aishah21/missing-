-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 01:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miss`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `description` varchar(450) NOT NULL,
  `pic` text NOT NULL,
  `location` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name_it` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `phone`, `description`, `pic`, `location`, `type`, `name_it`) VALUES
('rr', 12345, 'qwertyhgfd', 'images.png', '1234567', 'ppeople', 'search'),
('rr', 12345, 'qwertyhgfd', 'images.png', '1234567', 'ppeople', 'search'),
('tttt', 12345, 'wertyuikjhgfd', 'shopping2-01-512.png', '45678h', 'object', 'search'),
('tttt', 12345, 'wertyuikjhgfd', 'shopping2-01-512.png', '45678h', 'object', 'search'),
('xsxsdsdfffdx', 2147483647, 'dsdsdsdsd', '', '', 'People', 'Lost it'),
('xsxsdsdfffdx', 2147483647, 'dsdsdsdsd', '', '', 'People', 'Lost it'),
('', 0, '', 'images/unnamed.jpg', '', 'People', 'Lost it'),
('Ahmad', 2147483647, 'yunkml', 'images/Capture.PNG', '', 'People', 'Found it'),
('yugujbaxkn,', 2147483647, 'vhj', 'images/Capture.PNG', '', 'People', 'Lost it'),
('Ahmad', 2147483647, 'sss', 'images/Capture.PNG', '', 'People', 'Lost it');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
