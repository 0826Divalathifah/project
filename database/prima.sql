-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 07:39 AM
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
-- Table structure for table `prima`
--

CREATE TABLE `prima` (
  `id` int(11) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_card` varchar(255) DEFAULT NULL,
  `foto_slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`foto_slider`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prima`
--

INSERT INTO `prima` (`id`, `kategori_produk`, `nama_produk`, `harga_produk`, `nomor_whatsapp`, `deskripsi`, `foto_card`, `foto_produk`, `varian`, `created_at`, `updated_at`) VALUES
(1, 'makanan', 'Pudding mangga', 12000, '08654325689', 'enak, lezat', 'uploads/foto_card/gLdrBTqh0gCWraoTjBTsGPZBoubO6Nq41SJDRQLH.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/CnSuCP9F4DSzaxsT5ta51e9TPDYCYhrjdTagxoNg.jpg\\\"]\"', NULL, '2024-11-01 22:17:05', '2024-11-13 21:22:44'),
(2, 'makanan', 'Ayam Geprek', 15000, '089765432567', 'enak,lezatt', 'uploads/foto_card/yQShGYhecsNz3kWrPwhZ1y23KdGFx6XsWfLjgb20.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/0w44qeWMhvMoYlbTr69AyBP77Nd6E4ThkBKr4YGu.jpg\\\"]\"', NULL, '2024-11-03 16:51:26', '2024-11-03 16:51:26'),
(3, 'kerajinan', 'tas kulit', 50000, '08654325689', 'dengan kulit asli', 'uploads/foto_card/WRUnTx2XqgjR8LJa4wpkFHbhS8PQpZoxLO87gSUp.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/JaoPCvXRtosynfzaUopNYe5h3ZFjXZJrk2b2hvol.jpg\\\"]\"', NULL, '2024-11-04 19:28:49', '2024-11-04 19:28:49'),
(4, 'makanan', 'Jasuke', 10000, '0976542467', 'enak, lezat', 'uploads/foto_card/Xm2eWcqyqy6LT26WcFQ2G0m1IXa9FfmHw9743LTz.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/nhQxiacrCG3U2ZFDJqyZ3zyDivMJ2CHWHlGpcERP.jpg\\\"]\"', NULL, '2024-11-09 21:15:37', '2024-11-09 21:15:37'),
(8, 'makanan', 'Risol', 4000, '0987643322', 'wow', 'produk/RpMpfC6OGUkyJSAHUYgHB2sWPdLxZ2b0sotDpUPS.jpg', '\"[\\\"produk\\\\\\/xps2uqLVivYILkf65Obr187LNH0w7nCWyF04yNmm.jpg\\\"]\"', NULL, '2024-11-13 22:07:21', '2024-11-14 05:39:00'),
(23, 'makanan', 'Ayam Geprek', 20000, '08654325689', 'lezatt', 'upload/prima/oHKt8WRPpQ4ZSTwFdNWKXJUnYFnan55mGaVJlKps.jpg', '\"[\\\"upload\\\\\\/prima\\\\\\/w6pUqqgvUGokfGiGYxA5oN5bdLOlKJmStW3lIxYc.jpg\\\"]\"', NULL, '2024-11-23 06:56:21', '2024-11-23 06:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prima`
--
ALTER TABLE `prima`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prima`
--
ALTER TABLE `prima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
