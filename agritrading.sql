-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 05:25 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agritrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptedorder`
--

CREATE TABLE IF NOT EXISTS `acceptedorder` (
  `orderid` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptedorder`
--

INSERT INTO `acceptedorder` (`orderid`, `productname`, `quantity`, `unit`, `mobile`, `address`, `date`) VALUES
(6, 'bajra', '500', 'kg', '654654655', 'padampura,aurangabad', '30/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `acceptedproduct`
--

CREATE TABLE IF NOT EXISTS `acceptedproduct` (
  `regid` varchar(222) NOT NULL,
  `type` varchar(15) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptedproduct`
--

INSERT INTO `acceptedproduct` (`regid`, `type`, `productname`, `quantity`, `unit`, `mobile`, `address`, `date`) VALUES
('3', 'grain', 'wheat', '600', 'kg', '7020747578', 'Bajaj Nagar, Aurangabad', '30/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `usertype`) VALUES
('nihal', 'nihal', 'admin'),
('shubh', 'shubh', 'admin'),
('nihal', 'nihal', 'admin'),
('shubh', 'shubh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('yrt', 'tyr', 'tyr'),
('yrt', 'tyr', 'tyr'),
('etr', 'regtd', 'grdg'),
('ger', 'rter', 'rtwer'),
('nihal', 'varaxd', 'bhai wo mere 16 rs kab dega wapis ?'),
('gaurav jadhav', 'jadhavgaurav@gmail.c', 'Help me. please'),
('nihal singh', 'nihal@g', 'Tryingsdfsd'),
('ram', 'ram@gmail.com', 'sdfsd'),
('rajesh', 'rajesh@gmail.com', 'dfsd');

-- --------------------------------------------------------

--
-- Table structure for table `farmerinfo`
--

CREATE TABLE IF NOT EXISTS `farmerinfo` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerinfo`
--

INSERT INTO `farmerinfo` (`name`, `mobile`, `address`, `username`, `password`, `repass`, `usertype`) VALUES
('vinod', '1213424234', 'dfssdfsdf', 'vinod', 'Vinod@123', 'Vinod@123', 'retailer'),
('nihal', '77558712174', 'aurangabad', 'nihal', '12345', '12345', 'admin'),
('gaurav', '7276284435', 'aurangabd', 'gaurav', '12345', '12345', 'admin'),
('shubhangi', '9845646535', 'aurangabad', 'shubh', 'Shubh@123', '12345', 'Farmer'),
('ram', '1111111111', 'sdfsdfs', 'ram', 'Ram@1234', 'Ram@1234', 'Farmer'),
('nihalsing', '9999999999', 'gfhgjh', 'shiv', 'Shiv@123', 'Shiv@123', 'retailer');

-- --------------------------------------------------------

--
-- Table structure for table `farmerproduct`
--

CREATE TABLE IF NOT EXISTS `farmerproduct` (
  `productname` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `pickup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerproduct`
--

INSERT INTO `farmerproduct` (`productname`, `quantity`, `rate`, `pickup`) VALUES
('wheat', '50kg', '15rs/kg', 'asghj'),
('wheat', '50kg', '15rs/kg', 'asghj'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer'),
('rice', '15kg', '30rs/kg', 'qwer');

-- --------------------------------------------------------

--
-- Table structure for table `farmerrate`
--

CREATE TABLE IF NOT EXISTS `farmerrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `rate` varchar(15) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `farmerrate`
--

INSERT INTO `farmerrate` (`id`, `productname`, `rate`) VALUES
(1, 'Mango', '30 rs/kg'),
(2, 'guava', '42 rs/kg'),
(3, 'grapes', '50 rs/kg'),
(4, 'pineapple', '60 rs/kg'),
(5, 'papaya', '52 rs/kg'),
(6, 'apple', '54 rs/kg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(20) NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `orderid` (`orderid`),
  KEY `orderid_2` (`orderid`),
  KEY `orderid_3` (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `productname`, `quantity`, `unit`, `mobile`, `address`, `date`) VALUES
(7, 'mango', '300', 'kg', '8686565825', 'paithan, aurangabad', '30/01/2020'),
(8, 'apple', '100', 'kg', '755871217', 'dfsdfsdf', '30/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `productreg`
--

CREATE TABLE IF NOT EXISTS `productreg` (
  `regid` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productreg`
--

INSERT INTO `productreg` (`regid`, `type`, `productname`, `quantity`, `unit`, `mobile`, `address`, `date`) VALUES
(1, 'grain', 'Onion', '500', 'kg', '7276284435', 'Tisgaon village, aurangabad', '03/02/2020'),
(2, 'vegetable', 'rice', '300', 'kg', '9096107851', 'bajajngar', '03/02/2020'),
(3, 'fruit', 'kiwi', '12', 'dozen', '9890059848', 'Chatrapati Nagar, Wadgaon Road, Bajaj Nagar, Auran', '03/02/2020'),
(4, 'vegetable', 'tomato', '100', 'kg', '7276284435', 'Paithan Road, Aurangabad', '03/02/2020');

-- --------------------------------------------------------

--
-- Table structure for table `retailerrate`
--

CREATE TABLE IF NOT EXISTS `retailerrate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `retailerrate`
--

INSERT INTO `retailerrate` (`id`, `productname`, `rate`) VALUES
(1, 'mango', '50 rs/kg'),
(2, 'wheat', '30 rs/kg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
