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
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_details`
--

CREATE TABLE `club_details` (
  `did` int(11) NOT NULL,
  `club_num` int(11) NOT NULL,
  `club_name` text NOT NULL,
  `fixtures` text NOT NULL,
  `goals_scored` text NOT NULL,
  `goals_conceded` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_details`
--

INSERT INTO `club_details` (`did`, `club_num`, `club_name`, `fixtures`, `goals_scored`, `goals_conceded`) VALUES
(1, 1, 'Electabuzz United', ' 10,2,3,6,8', '1,1,0,1,0', '4,2,2,1,2'),
(2, 2, 'Kanto City', '9,1,10,5,7', '2,2,1,2,1', '2,1,5,2,2'),
(3, 3, 'Nameks', '8,9,1,4,6', '1,0,2,0,1', '0,1,0,0,3'),
(4, 4, 'Zion Rovers', '7,8,9,3,5', '1,2,0,0,0', '3,3,2,0,1'),
(5, 5, 'Gotham United', '6,7,8,2,4', '0,0,3,2,1', '1,3,4,2,0'),
(6, 6, 'Central City', '5,10,7,1,3', '1,1,0,1,3', '0,3,0,1,1'),
(7, 7, 'Springfield United', '4,5,6,9,2', '3,3,0,1,2', '1,0,0,2,1'),
(8, 8, 'Los Santos Albion', '3,4,5,10,1', '0,3,4,1,2', '1,2,3,1,0'),
(9, 9, 'Stepford Palace', '2,3,4,7,10', '2,1,2,2,3', '2,0,0,1,3'),
(10, 10, 'Vandelay Wolves', '1,6,2,8,9', '4,3,5,1,3', '1,1,1,1,3');

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
(2041, 'Dejan Lovren', 14, 0);

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
(3038, 'Juan Mata', 18, 0),
(3039, 'Santi Cazorla', 19, 0),
(3041, 'Yaya Toure', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `user_full_name` varchar(20) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_full_name`, `user_name`, `user_password`) VALUES
(1, 'Manas Shukla', 'manas97', 'gooner'),
(3, 'JD', 'jdizzle', 'gooner'),
(4, 'Sai YR', 'saiarrow', 'gooner'),
(5, 'Dhruv Trivedi', 'kuchbhi', 'gooner'),
(6, 'Kundan Patel', 'kundan', 'gooner'),
(7, 'Donnie Darko', 'don', 'gooner'),
(8, 'Aaron ramsey ', 'ramsey', 'gooner'),
(9, 'Akweel Quadri', 'akad', 'gooner');

-- --------------------------------------------------------

--
-- Table structure for table `player_points`
--

CREATE TABLE `player_points` (
  `pts_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `MP` text NOT NULL,
  `GS` text NOT NULL,
  `A` text NOT NULL,
  `CS` text NOT NULL,
  `S` text NOT NULL,
  `gw_total` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `MVP_index` decimal(3,1) NOT NULL DEFAULT '0.0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_points`
--

INSERT INTO `player_points` (`pts_id`, `player_id`, `player_name`, `MP`, `GS`, `A`, `CS`, `S`, `gw_total`, `total_points`, `MVP_index`) VALUES
(1, 1001, 'Manuel Neuer', '5', '0', '0', '12', '1,3,2,1,2', 1, 26, '21.2'),
(2, 1002, 'Petr Cech', '5', '0', '0', '8', '2,2,4,1,1', 1, 23, '22.3'),
(3, 1003, 'Victor Valdes', '5', '0', '0', '0', '1,1,1,1,1', 1, 10, '12.0'),
(4, 1004, 'David de gea', '5', '0', '0', '4', '3,3,3,2,1', 1, 21, '17.9'),
(5, 1005, 'Thibaut Courtouis', '5', '0', '0', '4', '3,2,1,1,3', 1, 19, '15.5'),
(6, 1006, 'Joe Hart', '5', '0', '0', '0', '0,1,1,1,1', 1, 9, '10.2'),
(7, 1007, 'Iker Casillas', '5', '0', '0', '8', '1,1,3,1,1', 1, 20, '24.0'),
(8, 1008, 'Diego Lopez', '5', '0', '0', '4', '1,2,1,0,0', 1, 13, '16.6'),
(9, 1009, 'Gianlugi Buffon', '5', '0', '0', '0', '0,4,3,2,1', 1, 15, '13.9'),
(10, 1010, 'Claudio Bravo', '5', '0', '0', '8', '0,1,4,0,1', 1, 19, '20.4'),
(11, 2001, 'Sergio Ramos', '5', '0,6', '0,3', '12', '0', 1, 26, '20.9'),
(12, 2002, 'Raphael Varane', '5', '0', '0', '4', '0', 1, 9, '9.6'),
(13, 2003, 'Laurent Koscielny', '5', '0', '0', '4', '0', 1, 9, '9.6'),
(14, 2004, 'Giorgio Chiellini', '5', '0,6', '0', '4', '0', 1, 15, '11.5'),
(15, 2005, 'Eric Bailly', '5', '0', '0', '0', '0', 1, 5, '6.7'),
(16, 2006, 'Marcus Alonso', '5', '0', '0', '4', '0', 1, 9, '9.6'),
(17, 2007, 'Hector Bellerin', '5', '0', '0,3,3', '8', '0', 1, 19, '20.4'),
(18, 2008, 'Marcelo', '5', '6', '0,3', '8', '0', 1, 22, '17.7'),
(19, 2009, 'David Alaba', '5', '0', '0', '12', '0', 1, 17, '13.7'),
(20, 2010, 'Kyle Walker', '5', '0', '0', '0', '0', 1, 5, '6.7'),
(21, 2011, 'David Luiz', '5', '0,6', '0', '8', '0', 1, 19, '20.4'),
(22, 2012, 'Jerome Boateng', '5', '0,6', '0', '8', '0', 1, 19, '20.4'),
(23, 2013, 'Philip Lahm', '5', '0', '3', '0', '0', 1, 8, '10.7'),
(24, 2014, 'Dani Alves', '5', '0', '0', '12', '0', 1, 17, '17.1'),
(25, 2015, 'Diego Godin', '5', '0,6', '0', '8', '0', 1, 19, '17.0'),
(26, 2016, 'Dani Carvajal', '5', '0', '0', '8', '0', 1, 13, '12.3'),
(27, 2018, 'Thiago Silva', '5', '0,6', '0', '4', '0', 1, 15, '12.7'),
(28, 2019, 'Pepe', '5', '0', '0,3', '0', '0', 1, 8, '8.0'),
(29, 2020, 'Mats Hummels', '5', '0,6', '0', '0', '0', 1, 11, '10.4'),
(30, 2022, 'Gerard Pique', '5', '0,6', '0', '4', '0', 1, 15, '13.4'),
(31, 2023, 'Stephan Lichtsteiner', '5', '0', '0', '4', '0', 1, 9, '8.0'),
(32, 2024, 'Alex Sandro', '5', '0', '0', '0', '0', 1, 5, '4.5'),
(33, 2025, 'Phil Jones', '5', '0', '0', '0', '0', 1, 5, '5.4'),
(34, 2026, 'Chris Smalling', '5', '0', '0', '8', '0', 1, 13, '13.9'),
(35, 2027, 'Vincent Kompany', '5', '0,6', '0', '4', '0', 1, 15, '12.7'),
(36, 2028, 'Danilo', '5', '0', '0', '0', '0', 1, 5, '5.4'),
(37, 2029, 'Gary Cahill', '5', '0', '0', '4', '0', 1, 9, '9.0'),
(38, 2030, 'Cesar Azpilicueta', '5', '0', '0', '4', '0', 1, 9, '8.5'),
(39, 2031, 'Leighton Baines', '5', '0', '0', '8', '0', 1, 13, '14.9'),
(40, 2032, 'Sergio Roberto', '5', '0', '0', '4', '0', 1, 9, '9.0'),
(41, 2033, 'Javier Maschareno', '5', '0', '0', '8', '0', 1, 13, '13.1'),
(42, 2034, 'Thomas Varmeleon', '5', '0', '0', '8', '0', 1, 13, '13.9'),
(43, 2035, 'Theo Hernandez', '5', '0', '0', '8', '0', 1, 13, '13.1'),
(44, 2036, 'Nacho', '5', '0', '0', '8', '0', 1, 13, '13.9'),
(45, 2037, 'Nicolás Otamendi', '5', '0', '0', '12', '0', 1, 17, '17.1'),
(46, 2038, 'Filipe Luis', '5', '0', '3', '0', '0', 1, 8, '8.6'),
(47, 2039, 'Juanfron', '5', '0', '0,3', '0', '0', 1, 8, '8.6'),
(48, 2040, 'Kolo Toure', '5', '0', '0', '0', '0', 1, 5, '5.7'),
(49, 2041, 'Dejan Lovren', '5', '0', '0', '0', '0', 1, 5, '5.7'),
(50, 3001, 'Mesut Ozil', '5', '0,5', '0,3,6', '1', '0', 1, 20, '17.3'),
(51, 3002, 'Cristian Eriksen', '5', '0,5', '0,3', '1', '0', 1, 14, '13.7'),
(52, 3003, 'Oxlade Chamberlain', '5', '0', '0,3,3', '1', '0', 1, 12, '15.2'),
(53, 3004, 'N\'Golo Kante', '5', '0', '0,3,3,3', '2', '0', 1, 16, '15.7'),
(54, 3005, 'Ivan Rakitic', '5', '0', '0,3', '2', '0', 1, 10, '8.6'),
(55, 3006, 'Casemiro', '5', '0', '0,3', '3', '0', 1, 11, '11.9'),
(56, 3007, 'David Silva', '5', '0', '0,3', '2', '0', 1, 10, '9.4'),
(57, 3008, 'Kevin De Bruyne', '5', '0,5,5', '0', '2', '0', 1, 17, '14.1'),
(58, 3009, 'Paul Pogba', '5', '0', '0,3', '2', '0', 1, 10, '8.6'),
(59, 3010, 'Arjen Robben', '5', '5,5,5', '3', '1', '0', 1, 24, '19.2'),
(60, 3011, 'Thomas Lemar', '5', '0,5', '0,3,3', '1', '0', 1, 17, '16.0'),
(61, 3012, 'Arturo Vidal', '5', '0', '0,3', '0', '0', 1, 8, '8.6'),
(62, 3013, 'Eden Hazard', '5', '0,5,5', '0,6,3', '1', '0', 1, 25, '21.6'),
(63, 3014, 'Saul Niguez', '5', '0', '0', '0', '0', 1, 5, '4.7'),
(64, 3015, 'Miralem Pjanic', '5', '0', '0,3', '0', '0', 1, 8, '6.9'),
(65, 3016, 'Angel Di Maria', '5', '0,5', '6,3', '2', '0', 1, 21, '18.1'),
(66, 3017, 'Aaron Ramsey', '5', '0', '3', '3', '0', 1, 11, '13.2'),
(67, 3018, 'Bakayoko', '5', '0', '0', '1', '0', 1, 6, '5.9'),
(68, 3019, 'Nemanja Matic', '5', '0', '0', '0', '0', 1, 5, '6.3'),
(69, 3020, 'Luka Modric', '5', '0,5', '3,6,3,6', '0', '0', 1, 28, '30.2'),
(70, 3021, 'Andres Iniesta', '5', '0', '3,6', '1', '0', 1, 15, '13.5'),
(71, 3022, 'Kingsley Coman', '5', '5', '0', '3', '0', 1, 13, '18.7'),
(72, 3023, 'Marco Asensio', '5', '0', '3,6', '1', '0', 1, 15, '14.7'),
(73, 3024, 'Blaise Matuidi', '5', '0', '0', '1', '0', 1, 6, '5.2'),
(74, 3025, 'Ivan Perisic', '5', '0', '0', '2', '0', 1, 7, '8.4'),
(75, 3026, 'Mohd Salah', '5', '5', '0', '1', '0', 1, 11, '9.5'),
(76, 3027, 'Marco Reus', '5', '0,5', '0,6', '2', '0', 1, 18, '19.4'),
(77, 3028, 'James Rodriguez', '5', '0', '0,3', '2', '0', 1, 10, '10.8'),
(78, 3029, 'Gus Payet', '5', '0,5', '0,3', '0', '0', 1, 13, '14.8'),
(79, 3032, 'Frank Ribery', '5', '0', '0,3', '2', '0', 1, 10, '10.8'),
(80, 3033, 'Sergio Busquets', '5', '0,5', '0,3', '0', '0', 1, 13, '14.8'),
(81, 3038, 'Juan Mata', '5', '0,5', '0,3', '3', '0', 1, 16, '19.2'),
(82, 3039, 'Santi Cazorla', '5', '0,5', '0', '0', '0', 1, 10, '11.4'),
(83, 3041, 'Yaya Toure', '5', '0', '0,3', '0', '0', 1, 8, '8.6'),
(84, 4001, 'Romelu Lukaku', '5', '0,4,4', '0', '0', '0', 1, 13, '13.4'),
(85, 4002, 'Sergio Aguero', '5', '0,4,4,4', '3', '0', '0', 1, 20, '18.5'),
(86, 4003, 'Cristiano Ronaldo', '5', '8,8,4,4', '0,3', '0', '0', 1, 32, '23.6'),
(87, 4004, 'Lionel Messi', '5', '8,4,4,4', '0,3', '0', '0', 1, 28, '20.1'),
(88, 4005, 'Alexander Lacazette', '5', '0,4', '0', '0', '0', 1, 9, '9.3'),
(89, 4006, 'Robert Lewandowski', '5', '0,4,4,4', '0', '0', '0', 1, 17, '14.6'),
(90, 4007, 'Antoinne Griezmann', '5', '0,4', '0,3,3', '0', '0', 1, 15, '12.9'),
(91, 4008, 'Neymar', '5', '4,4', '3,3', '0', '0', 1, 19, '15.8'),
(92, 4009, 'Luis Suarez', '5', '8,4', '0', '0', '0', 1, 17, '14.6'),
(93, 4010, 'Gareth Bale', '5', '4', '0,3,3', '0', '0', 1, 15, '14.9'),
(94, 4011, 'Karim Benzema', '5', '0,4', '0', '0', '0', 1, 9, '8.3'),
(95, 4012, 'Paulo Dybala', '5', '4,12,8', '3,3,3', '0', '0', 1, 38, '31.7'),
(96, 4015, 'Roberto Firmino', '5', '0,4', '0,3', '0', '0', 1, 12, '15.5'),
(97, 4016, 'Olivier Giroud', '5', '0', '0', '0', '0', 1, 5, '8.1'),
(98, 4017, 'Alvaro Morata', '5', '4,4', '0,3', '0', '0', 1, 16, '16.5'),
(99, 4018, 'Sadio Mane', '5', '0', '0', '0', '0', 1, 5, '5.9'),
(100, 4019, 'Daniel Welbeck', '5', '0', '0', '0', '0', 1, 5, '8.6'),
(101, 4020, 'Gabriel Jesus', '5', '0', '0', '0', '0', 1, 5, '6.8'),
(102, 4021, 'Anthony Martial', '5', '4', '0', '0', '0', 1, 9, '11.6'),
(103, 4022, 'Jamie Vardy', '5', '0', '0,3', '0', '0', 1, 8, '9.4'),
(104, 4023, 'Mauro Icardi', '5', '0', '0', '0', '0', 1, 5, '6.5'),
(105, 4024, 'Thomas Muller', '5', '0,4', '0', '0', '0', 1, 9, '7.8'),
(106, 4025, 'Kylian Mbappe', '5', '0,4', '0,3', '0', '0', 1, 12, '10.3'),
(107, 4027, 'Kevin Gameiro', '5', '0', '0', '0', '0', 1, 5, '5.9'),
(108, 4028, 'Ousman Dembele', '5', '0,5', '0', '0', '0', 1, 10, '9.2'),
(109, 4029, 'Pierre Emerick Aubameyang', '5', '0', '0,3', '0', '0', 1, 8, '8.0'),
(110, 4030, 'Harry Kane', '5', '0,8,4,4', '0', '0', '0', 1, 21, '19.4');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `rid` int(11) NOT NULL,
  `show_res` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`rid`, `show_res`) VALUES
(1, 1);

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
(7, 3019),
(8, 3029),
(9, 3012),
(10, 4023),
(11, 4028),
(12, 4021),
(13, 1003),
(14, 1006),
(15, 2010),
(16, 2024),
(17, 2019),
(18, 2020),
(19, 3014),
(20, 3015),
(22, 4008),
(23, 4010),
(24, 4001),
(25, 1001),
(26, 2001),
(27, 2014),
(28, 2009),
(29, 2037),
(30, 3022),
(31, 3006),
(32, 3017),
(33, 3038),
(34, 4011),
(35, 4020),
(36, 1005),
(37, 2003),
(38, 2002),
(39, 2004),
(40, 3024),
(41, 3018),
(42, 3023),
(43, 3026),
(44, 4016),
(45, 4018),
(46, 4005),
(47, 1007),
(48, 2011),
(49, 2012),
(50, 2007),
(51, 2031),
(52, 3025),
(53, 3008),
(54, 3027),
(55, 3032),
(56, 4027),
(57, 4025),
(58, 1002),
(59, 2015),
(60, 2026),
(61, 2008),
(62, 2016),
(63, 3009),
(64, 3007),
(65, 3005),
(66, 4002),
(67, 4019),
(68, 4024),
(69, 1004),
(70, 2006),
(71, 2018),
(72, 2022),
(73, 2023),
(74, 3010),
(75, 3011),
(76, 3021),
(77, 4009),
(78, 4029),
(79, 4022),
(80, 1008),
(81, 2029),
(82, 2027),
(83, 2030),
(84, 2032),
(85, 3001),
(86, 3002),
(87, 3003),
(88, 3013),
(89, 4015),
(90, 4030),
(91, 4004),
(92, 4006),
(93, 4007),
(94, 1010),
(95, 2033),
(96, 2034),
(97, 2036),
(98, 2035),
(99, 3016),
(100, 3004),
(101, 3028),
(102, 1009),
(103, 2038),
(104, 2039),
(105, 2041),
(106, 2040),
(107, 3020),
(108, 3033),
(109, 3041),
(110, 4003),
(111, 4012),
(112, 4017),
(113, 3039);

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
  `gw_points` text NOT NULL,
  `team_eligibility` int(11) NOT NULL DEFAULT '0',
  `team_rank` int(11) NOT NULL DEFAULT '9999'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`team_id`, `user_id`, `team_name`, `team_value`, `team_points`, `gw_points`, `team_eligibility`, `team_rank`) VALUES
(1, 1, 'Gunners Forever', 224, 168, '0', 1, 2),
(3, 3, 'Bau55', 224, 133, '0', 1, 5),
(4, 4, 'Sion Bakwaas', 225, 147, '0', 1, 4),
(5, 5, 'Yellow is Red', 225, 159, '0', 1, 3),
(6, 6, 'Virar Dynamos', 225, 182, '0', 1, 1),
(7, 7, 'Pythons', 225, 94, '', 1, 8),
(8, 8, 'rams XI', 183, 96, '', 1, 7),
(9, 9, 'Chembur Chamars', 225, 133, '', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_details`
--
ALTER TABLE `club_details`
  ADD PRIMARY KEY (`did`);

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
-- Indexes for table `player_points`
--
ALTER TABLE `player_points`
  ADD PRIMARY KEY (`pts_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`rid`);

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
-- AUTO_INCREMENT for table `club_details`
--
ALTER TABLE `club_details`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `football_defenders`
--
ALTER TABLE `football_defenders`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2042;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `player_points`
--
ALTER TABLE `player_points`
  MODIFY `pts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `selected`
--
ALTER TABLE `selected`
  MODIFY `shirt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
