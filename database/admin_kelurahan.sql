-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 01:27 PM
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
-- Database: `desamandiribudaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_kelurahan`
--

CREATE TABLE `admin_kelurahan` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `peran` enum('admin_desabuda','admin_desa_prima','admin_desa_preneur','admin_desawisata','superadmin') NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_kelurahan`
--

INSERT INTO `admin_kelurahan` (`id`, `username`, `email`, `nomor_telepon`, `peran`, `password`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'firaaa', 'fira@gmail.com', '09876543356', 'admin_desabuda', '$2y$12$O5GWa7ZElDFLjM8cwnH2eeJV6dUgY4rJ.5hh2wVE0RxT.0J9spMAm', 'Kronggahan', '2024-11-11 05:16:46', '2024-11-11 05:16:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_kelurahan`
--
ALTER TABLE `admin_kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_kelurahan`
--
ALTER TABLE `admin_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
