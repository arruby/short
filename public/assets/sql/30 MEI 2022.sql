/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.17-MariaDB : Database - short
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
-- CREATE DATABASE /*!32312 IF NOT EXISTS*/`short` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- USE `short`;

/*Table structure for table `link` */

DROP TABLE IF EXISTS `link`;

CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_original` text DEFAULT NULL,
  `link_complete` varchar(50) DEFAULT NULL,
  `link_short` varchar(10) DEFAULT NULL,
  `count_accessed` int(11) DEFAULT 0,
  `expires_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_who` int(11) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_who` int(11) DEFAULT 1,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_who` int(11) DEFAULT NULL,
  `active` tinyint(2) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `link` */

insert  into `link`(`id`,`link_original`,`link_complete`,`link_short`,`count_accessed`,`expires_date`,`created_at`,`created_who`,`updated_at`,`updated_who`,`deleted_at`,`deleted_who`,`active`) values 
(1,'https://masprint.id/Halo','https://masprint.id/0cYge','0cYge',0,'2022-05-17 21:33:55','2022-05-17 21:33:55',1,'2022-05-17 21:33:55',1,NULL,NULL,1),
(2,'https://codeigniter.com/user_guide/helpers/text_helper.html','https://masprint.id/0kowC','0kowC',0,'2022-05-17 21:34:58','2022-05-17 21:34:58',1,'2022-05-17 21:34:58',1,NULL,NULL,1),
(3,'https://codeigniter.com/user_guide/helpers/text_helper.html','https://masprint.id/9GIlV','9GIlV',0,'2022-05-17 22:13:49','2022-05-17 22:13:49',1,'2022-05-17 22:13:49',1,NULL,NULL,1),
(4,'https://codeigniter.com/user_guide/helpers/text_helper.html','https://masprint.id/8IoqT','8IoqT',0,'2022-05-17 22:14:45','2022-05-17 22:14:45',1,'2022-05-17 22:14:45',1,NULL,NULL,1),
(5,'https://codeigniter.com/user_guide/helpers/text_helper.html','https://masprint.id/1uceW','1uceW',0,'2022-05-17 22:15:03','2022-05-17 22:15:03',1,'2022-05-17 22:15:03',1,NULL,NULL,1),
(6,'https://pendek.id/juju','https://masprint.id/LoZQ6','LoZQ6',0,'2022-05-17 22:15:40','2022-05-17 22:15:40',1,'2022-05-17 22:15:40',1,NULL,NULL,1),
(7,'https://pendek.id/juju','https://masprint.id/YmE2L','YmE2L',0,'2022-05-17 22:16:51','2022-05-17 22:16:51',1,'2022-05-17 22:16:51',1,NULL,NULL,1),
(8,'https://pendek.id/juju','https://masprint.id/ZAJMO','ZAJMO',0,'2022-05-17 22:17:56','2022-05-17 22:17:56',1,'2022-05-17 22:17:56',1,NULL,NULL,1),
(9,'https://pendek.id/juju','https://masprint.id/A1E2F','A1E2F',0,'2022-05-17 22:19:48','2022-05-17 22:19:48',1,'2022-05-17 22:19:48',1,NULL,NULL,1),
(10,'https://pendek.id/juju','https://masprint.id/fLU0A','fLU0A',0,'2022-05-17 22:20:25','2022-05-17 22:20:25',1,'2022-05-17 22:20:25',1,NULL,NULL,1),
(11,'https://pendek.id/juju','https://masprint.id/gTcJ5','gTcJ5',0,'2022-05-17 22:25:35','2022-05-17 22:25:35',1,'2022-05-17 22:25:35',1,NULL,NULL,1),
(12,'https://pendek.id/juju','https://masprint.id/1YONH','1YONH',0,'2022-05-17 22:34:07','2022-05-17 22:34:07',1,'2022-05-17 22:34:07',1,NULL,NULL,1),
(13,'https://pendek.id/juju','http://localhost:8080C6ire','C6ire',0,'2022-05-17 22:35:14','2022-05-17 22:35:14',1,'2022-05-17 22:35:14',1,NULL,NULL,1),
(14,'https://pendek.id/juju','http://localhost:8080/J8Kho','J8Kho',0,'2022-05-17 22:35:46','2022-05-17 22:35:46',1,'2022-05-17 22:35:46',1,NULL,NULL,1),
(15,'https://codeigniter.com/user_guide/incoming/routing.html#custom-placeholders','http://localhost:8080/CybKw','CybKw',2,'2022-05-18 00:18:54','2022-05-18 00:18:54',1,'2022-05-18 00:25:31',1,NULL,NULL,1),
(16,'https://coolors.co/343434-2f3061-0e34a0-5f5980-dfdfdf','http://localhost:8080/Ryczv','Ryczv',1,'2022-05-18 12:40:26','2022-05-18 12:40:26',1,'2022-05-18 12:40:40',1,NULL,NULL,1),
(17,'https://jembatan.masprint.id','http://localhost:8080/wQhi7','wQhi7',1,'2022-05-23 07:34:20','2022-05-23 07:34:20',1,'2022-05-23 07:34:27',1,NULL,NULL,1),
(18,NULL,NULL,NULL,1,NULL,'2022-05-23 07:38:34',1,'2022-05-23 07:38:34',1,NULL,NULL,1),
(19,'https://getbootstrap.com/docs/5.1/components/modal/','http://localhost:8080/gyQkY','gyQkY',1,'2022-05-23 09:10:28','2022-05-23 09:10:29',1,'2022-05-23 09:10:36',1,NULL,NULL,1);

/*Table structure for table `link_catalog` */

DROP TABLE IF EXISTS `link_catalog`;

CREATE TABLE `link_catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `count_click` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `created_who` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_who` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_who` int(11) DEFAULT NULL,
  `active` tinyint(2) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `link_catalog` */

insert  into `link_catalog`(`id`,`nama`,`link`,`keterangan`,`count_click`,`created_at`,`created_who`,`updated_at`,`updated_who`,`deleted_at`,`deleted_who`,`active`) values 
(1,'Shopee: Tas Transparan','https://masprint.id/1',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,1),
(2,'Tokopedia: Tas Kapas Ringan','https://masprint.id/2',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,1);

/*Table structure for table `user4` */

DROP TABLE IF EXISTS `user4`;

CREATE TABLE `user4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `status` tinyint(3) DEFAULT 1 COMMENT '1=biasa; 2=premium;',
  `active` tinyint(2) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user4` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
