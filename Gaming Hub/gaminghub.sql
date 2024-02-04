-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2023 at 08:00 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `Email`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(71, 'GTA V | Premium edition', 'forexample@gmail.com', '500', '../Images/Shop/GTAV.jpg', 1, '500', '1000'),
(72, 'Red Dead Redemption ll', 'forexample@gmail.com', '800', '../Images/Shop/RedDead2.jpg', 1, '800', '1001'),
(73, 'God Of War Ragnarok', 'forexample@gmail.com', '1000', '../Images/Shop/GodOfWarRagnarok.jpg', 1, '1000', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Mohamed', 'forexample@gmail.com', '1454484854', 'sdfsdfdsfs', 'Cash of Delivery', 'STIMULAN 400MG 30/CAP(1), CATAFLAM 50MG 20/TAB(1)', '75'),
(2, 'lolxd', 'forexample2@gmail.com', '1222222222', 'dsfsd', 'Cash of Delivery', 'AUGMENTIN 1GM 14/TAB(1), CATAFLAM 50MG 20/TAB(1)', '145'),
(3, 'lolxd', 'forexample2@gmail.com', '1222222222', 'sdfdsfffffff', 'Cash of Delivery', 'AUGMENTIN 1GM 14/TAB(1)', '100'),
(4, 'lolxd', 'forexample2@gmail.com', '1222222222', 'sdfsdfsd', 'Cash of Delivery', 'CATAFLAM 50MG 20/TAB(1), AUGMENTIN 1GM 14/TAB(1), CYMBATEX 30MG 30/TAB(1), STIMULAN 400MG 30/CAP(1)', '365.5');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT '1',
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `author_phone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code_2` (`product_code`),
  KEY `product_code` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `product_category`, `product_description`, `author_name`, `author_email`, `author_phone`) VALUES
(1, 'GTA V | Premium edition', 260, 5, '../Images/Shop/GTAV.jpg', '1001', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(2, 'Red Dead Redemption ll', 255, 2, '../Images/Shop/RedDead2.jpg', '1002', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(3, 'God Of War Ragnarok', 600, 10, '../Images/Shop/GodOfWarRagnarok.jpg', '1003', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(4, 'FIFA 23', 1900, 5, '../Images/Shop/FIFA23.jpg', '1004', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(5, 'Hogwarts Legacy', 100, 6, '../Images/Shop/HogwartsLegacy.jpg', '1005', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(6, 'Battlefield 2042', 750, 7, '../Images/Shop/Battlefield2042.jpg', '1006', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(7, 'Spider Man Miles Morales', 900, 2, '../Images/Shop/SpiderManMilesMorales.jpg', '1007', 'Play Station 5', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(8, 'The Last Of Us Part l', 1700, 5, '../Images/Shop/TheLastOfUsPart1.jpg', '1008', 'Play Station 5', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(9, 'Friday The 13Th', 500, 9, '../Images/Shop/FridayThe13Th.jpeg', '1009', 'XBox', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(10, 'Halo Infinite', 1000, 2, '../Images/Shop/HaloInfinite.jpg', '1010', 'XBox', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(11, 'Super Mario', 2500, 20, '../Images/Shop/SuperMario.jpg', '1011', 'Nintendo', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(12, 'Call of Duty Modern Warefare ll', 1600, 10, '../Images/Shop/CODMW2.jpg', '1012', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(13, 'Avengers', 850, 5, '../Images/Shop/Avengers.jpg', '1013', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(14, 'W2K22', 1200, 5, '../Images/Shop/W2K22.jpg', '1014', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(15, 'Uncharted 4', 350, 8, '../Images/Shop/Uncharted4.jpg', '1015', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(16, 'Spider Man Miles Morales', 200, 10, '../Images/Shop/SpiderManMilesMoralesps4.jpg', '1016', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(17, 'Fast and Furious Cross Roads', 700, 10, '../Images/Shop/FastandFuriousCrossRoads.jpg', '1017', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(18, 'Horizon Forbidden West', 1000, 5, '../Images/Shop/HorizonForbiddenWest.jpg', '1018', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(19, 'PES 2021', 800, 6, '../Images/Shop/PES2021.jpg', '1019', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(20, 'Watch Dogs Legion', 200, 7, '../Images/Shop/WatchDogsLegion.jpg', '1020', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(21, 'Minecraft', 900, 9, '../Images/Shop/Minecraft.jpg', '1021', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(22, 'The Last Stand After Math', 400, 7, '../Images/Shop/TheLastStandAftermath.jpg', '1022', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493'),
(23, 'The Witcher Wild Hunt', 950, 10, '../Images/Shop/TheWitcherWildHunt.jpg', '1023', 'Play Station 4', 'ComingSoon', 'Gaming Hub', 'forexample@gmail.com', '01221575493');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(255) COLLATE utf16_bin NOT NULL,
  `Lname` varchar(255) COLLATE utf16_bin NOT NULL,
  `Gender` varchar(255) COLLATE utf16_bin DEFAULT NULL,
  `Age` int(255) DEFAULT NULL,
  `Phone_Num` varchar(255) COLLATE utf16_bin NOT NULL,
  `Email` varchar(255) COLLATE utf16_bin NOT NULL,
  `Password` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fname`, `Lname`, `Gender`, `Age`, `Phone_Num`, `Email`, `Password`) VALUES
(1, 'Mohamed', 'Hussein', 'Male', 20, '01221575444', 'forexample@gmail.com', 'Admin123@');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
