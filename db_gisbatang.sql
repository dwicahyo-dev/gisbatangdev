-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 02:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gisbatang`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori_berita`, `judul_berita`, `isi_berita`, `author`, `publish_date`) VALUES
(2, 1, 'Oke Berita', 'skljflsdkjflksd', 'Pl;sakd', '2017-12-06'),
(3, 1, 'Siap Berita', 'Oke Siap Beritanya', 'lkasd', '2017-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `icon`) VALUES
(1, 'Shop', 'icon.png'),
(2, 'Wisata', 'icon1.png'),
(3, 'Rumah Sakit', 'icon2.png'),
(4, 'Minimarket', 'icon3.png'),
(5, 'Traditional Market', 'icon4.png'),
(6, 'Bank & ATM', 'icon5.png'),
(7, 'Kuliner', 'icon6.png'),
(8, 'SPBU', 'icon7.png'),
(9, 'Puskesmas', 'icon8.png'),
(10, 'Kantor Polisi', 'icon9.png'),
(11, 'Tempat Ibadah', 'icon10.png'),
(12, 'Penginapan', 'icon11.png'),
(13, 'Hello Kategori', 'test.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `kategori_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `kategori_berita`) VALUES
(1, 'Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image_upload_url` varchar(255) NOT NULL,
  `image_web` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `kategori_id`, `nama_tempat`, `lokasi`, `deskripsi`, `image_upload_url`, `image_web`, `longitude`, `latitude`, `telepon`) VALUES
(1, 12, 'Hotel Sendang Sari', 'Jl. Jendral Sudirman No.29, Kasepuhan, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216', 'Hotel Sendang Sari tempatnya nyaman suasana juga tenang. Untuk santapan pagi, siang, maupun malam banyak pilihan mulai dari Indonesian Food sampai Chinese Food. Tersedia kolam renang, dapat digunakan untuk acara pernikahan. Hotel Kelas Bintang 2', '', '', '', '', ' (0285) 392100'),
(2, 12, 'Hotel Dewi Ratih', 'Jl. Jend. Urip Sumoharjo, Sambong, Kandeman, Kabupaten Batang, Jawa Tengah 51216', 'Hotel dekat dengan pantura, memudahkan wisatawan/pemudik mendapatkan penginapan yang nyaman selama dalam perjalanan.', '', '', '', '', '(0285) 392223'),
(3, 3, 'RSUD Kab. Batng', 'Jalan Dokter Sutomo No.42, Kauman, Batang, Kauman, Kec. Batang, Kabupaten Batang, Jawa Tengah 51215', 'Rumah sakit yang memiliki letak strategis mudah dijangkau dan memiliki fasilitas lengkap pelayanan baik dalam waktu 24 jam setiap harinya.', '', '', '', '', '(0285) 391033'),
(4, 0, 'Rumah Sakit Qolbu Insan Mulia Batang', 'Sambong, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216', 'Rumah sakit yang strategis terletak di dekat jalan raya pantura. mudah dijangkau dan memiliki fasilitas pelayanan yang baik dalam waktu 24 jam setiap harinya.', '', '', '', '', '(0285) 4495222'),
(5, 3, 'RSUD Kab. Batang', 'Jalan Dokter Sutomo No.42, Kauman, Batang, Kauman, Kec. Batang, Kabupaten Batang, Jawa Tengah 51215', '\r\n\r\n\r\nRumah sakit yang strategis terletak di dekat jalan raya pantura. mudah dijangkau dan memiliki fasilitas pelayanan yang baik dalam waktu 24 jam setiap harinya.\r\n', '', '', '', '', '(0285) 391033'),
(6, 3, 'Rumah Sakit Qolbu Insan Mulia Batang', 'Sambong, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216', '\r\n\r\n\r\nRumah sakit yang strategis terletak di dekat jalan raya pantura. mudah dijangkau dan memiliki fasilitas pelayanan yang baik dalam waktu 24 jam setiap harinya.\r\n', '', '', '', '', '(0285) 4495222');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(1, 'Catur Andi Pamungkas', 'caturandip', '$2y$10$MOdAxrFj8a.OxOiQ2DkJkeOOrsyfqa43JCwJ54pIRKaAwaxRftnTG', 'catur.andi.pamungkas@gmail.com'),
(2, 'Wow Testing', 'andipamungkas', '$2y$10$B1IBI7yh5SEqLbVWIbto8OZUtZbNlK7JoZv2zG4dZxV2ncheRHZL6', 'caturandip@gmail.com'),
(3, 'Catur Andi', 'caturandp', '$2y$10$04o2lS6mZULITVLNhTdBk.A3WSuPNN1OwmWOkwCxD4riqnyDquZaO', 'caturandipamungkas@gmail.com'),
(4, 'Admin', 'admin', '$2y$10$uMV5p.4gPx79Q0HmYSDLmOqNCNMz2fcDzIkM4BMaqYceETAZNVHp6', 'admin@gmail.com'),
(5, 'Admin Oke 123', 'adminoke123', '$2y$10$lSOwR.NSiFZ86CA9ZDtuSOgw5yK0n1/rpOV1MJkEZd39wT7Fn614S', 'adminoke123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori_berita` (`id_kategori_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
