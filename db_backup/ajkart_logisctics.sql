-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 06:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajkart_logisctics`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_deliveries`
--

CREATE TABLE `book_deliveries` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `customername` varchar(255) DEFAULT NULL,
  `mobilebumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `product_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`product_data`)),
  `company_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`company_details`)),
  `billingaddress` text DEFAULT NULL,
  `shippingaddress` text DEFAULT NULL,
  `subtotal` varchar(255) DEFAULT NULL,
  `totaldiscount` varchar(255) DEFAULT NULL,
  `grandtotal` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_deliveries`
--

INSERT INTO `book_deliveries` (`id`, `userid`, `customername`, `mobilebumber`, `email`, `pincode`, `state`, `city`, `country`, `product_data`, `company_details`, `billingaddress`, `shippingaddress`, `subtotal`, `totaldiscount`, `grandtotal`, `status`, `created_at`, `updated_at`) VALUES
(8, '44', 'Dinesh Sharma', '5986584857', 'dinesh@gmail.com', '305001', 'Rajasthan', 'Ajmer', 'India', '[{\"product_id\":\"20\",\"product_qty\":\"1\",\"product_disc\":\"500\",\"product_amt\":\"8000\",\"rowdata\":\"{\\\"id\\\":20,\\\"userid\\\":\\\"44\\\",\\\"category\\\":\\\"Mobiles\\\",\\\"subcategory\\\":\\\"Choose...\\\",\\\"price\\\":\\\"10000\\\",\\\"productname\\\":\\\"Galaxy S23 ULTRA\\\",\\\"saleprice\\\":\\\"8500\\\",\\\"coverimage\\\":\\\"1732599229_71lD7eGdW-L.jpg\\\",\\\"skus\\\":\\\"100\\\",\\\"status\\\":\\\"activated\\\",\\\"created_at\\\":\\\"2024-11-26T05:33:49.000000Z\\\",\\\"updated_at\\\":\\\"2024-12-02T04:38:50.000000Z\\\"}\"}]', '{\"id\":1,\"userid\":\"44\",\"companyname\":\"AJ KART LOGISTICS PVT LTD\",\"companylogo\":\"1732706876_mainlogo.jpg\",\"city\":\"Ajmer\",\"state\":\"Rajasthan\",\"country\":\"India\",\"pincode\":\"305001\",\"contactnumber\":\"8958658548\",\"email\":\"kart@gmail.com\",\"officeaddress\":\"Near Vaishali\",\"registrationimage\":\"1732706876_1732605240_3-invoice-generator-example.png\",\"pancardimage\":\"1732706876_1732605404_3-invoice-generator-example.png\",\"created_at\":\"2024-11-27T11:27:56.000000Z\",\"updated_at\":\"2024-11-27T12:03:17.000000Z\"}', 'BSNL Office Opp. Savitri Girls School 305001 Ajmer, Rajasthan', 'BSNL Office Opp. Savitri Girls School 305001 Ajmer, Rajasthan', '8000', '500', '7500', 'Processing', '2024-12-02 05:50:03', '2024-12-03 05:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boys`
--

CREATE TABLE `delivery_boys` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_boys`
--

INSERT INTO `delivery_boys` (`id`, `fullname`, `email`, `mobilenumber`, `city`, `state`, `zipcode`, `address`, `otp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Puneet', 'puneet@gmail.com', '9565485258', 'Ajmer', 'Rajasthan', '305001', 'Gali No.4 Vaishali Nagar, Ajmer', '878594', 'unapproved', '2024-11-28 09:41:49', '2024-12-02 04:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_attributes`
--

CREATE TABLE `form_attributes` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `servicename` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `inputtype` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_attributes`
--

INSERT INTO `form_attributes` (`id`, `type`, `servicename`, `value`, `inputtype`, `created_at`, `updated_at`) VALUES
(5, 'Services', 'GST No.', 'GST One', 'email', '2024-11-05 10:31:44', '2024-11-05 12:02:58'),
(6, 'Services', 'GST No.', 'GST Two', 'text', '2024-11-05 12:02:13', '2024-11-05 12:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Master',
  `iconimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `label`, `value`, `type`, `iconimage`, `created_at`, `updated_at`) VALUES
(5, 'Shoes', 'Shoes', 'Master', NULL, '2024-11-11 11:01:34', '2024-11-11 11:01:34'),
(6, 'Casual', 'Casual', 'Shoes', NULL, '2024-11-11 11:01:51', '2024-11-11 11:01:51'),
(7, 'Sneakers', 'Sneakers', 'Shoes', NULL, '2024-11-11 11:02:00', '2024-11-11 11:02:00'),
(8, 'Sports', 'Sports', 'Shoes', NULL, '2024-11-11 11:02:08', '2024-11-11 11:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_04_094609_add_two_factor_columns_to_users_table', 1),
(5, '2024_09_04_094634_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('nitzz@gmail.com', '$2y$12$8KjOvBqZkyCR13QIcyx2a.HOcwfeZDj6t.5pivgTHT0m82TCtOgB6', '2024-09-12 00:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preeti_zintas`
--

CREATE TABLE `preeti_zintas` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `saleprice` varchar(255) DEFAULT NULL,
  `coverimage` varchar(255) DEFAULT NULL,
  `skus` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preeti_zintas`
--

INSERT INTO `preeti_zintas` (`id`, `userid`, `category`, `subcategory`, `price`, `productname`, `saleprice`, `coverimage`, `skus`, `status`, `created_at`, `updated_at`) VALUES
(20, '44', 'Mobiles', 'Samsung', '10000', 'Galaxy S23 ULTRA', '8500', '1732599229_71lD7eGdW-L.jpg', '100', 'activated', '2024-11-26 05:33:49', '2024-12-02 10:39:59'),
(21, '44', 'Mobiles', 'Samsung', '20000', 'Galaxy A54 5g', '23390', '1732599366_shopping.webp', '5', 'inprocess', '2024-11-26 05:36:06', '2024-11-28 12:23:01'),
(22, '44', 'Mobiles', 'Samsung', '54000', 'Galaxy Z Flip3 5G', '51000', '1732682963_shopping.webp', '5', 'inprocess', '2024-11-27 04:49:23', '2024-12-02 10:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `register_companies`
--

CREATE TABLE `register_companies` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `officeaddress` text DEFAULT NULL,
  `registrationimage` varchar(255) DEFAULT NULL,
  `pancardimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_companies`
--

INSERT INTO `register_companies` (`id`, `userid`, `companyname`, `companylogo`, `city`, `state`, `country`, `pincode`, `contactnumber`, `email`, `officeaddress`, `registrationimage`, `pancardimage`, `created_at`, `updated_at`) VALUES
(1, '44', 'AJ KART LOGISTICS PVT LTD', '1732706876_mainlogo.jpg', 'Ajmer', 'Rajasthan', 'India', '305001', '8958658548', 'kart@gmail.com', 'Near Vaishali', '1732706876_1732605240_3-invoice-generator-example.png', '1732706876_1732605404_3-invoice-generator-example.png', '2024-11-27 11:27:56', '2024-11-27 12:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `register_users`
--

CREATE TABLE `register_users` (
  `id` int(11) NOT NULL,
  `mobilenumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verifystatus` varchar(255) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `otp` varchar(22) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_users`
--

INSERT INTO `register_users` (`id`, `mobilenumber`, `email`, `verifystatus`, `created_at`, `updated_at`, `otp`, `username`) VALUES
(44, '1234567894', 'anshul@gmail.com', '1', '2024-11-08 04:34:44', '2024-12-03 04:40:08', '782121', 'Anshul'),
(45, '1234567890', 'nb@gmail.com', '1', '2024-11-08 12:32:41', '2024-11-25 04:37:23', '804008', 'Nitzz'),
(46, '1111111111', 'ans@gmail.com', '1', '2024-11-11 06:41:25', '2024-11-11 09:30:46', '342877', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Dc7KyXxoOlCoXLrifcNLdrXS0XjbepKpeKCgfcQY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWWd3cnQzRDJnTjgxVUh0VWo2dzNCUEdiWHIyeWdOTjlKV3JPRXdUOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92aWV3b3JkZXJpbnZvaWNlLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU1OiJsb2dpbl9kZWxpdmVyeV81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1NToibG9naW5fY3VzdG9tZXJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0NDtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJGw2LjAzVWI3ek0vZHdMSlhYaERuMi5TZ3NKTTgwNHc2UWNqMTgvdDFVaVZ4b0FlTXNLRkhpIjt9', 1733144872),
('GJiYtGjrLAngKT0JRm0xrmJorPNlElarDiJT300t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic2RvQmY4c2tERVhDZlpqdXl1bVJvZFVqMjdrYzRtWkFoUTFKYlFvUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1NToibG9naW5fY3VzdG9tZXJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0NDt9', 1733203832);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Amit', 'ajkart@gmail.com', NULL, '$2y$12$l6.03Ub7zM/dwLJXXhDn2.SgsJM804w6Qcj18/t1UiVxoAeMsKFHi', NULL, NULL, NULL, 'VD6CY8VDlQuN0u9N8tqS4vtT2QFZnMowgv3EWcxX7CCKHzvpUuoTLu6UjELW', NULL, NULL, '2024-09-04 04:20:07', '2024-09-04 04:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_masters`
--

CREATE TABLE `user_masters` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_masters`
--

INSERT INTO `user_masters` (`id`, `userid`, `type`, `label`, `created_at`, `updated_at`) VALUES
(19, '44', 'Master', 'Mobiles', '2024-11-26 05:32:21', '2024-11-26 05:32:21'),
(20, '44', 'Mobiles', 'Samsung', '2024-11-26 05:32:42', '2024-11-26 05:32:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_deliveries`
--
ALTER TABLE `book_deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_attributes`
--
ALTER TABLE `form_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `preeti_zintas`
--
ALTER TABLE `preeti_zintas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_companies`
--
ALTER TABLE `register_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_masters`
--
ALTER TABLE `user_masters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_deliveries`
--
ALTER TABLE `book_deliveries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_attributes`
--
ALTER TABLE `form_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preeti_zintas`
--
ALTER TABLE `preeti_zintas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register_companies`
--
ALTER TABLE `register_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_users`
--
ALTER TABLE `register_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_masters`
--
ALTER TABLE `user_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
