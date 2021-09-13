-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: aug. 30, 2021 la 03:35 PM
-- Versiune server: 10.4.13-MariaDB
-- Versiune PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `wedding`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `participants` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vac1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vac2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kids` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `guests`
--

INSERT INTO `guests` (`id`, `participants`, `name`, `partner`, `message`, `status`, `created_at`, `updated_at`, `menu`, `vac1`, `vac2`, `kids`, `ages`) VALUES
(155, 2, 'Irimescu', 'Ana', 'Nothing', 1, '2021-06-15 04:33:33', '2021-06-15 04:33:33', 'normal', 'nu', 'da', NULL, NULL),
(156, 1, 'Uk', NULL, 'adsfasfsaf', 1, '2021-06-15 04:35:13', '2021-06-15 04:35:13', 'vegetarian', 'nu', NULL, NULL, NULL),
(157, 2, 'Like i', 'give a', 'f', 1, '2021-06-15 04:36:01', '2021-06-15 04:36:01', 'vegetarian', 'da', 'nu', NULL, NULL),
(158, 1, 'sd', NULL, NULL, 0, '2021-06-15 04:36:35', '2021-06-15 04:36:35', 'normal', 'da', NULL, NULL, NULL),
(159, 1, 'wertwer', NULL, 'ertwertwert', 1, '2021-06-15 04:42:58', '2021-06-15 04:42:58', 'normal', 'da', NULL, NULL, NULL),
(160, 1, 'MADALINA', NULL, '123423', 1, '2021-06-15 05:53:00', '2021-06-15 05:53:00', 'normal', 'da', NULL, '2', '12,9'),
(161, 2, 'More data2', 'hfhffh', 'werqwr', 1, '2021-06-15 05:55:20', '2021-06-15 05:55:20', 'vegetarian', 'da', 'da', '1', '12'),
(162, 1, 'Your Content Goes Here', NULL, 'rwttwrt', 1, '2021-06-15 05:57:15', '2021-06-15 05:57:15', 'vegetarian', 'nu', NULL, NULL, NULL),
(163, 2, 'Claudia Pora', 'hfhffh', 'werqwr', 1, '2021-06-15 05:59:04', '2021-06-15 05:59:04', 'normal', 'da', 'da', '5', '11,12,13,14,15'),
(164, 1, 'Your Content Goes Here', NULL, '11', 1, '2021-06-15 06:43:04', '2021-06-15 06:43:04', 'vegetarian', 'da', NULL, '1', '11'),
(179, 1, 'Your Content Goes Here', NULL, '11', 1, '2021-06-15 06:55:05', '2021-06-15 06:55:05', 'vegetarian', 'da', NULL, '1', '11'),
(185, 1, 'Name', NULL, '243', 1, '2021-06-15 06:57:23', '2021-06-15 06:57:23', 'vegetarian', 'nu', NULL, '1', '3'),
(186, 1, 'sd', NULL, '4', 1, '2021-06-15 06:57:43', '2021-06-15 06:57:43', 'normal', 'nu', NULL, '2', '3,3'),
(187, 1, 'Claudia Pora', NULL, '243', 1, '2021-06-15 06:58:01', '2021-06-15 06:58:01', 'vegetarian', 'da', NULL, '1', '3'),
(188, 1, 'sd2', NULL, '43', 1, '2021-06-15 06:58:36', '2021-06-15 06:58:36', 'vegetarian', 'nu', NULL, '1', '314'),
(189, 2, '245', '245', '2543', 1, '2021-06-15 07:00:24', '2021-06-15 07:00:24', 'vegetarian', 'nu', 'da', '2', '2,5'),
(190, 1, 'Test', NULL, 'Test', 1, '2021-06-15 07:39:28', '2021-06-15 07:39:28', 'normal', 'da', NULL, '3', '12,13,15');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Eliminarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_05_31_142806_create_guests_table', 2),
(8, '2021_06_07_142116_add_menu_to_guests_table', 3),
(9, '2021_06_15_063450_add_vaccine_status_to_guests_table', 4),
(10, '2021_06_15_063807_add_partner_vaccine_status_to_guests_table', 5),
(11, '2021_06_15_084851_add_kids_to_guests_table', 6),
(12, '2021_06_15_085045_add_ages_to_guests_table', 6);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
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
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cosmin', 'cosmin@webdinasty.ro', NULL, '$2y$10$nge4WOI.dSVToaJi32l7/uLNUTELp5urCVMwrmSNzhAmzmmN4mmy2', NULL, '2021-05-31 04:11:59', '2021-05-31 04:11:59');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT pentru tabele `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
