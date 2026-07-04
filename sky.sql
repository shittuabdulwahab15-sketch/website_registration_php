-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2026 at 10:42 AM
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
-- Database: `sky`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(38) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `age` varchar(25) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `dest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `age`, `addr`, `date`, `dest`) VALUES
(1, 'john', 'james', '25', 'bwari', '2026-06-30', 'Lagos'),
(3, 'Chrispa', 'Emmanuel', '25', 'Kubwa, Abuja', '2026-06-30', 'Abuja'),
(4, 'Paul', 'Moses', '26', 'Lokoja, kogi', '2026-07-01', 'Port-Harcout'),
(5, 'James', 'Adams', '26', 'Lokoja, kogi', '2026-06-29', 'Abuja'),
(7, 'Chrispa', 'Moses', '26', 'Kubwa, Abuja', '2026-07-01', 'Port-Harcout'),
(8, 'James', 'Moses', '26', 'Kubwa, Abuja', '2026-06-24', 'Abuja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
