-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2022 at 03:09 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventures`
--

-- --------------------------------------------------------

--
-- Table structure for table `Adventures`
--

CREATE TABLE `Adventures` (
  `id` int(11) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `tripdate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Adventures`
--

INSERT INTO `Adventures` (`id`, `heading`, `tripdate`, `duration`, `summary`) VALUES
(18, 'Saint John River Expedition', '2022-11-07', 2, 'This is a two day adventure down the Saint John River in New Brunswick.'),
(19, 'Miramichi River Expedition', '2022-11-14', 3, 'This is a three day canoeing adventure down the Miramichi River in New Brunswick.'),
(20, 'Restigouche River Expedition', '2022-11-21', 4, 'This is a three day kayaking adventure down the Restigouche River in New Brunswick.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Adventures`
--
ALTER TABLE `Adventures`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Adventures`
--
ALTER TABLE `Adventures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
