-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookxcess`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_book_publisher`
--

CREATE TABLE `tb_book_publisher` (
  `bp_ID` varchar(10) NOT NULL,
  `pub_ID` varchar(10) NOT NULL,
  `ebook_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `cust_ID` varchar(15) NOT NULL,
  `cust_first_name` varchar(20) NOT NULL,
  `cust_last_name` varchar(20) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_phone_number` int(15) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cust_ID`, `cust_first_name`, `cust_last_name`, `cust_address`, `cust_phone_number`, `cust_email`, `password`) VALUES
('C00001', 'enggar', 'cantik', 'dsaasddas', 852359232, 'enggar@gmail.com', 'enggar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ebook`
--

CREATE TABLE `tb_ebook` (
  `id` int(15) NOT NULL,
  `ebook_category` varchar(20) NOT NULL,
  `ebook_published_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ebook_title` varchar(50) NOT NULL,
  `ebook_price` int(11) NOT NULL,
  `short_desc` varchar(150) NOT NULL,
  `ebook_type` tinytext NOT NULL,
  `ebook_status` varchar(8) NOT NULL,
  `ebook_downloadable` varchar(8) NOT NULL,
  `ebook_image` varchar(100) DEFAULT NULL,
  `ebook_file` varchar(100) DEFAULT NULL,
  `publisher_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ebook`
--

INSERT INTO `tb_ebook` (`id`, `ebook_category`, `ebook_published_date`, `ebook_title`, `ebook_price`, `short_desc`, `ebook_type`, `ebook_status`, `ebook_downloadable`, `ebook_image`, `ebook_file`, `publisher_id`, `updated_at`, `created_at`) VALUES
(1, 'Novel', '2020-12-16 08:08:27', 'Pulang', 40000, 'Sebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit.', 'PDF', 'Active', 'YES', 'pulang.jpg', 'pulang.pdf', 0, NULL, NULL),
(2, 'Novel', '2020-12-16 11:18:59', 'Summer Breeze', 50000, 'Summer Breeze Bercerita tentang apa ya aku gatau yang penting ada deskripsinya hehe', 'PDF', 'Active', 'YES', 'summer.jpg', 'SummerBreeze.pdf', 3, NULL, NULL),
(6, 'education', '2020-12-15 23:07:53', 'Pemrograman Web', 70000, 'Bismillah semoga berhasil upload kali inii. aamiin', 'pdf', '0', 'yes', '1608098873.jpg', '1608098873.pdf', 3, '2020-12-15 23:07:53', '2020-12-15 23:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `total_price` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `user_id`, `order_date`, `status`, `total_price`, `code`, `created_at`, `updated_at`) VALUES
(86, 2, '2020-12-16 06:54:40', 2, 90000, 906, '2020-12-15 05:41:07', '2020-12-15 07:07:58'),
(100, 2, '2020-12-16 16:03:06', 1, 110000, 186, '2020-12-16 05:27:04', '2020-12-16 09:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `id` int(11) NOT NULL,
  `ebook_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`id`, `ebook_id`, `order_id`, `total_price`, `created_at`, `updated_at`) VALUES
(71, 1, 86, 40000, '2020-12-15 05:41:07', '2020-12-15 05:41:07'),
(77, 2, 86, 50000, '2020-12-15 06:14:03', '2020-12-15 06:14:03'),
(90, 1, 99, 40000, '2020-12-15 08:37:23', '2020-12-15 08:37:23'),
(91, 1, 100, 40000, '2020-12-16 05:27:04', '2020-12-16 05:27:04'),
(92, 6, 100, 70000, '2020-12-16 09:01:57', '2020-12-16 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_publisher`
--

CREATE TABLE `tb_publisher` (
  `id` int(10) NOT NULL,
  `pub_first_name` varchar(20) NOT NULL,
  `pub_last_name` varchar(30) NOT NULL,
  `pub_income` int(11) NOT NULL,
  `pub_phone_number` int(11) NOT NULL,
  `pub_email` varchar(50) NOT NULL,
  `pub_password` varchar(30) NOT NULL,
  `pub_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Rahayu', 'rahayu@gmail.com', NULL, '$2y$10$dn02UvMPj7eo67enEPX/hOoz/1zLm2VtdLLwGavdOUKDWxdfDDise', NULL, '2020-11-09 09:11:40', '2020-11-09 09:11:40', 'customer'),
(3, 'Enggar', 'enggar@gmail.com', NULL, '$2y$10$V/ALxAlG0AURZFc7BDTXHugt4WLFHUrgim2Dfvl7VSRvEvNcdTdHu', NULL, '2020-11-09 09:24:31', '2020-11-09 09:24:31', 'publisher'),
(4, 'Fluffy', 'fluffy@gmail.com', NULL, '$2y$10$jalk3yOikoVeRaUUaNCcHu5RX9GmWnuj5OB6hWbccMSnMOOLWrBuW', NULL, '2020-11-10 13:11:02', '2020-11-10 13:11:02', 'publisher'),
(6, 'Firda', 'firda@gmail.com', NULL, '$2y$10$0L4qCjyQfNvN1.XgNTuqEeWz.dakoCIFirVFdVcateQ7Cf/d7fQcG', NULL, '2020-11-11 06:39:23', '2020-11-11 06:39:23', 'customer'),
(7, 'aku', 'aku@gmail.com', NULL, '$2y$10$RzjUtKPi0ASSyciPa5TJh.5hIXw/1wU1nqy3w91cu0pYVRYrOsI1K', NULL, '2020-11-18 23:44:34', '2020-11-18 23:44:34', 'publisher'),
(8, 'shawn', 'shawn@gmail.com', NULL, '$2y$10$CBDw/cbLwQNYe5M3PvmtQe1PuEUqAN0PV2VFpKurSshKHGOln1rEu', NULL, '2020-11-19 00:15:07', '2020-11-19 00:15:07', 'customer');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_book_publisher`
--
ALTER TABLE `tb_book_publisher`
  ADD PRIMARY KEY (`bp_ID`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`cust_ID`);

--
-- Indexes for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_publisher`
--
ALTER TABLE `tb_publisher`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tb_publisher`
--
ALTER TABLE `tb_publisher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
