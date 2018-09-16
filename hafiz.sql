-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 04:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hafiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `source`, `created_at`, `updated_at`) VALUES
(13, 'some name', 'adfaf', '13-appflowchart.gif', '2018-09-09 07:44:48', '2018-09-09 07:48:29'),
(14, 'new p', 'adfa', '14-first.jpeg', '2018-09-09 07:56:02', '2018-09-09 07:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `productstest`
--

CREATE TABLE `productstest` (
  `id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productstest`
--

INSERT INTO `productstest` (`id`, `name`, `user_id`) VALUES
(1, 'dafafafa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `gender`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, 'aa@e.com', 'asfasfd', 'asdfaf', 'aasdfkadfkaf', '', 'asdfaf', 'Afganistan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(500) NOT NULL,
  `LastName` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `City` varchar(500) NOT NULL,
  `Country` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `FirstName`, `LastName`, `Email`, `Sex`, `City`, `Country`, `Password`) VALUES
(7, 'Noman', 'Butt', 'nomanbutt8322@gmail.com', 'Male', 'Faisalabad', 'Pakistan', 'Noman'),
(8, 'Talha', 'Habib', 'it2@jkgroup.net', 'Male', 'Faisalabad', 'Pakistan', 'Talha'),
(9, 'zohaib', 'iq', 'asdf@gmaio.ac', 'Male', 'asfd', 'Pakistan', 'zohaif'),
(10, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'United States', 'asdfaf'),
(11, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'Pakistan', 'asdfaf'),
(12, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'United States', 'asdfaf'),
(13, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'United States', 'asdfaf'),
(14, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'United States', 'asdfaf'),
(15, 'Haider', 'Ali', 'ab@a.com', 'Male', 'Faisalabad', 'United States', 'asdfaf'),
(16, 'adsfkasf', 'adsfakf', 'ad@d.com', 'ma', 'asdfa', 'United States', 'adsfkaf'),
(17, 'adsfkasf', 'adsfakf', 'ad@d.com', 'ma', 'asdfa', 'United States', 'adsfkaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`);

--
-- Indexes for table `productstest`
--
ALTER TABLE `productstest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `productstest`
--
ALTER TABLE `productstest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
