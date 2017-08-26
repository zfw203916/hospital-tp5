/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.53 : Database - hospital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hospital` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hospital`;

/*Table structure for table `ato` */

DROP TABLE IF EXISTS `ato`;

CREATE TABLE `ato` (
  `Aname` char(20) NOT NULL,
  `Atele` char(11) NOT NULL,
  PRIMARY KEY (`Aname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ato` */

insert  into `ato`(`Aname`,`Atele`) values ('','67881231');

/*Table structure for table `bed` */

DROP TABLE IF EXISTS `bed`;

CREATE TABLE `bed` (
  `Cno` char(5) NOT NULL,
  `Cuse` int(1) NOT NULL,
  `bc_Aname` char(20) NOT NULL,
  PRIMARY KEY (`Cno`),
  KEY `bc_Aname` (`bc_Aname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `bed` */

insert  into `bed`(`Cno`,`Cuse`,`bc_Aname`) values ('20101',1,''),('20102',1,''),('20103',0,''),('20201',1,''),('20202',1,''),('20203',0,''),('20301',1,''),('20302',1,''),('20303',0,'');

/*Table structure for table `doctor` */

DROP TABLE IF EXISTS `doctor`;

CREATE TABLE `doctor` (
  `Dno` char(11) NOT NULL,
  `Dname` char(10) NOT NULL,
  `Dsex` char(2) NOT NULL,
  `Dzc` char(20) NOT NULL,
  `lz_Aname` char(20) NOT NULL,
  `Dstate` int(1) NOT NULL,
  PRIMARY KEY (`Dno`),
  KEY `lz_Aname` (`lz_Aname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `doctor` */

insert  into `doctor`(`Dno`,`Dname`,`Dsex`,`Dzc`,`lz_Aname`,`Dstate`) values ('20131004321','','','','',1),('20131004322','','Ů','','',1),('20131004323','','','ҽ','',1),('20131004324','','Ů','ҽ','',1),('20131004325','','','ҽ','',1),('20131004326','','Ů','','',1),('20131004327','','Ů','','',1),('20131004328','','Ů','','',1),('20131004329','','Ů','','',1),('20131004330','','','ҽ','',1);

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `Pno` char(11) NOT NULL,
  `Pname` char(20) NOT NULL,
  `Psex` char(2) NOT NULL,
  `Pbirth` date NOT NULL,
  `Padd` char(50) NOT NULL,
  `Ptele` char(11) NOT NULL,
  `Dno` char(11) NOT NULL,
  `Cno` char(5) NOT NULL,
  `Idate` date NOT NULL,
  `Pmark` char(200) DEFAULT NULL,
  `Odate` datetime DEFAULT NULL,
  PRIMARY KEY (`Pno`),
  KEY `p_Dno` (`Dno`),
  KEY `p_Cno` (`Cno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `patient` */

insert  into `patient`(`Pno`,`Pname`,`Psex`,`Pbirth`,`Padd`,`Ptele`,`Dno`,`Cno`,`Idate`,`Pmark`,`Odate`) values ('20150501001','','','1994-01-01','','18812344321','20131004321','20101','2015-05-01','','0000-00-00 00:00:00'),('20150502002','','','1995-02-02','','18812344322','20131004323','20102','2015-05-02','','0000-00-00 00:00:00'),('20150503003','','Ů','1994-03-03','','18812344323','20131004325','20201','2015-05-03','','0000-00-00 00:00:00'),('20150504004','','','1993-04-04','','18812344324','20131004326','20202','2015-05-04','','0000-00-00 00:00:00'),('20150505005','','Ů','1994-05-05','','18812344325','20131004328','20301','2015-05-05','','0000-00-00 00:00:00'),('20150506006','','','1993-06-06','','18812344326','20131004330','20302','2015-05-06','','0000-00-00 00:00:00');

/*Table structure for table `up` */

DROP TABLE IF EXISTS `up`;

CREATE TABLE `up` (
  `Uname` char(11) NOT NULL,
  `Password` char(6) NOT NULL,
  PRIMARY KEY (`Uname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `up` */

insert  into `up`(`Uname`,`Password`) values ('20161004186','123456');

/*Table structure for table `doctorsearch` */

DROP TABLE IF EXISTS `doctorsearch`;

/*!50001 DROP VIEW IF EXISTS `doctorsearch` */;
/*!50001 DROP TABLE IF EXISTS `doctorsearch` */;

/*!50001 CREATE TABLE  `doctorsearch`(
 `Dno` char(11) ,
 `Dname` char(10) ,
 `Dsex` char(2) ,
 `Dzc` char(20) ,
 `lz_Aname` char(20) ,
 `Dstate` int(1) ,
 `Pname` char(20) 
)*/;

/*Table structure for table `kesearch` */

DROP TABLE IF EXISTS `kesearch`;

/*!50001 DROP VIEW IF EXISTS `kesearch` */;
/*!50001 DROP TABLE IF EXISTS `kesearch` */;

/*!50001 CREATE TABLE  `kesearch`(
 `lz_Aname` char(20) ,
 `Dstate` int(1) ,
 `Dzc` char(20) ,
 `Dname` char(10) ,
 `Atele` char(11) ,
 `Dno` char(11) 
)*/;

/*Table structure for table `patientsearch` */

DROP TABLE IF EXISTS `patientsearch`;

/*!50001 DROP VIEW IF EXISTS `patientsearch` */;
/*!50001 DROP TABLE IF EXISTS `patientsearch` */;

/*!50001 CREATE TABLE  `patientsearch`(
 `Pno` char(11) ,
 `Pname` char(20) ,
 `Psex` char(2) ,
 `Pbirth` date ,
 `Padd` char(50) ,
 `Ptele` char(11) ,
 `Dno` char(11) ,
 `Cno` char(5) ,
 `Idate` date ,
 `Pmark` char(200) ,
 `Odate` datetime ,
 `Dname` char(10) ,
 `lz_Aname` char(20) 
)*/;

/*View structure for view doctorsearch */

/*!50001 DROP TABLE IF EXISTS `doctorsearch` */;
/*!50001 DROP VIEW IF EXISTS `doctorsearch` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `doctorsearch` AS select `doctor`.`Dno` AS `Dno`,`doctor`.`Dname` AS `Dname`,`doctor`.`Dsex` AS `Dsex`,`doctor`.`Dzc` AS `Dzc`,`doctor`.`lz_Aname` AS `lz_Aname`,`doctor`.`Dstate` AS `Dstate`,`patient`.`Pname` AS `Pname` from (`doctor` join `patient` on((`patient`.`Dno` = `doctor`.`Dno`))) */;

/*View structure for view kesearch */

/*!50001 DROP TABLE IF EXISTS `kesearch` */;
/*!50001 DROP VIEW IF EXISTS `kesearch` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kesearch` AS select `doctor`.`lz_Aname` AS `lz_Aname`,`doctor`.`Dstate` AS `Dstate`,`doctor`.`Dzc` AS `Dzc`,`doctor`.`Dname` AS `Dname`,`ato`.`Atele` AS `Atele`,`doctor`.`Dno` AS `Dno` from (`ato` join `doctor` on((`doctor`.`lz_Aname` = `ato`.`Aname`))) */;

/*View structure for view patientsearch */

/*!50001 DROP TABLE IF EXISTS `patientsearch` */;
/*!50001 DROP VIEW IF EXISTS `patientsearch` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `patientsearch` AS select `patient`.`Pno` AS `Pno`,`patient`.`Pname` AS `Pname`,`patient`.`Psex` AS `Psex`,`patient`.`Pbirth` AS `Pbirth`,`patient`.`Padd` AS `Padd`,`patient`.`Ptele` AS `Ptele`,`patient`.`Dno` AS `Dno`,`patient`.`Cno` AS `Cno`,`patient`.`Idate` AS `Idate`,`patient`.`Pmark` AS `Pmark`,`patient`.`Odate` AS `Odate`,`doctor`.`Dname` AS `Dname`,`doctor`.`lz_Aname` AS `lz_Aname` from (`patient` join `doctor` on((`patient`.`Dno` = `doctor`.`Dno`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
