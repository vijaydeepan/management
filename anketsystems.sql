-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 10:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anketsystems`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Gap', 1, 2),
(2, 'Forever 21', 1, 2),
(3, 'Gap', 1, 2),
(4, 'Forever 21', 1, 2),
(5, 'Adidas', 1, 2),
(6, 'Gap', 1, 2),
(7, 'Forever 21', 1, 2),
(8, 'Adidas', 1, 2),
(9, 'Gap', 1, 2),
(10, 'Forever 21', 1, 2),
(11, 'Adidas', 1, 1),
(12, 'Gap', 1, 1),
(13, 'Forever 21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Sports ', 1, 2),
(2, 'Casual', 1, 2),
(3, 'Casual', 1, 2),
(4, 'Sport', 1, 2),
(5, 'Casual', 1, 2),
(6, 'Sport wear', 1, 2),
(7, 'Casual wear', 1, 1),
(8, 'Sports ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '2016-07-15', 'John Doe', '9807867564', '2700.00', '351.00', '3051.00', '1000.00', '2051.00', '1000.00', '1051.00', 2, 2, 2),
(2, '2016-07-15', 'John Doe', '9808746573', '3400.00', '442.00', '3842.00', '500.00', '3342.00', '3342', '0', 2, 1, 2),
(3, '2016-07-16', 'John Doe', '9809876758', '3600.00', '468.00', '4068.00', '568.00', '3500.00', '3500', '0', 2, 1, 2),
(4, '2016-08-01', 'Indra', '19208130', '1200.00', '156.00', '1356.00', '1000.00', '356.00', '356', '0.00', 2, 1, 2),
(5, '2016-07-16', 'John Doe', '9808767689', '3600.00', '468.00', '4068.00', '500.00', '3568.00', '3568', '0', 2, 1, 1),
(6, '2018-01-10', 'vijaydeepan', '9789103040', '3600.00', '468.00', '4068.00', '32', '4036.00', '342', '3694.00', 2, 1, 1),
(7, '2018-01-10', 'etre', '43535', '3600.00', '468.00', '4068.00', '345345', '-341277.00', '34534', '-375811.00', 2, 1, 1),
(8, '2018-01-10', 'qeqwe', '3424324', '3600.00', '468.00', '4068.00', '32434', '-28366.00', '3432', '-31798.00', 1, 1, 1),
(9, '2018-01-10', 'deepan', '12312', '3600.00', '468.00', '4068.00', '324', '3744.00', '432', '3312.00', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 1, '1', '1500', '1500.00', 2),
(2, 1, 2, '1', '1200', '1200.00', 2),
(3, 2, 3, '2', '1200', '2400.00', 2),
(4, 2, 4, '1', '1000', '1000.00', 2),
(5, 3, 5, '2', '1200', '2400.00', 2),
(6, 3, 6, '1', '1200', '1200.00', 2),
(7, 4, 5, '1', '1200', '1200.00', 2),
(8, 5, 7, '2', '1200', '2400.00', 1),
(9, 5, 8, '1', '1200', '1200.00', 1),
(10, 6, 7, '1', '1200', '1200.00', 1),
(11, 6, 7, '1', '1200', '1200.00', 1),
(12, 6, 7, '1', '1200', '1200.00', 1),
(13, 7, 7, '1', '1200', '1200.00', 1),
(14, 7, 8, '1', '1200', '1200.00', 1),
(15, 7, 7, '1', '1200', '1200.00', 1),
(16, 8, 7, '1', '1200', '1200.00', 1),
(17, 8, 7, '1', '1200', '1200.00', 1),
(18, 8, 7, '1', '1200', '1200.00', 1),
(19, 9, 7, '1', '1200', '1200.00', 1),
(20, 9, 7, '1', '1200', '1200.00', 1),
(21, 9, 7, '1', '1200', '1200.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'Half pant', '../assests/images/stock/2847957892502c7200.jpg', 1, 2, '19', '1500', 2, 2),
(2, 'T-Shirt', '../assests/images/stock/163965789252551575.jpg', 2, 2, '9', '1200', 2, 2),
(3, 'Half Pant', '../assests/images/stock/13274578927924974b.jpg', 5, 3, '18', '1200', 2, 2),
(4, 'T-Shirt', '../assests/images/stock/12299578927ace94c5.jpg', 6, 3, '29', '1000', 2, 2),
(5, 'Half Pant', '../assests/images/stock/24937578929c13532e.jpg', 8, 5, '17', '1200', 2, 2),
(6, 'Polo T-Shirt', '../assests/images/stock/10222578929f733dbf.jpg', 9, 5, '29', '1200', 2, 2),
(7, 'Half Pant', '../assests/images/stock/1770257893463579bf.jpg', 11, 7, '17', '1200', 1, 1),
(8, 'Polo T-shirt', '../assests/images/stock/136715789347d1aea6.jpg', 12, 7, '8', '1200', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `order_id` int(255) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` int(255) NOT NULL,
  `vat` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `grand_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`) VALUES
(1, '2018-01-10', 'jayaram', '3947832', 3600, 468, 4068, 342, 3726),
(2, '2018-01-10', 'kjdsfk', '23432', 3600, 468, 4068, 342, 3726),
(3, '2018-01-10', 'ewrwer', '34224', 3600, 468, 4068, 342, 3726),
(4, '2018-01-10', 'were', '4243', 3600, 468, 4068, 342, 3726),
(5, '2018-01-09', 'ert', '5443', 3600, 468, 4068, 435, 3633),
(6, '2018-01-10', 'retr', '4543', 3600, 468, 4068, 4354, -286),
(7, '2018-01-10', 'ddsfd', '43243', 3600, 468, 4068, 32, 4036),
(8, '2018-01-10', 'dffgd', '32443', 3600, 468, 4068, 324, 3744),
(9, '2018-01-10', 'sdsdf', '342', 3600, 468, 4068, 342, 3726),
(10, '2018-01-10', 'jayaram', '4323234', 3600, 468, 4068, 342342, -338274),
(11, '2018-01-10', 'vijay', '34209348', 3600, 468, 4068, 32443, -28375),
(12, '2018-01-10', '342', '234', 3600, 468, 4068, 423, 3645),
(13, '2018-01-10', 'sffd', '43243', 33600, 4368, 37968, 234, 37734);

-- --------------------------------------------------------

--
-- Table structure for table `quotation_order_item`
--

CREATE TABLE `quotation_order_item` (
  `order_item_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `order_item_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation_order_item`
--

INSERT INTO `quotation_order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 7, 1, 1200, 1200, 1),
(2, 1, 8, 1, 1200, 1200, 1),
(3, 1, 7, 1, 1200, 1200, 1),
(4, 2, 7, 1, 1200, 1200, 1),
(5, 2, 7, 1, 1200, 1200, 1),
(6, 2, 7, 1, 1200, 1200, 1),
(7, 3, 7, 1, 1200, 1200, 1),
(8, 3, 7, 1, 1200, 1200, 1),
(9, 3, 7, 1, 1200, 1200, 1),
(10, 4, 7, 1, 1200, 1200, 1),
(11, 4, 7, 1, 1200, 1200, 1),
(12, 4, 7, 1, 1200, 1200, 1),
(13, 5, 7, 1, 1200, 1200, 1),
(14, 5, 8, 1, 1200, 1200, 1),
(15, 5, 7, 1, 1200, 1200, 1),
(16, 6, 7, 1, 1200, 1200, 1),
(17, 6, 7, 1, 1200, 1200, 1),
(18, 6, 7, 1, 1200, 1200, 1),
(19, 7, 7, 1, 1200, 1200, 1),
(20, 7, 7, 1, 1200, 1200, 1),
(21, 7, 7, 1, 1200, 1200, 1),
(22, 8, 7, 1, 1200, 1200, 1),
(23, 8, 8, 1, 1200, 1200, 1),
(24, 8, 7, 1, 1200, 1200, 1),
(25, 9, 7, 1, 1200, 1200, 1),
(26, 9, 7, 1, 1200, 1200, 1),
(27, 9, 7, 1, 1200, 1200, 1),
(28, 10, 7, 1, 1200, 1200, 1),
(29, 10, 7, 1, 1200, 1200, 1),
(30, 10, 7, 1, 1200, 1200, 1),
(31, 11, 7, 1, 1200, 1200, 1),
(32, 11, 7, 1, 1200, 1200, 1),
(33, 11, 7, 1, 1200, 1200, 1),
(34, 12, 7, 1, 1200, 1200, 1),
(35, 12, 7, 1, 1200, 1200, 1),
(36, 12, 7, 1, 1200, 1200, 1),
(37, 13, 7, 1, 1200, 1200, 1),
(38, 13, 7, 1, 1200, 1200, 1),
(39, 13, 7, 1, 1200, 1200, 1),
(40, 13, 8, 1, 1200, 1200, 1),
(41, 13, 7, 1, 1200, 1200, 1),
(42, 13, 7, 1, 1200, 1200, 1),
(43, 13, 7, 1, 1200, 1200, 1),
(44, 13, 7, 1, 1200, 1200, 1),
(45, 13, 7, 1, 1200, 1200, 1),
(46, 13, 7, 1, 1200, 1200, 1),
(47, 13, 7, 1, 1200, 1200, 1),
(48, 13, 7, 1, 1200, 1200, 1),
(49, 13, 7, 1, 1200, 1200, 1),
(50, 13, 7, 1, 1200, 1200, 1),
(51, 13, 7, 1, 1200, 1200, 1),
(52, 13, 7, 1, 1200, 1200, 1),
(53, 13, 7, 1, 1200, 1200, 1),
(54, 13, 7, 1, 1200, 1200, 1),
(55, 13, 7, 1, 1200, 1200, 1),
(56, 13, 7, 1, 1200, 1200, 1),
(57, 13, 7, 1, 1200, 1200, 1),
(58, 13, 7, 1, 1200, 1200, 1),
(59, 13, 7, 1, 1200, 1200, 1),
(60, 13, 7, 1, 1200, 1200, 1),
(61, 13, 7, 1, 1200, 1200, 1),
(62, 13, 7, 1, 1200, 1200, 1),
(63, 13, 7, 1, 1200, 1200, 1),
(64, 13, 7, 1, 1200, 1200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '2171a8380ef2c424fbc80eb45cee7b91', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `quotation_order_item`
--
ALTER TABLE `quotation_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quotation_order_item`
--
ALTER TABLE `quotation_order_item`
  MODIFY `order_item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
