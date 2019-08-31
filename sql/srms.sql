/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.24 : Database - srms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`srms` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `srms`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`UserName`,`Password`,`updationDate`) values (1,'sahabuddinriyaj984@gmail.com','01867033550','2019-07-01 21:52:12');

/*Table structure for table `tblclasses` */

DROP TABLE IF EXISTS `tblclasses`;

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tblclasses` */

insert  into `tblclasses`(`id`,`ClassName`,`ClassNameNumeric`,`Section`,`CreationDate`,`UpdationDate`) values (9,'First Semester',66,'2015-16','2019-05-09 01:25:03','2019-05-09 01:27:35'),(10,'Second Semister',66,'2015-16','2019-05-09 02:02:02','0000-00-00 00:00:00'),(11,'Third Semester',66,'2015-16','2019-05-11 17:36:25','0000-00-00 00:00:00'),(12,'Fourth Semister',66,'2015-16','2019-05-11 17:36:57','0000-00-00 00:00:00'),(13,'Fifth Semister',66,'2015-16','2019-05-11 17:37:39','0000-00-00 00:00:00'),(14,'Sixth Semister',66,'2015-16','2019-05-11 17:37:56','0000-00-00 00:00:00'),(15,'Seventh Semister',66,'2015-16','2019-05-11 17:38:20','0000-00-00 00:00:00'),(16,'Eight Semister',66,'2015-16','2019-05-11 17:38:38','0000-00-00 00:00:00');

/*Table structure for table `tblresult` */

DROP TABLE IF EXISTS `tblresult`;

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `gpa` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tblresult` */

insert  into `tblresult`(`id`,`StudentId`,`ClassId`,`SubjectId`,`marks`,`gpa`,`PostingDate`,`UpdationDate`) values (1,6,9,6,130,'3.25','2019-06-14 19:48:47',NULL),(2,6,9,5,135,'3.25','2019-06-14 19:48:48',NULL),(3,6,9,4,140,'3.50','2019-06-14 19:48:48','2019-06-14 19:50:49'),(4,6,9,1,140,'3.50','2019-06-14 19:48:48',NULL),(5,6,9,7,45,'4.00','2019-06-14 19:48:48',NULL),(6,6,9,3,70,'3.50','2019-06-14 19:48:48',NULL),(7,6,9,2,140,'3.50','2019-06-14 19:48:48',NULL),(8,8,10,11,80,'4.00','2019-06-16 13:48:06',NULL),(9,8,10,14,80,'4.00','2019-06-16 13:48:06',NULL),(10,8,10,13,70,'3.50','2019-06-16 13:48:06',NULL),(11,8,10,15,150,'3.75','2019-06-16 13:48:07',NULL),(12,8,10,10,75,'3.75','2019-06-16 13:48:07',NULL),(13,8,10,8,140,'3.50','2019-06-16 13:48:07',NULL),(14,8,10,12,48,'4.00','2019-06-16 13:48:07',NULL),(15,8,10,9,130,'3.25','2019-06-16 13:48:07',NULL);

/*Table structure for table `tblstudents` */

DROP TABLE IF EXISTS `tblstudents`;

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tblstudents` */

insert  into `tblstudents`(`StudentId`,`StudentName`,`RollId`,`StudentEmail`,`Gender`,`DOB`,`ClassId`,`RegDate`,`UpdationDate`,`Status`) values (6,'Sahab Uddin','284067','sahabuddinriyaj984@gmail.com','Male','1998-02-16',9,'2019-05-09 01:36:46',NULL,1),(7,'Abdul motaleb','284123','motal@gmail.com','Male','1999-07-03',10,'2019-05-09 02:03:33',NULL,1),(8,'Sahabuddin','284067','sahabuddinriyaj984@gmail.com','Male','1998-02-16',10,'2019-06-16 13:47:11',NULL,1);

/*Table structure for table `tblsubjectcombination` */

DROP TABLE IF EXISTS `tblsubjectcombination`;

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tblsubjectcombination` */

insert  into `tblsubjectcombination`(`id`,`ClassId`,`SubjectId`,`status`,`CreationDate`,`Updationdate`) values (1,9,1,1,'2019-06-14 19:46:42','2019-06-14 19:46:42'),(2,9,2,1,'2019-06-14 19:46:45','2019-06-14 19:46:45'),(3,9,3,1,'2019-06-14 19:46:49','2019-06-14 19:46:49'),(4,9,4,1,'2019-06-14 19:46:53','2019-06-14 19:46:53'),(5,9,5,1,'2019-06-14 19:46:58','2019-06-14 19:46:58'),(6,9,6,1,'2019-06-14 19:47:02','2019-06-14 19:47:02'),(7,9,7,1,'2019-06-14 19:47:05','2019-06-14 19:47:05'),(8,10,8,1,'2019-06-16 13:42:10','2019-06-16 13:42:10'),(9,10,9,1,'2019-06-16 13:42:20','2019-06-16 13:42:20'),(10,10,10,1,'2019-06-16 13:42:28','2019-06-16 13:42:28'),(11,10,11,1,'2019-06-16 13:43:16','2019-06-16 13:43:16'),(12,10,12,1,'2019-06-16 13:43:27','2019-06-16 13:43:27'),(13,10,13,1,'2019-06-16 13:43:46','2019-06-16 13:43:46'),(14,10,14,1,'2019-06-16 13:43:53','2019-06-16 13:43:53'),(15,10,15,1,'2019-06-16 13:44:01','2019-06-16 13:44:01');

/*Table structure for table `tblsubjects` */

DROP TABLE IF EXISTS `tblsubjects`;

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `SubjectCradite` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tblsubjects` */

insert  into `tblsubjects`(`id`,`SubjectName`,`SubjectCode`,`SubjectCradite`,`Creationdate`,`UpdationDate`) values (1,'Computer Fandamental','6601','4','2019-06-14 19:33:48','0000-00-00 00:00:00'),(2,'Mathmatics-1','7201','4','2019-06-14 19:34:32','0000-00-00 00:00:00'),(3,'English-1','7202','2','2019-06-14 19:34:56','0000-00-00 00:00:00'),(4,'Chamistry-1','7203','4','2019-06-14 19:35:31','0000-00-00 00:00:00'),(5,'Basic Electromics','6801','4','2019-06-14 19:36:00','0000-00-00 00:00:00'),(6,'Basic Electricity','6802','4','2019-06-14 19:36:31','0000-00-00 00:00:00'),(7,'Engineering Drowing','7204','1','2019-06-14 19:37:58','0000-00-00 00:00:00'),(8,'Mathmatics-2','7205','4','2019-06-16 13:36:18','2019-06-16 13:44:51'),(9,'Physics-1','7206','4','2019-06-16 13:36:39','0000-00-00 00:00:00'),(10,'Englisg-2','7207','2','2019-06-16 13:37:00','0000-00-00 00:00:00'),(11,'Bangla-1','7208','2','2019-06-16 13:37:15','0000-00-00 00:00:00'),(12,'Physical Education','7701','1','2019-06-16 13:38:02','0000-00-00 00:00:00'),(13,'Computer Application-1','6602','2','2019-06-16 13:38:29','0000-00-00 00:00:00'),(14,'Basic Woekshop And Practics','6701','2','2019-06-16 13:40:06','0000-00-00 00:00:00'),(15,'Digital Electronics-1','6803','4','2019-06-16 13:41:29','0000-00-00 00:00:00');

/*Table structure for table `tdldepartment` */

DROP TABLE IF EXISTS `tdldepartment`;

CREATE TABLE `tdldepartment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(255) NOT NULL,
  `dcode` varchar(255) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tdldepartment` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
