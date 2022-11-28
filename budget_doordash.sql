-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 05:26 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

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
(1, 'AkiraSan', 'Akira', 'San', '$2y$10$GQLqUht08iTyugcWXu/ujuGBMKRT7Ky.lRj9MB8aKZUF9p1R0/7xC', 'user', ''),
(2, 'Lol', 'lol', 'lol', '$2y$10$uwLmjjBh6Tns.ybNuHKQueGt2Zef/OU6SukVy.MA/beDHLzyOg7WC', 'user', ''),
(3, 'lol2', 'lol2', 'lol2', '$2y$10$mbpJ2vSyV7SYJF1C55.Y.ujjwuSbyq6sfwqiAyBad36LovMG81xdK', 'user', ''),
(4, 'lol3', 'lol2', 'lol2', '$2y$10$13tW8NLJLsAN25HVP5CSve0c7vnilu48SWcBHyYvu2FMjX7zGPk4e', 'user', ''),
(5, 'lol5', 'lol2', 'lol2', '$2y$10$eSTg.j2X3JdhNbILoMlyrOEYXISIAYH8Irijd2OXmZXE4Fy07t8Wy', 'user', ''),
(6, 'lo6', 'lol', 'lol', '$2y$10$DWUVTPnolz6Ftt5CcSPfHOyUIr6LJomGihOWbrFqlzMx1uGSpFyHa', 'user', ''),
(7, 'lo7', 'lol7', 'lol7', '$2y$10$oe3ZFE8zj3DPkfhyY3ieKeOYxSe7rmfXGhmupLgHqs0535YvE7/w6', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `assign_food`
--

CREATE TABLE `assign_food` (
  `assign_food_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

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
(1, 'Burgers', 'Menu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_details`
--

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

CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

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
(1, '', '', '', 0, 'TRUE'),
(2, 'LeanBeefPatty', '6384d130993da.jpg', 'Lean Beef Patty', 1931839, 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `date_ordered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

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
(1, 5, 'What', 'ali'),
(2, 6, 'What', 'Lol'),
(3, 7, 'What', 'yu6ht');

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assign_food`
--
ALTER TABLE `assign_food`
  MODIFY `assign_food_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `security_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_food`
--
ALTER TABLE `assign_food`
  ADD CONSTRAINT `assign_food_to_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `assign_food_to_food` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `FK_checkout_to_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `checkout_details`
--
ALTER TABLE `checkout_details`
  ADD CONSTRAINT `FK_checkout_details_to_checkout` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`checkout_id`);

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `FK_favorite_to_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `FK_favorite_to_food` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `FK_history_to_checkout` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`checkout_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_review_to_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `FK_review_to_food` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `security_question`
--
ALTER TABLE `security_question`
  ADD CONSTRAINT `FK_security_question_to_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
