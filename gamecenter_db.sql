-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 03:56 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamecenter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `genre_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `title`, `image`, `genre_id`) VALUES
(1, 'Anthem', '5eedfd56ed38e.jpg', 1),
(2, 'GTA v', '5eedfd8a384a8.jpg', 1),
(3, 'Battle Field', '5eedfdc6b25ed.jpg', 1),
(4, 'Just Cause 3', '5eedfdf57edc7.jpg', 1),
(5, 'HomeFront', '5eedfe43a30db.jpg', 1),
(6, 'Enslaved', '5eedff26aff8d.jpg', 2),
(7, 'Anthem', '5eedfc89c524a.jpg', 1),
(8, 'Observer', '5eedff78afa4f.jpg', 2),
(9, 'Silent Of the Sleep', '5eedffb485815.jpg', 2),
(10, 'Sonic Adventure 2', '5eedffe9c4cf6.jpg', 2),
(11, 'ddsa', '5eedfbf584c22.jpg', 1),
(12, 'Arson And Plunder', '5eee004615fea.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Arcade');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(30) NOT NULL,
  `price` int(254) NOT NULL,
  `game_id` int(30) NOT NULL,
  `stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `price`, `game_id`, `stock`) VALUES
(4, 720000, 7, 10),
(5, 720000, 1, 5),
(6, 290000, 2, 5),
(7, 195000, 3, 12),
(8, 145000, 4, 4),
(9, 68000, 5, 8),
(11, 158000, 6, 5),
(12, 36000, 7, 14),
(13, 158000, 8, 5),
(14, 58000, 9, 3),
(15, 75000, 10, 6),
(16, 6000, 11, 2),
(17, 35000, 12, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `game` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
