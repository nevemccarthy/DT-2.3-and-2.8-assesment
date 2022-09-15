-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: nevemccarthy_cafe
-- ------------------------------------------------------
-- Server version 	8.0.30-0ubuntu0.20.04.2
-- Date: Thu, 15 Sep 2022 23:02:29 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Customer`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer` (
  `cust_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `l_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer`
--

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Customer` VALUES (1,'Bob','Jones'),(2,'Sue','Maroney'),(5,'Bill','English'),(6,'Mike','Hoskins'),(7,'Ella','Fitzgerald');
/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Customer` with 5 row(s)
--

--
-- Table structure for table `Drink`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Drink` (
  `drink_id` tinyint unsigned DEFAULT NULL,
  `drink` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cost` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Drink`
--

LOCK TABLES `Drink` WRITE;
/*!40000 ALTER TABLE `Drink` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Drink` VALUES (NULL,'Long Black',2.00),(NULL,'OJ',3.00),(NULL,'Coke ',1.00),(NULL,'Flat White',3.50),(NULL,'Water',4.00),(NULL,'Fanta',1.00);
/*!40000 ALTER TABLE `Drink` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Drink` with 6 row(s)
--

--
-- Table structure for table `Order`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Order` (
  `cust_id` smallint unsigned NOT NULL,
  `drink_id` tinyint unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Order`
--

LOCK TABLES `Order` WRITE;
/*!40000 ALTER TABLE `Order` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Order` VALUES (1,1),(1,2),(1,3),(2,2),(3,4),(3,3),(4,1),(4,5),(5,5),(5,6);
/*!40000 ALTER TABLE `Order` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Order` with 10 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Thu, 15 Sep 2022 23:02:29 +0000
