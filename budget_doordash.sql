-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 03:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget_doordash`
--
CREATE DATABASE IF NOT EXISTS `budget_doordash` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `budget_doordash`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'user',
  `two_fa_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `first_name`, `last_name`, `password_hash`, `role`, `two_fa_code`) VALUES
(1, 'CJ', 'Craig', 'Justin', '$2y$10$3Xhd4k8ms9d.GDvBttqOLuMCncDhItf4nWxFNu3aElRqSE0/oD3fW', 'user', ''),
(2, 'JC', 'Craig', 'Justin', '$2y$10$V8G6oW0R0SXaXzTonyz2A.ULusZOKJpAVgRO0LNy/JeAO.vie/Mwq', 'user', ''),
(3, 'Hello', 'Craig', 'Justin', '$2y$10$ixobynhR60vcCf2QHPTBtO7LkLevJ5wR3OhOjYkWM/u.gSr/tX7my', 'user', ''),
(4, 'HelloAgain', 'Craig', 'Justin', '$2y$10$P.js3a8mIXrMks6Gy3OCLOW9i5i6EVxbwA4nMje3aXHbYRklovHNq', 'user', ''),
(11, 'Wow', 'Wow', 'Wowow', '$2y$10$Evacu7knl/LeDaijLGWdOOX7GXwDaameLdru0TB/dlQkhOpZbfali', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `assign_food`
--

DROP TABLE IF EXISTS `assign_food`;
CREATE TABLE `assign_food` (
  `assign_food_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_food`
--

INSERT INTO `assign_food` (`assign_food_id`, `food_id`, `category_id`) VALUES
(1, 7, 7),
(2, 10, 8),
(3, 8, 8),
(4, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_type` varchar(25) NOT NULL,
  `category_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_type`, `category_description`) VALUES
(6, 'Jesuses', 'Combo', 'oh holy jesuses'),
(7, 'Burgers', 'Menu', 'Burgers... hmmm'),
(8, 'Sandwiches', 'Menu', 'Sandwiches , damn');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_details`
--

DROP TABLE IF EXISTS `checkout_details`;
CREATE TABLE `checkout_details` (
  `checkout_details_id` int(11) NOT NULL,
  `assign_food_id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favorite_id`, `account_id`, `food_id`) VALUES
(1, 7, 2),
(2, 1, 8),
(4, 11, 9),
(12, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `food_description` text NOT NULL,
  `price` double NOT NULL,
  `is_available` varchar(5) NOT NULL DEFAULT 'TRUE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `picture`, `food_description`, `price`, `is_available`) VALUES
(2, 'LeanBeefPatty', '6384d130993da.jpg', 'Lean Beef Patty', 1931839, 'False'),
(6, 'Krabby Patty', '6388bef482cde.jpg', 'Krabby Patty', 13, 'False'),
(7, 'Maide', '63896bd0447e8.png', 'Maide the maide', 14342424, 'TRUE'),
(8, 'CutePower', '63896e0fd4ac4.png', 'Pooooweeeerrrr!', 93829, 'TRUE'),
(9, 'JustinDream', '638974b6f2f79.jpg', 'Justin loves this pizza', 13, 'TRUE'),
(10, 'A Man', '638974f5102cf.jpg', 'Not edible', 1, 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `date_ordered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `account_id`, `food_id`, `rating`, `comment`) VALUES
(7, 11, 9, 5, 'Food was magnificent!');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

DROP TABLE IF EXISTS `security_question`;
CREATE TABLE `security_question` (
  `security_question_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`security_question_id`, `account_id`, `question`, `answer`) VALUES
(0, 11, 'What is your mother`s maiden name?', 'Wow'),
(1, 5, 'What', 'ali'),
(2, 6, 'What', 'Lol'),
(3, 7, 'What', 'yu6ht'),
(4, 9, 'What', 'lol'),
(5, 10, 'What', 'Akira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `assign_food`
--
ALTER TABLE `assign_food`
  ADD PRIMARY KEY (`assign_food_id`),
  ADD KEY `assign_food_to_food` (`food_id`),
  ADD KEY `assign_food_to_category` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `FK_checkout_to_account` (`account_id`);

--
-- Indexes for table `checkout_details`
--
ALTER TABLE `checkout_details`
  ADD PRIMARY KEY (`checkout_details_id`),
  ADD KEY `FK_checkout_details_to_checkout` (`checkout_id`),
  ADD KEY `FK_checkout_details_to_menu` (`assign_food_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `FK_favorite_to_account` (`account_id`),
  ADD KEY `FK_favorite_to_food` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `FK_history_to_checkout` (`checkout_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `FK_review_to_account` (`account_id`),
  ADD KEY `FK_review_to_food` (`food_id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`security_question_id`),
  ADD KEY `FK_security_question_to_account` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `assign_food`
--
ALTER TABLE `assign_food`
  MODIFY `assign_food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkout_details`
--
ALTER TABLE `checkout_details`
  MODIFY `checkout_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `FK_checkout_to_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
