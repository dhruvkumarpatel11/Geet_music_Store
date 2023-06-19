-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 07:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date_time`) VALUES
(1, 'vwvesvwevws', 'kdr@jef.few', 'n fdvkjrbkjwvk dvkj sdkvj rj vskdf vkjs vj', '2022-08-19 02:13:15'),
(2, 'vwvesvwevws', 'kdr@jef.few', 'n fdvkjrbkjwvk dvkj sdkvj rj vskdf vkjs vj', '2022-08-19 02:13:27'),
(3, 'dfewefewfwef', 'adf@wedf.nytnrf', 'jdbkjfbwekjf , vjhrs evjgbsergvbrejvgbekrj vkjsdj ', '2022-08-19 02:15:49'),
(4, 'Tirth', 'tp@gmail.com', 'kjdvijfsvjsrbfjh bjsf vblesfvliesrvbjklservlkjrea ', '2022-08-19 02:18:12'),
(5, 'Tirth', 'tp@gmail.com', 'jhdvsdb ivbidbvjdnvisduuyb fbghnmyj', '2022-08-19 08:46:34'),
(6, 'Tirth', 'tp@gmail.com', 'brvjsdvnsdovn jbiuwebfwenfvlksndviuewbib ', '2022-08-19 11:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'dosa', 'dcp@gmail.com', '123'),
(2, 'tp', 'tpp@gmail.com', 'tpp'),
(3, 'Dhruvkumar Patel', 'dhruvkumar@gmail.com', 'dhruvkumar'),
(4, 'Dhruvkumar Patel', 'd@gmail.com', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
