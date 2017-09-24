-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 07:17 PM
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
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `football_goalies`
--

CREATE TABLE `football_goalies` (
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football_goalies`
--

INSERT INTO `football_goalies` (`player_id`, `player_name`, `player_value`, `player_points`) VALUES
(1001, 'Manuel Neuer', 31, 0),
(1002, 'Petr Cech', 21, 0),
(1003, 'Victor Valdes', 25, 0),
(1004, 'David de gea', 30, 0),
(1005, 'Thibaut Courtouis', 28, 0),
(1006, 'Joe Hart', 25, 0),
(1007, 'Iker Casillas', 30, 0),
(1008, 'Diego Lopez', 24, 0),
(1009, 'Gianlugi Buffon', 27, 0),
(1010, 'Claudio Bravo', 26, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football_goalies`
--
ALTER TABLE `football_goalies`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football_goalies`
--
ALTER TABLE `football_goalies`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
