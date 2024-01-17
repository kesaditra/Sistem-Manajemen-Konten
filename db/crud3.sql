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
-- Database: `crud3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesertarls`
--

CREATE TABLE `pesertarls` (
  `id_pesertarls` int(11) NOT NULL,
  `namakntnrls` varchar(50) NOT NULL,
  `gambarkntnrls` varchar(50) NOT NULL,
  `linkkntnrls` varchar(50) NOT NULL,
  `jeniskntnrls` char(13) NOT NULL,
  `pembuatkntnrls` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pesertarls`
--

INSERT INTO `pesertarls` (`id_pesertarls`, `namakntnrls`, `gambarkntnrls`, `linkkntnrls`, `jeniskntnrls`, `pembuatkntnrls`) VALUES
(12, 'asdadsad', 'adsad', 'asdasd', 'asdads', 'asdasdsda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesertarls`
--
ALTER TABLE `pesertarls`
  ADD PRIMARY KEY (`id_pesertarls`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesertarls`
--
ALTER TABLE `pesertarls`
  MODIFY `id_pesertarls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
