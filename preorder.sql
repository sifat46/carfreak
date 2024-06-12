-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 03:55 AM
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
-- Database: `cse_bu`
--

-- --------------------------------------------------------

--
-- Table structure for table `preorder`
--

CREATE TABLE `preorder` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(64) NOT NULL,
  `brand_name` varchar(64) NOT NULL,
  `advance_payment` int(8) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `estimate_delivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preorder`
--

INSERT INTO `preorder` (`id`, `customer_name`, `brand_name`, `advance_payment`, `phone`, `estimate_delivery`) VALUES
(2, 'Sifat Uddin Ahmed', 'BMW - Series 7', 2500000, '01799569119', '2024-06-26'),
(3, 'Mahin Hasan ', 'Mercedes GLS-350', 5000000, '01776598745', '2024-06-20'),
(4, 'Mesbah Uddin Roni ', 'Audi A6', 4000000, '01799568778', '2024-06-22'),
(5, 'Imtiaz Ehko ', 'Porcshe Tycon ', 6500000, '01755948725', '2024-06-29'),
(6, 'Moinul Islam ', 'Range Rover Sport ', 7500000, '01788662154', '2024-06-26'),
(7, 'Nixon Patwary ', 'Toyota Camry GLS', 2500000, '01799558715', '2024-06-20'),
(8, 'Saimon Kabir ', 'Mazda Mx5', 1000000, '01788569149', '2024-06-16'),
(9, 'Pritom Hasan ', 'Nissan X-Trail', 1200000, '01799569142', '2024-06-26'),
(10, 'Sabbir Hossain ', 'Honda Accord ', 2500000, '01799569171', '2024-06-25'),
(12, 'Sajid khan', 'Toyota Harrier', 2000000, '01788569111', '2024-07-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preorder`
--
ALTER TABLE `preorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preorder`
--
ALTER TABLE `preorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
