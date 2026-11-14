-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2026 at 07:11 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int NOT NULL,
  `medicine_code` varchar(10) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `type` enum('Tablet','Syrup','Capsule','Ointment') NOT NULL,
  `usage_rule` enum('Before Meal','After Meal') NOT NULL,
  `side_effects` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int DEFAULT '0',
  `expired_date` date NOT NULL,
  `need_prescription` tinyint(1) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_code`, `medicine_name`, `type`, `usage_rule`, `side_effects`, `price`, `stock`, `expired_date`, `need_prescription`, `description`) VALUES
(1, 'M1', 'Paramex', 'Tablet', 'After Meal', 'Hunger', 2000.00, 5, '2026-11-20', 1, 'absa'),
(2, 'M2', 'Paramex2', 'Tablet', 'After Meal', 'Hunger', 30000.00, 6, '2026-11-26', 1, 'jsaj'),
(3, 'M3', 'Paramex3', 'Syrup', 'After Meal', 'Dehydrate', 50000.00, 10, '2027-01-15', 1, 'absaa');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int NOT NULL,
  `medical_record_no` varchar(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `birth_date` date NOT NULL,
  `blood_type` enum('A','B','AB','O') NOT NULL,
  `allergies` varchar(100) NOT NULL,
  `pain_level` tinyint NOT NULL,
  `appointment_at` datetime NOT NULL,
  `complaint` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `medical_record_no`, `full_name`, `email`, `phone`, `gender`, `birth_date`, `blood_type`, `allergies`, `pain_level`, `appointment_at`, `complaint`) VALUES
(1, 'MR1', 'IVnn', 'vinvin11@gmail.com', '0895635928833', 'M', '2026-11-13', 'AB', 'Chocolate', 0, '2026-11-13 00:00:00', 'nope');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`),
  ADD UNIQUE KEY `medicine_code` (`medicine_code`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `medical_record_no` (`medical_record_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
