-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 09.30
-- Versi server: 10.4.10-MariaDB-log
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_musma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calons`
--

CREATE TABLE `calons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(11) NOT NULL,
  `nim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `calons`
--

INSERT INTO `calons` (`id`, `nama`, `angkatan`, `nim`, `fakultas`, `prodi`, `deskripsi`, `visi`, `misi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Ryan Dmasiv', 2018, '1805551017', 'Teknik', 'TI', '<p>a</p>', '<p>a</p>', '<p>a</p>', '1578289164_20161014_58006bff8b1de.png', '2020-01-05 21:39:24', '2020-01-05 21:39:24'),
(3, 'Kadek Frame', 2018, '180555', 'Teknik', 'TI', '<p>ada</p>', '<p>ada</p>', '<p>ad</p>', '1578416505_download.png', '2020-01-07 09:01:45', '2020-01-07 09:01:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_01_02_153744_create_calons_table', 1),
(3, '2020_01_02_235207_create_pemilihs_table', 1),
(4, '2020_01_05_130002_create_pemilihans_table', 2),
(5, '2020_01_05_130308_setting_waktu', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihans`
--

CREATE TABLE `pemilihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_calon` int(10) UNSIGNED NOT NULL,
  `id_pemilih` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilihans`
--

INSERT INTO `pemilihans` (`id`, `id_calon`, `id_pemilih`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-01-07 08:06:01', '2020-01-07 08:06:01'),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihs`
--

CREATE TABLE `pemilihs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilihs`
--

INSERT INTO `pemilihs` (`id`, `nim`, `nama`, `fakultas`, `prodi`, `password`, `created_at`, `updated_at`) VALUES
(1, '1', 'Ryan Dmasiv2', 'Teknik', 'TI', 'a', '2020-01-06 06:25:43', '2020-01-06 06:38:14'),
(4, '2', 'Yo Ato', 'Teknik', 'TI', 'a', '2020-01-07 10:22:04', '2020-01-07 10:22:04'),
(5, '3', 'Yo Ato2', 'Teknik', 'TI', 'WTaEqaZl', '2020-01-07 10:34:39', '2020-01-07 10:34:39'),
(6, '180555', 'Ryan Dmasiv2', 'Teknik', 'TI', 'lv3boIHq', '2020-01-07 10:34:50', '2020-01-07 10:34:50'),
(7, '1552', 'Kadek Frame', 'Teknik', 'TI', 'nDYnptHF', '2020-01-07 10:35:00', '2020-01-07 10:35:00'),
(8, '123', 'Kadek', 'Teknik', 'TI', 'ZaYhxHhI', '2020-01-07 10:35:17', '2020-01-07 10:35:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_waktus`
--

CREATE TABLE `setting_waktus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting_waktus`
--

INSERT INTO `setting_waktus` (`id`, `waktu_awal`, `waktu_akhir`, `created_at`, `updated_at`) VALUES
(1, '2020-01-02 00:00:00', '2020-01-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calons`
--
ALTER TABLE `calons`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilihans`
--
ALTER TABLE `pemilihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilihs`
--
ALTER TABLE `pemilihs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting_waktus`
--
ALTER TABLE `setting_waktus`
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
-- AUTO_INCREMENT untuk tabel `calons`
--
ALTER TABLE `calons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemilihans`
--
ALTER TABLE `pemilihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemilihs`
--
ALTER TABLE `pemilihs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `setting_waktus`
--
ALTER TABLE `setting_waktus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
