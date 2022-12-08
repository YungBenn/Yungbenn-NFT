-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 02:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yungbenn_nft`
--

-- --------------------------------------------------------

--
-- Table structure for table `nfts`
--

CREATE TABLE `nfts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `foto_nft` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nfts`
--

INSERT INTO `nfts` (`id`, `name`, `creator`, `owner`, `description`, `price`, `foto_nft`) VALUES
(1, 'quiz wad', 'yungbenn_', 'itsbenbenn', 'This is a work of a famous artist, he made this work inspired by some of his friends. And this is one of his works called \"Mr. Haji\".', 10, 'nft1.png');

-- --------------------------------------------------------

--
-- Table structure for table `nft_acc`
--

CREATE TABLE `nft_acc` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft_acc`
--

INSERT INTO `nft_acc` (`id`, `username`, `email`, `password`, `no_hp`) VALUES
(1, 'itsbenbenn', 'adisuryo22@gmail.com', 'itsbenbenn', '123123'),
(2, 'admin', 'admin@gmail.com', 'admin', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nfts`
--
ALTER TABLE `nfts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nft_acc`
--
ALTER TABLE `nft_acc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nfts`
--
ALTER TABLE `nfts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nft_acc`
--
ALTER TABLE `nft_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
