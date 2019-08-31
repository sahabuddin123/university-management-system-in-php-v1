/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.24 : Database - educafe
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`educafe` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `educafe`;

/*Table structure for table `addteacher` */

DROP TABLE IF EXISTS `addteacher`;

CREATE TABLE `addteacher` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `tdigree` varchar(255) NOT NULL,
  `tpost` varchar(255) NOT NULL,
  `tdepartment` varchar(255) NOT NULL,
  `tabout` varchar(255) NOT NULL,
  `tfb` varchar(255) NOT NULL,
  `ttw` varchar(255) NOT NULL,
  `tgmail` varchar(255) NOT NULL,
  `timagename` varchar(255) NOT NULL,
  `timagepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `addteacher` */

insert  into `addteacher`(`id`,`tid`,`tname`,`tdigree`,`tpost`,`tdepartment`,`tabout`,`tfb`,`ttw`,`tgmail`,`timagename`,`timagepath`) values (1,6602,'Engr. Meher-Ul Karim','BSc In CSE And MSc In Electrinics','Head Of Department','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/meherulkarim','www.twetter.com/meherulkarim','www.meherulkarim@gmail.com','FB_IMG_1538935846913.jpg','teacherImage/FB_IMG_1538935846913.jpg'),(2,6801,'Eng.Ali hossan','BSc In EEE','Head Of Department','Electrical Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/azl','www.twetter.com/azl','www.azl@gmail.com','alihossan1.jpg','teacherImage/alihossan1.jpg'),(3,6201,'Engr.Azad Ali','BSc In Civil','Head Of Department','Civil Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/azl','www.twetter.com/azl','www.azl@gmail.com','azali.jpg','teacherImage/azali.jpg'),(4,6301,' MD.Anowar Hossan','BSc In EEE','Head Of Department','Mechanical Technology','Investigationes demonstraverun lectores legere me lius quod ii \nleg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/azl','www.twetter.com/azl','www.azl@gmail.com','roni.jpg','teacherImage/roni.jpg'),(5,6604,'Engr. Mainul Islam Roni','BSc In CSE','Guest Teacher','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/roni','www.twetter.com/roni','www.roni@gmail.com','roni.jpg','teacherImage/roni.jpg'),(6,6605,'Engr. Humayoun Ahmed','BSc In CSE','Guest Teacher','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/humayoun','www.twetter.com/humayoun','www.humayoun@gmail.com','humayou.jpg','teacherImage/humayou.jpg'),(7,6608,'Engr. Abdul Kader Patowari','BSc In CSE','Instructor','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/akp','www.twetter.com/akp','www.akp@gmail.com','principle.png','teacherImage/principle.png'),(8,6601,'Engr. Ali Hossan','BSc In CSE','Junior Instructor','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/alihossan','www.twetter.com/alihossan','www.alihossan@gmail.com','alihossan1.jpg','teacherImage/alihossan1.jpg'),(9,6603,'Engr. S M Hamidul Hoque','BSc In CSE And MSc In Electrinics','Chif Instructor','Computer Science And Technology','Investigationes demonstraverun lectores legere me lius quod ii leg unt saepius Claritas est etiam processus dynamicus','www.facebook.com/hmmidulhoque','www.facebook.com/hmmidulhoque','www.hmmidulhoque@gmail.com','hamidulhoque.jpg','teacherImage/hamidulhoque.jpg');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`,`updationDate`) values (1,'sahabuddinriyaj984@gmail.com','01867033550','10-05-2019 01:46:12 AM');

/*Table structure for table `admission` */

DROP TABLE IF EXISTS `admission`;

CREATE TABLE `admission` (
  `aid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `smobile1` varchar(255) DEFAULT NULL,
  `smobile2` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `foccuption` varchar(255) DEFAULT NULL,
  `fmobile` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `moccuption` varchar(255) DEFAULT NULL,
  `mmobile` varchar(255) DEFAULT NULL,
  `incomef` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `pradd` varchar(255) DEFAULT NULL,
  `prstate` varchar(255) DEFAULT NULL,
  `prpin` varchar(255) DEFAULT NULL,
  `prmobile` varchar(255) DEFAULT NULL,
  `peadd` varchar(255) DEFAULT NULL,
  `pestate` varchar(255) DEFAULT NULL,
  `pepin` varchar(255) DEFAULT NULL,
  `pemobile` varchar(255) DEFAULT NULL,
  `ufrom` varchar(255) DEFAULT NULL,
  `natn` varchar(255) DEFAULT NULL,
  `relg` varchar(255) DEFAULT NULL,
  `brnc` varchar(255) DEFAULT NULL,
  `nob1` varchar(255) DEFAULT NULL,
  `nob2` varchar(255) DEFAULT NULL,
  `yop1` varchar(255) DEFAULT NULL,
  `yop2` varchar(255) DEFAULT NULL,
  `tm1` varchar(255) DEFAULT NULL,
  `tm2` varchar(255) DEFAULT NULL,
  `mo1` varchar(255) DEFAULT NULL,
  `mo2` varchar(255) DEFAULT NULL,
  `divs1` varchar(255) DEFAULT NULL,
  `divs2` varchar(255) DEFAULT NULL,
  `pom1` varchar(255) DEFAULT NULL,
  `pom2` varchar(255) DEFAULT NULL,
  `moi` varchar(255) DEFAULT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

/*Data for the table `admission` */

insert  into `admission`(`aid`,`cid`,`sid`,`smobile1`,`smobile2`,`fname`,`foccuption`,`fmobile`,`mname`,`moccuption`,`mmobile`,`incomef`,`gender`,`pradd`,`prstate`,`prpin`,`prmobile`,`peadd`,`pestate`,`pepin`,`pemobile`,`ufrom`,`natn`,`relg`,`brnc`,`nob1`,`nob2`,`yop1`,`yop2`,`tm1`,`tm2`,`mo1`,`mo2`,`divs1`,`divs2`,`pom1`,`pom2`,`moi`,`pay`,`createDate`,`updateDate`) values (1,2,1,'112 233 445 56','01867045550','Obaydul Hoque','foreigner','01879224827','Monowara Begun','House Wife','01846303258','30000','Male','Mohammadpur Dhaka Bangladesh','Mohammadpur','1207','01867033550','Subarnachar,Noakhali ,Chittagong','Charbata','02','01867033550','City','Bangladeshi','Islam','Electrical Technology','Madrasah','Madrasah','2015','2017','1200','1100','1400','1600','80','70','80%','70%','English','Self','2019-07-28 12:07:55','2019-07-28 12:07:55'),(2,4,2,'112 233 445 56','01868567629','Karim','farmer ','01879224557','aayesha','House Wife','0184635258','6000','Male','Subarnachar,Noakhali ,Chittagong','Charbata','02','01867050550','Subarnachar,Noakhali ,Chittagong','Charbata','02','01867523550','Rural','Bangladeshi','Islam','Mechanical Technology','Madrasah','Comilla','2015','2017','1200','1100','1400','1500','80','80','80%','70%','Arabiq','Self','2019-07-28 12:32:10','2019-07-28 12:32:10'),(3,1,3,'0124588455','0012225522','hamin','farmer','4455555','fatima','House Wife',' 0000225444','30000','Male','Subarnachar,Noakhali ,Chittagong','Mohammadpur','12345','01867033550','Subarnachar,Noakhali ,Chittagong','Charbata','12345','01867523550','Rural','Bangladeshi','Islam','Computer Science','Madrasah','Madrasah','2015','2017','1200','1100','458','855','80','80','40','40','English','Loan','2019-07-28 19:42:59','2019-07-28 19:42:59');

/*Table structure for table `comment_table` */

DROP TABLE IF EXISTS `comment_table`;

CREATE TABLE `comment_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `comment_table` */

insert  into `comment_table`(`id`,`name`,`email`,`comment`,`createDate`) values (14,'sahabuddin','sahabuddinriyaj984@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer\r\n\r\n','2019-07-22 16:31:12'),(10,'Arman Hossan aru','aharmanhossan@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer','2019-07-22 15:15:34'),(13,'Abdul Motaleb','motaleb@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer\r\n\r\n','2019-07-22 16:30:49'),(15,'Arman Hossan aru','aharmanhossan@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer\r\n\r\n','2019-07-22 16:31:32'),(16,'bipu','bipu@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer\r\n\r\n','2019-07-22 16:31:43'),(17,'abdul motaleb','bipu@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer\r\n\r\n','2019-07-22 16:32:10'),(18,'Sujon Kumar','sujon@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer','2019-07-22 21:50:35'),(19,'rakib','rakib@gmail.com','This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. lead-in to additional content. This content is a little bit longer lead-in to additional content. This content is a little bit longer','2019-07-22 22:31:52'),(20,'arman','arman@gmail.com','hello web','2019-07-28 19:49:44'),(21,'arman','ard@gmail.com','yea','2019-07-28 19:50:34'),(22,'rasel','rasel@gmail.com','hello','2019-07-29 12:10:59');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mass` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id`,`name`,`email`,`subject`,`mass`) values (3,'Sahab Uddin','sahabuddinriyaj984@gmail.com','admission','asiufhsiudvhisufhv'),(4,'Abdul Motaleb','amhridoy46@gmail.com','mathematic','hjklfdajskj'),(5,'Sujon Kumar Sarkar','sujonkumar080@gmail.com','Admission Test','Hey Iam Sujon kumar sarkar'),(6,'s','w@gmail.com','Admission Test','hi'),(7,'Arman Hossain','arman@gmail.com','computer technology','hello ,i am a web developer\r\n'),(8,'oejiorejgiser','dkmfkg@gmail.com','hello ','who r u?\r\n'),(9,'$name','$name','$name','$name'),(10,'Arman Hossan aru','sahabuddinriyaj984@gmail.com','Computer Science','Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wi si enim ad minim veniam quis nostrud exerci tation .\r\n\r\n'),(11,'sahabuddin','sahabuddinriyaj984@gmail.com','Computer Science','Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wi si enim ad minim veniam quis nostrud exerci tation .\r\n\r\n'),(71,'sahabuddin','sahabuddinriyaj984@gmail.com','Computer Science','Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wi si enim ad minim veniam quis nostrud exerci tation .\r\n\r\n'),(72,'abdul motaleb','motaleb@gmail.com','Computer Science','Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat Ut wi si enim ad minim veniam quis nostrud exerci tation .\r\n\r\n'),(73,'aramn','arae@gmail.com','Computer Science','klajflakjsdf');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `cid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ctitle` varchar(255) NOT NULL,
  `cstarts` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `clssduration` varchar(255) NOT NULL,
  `courseby` varchar(255) NOT NULL,
  `cditels` text NOT NULL,
  `cts` varchar(255) NOT NULL,
  `ctsa` varchar(255) NOT NULL,
  `cta` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`cid`,`ctitle`,`cstarts`,`duration`,`clssduration`,`courseby`,`cditels`,`cts`,`ctsa`,`cta`,`imagename`,`imagepath`) values (1,'Computer Science','2018-01-01','4 Years','08:00-01:00','Engr. Meherul Karim','Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor.','50','60','$6500','computer.png','admin/uploads/computer.png'),(2,'Electrical Technology','2018-01-01','4 Years','08:00-01:30','Ali Hossan','Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor.','60','80','$6500','electrical.jpg','admin/uploads/electrical.jpg'),(3,'Civil Technology','2018-01-01','4 Years','08:00-01:30','Azad Ali','Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lor','80','90','$6000','civil.jpg','admin/uploads/civil.jpg'),(4,'Mechanical Technology','2018-01-01','4 Years','08:00-01:30','MD.Anowar Hossan','Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor.','50','60','5000','recent1.png','admin/uploads/recent1.png'),(5,'Power Technology','2018-01-01','4 Years','08:00-01:00','Abul Hasem','Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5Lorem5','50','60','5000','abulhasem.png','admin/uploads/abulhasem.png');

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `files` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_07_20_182007_create_files_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` varchar(255) DEFAULT '0000-00-00',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`sid`,`name`,`dob`,`email`,`mobile`,`password`,`createDate`,`updateDate`) values (1,'Sahabuddin','1998-02-16','sahabuddinriyaj984@gmail.com','01867033550','01867033550','2019-07-27 14:54:12','2019-07-27'),(2,'Arman Hossan aru','1998-10-10','aharmanhossan@gmail.com','01587416858','01867033550','2019-07-27 18:49:29','0000-00-00'),(3,'motaleb','1998-04-14','motaleb@gmail.com','01587416858','12345678','2019-07-28 19:38:28','0000-00-00');

/*Table structure for table `studentadmison` */

DROP TABLE IF EXISTS `studentadmison`;

CREATE TABLE `studentadmison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `fastname` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `ocp` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `image` longblob,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `board1` varchar(255) NOT NULL,
  `board2` varchar(255) NOT NULL,
  `roll1` varchar(255) NOT NULL,
  `roll2` varchar(255) NOT NULL,
  `pyear1` varchar(255) NOT NULL,
  `pyear2` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `marks1` varchar(255) NOT NULL,
  `marks2` varchar(255) NOT NULL,
  `fmarks1` varchar(255) NOT NULL,
  `fmarks2` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `studentadmison` */

insert  into `studentadmison`(`id`,`course`,`session`,`fastname`,`middleName`,`lastName`,`gender`,`gname`,`ocp`,`income`,`category`,`ph`,`nation`,`image`,`email`,`password`,`board1`,`board2`,`roll1`,`roll2`,`pyear1`,`pyear2`,`sub1`,`sub2`,`marks1`,`marks2`,`fmarks1`,`fmarks2`,`regDate`,`updationDate`,`passUdateDate`) values (2,'7','2019-2020','Sahab','uddin','riyaj','Male','ObaydulHoque','Student','200000','general','no','Bangladeshi',NULL,'sahabuddinriyaj984@gmail.com','01867033550','madrasah','madrasah','224827','358964','2015','2017','general','general','4.94','4.43','5.00','5.00','2019-05-18 02:48:55','',''),(3,'7','2019-2020','Sahab','uddin','riyaj','Male','ObaydulHoque','Student','200000','general','no','Bangladeshi',NULL,'sahabuddinriyaj984@gmail.com','01867033550','madrasah','madrasah','224827','358964','2015','2017','general','general','4.94','4.43','5.00','5.00','2019-05-18 02:49:22','',''),(4,'7','2019-2020','Sahab','uddin','riyaj','Male','ObaydulHoque','Student','700000','general','no','Bangladeshi','','sahabuddinriyaj984@gmail.com','01867033550','madrasah','madrasah','224827','358964','2015','2017','general','general','4.94','4.43','5.00','5.00','2019-05-18 02:52:43','',''),(5,'7','2019-2020','Sahab','uddin','riyaj','Male','ObaydulHoque','Student','700000','general','no','Bangladeshi',NULL,'sahabuddinriyaj984@gmail.com','01867033550','madrasah','madrasah','224827','358964','2015','2017','general','general','4.94','4.43','5.00','5.00','2019-05-18 02:53:58','','');

/*Table structure for table `subscibe` */

DROP TABLE IF EXISTS `subscibe`;

CREATE TABLE `subscibe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `subscibe` */

insert  into `subscibe`(`id`,`email`) values (1,'sahabuddinriyaj984@gmail.com'),(2,'motaleb@gmail.com'),(3,'aharmanhossan@gmail.com'),(4,'motaleb@gmail.com');

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varchar(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `userlog` */

insert  into `userlog`(`id`,`userId`,`userEmail`,`userIp`,`city`,`country`,`loginTime`) values (1,1,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-10 03:35:18'),(2,1,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-10 23:13:44'),(3,1,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-17 21:51:06'),(4,1,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-24 23:28:00'),(5,6,'angelbipu@gmail.com','::1','','','2019-05-25 01:46:30'),(6,1,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-25 02:05:51'),(7,2,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-25 02:07:23'),(8,4,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-25 02:11:41'),(9,4,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-25 20:42:20'),(10,7,'sobhana@gmail.com','::1','','','2019-05-25 23:45:15'),(11,8,'smriti@gmail.com','::1','','','2019-05-25 23:52:45'),(12,9,'riyad@gmail.com','::1','','','2019-05-25 23:56:20'),(13,10,'sewli@gmail.com','::1','','','2019-05-26 00:01:51'),(14,11,'santa@gmail.com','::1','','','2019-05-26 00:05:05'),(15,12,'jhumur@gmail.com','::1','','','2019-05-26 00:08:03'),(16,13,'mehedi@gmail.com','::1','','','2019-05-26 00:11:13'),(17,15,'safaeat@gmail.com','::1','','','2019-05-26 00:17:24'),(18,8,'smriti@gmail.com','::1','','','2019-05-26 15:24:32'),(19,12,'jhumur@gmail.com','::1','','','2019-05-26 15:25:12'),(20,4,'sahabuddinriyaj984@gmail.com','::1','','','2019-05-26 15:25:32'),(21,12,'jhumur@gmail.com','::1','','','2019-06-04 18:20:05'),(22,12,'jhumur@gmail.com','::1','','','2019-06-04 23:21:04'),(23,4,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-11 22:09:47'),(24,4,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-11 22:12:43'),(25,12,'jhumur@gmail.com','::1','','','2019-06-11 22:12:55'),(26,13,'mehedi@gmail.com','::1','','','2019-06-11 22:13:07'),(27,9,'riyad@gmail.com','::1','','','2019-06-11 22:13:19'),(28,14,'piyas@gmail.com','::1','','','2019-06-11 22:13:35');

/*Table structure for table `userregistration` */

DROP TABLE IF EXISTS `userregistration`;

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `userregistration` */

insert  into `userregistration`(`id`,`regNo`,`firstName`,`middleName`,`lastName`,`gender`,`contactNo`,`email`,`password`,`imageName`,`imagePath`,`regDate`,`updationDate`,`passUdateDate`) values (4,'110102','Sahab','uddin','Riyaj','male',1867033550,'sahabuddinriyaj984@gmail.com','01867033550','sahab.png','uploads/sahab.png','2019-05-25 01:26:53','',''),(8,'110103','Ms.Smriti','','Mojumder','female',12134567891,'smriti@gmail.com','01867033550','SmritiMojumder_2.png','uploads/SmritiMojumder_2.png','2019-05-25 23:52:32','25-05-2019 11:23:22',''),(9,'110104','MD. Delower','Hossan','Riyad','male',1234567899,'riyad@gmail.com','01867033550','riyad1.png','uploads/riyad1.png','2019-05-25 23:56:07','',''),(10,'110105','Ms.Sewli','','Bhuyan','female',1234567898,'sewli@gmail.com','01867033550','siwli1.png','uploads/siwli1.png','2019-05-26 00:01:19','',''),(11,'110106','Shirin','Alam','Santa','female',1234567897,'santa@gmail.com','01867033550','santa1.png','uploads/santa1.png','2019-05-26 00:04:40','',''),(12,'110107','Mahmuda','Akter','Jhumur','female',1234567896,'jhumur@gmail.com','01867033550','jhumur1.png','uploads/jhumur1.png','2019-05-26 00:07:44','',''),(13,'110108','MD. Mehedi','','Hassan','male',1234567895,'mehedi@gmail.com','01867033550','mehedi1.png','uploads/mehedi1.png','2019-05-26 00:10:46','',''),(14,'110109','Nur','Mohammad','Piyas','male',1234567895,'piyas@gmail.com','01867033550','piyas1.png','uploads/piyas1.png','2019-05-26 00:14:50','',''),(15,'110110','Mohammad','Safaeat','Uddin','male',1234567894,'safaeat@gmail.com','01867033550','safaeat1.png','uploads/safaeat1.png','2019-05-26 00:17:07','','');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`username`,`password`,`name`,`contact_no`,`email`,`status`,`profile_image`,`profile_summary`,`auth_key`,`remember_token`,`created_at`,`updated_at`) values (1,'Admin','admin321','Admin','9876543210','admin@demo.com','1','abcd.jpg','Good Moring','H5GlTjbZ0D','mAQOqrnB8q','2019-07-28 16:40:56','2019-07-28 16:40:56');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
