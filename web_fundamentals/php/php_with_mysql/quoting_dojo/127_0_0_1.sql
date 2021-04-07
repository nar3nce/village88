-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 05:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quoting_dojo`
--
CREATE DATABASE IF NOT EXISTS `quoting_dojo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quoting_dojo`;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `quote`, `date`) VALUES
(1, 'Dr. Seuss', '“You’re off to great places, today is your day. Your mountain is waiting, so get on\r\nyour way.”', '2021-04-05'),
(2, 'Mickey Rooney', '“You always pass failure on the way\r\nto success.”', '2021-04-05'),
(3, 'Wolfgang Riebe', '“No one is perfect - that’s why pencils have erasers.”', '2021-04-05'),
(4, 'Bonnie Blair', '“Winning doesn’t always mean being first. Winning means you’re doing better than you’ve\r\ndone before.”', '2021-04-05'),
(5, 'Nelson Mandela', '“It always seems impossible until it\r\nis done.”', '2021-04-05'),
(6, 'Helen Keller', '“Keep your face to the sunshine and you cannot see a shadow.”', '2021-04-05'),
(7, 'narence valencia', '“Positive thinking will let you do everything better than negative thinking will.”', '2021-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
