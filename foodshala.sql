-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 15, 2019 at 12:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `FoodShala`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `cust_mail` varchar(30) NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `cust_add` varchar(100) NOT NULL,
  `cust_pref` varchar(10) NOT NULL,
  `cust_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`cust_id`, `cust_name`, `cust_mail`, `cust_phone`, `cust_add`, `cust_pref`, `cust_pass`) VALUES
(1, 'Abishek Verma', 'abhishek@gmail.com', '1234567890', 'Jaipur', 'Veg', 'abhishek'),
(2, 'Deepak Yadav', 'deepak@gmail.com', '1234512345', 'Lucknow', 'Non-Veg', 'deepak'),
(3, 'Mansi Goel', 'mansi@gmail.com', '0987654321', 'Delhi', 'Veg', 'mansi'),
(4, 'Shivani Dixit', 'shivani@gmail.com', '1290347865', 'Sitapur', 'Veg', 'shivani');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_pref` varchar(10) NOT NULL,
  `food_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`food_id`, `food_name`, `food_pref`, `food_desc`) VALUES
(11, 'Chocolate Martini', 'Veg', 'Tito\'s Vodka and White Créme de Cacao dusted with hand shaved chocolate.'),
(12, 'Fried Shrimp', 'Non Veg', 'Sustainably raised Argentine red shrimp, fried golden brown and served with chipotle mayonnaise for dipping.'),
(13, 'Fat Tuesday Salad', 'Veg', 'New Orleans style hot sliced Cajun chicken breast with mixed greens, tomatoes, cucumbers and hard-cooked eggs with warm, spicy honey mustard dressing topped with crumbled bacon..'),
(14, 'Pasta Pomodoro', 'Veg', 'Fresh roasted garlic rigatoni with a light sauce of extra virgin California olive oil, fresh chopped tomatoes, basil, garlic, black pepper and a dash of crushed red pepper. Garnished with sun dried tomatoes and shaved parmesan.'),
(15, 'Tuscan Bruschetta', 'Non Veg', 'Crusty sliced Italian bread topped with basil, extra virgin olive oil, chopped tomatoes, garlic and fresh mozzarella cheese. Baked until it is nice and crispy and served with a side of balsamic reduction.'),
(16, 'Prickly Pear', 'Veg', 'New Amsterdam Vodka and Pear liquer in a sugar rimmed glass.'),
(17, 'Ultimate Nacho Platter', 'Veg', 'House made corn tortilla chips, melted cheddar-Jack cheese, mild Anaheim chile salsa, refried beans, guacamole & sour cream'),
(18, 'Jambalaya', 'Veg', 'Shrimp, chicken, andouille sausage, rice and traditional jambalaya vegetables and spices. Garnished with sweet red and yellow pepper confetti.'),
(19, 'Stuffed Clams', 'Non Veg', 'Three large stuffies with chopped clams, medium spiced chouriço Portuguese sausage, chopped bacon, onions, peppers, a touch of crushed red pepper, bread crumbs and spices, topped with bacon.');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `order_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`order_id`, `rest_id`, `cust_id`, `food_id`) VALUES
(1, 1, 2, 11),
(2, 1, 2, 12),
(3, 1, 3, 12),
(4, 2, 3, 16),
(5, 3, 4, 17),
(6, 3, 4, 19),
(7, 2, 2, 14),
(8, 3, 2, 18),
(9, 1, 2, 13),
(10, 4, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE `Restaurant` (
  `rest_id` int(20) NOT NULL,
  `rest_name` varchar(30) NOT NULL,
  `rest_mail` varchar(50) NOT NULL,
  `rest_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`rest_id`, `rest_name`, `rest_mail`, `rest_pass`) VALUES
(1, 'Hotel Taj', 'login@taj.com', 'taj'),
(2, 'Khana Khajana', 'login@khana.com', 'khana'),
(3, 'Hotel Royale', 'login@royale.com', 'royale'),
(4, 'Clark\'s Food', 'login@clark.com', 'clark');

-- --------------------------------------------------------

--
-- Table structure for table `Rest_Menu`
--

CREATE TABLE `Rest_Menu` (
  `rest_menu_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rest_Menu`
--

INSERT INTO `Rest_Menu` (`rest_menu_id`, `rest_id`, `food_id`, `food_cost`) VALUES
(8, 1, 11, 100),
(9, 1, 12, 250),
(10, 1, 13, 150),
(11, 2, 14, 135),
(12, 2, 15, 220),
(13, 2, 16, 45),
(14, 3, 17, 350),
(15, 3, 18, 240),
(16, 3, 19, 165),
(17, 3, 11, 80),
(18, 4, 11, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `Restaurant`
--
ALTER TABLE `Restaurant`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `Rest_Menu`
--
ALTER TABLE `Rest_Menu`
  ADD PRIMARY KEY (`rest_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Restaurant`
--
ALTER TABLE `Restaurant`
  MODIFY `rest_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Rest_Menu`
--
ALTER TABLE `Rest_Menu`
  MODIFY `rest_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
