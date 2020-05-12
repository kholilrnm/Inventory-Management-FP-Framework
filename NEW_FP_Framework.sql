-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 09:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_framework`
--

-- --------------------------------------------------------
--
-- Table structure for table `out_barang`
--

CREATE TABLE `suppliers` (
  `id` int(6) UNSIGNED NOT NULL,
  `namaSupplier` varchar(40) NOT NULL,
  `AlamatSupplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_barang`
--

INSERT INTO `suppliers` (`id`, `namaSupplier`, `AlamatSupplier`) VALUES
(1, 'PT. Atlas Megah', 'Surabaya'),
(2, 'PT. Adi Nusantara', 'Surabaya'),
(3, 'PT. Mas Giencue', 'Jombang'),
(4, 'PT. Sak Onok E', 'Gresik'),
(5, 'PT. Smart Techtex', 'Pasuruan');
--
-- Table structure for table `out_barang`
--

CREATE TABLE `out_barang` (
  `id` int(6) UNSIGNED NOT NULL,
  `tipeBarang` varchar(30) NOT NULL,
  `namaBarang` varchar(30) NOT NULL,
  `jumlahBarang` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `tanggalInput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_barang`
--

INSERT INTO `out_barang` (`id`, `tipeBarang`, `namaBarang`, `jumlahBarang`, `stock`, `tanggalInput`) VALUES
(1, 'Meja', 'Meja Bundar', '60', 5, '2020-05-11 17:00:00'),
(2, 'Meja', 'Meja Bundar', '60', 5, '2020-05-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stockbarang`
--

CREATE TABLE `stockbarang` (
  `id` int(6) UNSIGNED NOT NULL,
  `tipeBarang` varchar(30) NOT NULL,
  `namaBarang` varchar(30) NOT NULL,
  `asalBarang` varchar(50) NOT NULL,
  `jumlahBarang` int(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `tanggalInput` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uploadFoto` varchar(50) NOT NULL,
  `kodeBulan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockbarang`
--

INSERT INTO `stockbarang` (`id`, `tipeBarang`, `namaBarang`, `asalBarang`, `jumlahBarang`, `stock`, `tanggalInput`, `uploadFoto`, `kodeBulan`) VALUES
(1, 'Meja', 'Meja Bundar', 'Surabaya', 5, 55, '2020-05-12 05:29:24', 'hamburger64.jpeg', '01'),
(2, 'Meja', 'Meja Kotak', 'Surabaya', 20, 20, '2020-06-12 00:36:27', 'hamburger65.jpeg', '06'),
(3, 'Meja', 'Meja Segita', 'Surabaya', 12, 12, '2020-05-12 01:20:25', 'hamburger66.jpeg', '05 '),
(4, 'Meja', 'Meja Silang', 'Surabaya', 3, 3, '2020-03-12 01:20:28', 'hamburger67.jpeg', '03'),
(5, 'Meja', 'Meja bulet', 'Surabaya', 25, 25, '2020-04-11 17:00:00', 'hamburger68.jpeg', '04'),
(6, 'Meja', 'Meja imut', 'Surabaya', 99, 99, '2020-12-11 17:00:00', 'hamburger69.jpeg', '12'),
(7, 'Meja', 'Meja Hitam', 'Surabaya', 102, 102, '2020-10-11 17:00:00', 'hamburger70.jpeg', '10'),
(8, 'Meja', 'Meja Kecil', 'Surabaya', 15, 15, '2020-09-11 17:00:00', 'hamburger71.jpeg', '09'),
(9, 'Meja', 'Meja Besar', 'Surabaya', 9, 9, '2020-07-11 17:00:00', 'hamburger72.jpeg', '07'),
(10, 'Meja', 'Meja Antik', 'Surabaya', 12, 12, '2020-08-11 17:00:00', 'hamburger73.jpeg', '08'),
(11, 'Meja', 'Meja Barbar', 'Surabaya', 7, 7, '2020-02-11 17:00:00', 'hamburger74.jpeg', '02'),
(12, 'Meja', 'Meja Meja an', 'Surabaya', 6, 6, '2020-11-11 17:00:00', 'hamburger75.jpeg', '11'),
(13, 'Kursi', 'Kursi 1', 'Surabaya', 12, 12, '2020-06-12 04:49:47', 'Pmh_Organization4.png', '06'),
(14, 'Kursi', 'Kursi 2', 'Surabaya', 20, 20, '2020-05-12 04:49:52', 'Pmh_Organization5.png', '05 '),
(15, 'Tempat Tidur', 'Bed', 'Surabaya', 35, 35, '2020-04-12 04:49:56', 'Pmh_Organization6.png', '04'),
(16, 'Tempat Tidur', 'Beddd', 'Surabaya', 25, 25, '2020-07-12 05:04:42', 'hamburger76.jpeg', '07'),
(17, 'Tempat Tidur', 'abc', 'Surabaya', 70, 70, '2020-06-12 05:05:41', 'hamburger77.jpeg', '06'),
(18, 'Meja', 'Meja Sultan', 'Surabaya', 60, 60, '2020-05-12 05:28:59', 'hamburger78.jpeg', '05 '),
(19, 'Tempat Tidur', 'Bed Sultan', 'Surabaya', 10, 10, '2020-05-11 17:00:00', 'hamburger79.jpeg', '05 ');

-- --------------------------------------------------------

--
-- Table structure for table `super_user`
--

CREATE TABLE `super_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_user`
--

INSERT INTO `super_user` (`username`, `password`) VALUES
('giencue', 'giencue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stockbarang`
--
ALTER TABLE `stockbarang`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `super_user`
  ADD PRIMARY KEY (`username`);

--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockbarang`
--
ALTER TABLE `stockbarang`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

ALTER TABLE `suppliers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
