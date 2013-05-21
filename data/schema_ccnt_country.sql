

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ccnt_country` */

DROP TABLE IF EXISTS `ccnt_country`;

CREATE TABLE `ccnt_country` (
  `ccnt_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ccnt_code` char(3) CHARACTER SET ascii NOT NULL,
  `ccnt_name` varchar(200) NOT NULL,
  PRIMARY KEY (`ccnt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ccnt_country` */

LOCK TABLES `ccnt_country` WRITE;

insert  into `ccnt_country`(`ccnt_id`,`ccnt_code`,`ccnt_name`) values (1,'LT','Lietuva'),(2,'LV','Latvija');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
