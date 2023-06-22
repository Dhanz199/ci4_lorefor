-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 08:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) NOT NULL,
  `version` varchar(255) COLLATE utf8_bin NOT NULL,
  `class` varchar(255) COLLATE utf8_bin NOT NULL,
  `group` varchar(255) COLLATE utf8_bin NOT NULL,
  `namespace` varchar(255) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(19, '2023-06-21-102222', 'App\\Database\\Migrations\\Users', 'default', 'App', 1687353020, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `photo`, `created_at`, `updated_at`, `deleted_at`, `reset_token`) VALUES
(4, 'Aut proident aut ut', 'cidumuxe', 'tigo@mailinator.com', '1234', '1687353382_2742b71041138a4281b3.jpg', '2023-06-21 13:16:22', '2023-06-22 10:20:24', NULL, NULL),
(5, 'Architecto ipsum ut', 'kumylycuh', 'kamok@mailinator.com', '123', '1687356552_36b97a334d7569cf745d.jpg', '2023-06-21 14:09:12', '2023-06-22 10:20:47', NULL, NULL),
(6, 'Odio facere esse ut', 'sudihisy', 'vecezuse@mailinator.com', 'Pa$$w0rd!', '1687356696_c2baaec26cfda942e0db.jpg', '2023-06-21 14:11:36', '2023-06-21 14:11:36', NULL, NULL),
(7, 'Veniam sit anim ea ', 'rejanesis', 'fumuzohux@mailinator.com', 'Pa$$w0rd!', '1687356769_931e10dde43fe2d3de19.jpg', '2023-06-21 14:12:49', '2023-06-21 14:12:49', NULL, NULL),
(8, 'Sit quasi voluptate', 'wuguric', 'gobaqutife@mailinator.com', 'Pa$$w0rd!', '1687356813_7756e35b26391dc6ab58.jpg', '2023-06-21 14:13:33', '2023-06-21 14:13:33', NULL, NULL),
(9, 'Eos sunt molestiae ', 'wapatyr', 'kifuq@mailinator.com', 'Pa$$w0rd!', '1687356862_981aa3086e225bbcf80b.jpg', '2023-06-21 14:14:22', '2023-06-21 14:14:22', NULL, NULL),
(10, 'Aut quis enim velit ', 'sunekosim', 'nisoquwe@mailinator.com', 'Pa$$w0rd!', '1687356883_5d8a7322bfbed9955212.jpg', '2023-06-21 14:14:43', '2023-06-21 14:14:43', NULL, NULL),
(11, 'Voluptate ipsum iur', 'colozuzop', 'kusyhufu@mailinator.com', 'Pa$$w0rd!', '1687356893_fdfa81b227d19ecb4603.jpg', '2023-06-21 14:14:53', '2023-06-21 19:49:11', NULL, ''),
(13, 'sofaramadhan', 'ramadhan', 'sofa.ramadhan168@gmail.com', '$2y$10$t4GPFWI9rZ0wXwlA5EAZCOfKO/IBhleYPh/K2x8nOvrYRNU6XD2Pm', '1687358576_5948e054e63b42923531.jpg', '2023-06-21 14:42:57', '2023-06-22 10:47:45', NULL, NULL),
(14, '1', '2', 'codefind753@gmail.com', '$2y$10$67hVm64pGQc2kTD9sBerCePuH3YJeXGmR8nCUfBB.2zzPewoxCtT.', '1687367099_31452232cebdb6d16ff0.jpg', '2023-06-21 17:04:59', '2023-06-22 10:42:12', NULL, NULL),
(15, 'Facilis in ut animi', 'wufalyh', 'zuwola@mailinator.com', '$2y$10$KycjQ9bReBqweBhDLsZMaeOfz9rspBFdpwRETaLhUKU3taAi7ukOW', '1687430754_f4b6b2bfa945d12045b3.png', '2023-06-22 10:45:54', '2023-06-22 10:45:54', NULL, NULL),
(16, 'udin', 'udinsedunia', 'udinsedunia@gmail.com', '$2y$10$ScL9100ySr7cd69QJ02CcuYWBCGNKaFXKarhP.1Lc9FnJS.aPydBm', '1687436825_aaa2d4c2fce899cdc3ca.jpg', '2023-06-22 12:27:05', '2023-06-22 12:27:05', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
