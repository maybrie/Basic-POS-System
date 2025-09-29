-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 02:22 AM
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
-- Database: `dbmodal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmodal`
--

CREATE TABLE `tblmodal` (
  `id` int(11) NOT NULL,
  `fldcode` varchar(20) DEFAULT NULL,
  `flddesc` varchar(50) DEFAULT NULL,
  `fldquantity` int(11) DEFAULT NULL,
  `fldprice` int(11) DEFAULT NULL,
  `fldamount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmodal`
--

INSERT INTO `tblmodal` (`id`, `fldcode`, `flddesc`, `fldquantity`, `fldprice`, `fldamount`) VALUES
(1, '661cca1b9e2d8', 'Pizza', 1, 500, 500),
(2, '661cd57189289', 'Pizza', 1, 500, 500),
(3, '661cd596aa507', 'Pizza', 1, 500, 500),
(4, '661cd596aa50a', 'Pasta', 1, 200, 200),
(5, '661cd59e2b782', 'Pizza', 1, 500, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmodal`
--
ALTER TABLE `tblmodal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmodal`
--
ALTER TABLE `tblmodal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
