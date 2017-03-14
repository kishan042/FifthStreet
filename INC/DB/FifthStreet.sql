--
-- Database: `Fifth_Street`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brands`
--

CREATE TABLE `Brands` (
  `brand_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Brands`
--

INSERT INTO `Brands` (`brand_id`, `name`, `description`, `image`, `alt`) VALUES
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

CREATE TABLE `colours` (
  `colour_entry` int(50) NOT NULL,
  `product_id` int(20) NOT NULL,
  `colour_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`colour_entry`, `product_id`, `colour_id`) VALUES
(1, 1001, 1),
(2, 1002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colourVal`
--

CREATE TABLE `colourVal` (
  `colour_id` int(100) NOT NULL,
  `colour_name` varchar(50) NOT NULL,
  `hex` varchar(20) NOT NULL,
  `colour_ord` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colourVal`
--

INSERT INTO `colourVal` (`colour_id`, `colour_name`, `hex`, `colour_ord`) VALUES
(1, 'red', '#cc0000', 10),
(2, 'blue', '#0000cc', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Offers`
--

CREATE TABLE `Offers` (
  `ord` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `offer_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Offers`
--

INSERT INTO `Offers` (`ord`, `name`, `offer_id`, `image`, `alt`) VALUES
(1, 'Student discount', 465677, 'IMG/offers/students-discount.jpg', 'student discount'),
(2, '50% off', 475688, 'IMG/offers/students-discount.jpg', '50% off'),
(3, '25% off', 485699, 'IMG/offers/students-discount.jpg', '25% off'),
(4, '10% off ', 495700, 'IMG/offers/students-discount.jpg', '10% off'),
(5, '£20 cashback', 505855, 'IMG/offers/students-discount.jpg', '£20 cashback'),
(6, '£10 cashback', 515967, 'IMG/offers/students-discount.jpg', '£10 cashback'),
(7, 'Clearance', 525012, 'IMG/offers/students-discount.jpg', 'Clearance'),
(8, 'Free shipping', 535134, 'IMG/offers/students-discount.jpg', 'Free shipping');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `entry` int(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `offer_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `stock` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `alt` varchar(250) NOT NULL,
  `size_type` varchar(20) NOT NULL,
  `rating` int(10) NOT NULL,
  `product_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`entry`, `brand_id`, `offer_id`, `product_id`, `name`, `price`, `stock`, `image`, `alt`, `size_type`, `rating`, `product_description`) VALUES
(1, 12332, 0, 1321, 'PHP', 5, 10, 'IMG/products/PHP/shirt.jpg', 'fill text', 'shirt', 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.'),
(2, 13343, 465677, 1322, 'CSS', 5, 12, 'IMG/products/CSS/shirt.jpg', 'fill text', 'shirt', 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum rem officiis quod. Non laborum aliquam officiis qui adipisci harum, nulla, optio amet aperiam, esse eligendi fugit, itaque ea repellendus eos.');

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
