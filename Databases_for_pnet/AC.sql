-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: AC
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `accessory`
--

DROP TABLE IF EXISTS `accessory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `accessory` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessory`
--

LOCK TABLES `accessory` WRITE;
/*!40000 ALTER TABLE `accessory` DISABLE KEYS */;
/*!40000 ALTER TABLE `accessory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_feature`
--

DROP TABLE IF EXISTS `action_feature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `act_feature` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_feature`
--

LOCK TABLES `action_feature` WRITE;
/*!40000 ALTER TABLE `action_feature` DISABLE KEYS */;
/*!40000 ALTER TABLE `action_feature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_frame`
--

DROP TABLE IF EXISTS `action_frame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_frame` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `act_frame` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_frame`
--

LOCK TABLES `action_frame` WRITE;
/*!40000 ALTER TABLE `action_frame` DISABLE KEYS */;
/*!40000 ALTER TABLE `action_frame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_type`
--

DROP TABLE IF EXISTS `action_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `ActionName` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_type`
--

LOCK TABLES `action_type` WRITE;
/*!40000 ALTER TABLE `action_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `action_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `actor` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actor`
--

LOCK TABLES `actor` WRITE;
/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
/*!40000 ALTER TABLE `actor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `agent` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES (1,'change_fan_speed','user'),(2,'change_mode_type','user'),(3,'change_timer_time','user'),(4,'decrease_temperature','user'),(5,'increase_temperature','user'),(6,'increase_temperature_1_degree_','user'),(7,'push_button','user'),(8,'turn_air_conditioner_on/off','user\n');
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asset`
--

DROP TABLE IF EXISTS `asset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `asset` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset`
--

LOCK TABLES `asset` WRITE;
/*!40000 ALTER TABLE `asset` DISABLE KEYS */;
/*!40000 ALTER TABLE `asset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `attribute` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute`
--

LOCK TABLES `attribute` WRITE;
/*!40000 ALTER TABLE `attribute` DISABLE KEYS */;
/*!40000 ALTER TABLE `attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficiary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `beneficiary` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficiary`
--

LOCK TABLES `beneficiary` WRITE;
/*!40000 ALTER TABLE `beneficiary` DISABLE KEYS */;
/*!40000 ALTER TABLE `beneficiary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `birth`
--

DROP TABLE IF EXISTS `birth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `birth` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birth`
--

LOCK TABLES `birth` WRITE;
/*!40000 ALTER TABLE `birth` DISABLE KEYS */;
/*!40000 ALTER TABLE `birth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cause`
--

DROP TABLE IF EXISTS `cause`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cause` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `cause` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cause`
--

LOCK TABLES `cause` WRITE;
/*!40000 ALTER TABLE `cause` DISABLE KEYS */;
/*!40000 ALTER TABLE `cause` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `color` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component`
--

DROP TABLE IF EXISTS `component`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `component` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component`
--

LOCK TABLES `component` WRITE;
/*!40000 ALTER TABLE `component` DISABLE KEYS */;
INSERT INTO `component` VALUES (1,'air_conditioner','electronic_panel'),(2,'electronic_panel','fan_speed_button'),(3,'electronic_panel','mode_button'),(4,'electronic_panel','on/off_button'),(5,'electronic_panel','temp_+_button'),(6,'electronic_panel','temp_-_button'),(7,'electronic_panel','timer_button\n');
/*!40000 ALTER TABLE `component` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constitution`
--

DROP TABLE IF EXISTS `constitution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constitution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `constitution` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constitution`
--

LOCK TABLES `constitution` WRITE;
/*!40000 ALTER TABLE `constitution` DISABLE KEYS */;
/*!40000 ALTER TABLE `constitution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `core_component`
--

DROP TABLE IF EXISTS `core_component`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `core_component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `core_component` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_component`
--

LOCK TABLES `core_component` WRITE;
/*!40000 ALTER TABLE `core_component` DISABLE KEYS */;
/*!40000 ALTER TABLE `core_component` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptive_feature`
--

DROP TABLE IF EXISTS `descriptive_feature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptive_feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `des_feature` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptive_feature`
--

LOCK TABLES `descriptive_feature` WRITE;
/*!40000 ALTER TABLE `descriptive_feature` DISABLE KEYS */;
/*!40000 ALTER TABLE `descriptive_feature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destination`
--

DROP TABLE IF EXISTS `destination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `destination` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destination`
--

LOCK TABLES `destination` WRITE;
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destruction`
--

DROP TABLE IF EXISTS `destruction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destruction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `destruction` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destruction`
--

LOCK TABLES `destruction` WRITE;
/*!40000 ALTER TABLE `destruction` DISABLE KEYS */;
/*!40000 ALTER TABLE `destruction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencer`
--

DROP TABLE IF EXISTS `experiencer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiencer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `experiencer` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencer`
--

LOCK TABLES `experiencer` WRITE;
/*!40000 ALTER TABLE `experiencer` DISABLE KEYS */;
/*!40000 ALTER TABLE `experiencer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extent`
--

DROP TABLE IF EXISTS `extent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `extent` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extent`
--

LOCK TABLES `extent` WRITE;
/*!40000 ALTER TABLE `extent` DISABLE KEYS */;
/*!40000 ALTER TABLE `extent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `feature` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `first_time_setup`
--

DROP TABLE IF EXISTS `first_time_setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first_time_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `first_time_setup` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `first_time_setup`
--

LOCK TABLES `first_time_setup` WRITE;
/*!40000 ALTER TABLE `first_time_setup` DISABLE KEYS */;
/*!40000 ALTER TABLE `first_time_setup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fluidity`
--

DROP TABLE IF EXISTS `fluidity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fluidity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `fluidity` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fluidity`
--

LOCK TABLES `fluidity` WRITE;
/*!40000 ALTER TABLE `fluidity` DISABLE KEYS */;
/*!40000 ALTER TABLE `fluidity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_maintenance`
--

DROP TABLE IF EXISTS `general_maintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `general_maintenance` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_maintenance`
--

LOCK TABLES `general_maintenance` WRITE;
/*!40000 ALTER TABLE `general_maintenance` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_maintenance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_setup`
--

DROP TABLE IF EXISTS `general_setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `general_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `general_setup` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_setup`
--

LOCK TABLES `general_setup` WRITE;
/*!40000 ALTER TABLE `general_setup` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_setup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goal`
--

DROP TABLE IF EXISTS `goal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `goal` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goal`
--

LOCK TABLES `goal` WRITE;
/*!40000 ALTER TABLE `goal` DISABLE KEYS */;
/*!40000 ALTER TABLE `goal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heaviness`
--

DROP TABLE IF EXISTS `heaviness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `heaviness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `heaviness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heaviness`
--

LOCK TABLES `heaviness` WRITE;
/*!40000 ALTER TABLE `heaviness` DISABLE KEYS */;
/*!40000 ALTER TABLE `heaviness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inertness`
--

DROP TABLE IF EXISTS `inertness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inertness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `inertness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inertness`
--

LOCK TABLES `inertness` WRITE;
/*!40000 ALTER TABLE `inertness` DISABLE KEYS */;
/*!40000 ALTER TABLE `inertness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instrument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `instrument` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instrument`
--

LOCK TABLES `instrument` WRITE;
/*!40000 ALTER TABLE `instrument` DISABLE KEYS */;
/*!40000 ALTER TABLE `instrument` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `location` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `maintenance` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maintenance`
--

LOCK TABLES `maintenance` WRITE;
/*!40000 ALTER TABLE `maintenance` DISABLE KEYS */;
/*!40000 ALTER TABLE `maintenance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `material` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobility`
--

DROP TABLE IF EXISTS `mobility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `mobility` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobility`
--

LOCK TABLES `mobility` WRITE;
/*!40000 ALTER TABLE `mobility` DISABLE KEYS */;
/*!40000 ALTER TABLE `mobility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naccessory`
--

DROP TABLE IF EXISTS `naccessory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `naccessory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `naccessory` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naccessory`
--

LOCK TABLES `naccessory` WRITE;
/*!40000 ALTER TABLE `naccessory` DISABLE KEYS */;
/*!40000 ALTER TABLE `naccessory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `name`
--

DROP TABLE IF EXISTS `name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `name`
--

LOCK TABLES `name` WRITE;
/*!40000 ALTER TABLE `name` DISABLE KEYS */;
/*!40000 ALTER TABLE `name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `non_purpose_serving_accessory`
--

DROP TABLE IF EXISTS `non_purpose_serving_accessory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `non_purpose_serving_accessory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `non_purpose_serving_accessory` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `non_purpose_serving_accessory`
--

LOCK TABLES `non_purpose_serving_accessory` WRITE;
/*!40000 ALTER TABLE `non_purpose_serving_accessory` DISABLE KEYS */;
/*!40000 ALTER TABLE `non_purpose_serving_accessory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oiliness`
--

DROP TABLE IF EXISTS `oiliness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oiliness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `oiliness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oiliness`
--

LOCK TABLES `oiliness` WRITE;
/*!40000 ALTER TABLE `oiliness` DISABLE KEYS */;
/*!40000 ALTER TABLE `oiliness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outcome`
--

DROP TABLE IF EXISTS `outcome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `outcome` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outcome`
--

LOCK TABLES `outcome` WRITE;
/*!40000 ALTER TABLE `outcome` DISABLE KEYS */;
/*!40000 ALTER TABLE `outcome` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `patient` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `precondition`
--

DROP TABLE IF EXISTS `precondition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `precondition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `precondition` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `precondition`
--

LOCK TABLES `precondition` WRITE;
/*!40000 ALTER TABLE `precondition` DISABLE KEYS */;
INSERT INTO `precondition` VALUES (1,'change_fan_speed_to_high','fan_speed_in_medium'),(2,'change_fan_speed_to_low','fan_speed_in_high'),(3,'change_fan_speed_to_medium','fan_speed_in_low'),(4,'change_timer_time_to_0','timer_time_is_12'),(5,'change_timer_time_to_1','timer_time_is_0'),(6,'change_timer_time_to_10','timer_time_is_9'),(7,'change_timer_time_to_11','timer_time_is_10'),(8,'change_timer_time_to_12','timer_time_is_11'),(9,'change_timer_time_to_2','timer_time_is_1'),(10,'change_timer_time_to_3','timer_time_is_2'),(11,'change_timer_time_to_4','timer_time_is_3'),(12,'change_timer_time_to_5','timer_time_is_4'),(13,'change_timer_time_to_6','timer_time_is_5'),(14,'change_timer_time_to_7','timer_time_is_6'),(15,'change_timer_time_to_8','timer_time_is_7'),(16,'change_timer_time_to_9','timer_time_is_8'),(17,'change_to_cool_mode','air_conditioner_in_dry_mode'),(18,'change_to_dry_mode','air_conditioner_in_fan_mode'),(19,'change_to_economy_mode','air_conditioner_in_cool_mode'),(20,'change_to_fan_mode','air_conditioner_in_economy_mod'),(21,'decrease_temperature','temperature_is_not_less_than_1'),(22,'increase_temperature','temperature_is_not_less_than_1'),(23,'turn_air_conditioner_on','air_conditioner_is_off'),(24,'turn_air_conditoner_off','air_conditioner_is_on\n');
/*!40000 ALTER TABLE `precondition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predicate`
--

DROP TABLE IF EXISTS `predicate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predicate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `predicate` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predicate`
--

LOCK TABLES `predicate` WRITE;
/*!40000 ALTER TABLE `predicate` DISABLE KEYS */;
/*!40000 ALTER TABLE `predicate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `product` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purpose`
--

DROP TABLE IF EXISTS `purpose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purpose` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `purpose` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purpose`
--

LOCK TABLES `purpose` WRITE;
/*!40000 ALTER TABLE `purpose` DISABLE KEYS */;
INSERT INTO `purpose` VALUES (1,'fan_speed_button','change_fan_speed'),(2,'mode_button','change_mode_type'),(3,'on/off_button','turn_air_conditioner_on/off'),(4,'temp_+_button','increase_temperature'),(5,'temp_-_button','decrease_temperature'),(6,'timer_button','change_timer_time'),(7,'timer_button','increase_temperature_1_degree_');
/*!40000 ALTER TABLE `purpose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purpose_serving_accessory`
--

DROP TABLE IF EXISTS `purpose_serving_accessory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purpose_serving_accessory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `purpose_serving_accessory` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purpose_serving_accessory`
--

LOCK TABLES `purpose_serving_accessory` WRITE;
/*!40000 ALTER TABLE `purpose_serving_accessory` DISABLE KEYS */;
/*!40000 ALTER TABLE `purpose_serving_accessory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipient`
--

DROP TABLE IF EXISTS `recipient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `recipient` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipient`
--

LOCK TABLES `recipient` WRITE;
/*!40000 ALTER TABLE `recipient` DISABLE KEYS */;
/*!40000 ALTER TABLE `recipient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `relation` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relationships`
--

LOCK TABLES `relationships` WRITE;
/*!40000 ALTER TABLE `relationships` DISABLE KEYS */;
/*!40000 ALTER TABLE `relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_maintenance`
--

DROP TABLE IF EXISTS `repair_maintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `rep_maintenance` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_maintenance`
--

LOCK TABLES `repair_maintenance` WRITE;
/*!40000 ALTER TABLE `repair_maintenance` DISABLE KEYS */;
/*!40000 ALTER TABLE `repair_maintenance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `result` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,'change_fan_speed_to_high','fan_speed_in_high'),(2,'change_fan_speed_to_low','fan_speed_in_low'),(3,'change_fan_speed_to_medium','fan_speed_in_medium'),(4,'change_timer_time_to_0','timer_time_is_0'),(5,'change_timer_time_to_1','timer_time_is_1'),(6,'change_timer_time_to_10','timer_time_is_10'),(7,'change_timer_time_to_11','timer_time_is_11'),(8,'change_timer_time_to_12','timer_time_is_12'),(9,'change_timer_time_to_2','timer_time_is_2'),(10,'change_timer_time_to_3','timer_time_is_3'),(11,'change_timer_time_to_4','timer_time_is_4'),(12,'change_timer_time_to_5','timer_time_is_5'),(13,'change_timer_time_to_6','timer_time_is_6'),(14,'change_timer_time_to_7','timer_time_is_7'),(15,'change_timer_time_to_8','timer_time_is_8'),(16,'change_timer_time_to_9','timer_time_is_9'),(17,'change_to_cool_mode','air_conditioner_in_cool_mode'),(18,'change_to_dry_mode','air_conditioner_in_dry_mode'),(19,'change_to_economy_mode','air_conditioner_in_economy_mod'),(20,'change_to_fan_mode','air_conditioner_in_fan_mode'),(21,'decrease_temperature','temperature_decreased_by_1_deg'),(22,'increase_temperature','temperature_increased_by_1_deg'),(23,'turn_air_conditioner_on','air_conditioner_is_on'),(24,'turn_air_conditoner_off','air_conditioner_is_off\n');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setup`
--

DROP TABLE IF EXISTS `setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `setup` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setup`
--

LOCK TABLES `setup` WRITE;
/*!40000 ALTER TABLE `setup` DISABLE KEYS */;
/*!40000 ALTER TABLE `setup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shape`
--

DROP TABLE IF EXISTS `shape`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shape` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `shape` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shape`
--

LOCK TABLES `shape` WRITE;
/*!40000 ALTER TABLE `shape` DISABLE KEYS */;
/*!40000 ALTER TABLE `shape` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sideeffects`
--

DROP TABLE IF EXISTS `sideeffects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sideeffects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `sideeffect` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sideeffects`
--

LOCK TABLES `sideeffects` WRITE;
/*!40000 ALTER TABLE `sideeffects` DISABLE KEYS */;
/*!40000 ALTER TABLE `sideeffects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `size` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size`
--

LOCK TABLES `size` WRITE;
/*!40000 ALTER TABLE `size` DISABLE KEYS */;
/*!40000 ALTER TABLE `size` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliminess`
--

DROP TABLE IF EXISTS `sliminess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliminess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `sliminess` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliminess`
--

LOCK TABLES `sliminess` WRITE;
/*!40000 ALTER TABLE `sliminess` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliminess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smell`
--

DROP TABLE IF EXISTS `smell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `smell` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smell`
--

LOCK TABLES `smell` WRITE;
/*!40000 ALTER TABLE `smell` DISABLE KEYS */;
/*!40000 ALTER TABLE `smell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smoothness`
--

DROP TABLE IF EXISTS `smoothness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smoothness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `smoothness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smoothness`
--

LOCK TABLES `smoothness` WRITE;
/*!40000 ALTER TABLE `smoothness` DISABLE KEYS */;
/*!40000 ALTER TABLE `smoothness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `softness`
--

DROP TABLE IF EXISTS `softness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `softness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `softness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `softness`
--

LOCK TABLES `softness` WRITE;
/*!40000 ALTER TABLE `softness` DISABLE KEYS */;
/*!40000 ALTER TABLE `softness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sound`
--

DROP TABLE IF EXISTS `sound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sound` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `sound` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sound`
--

LOCK TABLES `sound` WRITE;
/*!40000 ALTER TABLE `sound` DISABLE KEYS */;
/*!40000 ALTER TABLE `sound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `source`
--

DROP TABLE IF EXISTS `source`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `source` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `source`
--

LOCK TABLES `source` WRITE;
/*!40000 ALTER TABLE `source` DISABLE KEYS */;
/*!40000 ALTER TABLE `source` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stability`
--

DROP TABLE IF EXISTS `stability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `stability` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stability`
--

LOCK TABLES `stability` WRITE;
/*!40000 ALTER TABLE `stability` DISABLE KEYS */;
/*!40000 ALTER TABLE `stability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `state` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subaction`
--

DROP TABLE IF EXISTS `subaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `subaction` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subaction`
--

LOCK TABLES `subaction` WRITE;
/*!40000 ALTER TABLE `subaction` DISABLE KEYS */;
INSERT INTO `subaction` VALUES (1,'change_fan_speed','push_fan_speed_button'),(2,'change_mode_type','push_mode_button'),(3,'change_timer_time','push_timer_button'),(4,'decrease_temperature','push_temp_-_button'),(5,'increase_temperature','push_temp_+_button'),(6,'turn_air_conditioner_on/off','push_on/off_button\n');
/*!40000 ALTER TABLE `subaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subsequent_setup`
--

DROP TABLE IF EXISTS `subsequent_setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subsequent_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `subsetup` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subsequent_setup`
--

LOCK TABLES `subsequent_setup` WRITE;
/*!40000 ALTER TABLE `subsequent_setup` DISABLE KEYS */;
/*!40000 ALTER TABLE `subsequent_setup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtleness`
--

DROP TABLE IF EXISTS `subtleness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subtleness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `subtleness` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtleness`
--

LOCK TABLES `subtleness` WRITE;
/*!40000 ALTER TABLE `subtleness` DISABLE KEYS */;
/*!40000 ALTER TABLE `subtleness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taste`
--

DROP TABLE IF EXISTS `taste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `taste` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taste`
--

LOCK TABLES `taste` WRITE;
/*!40000 ALTER TABLE `taste` DISABLE KEYS */;
/*!40000 ALTER TABLE `taste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temperature`
--

DROP TABLE IF EXISTS `temperature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temperature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `temperature` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temperature`
--

LOCK TABLES `temperature` WRITE;
/*!40000 ALTER TABLE `temperature` DISABLE KEYS */;
/*!40000 ALTER TABLE `temperature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theme`
--

DROP TABLE IF EXISTS `theme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `theme` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theme`
--

LOCK TABLES `theme` WRITE;
/*!40000 ALTER TABLE `theme` DISABLE KEYS */;
INSERT INTO `theme` VALUES (1,'change_fan_speed','fan'),(2,'change_mode_type','temperature'),(3,'change_temperature','temperature'),(4,'change_timer_time','temperature'),(5,'change_timer_time','time'),(6,'turn_air_conditioner_on/off','air_conditioner\n');
/*!40000 ALTER TABLE `theme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theta_roles`
--

DROP TABLE IF EXISTS `theta_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theta_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `theta_roles` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theta_roles`
--

LOCK TABLES `theta_roles` WRITE;
/*!40000 ALTER TABLE `theta_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `theta_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thing`
--

DROP TABLE IF EXISTS `thing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `thing` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thing`
--

LOCK TABLES `thing` WRITE;
/*!40000 ALTER TABLE `thing` DISABLE KEYS */;
/*!40000 ALTER TABLE `thing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `time` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time`
--

LOCK TABLES `time` WRITE;
/*!40000 ALTER TABLE `time` DISABLE KEYS */;
/*!40000 ALTER TABLE `time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `topic` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transparency`
--

DROP TABLE IF EXISTS `transparency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transparency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `transparency` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transparency`
--

LOCK TABLES `transparency` WRITE;
/*!40000 ALTER TABLE `transparency` DISABLE KEYS */;
/*!40000 ALTER TABLE `transparency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wear_and_tear`
--

DROP TABLE IF EXISTS `wear_and_tear`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wear_and_tear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ArtifactName` char(30) DEFAULT NULL,
  `wear_and_tear` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wear_and_tear`
--

LOCK TABLES `wear_and_tear` WRITE;
/*!40000 ALTER TABLE `wear_and_tear` DISABLE KEYS */;
/*!40000 ALTER TABLE `wear_and_tear` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-16  6:58:47
