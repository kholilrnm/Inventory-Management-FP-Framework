-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 10:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(100) NOT NULL,
  `namapengantar` varchar(100) NOT NULL,
  `suppliers` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `jumlahbarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `namapengantar`, `suppliers`, `email`, `hp`, `alamat`, `namabarang`, `jumlahbarang`) VALUES
(1, 'dad', 'PT. Atlas Megah', 'dad', 'da', 'dad', 'dad', 'da'),
(2, 'dad', 'PT. Atlas Megah', 'dad', 'da', 'dad', 'dad', 'da'),
(3, 'rama andika jorgie', 'PT. Atlas Megah', 'ramaandikajorgie@gmail.com', '535', '33', 'dad', '3'),
(4, 'KONTOL', 'PT. Sak Onok E', 'ramaandkajorgie24@gmail.com', '081358179554', 'SURABAYA', 'KUNAM', '10000'),
(5, 'dadadadadad', 'PT. Mas Giencue', 'ada', 'dadada', 'adada', 'ssgsg', 'adada'),
(6, '1', 'PT. Atlas Megah', 'dawd', 'awda', 'awda', 'adaddad', 'dadada'),
(7, '1', 'PT. Atlas Megah', 'dawd', 'awda', 'awda', 'adaddad', 'dadada'),
(8, '1', 'PT. Atlas Megah', 'dawd', 'awda', 'awda', 'adaddad', 'dadada'),
(9, 'rama andika jorgie', 'PT. Smart Techtex', 'dada', 'dad', 'ada', 'dad', 'dadad');

-- --------------------------------------------------------

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
(2, 'Meja', 'Meja Bundar', '60', 5, '2020-05-11 17:00:00'),
(3, 'Meja', 'Meja Bundar', '10', 5, '2020-05-12 17:00:00'),
(4, 'Meja', 'Meja Bundar', '60', 10, '2020-05-12 17:00:00'),
(5, 'Meja', 'Meja Segita', '12', 0, '2020-05-12 17:00:00'),
(7, 'Kitchen Set', 'tolol', '100', 50, '2020-05-12 17:00:00'),
(8, 'Kitchen Set', 'tolol', '50', 20, '2020-05-12 17:00:00'),
(9, 'Meja', 'rama andika jorgie', '150', 20, '2020-05-12 17:00:00'),
(10, 'Meja', 'rama andika jorgie', '130', 100, '2020-05-12 17:00:00'),
(11, 'Meja', 'Meja Bundar', '1000', 100, '2020-05-12 17:00:00');

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
(1, 'Meja', 'Meja Bundar', 'Surabaya', 1000, 900, '2020-05-13 19:05:18', 'hamburger64.jpeg', '01'),
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
(21, 'Triplek', 'rama andika jorgie', 'PT. Atlas Megah', 100, 100, '2020-05-12 17:00:00', 'wallhaven-j57w6w1.jpg', '05 '),
(22, 'Meja', 'rama andika jorgie', 'PT. Atlas Megah', 200, 30, '2020-05-13 18:54:50', 'wit.jpg', '05 '),
(23, 'Kitchen Set', 'tolol', 'PT. Atlas Megah', 100, 30, '2020-05-13 18:53:39', 'images1.jpg', '05 ');

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
('admin', 'admin'),
('giencue', 'giencue');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(6) UNSIGNED NOT NULL,
  `namaSupplier` varchar(40) NOT NULL,
  `AlamatSupplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `namaSupplier`, `AlamatSupplier`) VALUES
(1, 'PT. Atlas Megah', 'Surabaya'),
(2, 'PT. Adi Nusantara', 'Surabaya'),
(3, 'PT. Mas Giencue', 'Jombang'),
(4, 'PT. Sak Onok E', 'Gresik'),
(5, 'PT. Smart Techtex', 'Pasuruan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_barang`
--
ALTER TABLE `out_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockbarang`
--
ALTER TABLE `stockbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `out_barang`
--
ALTER TABLE `out_barang`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stockbarang`
--
ALTER TABLE `stockbarang`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
