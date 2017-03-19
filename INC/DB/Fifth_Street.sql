-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2017 at 03:28 AM
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

CREATE TABLE IF NOT EXISTS `Brands` (
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
(12332, 'PHP', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(13343, 'CSS', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(14354, 'HTML', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(15365, 'JS', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(16376, 'SASS', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(17387, 'SQL', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(18398, 'Flexbox', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text'),
(19409, 'Python', 'This is for the individual brand statement on the individual brand page', 'IMG/brands/brand.jpg', 'fill text');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE IF NOT EXISTS `colours` (
  `colour_entry` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `colour_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`colour_entry`, `product_id`, `colour_id`) VALUES
(1, 1128, 1),
(2, 1128, 2),
(3, 1128, 3),
(4, 1128, 4),
(5, 1135, 2),
(6, 1145, 4);

-- --------------------------------------------------------

--
-- Table structure for table `colourVal`
--

CREATE TABLE IF NOT EXISTS `colourVal` (
  `colour_id` int(100) NOT NULL,
  `colour_name` varchar(50) NOT NULL,
  `hex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colourVal`
--

INSERT INTO `colourVal` (`colour_id`, `colour_name`, `hex`) VALUES
(1, 'purple', '#B261ED'),
(2, 'orange', '#fec52d'),
(3, 'green', '#094e07'),
(4, 'blue', '#40fff8');

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE IF NOT EXISTS `Offers` (
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
(1, 'Student discount', 465677, 'IMG/offers/students-discount.jpg', 'student discount'),
(2, '50% off', 475688, 'IMG/offers/students-discount.jpg', '50% off'),
(3, '25% off', 485699, 'IMG/offers/students-discount.jpg', '25% off'),
(4, '10% off', 495700, 'IMG/offers/students-discount.jpg', '10% off'),
(5, '£20 cashback', 505855, 'IMG/offers/students-discount.jpg', '£20 cashback'),
(6, '£10 cashback', 515967, 'IMG/offers/students-discount.jpg', '£10 cashback'),
(7, 'Clearance', 525012, 'IMG/offers/students-discount.jpg', 'Clearance'),
(8, 'Free shipping', 535134, 'IMG/offers/students-discount.jpg', 'Free shipping');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
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
(1, 'SQL', 17387, 465677, 101, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-101.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(2, 'SASS', 16376, 465677, 102, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-102.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(3, 'SASS', 16376, 465677, 103, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-103.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(4, 'SQL', 17387, 0, 104, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-104.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(5, 'SASS', 16376, 475688, 105, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-105.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(6, 'SQL', 17387, 475688, 106, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-106.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(7, 'SQL', 17387, 475688, 107, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-107.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(8, 'SASS', 16376, 0, 108, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-108.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(9, 'Python ', 19409, 485699, 109, 'Python shirt', '5.00', 12, 'IMG/products/Python/shirt-109.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(10, 'HMTL ', 14354, 485699, 110, 'HMTL shirt', '5.00', 12, 'IMG/products/HTML/shirt-110.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(11, 'CSS ', 13343, 485699, 111, 'CSS shirt', '5.00', 12, 'IMG/products/CSS/shirt-111.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(12, 'HMTL ', 14354, 0, 112, 'HMTL shirt', '5.00', 12, 'IMG/products/HTML/shirt-112.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(13, 'CSS ', 13343, 495700, 113, 'CSS shirt', '5.00', 12, 'IMG/products/CSS/shirt-113.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(14, 'PHP ', 12332, 495700, 114, 'PHP shirt', '5.00', 12, 'IMG/products/PHP/shirt-114.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(15, 'PHP ', 12332, 495700, 115, 'PHP shirt', '5.00', 12, 'IMG/products/PHP/shirt-115.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(16, 'PHP ', 12332, 0, 116, 'PHP shirt', '5.00', 12, 'IMG/products/PHP/shirt-116.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(17, 'Python ', 19409, 505855, 117, 'Python shirt', '5.00', 12, 'IMG/products/Python/shirt-117.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(18, 'SASS', 16376, 505855, 118, 'SASS shirt', '0.00', 12, 'IMG/products/SASS/shirt-118.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(19, 'CSS ', 13343, 505855, 119, 'CSS shirt', '5.00', 12, 'IMG/products/CSS/shirt-119.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(20, 'HMTL ', 14354, 0, 120, 'HMTL shirt', '5.00', 12, 'IMG/products/HTML/shirt-120.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(21, 'Python ', 19409, 515967, 121, 'Python shirt', '5.00', 12, 'IMG/products/Python/shirt-121.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(22, 'PHP ', 12332, 515967, 122, 'PHP shirt', '5.00', 12, 'IMG/products/PHP/shirt-122.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(23, 'SASS', 16376, 515967, 123, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-123.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(24, 'SQL', 17387, 0, 124, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-124.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(25, 'CSS ', 13343, 525012, 125, 'CSS shirt', '5.00', 12, 'IMG/products/CSS/shirt-125.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(26, 'Flexbox ', 18398, 525012, 126, 'Flexbox shirt', '5.00', 12, 'IMG/products/Flexbox/shirt-126.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(27, 'SASS', 16376, 525012, 127, 'SASS shirt', '5.00', 12, 'IMG/products/SASS/shirt-127.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(29, 'Python ', 19409, 535134, 129, 'Python shirt', '5.00', 12, 'IMG/products/Python/shirt-129.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(30, 'HMTL ', 14354, 535134, 130, 'HMTL shirt', '5.00', 12, 'IMG/products/HTML/shirt-130.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(31, 'SQL', 17387, 0, 131, 'SQL shirt', '5.00', 10, 'IMG/products/SQL/shirt-131.jpg', 'fill text', 'shirt', 'purple', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(32, 'SASS', 16376, 535134, 132, 'SASS shirt', '5.99', 12, 'IMG/products/SASS/shirt-132.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(28, 'Flexbox ', 18398, 0, 1128, 'Flexbox shirt', '5.00', 12, 'IMG/products/Flexbox/shirt-1128-purple.jpg', 'fill text', 'shirt', 'purple', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.');

-- --------------------------------------------------------

--
-- Table structure for table `Souvenirs`
--

CREATE TABLE IF NOT EXISTS `Souvenirs` (
  `souvenir_id` int(20) NOT NULL,
  `souvenir_name` varchar(20) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `souvenir_link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Souvenirs`
--

INSERT INTO `Souvenirs` (`souvenir_id`, `souvenir_name`, `brand_name`, `brand_id`, `souvenir_link`, `image`, `alt`) VALUES
(1234, 'helping-fitness', 'SQL', 17387, 'test.php', 'test.jpg', 'fill text'),
(1235, 'training', 'SQL', 17387, 'test.php', 'test.jpg', 'fill text');

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
