-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 05:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_status`
--

CREATE TABLE `detail_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_status`
--

INSERT INTO `detail_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Belum Dibayar', NULL, NULL),
(2, 'Sedang Dikerjakan', NULL, NULL),
(3, 'Selesai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fragrances`
--

CREATE TABLE `fragrances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fragrances`
--

INSERT INTO `fragrances` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Paket Biasa', NULL, NULL),
(2, 'Parfum ++', NULL, NULL),
(3, 'Parfum ++ Ekspres ', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_02_075751_create_orders_table', 1),
(6, '2023_01_04_091526_create_colors_table', 1),
(7, '2023_01_04_091934_create_regions_table', 1),
(8, '2023_01_06_143258_create_shipments_table', 1),
(9, '2023_01_06_143609_create_fragrances_table', 1),
(10, '2023_01_06_144022_create_payments_table', 1),
(11, '2023_01_06_144121_create_status_table', 1),
(12, '2023_01_06_144312_create_detail_status_table', 1),
(13, '2023_01_08_120026_update_users_table', 2),
(14, '2023_01_12_061131_update_orders_table', 3),
(15, '2023_01_12_163943_create_detail_orders_table', 4),
(16, '2023_01_12_164316_drop_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `jumlahAtasan` int(11) NOT NULL,
  `jumlahBawahan` int(11) NOT NULL,
  `paketPewangi` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(11) UNSIGNED DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regionId` bigint(11) UNSIGNED DEFAULT NULL,
  `totalBayar` double DEFAULT NULL,
  `payment_id` bigint(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `jumlahAtasan`, `jumlahBawahan`, `paketPewangi`, `status`, `alamat`, `regionId`, `totalBayar`, `payment_id`, `created_at`, `updated_at`) VALUES
(115, 1, 19, 8, 1, 2, 'Dimanaaaaaaa hayoooooooo', 2, 13500, 2, '2023-01-13 02:42:10', '2023-01-13 02:42:37'),
(116, 4, 18, 18, 2, 2, 'gatau', 4, 28800, 3, '2023-01-13 02:43:28', '2023-01-13 02:44:02'),
(119, 1, 12, 2, 1, 2, 'cilengkrang', 3, 7000, 2, '2023-01-13 08:08:27', '2023-01-13 08:08:38'),
(120, 6, 4, 2, 3, 2, 'manjahlega', 4, 6000, 1, '2023-01-14 07:44:55', '2023-01-14 07:45:13'),
(121, 9, 80, 90, 3, 2, 'Jl ujung berung', 5, 170000, 3, '2023-01-14 08:25:34', '2023-01-14 08:26:08'),
(122, 10, 2, 3, 2, 2, 'asdadad', 2, 4000, 1, '2023-01-14 09:12:27', '2023-01-14 09:12:37'),
(124, 10, 1, 2, 2, 2, 'werw', 2, 2400, 1, '2023-01-14 22:20:43', '2023-01-14 22:22:10'),
(126, 10, 6, 8, 2, 2, 'asdad', 3, 11200, 1, '2023-01-15 01:34:04', '2023-01-15 01:35:23'),
(127, 10, 2, 3, 2, 2, 'Depoooook', 12, 4000, 1, '2023-01-15 06:37:13', '2023-01-15 06:37:29'),
(128, 10, 8987, 100, 2, 2, 'ja', 1, 7269600, 1, '2023-01-15 23:40:24', '2023-01-15 23:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rizky@gmail.com', '$2y$10$L6wMQnkQoXHh1fF8iW1Tbu4iaSl026ldRX1wgnettp61ep3kOZayC', '2023-01-15 01:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `created_at`, `updated_at`) VALUES
(1, 'OVO', NULL, NULL),
(2, 'ShopeePay', NULL, NULL),
(3, 'DANA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Cipagalo', NULL, NULL),
(2, 'Bojongsoang', NULL, NULL),
(3, 'Buah Batu', NULL, NULL),
(4, 'Bojongloa', NULL, NULL),
(5, 'Ciwastra', NULL, NULL),
(8, 'Banjaran', '2023-01-13 04:46:16', '2023-01-13 04:46:16'),
(9, 'Margahayu', '2023-01-14 07:46:31', '2023-01-14 07:46:31'),
(12, 'Madura', '2023-01-15 06:36:48', '2023-01-15 06:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `noTelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `usertype`, `noTelp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yudhis', '0', '082229134746', 'yudhis@gmail.com', NULL, '$2y$10$BKl6An.Lo6KGwrB87jTFTeRc2bEkZMdaPxqRIGKZmuagvOo.2vk/e', NULL, '2023-01-08 05:25:39', '2023-01-08 05:25:39'),
(2, 'admin', '0', '082229134777', 'admin@gmail.com', NULL, '$2y$10$Xfr3VrFAJjItV9keQVwc4.SVC/MseqFNF1dYowGT.j87KXR1P0WcK', NULL, '2023-01-08 05:29:16', '2023-01-13 08:07:55'),
(3, 'ahanadmin', '1', '085524580048', 'ahanadmin@gmail.com', NULL, '$2y$10$ka7LLe568opSlxdUG/fb0OMizgVltV5EMDAKs9IuMbks8wrc7ETGK', 'Xn6XeY0d59EKwE32t0bbPekfRcTDBt1CaqRjLDKhIacaXOcb1tj8ioAHxhna', '2023-01-12 07:15:52', '2023-01-12 07:15:52'),
(4, 'joni', '0', '10239813123', 'joni@gmail.com', NULL, '$2y$10$AH5ueyYM/bGpniUOy36QhegPZUfcNU/u4CAvVcZBgR3F.b2cEF.vK', NULL, '2023-01-13 02:43:17', '2023-01-13 02:43:17'),
(5, 'ahanuser', '0', '085524580048', 'ahanuser@gmail.com', NULL, '$2y$10$uVyCHU8inIOF07Z9XWtKieCB7u0jn69vty4bp8YEXD5LTpg5dNLmy', NULL, '2023-01-13 03:33:08', '2023-01-13 03:33:08'),
(6, 'farhan', '0', '085524580048', 'farhan@gmail.com', NULL, '$2y$10$dHj.Me9uTnAgJm.OKpfVw.3k6OqVYKyjQVXJeYeD58/AWhqN5dK7q', NULL, '2023-01-14 07:44:23', '2023-01-14 07:44:23'),
(7, 'bisma', '1', '08210182912', 'asidhaihd@gmail.com', NULL, '$2y$10$5eBE/4jHVQdexIkNAP04Musv5ckdgKpo/6Z8bn9hHYzJgs73.W/3a', NULL, '2023-01-14 08:21:57', '2023-01-14 08:29:13'),
(9, 'bismaas', '0', '081239128312', 'riasasj@gmail.com', NULL, '$2y$10$SIgADpNzBBiNHUzsdBTR4.sn9ujSNwfP5n/s08YUM4Jlq6eWDcKs2', 'EYAo5eejyroym6j5eLsN7WdOYMIk4cj5CFGTavZtCzdKrIVof3XlachLMwji', '2023-01-14 08:24:33', '2023-01-14 08:32:08'),
(10, 'rizky', '1', '081283189123', 'rizky@gmail.com', NULL, '$2y$10$uMBa3CQF0lqmIUNP3Ks4Peq44J/EGtZ6WOautnaxs85sjJxi7xXwS', 'whBcrGpEp6A15J6ibhghQDB88kjLonqQqSLwtanjK4ExOvIKmqO1NMx9Wgxr', '2023-01-14 09:12:09', '2023-01-15 06:36:33'),
(11, 'Cimoxy', '0', '085368759269', 'ardiansyhmmd@gmail.com', NULL, '$2y$10$Gp0qJIon3prkW6Ff7GkhsuL.MnqWHW0MTmfLx7rjWqM6o7bykpZOe', NULL, '2023-05-22 05:50:52', '2023-05-22 05:50:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_status`
--
ALTER TABLE `detail_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fragrances`
--
ALTER TABLE `fragrances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1_userId` (`user_id`),
  ADD KEY `fk2_paketPewangi` (`paketPewangi`),
  ADD KEY `fk3_region` (`regionId`),
  ADD KEY `fk5_payments` (`payment_id`),
  ADD KEY `fk4_status` (`status`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_status`
--
ALTER TABLE `detail_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fragrances`
--
ALTER TABLE `fragrances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk1_userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk2_paketPewangi` FOREIGN KEY (`paketPewangi`) REFERENCES `fragrances` (`id`),
  ADD CONSTRAINT `fk3_region` FOREIGN KEY (`regionId`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `fk4_status` FOREIGN KEY (`status`) REFERENCES `detail_status` (`id`),
  ADD CONSTRAINT `fk5_payments` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
