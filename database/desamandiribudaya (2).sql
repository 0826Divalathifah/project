-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 05:19 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','admin_budaya','admin_preneur','admin_prima','admin_wisata') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `deskripsi_acara` text NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `nama_acara`, `tanggal_acara`, `deskripsi_acara`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 'Pagelaran Wayang Kulit', '2024-11-15', 'Pagelaran Wayang Kulit Di Desa Sinduharjo', 'Desa Sinduharjo', '2024-11-07 07:21:38', '2024-11-07 07:22:08'),
(4, 'Kesenian Wayang Kulit', '2024-11-18', 'Kesenian Wayang Kulit', 'Desa Sinduharjo', '2024-11-17 20:57:42', '2024-11-17 20:57:42'),
(5, 'Jathilan Turonggo Mudho', '2024-11-20', 'Jam 09.00-12.00', 'Desa Sinduharjo', '2024-11-18 07:09:50', '2024-11-18 07:09:50'),
(6, 'Bergodo', '2024-11-28', 'bergodo', 'gentan', '2024-11-26 07:36:02', '2024-11-26 07:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE `budaya` (
  `id` int(11) NOT NULL,
  `nama_budaya` varchar(255) NOT NULL,
  `nama_desa_budaya` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `harga_min` varchar(255) DEFAULT NULL,
  `harga_max` varchar(255) DEFAULT NULL,
  `link_youtube` varchar(255) DEFAULT NULL,
  `nomor_whatsapp` varchar(15) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `foto_card` varchar(255) DEFAULT NULL,
  `foto_slider` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id`, `nama_budaya`, `nama_desa_budaya`, `alamat`, `harga_min`, `harga_max`, `link_youtube`, `nomor_whatsapp`, `deskripsi`, `foto_card`, `foto_slider`, `created_at`, `updated_at`) VALUES
(7, 'Pagelaran Wayang Kulit', 'Desa Budaya', 'Kalurahan Sinduharjo', '600', '600', 'https://www.youtube.com/embed/x5JCdPlU8VM', '0000000000', 'Pagelran Seni Wayang Klit Kalurahan Sinduharjo Pagelran Seni Wayang Klit Kalurahan Sinduharjo Pagelran Seni Wayang Klit Kalurahan SinduharjoPagelran Seni Wayang Klit Kalurahan Sinduharjo Pagelran Seni Wayang Klit Kalurahan Sinduharjo Pagelran Seni Wayang Klit Kalurahan Sinduharjo Pagelran Seni Wayang Klit Kalurahan Sinduharjo', 'uploads/budaya/i63MaSkLCS1iZzrrMnT8OEEfM3nlwo3IA4UiZ5ad.jpg', '[\"uploads\\/budaya\\/BMr1JPAk6R73AWjXJnrzF3y8LfOVLag1Sj8IP0lc.jpg\",\"uploads\\/budaya\\/6vG735xlOFJt5ZSokbGA4A66j83KhYUu1XM5jCWy.jpg\",\"uploads\\/budaya\\/L3kNARHoYlMfU7KE2MNg8dFhSU0fKsekWOuuMU5G.jpg\",\"uploads\\/budaya\\/nrz0ngxMhHylXXjHLP2I1qm6ZqXpdrzzpEYAutg8.jpg\"]', '2024-11-06 07:43:45', '2024-11-08 08:03:02'),
(8, 'karawitan weta', 'Desa Budaya Ngentak', 'Ngentak, Sinduharjo, Ngaglik, Sleman, Yogyakarta', '4.000', '50.000', 'https://www.youtube.com/embed/x5JCdPlU8VM', '09876', 'khj', 'uploads/budaya/E7qakOHxKynpJ78972xUjdFhsANCxpJI9Ds3LYGE.jpg', '[\"uploads\\/budaya\\/piThilB2056S9dXB3mDrcfNUTaD6y00mXNJSMdGp.jpg\",\"uploads\\/budaya\\/M1RWm9LAkKq9UrKK31rGFXmYffqRbrrozYUDIqph.jpg\",\"uploads\\/budaya\\/OosdTeXEl7wpcie2VcmEW5xW8IC25ce6UKOzUDiM.jpg\"]', '2024-11-06 07:48:41', '2024-11-20 06:41:29'),
(9, 'Pagelaran Wayang Kulit', 'Desa Budaya', 'Desa Sinduharjo', NULL, NULL, 'https://www.youtube.com/embed/x5JCdPlU8VM', '0000000000', 'Kebusdayaan sinduharjo', 'uploads/budaya/fXZd4ZAAsyLph2tOvikhj3DSL9ApgeVMoPeFofRC.jpg', '[\"uploads\\/budaya\\/eFsSpXV4s9AkZEMfSOi6SC0nBhvRw6NByXxQjZ86.jpg\",\"uploads\\/budaya\\/wxtHpiJdrWXrzoY4oxGg8WxavNOHkOCKuB4YNxWg.jpg\",\"uploads\\/budaya\\/swKZB75LS3fHVMUktT7n02vKdn1PkTHZvi6bcteK.jpg\",\"uploads\\/budaya\\/8iOEVljtPxswLVCBxDjLDKlnqq3WRX7VnL9kbhNG.jpg\",\"uploads\\/budaya\\/5H4iZpkEMX1gbUgxfem3GvwIcDWfvObXh58MnCw8.jpg\",\"uploads\\/budaya\\/kJEKd5gtjQMGlaKbpbKDNVsOndWay1K9M2kK0jgH.jpg\",\"uploads\\/budaya\\/SGoiBExDTxNoiurAZe7Lyz17cF5hWWp4FhrPSf6X.jpg\",\"uploads\\/budaya\\/a63NMRKxzCsJsKQlM4Em0hH8452LSweyA3z5uIfo.jpg\",\"uploads\\/budaya\\/QGbl9BX2nDeZrjOiSXlTixrN05aVNERQl2kU55aK.jpg\",\"uploads\\/budaya\\/fa1oerCsKMpQntt3ik1HXIRkXRJmTLUu7H0eO3y0.jpg\"]', '2024-11-17 21:18:09', '2024-11-17 21:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `desa_name` enum('budaya','wisata','prima','preneur','kalurahan') NOT NULL,
  `gambar_banner` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar_welcome` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `desa_name`, `gambar_banner`, `deskripsi`, `gambar_welcome`, `created_at`, `updated_at`) VALUES
(1, 'budaya', 'uploads/budaya/4GmBFXi4lAw6nu2Tt5P6yf3pQEZgsf0XyUatDxr3.jpg', 'ini deskripsi buu', 'uploads/budaya/yoltM1ANid4vC5rosONRY6lAaDyBiRShJtZScSU7.jpg', '2024-11-24 06:22:00', '2024-11-25 21:30:04'),
(2, 'wisata', 'uploads/wisata/BqKbeSKGdBBoegUve7xGOai3gY3miEXV5INcHLqK.jpg', NULL, NULL, '2024-11-25 09:14:31', '2024-11-25 21:42:19'),
(3, 'kalurahan', 'uploads/kalurahan/ASu6hmLsyL3i5sHsADjbmsWFuG5CyIXHjW6dOJRJ.jpg', NULL, NULL, '2024-11-27 23:11:43', '2024-11-27 23:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `preneur`
--

CREATE TABLE `preneur` (
  `id_produk` int(11) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `nomor_whatsapp` varchar(20) NOT NULL,
  `foto_card` varchar(255) NOT NULL,
  `foto_produk` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`foto_produk`)),
  `tanggal_ditambahkan` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_diperbarui` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prima`
--

CREATE TABLE `prima` (
  `id_produk` int(11) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `nomor_whatsapp` varchar(20) NOT NULL,
  `foto_card` varchar(255) NOT NULL,
  `foto_produk` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`foto_produk`)),
  `tanggal_ditambahkan` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_diperbarui` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fBGLIkCbrB5DQ2Jwzay1Pq6681YUIwwWzSQiGaGU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVVGWWdxN2dyMFN2ZVU4dzRSc0cwdmJ5WXVobzFybnNoVTJLakR5biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXNhYnVkYXlhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729482080),
('W8R5QDmiwHPlzzURbKqBCx12gKY2YETeMf2JUiaJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUN1SmFPeERZRU5aYm5BN2RsaGFjd2VydjZTZ2Zlbm9BRXdjYlhGNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90YW1iYWhidWRheWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1729495068);

-- --------------------------------------------------------

--
-- Table structure for table `varian_preneur`
--

CREATE TABLE `varian_preneur` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `harga_varian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `varian_prima`
--

CREATE TABLE `varian_prima` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `harga_varian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `desa_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `url`, `desa_name`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-17 07:11:18', '2024-11-17 07:11:18'),
(2, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-17 07:26:57', '2024-11-17 07:26:57'),
(3, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-17 07:48:52', '2024-11-17 07:48:52'),
(4, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-17 07:48:57', '2024-11-17 07:48:57'),
(5, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-17 20:58:00', '2024-11-17 20:58:00'),
(6, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-17 21:19:18', '2024-11-17 21:19:18'),
(7, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-18 08:11:32', '2024-11-18 08:11:32'),
(8, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-18 20:01:22', '2024-11-18 20:01:22'),
(9, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-19 05:16:27', '2024-11-19 05:16:27'),
(10, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-19 07:20:53', '2024-11-19 07:20:53'),
(11, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-20 06:42:42', '2024-11-20 06:42:42'),
(12, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-20 06:59:12', '2024-11-20 06:59:12'),
(13, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-20 07:03:08', '2024-11-20 07:03:08'),
(14, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-20 07:03:36', '2024-11-20 07:03:36'),
(15, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-20 07:28:57', '2024-11-20 07:28:57'),
(16, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-20 07:30:00', '2024-11-20 07:30:00'),
(17, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-21 20:39:47', '2024-11-21 20:39:47'),
(18, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-21 21:00:37', '2024-11-21 21:00:37'),
(19, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-22 20:53:52', '2024-11-22 20:53:52'),
(20, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-22 21:13:11', '2024-11-22 21:13:11'),
(21, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-22 21:14:16', '2024-11-22 21:14:16'),
(22, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 06:33:49', '2024-11-24 06:33:49'),
(23, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 06:46:26', '2024-11-24 06:46:26'),
(24, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 06:56:06', '2024-11-24 06:56:06'),
(25, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 06:56:25', '2024-11-24 06:56:25'),
(26, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 06:57:55', '2024-11-24 06:57:55'),
(27, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:04:18', '2024-11-24 07:04:18'),
(28, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:07:53', '2024-11-24 07:07:53'),
(29, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:09:47', '2024-11-24 07:09:47'),
(30, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:46:13', '2024-11-24 07:46:13'),
(31, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:46:42', '2024-11-24 07:46:42'),
(32, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-24 07:48:05', '2024-11-24 07:48:05'),
(33, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 06:21:56', '2024-11-25 06:21:56'),
(34, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 06:23:01', '2024-11-25 06:23:01'),
(35, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:19:17', '2024-11-25 07:19:17'),
(36, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:22:24', '2024-11-25 07:22:24'),
(37, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:23:52', '2024-11-25 07:23:52'),
(38, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:34:40', '2024-11-25 07:34:40'),
(39, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:36:04', '2024-11-25 07:36:04'),
(40, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:37:29', '2024-11-25 07:37:29'),
(41, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 07:40:20', '2024-11-25 07:40:20'),
(42, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 08:08:48', '2024-11-25 08:08:48'),
(43, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-25 08:10:18', '2024-11-25 08:10:18'),
(44, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 08:33:19', '2024-11-25 08:33:19'),
(45, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-25 09:19:14', '2024-11-25 09:19:14'),
(46, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 21:22:01', '2024-11-25 21:22:01'),
(47, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-25 21:24:21', '2024-11-25 21:24:21'),
(48, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-25 21:30:21', '2024-11-25 21:30:21'),
(49, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-25 22:02:10', '2024-11-25 22:02:10'),
(50, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-25 22:04:22', '2024-11-25 22:04:22'),
(51, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-26 23:15:22', '2024-11-26 23:15:22'),
(52, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-26 23:23:30', '2024-11-26 23:23:30'),
(53, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-26 23:24:55', '2024-11-26 23:24:55'),
(54, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-26 23:29:53', '2024-11-26 23:29:53'),
(55, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-27 06:31:39', '2024-11-27 06:31:39'),
(56, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-27 20:47:37', '2024-11-27 20:47:37'),
(57, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-27 21:11:56', '2024-11-27 21:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `waktu_kunjung` longtext DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `harga_masuk` varchar(255) DEFAULT NULL,
  `link_google_maps` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_card` varchar(255) DEFAULT NULL,
  `brosur` varchar(255) DEFAULT NULL,
  `foto_wisata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`foto_wisata`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `waktu_kunjung`, `alamat`, `harga_masuk`, `link_google_maps`, `deskripsi`, `foto_card`, `brosur`, `foto_wisata`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Candi Palgading', '[{\"hari\":\"Senin\",\"jam_buka\":\"08:00\",\"jam_tutup\":\"17:00\"}]', 'Jalan Kaliurang KM. 10, Palgading, Sinduharjo, Ngaglik, Sleman,Yogyakarta', '60.000', 'https://maps.app.goo.gl/SHdBCHUacu8Wz5aA7?g_st=ac', 'Desa Wisata Candi Palgading menawarkan pesona budaya, alam, dan sejarah. Daya tarik utamanya adalah Candi Palgading, ditemukan pada 2006. Desa ini juga menyediakan berbagai aktivitas budaya dan edukasi, seperti membuat kerajinan tangan, memasak, serta berpartisipasi dalam pertanian, seperti menanam padi, menjadikannya destinasi wisata yang memadukan alam dan budaya.', 'uploads/wisata/JEO73SwLut3xlB0OoODmuSsrrRkt8uhLPSCrMks2.jpg', 'uploads/wisata/uKrjJIrzXVde5S3UcTdW6M0lJIgOD1vShB1hvo1p.jpg', '\"[\\\"uploads\\\\\\/wisata\\\\\\/feAJIvoeAKBIEZgePI5PNCva231220W9kAIEBQAN.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/cxGyeSWkGvvo6COJ4zilKr12BTSBuKsFiVbVUBcD.jpg\\\"]\"', '2024-11-04 01:14:12', '2024-11-21 21:44:25'),
(2, 'Wisata Candi Palgading', '[{\"hari\":\"Setiap Hari\",\"jam_buka\":\"20:54\",\"jam_tutup\":\"23:54\"}]', 'Desa Sinduharjo', '80.000', 'https://maps.app.goo.gl/SHdBCHUacu8Wz5aA7?g_st=ac', 'Ini candi palgading', 'uploads/wisata/gL9LcP7cgfWouFyoi6ydaqO7d5sUPouDv4CXICnS.jpg', NULL, '\"[\\\"uploads\\\\\\/wisata\\\\\\/V85mXyaKqZpFpoZ98LKMoiYZvoyRLGru6B76Yvk4.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/maLQ1ISUVZI6t6icHFWAyEsBSl3J0T0uHpjwbWs0.jpg\\\"]\"', '2024-11-04 01:29:16', '2024-11-20 05:51:53'),
(4, 'Wisata Desa', '[{\"hari\":\"Selasa\",\"jam_buka\":\"07:11\",\"jam_tutup\":\"12:13\"},{\"hari\":\"Selasa\",\"jam_buka\":\"06:12\",\"jam_tutup\":\"18:12\"},{\"hari\":\"Senin\",\"jam_buka\":\"21:58\",\"jam_tutup\":\"00:56\"}]', 'Desa Sinduharjo', '50.000', 'https://maps.app.goo.gl/B9FTkiLwnYvzSghA6', 'Desa Wisata Sinduharjo', 'uploads/wisata/JBpr2at65GK1kNNTyp67pK8wFflhh3IDPmIl0tuG.jpg', NULL, '\"[\\\"uploads\\\\\\/wisata\\\\\\/lni7JeebO3YLKloOFpeHJkeUkVpI3vCINGAjOGr1.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/a8BnWZMawhxLWRjOIQO4k59mCx51yZOkHJ1Poh3m.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/bXi24c1q5kL6KAJqd3Zz7LeS3cvdacOiuuNz3ykQ.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/sJYhpqmC3lR7JOO0M88iEqrcGTvwgLe87k8qpvO1.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/OALfRukPmiv5ccYXepbbP6W7G1eaqmcCIYIR7CRo.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/XwCzqNVAknhxenmqsqmeHubN2vPH8eQR4jccRNfV.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/DOEHV7V7FIjNaGUYX0dNjraNSMpQQDQ4g0L5x2dB.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/PvlUpsvSLWqX3jlEnnY9tKWZIPYVfzTipFmL3np9.jpg\\\"]\"', '2024-11-15 23:10:01', '2024-11-20 06:03:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_kelurahan`
--
ALTER TABLE `admin_kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preneur`
--
ALTER TABLE `preneur`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `prima`
--
ALTER TABLE `prima`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `varian_preneur`
--
ALTER TABLE `varian_preneur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varian_prima`
--
ALTER TABLE `varian_prima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_kelurahan`
--
ALTER TABLE `admin_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preneur`
--
ALTER TABLE `preneur`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prima`
--
ALTER TABLE `prima`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varian_preneur`
--
ALTER TABLE `varian_preneur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varian_prima`
--
ALTER TABLE `varian_prima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `varian_preneur`
--
ALTER TABLE `varian_preneur`
  ADD CONSTRAINT `varian_preneur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `preneur` (`id_produk`) ON DELETE CASCADE;

--
-- Constraints for table `varian_prima`
--
ALTER TABLE `varian_prima`
  ADD CONSTRAINT `varian_prima_ibfk_1` FOREIGN KEY (`id`) REFERENCES `prima` (`id_produk`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
