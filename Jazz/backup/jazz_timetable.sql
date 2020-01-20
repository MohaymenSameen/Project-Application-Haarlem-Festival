-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 02:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfitteam6_enhaarlemfestival`
--

-- --------------------------------------------------------

--
-- Table structure for table `jazz_timetable`
--

CREATE TABLE `jazz_timetable` (
  `id` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `band` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jazz_timetable`
--

INSERT INTO `jazz_timetable` (`id`, `date`, `location`, `timing`, `band`, `price`) VALUES
(1, 'July 26th, Thursday', 'Main Hall, Patronaat', '18:00-19:00', 'Gumbo Kings', '&euro;15'),
(2, 'July 26th, Thursday', 'Main Hall, Patronaat', '19:30-20:30', 'Evolve', '&euro;15'),
(3, 'July 26th, Thursday', 'Main Hall, Patronaat', '21:00-22:00', 'Ntjam Rosie', '&euro;15'),
(4, 'July 26th, Thursday', 'Second Hall, Patronaat', '18:00-19:00', 'Wicked Jazz Sounds', '&euro;10'),
(5, 'July 26th, Thursday', 'Second Hall, Patronaat', '19:30-20:30', 'Tom Thomsom Assemble', '&euro;10'),
(6, 'July 26th, Thursday', 'Second Hall, Patronaat', '21:00-22:00', 'Jonna Frazer', '&euro;10'),
(7, 'July 27th, Friday', 'Main Hall, Patronaat', '18:00-19:00', 'Fox & The Mayors', '&euro;15'),
(8, 'July 27th, Friday', 'Main Hall, Patronaat', '19:30-20:30', 'Uncle Sue', '&euro;15'),
(9, 'July 27th, Friday', 'Main Hall, Patronaat', '21:00-22:00', 'Chris Allen', '&euro;15'),
(10, 'July 27th, Friday', 'Second Hall, Patronaat', '18:00-19:00', 'Myles Sanko', '&euro;10'),
(11, 'July 27th, Friday', 'Second Hall, Patronaat', '19:30-20:30', 'Ruis Soundsystem', '&euro;10'),
(12, 'July 27th, Friday', 'Second Hall, Patronaat', '21:00-22:00', 'The Family XL', '&euro;10'),
(13, 'July 28th, Saturday', 'Main Hall, Patronaat', '18:00-19:00', 'Gare du Nord', '&euro;15'),
(14, 'July 28th, Saturday', 'Main Hall, Patronaat', '19:30-20:30', 'Rilan & The Bombadiers', '&euro;15'),
(15, 'July 28th, Saturday', 'Main Hall, Patronaat', '21:00-22:00', 'Soul Six', '&euro;15'),
(16, 'July 28th, Saturday', 'Third Hall, Patronaat', '18:00-19:00', 'Han Bennink', '&euro;10'),
(17, 'July 28th, Saturday', 'Third Hall, Patronaat', '19:30-20:30', 'The Nordanians', '&euro;10'),
(18, 'July 28th, Saturday', 'Third Hall, Patronaat', '21:00-22:00', 'Lilith Merlot', '&euro;10'),
(19, 'July 29th, Sunday', 'Grote Markt', '15:00-16:00', 'Ruis Soundsystem', 'Free'),
(20, 'July 29th, Sunday', 'Grote Markt', '16:00-17:00', 'Wicked Jazz Sounds', 'Free'),
(21, 'July 29th, Sunday', 'Grote Markt', '17:00-18:00', 'Evolve', 'Free'),
(22, 'July 29th, Sunday', 'Grote Markt', '18:00-19:00', 'The Nordanians', 'Free'),
(23, 'July 29th, Sunday', 'Grote Markt', '19:00-20:00', 'Gumbo Kings', 'Free'),
(24, 'July 29th, Sunday', 'Grote Markt', '20:00-21:00', 'Gare du Nord', 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jazz_timetable`
--
ALTER TABLE `jazz_timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jazz_timetable`
--
ALTER TABLE `jazz_timetable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
