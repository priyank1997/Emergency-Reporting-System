-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 01:00 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ER2`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `complain_Id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(700) NOT NULL,
  `location_x` varchar(100) NOT NULL,
  `location_y` varchar(100) NOT NULL,
  `timex` varchar(255) NOT NULL,
  `status` enum('Open','Close') NOT NULL,
  PRIMARY KEY (`complain_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complain_Id`, `user_id`, `title`, `description`, `location_x`, `location_y`, `timex`, `status`) VALUES
(1, 24, 'One-Tap-Urgent', 'One-Tap-Urgent', '825897', '271318', 'April 12, 2018, 12:46 am', 'Open'),
(2, 24, 'One-Tap-Urgent', 'One-Tap-Urgent', '794725', '264493', 'April 12, 2018, 12:46 am', 'Open'),
(3, 24, 'adaca', '\r\n', '', '', 'April 12, 2018, 12:47 am', 'Open'),
(4, 24, 'One-Tap-Urgent', 'One-Tap-Urgent', '352491', '657193', 'April 12, 2018, 12:54 am', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `tcontact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `tcontact`) VALUES
(7, 'Meet Shah', 'root@f.f', '202cb962ac59075b964b07152d234b70', 0, 0),
(22, 'Priyank', 'priyank.prajapati29@gmail.com', 'fd6c09734988030634a769b0c9b712ee', 0, 0),
(23, 'D', 'aja@some.com', '25d55ad283aa400af464c76d713c07ad', 2147483647, 2147483647),
(24, 'priyank', 'priyank@gmail.com', 'fd6c09734988030634a769b0c9b712ee', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_complaint`
--

CREATE TABLE IF NOT EXISTS `user_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complain_Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Status` enum('Open','Close') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
