-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cretificate`
--

CREATE TABLE `cretificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cretificate`
--

INSERT INTO `cretificate` (`id`, `name`) VALUES
(1, 'GMDSS DNDORSEMENT - GOC'),
(2, 'GMDSS DNDORSEMENT - GOC'),
(3, 'BASIC SAFETY'),
(4, 'PROFICIENCY IN SURVIVAL CRAFT RESCUE BOATS'),
(5, 'ARPA SIMULATOR');

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `vesseltype` varchar(255) NOT NULL,
  `final_school` varchar(255) NOT NULL,
  `martial_status` varchar(255) NOT NULL,
  `waistline` varchar(255) NOT NULL,
  `uniform_size` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `safeshoe` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `bank_info` varchar(255) NOT NULL,
  `tel1` varchar(255) NOT NULL,
  `tel2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `english_level` varchar(255) NOT NULL,
  `application_date` varchar(255) NOT NULL,
  `passport_no` varchar(255) NOT NULL,
  `passport_date` varchar(255) NOT NULL,
  `passport_expire` varchar(255) NOT NULL,
  `sbookno` varchar(255) NOT NULL,
  `sbookdate` varchar(255) NOT NULL,
  `sbook_expire` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `license_date` varchar(255) NOT NULL,
  `license_expire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`id`, `firstname`, `middlename`, `lastname`, `father_name`, `mother_name`, `nationality`, `birthdate`, `rank`, `vesseltype`, `final_school`, `martial_status`, `waistline`, `uniform_size`, `blood_type`, `safeshoe`, `health_status`, `bank_info`, `tel1`, `tel2`, `address`, `city`, `english_level`, `application_date`, `passport_no`, `passport_date`, `passport_expire`, `sbookno`, `sbookdate`, `sbook_expire`, `license`, `license_date`, `license_expire`) VALUES
(42, 'hay', '', 'hay', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '006', '', '', '', '', ''),
(43, 'hlaa', '', 'hlaa', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '005', '', '', '', '', ''),
(44, 'vew', '', 'vew', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '004', '', '', '', '', ''),
(45, 'pass', '', 'pass', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '003', '', '', '', '', ''),
(46, 'hein', '', 'hein', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '002', '', '', '', '', ''),
(47, 'aye', '', 'aye', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '001', '', '', '', '', ''),
(48, 'Mg', '', 'Mg', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'B001', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crew-cretificate`
--

CREATE TABLE `crew-cretificate` (
  `id` int(11) NOT NULL,
  `crew-id` int(11) NOT NULL,
  `cre-id` int(11) NOT NULL,
  `date-issue` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date-exp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crewcreti`
--

CREATE TABLE `crewcreti` (
  `id` int(11) NOT NULL,
  `crewid` int(11) NOT NULL,
  `creid` int(11) NOT NULL,
  `dateissue` varchar(255) NOT NULL,
  `dateexp` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crewcreti`
--

INSERT INTO `crewcreti` (`id`, `crewid`, `creid`, `dateissue`, `dateexp`, `number`) VALUES
(7, 48, 3, '11/01/2021', '11/11/2021', '4'),
(8, 48, 5, '11/01/2021', '11/11/2021', '5'),
(9, 42, 1, '11/01/2021', '11/01/2021', '1'),
(10, 42, 3, '11/01/2021', '11/01/2021', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE `vessel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vessel`
--

INSERT INTO `vessel` (`id`, `name`) VALUES
(1, 'Tanker'),
(2, 'Passenger'),
(3, 'Container'),
(4, 'welcome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cretificate`
--
ALTER TABLE `cretificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew-cretificate`
--
ALTER TABLE `crew-cretificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crewcreti`
--
ALTER TABLE `crewcreti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel`
--
ALTER TABLE `vessel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cretificate`
--
ALTER TABLE `cretificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `crew-cretificate`
--
ALTER TABLE `crew-cretificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crewcreti`
--
ALTER TABLE `crewcreti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
