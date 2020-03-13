-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 02:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `pemail` varchar(128) CHARACTER SET latin1 NOT NULL,
  `pphone` varchar(10) CHARACTER SET latin1 NOT NULL,
  `doctor` varchar(128) CHARACTER SET latin1 NOT NULL,
  `dept` varchar(128) CHARACTER SET latin1 NOT NULL,
  `ward` varchar(128) CHARACTER SET latin1 NOT NULL DEFAULT 'Ward D5',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`pemail`, `pphone`, `doctor`, `dept`, `ward`, `time`) VALUES
('abc@gmail.com', '2343564746', 'Dr. Ashutosh Singh', 'Neurology', 'Ward D5', '2020-03-13 10:39:05'),
('def@gmail.com', '6889347867', 'Dr. Avinash Aggarwal', 'Dental', 'Ward D5', '2020-03-13 11:11:38'),
('abc@gmail.com', '2343564746', 'Dr. Avinash Aggarwal', 'Neurology', 'Ward D5', '2020-03-13 11:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `phone`) VALUES
('Vrinda', 'abc@gmail.com', 'a123', '3456789120'),
('Riya', 'def@gmail.com', 'd456', '3278463784');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
