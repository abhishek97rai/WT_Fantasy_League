-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 09:21 PM
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
-- Table structure for table `football_defenders`
--

CREATE TABLE `football_defenders` (
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football_defenders`
--

INSERT INTO `football_defenders` (`player_id`, `player_name`, `player_value`, `player_points`) VALUES
(2001, 'Sergio Ramos', 20, 0),
(2002, 'Raphael Varane', 15, 0),
(2003, 'Laurent Koscielny', 15, 0),
(2004, 'Giorgio Chiellini', 21, 0),
(2005, 'Eric Bailly', 12, 0),
(2006, 'Marcus Alonso', 15, 0),
(2007, 'Hector Bellerin', 15, 0),
(2008, 'Marcelo', 20, 0),
(2009, 'David Alaba', 20, 0),
(2010, 'Kyle Walker', 12, 0),
(2011, 'David Luiz', 15, 0),
(2012, 'Jerome Boateng', 15, 0),
(2013, 'Philip Lahm', 12, 0),
(2014, 'Dani Alves', 16, 0),
(2015, 'Diego Godin', 18, 0),
(2016, 'Dani Carvajal', 17, 0),
(2018, 'Thiago Silva', 19, 0),
(2019, 'Pepe', 16, 0),
(2020, 'Mats Hummels', 17, 0),
(2022, 'Gerard Pique', 18, 0),
(2023, 'Stephan Lichtsteiner', 18, 0),
(2024, 'Alex Sandro', 18, 0),
(2025, 'Phil Jones', 15, 0),
(2026, 'Chris Smalling', 15, 0),
(2027, 'Vincent Kompany', 19, 0),
(2028, 'Danilo', 15, 0),
(2029, 'Gary Cahill', 16, 0),
(2030, 'Cesar Azpilicueta', 17, 0),
(2031, 'Leighton Baines', 14, 0),
(2032, 'Sergio Roberto', 16, 0),
(2033, 'Javier Maschareno', 16, 0),
(2034, 'Thomas Varmeleon', 15, 0),
(2035, 'Theo Hernandez', 16, 0),
(2036, 'Nacho', 15, 0),
(2037, 'Nicolás Otamendi', 16, 0),
(2038, 'Filipe Luis', 15, 0),
(2039, 'Juanfron', 15, 0),
(2040, 'Kolo Toure', 14, 0),
(2041, 'Dejan Lovren', 14, 0),
(2042, 'Darijo Srna', 16, 0);

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
(1001, 'Manuel Neuer', 25, 0),
(1002, 'Petr Cech', 21, 0),
(1003, 'Victor Valdes', 17, 0),
(1004, 'David de gea', 24, 0),
(1005, 'Thibaut Courtouis', 25, 0),
(1006, 'Joe Hart', 18, 0),
(1007, 'Iker Casillas', 17, 0),
(1008, 'Diego Lopez', 16, 0),
(1009, 'Gianlugi Buffon', 22, 0),
(1010, 'Claudio Bravo', 19, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(20) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_full_name`, `user_name`, `user_password`) VALUES
(1, 'Manas Shukla', 'manas97', 'gooner'),
(2, 'Kapil Patil', 'kaplan', 'gooner');

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `shirt` int(3) NOT NULL,
  `player_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`shirt`, `player_id`) VALUES
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
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_value` int(11) NOT NULL DEFAULT '0',
  `team_points` int(11) NOT NULL DEFAULT '0',
  `team_eligibility` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`team_id`, `user_id`, `team_name`, `team_value`, `team_points`, `team_eligibility`) VALUES
(1, 1, 'Gunners Forever', 194, 0, 1),
(2, 2, 'Divers XI', 21, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football_defenders`
--
ALTER TABLE `football_defenders`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `football_forwards`
--
ALTER TABLE `football_forwards`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `football_goalies`
--
ALTER TABLE `football_goalies`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `football_mids`
--
ALTER TABLE `football_mids`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `login_index` (`user_id`);

--
-- Indexes for table `selected`
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`shirt`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football_defenders`
--
ALTER TABLE `football_defenders`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2043;
--
-- AUTO_INCREMENT for table `football_forwards`
--
ALTER TABLE `football_forwards`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4031;
--
-- AUTO_INCREMENT for table `football_goalies`
--
ALTER TABLE `football_goalies`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `football_mids`
--
ALTER TABLE `football_mids`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3042;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `selected`
--
ALTER TABLE `selected`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
