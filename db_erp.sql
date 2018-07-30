-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30 Jul 2018 pada 21.58
-- Versi Server: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_erp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `jenis_kelamin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`, `email`, `status`, `img`, `jenis_kelamin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'administrator@ngerp.com', 'superuser', 'default_0.png', 0),
(20, 'myn', 'e10adc3949ba59abbe56e057f20f883e', 'Joko Mulyono', 'jokomulyono@erp.com', 'superuser', 'default_4.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `ket_kategori` text NOT NULL,
  `last_update` date NOT NULL,
  `user_entry` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_product`
--

CREATE TABLE `mst_product` (
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(125) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `kode_satuan` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `spesifikasi` text NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `last_update` date NOT NULL,
  `user_entry` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_satuan`
--

CREATE TABLE `mst_satuan` (
  `kode_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(25) NOT NULL,
  `last_update` date NOT NULL,
  `user_entry` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `mst_product`
--
ALTER TABLE `mst_product`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_kategori` (`kode_kategori`),
  ADD KEY `pk_sat_fg_prod` (`kode_satuan`);

--
-- Indexes for table `mst_satuan`
--
ALTER TABLE `mst_satuan`
  ADD PRIMARY KEY (`kode_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mst_satuan`
--
ALTER TABLE `mst_satuan`
  MODIFY `kode_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mst_product`
--
ALTER TABLE `mst_product`
  ADD CONSTRAINT `pk_kat_fg_prod` FOREIGN KEY (`kode_kategori`) REFERENCES `mst_kategori` (`kode_kategori`),
  ADD CONSTRAINT `pk_sat_fg_prod` FOREIGN KEY (`kode_satuan`) REFERENCES `mst_satuan` (`kode_satuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
