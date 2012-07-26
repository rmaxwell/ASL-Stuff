# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: magicstuff
# Generation Time: 2012-07-26 13:23:34 -0400
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

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;

INSERT INTO `albums` (`album_id`, `album_title`, `album_desc`, `date_uploaded`)
VALUES
	(5,'Test Album','','2012-07-26 10:14:08'),
	(6,'Stunts','','2012-07-26 10:53:34');

/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bio`;

CREATE TABLE `bio` (
  `bio_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bio_title` varchar(15) DEFAULT NULL,
  `bio_text1` text NOT NULL,
  `bio_text2` text NOT NULL,
  `bio_flavor` text NOT NULL,
  `bio_button` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`bio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bio` WRITE;
/*!40000 ALTER TABLE `bio` DISABLE KEYS */;

INSERT INTO `bio` (`bio_id`, `bio_title`, `bio_text1`, `bio_text2`, `bio_flavor`, `bio_button`)
VALUES
	(1,'Stuffs Bio','<span class=\"big\"> O</span>n October 27, 1998 a large egg was discovered in front of the Amway Arena. No one is sure what planet it came from or how it arrived in Orlando. Witnesses, however, report a giant explosion followed by a shower of deflated basketballs, Orlando Magic bumper stickers and puffs of green smoke. What emerged after that was a dragon with so much spirit, he just had to be the Magic\'s Mascot. <span id=\"stuffspan\">STUFF</span> is one of the most recognizable mascots in professional sports. <span id=\"stuffspan\">STUFF</span> made his community debut at Church Street Station on Halloween night of 1988. He was an instant success and has since relished his role as the team \"funny guy.\" Full of energy and spark, he is guaranteed to bring a smile to the faces of fans both young and old.</p>\n<p>&nbsp;\n','<p>Though his job is to represent the Magic, <span id=\"stuffspan\">STUFF</span> has gained his own fan-base along the way. His antics as a boisterous and persistent show-off are a hit with everyone. If you are lucky, you may even see the wild wackiness of <span id=\"stuffspan\">STUFF\'s</span> inflatable alter ego, Air <span id=\"stuffspan\">STUFF</span> or perhaps you\'ve has an opportunity to meet <span id=\"stuffspan\">Mini STUFF</span>! <span id=\"stuffspan\">STUFF</span> can be found at every home Magic game and most Magic-related activities, as well as civic and social events throughout Central Florida.</p>','<p>\"What emerged after that was a dragon with so much spirit, he just had to be the Magic\'s Mascot.\"</p>','STUFF\'s Bio');

/*!40000 ALTER TABLE `bio` ENABLE KEYS */;
UNLOCK TABLES;


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



# Dump of table blog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_date` datetime DEFAULT NULL,
  `blog_content` text NOT NULL,
  `blog_title` varchar(80) NOT NULL DEFAULT '',
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table blog_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_photos`;

CREATE TABLE `blog_photos` (
  `blog_photo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blog_photo_title` varchar(80) NOT NULL DEFAULT '',
  `blog_photo_desc` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_photo_path` varchar(120) NOT NULL DEFAULT '',
  `date_uploaded` datetime DEFAULT NULL,
  PRIMARY KEY (`blog_photo_id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `blog_photos_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
	(5,'13 Before 13',NULL,1);

/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table booking_contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `booking_contacts`;

CREATE TABLE `booking_contacts` (
  `booking_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `booking_phone` varchar(14) DEFAULT '',
  `booking_email` varchar(50) DEFAULT NULL,
  `date_updated` varchar(50) DEFAULT NULL,
  `booking_textarea` text,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `booking_contacts` WRITE;
/*!40000 ALTER TABLE `booking_contacts` DISABLE KEYS */;

INSERT INTO `booking_contacts` (`booking_id`, `booking_phone`, `booking_email`, `date_updated`, `booking_textarea`)
VALUES
	(1,' 407-916-2675','STUFF@orlandomagic.com','07-24-2012\n','<p><span>STUFF</span> can be seen entertaining 20,000 fans at the Amway Center during Magic games, he also makes hundreds of appearances year-round in the greater Orlando area. <span>STUFF</span> can bring the fun, energy and excitement of a Magic game to your event.</p>\n<p>This mascot has the right stuff to turn your shindig into a legendary experience. Whether its playing games and shooting silly string at little Jimmy\'s 5th birthday party, dancing and surprising Jessica at her Bat mitzvah or slicing cake and party at Grandma and Grandpa\'s 40th wedding anniversary, <span>STUFF</span> can do it all!</p>\n<h3><span>STUFF</span> is available for:</h3>\n<ul>\n<li>birthday parties</li>\n<li>reunions</li>\n<li>parades</li>\n<li>conventions</li>\n<li>weddings</li>\n<li>business meetings</li>\n<li>grand openings</li>\n<li>assemblies</li>\n<li>high school/college basketball games</li>\n</ul>\n<p>Something different? We can accommodate to several different scenarios. We have ideas to spice up your party, meeting and/or gathering. Just ask!</p>');

/*!40000 ALTER TABLE `booking_contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_users`;

CREATE TABLE `cms_users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_pass` varchar(50) NOT NULL DEFAULT '',
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `internal_email` varchar(50) NOT NULL DEFAULT '',
  `date_uploaded` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table home_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `home_content`;

CREATE TABLE `home_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` text,
  `on_off` int(1) DEFAULT NULL,
  `date_uploaded` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `home_content` WRITE;
/*!40000 ALTER TABLE `home_content` DISABLE KEYS */;

INSERT INTO `home_content` (`id`, `path`, `on_off`, `date_uploaded`)
VALUES
	(1,'&lt;a href=&quot;http://www.google.com&quot;&gt;&lt;img src=&quot;http://localhost:8888/magicstuff/uploads/home/images/slider_image1.jpg&quot;&gt;&lt;/a&gt;',1,'2012-07-24 13:59:49'),
	(2,'&lt;a href=&quot;http://localhost:8888/magicstuff/index.php/bio&quot;&gt;&lt;img src=&quot;http://localhost:8888/magicstuff/uploads/home/images/slider_image2.jpg&quot;&gt;&lt;/a&gt;',1,'2012-07-24 13:12:27'),
	(3,'&lt;img src=&quot;http://localhost:8888/magicstuff/uploads/home/images/slider_image3.jpg&quot;&gt;',1,'2012-07-24 13:09:19'),
	(4,'&lt;img src=&quot;http://localhost:8888/magicstuff/uploads/home/images/slider_image4.jpg&quot;&gt;',1,'2012-07-24 13:09:26'),
	(5,'&lt;img src=&quot;http://localhost:8888/magicstuff/uploads/home/images/slider_image5.jpg&quot;&gt;',1,'2012-07-24 13:09:35');

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
	(1,'546fa9501a436d4615b798f856386ba8','Chris',0,'aerosakui@yahoo.com','0000-00-00 00:00:00','tazmo'),
	(2,'200ceb26807d6bf99fd6f4f0d1ca54d4','Admin',0,'Admin@bleh.com','0000-00-00 00:00:00','Administrator'),
	(3,'750379b5926e9f728aa6c253d37e3792','Hello',0,'Hello@moto.com','0000-00-00 00:00:00','Motorola');

/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `photo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `photo_title` varchar(100) NOT NULL DEFAULT '',
  `photo_path` varchar(120) NOT NULL DEFAULT '',
  `photo_tn` varchar(120) DEFAULT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;

INSERT INTO `photos` (`photo_id`, `album_id`, `photo_title`, `photo_path`, `photo_tn`, `date_uploaded`)
VALUES
	(584,5,'','uploads/gallery/images/Test Album/SKCxK.jpeg','uploads/gallery/thumbs/Test Album/tn_SKCxK.jpeg','2012-07-26 10:14:42'),
	(585,5,'Disney','uploads/gallery/images/Test Album/trHag.jpeg','uploads/gallery/thumbs/Test Album/tn_trHag.jpeg','2012-07-26 10:15:18'),
	(586,5,'','uploads/gallery/images/Test Album/ijustmetyou.jpeg','uploads/gallery/thumbs/Test Album/tn_ijustmetyou.jpeg','2012-07-26 10:15:41'),
	(587,5,'','uploads/gallery/images/Test Album/479808_395405080523674_1272959127_n.jpeg','uploads/gallery/thumbs/Test Album/tn_479808_395405080523674_1272959127_n.jpeg','2012-07-26 10:19:05'),
	(588,6,'DRUM','uploads/gallery/images/Stunts/1.jpg','uploads/gallery/thumbs/Stunts/tn_1.jpg','2012-07-26 10:59:03'),
	(589,6,'','uploads/gallery/images/Stunts/2.jpg','uploads/gallery/thumbs/Stunts/tn_2.jpg','2012-07-26 10:53:50'),
	(590,6,'','uploads/gallery/images/Stunts/3.jpg','uploads/gallery/thumbs/Stunts/tn_3.jpg','2012-07-26 10:53:50'),
	(596,6,'','uploads/gallery/images/Stunts/3.jpg','uploads/gallery/thumbs/Stunts/tn_3.jpg','2012-07-26 10:58:42'),
	(597,6,'','uploads/gallery/images/Stunts/4.jpg','uploads/gallery/thumbs/Stunts/tn_4.jpg','2012-07-26 10:58:42');

/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;


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
	(5,96,'Day 1: Dance off with LMFAO','Magna aliquam erat volutpat ut wisi enim ad minim veniam quis? Sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Legentis in iis qui, facit eorum claritatem Investigationes. Ea commodo consequat duis autem vel eum iriure dolor in hendrerit in vulputate velit. Eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in.\n\nMagna aliquam erat volutpat ut wisi enim ad minim veniam quis? Sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Legentis in iis qui, facit eorum claritatem Investigationes. Ea commodo consequat duis autem vel eum iriure dolor in hendrerit in vulputate velit. Eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in.','Morgan Freeman','http://localhost:8888/magicstuff/images/blog/posts/resize/20120726','2012-07-26 10:52:39');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table school_contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `school_contacts`;

CREATE TABLE `school_contacts` (
  `school_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_phone` varchar(14) DEFAULT '',
  `school_textarea` text,
  `school_email` varchar(250) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `school_contacts` WRITE;
/*!40000 ALTER TABLE `school_contacts` DISABLE KEYS */;

INSERT INTO `school_contacts` (`school_id`, `school_phone`, `school_textarea`, `school_email`, `date_updated`)
VALUES
	(1,' 407-916-2675','<p><span class=\"threee\">STUFF</span> travels the Central Florida area spreading the excitement of the Orlando Magic brand to elementary schools through his school show, \"<span class=\"threee\">STUFF\'s THREEE Point Play.</span>\" That\'s not a typo!  We spell THREEE with three E\'s because the show focus on the three E\'s to becoming a better student...<br><br><span id=\"threee\">Eat Right, Exercise and Education.</span><br><br>\n	<span class=\"threee\">STUFF</span> spreads the message through a 45 minute performance and interactive DVD.  Students get to play a healthy food guessing game with Magic players, get to stand up and dance with <span class=\"threee\">STUFF</span> and also get to read a book titled \"<span class=\"threee\">STUFF\'s Game Day.</span>\" \"<span class=\"threee\">STUFF\'s THREEE Point Play</span>\"\" is filled with Magic, excitement, entertainment, knowledgeable information and fun!</p><br>\n			<p>\n			To see more about \"<span class=\"threee\">STUFF\'s THREEE Point Play</span>\" watch the video or view the photo gallery.\n			</p><br>\n<p>If you are a school administrator, principal or teacher and would like to have \"<span class=\"threee\">STUFF\'s THREE Point Play</span> \"come to your school call <span class=\"threee\">407-916-2675</span> or email <span class=\"threee\">STUFF@orlandomagic.com</span>.</p>','STUFF@orlandomagic.com',NULL);

/*!40000 ALTER TABLE `school_contacts` ENABLE KEYS */;
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
  `video_embed` text NOT NULL,
  `video_title` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`video_id`, `video_embed`, `video_title`)
VALUES
	(1,'<iframe width=\"480\" height=\"360\" src=\"http://www.youtube.com/embed/fLcZbtD83HE\" frameborder=\"0\" allowfullscreen></iframe>','Dunk'),
	(2,'<iframe src=\"http://player.vimeo.com/video/9263568\" width=\"500\" height=\"334\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href=\"http://vimeo.com/9263568\">Stuff Starring in 80\'s Movies</a> from <a href=\"http://vimeo.com/nickschultz\">Nick Schultz</a> on <a href=\"http://vimeo.com\">Vimeo</a>.</p>','80\'s movies'),
	(3,'&lt;iframe width=\"480\" height=\"360\" src=\"http://www.youtube.com/embed/MpfXTkz2UhA\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe>','Highlights');

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
