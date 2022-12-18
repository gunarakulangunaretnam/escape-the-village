-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 02:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escape-the-village`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_data`
--

CREATE TABLE `game_data` (
  `auto_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `finished_levels` int(100) NOT NULL,
  `total_scores` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_data`
--

INSERT INTO `game_data` (`auto_id`, `email`, `finished_levels`, `total_scores`) VALUES
(6, 'yathurshan@gmail.com', 2, 500),
(7, 'rishanthini@gmail.com', 6, 13000),
(8, 'prajeevan23@gmail.com', 4, 7500),
(9, 'rajkiran76@gmail.com', 3, 1000),
(10, 'sabeskhanth@gmail.com', 5, 8200),
(11, 'macasewary@gmail.com', 1, 0),
(14, 'gunarakulan@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `auto_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `otp_number` varchar(50) NOT NULL,
  `activated_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`auto_id`, `name`, `email`, `password`, `otp_number`, `activated_status`) VALUES
(7, 'Yathusan', 'yathurshan@gmail.com', 'yathu@12345', '[VERIFIED]', '[TRUE]'),
(8, 'Rishanthini', 'rishanthini@gmail.com', 'rishanthini@1998', '[VERIFIED]', '[TRUE]'),
(9, 'Prajeevan', 'prajeevan23@gmail.com', 'prajeevan@1234', '[VERIFIED]', '[TRUE]'),
(10, 'Raj Kiran', 'rajkiran76@gmail.com', 'raj1234567', '[VERIFIED]', '[TRUE]'),
(11, 'Sabeshkhanth', 'sabeskhanth@gmail.com', 'sabe@12345', '[VERIFIED]', '[TRUE]'),
(12, 'Macasewary', 'macasewary@gmail.com', 'maca@12345', '[VERIFIED]', '[TRUE]'),
(15, 'Gunarakulan', 'gunarakulan@gmail.com', 'guna12345', '[VERIFIED]', '[TRUE]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_data`
--
ALTER TABLE `game_data`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`auto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_data`
--
ALTER TABLE `game_data`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
