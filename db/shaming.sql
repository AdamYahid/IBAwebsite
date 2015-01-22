-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2015 at 11:06 AM
-- Server version: 5.6.22
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `reason` text NOT NULL,
  `score` int(11) NOT NULL,
  `picture_path` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `name`, `reason`, `score`, `picture_path`) VALUES
(1, 'אדם יהיד', 'אוכל במקום לשלם', 20, 'assets/shaming_people/shaming1.jpg'),
(2, 'דניאל פרנק', 'ברח מהמדינה עם החברה במקום לשלם', 15, 'assets/shaming_people/shaming2.jpg'),
(3, 'מתן שלקוביץ׳', 'תרם לעמותת ״האדומים״ במקום לשלם', 13, 'assets/shaming_people/shaming3.jpg'),
(4, 'גיל אלמוג', 'מחריב אתרים בתשלום במקום לשלם... לנו', 10, 'assets/shaming_people/shaming4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pending_list`
--

CREATE TABLE IF NOT EXISTS `pending_list` (
  `name` text NOT NULL,
  `reason` text NOT NULL,
  `score` int(11) NOT NULL,
  `picture_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pending_list`
--

INSERT INTO `pending_list` (`name`, `reason`, `score`, `picture_path`) VALUES
('משה משה', 'שוד וגזל', 4, 'assets/shaming_people/pending/example_file.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
