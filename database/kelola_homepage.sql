-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 07:36 AM
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
-- Table structure for table `kelola_homepage`
--

CREATE TABLE `kelola_homepage` (
  `id` int(11) NOT NULL,
  `nama_menu` enum('tentang_kami','kontak') NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `slider_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`slider_images`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelola_homepage`
--

INSERT INTO `kelola_homepage` (`id`, `nama_menu`, `banner_image`, `deskripsi`, `slider_images`, `created_at`, `updated_at`) VALUES
(1, 'tentang_kami', 'uploads/homepage/owVdoEWmKSCJyIT21ZmORpWQL0yQIGl9fJjt0gsk.jpg', 'Kalurahan Sinduharjo, yang terletak di Kecamatan Ngaglik, Kabupaten Sleman, Yogyakarta, telah mendapatkan pengakuan sebagai Desa Budaya Mandiri. Predikat ini diberikan sebagai bentuk apresiasi atas komitmen dan keberhasilan desa dalam melestarikan serta mengembangkan kebudayaan lokal secara mandiri dan berkelanjutan.', '\"[\\\"uploads\\\\\\/homepage\\\\\\/Z4SkLWWGHqFQSASF1yytCDiGNMEFR5kFqMynHqV5.jpg\\\"]\"', '2024-12-09 07:07:40', '2024-12-09 07:07:40'),
(2, 'kontak', 'uploads/homepage/DR3RYZzGAIyYrIAsEmfwkDBbzpJqvOdLOgwBqqKJ.jpg', NULL, NULL, '2024-12-09 08:46:23', '2024-12-09 08:46:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelola_homepage`
--
ALTER TABLE `kelola_homepage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelola_homepage`
--
ALTER TABLE `kelola_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
