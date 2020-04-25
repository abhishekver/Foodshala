-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 25, 2020 at 06:33 AM
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
(1, 'gdhjsg', 'asgv@hgk.com', '76786', 'bkb', 'Veg', '113kb');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_pref` varchar(10) NOT NULL,
  `food_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`food_id`, `food_name`, `food_pref`, `food_desc`) VALUES
(1, 'Dish1', 'Veg', 'Some lonbew we rwerw erwe r w er we r wer we rwe r ewrwrewr werwe r werw rhwerw ');

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
(1, 1, 1, 1);

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
(1, 'ukhk', 'as@b', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Rest_cust`
--

CREATE TABLE `Rest_cust` (
  `rest_cust_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 1, 50);

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
-- Indexes for table `Rest_cust`
--
ALTER TABLE `Rest_cust`
  ADD PRIMARY KEY (`rest_cust_id`);

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
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Restaurant`
--
ALTER TABLE `Restaurant`
  MODIFY `rest_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Rest_cust`
--
ALTER TABLE `Rest_cust`
  MODIFY `rest_cust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Rest_Menu`
--
ALTER TABLE `Rest_Menu`
  MODIFY `rest_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
