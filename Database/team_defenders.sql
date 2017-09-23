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
-- Database: `team_defenders`
--

-- --------------------------------------------------------

--
-- Table structure for table `defenders_2015130056`
--

CREATE TABLE `defenders_2015130056` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_2015130056`
--

INSERT INTO `defenders_2015130056` (`defender_id`, `player_id`) VALUES
(5, 2007),
(6, 2003),
(9, 2002),
(10, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_2015130061`
--

CREATE TABLE `defenders_2015130061` (
  `defender_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_2015130061`
--

INSERT INTO `defenders_2015130061` (`defender_id`, `player_id`) VALUES
(1, 2003),
(2, 2004),
(3, 2007),
(4, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_2015130066`
--

CREATE TABLE `defenders_2015130066` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defenders_2015130056`
--
ALTER TABLE `defenders_2015130056`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_2015130061`
--
ALTER TABLE `defenders_2015130061`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_2015130066`
--
ALTER TABLE `defenders_2015130066`
  ADD PRIMARY KEY (`defender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defenders_2015130056`
--
ALTER TABLE `defenders_2015130056`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `defenders_2015130061`
--
ALTER TABLE `defenders_2015130061`
  MODIFY `defender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_2015130066`
--
ALTER TABLE `defenders_2015130066`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
