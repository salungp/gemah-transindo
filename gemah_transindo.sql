-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Apr 2020 pada 11.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gemah_transindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `title`, `slug`, `parent`, `text`, `image`, `author`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'logo', 'head', 'logo website', './assets/data/content/logo.png', 1, '2020-04-29 22:55:51', '2020-04-29 23:17:39'),
(2, 'banner', 'banner', 'banner', 'Sewa mobil terpercaya, dengan sopir handal.', './assets/data/content/banner5eaa1a2d814a9.jpg', 1, '2020-04-29 22:59:31', '2020-04-30 00:22:05'),
(3, 'armada-item', 'armada-item', 'armada-item', 'AVANZA &amp; ERTIGA', './assets/data/content/armada-item5eaa0ceb0e834.png', 1, '2020-04-29 23:01:48', '2020-04-29 23:25:31'),
(4, 'armada-item', 'armada-item', 'armada', 'INNOVA GRAND', './assets/data/content/armada-item.png', 1, '2020-04-29 23:10:12', '2020-04-29 23:22:36'),
(5, 'armada-item', 'armada-item', 'armada', 'INNOVA REBORN', './assets/data/content/armada-item5eaa0ccc36f7d.png', 1, '2020-04-29 23:23:33', '2020-04-29 23:25:00'),
(6, 'banner-description', 'banner-description', 'banner', 'Kami\r\nmelayani jasa rental untuk semua kebutuhan\r\ntransportasi, meliputi rental mobil untuk\r\npribadi / perorangan, paket wisata, rombongan\r\npernikahan, atau keperluan instansi /\r\nperusahaan.', '', 1, '2020-04-29 23:34:55', '2020-04-29 23:34:55'),
(7, 'layanan', 'layanan', 'layanan', 'Jasa Sewa Mobil Harian.', '', 1, '2020-04-29 23:39:11', '2020-04-29 23:39:11'),
(8, 'layanan', 'layanan', 'layanan', 'Jasa Sewa Mobil Mingguan.', '', 1, '2020-04-29 23:39:31', '2020-04-29 23:39:31'),
(9, 'layanan', 'layanan', 'layanan', 'Jasa Sewa Mobil Bulanan.', '', 1, '2020-04-29 23:39:55', '2020-04-29 23:39:55'),
(10, 'layanan', 'layanan', 'layanan', 'Sewa Mobil Jangka Panjang ( Kontrak\r\nPerusahaan / Pribadi ).', '', 1, '2020-04-29 23:40:15', '2020-04-29 23:40:15'),
(11, 'layanan', 'layanan', 'layanan', 'Layanan Antar Jemput Bandara dan Hotel di\r\nSemarang.', '', 1, '2020-04-29 23:40:38', '2020-04-29 23:40:38'),
(12, 'layanan', 'layanan', 'layanan', 'Layanan Lepas Kunci (Self Driver)', '', 1, '2020-04-29 23:41:13', '2020-04-29 23:41:13'),
(13, 'layanan', 'layanan', 'layanan', 'Layanan Dengan Supir atau Driver.', '', 1, '2020-04-29 23:41:32', '2020-04-29 23:41:32'),
(14, 'layanan', 'layanan', 'layanan', 'Layanan All In (Include Driver+Tol+Parkir+BBM)', '', 1, '2020-04-29 23:41:47', '2020-04-29 23:41:47'),
(15, 'layanan-section', 'layanan-section', 'layanan', 'Layanan Gemah transindo', './assets/data/content/layanan-section5eaa117bab042.png', 1, '2020-04-29 23:44:59', '2020-04-29 23:44:59'),
(16, 'Supir Berpengalaman', 'supir-berpengalaman', 'kelebihan', 'Supir yang kami berikan kepada Anda telah berpengalaman dan mengenal wilayah Sematang.', './assets/data/content/supir-berpengalaman5eaa122f380d2.png', 1, '2020-04-29 23:47:59', '2020-04-29 23:47:59'),
(17, 'Kondisi Mobil Terawat', 'kondisi-mobil-terawat', 'kelebihan', 'Perawatan rutin selalu kami lakukan, yaitu perawatan mobil harian, mingguan bulanan.', './assets/data/content/kondisi-mobil-terawat5eaa1253e947e.png', 1, '2020-04-29 23:48:35', '2020-04-29 23:48:35'),
(18, 'Harga Rental Murah', 'harga-rental-murah', 'kelebihan', 'Kami jamin tarif yang kami tawarkan sangat murah kompetitif.', './assets/data/content/harga-rental-murah5eaa127a9d3e2.png', 1, '2020-04-29 23:49:14', '2020-04-29 23:49:14'),
(19, 'Proses Sewa Mudah', 'proses-sewa-mudah', 'kelebihan', 'Proses rental dan sewa mobil cukup mudah, hanya telepon atau WA ke contact center kami.', './assets/data/content/proses-sewa-mudah5eaa12a547081.png', 1, '2020-04-29 23:49:57', '2020-04-29 23:49:57'),
(20, 'tentang', 'tentang', 'about', 'Gemah Transindo Semarang adalah penyedia Rental Mobil Semarang yang terkenal nyaman tapi murah / harga terjangkau. Rental mobil Kami beroperasi di daerah Jawa Tengah. Kami melayani jasa rental untuk semua kebutuhan transportasi, meliputi rental mobil untuk pribadi / perorangan, paket wisata, rombongan pernikahan, atau keperluan instansi / perusahaan.\r\nHadirnya jasa Rental Mobil di kota Semarang\r\nKhususnya ini didasari atas kebutuhan adanya\r\nlayanan rental transportasi pribadi yang\r\nnyaman dan aman tapi dengan harga\r\nterjangkau di Semarang, Kudus, Demak, Kendal\r\ndan sekitarnya. Kami juga melayani antar\r\njemput Bandara Internasional Ahmad Yani\r\nSemarang. Pelanggan dari Stasiun Tawang\r\nSemarang.', '', 1, '2020-04-29 23:54:24', '2020-04-29 23:54:24'),
(21, 'Biro perjalanan wisata', 'biro-perjalanan-wisata', 'kontak', 'Menyediakan: <br> Mobil, Elf, HIACE, Medium Bus & Big Bus', '', 1, '2020-04-30 00:04:26', '2020-04-30 00:04:26'),
(22, 'email', 'email', 'kontak-list', 'GEMAH TRANSINDO', '', 1, '2020-04-30 00:11:11', '2020-04-30 00:11:11'),
(23, 'nomor', 'nomor', 'kontak-list', '0813-3510-2388', '', 1, '2020-04-30 00:12:25', '2020-04-30 00:12:25'),
(24, 'nomor-wa', 'nomor-wa', 'button', '081335102388', '', 1, '2020-04-30 06:45:30', '2020-04-30 06:45:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_picture` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `role`, `password`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'root', 1, '$2y$10$HV76XQf1BWQSNShpuzm/eeuTFjgdDzyc9MT4EAdKUtT4wyPb07tta', '', '2020-04-21 08:44:46', '2020-04-22 15:31:51'),
(2, 'editor', 2, '$2y$10$Yj1no6HRBDJeWC82.j9zXO7U3Jnkm17xmjuIPoDL5UCi112azlAza', '', '2020-04-21 15:51:05', '2020-04-21 16:02:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `theme` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `title`, `description`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Super administrator.', 'primary', '2020-04-21 08:45:15', '2020-04-21 16:03:31'),
(2, 'editor', 'Hampir semua fitur dapat digunakan editor.', 'warning', '2020-04-21 15:18:19', '2020-04-21 16:03:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`id`, `ip_address`, `browser`, `created_at`) VALUES
(2, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:19:13'),
(3, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:20:09'),
(4, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:20:11'),
(5, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:22:22'),
(6, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:22:47'),
(7, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:22:50'),
(8, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:22:59'),
(9, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:23:36'),
(10, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', '2020-04-30 08:23:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
