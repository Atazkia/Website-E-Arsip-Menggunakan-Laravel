/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - arsipsurat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`arsipsurat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `arsipsurat`;

/*Table structure for table `arsipsurat` */

DROP TABLE IF EXISTS `arsipsurat`;

CREATE TABLE `arsipsurat` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nomer_surat` varchar(12) DEFAULT NULL,
  `id_kategori` int(4) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `arsipsurat` */

insert  into `arsipsurat`(`id`,`nomer_surat`,`id_kategori`,`judul`,`file`,`created_at`,`updated_at`) values 
(8,'123',1,'undangan dinas','1637675183_danang skpi 1.pdf','2021-11-23 13:46:23','2021-11-23 13:46:23');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`kategori`) values 
(1,'UNDANGAN'),
(2,'PENGUMUMAN'),
(3,'NOTA DINAS'),
(4,'PEMBERITAHUAN');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
