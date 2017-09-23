-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 09:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_forwards`
--

-- --------------------------------------------------------

--
-- Table structure for table `forwards_2015130056`
--

CREATE TABLE `forwards_2015130056` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_2015130056`
--

INSERT INTO `forwards_2015130056` (`forward_id`, `player_id`) VALUES
(1, 4004),
(2, 4020),
(3, 4030);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_2015130061`
--

CREATE TABLE `forwards_2015130061` (
  `forward_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_2015130061`
--

INSERT INTO `forwards_2015130061` (`forward_id`, `player_id`) VALUES
(1, 4004),
(2, 4015),
(3, 4027);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_2015130066`
--

CREATE TABLE `forwards_2015130066` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forwards_2015130056`
--
ALTER TABLE `forwards_2015130056`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_2015130061`
--
ALTER TABLE `forwards_2015130061`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_2015130066`
--
ALTER TABLE `forwards_2015130066`
  ADD PRIMARY KEY (`forward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forwards_2015130056`
--
ALTER TABLE `forwards_2015130056`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_2015130061`
--
ALTER TABLE `forwards_2015130061`
  MODIFY `forward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_2015130066`
--
ALTER TABLE `forwards_2015130066`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
