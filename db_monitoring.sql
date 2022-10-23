-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Okt 2022 pada 08.07
-- Versi server: 5.7.33
-- Versi PHP: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ibuhamil`
--

CREATE TABLE `tb_ibuhamil` (
  `id_ibuhamil` int(11) NOT NULL,
  `no_kk` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `no_wa` char(20) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `gol_darah` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ibuhamil`
--

INSERT INTO `tb_ibuhamil` (`id_ibuhamil`, `no_kk`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `umur`, `no_wa`, `alamat`, `pendidikan`, `gol_darah`, `agama`, `berat_badan`, `tinggi_badan`) VALUES
(1, 0, 0, 'Siti Ningsih', 'Sukabumi', '1995-09-08', 28, '89678762343', 'Jl. Tangkil Kipak Jaya Sukabumi, Jawa Barat, Indonesia', 'SLTA/Sederajat', 'B', 'Islam', 56, 160);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `id` int(11) NOT NULL,
  `id_ibuhamil` int(11) NOT NULL,
  `tanggal_monitoring` date NOT NULL,
  `tekanan_darah` varchar(32) NOT NULL,
  `tinggi_badan` int(20) NOT NULL,
  `berat_badan` int(20) NOT NULL,
  `lingkar_lengan_atas` int(20) NOT NULL,
  `leopold` varchar(64) NOT NULL,
  `tinggi_fundus_uteri` int(20) NOT NULL,
  `denyut_jantung_janin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`id`, `id_ibuhamil`, `tanggal_monitoring`, `tekanan_darah`, `tinggi_badan`, `berat_badan`, `lingkar_lengan_atas`, `leopold`, `tinggi_fundus_uteri`, `denyut_jantung_janin`) VALUES
(2, 1, '2022-07-16', '90/90', 170, 56, 25, 'leopold 4', 14, 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `role` char(10) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id`, `role`, `created_at`) VALUES
(1, 'Admin', '2022-07-16 10:36:19'),
(2, 'Nakes', '2022-07-16 10:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `role`, `created_at`) VALUES
(1, 'supermi', '$2y$10$Qt94bHWVSMJ/8iSrAuIfgeHXls.uSYy4Kx31B2O8VqryZRHf5lsEe', 'Supermi', 1, '2022-06-26 07:12:51'),
(5, 'sanusi', '$2y$10$0lYA0eHpQ7MPB1h4uwpSgeXJjEuaGf52xNqeBOMs1MoRIcjVez2Ke', 'ali', 2, '2022-07-16 03:46:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ibuhamil`
--
ALTER TABLE `tb_ibuhamil`
  ADD PRIMARY KEY (`id_ibuhamil`);

--
-- Indeks untuk tabel `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ibuhamil`
--
ALTER TABLE `tb_ibuhamil`
  MODIFY `id_ibuhamil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
