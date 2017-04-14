-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2017 at 05:19 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Fifth_Street`
--
CREATE DATABASE IF NOT EXISTS `Fifth_Street` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Fifth_Street`;

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE `Brands` (
  `brand_id` int(20) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Brands`
--

INSERT INTO `Brands` (`brand_id`, `brand_name`, `description`, `image`, `alt`) VALUES
(12332, 'Heritage ', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/1.jpg', 'fill text'),
(13343, 'Essential', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/2.jpg', 'fill text'),
(14354, 'Oppose', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/3.jpg', 'fill text'),
(15365, 'Clean Lines', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/4.jpg', 'fill text'),
(16376, 'Rose', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/5.jpg', 'fill text'),
(17387, 'Step ', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/6.jpg', 'fill text'),
(18398, 'Aztec ', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/7.jpg', 'fill text'),
(19409, 'Pure ', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/8.jpg', 'fill text');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `colour_entry` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `colour_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`colour_entry`, `product_id`, `colour_id`) VALUES
(1, 1201, 2),
(2, 1202, 8),
(3, 1203, 1),
(4, 1204, 4),
(5, 1205, 5),
(6, 1206, 4),
(7, 1207, 4),
(8, 1208, 4),
(9, 1209, 2),
(10, 1210, 9),
(11, 1211, 1),
(12, 1212, 11),
(13, 1213, 1),
(14, 1214, 5),
(15, 1215, 6),
(16, 1216, 14),
(17, 1217, 12),
(18, 1218, 11),
(19, 1219, 17),
(20, 1220, 15),
(21, 1221, 4),
(22, 1222, 16),
(23, 1223, 3),
(24, 1224, 10),
(25, 1225, 2),
(26, 1226, 18),
(27, 1227, 1),
(28, 1228, 19),
(29, 1229, 13);

-- --------------------------------------------------------

--
-- Table structure for table `colourVal`
--

CREATE TABLE `colourVal` (
  `colour_id` int(100) NOT NULL,
  `colour_name` varchar(50) NOT NULL,
  `hex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colourVal`
--

INSERT INTO `colourVal` (`colour_id`, `colour_name`, `hex`) VALUES
(1, 'Black', '#000'),
(2, 'White', '#FFF'),
(3, 'Light-Maroon', '#957071'),
(4, 'Dark-Maroon', '#543638'),
(5, 'Brown ', '#A55D47'),
(6, 'Light-Brown', '#E5C4B1'),
(7, 'Lightest-Brown', '#CB754E'),
(8, 'Dull-Brown', '#918681'),
(9, 'Brownish-Red', '#763D3E'),
(10, 'Red ', '#EF4141'),
(11, 'Dark-Red', '#B7161B'),
(12, 'Pink', '#FF7575'),
(13, 'Light-blue', '#BDD1EA'),
(14, 'Dark-Blue', '#103AA2'),
(15, 'Navy-Blue', '#252534'),
(16, 'Light-Green', '#79968E'),
(17, 'Marble-Green', '#AA975B'),
(18, 'Light-Gold', '#E7D197'),
(19, 'Gold', '#EBCDA4');

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE `Offers` (
  `ord` int(20) NOT NULL,
  `offer_name` varchar(50) NOT NULL,
  `offer_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`ord`, `offer_name`, `offer_id`, `image`, `alt`) VALUES
(1, 'Student discount', 465677, 'IMG/offers/1.jpg', 'student discount'),
(2, '50% off', 475688, 'IMG/offers/2.jpg', '50% off'),
(3, '25% off', 485699, 'IMG/offers/3.jpg', '25% off'),
(4, '10% off', 495700, 'IMG/offers/4.jpg', '10% off'),
(5, '£20 cashback', 505855, 'IMG/offers/5.jpg', '£20 cashback'),
(6, '£10 cashback', 515967, 'IMG/offers/6.jpg', '£10 cashback'),
(7, 'Clearance', 525012, 'IMG/offers/7.jpg', 'Clearance'),
(8, 'Free shipping', 535134, 'IMG/offers/8.jpg', 'Free shipping');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `entry` int(20) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `offer_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `stock` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `size_type` varchar(20) NOT NULL,
  `colour_int` varchar(20) NOT NULL,
  `rating` int(10) NOT NULL,
  `product_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`entry`, `brand_name`, `brand_id`, `offer_id`, `product_id`, `product_name`, `price`, `stock`, `image`, `alt`, `size_type`, `colour_int`, `rating`, `product_description`) VALUES
(101, 'Heritage ', 12332, 495700, 1201, 'White T-Shirt', '5.00', 12, 'IMG/products/Heritage/1201-Shirt-White.jpg', 'fill text', 'general', 'White', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(102, 'Heritage ', 12332, 495700, 1202, 'Straight Trousers', '5.00', 12, 'IMG/products/Heritage/1202-Trouser-Dull-Brown.jpg', 'fill text', 'general', 'Dull-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(103, 'Heritage ', 12332, 495700, 1203, 'Sunglasses', '5.00', 12, 'IMG/products/Heritage/1203-Glasses-with-case-Light-Brown.jpg', 'fill text', 'na', 'Lightest-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(104, 'Heritage ', 12332, 495700, 1204, 'Leather Belt', '5.00', 12, 'IMG/products/Heritage/1204-Belt-Dark-Brown.jpg', 'fill text', 'general', 'Dark-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(105, 'Heritage ', 12332, 495700, 1205, 'Brown Boots', '5.00', 12, 'IMG/products/Heritage/1205-Boots-Brown.jpg', 'fill text', 'specific', 'Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(106, 'Heritage ', 12332, 495700, 1206, 'iPhone 6 case', '5.00', 12, 'IMG/products/Heritage/1206-Phonecase-Dark-Maroon.jpg', 'fill text', 'na', 'Dark-Maroon', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(107, 'Heritage ', 12332, 495700, 1207, 'Wallet', '5.00', 12, 'IMG/products/Heritage/1207-Wallet-Dark-Brown.jpg', 'fill text', 'general', 'Dark-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(108, 'Heritage ', 12332, 495700, 1208, 'Watch', '5.00', 12, 'IMG/products/Heritage/1208-Watch-Dark-Brown.jpg', 'fill text', 'general', 'Dark-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(109, 'Pure', 12332, 495700, 1209, 'White Hat', '5.00', 12, 'IMG/products/Pure/1209-Hat-White.jpg', 'fill text', 'general', 'White', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(110, 'Essential', 13343, 495700, 1210, 'Shoe', '5.00', 12, 'IMG/products/Essential/1210-Shoe-Brownish-Red.jpg', 'fill text', 'specific', 'Brownish-Red', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(111, 'Oppose', 14354, 495700, 1211, 'Blackwood Glasses', '5.00', 12, 'IMG/products/Oppose/1211-Glasses-wooden-frame-Black.jpg', 'fill text', 'general', 'Black', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(112, 'Rose', 16376, 495700, 1212, 'Dark Red Leather  Gloves', '5.00', 12, 'IMG/products/Rose/1212-Gloves-Dark-Red.jpg', 'fill text', 'general', 'Dark-Red', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(113, 'Clean-Lines', 15365, 495700, 1213, 'Converse', '5.00', 12, 'IMG/products/Clean-Lines/1213-Converse-Black.jpg', 'fill text', 'specific', 'Black', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(114, 'Aztec', 18398, 495700, 1214, 'Brown Leather Bag', '5.00', 12, 'IMG/products/Aztec/1214-Bag-Brown.jpg', 'fill text', 'general', 'Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(115, 'Heritage', 12332, 0, 1215, 'Round-Toe Pump', '5.00', 12, 'IMG/products/Heritage/1215-Heels-Light-Brown.jpg', 'fill text', 'specific', 'Light-Brown', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(116, 'Essential', 13343, 0, 1216, 'Platform', '5.00', 12, 'IMG/products/Essential/1216-Heels-Dark-Blue.jpg', 'fill text', 'specific', 'Dark-Blue', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(117, 'Oppose', 14354, 0, 1217, 'Peep Toe', '5.00', 12, 'IMG/products/Oppose/1217-Heels-Pink.jpg', 'fill text', 'specific', 'Pink', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(118, 'Clean Lines', 15365, 0, 1218, 'Scarpin', '5.00', 12, 'IMG/products/Clean-\r\nLines/1218-Heels-Dark-Red.jpg', 'fill text', 'specific', 'Dark-Red', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(119, 'Rose', 16376, 0, 1219, 'Marble Earrings', '5.00', 12, 'IMG/products/Rose/1219-Earrings-Marble-Green.jpg', 'fill text', 'na', 'Marble-Green', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(120, 'Step', 17387, 0, 1220, 'Wool Jumper', '5.00', 12, 'IMG/products/Step/1220-Wool-Jumper-Stripes-Navy-Blue.jpg', 'fill text', 'general', 'Navy-Blue', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(121, 'Aztec', 18398, 0, 1221, 'Marl Jumper', '5.00', 12, 'IMG/products/Aztec/1221-Marl-Jumper-Dark-Maroon.jpg', 'fill text', 'general', 'Dark-Maroon', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(122, 'Pure', 19409, 0, 1222, 'Marl Jumper', '5.00', 12, 'IMG/products/Pure/1222-Marl-Jumper-Light-Green.jpg', 'fill text', 'general', 'Light-Green', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(123, 'Essential', 13343, 0, 1223, 'Marl Jumper', '5.00', 12, 'IMG/products/Essential/1223-Marl-Jumper-Light-Maroon.jpg', 'fill text', 'general', 'Light-Maroon', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(124, 'Oppose', 14354, 0, 1224, 'Red Shirt', '5.00', 12, 'IMG/products/Oppose/1224-Shirt-Red.jpg', 'fill text', 'general', 'Red', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(125, 'Clean Lines', 18398, 0, 1225, 'White Top', '5.00', 12, 'IMG/products/Clean-Lines/1225-Shirt-White.jpg', 'fill text', 'general', 'White', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(126, 'Rose', 18398, 0, 1226, 'Summer Hat', '5.00', 12, 'IMG/products/Rose/1226-Summer-Hat-Light-Gold.jpg', 'fill text', 'general', 'Light-Gold', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(127, 'Step', 17387, 0, 1227, 'Glasses', '5.00', 12, 'IMG/products/Step/1227-Glasses-Black.jpg', 'fill text', 'general', 'Black', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(128, 'Aztec', 18398, 0, 1228, 'Glasses', '5.00', 12, 'IMG/products/Aztec/1228-Glasses-Gold.jpg', 'fill text', 'general', 'Gold', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(129, 'Pure', 19409, 0, 1229, 'Trainers', '5.00', 12, 'IMG/products/Pure/1229-Trainer-Light-Blue.jpg', 'fill text', 'specific', 'Light-Blue', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.');

-- --------------------------------------------------------

--
-- Table structure for table `Souvenirs`
--

CREATE TABLE `Souvenirs` (
  `souvenir_id` int(20) NOT NULL,
  `souvenir_name` varchar(20) NOT NULL,
  `souvenir_state` varchar(20) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `souvenir_link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Souvenirs`
--

INSERT INTO `Souvenirs` (`souvenir_id`, `souvenir_name`, `souvenir_state`, `brand_name`, `brand_id`, `souvenir_link`, `image`, `alt`) VALUES
(1234, 'Fitness Article', 'default', 'Rose', 16376, 'wardrobe/souvenir/special-article/fitness-training.php', 'IMG/souvenirs/souvenir.jpg', 'fill text'),
(1235, 'Sports Article', 'default', 'Step', 17387, 'wardrobe/souvenir/special-article/sports.php', 'IMG/souvenirs/souvenir.jpg', 'fill text'),
(1236, 'Travel Article', 'na', 'Aztec', 18398, 'wardrobe/souvenir/special-offer/collection-ffp.php', 'IMG/souvenirs/souvenir.jpg', 'fill text'),
(1341, '50% off', 'na', 'Heritage', 12332, '', '', 'Fill text'),
(1342, 'Dress Promo', 'na', 'Oppose', 14354, '', '', 'Fill text'),
(1343, 'New Store', 'na', 'Pure', 19409, '', '', 'Fill text'),
(1437, 'Plaza Collection', 'default', 'Essential', 13343, 'wardrobe/souvenir/special-offer/collection-plaza.php', 'IMG/souvenirs/souvenir.jpg', 'fill text'),
(1438, 'Horizon Collection', 'default', 'Clean Lines', 15365, 'wardrobe/souvenir/special-offer/collection-horizon.php', 'IMG/souvenirs/souvenir.jpg', 'fill text');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brands`
--
ALTER TABLE `Brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`colour_entry`);

--
-- Indexes for table `colourVal`
--
ALTER TABLE `colourVal`
  ADD PRIMARY KEY (`colour_id`);

--
-- Indexes for table `Offers`
--
ALTER TABLE `Offers`
  ADD PRIMARY KEY (`ord`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `Souvenirs`
--
ALTER TABLE `Souvenirs`
  ADD PRIMARY KEY (`souvenir_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
