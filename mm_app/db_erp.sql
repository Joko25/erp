-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: db_erp
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator','administrator@ngerp.com','superuser','default_0.png',0),(20,'jokomyn','e10adc3949ba59abbe56e057f20f883e','Joko Mulyono','jokomulyono@erp.com','superuser','default_4.png',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_kategori`
--

DROP TABLE IF EXISTS `mst_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_kategori` (
  `kode_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) NOT NULL,
  `ket_kategori` text NOT NULL,
  `last_update` date NOT NULL,
  `user_entry` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_kategori`
--

LOCK TABLES `mst_kategori` WRITE;
/*!40000 ALTER TABLE `mst_kategori` DISABLE KEYS */;
INSERT INTO `mst_kategori` VALUES (1,'KAT01','MAKANAN','2018-08-04','admin'),(3,'KAT02','MINUMAN','2018-08-04','admin');
/*!40000 ALTER TABLE `mst_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_product`
--

DROP TABLE IF EXISTS `mst_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `user_entry` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_barang`),
  KEY `kode_barang` (`kode_barang`),
  KEY `kode_kategori` (`kode_kategori`),
  KEY `pk_sat_fg_prod` (`kode_satuan`),
  CONSTRAINT `pk_kat_fg_prod` FOREIGN KEY (`kode_kategori`) REFERENCES `mst_kategori` (`kode_kategori`),
  CONSTRAINT `pk_sat_fg_prod` FOREIGN KEY (`kode_satuan`) REFERENCES `mst_satuan` (`kode_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_product`
--

LOCK TABLES `mst_product` WRITE;
/*!40000 ALTER TABLE `mst_product` DISABLE KEYS */;
INSERT INTO `mst_product` VALUES ('BRG01','BARANG 1',1,3,'noimages.png','',1000,2000,'2018-08-05','admin'),('BRG02','BARANG 2',1,2,'BRG02.jpg','',100,1200,'2018-08-05','admin'),('BRG04','BARANG $',1,2,'BRG04.png','',15,123,'2018-08-06','admin');
/*!40000 ALTER TABLE `mst_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_satuan`
--

DROP TABLE IF EXISTS `mst_satuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_satuan` (
  `kode_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(25) NOT NULL,
  `last_update` date NOT NULL,
  `user_entry` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_satuan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_satuan`
--

LOCK TABLES `mst_satuan` WRITE;
/*!40000 ALTER TABLE `mst_satuan` DISABLE KEYS */;
INSERT INTO `mst_satuan` VALUES (1,'LTR','2018-08-04','admin'),(2,'KG','2018-08-04','admin'),(3,'BKS','2018-08-04','admin'),(4,'PCS','2018-08-04','admin');
/*!40000 ALTER TABLE `mst_satuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_supplier`
--

DROP TABLE IF EXISTS `mst_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_supplier` (
  `kode_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(45) DEFAULT NULL,
  `alamat_supplier` varchar(45) DEFAULT NULL,
  `telp_supplier` varchar(15) DEFAULT NULL,
  `ket_supplier` varchar(45) DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `user_entry` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`kode_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_supplier`
--

LOCK TABLES `mst_supplier` WRITE;
/*!40000 ALTER TABLE `mst_supplier` DISABLE KEYS */;
INSERT INTO `mst_supplier` VALUES (2,'TEST SUPPLIER','ALAMATNYA','021909','auk','2018-08-09','admin');
/*!40000 ALTER TABLE `mst_supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-09 23:32:42
