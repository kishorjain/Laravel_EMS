-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 22, 2020 at 11:06 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departmentName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` decimal(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`, `salary`, `created_at`) VALUES
(1, 'Testing', '2500.00', '2020-03-21 16:05:22'),
(2, 'SoftwareDevelopment', '1500.00', '2020-03-21 16:05:22'),
(3, 'Devops', '500.00', '2020-03-21 16:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `employeeallocations`
--

CREATE TABLE `employeeallocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeId` bigint(20) UNSIGNED NOT NULL,
  `departmentId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeeallocations`
--

INSERT INTO `employeeallocations` (`id`, `employeeId`, `departmentId`, `created_at`) VALUES
(1, 3, 1, '2020-03-22 10:50:08'),
(2, 1, 1, '2020-03-22 11:02:52'),
(3, 3, 1, '2020-03-22 11:02:52'),
(4, 2, 3, '2020-03-22 11:03:15'),
(5, 3, 3, '2020-03-22 11:03:15'),
(6, 1, 2, '2020-02-22 11:13:57'),
(7, 1, 2, '2020-02-22 11:13:57'),
(8, 3, 2, '2020-02-22 11:13:57'),
(9, 1, 3, '2020-02-22 11:13:57'),
(10, 3, 2, '2020-02-22 11:13:57'),
(11, 1, 2, '2020-02-22 11:13:57'),
(12, 2, 1, '2020-03-22 11:16:28'),
(13, 3, 1, '2020-03-22 10:50:08'),
(14, 1, 1, '2020-03-22 11:02:52'),
(15, 3, 1, '2020-03-22 11:02:52'),
(16, 2, 3, '2020-01-16 11:03:15'),
(17, 3, 3, '2020-01-22 11:03:15'),
(18, 1, 1, '2020-02-22 11:13:57'),
(20, 3, 2, '2020-02-22 11:13:57'),
(22, 3, 2, '2020-02-22 11:13:57'),
(24, 2, 1, '2020-01-09 11:16:28'),
(25, 3, 1, '2020-02-05 10:50:08'),
(26, 1, 1, '2020-03-22 11:02:52'),
(27, 3, 1, '2020-03-22 11:02:52'),
(28, 2, 3, '2020-03-22 11:03:15'),
(29, 3, 3, '2020-03-22 11:03:15'),
(36, 2, 1, '2020-03-22 11:16:28'),
(37, 3, 1, '2020-03-22 10:50:08'),
(38, 1, 1, '2020-03-22 11:02:52'),
(39, 3, 1, '2020-03-22 11:02:52'),
(40, 2, 3, '2020-03-22 11:03:15'),
(41, 3, 3, '2020-03-22 11:03:15'),
(48, 2, 1, '2020-03-22 11:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofjoin` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeeName`, `email`, `mobile`, `dateofbirth`, `gender`, `dateofjoin`, `created_at`) VALUES
(1, 'rajesh', 'rajesh@example.com', '9886445701', '1990-02-13 18:30:00', 'male', '2020-02-13 18:30:00', '2020-03-21 16:05:21'),
(2, 'kumar', 'kumar@example.com', '9886445702', '1990-02-13 18:30:00', 'male', '2020-03-13 18:30:00', '2020-03-21 16:05:22'),
(3, 'ramesh', 'ramesh@example.com', '9886445703', '1990-02-13 18:30:00', 'male', '2020-03-13 18:30:00', '2020-03-21 16:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2020_03_21_121438_employee_table', 1),
(26, '2020_03_21_125154_department_table', 1),
(27, '2020_03_21_131114_employee_allocation_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kishor', 'kishor@gmail.com', NULL, '$2y$10$mxeHhupSTyrFKm9j/5EgBu9RXAPzFJCbScOt8HaSip/WRLKxMrZXW', 'B2sH5eN3aD', '2020-03-21 16:00:36', '2020-03-21 16:00:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeallocations`
--
ALTER TABLE `employeeallocations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeeallocations_employeeid_foreign` (`employeeId`),
  ADD KEY `employeeallocations_departmentid_foreign` (`departmentId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeeallocations`
--
ALTER TABLE `employeeallocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employeeallocations`
--
ALTER TABLE `employeeallocations`
  ADD CONSTRAINT `employeeallocations_departmentid_foreign` FOREIGN KEY (`departmentId`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `employeeallocations_employeeid_foreign` FOREIGN KEY (`employeeId`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
