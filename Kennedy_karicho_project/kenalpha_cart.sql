-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 09:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenalpha_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `mobile`) VALUES
(1, 'kennedy', 'karicho', 'karichokennedy@gmail.com', 'dce70093fd997b5e1a37c86dadaf0a48', '0707978654');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(49, 2, '0', 13, 'Roses rainbow dress', '1492394175352733401.jpg', 1, 1700, 1700),
(50, 3, '0', 13, 'Sleeveless kimono', '1493341326628688205.jpg', 1, 1500, 1500),
(51, 1, '0', 13, 'apple iphone 7', '450x370_apple_iphone_7_matt_bl.jpg', 1, 78000, 78000),
(53, 3, '0', 0, 'Sleeveless kimono', '1493341326628688205.jpg', 1, 1500, 1500),
(54, 2, '0', 0, 'Roses rainbow dress', '1492394175352733401.jpg', 1, 1700, 1700),
(56, 3, '0', 14, 'Sleeveless kimono', '1493341326628688205.jpg', 3, 1500, 4500),
(57, 6, '0', 14, 'apple watch series 2', 'apple-watch-series-2-nike-white-1473274567-wBIc-column-width-inline.jpg', 1, 15000, 15000),
(58, 5, '0', 14, 'apple macbook pro', 'apple-macbook-pro.jpg', 1, 147000, 147000),
(59, 18, '0', 14, 'lg sport watch', 'lg-watch-sport-r1.jpg', 1, 12000, 12000),
(60, 11, '0', 14, 'Autumn dress', 'fashion-sexy-women-long-sleeve-autumn-dresses.jpg', 10, 2000, 20000),
(61, 26, '0', 14, 'samsung galaxy s8 plus', 'samsung-galaxy-s8-plus-.jpg', 1, 92000, 92000),
(62, 29, '0', 14, 'sony u-series laptop', 'sony.jpg', 1, 34000, 34000),
(63, 34, '0', 14, 'sony xperia xz premium', 'sony-xperia-xz-premium-2017.jpg', 1, 37000, 37000),
(64, 2, '0', 14, 'Roses rainbow dress', '1492394175352733401.jpg', 1, 1700, 1700),
(65, 1, '0', 14, 'apple iphone 7', '450x370_apple_iphone_7_matt_bl.jpg', 1, 78000, 78000),
(69, 1, '0', 0, 'apple iphone 7', '450x370_apple_iphone_7_matt_bl.jpg', 1, 78000, 78000),
(72, 5, '0', 0, 'apple macbook pro', 'apple-macbook-pro.jpg', 1, 147000, 147000),
(73, 11, '0', 0, 'Autumn dress', 'fashion-sexy-women-long-sleeve-autumn-dresses.jpg', 1, 2000, 2000),
(74, 7, '0', 14, 'HP 4004 Exquisite', 'c04757489.png', 1, 56000, 56000),
(76, 24, '0', 0, 'samsung galaxy j7', 'samsung-galaxy-j7-j700f-1.jpg', 1, 47000, 47000),
(77, 1, '0', 12, 'apple iphone 7', '450x370_apple_iphone_7_matt_bl.jpg', 6, 78000, 468000),
(78, 2, '0', 12, 'Roses rainbow dress', '1492394175352733401.jpg', 1, 1700, 1700),
(79, 3, '0', 12, 'Sleeveless kimono', '1493341326628688205.jpg', 1, 1500, 1500),
(80, 5, '0', 12, 'apple macbook pro', 'apple-macbook-pro.jpg', 1, 147000, 147000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wears'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` int(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 3, 'apple iphone 7', 78000, 'apple iphone 7 slim design gorilla screen', '450x370_apple_iphone_7_matt_bl.jpg', 'apple iphone 7 smart phone'),
(2, 2, 6, 'Roses rainbow dress', 1700, 'Roses rainbow dress is handy during summer', '1492394175352733401.jpg', 'Roses rainbow dress ladies cloth'),
(3, 2, 6, 'Sleeveless kimono', 1500, 'Sleeveless kimono is ideal during dates and summer time', '1493341326628688205.jpg', 'sleeveless kimono cloth dress'),
(4, 1, 3, 'macbook air laptop', 138000, 'apple macbook air laptop has a slim design. long battery life and a touch screen.', 'apple-macbook-air-laptops.jpg', 'apple macbook air laptop computer'),
(5, 1, 3, 'apple macbook pro', 147000, 'apple macbook pro slim design touch screen, 500GB ssd 16GB RAM', 'apple-macbook-pro.jpg', 'apple macbook pro computer laptop'),
(6, 1, 3, 'apple watch series 2', 15000, 'apple watch series 2 nike white column width inline long battery life', 'apple-watch-series-2-nike-white-1473274567-wBIc-column-width-inline.jpg', 'apple watch series 2 nike white smart watch'),
(7, 1, 1, 'HP 4004 Exquisite', 56000, 'HP 4004 Exquisite, slim design, core i5, 4GB RAM', 'c04757489.png', 'HP 4004 Exquisite laptop slim design core i5'),
(8, 1, 1, 'HP 4400 R-series', 29000, 'HP 4400 R-series slim design, comfortable feel, 15inches screen Dual core', 'c05360243.png', 'HP 4400 R series laptop'),
(9, 1, 4, 'Sony T-007', 57000, 'Sony T-007 slim design, 360 flip capabilities, core i3 8GB RAM, comfortable feel, light', 'c05369553.png', 'Sony T-007 laptop mini tablet computer'),
(10, 1, 1, 'HP elitebook 840 hero', 58000, 'HP elitebook 840 hero slim design core i5 8GB RAM', 'elitebook_840_hero_tcm_184_1493531.jpg', 'hp elitebook 840 hero laptop computer'),
(11, 2, 6, 'Autumn dress', 2000, 'fashion sexy women long sleeve autumn dresses', 'fashion-sexy-women-long-sleeve-autumn-dresses.jpg', 'fashion sexy women long sleeve autumn dress wear ladies'),
(12, 1, 3, 'Apple ipad pro', 68000, 'identify ipad pro slim design', 'identify-ipad-pro-9-7.jpg', 'identify ipad pro '),
(13, 1, 3, 'iPhone 7', 79000, 'iphone7 slim design color red 256 GD internal memory', 'iphone7-witb-201703.jpeg', 'iphone 7 smart phone apple'),
(14, 1, 1, 'HP envy 006 series', 49000, 'HP envy 006 series core i5 slim design comfortable design', 'laptops-fea2c_03302017.jpg', 'HP envy 006 series laptop computer'),
(15, 1, 5, 'lg g6 smart phone', 48000, 'lg g6 smart phone slim design 16', 'lg-g6-new.jpg', 'lg g6 smart phone'),
(16, 1, 1, 'lg pad 8', 48000, 'lg g pad ii 8 slim design light water proof', 'lg-g-pad-ii-8.jpg', 'lg pad 8 smart phone tablet note'),
(17, 1, 5, 'lg k10 2017', 14700, 'lg-k10-2017 slim design 8GB RAM quad core processor 1.2GHz', 'lg-k10-2017.jpg', 'lg k10 2017 smart phone'),
(18, 1, 5, 'lg sport watch', 12000, 'lg sport watch long life battery android OS', 'lg-watch-sport-r1.jpg', 'lg watch sport smart'),
(19, 1, 5, 'lg watch style', 11000, 'lg watch style long battery life android OS', 'lg-watch-style.jpg', 'lg smart watch style'),
(20, 1, 3, 'Apple macbook air', 139000, 'Apple macbook air slim design 500 GB ssd 16 GB RAM touch screen', 'macbook-air-refresh-rumor.jpg', 'apple macbook air refresh rumor laptop computer'),
(21, 1, 2, 'samsung galaxy c5 pro', 23000, 'samsung galaxy c5 pro sm slim design durable screen quad core 1.2GHz', 'samsung-galaxy-c5-pro-sm-c5010.jpg', 'samsung galaxy c5 pro sm smart phone'),
(22, 1, 2, 'samsung galaxy j2', 17500, 'samsung galaxy j2 2016 slim design durable screen quad core 1.2GHz', 'samsung-galaxy-j2-2016-new.jpg', 'samsung galaxy j2 2016 smart phone'),
(23, 1, 2, 'samsung galaxy j3 emerge', 22000, 'samsung galaxy j3 emerge slim design durable screen 8GB RAM', 'samsung-galaxy-j3-emerge-.jpg', 'samsung galaxy j3 emerge smart phone'),
(24, 1, 2, 'samsung galaxy j7', 47000, 'samsung galaxy j7 smart phone slim design durable screen 7inches octer core 1.2GHz', 'samsung-galaxy-j7-j700f-1.jpg', 'samsung galaxy j7 smart phone'),
(25, 1, 2, 'samsung galaxy s8', 89000, 'samsung galaxy s8 slim design water proof durable screen enhanced sensitivity 21.0 megapixels rear camera and 8.0 megapixels front camera', 'samsung-galaxy-s8-.jpg', 'samsung galaxy s8 smart phone'),
(26, 1, 2, 'samsung galaxy s8 plus', 92000, 'samsung galaxy s8 plus slim design water proof durable screen enhanced sensitivity 21.0 megapixels rear camera and 8.0 megapixels front camera', 'samsung-galaxy-s8-plus-.jpg', 'samsung galaxy s8 plus smart phone'),
(27, 1, 2, 'samsung galaxy tab s3', 66000, 'samsung galaxy tab s3 slim design 16megapixels rear camera octercore 1.3GHz', 'samsung-galaxy-tab-s3-97-sm-t825.jpg', 'samsung galaxy tab tablet note'),
(28, 1, 2, 'samsung gear s3', 9000, 'samsung gear s3 classic smart watch android OS', 'samsung-gear-s3-classic.jpg', 'samsung gear s3 classic smart watch android'),
(29, 1, 4, 'sony u-series laptop', 34000, 'sony u-series laptop core i3 2.5GHz slim design', 'sony.jpg', 'sony u-series laptop computer core i 3'),
(30, 1, 4, 'sony sf-elite 400', 69000, 'sony-design_sf slim design core i7 2.5 GHz 16GB RAM light', 'sony-design_sf.jpg', 'sony design_sf laptop computer'),
(31, 1, 4, 'sony xperia l1', 28000, 'sony xperia l1 slim design 16 megapixels rear camera durable screen', 'sony-xperia-l1-.jpg', 'sony xperia l1 smart phone'),
(32, 1, 4, 'sony xperia xa1', 29000, 'sony xperia xa1 ultra 2017 slim design 7 inches durable screen', 'sony-xperia-xa1-ultra-2017.jpg', 'sony xperia xa1 ultra smart phone'),
(33, 1, 4, 'sony xperia x', 32000, 'sony xperia x performance slim design durable screen 8GB RAM', 'sony-xperia-x-performance.jpg', 'sony xperia x smart phone'),
(34, 1, 4, 'sony xperia xz premium', 37000, 'sony xperia xz premium 2017 durable screen quad core ', 'sony-xperia-xz-premium-2017.jpg', 'sony xperia xz premium smart phone');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(6, 'James', 'Otieno', 'Jamesotieno@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0704555356', 'Ruaka 254', 'Ruaka 254'),
(12, 'kennedy', 'karicho', 'karichokennedy@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0707888999', 'Ruai 254', 'Ruai 311'),
(13, 'Patriciah', 'Njeri', 'patrician254@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0704567876', 'Muthaiga 567', 'Muthaiga 456'),
(14, 'Margaret', 'Muthoni', 'maggiejamnick@gmail.com', 'a35ccdcec807c1a8f4ceac4518448366', '0714273786', '4567', '7654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
