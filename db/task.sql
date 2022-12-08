-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2022 at 05:41 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 1, '2022-12-06 03:02:46', '2022-12-06 03:02:46'),
(3, 'Cosmetic', 1, '2022-12-06 03:06:19', '2022-12-06 03:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `faq_title` varchar(255) DEFAULT NULL,
  `description` text,
  `serial` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_title`, `description`, `serial`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1. When can we get started?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', NULL, 1, 1, '2022-12-05 12:22:23', '2022-12-05 12:41:52'),
(2, '2. How do I get in touch with you?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', NULL, 1, 1, '2022-12-05 12:42:21', '2022-12-05 12:42:21'),
(3, '3. What documents do I need to start?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', NULL, 1, 1, '2022-12-05 12:42:37', '2022-12-05 12:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
CREATE TABLE IF NOT EXISTS `interests` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `bank_name`, `period`, `percentage`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'DBBL', '3', '2.5', 1, 1, '2022-12-07 06:34:09', '2022-12-07 07:04:11'),
(3, 'DBBL', '6', '4', 1, 1, '2022-12-07 07:04:26', '2022-12-07 07:04:26'),
(4, 'DBBL', '12', '5.5', 1, 1, '2022-12-07 07:04:44', '2022-12-07 07:04:44'),
(5, 'SCB', '3', '4', 1, 1, '2022-12-07 07:04:59', '2022-12-07 07:04:59'),
(6, 'SCB', '6', '5', 1, 1, '2022-12-07 07:05:10', '2022-12-07 07:05:10'),
(7, 'SCB', '12', '6', 1, 1, '2022-12-07 07:05:18', '2022-12-07 07:05:18'),
(8, 'EBL', '3', '3', 1, 1, '2022-12-07 07:05:32', '2022-12-07 07:05:32'),
(9, 'EBL', '6', '4', 1, 1, '2022-12-07 07:05:41', '2022-12-07 07:05:41'),
(10, 'EBL', '12', '5', 1, 1, '2022-12-07 07:05:48', '2022-12-07 07:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=254 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(225, '2014_10_12_000000_create_users_table', 2),
(226, '2014_10_12_100000_create_password_resets_table', 2),
(227, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(228, '2019_08_19_000000_create_failed_jobs_table', 2),
(229, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(230, '2022_10_22_140735_create_costings_table', 2),
(231, '2022_10_23_041859_create_categories_table', 2),
(232, '2022_10_23_051220_create_inventories_table', 2),
(233, '2022_10_27_164559_create_expenses_table', 2),
(234, '2022_10_28_040532_create_vendors_table', 2),
(235, '2022_10_30_065616_create_clients_table', 2),
(236, '2022_11_01_043837_create_employees_table', 2),
(237, '2022_11_02_033600_create_bank_cashes_table', 2),
(238, '2022_11_02_041249_create_sells_table', 2),
(239, '2022_11_02_170557_create_ledger_types_table', 2),
(240, '2022_11_02_170731_create_ledger_groups_table', 2),
(241, '2022_11_02_170755_create_ledger_names_table', 2),
(242, '2022_11_03_164659_create_expense_heads_table', 2),
(243, '2022_11_03_164826_create_income_heads_table', 2),
(244, '2022_11_06_032331_create_products_table', 2),
(245, '2022_11_17_050809_create_costing_inventories_table', 2),
(246, '2022_11_23_063744_create_salaries_table', 2),
(247, '2022_11_24_085350_create_profits_table', 2),
(248, '2022_11_30_190450_create_sessions_table', 2),
(223, '2022_12_03_173448_create_permission_tables', 1),
(224, '2022_12_03_175259_create_product-lists_table', 1),
(249, '2022_12_05_064014_create_product_lists_table', 2),
(250, '2022_12_05_181535_create_sliders_table', 3),
(251, '2022_12_05_181709_create_faqs_table', 3),
(252, '2022_12_05_182504_create_products_table', 4),
(253, '2022_12_07_120200_create_interests_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(2, 'role-create', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(3, 'role-edit', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(4, 'role-delete', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(5, 'product-list', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(6, 'product-create', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(7, 'product-edit', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12'),
(8, 'product-delete', 'web', '2022-12-05 00:59:12', '2022-12-05 00:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` text,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy s5-', '1', '46000', 'product-1.jpg', NULL, 1, 1, '2022-12-06 22:28:52', '2022-12-07 09:59:09'),
(2, 'LG Leon 2015', '1', '400.00', 'product-3.jpg', NULL, 1, 1, '2022-12-06 22:53:50', '2022-12-06 23:07:52'),
(3, 'Sony microsoft', '1', '200.00', 'product-4.jpg', NULL, 1, 1, '2022-12-06 22:55:04', '2022-12-06 23:07:59'),
(4, 'iPhone 6', '1', '1200.00', 'product-5.jpg', NULL, 1, 1, '2022-12-06 22:55:35', '2022-12-06 23:08:10'),
(5, 'Samsung gallaxy note 4', '1', '400.00', 'product-6.jpg', NULL, 1, 1, '2022-12-06 22:56:12', '2022-12-06 23:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `profits`
--

DROP TABLE IF EXISTS `profits`;
CREATE TABLE IF NOT EXISTS `profits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `income_date` varchar(255) NOT NULL,
  `income_head` varchar(255) DEFAULT NULL,
  `giver` varchar(255) DEFAULT NULL,
  `voucher_no` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `payment_note` text,
  `description` text,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-12-05 01:00:38', '2022-12-05 01:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
CREATE TABLE IF NOT EXISTS `salaries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` longtext NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AXbhrB3P4xn8SmddXWjHZlD2RlgkPcIYcgCAHahl', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZ3hDYVp1cThGWjZrSkd3OGZRcUNjTllKbHFLZVVOcGJEaVpYV1VWWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3QvYW1zVGFzay9wdWJsaWMvYWRtaW4vc2xpZGVyL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NzoiY29tcGFyZSI7YToxOntpOjE7YTo3OntzOjQ6Im5hbWUiO3M6MTg6IlNhbXN1bmcgR2FsYXh5IHM1LSI7czo4OiJxdWFudGl0eSI7aToyO3M6NToicHJpY2UiO3M6NToiNDYwMDAiO3M6NToiaW1hZ2UiO3M6MTM6InByb2R1Y3QtMS5qcGciO3M6ODoiY2F0ZWdvcnkiO3M6MToiMSI7czoxMToiZGVzY3JpcHRpb24iO047czoyOiJpZCI7aToxO319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjcwNDMxODI3O319', 1670434901);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `image`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Apple Store Ipod', 'slide1.png', '& phone', 1, 1, '2022-12-06 00:12:06', '2022-12-06 00:32:38'),
(3, 'iPhone 6 Plus', 'slide2.png', 'Dual SIM', 1, 1, '2022-12-06 02:03:20', '2022-12-06 02:03:20'),
(4, 'by one, get one 50% off', 'slide3.png', 'school supplies & backpacks.*', 1, 1, '2022-12-06 02:04:53', '2022-12-06 02:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text,
  `two_factor_recovery_codes` text,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super-Admin', 'superadmin@gmail.com', NULL, '$2y$10$RcRN3/B7vg9cmL77QCv8ZOn4tc5ya8.bIfSc1Bk8RPw1bTC4IQdhS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-05 01:00:38', '2022-12-05 01:00:38'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$TiDgM6HRzCeM1wDnWwqe.eRw6UfBGqNieXmgeEzfNw.IOdFBCpW8a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-05 03:04:46', '2022-12-05 03:04:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
