-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: speedtest
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `speedtest_users`
--

DROP TABLE IF EXISTS `speedtest_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `speedtest_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` text NOT NULL,
  `ispinfo` text,
  `extra` text,
  `ua` text NOT NULL,
  `lang` text NOT NULL,
  `dl` text,
  `ul` text,
  `ping` text,
  `jitter` text,
  `log` longtext,
  `user` varchar(45) DEFAULT NULL,
  `district` varchar(20) DEFAULT 'NotSelected',
  `latitude` text,
  `longitude` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speedtest_users`
--

LOCK TABLES `speedtest_users` WRITE;
/*!40000 ALTER TABLE `speedtest_users` DISABLE KEYS */;
INSERT INTO `speedtest_users` VALUES (1,'2021-07-11 11:23:28','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5305.68','5541.42','1.00','0.00','','sachintha','Ampara','6.7154','79.9019'),(2,'2021-07-11 11:23:50','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5398.74','5575.62','1.00','0.00','','sachintha','Gampaha','7.087310','80.014366'),(3,'2021-07-11 11:24:47','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5373.91','5505.09','1.00','0.00','','sachintha','Batticaloa','7.7356027','81.6941956'),(4,'2021-07-11 11:25:09','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5350.44','5574.55','1.00','0.00','','sachintha','Badulla','6.984690','81.056473'),(5,'2021-07-11 11:25:34','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5666.89','5540.35','1.00','0.00','','sachintha','Colombo','6.9349969','79.8538463'),(6,'2021-07-11 11:27:33','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5105.56','5574.55','1.00','0.00','','sachintha','Kalutara','6.5835219','79.9612508'),(7,'2021-07-11 11:28:00','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5181.83','5574.55','1.00','0.00','','sachintha','Galle','6.05877305','80.21662093'),(8,'2021-07-11 11:28:20','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5362.12','5575.62','1.00','0.00','','sachintha','Batticaloa','7.7356027','81.6941956'),(9,'2021-07-11 11:44:01','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5294.44','5540.35','1.00','0.00','','sachintha','Galle','6.05877305','80.21662093'),(10,'2021-07-11 11:44:19','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5562.90','5609.83','1.00','0.00','','sachintha','Galle','6.05877305','80.21662093'),(11,'2021-07-11 11:44:40','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5773.45','5574.55','1.00','0.00','','sachintha','Badulla','6.984690','81.056473'),(12,'2021-07-11 11:45:04','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5366.90','5575.62','1.00','0.00','','sachintha','Kandy','7.2930922','80.6350768'),(13,'2021-07-11 11:45:26','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5649.15','5574.55','1.00','0.00','','sachintha','Kandy','7.2930922','80.6350768'),(14,'2021-07-11 11:45:51','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5477.44','5609.83','1.00','0.00','','sachintha','Mannar','6.7154','79.9019'),(15,'2021-07-11 11:46:25','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5430.81','5609.83','1.00','0.00','','sachintha','Kandy','7.2930922','80.6350768'),(16,'2021-07-11 11:56:04','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','5524.75','5574.55','1.00','0.00','','sachintha','Ampara','6.7154','79.9019'),(17,'2021-07-11 16:40:34','::1','{\"processedString\":\"::1 - localhost IPv6 access\",\"rawIspInfo\":\"\"}','','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.59','en-US,en;q=0.9','4839.98','5476.33','1.00','0.00','','sachintha','Matara','6.7154','79.9019');
/*!40000 ALTER TABLE `speedtest_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-11 22:35:22
