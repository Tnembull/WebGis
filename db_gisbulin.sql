-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2021 at 09:47 PM
-- Server version: 10.5.9-MariaDB-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gisbulin`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cord` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `cord`, `alamat`, `harga`, `gambar`) VALUES
(2, 'Teluk Kiluan', '-5.7813889,105.0933333', 'Pulau Kiluan, Kiluan Negeri, Kelumbayan, Kabupaten Tanggamus, Lampung 35379, Indonesia', '50000', 'Teluk_Kiluan.jpg'),
(3, 'Pantai Terbaya', '-5.5033818,104.6344201', 'Terbaya, Kota Agung, Kabupaten Tanggamus, Lampung', '25000', 'Pantai_Terbaya.jpg'),
(4, 'Air Terjun Way Lalaan', '-5.4848675,104.6893007', 'Kampung Baru, Kota Agung Timur, Kp. Baru, Kota Agung Tim., Kabupaten Tanggamus, Lampung 35384', '50000', 'Air_Terjun_Way_Lalaan.jpg'),
(5, 'Bendungan Batu Tegi', '-5.2513391,104.7790774', 'Batu Tegi, Air Naningan, Tanggamus Regency, Lampung 35679', '50000', 'Bendungan_Batu_Tegi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
