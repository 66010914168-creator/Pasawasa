-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 11:16 AM
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
-- Database: `4168db`
--
CREATE DATABASE IF NOT EXISTS `4168db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4168db`;

-- --------------------------------------------------------

--
-- Table structure for table `appilication`
--

CREATE TABLE `appilication` (
  `r_position` varchar(50) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_birthday` date NOT NULL,
  `r_height` int(3) NOT NULL,
  `r_phone` varchar(15) NOT NULL,
  `r_education` varchar(50) NOT NULL,
  `r_major` varchar(100) NOT NULL,
  `r_skill` text NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(20) NOT NULL,
  `r_height` int(11) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_major` varchar(100) NOT NULL,
  `r_color` varchar(50) NOT NULL,
  `r_birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_major`, `r_color`, `r_birthday`) VALUES
(3, 'พรรษวสา กวนขุนทด', '0613134516', 160, 'สาสา', 'การจัดการ', '#b861ff', '2004-02-20'),
(4, 'พรรษวสา กวนขุนทด', '0613134516', 160, 'สาสา', 'การจัดการ', '#ffb752', '2004-09-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
