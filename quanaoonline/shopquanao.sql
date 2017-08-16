-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 02:59 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopquanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_order` date NOT NULL,
  `total` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `name`, `email`, `address`, `phone`, `date_order`, `total`, `payment`, `note`, `status`, `created_at`, `updated_at`) VALUES
(12, NULL, 'Nguyễn Thị Trúc Như', 'thanhptit@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01645191604', '2017-07-30', '90,000.00', 'Thanh toán tại nơi giao hàng', NULL, 0, '2017-07-30 02:26:48', '2017-07-30 02:26:48'),
(13, NULL, 'Nguyen Ngoc Teo', 'teo@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-07-30', '90,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-07-30 03:33:34', '2017-07-30 03:33:34'),
(14, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '90,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh giúp em, thanks!', 0, '2017-08-01 18:57:11', '2017-08-01 18:57:11'),
(15, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '90,000.00', 'Thanh toán tại nơi giao hàng', NULL, 0, '2017-08-01 18:57:48', '2017-08-01 18:57:48'),
(16, NULL, 'Nguyen Ngoc Teo', 'minhhai@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-02', '90,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-01 19:00:08', '2017-08-01 19:00:08'),
(17, NULL, 'Nguyen Ngoc Teo', 'aaaaaaaa@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-02', '400,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-01 19:17:33', '2017-08-01 19:17:33'),
(18, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '400,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-01 19:21:33', '2017-08-01 19:21:33'),
(19, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '400,000.00', 'Thanh toán tại nơi giao hàng', NULL, 0, '2017-08-01 19:22:16', '2017-08-01 19:22:16'),
(20, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '800,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh cho chế', 0, '2017-08-01 19:28:33', '2017-08-01 19:28:33'),
(21, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '250,000.00', 'Thanh toán tại nơi giao hàng', NULL, 0, '2017-08-01 19:30:48', '2017-08-01 19:30:48'),
(22, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '400,000.00', 'Thanh toán tại nơi giao hàng', NULL, 0, '2017-08-01 19:32:01', '2017-08-01 19:32:01'),
(23, 6, 'ngoc thanh', 'ngoc@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', '2017-08-02', '400,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh cho che', 0, '2017-08-01 20:47:29', '2017-08-01 20:47:29'),
(24, NULL, 'fgty', 'teo@gmail.com', 'edftyui', '234567890', '2017-08-10', '340,000.00', 'Thanh toán tại nơi giao hàng', 'edfrgtyui', 0, '2017-08-10 06:38:34', '2017-08-10 06:38:34'),
(25, NULL, 'Nguyễn Ngọc Thành', 'ngocthanhqn95@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01645191604', '2017-08-12', '30,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 12:42:39', '2017-08-12 12:42:39'),
(26, NULL, 'Nguyễn Ngọc Thành', 'ngocthanhqn95@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01645191604', '2017-08-13', '100,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 18:50:53', '2017-08-12 18:50:53'),
(27, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01232158126', '2017-08-13', '80,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 19:12:51', '2017-08-12 19:12:51'),
(28, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01232158126', '2017-08-13', '250,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 19:19:56', '2017-08-12 19:19:56'),
(29, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 19:23:45', '2017-08-12 19:23:45'),
(30, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '100,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 19:27:07', '2017-08-12 19:27:07'),
(31, NULL, 'Nguyen Ngoc Teo', 'teo@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '100,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 19:49:23', '2017-08-12 19:49:23'),
(32, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:09:27', '2017-08-12 20:09:27'),
(33, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '80,000.00', 'Thanh toán tại nơi giao hàng', 'aaaaaaaa', 0, '2017-08-12 20:12:02', '2017-08-12 20:12:02'),
(34, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '250,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:23:48', '2017-08-12 20:23:48'),
(35, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 20:28:13', '2017-08-12 20:28:13'),
(36, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:29:18', '2017-08-12 20:29:18'),
(37, NULL, 'aaa', 'ngocthanhqn95@gmail.com', 'aaaaaaaa', '01232158126', '2017-08-13', '100,000.00', 'Thanh toán tại nơi giao hàng', 'sâsasas', 0, '2017-08-12 20:30:32', '2017-08-12 20:30:32'),
(38, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:36:57', '2017-08-12 20:36:57'),
(39, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '80,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:41:24', '2017-08-12 20:41:24'),
(40, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 20:43:20', '2017-08-12 20:43:20'),
(41, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '30,000.00', 'Thanh toán tại nơi giao hàng', 'ok', 0, '2017-08-12 20:47:32', '2017-08-12 20:47:32'),
(42, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '80,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:49:19', '2017-08-12 20:49:19'),
(43, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '100,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:52:08', '2017-08-12 20:52:08'),
(44, NULL, 'Nguyen Ngoc Teo', 'ngocthanhqn95@gmail.com', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', '2017-08-13', '300,000.00', 'Thanh toán tại nơi giao hàng', 'giao nhanh nha shop', 0, '2017-08-12 20:53:37', '2017-08-12 20:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `bills_input`
--

CREATE TABLE `bills_input` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` int(10) UNSIGNED NOT NULL,
  `date_input` date NOT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills_input`
--

INSERT INTO `bills_input` (`id`, `user_id`, `provider_id`, `date_input`, `total_price`) VALUES
(1, 1, 3, '2017-08-03', 3300000),
(2, 1, 1, '2017-08-08', NULL),
(3, 1, 3, '2017-08-08', NULL),
(4, 1, 2, '2017-08-08', NULL),
(5, 1, 3, '2017-08-13', NULL),
(6, 1, 4, '2017-08-13', NULL),
(7, 1, 2, '2017-08-13', NULL),
(8, 1, 1, '2017-08-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_input_details`
--

CREATE TABLE `bill_input_details` (
  `input_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `dateadd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_input_details`
--

INSERT INTO `bill_input_details` (`input_id`, `product_id`, `quantity`, `price`, `dateadd`) VALUES
(1, 1, 10, 80000, '0000-00-00'),
(1, 2, 10, 250000, '0000-00-00'),
(3, 1, 10, 100000, '0000-00-00'),
(4, 2, 20, 200000, '0000-00-00'),
(4, 1, 10, 80000, '0000-00-00'),
(4, 3, 30, 90000, '0000-00-00'),
(4, 4, 50, 80000, '2017-08-08'),
(3, 5, 10, 200000, '2017-08-08'),
(5, 2, 21, 200000, '2017-08-13'),
(5, 1, 11, 100000, '2017-08-13'),
(6, 1, 2, 100000, '2017-08-13'),
(7, 6, 10, 100000, '2017-08-13'),
(8, 12, 10, 80000, '2017-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `bill__details`
--

CREATE TABLE `bill__details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill__details`
--

INSERT INTO `bill__details` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 12, 5, 1, 90000, '2017-07-30 02:26:48', '2017-07-30 02:26:48'),
(2, 13, 5, 1, 90000, '2017-07-30 03:33:34', '2017-07-30 03:33:34'),
(3, 14, 5, 1, 90000, '2017-08-01 18:57:11', '2017-08-01 18:57:11'),
(4, 15, 5, 1, 90000, '2017-08-01 18:57:48', '2017-08-01 18:57:48'),
(5, 16, 5, 1, 90000, '2017-08-01 19:00:08', '2017-08-01 19:00:08'),
(6, 17, 4, 1, 400000, '2017-08-01 19:17:33', '2017-08-01 19:17:33'),
(7, 18, 3, 1, 400000, '2017-08-01 19:21:34', '2017-08-01 19:21:34'),
(8, 19, 3, 1, 400000, '2017-08-01 19:22:16', '2017-08-01 19:22:16'),
(9, 20, 3, 2, 400000, '2017-08-01 19:28:33', '2017-08-01 19:28:33'),
(10, 21, 2, 1, 250000, '2017-08-01 19:30:48', '2017-08-01 19:30:48'),
(11, 22, 3, 1, 400000, '2017-08-01 19:32:02', '2017-08-01 19:32:02'),
(12, 23, 4, 1, 400000, '2017-08-01 20:47:29', '2017-08-01 20:47:29'),
(13, 24, 5, 1, 90000, '2017-08-10 06:38:34', '2017-08-10 06:38:34'),
(14, 24, 2, 1, 250000, '2017-08-10 06:38:34', '2017-08-10 06:38:34'),
(15, 25, 10, 1, 30000, '2017-08-12 12:42:39', '2017-08-12 12:42:39'),
(16, 26, 11, 1, 100000, '2017-08-12 18:50:53', '2017-08-12 18:50:53'),
(17, 27, 12, 1, 80000, '2017-08-12 19:12:51', '2017-08-12 19:12:51'),
(18, 28, 8, 1, 250000, '2017-08-12 19:19:56', '2017-08-12 19:19:56'),
(19, 29, 10, 1, 30000, '2017-08-12 19:23:45', '2017-08-12 19:23:45'),
(20, 30, 11, 1, 100000, '2017-08-12 19:27:07', '2017-08-12 19:27:07'),
(21, 31, 11, 1, 100000, '2017-08-12 19:49:23', '2017-08-12 19:49:23'),
(22, 32, 10, 1, 30000, '2017-08-12 20:09:27', '2017-08-12 20:09:27'),
(23, 33, 12, 1, 80000, '2017-08-12 20:12:02', '2017-08-12 20:12:02'),
(24, 34, 2, 1, 250000, '2017-08-12 20:23:49', '2017-08-12 20:23:49'),
(25, 35, 10, 1, 30000, '2017-08-12 20:28:13', '2017-08-12 20:28:13'),
(26, 36, 10, 1, 30000, '2017-08-12 20:29:18', '2017-08-12 20:29:18'),
(27, 37, 11, 1, 100000, '2017-08-12 20:30:32', '2017-08-12 20:30:32'),
(28, 38, 10, 1, 30000, '2017-08-12 20:36:57', '2017-08-12 20:36:57'),
(29, 39, 12, 1, 80000, '2017-08-12 20:41:24', '2017-08-12 20:41:24'),
(30, 40, 10, 1, 30000, '2017-08-12 20:43:20', '2017-08-12 20:43:20'),
(31, 41, 10, 1, 30000, '2017-08-12 20:47:32', '2017-08-12 20:47:32'),
(32, 42, 12, 1, 80000, '2017-08-12 20:49:19', '2017-08-12 20:49:19'),
(33, 43, 11, 1, 100000, '2017-08-12 20:52:08', '2017-08-12 20:52:08'),
(34, 44, 6, 1, 300000, '2017-08-12 20:53:37', '2017-08-12 20:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Thời Trang Nam', 'thoi-trang-nam', 1, 0, 'Thời Trang Nam', 'Thời Trang Nam', '2017-07-08 17:00:00', '2017-07-08 17:00:00'),
(2, 'Áo Thun Nam', 'ao-thun-nam', 2, 1, 'Áo Thun Nam', 'Áo Thun Nam', '2017-07-08 17:00:00', '2017-07-08 17:00:00'),
(3, 'Áo Sơ Mi Nam', 'ao-so-mi-nam', 0, 1, 'Áo Sơ Mi Nam', 'Ao Sơ Mi Nam', '2017-07-08 17:00:00', '2017-07-08 17:00:00'),
(4, 'Quần Jean Nam', 'quan-jean-nam', 1, 1, 'Quần Jean Nam', 'Quần Jean Nam', '2017-07-09 01:33:23', '2017-07-09 00:37:53'),
(5, 'Quần Kaki Nam', 'quan-kaki-nam', 2, 1, 'Quần Kaki Nam', 'Quần Kaki Nam', '2017-07-08 17:10:19', '2017-07-09 01:24:34'),
(6, 'Thời Trang Nữ', 'thoi-trang-nu', 0, 0, 'Thời Trang Nữ', 'Thời Trang Nữ', '2017-07-08 20:20:34', '2017-07-08 23:27:34'),
(7, 'Áo Thun Nữ', 'ao-thun-nu', 0, 6, 'Áo Thun Nữ', 'Áo Thun Nữ', '2017-07-08 23:28:23', '2017-07-09 06:16:33'),
(8, 'Váy Đầm Style', 'vay-dam-style', 0, 6, 'Váy Đầm Style', 'Váy Đầm Style', '2017-07-08 23:18:19', '2017-07-09 00:17:17'),
(9, 'Quần Jean Nữ', 'quan-jean-nu', 0, 6, 'Quần Jean Nữ', 'Quần Jean Nữ', '2017-07-09 00:22:23', '2017-07-09 00:19:21'),
(10, 'Ma Bư', 'ma-bu', 0, 0, 'Ma Bư', 'Ma Bư', '2017-07-08 23:26:21', '2017-07-08 23:36:26'),
(11, 'Áo Thun Ma Bư', 'ao-thun-ma-bu', 0, 10, 'Áo Thun Ma Bư', 'Áo Thun Ma Bư', '2017-07-09 01:33:31', '2017-07-09 07:38:45'),
(12, 'Sơ Mi Ma Bư', 'so-mi-ma-bu', 0, 10, 'Sơ Mi Ma Bư', 'Sơ Mi Ma Bư', '2017-07-08 23:29:30', '2017-07-09 04:35:37'),
(13, 'Quần kaki Ma Bư', 'quan-kaki-ma-bu', 0, 10, 'Quần kaki Ma Bư', 'Quần kaki Ma Bư', '2017-07-09 02:29:34', '2017-07-09 07:37:38'),
(14, 'aaaaaaa', 'aaaaaaa', 10, 10, 'aaaaaaa', 'aaaaaaa aaaaaa aaaaaaaa', NULL, NULL),
(15, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 10, 6, 'aaaaaaaaaaaaa', 'aaaa aaaaaa aaaaaa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ct_khuyen_mai`
--

CREATE TABLE `ct_khuyen_mai` (
  `km_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `present` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phome_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_account` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_account` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `remember_token`, `address`, `phome_number`, `type_account`, `number_account`, `note`, `created_at`, `updated_at`) VALUES
(1, 'thanh', 'thanh@gmail.com', '123456', '', 'aaaaaaaaaaaaaaaaa', '01232158126', NULL, NULL, NULL, '2017-07-20 08:36:08', '2017-07-20 08:36:08'),
(2, 'Nguyễn Ngọc', 'thien@gmail.com', '', '', 'Man Thiện, Quận 9', '01211211212', NULL, NULL, NULL, '2017-07-20 09:53:59', '2017-07-20 09:53:59'),
(3, 'Nguyễn Ngọc', 'thienq@gmail.com', '', '', 'Man Thiện, Quận 9', '01211211212', NULL, NULL, NULL, '2017-07-20 09:56:11', '2017-07-20 09:56:11'),
(4, 'Nguyễn Thị Trúc Như', 'trucnhu@gmail.com', '', '', 'Quận 2, Thành Phố Hồ Chí Minh', '01682008563', NULL, NULL, NULL, '2017-07-21 08:22:49', '2017-07-21 08:22:49'),
(5, 'Thành Đẹp Trai', 'n13dccn176@gmail.com', '', '', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01232158126', NULL, NULL, NULL, '2017-07-21 08:30:42', '2017-07-21 08:30:42'),
(6, 'ngoc thanh', 'ngoc@gmail.com', '$2y$10$2lqY88z5ShOEirgcPL6SW.Fnk3gQvkIf5JrYOW2zDQ1Ac4PE0vLLW', 'ZmgbPl0TBqleeUOjmgEFr7lbBjn50cpevR7ptg1CLDgkIfmh8oDWcwdtMIQ2', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01211212121', NULL, NULL, NULL, '2017-07-21 20:37:00', '2017-07-21 20:37:00'),
(7, 'Nguyễn Ngọc Thành', 'thanhptit@gmail.com', '$2y$10$JXa.0smYZk9HgadCnmvznOHe2A9TwOEWqMhUZz8pABDznPxxPir/G', 'lmhENtcT05gkB3310l0C0xyG29gi0bqPySKlFiP43gjLQERDNNmpxEaswgKq', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01232158126', NULL, NULL, NULL, '2017-07-23 20:15:10', '2017-07-23 20:15:10'),
(8, 'Nguyen Ngoc Teo', 'teo@gmail.com', '$2y$10$mHtTdmxMcldV06QADN9Jg.xqgwefHZXdzlkyZRAFtJwmAzb7JDxNS', '4pxkAZtYHcKKmG1i2z3lhWfkBk7KWJVZjaHf4D36HsVd2tsu3E03cy9xo3ps', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01212121211', NULL, NULL, NULL, '2017-07-24 00:43:06', '2017-07-24 00:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mais`
--

CREATE TABLE `khuyen_mais` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_04_144843_create_cate_table', 1),
(4, '2017_07_04_150350_create_product_table', 2),
(5, '2017_07_04_151702_create_product_image_table', 3),
(6, '2017_07_15_151643_create_customers_table', 4),
(7, '2017_07_15_155721_create_bills_table', 4),
(8, '2017_07_15_161131_create_bill__details_table', 4),
(9, '2017_07_23_034123_create_bills_input_table', 5),
(10, '2017_07_23_034901_create_bill__input__details_table', 5),
(11, '2017_07_23_035127_create_c_t_khuyen_mais_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `quantily` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `quantily`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo Thun Nam 1', 'ao-thun-nam-1', 80000, 'Áo thun item không bao giờ lỗi mốt, sự tiện dụng và thoải mái khi mặc. Kiểu dáng đơn giản, chất lượng, cotton mềm mại, form dáng chuẩn đẹp.', '- Áo polo trung niên cộc tay kẻ ô Sunsus thiết kế trẻ trung, kiểu dáng hợp thời trang, đem lại nét năng động, khỏe khoắn, lịch lãm cho phái mạnh khi đến công sở hay dự tiệc, picnic...\r\n\r\n- Chất liệu vải sợi bông thiên nhiên, độ bóng sáng cao, mềm mịn, nhẹ nhàng, thoáng khí, thấm hút mồ hôi, chống nhăn, chống co rút sợi vải.\r\n\r\n- Thiết kế cổ bẻ cổ điển, ngay ngắn, lịch sự; đường may đôi thẳng đều, chắc chắn, tỉ mỉ.\r\n\r\n- Phối vải ca rô ở cổ áo, viền túi ngực lạ mắt, làm tăng thêm tính thẩm mỹ, tránh đơn điệu.', 'aothun-21.jpeg', 'Áo Thun Nam 1', '', 1, 2, 50, 1, '2017-07-09 23:28:25', '2017-07-10 07:24:33'),
(2, 'Sơ Mi trẻ trung', 'so-mi-tre-trung', 250000, 'Áo Sơ Mi không bao giờ lỗi mốt, sự tiện dụng và thoải mái khi mặc. Kiểu dáng đơn giản, chất lượng, cotton mềm mại, form dáng chuẩn đẹp.', '- Áo polo trung niên cộc tay kẻ ô Sunsus thiết kế trẻ trung, kiểu dáng hợp thời trang, đem lại nét năng động, khỏe khoắn, lịch lãm cho phái mạnh khi đến công sở hay dự tiệc, picnic...\r\n\r\n- Chất liệu vải sợi bông thiên nhiên, độ bóng sáng cao, mềm mịn, nhẹ nhàng, thoáng khí, thấm hút mồ hôi, chống nhăn, chống co rút sợi vải.\r\n\r\n- Thiết kế cổ bẻ cổ điển, ngay ngắn, lịch sự; đường may đôi thẳng đều, chắc chắn, tỉ mỉ.\r\n\r\n- Phối vải ca rô ở cổ áo, viền túi ngực lạ mắt, làm tăng thêm tính thẩm mỹ, tránh đơn điệu.', 'somi-1.jpg', 'Sơ Mi trẻ trung', '', 1, 3, 50, 1, '2017-07-09 22:15:19', '2017-07-09 22:15:23'),
(3, 'Quần Jean mốt', 'quan-jean-mot', 400000, 'Quần jeans Titishop QJ161 wash bạc màu xanh da trời với kiểu dáng quần jeans năng động cùng thiết kế wash bạc, phối túi, may chỉ nổi thời thượng cho phái mạnh phong cách thời trang năng động và nam tính. Ngoài ra, quần jeans Titishop sử dụng chất liệu vải cao cấp, thấm hút tốt cho bạn luôn thoải mái trong mọi hoạt động.\r\n', 'Quần jeans Titishop QJ161 wash bạc màu xanh da trời với kiểu dáng quần jeans năng động cùng thiết kế wash bạc, phối túi, may chỉ nổi thời thượng cho phái mạnh phong cách thời trang năng động và nam tính. Ngoài ra, quần jeans Titishop sử dụng chất liệu vải cao cấp, thấm hút tốt cho bạn luôn thoải mái trong mọi hoạt động.\r\n\r\n    Chất liệu: Vải jean\r\n    Thương hiệu LEE Cao cấp\r\n    Form Regular\r\n    Quần ống ôm nhẹ tôn dáng\r\n    Thiết kế wash bạc, may chỉ nổi, phối túi độc đáo\r\n    Gam màu trẻ trung dễ dàng phối với nhiều trang phục\r\n    Size người mẫu mặc: 31. Số đo người mẫu: 94 - 75 - 98 - 180 (cm) ', 'quanjean-1.jpg', 'Quần Jean mốt', '', 1, 4, 50, 1, '2017-07-10 00:25:30', '2017-07-10 01:25:29'),
(4, 'Quần Kaki Đẹp', 'Quan-kaki-dep', 400000, '- Phong cách quần âu tạo cho phái mạnh một bề ngoài lịch lãm và lịch sự.', '- Phong cách quần âu tạo cho phái mạnh một bề ngoài lịch lãm và lịch sự.\r\n\r\n- Thiết kế với nhiều tông màu sáng như màu kem, nâu, đỏ,.....cho bạn nhiều sự lựa chọn phá cách.\r\n\r\n- Sử dụng là loại vải 100% cotton cao cấp, bề mặt mượt đẹp và thoải mái.\r\n\r\n- Độ co giãn vừa phải, tỉ mỉ trong từng đường may\r\n\r\n- Độ bền cao, giặt nhanh khô. Hút ẩm, thấm mồ hôi, giảm nhiệt, mang lại sự thoải mái cho người mặc\r\n', 'quankaki-1.jpg', 'Quần Kaki Đẹp', '', 1, 5, 50, 1, '2017-07-09 22:29:32', '2017-07-09 21:17:24'),
(5, 'Áo Thun Nam 2', 'ao-thun-nam-2', 90000, 'Áo thun không bao giờ lỗi mốt, sự tiện dụng và thoải mái khi mặc. Kiểu dáng đơn giản, chất lượng, cotton mềm mại, form dáng chuẩn đẹp.', '\r\n- Áo polo trung niên cộc tay kẻ ô Sunsus thiết kế trẻ trung, kiểu dáng hợp thời trang, đem lại nét năng động, khỏe khoắn, lịch lãm cho phái mạnh khi đến công sở hay dự tiệc, picnic...\r\n\r\n- Chất liệu vải sợi bông thiên nhiên, độ bóng sáng cao, mềm mịn, nhẹ nhàng, thoáng khí, thấm hút mồ hôi, chống nhăn, chống co rút sợi vải.\r\n\r\n- Thiết kế cổ bẻ cổ điển, ngay ngắn, lịch sự; đường may đôi thẳng đều, chắc chắn, tỉ mỉ.\r\n\r\n- Phối vải ca rô ở cổ áo, viền túi ngực lạ mắt, làm tăng thêm tính thẩm mỹ, tránh đơn điệu.', 'aothun-2.jpg', 'Áo Thun Nam 2', '', 1, 2, 50, 1, '2017-07-11 01:23:23', '2017-07-11 06:24:29'),
(6, 'Áo Sơ Mi 2017', 'ao-so-mi-2017', 300000, 'hàng mới nhập, bảo đảm ưng ý', 'hàng mới nhập, bảo đảm ưng ý, hàng mới nhập, bảo đảm ưng ý, hàng mới nhập, bảo đảm ưng ý', 'somi-7.jpg', 'Áo Sơ Mi 2017', NULL, 1, 3, 50, 1, NULL, NULL),
(8, 'Áo Sơ Mi 2016', 'ao-so-mi-2016', 250000, 'hàng mới nhập, bảo đảm ưng ý', 'hàng mới nhập, bảo đảm ưng ý, hàng mới nhập, bảo đảm ưng ý, hàng mới nhập, bảo đảm ưng ý', 'somi-6.jpg', 'Áo Sơ Mi 2016', NULL, 1, 3, 50, 1, NULL, NULL),
(10, 'quần kaki 2017', 'quan-kaki-2017', 30000, 'ha ha hahahaha', 'aaaaaaaaa aaaaaaaaaaaaa', 'quanjean-10.jpg', 'quần kaki 2017', NULL, 1, 5, 30, 1, NULL, NULL),
(11, 'áo thun nữ moden', 'ao-thun-nu-moden', 100000, 'mới', 'áo thun nữ mới 2017, mẫu mã đẹp', 'ao_thun_nu_rong_.jpg', 'áo thun nữ moden', NULL, 1, 7, 10, 1, NULL, NULL),
(12, 'Áo thun nữ (nữ tính)', 'ao-thun-nu-nu-tinh', 80000, 'đây là nội dung giới thiệu áo thun', 'đây là mô tả nội dung chi tiết, chất liệu vãi, vâng vâng', 'ao_thun_nu_ngan_tay_7.jpg', 'Áo thun nữ (nữ tính)', NULL, 1, 7, 20, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'aothunp-1.jpg', 1, '2017-07-12 01:19:00', '2017-07-12 01:23:27'),
(2, 'aothunp-2.jpg', 1, '2017-07-12 03:24:27', '2017-07-12 03:24:25'),
(3, 'aothunp-3.jpg', 1, '2017-07-12 04:27:29', '2017-07-12 03:24:24'),
(4, 'aothunp-4.jpg', 1, '2017-07-12 01:19:24', '2017-07-12 01:20:22'),
(5, 'somip-1.jpg', 2, '2017-07-13 00:46:27', '2017-07-13 03:27:28'),
(6, 'somip-2.jpg', 2, '2017-07-13 01:27:27', '2017-07-13 03:26:28'),
(7, 'somip-3.jpg', 2, '2017-07-13 03:25:26', '2017-07-13 04:29:30'),
(8, 'somip-4.jpg', 2, '2017-07-13 03:28:27', '2017-07-13 02:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `address`, `phone`, `email`) VALUES
(1, 'Nhà Máy May Minh Hải', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', 'minhhai@gmail.com'),
(2, 'Shop thời trang Ngọc Thành', '97 Man Thiện, Hiệp Phú, quận 9, thành phố Hồ Chí Minh', '01645191604', 'ngocthanhqn95213@gmail.com'),
(3, 'Chợ Bến Thành', 'Quận 2, Thành Phố Hồ Chí Minh', '01232158126', 'teo@gmail.com'),
(4, 'test1', 'Đông Phú, Quế Sơn, Quảng Nam', '01232158126', 'ngocthanhqn95213@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_account` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_account` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `address`, `phone`, `type_account`, `number_account`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Ngọc Thành', '$2y$10$mHtTdmxMcldV06QADN9Jg.xqgwefHZXdzlkyZRAFtJwmAzb7JDxNS', 'ngocthanhqn95@gmail.com', 1, '97 Man Thiện, Hiệp Phú, Quận 9, HCM', '01645191604', 'Admin', '6300205545411', 'vLPG49ySQ3oaZGrCxvd7B9Ho3IWVeHuAwedopmdHX18ambkWaRQJgk6Q0UYm', '2017-07-09 20:25:38', '2017-07-10 00:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `bills_input`
--
ALTER TABLE `bills_input`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_input_user_id_foreign` (`user_id`),
  ADD KEY `bills_input_provider_id_foreign` (`provider_id`);

--
-- Indexes for table `bill_input_details`
--
ALTER TABLE `bill_input_details`
  ADD KEY `bill_input_details_input_id_foreign` (`input_id`);

--
-- Indexes for table `bill__details`
--
ALTER TABLE `bill__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill__details_id_bill_foreign` (`id_bill`),
  ADD KEY `bill__details_id_product_foreign` (`id_product`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_name_unique` (`name`);

--
-- Indexes for table `ct_khuyen_mai`
--
ALTER TABLE `ct_khuyen_mai`
  ADD KEY `ct_khuyen_mai_km_id_foreign` (`km_id`),
  ADD KEY `ct_khuyen_mai_product_id_foreign` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product_id_foreign` (`product_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `bills_input`
--
ALTER TABLE `bills_input`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bill__details`
--
ALTER TABLE `bill__details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bills_input`
--
ALTER TABLE `bills_input`
  ADD CONSTRAINT `bills_input_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_input_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill_input_details`
--
ALTER TABLE `bill_input_details`
  ADD CONSTRAINT `bill_input_details_input_id_foreign` FOREIGN KEY (`input_id`) REFERENCES `bills_input` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill__details`
--
ALTER TABLE `bill__details`
  ADD CONSTRAINT `bill__details_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill__details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_khuyen_mai`
--
ALTER TABLE `ct_khuyen_mai`
  ADD CONSTRAINT `ct_khuyen_mai_km_id_foreign` FOREIGN KEY (`km_id`) REFERENCES `khuyen_mais` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_khuyen_mai_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cate` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
