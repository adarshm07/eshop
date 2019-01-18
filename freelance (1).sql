-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 10:24 AM
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
  `name` varchar(50) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `emm` varchar(6) NOT NULL,
  `eyy` varchar(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `name`, `cno`, `emm`, `eyy`, `address`) VALUES
(1, '1000', 'soumya', '2589631478569856', '01', '2001', 'khhdihihpa'),
(2, ' 2000', 'soumya', '55', '01', '2002', 'mbjbjb'),
(3, ' srk', '10000', '258', '01', '2001', 'mbjbjb'),
(4, '10000', ' srk', '4646545', '01', '2002', 'hjgjgug');

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
  `gender` varchar(5) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `image`, `name`, `uname`, `email`, `gender`, `pwd`, `date`) VALUES
(1, 'IMG_20170908_193315.jpg', 'Soumya', 'soumya', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-16 18:30:00'),
(10, 'IMG_20170901_175849.jpg', 'Soumya', 'sou', 'soumyat369@gmail.com', 'femal', '8d5e957f297893487bd98fa830fa6413', '2018-11-16 18:30:00'),
(11, 'IMG_20170908_193315.jpg', 'marble', 'lkl', 'soumyat369@gmail.com', 'male', '202cb962ac59075b964b07152d234b70', '2018-11-16 18:30:00'),
(13, 'IMG_20170830_082007.jpg', 'h', 'mmm', 'soumyat369@gmail.com', 'femal', 'cfa0860e83a4c3a763a7e62d825349f7', '2018-11-16 18:30:00'),
(14, 'IMG_20170901_175849.jpg', 'marble', 'mlp', 'soumyat369@gmail.com', 'male', 'e165421110ba03099a1c0393373c5b43', '2018-11-16 18:30:00'),
(15, 'IMG_20170908_193315.jpg', 'rahul', 'rahul', 'soumyat369@gmail.com', 'male', '8d5e957f297893487bd98fa830fa6413', '2018-11-16 18:30:00'),
(16, 'IMG_20170908_193315.jpg', 'srk', 'srk', 'soumyat369@gmail.com', 'male', '202cb962ac59075b964b07152d234b70', '2018-11-16 18:30:00'),
(17, '14.jpg', 'h', 'hh', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-17 18:30:00'),
(18, '14.jpg', 'saumya', 'saumu', 'soumyat369@gmail.com', 'femal', '698d51a19d8a121ce581499d7b701668', '2018-11-17 18:30:00'),
(19, '14.jpg', 'Soumya', 'saumya', 'soumyat369@gmail.com', 'femal', '698d51a19d8a121ce581499d7b701668', '2018-11-17 18:30:00'),
(21, 'IMG_20170901_175849.jpg', 'sss', 'sss', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-17 18:30:00'),
(22, 'IMG_20170908_193315.jpg', 'sssss', 'sssss', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-17 18:30:00'),
(23, 'IMG_20170908_193315.jpg', 'ssssss', 'ssssss', 'soumyat369@gmail.com', 'male', '202cb962ac59075b964b07152d234b70', '2018-11-17 18:30:00'),
(24, 'IMG_20170908_193315.jpg', 'password', 'password', 'soumyat369@gmail.com', 'male', '202cb962ac59075b964b07152d234b70', '2018-11-17 18:30:00'),
(25, 'favicon.ico', 'logo', 'logo', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-18 18:30:00'),
(26, 'favicon.ico', 'Soumya', 'soumya369', 'soumyat369@gmail.com', 'femal', '202cb962ac59075b964b07152d234b70', '2018-11-18 18:30:00');

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
