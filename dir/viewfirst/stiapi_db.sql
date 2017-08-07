-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: stiapi_db
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `tbl_rest_registration`
--

DROP TABLE IF EXISTS `tbl_rest_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rest_registration` (
  `REST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(250) NOT NULL,
  `HISTORY` mediumtext NOT NULL,
  `PHOTOS` varchar(250) NOT NULL,
  `DELICACY` varchar(250) NOT NULL,
  `BEST_SELLER` varchar(10000) NOT NULL,
  `CONTACT_INFO` varchar(250) NOT NULL,
  `BLOG_WEB_URL` varchar(250) NOT NULL,
  `COMP_ADDRESS` text NOT NULL,
  `GEOLOCATION` mediumtext NOT NULL,
  `CAPACITY_CHAIRS` varchar(250) NOT NULL,
  `IS_ACTIVE` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`REST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rest_registration`
--

LOCK TABLES `tbl_rest_registration` WRITE;
/*!40000 ALTER TABLE `tbl_rest_registration` DISABLE KEYS */;
INSERT INTO `tbl_rest_registration` VALUES (1,'Name','Histoy','Photos','Delicacy','Best Seller','Contact Information','','Complete Address','Geolocation','',1);
/*!40000 ALTER TABLE `tbl_rest_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_reservation`
--

DROP TABLE IF EXISTS `tbl_user_reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_reservation` (
  `RESERV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULLNAME` varchar(250) NOT NULL,
  `EMAIL` varchar(250) NOT NULL,
  `CONTACT_INFO` varchar(250) NOT NULL,
  `REST_ID` int(11) NOT NULL,
  `RESERV_SEATS` varchar(250) NOT NULL,
  `RESERV_DATE` varchar(250) NOT NULL,
  `RESERV_TIME` varchar(250) NOT NULL,
  `EXIST_BLOG_WEB` varchar(250) NOT NULL,
  `IS_ACTIVE` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`RESERV_ID`),
  KEY `REST_ID` (`REST_ID`),
  CONSTRAINT `rest_for_key` FOREIGN KEY (`REST_ID`) REFERENCES `tbl_rest_registration` (`REST_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_reservation`
--

LOCK TABLES `tbl_user_reservation` WRITE;
/*!40000 ALTER TABLE `tbl_user_reservation` DISABLE KEYS */;
INSERT INTO `tbl_user_reservation` VALUES (1,'ALEX','alex@gmail.com','09234805795',1,'30','','','www.cautionhot.com',1),(2,'LEVI','levi@gmail.com','09477271918',1,'2','','','',1),(3,'MARK ','markangelo_bon@yahoo.com','09294105210',1,'','','','',1);
/*!40000 ALTER TABLE `tbl_user_reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-31 22:37:20
