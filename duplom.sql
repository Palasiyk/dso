-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Час створення: Бер 15 2023 р., 23:01
-- Версія сервера: 5.7.34
-- Версія PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `duplom`
--

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_19_192739_create_teams_table', 1),
(7, '2023_02_28_192301_create_statistiks_table', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `statistiks`
--

CREATE TABLE `statistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namber` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PlayerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlayedSet` int(11) DEFAULT NULL,
  `TotPoint` int(11) DEFAULT NULL,
  `TotServ` int(11) DEFAULT NULL,
  `AceServ` int(11) DEFAULT NULL,
  `ErrServ` int(11) DEFAULT NULL,
  `EffServ` int(11) DEFAULT NULL,
  `TotRes` int(11) DEFAULT NULL,
  `ErrRes` int(11) DEFAULT NULL,
  `NegRes` int(11) DEFAULT NULL,
  `ExcRes` int(11) DEFAULT NULL,
  `TotAtac` int(11) DEFAULT NULL,
  `ErrAtac` int(11) DEFAULT NULL,
  `BlkAtec` int(11) DEFAULT NULL,
  `ExcAtec` int(11) DEFAULT NULL,
  `EffAtec` int(11) DEFAULT NULL,
  `Block` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `statistiks`
--

INSERT INTO `statistiks` (`id`, `namber`, `image`, `PlayerName`, `PlayedSet`, `TotPoint`, `TotServ`, `AceServ`, `ErrServ`, `EffServ`, `TotRes`, `ErrRes`, `NegRes`, `ExcRes`, `TotAtac`, `ErrAtac`, `BlkAtec`, `ExcAtec`, `EffAtec`, `Block`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, NULL, 'Palasiyk', 99, 9, 9, 9, 9, 99, 99, 9, 9, 9, NULL, 99, 9, 99, 9, 99, '2023-03-13 17:51:41', '2023-03-13 17:51:41', NULL),
(2, 5, NULL, 'Gorbenko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 19:02:09', '2023-03-13 19:02:09', NULL),
(3, 3, NULL, 'dss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 19:02:21', '2023-03-13 19:02:21', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namber` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacionality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bith_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `byrthday` date DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `jump` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `teams`
--

INSERT INTO `teams` (`id`, `name`, `namber`, `position`, `nacionality`, `bith_place`, `byrthday`, `height`, `weight`, `jump`, `image`, `insta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Palasiuk', 9, 'Middle-blocker', 'UKR', 'Ternopil', '2023-03-20', 200, 96, 340, '9.jpeg', 'https://www.instagram.com/palasiykyura/', '2023-03-13 17:50:49', '2023-03-13 17:50:49', NULL),
(2, 'Eko', 3, 'Opposite', 'UKR', 'Ternopil', '2023-03-12', 200, 63, 237, '3.jpeg', 'https://www.instagram.com/palasiykyura/', '2023-03-13 18:58:47', '2023-03-13 18:58:47', NULL),
(3, 'Gorbenko', 5, 'Libero', 'UKR', 'Ternopil', '2023-03-17', 43, 243, 4, '5.jpeg', 'https://www.instagram.com/palasiykyura/', '2023-03-13 19:01:30', '2023-03-13 19:01:30', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Yurii Palasiyk', 'palasiyk@gmail.com', NULL, '$2y$10$uFWJoFmI4ti66Woo9FaQ5uzWb67txxvYqEkkcs1vjIXtAm9DOyeTy', NULL, '2023-03-13 17:40:37', '2023-03-13 17:40:37'),
(2, NULL, 'Eko', 'palasiykeko@gmail.com', NULL, '$2y$10$bmoLKeUEJZ4Haesvy8OaP.zPnq2i/wJ9LdmV1l7CMNoKdFhuz1U4m', NULL, '2023-03-15 12:37:08', '2023-03-15 12:37:08');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `statistiks`
--
ALTER TABLE `statistiks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statistiks_playername_unique` (`PlayerName`),
  ADD KEY `statistiks_namber_foreign` (`namber`);

--
-- Індекси таблиці `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`),
  ADD UNIQUE KEY `teams_namber_unique` (`namber`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `statistiks`
--
ALTER TABLE `statistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `statistiks`
--
ALTER TABLE `statistiks`
  ADD CONSTRAINT `statistiks_namber_foreign` FOREIGN KEY (`namber`) REFERENCES `teams` (`namber`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
