-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2017 at 05:36 AM
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
(12332, 'Heritage ', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Heritage.jpg', 'Heritage in-store layout with clothes'),
(13343, 'Essential', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Essential.jpg', 'Essential in-store layout with clothes'),
(14354, 'Oppose', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Oppose.jpg', 'Oppose in-store layout with clothes'),
(15365, 'Flawless', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Flawless.jpg', 'Flawless in-store layout with clothes'),
(16376, 'Rose', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Rose.jpg', 'Rose store with a red bow tie suit on a mannequin'),
(17387, 'Step ', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Step.jpg', 'Step  in-store layout with clothes'),
(18398, 'Aztec ', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Aztec.jpg', 'Aztec in-store layout with clothes'),
(19409, 'Pure ', 'We are here to serve you with the best products and accessories that reflects your style. So check out the latest line up below.\r\n\r\n', 'IMG/brands/Pure.jpg', 'Pure in-store layout with clothes');

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
(29, 1229, 13),
(30, 1230, 20),
(31, 1231, 21),
(32, 1232, 21),
(33, 1233, 22),
(34, 1234, 19),
(35, 1235, 23),
(36, 1236, 23),
(37, 1237, 21),
(38, 1238, 24),
(39, 1239, 12),
(40, 1240, 18),
(41, 1241, 25),
(42, 1242, 26),
(43, 1243, 19),
(44, 1244, 27),
(45, 1245, 18);

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
(19, 'Gold', '#EBCDA4'),
(20, 'Light-Orange', '#ffb289'),
(21, 'Peach', '#e8957b'),
(22, 'Emerald', '#9bddc5'),
(23, 'Rose', '#e6c0ad'),
(24, 'Dark-Gold', '#cdc0a4'),
(25, 'Dark-Aqua', '#2194a0'),
(26, 'Light-Aqua', '#12bbaf'),
(27, 'New-Brown', '#bf6b36');

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
(1, 'Student Discount', 465677, 'IMG/offers/student-discount.jpg', 'students studying'),
(2, '25% Off', 475688, 'IMG/offers/25-percent-off.jpg', 'three friends jumping and laughing at the same time'),
(3, '20% Off', 485699, 'IMG/offers/20-percent-off.jpg', 'two teenage boys with sunglasses at the beach'),
(4, '10% Off', 495700, 'IMG/offers/10-percent-off.jpg', 'three friends talking'),
(5, '£20 Cashback', 505855, 'IMG/offers/twenty-pound-cashback.jpg', 'product shot of a bag, glasses and book by the riverside'),
(6, '£10 Cashback', 515967, 'IMG/offers/ten-pound-cashback.jpg', 'four friends laughing'),
(7, 'Clearance', 525012, 'IMG/offers/clearance-sales.jpg', 'four friends sitting on top of a hill'),
(8, 'Free Shipping', 535134, 'IMG/offers/free-shipping.jpg', 'Customer receiving their parcel');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `entry` int(20) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `offer_id` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `stock` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `size_type` varchar(20) NOT NULL,
  `colour_int` varchar(20) NOT NULL,
  `rating` int(10) NOT NULL,
  `product_description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`entry`, `brand_name`, `brand_id`, `offer_id`, `product_id`, `product_name`, `price`, `stock`, `image`, `size_type`, `colour_int`, `rating`, `product_description`) VALUES
(101, 'Heritage ', 12332, 485699, 1201, 'Basics T-Shirt', '7.99', 14, 'IMG/products/Heritage/1201-Shirt-White.jpg', 'general-M', 'White', 3, 'This is a white short-sleeved basics T-shirt is made of 100% high-quality cotton. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(102, 'Heritage ', 12332, 475688, 1202, 'Khaki Trousers', '28.00', 12, 'IMG/products/Heritage/1202-Trouser-Dull-Brown.jpg', 'general-M', 'Dull-Brown', 3, 'This brand new brown khaki trousers, is made of high-quality cotton. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(103, 'Heritage ', 12332, 495700, 1203, 'Horizon Sunglasses', '75.00', 4, 'IMG/products/Heritage/1203-Glasses-with-case-Light-Brown.jpg', 'na', 'Lightest-Brown', 4, 'These brand new Horizon sunglasses, exist part of the new Horizon collection. While being comfortable and easy to wear for all occasions, they come with a free handcrafted leather band for protection, so buy now while stock lasts!\n'),
(104, 'Heritage ', 12332, 2147483647, 1204, 'Leather Belt', '55.00', 4, 'IMG/products/Heritage/1204-Belt-Dark-Brown.jpg', 'general', 'Dark-Brown', 4, 'This brand new brown belt, is made of pure leather. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(105, 'Heritage ', 12332, 0, 1205, 'Brown Boots', '155.00', 15, 'IMG/products/Heritage/1205-Boots-Brown.jpg', 'specific-M', 'Brown', 5, 'These brand new brown boots, are made of pure 100% leather. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(106, 'Heritage ', 12332, 485699, 1206, 'iPhone 6 case', '21.95', 12, 'IMG/products/Heritage/1206-Phonecase-Dark-Maroon.jpg', 'na', 'Dark-Maroon', 3, 'This brand new brown iPhone 6 case, is made part of the Horizon collection. There were only 500 cases handcrafted, so buy now while stock lasts!'),
(107, 'Heritage ', 12332, 0, 1207, 'Horizon Wallet', '19.99', 1, 'IMG/products/Heritage/1207-Wallet-Dark-Brown.jpg', 'general', 'Dark-Brown', 3, 'This brand new dark brown leather wallet, is made part of the Horizon collection. There were only 500 wallets handcrafted, so buy now while stock lasts!\n'),
(108, 'Heritage ', 12332, 0, 1208, 'Horizon Watch', '65.00', 2, 'IMG/products/Heritage/1208-Watch-Dark-Brown.jpg', 'na', 'Dark-Brown', 4, 'This brand new dark brown leather watch, is made part of the Horizon collection. There were only 500 watches handcrafted, so buy now while stock lasts!'),
(122, 'Pure', 12332, 475688, 1209, 'Godfather Hat', '55.00', 4, 'IMG/products/Pure/1209-Hat-White.jpg', 'general', 'White', 5, 'This is a brand new off-white Godfather crown hat, which is made of 100% high-quality  wool. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(110, 'Aztec', 18398, 535134, 1210, 'Aztec lace-ups ', '55.00', 8, 'IMG/products/Aztec/1210-Shoe-Brownish-Red.jpg', 'specific-M', 'Brownish-Red', 4, 'This brand new brown lace-up shoes, is made of high-quality leather. It''s the perfect addition to any wardrobe and will have you looking great for every formal occasion, so buy now while stock lasts!'),
(111, 'Oppose', 14354, 535134, 1211, 'Blackwood Glasses', '65.00', 12, 'IMG/products/Oppose/1211-Glasses-wooden-frame-Black.jpg', 'na', 'Black', 4, 'This brand new blackwood glasses, are made of high-quality wood. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(112, 'Rose', 16376, 495700, 1212, 'Leather Gloves', '48.00', 15, 'IMG/products/Rose/1212-Gloves-Dark-Red.jpg', 'general', 'Dark-Red', 3, 'These dark red leather gloves, are made of 100% pure leather. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, while it keeps your hands warm!'),
(113, 'Flawless', 15365, 465677, 1213, 'Converse', '99.99', 4, 'IMG/products/Flawless/1213-Converse-Black.jpg', 'specific-M', 'Black', 4, 'These converses with laces, are a perfect addition to any wardrobe and will have you looking great for every occasion, while you work hard and play hard!'),
(114, 'Aztec', 18398, 505855, 1214, 'Leather Shoulder Bag', '79.99', 9, 'IMG/products/Aztec/1214-Bag-Brown.jpg', 'general', 'Brown', 5, 'This brand new shoulder bag, is made of high-quality leather. It''s perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(115, 'Heritage', 12332, 525012, 1215, 'Round-Toe Pump', '25.00', 12, 'IMG/products/Heritage/1215-Heels-Light-Brown.jpg', 'specific-F', 'Light-Brown', 3, 'These light brown, round-toe pump heels, are made of high-quality fabric. It''s perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!\n'),
(116, 'Pure', 19409, 505855, 1216, 'Platform', '35.00', 8, 'IMG/products/Pure/1216-Heels-Dark-Blue.jpg', 'specific-F', 'Dark-Blue', 3, 'These dark blue, platform heels, are made of high-quality fabric. It''s perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(121, 'Oppose', 14354, 535134, 1217, 'Peep Toe', '35.00', 12, 'IMG/products/Oppose/1217-Heels-Pink.jpg', 'specific-F', 'Pink', 3, 'These brand new pink and black peep-toe heels, are perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!\n'),
(118, 'Flawless', 15365, 515967, 1218, 'Scarpin', '35.00', 4, 'IMG/products/Flawless/1218-Heels-Dark-Red.jpg', 'specific-F', 'Dark-Red', 3, 'These dark red scarpin heels, are a perfect addition to any wardrobe and will have you looking great for every occasion, while you work hard and play hard!\n'),
(119, 'Rose', 16376, 495700, 1219, 'Marble Earrings', '15.99', 1, 'IMG/products/Rose/1219-Earrings-Marble-Green.jpg', 'na', 'Marble-Green', 3, 'Let these green marble earrings compliment you at every special occasion. It''s the perfect addition to any wardrobe or as a great gift to a special someone. So buy now while stock lasts!'),
(120, 'Step', 17387, 485699, 1220, 'Wool Jumper', '8.99', 6, 'IMG/products/Step/1220-Wool-Jumper-Stripes-Navy-Blue.jpg', 'general-M', 'Navy-Blue', 3, 'This is a blue and white jumper, made of 100% high-quality wool. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(117, 'Aztec', 18398, 525012, 1221, 'Marl Jumper', '7.99', 3, 'IMG/products/Aztec/1221-Marl-Jumper-Dark-Maroon.jpg', 'general-M', 'Dark-Maroon', 3, 'This is a dark maroon marl jumper, made of 100% high-quality wool. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(124, 'Pure', 19409, 515967, 1222, 'Marl Jumper', '7.99', 16, 'IMG/products/Pure/1222-Marl-Jumper-Light-Green.jpg', 'general-M', 'Light-Green', 3, 'This is a light green marl jumper, made of 100% high-quality wool. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(123, 'Flawless', 15365, 475688, 1223, 'Marl Jumper', '7.99', 17, 'IMG/products/Flawless/1223-Marl-Jumper-Light-Maroon.jpg', 'general-M', 'Light-Maroon', 3, 'This is a light maroon marl jumper, and It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(109, 'Oppose', 14354, 0, 1224, 'Plain Red T-Shirt', '7.99', 3, 'IMG/products/Oppose/1224-Shirt-Red.jpg', 'general-M', 'Red', 3, 'This is a plain red T-shirt, made of high-quality cotton. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(126, 'Flawless', 15365, 465677, 1225, 'Plain White T-Shirt', '7.99', 7, 'IMG/products/Flawless/1225-Shirt-White.jpg', 'general-M', 'White', 3, 'This is a pure white shirt, made of high-quality cotton. It''s the perfect addition to any wardrobe and will have you looking great for every occasion, so buy now while stock lasts!'),
(125, 'Rose', 18398, 525012, 1226, 'Summer Hat', '34.99', 9, 'IMG/products/Rose/1226-Summer-Hat-Light-Gold.jpg', 'general', 'Light-Gold', 3, 'This is a brand new summers sun-hat, which is specially made to protect your face and shoulders from the sun. It''s the perfect hat for every occasion, so buy now while stock lasts!'),
(127, 'Step', 17387, 515967, 1227, 'Tinted Sunglasses', '65.00', 9, 'IMG/products/Step/1227-Glasses-Black.jpg', 'na', 'Black', 4, 'These dark tinted sunglasses, are specially made to be comfortable and easy to wear for all occasions, while protecting your eyes. The glasses come with a free soft cloth and case to safeguard the glasses from light marks, so buy now while stock lasts!'),
(128, 'Aztec', 18398, 505855, 1228, 'Vintage Glasses', '65.00', 23, 'IMG/products/Aztec/1228-Glasses-Gold.jpg', 'na', 'Gold', 4, 'These round framed vintage gold glasses, are comfortable and easy to wear for all occasions, and comes with a free handcrafted leather band to protect the glasses, so buy now while stock lasts!'),
(129, 'Pure', 19409, 465677, 1229, 'Sports Trainers', '37.99', 4, 'IMG/products/Pure/1229-Trainer-Light-Blue.jpg', 'specific-M', 'Light-Blue', 3, 'These light blue sports trainers, with laces, are made to support you in all kinds of fitness activities. It''s not only a perfect addition to your wardrobe but will have you looking great for every occasion, while you work hard and play hard!'),
(130, 'Rose', 18398, 0, 1230, 'Orange Heels', '35.00', 15, 'IMG/products/Rose/1230-Heels-Orange.jpg', 'specific-F', 'Light-Orange', 4, 'These light orange, round-toe pump heels, are perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(131, 'Essential', 13343, 0, 1231, 'Peach Belt', '17.99', 12, 'IMG/products/Essential/1231-Belt-Peach.jpg', 'general', 'Peach', 3, 'This brand new peach belt, is part of the Plaza collection. It''s the perfect addition to any wardrobe and will have you looking great for every occasion. So buy now while stock lasts!'),
(132, 'Essential', 13343, 0, 1232, 'Peach Purse', '21.99', 12, 'IMG/products/Essential/1232-Purse-Peach.jpg', 'general', 'Peach', 3, 'This brand new peach purse, is part of the Plaza collection. It''s the perfect addition to any wardrobe and will have you looking great for every occasion. So buy now while stock lasts!'),
(133, 'Essential', 13343, 0, 1233, 'Pearl Bracelet', '6.99', 12, 'IMG/products/Essential/1233-Pearl-Bracelet-Emerald.jpg', 'general', 'Emerald', 3, 'This brand new pearl bracelet, is part of the Plaza collection. It''s the perfect addition to any wardrobe and will have you looking great for every occasion. So buy now while stock lasts!'),
(134, 'Step', 17387, 515967, 1234, 'Laced Heels', '35.00', 12, 'IMG/products/Step/1234-Heels-Gold.jpg', 'specific-F', 'Gold', 3, 'These laced round-toe pump heels, are perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(135, 'Rose', 18398, 525012, 1235, 'Wedge Sandals', '35.00', 12, 'IMG/products/Rose/1235-Heels-Peach.jpg', 'specific-F', 'Rose', 3, 'These rose wedge sandals heels, are perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(136, 'Oppose', 14354, 535134, 1236, 'Short Sleeved Cardigan', '24.99', 12, 'IMG/products/Oppose/1236-Short-Sleeved-Flower-Pattern-Cardigan-Light-Pink.jpg', 'general-F', 'Rose', 3, 'This pink short-sleeved flower pattern cardigan, is perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(137, 'Essential', 13343, 0, 1237, 'Peach Bucket Hat', '26.99', 12, 'IMG/products/Essential/1237-Bucket-Hat-Pink.jpg', 'general', 'Peach', 3, 'Let this peach bucket hat compliment you at every special occasion. It''s the perfect addition to any wardrobe or a great gift to a special someone. So buy now while stock lasts!'),
(138, 'Step', 17387, 515967, 1238, 'Glitter Vest Top', '15.99', 12, 'IMG/products/Step/1238-Gold-Glitter-Vest-Top.jpg', 'general', 'Dark-Gold', 3, 'Let this glitter vest top compliment you at every special occasion. It''s the perfect addition to any wardrobe or a great gift to a special someone. So buy now while stock lasts!\n'),
(139, 'Essential', 13343, 0, 1239, 'Cashmere Scarf', '79.99', 12, 'IMG/products/Essential/1239-New-Cashmire-Multi-Coloured-Scarf-Pink.jpg', 'general', 'Pink', 4, 'This brand new multi-coloured cashmere scarf, is part of the Plaza collection. It''s not only a perfect addition to your wardrobe but will have you looking great for every occasion.\n'),
(140, 'Flawless', 15365, 465677, 1240, 'Long Sleeved Cardigan', '28.00', 12, 'IMG/products/Flawless/1240-Long-Sleeved-Plain-Cardigan-Light-Gold.jpg', 'general', 'Light-Gold', 3, 'This gold long-sleeved Cardigan, is perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(141, 'Essential', 13343, 0, 1241, 'Plaza Pumps', '35.00', 12, 'IMG/products/Essential/1241-Plaza-Pumps-Dark-Aqua.jpg', 'specific-F', 'Dark-Aqua', 3, 'These dark aqua, round-toe pump heels, are part of the Plaza collection which makes it perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(142, 'Essential', 13343, 0, 1242, 'Side Cut Maxi Dress', '45.00', 12, 'IMG/products/Essential/1242-V-Cut-Long-Dress-Mint.jpg', 'general', 'Light-Aqua', 3, 'This light aqua side cute maxi dress, is part of the Plaza collection which makes it perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(143, 'Aztec', 18398, 505855, 1243, 'Double Zipper Purse', '39.50', 12, 'IMG/products/Aztec/1243-Double-Zipper-Purse.jpg', 'general', 'Light-Gold', 4, 'This gold double zipper purse was handcrafted specially to compliment the Plaza collection. So, take full advantage of this and buy now while stock lasts!'),
(144, 'Aztec', 18398, 505855, 1244, 'Brown Wedge Sandals', '35.00', 12, 'IMG/products/Aztec/1244-Wedge-Sandals-Brown.jpg', 'specific-F', 'Brown', 3, 'These brown wedge sandals heels, are perfect for any professional or casual use and will have you looking great for every occasion, so buy now while stock lasts!'),
(145, 'Step', 17387, 515967, 1245, 'Waist Shorts', '9.99', 12, 'IMG/products/Step/1245-Waist-Shorts.jpg', 'general-F', 'Black', 3, 'These cream waist shorts are perfect for any casual use and will have you looking great for every occasion, so buy now while stock lasts!\n');

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
(1234, 'Fitness', 'default', 'Rose', 16376, 'wardrobe/souvenir/special-article/fitness-training.php', 'IMG/souvenirs/article/personal-trainer-tying-his-trainers.jpg', 'personal trainer tying his trainers'),
(1236, 'New Wardrobe', 'default', 'Aztec', 18398, 'wardrobe/souvenir/special-article/new-wardrobe.php', 'IMG/souvenirs/article/girl-choosing-shoes-in-her-wardrobe.jpg', 'girl choosing shoes in her wardrobe'),
(1437, 'Plaza Collection', 'default', 'Essential', 13343, 'wardrobe/souvenir/special-offer/collection-plaza.php', 'IMG/souvenirs/collection/plaza-collection.jpg', 'a girl lying down with headphones on a pink background'),
(1438, 'Horizon Collection', 'default', 'Heritage', 15365, 'wardrobe/souvenir/special-offer/collection-horizon.php', 'IMG/souvenirs/collection/horizon-collection.jpeg', 'black and white portrait image of a man');

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
