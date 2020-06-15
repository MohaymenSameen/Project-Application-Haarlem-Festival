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
-- Table structure for table `jazz_content_en`
--

CREATE TABLE `jazz_content_en` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `heading_1` varchar(50) NOT NULL,
  `paragraph_1` varchar(500) NOT NULL,
  `heading_2` varchar(50) NOT NULL,
  `heading_3` varchar(50) NOT NULL,
  `label_1` varchar(50) NOT NULL,
  `label_2` varchar(50) NOT NULL,
  `heading_4` varchar(50) NOT NULL,
  `label_3` varchar(50) NOT NULL,
  `heading_5` varchar(50) NOT NULL,
  `label_4` varchar(50) NOT NULL,
  `label_5` varchar(100) NOT NULL,
  `label_6` varchar(50) NOT NULL,
  `label_7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jazz_content_en`
--

INSERT INTO `jazz_content_en` (`id`, `title`, `heading_1`, `paragraph_1`, `heading_2`, `heading_3`, `label_1`, `label_2`, `heading_4`, `label_3`, `heading_5`, `label_4`, `label_5`, `label_6`, `label_7`) VALUES
(1, 'Haarlem Jazz', 'Information', 'The Haarlem Jazz Festival showcases the greatest jazz artists from the Netherlands. The Haarlem Jazz Festival is 4 days long, from the 26th of July till the 29th. Well known bands such as the Gumbo Kings, Evolve, Wicked Jazz Sounds and 16 other bands will be performing! You can buy seperate tickets or purchase access passes to see each and every band!\r\n', 'Program Dates', 'Tickets', 'Select Band & Date', 'Quantity:', 'Add More To The Fun!', 'By clicking one of the options', 'Access Passes', '&bull;All Access Pass One Day: &euro;35', '&bull;All Access Pass (Thursday, Friday, Saturday): &euro;80', 'Access Pass:', 'Quantity:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jazz_content_en`
--
ALTER TABLE `jazz_content_en`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jazz_content_en`
--
ALTER TABLE `jazz_content_en`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
