/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.24 : Database - hostel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hostel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hostel`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`email`,`password`,`reg_date`,`updation_date`) values (1,'admin','anuj.lpu1@gmail.com','Test@1234','2016-04-05 02:31:45','2016-04-17');

/*Table structure for table `adminlog` */

DROP TABLE IF EXISTS `adminlog`;

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `adminlog` */

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

insert  into `courses`(`id`,`course_code`,`course_sn`,`course_fn`,`posting_date`) values (1,'B10992','B.Tech','Bachelor  of Technology','2016-04-12 01:31:42'),(2,'BCOM1453','B.Com','Bachelor Of commerce ','2016-04-12 01:32:46'),(3,'BSC12','BSC','Bachelor  of Science','2016-04-12 01:33:23'),(4,'BC36356','BCA','Bachelor Of Computer Application','2016-04-12 01:34:18'),(5,'MCA565','MCA','Master of Computer Application','2016-04-12 01:34:40'),(6,'MBA75','MBA','Master of Business Administration','2016-04-12 01:34:59'),(7,'BE765','BE','Bachelor of Engineering','2016-04-12 01:35:19');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(500) NOT NULL,
  `PassUdateDate` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`id`,`roomno`,`seater`,`feespm`,`foodstatus`,`stayfrom`,`duration`,`course`,`regno`,`firstName`,`middleName`,`lastName`,`gender`,`contactno`,`emailid`,`egycontactno`,`guardianName`,`guardianRelation`,`guardianContactno`,`corresAddress`,`corresCIty`,`corresState`,`corresPincode`,`pmntAddress`,`pmntCity`,`pmnatetState`,`pmntPincode`,`email`,`password`,`postingDate`,`updationDate`,`PassUdateDate`) values (8,112,3,4000,0,'2016-06-27',5,'Bachelor  of Science',0,'Sahab','Uddin','Riyaj','male',1867033550,'rahul@gmail.com',789632587,'demo','demo',1234567890,'New Delhi','Delhi','Delhi (NCT)',110001,'New Delhi','Delhi','Delhi (NCT)',110001,'','01867033550','2016-06-26 22:31:08','04-06-2019 04:21:04','04-06-2019 06:03:47'),(9,132,5,2000,1,'2016-06-28',6,'Bachelor of Engineering',0,'Sahab','Uddin','Riyaj','male',1867033550,'ajay@gmail.com',8285703354,'demo','demo',8285703354,'H no- 18/1 Bihari puram phase-1 melrose bye pass','Aligarh','Uttar Pradesh',202001,'H no- 18/1 Bihari puram phase-1 melrose bye pass','Aligarh','Uttar Pradesh',202001,'','01867033550','2016-06-26 22:40:07','04-06-2019 04:21:04','04-06-2019 06:03:47'),(10,200,1,6000,0,'2019-05-13',1,'Bachelor  of Technology',0,'Sahab','Uddin','Riyaj','male',1867033550,'sahabuddinriyaj984@gamil.com',1867033550,'mrx','relative',1867033550,'fsdfsDf','dhaka','West Bengal',25416,'adwdf','kalkata','West Bengal',25416,'','01867033550','2019-05-10 01:27:43','04-06-2019 04:21:04','04-06-2019 06:03:47'),(11,200,1,3000,0,'2019-05-06',3,'Bachelor  of Science',0,'Sahab','Uddin','Riyaj','male',1867033550,'armanh686@gmail.com',255111444,'mama','mamam',45451454,'jamialnks alksjfksnf  kajnfks ','dhaka','Chandigarh (UT)',12345,'jamialnks alksjfksnf  kajnfks ','dhaka','Chandigarh (UT)',12345,'','01867033550','2019-05-12 23:58:35','04-06-2019 04:21:04','04-06-2019 06:03:47'),(12,101,1,8000,0,'1998-02-16',4,'Bachelor  of Science',0,'Sahab','Uddin','Riyaj','male',1867033550,'sahabuddinriyaj984@gmail.com',1867033550,'ObaydulHoque','Father',1867033550,'Charbata Khaserhat, Subarnachar Noakhali.','Noakhali','West Bengal',12345,'Charbata Khaserhat, Subarnachar Noakhali.','Noakhali','Noakhali',12345,'sahabuddinriyaj984@gmail.com','01867033550','2019-06-03 22:55:04','04-06-2019 04:21:04','04-06-2019 06:03:47'),(13,101,1,8000,0,'1998-02-16',3,'Bachelor Of Computer Application',110101,'Arman','Hossain','Sojib','male',12134567891,'armanh686@gmail.com',1867033550,'mrx','Son',1867451465,'skljflsadkfhas;dkjasd;kjvnsdfkjbvadkfsjvbadfkvjfbvbvakjdnadkjfkjadfa;kdjfhadfh;akdjfha;dkjfa;kjdfa;sdkjfh;jkdffh;sdjkfa;sdjkfha;skdjfhasdjfha;skdjhfajksd;kjjsaj;aslkdj;alskdjf;aslkdjfa;lskdjf;alskdjf;aslkdjf;aslkdjf;aslkdjf;alskdjf;alskdjfa;sdlkfj;asdljf;alsdkjfa;slkdjf;aslkdjfa;sldkjfa;sdjf;alskdjfal;sdkljf;asldkjfa;sldkjfa;sdfj;lkj','Noakhali','Noakhali',3813,'skljflsadkfhas;dkjasd;kjvnsdfkjbvadkfsjvbadfkvjfbvbvakjdnadkjfkjadfa;kdjfhadfh;akdjfha;dkjfa;kjdfa;sdkjfh;jkdffh;sdjkfa;sdjkfha;skdjfhasdjfha;skdjhfajksd;kjjsaj;aslkdj;alskdjf;aslkdjfa;lskdjf;alskdjf;aslkdjf;aslkdjf;aslkdjf;alskdjf;alskdjfa;sdlkfj;asdljf;alsdkjfa;slkdjf;aslkdjfa;sldkjfa;sdjf;alskdjfal;sdkljf;asldkjfa;sldkjfa;sdfj;lkj','Noakhali','Noakhali',3813,'armanh686@gmail.com','01867033550','2019-06-04 16:26:06','','04-06-2019 06:15:26');

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(`id`,`seater`,`room_no`,`fees`,`posting_date`) values (1,5,100,8000,'2016-04-12 04:45:43'),(2,2,201,6000,'2016-04-12 07:30:47'),(3,2,200,6000,'2016-04-12 07:30:58'),(4,3,112,4000,'2016-04-12 07:31:07'),(5,5,132,2000,'2016-04-12 07:31:15'),(6,1,101,8000,'2019-06-03 22:20:27');

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `State` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `states` */

insert  into `states`(`id`,`State`) values (1,'Noakhali'),(2,'Feni'),(3,'Luxmipur'),(4,'Chadpur'),(5,'Comilla'),(6,'Bandharban'),(7,'Khagrachori'),(8,'Coxes Bazar'),(9,'Kudigram'),(10,'Lalmonir Hat'),(11,'Gaybandha'),(12,'Nilfamari'),(13,'Hobigong'),(14,'Munshigong'),(15,'Thakur Gown'),(16,'Barishal'),(17,'Shirajgong'),(18,'Khulna'),(19,'Norail'),(20,'Jhalokati'),(21,'Narayongong'),(22,'Dhaka'),(23,'Chattagram'),(24,'Maymanshing'),(25,'Shylet'),(26,'Bagura'),(27,'mowlovibazar'),(28,'Punjab'),(29,'Rajastha'),(30,'Sikkim'),(31,'Tamil Nadu'),(32,'Telangana'),(33,'Tripura'),(34,'Uttarakhand'),(35,'Uttar Pradesh'),(36,'West Bengal');

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `userlog` */

insert  into `userlog`(`id`,`userId`,`userEmail`,`userIp`,`city`,`country`,`loginTime`) values (1,10,'test@gmail.com','','','','2016-06-22 12:16:42'),(2,10,'test@gmail.com','','','','2016-06-24 17:20:28'),(4,10,'test@gmail.com','::1','','','2016-06-24 17:22:47'),(5,10,'test@gmail.com','::1','','','2016-06-26 21:37:40'),(6,20,'ajay@gmail.com','::1','','','2016-06-26 22:40:57'),(7,21,'sahabuddinriyaj984@gamil.com','::1','','','2019-05-10 01:24:07'),(8,21,'sahabuddinriyaj984@gamil.com','::1','','','2019-05-10 01:33:04'),(9,21,'sahabuddinriyaj984@gamil.com','::1','','','2019-05-10 02:33:08'),(10,22,'armanh686@gmail.com','::1','','','2019-05-12 23:55:54'),(11,22,'armanh686@gmail.com','::1','','','2019-05-12 23:59:11'),(12,22,'armanh686@gmail.com','::1','','','2019-05-13 00:00:21'),(13,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-03 22:55:15'),(14,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-03 23:38:40'),(15,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-03 23:48:28'),(16,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-03 23:56:16'),(17,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-03 23:56:51'),(18,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 00:18:19'),(19,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 00:41:05'),(20,23,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 15:50:01'),(21,13,'armanh686@gmail.com','::1','','','2019-06-04 16:54:47'),(22,13,'armanh686@gmail.com','::1','','','2019-06-04 16:57:38'),(23,13,'armanh686@gmail.com','::1','','','2019-06-04 18:02:29'),(24,13,'armanh686@gmail.com','::1','','','2019-06-04 18:13:18'),(25,12,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 23:13:01'),(26,12,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 23:32:55'),(27,12,'sahabuddinriyaj984@gmail.com','::1','','','2019-06-04 23:38:08');

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
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `userregistration` */

insert  into `userregistration`(`id`,`regNo`,`firstName`,`middleName`,`lastName`,`gender`,`contactNo`,`email`,`password`,`regDate`,`updationDate`,`passUdateDate`) values (10,'108061211','Anuj','test','kumar','male',8467067344,'test@gmail.com','Test@123','2016-06-22 10:21:33','23-06-2016 11:04:15','22-06-2016 05:16:49'),(19,'102355','rahul','kumar','Singh','male',6786786786,'rahul@gmail.com','6786786786','2016-06-26 22:33:36','',''),(20,'586952','Ajay','','kumar','male',8596185625,'ajay@gmail.com','8596185625','2016-06-26 22:40:07','',''),(21,'110102','sahab','uddin','riyaj','male',18670336550,'sahabuddinriyaj984@gamil.com','01867033550','2019-05-10 01:23:55','','10-05-2019 12:54:55'),(22,'110038','arman ','hossain','hi','male',1245114544121,'armanh686@gmail.com','284131','2019-05-12 23:55:28','',''),(23,'110102','Sahab','Uddin','Riyaj','male',1867033550,'sahabuddinriyaj984@gmail.com','01867033550','2019-06-03 22:55:05','',''),(24,'110101','Arman','Hossain','Sojib','male',12134567891,'armanh686@gmail.com','012134567891','2019-06-04 16:26:06','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
