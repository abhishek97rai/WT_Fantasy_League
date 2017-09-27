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
-- Database: `team_goalies`
--

-- --------------------------------------------------------

--
-- Table structure for table `goalies_1`
--

CREATE TABLE `goalies_1` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_1`
--

INSERT INTO `goalies_1` (`goalie_id`, `player_id`) VALUES
(1, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_2`
--

CREATE TABLE `goalies_2` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_2`
--

INSERT INTO `goalies_2` (`goalie_id`, `player_id`) VALUES
(1, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_3`
--

CREATE TABLE `goalies_3` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_3`
--

INSERT INTO `goalies_3` (`goalie_id`, `player_id`) VALUES
(1, 1006);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_4`
--

CREATE TABLE `goalies_4` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_4`
--

INSERT INTO `goalies_4` (`goalie_id`, `player_id`) VALUES
(1, 1009);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_5`
--

CREATE TABLE `goalies_5` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_5`
--

INSERT INTO `goalies_5` (`goalie_id`, `player_id`) VALUES
(2, 1009);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_6`
--

CREATE TABLE `goalies_6` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_6`
--

INSERT INTO `goalies_6` (`goalie_id`, `player_id`) VALUES
(1, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `goalies_7`
--

CREATE TABLE `goalies_7` (
  `goalie_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goalies_7`
--

INSERT INTO `goalies_7` (`goalie_id`, `player_id`) VALUES
(1, 1003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goalies_1`
--
ALTER TABLE `goalies_1`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_2`
--
ALTER TABLE `goalies_2`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_3`
--
ALTER TABLE `goalies_3`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_4`
--
ALTER TABLE `goalies_4`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_5`
--
ALTER TABLE `goalies_5`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_6`
--
ALTER TABLE `goalies_6`
  ADD PRIMARY KEY (`goalie_id`);

--
-- Indexes for table `goalies_7`
--
ALTER TABLE `goalies_7`
  ADD PRIMARY KEY (`goalie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goalies_1`
--
ALTER TABLE `goalies_1`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goalies_2`
--
ALTER TABLE `goalies_2`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goalies_3`
--
ALTER TABLE `goalies_3`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goalies_4`
--
ALTER TABLE `goalies_4`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goalies_5`
--
ALTER TABLE `goalies_5`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `goalies_6`
--
ALTER TABLE `goalies_6`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `goalies_7`
--
ALTER TABLE `goalies_7`
  MODIFY `goalie_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
