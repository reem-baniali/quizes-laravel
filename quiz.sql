-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 06:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_answer`, `user_id`, `question_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(501, 'Hyper Text Markup Language', 15, 12, 24, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(502, '2', 15, 13, 24, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(503, 'Break tag', 15, 14, 24, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(504, 'The second page', 15, 15, 24, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(505, 'none', 15, 16, 24, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(506, '15', 15, 22, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(507, '.5', 15, 23, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(508, '2', 15, 25, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(509, '12', 15, 26, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(510, '9', 15, 27, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(511, '3', 15, 29, 28, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(512, 'JavaScript is a lightweight and interpreted programming language.', 15, 17, 25, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(513, 'append()', 15, 18, 25, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(514, 'toLowerCase()', 15, 19, 25, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(515, 'IndexOf()', 15, 20, 25, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(516, 'sort()', 15, 21, 25, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(517, 'JavaScript is a lightweight and interpreted programming language.', 15, 17, 25, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(518, 'append()', 15, 18, 25, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(519, 'toLowerCase()', 15, 19, 25, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(520, 'IndexOf()', 15, 20, 25, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(521, 'sort()', 15, 21, 25, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(522, 'All of the above', 15, 17, 25, '2022-01-06 15:11:33', '2022-01-06 15:11:33'),
(523, 'concat()', 15, 18, 25, '2022-01-06 15:11:33', '2022-01-06 15:11:33'),
(524, 'toLowerCase()', 15, 19, 25, '2022-01-06 15:11:33', '2022-01-06 15:11:33'),
(525, 'IndexOf()', 15, 20, 25, '2022-01-06 15:11:33', '2022-01-06 15:11:33'),
(526, 'sort()', 15, 21, 25, '2022-01-06 15:11:33', '2022-01-06 15:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Programming', 'storage/category_images/1641433366coding.jpg', '2022-01-05 23:42:46', '2022-01-05 23:42:46'),
(11, 'Mathematical', 'storage/category_images/1641433396math.jfif', '2022-01-05 23:43:16', '2022-01-05 23:43:16'),
(12, 'English', 'storage/category_images/1641433415english grammar.jfif', '2022-01-05 23:43:35', '2022-01-05 23:43:35'),
(13, 'Art', 'storage/category_images/1641433457history.jfif', '2022-01-05 23:44:17', '2022-01-05 23:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_estimation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` int(11) NOT NULL,
  `number_of_questions` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `title`, `image`, `time_estimation`, `mark`, `number_of_questions`, `category_id`, `created_at`, `updated_at`) VALUES
(24, 'HTML Quiz', 'storage/category_images/1641433586HTMLLOGO.png', '10', 10, 5, 10, '2022-01-05 23:46:26', '2022-01-05 23:46:26'),
(25, 'JS Quiz', 'storage/category_images/1641433630JSLOGO.png', '15', 15, 5, 10, '2022-01-05 23:47:10', '2022-01-05 23:47:10'),
(26, 'CSS Quiz', 'storage/category_images/1641433671CSSLOGO.png', '10', 10, 5, 10, '2022-01-05 23:47:52', '2022-01-05 23:47:52'),
(28, 'Basic Math', 'storage/category_images/1641485686math.jfif', '10', 14, 7, 11, '2022-01-06 14:14:46', '2022-01-06 14:14:46');

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
(1, '2002_01_02_084112_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_02_080841_create_categories_table', 1),
(7, '2022_01_02_081329_create_exams_table', 1),
(8, '2022_01_02_082105_create_questions_table', 1),
(9, '2022_01_02_082812_create_options_table', 1),
(10, '2022_01_02_083309_create_answers_table', 1),
(11, '2022_01_02_083748_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `option1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `number`, `text`, `points`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `exam_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 1, 'What does HTML stand for ?', 2, 'Hyper Text Preprocessor', 'Hyper Text Markup Language', 'Hyper Text Multiple Language', 'Hyper Tool Multi Language', 'Hyper Text Markup Language', 24, NULL, '2022-01-05 23:51:35', '2022-01-05 23:51:35'),
(13, 2, 'How many tags are in a regular element ?', 2, '1', '2', '3', '4', '2', 24, NULL, '2022-01-05 23:52:59', '2022-01-05 23:52:59'),
(14, 3, '< br/> What type of tag is this ?', 2, 'An opening tag', 'A broken one', 'Break tag', 'none', 'Break tag', 24, NULL, '2022-01-05 23:54:02', '2022-01-05 23:54:02'),
(15, 4, 'Where is the meta tag only found ?', 2, 'The home page', 'The last page', 'The second page', 'none', 'The home page', 24, NULL, '2022-01-05 23:55:01', '2022-01-05 23:55:01'),
(16, 5, 'What is an element that does not have a closing tag called ?', 2, 'Empty element', 'Tag', 'Closed element', 'none', 'Empty element', 24, NULL, '2022-01-05 23:55:56', '2022-01-05 23:55:56'),
(17, 1, 'Which of the following is correct about JavaScript?', 3, 'JavaScript is a lightweight and interpreted programming language.', 'JavaScript has object-oriented capabilities that allows you to build interactivity into otherwise static HTML pages.', 'The general-purpose core of the language has been embedded in Netscape, Internet Explorer, and other web browsers.', 'All of the above', 'All of the above', 25, NULL, '2022-01-05 23:57:57', '2022-01-05 23:57:57'),
(18, 2, 'Which built-in method combines the text of two strings and returns a new string?', 3, 'append()', 'concat()', 'attach()', 'none of the above', 'concat()', 25, NULL, '2022-01-05 23:59:20', '2022-01-05 23:59:20'),
(19, 3, 'Which built-in method returns the calling string value converted to lower case?', 3, 'toLowerCase()', 'toLower()', 'changeCase(case)', 'none of the above', 'toLowerCase()', 25, NULL, '2022-01-06 00:00:45', '2022-01-06 00:00:45'),
(20, 4, 'Which of the following function of String object returns the index within the calling String object of the last occurrence of the specified value?', 3, 'IndexOf()', 'search()', 'lastIndexOf()', 'none of the above', 'lastIndexOf()', 25, NULL, '2022-01-06 00:02:16', '2022-01-06 00:02:16'),
(21, 5, 'Which of the following function of Array object sorts the elements of an array?', 3, 'sort()', 'toString()', 'unshift()', 'none of the above', 'sort()', 25, NULL, '2022-01-06 00:06:42', '2022-01-06 00:06:42'),
(22, 1, 'The result of 15+2-3 equals to ?', 2, '14', '15', '13', 'none', '14', 28, NULL, '2022-01-06 14:16:47', '2022-01-06 14:16:47'),
(23, 2, 'The result of sin 30 degree equals to ?', 2, '.6', '.8', '.5', '0', '.5', 28, NULL, '2022-01-06 14:17:45', '2022-01-06 14:17:45'),
(25, 3, 'The result of 1+2-1equals to ?', 2, '2', '3', '1', '4', '2', 28, NULL, '2022-01-06 14:20:53', '2022-01-06 14:20:53'),
(26, 4, 'The result of 5*2+2 equals to ?', 2, '12', '2', '21', 'none', '12', 28, NULL, '2022-01-06 14:21:55', '2022-01-06 14:21:55'),
(27, 5, 'The result of 7 + 5 - 3 equals to ?', 2, '2', '9', '3', '5', '9', 28, NULL, '2022-01-06 14:22:38', '2022-01-06 14:22:38'),
(28, 6, 'The result of 7 - 5 - 2 equals to ?', 2, '1', '5', '2', '0', '0', 28, NULL, '2022-01-06 14:23:55', '2022-01-06 14:23:55'),
(29, 7, 'The result of 1 + 1 + 1 equals to ?', 2, '3', '4', '2', '5', '3', 28, NULL, '2022-01-06 14:24:40', '2022-01-06 14:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result` int(11) NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `result`, `exam_id`, `user_id`, `created_at`, `updated_at`) VALUES
(51, 6, 24, 15, '2022-01-06 14:09:40', '2022-01-06 14:09:40'),
(52, 10, 28, 15, '2022-01-06 14:25:13', '2022-01-06 14:25:13'),
(53, 6, 25, 15, '2022-01-06 15:10:04', '2022-01-06 15:10:04'),
(54, 6, 25, 15, '2022-01-06 15:11:09', '2022-01-06 15:11:09'),
(55, 12, 25, 15, '2022-01-06 15:11:33', '2022-01-06 15:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

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
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(6, 'Reem', 'reem.baniali@gmail.com', NULL, '12345678', NULL, 1, '2022-01-04 11:10:53', '2022-01-05 21:52:44'),
(9, 'khaled', 'khaled@gmil.com', NULL, '$2y$10$/OD1EplOZnFRfQujHBOpbuiczdbkSCwmQZH/CR3s0f2w9tTKhu1zK', NULL, 2, '2022-01-05 11:33:27', '2022-01-05 11:33:27'),
(11, 'wajed', 'wajed@gmail.com', NULL, '12345678', NULL, 2, '2022-01-05 21:52:20', '2022-01-05 21:52:20'),
(12, 'basharm', 'bashar@gmail.com', NULL, ' 12345678 ', NULL, 2, '2022-01-05 22:33:06', '2022-01-05 22:34:24'),
(13, 'hussam', 'hussam@gmail.com', NULL, '12345678', NULL, 1, '2022-01-05 22:33:38', '2022-01-05 22:33:38'),
(14, 'reem', 'r2@gmail.com', NULL, '$2y$10$PZIUt3Saf2aScthWTs24Iej6553rAMAvRhZwclk/1ZqMiZT5RBCSm', NULL, 2, '2022-01-05 23:13:28', '2022-01-05 23:13:28'),
(15, 'hiba', 'hiba@f.com', NULL, '$2y$10$8oqvGWXx8aeEu9o9pyc7j.1t39TP9trRVpfC7E2IFEdMbyxQL5uAS', NULL, 2, '2022-01-05 23:24:21', '2022-01-05 23:24:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_user_id_foreign` (`user_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
