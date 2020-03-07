-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: autoscun
-- ------------------------------------------------------
-- Server version	5.5.58-MariaDB

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
-- Table structure for table `mis_productos`
--

DROP TABLE IF EXISTS `mis_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Marca` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `Cilindraje` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagenes` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mis_productos`
--

LOCK TABLES `mis_productos` WRITE;
/*!40000 ALTER TABLE `mis_productos` DISABLE KEYS */;
INSERT INTO `mis_productos` VALUES (1,'Benz1','Mercedes',35.00,' 1900 cc','Negro','img/foto1.jpg','2016-08-17 08:21:25','2016-08-17 08:21:25','1'),(2,'Motorrad','BMW',25.00,' 1600 cc ','Azul','img/foto2.jpg','2016-08-17 08:21:25','2016-08-17 08:21:25','1'),(3,'Sentra','Chevrolet',40.00,'1300 cc ','Negro','img/foto3.jpg','2016-08-17 08:21:25','2016-08-17 08:21:25','1'),(4,'Spark','Nisan',55.00,' 1100 cc','Azul','img/foto4.jpg','2016-08-17 08:21:25','2016-08-17 08:21:25','1'),(5,'Spark','Nisan',56.00,' 1200 cc','rojo','img/foto5.jpg','2016-08-17 08:21:25','2016-08-17 08:21:25','1');
/*!40000 ALTER TABLE `mis_productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-20 18:40:32
