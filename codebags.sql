-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 11:16 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codebags`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Cars'),
(2, 'Phones');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `price` varchar(9) NOT NULL,
  `product_state` text NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `product_link` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `owner_id`, `name`, `category`, `price`, `product_state`, `quantity`, `product_link`, `product_image`, `description`, `created_at`) VALUES
(3, 1, 'test', '1', '100', '2', '1100', 'test.com', '', 'Test product', '2017-05-20 00:03:00'),
(4, 1, 'test2', '2', '2000', '3', '1', 'test.car', '', 'Test4', '2017-05-17 00:00:00'),
(5, 1, 'Tets', '1', '300', '2', '21', 'bit.ly/test', '', 'Anohter test', '2017-05-16 00:00:00'),
(6, 1, 'More-Tests', '2', '125', '3', 'just 15', 'another.test', '', 'Hello world', '2017-05-21 06:31:36'),
(7, 1, 'Test 5', '2', '220', '2', '5', 'test5.com', 'tabithat2.jpg', 'Great Test', '2017-05-27 00:08:11'),
(8, 2, 'test', '2', '1000', '1', '1', 'test.car.com', 'one-mans-constant-is-another-mans-variable-quote-11.jpg', 'this test another test', '2017-06-06 10:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `name` text,
  `is_admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `name`, `is_admin`) VALUES
(1, 'tolufakiyesi', 'tolufakiyesi@yahoo.com', '$2y$10$4TXRaKy4NVY4A9KGKHWqD.JhHZPYOEstFCX1JwTyHGAQpkXmu7UrK', '2017-05-17 17:46:48', 'Not Tolu', 1),
(2, 'test', 'test@test.com', '$2y$10$frh.Fe10.R1hnNbodZARh.arofN27lsEdyJf2T./.FiCZEHu3XkZK', '2017-05-17 17:48:08', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
