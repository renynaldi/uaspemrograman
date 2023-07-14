-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2018 pada 20.43
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'erlambang', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` varchar(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `deskripsi`, `gambar`) VALUES
('101', 'Desa Tradisional Warebo2', 'DESA Wae Rebo di Flores yang terletak pada ketinggian 1.200 meter di atas permukaan laut ini layaknya sebuah surga yang berada di atas awan. Perlu perjuangan untuk bisa mencapainya, namun apa yang didapat ketika sampai ke lokasi sebanding dengan perjalanan yang dilalui. Pemandangan alam berupa gunung-gunung berpadu dengan 7 rumah adat berbentuk kerucut akan memberi kesan tersendiri bagi setiap pengunjung ynag pernah datang ke Desa Wae Rebo. Desa Wae Rebo berada di barat daya kota Ruteng, Kabupaten Manggarai, Nusa Tenggara Timur. Untuk bisa sampai ke lokasi memang tidak mudah karena letaknya yang di atas gunung. Perlu tenaga ekstra untuk melakukan perjalanan kaki selama kurang lebih 3 sampai dengan 4 jam. Tergantung kondisi fisik karena trekking menuju desa Wae Rebo mendaki sejauh 7 km.', '03062018194200'),
('102', 'Raja Ampat', 'Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya. Empat gugusan pulau yang menjadi anggotanya dinamakan menurut empat pulau terbesarnya, yaitu Pulau Waigeo, Pulau Misool, Pulau Salawati, dan Pulau Batanta.', '03062018193444'),
('103', 'Kisuda Green Canyon', 'Green Canyon adalah aliran sungai jernih dan masih terjaga keaSrian serta kelestarian alamnya ini terletak di teritorial wilayah Desa. Kertayasa, Kecamatan Cijulang, Kabupaten Pangandaran, Provinsi Jawa Barat. Keindahan alam Green Canyon bisa anda ikmati dengan aktifitas Body Rafting dengan dikawal para pemandu atau resque yang memang sudah kompeten dibidangnya.', '03062018194000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
