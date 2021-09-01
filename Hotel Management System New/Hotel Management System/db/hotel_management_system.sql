-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 09:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxtable`
--

CREATE TABLE `ajaxtable` (
  `id` int(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajaxtable`
--

INSERT INTO `ajaxtable` (`id`, `checkin`, `checkout`) VALUES
(1, '2020-09-15', '2020-09-16'),
(2, '2020-09-01', '2020-09-10'),
(3, '2020-09-23', '2020-09-25'),
(4, '2020-09-01', '2020-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(90) NOT NULL,
  `room` varchar(100) NOT NULL,
  `bookdate` date NOT NULL,
  `checkout` date NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `room`, `bookdate`, `checkout`, `phone`, `email`, `pay`) VALUES
(1, 'Singleroom', '2020-09-02', '2020-09-03', 1715490262, 'faria@gmail.com', 'card'),
(2, 'double', '2020-10-08', '2020-11-05', 1704620011, 'faria@gmail.com', 'card'),
(3, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(4, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(5, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(6, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(7, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(8, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash'),
(9, 'hny', '2020-10-07', '2020-10-09', 1715490262, 'jakia@gmail.com', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(40) NOT NULL,
  `method` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(20) NOT NULL,
  `code` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `method`, `room`, `name`, `number`, `code`, `date`) VALUES
(1, 'cash', 'single', 'faria', 9876, 8976, '2020-09-30'),
(2, 'cash', 'single', 'faria', 9876, 8976, '2020-09-30'),
(3, 'cash', 'hny', 'khjgh', 9567, 2345, '2020-10-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxtable`
--
ALTER TABLE `ajaxtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxtable`
--
ALTER TABLE `ajaxtable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
