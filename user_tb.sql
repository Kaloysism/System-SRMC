-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 08:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `cont` varchar(50) NOT NULL DEFAULT '',
  `age` varchar(50) NOT NULL DEFAULT '',
  `Reg_date` date DEFAULT NULL,
  `Pass` varchar(50) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `verifiedEmail` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL DEFAULT '',
  `Code` text NOT NULL,
  `token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `email`, `first_name`, `last_name`, `gender`, `address`, `cont`, `age`, `Reg_date`, `Pass`, `full_name`, `picture`, `verifiedEmail`, `token`, `Code`, `token_expiry`) VALUES
(2, 'laguinlinastovezajocar@gmail.com', 'John Carlo', 'Astoveza', 'Male', '5926 blk 4 lot 5 Venust st. Sikat Araw HOA Nagpayo', '09773555302', '21', '2023-09-18', '2af9b1ba42dc5eb01743e6b3759b6e4b', 'John Carlo Laguinlin Astoveza', '', 0, 'd47bb0e7baf07f7e59d8a54075c8d96840eb06c6ca31e01608d051d80475d695', '', '2023-09-20 20:21:13'),
(3, 'johncarlo.astoveza@my.jru.edu', 'John Carlo', 'Astoveza', 'Female', '5926 blk 4 lot 5 Venust st. Sikat Araw HOA Nagpayo', '09163555142', '21', '2023-09-18', 'd0aabe9a362cb2712ee90e04810902f3', 'John Carlo Laguinlin Astoveza', '', 0, '1880fe993d3594fd6195edcf2838dfe8e41352803abfa28a75c6d5e8a4357c11', '', '2023-09-20 20:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
