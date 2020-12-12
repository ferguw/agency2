-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2020 pada 03.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agency`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `idc` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`idc`, `name`, `username`, `password`, `email`, `deskripsi`) VALUES
(1, 'client', 'client@mail.com', '$2y$10$.eYnxM6WNW1SyFkloJp3TevrE7zycpbcGeWWxppKstVHthg5vlJsW', 'client@!mail.com', 'Input Deskripsi ...'),
(2, 'Test', 'test@mail.com', '$2y$10$biS9SA1AGg7VIyDh8Ox6eONeV2e/w/nVF/A3kzZJloRjabh8747ma', 'test@mail.com', 'Input Deskripsi ...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `talent`
--

CREATE TABLE `talent` (
  `idt` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `talent`
--

INSERT INTO `talent` (`idt`, `name`, `username`, `password`, `email`, `deskripsi`) VALUES
(1, 'ferry', 'talent@mail.com', '$2y$10$wO65VVaZCGGm2LXgtAzXGOPeDJ.ITzxZ6JHmzPxh.TMFERdf7tcm2', 'talent@mail.com', 'Input Deskripsi ...'),
(2, 'fin', 'fin@mail.com', 'fin', 'fin@mail.com', 'tes'),
(3, 'Tes', 'tes@mail.com', 'testtttt', 'tes@mail.com', 'Input Deskripsi ...'),
(4, 'tes', 'testtt', '$2y$10$UxcLpgqlt/kjVc1wAdz4kOdRH1PjyX4CjHBbraI6ce2VYky2IlmwW', 'testtt', 'Input Deskripsi ...');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idc`);

--
-- Indeks untuk tabel `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `talent`
--
ALTER TABLE `talent`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
