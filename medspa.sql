-- MySQL dump 10.13  Distrib 5.7.25, for osx10.14 (x86_64)
--
-- Host: localhost    Database: medspaus
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Laser Treatment','laser-treatment','2019-04-12 17:15:41','2019-04-25 19:08:39'),(2,NULL,1,'Vein Treatment','vein-treatment','2019-04-12 17:15:41','2019-04-25 19:09:10'),(3,NULL,1,'Skin Rejuvination','skin-rejuvination','2019-04-25 19:07:06','2019-04-25 19:07:06'),(4,NULL,1,'Fat Reduction','fat-reduction','2019-04-25 19:08:02','2019-04-25 19:08:02');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),(2,1,'name','text','Name',1,1,1,1,1,1,'{}',2),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',3),(4,1,'password','password','Password',1,0,0,1,1,0,'{}',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(8,1,'avatar','image','Avatar',0,0,1,1,1,1,'{}',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',0,1,1,1,1,1,'{}',9),(22,4,'id','number','ID',1,0,0,0,0,0,NULL,1),(23,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,NULL,4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,NULL,6),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(29,5,'id','number','ID',1,0,0,0,0,0,'{}',1),(30,5,'author_id','number','Author',1,0,1,1,0,1,'{}',2),(32,5,'title','text','Title',1,1,1,1,1,1,'{}',4),(33,5,'excerpt','text_area','Excerpt',0,0,1,1,1,1,'{}',5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,'{}',6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',0,0,1,1,1,1,'{}',9),(38,5,'meta_keywords','text_area','Meta Keywords',0,0,1,1,1,1,'{}',10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'{}',14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,'{}',15),(56,1,'email_verified_at','timestamp','Email Verified At',0,1,1,1,1,1,'{}',6),(73,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(74,8,'title','text','Title',0,1,1,1,1,1,'{}',2),(75,8,'address','text','Address',0,1,1,1,1,1,'{}',3),(76,8,'lat','text','Lat',0,0,1,1,1,1,'{}',4),(77,8,'lon','text','Lon',0,0,1,1,1,1,'{}',5),(78,8,'created_at','timestamp','Created At',0,0,1,1,0,1,'{}',6),(79,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(81,1,'bio','rich_text_box','Bio',0,0,1,1,1,1,'{}',12),(82,1,'overview','rich_text_box','Overview',0,0,1,1,1,1,'{}',13),(83,1,'logo','image','Logo',0,0,1,1,1,1,'{}',14),(84,1,'backImage','image','BackImage',0,0,1,1,1,1,'{}',15),(85,1,'company','text','Company',0,1,1,1,1,1,'{}',16),(86,8,'user_id','text','User Id',0,0,1,1,1,1,'{}',8),(87,8,'phone','text','Phone',0,0,1,1,1,1,'{}',9),(88,8,'fax','text','Fax',0,0,1,1,1,1,'{}',10),(89,8,'location_hasone_user_relationship','relationship','Owner',0,1,1,1,1,1,'{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',11),(92,5,'post_hasone_category_relationship','relationship','categories',0,1,1,1,1,1,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"post_category\",\"pivot\":\"1\",\"taggable\":\"0\"}',16),(93,5,'cat_id','text','Cat Id',0,1,1,1,1,1,'{}',3),(94,1,'phone','text','Phone',0,0,1,1,1,1,'{}',17),(95,1,'website','text','Website',0,0,1,1,1,1,'{}',18),(96,1,'slug','text','Slug',0,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:users,slug\"}}',19);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2019-04-12 17:14:25','2019-04-25 21:10:52'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2019-04-12 17:14:25','2019-04-12 17:14:25'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2019-04-12 17:14:25','2019-04-12 17:14:25'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2019-04-12 17:15:41','2019-04-12 17:15:41'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy',NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2019-04-12 17:15:41','2019-04-25 19:30:06'),(8,'location','location','Location','Locations',NULL,'App\\Location',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-04-22 20:47:57','2019-04-25 17:42:23');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lon` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT '2',
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'1Clinic','16 Yonge St Unit K, Toronto, ON M5J 1J5, Canada',43.6435,-79.3762,'2019-04-22 21:56:00','2019-04-24 21:13:53',2,NULL,NULL),(2,'Azure Aesthetic','222 King St E #3200, Bowmanville, ON L1C 1P6, Canada',43.9116,-78.677,'2019-04-22 21:56:00','2019-04-24 21:14:22',2,NULL,NULL),(3,'Tahamedispa','244 Kingston Rd E, Ajax, ON L1Z 1G1, Canada',43.8645,-79.0156,'2019-04-24 21:13:00','2019-04-25 20:12:46',3,'905-683-4555',NULL),(4,'MCL Derm','200 Windflower Gate #700, Woodbridge, ON L4L 9L3, Canada',43.7916,-79.5539,'2019-04-24 21:14:52','2019-04-24 21:14:52',2,NULL,NULL),(5,'Nulook Med Spa','4 Burnhamthorpe Rd, Etobicoke, ON M9A 5C9, Canada',43.6485,-79.5294,'2019-04-24 21:15:19','2019-04-24 21:15:19',2,NULL,NULL),(6,'Vistoso','871 Equestrian Ct #9A, Oakville, ON L6L 6L7, Canada',43.4366,-79.7082,'2019-04-24 21:15:37','2019-04-24 21:15:37',2,NULL,NULL),(7,'Active Crystal','8888 Keele St #5, Concord, ON L4K 2N2, Canada',43.8274,-79.5072,'2019-04-24 21:15:54','2019-04-24 21:15:54',2,NULL,NULL),(8,'Pulse Laser Clinic','6974 Financial Dr #3db, Mississauga, ON L5N 8J4, Canada',43.6098,-79.751,'2019-04-24 21:16:16','2019-04-24 21:16:16',2,NULL,NULL),(9,'New You Spa','1920 Yonge St #107, Toronto, ON M4S 3E6, Canada',43.6988,-79.3973,'2019-04-24 21:16:32','2019-04-24 21:16:32',2,NULL,NULL),(10,'Miami Beauty Clinic','909 N Miami Beach Blvd STE 101, North Miami Beach, FL 33162, USA',25.9278,-80.1813,'2019-04-24 21:16:58','2019-04-24 21:16:58',2,NULL,NULL),(11,'Pure Laser USA','3950 S Rochester Rd #2150, Rochester Hills, MI 48307, USA',42.6236,-83.1318,'2019-04-24 21:17:28','2019-04-24 21:17:28',2,NULL,NULL),(12,'LightRX','9360 W Flamingo Rd #104, Las Vegas, NV 89147, USA',36.1162,-115.295,'2019-04-24 21:17:00','2019-04-25 17:43:12',2,'416-322-6000','416-322-6000');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2019-04-12 17:14:25','2019-04-12 17:14:25','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2019-04-12 17:14:25','2019-04-25 17:17:05','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2019-04-12 17:14:25','2019-04-12 17:14:25','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2019-04-12 17:14:25','2019-04-12 17:14:25','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2019-04-12 17:14:25','2019-04-25 17:17:35',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2019-04-12 17:14:25','2019-04-25 17:17:25','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2019-04-12 17:14:25','2019-04-25 17:17:25','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2019-04-12 17:14:25','2019-04-25 17:17:25','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2019-04-12 17:14:25','2019-04-25 17:17:25','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,10,'2019-04-12 17:14:25','2019-04-25 17:17:35','voyager.settings.index',NULL),(11,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2019-04-12 17:14:26','2019-04-25 17:17:25','voyager.hooks',NULL),(12,1,'Categories','','_self','voyager-categories',NULL,NULL,7,'2019-04-12 17:15:41','2019-04-25 17:17:25','voyager.categories.index',NULL),(13,1,'Posts','','_self','voyager-news',NULL,NULL,5,'2019-04-12 17:15:41','2019-04-25 17:17:05','voyager.posts.index',NULL),(16,1,'Locations','','_self',NULL,NULL,NULL,6,'2019-04-22 20:47:57','2019-04-25 17:17:18','voyager.location.index',NULL),(17,2,'Chat','/admin/chat','_self',NULL,'#000000',NULL,17,'2019-04-23 20:06:51','2019-04-23 20:06:51',NULL,''),(18,1,'Chat','/admin/chat','_self',NULL,'#000000',NULL,8,'2019-04-23 20:08:10','2019-04-25 17:17:35',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2019-04-12 17:14:25','2019-04-12 17:14:25'),(2,'physician','2019-04-23 20:06:09','2019-04-23 20:06:09');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2016_01_01_000000_create_pages_table',2),(24,'2016_01_01_000000_create_posts_table',2),(25,'2016_02_15_204651_create_categories_table',2),(26,'2017_04_11_000000_alter_post_nullable_fields_table',2),(27,'2019_04_23_145334_create_websockets_statistics_entries_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,3),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(47,1),(48,1),(49,1),(50,1),(51,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(2,'browse_bread',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(3,'browse_database',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(4,'browse_media',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(5,'browse_compass',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(6,'browse_menus','menus','2019-04-12 17:14:26','2019-04-12 17:14:26'),(7,'read_menus','menus','2019-04-12 17:14:26','2019-04-12 17:14:26'),(8,'edit_menus','menus','2019-04-12 17:14:26','2019-04-12 17:14:26'),(9,'add_menus','menus','2019-04-12 17:14:26','2019-04-12 17:14:26'),(10,'delete_menus','menus','2019-04-12 17:14:26','2019-04-12 17:14:26'),(11,'browse_roles','roles','2019-04-12 17:14:26','2019-04-12 17:14:26'),(12,'read_roles','roles','2019-04-12 17:14:26','2019-04-12 17:14:26'),(13,'edit_roles','roles','2019-04-12 17:14:26','2019-04-12 17:14:26'),(14,'add_roles','roles','2019-04-12 17:14:26','2019-04-12 17:14:26'),(15,'delete_roles','roles','2019-04-12 17:14:26','2019-04-12 17:14:26'),(16,'browse_users','users','2019-04-12 17:14:26','2019-04-12 17:14:26'),(17,'read_users','users','2019-04-12 17:14:26','2019-04-12 17:14:26'),(18,'edit_users','users','2019-04-12 17:14:26','2019-04-12 17:14:26'),(19,'add_users','users','2019-04-12 17:14:26','2019-04-12 17:14:26'),(20,'delete_users','users','2019-04-12 17:14:26','2019-04-12 17:14:26'),(21,'browse_settings','settings','2019-04-12 17:14:26','2019-04-12 17:14:26'),(22,'read_settings','settings','2019-04-12 17:14:26','2019-04-12 17:14:26'),(23,'edit_settings','settings','2019-04-12 17:14:26','2019-04-12 17:14:26'),(24,'add_settings','settings','2019-04-12 17:14:26','2019-04-12 17:14:26'),(25,'delete_settings','settings','2019-04-12 17:14:26','2019-04-12 17:14:26'),(26,'browse_hooks',NULL,'2019-04-12 17:14:26','2019-04-12 17:14:26'),(27,'browse_categories','categories','2019-04-12 17:15:41','2019-04-12 17:15:41'),(28,'read_categories','categories','2019-04-12 17:15:41','2019-04-12 17:15:41'),(29,'edit_categories','categories','2019-04-12 17:15:41','2019-04-12 17:15:41'),(30,'add_categories','categories','2019-04-12 17:15:41','2019-04-12 17:15:41'),(31,'delete_categories','categories','2019-04-12 17:15:41','2019-04-12 17:15:41'),(32,'browse_posts','posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(33,'read_posts','posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(34,'edit_posts','posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(35,'add_posts','posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(36,'delete_posts','posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(47,'browse_location','location','2019-04-22 20:47:57','2019-04-22 20:47:57'),(48,'read_location','location','2019-04-22 20:47:57','2019-04-22 20:47:57'),(49,'edit_location','location','2019-04-22 20:47:57','2019-04-22 20:47:57'),(50,'add_location','location','2019-04-22 20:47:57','2019-04-22 20:47:57'),(51,'delete_location','location','2019-04-22 20:47:57','2019-04-22 20:47:57');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_category`
--

DROP TABLE IF EXISTS `post_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_category`
--

LOCK TABLES `post_category` WRITE;
/*!40000 ALTER TABLE `post_category` DISABLE KEYS */;
INSERT INTO `post_category` VALUES (1,3,7),(2,4,7),(3,2,6),(4,4,5),(5,3,1),(6,1,4),(7,4,2),(8,1,3),(9,2,3);
/*!40000 ALTER TABLE `post_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,3,1,'PHYSICAL AND MENTAL HEALTH BENEFITS OF A MASSAGE',NULL,'This is the excerpt for the Lorem Ipsum Post','<p><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Manipulating the body to improve its functions is an ancient art. When the physical state of the body improves, the mental state also improves and creates the highest level of well being in the whole person. Here are the main highlights of massage therapy.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">The Physical Benefits of Massages</strong><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: border-box;\" /></strong><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Massage therapy helps to improve the neuromuscular system. Patients suffer from all kinds of muscle disorders, such as muscle weakness, stiffness and spasms. Massaging is proven to reduce the tension in muscles and relax them, which is ideal for pain relief. It\'s also known to maintain normal heart rates and reduce hypertension.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Massaging strengthens muscles for better physical performances and faster healing. With stronger muscles, an injury heals faster and the person recovers more quickly. Many athletes receive regular sessions of massage therapy, and some undergo therapeutic sessions under water.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">The Mental Benefits of Massages</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Proponents say that therapeutic massage is powerful enough to increase the release of serotonin. This neurotransmitter improves mood and increases feelings of well-being. When people receive massages regularly, their muscles are less tense and they feel less pain and more comfort. They are more likely to exercise and show more confidence when performing lively activities. So, their levels of anxiety, depression and low self-esteem are decreased.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">The Different Types of Massages</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">There are many types of techniques that massage therapists use, and each medi spa provides different services. There is the therapeutic massage that is performed by a registered massage therapist (RMT). The aromatherapy massage is designed to include the use of scents from essential oils. For pregnant women, there are prenatal massages to relieve stress in the body and reduce stretchmarks. Hot stone massages includes the use of stones that are heated and applied to the body.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">The art of massage can be traced back for millennia. There are dozens of different types of techniques that people have created. There is more than one way to apply pressure to the body and promote healing of muscles, nerves and tissues.&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/massage.php\">Taha Medi Spa</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;offers a variety of massages, to learn more&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/contact.php\">contact us</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;today to book an appointment.</span></p>','posts/April2019/j97663kRZ3acy1K3FLed.jpg','physical-and-mental-health-benefits-of-a-massage','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-12 17:15:41','2019-04-25 20:03:42'),(2,3,1,'RMT MASSAGE',NULL,'This is the excerpt for the sample Post','<p><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Getting a massage is a great way to unwind and relax. Massages can also improve people&rsquo;s health by stimulating the immune system, increasing flexibility, and aiding in muscle and joint recovery. Under the hands of a registered massage therapist, stress and anxiety can melt away. This stress relief can improve both inner and outer health. Massage therapy provides many advantages that make it worth a visit.&nbsp;</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\"><br style=\"box-sizing: border-box;\" /></strong><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Why an RMT Massage is Different From a Regular Massage</strong><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">When it comes to a massage, each person has different needs. It can be very useful to have a wide range of massage therapies available. An expert massage therapist is trained in many of the most advanced and valuable techniques available. RMT provides a higher standard in massage therapy. The kind of difference that isn&rsquo;t hard to see.&nbsp;</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Benefits of an RMT massage</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Getting a massage is a significant step to improving and protecting your health. It doesn&rsquo;t take long to&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/book-appointment.php\">set up an appointment</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">, and a massage therapist is always on standby to help out. Getting a massage is quick and professional, and it can be incredibly refreshing. Select the type of therapy that will help you meet your goals and let RMT&rsquo;s experts do the rest.&nbsp;</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Get a Massage Today</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Studies show that some of the most significant factors in premature aging and the onset of health problems include stress and poor posture. The human body isn\'t designed to sit as much as we do these days and life can be more fast-paced and stressful than ever before. A massage is an easy way to reset the body and get it back into a healthier and happier shape. Massages can also assist in weight loss and physical recovery, so the benefits are there. Take some time and take care of yourself.&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/contact.php\">Contact us&nbsp;</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">today to book an appointment.</span></p>','posts/April2019/caDcjtva8BW8EX1Bvz5s.jpg','rmt-massage','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2019-04-12 17:15:41','2019-04-25 20:05:27'),(5,3,1,'BENEFITS OF CHEMICAL PEELS2',NULL,NULL,'<p><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">What is a Chemical Peel?</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Many first-time clients to our Medi Spa can be put off by the name \"chemical peel.\" However, chemical peels are actually an extremely common and quite safe beauty procedure, performed by a licensed professional. A chemical peel entails applying a thin layer of a skin-safe acid, such as glycolic or salicylic, to the skin and allowing it to sit for a small amount of time. Unlike the acid products you use at home, a chemical peel uses a high acid concentration to give the client rapid and dramatic results.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">The Benefits of Chemical Peels</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Those who are completely new to the world of chemical peels might be wondering why on earth anyone would purposefully put acid on their face. While a chemical peel might cause some sensitivity and irritation immediately after the treatment, in the weeks that follow, the skin sheds its deal cells and replaces them with fresher and more vibrant ones. This can aid in dramatically diminishing the appearance of:</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Acne</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Scars and pitted marks</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Rosacea and redness</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Keratosis pilaris</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Sun spots</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Uneven or dull skin</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">How Skin Improves With a Chemical Peel</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">A chemical peel is simply an accelerated form of exfoliation, something you might already be doing at home with acid serums or scrubs. When we exfoliate our skin, we slough off the top layer and force our skin to generate newer and healthier cells.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">A chemical peel is ideal for someone who wants a more dramatic version of this. Because it forces the skin to regenerate itself, it\'s also ideal for those who want to fight off signs of aging and reduce the visible wrinkles on their faces.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><strong style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Seeing is Believing</strong><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Once you\'ve had a chemical peel for yourself, you\'ll be amazed at the benefits of itand how this treatment can do wonders for the health and vitality of your complexion. Call 905-683-4555 or&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/book-appointment.php\">book a appointment online</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;today to learn more about how a chemical peel at the&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/index.php\">Taha Medi Spa</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;can benefit your skin.</span></p>','posts/April2019/yN0p9nlVsH3SOLGaUIvw.jpg','benefits-of-chemical-peels2',NULL,NULL,'PUBLISHED',0,'2019-04-25 18:58:52','2019-04-25 20:38:08'),(6,3,1,'THE BENEFITS OF SPIDER VEIN REMOVAL',NULL,NULL,'<p><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Spider veins are near the skin\'s surface and often located on the face and legs. This type of vein is generally blue, purple or red. The cause of spider veins is usually genetic or hormonal including puberty, menopause, birth control pills, pregnancy progesterone and estrogen. Spider veins can be effectively treated with laser equipment and requires no surgical intervention.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">There are numerous benefits of spider vein removal. The laser removes spider veins permanently. This ensures relief from the issues associated with aching, bulging and heavy veins. The procedure uses bipolar radio frequency energy and laser light to close the vein. This enables the surrounding tissue to absorb the vein until it disappears. This procedure is performed in a comfortable office and general anesthesia is not necessary. The procedure is also safe and does not require time for recovery.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Laser vein removal enhances the appearance of the skin by providing a cosmetic improvement. The individual does not need to wear compression stockings, should experience an improvement in general health can be assured the veins will not come back. This procedure is safe for both women and men with unwanted spider veins. The process begins by scheduling an appointment for a consultation where the specifics of the treatment will be fully discussed.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">One of the best benefits of this treatment is the elimination of any embarrassment when wearing a bathing suit or shorts. The legs will have a smooth appearance that promotes self confidence. The treatment is simple and easy with most people experiencing exceptional results. This treatment has an extremely high rate of success and improves the quality of life. Most people have more energy after the treatment and no longer feel discomfort when engaging in certain activities.</span><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><br style=\"box-sizing: border-box; color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" /><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">Are you interested in spider vein removal?&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/contact.php\">Contact us</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;today to book a FREE consultation.&nbsp;</span><a style=\"box-sizing: border-box; color: #7c5736; text-decoration-line: none; outline: none; font-weight: 600; transition: all 0.3s ease 0s; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\" href=\"https://www.tahamedispa.com/www.tahamedispa.com\">Taha Medi Spa</a><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">&nbsp;will take great care of you and will give you results that will boost your confidence.</span></p>','posts/April2019/RCuczwMCOZ5Yy5noOK4A.jpg','the-benefits-of-spider-vein-removal',NULL,NULL,'PUBLISHED',0,'2019-04-25 18:59:23','2019-04-25 19:04:53'),(7,3,1,'WHY LASER HAIR REMOVAL IS WAY BETTER THAN SHAVING',NULL,NULL,'<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">Tired Of Stubble?</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">One of the worst things about shaving, besides cutting your skin, is that the hair grows right back only an hour later. Worse, it isn\'t soft hair either. It\'s a scratchy stubble that no one likes to touch - let alone yourself. Instead of constantly going through razors and shaving cream, you should find a permanent solution. That solution which offers long term results is laser hair removal.</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">&nbsp;</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">What Is Laser Hair Removal?</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">When you first consider laser hair removal, you may picture a large laser that zaps away hair on your body. That isn\'t quite what happens. Rather, a device is used in the target areas that you want hair removed at. This device, typically utilizing intense pulsed light technology though not always, keys in on certain colours of the hair cell. Attracted to this colour, it damages the hair cell just enough to damage it. The body then removes this damaged cell completely. As a result, you have long term results of hair removal. Because hair cells cannot be produced in those areas, you won\'t ever have to experience unwanted hair in that location again. Think about the benefits this can provide for you.</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">&nbsp;</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">The Benefits Of Laser Hair Removal</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">Shaving only fixes the problem for a short time. Even then, you have to deal with stubble that is unpleasant to touch. You also have to keep going through razors and cream which can be quite costly in the long-run. Not to mention, you also are prone to cutting yourself when shaving. Laser hair removal gets rid of the hair permanently. It leaves behind smooth skin that is never going to be marred by hair or shaving nicks again. Instead, you have this treatment performed a few times to get rid of the active hair cells, and then you\'re done. You\'ll save a lot of money overall and you can free up time during your daily showers.</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">&nbsp;</span></span></p>\r\n<p><span style=\"color: #333333; font-family: Montserrat, Helvetica Neue, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 16px;\">Laser hair removal is the best solution for permanent hair removal. With laser hair removal, you will have more time during your daily routine, save money in the long-term, and have smooth and hairless skin. Visit Taha Medi Spa in Ajax today to start your laser hair removal treatments. Contact us today to book an appointment or to have any of your laser hair removal questions answered.&nbsp;</span></span></p>','posts/April2019/26Zi9TFOqmgjFjQO7WUl.jpg','why-laser-hair-removal-is-way-better-than-shaving','asdasd',NULL,'PUBLISHED',0,'2019-04-25 19:00:13','2019-04-25 21:26:10');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2019-04-12 17:14:26','2019-04-12 17:14:26'),(2,'user','Normal User','2019-04-12 17:14:26','2019-04-12 17:14:26'),(3,'physician','Physician','2019-04-23 20:02:39','2019-04-23 20:03:19');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `details` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2019-04-12 17:15:41','2019-04-12 17:15:41'),(2,'data_types','display_name_singular',6,'pt','Página','2019-04-12 17:15:41','2019-04-12 17:15:41'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2019-04-12 17:15:41','2019-04-12 17:15:41'),(4,'data_types','display_name_singular',4,'pt','Categoria','2019-04-12 17:15:41','2019-04-12 17:15:41'),(5,'data_types','display_name_singular',2,'pt','Menu','2019-04-12 17:15:41','2019-04-12 17:15:41'),(6,'data_types','display_name_singular',3,'pt','Função','2019-04-12 17:15:41','2019-04-12 17:15:41'),(7,'data_types','display_name_plural',5,'pt','Posts','2019-04-12 17:15:41','2019-04-12 17:15:41'),(8,'data_types','display_name_plural',6,'pt','Páginas','2019-04-12 17:15:41','2019-04-12 17:15:41'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2019-04-12 17:15:41','2019-04-12 17:15:41'),(10,'data_types','display_name_plural',4,'pt','Categorias','2019-04-12 17:15:41','2019-04-12 17:15:41'),(11,'data_types','display_name_plural',2,'pt','Menus','2019-04-12 17:15:41','2019-04-12 17:15:41'),(12,'data_types','display_name_plural',3,'pt','Funções','2019-04-12 17:15:41','2019-04-12 17:15:41'),(13,'categories','slug',1,'pt','categoria-1','2019-04-12 17:15:41','2019-04-12 17:15:41'),(14,'categories','name',1,'pt','Categoria 1','2019-04-12 17:15:41','2019-04-12 17:15:41'),(15,'categories','slug',2,'pt','categoria-2','2019-04-12 17:15:41','2019-04-12 17:15:41'),(16,'categories','name',2,'pt','Categoria 2','2019-04-12 17:15:41','2019-04-12 17:15:41'),(17,'pages','title',1,'pt','Olá Mundo','2019-04-12 17:15:41','2019-04-12 17:15:41'),(18,'pages','slug',1,'pt','ola-mundo','2019-04-12 17:15:41','2019-04-12 17:15:41'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2019-04-12 17:15:41','2019-04-12 17:15:41'),(20,'menu_items','title',1,'pt','Painel de Controle','2019-04-12 17:15:41','2019-04-12 17:15:41'),(21,'menu_items','title',2,'pt','Media','2019-04-12 17:15:41','2019-04-12 17:15:41'),(22,'menu_items','title',13,'pt','Publicações','2019-04-12 17:15:41','2019-04-12 17:15:41'),(23,'menu_items','title',3,'pt','Utilizadores','2019-04-12 17:15:41','2019-04-12 17:15:41'),(24,'menu_items','title',12,'pt','Categorias','2019-04-12 17:15:41','2019-04-12 17:15:41'),(25,'menu_items','title',14,'pt','Páginas','2019-04-12 17:15:41','2019-04-12 17:15:41'),(26,'menu_items','title',4,'pt','Funções','2019-04-12 17:15:41','2019-04-12 17:15:41'),(27,'menu_items','title',5,'pt','Ferramentas','2019-04-12 17:15:41','2019-04-12 17:15:41'),(28,'menu_items','title',6,'pt','Menus','2019-04-12 17:15:41','2019-04-12 17:15:41'),(29,'menu_items','title',7,'pt','Base de dados','2019-04-12 17:15:41','2019-04-12 17:15:41'),(30,'menu_items','title',10,'pt','Configurações','2019-04-12 17:15:41','2019-04-12 17:15:41');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` longtext COLLATE utf8_unicode_ci,
  `overview` longtext COLLATE utf8_unicode_ci,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$k2D6mjHIkchExjh6aqk0pOVwBDRZX.GEgK.33A7bKjFXDm3sicel2','VoKNrq93ydLsCsYbVjv5AMvZP5sDELC5N7qfQ6UAd6JFj2VtGMNYmvxNpAzy',NULL,'2019-04-12 17:15:41','2019-04-12 17:15:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,3,'James b','a@a.com','users/default.png',NULL,'$2y$10$w/eTz666z2Itr6qCSv6pO.gQRK6y/bKmp8mzDlR.je9byM4RtRBGO',NULL,'{\"locale\":\"en\"}','2019-04-23 20:04:02','2019-04-25 01:33:12','<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #505050; font-family: \'Louis George Cafe\', sans-serif; font-size: 16px;\">Carolyn I. Jacob, M.D. is a Board-Certified Dermatologist, Harvard-Trained Cosmetic and Laser Surgeon, and an Associate Clinical Instructor at Northwestern&rsquo;s Feinberg School of Medicine. She is the Founder and Medical Director of Chicago Cosmetic Surgery and Dermatology in Chicago&rsquo;s River North neighborhood.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #505050; font-family: \'Louis George Cafe\', sans-serif; font-size: 16px;\">Dr. Jacob is a High Honors graduate of Indiana University with a B.S. In Biology, and attended the University of Illinois College of Medicine where she was in the top 10 of her class. After completing an internship in internal medicine at Northwestern&rsquo;s Evanston Hospital, she was Chief Resident of Dermatology at University of Wisconsin Hospitals and Clinics, and completed a prestigious Cosmetic and Laser Surgery Fellowship at Harvard Medical School.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #505050; font-family: \'Louis George Cafe\', sans-serif; font-size: 16px;\">Dr. Jacob is a well-known expert on all cosmetic and laser skin therapies. She trains other Dermatologists and Dermatology residents on injectable cosmetic aesthetics. She has performed research on excessive sweat reduction with MiraDry technology, cellulite treatments, and body shaping with High Frequency Electromagnetic Energy (HIFEM) Emsculpt treatments. She is the author of over 25 peer reviewed journal articles and 12 book chapters on cosmetic and laser surgery. She lectures nationally and internationally on the latest devices and treatments in cosmetic dermatology. Her expertise has been featured on Dr. Oz, Good Day Chicago, Windy City Live, NewBeauty Magazine and Online media including CBS, USA Today, ABC, FOX News, Chicago Tribune, Esquire, Allure, Forbes, and Self Magazine.</p>','<p><span style=\"color: #505050; font-family: \'Louis George Cafe\', sans-serif; font-size: 16px;\">Carolyn I. Jacob, M.D. is a Board-Certified Dermatologist, Harvard-Trained Cosmetic and Laser Surgeon, and an Associate Clinical Instructor at Northwestern&rsquo;s Feinberg School of Medicine. She is the Founder and Medical Director of Chicago Cosmetic Surgery and Dermatology in Chicago&rsquo;s River North neighborhood.</span></p>',NULL,NULL,'Miami Beauty Clinic',NULL,NULL,NULL),(3,NULL,'Saron Pushpinder','info@tahamedispa.com','users/default.png',NULL,'$2y$10$3Zz80FHzeqVCFNX0KKodKeFSuCMBTx6xLQPUd16M4FxH3SFovKN1S',NULL,'{\"locale\":\"en\"}','2019-04-25 18:56:30','2019-04-25 21:11:24','<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #505050; font-family: \'Louis George Cafe\', sans-serif; font-size: 16px;\"><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">Taha Medi Spa is Toronto based spa that offers a wide range of medical and aesthetic services including: Laser Hair Removal, Botox and Fillers, Micro-needling, Organic Facials, Green Peel, Medical Facial Treatments, Microdermbrasion, Hydra-Facial, Massage, Waxing, Make-up and Hairstyling, and Professional Skin Care. We are committed to provide our clients with an opportunity to enhance their beauty through the latest techniques and products.</span></p>','<p><span style=\"color: #333333; font-family: Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 16px;\">At Taha, we are dedicated to providing professional services to our clients. All of our products, equipment, and tools are thoroughly cleaned and sanitized before and after each use. With over a decade of experience, we have gained a strong reputation in the industry. Our trained and experienced staff will go the extra mile to serve you with valuable knowledge.</span></p>','users/April2019/3mP83ILY5ZkjySpa8z4s.png','users/April2019/QxTlBG5gpDWVmApQXkdS.jpg','Taha Medi Spa','905-683-4555','www.tahamedispa.com','saron-pushpinder');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-25 13:33:18
