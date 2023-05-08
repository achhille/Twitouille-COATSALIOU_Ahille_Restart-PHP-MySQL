-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2023 at 09:03 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitouille`
--

-- --------------------------------------------------------

--
-- Table structure for table `twout`
--

CREATE TABLE `twout` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `twout` varchar(280) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `twout`
--

INSERT INTO `twout` (`id`, `name`, `twout`, `date`) VALUES
(3, 'einsetin', 'c moi le albere', '2023-05-08 14:42:40'),
(10, 'qergqer', 'gqergq', '2023-05-08 16:34:21'),
(13, 'Achille', 'prout', '2023-05-08 17:24:45'),
(28, 'Achille', 'Bonjour etc.', '2023-05-08 21:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`) VALUES
(14, 'dtyjdty', 'jdt@gmail.Com', 'rqeg'),
(15, 'Achille', 'achille@achille.com', 'aerf'),
(16, 'AChille', 'omqiuehrglqeurg@qetoih.com', 'rqeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twout`
--
ALTER TABLE `twout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twout`
--
ALTER TABLE `twout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
