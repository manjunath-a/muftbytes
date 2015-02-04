-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2015 at 01:40 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `muftbytes`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `application_id` int(5) NOT NULL AUTO_INCREMENT,
  `application_name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` int(2) NOT NULL,
  `data_cap` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `application_name`, `url`, `icon`, `description`, `status`, `data_cap`, `created_date`) VALUES
(1, 'Quikr', 'www.quikr.com', 'Quikr.png', 'Quikr Classifieds Post Free Classified Ads online, Search Free Classifieds Ads for Mobiles, Cars, Jobs, Apartments, Pets, Courses, Laptops, Computers, Travel Package with prices, contact details & more on Quikr Classifieds.', 9, '', '2015-01-28 13:24:26'),
(2, 'HomeConnectOnline', 'www.homeconnectonline.com', 'HomeConnectOnline.png', 'Marketplace for Local Services', 1, '', '2015-01-28 13:34:32'),
(4, 'flipkart', 'www.flipkart.com', 'flipkart.jpg', 'Flipkart.com - Online Shopping of Books, Mobile Phones, Digital Cameras, Laptops, Watches, Clothing & Other Products at Best Price in India. Free Shipping & Cash on Delivery Available', 1, '200', '2015-01-28 13:50:43'),
(6, 'Amazon', 'www.amazon.com', 'Amazon.png', 'Online shopping from the earth''s biggest selection of books, magazines, music, DVDs, videos, electronics, computers, software, apparel & accessories, shoes, jewelry, tools & hardware, housewares, furniture, sporting goods, beauty & personal care, broadband & dsl, gourmet food & just about anything else.', 1, '0', '2015-01-28 13:53:54'),
(7, 'bharat gas', 'www.ebharatgas.com', 'bharat_gas.png', 'This is the official web site of the\r\nBharat Petroleum Corporation Limited with information on LPG Cooking gas,  online gas booking and Cooking gas\r\nservice', 9, '0', '2015-01-28 14:06:27'),
(9, 'Accenture', 'www.infosys.com', 'Accenture.png', 'Business Technology Consulting, IT solutions and IT Services that deliver measurable business value.  Transform your Business, Accelerate Innovation and make Operations efficient with Infosys technology services', 1, '300', '2015-01-29 11:16:32'),
(10, 'Infosystem', 'www.accenture.com', 'Infosystem.png', 'Accenture is a management consulting, technology services and outsourcing company helping clients become high-performance businesses and governments.', 1, '10', '2015-01-29 13:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `data_usage`
--

CREATE TABLE IF NOT EXISTS `data_usage` (
  `usage_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `application_id` int(5) NOT NULL,
  `usage` int(10) NOT NULL,
  `log_time` datetime NOT NULL,
  PRIMARY KEY (`usage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `data_usage`
--

INSERT INTO `data_usage` (`usage_id`, `user_id`, `application_id`, `usage`, `log_time`) VALUES
(1, 2, 6, 30, '2014-11-05 00:58:57'),
(2, 2, 7, 10, '2014-11-05 00:58:57'),
(3, 2, 8, 5, '2014-11-05 00:58:57'),
(4, 3, 9, 30, '2014-11-05 11:35:43'),
(5, 3, 10, 10, '2014-11-05 11:35:43'),
(6, 3, 11, 5, '2014-11-05 11:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE IF NOT EXISTS `recharge` (
  `order_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `recharge_amount` int(5) NOT NULL,
  `recharge_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `api_response` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`order_id`, `user_id`, `recharge_amount`, `recharge_date`, `status`, `api_response`) VALUES
(1, 3, 10, '2014-11-05 15:49:27', 9, 'NA'),
(2, 3, 10, '2014-11-05 15:49:49', 9, 'NA'),
(3, 3, 10, '2014-11-05 15:52:11', 9, 'NA'),
(4, 3, 10, '2014-11-05 15:56:01', 9, 'NA'),
(5, 3, 10, '2014-11-05 16:06:04', 9, 'NA'),
(6, 4, 10, '2014-11-05 16:10:29', 9, 'NA'),
(7, 4, 5, '2014-11-05 16:48:45', 1, '927496217696,SUCCESS,RG,7676720131,5,7,,9056326293'),
(8, 4, 1, '2014-11-05 16:53:30', 1, '277726859915,SUCCESS,RG,7676720131,1,8,,9056335989');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `operator_code` varchar(10) NOT NULL,
  `operator_name` varchar(20) NOT NULL,
  `user_role` int(5) DEFAULT '0',
  `user_password` varchar(200) DEFAULT NULL,
  `user_status` int(5) DEFAULT '1',
  `recharge_status` int(2) NOT NULL,
  `last_data_used` int(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `operator_code`, `operator_name`, `user_role`, `user_password`, `user_status`, `recharge_status`, `last_data_used`, `created_at`) VALUES
(1, 'admin@muftbytes.com', '', '', '', 1, '0192023a7bbd73250516f069df18b500', 1, 1, 45, '2014-10-14 00:00:00'),
(2, 'hannan@hannan.com', '9538481764', 'AT', 'AIRTEL', 2, '915f211200bc3fd3f3aaa3caf653b027', 1, 1, 45, '2014-11-04 23:49:54'),
(3, 'shan@prabu.com', '9986951319', 'APOS', 'AIRTEL', 2, '455911b6ae5bfbfabd27dcc418ae53f6', 1, 1, 0, '2014-11-04 23:55:29'),
(4, 'abhishek@hannan.com', '7676720131', 'RG', 'RELIANCE GSM', 2, '915f211200bc3fd3f3aaa3caf653b027', 1, 1, 0, '2014-11-05 11:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_app`
--

CREATE TABLE IF NOT EXISTS `users_app` (
  `user_id` int(5) DEFAULT NULL,
  `app_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_role` int(5) NOT NULL,
  `active` int(5) NOT NULL,
  `controller` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_role`, `active`, `controller`) VALUES
(1, 1, 1, 'admin/appdetails');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
