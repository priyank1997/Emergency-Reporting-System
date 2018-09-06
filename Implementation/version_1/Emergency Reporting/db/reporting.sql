-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2018 at 12:04 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WhitePanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `price`) VALUES
(1, 'Item 1', 'img/2.jpg', 36000),
(2, 'Item 2', 'img/2.jpg', 40000),
(3, 'item 3', 'img/2.jpg', 45000),
(4, 'Item 4', 'img/2.jpg', 50000),
(5, 'Item 5', 'img/2.jpg', 13000),
(6, 'Item 6', 'img/2.jpg', 3000),
(7, 'Item 7', 'img/2.jpg', 8000),
(8, 'item 8', 'img/2.jpg', 18000),
(9, 'Item 9', 'img/2.jpg', 800),
(10, 'Item 10', 'img/2.jpg', 1000),
(11, 'Item 11', 'img/2.jpg', 1500),
(12, 'item 12', 'img/2.jpg', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(7, 'Meet Shah', 'root@f.f', '202cb962ac59075b964b07152d234b70'),
(8, 'M', 'a@b.c', '202cb962ac59075b964b07152d234b70'),
(9, 'AWERFG', 'meetshah7202@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Meet Shah', 'root@f.f', '202cb962ac59075b964b07152d234b70'),
(11, 'Meet Shah', 'meetshah7202@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(12, 'Meet Shah', 'meetshah7202@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(13, 'Meet Shah', 'aja@some.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(14, 'fenali shah', 'fenalishah.22@gmail.com', '8194e52c20819eed36332833aed0626a'),
(15, 'fenali shah', 'ss@s.s', '25d55ad283aa400af464c76d713c07ad'),
(16, 'pawanrocks', 'gg@g.g', '202cb962ac59075b964b07152d234b70'),
(17, 'meetshah7202', 'hh@h.h', '202cb962ac59075b964b07152d234b70'),
(18, 'computers', 'll@l.l', '25d55ad283aa400af464c76d713c07ad'),
(19, 'Meet Shah', 'aa@aa.aa', '202cb962ac59075b964b07152d234b70'),
(20, 'Meet Shah', 'aja@some.com', '25d55ad283aa400af464c76d713c07ad'),
(21, 'fenali shah', 'meet@b.c', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `quantity`, `status`) VALUES
(20, 0, 1, 9, 'Added to cart'),
(25, 0, 6, 2, 'Added to cart'),
(26, 0, 8, 1, 'Added to cart'),
(27, 0, 7, 2, 'Added to cart'),
(28, 0, 4, 1, 'Added to cart'),
(29, 0, 5, 1, 'Added to cart'),
(30, 0, 9, 1, 'Added to cart'),
(31, 0, 11, 1, 'Added to cart'),
(32, 19, 1, 1, 'Added to cart'),
(33, 19, 2, 1, 'Added to cart'),
(34, 20, 2, 3, 'Added to cart'),
(35, 20, 3, 5, 'Added to cart'),
(43, 21, 11, 1, 'Added to cart');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
