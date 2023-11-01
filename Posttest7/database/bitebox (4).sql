-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 08.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitebox`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `listmenu`
--

CREATE TABLE `listmenu` (
  `ID` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `listmenu`
--

INSERT INTO `listmenu` (`ID`, `produk`, `harga`, `gambar`) VALUES
(35, 'ice cream', '12000', '2023-10-25-pngwing.com (11).png'),
(36, 'sandwich', '15000', '2023-10-25-pngwing.com (13).png'),
(37, 'hot dog', '20000', '2023-10-25-pngwing.com (12).png'),
(38, 'fried chicken', '16200', '2023-1010-25 fried chicken.png'),
(39, 'burger', '21250', '2023-1010-25 burger.png'),
(40, 'french fries', '12750', '2023-1010-25 french fries.png'),
(41, 'cola', '7000', '2023-1010-25 cola.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_data`
--

CREATE TABLE `order_data` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_data`
--

INSERT INTO `order_data` (`id`, `name`, `number`, `address`, `menu`, `qty`) VALUES
(34, 'Muhammad kalandra', '08378281991', 'Jl. Pramuka', 'French fries', '55'),
(37, 'Nuansakana', '0876656565', 'Jl. Ahmad Yani', 'fried chicken', '21'),
(54, 'Raudhya Azzahra', '08219919819', 'Jl. Ery Suparjan', 'fried chicken', '3'),
(56, 'Aksara Reygan', '08225367788', 'Jl. Perjuangan', 'French fries', '4'),
(60, 'zahra', '08212267777', 'Sempaja', 'fried chicken', '6'),
(63, 'nana', '1233', 'alaya', 'burger', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(0, 'dhya', '$2y$10$akV2.x5QDIN.4h443gikgO5IfEnghJ5BZIwlPUMWwuNHlPT7KlFr.'),
(0, 'banana', '$2y$10$Jv4hjBFnmyzMv3v4qxkwU.et2WqS6Kag4831u0nonU9tyPDTsQyV6'),
(0, 'kucing', '$2y$10$./Lx7RnxLKCzbSBchtBC8ezRmHgXsnzMPgE3Xd3sWqoutWX9TkPQ6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `listmenu`
--
ALTER TABLE `listmenu`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `listmenu`
--
ALTER TABLE `listmenu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
