-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2021 at 04:41 PM
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
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id_icon` int(11) NOT NULL,
  `nama_icon` varchar(100) NOT NULL,
  `gambar_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id_icon`, `nama_icon`, `gambar_icon`) VALUES
(1, 'Kebun Binatang', 'zoo.png'),
(2, 'Pantai', 'beach.png'),
(3, 'Rumah Makan', 'eat.png'),
(4, 'Kolam Renang', 'pool.png'),
(5, 'Taman Kupu-Kupu', 'butterflygarden.png'),
(6, 'Camp', 'camping.png'),
(7, 'Lampu Kota', 'citylight.png'),
(8, 'Taman Bunga', 'flowergarden.png'),
(9, 'Hutan Kera', 'monkeyforest.png'),
(10, 'Alam', 'nature.png'),
(11, 'Kebun Kelinci', 'rabbit.png'),
(12, 'Taman Sakura', 'sakura.png'),
(13, 'Spot Photo', 'spotpoto.png'),
(14, 'Air Terjun', 'watterfall.png');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `id_icons` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cord` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `id_icons`, `nama`, `cord`, `alamat`, `harga`, `gambar`) VALUES
(3, 2, 'Teropong Kota Bukit Sindy', '-5.404465546941112, 105.25338912552496', 'Jl. Tamin, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121', '50000', 'teropong_kota.jpg'),
(4, 4, 'Lampung Walk', '-5.390571201293847, 105.2765865460198', 'Way Halim Permai, Way Halim Bandar Lampung, Bandar Lampung City, Lampung 35133', '50000', 'lampungwalk.jpg'),
(5, 2, 'Pantai Puri Gading', '-5.470316978131177, 105.2502049059595', 'Jl. Laksamana R.E.Martadinata, Sukamaju, Tlk. Betung Bar., Kota Bandar Lampung, Lampung 35231', '50000', 'purigading.jpg'),
(6, 1, 'Lembah Hijau', '-5.415785,105.230726', 'Jl. Raden Imba Kesuma Ratu, Sukadana Ham Tanjung Karang Barat, Bandar Lampung', '400000', 'lembahhijau.jpg'),
(7, 6, 'Alam Wawai', '-5.421992,105.231711', 'Jl. H. Hasan Rais, Sukadana Ham, Kec. Tj. Karang Barat, Kota Bandar Lampung, Lampung 35116', '400000', 'alamwawai.jpg'),
(8, 4, 'Bumi Kedaton', '-5.434868,105.226211', 'Jalan W.A Rahman Ni 1,2,3, Batu Putuk, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35238', '25000', 'bumikedaton.jpg'),
(9, 3, 'Lengkung Langit', '-5.399817,105.191280', 'Pinang Jaya, Kemiling, Bandar Lampung City, Lampung 35153', '10000', 'lengkunglangit.jpg'),
(10, 12, 'Bukit Sakura', '-5.404374,105.222797', 'Jl. Melati Raya, Langkapura, Kota Bandar Lampung,Lampung, 35115', '10000', 'bukitsakura.jpg'),
(11, 11, 'Taman Kelinci', '-5.409035,105.210874', 'Jalan Moh. Ali No.10, Kelurahan Kedaung, Kecamatan Kemiling, Kota Bandar Lampung, 35156', '400000', 'tmnkelinci.PNG'),
(12, 9, 'Taman Wisata Hutan Kera', '-5.432434,105.269535', 'Jalan Dr Cipto Mangunkusumo, Sumur Batu, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35212', '400000', 'monkeyforest.jpg'),
(13, 13, 'Puncak Mas', '-5.420491,105.228482', 'l. PB. Marga, Sukadana Ham, Kec. Tj. Karang Barat, Kota Bandar Lampung, Lampung 35215', '400000', 'puncakmas.jpg'),
(14, 5, 'Taman Kupu Kupu Gita Persada', '-5.420949,105.188573', 'Jl. Wan Abdurrahman, Hutan, Kec. Hutan, Lampung, 35158', '10000', 'tmnkpukpu.jpg'),
(15, 14, 'Air Terjun Batu Putu', '-5.427303,105.218291', 'Jl. Wan Abdul Rahman, Desa Batu Putu, Kecamatan Teluk Betung Barat, Kota Bandar Lampung', '10000', 'arter.jpg'),
(16, 10, 'Kampoeng Vietnam', '-5.415870,105.193297', 'Jl. Teuku Cik Ditiro, Sumber Agung, Kec. Kemiling, Kota Bandar Lampung, Lampung 35156', '5000', 'kampungviet.jpg'),
(17, 8, 'Seven Selfie', '-5.424727,105.195003', 'Jl. Wan Abdurrahman, Batu Putuk, Kec. Telukbetung Barat, Kota Madya, Lampung 35239', '5000', 'sevenselfie.png'),
(18, 2, 'Pantai Duta Wisata', '-5.476821,105.252593', 'Jl. Laksamana R.E.Martadinata, Teluk Betung Barat., Kota Bandar Lampung, Lampung 35236', '10000', 'dutawisata.jpg'),
(19, 4, 'DMermaid Tirtayasa Waterpark', '-5.405627,105.311925', 'Perumahan Villa Bukit Tirtayasa, Campang Raya, Tanjung Karang Timur, Campang Raya, Kota Bandar Lampung, 35122', '40000', 'dmermaid.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id_icon`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
