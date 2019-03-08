-- MySQL dump 10.13  Distrib 8.0.14, for macos10.14 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `event_table`
--

DROP TABLE IF EXISTS `event_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `event_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_range` tinyint(1) NOT NULL DEFAULT '0',
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_table`
--

LOCK TABLES `event_table` WRITE;
/*!40000 ALTER TABLE `event_table` DISABLE KEYS */;
INSERT INTO `event_table` VALUES (1,'2',1,'所在位置','2019-01-31 17:10','2019-01-31 17:10','2019-01-31','','参加年会','2019-01-29 19:30:43','2019-01-29 19:30:43'),(2,'1',0,'所在位置','2019-01-31 11:00','2019-01-31 11:00','2019-01-31','','买新衣服','2019-01-29 19:33:21','2019-01-29 19:33:21'),(3,'2',0,'所在位置','2019-01-27 11:00','2019-01-27 11:00','2019-01-27','','今天洗了头','2019-01-29 19:39:52','2019-01-29 19:39:52'),(5,'2',0,'所在位置','2019-02-11 15:00','2019-02-11 15:00','2019-02-11','','今天洗了头','2019-02-10 23:16:46','2019-02-10 23:16:46'),(7,'2',0,'所在位置','2019-02-07 16:00','2019-02-07 16:00','2019-02-07','','今天去重庆玩儿','2019-02-11 00:57:13','2019-02-11 00:57:13'),(8,'2',0,'所在位置','2019-02-11 9:00','2019-02-11 9:00','2019-02-11','','今天洗了头','2019-02-13 17:57:59','2019-02-13 17:57:59'),(9,'2',0,'所在位置','2019-02-14 9:00','2019-02-14 9:00','2019-02-14','','今天洗了头','2019-02-13 17:58:30','2019-02-13 17:58:30'),(10,'2',0,'所在位置','2019-02-18 17:00','2019-02-18 17:00','2019-02-18','','今天洗了头','2019-02-18 01:18:42','2019-02-18 01:18:42'),(11,'2',0,'所在位置','2019-02-22 20:00','2019-02-22 20:00','2019-02-22','','十陵爵士课','2019-02-20 00:02:39','2019-02-20 00:02:39'),(14,'2',0,'所在位置','2019-02-21 14:00','2019-02-21 14:00','2019-02-21','','dwdqw','2019-02-20 22:02:12','2019-02-20 22:02:12'),(15,'2',0,'所在位置','2019-02-21 14:00','2019-02-21 14:00','2019-02-21','','今天qu chuan去传习录练舞','2019-02-20 22:02:53','2019-02-20 22:02:53'),(16,'0',0,'所在位置','2019-02-21 14:00','2019-02-21 14:00','2019-02-21','','20:00~21:30  十陵爵士课','2019-02-20 22:37:16','2019-02-20 22:37:16'),(27,'2',0,'所在位置','20:00','21:30','2019-03-02',NULL,'十陵爵士课','0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'2',0,'所在位置','2019-02-24 14:00','2019-02-24 14:00','2019-02-24','','今天剪了刘海洗了头','2019-02-25 22:23:09','2019-02-25 22:23:09'),(30,'2',0,'所在位置','2019-02-10 14:00 ','2019-02-10 14:00 ','2019-02-10',NULL,'测试二','2019-02-26 22:09:33','2019-02-28 18:16:02'),(31,'0',0,'所在位置','2019-02-10 14:00','2019-02-10 14:00','2019-02-10','240','今天买了悦诗风吟↵眼霜 + 睡眠面膜','2019-02-26 22:58:45','2019-02-26 22:58:45'),(32,'1',0,'所在位置','2019-02-26 14:00','2019-02-26 14:00','2019-02-26','159','买了一件黄色短款上衣','2019-02-26 23:00:22','2019-02-26 23:00:22'),(33,'1',0,'所在位置','2019-03-29 11:10','2019-04-30 10:05','2019-03-29','12','今天洗了头sqwq','2019-02-27 17:48:39','2019-02-28 18:35:22'),(34,'2',0,'所在位置','2019-03-01 20:00 ','2019-03-01 21:30','2019-03-01',NULL,'十陵爵士课','2019-02-27 23:42:27','2019-02-28 18:34:27'),(35,'2',0,'所在位置','2019-03-04 20:00','2019-03-04 21:30','2019-03-04','','十陵爵士课','2019-02-28 18:38:29','2019-02-28 18:38:29');
/*!40000 ALTER TABLE `event_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-08 14:04:42
