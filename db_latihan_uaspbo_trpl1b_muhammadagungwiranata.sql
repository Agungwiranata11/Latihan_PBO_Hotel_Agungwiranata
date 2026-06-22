-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 02:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_uaspbo_trpl1b_muhammadagungwiranata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_reservasi`
--

CREATE TABLE `tabel_reservasi` (
  `id_reservasi` int NOT NULL,
  `nomor_kamar` varchar(10) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `durasi_menginap` int NOT NULL,
  `harga_per_malam` decimal(12,2) NOT NULL,
  `tipe_kamar` enum('Standard','Deluxe','Suite') NOT NULL,
  `fasilitas_sarapan` varchar(50) DEFAULT NULL,
  `pemandangan_kamar` varchar(50) DEFAULT NULL,
  `akses_kolam_renang` varchar(50) DEFAULT NULL,
  `minibar_stock` varchar(50) DEFAULT NULL,
  `layanan_jacuzzi` varchar(50) DEFAULT NULL,
  `layanan_jemput_bandara` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_reservasi`
--

INSERT INTO `tabel_reservasi` (`id_reservasi`, `nomor_kamar`, `nama_tamu`, `durasi_menginap`, `harga_per_malam`, `tipe_kamar`, `fasilitas_sarapan`, `pemandangan_kamar`, `akses_kolam_renang`, `minibar_stock`, `layanan_jacuzzi`, `layanan_jemput_bandara`) VALUES
(1, '101', 'Budi Santoso', 2, '350000.00', 'Standard', 'Nasi Goreng', NULL, NULL, NULL, NULL, NULL),
(2, '102', 'Siti Aminah', 3, '350000.00', 'Standard', 'Bubur Ayam', NULL, NULL, NULL, NULL, NULL),
(3, '103', 'Rian Hidayat', 1, '350000.00', 'Standard', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '104', 'Dewi Lestari', 5, '370000.00', 'Standard', 'Roti Bakar', NULL, NULL, NULL, NULL, NULL),
(5, '105', 'Eko Prasetyo', 2, '350000.00', 'Standard', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '106', 'Fitriani', 4, '350000.00', 'Standard', 'Nasi Uduk', NULL, NULL, NULL, NULL, NULL),
(7, '107', 'Gilang Perkasa', 2, '350000.00', 'Standard', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '201', 'Hendra Wijaya', 3, '650000.00', 'Deluxe', 'Buffet', 'City View', 'Akses Gratis', NULL, NULL, NULL),
(9, '202', 'Indah Permata', 2, '650000.00', 'Deluxe', 'Buffet', 'Garden View', 'Akses Gratis', NULL, NULL, NULL),
(10, '203', 'Joko Susilo', 1, '650000.00', 'Deluxe', 'Continental', 'City View', NULL, NULL, NULL, NULL),
(11, '204', 'Kurniawati', 4, '680000.00', 'Deluxe', 'Buffet', 'Pool View', 'Akses Gratis', NULL, NULL, NULL),
(12, '205', 'Luthfi Hakim', 2, '650000.00', 'Deluxe', NULL, 'Garden View', 'Akses Gratis', NULL, NULL, NULL),
(13, '206', 'Mega Utami', 3, '650000.00', 'Deluxe', 'Buffet', 'City View', NULL, NULL, NULL, NULL),
(14, '301', 'Naufal Abdi', 2, '1200000.00', 'Suite', 'Premium Buffet', 'Sea View', 'Akses VIP', 'Full Stocked', 'Jacuzzi Pribadi', 'Alphard Premium'),
(15, '302', 'Olivia Putri', 3, '1250000.00', 'Suite', 'Premium Buffet', 'Mountain View', 'Akses VIP', 'Full Stocked', 'Jacuzzi Pribadi', 'Innova Zenix'),
(16, '303', 'Putra Perkasa', 5, '1200000.00', 'Suite', 'Premium Buffet', 'Sea View', 'Akses VIP', 'Medium Stocked', NULL, 'Innova Zenix'),
(17, '304', 'Qonita Shaliha', 1, '1300000.00', 'Suite', 'Premium Buffet', 'City Skyline', 'Akses VIP', 'Full Stocked', 'Jacuzzi Pribadi', 'Alphard Premium'),
(18, '305', 'Rizky Ramadhan', 2, '1200000.00', 'Suite', 'American Breakfast', 'Pool View', 'Akses VIP', 'Minimal Stock', NULL, NULL),
(19, '306', 'Salsa Bila', 4, '1200000.00', 'Suite', 'Premium Buffet', 'Sea View', 'Akses VIP', 'Full Stocked', 'Jacuzzi Pribadi', 'Innova Zenix'),
(20, '307', 'Taufik Hidayat', 2, '1200000.00', 'Suite', 'Premium Buffet', 'Garden View', 'Akses VIP', 'Full Stocked', 'Jacuzzi Pribadi', 'Innova Zenix');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
