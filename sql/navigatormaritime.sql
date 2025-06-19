-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 12:44 PM
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
-- Database: `navigatormaritime`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_course`
--

CREATE TABLE `book_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `courses` text NOT NULL,
  `message` text NOT NULL,
  `enroll_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `number`) VALUES
(1, 21002100);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `purpose` text NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electiral_course`
--

CREATE TABLE `electiral_course` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electiral_course`
--

INSERT INTO `electiral_course` (`id`, `course`, `days`) VALUES
(1, 'Control Engineering Course', 2),
(2, 'High Voltage Safety Electric Propulsion', 2),
(3, 'Marine Electro Technology basic', 2),
(4, 'Pneumatics and Hydraulics', 2),
(5, 'Refrigeration and AirConditioning', 2);

-- --------------------------------------------------------

--
-- Table structure for table `house_course`
--

CREATE TABLE `house_course` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_course`
--

INSERT INTO `house_course` (`id`, `course`, `days`) VALUES
(1, 'Accident Investigation and Root Cause Analysis', 2),
(2, 'ADVANCE TRAINING IN NEGOTIATION STRATEGIES AND SKILLS', 1),
(3, 'Auxillary Marchinery System', 3),
(4, 'Basic Ice Navigation', 2),
(5, 'Basic Ice Navigation for Evic', 0),
(6, 'Basic Trim and Stability', 2),
(7, 'Bridge Maneuvering Simulator', 3),
(8, 'Bridge Resource Management', 3),
(9, 'Bridge Resource Management (Cenmar)', 3),
(10, 'Bridge Resource Management (StarOcean)', 2),
(11, 'Bridge Resource Management Refresher', 2),
(12, 'Bridge Team Management', 3),
(13, 'Bridge Team Management Refresher', 2),
(14, 'Bridge Team Management with Bridge Resource Management', 4),
(15, 'Bunkering Survey Calculation', 2),
(16, 'CARGO HANDLING / ENEL', 1),
(17, 'Cargo Handling and Care of Cargo', 4),
(18, 'Collision Avoidance', 3),
(19, 'Collision Regulation', 1),
(20, 'Consolidated Marpol (In-house)', 3),
(21, 'Crude Oil Washing and Inert Gas System', 2),
(22, 'DANELEC ECDIS', 2),
(23, 'Dangerous Hazardous and Harmful Cargoes with CFR', 2),
(24, 'Electronic Chart Display and Information System', 5),
(25, 'Electronic Chart Display and Information System Refresher', 2),
(26, 'Engine Resource Management', 3),
(27, 'Engine Resource Management (StarOcean)', 2),
(28, 'Engine Room Management Refresher', 2),
(29, 'Engine Room Simulator with Engine Resource Management', 3),
(30, 'Engine Room Simulator with Engine Resource Management Refresher', 2),
(31, 'Engine Team Management', 3),
(32, 'ENTRY INTO ENCLOSED SPACES', 1),
(33, 'Environmental Management System', 1),
(34, 'Fuel Oil Management', 12),
(35, 'Global Sulphur Cap 2020', 1),
(36, 'Hatch Cover Maintenance', 2),
(37, 'Hazardous and Harmful Cargoes with CFR (In-House)', 1),
(38, 'Hazardous Atmosphere Monitoring', 1),
(39, 'Ice Navigation (Full Course)', 5),
(40, 'Ice Navigation for Engine', 2),
(41, 'Ice Navigation for Officers', 2),
(42, 'Improvement of Safe Navigational Watch and Collision Avoidance', 3),
(43, 'Incident Investigation and Analysis', 2),
(44, 'Incident Investigation and Root Cause Analysis', 2),
(45, 'International Safety Management (Evic)', 1),
(46, 'International Safety Management (Officer)', 1),
(47, 'International Safety Management (Ratings)', 1),
(48, 'JRC NEW (JAN-9201/7201)', 2),
(49, 'JRC OLD (JAN-701-901-2000)', 2),
(50, 'Leadership and Crew Management', 1),
(51, 'Leadership and Management Training', 1),
(52, 'Marine Environmental Awareness', 1),
(53, 'Marine High Voltage', 2),
(54, 'Maritime English (Officer)', 1),
(55, 'Maritime English (Ratings)', 1),
(56, 'Maritime Law for Officers', 3),
(57, 'Maritime Leadership and Behavioral Development', 1),
(58, 'Marpol Annex 1 & 6', 2),
(59, 'Marpol Annex I', 1),
(60, 'Marpol Annex I & 2 & 6', 0),
(61, 'Marpol Annex V', 0),
(62, 'Marpol Annex VI', 1),
(63, 'Marpol Consolidated', 5),
(64, 'Mental Health Awareness', 1),
(65, 'NAVIGATION / ENEL', 2),
(66, 'Navigation Training Course', 2),
(67, 'Oil Record Book', 1),
(68, 'Oil Tanker Cargo Operations and Liquid Cargo Handling with Simulator', 4),
(69, 'Operation and Safety Measures of Gas Analyzer', 3),
(70, 'Passage Planning Course', 3),
(71, 'Polar Ice Navigation', 5),
(72, 'Port State Control', 1),
(73, 'Port State Control (Evic)', 2),
(74, 'Port State Control (OFFICER)', 2),
(75, 'Port State Control (RATINGS)', 1),
(76, 'POST-TRAUMA SUPPORT SPECIALIZATION', 1),
(77, 'Radar Operation Plotting Aid', 10),
(78, 'Refresher Course for Safety Officer', 2),
(79, 'Risk Assessment / Incident Investigation and Root Cause Analysis', 1),
(80, 'Risk Assessment and Incident Investigation Analysis', 3),
(81, 'Risk Assessment and Incident Investigation Analysis Refresher', 2),
(82, 'Risk Assessment and Management', 2),
(83, 'Risk Assessment Training Course', 1),
(84, 'Risk Awareness Training Course', 1),
(85, 'Risk Management & Incident Investigation Course', 3),
(86, 'Safety Precautions', 1),
(87, 'Safety Training and Accident Investigation', 2),
(88, 'Scrubber System Course', 2),
(89, 'Ship Anchoring Course', 1),
(90, 'Ship Environmental Management System', 1),
(91, 'Ship Handling and Maneuvering', 3),
(92, 'Ship Handling and Maneuvering (Full Course)', 5),
(93, 'Ship Officer Training Course', 2),
(94, 'Ship Security Officer', 3),
(95, 'Ship Security Officer Refresher', 2),
(96, 'Ship Simulator and Bridge Teamwork (Refresher)', 2),
(97, 'Ship Simulator and Bridge Teamwork with BRM', 5),
(98, 'Shipboard Environmental Management System', 1),
(99, 'Shipboard Mooring Operations', 1),
(100, 'Shipboard officers development program', 2),
(101, 'Shipboard Safety Officer', 2),
(102, 'SHIPBOARD SAFETY WORKING PRACTICES', 3),
(103, 'SSBT WITH BRM (Marsaman)', 5),
(104, 'SSBT with BTM (Marsaman)', 5),
(105, 'Steering Course', 1),
(106, 'TRANSAS ECDIS Type Specific', 2),
(107, 'Trim and Stability (Full Course)', 5),
(108, 'Vetting Inspection Course', 2),
(109, 'Voyage Planning Course', 2);

-- --------------------------------------------------------

--
-- Table structure for table `marina_course`
--

CREATE TABLE `marina_course` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marina_course`
--

INSERT INTO `marina_course` (`id`, `course`, `days`) VALUES
(1, 'Advanced Training for Ships Operating in polar waters', 5),
(2, 'Basic Training for Ships Operating in polar waters', 3);

-- --------------------------------------------------------

--
-- Table structure for table `practical_assesment`
--

CREATE TABLE `practical_assesment` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `days` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practical_assesment`
--

INSERT INTO `practical_assesment` (`id`, `course`, `days`) VALUES
(1, 'Advanced Training for Ships Operating in polar waters', 5),
(2, 'Basic Training for Ships Operating in polar waters', 3),
(3, 'Advanced Training for Ships Operating in polar waters', 5),
(4, 'Basic Training for Ships Operating in polar waters', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_course`
--
ALTER TABLE `book_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electiral_course`
--
ALTER TABLE `electiral_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_course`
--
ALTER TABLE `house_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marina_course`
--
ALTER TABLE `marina_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_assesment`
--
ALTER TABLE `practical_assesment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_course`
--
ALTER TABLE `book_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electiral_course`
--
ALTER TABLE `electiral_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `house_course`
--
ALTER TABLE `house_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `marina_course`
--
ALTER TABLE `marina_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `practical_assesment`
--
ALTER TABLE `practical_assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
