-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2025 at 02:51 PM
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
-- Database: `study_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `study_planner`
--

CREATE TABLE `study_planner` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `deadline` date NOT NULL,
  `status` enum('Pending','Completed') DEFAULT 'Pending',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_planner`
--

INSERT INTO `study_planner` (`id`, `task_name`, `subject`, `deadline`, `status`, `notes`, `created_at`) VALUES
(2, 'VIDEO RECORDED IPT', 'IPT', '2025-04-21', 'Pending', '', '2025-04-14 05:32:00'),
(3, 'CISCO ', 'NET 101', '2025-04-25', 'Pending', '', '2025-04-14 06:39:57'),
(4, 'CRUD', 'IM101', '2025-05-10', 'Pending', 'ENHANCED CRUD', '2025-04-18 03:11:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `study_planner`
--
ALTER TABLE `study_planner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `study_planner`
--
ALTER TABLE `study_planner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
