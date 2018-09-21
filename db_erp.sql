-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 21 Sep 2018 pada 09.40
-- Versi Server: 5.7.23-0ubuntu0.18.04.1
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
(20, 'jokomyn', 'e10adc3949ba59abbe56e057f20f883e', 'Joko Mulyono', 'jokomulyono@erp.com', 'superuser', 'default_4.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(125) NOT NULL,
  `excerpt` text NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `title`, `excerpt`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tutorial Laravel Dasar Part I', 'Ini merupakan excerpt/cuplikan', 'Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten. Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten. Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten.', NULL, '2017-10-02 09:00:00', '2017-10-02 09:00:00'),
(2, 'Tutorial Laravel Dasar Part II', 'Yang ini adalah excerpt Tutorial Laravel Part II', 'Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com. Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com. Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com.', NULL, '2017-10-02 09:00:00', '2017-10-02 09:00:00'),
(3, 'Tutorial Javascript Dasar', 'Nah yang ini adalah tutorial Javascript', 'Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya. Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya. Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya.', NULL, '2017-10-02 11:00:00', '2017-10-02 11:00:00'),
(4, 'Tips dan Trik coding yang Baik', 'Ini merupakan excerpt/cuplikan tips dan trik coding yang baik.', 'Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. ', NULL, '2017-10-02 14:00:00', '2017-10-02 14:00:00'),
(1, 'Tutorial Laravel Dasar Part I', 'Ini merupakan excerpt/cuplikan', 'Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten. Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten. Yang ini adalah konten, ini adalah isi konten, isi post yang berisi konten, karena post adalah konten.', NULL, '2017-10-02 09:00:00', '2017-10-02 09:00:00'),
(2, 'Tutorial Laravel Dasar Part II', 'Yang ini adalah excerpt Tutorial Laravel Part II', 'Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com. Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com. Ini adalah isi dari konten tutorial laravel part 2, isi kontennya ada di sini. Yuk kita belajar Laravel di sini, di Jagocoding.com.', NULL, '2017-10-02 09:00:00', '2017-10-02 09:00:00'),
(3, 'Tutorial Javascript Dasar', 'Nah yang ini adalah tutorial Javascript', 'Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya. Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya. Ini merupakan tutorial javascript dasar, yuk kita belajar Javascript di Jagocoding.com. Belajar javascript itu asyik lho. Javascript berbeda dengan Java ya.', NULL, '2017-10-02 11:00:00', '2017-10-02 11:00:00'),
(4, 'Tips dan Trik coding yang Baik', 'Ini merupakan excerpt/cuplikan tips dan trik coding yang baik.', 'Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. Ini merupakan konten untuk tips dan trik coding yang baik. Silahkan belajar di sini, hanya di Jagocoding.com. Yuk kita belajar sama-sama. ', NULL, '2017-10-02 14:00:00', '2017-10-02 14:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_customer`
--

CREATE TABLE `mst_customer` (
  `kode_customer` int(11) NOT NULL,
  `nama_customer` varchar(45) DEFAULT NULL,
  `alamat_customer` varchar(45) DEFAULT NULL,
  `telp_customer` varchar(15) DEFAULT NULL,
  `ket_customer` varchar(45) DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `user_entry` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_customer`
--

INSERT INTO `mst_customer` (`kode_customer`, `nama_customer`, `alamat_customer`, `telp_customer`, `ket_customer`, `last_update`, `user_entry`) VALUES
(2, 'Customer 1', 'Alamatnya', '', '', '2018-08-10', 'admin'),
(3, 'Customer 2', 'Alamatnya', '', '', '2018-08-10', 'admin'),
(4, '', '', '', '', '2018-09-12', 'admin');

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

--
-- Dumping data untuk tabel `mst_kategori`
--

INSERT INTO `mst_kategori` (`kode_kategori`, `nama_kategori`, `ket_kategori`, `last_update`, `user_entry`) VALUES
(1, 'KAT01', 'MAKANAN', '2018-08-04', 'admin'),
(3, 'KAT02', 'MINUMAN', '2018-08-04', 'admin');

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

--
-- Dumping data untuk tabel `mst_product`
--

INSERT INTO `mst_product` (`kode_barang`, `nama_barang`, `kode_kategori`, `kode_satuan`, `gambar`, `spesifikasi`, `harga_beli`, `harga_jual`, `last_update`, `user_entry`) VALUES
('BRG01', 'BARANG 1', 1, 3, 'noimages.png', '', 1000, 2000, '2018-08-05', 'admin'),
('BRG02', 'BARANG 2', 1, 2, 'BRG02.jpg', '', 100, 1200, '2018-08-05', 'admin'),
('BRG04', 'BARANG $', 1, 2, 'BRG04.png', '', 15, 123, '2018-08-06', 'admin');

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
-- Dumping data untuk tabel `mst_satuan`
--

INSERT INTO `mst_satuan` (`kode_satuan`, `nama_satuan`, `last_update`, `user_entry`) VALUES
(1, 'LTR', '2018-08-04', 'admin'),
(2, 'KG', '2018-08-04', 'admin'),
(3, 'BKS', '2018-08-04', 'admin'),
(4, 'PCS', '2018-08-04', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_supplier`
--

CREATE TABLE `mst_supplier` (
  `kode_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) DEFAULT NULL,
  `alamat_supplier` varchar(45) DEFAULT NULL,
  `telp_supplier` varchar(15) DEFAULT NULL,
  `ket_supplier` varchar(45) DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `user_entry` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_supplier`
--

INSERT INTO `mst_supplier` (`kode_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`, `ket_supplier`, `last_update`, `user_entry`) VALUES
(2, 'TEST SUPPLIER', 'ALAMATNYA', '021909', 'auk', '2018-08-09', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_detail`
--

CREATE TABLE `po_detail` (
  `kode_po` varchar(10) NOT NULL,
  `no_faktur` varchar(15) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `kode_satuan` int(11) NOT NULL,
  `qty` double NOT NULL,
  `harga` double NOT NULL,
  `disc` double NOT NULL,
  `pph` double NOT NULL,
  `dp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_master`
--

CREATE TABLE `po_master` (
  `no_faktur` varchar(15) NOT NULL,
  `po_date` date NOT NULL,
  `po_duedate` date NOT NULL,
  `grand_total` decimal(10,0) NOT NULL,
  `user_entry` varchar(10) NOT NULL,
  `last_update` datetime NOT NULL
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
-- Indexes for table `mst_customer`
--
ALTER TABLE `mst_customer`
  ADD PRIMARY KEY (`kode_customer`);

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
-- Indexes for table `mst_supplier`
--
ALTER TABLE `mst_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `po_detail`
--
ALTER TABLE `po_detail`
  ADD PRIMARY KEY (`kode_po`),
  ADD KEY `no_faktur` (`no_faktur`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_satuan` (`kode_satuan`);

--
-- Indexes for table `po_master`
--
ALTER TABLE `po_master`
  ADD PRIMARY KEY (`no_faktur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `mst_customer`
--
ALTER TABLE `mst_customer`
  MODIFY `kode_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mst_satuan`
--
ALTER TABLE `mst_satuan`
  MODIFY `kode_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mst_supplier`
--
ALTER TABLE `mst_supplier`
  MODIFY `kode_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mst_product`
--
ALTER TABLE `mst_product`
  ADD CONSTRAINT `pk_kat_fg_prod` FOREIGN KEY (`kode_kategori`) REFERENCES `mst_kategori` (`kode_kategori`),
  ADD CONSTRAINT `pk_sat_fg_prod` FOREIGN KEY (`kode_satuan`) REFERENCES `mst_satuan` (`kode_satuan`);

--
-- Ketidakleluasaan untuk tabel `po_detail`
--
ALTER TABLE `po_detail`
  ADD CONSTRAINT `po_detail_ibfk_1` FOREIGN KEY (`no_faktur`) REFERENCES `po_master` (`no_faktur`),
  ADD CONSTRAINT `po_detail_ibfk_2` FOREIGN KEY (`kode_satuan`) REFERENCES `mst_satuan` (`kode_satuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `po_detail_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `mst_product` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
