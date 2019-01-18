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
-- Database: `freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount` varchar(10) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `emm` varchar(6) NOT NULL,
  `eyy` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `cno`, `emm`, `eyy`) VALUES
(1, '1000', '2589631478569856', '01', '2001'),
(2, ' 2000', '55', '01', '2002'),
(3, ' srk', '258', '01', '2001'),
(4, '10000', '4646545', '01', '2002'),
(5, '', '465454', '02', '2001'),
(6, '1500', '4555', 'MM', 'YY'),
(7, '1500', '4555', 'MM', 'YY'),
(8, '1500', '544', 'MM', 'YY'),
(9, '1500', '544', 'MM', 'YY');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `price`, `image`) VALUES
(1, 'ccc', 'Chocolate cheese cake', '1800', 'images/post4.jpg'),
(2, 'cp', 'Chocolate Pastree', '150', 'images/post3.jpg'),
(3, 'cp2', 'Chocolate pudding', '200', 'images/g3jpg'),
(4, 'cp3', 'Dark chocolate pudding', '250', 'images/g4.jpg'),
(5, 'cp3', 'Delight pudding', '300', 'images/g5.jpg'),
(6, 'cp4', 'Straw Pudding', '450', 'images/g6.pg'),
(7, 'cp6', 'New pudding', '350', 'images/g7.jpg'),
(8, 'cp7', 'pudding cake', '450', 'images/g8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `image`, `name`, `uname`, `email`, `mobile`, `pwd`, `date`) VALUES
(1, 'IMG_20170908_193315.jpg', 'Soumya', 'soumya', 'soumyat369@gmail.com', '25896', '202cb962ac59075b964b07152d234b70', '2018-11-20 11:21:37'),
(3, 'images/post3.jpg', 'admin', 'admin', 'admin@gmail.com', '545454', '123', '2018-11-22 10:58:54'),
(27, 'IMG_20170908_193315.jpg', 'Soumya', 'sou', 'soumyat369@gmail.com', '35465465', '202cb962ac59075b964b07152d234b70', '2018-11-20 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `forgot_pass_identity` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
