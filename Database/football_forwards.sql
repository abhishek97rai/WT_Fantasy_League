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
-- Table structure for table `football_forwards`
--

CREATE TABLE `football_forwards` (
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football_forwards`
--

INSERT INTO `football_forwards` (`player_id`, `player_name`, `player_value`, `player_points`) VALUES
(4001, 'Romelu Lukaku', 25, 0),
(4002, 'Sergio Aguero', 28, 0),
(4003, 'Cristiano Ronaldo', 35, 0),
(4004, 'Lionel Messi', 36, 0),
(4005, 'Alexander Lacazette', 25, 0),
(4006, 'Robert Lewandowski', 30, 0),
(4007, 'Antoinne Griezmann', 30, 0),
(4008, 'Neymar', 31, 0),
(4009, 'Luis Suarez', 30, 0),
(4010, 'Gareth Bale', 26, 0),
(4011, 'Karim Benzema', 28, 0),
(4012, 'Paulo Dybala', 31, 0),
(4013, 'Mario Mandzukic', 25, 0),
(4015, 'Roberto Firmino', 20, 0),
(4016, 'Olivier Giroud', 16, 0),
(4017, 'Alvaro Morata', 25, 0),
(4018, 'Sadio Mane', 22, 0),
(4019, 'Daniel Welbeck', 15, 0),
(4020, 'Gabriel Jesus', 19, 0),
(4021, 'Anthony Martial', 20, 0),
(4022, 'Jamie Vardy', 22, 0),
(4023, 'Mauro Icardi', 20, 0),
(4024, 'Thomas Muller', 30, 0),
(4025, 'Kylian Mbappe', 30, 0),
(4026, 'Edinson Cavani', 26, 0),
(4027, 'Kevin Gameiro', 22, 0),
(4028, 'Ousman Dembele', 28, 0),
(4029, 'Pierre Emerick Aubameyang', 26, 0),
(4030, 'Harry Kane', 28, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football_forwards`
--
ALTER TABLE `football_forwards`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football_forwards`
--
ALTER TABLE `football_forwards`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4031;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
