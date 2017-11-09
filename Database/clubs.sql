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
(7, 3019),
(8, 3029),
(9, 3012),
(10, 4023),
(11, 4028),
(12, 4021),
(13, 1003);

-- --------------------------------------------------------

--
-- Table structure for table `club_2`
--

CREATE TABLE `club_2` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_2`
--

INSERT INTO `club_2` (`shirt`, `player_id`) VALUES
(1, 1006),
(2, 2010),
(3, 2024),
(4, 2019),
(5, 2020),
(6, 3014),
(7, 3015),
(9, 4008),
(10, 4010),
(11, 4001),
(12, 3039);

-- --------------------------------------------------------

--
-- Table structure for table `club_3`
--

CREATE TABLE `club_3` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_3`
--

INSERT INTO `club_3` (`shirt`, `player_id`) VALUES
(1, 1001),
(2, 2001),
(3, 2014),
(4, 2009),
(5, 2037),
(6, 3022),
(7, 3006),
(8, 3017),
(9, 3038),
(10, 4011),
(11, 4020);

-- --------------------------------------------------------

--
-- Table structure for table `club_4`
--

CREATE TABLE `club_4` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_4`
--

INSERT INTO `club_4` (`shirt`, `player_id`) VALUES
(1, 1005),
(2, 2003),
(3, 2002),
(4, 2004),
(5, 3024),
(6, 3018),
(7, 3023),
(8, 3026),
(9, 4016),
(10, 4018),
(11, 4005);

-- --------------------------------------------------------

--
-- Table structure for table `club_5`
--

CREATE TABLE `club_5` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_5`
--

INSERT INTO `club_5` (`shirt`, `player_id`) VALUES
(1, 1007),
(2, 2011),
(3, 2012),
(4, 2007),
(5, 2031),
(6, 3025),
(7, 3008),
(8, 3027),
(9, 3032),
(10, 4027),
(11, 4025);

-- --------------------------------------------------------

--
-- Table structure for table `club_6`
--

CREATE TABLE `club_6` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_6`
--

INSERT INTO `club_6` (`shirt`, `player_id`) VALUES
(1, 1002),
(2, 2015),
(3, 2026),
(4, 2008),
(5, 2016),
(6, 3009),
(7, 3007),
(8, 3005),
(9, 4002),
(10, 4019),
(11, 4024);

-- --------------------------------------------------------

--
-- Table structure for table `club_7`
--

CREATE TABLE `club_7` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_7`
--

INSERT INTO `club_7` (`shirt`, `player_id`) VALUES
(1, 1004),
(2, 2006),
(3, 2018),
(4, 2022),
(5, 2023),
(6, 3010),
(7, 3011),
(8, 3021),
(9, 4009),
(10, 4029),
(11, 4022);

-- --------------------------------------------------------

--
-- Table structure for table `club_8`
--

CREATE TABLE `club_8` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_8`
--

INSERT INTO `club_8` (`shirt`, `player_id`) VALUES
(1, 1008),
(2, 2029),
(3, 2027),
(4, 2030),
(5, 2032),
(6, 3001),
(7, 3002),
(8, 3003),
(9, 3013),
(10, 4015),
(11, 4030);

-- --------------------------------------------------------

--
-- Table structure for table `club_9`
--

CREATE TABLE `club_9` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_9`
--

INSERT INTO `club_9` (`shirt`, `player_id`) VALUES
(1, 4004),
(2, 4006),
(3, 4007),
(4, 1010),
(5, 2033),
(6, 2034),
(7, 2036),
(8, 2035),
(9, 3016),
(10, 3004),
(11, 3028);

-- --------------------------------------------------------

--
-- Table structure for table `club_10`
--

CREATE TABLE `club_10` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_10`
--

INSERT INTO `club_10` (`shirt`, `player_id`) VALUES
(1, 1009),
(2, 2038),
(3, 2039),
(4, 2041),
(5, 2040),
(6, 3020),
(7, 3033),
(8, 3041),
(9, 4003),
(10, 4012),
(11, 4017);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_1`
--
ALTER TABLE `club_1`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `club_2`
--
ALTER TABLE `club_2`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `club_3`
--
ALTER TABLE `club_3`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_4`
--
ALTER TABLE `club_4`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_5`
--
ALTER TABLE `club_5`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_6`
--
ALTER TABLE `club_6`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_7`
--
ALTER TABLE `club_7`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_8`
--
ALTER TABLE `club_8`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_9`
--
ALTER TABLE `club_9`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `club_10`
--
ALTER TABLE `club_10`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
