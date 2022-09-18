-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2022 at 11:40 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nevemccarthy_DT200_web_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Drinks`
--

CREATE TABLE `Drinks` (
  `drink_id` tinyint NOT NULL,
  `drink` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` smallint NOT NULL,
  `sugar` float NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Drinks`
--

INSERT INTO `Drinks` (`drink_id`, `drink`, `amount`, `sugar`, `cost`, `available`) VALUES
(1, 'E2	', 400, 74, 2.7, 'Yes'),
(2, 'Up and Go', 250, 16.1, 2.8, 'Yes'),
(3, 'Most juice: Apple & Blackcurrant	', 275, 25, 3.5, 'Yes'),
(4, 'Most juice: Apple & Orange & Mango	', 275, 25, 3.5, 'Yes'),
(5, 'Pump Water', 750, 0, 3.5, 'Yes'),
(6, 'Ice tea: Peach	', 500, 4, 4, 'Yes'),
(7, 'Ice tea: Lemon	', 500, 4, 4, 'Yes'),
(8, 'Hot Chocolate: Regular	', 240, 10, 3.5, 'Yes'),
(9, 'Hot Chocolate: Large	', 200, 13, 4, 'Yes'),
(10, 'Blue Powerade	', 750, 44, 4.5, 'Yes'),
(11, 'Red Powerade	', 750, 21, 4.5, 'Yes'),
(12, 'Simply Smoothie	', 350, 36, 5.5, 'Yes'),
(13, 'Herbal teas	', 240, 0, 3.5, 'Yes'),
(14, 'English Breakfast tea with milk	', 240, 0, 3.5, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `Foods`
--

CREATE TABLE `Foods` (
  `food_id` tinyint NOT NULL,
  `food` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugar` float NOT NULL,
  `veg` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Foods`
--

INSERT INTO `Foods` (`food_id`, `food`, `sugar`, `veg`, `cost`, `available`) VALUES
(1, 'Steak Pie', 0.9, 'no', 4.8, 'yes'),
(2, 'Vegetarian Pie', 0.5, 'yes', 4.8, 'yes'),
(3, 'Bacon & Egg Pie', 10, 'no', 4.8, 'yes'),
(4, 'Cheese Pie', 0.7, 'yes', 4.8, 'yes'),
(5, 'Sausage Roll', 1.5, 'no', 3.5, 'yes'),
(6, 'Vegetarian Sausage Roll', 1.2, 'yes', 3.5, 'yes'),
(7, 'Cookies', 29, 'yes', 2, 'yes'),
(8, 'Garlic Bread', 3.7, 'yes', 2.8, 'yes'),
(9, 'Sushi Selection (4 Piece)', 2.5, 'no', 5, 'yes'),
(10, 'Toasted Sandwich Selection', 6, 'no', 3, 'yes'),
(11, 'Plain Croissant ', 11, 'yes', 2.5, 'yes'),
(12, 'Brownies', 30, 'yes', 3.5, 'yes'),
(13, 'Caramel Slice', 35, 'yes', 3.5, 'yes'),
(14, 'Donuts', 12, 'yes', 3, 'yes'),
(15, 'Cake Slice', 31, 'yes', 4, 'yes'),
(16, 'Ham & Cheese Croissant', 31, 'no', 5, 'yes'),
(17, 'Cheese & Tomato Croissant', 28, 'yes', 5, 'yes'),
(18, 'Fruit Salad', 36, 'yes', 4, 'yes'),
(19, 'Pasta Salad', 1, 'no', 4.5, 'yes'),
(20, 'Roasted Vegetable Salad', 0.5, 'yes', 4.5, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `Specials`
--

CREATE TABLE `Specials` (
  `specials_id` tinyint NOT NULL,
  `drink_id` tinyint NOT NULL,
  `food_id` tinyint NOT NULL,
  `week_day` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugar` float NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Specials`
--

INSERT INTO `Specials` (`specials_id`, `drink_id`, `food_id`, `week_day`, `sugar`, `cost`, `available`) VALUES
(1, 5, 1, 'monday', 0.9, 7.5, 'yes'),
(2, 6, 15, 'tuesday', 35, 7, 'yes'),
(3, 14, 10, 'wednesday', 6, 5.5, 'yes'),
(4, 12, 19, 'thursday', 61, 9, 'yes'),
(5, 9, 5, 'friday', 14.5, 6.5, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Drinks`
--
ALTER TABLE `Drinks`
  ADD PRIMARY KEY (`drink_id`);

--
-- Indexes for table `Foods`
--
ALTER TABLE `Foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `Specials`
--
ALTER TABLE `Specials`
  ADD PRIMARY KEY (`specials_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
