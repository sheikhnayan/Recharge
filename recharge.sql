-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2021 at 02:20 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(9, '2021_05_03_220902_create_sessions_table', 2),
(10, '2021_05_04_005559_add_created_by_to_users_table', 3),
(11, '2021_05_06_193056_create_operators_table', 4),
(12, '2021_05_06_193843_create_recharges_table', 5),
(13, '2021_05_22_125605_create_sims_table', 6),
(15, '2021_05_25_193623_create_sim_operators_table', 7),
(16, '2021_06_03_205052_create_offers_table', 8),
(17, '2021_06_05_165458_create_sim_orders_table', 9),
(18, '2021_06_18_232536_add_file_to_sim_orders_table', 10),
(19, '2021_06_20_022829_add_img_to_sim_operators_table', 11),
(20, '2021_06_20_031845_add_price_to_sim_orders_table', 12),
(21, '2021_06_24_080116_add_file_2_to_sim_orders_table', 13),
(22, '2021_06_28_014752_add_nationality_to_users_table', 14),
(23, '2021_06_28_015012_add_nationality_to_sim_orders_table', 15),
(24, '2021_06_28_025245_add_reseller_id_to_sims_table', 16),
(25, '2021_06_28_032201_add_tables_to_sim_offers_table', 17),
(26, '2021_07_15_195803_create_orders_table', 18),
(27, '2021_08_08_192954_create_phones_table', 19),
(28, '2021_08_09_020110_add_sell_price_and_recharge_to_sim_orders_table', 20),
(29, '2021_08_09_073959_add_reseller_id_to_orders_table', 21),
(30, '2021_08_09_083949_add_status_to_phones_table', 22),
(31, '2021_08_09_093205_create_phone_orders_table', 23),
(32, '2021_08_22_085200_add_label_to_orders', 24),
(43, '2021_08_23_195107_add_fields_to_users', 25),
(44, '2021_08_24_155835_add_price_to_phones', 25),
(45, '2021_08_29_194128_add_new_recharge_com_fields_column_in_users_table', 25),
(46, '2021_08_29_194719_add_new_admin_com_fields_column_in_users_table', 25),
(47, '2021_08_30_000405_add_status_column_in_sim_orders_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `offer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `costo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ricarica` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valida` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minuti` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minuti_internazionale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minuti_illimitati` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minuti_internazionali_validi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `altre_informazioni` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer`, `operator`, `created_at`, `updated_at`, `costo`, `ricarica`, `valida`, `internet`, `minuti`, `minuti_internazionale`, `minuti_illimitati`, `minuti_internazionali_validi`, `altre_informazioni`) VALUES
(4, 'tt', 'Banglalink', '2021-06-27 21:45:02', '2021-06-27 21:45:02', 'gg', 'gg', 'ggg', 'ggg', 'gg', 'gg', 'gg', 'gg', 'gg'),
(5, 'cyc plus', 'Banglalink', '2021-08-09 05:20:04', '2021-08-09 05:20:04', '8,99', '10', 'illimitati', '70GB', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

DROP TABLE IF EXISTS `operators`;
CREATE TABLE IF NOT EXISTS `operators` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfirst_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsurname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `rdob` date DEFAULT NULL,
  `document_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdocument_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rphone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `raddress` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cap` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcap` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcountry` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rstate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rdist` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_date_to_receive` date DEFAULT NULL,
  `delivery_condition` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfBox` int DEFAULT NULL,
  `goods_value` decimal(8,2) DEFAULT NULL,
  `productType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `perKg` int DEFAULT NULL,
  `cusCharge` decimal(8,2) DEFAULT NULL,
  `homeDeliveryCharge` decimal(8,2) DEFAULT NULL,
  `addiCharge` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `agent_comm` decimal(8,2) DEFAULT NULL,
  `delivery_way` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departure_airport` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_airport` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reseller_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `rfirst_name`, `surname`, `rsurname`, `dob`, `rdob`, `document_number`, `rdocument_number`, `phone`, `rphone`, `email`, `remail`, `address`, `raddress`, `cap`, `rcap`, `country`, `rcountry`, `state`, `rstate`, `dist`, `rdist`, `city`, `rcity`, `expected_date_to_receive`, `delivery_condition`, `numberOfBox`, `goods_value`, `productType`, `weight`, `perKg`, `cusCharge`, `homeDeliveryCharge`, `addiCharge`, `total`, `agent_comm`, `delivery_way`, `departure_airport`, `arrival_airport`, `product1`, `product2`, `product3`, `product4`, `product5`, `quantity1`, `quantity2`, `quantity3`, `quantity4`, `quantity5`, `status`, `created_at`, `updated_at`, `reseller_id`, `label`) VALUES
(4, 'asdf', 'asdf', 'sadf', 'safd', '2021-08-12', '2021-08-12', 'sadf', 'asfd', '54656', '56', 'sd@s.com', 'sdfsdf@asfafh.com', 'asdf', 'sadf', NULL, NULL, 'Bangladesh', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11', 'Home Delivary in Dhaka City', 1, '4.00', 'Metal', 7, 0, '2.00', '1.00', '1.00', '0.00', '0.00', 'By Air', 'Dhaka', 'Chittagong', 'asdf', 'sdaf', 'sdf', 'sdfa', 'sadf', '11', '5', '6', '7', '8', 'pending', '2021-08-09 05:44:34', '2021-08-29 19:20:34', '2', NULL),
(2, 's', 'sdf', 's', 'asdf', '2021-08-11', '2021-08-04', 's', 'sadf', '65', '50+65', 's@s.com', 'asf@jhgsdf.com', 'sdfg', 'asdfasdf', NULL, NULL, 'America', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-11', 'Home Delivary in Dhaka City', 2, '544.00', 'Metal', 4789, 0, '456.00', '456456.00', '756.00', '0.00', '0.00', 'By Road', 'Khulna', 'Chittagong', 'sdf', 'fdgh', 'dfg', 'fgh', 'gfhj', '5', '4', '4', '5', '6', 'pending', '2021-08-09 00:57:42', '2021-08-29 19:20:35', '2', NULL),
(3, 'test', 'sdf', 'test', 'asdf', '2021-08-13', '2021-08-19', '5555', 'sadf', '55555', '50+65', 'test@test.com', 'asf@jhgsdf.com', 'asd', 'asdf', NULL, NULL, 'Bangladesh', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-12', 'Home Delivary in Dhaka City', 2, '4.00', 'Metal', 8, 0, '4.00', '4.00', '45655.00', '8.00', '0.00', 'By Air', 'Dhaka', 'Khulna', 'sd', 'dd', 'dd', 'dd', 'dd', '5', '5', '5', '5', '5', 'confirmed', '2021-08-09 01:43:27', '2021-08-29 19:23:18', '2', NULL),
(5, 'sheikh', 'sdf', 'sheikh', 'asdf', '2021-08-04', '2021-08-05', '5555', 'asfd', '55555', '5', 'sdf@asf.com', 'asf@jhgsdf.com', '5', '5', NULL, NULL, 'Afghanistan', 'Albania', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06', 'Received from Dhaka Office', 2, '5.00', 'Wooden', 5, 5, '5.00', '3.00', '5.00', '5.53', '0.00', 'By Air', 'Baghlan', 'Bulqize', '5', NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, 'on_the_way', '2021-08-29 18:47:49', '2021-08-29 19:24:11', '2', '93BKOQezqQb28gttG6rsRwT3i48yTLcJGYJWUmSs.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `dis_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `phone`, `price`, `image`, `description`, `created_at`, `updated_at`, `status`, `dis_price`) VALUES
(1, 'test', '500', 'Jw88actwfsBWifntjDlNckynwIce73EJEGK7CGj6.png', 'sadfsdfsadf', '2021-08-08 16:04:10', '2021-08-08 16:04:10', 'available', NULL),
(2, 't', '5', 'C:\\wamp64\\tmp\\phpF210.tmp', 'dsaf', '2021-08-09 02:58:08', '2021-08-09 02:58:08', 'available', NULL),
(3, 'as', 'as', 'public/tIREDlZ366uCIsc5cLHaZaIh9M2IndVGFSWeF8OE.png', 'sdf', '2021-08-09 03:02:03', '2021-08-09 03:02:03', 'available', NULL),
(4, 's', '5', 'phone/uploads/Opm5KnLuEvlMFNIFLFZI5JUNFABxzE7DhRUSMlKe.png', 'sa', '2021-08-09 03:03:28', '2021-08-09 03:03:28', 'available', NULL),
(5, 'asd', 'asd', 'phone/uploads/ut4xhodNdNAX5bCulmEAGOZsfRttzBsyNsJk40uN.png', 'asd', '2021-08-09 03:06:16', '2021-08-09 03:06:16', 'available', NULL),
(6, 'sdf', '5', 'phone/uploads/Ivs1IgeqvhZzL335Ow3kteFTvpYsIy6iKS6pR5v9.png', 'sdf', '2021-08-09 03:12:38', '2021-08-09 03:12:38', 'available', NULL),
(7, 'asdf', '4554', 'sim/uploads/tfmKN9jKMn58V3hOInGoMVxsB7B4GZu32eHJoz0B.png', 'asdfsfh fo sfkhshf', '2021-08-09 05:48:19', '2021-08-09 05:48:19', 'available', NULL),
(8, '06606', '4554', 'sim/uploads/enPIRMmIeA8SNNSeSoJFGRflpdTpu83oRbVHTWgY.png', 'sdf', '2021-08-29 15:18:47', '2021-08-29 15:18:47', 'available', '2');

-- --------------------------------------------------------

--
-- Table structure for table `phone_orders`
--

DROP TABLE IF EXISTS `phone_orders`;
CREATE TABLE IF NOT EXISTS `phone_orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `reseller_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_orders`
--

INSERT INTO `phone_orders` (`id`, `reseller_id`, `phone_name`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'asd', '5', 'pending', '2021-08-09 03:44:00', '2021-08-09 03:53:11'),
(2, '7', 'sdf', '4', 'pending', '2021-08-09 04:42:58', '2021-08-09 04:42:58'),
(3, '2', 'asdf', '4', 'pending', '2021-08-09 05:48:47', '2021-08-09 05:48:47'),
(4, '11', 'sdf', '4', 'pending', '2021-08-09 05:55:37', '2021-08-09 05:55:37'),
(5, '11', 'test', '1', 'pending', '2021-08-29 13:08:31', '2021-08-29 13:08:31'),
(6, '2', 'test', '2', 'pending', '2021-08-29 15:26:03', '2021-08-29 15:26:03'),
(7, '11', 'test', '2', 'pending', '2021-08-29 17:40:04', '2021-08-29 17:40:04'),
(8, '11', '06606', '2', 'pending', '2021-08-29 17:40:51', '2021-08-29 17:40:51'),
(9, '11', '06606', '2', 'sold', '2021-08-29 18:15:17', '2021-08-29 18:32:03'),
(10, '11', '06606', '2', 'cancel', '2021-08-29 18:32:30', '2021-08-29 18:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `recharges`
--

DROP TABLE IF EXISTS `recharges`;
CREATE TABLE IF NOT EXISTS `recharges` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `recharge_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CTSRhxcrBCd0Xtgqjbze4kDokGhByT4pKv8yghmg', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWNoYXJnZS9yZWNoYXJnZS1pdGFseSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJZUTJYRm1NdnFCUUwzemh4dkFZd0I4aTVOVmQ1dExlNmd5SWQ3QlplIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkQ0M3c1diNE05YjNHNjJVUmhLZUtPZTVycjJkZDJ1QkJyb0xDcWdPQ1VhbUtIWVovY0JtZ2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJENDN3NXYjRNOWIzRzYyVVJoS2VLT2U1cnIyZGQydUJCcm9MQ3FnT0NVYW1LSFlaL2NCbWdpIjt9', 1630286869),
('B7LeuRcRIsrgkwaWVLzUptfqkAHYtWF8Zwfe6cDl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiY2pUM3o2ODgyZE4wRG1hWEMyaDFwam5neE1UajFVM1NGNDlrcmhwMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUi9SZUhuNVFFc3pGYm9WQ0xmWkVaTzMyMGpENHhiSzB1Z2dWREFpNTduanJJWFV6QjZ5eTIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFIvUmVIbjVRRXN6RmJvVkNMZlpFWk8zMjBqRDR4YkswdWdnVkRBaTU3bmpySVhVekI2eXkyIjt9', 1630286233),
('sNs8XJKXjMv70LuqmRBX5qYuncgDFiZQr0YKdNwj', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiN0hiZ3piMWt1SWNtWGJNbW5mbHJaNkxwVVFIQ3BVY3kwSFJJVjc4NyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2FyZ28vb3JkZXItbGlzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRDQzdzV2I0TTliM0c2MlVSaEtlS09lNXJyMmRkMnVCQnJvTENxZ09DVWFtS0hZWi9jQm1naSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQ0M3c1diNE05YjNHNjJVUmhLZUtPZTVycjJkZDJ1QkJyb0xDcWdPQ1VhbUtIWVovY0JtZ2kiO30=', 1630286261),
('oH4hkRLr7nikh8JHigAVHlDntMkUDsWFsO2xVGje', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic25pdzVvTGZWdU84YVpwRlZSSmxNYnVJSE14Tll4U21sU2JhVHVzcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWNoYXJnZS9yZWNoYXJnZS1pbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630286809);

-- --------------------------------------------------------

--
-- Table structure for table `sims`
--

DROP TABLE IF EXISTS `sims`;
CREATE TABLE IF NOT EXISTS `sims` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iccid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_date` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reseller_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sims`
--

INSERT INTO `sims` (`id`, `operator`, `iccid`, `sim_number`, `buy_date`, `buy_price`, `status`, `created_at`, `updated_at`, `reseller_id`) VALUES
(1, 'Banglalink', '89723498', '23897392847', '2021-06-20 10:28:33', '239847', 'available', '2021-06-20 04:28:33', '2021-06-27 20:42:30', '1'),
(2, 'Banglalink', '666', '88888', '2021-06-24 17:46:32', '99999', 'available', '2021-06-24 11:46:32', '2021-06-27 21:00:45', '1'),
(3, 'Banglalink', '55555', '5555', '2021-08-08 22:38:30', '5', NULL, '2021-08-08 16:38:30', '2021-08-08 16:38:30', NULL),
(4, 'Banglalink', '6', '6', '2021-08-08 22:39:31', '6', 'available', '2021-08-08 16:39:31', '2021-08-09 05:26:56', NULL),
(5, 'Banglalink', '77', '77', '2021-08-08 22:40:19', '77', 'available', '2021-08-08 16:40:19', '2021-08-08 16:40:19', NULL),
(6, 'Banglalink', '88', '88', '2021-08-08 22:42:36', '88', 'available', '2021-08-08 16:42:36', '2021-08-08 16:42:36', NULL),
(7, 'Banglalink', '9', '9', '2021-08-08 22:43:04', '9', 'available', '2021-08-08 16:43:04', '2021-08-08 16:43:04', '7'),
(8, 'Banglalink', NULL, NULL, '2021-08-09 02:54:29', NULL, 'available', '2021-08-08 20:54:29', '2021-08-08 20:54:29', '7'),
(9, 'Banglalink', NULL, NULL, '2021-08-09 02:54:34', NULL, 'available', '2021-08-08 20:54:34', '2021-08-08 20:54:34', '7'),
(10, 'Banglalink', NULL, NULL, '2021-08-09 02:55:06', NULL, 'available', '2021-08-08 20:55:06', '2021-08-08 20:55:06', '7'),
(11, 'Banglalink', '5', '5', '2021-08-09 02:55:29', '5', 'available', '2021-08-08 20:55:29', '2021-08-08 20:55:29', '7'),
(12, 'Banglalink', '5', '5', '2021-08-09 02:56:33', '5', 'available', '2021-08-08 20:56:33', '2021-08-08 20:56:33', '7'),
(13, 'Banglalink', NULL, NULL, '2021-08-09 11:11:06', NULL, 'available', '2021-08-09 05:11:06', '2021-08-09 05:11:06', '7'),
(14, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:12:07', '10', 'available', '2021-08-09 05:12:07', '2021-08-09 05:12:07', '9'),
(15, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:13:49', '10', 'available', '2021-08-09 05:13:49', '2021-08-09 05:13:49', '9'),
(16, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:13:58', '10', 'available', '2021-08-09 05:13:58', '2021-08-09 05:13:58', '9'),
(17, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:15:10', '10', 'available', '2021-08-09 05:15:10', '2021-08-09 05:15:10', '9'),
(18, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:15:51', '10', 'available', '2021-08-09 05:15:51', '2021-08-09 05:31:59', '9'),
(19, 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 11:16:32', '12', 'sold', '2021-08-09 05:16:32', '2021-08-29 17:36:31', '9'),
(20, 'Banglalink', '500', '3897666667', '2021-08-09 11:16:49', '10', 'pending', '2021-08-09 05:16:49', '2021-08-09 05:28:51', '7'),
(21, 'Banglalink', NULL, NULL, '2021-08-21 01:13:13', NULL, 'available', '2021-08-20 19:13:13', '2021-08-29 17:48:54', '11'),
(22, 'Grameen', '500', '3897666667', '2021-08-29 23:49:34', '4', 'pending', '2021-08-29 17:49:34', '2021-08-29 18:14:57', '11');

-- --------------------------------------------------------

--
-- Table structure for table `sim_operators`
--

DROP TABLE IF EXISTS `sim_operators`;
CREATE TABLE IF NOT EXISTS `sim_operators` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sim_operators`
--

INSERT INTO `sim_operators` (`id`, `operator`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Banglalink', '2021-06-20 04:27:49', '2021-06-20 04:27:49', 'operator/heFNWqYCsaozT2XAkZ3Tn69EOQsbMUbSYPoFdH6l.jpg'),
(2, 'Grameen', '2021-08-20 19:06:00', '2021-08-20 19:06:00', 'operator/LMivZ0gOdX3mjhqaGVrmE9YVVjQNN7ZydcyNdasH.png');

-- --------------------------------------------------------

--
-- Table structure for table `sim_orders`
--

DROP TABLE IF EXISTS `sim_orders`;
CREATE TABLE IF NOT EXISTS `sim_orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `offer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_iccid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_sim_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reseller_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iccid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recharge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sim_orders`
--

INSERT INTO `sim_orders` (`id`, `offer`, `first_name`, `last_name`, `gender`, `dob`, `codice`, `alt_operator`, `alt_iccid`, `alt_sim_number`, `reseller_id`, `sim_id`, `operator`, `iccid`, `sim_number`, `created_at`, `updated_at`, `file`, `price`, `file_2`, `nationality`, `sell_price`, `recharge`, `status`) VALUES
(4, NULL, 'JAHID HASSAN', 'hh', 'Male', '08/03/2021', '45945', 'Banglalink', 's', '848489189489', '2', '4', 'Banglalink', '6', '6', '2021-08-08 20:30:18', '2021-08-08 20:30:18', 'sim/uploads/uwjTJpbkNTTBauyzWmwN6Vw7XVkv13ASF55hgVem.png', '6', 'sim/uploads/hf5AwwlExi3HPpAfUXHXoZzhmxsY9nKt8A94HDCy.png', 'bangladeshi', '5', '$10 Ricarica', NULL),
(5, NULL, 'JAHID HASSAN', 'hh', 'Male', '08/03/2021', '45945', 'Banglalink', 's', '848489189489', '2', '4', 'Banglalink', '6', '6', '2021-08-08 20:30:44', '2021-08-08 20:30:44', 'sim/uploads/GqCBImKOgwDD7PXzMEw1hCAj4XVrICHzgWV9t6pf.png', '6', 'sim/uploads/rNzJNfZXm6SIkaqBBFgN7NvB7je1TcF45I9RA1R5.png', 'bangladeshi', '5', '$10 Ricarica', NULL),
(6, 'tt', 'DDD', 'DDD', 'Select Gender', '08/21/2021', 'EDE', 'Banglalink', NULL, NULL, '2', '20', 'Banglalink', '500', '3897666667', '2021-08-09 05:27:51', '2021-08-09 05:27:51', 'sim/uploads/ITGAEWLbN9fXLtKq21zqICP2cji7Qk34pauWo9a6.png', '10', NULL, 'EEE', '10', '$07 Ricarica', NULL),
(7, 'tt', 'DDD', 'DDD', 'Select Gender', '08/21/2021', 'EDE', 'Banglalink', NULL, NULL, '2', '20', 'Banglalink', '500', '3897666667', '2021-08-09 05:28:39', '2021-08-09 05:28:39', 'sim/uploads/tDIO20QkDTnwUNWyDNMYpR7nmkZ5Ypd6PFkxzWLk.png', '10', NULL, 'EEE', '10', '$07 Ricarica', NULL),
(8, 'tt', 'DDD', 'DDD', 'Select Gender', '08/21/2021', 'EDE', 'Banglalink', NULL, NULL, '2', '20', 'Banglalink', '500', '3897666667', '2021-08-09 05:28:51', '2021-08-09 05:28:51', 'sim/uploads/zoKfeNI6ZVQxP47eV8x3AYiDvHhxp72QD34i4V5g.png', '10', NULL, 'EEE', '10', '$07 Ricarica', NULL),
(9, 'tt', 'DF', 'FDDF', 'Male', '08/12/2021', 'GHHGJ', 'Banglalink', NULL, NULL, '2', '18', 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 05:29:40', '2021-08-09 05:29:40', 'sim/uploads/dgVLGgKXCYVnyPzYuOYPB4XPXzYkko3MLmstTcmc.png', '10', NULL, 'JGJJ', '20', '$10 Ricarica', NULL),
(10, 'tt', 'FVGSDFSDF', 'FGSDHSD', 'Male', '08/19/2021', 'SDHFH', 'Banglalink', 'FHGHF', 'HFGGHFH', '2', '19', 'Banglalink', '89398808852455897', '3897666667', '2021-08-09 05:32:31', '2021-08-09 05:32:31', 'sim/uploads/2lvrCjCp6XEGatPH4fSWtGuqnu2ETgqJrdYaIpff.png', '12', NULL, 'HFGGHDGDGH', 'FH', '$07 Ricarica', NULL),
(11, 'tt', 'DDD', 'DDD', 'Male', '08/18/2021', '45945', 'Banglalink', NULL, NULL, '11', '21', 'Banglalink', NULL, NULL, '2021-08-29 17:48:16', '2021-08-29 17:48:16', 'sim/uploads/AUiYhstUIqtEawRyZ5eckGhaQvNqevSeVTSwP8o8.png', NULL, 'sim/uploads/VGgxV1KHH9l2eZsJ1DhuOCF9jkA1laiSkkY7StVA.png', 'bangladeshi', '10', '$07 Ricarica', NULL),
(12, 'Select Offer', 'DF', 'FDDF', 'Female', '08/12/2021', '45945', 'Banglalink', NULL, NULL, '11', '22', 'Grameen', '500', '3897666667', '2021-08-29 17:50:04', '2021-08-29 18:14:57', 'sim/uploads/DsjF8z3cplT2dH67vNVRhnlDF8XA42mn4WQtik4J.png', '4', 'sim/uploads/e6xt0SzhJZWG4paNUh9K2gT6eu2rrYW7M6gtssMB.png', 'bangladeshi', '10', '$07 Ricarica', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `wallet` double(8,2) NOT NULL DEFAULT '0.00',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recharge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `recharge_permission` tinyint(1) NOT NULL DEFAULT '0',
  `sim_permission` tinyint(1) NOT NULL DEFAULT '0',
  `cargo_permission` tinyint(1) NOT NULL DEFAULT '0',
  `mobile_permission` tinyint(1) NOT NULL DEFAULT '0',
  `due` double(8,2) DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codice_fiscale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `international_recharge` double(8,2) NOT NULL DEFAULT '0.00',
  `admin_recharge_commission` double(8,2) NOT NULL DEFAULT '0.00',
  `admin_international_recharge_commission` double(8,2) NOT NULL DEFAULT '0.00',
  `admin_mobile_commission` double(8,2) NOT NULL DEFAULT '0.00',
  `admin_cargo_commission` double(8,2) NOT NULL DEFAULT '0.00',
  `admin_sim_commission` double(8,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role`, `wallet`, `remember_token`, `created_at`, `updated_at`, `created_by`, `nationality`, `vat_number`, `recharge`, `sim`, `cargo`, `mobile`, `recharge_permission`, `sim_permission`, `cargo_permission`, `mobile_permission`, `due`, `completed`, `address`, `contact_number`, `codice_fiscale`, `international_recharge`, `admin_recharge_commission`, `admin_international_recharge_commission`, `admin_mobile_commission`, `admin_cargo_commission`, `admin_sim_commission`) VALUES
(2, 'admin', 'admin', 'male', 'admin@admin.com', NULL, '$2y$10$CC7sWb4M9b3G62URhKeKOe5rr2dd2uBBroLCqgOCUamKHYZ/cBmgi', NULL, NULL, 'admin', 181.53, NULL, '2021-05-03 18:39:51', '2021-08-29 19:23:15', NULL, 'jmLogistics', NULL, '0', '0', '0', '0', 1, 1, 1, 1, NULL, 0, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(11, 'sheikh', 'nayan', 'male', 'n@nn.com', NULL, '$2y$10$R/ReHn5QEszFboVCLfZEZO320jD4xbK0uggVDAi57njrIXUzB6yy2', NULL, NULL, 'user', 49987.05, NULL, '2021-08-09 05:54:15', '2021-08-29 18:38:28', '2', 'nayan', NULL, '0', '0', '0', '2', 1, 1, 1, 1, NULL, 0, NULL, NULL, NULL, 0.00, 0.00, 0.00, 2.00, 0.00, 5.00),
(10, 'JAHID HASSAN', 'BHUIYAN', 'male', 'JAHIDHASSAN342@GMAIL.COM', NULL, '$2y$10$jASRYKz5Y8o085toL4gtE.15p/HagyvmjFfWTampIDwc3US0W/K42', NULL, NULL, 'user', 0.00, NULL, '2021-08-09 05:51:30', '2021-08-09 05:51:30', '2', 'AMICI BIGIOTTERIA', NULL, '0', '0', '0', '0', 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(12, 'sheikh', 'BHUIYAN', 'male', 'k@k.com', NULL, '$2y$10$3DK3CwKse4FfD7uEDCORGOSOiqrQp3LHneOME.qVebfQIunFlFz5K', NULL, NULL, 'user', 699.00, NULL, '2021-08-29 13:02:22', '2021-08-29 14:18:28', '11', 'test', NULL, '2', '99', '6', '4', 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 8.00, 8.00, 8.00, 4.00, 5.00, 6.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
