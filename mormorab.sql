-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 12:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mormorab`
--
CREATE DATABASE IF NOT EXISTS `mormorab` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `mormorab`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladressbok`
--

CREATE TABLE `tbladressbok` (
  `id` int(11) NOT NULL,
  `förnamn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `efternamn` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `postnummer` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `ort` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `tbladressbok`
--

INSERT INTO `tbladressbok` (`id`, `förnamn`, `efternamn`, `postnummer`, `ort`, `telefon`) VALUES
(1, 'Omar', 'Slik', '79176', 'Falun', '0790763259'),
(4, 'Ulf', 'Lärare', '234423', 'Borlänge', '4024204'),
(7, 'Kazem', 'vahidi', '422442', 'Sala', '4024204'),
(8, 'omran', 'skkk', '63422', 'Sala', '075443333'),
(9, 'ove', 'andersson', '323323', 'Borlänge', '042323223');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladressbok`
--
ALTER TABLE `tbladressbok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladressbok`
--
ALTER TABLE `tbladressbok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
