-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 02:53 PM
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
-- Database: `team_mids`
--

-- --------------------------------------------------------

--
-- Table structure for table `mids_1`
--

CREATE TABLE `mids_1` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_1`
--

INSERT INTO `mids_1` (`mid_id`, `player_id`) VALUES
(1, 3001),
(2, 3011),
(3, 3022);

-- --------------------------------------------------------

--
-- Table structure for table `mids_2`
--

CREATE TABLE `mids_2` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mids_3`
--

CREATE TABLE `mids_3` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_3`
--

INSERT INTO `mids_3` (`mid_id`, `player_id`) VALUES
(1, 3004),
(2, 3022),
(3, 3021);

-- --------------------------------------------------------

--
-- Table structure for table `mids_4`
--

CREATE TABLE `mids_4` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_4`
--

INSERT INTO `mids_4` (`mid_id`, `player_id`) VALUES
(1, 3006),
(3, 3020),
(4, 3023);

-- --------------------------------------------------------

--
-- Table structure for table `mids_5`
--

CREATE TABLE `mids_5` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_5`
--

INSERT INTO `mids_5` (`mid_id`, `player_id`) VALUES
(1, 3020),
(2, 3002),
(4, 3007);

-- --------------------------------------------------------

--
-- Table structure for table `mids_6`
--

CREATE TABLE `mids_6` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_6`
--

INSERT INTO `mids_6` (`mid_id`, `player_id`) VALUES
(1, 3012),
(2, 3020),
(3, 3027);

-- --------------------------------------------------------

--
-- Table structure for table `mids_7`
--

CREATE TABLE `mids_7` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_7`
--

INSERT INTO `mids_7` (`mid_id`, `player_id`) VALUES
(1, 3005),
(2, 3024),
(3, 3018);

-- --------------------------------------------------------

--
-- Table structure for table `mids_8`
--

CREATE TABLE `mids_8` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_8`
--

INSERT INTO `mids_8` (`mid_id`, `player_id`) VALUES
(1, 3003),
(2, 3017),
(3, 3019);

-- --------------------------------------------------------

--
-- Table structure for table `mids_9`
--

CREATE TABLE `mids_9` (
  `mid_id` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mids_9`
--

INSERT INTO `mids_9` (`mid_id`, `player_id`) VALUES
(1, 3039),
(2, 3029),
(3, 3008);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mids_1`
--
ALTER TABLE `mids_1`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_2`
--
ALTER TABLE `mids_2`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_3`
--
ALTER TABLE `mids_3`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_4`
--
ALTER TABLE `mids_4`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_5`
--
ALTER TABLE `mids_5`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_6`
--
ALTER TABLE `mids_6`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_7`
--
ALTER TABLE `mids_7`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_8`
--
ALTER TABLE `mids_8`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `mids_9`
--
ALTER TABLE `mids_9`
  ADD PRIMARY KEY (`mid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mids_1`
--
ALTER TABLE `mids_1`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mids_2`
--
ALTER TABLE `mids_2`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mids_3`
--
ALTER TABLE `mids_3`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mids_4`
--
ALTER TABLE `mids_4`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mids_5`
--
ALTER TABLE `mids_5`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mids_6`
--
ALTER TABLE `mids_6`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mids_7`
--
ALTER TABLE `mids_7`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mids_8`
--
ALTER TABLE `mids_8`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mids_9`
--
ALTER TABLE `mids_9`
  MODIFY `mid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
