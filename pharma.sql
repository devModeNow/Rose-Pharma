-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 09:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `is_online` tinyint(1) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `user_type_id`, `status_id`, `is_online`, `last_login`) VALUES
(1, 'admin1', 'password1!', 1, 1, 1, '2023-08-14 04:44:20'),
(2, 'cashier1', 'password1', 2, 1, 1, '2023-08-14 04:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharma_categories`
--

CREATE TABLE `tbl_pharma_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pharma_categories`
--

INSERT INTO `tbl_pharma_categories` (`id`, `name`, `status_id`) VALUES
(79, 'Analgesics', 1),
(80, 'Antipyrectics', 1),
(81, 'Vitamins', 1),
(82, 'Antibiotics', 1),
(83, 'Antiseptics', 1),
(86, 'Mood stabilizers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharma_products`
--

CREATE TABLE `tbl_pharma_products` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` float NOT NULL,
  `category_id` int(100) NOT NULL,
  `type_id` int(50) NOT NULL,
  `unit_id` int(50) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `prescription` tinyint(1) DEFAULT 0,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pharma_products`
--

INSERT INTO `tbl_pharma_products` (`id`, `code`, `name`, `description`, `price`, `category_id`, `type_id`, `unit_id`, `quantity`, `prescription`, `status_id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0001', 'Paracetamol', 'Paracetamol', 10, 80, 6, NULL, 1000, 1, 1, '', '2023-09-10 18:44:59', NULL, NULL),
(2, '0002', 'biogesic', 'biogesic', 8, 80, 6, NULL, 2000, 0, 1, '', '2023-09-10 18:52:56', NULL, NULL),
(3, '0003', 'testing', 'liquidski', 10, 79, 8, NULL, 200, 1, 1, '', '2023-09-10 19:00:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharma_types`
--

CREATE TABLE `tbl_pharma_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status_id` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pharma_types`
--

INSERT INTO `tbl_pharma_types` (`id`, `name`, `status_id`) VALUES
(5, 'Drops', 1),
(6, 'Tablet', 1),
(7, 'Inhaler', 1),
(8, 'Liquid', 1),
(9, 'Capsule', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pharma_units`
--

CREATE TABLE `tbl_pharma_units` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statuses`
--

CREATE TABLE `tbl_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userprofile`
--

CREATE TABLE `tbl_userprofile` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `position_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userprofile`
--

INSERT INTO `tbl_userprofile` (`id`, `user_id`, `firstname`, `lastname`, `profile_image`, `position_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'Cristhoper', 'Ferrer', '', 1, '2023-08-22 07:49:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pharma_categories`
--
ALTER TABLE `tbl_pharma_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pharma_products`
--
ALTER TABLE `tbl_pharma_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pharma_types`
--
ALTER TABLE `tbl_pharma_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pharma_units`
--
ALTER TABLE `tbl_pharma_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_statuses`
--
ALTER TABLE `tbl_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userprofile`
--
ALTER TABLE `tbl_userprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pharma_categories`
--
ALTER TABLE `tbl_pharma_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_pharma_products`
--
ALTER TABLE `tbl_pharma_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pharma_types`
--
ALTER TABLE `tbl_pharma_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pharma_units`
--
ALTER TABLE `tbl_pharma_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_statuses`
--
ALTER TABLE `tbl_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_userprofile`
--
ALTER TABLE `tbl_userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
