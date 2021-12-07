-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: destined_duo1
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `profile_information`
--

DROP TABLE IF EXISTS `profile_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_information` (
  `username` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_information`
--

LOCK TABLES `profile_information` WRITE;
/*!40000 ALTER TABLE `profile_information` DISABLE KEYS */;
INSERT INTO `profile_information` VALUES ('doej','I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets','profile_images/default.png'),('kadala','I am ITWS major who loves loves dogs and am looking for people who would enjoy hanging out and talk about things such as current technology while also having fun with each other pets','profile_images/default.png'),('test','This is the description that I can write for however long I want to','profile_images/cat.jpeg');
/*!40000 ALTER TABLE `profile_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_media`
--

DROP TABLE IF EXISTS `profile_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) DEFAULT NULL,
  `social_media` varchar(256) NOT NULL,
  `link` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  CONSTRAINT `profile_media_ibfk_1` FOREIGN KEY (`username`) REFERENCES `profile_information` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_media`
--

LOCK TABLES `profile_media` WRITE;
/*!40000 ALTER TABLE `profile_media` DISABLE KEYS */;
INSERT INTO `profile_media` VALUES (2,'test','LinkedIn','www.linkedin.com'),(3,'test','Twitter','www.twitter.com'),(4,'test','Other','www.slack.com'),(5,'test','Instagram','www.instagram.com');
/*!40000 ALTER TABLE `profile_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_interests`
--

DROP TABLE IF EXISTS `user_interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `interest` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_interests`
--

LOCK TABLES `user_interests` WRITE;
/*!40000 ALTER TABLE `user_interests` DISABLE KEYS */;
INSERT INTO `user_interests` VALUES (1,'doej','Movies'),(2,'kadala','Movies'),(4,'doej','Chess'),(5,'kadala','Chess'),(6,'ruchikas','swimming'),(7,'ruchikas','driving'),(8,'ruchikas','driving'),(9,'someone123','learning'),(10,'someone123','driving'),(11,'someone123','movies'),(12,'someone123','dog walking'),(13,'someone123','boxing'),(14,'kjohn543','reading'),(15,'kjohn543','driving'),(16,'ruchikas','hiking'),(17,'test','camping'),(19,'test','swimming'),(30,'test','coding'),(32,'test','testing');
/*!40000 ALTER TABLE `user_interests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('doej','Aneeshkadali_8234','John','Doe',19,''),('kadala','Aneeshkadali_888','Aneesh','Kadali',19,''),('kjohn543','da56d36bc13a1f53b61dbe82a9ece6b5643764c8a8e0ff8c4f26dbdaa8298bad','john','k',19,'kjohn@rpi.edu'),('ruchikas','ruchika1234','Ruchika','Singh',21,'singhr7@rpi.edu'),('someone123','1752c49d6a57e63b78c08624584e81b71fce52f9d4d7104bd05fdcf48d3608ae','someone','new',21,'someone@gmail.com'),('test','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8','Brianna','Lopez',1,'test@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-07  8:53:32
