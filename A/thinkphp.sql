-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: thinkphp
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.13.04.1

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
-- Table structure for table `think_activities`
--

DROP TABLE IF EXISTS `think_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_activities` (
  `acs_id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_activities`
--

LOCK TABLES `think_activities` WRITE;
/*!40000 ALTER TABLE `think_activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_activity`
--

DROP TABLE IF EXISTS `think_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_activity` (
  `ac_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `pub_time` int(10) unsigned NOT NULL,
  `deadline` int(10) unsigned NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `host` varchar(100) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_activity`
--

LOCK TABLES `think_activity` WRITE;
/*!40000 ALTER TABLE `think_activity` DISABLE KEYS */;
INSERT INTO `think_activity` VALUES (1,2,'广东省高校学生工作专业委员会',0,1367366400,'2013-05-01 08:00','2013-06-01 08:00','中山大学东校区','中山大学计算机协会',0),(2,2,'中山大学学处网站开发',0,1370044800,'2013-06-01 08:00','2013-06-15 08:00','中山大学东校区','中山大学计算机协会',0);
/*!40000 ALTER TABLE `think_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_article`
--

DROP TABLE IF EXISTS `think_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_article` (
  `a_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `last_time` int(10) unsigned NOT NULL,
  `title` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `click` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_article`
--

LOCK TABLES `think_article` WRITE;
/*!40000 ALTER TABLE `think_article` DISABLE KEYS */;
INSERT INTO `think_article` VALUES (1,2,1368289563,1368337837,'HTML特殊字符编码对照表','2,100','<table style=\"font-family:Simsun;text-align:start;color:#666666;font-size:12px;\" cellpadding=\"2\" cellspacing=\"1\" align=\"center\" border=\"1\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				特殊符号\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				命名实体\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				十进制编码\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				特殊符号\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				命名实体\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				十进制编码\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				特殊符号\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				命名实体\r\n			</td>\r\n			<td bgcolor=\"#F6F6F6\">\r\n				十进制编码\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Α\r\n			</td>\r\n			<td>\r\n				Α\r\n			</td>\r\n			<td>\r\n				Α\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Β\r\n			</td>\r\n			<td>\r\n				Β\r\n			</td>\r\n			<td>\r\n				Β\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Γ\r\n			</td>\r\n			<td>\r\n				Γ\r\n			</td>\r\n			<td>\r\n				Γ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Δ\r\n			</td>\r\n			<td>\r\n				Δ\r\n			</td>\r\n			<td>\r\n				Δ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ε\r\n			</td>\r\n			<td>\r\n				Ε\r\n			</td>\r\n			<td>\r\n				Ε\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ζ\r\n			</td>\r\n			<td>\r\n				Ζ\r\n			</td>\r\n			<td>\r\n				Ζ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Η\r\n			</td>\r\n			<td>\r\n				Η\r\n			</td>\r\n			<td>\r\n				Η\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Θ\r\n			</td>\r\n			<td>\r\n				Θ\r\n			</td>\r\n			<td>\r\n				Θ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ι\r\n			</td>\r\n			<td>\r\n				Ι\r\n			</td>\r\n			<td>\r\n				Ι\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Κ\r\n			</td>\r\n			<td>\r\n				Κ\r\n			</td>\r\n			<td>\r\n				Κ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Λ\r\n			</td>\r\n			<td>\r\n				Λ\r\n			</td>\r\n			<td>\r\n				Λ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Μ\r\n			</td>\r\n			<td>\r\n				Μ\r\n			</td>\r\n			<td>\r\n				Μ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ν\r\n			</td>\r\n			<td>\r\n				Ν\r\n			</td>\r\n			<td>\r\n				Ν\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ξ\r\n			</td>\r\n			<td>\r\n				Ξ\r\n			</td>\r\n			<td>\r\n				Ξ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ο\r\n			</td>\r\n			<td>\r\n				Ο\r\n			</td>\r\n			<td>\r\n				Ο\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Π\r\n			</td>\r\n			<td>\r\n				Π\r\n			</td>\r\n			<td>\r\n				Π\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ρ\r\n			</td>\r\n			<td>\r\n				Ρ\r\n			</td>\r\n			<td>\r\n				Ρ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Σ\r\n			</td>\r\n			<td>\r\n				Σ\r\n			</td>\r\n			<td>\r\n				Σ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Τ\r\n			</td>\r\n			<td>\r\n				Τ\r\n			</td>\r\n			<td>\r\n				Τ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Υ\r\n			</td>\r\n			<td>\r\n				Υ\r\n			</td>\r\n			<td>\r\n				Υ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Φ\r\n			</td>\r\n			<td>\r\n				Φ\r\n			</td>\r\n			<td>\r\n				Φ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Χ\r\n			</td>\r\n			<td>\r\n				Χ\r\n			</td>\r\n			<td>\r\n				Χ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ψ\r\n			</td>\r\n			<td>\r\n				Ψ\r\n			</td>\r\n			<td>\r\n				Ψ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				Ω\r\n			</td>\r\n			<td>\r\n				Ω\r\n			</td>\r\n			<td>\r\n				Ω\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				α\r\n			</td>\r\n			<td>\r\n				α\r\n			</td>\r\n			<td>\r\n				α\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				β\r\n			</td>\r\n			<td>\r\n				β\r\n			</td>\r\n			<td>\r\n				β\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				γ\r\n			</td>\r\n			<td>\r\n				γ\r\n			</td>\r\n			<td>\r\n				γ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				δ\r\n			</td>\r\n			<td>\r\n				δ\r\n			</td>\r\n			<td>\r\n				δ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ε\r\n			</td>\r\n			<td>\r\n				ε\r\n			</td>\r\n			<td>\r\n				ε\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ζ\r\n			</td>\r\n			<td>\r\n				ζ\r\n			</td>\r\n			<td>\r\n				ζ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				η\r\n			</td>\r\n			<td>\r\n				η\r\n			</td>\r\n			<td>\r\n				η\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				θ\r\n			</td>\r\n			<td>\r\n				θ\r\n			</td>\r\n			<td>\r\n				θ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ι\r\n			</td>\r\n			<td>\r\n				ι\r\n			</td>\r\n			<td>\r\n				ι\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				κ\r\n			</td>\r\n			<td>\r\n				κ\r\n			</td>\r\n			<td>\r\n				κ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				λ\r\n			</td>\r\n			<td>\r\n				λ\r\n			</td>\r\n			<td>\r\n				λ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				μ\r\n			</td>\r\n			<td>\r\n				μ\r\n			</td>\r\n			<td>\r\n				μ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ν\r\n			</td>\r\n			<td>\r\n				ν\r\n			</td>\r\n			<td>\r\n				ν\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ξ\r\n			</td>\r\n			<td>\r\n				ξ\r\n			</td>\r\n			<td>\r\n				ξ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ο\r\n			</td>\r\n			<td>\r\n				ο\r\n			</td>\r\n			<td>\r\n				ο\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				π\r\n			</td>\r\n			<td>\r\n				π\r\n			</td>\r\n			<td>\r\n				π\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ρ\r\n			</td>\r\n			<td>\r\n				ρ\r\n			</td>\r\n			<td>\r\n				ρ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ς\r\n			</td>\r\n			<td>\r\n				ς\r\n			</td>\r\n			<td>\r\n				ς\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				σ\r\n			</td>\r\n			<td>\r\n				σ\r\n			</td>\r\n			<td>\r\n				σ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				τ\r\n			</td>\r\n			<td>\r\n				τ\r\n			</td>\r\n			<td>\r\n				τ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				υ\r\n			</td>\r\n			<td>\r\n				υ\r\n			</td>\r\n			<td>\r\n				υ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				φ\r\n			</td>\r\n			<td>\r\n				φ\r\n			</td>\r\n			<td>\r\n				φ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				χ\r\n			</td>\r\n			<td>\r\n				χ\r\n			</td>\r\n			<td>\r\n				χ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ψ\r\n			</td>\r\n			<td>\r\n				ψ\r\n			</td>\r\n			<td>\r\n				ψ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ω\r\n			</td>\r\n			<td>\r\n				ω\r\n			</td>\r\n			<td>\r\n				ω\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ϑ\r\n			</td>\r\n			<td>\r\n				ϑ\r\n			</td>\r\n			<td>\r\n				ϑ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ϒ\r\n			</td>\r\n			<td>\r\n				ϒ\r\n			</td>\r\n			<td>\r\n				ϒ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ϖ\r\n			</td>\r\n			<td>\r\n				ϖ\r\n			</td>\r\n			<td>\r\n				ϖ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				•\r\n			</td>\r\n			<td>\r\n				•\r\n			</td>\r\n			<td>\r\n				•\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				…\r\n			</td>\r\n			<td>\r\n				…\r\n			</td>\r\n			<td>\r\n				…\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				′\r\n			</td>\r\n			<td>\r\n				′\r\n			</td>\r\n			<td>\r\n				′\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				″\r\n			</td>\r\n			<td>\r\n				″\r\n			</td>\r\n			<td>\r\n				″\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				‾\r\n			</td>\r\n			<td>\r\n				‾\r\n			</td>\r\n			<td>\r\n				‾\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⁄\r\n			</td>\r\n			<td>\r\n				⁄\r\n			</td>\r\n			<td>\r\n				⁄\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				℘\r\n			</td>\r\n			<td>\r\n				℘\r\n			</td>\r\n			<td>\r\n				℘\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ℑ\r\n			</td>\r\n			<td>\r\n				ℑ\r\n			</td>\r\n			<td>\r\n				ℑ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ℜ\r\n			</td>\r\n			<td>\r\n				ℜ\r\n			</td>\r\n			<td>\r\n				ℜ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				™\r\n			</td>\r\n			<td>\r\n				™\r\n			</td>\r\n			<td>\r\n				™\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ℵ\r\n			</td>\r\n			<td>\r\n				ℵ\r\n			</td>\r\n			<td>\r\n				ℵ\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				←\r\n			</td>\r\n			<td>\r\n				←\r\n			</td>\r\n			<td>\r\n				←\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				↑\r\n			</td>\r\n			<td>\r\n				↑\r\n			</td>\r\n			<td>\r\n				↑\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				→\r\n			</td>\r\n			<td>\r\n				→\r\n			</td>\r\n			<td>\r\n				→\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				↓\r\n			</td>\r\n			<td>\r\n				↓\r\n			</td>\r\n			<td>\r\n				↓\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				↔\r\n			</td>\r\n			<td>\r\n				↔\r\n			</td>\r\n			<td>\r\n				↔\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				↵\r\n			</td>\r\n			<td>\r\n				↵\r\n			</td>\r\n			<td>\r\n				↵\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⇐\r\n			</td>\r\n			<td>\r\n				⇐\r\n			</td>\r\n			<td>\r\n				⇐\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⇑\r\n			</td>\r\n			<td>\r\n				⇑\r\n			</td>\r\n			<td>\r\n				⇑\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⇒\r\n			</td>\r\n			<td>\r\n				⇒\r\n			</td>\r\n			<td>\r\n				⇒\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⇓\r\n			</td>\r\n			<td>\r\n				⇓\r\n			</td>\r\n			<td>\r\n				⇓\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⇔\r\n			</td>\r\n			<td>\r\n				⇔\r\n			</td>\r\n			<td>\r\n				⇔\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∀\r\n			</td>\r\n			<td>\r\n				∀\r\n			</td>\r\n			<td>\r\n				∀\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∂\r\n			</td>\r\n			<td>\r\n				∂\r\n			</td>\r\n			<td>\r\n				∂\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∃\r\n			</td>\r\n			<td>\r\n				∃\r\n			</td>\r\n			<td>\r\n				∃\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∅\r\n			</td>\r\n			<td>\r\n				∅\r\n			</td>\r\n			<td>\r\n				∅\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∇\r\n			</td>\r\n			<td>\r\n				∇\r\n			</td>\r\n			<td>\r\n				∇\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∈\r\n			</td>\r\n			<td>\r\n				∈\r\n			</td>\r\n			<td>\r\n				∈\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∉\r\n			</td>\r\n			<td>\r\n				∉\r\n			</td>\r\n			<td>\r\n				∉\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∋\r\n			</td>\r\n			<td>\r\n				∋\r\n			</td>\r\n			<td>\r\n				∋\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∏\r\n			</td>\r\n			<td>\r\n				∏\r\n			</td>\r\n			<td>\r\n				∏\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∑\r\n			</td>\r\n			<td>\r\n				∑\r\n			</td>\r\n			<td>\r\n				−\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				−\r\n			</td>\r\n			<td>\r\n				−\r\n			</td>\r\n			<td>\r\n				−\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∗\r\n			</td>\r\n			<td>\r\n				∗\r\n			</td>\r\n			<td>\r\n				∗\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				√\r\n			</td>\r\n			<td>\r\n				√\r\n			</td>\r\n			<td>\r\n				√\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∝\r\n			</td>\r\n			<td>\r\n				∝\r\n			</td>\r\n			<td>\r\n				∝\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∞\r\n			</td>\r\n			<td>\r\n				∞\r\n			</td>\r\n			<td>\r\n				∞\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∠\r\n			</td>\r\n			<td>\r\n				∠\r\n			</td>\r\n			<td>\r\n				∠\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∧\r\n			</td>\r\n			<td>\r\n				∧\r\n			</td>\r\n			<td>\r\n				⊥\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∨\r\n			</td>\r\n			<td>\r\n				∨\r\n			</td>\r\n			<td>\r\n				⊦\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∩\r\n			</td>\r\n			<td>\r\n				∩\r\n			</td>\r\n			<td>\r\n				∩\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∪\r\n			</td>\r\n			<td>\r\n				∪\r\n			</td>\r\n			<td>\r\n				∪\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∫\r\n			</td>\r\n			<td>\r\n				∫\r\n			</td>\r\n			<td>\r\n				∫\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∴\r\n			</td>\r\n			<td>\r\n				∴\r\n			</td>\r\n			<td>\r\n				∴\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				∼\r\n			</td>\r\n			<td>\r\n				∼\r\n			</td>\r\n			<td>\r\n				∼\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≅\r\n			</td>\r\n			<td>\r\n				≅\r\n			</td>\r\n			<td>\r\n				≅\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≈\r\n			</td>\r\n			<td>\r\n				≈\r\n			</td>\r\n			<td>\r\n				≅\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≠\r\n			</td>\r\n			<td>\r\n				≠\r\n			</td>\r\n			<td>\r\n				≠\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≡\r\n			</td>\r\n			<td>\r\n				≡\r\n			</td>\r\n			<td>\r\n				≡\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≤\r\n			</td>\r\n			<td>\r\n				≤\r\n			</td>\r\n			<td>\r\n				≤\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				≥\r\n			</td>\r\n			<td>\r\n				≥\r\n			</td>\r\n			<td>\r\n				≥\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊂\r\n			</td>\r\n			<td>\r\n				⊂\r\n			</td>\r\n			<td>\r\n				⊂\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊃\r\n			</td>\r\n			<td>\r\n				⊃\r\n			</td>\r\n			<td>\r\n				⊃\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊄\r\n			</td>\r\n			<td>\r\n				⊄\r\n			</td>\r\n			<td>\r\n				⊄\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊆\r\n			</td>\r\n			<td>\r\n				⊆\r\n			</td>\r\n			<td>\r\n				⊆\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊇\r\n			</td>\r\n			<td>\r\n				⊇\r\n			</td>\r\n			<td>\r\n				⊇\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊕\r\n			</td>\r\n			<td>\r\n				⊕\r\n			</td>\r\n			<td>\r\n				⊕\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊗\r\n			</td>\r\n			<td>\r\n				⊗\r\n			</td>\r\n			<td>\r\n				⊗\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⊥\r\n			</td>\r\n			<td>\r\n				⊥\r\n			</td>\r\n			<td>\r\n				⊥\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⋅\r\n			</td>\r\n			<td>\r\n				⋅\r\n			</td>\r\n			<td>\r\n				⋅\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⌈\r\n			</td>\r\n			<td>\r\n				⌈\r\n			</td>\r\n			<td>\r\n				⌈\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⌉\r\n			</td>\r\n			<td>\r\n				⌉\r\n			</td>\r\n			<td>\r\n				⌉\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⌊\r\n			</td>\r\n			<td>\r\n				⌊\r\n			</td>\r\n			<td>\r\n				⌊\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				⌋\r\n			</td>\r\n			<td>\r\n				⌋\r\n			</td>\r\n			<td>\r\n				⌋\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				◊\r\n			</td>\r\n			<td>\r\n				◊\r\n			</td>\r\n			<td>\r\n				◊\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				♠\r\n			</td>\r\n			<td>\r\n				♠\r\n			</td>\r\n			<td>\r\n				♠\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				♣\r\n			</td>\r\n			<td>\r\n				♣\r\n			</td>\r\n			<td>\r\n				♣\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				♥\r\n			</td>\r\n			<td>\r\n				♥\r\n			</td>\r\n			<td>\r\n				♥\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				♦\r\n			</td>\r\n			<td>\r\n				♦\r\n			</td>\r\n			<td>\r\n				♦\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¡\r\n			</td>\r\n			<td>\r\n				¡\r\n			</td>\r\n			<td>\r\n				¡\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¢\r\n			</td>\r\n			<td>\r\n				¢\r\n			</td>\r\n			<td>\r\n				¢\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				£\r\n			</td>\r\n			<td>\r\n				£\r\n			</td>\r\n			<td>\r\n				£\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¤\r\n			</td>\r\n			<td>\r\n				¤\r\n			</td>\r\n			<td>\r\n				¤\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¥\r\n			</td>\r\n			<td>\r\n				¥\r\n			</td>\r\n			<td>\r\n				¥\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¦\r\n			</td>\r\n			<td>\r\n				¦\r\n			</td>\r\n			<td>\r\n				¦\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				§\r\n			</td>\r\n			<td>\r\n				§\r\n			</td>\r\n			<td>\r\n				§\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¨\r\n			</td>\r\n			<td>\r\n				¨\r\n			</td>\r\n			<td>\r\n				¨\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				&copy;\r\n			</td>\r\n			<td>\r\n				&copy;\r\n			</td>\r\n			<td>\r\n				&copy;\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				ª\r\n			</td>\r\n			<td>\r\n				ª\r\n			</td>\r\n			<td>\r\n				ª\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				«\r\n			</td>\r\n			<td>\r\n				«\r\n			</td>\r\n			<td>\r\n				«\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¬\r\n			</td>\r\n			<td>\r\n				¬\r\n			</td>\r\n			<td>\r\n				¬\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				<br />\r\n			</td>\r\n			<td>\r\n				­\r\n			</td>\r\n			<td>\r\n				­\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				®\r\n			</td>\r\n			<td>\r\n				®\r\n			</td>\r\n			<td>\r\n				®\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				¯\r\n			</td>\r\n			<td>\r\n				¯\r\n			</td>\r\n			<td>\r\n				¯\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				°\r\n			</td>\r\n			<td>\r\n				°\r\n			</td>\r\n			<td>\r\n				°\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				±\r\n			</td>\r\n			<td>\r\n				±\r\n			</td>\r\n			<td>\r\n				±\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				²\r\n			</td>\r\n			<td>\r\n				²\r\n			</td>\r\n			<td>\r\n				²\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				³\r\n			</td>\r\n			<td>\r\n				³\r\n			</td>\r\n			<td>\r\n				³\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				´\r\n			</td>\r\n			<td>\r\n				´\r\n			</td>\r\n			<td>\r\n				´\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				µ\r\n			</td>\r\n			<td>\r\n				µ\r\n			</td>\r\n			<td>\r\n				µ\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				\"\r\n			</td>\r\n			<td>\r\n				\"\r\n			</td>\r\n			<td>\r\n				\"\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				&lt;\r\n			</td>\r\n			<td>\r\n				&lt;\r\n			</td>\r\n			<td>\r\n				&lt;\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				&gt;\r\n			</td>\r\n			<td>\r\n				&gt;\r\n			</td>\r\n			<td>\r\n				&gt;\r\n			</td>\r\n			<td align=\"center\" bgcolor=\"#F6F6F6\">\r\n				\'\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td>\r\n				\'\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>',NULL,0),(2,2,1368289937,1368340536,'百度','1,2,4','<div id=\"content\" style=\"text-align:center;font-family:arial;background-color:#FFFFFF;\">\r\n	<p id=\"lg\">\r\n		<img src=\"http://www.baidu.com/img/0512_67be3ae792002ac6e54bf1c0a0307080.gif\" height=\"129\" width=\"270\" /> \r\n	</p>\r\n	<p>\r\n		母亲节快乐\r\n	</p>\r\n	<p>\r\n		<a class=\"ke-insertfile\" href=\"/A/Public/file/518e83d5b5508.zip\" target=\"_blank\">附件</a> \r\n	</p>\r\n	<p>\r\n		<img src=\"/A/Public/image/518e79ce91b8f.png\" alt=\"\" /> \r\n	</p>\r\n</div>',NULL,0);
/*!40000 ALTER TABLE `think_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_article_type`
--

DROP TABLE IF EXISTS `think_article_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_article_type` (
  `at_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_article_type`
--

LOCK TABLES `think_article_type` WRITE;
/*!40000 ALTER TABLE `think_article_type` DISABLE KEYS */;
INSERT INTO `think_article_type` VALUES (1,'工作通知'),(2,'新闻公告'),(3,'文件政策'),(4,'会员风采');
/*!40000 ALTER TABLE `think_article_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_award_type`
--

DROP TABLE IF EXISTS `think_award_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_award_type` (
  `at_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `form` text,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_award_type`
--

LOCK TABLES `think_award_type` WRITE;
/*!40000 ALTER TABLE `think_award_type` DISABLE KEYS */;
INSERT INTO `think_award_type` VALUES (100,'红棉奖',NULL),(101,'先进个人',NULL),(102,'精品项目',NULL),(103,'先进团队',NULL);
/*!40000 ALTER TABLE `think_award_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_file`
--

DROP TABLE IF EXISTS `think_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_file` (
  `f_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `savepath` varchar(60) NOT NULL,
  `savename` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` enum('image','flash','media','file') NOT NULL,
  `size` int(10) unsigned NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_file`
--

LOCK TABLES `think_file` WRITE;
/*!40000 ALTER TABLE `think_file` DISABLE KEYS */;
INSERT INTO `think_file` VALUES (1,'2013-05-12','Public/image/','518e79ce91b8f.png','image.png','image',9247),(2,'2013-05-12','Public/file/','518e83d5b5508.zip','bootstrap.zip','file',85566);
/*!40000 ALTER TABLE `think_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_user`
--

DROP TABLE IF EXISTS `think_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_user` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `us_id` int(10) unsigned NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `privilege` tinyint(2) unsigned NOT NULL,
  `last_login` int(10) unsigned NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `is_director` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_user`
--

LOCK TABLES `think_user` WRITE;
/*!40000 ALTER TABLE `think_user` DISABLE KEYS */;
INSERT INTO `think_user` VALUES (1,0,'root','6e8bf7149b4232943a862863f5f41253','管理员',0,1368260802,'','',0,1),(2,0,'admin','d5a781e5ce5c43f6eca05da796a75c0c','广东省高校学生工作专业委员会',1,1368336703,'','',0,1),(3,0,'gdsjyt','e70a6f2d71f43f900340e7e6b5ccf771','广东省教育厅',2,0,'','',1,1),(4,0,'zsdx','a327b0097c5772b1b97b48e4d75142a7','中山大学',2,0,'','',1,1),(5,0,'hnlgdx','e4dcc6bdf5c8ac8203e4bf61f70dc468','华南理工大学',2,0,'','',1,1),(6,0,'jndx','f7dfb29f983f34564ae4d633d0e2b2e2','暨南大学',2,0,'','',1,1),(7,0,'hnnydx','5be7b776bab3260817b3d0668b1c8d95','华南农业大学',2,0,'','',1,1),(8,0,'nfykdx','b89caf2acd75115c268c90c504d4b2b2','南方医科大学',2,0,'','',1,1),(9,0,'gzzyydx','6b978f69a568de009066e47205d0f4d5','广州中医药大学',2,0,'','',1,1),(10,0,'hnsfdx','07208847e75f0d76f1ba4d357eb4a6b4','华南师范大学',2,0,'','',1,1),(11,0,'gdgydx','3179c2008a2d2a2aa6df7a6e5cf86fe9','广东工业大学',2,0,'','',1,1),(12,0,'gdwywmdx','9fa154ac2891d99fb560a67c880e836f','广东外语外贸大学',2,0,'','',1,1),(13,0,'stdx','f11baebdc108d17e6676f55af5ef461c','汕头大学',2,0,'','',1,1),(14,0,'gdsxy','24f609bd2ad76a9145533224294ed120','广东商学院',2,0,'','',1,1),(15,0,'gdyxy','c83f848fdf962943c3d5f5d0901b5c20','广东医学院',2,0,'','',0,1),(16,0,'gdhydx','8fe408f65ed2f9327798444344e609df','广东海洋大学',2,0,'','',0,1),(17,0,'zknygcxy','cc6f067419e94c6a529f37b92b627728','仲恺农业工程学院',2,0,'','',0,1),(18,0,'gdyaoxy','729dd8d0f8a69bf45f9e3eb77a2d9ac1','广东药学院',2,0,'','',0,1),(19,0,'xhyyxy','8250082c1748e41e61337ae060f3acad','星海音乐学院',2,0,'','',1,1),(20,0,'gzmsxy','4c416b62e9e1862aec8d397ce4d6f7fd','广州美术学院',2,0,'','',0,1),(21,0,'gztixy','5f1648c3ee4778a458d0f262340fdabf','广州体育学院',2,0,'','',0,1),(22,0,'gdjssfxy','a5ff64ec262d062b62609511d335b7c6','广东技术师范学院',2,0,'','',0,1),(23,0,'zjsfxy','9896f96bcee7f587367c0bef2990f7b2','湛江师范学院',2,0,'','',0,1),(24,0,'hssfxy','8c7a47797a0833c6b29221a4884f3cfb','韩山师范学院',2,0,'','',0,1),(25,0,'gdsyhgxy','a8e38a97c514200ed2f41fe79b4c989c','广东石油化工学院',2,0,'','',0,1),(26,0,'gdjrxy','2ab587bd14fa39361f1f06d3f993e098','广东金融学院',2,0,'','',0,1),(27,0,'gdjgxy','a258b8edd195987a40a6bcf6310af21e','广东警官学院',2,0,'','',0,1),(28,0,'gzdx','94d1008b9cb3672460af3d3a870e7776','广州大学',2,0,'','',1,1),(29,0,'gzyxy','b58cb41e7c8bb6ff260d6438b8c6c22e','广州医学院',2,0,'','',0,1),(30,0,'szdx','007dfa027e06758055a66fe9389b1367','深圳大学',2,0,'','',1,1),(31,0,'sgxy','67b2a5619c6ecfedf85d982a786a8275','韶关学院',2,0,'','',1,1),(32,0,'jyxy','dfa5c0e7e9f6f24aea29e8c5f1e9a153','嘉应学院',2,0,'','',0,1),(33,0,'hzxy','3afed86e9b69daa7dc74823a2a3d6ca2','惠州学院',2,0,'','',1,1),(34,0,'dglgxy','87c70d4b419c66b5a054a85411152c42','东莞理工学院',2,0,'','',0,1),(35,0,'wydx','d958b6513588407a2ba9482b7180a079','五邑大学',2,0,'','',0,1),(36,0,'fskxjsxy','7636a575938cc7a1dfb5871caad447c8','佛山科学技术学院',2,0,'','',0,1),(37,0,'zqxy','910ddfe11a3ff584b0ce3cf38feda724','肇庆学院',2,0,'','',0,1),(38,0,'gzmhzyjsxy','688c432c88437b0205b7282a04c74579','广州名航职业技术学院',2,0,'','',0,1),(39,0,'gzhhgdzkxx','29124056f800d06c35de5776454f00f8','广州航海高等专科学校',2,0,'','',0,1),(40,0,'gdwyyszyxy','e4c79940089d6a097b5daea830a14543','广东外语艺术职业学院',2,0,'','',0,1),(41,0,'gdjdzyjsxy','b146aba6ada274cd135bbd54051b3a5d','广东机电职业技术学院',2,0,'','',0,1),(42,0,'gdgmzyjsxy','4fbf8c110f6374e56211765f88d36765','广东工贸职业技术学院',2,0,'','',0,1),(43,0,'gdzyjsxy','588f774f067826e9e0a1dbb1b7bee19a','广东职业技术学院',2,0,'','',0,1),(44,0,'gdjszyjsxy','994fc86801557f10d11dcd47e5f9c009','广东建设职业技术学院',2,0,'','',0,1),(45,0,'gdlgzyxy','5ddcbe8f95189bf32f7c5f92f99774ba','广东理工职业学院',2,0,'','',0,1),(46,0,'gdkxjszyxy','ad4c453a2fb95a4944c774def2e485a4','广东科学技术职业学院',2,0,'','',0,1),(47,0,'gdjtzyjsxy','4c77520ef13f313d1913cb2c0df8493a','广东交通职业技术学院',2,0,'','',0,1),(48,0,'gdsldlzyjsxy','b549a937b520c08452b134d9e9bc1bdd','广东水利电力职业技术学院',2,0,'','',0,1),(49,0,'gdsfjgzyxy','5880bd0d1ddb538794deaf005b759b73','广东司法警官职业学院',2,0,'','',0,1),(50,0,'gdxzzyxy','21084377b02bf45e2784f17f31e1b210','广东行政职业学院',2,0,'','',0,1),(51,0,'gdtyzyjsxy','f2814616ed387ea18f45f6136b161447','广东体育职业技术学院',2,0,'','',0,1),(52,0,'gdwyzyxy','1db0912cd09cbd180ee66742902a1187','广东文艺职业学院',2,0,'','',0,1),(53,0,'gdspypzyxy','175f1d20bb3524594828ea97926d7323','广东食品药品职业学院',2,0,'','',0,1),(54,0,'gdnzzyjsxy','3209f907b7d804e62175d157daa6b03c','广东女子职业技术学院',2,0,'','',0,1),(55,0,'gdsszyjsxy','8bb1400f0fce942cc588e545492a5ac9','广东松山职业技术学院',2,0,'','',0,1),(56,0,'gdngszyjsxy','728ae5c03e057121e29e77dd1b607a6f','广东农工商职业技术学院',2,0,'','',0,1),(57,0,'gdydzyjsxy','f3b26e8db51c37547c5efa4d86aa7d5b','广东邮电职业技术学院',2,0,'','',0,1);
/*!40000 ALTER TABLE `think_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_users`
--

DROP TABLE IF EXISTS `think_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_users` (
  `us_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(10) unsigned NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(60) NOT NULL,
  `office_number` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_users`
--

LOCK TABLES `think_users` WRITE;
/*!40000 ALTER TABLE `think_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-12 14:38:12
