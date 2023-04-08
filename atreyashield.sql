-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 04:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atreyashield`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_logs`
--

CREATE TABLE `access_logs` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `can_download` tinyint(4) NOT NULL,
  `can_read` tinyint(4) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_downloaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `privateKey` varchar(255) NOT NULL,
  `uploadTime` time NOT NULL,
  `uploadDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `owner_id`, `Owner`, `image`, `privateKey`, `uploadTime`, `uploadDate`) VALUES
(89, 20, '', 0x323330343034303833323535706d656e63727970745f50726163325f4d6968697244657667686172655f30362e706466, '123', '08:32:55', '2023-04-04'),
(90, 20, '', 0x323330343034303934393232706d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '12', '09:49:22', '2023-04-04'),
(92, 20, '', 0x323330343034313032333332706d656e63727970745f686f6d6557686974652e706e67, '1', '10:23:32', '2023-04-04'),
(93, 19, '', 0x323330343035313130353533616d656e63727970745f73616d706c65652e747874, '1', '11:05:53', '2023-04-05'),
(94, 20, '', 0x323330343035313035323537706d656e63727970745f73616d706c65652e747874, '1', '10:52:57', '2023-04-05'),
(95, 18, '', 0x323330343035313133343233706d656e63727970745f50726163375f4d6968697244657667686172655f30362e706466, '1', '11:34:23', '2023-04-05'),
(96, 21, '', 0x323330343036303734373331616d656e63727970745f73616d706c65652e747874, '11', '07:47:31', '2023-04-06'),
(97, 21, '', 0x323330343036303830373537616d656e63727970745f73616d706c65652e747874, '1', '08:07:57', '2023-04-06'),
(98, 19, '', 0x323330343037303834343032616d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '123', '08:44:02', '2023-04-07'),
(99, 19, '', 0x323330343037303733363238706d656e63727970745f686f6d6557686974652e706e67, '123', '07:36:28', '2023-04-07'),
(100, 20, '', 0x323330343038303731383433706d656e63727970745f73616d706c65652e747874, '1234', '07:18:43', '2023-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `file_permissions`
--

CREATE TABLE `file_permissions` (
  `id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `can_download` tinyint(1) NOT NULL,
  `can_read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reset_token` varchar(40) NOT NULL,
  `expiration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recovery_email` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `recovery_email`, `last_login`, `is_active`) VALUES
(18, 'Sarjan Patel', '694f6246632bc2b5d0899137cca23af2', 'sarjanpatel20@gnu.ac.in', '2023-04-03 10:27:23', 1),
(19, 'Mihir Devghare', '694f6246632bc2b5d0899137cca23af2', 'mihirdevghare20@gnu.ac.in', '2023-04-03 10:34:13', 1),
(20, 'Aditya Varshney', '694f6246632bc2b5d0899137cca23af2', 'adityavarshney20@gnu.ac.in', '2023-04-04 08:31:53', 1),
(21, 'Anish Shah', '694f6246632bc2b5d0899137cca23af2', 'anishshah20@gnu.ac.in', '2023-04-05 06:44:33', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_logs`
--
ALTER TABLE `access_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_permissions`
--
ALTER TABLE `file_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `recovery_email` (`recovery_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_logs`
--
ALTER TABLE `access_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_logins`
--
ALTER TABLE `failed_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `file_permissions`
--
ALTER TABLE `file_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
