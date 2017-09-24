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
-- Table structure for table `football_mids`
--

CREATE TABLE `football_mids` (
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football_mids`
--

INSERT INTO `football_mids` (`player_id`, `player_name`, `player_value`, `player_points`) VALUES
(3001, 'Mesut Ozil', 25, 0),
(3002, 'Cristian Eriksen', 22, 0),
(3003, 'Oxlade Chamberlain', 17, 0),
(3004, 'N\'Golo Kante', 22, 0),
(3005, 'Ivan Rakitic', 25, 0),
(3006, 'Casemiro', 20, 0),
(3007, 'David Silva', 23, 0),
(3008, 'Kevin De Bruyne', 26, 0),
(3009, 'Paul Pogba', 25, 0),
(3010, 'Arjen Robben', 27, 0),
(3011, 'Thomas Lemar', 23, 0),
(3012, 'Arturo Vidal', 20, 0),
(3013, 'Eden Hazard', 25, 0),
(3014, 'Saul Niguez', 23, 0),
(3015, 'Miralem Pjanic', 25, 0),
(3016, 'Angel Di Maria', 25, 0),
(3017, 'Aaron Ramsey', 18, 0),
(3018, 'Bakayoko', 22, 0),
(3019, 'Nemanja Matic', 17, 0),
(3020, 'Luka Modric', 20, 0),
(3021, 'Andres Iniesta', 24, 0),
(3022, 'Kingsley Coman', 15, 0),
(3023, 'Marco Asensio', 22, 0),
(3024, 'Blaise Matuidi', 25, 0),
(3025, 'Ivan Perisic', 18, 0),
(3026, 'Mohd Salah', 25, 0),
(3027, 'Marco Reus', 20, 0),
(3028, 'James Rodriguez', 20, 0),
(3029, 'Gus Payet', 19, 0),
(3032, 'Frank Ribery', 20, 0),
(3033, 'Sergio Busquets', 19, 0),
(3034, 'Xavi Hernandez', 20, 0),
(3035, 'David Beckham', 20, 0),
(3036, 'Michael Ballack', 20, 0),
(3037, 'Toni Kroos', 20, 0),
(3038, 'Juan Mata', 18, 0),
(3039, 'Santi Cazorla', 19, 0),
(3040, 'Xabi Alonso', 19, 0),
(3041, 'Yaya Toure', 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football_mids`
--
ALTER TABLE `football_mids`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football_mids`
--
ALTER TABLE `football_mids`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3042;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
