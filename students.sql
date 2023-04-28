-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`, `created_at`, `updated_at`) VALUES
(12, 'arnob', 'dfg@gmail', '111111111111', '123', '2023-04-24 09:57:06', '2023-04-26 10:41:51'),
(14, 'sad', 'asdasd@gmail.com', '123456749812', 'asd', '2023-04-24 10:03:12', '2023-04-24 10:03:12'),
(15, 'dfs', 'asd@gmail', '123456891254', 'gd', '2023-04-24 10:04:52', '2023-04-24 10:04:52'),
(16, 'wddsa', 'asdf@gmail', '123456789123', 'sda', '2023-04-24 10:08:00', '2023-04-24 10:08:00'),
(17, 'asd', 'asd@gmail.com', '12345678912', 'AAS', '2023-04-24 12:22:19', '2023-04-24 12:22:19'),
(18, 'qwe', 'asedqwrwq@gmail.com', '12345679823', 'asd', '2023-04-24 12:50:31', '2023-04-24 12:50:31'),
(19, 'fasd', 'asdf@gmail.com', '12345678945', 'asdadff', '2023-04-24 13:03:07', '2023-04-24 13:03:07'),
(20, 'azdas', 'asdf@gmail.com', '123456789123', '124', '2023-04-24 13:14:46', '2023-04-24 13:14:46'),
(21, 'amit roy', 'amitroy@gmail.com', '123456789121', 'cse420', '2023-04-25 07:11:12', '2023-04-27 10:55:41'),
(22, 'asds', 'asasdsd@gmail.com', '1234567489742', 'csd', '2023-04-25 07:41:40', '2023-04-25 07:41:40'),
(23, 'amit roy', 'ami@gmail.com', '01718008547', 'cse420', '2023-04-26 10:42:34', '2023-04-27 10:55:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
