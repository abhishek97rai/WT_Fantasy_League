-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 09:22 PM
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
-- Database: `clubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_1`
--

CREATE TABLE `club_1` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_1`
--

INSERT INTO `club_1` (`shirt`, `player_id`) VALUES
(2, 2005),
(3, 2025),
(4, 2013),
(5, 2028),
(6, 1008),
(7, 3019),
(8, 3029),
(9, 3012),
(10, 4023),
(11, 4028),
(12, 4021);

-- --------------------------------------------------------

--
-- Table structure for table `club_2`
--

CREATE TABLE `club_2` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_3`
--

CREATE TABLE `club_3` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_4`
--

CREATE TABLE `club_4` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_5`
--

CREATE TABLE `club_5` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_6`
--

CREATE TABLE `club_6` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_7`
--

CREATE TABLE `club_7` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_8`
--

CREATE TABLE `club_8` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_9`
--

CREATE TABLE `club_9` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_10`
--

CREATE TABLE `club_10` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_11`
--

CREATE TABLE `club_11` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_12`
--

CREATE TABLE `club_12` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_13`
--

CREATE TABLE `club_13` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_14`
--

CREATE TABLE `club_14` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_15`
--

CREATE TABLE `club_15` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_16`
--

CREATE TABLE `club_16` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_17`
--

CREATE TABLE `club_17` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_18`
--

CREATE TABLE `club_18` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_19`
--

CREATE TABLE `club_19` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club_20`
--

CREATE TABLE `club_20` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_1`
--
ALTER TABLE `club_1`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_2`
--
ALTER TABLE `club_2`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_3`
--
ALTER TABLE `club_3`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_4`
--
ALTER TABLE `club_4`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_5`
--
ALTER TABLE `club_5`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_6`
--
ALTER TABLE `club_6`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_7`
--
ALTER TABLE `club_7`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_8`
--
ALTER TABLE `club_8`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_9`
--
ALTER TABLE `club_9`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_10`
--
ALTER TABLE `club_10`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_11`
--
ALTER TABLE `club_11`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_12`
--
ALTER TABLE `club_12`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_13`
--
ALTER TABLE `club_13`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_14`
--
ALTER TABLE `club_14`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_15`
--
ALTER TABLE `club_15`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_16`
--
ALTER TABLE `club_16`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_17`
--
ALTER TABLE `club_17`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_18`
--
ALTER TABLE `club_18`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_19`
--
ALTER TABLE `club_19`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `club_20`
--
ALTER TABLE `club_20`
  ADD PRIMARY KEY (`shirt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_1`
--
ALTER TABLE `club_1`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `club_2`
--
ALTER TABLE `club_2`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_3`
--
ALTER TABLE `club_3`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_4`
--
ALTER TABLE `club_4`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_5`
--
ALTER TABLE `club_5`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_6`
--
ALTER TABLE `club_6`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_7`
--
ALTER TABLE `club_7`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_8`
--
ALTER TABLE `club_8`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_9`
--
ALTER TABLE `club_9`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_10`
--
ALTER TABLE `club_10`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_11`
--
ALTER TABLE `club_11`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_12`
--
ALTER TABLE `club_12`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_13`
--
ALTER TABLE `club_13`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_14`
--
ALTER TABLE `club_14`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_15`
--
ALTER TABLE `club_15`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_16`
--
ALTER TABLE `club_16`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_17`
--
ALTER TABLE `club_17`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_18`
--
ALTER TABLE `club_18`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_19`
--
ALTER TABLE `club_19`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `club_20`
--
ALTER TABLE `club_20`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
