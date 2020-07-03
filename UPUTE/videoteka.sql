-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 08:41 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `zanr_id` int(10) UNSIGNED NOT NULL,
  `godina` int(11) NOT NULL,
  `trajanje` int(11) NOT NULL,
  `slika` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `naslov`, `zanr_id`, `godina`, `trajanje`, `slika`, `created_at`, `updated_at`) VALUES
(11, 'Avatar', 1, 2009, 162, 'MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_.jpg', '2019-07-30 15:20:53', '2019-07-30 15:20:53'),
(12, 'Batman', 1, 1989, 126, 'MV5BMTYwNjAyODIyMF5BMl5BanBnXkFtZTYwNDMwMDk2._V1_.jpg', '2019-07-30 15:21:44', '2019-07-30 15:21:44'),
(13, 'Scary Movie', 3, 2000, 88, 'MV5BMGEzZjdjMGQtZmYzZC00N2I4LThiY2QtNWY5ZmQ3M2ExZmM4XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg', '2019-07-30 15:22:52', '2019-07-30 15:22:52'),
(14, 'Star Wars: Episode III', 1, 2005, 140, 'MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_SY1000_SX750_AL_.jpg', '2019-07-30 15:23:42', '2019-07-30 15:23:42'),
(15, 'Doctor Strange', 1, 2016, 115, 'MV5BNjgwNzAzNjk1Nl5BMl5BanBnXkFtZTgwMzQ2NjI1OTE@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '2019-07-30 15:25:09', '2019-07-30 15:25:09'),
(16, 'Forrest Gump', 4, 1994, 142, 'MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg', '2019-07-30 15:26:45', '2019-07-30 15:26:45'),
(17, 'G-Force', 2, 2009, 88, 'MV5BMTM4NTY3MzY2MV5BMl5BanBnXkFtZTcwMDQ1NTM2Mg@@._V1_.jpg', '2019-07-30 15:28:14', '2019-07-30 15:28:14'),
(18, 'Equilibrium', 1, 2002, 107, 'MV5BMTkzMzA1OTI3N15BMl5BanBnXkFtZTYwMzUyMDg5._V1_.jpg', '2019-07-30 15:29:52', '2019-07-30 15:29:52'),
(19, 'Criminal', 9, 2016, 113, 'MV5BMTg0ODc4Mzk2OF5BMl5BanBnXkFtZTgwNDk2MDkyODE@._V1_SY1000_CR0,0,675,1000_AL_.jpg', '2019-07-30 15:33:40', '2019-07-30 15:33:40'),
(20, 'Antitrust', 1, 2001, 105, 'antitrust_2001.jpg', '2019-07-31 14:06:40', '2019-07-31 14:06:40'),
(21, 'Firewall', 9, 2006, 105, 'firewall_2006.jpg', '2019-07-31 14:08:26', '2019-07-31 14:08:26'),
(22, 'Hackers', 3, 1995, 107, 'hackers_1995.jpg', '2019-08-02 04:32:42', '2019-08-02 04:32:42'),
(23, 'Swordfish', 1, 2001, 99, 'operation_swordfish_2001.jpg', '2019-08-02 04:33:49', '2019-08-02 04:33:49'),
(24, 'Pirates of Silicon Valley', 4, 1999, 95, 'pirates_of_silicone_valley_1999.jpg', '2019-08-02 04:34:59', '2019-08-02 04:34:59'),
(25, 'The Social Network', 4, 2010, 120, 'the_social_network_2010.jpg', '2019-08-02 04:35:53', '2019-08-02 04:35:53'),
(26, 'TRON', 1, 1982, 96, 'tron_1982.jpg', '2019-08-02 04:37:14', '2019-08-02 04:37:14'),
(27, 'TRON: Legacy', 1, 2010, 125, 'tron_legacy_2010.jpg', '2019-08-02 04:37:54', '2019-08-02 04:37:54'),
(28, 'WarGames', 5, 1983, 114, 'war_games_1983.jpg', '2019-08-02 04:38:48', '2019-08-02 04:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_07_28_172040_create_zanrs_table', 2),
(12, '2019_07_28_171938_create_films_table', 3),
(13, '2014_10_12_000000_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `type` varchar(255) NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$/22NNZQUV5VJyJD0/huDlul8RPjaucPM2yfOjVjmFeaEgud0.lgt2', 'admin', NULL, '2019-08-02 04:00:14', '2019-08-02 04:04:57'),
(2, 'Proba', 'proba@proba.com', NULL, '$2y$10$BtsyXFmph8FCO1MKsGoNy.CD6exA3gmILDhzgT6WG.EoxR2two0mq', 'default', NULL, '2019-08-02 04:28:20', '2019-08-02 04:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `zanrs`
--

CREATE TABLE `zanrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zanrs`
--

INSERT INTO `zanrs` (`id`, `naziv`, `created_at`, `updated_at`) VALUES
(1, 'Akcija', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(2, 'Avantura', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(3, 'Komedija', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(4, 'Drama', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(5, 'Fantazija', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(6, 'Horor', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(7, 'Misterija', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(8, 'Romantika', '2019-07-27 22:00:00', '2019-07-27 22:00:00'),
(9, 'Triler', '2019-07-27 22:00:00', '2019-07-27 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `films_naslov_unique` (`naslov`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `zanrs`
--
ALTER TABLE `zanrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zanrs`
--
ALTER TABLE `zanrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
