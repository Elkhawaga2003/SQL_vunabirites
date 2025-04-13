-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2025 at 11:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogry`
--

CREATE TABLE `catogry` (
  `id` int(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catogry`
--

INSERT INTO `catogry` (`id`, `description`, `image`, `title`) VALUES
(1, 'bop is a toy for person called bobo \r\nand he love this toy very much ,\r\nat some day this toy gone , bop become very sad .\r\nnow how you can help him to hit this toy .', 'icons/bop.jpeg', 'bop story'),
(2, 'his elephant is lost and should go to his family. He is very scared, his big ears twitching with every strange sound in the forest. The trees are tall and unfamiliar, and even the birds sound different here.\r\n\r\nBut he remembers his mother’s soft rumble, the way she’d nudge him with her trunk. He knows he has to be brave. Somewhere beyond the trees, his family is waiting.\r\n\r\nWith each step, he hopes he’s getting closer.', 'icons/elephant.jpeg', 'The Lost Elephant'),
(3, 'In the middle of a peaceful bamboo forest lived a very round panda named Pudgy. He wasn’t just a little chubby—he was so fat that when he rolled over, it took him a full minute to get back up (unless a butterfly landed on his nose… then he suddenly found strength).\r\n\r\nPudgy loved three things: eating bamboo, napping in the sun, and dreaming about eating bamboo while napping in the sun.\r\n\r\nAll the other animals in the forest liked Pudgy because he was always smiling, always full of silly stories, and always willing to share his bamboo stash—well, almost always.\r\n', 'icons/panda.jpeg', 'Pudgy the Panda');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `country`, `salary`) VALUES
(1, 'Egypt', 250),
(3, 'moroco', 30000),
(4, 'Palestine\r\n', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'admin', 'this');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogry`
--
ALTER TABLE `catogry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `catogry`
--
ALTER TABLE `catogry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
