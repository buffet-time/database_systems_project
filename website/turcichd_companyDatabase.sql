-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2017 at 08:42 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turcichd_companyDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `FName` varchar(60) DEFAULT NULL,
  `LName` varchar(60) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Username` varchar(50) NOT NULL DEFAULT '',
  `Email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`FName`, `LName`, `Address`, `Password`, `Username`, `Email`) VALUES
([DEPRECATED]);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Password` varchar(50) DEFAULT NULL,
  `Employee_number` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `Address` varchar(40) DEFAULT NULL,
  `FName` varchar(50) DEFAULT NULL,
  `LName` varchar(60) DEFAULT NULL,
  `phoneNumber` bigint(10) DEFAULT NULL,
  `Manager` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Password`, `Employee_number`, `Address`, `FName`, `LName`, `phoneNumber`, `Manager`) VALUES
([DEPRECATED]),
([DEPRECATED]);

-- --------------------------------------------------------

--
-- Table structure for table `Owner`
--

CREATE TABLE `Owner` (
  `ID` varchar(50) NOT NULL,
  `FName` varchar(50) DEFAULT NULL,
  `LName` varchar(50) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Contact_Information` bigint(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Owner`
--

INSERT INTO `Owner` (`ID`, `FName`, `LName`, `Address`, `Contact_Information`) VALUES
([DEPRECATED]);

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `Stock` bigint(20) DEFAULT NULL,
  `Product_number` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(50) DEFAULT NULL,
  `Image` varchar(100) NOT NULL,
  `product_type` varchar(50) DEFAULT NULL,
  `price` decimal(9,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`Stock`, `Product_number`, `Name`, `Image`, `product_type`, `price`) VALUES
(12, 1111, 'The Legend of Zelda Links sweatshirt', 'images/windwaker_hoodie.jpg', 'Clothing', '50.00'),
(92, 1112, 'Mario tshirt', 'images/pocket_mario.jpg', 'Clothing', '24.00'),
(26, 1113, 'Yoshi Suit', 'images/Yoshi_Suit.jpg', 'Clothing', '45.00'),
(35, 1114, 'Legend of Zelda Poster', 'images/Link_Poster.jpg', 'Poster', '9.99'),
(33, 1115, 'The Legend of Zelda Ocarina of Time Link Amiibo', 'images/Link_Amiibo.jpg', 'Figurine', '15.00'),
(3, 1116, 'Captain Falcon Mug', 'images/Captain_Falcon_Mug.jpg', 'Mug', '15.00'),
(25, 1117, 'Donkey Kong Necktie', 'images/Donkey_Kong_Necktie.jpg', 'accessory', '25.00'),
(25, 1118, 'Donkey Kong Poster', 'images/Donkey_Kong_Poster.jpg', 'Poster', '25.00'),
(26, 1119, 'Donkey Kong Shirt', 'images/Donkey_Kong_Shirt.jpg', 'Clothing', '25.00'),
(26, 1120, 'Entei Plush', 'images/Entei_Plush.jpg', 'Figurine', '25.00'),
(26, 1121, 'Kirby Plush', 'images/Kirby_Plush.jpg', 'Figurine', '25.00'),
(25, 1122, 'Mario Odyssey Poster', 'images/Mario_Odyssey_Poster.jpg', 'Poster', '13.00'),
(26, 1123, 'Link Heart Mug', 'images/Link_Heart_Mug.jpg', 'Mug', '10.00'),
(26, 1124, 'Mario Pin Set', 'images/Mario_Pin_Set.jpg', 'accessory', '15.00'),
(26, 1125, 'Mario Sticker', 'images/Mario_Sticker.jpg', 'accessory', '15.00'),
(26, 1126, 'Metroid Mug', 'images/Metroid_Mug.jpg', 'Mug', '15.00'),
(26, 1127, 'Metroid Poster', 'images/Metroid_Poster.jpg', 'Poster', '15.00'),
(26, 1128, 'NES Backpack', 'images/NES_Backpack.jpg', 'accessory', '50.00'),
(26, 1129, 'NES Controller Mug', 'images/NES_Controller_Mug.jpg', 'Mug', '15.00'),
(26, 1130, 'NES Controller Shirt', 'images/NES_Controller_Shirt.jpeg', 'Clothing', '25.00'),
(26, 1131, 'Peach Poster', 'images/Peach_Poster.jpg', 'Poster', '20.00'),
(26, 1132, 'Pikmin Mug', 'images/Pikmin_Mug.jpg', 'Mug', '13.00'),
(26, 1133, 'Pikmin Plush', 'images/Pikmin_Plush.jpg', 'Figurine', '18.00'),
(26, 1134, 'Pokemon Belt', 'images/Pokemon_Belt.jpg', 'accessory', '35.00'),
(26, 1135, 'Samus Amiibo', 'images/Samus_Amiibo.png', 'Figurine', '35.00'),
(26, 1136, 'Super Smash Bros Poster', 'images/Super_Smash_Bros_Poster.jpg', 'Poster', '17.00'),
(26, 1137, 'Triforce Mug', 'images/Triforce_Mug.jpg', 'Mug', '14.00'),
(26, 1138, 'Triforce Necklace', 'images/Triforce_Necklace.jpg', 'accessory', '20.00'),
(26, 1139, 'Wario Hat', 'images/Wario_Hat.jpg', 'Clothing', '20.00'),
(26, 1140, 'Yoshi Amiibo', 'images/Yoshi_Amiibo.jpg', 'Figurine', '35.00');

-- --------------------------------------------------------

--
-- Table structure for table `Receipt`
--

CREATE TABLE `Receipt` (
  `Address_sent` text,
  `Username` varchar(50) DEFAULT NULL,
  `Order_number` bigint(20) NOT NULL,
  `Total` decimal(20,2) DEFAULT NULL,
  `Time_Stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Receipt`
--

INSERT INTO `Receipt` (`Address_sent`, `Username`, `Order_number`, `Total`, `Time_Stamp`) VALUES
([DEPRECATED]),
([DEPRECATED]),
([DEPRECATED]),
([DEPRECATED]),
([DEPRECATED]),
([DEPRECATED]),
([DEPRECATED]);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Employee_number`);

--
-- Indexes for table `Owner`
--
ALTER TABLE `Owner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`Product_number`);

--
-- Indexes for table `Receipt`
--
ALTER TABLE `Receipt`
  ADD PRIMARY KEY (`Order_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Receipt`
--
ALTER TABLE `Receipt`
  MODIFY `Order_number` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
