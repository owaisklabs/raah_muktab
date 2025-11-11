/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.31 : Database - chemi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `hs_code` varchar(255) DEFAULT NULL,
  `qty` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `items` */

insert  into `items`(`id`,`name`,`hs_code`,`qty`,`created_at`,`updated_at`) values 
(1,'Hydrochloric Acid','HCL',NULL,'2023-09-27 16:30:30','2023-09-27 16:30:30'),
(2,'Sulphuric  Acid','SlA',NULL,'2023-09-27 16:31:59','2023-09-27 16:31:59');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2022_12_21_184834_create_purchases_table',1),
(5,'2023_01_02_012248_create_payments_table',1),
(6,'2023_01_02_012308_create_sales_table',1),
(7,'2023_01_22_160318_create_customers_table',1),
(8,'2023_01_22_160356_create_purchasers_table',1),
(9,'2023_01_22_161428_create_suppliers_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payments` */

/*Table structure for table `purchase_modes` */

DROP TABLE IF EXISTS `purchase_modes`;

CREATE TABLE `purchase_modes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `purchase_modes` */

insert  into `purchase_modes`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'cans','2023-09-27 22:03:07','2023-09-27 22:03:07'),
(2,'tanker','2023-09-27 22:03:07','2023-09-27 22:03:07'),
(3,'drum','2023-09-27 22:03:07','2023-09-27 22:03:07'),
(4,'bags','2023-09-27 22:03:07','2023-09-27 22:03:07');

/*Table structure for table `purchasers` */

DROP TABLE IF EXISTS `purchasers`;

CREATE TABLE `purchasers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `purchasers` */

insert  into `purchasers`(`id`,`name`,`nic`,`ntn`,`address`,`strn`,`phone`,`updated_at`,`created_at`) values 
(4,'Engro','42301-515208-5',NULL,'Karachi, Pakistan','648-852','03003644277','2023-09-27 11:57:44','2023-09-27 11:57:44'),
(5,'Tufail Chemicial','42301-515208-5',NULL,'Karachi, Pakistan','648-789','03003644277','2023-09-27 11:58:24','2023-09-27 11:58:24');

/*Table structure for table `purchases` */

DROP TABLE IF EXISTS `purchases`;

CREATE TABLE `purchases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `purchase_date` timestamp NULL DEFAULT NULL,
  `supplier_id` bigint DEFAULT NULL,
  `item_id` bigint DEFAULT NULL,
  `qty` bigint DEFAULT NULL,
  `purchase_mode_id` bigint DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `purchases` */

insert  into `purchases`(`id`,`purchase_date`,`supplier_id`,`item_id`,`qty`,`purchase_mode_id`,`updated_at`,`created_at`) values 
(1,'2023-09-27 00:00:00',4,2,244,1,'2023-09-27 18:36:56','2023-09-27 18:36:56'),
(2,'2023-09-27 00:00:00',2,1,324,1,'2023-09-27 18:51:43','2023-09-27 18:51:43');

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sale_date` timestamp NULL DEFAULT NULL,
  `customer_id` bigint DEFAULT NULL,
  `item_id` bigint DEFAULT NULL,
  `qty` bigint DEFAULT NULL,
  `sale_mode_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sales` */

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `suppliers` */

insert  into `suppliers`(`id`,`name`,`nic`,`ntn`,`strn`,`address`,`phone`,`created_at`,`updated_at`) values 
(1,'Fahim Chemical','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21'),
(2,'Ahmed Chemical','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21'),
(3,'Umer Chemical','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21'),
(4,'China Energy','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21'),
(5,'Orient Textile Mills','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21'),
(6,'Hub Power Company','42301-5105208-5','','789-654','karachi, Pakistan','03003644277','2023-09-27 17:25:18','2023-09-27 17:25:21');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(3,'MyUsername','admin@chemi.com',NULL,'$2y$10$PFmKbya6Duzvin2TB1v/tu50NKXY8QyLHZiqy5wg7J9xSPGDk/WQK',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
