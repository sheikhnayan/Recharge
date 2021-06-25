-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2021 at 01:41 AM
-- Server version: 5.7.31
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, '2021_06_24_080116_add_file_2_to_sim_orders_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `offer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer`, `operator`, `created_at`, `updated_at`) VALUES
(1, 'Offer For Banglalink', 'Banglalink', '2021-06-20 04:28:14', '2021-06-20 04:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

DROP TABLE IF EXISTS `operators`;
CREATE TABLE IF NOT EXISTS `operators` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recharges`
--

DROP TABLE IF EXISTS `recharges`;
CREATE TABLE IF NOT EXISTS `recharges` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `recharge_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tsEaHa2593DBUl2oS4mogikWRuRt756JnA2MTmFX', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibGVFZW9kcElMOHV5aTVueEFNcXZiN2NJZE9UaUxoeG9EelUxeUdDdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaW0tZG93bmxvYWQvMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRDQzdzV2I0TTliM0c2MlVSaEtlS09lNXJyMmRkMnVCQnJvTENxZ09DVWFtS0hZWi9jQm1naSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQ0M3c1diNE05YjNHNjJVUmhLZUtPZTVycjJkZDJ1QkJyb0xDcWdPQ1VhbUtIWVovY0JtZ2kiO30=', 1624556855);

-- --------------------------------------------------------

--
-- Table structure for table `sims`
--

DROP TABLE IF EXISTS `sims`;
CREATE TABLE IF NOT EXISTS `sims` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iccid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sims`
--

INSERT INTO `sims` (`id`, `operator`, `iccid`, `sim_number`, `buy_date`, `buy_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banglalink', '89723498', '23897392847', '2021-06-20 10:28:33', '239847', 'pending', '2021-06-20 04:28:33', '2021-06-20 04:29:15'),
(2, 'Banglalink', '666', '88888', '2021-06-24 17:46:32', '99999', 'pending', '2021-06-24 11:46:32', '2021-06-24 11:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `sim_operators`
--

DROP TABLE IF EXISTS `sim_operators`;
CREATE TABLE IF NOT EXISTS `sim_operators` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sim_operators`
--

INSERT INTO `sim_operators` (`id`, `operator`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Banglalink', '2021-06-20 04:27:49', '2021-06-20 04:27:49', 'operator/heFNWqYCsaozT2XAkZ3Tn69EOQsbMUbSYPoFdH6l.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sim_orders`
--

DROP TABLE IF EXISTS `sim_orders`;
CREATE TABLE IF NOT EXISTS `sim_orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `offer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_iccid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_sim_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reseller_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iccid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sim_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sim_orders`
--

INSERT INTO `sim_orders` (`id`, `offer`, `first_name`, `last_name`, `gender`, `dob`, `codice`, `alt_operator`, `alt_iccid`, `alt_sim_number`, `reseller_id`, `sim_id`, `operator`, `iccid`, `sim_number`, `created_at`, `updated_at`, `file`, `price`, `file_2`) VALUES
(1, 'Offer For Banglalink', 'sheikh', 'Nayan', 'male', '2021-06-09', '235235253', 'null', NULL, NULL, '2', '1', 'Banglalink', '89723498', '23897392847', '2021-06-20 04:29:15', '2021-06-20 04:29:15', 'sim/uploads/6tHC5RhK4DP8WZhap6DTNpEOsRrr4JiSOnvnpRAw.txt', '239847', NULL),
(2, 'Offer For Banglalink', 'sheikh', 'Nayan', 'male', '2021-06-15', '77777', 'Banglalink', 'sdf', 'sdfsdfsdf', '2', '2', 'Banglalink', '666', '88888', '2021-06-24 11:47:09', '2021-06-24 11:47:09', 'sim/uploads/VnB44FLhJfZvMiM9rW87GYZXOIGOiEgOYu7l6HJg.txt', '99999', 'sim/uploads/rhgDPfxZ6CMiik0Z8riUqfNmecuZDr3OzGqRTlVq.txt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `wallet` double(8,2) NOT NULL DEFAULT '0.00',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role`, `wallet`, `remember_token`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'sheikh', 'asd', 'male', 'k@k.com', NULL, '$2y$10$F4y7OtFkFN3DnZHmmjFDuu36jiSHqXrhJWivSM0guv6tqlr3iHm1K', NULL, NULL, 'user', 0.00, NULL, '2021-05-03 16:37:40', '2021-05-03 16:37:40', NULL),
(2, 'admin', 'admin', 'male', 'admin@admin.com', NULL, '$2y$10$CC7sWb4M9b3G62URhKeKOe5rr2dd2uBBroLCqgOCUamKHYZ/cBmgi', NULL, NULL, 'admin', 0.00, NULL, '2021-05-03 18:39:51', '2021-05-03 18:39:51', NULL),
(3, 't', 't', 'male', 't@t.com', NULL, '$2y$10$/6a/UttVphA8b5zL6yi68O7lanjAFDjyzTLCi941ByKp.RoKqIyCi', NULL, NULL, 'user', 0.00, NULL, '2021-05-03 18:59:25', '2021-05-03 18:59:25', '2'),
(4, 'g', 'g', 'male', 'g@g.com', NULL, '$2y$10$gM9IoQat.EXGj4pdvpXr2O9Hv1vZvz9JDXN2jQK4GtuEijDxB1GJK', NULL, NULL, 'user', 0.00, NULL, '2021-05-03 19:07:32', '2021-05-03 19:07:32', '3'),
(5, 'm', 'm', 'male', 'm@m.com', NULL, '$2y$10$7tdFKND5q9o3s5Az0V9II.Wg2FVCClovQvGdjaZC0.kjL8GnICkUW', NULL, NULL, 'user', 0.00, NULL, '2021-05-03 19:12:29', '2021-05-03 19:12:29', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
