# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: magicstuff
# Generation Time: 2012-07-27 17:00:55 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table post_slots
# ------------------------------------------------------------

DROP TABLE IF EXISTS `post_slots`;

CREATE TABLE `post_slots` (
  `post_slot_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `image_thumb` text,
  `image_main` text,
  `video_link` text,
  `content_is` varchar(20) NOT NULL DEFAULT '',
  `position` int(1) NOT NULL,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`post_slot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `post_slots` WRITE;
/*!40000 ALTER TABLE `post_slots` DISABLE KEYS */;

INSERT INTO `post_slots` (`post_slot_id`, `post_id`, `image_thumb`, `image_main`, `video_link`, `content_is`, `position`, `last_updated`)
VALUES
	(1,95,'http://localhost:8888/magicstuff/images/blog/thumb/20120727adidas-impossibleisnothingali.jpg','http://localhost:8888/magicstuff/images/blog/resize/20120727adidas-impossibleisnothingali.jpg','','photo',1,'2012-07-27 16:28:55'),
	(2,95,NULL,NULL,'&lt;iframe width=\"460\" height=\"280\" src=\"http://www.youtube.com/embed/fgSodYhkDwE?rel=0\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;','video',2,'2012-07-27 16:38:07');

/*!40000 ALTER TABLE `post_slots` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
