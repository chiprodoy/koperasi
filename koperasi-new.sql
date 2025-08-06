/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.4.16-MariaDB-log : Database - koperasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`koperasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `koperasi`;

/*Table structure for table `anggotas` */

DROP TABLE IF EXISTS `anggotas`;

CREATE TABLE `anggotas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `nomor_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` int(11) NOT NULL DEFAULT 1,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_mulai_anggota` datetime NOT NULL,
  `status_keanggotaan` int(11) NOT NULL DEFAULT 1,
  `jenis_keanggotaan` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anggotas_nomor_anggota_unique` (`nomor_anggota`),
  UNIQUE KEY `anggotas_nik_unique` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `anggotas` */

insert  into `anggotas`(`id`,`uuid`,`user_id`,`nomor_anggota`,`nik`,`nama`,`tgl_lahir`,`jenis_kelamin`,`pekerjaan`,`alamat`,`kelurahan`,`kecamatan`,`kota`,`provinsi`,`telepon`,`nama_ibu`,`photo`,`tgl_mulai_anggota`,`status_keanggotaan`,`jenis_keanggotaan`,`created_at`,`updated_at`,`deleted_at`) values (1,'fb7b5e1a-bdb2-45a4-8678-c83c18276c36',0,'2025072000002','001','tess','2020-02-04',1,'petani','tes','hh','hh','Kab. PALI','Sumatera Selatan','08123','tes',NULL,'2025-07-16 00:00:00',1,2,'2025-07-20 12:16:51','2025-07-20 14:39:08',NULL),(3,'045dea8e-63d3-4a57-ab85-7c43c6d12e65',0,'2025072000003','234','coba','2025-07-15',1,'petani','jln tes','hh','hh','Kab. PALI','Sumatera Selatan','08123','coba',NULL,'2025-07-16 00:00:00',1,1,'2025-07-20 15:06:14','2025-07-20 15:09:32','2025-07-20 15:09:32'),(4,'f377f318-5585-37d5-9fd5-ee9ae771e264',10,'2025073000001','24938','Vanesa Palastri','1997-07-25',1,'petani','Kpg. Sadang Serang No. 238, Tangerang 12209, Sultra','tanah abang','tanah abang','Batu','DKI Jakarta','+2340838151234','Melinda Kania Oktaviani S.Ked',NULL,'2025-07-30 08:35:36',1,2,'2025-07-30 08:35:36','2025-07-30 08:35:36',NULL);

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `isi_komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

/*Table structure for table `counters` */

DROP TABLE IF EXISTS `counters`;

CREATE TABLE `counters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deviceid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `counterable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counterable_id` bigint(20) unsigned NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `counters_counterable_type_counterable_id_index` (`counterable_type`,`counterable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `counters` */

/*Table structure for table `discusses` */

DROP TABLE IF EXISTS `discusses`;

CREATE TABLE `discusses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `discuss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discuss_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `discusses` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `file_categories` */

DROP TABLE IF EXISTS `file_categories`;

CREATE TABLE `file_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slugs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `file_categories` */

insert  into `file_categories`(`id`,`name`,`slugs`,`created_at`,`updated_at`,`deleted_at`) values (1,'Hypnosis','hypnosis','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(2,'HPHT','hpht','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL);

/*Table structure for table `file_category_file` */

DROP TABLE IF EXISTS `file_category_file`;

CREATE TABLE `file_category_file` (
  `file_id` bigint(20) unsigned NOT NULL,
  `file_category_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `file_category_file` */

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `file_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `files` */

/*Table structure for table `forum` */

DROP TABLE IF EXISTS `forum`;

CREATE TABLE `forum` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `konten_forum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `like` int(11) NOT NULL,
  `show` int(11) NOT NULL,
  `share` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_user_id_foreign` (`user_id`),
  CONSTRAINT `forum_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `forum` */

/*Table structure for table `forum_komen` */

DROP TABLE IF EXISTS `forum_komen`;

CREATE TABLE `forum_komen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `forum_id` bigint(20) unsigned NOT NULL,
  `komen_forum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_komen_user_id_foreign` (`user_id`),
  KEY `forum_komen_forum_id_foreign` (`forum_id`),
  CONSTRAINT `forum_komen_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`id`) ON DELETE CASCADE,
  CONSTRAINT `forum_komen_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `forum_komen` */

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeri` */

/*Table structure for table `harga_sawits` */

DROP TABLE IF EXISTS `harga_sawits`;

CREATE TABLE `harga_sawits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_update_harga` date NOT NULL,
  `harga` double unsigned NOT NULL,
  `komoditas_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `harga_sawits` */

insert  into `harga_sawits`(`id`,`uuid`,`keterangan`,`tgl_update_harga`,`harga`,`komoditas_id`,`created_at`,`updated_at`,`sumber`) values (1,'f03153c9-91d7-478d-87dd-b743d5a089e7','umur 3 tahun','2025-07-22',2949.91,1,'2025-07-22 14:51:37','2025-07-22 14:51:37','PT. Melania Sawit'),(2,'b8adbc46-d68d-4621-9c90-af28132ddb0f','umur 3 tahun','2025-07-18',2949.91,1,'2025-07-22 15:15:07','2025-07-22 15:15:07','PT. Melania Sawit'),(3,'09ed2dd1-16e7-4a66-a99b-56770c550cf5','umur 5 tahun','2025-07-22',2949.91,1,'2025-07-22 16:21:55','2025-07-22 16:27:52','PT. Melania Sawit');

/*Table structure for table `hasil_panens` */

DROP TABLE IF EXISTS `hasil_panens`;

CREATE TABLE `hasil_panens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_id` bigint(20) unsigned NOT NULL,
  `tgl_panen` date NOT NULL,
  `jumlah_hasil_panen` double NOT NULL,
  `luas_lahan` double NOT NULL,
  `harga_per_kg` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `hasil_panens` */

insert  into `hasil_panens`(`id`,`uuid`,`anggota_id`,`tgl_panen`,`jumlah_hasil_panen`,`luas_lahan`,`harga_per_kg`,`created_at`,`updated_at`) values (1,'786e8899-f121-4541-8a2d-69e24453b777',4,'2025-07-30',2,2,3000,'2025-07-30 09:11:34','2025-07-30 20:41:43'),(2,'b56cd9a8-1c91-4059-9568-eea518fd5718',4,'2025-07-16',1,2,2500,'2025-07-30 20:42:56','2025-07-30 20:42:56'),(3,'84031453-db15-4d97-a84a-3f1232c418c2',4,'2025-07-02',1,2,2000,'2025-07-30 20:52:04','2025-07-30 20:52:04'),(4,'4f53d36b-acad-44b7-9971-91d5687a2be8',4,'2025-06-18',1,2,2600,'2025-07-30 20:55:38','2025-07-30 20:55:38'),(5,'01500b18-77a2-4ede-a461-dfffed0efc6e',4,'2025-06-04',3,2,2500,'2025-07-30 20:56:25','2025-07-30 20:56:25');

/*Table structure for table `jenis_produks` */

DROP TABLE IF EXISTS `jenis_produks`;

CREATE TABLE `jenis_produks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenis_produks` */

/*Table structure for table `jenis_simpanans` */

DROP TABLE IF EXISTS `jenis_simpanans`;

CREATE TABLE `jenis_simpanans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jenis_simpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jenis_simpanans` */

insert  into `jenis_simpanans`(`id`,`uuid`,`nama_jenis_simpanan`,`created_at`,`updated_at`,`deleted_at`) values (1,'77001584-65d8-11f0-9281-00090ffe0001','Simpanan Pokok','2025-07-21 09:14:43',NULL,NULL),(2,'8f206c06-65d8-11f0-9281-00090ffe0001','Simpanan Wajib','2025-07-21 09:15:23',NULL,NULL),(3,'934e68e1-65d8-11f0-9281-00090ffe0001','Simpanan Sukarela','2025-07-21 09:15:30',NULL,NULL);

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `komoditas` */

DROP TABLE IF EXISTS `komoditas`;

CREATE TABLE `komoditas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_komoditas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `komoditas` */

insert  into `komoditas`(`id`,`uuid`,`nama_komoditas`,`satuan`,`deleted_at`,`created_at`,`updated_at`) values (1,'930156ca-66b3-11f0-a94c-00090ffe0001','TBS','Kg',NULL,'2025-07-22 11:23:09',NULL),(2,'e1a82637-66b3-11f0-a94c-00090ffe0001','CPO','Kg',NULL,'2025-07-22 11:25:21',NULL),(3,'fc15a3f6-66b3-11f0-a94c-00090ffe0001','Inti Sawit (Kernel)','Kg',NULL,'2025-07-22 11:26:06',NULL);

/*Table structure for table `media` */

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `media` */

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'box',
  `menu_id` bigint(20) unsigned DEFAULT NULL,
  `isPublic` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`label`,`mod_name`,`icon`,`menu_id`,`isPublic`,`sort_order`,`deleted_at`,`created_at`,`updated_at`) values (1,'Dashboard','dashboard','box',NULL,0,1,NULL,'2025-01-16 07:43:37','2025-01-16 07:43:37'),(2,'Post','post','box',NULL,0,2,NULL,'2025-01-16 07:43:37','2025-01-16 07:43:37'),(3,'Home','http://127.0.0.1:8000','box',NULL,1,1,NULL,'2025-07-17 00:00:00',NULL),(4,'Tentang Kami','about','box',NULL,1,2,NULL,'2025-07-17 00:00:00',NULL),(5,'Visi Misi','visi-misi','box',4,1,1,NULL,'2025-07-17 00:00:00',NULL),(6,'Struktur Organisasi','struktur-organisasi','box',4,1,2,NULL,'2025-07-17 00:00:00',NULL),(7,'Legalitas','legalitas','box',4,1,3,NULL,'2025-07-17 00:00:00',NULL),(8,'Program Kerja','program-kerja','box',4,1,4,NULL,'2025-07-17 00:00:00',NULL),(9,'Hubungi Kami','hubungi-kami','box',4,1,5,NULL,'2025-07-17 00:00:00',NULL),(10,'Unit Usaha','unit-usaha','box',NULL,1,3,NULL,'2025-07-17 00:00:00',NULL),(11,'Keangotaan & Mitra','#','box',NULL,1,4,NULL,'2025-07-17 00:00:00',NULL),(12,'Pendaftaran','pendaftaran','box',11,1,1,NULL,'2025-07-17 00:00:00',NULL),(13,'Data Anggota','data-anggota','box',11,1,2,NULL,'2025-07-17 00:00:00',NULL),(14,'Kemitraan','kemitraan','box',11,1,3,NULL,'2025-07-17 00:00:00',NULL),(15,'Budidaya','#','box',NULL,1,4,NULL,'2025-07-17 00:00:00',NULL),(16,'Berita','http://127.0.0.1:8000/kategori/berita','box',NULL,1,5,NULL,'2025-07-17 00:00:00',NULL),(17,'Berita','http://127.0.0.1:8000/admin/browse/berita','box',NULL,0,5,NULL,'2025-07-17 00:00:00',NULL),(18,'Tentang Kami','http://127.0.0.1:8000/admin/browse/about','box',NULL,0,2,NULL,'2025-07-17 00:00:00',NULL),(19,'Keangotaan & Mitra','http://127.0.0.1:8000/admin/browse/anggota-dan-mitra','box',NULL,0,3,NULL,'2025-07-17 00:00:00',NULL),(20,'Budidaya','admin-budidaya','box',NULL,0,4,NULL,'2025-07-17 00:00:00',NULL),(21,'Update Harga Sawit','http://127.0.0.1:8000/admin/admin-harga-sawit','box',NULL,0,6,NULL,'2025-07-17 00:00:00',NULL),(22,'Anggota Koperasi','http://127.0.0.1:8000/admin/admin-anggota-koperasi','box',NULL,0,7,NULL,'2025-07-17 00:00:00',NULL),(23,'Simpanan Sukarela','admin-simpanan-sukarela','box',21,0,2,'2025-07-17 00:00:00','2025-07-17 00:00:00',NULL),(24,'Persiapan','http://127.0.0.1:8000/admin/browse/persiapan-lahan','box',20,0,1,NULL,'2025-07-17 00:00:00',NULL),(25,'Pembibitan','http://127.0.0.1:8000/admin/browse/pembibitan','box',20,0,2,NULL,'2025-07-18 07:43:37',NULL),(26,'Penanaman','http://127.0.0.1:8000/admin/browse/penanaman','box',20,0,3,NULL,'2025-07-18 07:43:37',NULL),(27,'Pemeliharaan','http://127.0.0.1:8000/admin/browse/pemeliharaan','box',20,0,4,NULL,'2025-07-18 07:43:37',NULL),(28,'Panen','http://127.0.0.1:8000/admin/browse/panen','box',20,0,5,NULL,'2025-07-18 07:43:37',NULL),(29,'Pasca Panen','http://127.0.0.1:8000/admin/browse/pasca-panen','box',20,0,6,NULL,'2025-07-18 07:43:37',NULL),(31,'Unit Usaha','http://127.0.0.1:8000/admin/browse/unit-usaha','box',NULL,0,2,NULL,'2025-07-18 07:43:37',NULL),(32,'Statistik','http://127.0.0.1:8000/admin/statistik','box',NULL,0,8,NULL,'2025-07-18 07:43:37',NULL),(33,'Testimoni','http://127.0.0.1:8000/admin/testimoni','box',NULL,0,9,NULL,'2025-07-18 07:43:37',NULL),(34,'Persiapan Lahan','http://127.0.0.1:8000/kategori/persiapan-lahan','box',15,1,1,NULL,'2025-07-18 07:43:37',NULL),(35,'Pembibitan','http://127.0.0.1:8000/kategori/pembibitan','box',15,1,2,NULL,'2025-07-18 07:43:37',NULL),(36,'Penanaman','http://127.0.0.1:8000/kategori/penanaman','box',15,1,3,NULL,'2025-07-18 07:43:37',NULL),(37,'Pemeliharaan','http://127.0.0.1:8000/kategori/pemeliharaan','box',15,1,4,NULL,'2025-07-18 07:43:37',NULL),(38,'Panen','http://127.0.0.1:8000/kategori/panen','box',15,1,5,NULL,'2025-07-18 07:43:37',NULL),(39,'Pasca Panen','http://127.0.0.1:8000/kategori/pasca-panen','box',15,1,6,NULL,'2025-07-18 07:43:37',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2020_10_18_131658_create_roles_table',1),(6,'2020_10_18_131732_create_permissions_table',1),(7,'2020_10_20_174337_permission_role',1),(8,'2022_04_17_060802_role_user',1),(9,'2022_05_19_141639_create_jobs_table',1),(10,'2022_07_01_214131_create_posts_table',1),(11,'2022_07_01_214147_create_post_categories_table',1),(12,'2022_07_09_005600_realtion_file_category',1),(13,'2022_07_09_005600_realtion_post_category',1),(14,'2022_07_17_005959_create_files_table',1),(15,'2022_07_17_010231_create_file_categories_table',1),(16,'2022_09_15_132350_create_discusses_table',1),(17,'2022_09_15_143851_create_halal_certificates_table',1),(18,'2022_09_15_144557_create_jenis_produks_table',1),(19,'2022_09_20_140620_create_menus_table',1),(20,'2022_11_24_225732_create_produk_halals_table',1),(21,'2022_11_27_061250_alter_jenis_produk_add_uid',1),(22,'2022_12_07_134104_add_coloumn_uuid_to_produk_halal',1),(23,'2022_12_16_121056_add_coloumn_user_i_d_to_post',1),(24,'2023_01_09_095747_create_forum_table',1),(25,'2023_01_09_103814_create_forum_komen_table',1),(26,'2023_01_12_061342_create_galeri_table',1),(27,'2023_01_16_150337_create_comments_table',1),(28,'2023_01_27_041107_create_media_table',1),(29,'2023_03_11_234028_create_post_counters_table',1),(30,'2023_03_12_225955_create_counters_table',1),(31,'2023_03_13_001200_add_share_coloumn_posts_table',1),(32,'2023_03_13_230901_add_polymorph_to_counters_table',1),(33,'2024_10_14_034712_create_questions_table',1),(34,'2024_10_16_070428_create_accuracy_questions_table',1),(35,'2024_10_16_070444_create_personality_questions_table',1),(36,'2024_10_29_035446_create_bahasa_indonesia_questions_table',1),(37,'2024_10_29_035502_create_english_questions_table',1),(38,'2024_10_29_035917_create_numeric_questions_table',1),(39,'2024_10_29_035932_create_tpa_questions_table',1),(40,'2024_10_29_035941_create_tpu_questions_table',1),(41,'2024_10_29_035948_create_twk_questions_table',1),(42,'2024_12_04_072233_create_tips_and_tricks_table',1),(43,'2025_07_18_040405_alter_table_posts',2),(44,'2025_07_18_162902_add_showin_coloumn_posts_table',3),(45,'2025_07_19_212808_create_anggotas_table',4),(46,'2025_07_19_223458_create_simpanan_anggotas_table',4),(47,'2025_07_19_223841_create_jenis_simpanans_table',4),(48,'2025_07_19_224609_create_harga_sawits_table',4),(49,'2025_07_21_025739_alter_simpanan_anggota_add_soft_deletes',5),(50,'2025_07_22_110756_add_column_komoditas_to_harga_sawit',6),(51,'2025_07_22_111059_create_komoditas_table',6),(52,'2025_07_22_115010_add_column_sumber_to_harga_sawits',7),(53,'2025_07_22_214051_create_testimonis_table',8),(54,'2025_07_22_215016_create_statistiks_table',8),(55,'2025_07_29_145451_create_hasil_panens_table',9),(56,'2025_07_29_192357_add_column_user_id_table_anggotas',9);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_modify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role` */

insert  into `permission_role`(`id`,`role_id`,`permission_id`,`deleted_at`,`created_at`,`updated_at`,`user_modify`,`user_id`) values (1,1,1,NULL,NULL,NULL,'su',1),(2,2,2,NULL,NULL,NULL,'su',1),(3,2,3,NULL,NULL,NULL,'su',1),(4,2,4,NULL,NULL,NULL,'su',1),(5,2,5,NULL,NULL,NULL,'su',1),(6,2,6,NULL,NULL,NULL,'su',1),(7,2,7,NULL,NULL,NULL,'su',1),(8,2,8,NULL,NULL,NULL,'su',1),(9,2,9,NULL,NULL,NULL,'su',1),(10,2,10,NULL,NULL,NULL,'su',1),(11,2,11,NULL,NULL,NULL,'su',1),(12,2,12,NULL,NULL,NULL,'su',1),(13,2,13,NULL,NULL,NULL,'su',1),(14,2,14,NULL,NULL,NULL,'su',1),(15,2,15,NULL,NULL,NULL,'su',1),(16,2,16,NULL,NULL,NULL,'su',1),(17,2,17,NULL,NULL,NULL,'su',1),(18,2,18,NULL,NULL,NULL,'su',1),(19,2,19,NULL,NULL,NULL,'su',1),(20,2,20,NULL,NULL,NULL,'su',1),(21,2,21,NULL,NULL,NULL,'su',1),(22,2,24,NULL,NULL,NULL,'su',1),(23,2,25,NULL,NULL,NULL,'su',1),(24,2,26,NULL,NULL,NULL,'su',1),(25,2,27,NULL,NULL,NULL,'su',1),(26,2,28,NULL,NULL,NULL,'su',1),(27,2,29,NULL,NULL,NULL,'su',1),(28,2,31,NULL,NULL,NULL,'su',1),(29,2,32,NULL,NULL,NULL,'su',1),(30,2,33,NULL,NULL,NULL,'su',1),(31,2,34,NULL,NULL,NULL,'su',1),(32,2,35,NULL,NULL,NULL,'su',1),(33,2,36,NULL,NULL,NULL,'su',1),(34,2,37,NULL,NULL,NULL,'su',1),(35,2,38,NULL,NULL,NULL,'su',1),(36,2,39,NULL,NULL,NULL,'su',1),(37,2,40,NULL,NULL,NULL,'su',1),(38,2,41,NULL,NULL,NULL,'su',1),(39,2,42,NULL,NULL,NULL,'su',1),(40,2,43,NULL,NULL,NULL,'su',1),(41,2,44,NULL,NULL,NULL,'su',1),(42,2,45,NULL,NULL,NULL,'su',1),(43,2,46,NULL,NULL,NULL,'su',1),(44,2,47,NULL,NULL,NULL,'su',1),(45,2,48,NULL,NULL,NULL,'su',1),(46,2,49,NULL,NULL,NULL,'su',1),(47,2,50,NULL,NULL,NULL,'su',1),(48,2,51,NULL,NULL,NULL,'su',1),(49,2,52,NULL,NULL,NULL,'su',1),(50,2,53,NULL,NULL,NULL,'su',1),(51,2,54,NULL,NULL,NULL,'su',1),(52,2,55,NULL,NULL,NULL,'su',1),(53,2,56,NULL,NULL,NULL,'su',1),(54,2,57,NULL,NULL,NULL,'su',1),(55,2,58,NULL,NULL,NULL,'su',1),(56,2,59,NULL,NULL,NULL,'su',1),(57,2,60,NULL,NULL,NULL,'su',1),(58,2,61,NULL,NULL,NULL,'su',1),(59,2,62,NULL,NULL,NULL,'su',1),(60,2,63,NULL,NULL,NULL,'su',1),(61,2,64,NULL,NULL,NULL,'su',1),(62,2,65,NULL,NULL,NULL,'su',1),(63,2,66,NULL,NULL,NULL,'su',1),(64,2,67,NULL,NULL,NULL,'su',1);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_modify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`permission_name`,`mod_name`,`deleted_at`,`created_at`,`updated_at`,`user_modify`,`user_id`) values (1,'Full Access','*',NULL,'2025-01-16 07:43:37','2025-01-16 07:43:37','su',1),(2,'read','about',NULL,'2025-07-18 07:43:37',NULL,'su',1),(3,'update','about',NULL,'2025-07-18 07:43:37',NULL,'su',1),(4,'modify','about:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(5,'modify','about:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(6,'modify','about:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(7,'read','anggota-dan-mitra',NULL,'2025-07-18 07:43:37',NULL,'su',1),(8,'update','anggota-dan-mitra',NULL,'2025-07-18 07:43:37',NULL,'su',1),(9,'modify','anggota-dan-mitra:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(10,'modify','anggota-dan-mitra:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(11,'modify','anggota-dan-mitra:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(12,'create','persiapan-lahan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(13,'read','admin-budidaya',NULL,'2025-07-18 07:43:37',NULL,'su',1),(14,'read','admin-manajemen-koperasi',NULL,'2025-07-18 07:43:37',NULL,'su',1),(15,'read','admin-anggota-koperasi',NULL,'2025-07-18 07:43:37',NULL,'su',1),(16,'read','admin-simpanan-sukarela',NULL,'2025-07-18 07:43:37',NULL,'su',1),(17,'read','persiapan-lahan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(18,'update','persiapan-lahan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(19,'modify','persiapan-lahan:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(20,'modify','persiapan-lahan:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(21,'modify','persiapan-lahan:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(24,'read','pembibitan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(25,'update','pembibitan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(26,'modify','pembibitan:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(27,'modify','pembibitan:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(28,'modify','pembibitan:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(29,'create','pembibitan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(31,'delete','pembibitan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(32,'read','penanaman',NULL,'2025-07-18 07:43:37',NULL,'su',1),(33,'update','penanaman',NULL,'2025-07-18 07:43:37',NULL,'su',1),(34,'modify','penanaman:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(35,'modify','penanaman:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(36,'modify','penanaman:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(37,'create','penanaman',NULL,'2025-07-18 07:43:37',NULL,'su',1),(38,'delete','penanaman',NULL,'2025-07-18 07:43:37',NULL,'su',1),(39,'read','pemeliharaan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(40,'update','pemeliharaan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(41,'modify','pemeliharaan:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(42,'modify','pemeliharaan:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(43,'modify','pemeliharaan:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(44,'create','pemeliharaan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(45,'delete','pemeliharaan',NULL,'2025-07-18 07:43:37',NULL,'su',1),(46,'read','panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(47,'update','panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(48,'modify','panen:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(49,'modify','panen:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(50,'modify','panen:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(51,'create','panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(52,'delete','panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(53,'read','pasca-panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(54,'update','pasca-panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(55,'modify','pasca-panen:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(56,'modify','pasca-panen:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(57,'modify','pasca-panen:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(58,'create','pasca-panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(59,'delete','pasca-panen',NULL,'2025-07-18 07:43:37',NULL,'su',1),(60,'read','admin-harga-sawit',NULL,'2025-07-18 07:43:37',NULL,'su',1),(61,'read','unit-usaha',NULL,'2025-07-18 07:43:37',NULL,'su',1),(62,'update','unit-usaha',NULL,'2025-07-18 07:43:37',NULL,'su',1),(63,'modify','unit-usaha:cover',NULL,'2025-07-18 07:43:37',NULL,'su',1),(64,'modify','unit-usaha:description',NULL,'2025-07-18 07:43:37',NULL,'su',1),(65,'modify','unit-usaha:attachment',NULL,'2025-07-18 07:43:37',NULL,'su',1),(66,'create','unit-usaha',NULL,'2025-07-18 07:43:37',NULL,'su',1),(67,'delete','unit-usaha',NULL,'2025-07-18 07:43:37',NULL,'su',1);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`expires_at`,`created_at`,`updated_at`) values (1,'App\\Models\\User',2,'jayasempurna','9b3a30771eaccb72feae3fb814b87ef94605916f3cdb7c550ff9c38b74bbb8dc','[\"*\"]',NULL,NULL,'2025-07-30 08:44:09','2025-07-30 08:44:09'),(2,'App\\Models\\User',10,'jayasempurna','4d934a247d8f0b001b2cc2d54b275e8982a4485b6716dd4b9f4fe6e7cd6d9dc0','[\"*\"]','2025-07-30 17:54:00',NULL,'2025-07-30 08:44:42','2025-07-30 17:54:00'),(3,'App\\Models\\User',10,'jayasempurna','2a54c129ea98ac0c343949b05d3f0c27258b07811a49ad214f339564d47801aa','[\"*\"]',NULL,NULL,'2025-07-30 11:21:53','2025-07-30 11:21:53'),(4,'App\\Models\\User',10,'jayasempurna','dc21342965ce142353a6d537ffa74ae3a29bc9d41d04b6e76a2ab85c5cf24b2c','[\"*\"]',NULL,NULL,'2025-07-30 14:22:38','2025-07-30 14:22:38'),(5,'App\\Models\\User',10,'jayasempurna','43dcc26e5d7ec43ace294e5897d95c34684dd15a27c30fcc51b14c0e18b7ed0a','[\"*\"]',NULL,NULL,'2025-07-30 14:53:26','2025-07-30 14:53:26'),(6,'App\\Models\\User',10,'jayasempurna','59c73a8f2715b9960e8f764e0256ebf5aae036dc4c13cdc1af1fd454e91d7cea','[\"*\"]',NULL,NULL,'2025-07-30 14:56:29','2025-07-30 14:56:29'),(7,'App\\Models\\User',10,'jayasempurna','e8e578724391ed7f115885195007b2e387a3f4094d1312caaee239e6f6f6b242','[\"*\"]',NULL,NULL,'2025-07-30 14:58:58','2025-07-30 14:58:58'),(8,'App\\Models\\User',10,'jayasempurna','4d0fd7ff4903b9c659a776d9e6a549d450834a8cf30378fe8ac3ddc5a234f561','[\"*\"]',NULL,NULL,'2025-07-30 15:00:26','2025-07-30 15:00:26'),(9,'App\\Models\\User',10,'jayasempurna','e3bb446ebfa46fb418fff6afd25e20e6f7fb65a488bb2a6482f8dc96a6ccfe17','[\"*\"]',NULL,NULL,'2025-07-30 15:01:54','2025-07-30 15:01:54'),(10,'App\\Models\\User',10,'jayasempurna','25770a380999ab83dd2c8a2067f395492ebb49925d8f113e19f3c4bef41a0481','[\"*\"]','2025-07-30 20:56:25',NULL,'2025-07-30 17:32:11','2025-07-30 20:56:25'),(11,'App\\Models\\User',10,'jayasempurna','07faf78478362c0fd3f488e5f18201c702561b21c6724bb8e47e3bd18575d506','[\"*\"]','2025-07-31 10:17:41',NULL,'2025-07-31 08:42:20','2025-07-31 10:17:41');

/*Table structure for table `post_categories` */

DROP TABLE IF EXISTS `post_categories`;

CREATE TABLE `post_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_categories` */

insert  into `post_categories`(`id`,`parent_category_id`,`name`,`description`,`slugs`,`icon`,`cover`,`uuid`,`created_at`,`updated_at`,`deleted_at`) values (1,NULL,'Profil Koperasi',NULL,'about',NULL,NULL,'08769fda-aa56-4b49-9df1-af624616a11f','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(2,NULL,'Keanggotaan & Mitra',NULL,'anggota-dan-mitra',NULL,NULL,'30616abf-4be0-4f27-9de9-0cb960fb7e30','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(3,NULL,'Budidaya',NULL,'budidaya',NULL,NULL,'93d41ab9-c647-463b-91eb-6ddb8b52d1f0','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(4,NULL,'Berita',NULL,'berita',NULL,NULL,'71541a9b-0f7f-48c0-bd22-c2eab767b3b7','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(5,NULL,'Headline',NULL,'headline',NULL,NULL,'9f7ba7ec-4fb5-47ae-b380-8f031a8077b2','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(6,3,'Persiapan Lahan',NULL,'persiapan-lahan',NULL,NULL,'e618bc25-2ec0-4bf3-b2b2-b6fd1e4767ca','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(7,3,'Pembibitan',NULL,'pembibitan',NULL,NULL,'eec706f5-8596-49d7-88d0-a41f8ed4f7f0','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(8,3,'Penanaman',NULL,'penanaman',NULL,NULL,'073cbac4-acfa-40bb-a41e-2111e7d9bf86','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(9,3,'Pemeliharaan',NULL,'pemeliharaan',NULL,NULL,'e49c61f1-d63a-4840-aba9-84b225937a23','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(10,3,'Panen',NULL,'panen',NULL,NULL,'23164178-9bfd-4114-a236-e6aa67ee9c2d','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(11,3,'Pasca Panen',NULL,'pasca-panen',NULL,NULL,'7b99e149-63d5-4c36-8df8-eec52fdeb4f1','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL),(12,3,'Unit Usaha',NULL,'unit-usaha',NULL,NULL,'45459566-8489-42e1-b5b5-b6dc6886e2ba','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL);

/*Table structure for table `post_counters` */

DROP TABLE IF EXISTS `post_counters`;

CREATE TABLE `post_counters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deviceid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_counters` */

/*Table structure for table `post_post_category` */

DROP TABLE IF EXISTS `post_post_category`;

CREATE TABLE `post_post_category` (
  `post_id` bigint(20) unsigned NOT NULL,
  `post_category_id` bigint(20) unsigned NOT NULL,
  `user_modify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_post_category` */

insert  into `post_post_category`(`post_id`,`post_category_id`,`user_modify`) values (1,4,'su'),(2,4,'su'),(3,1,'su'),(4,1,'su'),(5,1,'su'),(6,1,'su'),(7,1,'su'),(8,1,'su'),(9,2,'su'),(10,2,'su'),(11,6,'su'),(12,7,'su'),(13,8,'su'),(14,9,'su'),(15,10,'su'),(16,11,'su'),(17,12,'su'),(18,12,'su'),(19,12,'su');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` int(10) unsigned DEFAULT 0,
  `like_count` int(10) unsigned DEFAULT 0,
  `share_count` int(10) unsigned DEFAULT 0,
  `post_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `show_in` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`description`,`attachment`,`cover`,`tags`,`view_count`,`like_count`,`share_count`,`post_status`,`post_type`,`slug`,`uuid`,`created_at`,`updated_at`,`deleted_at`,`writer`,`show_in`) values (1,'Pengumuman','<h1>Pengumuman Rekrutmen AKPOL Gelombang I Tahun 2023</h1><div class=\"post-content\">\r\n\r\n            <p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">TRIBRATANEWS SLEMAN -</span></b><span style=\"font-size:14.0pt;font-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;=\"\" mso-themecolor:text1;mso-fareast-language:in\"=\"\">&nbsp;Kepolisian Negara Republik\r\nIndonesia (Polri) membuka pendaftaran untuk anggota Tamtama Polri mulai 12 September\r\nsampai 21 September 2022. Untuk menjaring pendaftar, Polri telah melakukan\r\nberbagai sosialisasi terbuka, baik melalui media massa, spanduk, baliho maupun\r\nsosialisasi secara langsung ke masyarakat atau ke sekolah.</span><span style=\"font-size:14.0pt;font-family:\" lato\",sans-serif;mso-fareast-font-family:=\"\" \"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";color:black;=\"\" mso-themecolor:text1;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Bagi yang berminat dan memenuhi syarat pendaftaran,\r\nsemua peserta perlu mendaftar online terlebih dahulu melalui laman\r\nhttps://penerimaan.polri.go.id/&nbsp; Setelah itu pendaftar perlu mengisi form\r\nregistrasi, mengunggah berkas-berkas yang diperlukan, dan melakukan verifikasi\r\ndi Polres/Polda setempat.</span><span style=\"font-size:14.0pt;font-family:\" lato\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";=\"\" color:black;mso-themecolor:text1;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Semua tahapan seleksi dilakukan secara terbuka di mana\r\nseluruh peserta seleksi bisa melihat sendiri hasil seleksi di setiap\r\ntahapannya. Mulai dari proses penerimaan berkas, pemeriksan administrasi,\r\nkesehatan, tes akademik, psikotes, dan kesamaptaan dan jasmani hingga proses\r\nkelulusan semua dalam pengawasan.</span><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Sesuai perintah Kapolri yang menegaskan bahwa dalam\r\nsetiap tahun anggaran penerimaan, setiap Panitia Polda harus membentuk Tim\r\nPengawas Internal yaitu terdiri dari Itwasda dan Bidpropam Polda setempat dan\r\nTim Pengawasa Eksternal yaitu terdiri dari Diknas, Disdukcapil, IDI, HIMPSI,\r\nAkademisi, Guru Olahraga, Tokoh Masyarakat, Tokoh Adat, LSM, Media Massa untuk\r\nmengawasi/menyaksikan pelaksanaan setiap tahapan seleksi secara ketat, terus\r\nmenerus, transparan.</span><span style=\"font-size:14.0pt;font-family:\" lato\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";=\"\" color:black;mso-themecolor:text1;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Diharapkan masyarakat terus menerus berperan serta dalam\r\nmengawasi setiap tahapan seleksi penerimaan anggota Polri, sehingga akan\r\nterjaring anggota Polri yang berkalitas, memiliki Integritas yang tinggi dalam\r\npekerjaan dan terpenting adalah memiliki sikap melindungi, mengayomi dan\r\nmelayani masyarakat.</span><span style=\"font-size:14.0pt;font-family:\" lato\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";=\"\" color:black;mso-themecolor:text1;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Untuk memperbaiki proses rekruitmen anggota Polri agar\r\nsemakin berkualitas, Polri telah melakukan perubahan substansi dan kultur yang\r\ndiwujudkan dalam akselerasi transformasi di tubuh Polri, utamanya pada proses\r\npenerimaan anggota Polri dengan mengacu pada prinsip dasar penerimaan yaitu “BETAH”\r\nyang merupakan kepanjangan dari Bersih, Transparan, Akuntabel dan Humanis.</span><span style=\"font-size:14.0pt;font-family:\" lato\",sans-serif;mso-fareast-font-family:=\"\" \"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";color:black;=\"\" mso-themecolor:text1;mso-fareast-language:in\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\">Untuk informasi yang lengkap, detil dan terbarukan,\r\ndari syarat hingga hasil seleksi, silahkan buka situs resmi rekrutmen Polri di\r\n: https://penerimaan.polri.go.id/</span><span style=\"font-size:14.0pt;\r\nfont-family:\" lato\",sans-serif;mso-fareast-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-bidi-font-family:\"times=\"\" roman\";color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><img src=\"https://i.imgur.com/ULmQnnu.jpg\" width=\"329\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\nfont-family:\" arial=\"\" unicode=\"\" ms\",sans-serif;color:black;mso-themecolor:text1;=\"\" mso-fareast-language:in\"=\"\"><img src=\"https://i.imgur.com/oKudBD2.jpg\" width=\"329\"><br></span></p><p></p>\r\n\r\n        </div> ',NULL,NULL,NULL,0,0,0,'publish','blog','dikbang-akpol-pengumuman','ed172c5f-aa28-499a-9447-32598d8cfc54','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL,'',1),(2,'Persyaratan','Quidem illum impedit pariatur dolor. Quo corporis qui eum aliquid vel optio. Ut non cupiditate nisi ut fugit molestias tempore minima. Dolorum rerum qui enim rerum ab.',NULL,NULL,NULL,0,0,0,'publish','blog','dikbang-akpol-persyaratan','a4e1f4ec-159d-46f9-a990-12e774622934','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL,'',1),(3,'Sejarah','Ducimus est voluptatem voluptas. Molestiae in atque adipisci iste qui fugit eos. Ut est reiciendis praesentium debitis illum neque enim.',NULL,NULL,NULL,0,0,0,'publish','blog','sejarah','ebf68284-5330-4564-a2ff-82adbeee731f','2025-01-16 07:43:37','2025-01-16 07:43:37',NULL,'admin',1),(4,'Visi & Misi','<p>Koperasi Sawitt Sejahtera berdiri sejak 2010 dan berfokus pada peningkatan pendapatan dan kesejahteraan petani sawit di Sumatera Selatan.</p>\r\n\r\n<p>Visi</p>\r\n\r\n<p>Menjadi koperasi sawit yang modern dan berdaya saing global.</p>\r\n\r\n<p>Misi</p>\r\n\r\n<ul>\r\n	<li>Meningkatkan pendapatan petani</li>\r\n	<li>Menyediakan sarana dan pelatihan pertanian</li>\r\n	<li>Mewujudkan koperasi digital yang transparan</li>\r\n</ul>',NULL,NULL,NULL,NULL,0,0,'publish','blog','visi-misi','d76f1e4e-19e7-4a40-90f1-7a2ac6556132','2025-07-18 15:10:34','2025-07-18 16:24:12',NULL,'admin',1),(5,'Struktur Organisasi','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','struktur-organisasi','69ef92e9-5e87-4155-9997-f88213e38060','2025-07-18 15:12:49','2025-07-18 15:12:49',NULL,'admin',1),(6,'Legalitas','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','legalitas','309adb48-5500-4d53-9c4f-755f344dbd7e','2025-07-18 15:14:21','2025-07-18 15:14:21',NULL,'admin',1),(7,'Program Kerja','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','program-kerja','37a4d0eb-335d-4e00-aeb9-1e12bd524c4b','2025-07-18 15:14:52','2025-07-18 15:14:52',NULL,'admin',1),(8,'Hubungi Kami','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','hubungi-kami','df3a0344-e67a-40bd-9d29-5396c284e1e5','2025-07-18 15:15:23','2025-07-18 15:15:23',NULL,'admin',1),(9,'Pendaftaran','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','pendaftaran','c5869e2f-9fb7-4415-8466-842ba3c2d383','2025-07-19 01:52:37','2025-07-19 01:52:37',NULL,'superadmin',1),(10,'Kemitraan','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','kemitraan','095eae5a-7529-48c3-9946-15253965ec4c','2025-07-19 01:53:51','2025-07-19 01:53:51',NULL,'superadmin',1),(11,'Pemilihan Lahan','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','pemilihan-lahan','c4a758f7-14b6-4a2e-b4ff-47b1d3271b08','2025-07-19 02:52:16','2025-07-19 02:52:16',NULL,'admin',1),(12,'Pemilihan Bibit','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','pemilihan-bibit','2d62733e-cb5b-4a46-85f9-27a37613fece','2025-07-19 03:02:55','2025-07-19 03:02:55',NULL,'admin',1),(13,'Persiapan penanaman','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','persiapan-penanaman','da0e283e-3c86-41d3-bcd6-78881d397ca7','2025-07-19 09:15:09','2025-07-19 09:15:09',NULL,'admin',1),(14,'persiapan pemeliharaan','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','persiapan-pemeliharaan','69dc5eb2-47da-42e5-b9ab-8217d2879813','2025-07-19 09:21:31','2025-07-19 09:21:31',NULL,'admin',1),(15,'Persiapan panen','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','persiapan-panen','782c1fa2-2322-41cb-b6fa-d1cec45779c2','2025-07-19 09:25:28','2025-07-19 09:25:28',NULL,'admin',1),(16,'Persiapan pasca panen','<p>Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.</p>\r\n\r\n<p>Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa &ldquo;Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.&rdquo;</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','persiapan-pasca-panen','50250b59-e5b8-4b7f-a6cf-1ec309d89858','2025-07-19 09:31:44','2025-07-19 09:31:44',NULL,'admin',1),(17,'Penjualan TBS','<div class=\"text-success mb-3\" style=\"font-size: 3rem;\">\r\n            <i class=\"bi bi-box-seam\"></i>\r\n          </div>\r\n          <h5 class=\"fw-bold mb-2\">Penjualan TBS</h5>\r\n          <p class=\"text-muted mb-0\">Harga kompetitif langsung ke pabrik mitra, dengan transparansi dan efisiensi.</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','penjualan-tbs','30b64d89-7230-492d-8d5f-4cb4766bc72c','2025-07-22 21:22:16','2025-07-22 21:31:01',NULL,'admin',1),(18,'Jasa Angkut','<div class=\"text-warning mb-3\" style=\"font-size: 3rem;\">\r\n            <i class=\"bi bi-truck\"></i>\r\n          </div>\r\n          <h5 class=\"fw-bold mb-2\">Jasa Angkut</h5>\r\n          <p class=\"text-muted mb-0\">Transportasi aman, cepat, dan hemat biaya untuk hasil panen anggota.</p>',NULL,NULL,NULL,NULL,0,0,'publish','blog','jasa-angkut','fb11ac18-8dd1-4a89-99c3-bb6e6d0d758b','2025-07-22 21:25:08','2025-07-22 21:30:00',NULL,'admin',1),(19,'Penjualan Pupuk & Bibit','<div class=\"text-primary mb-3\" style=\"font-size: 3rem;\">\r\n            <i class=\"bi bi-flower3\"></i>\r\n          </div>\r\n          <h5 class=\"fw-bold mb-2\">Pupuk &amp; Bibit</h5>\r\n          <p class=\"text-muted mb-0\">Penyediaan bibit unggul dan pupuk berkualitas tinggi untuk petani anggota.</p>\r\n        </div>',NULL,NULL,NULL,NULL,0,0,'publish','blog','penjualan-pupuk-bibit','22e84023-d3af-4aaa-b770-d9ac6cd009a3','2025-07-22 21:27:45','2025-07-22 21:27:45',NULL,'admin',1);

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_modify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`,`user_modify`) values (1,1,1,NULL,NULL,'su'),(2,2,2,NULL,NULL,'su'),(3,7,5,NULL,NULL,'su'),(4,8,5,NULL,NULL,'su'),(5,9,5,NULL,NULL,'su'),(6,10,5,NULL,NULL,'su');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_modify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_role_name_unique` (`role_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`role_name`,`deleted_at`,`created_at`,`updated_at`,`user_modify`,`user_id`) values (1,'superadmin',NULL,'2025-01-16 07:43:36','2025-01-16 07:43:36','su',1),(2,'admin',NULL,'2025-01-16 07:43:36','2025-01-16 07:43:36','su',1),(3,'kontributor',NULL,'2025-01-16 07:43:36','2025-01-16 07:43:36','su',1),(4,'pengguna',NULL,'2025-01-16 07:43:36','2025-01-16 07:43:36','su',1),(5,'anggota',NULL,'2025-01-16 07:43:36',NULL,'su',1);

/*Table structure for table `simpanan_anggotas` */

DROP TABLE IF EXISTS `simpanan_anggotas`;

CREATE TABLE `simpanan_anggotas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_id` bigint(20) unsigned NOT NULL,
  `jenis_simpanan_id` bigint(20) unsigned NOT NULL,
  `tgl_simpanan` datetime NOT NULL,
  `jumlah_simpanan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `simpanan_anggotas` */

insert  into `simpanan_anggotas`(`id`,`uuid`,`anggota_id`,`jenis_simpanan_id`,`tgl_simpanan`,`jumlah_simpanan`,`created_at`,`updated_at`,`deleted_at`) values (1,'bd85db8f-44a1-479d-b174-ae7ad857f3b9',1,1,'2025-07-21 03:31:38',100000,'2025-07-21 03:31:38','2025-07-21 03:31:38',NULL),(2,'8c00823c-9e40-4e05-8f68-3910a682d65b',1,2,'2025-07-21 03:32:12',200000,'2025-07-21 03:32:12','2025-07-21 03:32:12',NULL),(3,'19e31a69-8488-4280-9f61-a2c9a06a2756',1,1,'2025-07-21 10:44:18',100000,'2025-07-21 10:44:18','2025-07-21 10:44:18',NULL);

/*Table structure for table `statistiks` */

DROP TABLE IF EXISTS `statistiks`;

CREATE TABLE `statistiks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `statistiks` */

insert  into `statistiks`(`id`,`uuid`,`slug`,`icon`,`label`,`jumlah`,`deleted_at`,`created_at`,`updated_at`) values (1,'a6016705-670d-11f0-830e-00090ffe0001','anggota','bi bi-people-fill','anggota terdaftar','1280',NULL,'2025-07-22 22:07:56',NULL),(2,'f986ba0f-670d-11f0-830e-00090ffe0001','aset','bi bi-graph-up-arrow','total aset (Rp)','9500000000',NULL,'2025-07-22 22:10:16',NULL),(3,'12f6994a-670e-11f0-830e-00090ffe0001','mitra','bi bi-cast','mitra & partner','67',NULL,'2025-07-22 22:10:59',NULL);

/*Table structure for table `testimonis` */

DROP TABLE IF EXISTS `testimonis`;

CREATE TABLE `testimonis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `testimonis` */

insert  into `testimonis`(`id`,`uuid`,`nama`,`photo`,`pekerjaan`,`isi_testimoni`,`deleted_at`,`created_at`,`updated_at`) values (1,'dc24c386-670e-11f0-830e-00090ffe0001','Ahmad Syahputra',NULL,'Petani Desa Sukamakmur','Dengan bergabung ke koperasi, hasil panen saya lebih mudah dijual dan pendapatan meningkat. https://randomuser.me/api/portraits/men/45.jpg',NULL,'2025-07-22 22:16:36',NULL),(2,'fcf3fdcd-670e-11f0-830e-00090ffe0001','Budi Hartono',NULL,'Pelatih Koperasi Muda','Saya bangga bisa berbagi ilmu dan bertumbuh bersama koperasi. Kami adalah keluarga.',NULL,'2025-07-22 22:17:31',NULL),(3,'19a0cc74-670f-11f0-830e-00090ffe0001','Siti Aminah',NULL,'Kontributor Pemasaran Kolektif','Koperasi memberi pelatihan dan akses pasar yang luas. Saya merasa lebih percaya diri.',NULL,'2025-07-22 22:18:20',NULL),(4,'44514eed-670f-11f0-830e-00090ffe0001','Nia Karina',NULL,'Petani Muda Mandiri','Dengan koperasi, saya bisa mengelola hasil kebun lebih profesional dan transparan.',NULL,'2025-07-22 22:19:31',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_nomor_telpon_unique` (`nomor_telpon`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`uuid`,`name`,`email`,`nomor_telpon`,`fcm_token`,`foto`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'027ac87d-838b-4909-a2df-b357ca644517','superadmin','superadmin@gmail.com','08994434947',NULL,NULL,NULL,'$2y$10$n85zaanbAxUZ6fYRf7VEG.fYV/AJMDQ3Kd1hxadmTZxSnJUl9ReEa',NULL,'2025-01-16 07:43:37','2025-01-16 07:43:37'),(2,'abcc9103-8c9e-4097-86cc-2508d3f07572','admin','admin@gmail.com','08994434948',NULL,NULL,NULL,'$2y$10$MJn.koXKn23CfEqJEjTPluW1dRTdgBvmZjU8YJMtXMrSlnKksEfRq',NULL,'2025-01-16 07:43:37','2025-01-16 07:43:37'),(3,'3a0c90a7-5bca-4056-83c6-192c75cb5847','Vino Hidayat S.Kom','hamzah50@example.com','+243186562144',NULL,NULL,'2025-07-30 08:27:23','$2y$10$Cm8Ko7RhonCClgncRzm0POEHiC0QQn3YJAEi5eoWNdZdk1.mqZcKi','VWoMb81yFl','2025-07-30 08:27:23','2025-07-30 08:27:23'),(4,'d0d9e2f1-b021-41a4-9c94-925f4e665751','Irma Mardhiyah','jumari16@example.org','+37425722641',NULL,NULL,'2025-07-30 08:29:40','$2y$10$yfuhtW1UELBDcgipY6s59eswqLbusUga0eo3I4w9NNo/ZhXVAeMkG','9yl7UprDaJ','2025-07-30 08:29:40','2025-07-30 08:29:40'),(5,'17930ded-e2ae-4597-a834-2c9e86c624cb','Lalita Nadia Nasyiah','gpermadi@example.com','+864473389616',NULL,NULL,'2025-07-30 08:31:16','$2y$10$/QAGSKyjiibMsc2bJaYTgunau473rhqSCyZvW55pduGZSZL.IwdDW','B1oUDCU35g','2025-07-30 08:31:16','2025-07-30 08:31:16'),(6,'ef0837e0-e2ea-48ca-a4d2-378a4fdb1f8f','Rachel Rahayu M.Ak','kamaria.damanik@example.net','+23077208199',NULL,NULL,'2025-07-30 08:32:26','$2y$10$enx/sWJvxCq7e8qrkL5X2Omn/CpEyGN6pdrgDwzRbRDzJ.5Wcj9BO','baTN9eWsTq','2025-07-30 08:32:26','2025-07-30 08:32:26'),(7,'a164bf5d-763f-461c-a102-7a939b00025b','Queen Halimah','farida.mustika@example.org','+32520555001',NULL,NULL,'2025-07-30 08:32:42','$2y$10$NI2MnmnYzcBekpOb47TKg.M8XB.cwGHRwFcp6nQUxu8lyYoNeZbO2','pUGVY8mFtt','2025-07-30 08:32:42','2025-07-30 08:32:42'),(8,'4c354a4f-7094-425d-a40c-e1ca6e2a3c82','Zelaya Hartati','anita.pradana@example.net','+968273493033',NULL,NULL,'2025-07-30 08:34:08','$2y$10$MR1M2wVKEhYQiuTIpRIe8.moRcxBHgOpt/ILo/7ZykmckNzoljPVq','YnXhAYHHHV','2025-07-30 08:34:08','2025-07-30 08:34:08'),(9,'cb7c9dcc-cda5-4449-a634-9a8a7117ea58','Martaka Napitupulu','firgantoro.yunita@example.org','+35019106996',NULL,NULL,'2025-07-30 08:34:59','$2y$10$Qz2pnnDIfCwUhivqJXxqfuID08YhNrGAU2tUXDs//6NLYhbGH22QG','JB2vUMW5It','2025-07-30 08:34:59','2025-07-30 08:34:59'),(10,'07d9ad90-d1d5-4981-8b09-61c2659da67b','Vanesa Palastri','lusada@example.net','+2340838151234',NULL,NULL,'2025-07-30 08:35:36','$2y$10$MJn.koXKn23CfEqJEjTPluW1dRTdgBvmZjU8YJMtXMrSlnKksEfRq','7Ub0SPVlKG','2025-07-30 08:35:36','2025-07-30 08:35:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
