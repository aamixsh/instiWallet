-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: InstiWallet
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu2

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
-- Table structure for table `FRIENDSHIP`
--

DROP TABLE IF EXISTS `FRIENDSHIP`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FRIENDSHIP` (
  `friend_1` varchar(50) DEFAULT NULL,
  `friend_2` varchar(50) DEFAULT NULL,
  `since` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FRIENDSHIP`
--

LOCK TABLES `FRIENDSHIP` WRITE;
/*!40000 ALTER TABLE `FRIENDSHIP` DISABLE KEYS */;
/*!40000 ALTER TABLE `FRIENDSHIP` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOAN`
--

DROP TABLE IF EXISTS `LOAN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LOAN` (
  `loan_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_from` varchar(50) DEFAULT NULL,
  `u_to` varchar(50) DEFAULT NULL,
  `amount` double(7,6) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `display` int(1) DEFAULT NULL,
  `note_from` varchar(5000) DEFAULT NULL,
  `note_to` varchar(5000) DEFAULT NULL,
  `is_complete` int(1) DEFAULT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOAN`
--

LOCK TABLES `LOAN` WRITE;
/*!40000 ALTER TABLE `LOAN` DISABLE KEYS */;
/*!40000 ALTER TABLE `LOAN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PENDING_FRIENDSHIP`
--

DROP TABLE IF EXISTS `PENDING_FRIENDSHIP`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PENDING_FRIENDSHIP` (
  `friend_from` varchar(50) DEFAULT NULL,
  `friend_to` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PENDING_FRIENDSHIP`
--

LOCK TABLES `PENDING_FRIENDSHIP` WRITE;
/*!40000 ALTER TABLE `PENDING_FRIENDSHIP` DISABLE KEYS */;
/*!40000 ALTER TABLE `PENDING_FRIENDSHIP` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRANSACTIONS`
--

DROP TABLE IF EXISTS `TRANSACTIONS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRANSACTIONS` (
  `transaction_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_from` varchar(50) DEFAULT NULL,
  `u_to` varchar(50) DEFAULT NULL,
  `amount` double(7,6) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `display` int(1) DEFAULT NULL,
  `note_from` varchar(5000) DEFAULT NULL,
  `note_to` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRANSACTIONS`
--

LOCK TABLES `TRANSACTIONS` WRITE;
/*!40000 ALTER TABLE `TRANSACTIONS` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRANSACTIONS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(70) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `balance` double(7,6) DEFAULT NULL,
  `d_o_j` date DEFAULT NULL,
  `last_online` datetime DEFAULT NULL,
  `budget` double(7,6) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `total_expense` double(8,6) DEFAULT NULL,
  `average_expense` double(7,6) DEFAULT NULL,
  `show_online` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-21 16:55:34
