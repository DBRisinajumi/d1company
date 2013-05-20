/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.29-MariaDB : Database - p3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`p3` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `ccmp_company` */

DROP TABLE IF EXISTS `ccmp_company`;

CREATE TABLE `ccmp_company` (
  `ccmp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ccmp_name` varchar(200) NOT NULL,
  `ccmp_ccnt_id` smallint(6) unsigned DEFAULT NULL COMMENT 'contry',
  `ccmp_registrtion_no` varchar(20) DEFAULT NULL,
  `ccmp_vat_registrtion_no` varchar(20) DEFAULT NULL,
  `ccmp_registration_address` varchar(200) DEFAULT NULL,
  `ccmp_official_address` varchar(200) DEFAULT NULL,
  `ccmp_statuss` enum('ACTIVE','CLOSED') DEFAULT 'ACTIVE',
  `ccmp_description` text,
  PRIMARY KEY (`ccmp_id`),
  KEY `ccmp_ccnt_id` (`ccmp_ccnt_id`),
  KEY `ccmp_name` (`ccmp_name`(4)),
  CONSTRAINT `ccmp_company_ibfk_1` FOREIGN KEY (`ccmp_ccnt_id`) REFERENCES `ccnt_country` (`ccnt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
