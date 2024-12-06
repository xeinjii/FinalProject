-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `persontb`
--

CREATE TABLE `persontb` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Gender` varchar(250) NOT NULL,
  `PhoneNumber` varchar(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persontb`
--

INSERT INTO `persontb` (`id`, `Name`, `Gender`, `PhoneNumber`, `user_id`, `added_at`) VALUES
(64, 'Matt andrei belano', 'Male', '09665028045', 7, '2024-12-02 00:43:12'),
(66, 'Matt', 'Female', '12345678910', 9, '2024-12-02 00:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(250) NOT NULL,
  `Fullname` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `Fullname`, `Email`, `Password`) VALUES
(7, 'Matt Andrei Belano', 'Belano@gmail.com', '$2y$10$HO.5Ob4izRu0hDOHiV0nbOu5zj1oKcQdPjKdw/eGgx7unoIqQUWEy'),
(8, 'Rianne Aguilar', 'aguilar@gmail.com', '$2y$10$gom5.2kwA1jqOFIK09arAOKpfHMo61VSZWA6tbW7.5B.5cskdtT02'),
(9, 'Jezrel Acebron', 'acebron@gmail.com', '$2y$10$LW9inliijGX/rYWCqvDpDe8qdSfMQkmmuMxbsmdaNapsGSwiCUGOy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persontb`
--
ALTER TABLE `persontb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persontb`
--
ALTER TABLE `persontb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
