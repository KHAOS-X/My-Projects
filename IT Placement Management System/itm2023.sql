-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itm2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `admin_name` varchar(30) NOT NULL,
  `admin_id` varchar(12) NOT NULL,
  `admin_password` varchar(12) NOT NULL,
  `admin_key` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`admin_name`, `admin_id`, `admin_password`, `admin_key`) VALUES
('Abiola Ajibola', 'admin', '$2y$10$vdKvM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `placement_information`
--

CREATE TABLE `placement_information` (
  `full_name` varchar(60) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `matric_no` varchar(11) NOT NULL,
  `level` int(3) NOT NULL DEFAULT 400,
  `internship_type` varchar(20) NOT NULL,
  `internship_duration` int(2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `state_of_placement` varchar(15) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `company_address` varchar(60) NOT NULL,
  `company_type` varchar(20) NOT NULL,
  `supervisor_name` varchar(20) NOT NULL,
  `supervisor_contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placement_information`
--

INSERT INTO `placement_information` (`full_name`, `faculty`, `department`, `matric_no`, `level`, `internship_type`, `internship_duration`, `start_date`, `end_date`, `state_of_placement`, `company_name`, `company_address`, `company_type`, `supervisor_name`, `supervisor_contact`) VALUES
('Ajibola Adeyemi Adeola', 'SEET', 'MME', 'MME/19/9996', 300, 'summer', 4, '2023-11-30', '2024-02-29', 'ABUJA', 'FINE STEELS LIMITED', 'FCT, ABUJA', 'Steel Refinery', 'Dr. Kayode', '09123456789'),
('Ajibola Adeyemi Adeola', 'SEET', 'MME', 'MME/19/9997', 300, 'summer', 4, '2023-11-30', '2024-02-29', 'ABUJA', 'FINE STEELS LIMITED', 'FCT, ABUJA', 'Steel Refinery', 'Dr. Kayode', '09123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
  ADD PRIMARY KEY (`admin_key`),
  ADD UNIQUE KEY `admin_id` (`admin_id`),
  ADD UNIQUE KEY `admin_id_2` (`admin_id`),
  ADD UNIQUE KEY `admin_id_3` (`admin_id`);

--
-- Indexes for table `placement_information`
--
ALTER TABLE `placement_information`
  ADD PRIMARY KEY (`matric_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_information`
--
ALTER TABLE `admin_information`
  MODIFY `admin_key` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
