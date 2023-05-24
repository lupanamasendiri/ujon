-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 11.10
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `pages_name` varchar(200) NOT NULL,
  `pages_url` varchar(255) NOT NULL DEFAULT 'index.php?page=',
  `pages_desk` text NOT NULL,
  `pages_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_name`, `pages_url`, `pages_desk`, `pages_slug`) VALUES
(1, 'dashboard', 'index.php?page=', '', ''),
(2, 'setting', 'index.php?page=', '', ''),
(3, 'kepalasekolah', 'index.php?page=', '', ''),
(4, 'guru', 'index.php?page=', '', ''),
(5, 'pd', 'index.php?page=', '', ''),
(6, 'kelas', 'index.php?page=', '', ''),
(7, 'rombel', 'index.php?page=', '', ''),
(8, 'soal', 'index.php?page=', '', ''),
(9, 'tahunajaran', 'index.php?page=', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
