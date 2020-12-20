-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 35.192.204.170    Database: social_network
-- ------------------------------------------------------
-- Server version	5.7.32-0ubuntu0.18.04.1

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
-- Table structure for table `Comment`
--

DROP TABLE IF EXISTS `Comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `post_id` int(10) unsigned DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`),
  CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `Post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comment`
--

LOCK TABLES `Comment` WRITE;
/*!40000 ALTER TABLE `Comment` DISABLE KEYS */;
INSERT INTO `Comment` VALUES (1,11,5,'hello','2020-12-17 04:30:48','2020-12-17 04:30:48'),(8,11,5,'Quang Vượng ăn shit','2020-12-17 05:32:48','2020-12-17 05:32:48'),(9,11,5,'uytuyfguyh','2020-12-17 17:22:23','2020-12-17 17:22:23'),(10,11,10,'xàm','2020-12-17 18:10:02','2020-12-17 18:10:02'),(11,11,9,'gì vậy trời','2020-12-17 18:10:31','2020-12-17 18:10:31'),(12,11,8,'hihi','2020-12-17 18:10:44','2020-12-17 18:10:44'),(13,11,5,'hello','2020-12-18 07:33:54','2020-12-18 07:33:54'),(14,11,5,'Hoong be de','2020-12-18 07:34:17','2020-12-18 07:34:17'),(15,11,11,'wdds','2020-12-18 07:36:02','2020-12-18 07:36:02'),(16,11,8,'alo','2020-12-18 10:35:45','2020-12-18 10:35:45'),(17,11,5,'jjh','2020-12-18 10:56:55','2020-12-18 10:56:55'),(18,11,5,';;','2020-12-18 10:56:57','2020-12-18 10:56:57'),(19,11,5,'s,dsdm','2020-12-18 13:45:06','2020-12-18 13:45:06'),(20,11,5,'dsdsd','2020-12-18 13:45:33','2020-12-18 13:45:33'),(21,11,5,'Tuan an cut ','2020-12-18 13:49:10','2020-12-18 13:49:10'),(22,11,6,'quá đẹp luôn','2020-12-18 15:42:19','2020-12-18 15:42:19'),(23,11,30,'yêu clm mài','2020-12-18 15:45:34','2020-12-18 15:45:34'),(24,11,29,'sao cái gì mà sao','2020-12-18 15:45:44','2020-12-18 15:45:44'),(25,11,28,'nín','2020-12-18 15:45:50','2020-12-18 15:45:50'),(26,11,26,'hmmm','2020-12-18 15:45:56','2020-12-18 15:45:56'),(27,11,25,'ổn','2020-12-18 15:46:00','2020-12-18 15:46:00'),(28,14,30,'rồi xem bọn m hạnh phúc được bao lâu','2020-12-18 15:51:35','2020-12-18 15:51:35'),(29,14,30,'hmmm','2020-12-18 15:51:36','2020-12-18 15:51:36'),(30,14,30,'t đợi','2020-12-18 15:51:38','2020-12-18 15:51:38'),(31,14,30,'ăn cơm chó à','2020-12-18 15:51:45','2020-12-18 15:51:45'),(32,14,30,'hmmm','2020-12-18 15:51:46','2020-12-18 15:51:46'),(33,14,29,'sao clm','2020-12-18 15:51:54','2020-12-18 15:51:54'),(34,14,26,'ny Dũng Lê à','2020-12-18 15:52:10','2020-12-18 15:52:10'),(35,14,26,'ha ha','2020-12-18 15:52:11','2020-12-18 15:52:11'),(36,14,31,'gút ha','2020-12-18 15:52:44','2020-12-18 15:52:44'),(37,11,31,'asda','2020-12-19 03:14:34','2020-12-19 03:14:34'),(38,11,33,'s','2020-12-19 04:13:31','2020-12-19 04:13:31'),(39,11,33,'ds','2020-12-19 04:13:32','2020-12-19 04:13:32'),(40,11,33,'d','2020-12-19 04:13:33','2020-12-19 04:13:33'),(41,11,33,'s','2020-12-19 04:13:34','2020-12-19 04:13:34'),(42,11,33,'s','2020-12-19 04:13:34','2020-12-19 04:13:34'),(43,11,33,'sd','2020-12-19 04:13:35','2020-12-19 04:13:35'),(44,14,12,'Mặt trời chân lý chói qua tim','2020-12-19 06:32:47','2020-12-19 06:32:47'),(45,14,30,'rồi nhá','2020-12-19 08:51:33','2020-12-19 08:51:33'),(46,14,34,'dũng lê','2020-12-19 09:10:56','2020-12-19 09:10:56'),(47,11,34,'dit cm chung m','2020-12-19 15:25:04','2020-12-19 15:25:04'),(48,11,34,'lao nhao','2020-12-19 15:25:06','2020-12-19 15:25:06'),(49,14,36,'guts','2020-12-19 15:39:59','2020-12-19 15:39:59'),(50,14,45,'Cùng giúp đỡ nhân dân vùng lũ','2020-12-19 16:59:28','2020-12-19 16:59:28'),(51,11,46,'fdfd','2020-12-19 18:13:31','2020-12-19 18:13:31'),(52,14,37,'@Quang Vượng','2020-12-20 03:12:06','2020-12-20 03:12:06'),(53,11,45,'ổn','2020-12-20 12:59:02','2020-12-20 12:59:02'),(54,11,49,'ờ','2020-12-20 13:05:10','2020-12-20 13:05:10'),(55,11,48,'ổn','2020-12-20 20:21:55','2020-12-20 20:21:55'),(58,14,42,'aa','2020-12-20 21:00:09','2020-12-20 21:00:09');
/*!40000 ALTER TABLE `Comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Donation_History`
--

DROP TABLE IF EXISTS `Donation_History`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Donation_History` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `amount_star` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Donation_History`
--

LOCK TABLES `Donation_History` WRITE;
/*!40000 ALTER TABLE `Donation_History` DISABLE KEYS */;
INSERT INTO `Donation_History` VALUES (1,14,2,12,'2020-12-19 17:54:29','2020-12-19 17:54:29'),(2,11,1,100,'2020-12-19 18:11:26','2020-12-19 18:11:26'),(3,11,2,50,'2020-12-19 18:34:06','2020-12-19 18:34:06'),(4,11,2,60,'2020-12-19 18:34:25','2020-12-19 18:34:25'),(5,11,2,29,'2020-12-19 18:35:43','2020-12-19 18:35:43'),(6,11,2,30,'2020-12-19 18:36:46','2020-12-19 18:36:46'),(7,11,1,50,'2020-12-20 19:29:49','2020-12-20 19:29:49'),(8,11,3,50,'2020-12-20 20:19:05','2020-12-20 20:19:05'),(9,11,2,50,'2020-12-20 20:21:06','2020-12-20 20:21:06');
/*!40000 ALTER TABLE `Donation_History` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Following_Relationship`
--

DROP TABLE IF EXISTS `Following_Relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Following_Relationship` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `following_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `follow_uniqe` (`following_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `Following_Relationship_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`),
  CONSTRAINT `Following_Relationship_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Following_Relationship`
--

LOCK TABLES `Following_Relationship` WRITE;
/*!40000 ALTER TABLE `Following_Relationship` DISABLE KEYS */;
/*!40000 ALTER TABLE `Following_Relationship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Group`
--

DROP TABLE IF EXISTS `Group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL,
  `group_name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `slogan` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `current_star` int(11) NOT NULL DEFAULT '0',
  `target_star` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `Group_ibfk_1` (`owner_id`),
  CONSTRAINT `Group_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Group`
--

LOCK TABLES `Group` WRITE;
/*!40000 ALTER TABLE `Group` DISABLE KEYS */;
INSERT INTO `Group` VALUES (1,14,'Giải Dota2 Cntt.11 k62','Dota2','Dota2 vì đam mê',150,500,'2020-12-20 19:31:13','2020-12-20 19:29:48'),(2,14,'Gây Quỹ Miền Trung','Tương thân tương ái','Tổ chức phi lợi nhuận',231,10000,'2020-12-20 20:22:30','2020-12-20 20:21:05'),(3,11,'hoi hao tam','lam vi tinh cam','dfkdhgkfdhgkfdg',50,500,'2020-12-20 20:20:29','2020-12-20 20:19:04');
/*!40000 ALTER TABLE `Group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Like_Post`
--

DROP TABLE IF EXISTS `Like_Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Like_Post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `index2` (`post_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Like_Post`
--

LOCK TABLES `Like_Post` WRITE;
/*!40000 ALTER TABLE `Like_Post` DISABLE KEYS */;
INSERT INTO `Like_Post` VALUES (17,10,11,'2020-12-17 07:11:52','2020-12-17 07:11:52'),(28,8,11,'2020-12-17 16:39:29','2020-12-17 16:39:29'),(37,5,14,'2020-12-17 17:01:00','2020-12-17 17:01:00'),(54,6,11,'2020-12-17 18:11:15','2020-12-17 18:11:15'),(61,9,11,'2020-12-18 07:33:12','2020-12-18 07:33:12'),(81,5,11,'2020-12-18 15:27:06','2020-12-18 15:27:06'),(83,31,14,'2020-12-18 15:52:57','2020-12-18 15:52:57'),(84,26,14,'2020-12-18 15:53:03','2020-12-18 15:53:03'),(85,27,11,'2020-12-18 16:08:15','2020-12-18 16:08:15'),(92,28,14,'2020-12-19 04:40:29','2020-12-19 04:40:29'),(93,29,14,'2020-12-19 04:47:25','2020-12-19 04:47:25'),(94,30,14,'2020-12-19 04:47:28','2020-12-19 04:47:28'),(100,24,11,'2020-12-19 06:48:44','2020-12-19 06:48:44'),(101,34,14,'2020-12-19 09:10:58','2020-12-19 09:10:58'),(103,11,14,'2020-12-19 10:27:57','2020-12-19 10:27:57'),(105,33,14,'2020-12-19 12:11:12','2020-12-19 12:11:12'),(107,35,14,'2020-12-19 15:30:15','2020-12-19 15:30:15'),(108,36,14,'2020-12-19 15:48:13','2020-12-19 15:48:13'),(109,45,14,'2020-12-19 16:57:31','2020-12-19 16:57:31'),(112,45,11,'2020-12-19 18:09:48','2020-12-19 18:09:48'),(113,34,11,'2020-12-19 18:11:48','2020-12-19 18:11:48'),(114,36,11,'2020-12-20 03:30:05','2020-12-20 03:30:05'),(115,27,14,'2020-12-20 08:07:12','2020-12-20 08:07:12'),(118,49,11,'2020-12-20 15:03:22','2020-12-20 15:03:22'),(119,48,14,'2020-12-20 20:23:51','2020-12-20 20:23:51');
/*!40000 ALTER TABLE `Like_Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Notification`
--

DROP TABLE IF EXISTS `Notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Notification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `nofti_type` varchar(45) DEFAULT NULL,
  `content` json DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `Notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Notification`
--

LOCK TABLES `Notification` WRITE;
/*!40000 ALTER TABLE `Notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `Notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Post`
--

DROP TABLE IF EXISTS `Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `caption` text CHARACTER SET utf8mb4,
  `content` json DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `Post_ibfk_1` (`user_id`),
  CONSTRAINT `Post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post`
--

LOCK TABLES `Post` WRITE;
/*!40000 ALTER TABLE `Post` DISABLE KEYS */;
INSERT INTO `Post` VALUES (5,14,'normal','tokudaaa','[\"14_0_1607796924.jpg\", \"14_1_1607796924.png\"]','2020-12-19 10:26:56','2020-12-19 10:26:56'),(6,11,'normal','hôm nay trời đẹp quá','[\"11_0_1607848843.jpg\", \"11_1_1607848843.jpg\"]','2020-12-13 08:40:48','2020-12-13 08:40:48'),(8,18,'normal','','[\"18_0_1607994768.jpg\", \"18_1_1607994768.jpg\"]','2020-12-15 01:12:48','2020-12-15 01:12:48'),(9,18,'normal','rét sun soăn','[\"18_0_1607995144.jpg\"]','2020-12-15 01:19:05','2020-12-15 01:19:05'),(10,18,'normal','123',NULL,'2020-12-15 01:36:31','2020-12-15 01:36:31'),(11,14,'normal','Tiều phu bổ củi','[\"14_0_1607996819.jpg\"]','2020-12-15 01:47:00','2020-12-15 01:47:00'),(12,14,'normal','Từ ấy trong tôi bừng nắng hạ',NULL,'2020-12-15 01:47:30','2020-12-15 01:47:30'),(13,19,'normal','Counter Fizz???',NULL,'2020-12-15 03:03:24','2020-12-15 03:03:24'),(14,11,'normal','Chao anh em',NULL,'2020-12-15 09:15:49','2020-12-15 09:15:49'),(15,11,'normal','Dũng Lê Quang Vượng Văn Hồng :v ',NULL,'2020-12-15 09:16:36','2020-12-15 09:16:36'),(16,11,'normal','Quang vượng ngu lol',NULL,'2020-12-15 12:01:24','2020-12-15 12:01:24'),(17,11,'normal','dada',NULL,'2020-12-15 12:03:39','2020-12-15 12:03:39'),(18,35,'normal','co post dc bai ko?',NULL,'2020-12-15 12:18:25','2020-12-15 12:18:25'),(19,11,'normal','dsfsf',NULL,'2020-12-15 12:20:45','2020-12-15 12:20:45'),(20,11,'normal','test module mới','[\"11_0_1608041347.png\"]','2020-12-15 14:09:08','2020-12-15 14:09:08'),(21,35,'normal','alo alo 1234 alo',NULL,'2020-12-15 16:21:36','2020-12-15 16:21:36'),(22,11,'normal','Thong an com voi ca',NULL,'2020-12-16 01:57:05','2020-12-16 01:57:05'),(23,11,'normal','adsdsd',NULL,'2020-12-16 02:12:56','2020-12-16 02:12:56'),(24,11,'normal','fuck',NULL,'2020-12-18 15:15:08','2020-12-18 15:15:08'),(25,11,'normal','heelo',NULL,'2020-12-18 15:16:09','2020-12-18 15:16:09'),(26,11,'normal','toi la ai',NULL,'2020-12-18 15:18:10','2020-12-18 15:18:10'),(27,11,'normal','jhj',NULL,'2020-12-18 15:19:55','2020-12-18 15:19:55'),(28,11,'normal','jh',NULL,'2020-12-18 15:22:26','2020-12-18 15:22:26'),(29,11,'normal','cos sao dau',NULL,'2020-12-18 15:25:24','2020-12-18 15:25:24'),(30,11,'normal','yêu nhau yêu cả đường đi lối về',NULL,'2020-12-18 15:42:40','2020-12-18 15:42:40'),(31,14,'normal','sunshireeeeeeeeeeee','[\"14_0_1608306747.jpg\"]','2020-12-19 10:26:29','2020-12-19 10:26:29'),(32,11,'normal','dadad',NULL,'2020-12-18 15:57:31','2020-12-18 15:57:31'),(33,11,'normal','asdasa',NULL,'2020-12-19 03:14:40','2020-12-19 03:14:40'),(34,11,'normal','dsad',NULL,'2020-12-19 06:29:39','2020-12-19 06:29:39'),(35,14,'normal','gây quỹ','[\"14_0_1608391799.jpg\"]','2020-12-19 15:29:59','2020-12-19 15:29:59'),(36,14,'group','gây quỹ cho Dũng Lê cho ny đi ăn cháo','[\"14_0_1608391958.png\"]','2020-12-19 15:49:58','2020-12-19 15:49:58'),(37,14,'group','Gây quỹ cho Quang Vượng bớt ăn hại!!!','[\"14_0_1608394590.png\"]','2020-12-19 16:16:31','2020-12-19 16:16:31'),(38,14,'group','Gây quỹ cho hộ nghèo Lê Minh Tuấn','[\"14_0_1608394730.jpg\"]','2020-12-19 16:18:51','2020-12-19 16:18:51'),(40,14,'group','gây quỹ hội trẻ em Hải Dương',NULL,'2020-12-19 16:21:51','2020-12-19 16:21:51'),(41,14,'group','Quỹ cho trẻ mồ côi','[\"14_0_1608395100.jpg\"]','2020-12-19 16:25:00','2020-12-19 16:25:00'),(42,14,'group','Quỹ cho trẻ mồ côi','[\"14_0_1608395134.jpg\"]','2020-12-19 16:25:35','2020-12-19 16:25:35'),(45,14,'group','Tình thương gửi tới miền Trung','[\"14_0_1608396921.JPG\"]','2020-12-19 16:55:22','2020-12-19 16:55:22'),(46,11,'group','fdfd',NULL,'2020-12-19 18:13:25','2020-12-19 18:13:25'),(48,14,'group','Ủng hộ cho một giải đấu căng đét!! :33','[\"14_0_1608437807.png\"]','2020-12-20 17:52:36','2020-12-20 17:52:36'),(49,11,'normal','Tao la tuan',NULL,'2020-12-20 08:28:12','2020-12-20 08:28:12'),(50,11,'group','Gây quỹ cho đội xanh :v','[\"11_0_1608492678.jpg\"]','2020-12-20 19:31:18','2020-12-20 19:31:18');
/*!40000 ALTER TABLE `Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Post_Group`
--

DROP TABLE IF EXISTS `Post_Group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Post_Group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned DEFAULT NULL,
  `group_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `Post_Group_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `Post` (`id`),
  CONSTRAINT `Post_Group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `Group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post_Group`
--

LOCK TABLES `Post_Group` WRITE;
/*!40000 ALTER TABLE `Post_Group` DISABLE KEYS */;
INSERT INTO `Post_Group` VALUES (1,36,1,'2020-12-19 16:04:31','2020-12-19 16:04:31'),(2,37,1,'2020-12-19 16:19:40','2020-12-19 16:19:40'),(3,38,1,'2020-12-19 16:21:09','2020-12-19 16:21:09'),(7,40,1,'2020-12-19 16:28:13','2020-12-19 16:28:13'),(8,41,1,'2020-12-19 16:28:13','2020-12-19 16:28:13'),(9,42,1,'2020-12-19 16:28:14','2020-12-19 16:28:14'),(10,45,2,'2020-12-19 16:55:22','2020-12-19 16:55:22'),(13,48,1,'2020-12-20 04:16:55','2020-12-20 04:16:55'),(14,50,1,'2020-12-20 19:31:19','2020-12-20 19:31:19');
/*!40000 ALTER TABLE `Post_Group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Share_Post`
--

DROP TABLE IF EXISTS `Share_Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Share_Post` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Share_Post`
--

LOCK TABLES `Share_Post` WRITE;
/*!40000 ALTER TABLE `Share_Post` DISABLE KEYS */;
/*!40000 ALTER TABLE `Share_Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `star` int(11) NOT NULL,
  `account_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (8,'hong.nv1999@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',100,'active','2020-12-19 11:52:07','2020-12-19 11:52:07'),(9,'Quangvuonghy123@gmail.com','7c91c9ea4029bfa21f19c5aa50addffa',100,'active','2020-12-19 11:52:08','2020-12-19 11:52:08'),(10,'hongbeubeu@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:08','2020-12-19 11:52:08'),(11,'hong@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',850,'active','2020-12-20 20:22:30','2020-12-20 20:21:06'),(14,'kaka@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',111,'active','2020-12-19 17:55:53','2020-12-19 17:54:29'),(15,'tete@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:09','2020-12-19 11:52:09'),(18,'abc@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:10','2020-12-19 11:52:10'),(19,'akb@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:10','2020-12-19 11:52:10'),(23,'vuong2@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:11','2020-12-19 11:52:11'),(24,'vuong3@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:11','2020-12-19 11:52:11'),(34,'ho@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:11','2020-12-19 11:52:11'),(35,'Vuong.lq173474@sis.hust.edu.vn','827ccb0eea8a706c4c34a16891f84e7b',100,'active','2020-12-19 11:52:12','2020-12-19 11:52:12');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User_Group`
--

DROP TABLE IF EXISTS `User_Group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User_Group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `User_Group_ibfk_1_idx` (`group_id`),
  CONSTRAINT `User_Group_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `Group` (`id`),
  CONSTRAINT `User_Group_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User_Group`
--

LOCK TABLES `User_Group` WRITE;
/*!40000 ALTER TABLE `User_Group` DISABLE KEYS */;
INSERT INTO `User_Group` VALUES (1,1,14,'2020-12-19 16:48:40','2020-12-19 16:48:40'),(2,2,14,'2020-12-19 16:52:54','2020-12-19 16:52:54'),(3,3,11,'2020-12-19 18:12:23','2020-12-19 18:12:23'),(4,3,14,'2020-12-20 22:29:51','2020-12-20 22:29:51');
/*!40000 ALTER TABLE `User_Group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User_Profile`
--

DROP TABLE IF EXISTS `User_Profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User_Profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `picture` varchar(50) NOT NULL,
  `gender` char(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `display_name` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `education` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `User_Profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User_Profile`
--

LOCK TABLES `User_Profile` WRITE;
/*!40000 ALTER TABLE `User_Profile` DISABLE KEYS */;
INSERT INTO `User_Profile` VALUES (15,8,'\\public\\assets\\default.jpg',NULL,'Yêu màu tím',NULL,'hongbeubeu',NULL,'2020-12-20 10:08:51','2020-12-20 10:08:51'),(16,10,'\\public\\assets\\default.jpg',NULL,'Ghét sự chia ly',NULL,'hongbeu',NULL,'2020-12-20 10:08:52','2020-12-20 10:08:52'),(17,11,'\\public\\uploads\\11__1608489040.jpg','male','Lê Ngọc Minh','1/1/1999','Dũng Lê','HUST','2020-12-20 18:32:05','2020-12-20 18:30:41'),(20,14,'\\public\\uploads\\14__1608043138.jpg','male','thích chơi game chiến thuật','03/09/1999','Hồng Bêu','Hanoi University of Science and Technology','2020-12-19 09:10:09','2020-12-19 09:08:46'),(21,15,'\\public\\assets\\default.jpg',NULL,'Tôi là ai',NULL,'tete',NULL,'2020-12-20 10:08:52','2020-12-20 10:08:52'),(23,18,'\\public\\assets\\default.jpg',NULL,'Chỉ cần A',NULL,'abc',NULL,'2020-12-20 10:08:53','2020-12-20 10:08:53'),(24,19,'\\public\\assets\\default.jpg',NULL,'Thầy Chung đẹp trai',NULL,'Faker',NULL,'2020-12-20 10:08:54','2020-12-20 10:08:54'),(25,23,'\\public\\assets\\default.jpg',NULL,'Thầy Chung rất đẹp trai',NULL,'vuong',NULL,'2020-12-20 10:08:54','2020-12-20 10:08:54'),(26,24,'\\public\\assets\\default.jpg',NULL,'Tôi là ai',NULL,'vuong3',NULL,'2020-12-20 10:08:55','2020-12-20 10:08:55'),(28,34,'\\public\\assets\\default.jpg','male','Đây là đâu','12-12-1999','Dũng Lê','HUST','2020-12-20 10:08:55','2020-12-20 10:08:55'),(29,35,'\\public\\assets\\default.jpg','female','aaaa','10-08-1999','vuong','FTU','2020-12-15 16:20:48','2020-12-15 16:20:48');
/*!40000 ALTER TABLE `User_Profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-21  5:35:38
