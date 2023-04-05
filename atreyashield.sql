-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 02:37 PM
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
(27, 11, '', 0x656e637279707465645f70726163312e747874, '', '04:20:26', '2023-02-19'),
(28, 11, '', 0x656e637279707465645f70726163312e747874, '', '04:45:19', '2023-02-19'),
(29, 11, '', 0x656e637279707465645f70726163312e747874, 'abcd', '04:56:22', '2023-02-19'),
(31, 11, '', 0x656e637279707465645f70726163312e747874, '', '05:21:56', '2023-02-19'),
(32, 11, '', 0x656e637279707465645f70726163312e747874, 'aditya', '06:35:41', '2023-02-19'),
(33, 13, '', 0x656e637279707465645f54585453616d706c65312e747874, 'sarjantext', '11:06:02', '2023-02-20'),
(34, 13, '', 0x656e637279707465645f50444673616d706c65332e706466, 'sarjanpdf', '11:06:31', '2023-02-20'),
(35, 13, '', 0x656e637279707465645f494d4753616d706c65322e706e67, 'sarjanimg', '11:06:39', '2023-02-20'),
(36, 13, '', 0x656e637279707465645f50444673616d706c65332e706466, 'mihirpdf', '11:54:53', '2023-02-20'),
(48, 16, '', 0x323330323230303230313232706d5f656e6372797074656450444673616d706c65332e706466, 'sheetalpdf', '02:01:22', '2023-02-20'),
(49, 16, '', 0x323330323230303230333432706d5f656e6372797074656454585453616d706c65312e747874, 'sheetaltxt', '02:03:42', '2023-02-20'),
(50, 16, '', 0x323330323230303230363335706d5f656e63727970746564494d4753616d706c65322e706e67, 'mihirimg', '02:06:35', '2023-02-20'),
(51, 16, '', 0x323330323230303230383532706d5f656e6372797074656454585453616d706c65312e747874, 'txt', '02:08:52', '2023-02-20'),
(52, 16, '', 0x323330323230303231313130706d5f656e63727970746564494d4753616d706c65322e706e67, 'img', '02:11:10', '2023-02-20'),
(53, 16, '', 0x323330323230303231353031706d5f656e6372797074656450444673616d706c65332e706466, 'demopdf', '02:15:01', '2023-02-20'),
(54, 13, '', 0x656e637279707465645f50444673616d706c65332e706466, 'demopdf', '02:18:22', '2023-02-20'),
(55, 11, '', 0x323330323230303232323231706d5f656e6372797074656454585453616d706c65312e747874, '123', '02:22:21', '2023-02-20'),
(75, 19, '', 0x323330343034313233363234706d656e63727970745f73616d706c65652e747874, '1', '12:36:24', '2023-04-04'),
(76, 19, '', 0x323330343034313233383434706d656e63727970745f73616d706c65652e747874, '1', '12:38:44', '2023-04-04'),
(77, 18, '', 0x323330343034313234363033706d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '1', '12:46:03', '2023-04-04'),
(78, 18, '', 0x323330343034313235313039706d656e63727970745f73616d706c65652e747874, '1', '12:51:09', '2023-04-04'),
(79, 18, '', 0x323330343034313235363438706d656e63727970745f73616d706c65652e747874, '1', '12:56:48', '2023-04-04'),
(80, 18, '', 0x323330343034303130303136706d656e63727970745f73616d706c65652e747874, '1', '01:00:16', '2023-04-04'),
(81, 18, '', 0x323330343034303130393435706d656e63727970745f73616d706c65652e747874, '12', '01:09:45', '2023-04-04'),
(82, 19, '', 0x323330343034303131303333706d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '12', '01:10:33', '2023-04-04'),
(83, 19, '', 0x323330343034303730333430706d656e63727970745f73616d706c65652e747874, '1', '07:03:40', '2023-04-04'),
(87, 19, '', 0x323330343034303733323139706d656e63727970745f686f6d6557686974652e706e67, '1', '07:32:19', '2023-04-04'),
(88, 19, '', 0x323330343034303735313438706d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '123', '07:51:48', '2023-04-04'),
(89, 20, '', 0x323330343034303833323535706d656e63727970745f50726163325f4d6968697244657667686172655f30362e706466, '123', '08:32:55', '2023-04-04'),
(90, 20, '', 0x323330343034303934393232706d656e63727970745f50726163365f4d6968697244657667686172655f30362e706466, '12', '09:49:22', '2023-04-04'),
(91, 19, '', 0x323330343034313032323533706d656e63727970745f73616d706c65652e747874, '1', '10:22:53', '2023-04-04'),
(92, 20, '', 0x323330343034313032333332706d656e63727970745f686f6d6557686974652e706e67, '1', '10:23:32', '2023-04-04'),
(93, 19, '', 0x323330343035313130353533616d656e63727970745f73616d706c65652e747874, '1', '11:05:53', '2023-04-05');

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
(10, 'mihir', 'a73ef604a9efcf764ac4cb40b8ba5537', 'mihir@gmail.com', '2023-02-19 12:49:33', 1),
(11, 'Aditya', '0bc9fcc24659b2d218554966c69eedcb', 'adi234@gmail.com', '2023-02-19 03:52:48', 1),
(12, 'Anish', '687e3f8d0930f33805da2ab6b36f73f2', 'anish@gmail.com', '2023-02-20 10:37:00', 1),
(13, 'Sarjan Patel', '1d32520d80814cd66bd4b42ef910169d', 'sarjan@gmail.com', '2023-02-20 10:42:07', 1),
(14, 'Mihir Devghare', 'ce0dd306c2cc2ada1e7a721986fef984', 'dmihir@gmail.com', '2023-02-20 11:53:56', 1),
(16, 'sheetal', '078f24b00938f02c3e32a0219466b356', 'sheetal@ict.gnu.ac.in', '2023-02-20 01:58:46', 1),
(17, 'demo', 'd109ad8c1a64f009a86d58fb7064dae7', 'demo@gmail.com', '2023-02-20 02:14:37', 1),
(18, 'SP', '694f6246632bc2b5d0899137cca23af2', 'SP@GMAIL.COM', '2023-04-03 10:27:23', 1),
(19, 'MD', '694f6246632bc2b5d0899137cca23af2', 'MD@gmail.com', '2023-04-03 10:34:13', 1),
(20, 'AV', '694f6246632bc2b5d0899137cca23af2', 'AV@gmail.com', '2023-04-04 08:31:53', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
