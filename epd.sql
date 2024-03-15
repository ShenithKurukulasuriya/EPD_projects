-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epd`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardsn`
--

CREATE TABLE `cardsn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `vnumber` varchar(255) NOT NULL,
  `housenumber` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `towernumber` varchar(255) DEFAULT NULL,
  `floornumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardsn`
--

INSERT INTO `cardsn` (`id`, `cardnumber`, `vnumber`, `housenumber`, `created_at`, `updated_at`, `towernumber`, `floornumber`) VALUES
(3, '14500014', 'CBF - 0819', '1/4', '2024-02-07 23:38:58', '2024-02-07 23:38:58', '1', '1'),
(4, '14500015', 'BIK - 4725', '1/5', '2024-02-07 23:39:52', '2024-02-07 23:39:52', '1', '1'),
(5, '14500016', 'CBI - 9612', '1/6', '2024-02-07 23:40:14', '2024-02-07 23:40:14', '1', '1'),
(6, '14500017', 'PK - 4691', '2/1', '2024-02-07 23:41:05', '2024-02-07 23:41:05', '1', '2'),
(7, '14500018', 'KW - 8424', '2/2', '2024-02-07 23:41:39', '2024-02-07 23:41:39', '1', '2'),
(8, '14500019', 'CBB - 8548', '2/3', '2024-02-07 23:42:05', '2024-02-07 23:42:05', '1', '2'),
(9, '14500021', 'CAO - 2831', '2/5', '2024-02-07 23:43:18', '2024-02-07 23:43:18', '1', '2'),
(10, '14500024', 'CAR - 8680', '3/2', '2024-02-07 23:44:04', '2024-02-07 23:44:04', '1', '3'),
(11, '14500026', 'CBD - 0609', '3/4', '2024-02-07 23:44:44', '2024-02-07 23:44:44', '1', '3'),
(12, '14500027', 'KF - 7080', '3/5', '2024-02-07 23:46:05', '2024-02-07 23:46:05', '1', '3'),
(13, '14500029', 'CBH - 5599', '4/1', '2024-02-07 23:47:44', '2024-02-07 23:47:44', '1', '4'),
(14, '14500030', 'KX - 8904', '4/2', '2024-02-07 23:48:46', '2024-02-07 23:48:46', '1', '4'),
(15, '14500031', 'CAA - 3263', '4/3', '2024-02-07 23:50:45', '2024-02-07 23:50:45', '1', '4'),
(16, '14500023', 'CAW - 4303', '3/1', '2024-02-08 00:00:36', '2024-02-08 00:00:36', '1', '3'),
(17, '14500032', 'KM - 1083', '4/4', '2024-02-08 00:03:34', '2024-02-08 00:03:34', '1', '4'),
(18, '14500033', 'CAM - 7722', '4/5', '2024-02-08 00:11:15', '2024-02-08 00:11:15', '1', '4'),
(19, '14500034', 'CBA-0014', '4/6', '2024-02-08 00:12:46', '2024-02-08 00:12:46', '1', '4'),
(20, '14500035', 'CAD - 8877', '5/1', '2024-02-08 00:14:06', '2024-02-08 00:14:06', '1', '5'),
(21, '14500036', 'CBA - 7493', '5/2', '2024-02-08 00:14:43', '2024-02-08 00:14:43', '1', '5'),
(22, '14500037', 'PI - 1522', '5/3', '2024-02-08 00:15:23', '2024-02-08 00:15:23', '1', '5'),
(24, '14500040', 'CBF-0819', '5/6', '2024-02-08 00:19:31', '2024-02-08 00:19:31', '1', '5'),
(25, '14500041', 'KH-4656', '6/1', '2024-02-08 00:19:54', '2024-02-08 00:19:54', '1', '6'),
(26, '14500042', 'CBA - 6273', '6/2', '2024-02-08 00:21:05', '2024-02-08 00:21:05', '1', '6'),
(27, '14500043', 'CBH-0686', '6/3', '2024-02-08 00:21:51', '2024-02-08 00:21:51', '1', '6'),
(28, '14500044', 'PJ - 0279', '6/4', '2024-02-08 00:22:26', '2024-02-08 00:22:26', '1', '6'),
(29, '14500045', 'CAW - 5226', '6/5', '2024-02-08 00:22:51', '2024-02-08 00:22:51', '1', '6'),
(30, '14500046', 'CBI - 9873', '6/6', '2024-02-08 00:23:43', '2024-02-08 00:23:43', '1', '6'),
(31, '14500047', 'CBK - 8729', '7/1', '2024-02-08 00:24:23', '2024-02-08 00:24:23', '1', '7'),
(32, '14500048', 'CAS - 5709', '7/2', '2024-02-08 00:24:55', '2024-02-08 00:24:55', '1', '7'),
(33, '14500049', 'CAS - 2526', '7/3', '2024-02-08 00:25:47', '2024-02-08 00:25:47', '1', '7'),
(34, '14500050', 'KO - 5196', '7/4', '2024-02-08 00:26:54', '2024-02-08 00:26:54', '1', '7'),
(35, '14500051', 'CBH - 9964', '7/5', '2024-02-08 00:27:51', '2024-02-08 00:27:51', '1', '7'),
(36, '14500052', 'CAE - 6131', '7/6', '2024-02-08 00:28:46', '2024-02-08 00:28:46', '1', '7'),
(37, '14500053', 'CBI - 9406', '8/1', '2024-02-08 00:31:00', '2024-02-08 00:31:00', '1', '8'),
(38, '14500054', 'KS - 9914', '8/2', '2024-02-08 00:34:15', '2024-02-08 00:34:15', '1', '8'),
(39, '14500057', 'CBE - 6840', '8/5', '2024-02-08 00:39:13', '2024-02-08 00:39:13', '1', '8'),
(40, '14500058', 'CAK-0669', '8/6', '2024-02-08 00:39:42', '2024-02-08 00:39:42', '1', '8');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `HouseId` int(100) NOT NULL,
  `HouseNo` varchar(100) NOT NULL,
  `IsAvailbe` varchar(100) NOT NULL,
  `Housetype` varchar(100) NOT NULL,
  `TowerNo` varchar(100) NOT NULL,
  `FloorNo` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`HouseId`, `HouseNo`, `IsAvailbe`, `Housetype`, `TowerNo`, `FloorNo`, `created_at`, `updated_at`, `status`) VALUES
(1, 'feferfrfeer', 'vvsdvdv', 'dsv', 'dvs', 'dsv', '2024-02-01 21:49:16', '2024-02-22 02:48:44', 'vsd'),
(2, 'zxcxc', 'xzcxc', 'zxczxc', 'zxczxc', 'zxczxc', '2024-02-01 21:49:36', '2024-02-22 02:49:00', 'zxczxc'),
(3, 'hey', 'hey', 'hey', 'hey', 'hey', '2024-02-01 21:49:50', '2024-02-22 02:49:55', 'hey'),
(4, 'hello', 'hello', 'hello', 'hello', 'hello', '2024-02-01 21:50:43', '2024-02-22 02:52:38', 'hello'),
(5, 'hello', 'hello', 'hello', 'hello', 'hello', '2024-02-01 21:51:02', '2024-02-22 02:55:44', 'hello'),
(6, 'scccccccccccc', 'available', 'permanent', '1', '1', '2024-02-01 21:51:18', '2024-02-22 03:21:16', 'active'),
(7, '2/1', 'available', 'permanent', '1', '2', '2024-02-01 21:51:39', '2024-02-01 21:51:39', 'active'),
(8, '2/2', 'available', 'permanent', '1', '2', '2024-02-01 21:52:02', '2024-02-01 21:52:02', 'active'),
(9, '2/3', 'available', 'permanent', '1', '2', '2024-02-01 21:52:27', '2024-02-01 21:52:27', 'active'),
(10, '2/4', 'available', 'permanent', '1', '2', '2024-02-01 21:52:44', '2024-02-01 21:52:44', 'active'),
(11, '2/5', 'available', 'permanent', '1', '2', '2024-02-01 21:52:59', '2024-02-01 21:52:59', 'active'),
(12, '2/6', 'available', 'permanent', '1', '2', '2024-02-01 21:53:20', '2024-02-01 21:53:20', 'active'),
(13, '3/1', 'available', 'permanent', '1', '3', '2024-02-01 21:53:34', '2024-02-01 21:53:34', 'active'),
(14, '3/2', 'available', 'permanent', '1', '3', '2024-02-01 21:54:00', '2024-02-01 21:54:00', 'active'),
(15, '3/3', 'available', 'permanent', '1', '3', '2024-02-01 21:54:28', '2024-02-01 21:54:28', 'active'),
(16, '3/4', 'available', 'permanent', '1', '3', '2024-02-01 21:54:47', '2024-02-01 21:54:47', 'active'),
(17, '3/5', 'available', 'permanent', '1', '3', '2024-02-01 21:56:11', '2024-02-01 21:56:11', 'active'),
(18, '3/6', 'available', 'permanent', '1', '3', '2024-02-01 21:58:02', '2024-02-01 21:58:02', 'active'),
(19, '4/1', 'available', 'permanent', '1', '4', '2024-02-01 21:58:33', '2024-02-01 21:58:33', 'active'),
(20, '4/2', 'available', 'permanent', '1', '4', '2024-02-01 21:58:48', '2024-02-01 21:58:48', 'active'),
(21, '4/3', 'available', 'permanent', '1', '4', '2024-02-01 21:59:03', '2024-02-01 21:59:03', 'active'),
(22, '4/4', 'available', 'permanent', '1', '4', '2024-02-01 21:59:27', '2024-02-01 21:59:27', 'active'),
(23, '4/5', 'available', 'permanent', '1', '4', '2024-02-01 21:59:49', '2024-02-01 21:59:49', 'active'),
(24, '4/5', 'available', 'permanent', '1', '4', '2024-02-01 22:00:07', '2024-02-01 22:00:07', 'active'),
(25, '4/6', 'available', 'permanent', '1', '4', '2024-02-01 22:00:25', '2024-02-01 22:00:25', 'active'),
(26, '5/1', 'available', 'permanent', '1', '5', '2024-02-01 22:00:44', '2024-02-01 22:00:44', 'active'),
(27, '5/2', 'available', 'permanent', '1', '5', '2024-02-01 22:01:02', '2024-02-01 22:01:02', 'active'),
(28, '5/3', 'available', 'permanent', '1', '5', '2024-02-01 22:01:42', '2024-02-01 22:01:42', 'active'),
(29, '2/4', 'available', 'permanent', '1', '5', '2024-02-01 22:02:06', '2024-02-01 22:02:06', 'active'),
(30, '5/4', 'available', 'permanent', '1', '5', '2024-02-01 22:02:54', '2024-02-01 22:02:54', 'active'),
(31, '5/5', 'available', 'permanent', '1', '5', '2024-02-01 22:03:14', '2024-02-01 22:03:14', 'active'),
(32, '5/6', 'available', 'permanent', '1', '5', '2024-02-01 22:03:44', '2024-02-01 22:03:44', 'active'),
(33, '6/1', 'available', 'permanent', '1', '6', '2024-02-01 22:04:00', '2024-02-01 22:04:00', 'active'),
(34, '6/2', 'available', 'permanent', '1', '6', '2024-02-01 22:04:19', '2024-02-01 22:04:19', 'active'),
(35, '6/3', 'available', 'permanent', '1', '6', '2024-02-01 22:05:01', '2024-02-01 22:05:01', 'active'),
(36, '6/4', 'available', 'permanent', '1', '6', '2024-02-01 22:05:16', '2024-02-01 22:05:16', 'active'),
(37, '6/5', 'available', 'permanent', '1', '6', '2024-02-01 22:05:58', '2024-02-01 22:05:58', 'active'),
(38, '6/6', 'available', 'permanent', '1', '6', '2024-02-01 22:06:17', '2024-02-01 22:06:17', 'active'),
(39, '7/1', 'available', 'permanent', '1', '7', '2024-02-01 22:06:41', '2024-02-01 22:06:41', 'active'),
(40, '7/2', 'available', 'permanent', '1', '7', '2024-02-01 22:07:15', '2024-02-01 22:07:15', 'active'),
(41, '7/3', 'available', 'permanent', '1', '7', '2024-02-01 22:07:27', '2024-02-01 22:07:27', 'active'),
(42, '7/4', 'available', 'permanent', '1', '7', '2024-02-01 22:07:43', '2024-02-01 22:07:43', 'active'),
(43, '7/5', 'available', 'permanent', '1', '7', '2024-02-01 22:08:13', '2024-02-01 22:08:13', 'active'),
(44, '7/6', 'available', 'permanent', '1', '7', '2024-02-01 22:08:30', '2024-02-01 22:08:30', 'active'),
(45, '8/1', 'available', 'permanent', '1', '8', '2024-02-01 22:08:53', '2024-02-01 22:08:53', 'active'),
(46, '8/2', 'available', 'permanent', '1', '8', '2024-02-01 22:09:12', '2024-02-01 22:09:12', 'active'),
(47, '8/3', 'available', 'permanent', '1', '8', '2024-02-01 22:09:55', '2024-02-01 22:09:55', 'active'),
(48, '8/4', 'available', 'permanent', '1', '8', '2024-02-01 22:10:16', '2024-02-01 22:10:16', 'active'),
(49, '8/5', 'available', 'permanent', '1', '8', '2024-02-01 22:10:39', '2024-02-01 22:10:39', 'active'),
(50, '8/6', 'available', 'permanent', '1', '8', '2024-02-01 22:11:17', '2024-02-01 22:11:17', 'active'),
(51, 'bunny', 'available', 'rent', '1', '4', '2024-02-12 01:22:02', '2024-02-12 01:22:02', 'active'),
(52, 'xX', 'not-Available', 'permanent', '1', '2', '2024-02-12 02:27:56', '2024-02-12 02:27:56', 'active'),
(53, 'zczxc', 'not-Available', 'rent', '5', '3', '2024-02-15 04:26:42', '2024-02-15 04:26:42', 'active'),
(54, 'erererer', 'available', 'permanent', '2', '1', '2024-02-15 23:56:45', '2024-02-15 23:56:45', 'active'),
(55, 'hello', 'available', 'permanent', '2', '1', '2024-02-16 00:44:58', '2024-02-16 00:44:58', 'active'),
(56, 'hello', 'available', 'rent', '1', '1', '2024-02-16 00:45:33', '2024-02-16 00:45:33', 'deactivated'),
(57, 'hi hi', 'available', 'permanent', '6', '2', '2024-02-16 00:46:05', '2024-02-16 00:46:05', 'active'),
(58, 'my name is bunny', 'available', 'permanent', '6', '4', '2024-02-16 00:58:52', '2024-02-16 00:58:52', 'active'),
(59, 'hello there', 'available', 'permanent', '1', '4', '2024-02-22 02:46:25', '2024-02-22 02:46:25', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `houseresidents`
--

CREATE TABLE `houseresidents` (
  `HResidentId` int(11) NOT NULL,
  `HouseNo` varchar(50) NOT NULL,
  `ResidentId` int(11) NOT NULL,
  `RentDate` varchar(50) NOT NULL,
  `RentExpiredDate` varchar(50) NOT NULL,
  `IscurrentReturn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `housetype`
--

CREATE TABLE `housetype` (
  `TypeId` int(11) NOT NULL,
  `TypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `housevehicles`
--

CREATE TABLE `housevehicles` (
  `HvNumber` int(11) NOT NULL,
  `HouseNo` varchar(50) NOT NULL,
  `VehicleNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_11_24_064303_create_cards_table', 1),
(2, '2023_12_14_064456_add_timestamps_to_house_table', 2),
(3, '2024_02_24_042119_create_users_table', 3),
(4, '2024_02_26_051312_add_remember_token_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `resident family`
--

CREATE TABLE `resident family` (
  `RFZD` int(11) NOT NULL,
  `ResidentId` varchar(50) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `ResidentId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tower`
--

CREATE TABLE `tower` (
  `TowerId` int(11) NOT NULL,
  `TowerName` varchar(50) NOT NULL,
  `FloorsCount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tower`
--

INSERT INTO `tower` (`TowerId`, `TowerName`, `FloorsCount`) VALUES
(1, 'Tower 1', '8'),
(2, 'Tower 2', '17'),
(5, 'Tower 3', '4'),
(6, 'Tower 4', '10');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `role`, `remember_token`) VALUES
(23, 'chathura', 'chathura@expo.lk', NULL, '$2y$10$dPlgFMV5J24h3SbJEWgJnucXTGlzmEUj4H/nYZMv4v/5BpN95mMoC', '2024-02-27 01:52:33', '2024-02-27 01:52:33', 'admin', 'XzZXPfdUAHFHpcY9YorvgEBM9JtSzDNixu4ZHIcdC256wKGxqdtNJ7bu0khB'),
(24, 'shenith', 'shenith@expo.lk', NULL, '$2y$10$QbjL1J1QMlz8YNqqmREmfu/nRPTX9HGO6/V2ND2J21HDWCtfFxu7.', '2024-02-27 01:54:40', '2024-02-27 01:54:40', 'user', 'AIg9ZdEAv6iqlhTDiwAmzCEBYx2AqzbaOy1tzCXZQFRxnccXfSiYCCR47ZkZ'),
(25, 'bunny', 'sample@gmail.com', NULL, '$2y$10$NKhT1KLKS3f64EE0T/iZD.IIpXgV6y/SYET7mJsZm7DVj/pdBMPtG', '2024-02-27 22:07:09', '2024-02-28 00:10:16', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicale card`
--

CREATE TABLE `vehicale card` (
  `Cardno` int(11) NOT NULL,
  `vehicaleNo` varchar(50) NOT NULL,
  `IssuedDate` varchar(50) NOT NULL,
  `ReturnedDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicals`
--

CREATE TABLE `vehicals` (
  `vehicaleId` int(11) NOT NULL,
  `vehicaleNo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardsn`
--
ALTER TABLE `cardsn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`HouseId`);

--
-- Indexes for table `houseresidents`
--
ALTER TABLE `houseresidents`
  ADD PRIMARY KEY (`HResidentId`);

--
-- Indexes for table `housetype`
--
ALTER TABLE `housetype`
  ADD PRIMARY KEY (`TypeId`);

--
-- Indexes for table `housevehicles`
--
ALTER TABLE `housevehicles`
  ADD PRIMARY KEY (`HvNumber`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident family`
--
ALTER TABLE `resident family`
  ADD PRIMARY KEY (`RFZD`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`ResidentId`);

--
-- Indexes for table `tower`
--
ALTER TABLE `tower`
  ADD PRIMARY KEY (`TowerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicale card`
--
ALTER TABLE `vehicale card`
  ADD PRIMARY KEY (`Cardno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardsn`
--
ALTER TABLE `cardsn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `HouseId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `houseresidents`
--
ALTER TABLE `houseresidents`
  MODIFY `HResidentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `housetype`
--
ALTER TABLE `housetype`
  MODIFY `TypeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `housevehicles`
--
ALTER TABLE `housevehicles`
  MODIFY `HvNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident family`
--
ALTER TABLE `resident family`
  MODIFY `RFZD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `ResidentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tower`
--
ALTER TABLE `tower`
  MODIFY `TowerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
