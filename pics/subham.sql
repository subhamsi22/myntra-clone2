-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2025 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subham`
--

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'saree', 600.00, 'best barsani saree in low cost', 'upload/one.jpg'),
(2, 'sport bag', 500.00, 'water ristance bag', 'upload/2nd.jpg'),
(3, 'formal', 2000.00, 'Formal wear', 'upload/3rd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discription` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `productname`, `price`, `discription`, `image`) VALUES
(1, 'under', 300.00, 'shoes', 'upload2/one.jpg'),
(2, 'under', 200.00, 'body lotion', 'upload2/2nd.jpg'),
(3, 'under', 300.00, 'oil', 'upload2/3rd.jpg'),
(4, 'under', 600.00, 'casual jens', 'upload2/4th.jpg'),
(5, 'under', 300.00, 'casual shorts', 'upload2/5th.jpg'),
(6, 'under', 400.00, 'headphone', 'upload2/6th.jpg'),
(7, 'under', 1000.00, 'bed sheet', 'upload2/7th.jpg'),
(8, 'under', 600.00, 'lip bam', 'upload2/8th.jpg'),
(9, 'under', 600.00, 'conditioner', 'upload2/10th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data3`
--

CREATE TABLE `data3` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `number_price` decimal(10,2) DEFAULT NULL,
  `discriptionn` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data3`
--

INSERT INTO `data3` (`id`, `productname`, `number_price`, `discriptionn`, `image`) VALUES
(1, 'under', 600.00, 'supportive bra', 'upload3/one.jpg'),
(2, 'under', 700.00, 'day cream', 'upload3/2nd.jpg'),
(3, 'under', 30.00, 'thoothpaste', 'upload3/3rd.jpg'),
(4, 'under', 500.00, 'skin care', 'upload3/4th.jpg'),
(5, 'under', 600.00, 'daily watches', 'upload3/5th.jpg'),
(6, 'under', 500.00, 'kurti', 'upload3/6th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data4`
--

CREATE TABLE `data4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `dis` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data4`
--

INSERT INTO `data4` (`id`, `name`, `price`, `dis`, `image`) VALUES
(1, 'ethic wear', 600.00, 'shop now', 'upload4/one.jpg'),
(2, 'casual wear', 700.00, 'shop now', 'upload4/2th.jpg'),
(3, 'mens active', 800.00, 'shop now', 'upload4/3rd.jpg'),
(4, 'female active', 300.00, 'shop now', 'upload4/4th.jpg'),
(5, 'lounch wear', 500.00, 'shop now', 'upload4/5th.jpg'),
(6, 'inner wear', 200.00, 'shop now', 'upload4/6th.jpg'),
(7, 'watches', 2000.00, 'shop now', 'upload4/7tgh.jpg'),
(8, 'headphone', 1200.00, 'shop now', 'upload4/8th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data5`
--

CREATE TABLE `data5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `numebr` varchar(20) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `male` tinyint(1) DEFAULT NULL,
  `female` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data5`
--

INSERT INTO `data5` (`id`, `name`, `email`, `username`, `numebr`, `pass`, `male`, `female`) VALUES
(1, 'subham singh', 'sanjusinghkk98@gmail.com', 'subhamsi', '7319522543', 'Yoyokk@2', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data3`
--
ALTER TABLE `data3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data4`
--
ALTER TABLE `data4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data5`
--
ALTER TABLE `data5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data3`
--
ALTER TABLE `data3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data4`
--
ALTER TABLE `data4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data5`
--
ALTER TABLE `data5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
