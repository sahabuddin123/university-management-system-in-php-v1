/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.24 : Database - oas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `oas`;

/*Table structure for table `t_admin` */

DROP TABLE IF EXISTS `t_admin`;

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_admin` */

insert  into `t_admin`(`ad_id`,`ad_name`,`ad_pswd`,`ad_eml`) values ('110102','sahabuddin','01867033550','sahabuddinriyaj984@gmail.com');

/*Table structure for table `t_status` */

DROP TABLE IF EXISTS `t_status`;

CREATE TABLE `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL,
  KEY `s_id` (`s_id`),
  CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_status` */

insert  into `t_status`(`s_id`,`s_stat`) values ('CUTM00013','Applied');

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` int(10) NOT NULL,
  `s_phn2` int(10) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `f_occ` varchar(45) NOT NULL,
  `f_phn` int(10) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `m_occ` varchar(45) NOT NULL,
  `m_phn` int(10) NOT NULL,
  `s_iop` int(10) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(50) NOT NULL,
  `s_cst` varchar(20) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` int(10) NOT NULL,
  `s_padr` varchar(50) NOT NULL,
  `s_pst` varchar(20) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` int(10) NOT NULL,
  `s_ruc` varchar(10) NOT NULL,
  `s_natn` varchar(10) NOT NULL,
  `s_relg` varchar(10) DEFAULT NULL,
  `s_catg` varchar(3) NOT NULL,
  `s_mainsxam` varchar(20) NOT NULL,
  `s_mainsrank` varchar(10) NOT NULL,
  `s_mainsroll` varchar(20) NOT NULL,
  `s_mainsbrnch` varchar(45) NOT NULL,
  `s_branch` varchar(60) NOT NULL,
  `s_college` varchar(255) NOT NULL,
  `s_center` varchar(20) NOT NULL,
  `s_crtype` varchar(10) NOT NULL,
  `s_pcm` varchar(10) NOT NULL,
  `s_tenbrd` varchar(7) NOT NULL,
  `s_tenyop` varchar(4) NOT NULL,
  `s_tentotmark` varchar(4) NOT NULL,
  `s_tenmarkob` varchar(4) NOT NULL,
  `s_tendiv` varchar(4) NOT NULL,
  `s_tenprcmark` varchar(4) NOT NULL,
  `s_twlbrd` varchar(7) NOT NULL,
  `s_twlyop` varchar(4) NOT NULL,
  `s_twltotmark` varchar(4) NOT NULL,
  `s_twlmarkob` varchar(4) NOT NULL,
  `s_twldiv` varchar(4) NOT NULL,
  `s_twlprcmark` varchar(4) NOT NULL,
  `s_moi` varchar(8) NOT NULL,
  `s_pay` varchar(4) NOT NULL,
  PRIMARY KEY (`s_detid`),
  KEY `s_id` (`s_id`),
  CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`s_detid`,`s_id`,`s_phn1`,`s_phn2`,`f_name`,`f_occ`,`f_phn`,`m_name`,`m_occ`,`m_phn`,`s_iop`,`s_sex`,`s_cadr`,`s_cst`,`s_cpin`,`s_cmob`,`s_padr`,`s_pst`,`s_ppin`,`s_pmob`,`s_ruc`,`s_natn`,`s_relg`,`s_catg`,`s_mainsxam`,`s_mainsrank`,`s_mainsroll`,`s_mainsbrnch`,`s_branch`,`s_college`,`s_center`,`s_crtype`,`s_pcm`,`s_tenbrd`,`s_tenyop`,`s_tentotmark`,`s_tenmarkob`,`s_tendiv`,`s_tenprcmark`,`s_twlbrd`,`s_twlyop`,`s_twltotmark`,`s_twlmarkob`,`s_twldiv`,`s_twlprcmark`,`s_moi`,`s_pay`) values ('DE00000005','CUTM00012',1867033550,1867033550,'obaydulhoque','Probashi',1867033550,'Monowara Begum','housewife',1867033550,50000,'Male','Noakhali','Noakhali',0,1867033550,'Noakhali','Noakhali',0,1867033550,'City','Bangladesh','Islam','GEN','JEE MAIN','12','284067','02','COMPUTER SCIENCE AND ENG','CIT','Bhubaneshwar','Regular','80','Madrasa','2015','4.94','5.00','2nd','79%','Technic','2019','3.42','4.00','2nd','70%','Bengali','Self'),('DE00000006','CUTM00013',1867033550,1867033550,'obaydulhoque','Probashi',1867033550,'Monowara Begum','housewife',1867033550,50000,'','Noakhali','Noakhali',0,1867033550,'Noakhali','Noakhali',0,1867033550,'','Bangladesh','Islam','','JEE MAIN','12','284068','02','ELECTRICAL AND ELECTRONICS ENG','Feni Polytechnic Institute','Dhaka','Regular','80','Madrasa','2015','4.94','5.00','2nd','79%',' Techni','2019','3.42','4.00','2nd','70%','Bengali','Self');

/*Table structure for table `t_user_data` */

DROP TABLE IF EXISTS `t_user_data`;

CREATE TABLE `t_user_data` (
  `s_id` varchar(10) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(45) NOT NULL,
  `s_email` varchar(45) NOT NULL,
  `s_mob` varchar(10) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_user_data` */

insert  into `t_user_data`(`s_id`,`s_pwd`,`s_dob`,`s_name`,`s_email`,`s_mob`,`s_signupdate`) values ('CUTM00012','01867033550','1998-02-16','sahabuddin','sahabuddinriyaj984@gmail.com','0186703355','2019-06-07 02:38:21.000000'),('CUTM00013','byqvqx4k','1998-02-16','sahabuddin','sahabuddinriyaj298@gmail.com','0186703355','2019-06-10 22:43:45.000000');

/*Table structure for table `t_userdoc` */

DROP TABLE IF EXISTS `t_userdoc`;

CREATE TABLE `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_tenmarkpic` varchar(200) NOT NULL,
  `s_tencerpic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_idprfpic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL,
  KEY `s_id` (`s_id`),
  CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_userdoc` */

insert  into `t_userdoc`(`s_id`,`s_pic`,`s_tenmarkpic`,`s_tencerpic`,`s_twdmarkpic`,`s_twdcerpic`,`s_idprfpic`,`s_sigpic`) values ('CUTM00013','sahabuddin.jpg','sahabuddin.pdf','file.pdf','sahabuddin.pdf','file.pdf','PEPSI.png','sign.png');

/*Table structure for table `t_usermark` */

DROP TABLE IF EXISTS `t_usermark`;

CREATE TABLE `t_usermark` (
  `s_id` varchar(50) NOT NULL,
  `s_omr` varchar(50) NOT NULL,
  `s_mark` int(5) unsigned NOT NULL,
  KEY `s_id` (`s_id`),
  CONSTRAINT `t_usermark_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_usermark` */

insert  into `t_usermark`(`s_id`,`s_omr`,`s_mark`) values ('CUTM00012','123',400),('CUTM00013','212',201);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
