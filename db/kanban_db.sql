-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 11:51 AM
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
-- Database: `kanban_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'kesaditra', 'kesakesa', ''),
(2, 'kesaditra12', '$2y$10$UE6a2hqoXJq4NQswVjuX/.SM1ao3E8kSFvClGnobwEw', ''),
(5, 'elsa', '$2y$10$VkP2ZbEDwJxK1us.I166ruWmg13sIxJ8kwOKtUbfM09', ''),
(6, 'elsaa', '$2y$10$6S/3RVuFRVVQcL2lb8Kf2Oe9E2zC8L1ejaIUodIOUFu', ''),
(7, 'elsaa12', '$2y$10$C3lfyniI7SZMi670MhdFke85dOUvSpBUWTqwwS.hiF3', ''),
(8, 'kesakesa', '$2y$10$uSVpyk/keQedOuPTwlP1JeheQmaUl9/Oy8OJjdsXVQv', ''),
(12, 'kesaditra123', '$2y$10$GI8HPK2ulu0fZff0vblCP.yiRcKBWm4jSSo2k.09YYs', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
