-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2021 at 10:50 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s586464_scrabbleconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'lasisisaheed5@gmail.com', '$2y$10$5yVMQcIdLv8GMbZG6jbu7uR9hrtO.GUqWfGhSVhDai4czJSYGuKca', '3CiNUR4x9VxuwZEt6ox2DWhlCz2QHXs5KhvvI2XkXFPXjaAQOlhOHRlZmMb6', NULL, '2021-08-01 21:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_sent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `sender_id`, `receiver_id`, `msg`, `time_sent`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'adsfas', '22:50', 1, '2021-08-04 21:50:28', '2021-08-04 21:50:28'),
(2, 1, 2, 'hello', '22:51', 1, '2021-08-04 21:51:15', '2021-08-04 21:51:15'),
(3, 1, 2, 'hello[p', '22:51', 1, '2021-08-04 21:51:46', '2021-08-04 21:51:46'),
(4, 2, 1, 'hi brpo', '23:04', 0, '2021-08-04 22:04:25', '2021-08-06 12:08:43'),
(5, 2, 1, 'bro', '23:04', 0, '2021-08-04 22:04:30', '2021-08-06 12:08:43'),
(6, 1, 2, 'how are you', '23:43', 1, '2021-08-04 22:43:29', '2021-08-04 22:43:29'),
(7, 5, 1, 'Hello! Are you free from some Scrabble when I\'m in Nigeria', '20:51', 1, '2021-08-07 19:51:43', '2021-08-07 19:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `friend_request_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`friend_request_id`, `sender_id`, `receiver_id`, `status`, `created_at`, `updated_at`) VALUES
(8, 2, 1, 1, '2021-08-01 09:57:47', '2021-08-01 09:57:58'),
(9, 3, 1, 1, '2021-08-02 22:05:33', '2021-08-04 23:08:28'),
(10, 4, 1, 1, '2021-08-02 22:07:16', '2021-08-04 23:08:36'),
(11, 4, 3, 0, '2021-08-02 22:07:20', '2021-08-02 22:07:20'),
(12, 5, 1, 0, '2021-08-07 19:50:41', '2021-08-07 19:50:41'),
(13, 5, 2, 0, '2021-08-15 12:52:22', '2021-08-15 12:52:22');

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
(3, '2021_07_30_160124_create_friend_request_table', 2),
(4, '2021_08_01_112734_create_admins_table', 3),
(5, '2021_08_01_221227_create_news_table', 4),
(6, '2021_08_03_135401_create_chats_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news`, `created_at`, `updated_at`) VALUES
(1, 'New Collins Scrabble?', '<p>We all thought CSW2019 was going to be around for a while. Alas, there is the release of a new dictionary! CSW21.</p>\r\n\r\n<p>Watchout&nbsp;for more news!</p>', '2021-08-01 22:18:03', '2021-08-15 13:44:52'),
(2, 'Banning of Scrabble Words', '<p>In different forum across the world, there have been arguments about certain words being (ethnic) slurs. Some of the words are Paki, Fenian etc. Part of the argument is that words like &quot;bitch&quot; is still allowed and this should not be. Scrabble is more than just English words. You can read more&nbsp;<a href=\"https://7news.com.au/entertainment/games/scrabble-bans-long-list-of-words-players-are-no-longer-allowed-to-use--c-2593627\">here</a></p>', '2021-08-01 22:36:46', '2021-08-15 13:53:10'),
(3, 'Ireland Scrabble Tournament', '<p>If you&#39;re in Ireland in October, you would absolutely love to be at this tournament in Waterford. Check here for more info&nbsp;<a href=\"https://www.irishscrabble.org/waterford-scrabble-tournament-october-2021/\">https://www.irishscrabble.org/waterford-scrabble-tournament-october-2021/</a></p>', '2021-08-01 22:50:04', '2021-08-15 13:11:38');

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dictionary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `lastname`, `email`, `gender`, `phone_no`, `state`, `country`, `citizenship`, `category`, `dictionary`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Febisola', 'Marcy01', 'Ola', 'febzxo@gmail.com', 'female', '0895660793', 'Dublin', 'IE', 'NG', 'newbie', 'SOWPOD', '$2y$10$t8OOjXuNwmWGYyN6hSuu1.x.xJ2k484sDJU7RpRP.mIxrddRsuihW', 'T4AgIxCFU7bp9apuf4eYybzDJTNY065exOqd5VjcWt5uLsxJneVtzxjaBMXx', '2021-08-15 17:59:51', '2021-08-15 17:59:51'),
(8, 'Khaleel', 'Dynamite', 'Adedeji', 'khaleelrahmon@gmail.com', 'male', '0703371603', 'Lagos', 'NG', 'NG', 'master', 'CSW', '$2y$10$V978JpyHhWsG.QUjtag/VOLLMeNmLiK8yIGjZR/pqMQS41uIM1.gi', NULL, '2021-08-15 19:21:20', '2021-08-15 19:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`friend_request_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `friend_request_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
