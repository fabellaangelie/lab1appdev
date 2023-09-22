-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2023 at 12:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

DROP TABLE IF EXISTS `table_category`;
CREATE TABLE IF NOT EXISTS `table_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ProductCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_ProductCategory` (`ProductCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `ProductCategory`) VALUES
(1, 'food'),
(2, 'furniture'),
(3, 'sports product');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

DROP TABLE IF EXISTS `table_products`;
CREATE TABLE IF NOT EXISTS `table_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` varchar(100) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductQuantity` int NOT NULL,
  `ProductPrice` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category` (`ProductCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `ProductName`, `ProductDescription`, `ProductCategory`, `ProductQuantity`, `ProductPrice`) VALUES
(1, 'royal', 'softdrinks', 'food', 27, 20),
(2, 'royal', 'softdrinks', 'food', 11, 25);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`ProductCategory`) REFERENCES `table_category` (`ProductCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
