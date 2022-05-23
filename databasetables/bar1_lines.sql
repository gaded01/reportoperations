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
-- Table structure for table `bar1_lines`
--

CREATE TABLE `bar1_lines` (
  `id` int(11) NOT NULL,
  `row_title` varchar(255) NOT NULL,
  `uacs_code` varchar(255) NOT NULL,
  `pt_q1` varchar(255) NOT NULL,
  `pt_q2` varchar(255) NOT NULL,
  `pt_q3` varchar(255) NOT NULL,
  `pt_q4` varchar(255) NOT NULL,
  `pt_total` varchar(255) NOT NULL,
  `pa_q1` varchar(255) NOT NULL,
  `pa_q2` varchar(255) NOT NULL,
  `pa_q3` varchar(255) NOT NULL,
  `pa_q4` varchar(255) NOT NULL,
  `pa_total` varchar(255) NOT NULL,
  `variance` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `row` varchar(30) NOT NULL,
  `campus_id` varchar(255) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `unique_id` varchar(30) NOT NULL,
  `row_count` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bar1_lines`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bar1_lines`
--
ALTER TABLE `bar1_lines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bar1_lines`
--
ALTER TABLE `bar1_lines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
