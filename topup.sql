-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 20.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `game_id` int(10) NOT NULL,
  `nama_game` varchar(50) NOT NULL,
  `foto_game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`game_id`, `nama_game`, `foto_game`) VALUES
(43, 'Mobile Legends', '733-mobile-legends.jpg'),
(44, 'Free Fire', '645-freefire.jpg'),
(45, 'PUBG Mobile', '911-Pubg.png'),
(46, 'CODM', '-CODM.jpg'),
(47, 'Valorant', '520-Valorant.jpg'),
(49, 'Genshin Impact', '-genshin.jpg'),
(55, 'Apex Legends', '92-Apex.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(20) NOT NULL,
  `jenis_game` varchar(50) NOT NULL,
  `user_id` int(20) NOT NULL,
  `jenis_item` varchar(50) NOT NULL,
  `jumlah_item` varchar(50) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `nomor_hp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `jenis_game`, `user_id`, `jenis_item`, `jumlah_item`, `pembayaran`, `nomor_hp`) VALUES
(12, 'Mobile Legends', 149104947, 'Diamond', '250 Item Game Rp.225.000', 'M-Banking', 2147483647),
(13, 'Arena of Valor', 201063117, 'Diamond', '250 Item Game Rp.225.000', 'Pulsa', 896742431),
(14, 'Mobile Legends', 12345, 'Diamond', '1150 Item Game Rp.1.015.000', 'Pulsa', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(28, 'zidan', 'zidan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, 'ajis', 'ajis@gmail.com', '2cfd4560539f887a5e420412b370b361');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
