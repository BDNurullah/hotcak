-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2020 at 04:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotcak`
--

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

DROP TABLE IF EXISTS `homeslider`;
CREATE TABLE IF NOT EXISTS `homeslider` (
  `HomeSliderID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `Description` text,
  `AboutResearchGroup` text,
  `ImageUrl` varchar(250) DEFAULT NULL,
  `ActiveStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`HomeSliderID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `OrderID` int(10) NOT NULL AUTO_INCREMENT,
  `ProductID` int(10) NOT NULL,
  `ProductCode` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProductName` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UnitPrice` int(6) NOT NULL,
  `Quantity` int(6) NOT NULL,
  `PayablePrice` int(10) NOT NULL,
  `FullName` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LocationType` tinyint(1) DEFAULT '0',
  `DeliveryAddress` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OrderStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hotcakbd@gmail.com', '$2y$10$3A5QOaE5mFq8ieAW.l/.ruaFdYINW1NsI4SRhWTZMoJQkOjJOK2NS', '2020-01-13 12:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(10) NOT NULL AUTO_INCREMENT,
  `ProductTypeID` int(6) NOT NULL,
  `Code` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` text,
  `Price` int(6) NOT NULL,
  `DiscountPercentage` int(2) NOT NULL,
  `ActualPrice` int(2) NOT NULL,
  `ImageUrl` varchar(250) DEFAULT NULL,
  `ActiveStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

DROP TABLE IF EXISTS `productimage`;
CREATE TABLE IF NOT EXISTS `productimage` (
  `ProductImageID` int(10) NOT NULL AUTO_INCREMENT,
  `ProductID` int(10) NOT NULL,
  `ImageUrl` varchar(250) DEFAULT NULL,
  `ActiveStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`ProductImageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

DROP TABLE IF EXISTS `producttype`;
CREATE TABLE IF NOT EXISTS `producttype` (
  `ProductTypeID` int(10) NOT NULL AUTO_INCREMENT,
  `Type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ActiveStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`ProductTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `termsconditions`
--

DROP TABLE IF EXISTS `termsconditions`;
CREATE TABLE IF NOT EXISTS `termsconditions` (
  `TermsConditionsID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `Description` text,
  `IsDefault` int(1) DEFAULT '0',
  `ActiveStatus` tinyint(1) DEFAULT '1',
  `CreateBy` int(10) DEFAULT NULL,
  `CreateAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` int(10) DEFAULT NULL,
  `UpdateAt` date DEFAULT NULL,
  PRIMARY KEY (`TermsConditionsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'hotcakbd@gmail.com', '$2y$10$T2DV22dZdJ97H3.IIDOl5ObDnuIz73AucLGsQrm4QVh87FgQwizce', 'nl8vo95S4YKVjunE9nYzRTHlhv9dX9ve5el3W2PTTHt410V9LXRQhcdfi3cO', '2019-12-25 11:37:52', '2019-12-25 11:37:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
