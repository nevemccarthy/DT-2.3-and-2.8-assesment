-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: nevemccarthy_DT200_web_database
-- ------------------------------------------------------
-- Server version 	8.0.30-0ubuntu0.20.04.2
-- Date: Sat, 01 Oct 2022 10:35:16 +0000

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
-- Table structure for table `Drinks`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Drinks` (
  `drink_id` tinyint NOT NULL,
  `drink` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` smallint NOT NULL,
  `sugar` float NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`drink_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Drinks`
--

LOCK TABLES `Drinks` WRITE;
/*!40000 ALTER TABLE `Drinks` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Drinks` VALUES (1,'E2	',400,74,2.7,'Yes'),(2,'Up and Go',250,16.1,2.8,'Yes'),(3,'Most juice: Apple & Blackcurrant	',275,25,3.5,'Yes'),(4,'Most juice: Apple & Orange & Mango	',275,25,3.5,'Yes'),(5,'Pump Water',750,0,3.5,'Yes'),(6,'Ice tea: Peach	',500,4,4,'Yes'),(7,'Ice tea: Lemon	',500,4,4,'Yes'),(8,'Hot Chocolate: Regular	',240,10,3.5,'Yes'),(9,'Hot Chocolate: Large	',200,13,4,'Yes'),(10,'Blue Powerade	',750,44,4.5,'Yes'),(11,'Red Powerade	',750,21,4.5,'Yes'),(12,'Simply Smoothie	',350,36,5.5,'Yes'),(13,'Herbal teas	',240,0,3.5,'Yes'),(14,'English Breakfast tea with milk	',240,0,3.5,'Yes');
/*!40000 ALTER TABLE `Drinks` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Drinks` with 14 row(s)
--

--
-- Table structure for table `Foods`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Foods` (
  `food_id` tinyint NOT NULL,
  `food` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugar` float NOT NULL,
  `veg` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Foods`
--

LOCK TABLES `Foods` WRITE;
/*!40000 ALTER TABLE `Foods` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Foods` VALUES (1,'Steak Pie',0.9,'no',4.8,'yes'),(2,'Vegetarian Pie',0.5,'yes',4.8,'yes'),(3,'Bacon & Egg Pie',10,'no',4.8,'yes'),(4,'Cheese Pie',0.7,'yes',4.8,'yes'),(5,'Sausage Roll',1.5,'no',3.5,'yes'),(6,'Vegetarian Sausage Roll',1.2,'yes',3.5,'yes'),(7,'Cookies',29,'yes',2,'yes'),(8,'Garlic Bread',3.7,'yes',2.8,'yes'),(9,'Sushi Selection (4 Piece)',2.5,'no',5,'yes'),(10,'Toasted Sandwich Selection',6,'no',3,'yes'),(11,'Plain Croissant ',11,'yes',2.5,'yes'),(12,'Brownies',30,'yes',3.5,'yes'),(13,'Caramel Slice',35,'yes',3.5,'yes'),(14,'Donuts',12,'yes',3,'yes'),(15,'Cake Slice',31,'yes',4,'yes'),(16,'Ham & Cheese Croissant',31,'no',5,'yes'),(17,'Cheese & Tomato Croissant',2.8,'yes',5,'yes'),(18,'Fruit Salad',3.6,'yes',4,'yes'),(19,'Pasta Salad',1,'no',4.5,'yes'),(20,'Roasted Vegetable Salad',0.5,'yes',4.5,'yes');
/*!40000 ALTER TABLE `Foods` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Foods` with 20 row(s)
--

--
-- Table structure for table `Orders`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Orders` (
  `order_id` tinyint NOT NULL,
  `order` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Orders`
--

LOCK TABLES `Orders` WRITE;
/*!40000 ALTER TABLE `Orders` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Orders` VALUES (1,'Alphabetically (A-Z)'),(2,'Sugar (Low to High)'),(3,'Cost (Low to High)');
/*!40000 ALTER TABLE `Orders` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Orders` with 3 row(s)
--

--
-- Table structure for table `Specials`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Specials` (
  `specials_id` tinyint NOT NULL,
  `drink_id` tinyint NOT NULL,
  `food_id` tinyint NOT NULL,
  `week_day` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugar` float NOT NULL,
  `cost` float NOT NULL,
  `available` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`specials_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Specials`
--

LOCK TABLES `Specials` WRITE;
/*!40000 ALTER TABLE `Specials` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `Specials` VALUES (1,5,1,'Monday',0.9,7.5,'yes'),(2,6,15,'Tuesday',35,7,'yes'),(3,14,10,'Wednesday',6,5.5,'yes'),(4,12,19,'Thursday',61,9,'yes'),(5,9,5,'Friday',14.5,6.5,'yes');
/*!40000 ALTER TABLE `Specials` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `Specials` with 5 row(s)
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

-- Dump completed on: Sat, 01 Oct 2022 10:35:16 +0000
