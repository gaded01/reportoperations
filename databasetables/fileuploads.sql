-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 05:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportoperations`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileuploads`
--

CREATE TABLE `fileuploads` (
  `id` int(11) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(30) NOT NULL,
  `office_id` varchar(30) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `filename` varchar(125) NOT NULL,
  `filepath` varchar(125) NOT NULL,
  `year` varchar(30) NOT NULL,
  `role_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileuploads`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileuploads`
--
ALTER TABLE `fileuploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileuploads`
--
ALTER TABLE `fileuploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
