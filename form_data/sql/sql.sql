# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.5.9)
# Database: blog
# Generation Time: 2011-06-18 12:12:36 -0400
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `article` tinytext,
  `notes` text,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`,`title`,`article`,`notes`,`image_id`)
VALUES
	(1,NULL,NULL,NULL,NULL),
	(2,NULL,'test',NULL,NULL),
	(3,NULL,'test',NULL,NULL),
	(4,NULL,'I Like Ron!!!',NULL,NULL),
	(5,'The book of Ron','Rock Star',NULL,NULL),
	(6,'THIS IS LOWERCASE','Ron',NULL,NULL),
	(7,'sdkjfsdkjf kds    d','dfgdfg',NULL,NULL),
	(8,'Book of Ron','How to be a rock star',NULL,NULL),
	(9,'This is my title','This is my article','This is my notes',NULL),
	(10,'Andrew is learning PHP','Great','Having fun!',NULL),
	(11,'\\\' approved=\\\'yes\\\'','sdfsdf','sdfsdf',NULL),
	(12,'Jim O\'Neil','dfdsf','sdfsdfsdf',NULL),
	(13,'Jim O\'Neil','sdfdsf','sfsdfsdf',NULL),
	(14,'I Like to play ball','Baseball','dsfsdfdsf',1),
	(15,'I like hats','Hats','sdfsdf',2),
	(16,'I like hats','Hats','sdfsdf',2),
	(17,'I like hats','Hats','sdfsdf',2),
	(18,'I like hats','Hats','sdfsdf',2),
	(19,'I like hats','Hats','sdfsdf',2),
	(20,'I like hats','Hats','sdfsdf',2),
	(21,'I like hats','Hats','sdfsdf',2),
	(22,'I like hats','Hats','sdfsdf',2),
	(23,'I like hats','Hats','sdfsdf',2),
	(24,'I like hats','Hats','sdfsdf',2),
	(25,'I like hats','Hats','sdfsdf',2),
	(26,'I like hats','Hats','sdfsdf',2),
	(27,'sdfds','sdfdsf','',1),
	(28,'sdfsdf','sdfds','',1),
	(29,'xcvcv','xcvcxv','xcvxcv',3),
	(30,'sdfsdf','sdfdsf','sdfds',1),
	(31,'sdfdsf','sdfdsf','',2),
	(32,'sdfdsf','sdfsdf','sdfsdf',NULL),
	(33,'dsfdsf','sdfsdf','sdfsdf',1),
	(34,'sdfdsf','sdf','sdfsdf',NULL),
	(35,'Boston City','sdfsd','sdfdsf',NULL),
	(36,'dsfdsf','sdfdsf','',NULL);

/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`,`filename`)
VALUES
	(10,'Costa Rican Frog.jpg');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
