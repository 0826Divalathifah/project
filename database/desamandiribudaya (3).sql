-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 07:42 AM
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
(10, 'Karawitan Miguyoh Rasa', 'Desa Budaya Sinduharjo', 'Desa Sinduharjo', '90.000', '600.000', 'https://www.youtube.com/embed/x5JCdPlU8VM', '0987776776', 'deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya deskripsi budaya', 'uploads/budaya/MPbORKKDmLNxwkc9MH23Inrhih9WaCuD9ikBJYNv.jpg', '[\"uploads\\/budaya\\/CMKGI29fdhhDxMxAlitprHvGMri2R1t6Gf48WIfY.jpg\",\"uploads\\/budaya\\/rDnAC6hvff63PkDfsJZBhtVXlF21QU8w70gPIpRN.jpg\"]', '2024-12-09 08:32:13', '2024-12-10 04:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_responded` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `is_responded`) VALUES
(9, NULL, NULL, 'cek cek', '2024-12-10 01:17:07', '2024-12-10 01:20:07', 1),
(10, NULL, NULL, 'cek cek', '2024-12-10 01:17:09', '2024-12-10 01:17:09', 0),
(11, NULL, NULL, 'cek cek', '2024-12-10 01:18:11', '2024-12-10 01:18:11', 0),
(12, NULL, NULL, 'cek', '2024-12-11 22:39:25', '2024-12-11 22:39:25', 0),
(13, NULL, NULL, 'cek', '2024-12-11 22:39:30', '2024-12-11 22:39:30', 0),
(14, NULL, NULL, 'cek', '2024-12-11 22:40:05', '2024-12-11 22:40:05', 0),
(15, NULL, NULL, 'cek', '2024-12-11 22:40:07', '2024-12-11 22:40:07', 0),
(16, NULL, NULL, 'cek', '2024-12-11 22:40:09', '2024-12-11 22:40:09', 0),
(17, 'DIVA', 'Divalatifah46@gmail.com', 'cek', '2024-12-11 22:40:18', '2024-12-11 22:40:18', 0),
(18, 'DIVA', 'Divalatifah46@gmail.com', 'cek', '2024-12-11 22:40:20', '2024-12-11 22:40:20', 0),
(19, 'DIVA', 'Divalatifah46@gmail.com', 'cek', '2024-12-11 22:40:22', '2024-12-11 22:40:22', 0),
(20, NULL, NULL, 'cek', '2024-12-11 22:40:26', '2024-12-11 22:40:26', 0),
(21, NULL, NULL, 'cek cek', '2024-12-11 22:40:48', '2024-12-11 22:40:48', 0),
(22, NULL, NULL, 'cek cek', '2024-12-11 22:41:26', '2024-12-11 22:41:26', 0),
(23, NULL, NULL, 'cek cek', '2024-12-11 22:41:37', '2024-12-11 22:41:37', 0),
(24, 'DIVA', 'Divalatifah46@gmail.com', 'cek cek', '2024-12-11 22:42:47', '2024-12-11 22:42:47', 0),
(25, 'DIVA', 'Divalatifah46@gmail.com', 'cek cek', '2024-12-11 22:43:08', '2024-12-11 22:43:08', 0),
(26, NULL, NULL, 'cek cek', '2024-12-11 22:44:02', '2024-12-11 22:44:02', 0),
(27, NULL, NULL, 'cek', '2024-12-11 22:57:05', '2024-12-11 22:57:05', 0),
(28, NULL, NULL, 'kitabisaaaa', '2024-12-11 23:18:07', '2024-12-11 23:18:07', 0);

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
(3, 'kalurahan', 'uploads/kalurahan/ASu6hmLsyL3i5sHsADjbmsWFuG5CyIXHjW6dOJRJ.jpg', 'ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi vvvvvvini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi vvv', NULL, '2024-11-27 23:11:43', '2024-12-10 07:33:58'),
(4, 'preneur', 'uploads/preneur/GkxHgtq3tdlG1BonD11w8FF3Z9mrFg5J7v9zTJVM.jpg', NULL, NULL, '2024-12-08 22:31:55', '2024-12-08 22:31:55'),
(5, 'prima', 'uploads/prima/WfacWciQAg9Y2jEpdOFbn7JRrisSusIjjzI7LDYa.jpg', NULL, NULL, '2024-12-09 01:28:16', '2024-12-09 01:28:16');

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
(1, 'tentang_kami', 'uploads/homepage/jrRmKPQZeeQjRWeeqP38kNzemo4Eqxyvtdzy2EZh.jpg', 'ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi vvvvvvini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi ini deskripsi vvv', NULL, '2024-12-09 07:07:40', '2024-12-10 07:34:46'),
(2, 'kontak', 'uploads/homepage/2cfUu23Js4A60qkbrTE10P3RwwBfat4UbgqZEWiv.jpg', NULL, NULL, '2024-12-09 08:46:23', '2024-12-10 08:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `preneur`
--

CREATE TABLE `preneur` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `foto_card` varchar(255) NOT NULL,
  `foto_slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preneur`
--

INSERT INTO `preneur` (`id`, `kategori_produk`, `nama_produk`, `deskripsi`, `harga_produk`, `nomor_whatsapp`, `foto_card`, `foto_slider`, `created_at`, `updated_at`) VALUES
(1, 'makanan', 'Ayam Geprek', 'enak,lezat', '15000', '089765432567', 'uploads/foto_card/wO9r9e2AjwSn3mW8zLvh99GlSRR8xbaQ8JkhVQLr.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/M8uMEtWmGZBegXfZ4nq96TkEctIJpKfQkI0ckeYl.jpg\\\"]\"', '2024-11-03 17:35:50', '2024-11-03 17:35:50'),
(2, 'makanan', 'Jasuke', 'lezattt', '11000', '098765332578', 'uploads/foto_card/CYbLjaopQY8AsybvL5UwVH5TomUUSDM90DoD0EE1.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/ZeL894GmBOXjR0mlHzLH7A8CDIuSx2kRzM1U0VwG.jpg\\\"]\"', '2024-11-11 07:04:06', '2024-11-11 07:04:06'),
(7, 'makanan', 'Risol', 'dengan berbagai varian', '5000', '08654325689', 'produk_foto/8bfxCxzSoNildgCkjtwWCUtweJnqtlFPXfPNPt15.jpg', '\"[\\\"produk_foto\\\\\\/ghdOzwHtrPR2BVOXfIsaUzROdS3Ph2tN4vFUIzNM.jpg\\\"]\"', '2024-11-20 06:58:35', '2024-11-20 06:58:35'),
(9, 'makanan', 'Ayam Geprek', 'blablabla', '20000', '08654325689', 'uploads/desapreneur/ajcl9KlObmXcKzGpegv9LbHPeL50ltqFwW7PLX9q.jpg', '\"[]\"', '2024-11-24 02:47:49', '2024-11-24 02:47:49'),
(11, 'makanan', 'cek', 'cek', '90000', '089778', 'uploads/preneur/NmSNltB7WjmzFcTcMUTFuQbnZ2tKe3AXRTz4ekNF.jpg', '[\"uploads\\/preneur\\/rTBqEp6RUVVXJd1aGdlfpgzW7tLiHWI7Kxs0yV2O.jpg\",\"uploads\\/preneur\\/XgHx6locUuIDzzsdSw3QTtIlhsuER0rax1x0OLha.jpg\",\"uploads\\/preneur\\/uGkGgyegjcn5IkiSGz94GxDSnXrP7gnLgnNeSDuX.jpg\"]', '2024-12-06 00:21:25', '2024-12-06 01:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `prima`
--

CREATE TABLE `prima` (
  `id` int(11) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_card` varchar(255) DEFAULT NULL,
  `foto_slider` text DEFAULT NULL,
  `varian` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`varian`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `harga_min` varchar(255) DEFAULT NULL,
  `harga_max` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prima`
--

INSERT INTO `prima` (`id`, `kategori_produk`, `nama_produk`, `harga_produk`, `nomor_whatsapp`, `deskripsi`, `foto_card`, `foto_slider`, `varian`, `created_at`, `updated_at`, `harga_min`, `harga_max`) VALUES
(1, 'makanan', 'Pudding mangga', '12000', '08654325689', 'enak, lezat', 'uploads/foto_card/gLdrBTqh0gCWraoTjBTsGPZBoubO6Nq41SJDRQLH.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/CnSuCP9F4DSzaxsT5ta51e9TPDYCYhrjdTagxoNg.jpg\\\"]\"', NULL, '2024-11-01 22:17:05', '2024-11-13 21:22:44', NULL, NULL),
(2, 'makanan', 'Ayam Geprek', '15000', '089765432567', 'enak,lezatt', 'uploads/foto_card/yQShGYhecsNz3kWrPwhZ1y23KdGFx6XsWfLjgb20.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/0w44qeWMhvMoYlbTr69AyBP77Nd6E4ThkBKr4YGu.jpg\\\"]\"', NULL, '2024-11-03 16:51:26', '2024-11-03 16:51:26', NULL, NULL),
(3, 'kerajinan', 'tas kulit', '50000', '08654325689', 'dengan kulit asli', 'uploads/foto_card/WRUnTx2XqgjR8LJa4wpkFHbhS8PQpZoxLO87gSUp.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/JaoPCvXRtosynfzaUopNYe5h3ZFjXZJrk2b2hvol.jpg\\\"]\"', NULL, '2024-11-04 19:28:49', '2024-11-04 19:28:49', NULL, NULL),
(4, 'makanan', 'Jasuke', '10000', '0976542467', 'enak, lezat', 'uploads/foto_card/Xm2eWcqyqy6LT26WcFQ2G0m1IXa9FfmHw9743LTz.jpg', '\"[\\\"uploads\\\\\\/foto_produk\\\\\\/nhQxiacrCG3U2ZFDJqyZ3zyDivMJ2CHWHlGpcERP.jpg\\\"]\"', NULL, '2024-11-09 21:15:37', '2024-11-09 21:15:37', NULL, NULL),
(8, 'makanan', 'Risol', '4000', '0987643322', 'wow', 'produk/RpMpfC6OGUkyJSAHUYgHB2sWPdLxZ2b0sotDpUPS.jpg', '\"[\\\"produk\\\\\\/xps2uqLVivYILkf65Obr187LNH0w7nCWyF04yNmm.jpg\\\"]\"', NULL, '2024-11-13 22:07:21', '2024-11-14 05:39:00', NULL, NULL),
(23, 'makanan', 'Ayam Geprek', '20000', '08654325689', 'lezatt', 'upload/prima/oHKt8WRPpQ4ZSTwFdNWKXJUnYFnan55mGaVJlKps.jpg', '\"[\\\"upload\\\\\\/prima\\\\\\/w6pUqqgvUGokfGiGYxA5oN5bdLOlKJmStW3lIxYc.jpg\\\"]\"', NULL, '2024-11-23 06:56:21', '2024-11-23 06:56:21', NULL, NULL),
(27, 'kerajinan', 'tes', '90.000', '0000000000', 'f', 'uploads/prima/tPsbJnRwPVUGc6fgUpE2dNb2Y4gDjHqh45xAYw7P.jpg', '[\"uploads\\/prima\\/m8CixGZtYdmkxoKW519gioLUoMkRMrVPV5KLYNuO.jpg\",\"uploads\\/prima\\/xfpUAUrQZUrhsfOYy6LCXj4604EJKtiBK3IM0bxR.jpg\"]', NULL, '2024-12-06 23:27:01', '2024-12-10 04:13:07', '80.000', '110.000');

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
(57, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-27 21:11:56', '2024-11-27 21:11:56'),
(58, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-29 00:21:22', '2024-11-29 00:21:22'),
(59, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-11-29 00:26:02', '2024-11-29 00:26:02'),
(60, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-11-29 00:39:42', '2024-11-29 00:39:42'),
(61, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-02 06:42:04', '2024-12-02 06:42:04'),
(62, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-02 06:45:34', '2024-12-02 06:45:34'),
(63, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-02 06:48:48', '2024-12-02 06:48:48'),
(64, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-02 21:05:02', '2024-12-02 21:05:02'),
(65, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-02 21:55:13', '2024-12-02 21:55:13'),
(66, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-02 21:59:41', '2024-12-02 21:59:41'),
(67, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-12-05 08:08:49', '2024-12-05 08:08:49'),
(68, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-05 08:37:57', '2024-12-05 08:37:57'),
(69, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-05 08:41:06', '2024-12-05 08:41:06'),
(70, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-05 08:43:03', '2024-12-05 08:43:03'),
(71, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-05 21:44:25', '2024-12-05 21:44:25'),
(72, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-05 21:59:18', '2024-12-05 21:59:18'),
(73, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 01:48:06', '2024-12-06 01:48:06'),
(74, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 02:18:18', '2024-12-06 02:18:18'),
(75, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 02:18:19', '2024-12-06 02:18:19'),
(76, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 02:18:46', '2024-12-06 02:18:46'),
(77, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 06:08:15', '2024-12-06 06:08:15'),
(78, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 06:09:32', '2024-12-06 06:09:32'),
(79, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-06 21:14:08', '2024-12-06 21:14:08'),
(80, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-06 21:21:02', '2024-12-06 21:21:02'),
(81, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-06 23:28:21', '2024-12-06 23:28:21'),
(82, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-06 23:32:58', '2024-12-06 23:32:58'),
(83, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-06 23:36:20', '2024-12-06 23:36:20'),
(84, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-07 21:33:23', '2024-12-07 21:33:23'),
(85, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 21:37:10', '2024-12-07 21:37:10'),
(86, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-07 21:40:21', '2024-12-07 21:40:21'),
(87, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-07 21:48:19', '2024-12-07 21:48:19'),
(88, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 22:04:51', '2024-12-07 22:04:51'),
(89, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 22:15:44', '2024-12-07 22:15:44'),
(90, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 22:16:18', '2024-12-07 22:16:18'),
(91, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 22:18:49', '2024-12-07 22:18:49'),
(92, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-07 22:19:09', '2024-12-07 22:19:09'),
(93, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-08 04:54:08', '2024-12-08 04:54:08'),
(94, 'http://127.0.0.1:8000/desawisata', 'Desa Wisata', '2024-12-08 04:58:50', '2024-12-08 04:58:50'),
(95, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-08 05:02:49', '2024-12-08 05:02:49'),
(96, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:04:13', '2024-12-08 05:04:13'),
(97, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:16:13', '2024-12-08 05:16:13'),
(98, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:17:52', '2024-12-08 05:17:52'),
(99, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:53:14', '2024-12-08 05:53:14'),
(100, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:57:09', '2024-12-08 05:57:09'),
(101, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:58:34', '2024-12-08 05:58:34'),
(102, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 05:59:02', '2024-12-08 05:59:02'),
(103, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 06:04:24', '2024-12-08 06:04:24'),
(104, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 06:09:06', '2024-12-08 06:09:06'),
(105, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 06:44:51', '2024-12-08 06:44:51'),
(106, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 06:49:41', '2024-12-08 06:49:41'),
(107, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-08 07:28:26', '2024-12-08 07:28:26'),
(108, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-08 08:01:46', '2024-12-08 08:01:46'),
(109, 'http://127.0.0.1:8000/desabudaya', 'Desa Budaya', '2024-12-08 09:15:54', '2024-12-08 09:15:54'),
(110, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 22:26:53', '2024-12-08 22:26:53'),
(111, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-08 22:32:07', '2024-12-08 22:32:07'),
(112, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-09 00:57:14', '2024-12-09 00:57:14'),
(113, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-09 01:29:18', '2024-12-09 01:29:18'),
(114, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-09 01:29:49', '2024-12-09 01:29:49'),
(115, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-09 05:06:35', '2024-12-09 05:06:35'),
(116, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-09 05:32:56', '2024-12-09 05:32:56'),
(117, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-10 06:17:37', '2024-12-10 06:17:37'),
(118, 'http://127.0.0.1:8000/desaprima', 'Desa Prima', '2024-12-11 21:53:06', '2024-12-11 21:53:06'),
(119, 'http://127.0.0.1:8000/desapreneur', 'Desa Preneur', '2024-12-11 21:58:11', '2024-12-11 21:58:11');

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
(1, 'Wisata Candi Palgading', '[{\"hari\":\"Senin\",\"jam_buka\":\"08:00\",\"jam_tutup\":\"17:00\"}]', 'Jalan Kaliurang KM. 10, Palgading, Sinduharjo, Ngaglik, Sleman,Yogyakarta', '60.000', 'https://maps.app.goo.gl/SHdBCHUacu8Wz5aA7?g_st=ac', 'Desa Wisata Candi Palgading menawarkan pesona budaya, alam, dan sejarah. Daya tarik utamanya adalah Candi Palgading, ditemukan pada 2006. Desa ini juga menyediakan berbagai aktivitas budaya dan edukasi, seperti membuat kerajinan tangan, memasak, serta berpartisipasi dalam pertanian, seperti menanam padi, menjadikannya destinasi wisata yang memadukan alam dan budaya.', 'uploads/wisata/JEO73SwLut3xlB0OoODmuSsrrRkt8uhLPSCrMks2.jpg', 'uploads/wisata/uKrjJIrzXVde5S3UcTdW6M0lJIgOD1vShB1hvo1p.jpg', '\"[\\\"uploads\\\\\\/wisata\\\\\\/feAJIvoeAKBIEZgePI5PNCva231220W9kAIEBQAN.jpg\\\",\\\"uploads\\\\\\/wisata\\\\\\/cxGyeSWkGvvo6COJ4zilKr12BTSBuKsFiVbVUBcD.jpg\\\"]\"', '2024-11-04 01:14:12', '2024-11-21 21:44:25');

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
-- Indexes for table `kelola_homepage`
--
ALTER TABLE `kelola_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preneur`
--
ALTER TABLE `preneur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prima`
--
ALTER TABLE `prima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelola_homepage`
--
ALTER TABLE `kelola_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `preneur`
--
ALTER TABLE `preneur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prima`
--
ALTER TABLE `prima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
