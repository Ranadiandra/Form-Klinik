-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2025 pada 10.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` varchar(3) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `poli`) VALUES
('001', 'dr. Rana', 'Hati'),
('002', 'dr. Jeje slibaw', 'Gigiw'),
('003', 'dr. Pidaw', 'Saraf'),
('004', 'dr. Nince', 'Bedah'),
('005', 'dr. Papai', 'Jantung'),
('006', 'dr. Pasha', 'Mata'),
('007', 'dr. Aisyah', 'Ortopedi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` varchar(6) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(13) NOT NULL,
  `kode_dokter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nama_pasien`, `alamat`, `hp`, `kode_dokter`) VALUES
('P01', 'Ameng', 'Bojonegoro', '085886508345', '002'),
('P02', 'Cibe', 'Jonggol', '085886508345', '003'),
('P03', 'Palpale', 'Bozong Zengkol', '08589765933', '004'),
('P04', 'Abdu', 'Perum Cipto', '0867-3493-858', '001');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`),
  ADD KEY `kode_dokter` (`kode_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
