-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2018 at 12:31 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `qty`, `total`) VALUES
(1, 'product1', '1500', 1, 1500),
(2, 'product1', '1500', 1, 1500),
(3, 'product1', '1500', 1, 1500),
(4, 'product1', '1500', 1, 1500),
(5, 'product1', '1500', 1, 1500),
(6, 'product1', '1500', 1, 1500),
(7, 'product1', '1500', 1, 1500),
(8, 'product1', '1500', 1, 1500),
(9, 'product1', '1500', 1, 1500),
(10, 'product1', '1500', 1, 1500),
(11, 'product1', '1500', 1, 1500),
(12, 'product1', '1500', 1, 1500),
(13, 'product1', '1500', 1, 1500),
(14, 'product1', '1500', 1, 1500),
(15, 'product1', '1500', 1, 1500),
(16, 'product1', '1500', 1, 1500),
(17, 'product1', '1500', 1, 1500),
(18, 'product1', '1500', 1, 1500),
(19, 'product1', '1500', 1, 1500),
(20, 'product1', '1500', 1, 1500),
(21, 'product1', '1500', 1, 1500),
(22, 'product1', '1500', 1, 1500),
(23, 'product1', '1500', 1, 1500),
(24, 'product1', '1500', 1, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE IF NOT EXISTS `shop_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` int(11) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`, `qty`) VALUES
(1, 'product1', 'product 1', 'p1', 'g1.jpg', 1500, 19),
(2, 'Product 2', 'product 2', 'p2', 'g2.jpg', 1200, 10),
(0, 'Product5', 'product5', 'p5', 'about2.jpg', 1523, 30),
(0, 'Product5', 'product5', 'p5', 'about3.jpg', 1523, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `member_id`) VALUES
(16, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `amount`, `name`, `address`, `city`, `state`, `zip`, `country`, `payment_type`, `order_status`, `order_at`) VALUES
(5, 2, 3100, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 06:32:42'),
(6, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 08:57:18'),
(7, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:40:19'),
(8, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:41:13'),
(9, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:42:21'),
(10, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:42:45'),
(11, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:43:14'),
(12, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:44:22'),
(13, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:45:06'),
(14, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:45:53'),
(15, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:46:28'),
(16, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:46:44'),
(17, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:47:01'),
(18, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:47:22'),
(19, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:48:55'),
(20, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:50:18'),
(21, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:50:57'),
(22, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:54:52'),
(23, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:55:25'),
(24, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:55:47'),
(25, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:56:50'),
(26, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:57:13'),
(27, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:57:37'),
(28, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:58:29'),
(29, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 09:59:24'),
(30, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:00:15'),
(31, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:01:06'),
(32, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:03:45'),
(33, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:05:15'),
(34, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:06:48'),
(35, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:10:38'),
(36, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:11:41'),
(37, 2, 1500, 'Soumya', 'jgjgj', ',n,', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-20 10:13:29'),
(38, 2, 1500, 'Soumya', 'knkcbkbjbjb', 'jbjbjb', 'jbjbn', '3646464', 'jbjvbjbv', 'PAYPAL', 'PENDING', '2018-11-22 10:00:15'),
(39, 2, 1500, 'Soumya', 'knkcbkbjbjb', 'jbjbjb', 'jbjbn', '3646464', 'jbjvbjbv', 'PAYPAL', 'PENDING', '2018-11-22 10:01:14'),
(40, 2, 1500, 'Soumya', 'knkcbkbjbjb', 'jbjbjb', 'jbjbn', '3646464', 'jbjvbjbv', 'PAYPAL', 'PENDING', '2018-11-22 10:02:03'),
(41, 2, 1500, 'marble', 'bcgcg', 'hvhvh', 'nvn', '5454', 'hvhv', 'PAYPAL', 'PENDING', '2018-11-22 10:06:05'),
(42, 2, 1500, 'Soumya', 'ms.,md', 'jbjbjb', 'm cs ', '2', '224', 'PAYPAL', 'PENDING', '2018-11-22 10:06:53'),
(43, 2, 1500, 'Soumya', 'ms.,md', 'jbjbjb', 'm cs ', '2', '224', 'PAYPAL', 'PENDING', '2018-11-22 10:08:11'),
(44, 2, 1500, 'marble', 'jbjvhjvhv', 'jbjbjb', 'jbjbn', '3646464', 'jbjvbjbv', 'PAYPAL', 'PENDING', '2018-11-22 10:09:59'),
(45, 2, 1500, 'marble', 'bcgcg', 'hvhvh', 'nvn', '5454', 'hvhv', 'PAYPAL', 'PENDING', '2018-11-22 10:10:14'),
(46, 2, 1500, 'bmba', 'nanbz ', 'nnzx', 'nabxnb', '5', '5', 'PAYPAL', 'PENDING', '2018-11-22 10:14:50'),
(47, 2, 1500, 'marble', 'jbjvhjvhv', 'jbjbjb', 'hvhv', '5454', 'hvhv', 'PAYPAL', 'PENDING', '2018-11-22 10:16:00'),
(48, 2, 1500, 'marble', 'jbjvhjvhv', 'jbjbjb', 'mnm', '1', '4', 'PAYPAL', 'PENDING', '2018-11-22 10:16:50'),
(49, 2, 1500, 'marble', 'jbjvhjvhv', 'jbjbjb', 'hvhv', '5454', 'hvhv', 'PAYPAL', 'PENDING', '2018-11-22 10:16:59'),
(50, 2, 1500, 'Soumya', 'jbjvhjvhv', ',n,', 'jbjbn', '3646464', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:19:51'),
(51, 2, 1500, 'Soumya', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:21:18'),
(52, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:24:02'),
(53, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:24:22'),
(54, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:24:55'),
(55, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:26:06'),
(56, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:26:55'),
(57, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:27:28'),
(58, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:28:22'),
(59, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:28:55'),
(60, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:30:23'),
(61, 2, 1500, 'marble', 'jgjgj', 'jbjbjb', 'mnm', '35656', 'mnmn', 'PAYPAL', 'PENDING', '2018-11-22 10:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE IF NOT EXISTS `tbl_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `order_id`, `product_id`, `item_price`, `quantity`) VALUES
(9, 5, 1, 1500, 1),
(10, 5, 2, 800, 2),
(11, 6, 1, 1500, 1),
(12, 7, 1, 1500, 1),
(13, 8, 1, 1500, 1),
(14, 9, 1, 1500, 1),
(15, 10, 1, 1500, 1),
(16, 11, 1, 1500, 1),
(17, 12, 1, 1500, 1),
(18, 13, 1, 1500, 1),
(19, 14, 1, 1500, 1),
(20, 15, 1, 1500, 1),
(21, 16, 1, 1500, 1),
(22, 17, 1, 1500, 1),
(23, 18, 1, 1500, 1),
(24, 19, 1, 1500, 1),
(25, 20, 1, 1500, 1),
(26, 21, 1, 1500, 1),
(27, 22, 1, 1500, 1),
(28, 23, 1, 1500, 1),
(29, 24, 1, 1500, 1),
(30, 25, 1, 1500, 1),
(31, 26, 1, 1500, 1),
(32, 27, 1, 1500, 1),
(33, 28, 1, 1500, 1),
(34, 29, 1, 1500, 1),
(35, 30, 1, 1500, 1),
(36, 31, 1, 1500, 1),
(37, 32, 1, 1500, 1),
(38, 33, 1, 1500, 1),
(39, 34, 1, 1500, 1),
(40, 35, 1, 1500, 1),
(41, 36, 1, 1500, 1),
(42, 37, 1, 1500, 1),
(43, 38, 1, 1500, 1),
(44, 39, 1, 1500, 1),
(45, 40, 1, 1500, 1),
(46, 41, 1, 1500, 1),
(47, 42, 1, 1500, 1),
(48, 43, 1, 1500, 1),
(49, 44, 1, 1500, 1),
(50, 45, 1, 1500, 1),
(51, 46, 1, 1500, 1),
(52, 47, 1, 1500, 1),
(53, 48, 1, 1500, 1),
(54, 49, 1, 1500, 1),
(55, 50, 1, 1500, 1),
(56, 51, 1, 1500, 1),
(57, 52, 1, 1500, 1),
(58, 53, 1, 1500, 1),
(59, 54, 1, 1500, 1),
(60, 55, 1, 1500, 1),
(61, 56, 1, 1500, 1),
(62, 57, 1, 1500, 1),
(63, 58, 1, 1500, 1),
(64, 59, 1, 1500, 1),
(65, 60, 1, 1500, 1),
(66, 61, 1, 1500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Strawberry Cake', '3DcAM01', 'product/cake1.png', 1500.00),
(2, 'Chocolate Cake', 'USB02', 'product/cake3.png', 800.00),
(3, 'Pastries', 'wr023', 'product/cake1.jpg', 300.00),
(4, 'Coconut Delight', 'cde123', 'product/about2.jpg', 1500.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
