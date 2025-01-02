-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 07:37 AM
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
-- Table structure for table `preneur`
--

CREATE TABLE `preneur` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `foto_card` varchar(255) NOT NULL,
  `foto_slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`foto_slider`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preneur`
--

INSERT INTO `preneur` (`id`, `kategori_produk`, `nama_produk`, `deskripsi`, `harga_produk`, `nomor_whatsapp`, `foto_card`, `foto_produk`, `created_at`, `updated_at`) VALUES
(1, 'makanan', 'Ayam Geprek', 'enak,lezat', 15000, '089765432567', 'uploads/foto_card/wO9r9e2AjwSn3mW8zLvh99GlSRR8xbaQ8JkhVQLr.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/M8uMEtWmGZBegXfZ4nq96TkEctIJpKfQkI0ckeYl.jpg\\\"]\"', '2024-11-03 17:35:50', '2024-11-03 17:35:50'),
(2, 'makanan', 'Jasuke', 'lezattt', 11000, '098765332578', 'uploads/foto_card/CYbLjaopQY8AsybvL5UwVH5TomUUSDM90DoD0EE1.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/ZeL894GmBOXjR0mlHzLH7A8CDIuSx2kRzM1U0VwG.jpg\\\"]\"', '2024-11-11 07:04:06', '2024-11-11 07:04:06'),
(7, 'makanan', 'Risol', 'dengan berbagai varian', 5000, '08654325689', 'produk_foto/8bfxCxzSoNildgCkjtwWCUtweJnqtlFPXfPNPt15.jpg', '\"[\\\"produk_foto\\\\\\/ghdOzwHtrPR2BVOXfIsaUzROdS3Ph2tN4vFUIzNM.jpg\\\"]\"', '2024-11-20 06:58:35', '2024-11-20 06:58:35'),
(9, 'makanan', 'Ayam Geprek', 'blablabla', 20000, '08654325689', 'uploads/desapreneur/ajcl9KlObmXcKzGpegv9LbHPeL50ltqFwW7PLX9q.jpg', '\"[]\"', '2024-11-24 02:47:49', '2024-11-24 02:47:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preneur`
--
ALTER TABLE `preneur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preneur`
--
ALTER TABLE `preneur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
