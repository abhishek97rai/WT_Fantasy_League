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
(2023, 'Carlos Puyol', 18, 0),
(2024, 'Phil Neville', 18, 0),
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
(2037, 'Raphael Varane', 16, 0),
(2038, 'Filipe Luis', 15, 0),
(2039, 'Juanfron', 15, 0),
(2040, 'Kolo Toure', 14, 0),
(2041, 'Dejan Lovren', 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football_defenders`
--
ALTER TABLE `football_defenders`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football_defenders`
--
ALTER TABLE `football_defenders`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2042;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
