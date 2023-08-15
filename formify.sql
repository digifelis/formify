-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Ağu 2023, 14:37:11
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `formify`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form_data`
--

DROP TABLE IF EXISTS `form_data`;
CREATE TABLE IF NOT EXISTS `form_data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idhash` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `save_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `form_data`
--

INSERT INTO `form_data` (`id`, `idhash`, `name`, `display_name`, `email`, `save_data`, `user_id`, `created_at`, `updated_at`) VALUES
(14, '', 'qq', 'dfgbnm', NULL, '1', 2, '2023-08-06 20:09:53', '2023-08-06 20:09:53'),
(15, '', 'ww', 'vb', NULL, '1', 1, '2023-08-06 20:10:47', '2023-08-06 20:10:47'),
(16, 'f46158be8f605a5bc1ee73c0c70751ba', 'www', 'cvbcv', NULL, '1', 1, '2023-08-06 20:53:47', '2023-08-06 22:37:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message_lists`
--

DROP TABLE IF EXISTS `message_lists`;
CREATE TABLE IF NOT EXISTS `message_lists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `form_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `message_lists`
--

INSERT INTO `message_lists` (`id`, `message_data`, `user_id`, `form_id`, `created_at`, `updated_at`) VALUES
(1, 'asdfghj', 1, '15', NULL, NULL),
(2, '', 1, '16', '2023-08-06 21:04:43', '2023-08-06 21:04:43'),
(3, 'gelen: degeri\n', 1, '16', '2023-08-06 21:06:12', '2023-08-06 21:06:12'),
(4, 'gelen: degeri\n', 1, '16', '2023-08-06 21:06:26', '2023-08-06 21:06:26'),
(5, 'gelen: degeri\ngelen2: deger2\n', 1, '16', '2023-08-06 21:06:42', '2023-08-06 21:06:42'),
(6, 'gelen: degeri|gelen2: deger2|', 1, '16', '2023-08-06 21:16:46', '2023-08-06 21:16:46'),
(7, 'gelen: degeri|gelen2: deger2|', 1, '16', '2023-08-06 21:17:10', '2023-08-06 21:17:10'),
(8, 'gelen: degeri|gelen2: deger2|', 1, '16', '2023-08-06 21:17:11', '2023-08-06 21:17:11'),
(9, 'gelen: degeri|gelen2: deger2|', 1, '16', '2023-08-06 21:17:12', '2023-08-06 21:17:12'),
(10, 'dfs: b|cc: c|', 1, '16', '2023-08-06 21:17:34', '2023-08-06 21:17:34'),
(11, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:18:33', '2023-08-06 21:18:33'),
(12, 'dfs: b<br>cc: c<br>', 1, '16', '2023-08-06 21:18:49', '2023-08-06 21:18:49'),
(13, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:19:27', '2023-08-06 21:19:27'),
(14, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:37:02', '2023-08-06 21:37:02'),
(15, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:38:28', '2023-08-06 21:38:28'),
(16, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:41:22', '2023-08-06 21:41:22'),
(17, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 21:42:05', '2023-08-06 21:42:05'),
(18, 'dfs: b\ncc: c\n', 1, '16', '2023-08-06 22:52:29', '2023-08-06 22:52:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_05_162224_create_form_data_table', 1),
(7, '2023_08_05_162303_create_message_lists_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$QebbCcbSkh2998WCQqGPLuYwBEzBwQ2okw6rF/qb/EznxA6g3rDda', NULL, NULL, NULL),
(2, 'mansur', NULL, 'mansur@siirt.edu.tr', NULL, '$2y$10$QebbCcbSkh2998WCQqGPLuYwBEzBwQ2okw6rF/qb/EznxA6g3rDda', NULL, '2023-08-05 13:52:21', '2023-08-05 13:52:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
