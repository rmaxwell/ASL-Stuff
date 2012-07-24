# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: magicstuff
# Generation Time: 2012-07-21 16:55:26 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(120) NOT NULL DEFAULT '',
  `album_desc` text NOT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table bio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bio`;

CREATE TABLE `bio` (
  `bio_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bio_text` text NOT NULL,
  PRIMARY KEY (`bio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table bio_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bio_photos`;

CREATE TABLE `bio_photos` (
  `bio_photo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bio_photo_path` varchar(100) NOT NULL DEFAULT '',
  `bio_photo_desc` text NOT NULL,
  `bio_photo_title` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`bio_photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table blogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(80) NOT NULL,
  `blog_description` text,
  `blog_visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_description`, `blog_visible`)
VALUES
	(3,'The most unfair thing about life is the way it ends.',NULL,0);

/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table booking_contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `booking_contacts`;

CREATE TABLE `booking_contacts` (
  `booking_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_phone` varchar(14) DEFAULT '',
  `booking_email` varchar(50) DEFAULT NULL,
  `date_uploaded` datetime DEFAULT NULL,
  `booking_textarea` varchar(1000) DEFAULT NULL,
  `booking_image1` varchar(50) DEFAULT NULL,
  `booking_image2` varchar(50) DEFAULT NULL,
  `booking_image3` varchar(50) DEFAULT NULL,
  `booking_image4` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table home_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home_content`;

CREATE TABLE `home_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photoPath` varchar(255) DEFAULT NULL,
  `mainContent` text,
  `media` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `home_content` WRITE;
/*!40000 ALTER TABLE `home_content` DISABLE KEYS */;

INSERT INTO `home_content` (`id`, `photoPath`, `mainContent`, `media`)
VALUES
	(2,NULL,NULL,NULL);

/*!40000 ALTER TABLE `home_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table membership
# ------------------------------------------------------------

DROP TABLE IF EXISTS `membership`;

CREATE TABLE `membership` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL DEFAULT '',
  `date_uploaded` datetime NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `membership` WRITE;
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;

INSERT INTO `membership` (`user_id`, `password`, `first_name`, `last_name`, `email_address`, `date_uploaded`, `username`)
VALUES
	(1,'546fa9501a436d4615b798f856386ba8','Chris',0,'aerosakui@yahoo.com','0000-00-00 00:00:00','tazmo');

/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nav
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nav`;

CREATE TABLE `nav` (
  `nav_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nav_url_link` varchar(120) DEFAULT NULL,
  `nav_url_name` varchar(25) DEFAULT NULL,
  `date_uploaded` datetime DEFAULT NULL,
  `nav_enable` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`nav_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `photo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `photo_title` varchar(100) NOT NULL DEFAULT '',
  `photo_desc` text NOT NULL,
  `photo_path` varchar(120) NOT NULL DEFAULT '',
  `date_uploaded` datetime NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `album_id` (`album_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `photos_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `blog_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(140) NOT NULL DEFAULT '',
  `post_desc` text,
  `post_photo_title` varchar(80) DEFAULT '',
  `post_photo_path` varchar(120) DEFAULT '',
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `blogPost` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`blog_id`, `post_id`, `post_title`, `post_desc`, `post_photo_title`, `post_photo_path`, `date_updated`)
VALUES
	(3,95,'qwertyu','dyfughjkbvhgf','dfghj','http://localhost:8888/magicstuff/images/blog/posts/resize/20120721Aliquote.jpg','2012-07-21 16:06:18');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thumbnails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `thumbnails`;

CREATE TABLE `thumbnails` (
  `thumbnail_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `alt_tag` varchar(140) DEFAULT NULL,
  `thumbnail_path` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`thumbnail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `video_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `video_path` varchar(100) NOT NULL DEFAULT '',
  `video_title` varchar(80) NOT NULL DEFAULT '',
  `video_desc` text NOT NULL,
  `video_length` varchar(5) NOT NULL DEFAULT '',
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
