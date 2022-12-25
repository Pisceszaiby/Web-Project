-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 10:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;
--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `picPath` text DEFAULT 'https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738',
  `picPath2` text NOT NULL,
  `productID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Category` varchar(50) NOT NULL,
  `SubCategory` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `discountedPrice` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`picPath`, `picPath2`, `productID`, `Title`, `Category`, `SubCategory`, `price`, `discountedPrice`, `Quantity`) VALUES
('https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738', 'https://cdn.shopify.com/s/files/1/1338/0845/products/8_All_Fresh_Kiss_Lip_Creme_flat_244_800x1200.jpg?v=1670961100', 1, 'angel lips', 'Lips', 'Lip Pencils', 6338, 5000, 1),
('https://cdn.shopify.com/s/files/1/1338/0845/products/2389970255954-Numero-Uno-BFFLiner-NumeroUno-2_680x.jpg?v=1668559585', 'https://cdn.shopify.com/s/files/1/1338/0845/products/4026517880914-Grande-BFFLiner-Grande-2_680x.jpg?v=1668561404', 2, 'e lips', 'Lips', 'Lip Tints', 6338, 5000, 12),
('https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Sugar_Pie_004_c9557c71-24d7-4271-96c2-d0ce8ae2ae21_680x.jpg?v=1668199754', 'https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Honeybun_097_680x.jpg?v=1668110283', 3, 'yellow lips', 'Lips', 'Lip sets', 6338, 5000, 1),
('https://cdn.shopify.com/s/files/1/1338/0845/products/7_Indv._CGLS_Flat_Sring_Break_131_8d0d79b0-2e18-4f78-8664-2bf930cd9afa_680x.jpg?v=1668199716', 'https://cdn.shopify.com/s/files/1/1338/0845/products/6981612109906-Plz-JellyMuch-Plz-2_680x.jpg?v=1668647674', 4, 'high', 'Lips', 'Lip Pencils', 6338, 5000, 13),
('https://cdn.shopify.com/s/files/1/1338/0845/products/2389970255954-Numero-Uno-BFFLiner-NumeroUno-2_680x.jpg?v=1668559585', 'https://cdn.shopify.com/s/files/1/1338/0845/products/4026517880914-Grande-BFFLiner-Grande-2_680x.jpg?v=1668561404', 5, 'blue lips', 'Lips', 'Lip sets', 6338, 5000, 1),
('https://cdn.shopify.com/s/files/1/1338/0845/products/2389970255954-Numero-Uno-BFFLiner-NumeroUno-2_680x.jpg?v=1668559585', 'https://cdn.shopify.com/s/files/1/1338/0845/products/4026517880914-Grande-BFFLiner-Grande-2_680x.jpg?v=1668561404', 6, 'highest', 'Lips', 'Lip sets', 6338, 5000, 15),
('https://cdn.shopify.com/s/files/1/1338/0845/products/7_Indv._CGLS_Flat_Sring_Break_131_8d0d79b0-2e18-4f78-8664-2bf930cd9afa_680x.jpg?v=1668199716', 'https://cdn.shopify.com/s/files/1/1338/0845/products/6981612109906-Plz-JellyMuch-Plz-2_680x.jpg?v=1668647674', 7, 'yellow lips', 'Lips', 'Lip sets', 6338, 5000, 1),
('https://cdn.shopify.com/s/files/1/1338/0845/products/2389970255954-Numero-Uno-BFFLiner-NumeroUno-2_680x.jpg?v=1668559585', 'https://cdn.shopify.com/s/files/1/1338/0845/products/4026517880914-Grande-BFFLiner-Grande-2_680x.jpg?v=1668561404', 8, 'blue lips', 'Lips', 'Lip sets', 6338, 5000, 11),
('https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738', 'https://cdn.shopify.com/s/files/1/1338/0845/products/8_All_Fresh_Kiss_Lip_Creme_flat_244_800x1200.jpg?v=1670961100', 9, 'angel lips', 'Lips', 'Lip sets', 6338, 5000, 1),
('https://cdn.shopify.com/s/files/1/1338/0845/products/7_Indv._CGLS_Flat_Sring_Break_131_8d0d79b0-2e18-4f78-8664-2bf930cd9afa_680x.jpg?v=1668199716', 'https://cdn.shopify.com/s/files/1/1338/0845/products/6981612109906-Plz-JellyMuch-Plz-2_680x.jpg?v=1668647674', 10, 'high', 'Lips', 'Lip Sticks', 6338, 5000, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
