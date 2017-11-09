-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 02:51 PM
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
-- Table structure for table `defenders_1`
--

CREATE TABLE `defenders_1` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_1`
--

INSERT INTO `defenders_1` (`defender_id`, `player_id`) VALUES
(4, 2007),
(5, 2010),
(6, 2013),
(7, 2006);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_2`
--

CREATE TABLE `defenders_2` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `defenders_3`
--

CREATE TABLE `defenders_3` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_3`
--

INSERT INTO `defenders_3` (`defender_id`, `player_id`) VALUES
(1, 2004),
(2, 2006),
(3, 2010),
(4, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_4`
--

CREATE TABLE `defenders_4` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_4`
--

INSERT INTO `defenders_4` (`defender_id`, `player_id`) VALUES
(1, 2002),
(2, 2024),
(3, 2012),
(4, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_5`
--

CREATE TABLE `defenders_5` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_5`
--

INSERT INTO `defenders_5` (`defender_id`, `player_id`) VALUES
(1, 2007),
(2, 2014),
(3, 2010),
(4, 2005);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_6`
--

CREATE TABLE `defenders_6` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_6`
--

INSERT INTO `defenders_6` (`defender_id`, `player_id`) VALUES
(1, 2009),
(2, 2012),
(3, 2014),
(4, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_7`
--

CREATE TABLE `defenders_7` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_7`
--

INSERT INTO `defenders_7` (`defender_id`, `player_id`) VALUES
(1, 2005),
(2, 2004),
(3, 2024),
(4, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_8`
--

CREATE TABLE `defenders_8` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_8`
--

INSERT INTO `defenders_8` (`defender_id`, `player_id`) VALUES
(1, 2005),
(2, 2010),
(3, 2013),
(4, 2004);

-- --------------------------------------------------------

--
-- Table structure for table `defenders_9`
--

CREATE TABLE `defenders_9` (
  `defender_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defenders_9`
--

INSERT INTO `defenders_9` (`defender_id`, `player_id`) VALUES
(1, 2002),
(2, 2010),
(3, 2027),
(4, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `defenders_1`
--
ALTER TABLE `defenders_1`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_2`
--
ALTER TABLE `defenders_2`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_3`
--
ALTER TABLE `defenders_3`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_4`
--
ALTER TABLE `defenders_4`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_5`
--
ALTER TABLE `defenders_5`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_6`
--
ALTER TABLE `defenders_6`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_7`
--
ALTER TABLE `defenders_7`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_8`
--
ALTER TABLE `defenders_8`
  ADD PRIMARY KEY (`defender_id`);

--
-- Indexes for table `defenders_9`
--
ALTER TABLE `defenders_9`
  ADD PRIMARY KEY (`defender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `defenders_1`
--
ALTER TABLE `defenders_1`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `defenders_2`
--
ALTER TABLE `defenders_2`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `defenders_3`
--
ALTER TABLE `defenders_3`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_4`
--
ALTER TABLE `defenders_4`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_5`
--
ALTER TABLE `defenders_5`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_6`
--
ALTER TABLE `defenders_6`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_7`
--
ALTER TABLE `defenders_7`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_8`
--
ALTER TABLE `defenders_8`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `defenders_9`
--
ALTER TABLE `defenders_9`
  MODIFY `defender_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
