-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `name` varchar(80) NOT NULL,
  `type` varchar(25) NOT NULL,
  `price` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `type`, `price`) VALUES
(1, 'Shahi Mutton Kacchi Biriyani (Bashmoti / Chinigura)', 'rice', '280'),
(2, 'Shahi Chicken Kacchi Biriyani (Basmoti / Chinigura)', 'rice', '250'),
(3, 'Shahi Chicken Pulao', 'rice', '200'),
(4, 'Bresta Pulao/ Green Pea Pulao/ Kopta Pulao', 'rice', '120'),
(5, 'Shahi Tehari (Beef/Mutton)', 'rice', '220'),
(6, 'Bhuna Khichuri ', 'rice', '150'),
(7, 'Chicken Roast', 'meat', '120'),
(8, 'Whole chicken roast', 'meat', '300'),
(9, 'Roasted Leg of Lamb ', 'meat', '300'),
(10, 'Mutton Rezala ', 'meat', '170'),
(11, 'Beef Rezala', 'meat', '160'),
(12, 'Chicken Tandoori', 'meat', '120'),
(13, 'Chicken Korma', 'meat', '130'),
(14, 'Beef Kaliya / Mazbani ', 'meat', '200'),
(15, 'Egg Korma', 'vegetables', '100'),
(16, 'Chinese Vegetables', 'vegetable', '70'),
(17, 'Kopta Curry', 'vegatable', '50'),
(18, 'Chicken Madraji Curry', 'vegetable', '60'),
(19, 'Alo Bokhra Chatni', 'vegetable', '30'),
(20, 'Basil Chutney', 'vegetable', '20'),
(21, 'Chutney', 'vegetable', '20'),
(22, 'Jali Kabab', 'kabab', '50'),
(23, 'Shame Kabab', 'kabab', '60'),
(24, 'Tikka Kabab', 'kabab', '60'),
(25, 'Boti Kabab', 'kabab', '100'),
(26, 'Shahi Firni', 'dessert', '30'),
(27, 'Shahi Zarda', 'dessert', '50'),
(28, 'Sweet Balls dish', 'dessert', '100'),
(29, 'Yoghurt (cup)', 'dessert', '35'),
(30, 'Gulapjam piece', 'dessert', '30'),
(31, 'Pudding', 'dessert', '100'),
(32, 'Fruit Custard', 'dessert', '100'),
(33, 'Faluda', 'dessert', '120'),
(34, 'Salad (3 piece)', 'salad', '5'),
(35, 'Cocktail salad ', 'salad', '20'),
(36, 'Chicken Cashew Nut Salad', 'salad', '80'),
(37, 'Cream curd borhani made with mineral water', 'other', '50'),
(38, 'Badam Sarbat', 'other', '80'),
(39, 'Mineral water 500 ml', 'other', '15'),
(40, 'Soft drink', 'other', '20'),
(41, 'Juice', 'other', '60'),
(42, 'Coffee Expresso', 'other', '50'),
(43, 'Shahi Betel leaf', 'other', '20'),
(44, 'Special Betel Leaf', 'other', '35');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(5) NOT NULL,
  `name` varchar(18) NOT NULL,
  `payment` varchar(5) NOT NULL,
  `designation` varchar(18) NOT NULL,
  `feature1` varchar(55) NOT NULL,
  `feautre2` varchar(55) NOT NULL,
  `feature3` varchar(55) NOT NULL,
  `feature4` varchar(55) NOT NULL,
  `feature5` varchar(55) NOT NULL,
  `feature6` varchar(55) NOT NULL,
  `feature7` varchar(55) NOT NULL,
  `feature8` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
