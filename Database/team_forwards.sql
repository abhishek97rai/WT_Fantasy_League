-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 12:37 AM
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
-- Table structure for table `forwards_1`
--

CREATE TABLE `forwards_1` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_1`
--

INSERT INTO `forwards_1` (`forward_id`, `player_id`) VALUES
(1, 4004),
(2, 4030),
(3, 4018);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_2`
--

CREATE TABLE `forwards_2` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forwards_3`
--

CREATE TABLE `forwards_3` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_3`
--

INSERT INTO `forwards_3` (`forward_id`, `player_id`) VALUES
(3, 4008),
(4, 4025),
(6, 4015);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_4`
--

CREATE TABLE `forwards_4` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_4`
--

INSERT INTO `forwards_4` (`forward_id`, `player_id`) VALUES
(1, 4008),
(2, 4029),
(3, 4020);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_5`
--

CREATE TABLE `forwards_5` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_5`
--

INSERT INTO `forwards_5` (`forward_id`, `player_id`) VALUES
(1, 4001),
(2, 4018),
(3, 4004);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_6`
--

CREATE TABLE `forwards_6` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_6`
--

INSERT INTO `forwards_6` (`forward_id`, `player_id`) VALUES
(1, 4004),
(2, 4022),
(3, 4020);

-- --------------------------------------------------------

--
-- Table structure for table `forwards_7`
--

CREATE TABLE `forwards_7` (
  `forward_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forwards_7`
--

INSERT INTO `forwards_7` (`forward_id`, `player_id`) VALUES
(1, 4019),
(2, 4007),
(3, 4022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forwards_1`
--
ALTER TABLE `forwards_1`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_2`
--
ALTER TABLE `forwards_2`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_3`
--
ALTER TABLE `forwards_3`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_4`
--
ALTER TABLE `forwards_4`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_5`
--
ALTER TABLE `forwards_5`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_6`
--
ALTER TABLE `forwards_6`
  ADD PRIMARY KEY (`forward_id`);

--
-- Indexes for table `forwards_7`
--
ALTER TABLE `forwards_7`
  ADD PRIMARY KEY (`forward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forwards_1`
--
ALTER TABLE `forwards_1`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_2`
--
ALTER TABLE `forwards_2`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forwards_3`
--
ALTER TABLE `forwards_3`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `forwards_4`
--
ALTER TABLE `forwards_4`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_5`
--
ALTER TABLE `forwards_5`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_6`
--
ALTER TABLE `forwards_6`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forwards_7`
--
ALTER TABLE `forwards_7`
  MODIFY `forward_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
