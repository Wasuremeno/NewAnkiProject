-- MySQL dump 10.13  Distrib 9.0.1, for macos14.7 (arm64)
--
-- Host: localhost    Database: Anki
-- ------------------------------------------------------
-- Server version	9.0.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `japanese`
--

DROP TABLE IF EXISTS `japanese`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `japanese` (
  `id` int NOT NULL AUTO_INCREMENT,
  `furigana` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kanji` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `english` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `memorized` int NOT NULL DEFAULT '0',
  `katakana` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `japanese`
--

LOCK TABLES `japanese` WRITE;
/*!40000 ALTER TABLE `japanese` DISABLE KEYS */;
INSERT INTO `japanese` VALUES (1,'あかい','赤い','red',1,NULL),(2,'なに','何','what',1,NULL),(3,'いう','言う','to tell',1,NULL),(4,'みる','見る','to look',0,NULL),(5,'いく','行く','to go',0,NULL),(6,'しる','知る','to know',1,NULL),(7,'くる','来る','to come',1,NULL),(8,'もつ','持つ','to have',0,NULL),(9,'でる','出る','to go out, to leave',1,NULL),(10,'だいじょうぶ','大丈夫','all right, okay',1,NULL),(11,'もどる','戻る','to return',1,NULL),(12,'わるい',' 悪い','bad',1,NULL);
/*!40000 ALTER TABLE `japanese` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-08 15:35:56
