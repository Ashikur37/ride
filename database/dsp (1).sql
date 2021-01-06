-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 03:18 PM
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
-- Database: `dsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bicycles`
--

CREATE TABLE `bicycles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidpassport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filedocument` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referralcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidpassport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicleregistration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehiclenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licensedocument` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referralcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidpassport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicleregistration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehiclenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licensedocument` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referralcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientinfos`
--

CREATE TABLE `clientinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientinfos`
--

INSERT INTO `clientinfos` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shakil Shanto', 'sakil@gmail.com', '01624213417', NULL, '1234', '1607779232.png', NULL, '2020-12-12 07:20:32', '2020-12-12 07:20:32'),
(5, 'Shakil Shanto', 'shanto@gmail.com', '01624213410', NULL, '1234', '1607782811.png', NULL, '2020-12-12 08:20:11', '2020-12-12 08:20:11'),
(6, 'Shakil Shanto', 'shanto@gmail.com', '01624213411', NULL, '1234', '1607823705.png', NULL, '2020-12-12 19:41:45', '2020-12-12 19:41:45'),
(8, 'Shakil Shanto', 'shanto@gmail.com', '01624213414', NULL, '1234', '1607835552.png', NULL, '2020-12-12 22:59:12', '2020-12-12 22:59:12'),
(9, 'Shakil Shanto', 'shanto@gmail.com', '01624213422', NULL, '12345', '1607835649.png', NULL, '2020-12-12 23:00:49', '2020-12-12 23:00:49'),
(10, 'mohammadullah', 'mohammadullah@gmail.com', '01837510974', NULL, '12345', '1607835750.jpg', NULL, '2020-12-12 23:02:30', '2020-12-12 23:02:30'),
(11, 'Gorib', 'gorib@gmail.com', '01865778060', NULL, '1234', 'no_image.png', NULL, '2020-12-12 23:14:55', '2020-12-12 23:14:55'),
(14, 'Shakil Shanto', 'shanto@gmail.com', '01624213455', NULL, '123', '1608554694.png', NULL, '2020-12-21 06:44:54', '2020-12-21 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidpassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `np_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `driver_type`, `first_name`, `last_name`, `nidpassport`, `np_number`, `gender`, `dob`, `mobile_number`, `city`, `vehicle_registration`, `vehicle_number`, `license_document`, `image`, `password`, `approval`, `referral_code`, `created_at`, `updated_at`) VALUES
(1, 'Bike', 'raju', 'ahmed', 'NID', '1234', 'Male', '2021-01-04', '01865778069', 'Dhaka', 'DHK METRO', '12345', NULL, '1609767769.jpg', '1235', '1', NULL, '2021-01-04 07:42:49', '2021-01-04 07:42:49'),
(3, 'Bike', 'shakil', 'shanto', 'Passport', '1234', 'Male', '2021-01-04', '01624213417', 'Dhaka', 'DHK METRO', '12345', NULL, '1609769039.png', '8888', NULL, NULL, '2021-01-04 08:03:59', '2021-01-04 08:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_03_112339_create_laptops_table', 2),
(4, '2020_11_04_132745_create_mobiles_table', 3),
(5, '2020_11_04_133834_create_mobiles_table', 4),
(6, '2020_11_04_135238_create_mobiles_table', 5),
(7, '2020_11_05_033100_create_headphones_table', 6),
(8, '2020_11_05_052523_create_televisions_table', 7),
(9, '2020_11_22_132048_create_userinfos_table', 8),
(10, '2020_11_22_134220_create_clientinfos_table', 9),
(11, '2020_11_30_130348_create_parcels_table', 10),
(12, '2020_11_30_131233_create_parcels_table', 11),
(13, '2020_12_05_064018_create_profiles_table', 12),
(14, '2020_12_05_065234_create_profiles_table', 13),
(15, '2020_12_05_095852_create_parcels_table', 14),
(16, '2020_12_05_100736_create_parcels_table', 15),
(17, '2020_12_07_025745_create_documents_table', 16),
(18, '2020_12_08_124842_create_packages_table', 17),
(19, '2020_12_08_170213_create_medicines_table', 18),
(20, '2020_12_12_131844_create_clientinfos_table', 19),
(21, '2020_12_21_134916_create_bikes_table', 20),
(22, '2020_12_21_142814_create_bikes_table', 21),
(23, '2020_12_22_113742_create_cars_table', 22),
(24, '2020_12_22_121819_create_bicycles_table', 23),
(25, '2020_12_24_030117_create_bicycles_table', 24),
(26, '2020_12_24_042709_create_bikes_table', 25),
(27, '2021_01_04_115459_create_drivers_table', 26),
(28, '2021_01_04_133802_create_drivers_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receivers_mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_place` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `product_type`, `name`, `mobile`, `receivers_mobile`, `address`, `weight`, `order_date`, `order_type`, `starting_place`, `order_status`, `product_id`, `image`, `approval`, `created_at`, `updated_at`) VALUES
(59, 'Gift', 'Raju Ahmed', '01624213417', '01838193618', 'Afia CNG & Filling Station-2', '5kg', '2021-01-03', '24-72 hrs', NULL, NULL, 'JY1CQ3DS2P', NULL, '1', NULL, NULL),
(60, 'Gift', 'Raju Ahmed', '01624213417', '01838193618', 'Afia CNG & Filling Station-2', '5kg', '2021-01-03', NULL, NULL, NULL, 'P689FCTGR4', NULL, '1', NULL, NULL),
(61, 'Gift', 'emon', '01624213417', '01882891446', 'jamaldi', '5kg', '2021-01-03', '5-8 days', NULL, NULL, '5M4DVUY80Q', NULL, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$f.C.S0WxuFryzX6U9SDruuLkHZAJNuy3zW8qgMSFK57U6ykql4eK2', NULL, '2020-10-28 07:53:47', '2020-10-28 07:53:47'),
(2, 'Raju Ahmed', 'raju@gmail.com', NULL, '$2y$10$s4CYb94SaxDb9AL9kXmlmu3ARKUOXNP5IPSHg8PCcXjcDESNhh1Ta', NULL, '2020-11-29 07:25:50', '2020-11-29 07:25:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bicycles`
--
ALTER TABLE `bicycles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientinfos`
--
ALTER TABLE `clientinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientinfos_mobile_unique` (`mobile`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_mobile_number_unique` (`mobile_number`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bicycles`
--
ALTER TABLE `bicycles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientinfos`
--
ALTER TABLE `clientinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
