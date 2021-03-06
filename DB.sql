/*
SQLyog Community
MySQL - 10.4.6-MariaDB : Database - php_blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php_blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `php_blog`;

/*Table structure for table `article` */

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `boardId` int(10) unsigned NOT NULL,
  `memberId` int(10) unsigned NOT NULL,
  `displayStatus` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `article` */

insert  into `article`(`id`,`regDate`,`updateDate`,`title`,`body`,`boardId`,`memberId`,`displayStatus`) values 
(1,'2020-09-28 09:26:23','2020-09-28 10:06:59','1번글','안녕하세여 ㅋㅋㅋㅋ',1,1,1),
(2,'2020-09-28 09:26:32','2020-09-28 10:07:08','2번글','안녕하세여2 ㅋㅋㅋㅋ',2,1,1),
(3,'2020-09-28 09:43:18','2020-09-28 10:07:15','3번글','안녕하세여3 ㅋㅋㅋㅋ',2,1,1),
(4,'2020-09-28 09:43:24','2020-09-28 10:07:32','4번글','안녕하세여4 ㅋㅋㅋㅋ',3,1,1),
(5,'2020-09-28 11:43:08','0000-00-00 00:00:00','','',1,0,0),
(6,'2020-09-28 11:43:58','0000-00-00 00:00:00','','',1,0,0),
(7,'2020-09-28 11:44:13','0000-00-00 00:00:00','','',1,0,0),
(8,'2020-09-28 11:45:00','0000-00-00 00:00:00','123','$123',1,0,0),
(9,'2020-09-28 11:45:29','0000-00-00 00:00:00','123','123',1,1,1),
(10,'2020-09-28 11:59:25','0000-00-00 00:00:00','dasdsa','asdasd',1,1,1),
(11,'2020-09-28 11:59:31','0000-00-00 00:00:00','asdsaasdsad','asdsad',1,1,1);

/*Table structure for table `board` */

CREATE TABLE `board` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regDate` datetime NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `board` */

insert  into `board`(`id`,`regDate`,`name`) values 
(1,'2020-09-28 10:01:08','일상'),
(2,'2020-09-28 10:01:13','IT'),
(3,'2020-09-28 10:01:17','GIT');

/*Table structure for table `member` */

CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `regDate` datetime NOT NULL,
  `updateDate` datetime DEFAULT NULL,
  `loginId` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `loginPw` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(155) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `member` */

insert  into `member`(`id`,`regDate`,`updateDate`,`loginId`,`loginPw`,`name`,`nickname`,`email`) values 
(1,'2020-09-28 12:18:53','2020-09-28 12:18:53','dureotkd','slsksh33','신성민','까리하게한방','dureotkd123@naver.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
