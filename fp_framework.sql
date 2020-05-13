-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 01:41 AM
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
(0, 'Rak Buku', 'Type Barang', '60', 10, '2020-05-10 17:00:00');

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
  `uploadFoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockbarang`
--

INSERT INTO `stockbarang` (`id`, `tipeBarang`, `namaBarang`, `asalBarang`, `jumlahBarang`, `stock`, `tanggalInput`, `uploadFoto`) VALUES
(36, 'Rak Buku', 'Type Barang', 'Surabaya', 100, 50, '2020-05-10 23:27:14', 'triplek1.png');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockbarang`
--
ALTER TABLE `stockbarang`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
