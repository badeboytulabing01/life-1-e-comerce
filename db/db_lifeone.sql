-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lifeone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buying`
--

CREATE TABLE `tbl_buying` (
  `buy_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `discount` varchar(300) NOT NULL,
  `shipping_fee` decimal(11,2) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(1200) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'process',
  `total` decimal(11,2) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date_order` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'view',
  `encoder_update` varchar(200) NOT NULL,
  `date_create` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `shipping_fee` decimal(11,2) NOT NULL,
  `color` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `product_stock` decimal(11,2) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'view_product',
  `date_create` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'new',
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `access` varchar(11) NOT NULL DEFAULT 'users',
  `date_create` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buying`
--
ALTER TABLE `tbl_buying`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buying`
--
ALTER TABLE `tbl_buying`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
