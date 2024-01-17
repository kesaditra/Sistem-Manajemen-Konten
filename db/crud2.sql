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
-- Database: `crud2`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesertaprgrs`
--

CREATE TABLE `pesertaprgrs` (
  `id_pesertaprgrs` int(11) NOT NULL,
  `namakntnprgrs` varchar(50) NOT NULL,
  `gambarkntnprgrs` varchar(50) NOT NULL,
  `linkkntnprgrs` varchar(50) NOT NULL,
  `jeniskntnprgrs` char(13) NOT NULL,
  `pembuatkntnprgrs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pesertaprgrs`
--

INSERT INTO `pesertaprgrs` (`id_pesertaprgrs`, `namakntnprgrs`, `gambarkntnprgrs`, `linkkntnprgrs`, `jeniskntnprgrs`, `pembuatkntnprgrs`) VALUES
(22, 'asdas', 'addasd', 'asasdasdads', 'adsadsasd', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesertaprgrs`
--
ALTER TABLE `pesertaprgrs`
  ADD PRIMARY KEY (`id_pesertaprgrs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesertaprgrs`
--
ALTER TABLE `pesertaprgrs`
  MODIFY `id_pesertaprgrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
