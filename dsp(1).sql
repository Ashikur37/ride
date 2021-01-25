-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 05:22 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `bike_trips`
--

CREATE TABLE `bike_trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lat1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lon1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lon2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bike_id` int(11) NOT NULL DEFAULT 0,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bike_trips`
--

INSERT INTO `bike_trips` (`id`, `lat1`, `lat2`, `lon1`, `lon2`, `mobile`, `bike_id`, `amount`, `status`, `payment_status`, `payment_method`, `payment_details`, `created_at`, `updated_at`, `rating`, `review`) VALUES
(1, '23.639990333333333', '23.620677864138756', '90.59381866666666', '90.50678634855143', '01838193629', 41, 109, 3, 0, NULL, NULL, '2021-01-23 07:50:08', '2021-01-23 08:31:22', NULL, NULL),
(2, '23.639990333333333', '23.62319430837493', '90.59381866666666', '90.50163650724284', '01838193629', 42, 114, 0, 0, NULL, NULL, '2021-01-23 08:09:18', '2021-01-23 08:14:09', NULL, NULL),
(3, '23.6399115', '23.627204586175562', '90.5939065', '90.48558817114257', '01838193629', 0, 133, 0, 0, NULL, NULL, '2021-01-23 08:45:12', '2021-01-23 08:45:14', NULL, NULL),
(4, '23.639990333333333', '23.65684710155238', '90.59381866666666', '90.50712967130534', '01838193629', 42, 108, 0, 0, NULL, NULL, '2021-01-23 09:06:38', '2021-01-23 09:07:32', NULL, NULL);

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
(14, 'Shakil Shanto', 'shanto@gmail.com', '01624213455', NULL, '123', '1608554694.png', NULL, '2020-12-21 06:44:54', '2020-12-21 06:44:54'),
(15, 'Raju Ahmed', 'raju@gmail.com', '01624213418', NULL, '12345', '1610295945.png', NULL, '2021-01-10 10:25:45', '2021-01-10 10:25:45'),
(16, 'saddam', 'saddam@gmail.com', '01998448489', NULL, '1111', '1610342202.png', NULL, '2021-01-10 23:16:42', '2021-01-10 23:16:42'),
(17, 'emran', 'emran@gmail.com', '01838193627', NULL, '0000', '1610368029.png', NULL, '2021-01-11 06:27:09', '2021-01-11 06:27:09'),
(18, 'onik', 'onik@gmail.com', '01712153680', NULL, '441944', '1610551471.png', NULL, '2021-01-13 09:24:31', '2021-01-13 09:24:31'),
(19, 'sajid', 'sajid@gmail.com', '01712153688', NULL, '1122', '1610714443.png', NULL, '2021-01-15 06:40:43', '2021-01-15 06:40:43'),
(20, 'faysal', 'faysal@gmail.com', '01712153687', NULL, '5566', '1610775069.png', NULL, '2021-01-15 23:31:09', '2021-01-15 23:31:09'),
(21, 'sahadat Hossain', 'sahadat88@gmail.com', '01998448488', NULL, '8888', '1610776361.png', NULL, '2021-01-15 23:52:41', '2021-01-15 23:52:41'),
(22, 'onty', '01624213417', '01983111065', NULL, '2222', '1610861525.php', NULL, '2021-01-16 23:32:05', '2021-01-16 23:32:05'),
(23, 'sujon', '01624213417', '01864286234', NULL, '3333', '1610908518.png', NULL, '2021-01-17 12:35:19', '2021-01-17 12:35:19'),
(25, 'hasan ahmed', 'hasan@gmail.com', '01838193628', NULL, '8888', '1610951953.png', NULL, '2021-01-18 00:39:13', '2021-01-18 00:39:13'),
(26, 'rahim', 'rahim@gmail.com', '0183819417', NULL, '5555', '1610952092.png', NULL, '2021-01-18 00:41:32', '2021-01-18 00:41:32'),
(27, 'sojib', 'sojib@gmail.com', '01852280359', NULL, '3333', '1610984144.png', NULL, '2021-01-18 09:35:44', '2021-01-18 09:35:44'),
(28, 'tariqul', 'tariqul@gmail.com', '01882891446', NULL, '4444', '1610989902.png', NULL, '2021-01-18 11:11:42', '2021-01-18 11:11:42'),
(29, 'noyon', 'noyo@gmail.com', '01712153689', NULL, '0000', '1611021745.png', NULL, '2021-01-18 20:02:25', '2021-01-18 20:02:25'),
(30, 'tamim', 'tamim@gmail.com', '01865778071', NULL, '0000', '1611030120.png', NULL, '2021-01-18 22:22:00', '2021-01-18 22:22:00'),
(32, 'tuhin', 'tuhin@gmail.com', '01838193629', NULL, '0000', '1611318758.png', NULL, '2021-01-22 06:32:38', '2021-01-22 06:32:38'),
(33, 'tariqul islam', 'tariqul46@gmail.com', '01934217946', NULL, '0000', '1611384455.png', NULL, '2021-01-23 00:47:35', '2021-01-23 00:47:35');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `lat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `driver_type`, `first_name`, `last_name`, `nidpassport`, `np_number`, `gender`, `dob`, `mobile_number`, `city`, `vehicle_registration`, `vehicle_number`, `license_document`, `image`, `password`, `approval`, `referral_code`, `created_at`, `updated_at`, `lat`, `lon`) VALUES
(27, 'Bike', 'fahim', 'hasan', 'NID', '1234', 'Male', '2021-01-16', '01712153681', 'Dhaka', 'DHK METRO', '12345', '1610774807.docx', NULL, '3344', '1', NULL, '2021-01-15 23:26:47', '2021-01-20 08:07:18', '23.6399692', '90.5945131'),
(31, 'Bike', 'limon', 'hasan', 'NID', NULL, NULL, '2021-01-17', '01712153689', 'Dhaka', 'DHK METRO', '123456', '1610862707.docx', '1610862707.jpg', '7777', '1', NULL, '2021-01-16 23:51:47', '2021-01-16 23:51:47', '', ''),
(32, 'Bike', 'abdul', 'ali', 'NID', '1234', 'Male', '2021-01-18', '01986015750', 'Dhaka', 'DHK METRO', '12345', '1610908376.docx', '1610908376.png', '2222', '1', NULL, '2021-01-17 12:32:56', '2021-01-17 12:32:56', '', ''),
(33, 'Bike', 'Mir', 'Rayhan', 'NID', '1234', 'Male', '2021-01-18', '01865778070', 'Dhaka', 'CTG METRO', '12345', '1610951671.docx', '1610951671.jpg', '0000', '1', NULL, '2021-01-18 00:34:32', '2021-01-18 00:34:32', '', ''),
(35, 'Bike', 'raju', 'ahmed', 'NID', '1234', 'Male', '2021-01-18', '01865778069', 'Dhaka', 'DHK METRO', '123456', '1610984535.docx', '1610984535.jpg', '0987', '1', NULL, '2021-01-18 09:42:15', '2021-01-22 23:45:00', '23.5978979', '90.61963430000002'),
(36, 'Bike', 'roman', 'miah', 'NID', '1234', 'Male', '2021-01-18', '01757438542', 'Dhaka', 'DHK METRO', '0162421', '1610989528.docx', '1610989528.png', '1111', '1', NULL, '2021-01-18 11:05:28', '2021-01-18 22:36:06', '23.597881899999997', '90.61967489999999'),
(38, 'Bike', 'arman', 'sharif', 'NID', '1234', 'Male', '1997-10-10', '01632109022', 'Dhaka', 'DHK METRO', '1234', '1611020226.docx', '1611020226.jpg', '0000', '1', NULL, '2021-01-18 19:37:06', '2021-01-22 09:03:46', '23.6399913', '90.594552'),
(39, 'Bike', 'emran', 'hasan', 'NID', '1234', 'Male', '2021-01-19', '01838193628', 'Dhaka', 'DHK METRO', '01624213', '1611029846.docx', '1611029846.png', '0000', '1', NULL, '2021-01-18 22:17:26', '2021-01-22 09:01:29', '23.6399926', '90.5945618'),
(40, 'Bike', 'Ridoy', 'hasan', 'NID', '1234', 'Male', '2021-01-22', '01838193627', 'Dhaka', 'DHK METRO', '123456', '1611318412.docx', '1611318412.png', '0000', '1', NULL, '2021-01-22 06:26:53', '2021-01-25 05:51:31', '23.631648499999997', '90.5926406'),
(41, 'Bike', 'tariqul', 'islam', 'NID', '1234', 'Male', '2021-01-23', '01934217946', 'Dhaka', 'DHK METRO', '1234', '1611404758.docx', '1611404758.png', '0000', '1', NULL, '2021-01-23 06:25:58', '2021-01-23 07:41:04', '23.6399676', '90.5945847'),
(42, 'Bike', 'simanto', 'hasan', 'NID', '1234', 'Male', '2021-01-23', '01302898736', 'Dhaka', 'DHK METRO', '12345', '1611405618.docx', '1611405618.png', '0000', '1', NULL, '2021-01-23 06:40:18', '2021-01-23 06:40:18', NULL, NULL);

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
(28, '2021_01_04_133802_create_drivers_table', 27),
(29, '2021_01_09_045739_create_bike_trips_table', 28);

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
(62, 'Gift', 'Arman Sarif', '01624213417', '01624213417', 'Afia CNG & Filling Station-2', '5kg', '2021-01-12', '24-72 hrs', NULL, 'Delivered', '12GU30A4LX', NULL, '1', NULL, NULL);

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
-- Indexes for table `bike_trips`
--
ALTER TABLE `bike_trips`
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
-- AUTO_INCREMENT for table `bike_trips`
--
ALTER TABLE `bike_trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientinfos`
--
ALTER TABLE `clientinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
