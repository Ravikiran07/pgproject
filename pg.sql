-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: payingguest
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.2

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
-- Table structure for table `monthlyRent`
--

DROP TABLE IF EXISTS `monthlyRent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monthlyRent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(20) DEFAULT NULL,
  `month_rent` varchar(20) DEFAULT NULL,
  `paid` varchar(20) DEFAULT NULL,
  `balance` varchar(20) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monthlyRent`
--

LOCK TABLES `monthlyRent` WRITE;
/*!40000 ALTER TABLE `monthlyRent` DISABLE KEYS */;
INSERT INTO `monthlyRent` VALUES (4,'9742145482','8000','8000','0','april','2015'),(5,'9986120820','6000','6000','0','may','2015'),(6,'9535862367','7000','7000','0','april','2015'),(7,'9535862369','6000','6000','0','june','2015'),(8,'9742145482','8000','5000','3000','may','2015'),(9,'9742145482','8000','10000','1000','june','2015'),(10,'9742145482','8000','9000','0','july','2015'),(11,'9986120820','6000','6000','0','june','2015'),(14,'9535862367','7000','7000','0','may','2015'),(15,'9535862367','7000','6000','1000','june','2015'),(16,'9535862369','6000','6000','0','july','2015');
/*!40000 ALTER TABLE `monthlyRent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newJoinee`
--

DROP TABLE IF EXISTS `newJoinee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newJoinee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `room_no` varchar(10) DEFAULT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `residence_mobile` varchar(15) DEFAULT NULL,
  `date_of_admission` varchar(50) DEFAULT NULL,
  `mail_id` varchar(100) DEFAULT NULL,
  `office_address` varchar(200) DEFAULT NULL,
  `monthly_rent` varchar(15) DEFAULT NULL,
  `advance_paid` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_number` (`mobile_number`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newJoinee`
--

LOCK TABLES `newJoinee` WRITE;
/*!40000 ALTER TABLE `newJoinee` DISABLE KEYS */;
INSERT INTO `newJoinee` VALUES (5,'naseer','9742145482','shaik sab b','6','26-nov-1988','post: shivapur\r\nTq & Dt : Koppal','9741352092','04-04-2015','naseer.aman@gmail.com','basavangudi','8000','3000'),(6,'ravi','9986120820','damodar','5','02-dec-1988','post: Bellary\r\nTq & Dt: Bellary','9742197421','05-05-2015','ravikiran@gmail.com','kormangala','6000','3000'),(7,'yaseen','9535862367','khasim sab','20','19-02-1990','post: Sandur\r\nTq: Sandur & Dt:Bellary','9880198801','01-04-2015','yaseen.sandur@gmail.com','kengeri','7000','3000'),(8,'ramappa','9535862369','yankappa','14','01-06-1987','post: Navali\r\nTq: Gangavathi & Dt: Koppal','9845098450','01-06-2015','ramkumar.navali@gmail.com','k.r.circle','6000','3000');
/*!40000 ALTER TABLE `newJoinee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-10 12:14:29
