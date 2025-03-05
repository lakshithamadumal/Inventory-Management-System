-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.39 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for inventory_db
CREATE DATABASE IF NOT EXISTS `inventory_db` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `inventory_db`;

-- Dumping structure for table inventory_db.brand
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table inventory_db.brand: ~11 rows (approximately)
INSERT INTO `brand` (`id`, `name`) VALUES
	(1, 'Lenovo'),
	(2, 'Microsoft'),
	(3, 'Canon'),
	(4, 'Nikon'),
	(5, 'Beats'),
	(6, 'Bose'),
	(7, 'PlayStation'),
	(8, 'Xbox'),
	(9, 'apple'),
	(10, 'samsung'),
	(11, 'sony');

-- Dumping structure for table inventory_db.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table inventory_db.category: ~5 rows (approximately)
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'Tablets'),
	(2, 'Headphones'),
	(3, 'Smartwatches'),
	(4, 'Cameras'),
	(5, 'Gaming Consoles');

-- Dumping structure for table inventory_db.product
CREATE TABLE IF NOT EXISTS `product` (
  `sku` varchar(40) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `barcode` varchar(45) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `category_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `qty` int DEFAULT NULL,
  PRIMARY KEY (`sku`),
  KEY `fk_product_category_idx` (`category_id`),
  KEY `fk_product_brand1_idx` (`brand_id`),
  CONSTRAINT `fk_product_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table inventory_db.product: ~10 rows (approximately)
INSERT INTO `product` (`sku`, `name`, `barcode`, `cost`, `price`, `category_id`, `brand_id`, `qty`) VALUES
	('SKU006', 'Apple iPad Pro', '2234567890123', 900, 999, 1, 9, 40),
	('SKU007', 'Microsoft Surface Pro 8', '2234567890124', 1000, 1099, 1, 2, 30),
	('SKU008', 'Beats Studio3', '3234567890125', 250, 299, 2, 5, 100),
	('SKU009', 'Bose QuietComfort 35', '3234567890126', 280, 329, 2, 6, 80),
	('SKU010', 'Apple Watch Series 7', '4234567890127', 380, 429, 3, 9, 60),
	('SKU011', 'Samsung Galaxy Watch 4', '4234567890128', 300, 349, 3, 10, 70),
	('SKU012', 'Canon EOS 90D', '5234567890129', 1100, 1199, 4, 3, 25),
	('SKU013', 'Nikon Z6 II', '5234567890130', 1600, 1699, 4, 4, 15),
	('SKU014', 'Sony PlayStation 5', '6234567890131', 500, 549, 5, 11, 50),
	('SKU015', 'Xbox Series X', '6234567890132', 480, 529, 5, 8, 50);

-- Dumping structure for table inventory_db.product_img
CREATE TABLE IF NOT EXISTS `product_img` (
  `img_path` varchar(100) NOT NULL,
  `product_sku` varchar(40) NOT NULL,
  PRIMARY KEY (`img_path`),
  KEY `fk_product_img_product1_idx` (`product_sku`),
  CONSTRAINT `fk_product_img_product1` FOREIGN KEY (`product_sku`) REFERENCES `product` (`sku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table inventory_db.product_img: ~10 rows (approximately)
INSERT INTO `product_img` (`img_path`, `product_sku`) VALUES
	('../Inventory/assets/img/product/Apple iPad Pro.jpg', 'SKU006'),
	('../Inventory/assets/img/product/Microsoft Surface Pro 8.jpg', 'SKU007'),
	('../Inventory/assets/img/product/Beats Studio3.webp', 'SKU008'),
	('../Inventory/assets/img/product/Bose QuietComfort 35.png', 'SKU009'),
	('../Inventory/assets/img/product/Apple Watch Series 7.jpg', 'SKU010'),
	('../Inventory/assets/img/product/Samsung Galaxy Watch 4.webp', 'SKU011'),
	('../Inventory/assets/img/product/Canon EOS 90D.jpg', 'SKU012'),
	('../Inventory/assets/img/product/Nikon Z6 II.jpg', 'SKU013'),
	('../Inventory/assets/img/product/Sony PlayStation 5.png', 'SKU014'),
	('../Inventory/assets/img/product/Xbox Series X.png', 'SKU015');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
