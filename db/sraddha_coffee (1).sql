-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2026 at 05:15 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sraddha_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `kode_customer` varchar(10) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int NOT NULL,
  `id_transaksi` int DEFAULT NULL,
  `id_menu` int DEFAULT NULL,
  `jumlah` int NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id_meja` int NOT NULL,
  `no_meja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int DEFAULT '0',
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `harga`, `stok`, `deskripsi`) VALUES
(1, 'Kopsu GA', 'Coffee', 21000.00, 50, 'Kopi susu gula aren (hot)'),
(2, 'Kopsu GA (Ice)', 'Coffee', 23000.00, 50, 'Kopi susu gula aren (ice)'),
(3, 'Kopsu DAN', 'Coffee', 24000.00, 50, 'Kopi susu pandan'),
(4, 'Kopsu Klasik', 'Coffee', 22000.00, 50, 'Kopi susu klasik'),
(5, 'Avocado Coffee', 'Coffee', 30000.00, 40, 'Kopi alpukat'),
(6, 'Matcha Coffee', 'Coffee', 28000.00, 40, 'Kopi matcha'),
(7, 'Baileys Coffee', 'Coffee', 27000.00, 40, 'Kopi baileys'),
(8, 'Mochachino', 'Coffee', 27000.00, 40, 'Kopi mocha'),
(9, 'Banana Coffee', 'Coffee', 26000.00, 40, 'Kopi pisang'),
(10, 'Butterscotch', 'Coffee', 26000.00, 40, 'Kopi butterscotch'),
(11, 'Caramel Latte', 'Coffee', 25000.00, 40, 'Kopi caramel'),
(12, 'Hazelnut Latte', 'Coffee', 25000.00, 40, 'Kopi hazelnut'),
(13, 'Vanilla Latte', 'Coffee', 25000.00, 40, 'Kopi vanilla'),
(14, 'Cafe Latte', 'Coffee', 20000.00, 40, 'Latte hot'),
(15, 'Cafe Latte (Ice)', 'Coffee', 22000.00, 40, 'Latte ice'),
(16, 'Cappuccino', 'Coffee', 20000.00, 40, 'Cappuccino hot'),
(17, 'Cappuccino (Ice)', 'Coffee', 22000.00, 40, 'Cappuccino ice'),
(18, 'Americano', 'Coffee', 18000.00, 40, 'Americano hot'),
(19, 'Americano (Ice)', 'Coffee', 20000.00, 40, 'Americano ice'),
(20, 'Espresso', 'Coffee', 15000.00, 40, 'Espresso'),
(21, 'Mastrala', 'Non Coffee', 30000.00, 30, 'Minuman non kopi'),
(22, 'Komayu', 'Non Coffee', 26000.00, 30, 'Minuman non kopi'),
(23, 'Mala (Hot)', 'Non Coffee', 23000.00, 30, 'Matcha latte'),
(24, 'Mala (Ice)', 'Non Coffee', 25000.00, 30, 'Matcha latte ice'),
(25, 'Tala (Hot)', 'Non Coffee', 22000.00, 30, 'Taro latte'),
(26, 'Tala (Ice)', 'Non Coffee', 24000.00, 30, 'Taro latte ice'),
(27, 'Revela (Hot)', 'Non Coffee', 22000.00, 30, 'Red velvet latte'),
(28, 'Revela (Ice)', 'Non Coffee', 24000.00, 30, 'Red velvet latte ice'),
(29, 'Mocktail', 'Non Coffee', 25000.00, 30, 'Minuman segar'),
(30, 'Air Mineral', 'Non Coffee', 4000.00, 100, 'Air putih'),
(31, 'Choco Rum', 'Chocolate', 28000.00, 30, 'Coklat rum'),
(32, 'Choco Hazelnut', 'Chocolate', 27000.00, 30, 'Coklat hazelnut'),
(33, 'Choco Caramel', 'Chocolate', 27000.00, 30, 'Coklat caramel'),
(34, 'Choco Vanilla', 'Chocolate', 27000.00, 30, 'Coklat vanilla'),
(35, 'Choco', 'Chocolate', 25000.00, 30, 'Coklat original'),
(36, 'Lychee Tea', 'Tea', 17000.00, 30, 'Teh lychee'),
(37, 'Lemon Tea (Hot)', 'Tea', 13000.00, 30, 'Teh lemon panas'),
(38, 'Lemon Tea (Ice)', 'Tea', 15000.00, 30, 'Teh lemon dingin'),
(39, 'Sweet Tea (Hot)', 'Tea', 10000.00, 30, 'Teh manis panas'),
(40, 'Sweet Tea (Ice)', 'Tea', 12000.00, 30, 'Teh manis dingin'),
(41, 'V60', 'Manual Brew', 25000.00, 20, 'Manual brew V60'),
(42, 'V60 Special Beans', 'Manual Brew', 30000.00, 20, 'V60 beans spesial'),
(43, 'Japanese', 'Manual Brew', 27000.00, 20, 'Japanese style'),
(44, 'Japanese Special Beans', 'Manual Brew', 32000.00, 20, 'Japanese beans spesial'),
(45, 'Vietnam Drip', 'Manual Brew', 22000.00, 20, 'Vietnam drip'),
(46, 'Tea (Refill All)', 'Manual Brew', 22000.00, 20, 'Teh refill');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jabatan`) VALUES
(1, 'Zulmi', 'Owner'),
(2, 'Zamia', 'Manajer Marketing'),
(3, 'Gazi', 'Head Bar'),
(4, 'Ramadhani', 'Bar Staff'),
(5, 'Agung', 'Bar Staff'),
(6, 'Widya', 'Kitchen Staff');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_customer` int NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `total_harga` decimal(10,2) NOT NULL,
  `id_pegawai` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `kode_customer` (`kode_customer`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`),
  ADD UNIQUE KEY `no_meja` (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_customer` (`id_customer`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
