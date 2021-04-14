-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:24 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040138`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_mobil`
--

CREATE TABLE `list_mobil` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `Manufacturer` varchar(20) NOT NULL,
  `Series/Models` varchar(100) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Production Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_mobil`
--

INSERT INTO `list_mobil` (`id`, `gambar`, `Manufacturer`, `Series/Models`, `Class`, `Production Date`) VALUES
(1, 'toyotaj100.jpg', 'Toyota', 'Land Cruiser J10 1998', 'Offroad/SUV', '1998'),
(2, 'benz-gclass.jpg', 'Mercedez-Benz', 'Mercedez-Benz-G-Class (W463), Second generation', 'Luxury SUV', '2018'),
(3, 'toyotasupra.png', 'Toyota', 'Supra', 'Sports Car', '2019'),
(4, 'pajerosport.jpg', 'Mitsubishi', 'Pajero Sport Third Generation', 'SUV', '2015'),
(5, 'porschepanamera.jpg', 'Porsche', 'Panamera', 'Executive/Luxury Car', '2009'),
(6, 'hondacity.jpg', 'Honda', 'City', 'Subcompact Car', '1981'),
(7, 'mazdarx7.jpg', 'Mazda', 'RX-7 (FD3S)', 'Coupe', '1985'),
(8, 'renaultmegane.jpg', 'Renault', 'Megane IV', 'Hatcback', '2016'),
(9, 'subaruwrxsti.jpg', 'Subaru', 'WRX STI', 'Sedan', '2014'),
(10, 'bmwx3.jpg', 'BMW', 'X3', 'SUV', '2003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_mobil`
--
ALTER TABLE `list_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_mobil`
--
ALTER TABLE `list_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
