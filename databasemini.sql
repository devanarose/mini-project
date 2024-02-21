/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - hotel_reservation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotel_reservation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotel_reservation`;

/*Table structure for table `tbl_bookingchild` */

DROP TABLE IF EXISTS `tbl_bookingchild`;

CREATE TABLE `tbl_bookingchild` (
  `b_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `bp_id` varchar(5) NOT NULL,
  `room_id` varchar(5) NOT NULL,
  `nor` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `checkin` varchar(10) NOT NULL,
  `nod` int(3) NOT NULL,
  PRIMARY KEY (`b_c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_bookingchild` */

insert  into `tbl_bookingchild`(`b_c_id`,`bp_id`,`room_id`,`nor`,`price`,`checkin`,`nod`) values 
(1,'1','1',3,60000.00,'2022-11-25',5),
(2,'1','2',2,35000.00,'2022-11-25',5),
(3,'2','1',9,144000.00,'2022-12-02',4),
(4,'3','1',9,144000.00,'2022-12-02',4),
(6,'5','1',8,128000.00,'2022-11-30',4),
(8,'7','2',2,28000.00,'2022-12-29',4),
(9,'8','1',2,32000.00,'2023-02-16',4),
(11,'10','12',6,104400.00,'2023-03-08',2),
(14,'12','3',2,24000.00,'2023-03-09',2);

/*Table structure for table `tbl_bookingmaster` */

DROP TABLE IF EXISTS `tbl_bookingmaster`;

CREATE TABLE `tbl_bookingmaster` (
  `bp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `totalprice` decimal(10,4) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`bp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_bookingmaster` */

insert  into `tbl_bookingmaster`(`bp_id`,`cus_id`,`totalprice`,`status`) values 
(1,3,95000.0000,'Booked'),
(2,3,144000.0000,'Booked'),
(3,3,144000.0000,'Booked'),
(5,3,128000.0000,'Booked'),
(12,1,24000.0000,'pending'),
(7,8,28000.0000,'Booked'),
(8,1,32000.0000,'Booked'),
(10,13,104400.0000,'Booked');

/*Table structure for table `tbl_card` */

DROP TABLE IF EXISTS `tbl_card`;

CREATE TABLE `tbl_card` (
  `d_card_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` varchar(5) NOT NULL,
  `card_no` varchar(16) DEFAULT NULL,
  `card_name` varchar(25) NOT NULL,
  `exp_date` varchar(10) NOT NULL,
  PRIMARY KEY (`d_card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_card` */

insert  into `tbl_card`(`d_card_id`,`cus_id`,`card_no`,`card_name`,`exp_date`) values 
(1,'3','7777777777777777','devana','2022-12'),
(2,'8','7777777777777777','sivanand','2023-06'),
(3,'1','8888888888888888','Treesa Jenny','2023-06'),
(4,'13','7474774748848488','ANN SREENIVAS','2023-07');

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(8) NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `cname` (`cname`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`c_id`,`cname`) values 
(1,'Single'),
(2,'Double'),
(3,'Deluxe'),
(4,'Suite'),
(5,'King'),
(6,'Queen'),
(10,'Triple'),
(9,'Quad');

/*Table structure for table `tbl_customer` */

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_username` varchar(30) DEFAULT NULL,
  `cus_fname` varchar(15) NOT NULL,
  `cus_lname` varchar(15) NOT NULL,
  `cus_hname` varchar(20) NOT NULL,
  `cus_district` varchar(10) NOT NULL,
  `cus_pin` varchar(6) NOT NULL,
  `cus_phno` decimal(10,0) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer` */

insert  into `tbl_customer`(`cus_id`,`cus_username`,`cus_fname`,`cus_lname`,`cus_hname`,`cus_district`,`cus_pin`,`cus_phno`,`status`) values 
(1,'TJenny@gmail.com','Treesa','Jenny','Forest','Select','989898',3345466767,'Active'),
(2,'malvika@gmail.com','Malvika','Paul','Mampily','Ernakulam','890989',9880789678,'Active'),
(3,'vedana@gmail.com','Devana','Rose','ahvo','Ernakulam','682020',7899324561,'Active'),
(4,'carolin@gmail.com','Carolin','Pereira','Pereira House','Idukki','789898',6789012345,'Active'),
(5,'aanjanarajeev@gmail.com','aanjana','rajeev','93 North Girinagar','Ernakulam','682020',7356244189,'Active'),
(6,'merin@gmail.com','Merin','Varghese','Vhouse','Ernakulam','683579',8765243156,'In Active'),
(7,'asas@gmail.com','Bill','Clinton','Hilltop venue','Ernakulam','682033',8799876767,'Active'),
(8,'sivanand@gmail.com','Sivanand','M','CVAhouse','Ernakulam','682020',8289851798,'Active'),
(9,'adithya@gmail.com','Adithya','K L','k house','Ernakulam','123456',1234567890,'Active'),
(10,'aben@gmail.com','Aben','Reji','Reji house','Kottayam','878787',8765432210,'In Active'),
(11,'athulya@gmail.com','athulya','harrish','a house','Malappuram','654352',9834261763,'Active'),
(12,'enambusseril@gmail.com','E','Nambusseril','Vimal','Ernakulam','682020',1234567890,'Active'),
(13,'customer1@gmail.com','Ann','Sreenivas','s house','Palakkad','889988',7777777738,'Active'),
(14,'jimsongmail.com','Jimson','James','Jhouse','Malappuram','987788',8877887778,'Active');

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`username`,`password`,`usertype`) values 
('vedana@gmail.com','ponnu','customer'),
('admin@gmail.com','admin','admin'),
('staff3@gmail.com','staff3','staff'),
('staff1@gmail.com','staff1','staff'),
('staff2@gmail.com','staff2','staff'),
('carolin@gmail.com','carolin','customer'),
('TJenny@gmail.com','maram','customer'),
('malvika@gmail.com','malvika','customer'),
('aanjanarajeev@gmail.com','aanjana','customer'),
('merin@gmail.com','meriboi','customer'),
('Devika@gmail.com','devika','staff'),
('asas@gmail.com','password','customer'),
('sivanand@gmail.com','cvaa','customer'),
('adithya@gmail.com','adithya','customer'),
('aben@gmail.com','reji','customer'),
('athulya@gmail.com','athulya','customer'),
('enambusseril@gmail.com','kadavanthara20','customer'),
('aasher@gmail.com','aasher','customer'),
('customer1@gmail.com','ann','customer'),
('jimsongmail.com','jimson','customer');

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `bp_id` varchar(5) NOT NULL,
  `date_pay` date NOT NULL,
  `p_status` varchar(10) NOT NULL,
  `d_card_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`,`d_card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

insert  into `tbl_payment`(`p_id`,`bp_id`,`date_pay`,`p_status`,`d_card_id`) values 
(1,'1','2022-11-25','PAID',1),
(2,'3','2022-11-25','PAID',1),
(3,'5','2022-11-28','PAID',1),
(4,'7','2022-12-29','PAID',2),
(5,'8','2023-02-06','PAID',3),
(6,'10','2023-03-08','PAID',4);

/*Table structure for table `tbl_room_management` */

DROP TABLE IF EXISTS `tbl_room_management`;

CREATE TABLE `tbl_room_management` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `sc_id` (`sc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_room_management` */

insert  into `tbl_room_management`(`room_id`,`sc_id`,`staff_id`,`status`,`price`,`image`,`qty`) values 
(1,1,0,'AVAILABLE',4000.00,'image/image_636a81f254ea7.jpg',20),
(2,2,0,'AVAILABLE',3500.00,'image/image_636a821a64836.jpg',20),
(3,3,0,'AVAILABLE',6000.00,'image/image_636a82c44dcde.jpg',20),
(4,4,0,'AVAILABLE',5500.00,'image/image_636a82e4e08e0.jpg',20),
(5,5,0,'AVAILABLE',8000.00,'image/image_636a830058db9.jpg',20),
(6,6,0,'AVAILABLE',7000.00,'image/image_636a8315c1fa6.jpg',20),
(7,7,0,'AVAILABLE',10000.00,'image/image_636a8333630ba.jpg',20),
(8,8,0,'AVAILABLE',9000.00,'image/image_636a83517b76d.jpg',20),
(9,9,0,'AVAILABLE',15000.00,'image/image_636b6e1713622.jpg',20),
(10,10,0,'AVAILABLE',5000.00,'image/image_636cbec8dbbc1.jpg',20),
(11,12,0,'AVAILABLE',12000.00,'image/image_637deb454fa68.jpg',20),
(12,15,0,'AVAILABLE',8700.00,'image/image_640898b46f246.jpeg',20),
(13,16,0,'AVAILABLE',8900.00,'image/image_64089e43a6365.jpg',20),
(14,19,0,'AVAILABLE',4500.00,'image/image_6408a35e6ff6e.jpg',20);

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `staff_username` varchar(25) DEFAULT NULL,
  `staff_fname` varchar(15) NOT NULL,
  `staff_lname` varchar(15) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_hno` int(3) NOT NULL,
  `staff_hname` varchar(20) NOT NULL,
  `staff_district` varchar(15) NOT NULL,
  `staff_pin` varchar(6) NOT NULL,
  `staff_gender` varchar(6) NOT NULL,
  `staff_phno` decimal(10,0) NOT NULL,
  `staff_status` varchar(10) NOT NULL,
  PRIMARY KEY (`staff_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`staff_ID`,`staff_username`,`staff_fname`,`staff_lname`,`staff_dob`,`staff_hno`,`staff_hname`,`staff_district`,`staff_pin`,`staff_gender`,`staff_phno`,`staff_status`) values 
(1,'staff1@gmail.com','Freddy','Johnny','2000-12-09',11,'DRHJ','TVM','782212','Male',9099011232,'Active'),
(2,'staff2@gmail.com','Sona','Parambil','1989-10-08',77,'Parambil','Ernakulam','682021','Female',9978867899,'Active'),
(3,'staff3@gmail.com','Karthik','A','1989-09-04',8,'ahvo','Pathanamthitta','908989','Male',7821234567,'In Active'),
(4,'Devika@gmail.com','Devika','Sreenivasan','2002-06-28',7,'Pentahomes','TCR','680005','Female',9446630912,'Active');

/*Table structure for table `tbl_subcategory` */

DROP TABLE IF EXISTS `tbl_subcategory`;

CREATE TABLE `tbl_subcategory` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(6) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subcategory` */

insert  into `tbl_subcategory`(`sc_id`,`sc_name`,`c_id`) values 
(1,'AC',1),
(2,'NON AC',1),
(3,'AC',2),
(4,'NON AC',2),
(5,'AC',3),
(6,'NON AC',3),
(7,'AC',4),
(8,'NON AC',4),
(9,'AC',5),
(10,'AC',6),
(14,'NON AC',8),
(13,'AC',8),
(15,'AC',9),
(19,'NON AC',9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
