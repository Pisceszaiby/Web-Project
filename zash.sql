-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 10:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zash`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `zash` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zash`;
--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `profession`, `email`, `instagram`, `password`, `picPath`) VALUES
('Amna Ahmed', 'Software Engineer', 'aahmed.bese20seecs@seecs.edu.pk', '@whimsical_critter', 'amnaahmed123', 'images\\Amna.PNG'),
('Hafsa Tariq', 'Software Engineer', 'htariq.bese20seecs@seecs.edu.pk', '@h_afsatariq', 'hafsatariq123', 'images\\hafsa.PNG'),
('Sadia Rehman', 'Software Engineer', 'srehman.bese20seecs@seecs.edu.pk', '@burningbluephlanets', 'sadiarehman123', 'images\\sadia.jpeg'),
('Zainab Anwaar', 'Software Engineer', 'zanwaar.bese20seecs@seecs.edu.pk', '@zainab_anwaar03', 'zainabanwaar123', 'images\\zainab.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `picPath` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `productID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(255) NOT NULL,
  `productID` int(255) NOT NULL,
  `email` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(255) NOT NULL,
  `picPath` varchar(255) NOT NULL,
  `picPath2` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Category` enum('FACE','EYES','LIPS','SKINCARE','BODY') NOT NULL,
  `SubCategory` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `price` float NOT NULL,
  `discountedPrice` float DEFAULT NULL,
  `Quantity` int(255) NOT NULL,
  `sale` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `picPath`, `picPath2`, `Title`, `Category`, `SubCategory`, `Description`, `price`, `discountedPrice`, `Quantity`, `sale`) VALUES
(1, 'https://www.dior.com/couture/var/dior/storage/images/horizon/beauty/make-up/lips/all-products/edito-new-rouge-rouge-forever/35896823-1-eng-US/edito-new-rouge-rouge-forever_1440_1200.jpg', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcf7eb071/assets/Y0308009/Y0308009_C030800999_E01_ZHC.jpg?imWidth=3000', 'ROGUE RED', 'LIPS', 'LIPSTICK', 'Transfer-proof lipstick - ultra pigmented matte - bare-lip feel comfort', 19, 14, 10, 1),
(2, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw68351a2e/assets/Y0172009/Y0172009_C017500999_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw8ad05b3f/assets/Y0172009/Y0172009_E02_ZHC.jpg?imWidth=3000', 'RUBY RED', 'LIPS', 'LIPSTICK', 'Refillable lipstick with 4 couture finishes: satin, matte, metallic & new velvet', 20, NULL, 5, 0),
(3, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw68430f70/assets/Y0996177/Y0996177_C317500999_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw6cb0d317/assets/Y0996177/Y0996177_C317500999_E05_ZHC.jpg?imWidth=3000', 'ROGUE RED REFILL', 'LIPS', 'LIPSTICK', 'True floral lip care enriched with red peony and pomegranate flower exacts of natural origin. ', 23, NULL, 5, 0),
(4, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcd8d1ab0/assets/Y0996265/Y0996265_C025400999_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7f4bf090/assets/Y0996265/Y0996265_C025400999_E02_ZHC.jpg?imWidth=3000', 'ROGUE TINT', 'LIPS', 'LIPTINT', 'Transfer-proof liquid lipstick - ultra-pigmented matte - weightless comfort', 15, 10, 8, 1),
(5, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwa54a1601/assets/Y0232001/Y0232001_C023200100_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw97a0e06d/assets/Y0232001/Y0232001_C023200100_E03_ZHC.jpg', 'SATIN FINISH', 'LIPS', 'LIPTINT', 'Colored lip balm - 95%* natural-origin ingredients - floral lip care - couture color - refillable', 12, NULL, 5, 0),
(6, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcc5c888c/assets/Y3232001/Y3232001_C323200100_E01_ZHC.jpg?imWidth=3000', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf6c90f30/assets/Y3232001/Y3232001_C323200100_E05_ZHC.jpg?imWidth=3000', 'VERMILION FLORAL', 'LIPS', 'LIPTINT', 'Lip balm is composed of 95%* natural-origin ingredients and is concentrated in floral extracts of red peony, Barbary fig blossom, hibiscus flower and pomegranate flower', 12, NULL, 5, 0),
(7, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7794761e/assets/Y0996242/Y0996242_C099674673_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw5fd59b14/assets/Y0996458/Y0996458_C099600955_E01_ZHC.jpg?imWidth=3000', 'ROGUE SET', 'LIPS', 'LIPSET', 'Refillable lipstick collection - couture color & floral lip care - long wear', 35, 27, 4, 1),
(8, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwd47b0f77/assets/Y0996443/Y0996443_C099600853_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://www.dior.com/couture/var/dior/storage/images/horizon/products/fp-pcd/folder-makeup/folder-lips/y0996443-rouge-dior-ecrin-couture/01-un-ecrin-couture-rouge-dior-cover/26027941-1-int-EN/01-un-ecrin-couture-rouge-dior-cover_1440_1200.jpg', 'ECRIN COUTURE', 'LIPS', 'LIPSET', 'Makeup set - collection of 24 lipsticks', 50, NULL, 5, 0),
(9, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw08cfb5f6/assets/Y0996053/Y0996053_C099600785_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7b1d0d5b/assets/Y0997038/Y0997038_C099700215_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'ATELIER OF DREAMS', 'LIPS', 'LIPSET', 'Case and lipstick holder - lipstick collection', 60, 45, 3, 1),
(10, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwbec51d61/assets/Y0996521/Y0996521_F315504555_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcd3d5236/assets/Y0996521/Y0996521_F315504555_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'SANGUINE SET', 'LIPS', 'LIPSET', 'Makeup set - lip balm and gloss', 30, NULL, 3, 0),
(11, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw2d29d82d/assets/Y4001074/Y4001074_C400100359_E02_ZHC.jpg?imWidth=3000', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw370db1ac/assets/Y4001074/Y4001074_C400100359_E01_ZHC.jpg?imWidth=3000', 'EMBELLISH SET', 'LIPS', 'LIPSET', 'Gift set - 4 iconic products - fragrance, skincare and makeup', 65, 50, 5, 1),
(12, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw68844eae/assets/Y0771250/Y0771250_F077125001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw30bbe217/assets/Y0101000/Y0101000_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'ROGUE GRAPHIST', 'LIPS', 'PENCIL', 'Lipstick pencil - intense color - precision and long wear', 12, NULL, 5, 0),
(13, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw870143ba/assets/Y0039009/Y0039009_C003900999_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc2ae4c7d/assets/Y0039009/Y0039009_C003900770_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'INK LIP LINER', 'LIPS', 'PENCIL', 'Contour felt-pen liner - ultra-pigmented long wear', 10, NULL, 8, 0),
(14, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1c120dd6/assets/Y0039009/Y0039009_C003900777_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw80fe4b57/assets/Y0039009/Y0039009_C003900028_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'LIP LINER', 'LIPS', 'PENCIL', 'Intense and deep color with a matte finish', 10, NULL, 8, 0),
(15, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw72a9f8a1/assets/Y0006000/Y0006000_C000600090_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1942e38f/assets/Y4001051/Y4001051_C400100329_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'VOLUME WATERPROOF', 'EYES', 'MASCARA', 'Volumizing mascara', 15, NULL, 10, 0),
(16, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw5a4b62bd/assets/Y0697400/Y0697400_F069740090_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw68c2ff4b/assets/Y0697400/Y0697400_F069740168_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'DIORSHOW', 'EYES', 'MASCARA', 'Lash extension effect volume mascara', 15, NULL, 10, 0),
(17, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw47d4e77d/assets/Y0696100/Y0696100_F069610090_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1e90a205/assets/Y0696100/Y0696100_F069610268_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'SCULPT CURL', 'EYES', 'MASCARA', 'High definition lash curler mascara', 15, NULL, 5, 0),
(18, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcd022137/assets/Y0138000/Y0138000_C013800090_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw9694df53/assets/Y0138000/Y0138000_C013800090_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'OVERCURL', 'EYES', 'MASCARA', 'Mascara - spectacular 24h volume & curl - lash-fortifying care effect', 20, NULL, 5, 0),
(19, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf6b56f14/assets/Y0803050/Y0803050_F080305094_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw65e94f6d/assets/Y0803050/Y0803050_F080305254_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'EYELINER WATERPROOF', 'EYES', 'LINER', 'Long-wear waterproof eyeliner pencil', 20, NULL, 10, 0),
(20, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwbbb29d07/assets/Y0775101/Y0775101_F077510098_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw0ad81521/assets/Y0775101/Y0775101_F077510798_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'PRECIS LINER', 'EYES', 'LINER', 'Precision eyeliner', 15, 10, 5, 1),
(21, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcbb7ceb6/assets/Y0219000/Y0219000_C021900002_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1c306bf4/assets/Y0219000/Y0219000_C021900001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'COLOUR GRAPHIST', 'EYES', 'LINER', 'Felt-tip & kohl kajal eyeliner duo - precision and long wear - water-resistant', 20, 16, 10, 1),
(22, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwce1ec15a/assets/Y0996205/Y0996205_C022100098_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwb102ca95/assets/Y0996205/Y0996205_C022100098_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'MONO COULEUR COUTURE', 'EYES', 'EYESHADOW', 'High-color eyeshadow - long-wear spectacular finish', 15, NULL, 10, 0),
(23, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwa1bca5bf/assets/Y0148300/Y0148300_F014830661_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw22d6f8a3/assets/Y0148300/Y0148300_F014830001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'FUSION MONO', 'EYES', 'EYESHADOW', 'Long-wear professional mirror-shine eyeshadow', 12, 10, 10, 1),
(24, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf7ee4380/assets/Y0146000/Y0146000_F014600002_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw696114d5/assets/Y0148310/Y0148310_F014831761_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'BACKSTAGE EYE PRIME', 'EYES', 'EYESHADOW', 'Long-wear and smoothing eye color', 12, NULL, 10, 0),
(25, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw9b936402/assets/Y0165006/Y0165006_C016500659_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwcb80b24d/assets/Y0165006/Y0165006_C016500459_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', '5 COULEURS COUTURE', 'EYES', 'EYESHADOW', 'Eyeshadow palette - high color - long-wear creamy powder', 35, 27, 5, 1),
(26, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw71e82737/assets/Y0996032/Y0996032_C099600032_E01_ZHC.jpg?sw=870&sh=580&sm=fit&imwidth=870', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw42da5bcd/assets/Y0996032/Y0996032_E02_ZHC.jpg?imWidth=3000', 'HYDRA LIFE', 'SKINCARE', 'CLEANSER', 'Micellar milk - no rinse cleanser\r\n200 mL', 25, NULL, 10, 0),
(27, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw47d723ed/assets/Y0121360/Y0121360_F012136000_E01_ZHC.jpg?imWidth=3000', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw8701560c/assets/Y0221360/Y0221360_F022136000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'HYDRA LIFE- DRY SKIN', 'SKINCARE', 'CLEANSER', 'Micellar water - no rinse cleanser\r\n200 mL', 25, 19, 10, 1),
(28, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7c4ae473/assets/Y0996499/Y0996499_C099600862_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwb2b1e7a8/assets/Y0996499/Y0996499_C099600862_E02_ZHC.jpg?imWidth=3000', 'CLEANSING MILK', 'SKINCARE', 'CLEANSER', 'Cleansing milk with purifying french water lily - face and eyes', 25, NULL, 10, 0),
(29, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw30f56015/assets/Y0670320/Y0670320_F067032000_E01_ZHC.jpg?sw=870&sh=580&sm=fit&imwidth=870', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf8765a5e/assets/Y0670320/Y0670320_E03_ZHC.jpg?imWidth=3000', 'PRESTIGE', 'SKINCARE', 'SERUM', 'Le nectar', 20, NULL, 10, 0),
(30, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1157f9b5/assets/Y0600229/Y0600229_C099600229_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw656880f0/assets/Y0600229/Y0600229_C099600229_E02_GHC_en_INT.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'L\'OR DE VIE LE SÉRUM', 'SKINCARE', 'SERUM', 'Face and neck serum - exceptional skincare masterpiece', 25, 20, 10, 1),
(31, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw16d97ad0/assets/Y0682320/Y0682320_F068232000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwd1b57c61/assets/Y0600229/Y0600229_C099600229_E03_ZHC_en_INT.jpg?imWidth=3000', 'PRESTIGE GLOW', 'SKINCARE', 'SERUM', 'Le nectar de nuit\r\n30 mL', 20, 15, 10, 1),
(32, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf5335e35/assets/Y0997041/Y0997041_C099700026_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw14c3cd62/assets/Y0997041/Y0997041_C099700026_E02_ZHC.jpg?imWidth=3000', 'L’OR DE VIE LE CÉRÉMONIAL', 'SKINCARE', 'SERUM', 'Intensive rejuvenating ritual - 1-month skincare masterpiece\r\n3 x 30 mL', 70, 58, 5, 1),
(33, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw0367ddec/assets/Y0409530/Y0409530_F040953000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw5c23c3c0/assets/Y0996097/Y0996097_C099600295_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'PRESTIGE MASK', 'SKINCARE', 'MASK', 'Le micro-caviar de rose', 40, 35, 5, 1),
(34, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw36531d85/assets/Y09960013/Y09960013_C099600391_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw0367ddec/assets/Y0409530/Y0409530_F040953000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'CAPTURE DREAMSKIN 1-MINUTE MASK', 'SKINCARE', 'MASK', 'Youth-perfecting face mask - peeling action - new-skin effect\r\n75 mL', 35, NULL, 10, 0),
(35, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw5c23c3c0/assets/Y0996097/Y0996097_C099600295_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwa3401d94/assets/Y0996097/Y0996097_C099600295_E07_ZHC.jpg?imWidth=3000', 'ROSE MASK', 'SKINCARE', 'MASK', 'Glow better-Rose extracts', 25, NULL, 10, 0),
(36, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw45d6e85b/assets/Y0883558/Y0883558_F088075500_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw4ad0a081/assets/Y0883558/Y0883558_F088075800_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'FLASH LUMINIZER', 'FACE', 'HIGHLIGHTER', 'Radiance booster pen', 25, 20, 12, 1),
(37, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw860903ac/assets/Y0126730/Y0126730_C012673001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw533a4bcb/assets/Y0126730/Y0126730_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'NUDE LUMINIZER', 'FACE', 'HIGHLIGHTER', 'Highlighter - ultra-sparkling glow powder - shimmering pigment-infused', 25, NULL, 10, 0),
(38, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc24330b2/assets/Y0021700/Y0021700_C002170001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwe13c1ce8/assets/Y0021700/Y0021700_E02_ZHC.jpg?imWidth=3000', 'MINERAL NUDE GLOW', 'FACE', 'HIGHLIGHTER', 'Brightening & correcting powder', 20, NULL, 10, 0),
(39, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw3d4067b7/assets/Y0022000/Y0022000_C002200011_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw399f617a/assets/Y0022000/Y0022000_C002200006_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'BEJEWELED ', 'FACE', 'HIGHLIGHTER', 'Highlighting powder - shimmering pigments', 25, 18, 10, 1),
(40, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf98158ec/assets/Y4001042/Y4001042_C400100322_E01_ZHC.jpg?imWidth=3000', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw048b7b50/assets/Y4001042/Y4001042_C400100322_E02_ZHC.jpg?imWidth=3000', 'ECRIN GLOW', 'FACE', 'HIGHLIGHTER', '- 1 illuminating powder,\r\n- 5 eyeshadows,\r\n- 4 lip shades,\r\n- 2 blushes,\r\n- 1 double-ended applicator for the eyes and lips,\r\n- 1 blush applicator.', 68, 58, 10, 1),
(41, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw4446177b/assets/Y0996398/Y0996398_C023600025_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw8c186dd8/assets/Y0996398/Y0996398_C023600025_E03_ZHC.jpg?imWidth=3000', 'FOREVER SKIN GLOW', 'FACE', 'FOUNDATION', 'Clean radiant foundation - 24h wear and hydration', 15, 10, 20, 1),
(42, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw2b0ac098/assets/Y0996397/Y0996397_C023500020_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw230e4ba7/assets/Y0996397/Y0996397_C023500020_E03_ZHC.jpg?imWidth=3000', 'FOREVER ', 'FACE', 'FOUNDATION', 'Clean matte foundation - 24h wear - no transfer - concentrated floral skincare', 20, NULL, 20, 0),
(43, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw2822c7b6/assets/Y0332600/Y0332600_F033260020_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw00f3b4b4/assets/Y0996397/Y0996397_C023500034_E03_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'FOREVER PERFECT MOUSSE', 'FACE', 'FOUNDATION', 'Perfect matte weightless foundation zero-pore effect', 20, 15, 15, 1),
(44, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw4ed502e2/assets/Y0009000/Y0009000_C000900022_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw6e630509/assets/Y0009000/Y0009000_C000900022_E02_ZHC_EN_INT.jpg?imWidth=3000', 'UNDERCOVER', 'FACE', 'FOUNDATION', '24h* full coverage fluid foundation', 25, NULL, 20, 0),
(45, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw45d6e85b/assets/Y0883558/Y0883558_F088075500_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw90155396/assets/Y0883558/Y0883558_F088075001_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'FLASH LUMINIZER', 'FACE', 'CONCEALER', 'Radiance booster pen', 20, 15, 10, 1),
(46, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw4e705251/assets/Y0123000/Y0123000_C012300020_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dweec5531c/assets/Y0123000/Y0123000_C012300020_E02_ZHC.jpg?imWidth=3000', 'FOREVER SKIN CORRECT', 'FACE', 'CONCEALER', '24h* wear - full coverage - moisturizing creamy concealer * instrumental test on 20 subjects.', 25, 20, 10, 1),
(47, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw4be0d6f1/assets/Y0262001/Y0262001_C026200020_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw379b5c46/assets/Y0262001/Y0262001_C026200020_E04_ZHC.jpg?imWidth=3000', 'BACKSTAGE FACE & BODY FLASH PERFECTOR CONCEALER', 'FACE', 'CONCEALER', 'Complexion concealer - face and body - high coverage - natural glow finish - waterproof wear', 30, 25, 10, 1),
(48, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw9f99cbe8/assets/Y0000004/Y0000004_C000000999_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw3a00066e/assets/Y0000004/Y0000004_C000000999_E02_ZHC.jpg?imWidth=3000', 'ROGUE BLUSH', 'FACE', 'BLUSH', 'Powder blush - couture colour makeup - long wear', 20, NULL, 20, 0),
(49, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw567d50cd/assets/Y0318008/Y0318008_C031800826_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwb8dfd183/assets/Y0318008/Y0318008_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'ROGUE BLUSH - LIMITED', 'FACE', 'BLUSH', 'Powder blush - buildable intensity - long wear', 25, NULL, 15, 0),
(50, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw2bda1e8e/assets/Y0198002/Y0198002_C032771365_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf6449299/assets/Y0198002/Y0198002_C032771365_E02_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'ROSE BLUSH', 'FACE', 'BLUSH', 'Powder blush - couture colour - long wear', 25, 19, 20, 1),
(51, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwf00e327c/assets/Y0298733/Y0298733_C029873361_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwaeda881a/assets/Y0166004/Y0166004_C016600462_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'SCARLET DREAM', 'FACE', 'BLUSH', 'Powder blush - couture color - long wear', 25, NULL, 20, 0),
(52, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw9d405844/assets/Y0996280/Y0996280_C099600028_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw65517538/assets/Y0996019/Y0996019_C099600019_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'BACKSTAGE BRUSH SET', 'FACE', 'BRUSH', '5 essential makeup brushes from the range to achieve professional results:\r\n\r\n- Powder brush N° 14\r\n\r\n- Light coverage fluid foundation brush N° 11\r\n\r\n- Eyeshadow shader brush N° 21\r\n\r\n- Eyeliner brush N° 24\r\n\r\n- Retractable lip brush N° 31', 75, NULL, 20, 0),
(53, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw1249c28f/assets/Y0996014/Y0996014_C099600014_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw65517538/assets/Y0996019/Y0996019_C099600019_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'BACKSTAGE BRUSH N°11', 'FACE', 'BRUSH', 'Makeup brush - fluid foundation brush - light coverage', 20, 15, 20, 1),
(54, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwebda0914/assets/Y0991930/Y0991930_F099193000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc8fa33e5/assets/Y0992740/Y0992740_F099274000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'BACKSTAGE BLENDER', 'FACE', 'BRUSH', 'Fluid foundation sponge', 12, NULL, 20, 0),
(55, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwa7b6cd5c/assets/Y0996029/Y0996029_C099600029_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw0538e40a/assets/Y0996015/Y0996015_C099600015_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'DIOR BACKSTAGE CONCEALER BRUSH N°13', 'FACE', 'BRUSH', 'Concealer brush n°13\r\n', 12, 9, 10, 1),
(56, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw39d0cc65/assets/Y0670530/Y0670530_F067053000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc3f351f2/assets/Y0670530/Y0670530_E03_ZHC.jpg?imWidth=3000', 'DIOR PRESTIGE', 'BODY', 'LOTION', 'La crème texture essentielle-50ML', 30, 20, 10, 1),
(57, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw83f7ebb0/assets/Y0392538/Y0392538_F039253800_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw41fc1b6b/assets/Y0392538/Y0392538_F039253800_E03_ZHC.jpg?imWidth=3000', 'PRESTIGE LIGHT-IN-WHITE', 'BODY', 'LOTION', 'Light-in-crème\r\n50 mL\r\n', 25, NULL, 10, 0),
(58, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw3881de35/assets/Y0688530/Y0688530_F068853000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwbd60903d/assets/Y9676530/Y9676530_F067653099_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'PRESTIGE', 'BODY', 'LOTION', 'La crème de nuit\r\n50 mL', 25, 18, 10, 1),
(59, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwbb637e57/assets/Y9607509/Y9607509_F060750999_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7035823e/assets/Y0618500/Y0618500_F061850000_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'CAPTURE TOTALE', 'BODY', 'LOTION', 'More beautiful and visibly younger upon waking: this is the feat of the new Capture Totale high regenerative Night Creme, the prodigious skincare with a boosted age-defying, anti-fatigue formula.\r\n\r\nThe night creme helps to support nighttime revitalization* to minimize visible and deep-set signs of aging and fatigue.', 35, 29, 20, 1),
(60, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw47cdc960/assets/Y0404420/Y0404420_F048152000_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw828debb3/assets/Y0422120/Y0422120_F042212000_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'DIORSNOW', 'BODY', 'SCRUBS', 'The Diorsnow brightening uv protection fluid luminous finish spf50+ pa++++ is the highest natural protection in an ultra-sensorial lightweight fluid.\r\n\r\nThe ultra lightweight texture instantly protects the skin from UV rays, delivers softness, comfort and hydration to the skin for a light-infused transparent finish.\r\n\r\nDay after day, the skin is moisturized and effectively protected, even under intense weather conditions.', 40, 32, 20, 1),
(61, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw96c7d181/assets/Y0996934/Y0996934_C099693447_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwce8358c6/assets/Y0996721/Y0996721_C099670185_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'PRESTIGE LIGHT-IN-WHITE', 'BODY', 'SCRUBS', 'The 1st Dior protector with 100% mineral filters.\r\n\r\nSuitable even for fragile skin, it combines high protection and high coverage while remaining gentle on the skin.\r\n\r\nThe Mineral UV Protector is a fluid and is also available in a compact format.', 40, NULL, 20, 0),
(62, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw012b4acf/assets/Y0996704/Y0996704_C099670446_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw7a92ab0e/assets/Y0996731/Y0996731_C099670186_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'PRESTIGE LUMIERE', 'BODY', 'SCRUBS', 'Dior Prestige Light-in-White offers a new preventive* approach to help diminish the appearance of dark spots and the yellowing of skin, all year round.\r\n\r\nThe Dior Prestige Light-in-White brightening lotion combines the freshness of an essence and the comfort of an oil. On the surface, its soft peeling action gently eliminates dead skin cells to reveal a radiantly glowing complexion. It boosts hydrolipidic flows, to help prevent the emergence of new dark spots and the premature yellowing of skin every day.\r\nA rare alchemy for an outstanding action on the youthful beauty and glow of Asian skin, even the most fragile.', 40, 32, 20, 1),
(63, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc339063b/assets/Y1996003/Y1996003_C099600310_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw38400abe/assets/Y1996003/Y1996003_E02_ZHC.jpg?imWidth=3000', 'ROSE ESSENTIAL OIL', 'BODY', 'OILS', 'The 1st* Zash Prestige micro-nutritive lotion is enriched with minerals and Rose de Granville oil for a sensation of intensely purified skin and lasting comfort. Brimming with micro-nutrients, skin is hydrated for 24 hours,** infinitely pure and fresh. La Micro-Lotion de Rose is the first step before La Micro-Huile de Rose for deeply balanced skin that seems as if clarified; perfectly prepared for the rest of this exceptional ritual.\r\n\r\n* At Zash.\r\n** Instrumental test on 11 volunteers.\r\n*** Amount calculated based on the ISO 16128-1 and ISO 16128-2 standard. Water percentage included. The remaining 8% of ingredients contribute to the formula’s performance, sensory appeal and stability.', 45, 39, 20, 1),
(64, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw339f2756/assets/Y0900161/Y0900161_C099600161_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dwc105378e/assets/Y0996429/Y0996429_C099600429_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'CAPTURE YOUTH', 'BODY', 'OILS', 'The New Skin Effect Enzyme Solution lotion for face is the first step in the youth regimen. It helps eliminate dead skin cells and diminishes surface imperfections. The effectiveness of the subsequently applied Capture Youth serum* is boosted.\r\n\r\n*Clinical results measured by dermatologist, Lotion + Plump Filler vs. Plump Filler alone, 32 women, after initial application and at 1 month.', 35, NULL, 20, 0),
(65, 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw22427f32/assets/Y0996345/Y0996345_C099600345_E01_GHC.jpg?sw=715&sh=773&sm=fit&imwidth=800', 'https://eco-beauty.dior.com/dw/image/v2/BDGF_PRD/on/demandware.static/-/Sites-master_dior/default/dw339f2756/assets/Y0900161/Y0900161_C099600161_E01_GHC.jpg?sw=460&sh=498&sm=fit&imwidth=460', 'SORBET MIST', 'BODY', 'OILS', 'The Sorbet Mist encourages cutaneous hydration and energizes the skin while promoting long-lasting makeup hold and reviving its radiance.', 30, NULL, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `us`
--

CREATE TABLE `us` (
  `spec` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `us`
--

INSERT INTO `us` (`spec`, `heading`, `info`) VALUES
('ABOUT US', 'WHO ARE WE?', 'ZASH Beauty is launched with the intention of bringing a luxury shopping experience to Pakistan.\r\n                Consumers now have easy access to purchase international standard makeup, fragrances, skincare, and\r\n                haircare products with confidence. We guarantee that our products are 100% original as we try so source\r\n                the products directly from either the principals, distributors, or resellers of the brands.Our wide\r\n                range of products in each category make ZASH a one-stop destination for all beauty needs. We are trying\r\n                to bring good back to our Land.'),
('ABOUT US', 'HOW TO PLACE ORDER?', ' Visit our website or visit our physical retail outlet in Centurus, Islamabad on the ground floor to find\r\n                your desired products You can place your order online and receive it in 2-5 days or place an order\r\n                online to pick it up from our retail outlet the same day if you require your desired products sooner'),
('ABOUT US', 'WHY CHOOSE US?', 'We guarantee 100% authenticity of our products We have something for everyone . We offer excellent\r\n                customer support and our brand advisors are highly skilled in their relevant fields allowing the\r\n                customers to gain amazing insights and product knowledge making their buying experience seamless. ZASH\r\n                Beauty is here to serve YOU.'),
('CONTACT US', 'OUR EMAIL?', 'If you have questions or comments regarding our Privacy Policy or our privacy practices, please contact\r\n                us by sending an email to ZASH@gmail.com.'),
('CONTACT US', 'OUR FAX?', 'In regard of sending any fax we have a Data Controller of our brand, Dr.Sadia. You can contact the data\r\n                controller by writing to the address P.O.BOX E-11/1 Islamabad.'),
('CONTACT US', 'SOCIAL MEDIA?', 'Instagram : ZASH-Beauty\r\nFacebook : ZASH-Beauty\r\nTwitter : ZASH-Beauty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
