-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 01:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Add_id` int(11) NOT NULL,
  `Add_userid` int(11) NOT NULL,
  `Add_street` varchar(50) NOT NULL,
  `Add_town` varchar(50) NOT NULL,
  `Add_state` varchar(50) NOT NULL,
  `Add_landmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `admin_rank` int(11) NOT NULL DEFAULT 1,
  `admin_active` varchar(11) NOT NULL DEFAULT '1',
  `admin_dateadded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_token` varchar(200) DEFAULT NULL,
  `admin_ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_fullname`, `admin_pass`, `admin_rank`, `admin_active`, `admin_dateadded`, `admin_token`, `admin_ip`) VALUES
(1, 'psalmsam84@yahoo.com', 'James Blessing', 'psalmsam1234', 5, '1', '2019-11-06 16:40:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(200) NOT NULL,
  `cat_active` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`, `cat_active`) VALUES
(2, 'general', 'this is a category name that emcompasses all products without specific category', 1),
(3, 'Electronic ', 'this is a category includes electronic materials used at home such as tv, video, fan, home theatre', 1),
(4, 'jook', 'just another crook editing going o', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ord_id` int(11) NOT NULL,
  `ord_userid` int(11) NOT NULL,
  `ord_addressid` int(11) NOT NULL,
  `ord_datemade` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ord_status` varchar(255) NOT NULL DEFAULT 'Not picked up',
  `ord_statusdate` datetime DEFAULT NULL,
  `ord_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_catid` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_desc` longtext NOT NULL,
  `pro_images` longtext NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_dateuploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pro_available` tinyint(1) NOT NULL DEFAULT 1,
  `pro_coverpage` tinyint(1) NOT NULL DEFAULT 0,
  `pro_modified` datetime DEFAULT NULL,
  `pro_delete` tinyint(1) NOT NULL DEFAULT 0,
  `pro_datedeleted` datetime NOT NULL,
  `pro_uploadedbyadmin` int(11) DEFAULT NULL,
  `pro_uploadedbysr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salesrep`
--

CREATE TABLE `salesrep` (
  `sr_id` int(11) NOT NULL,
  `sr_fullname` varchar(100) NOT NULL,
  `sr_email` varchar(100) NOT NULL,
  `sr_Password` varchar(200) NOT NULL,
  `sr_phone` varchar(11) NOT NULL,
  `sr_active` tinyint(1) NOT NULL DEFAULT 1,
  `sr_blocked` tinyint(1) NOT NULL DEFAULT 0,
  `sr_dateadded` timestamp NOT NULL DEFAULT current_timestamp(),
  `sr_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesrep`
--

INSERT INTO `salesrep` (`sr_id`, `sr_fullname`, `sr_email`, `sr_Password`, `sr_phone`, `sr_active`, `sr_blocked`, `sr_dateadded`, `sr_deleted`) VALUES
(1, 'Olu Jacob', 'olujacob@gmail.com', 'kometh1000', '08060913903', 1, 0, '2019-11-09 20:42:32', 0),
(2, 'segun dundu', 'segun@gmail.com', 'kometh1000', '08060913993', 1, 0, '2019-11-09 21:21:09', 0),
(3, 'segun dundu', 'segun001@gmail.com', 'kometh1000', '08060913993', 1, 0, '2019-11-09 21:21:22', 0),
(4, 'segun dundu', 'segun0090@gmail.com', 'kometh1000', '08060913993', 1, 0, '2019-11-09 21:21:30', 0),
(6, 'segun dundu', 'segun010@gmail.com', 'kometh1000', '08060913993', 1, 0, '2019-11-10 06:17:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` datetime DEFAULT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_suspended` varchar(10) NOT NULL DEFAULT '0',
  `user_deleted` varchar(10) NOT NULL DEFAULT '0',
  `user_rank` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Add_id`),
  ADD KEY `Address_fk0` (`Add_userid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `order_fk0` (`ord_userid`),
  ADD KEY `order_fk1` (`ord_addressid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `products_fk0` (`pro_catid`),
  ADD KEY `products_fk1` (`pro_uploadedbyadmin`),
  ADD KEY `pro_uploadedbysr` (`pro_uploadedbysr`);

--
-- Indexes for table `salesrep`
--
ALTER TABLE `salesrep`
  ADD PRIMARY KEY (`sr_id`),
  ADD UNIQUE KEY `sr_email` (`sr_email`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `Add_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesrep`
--
ALTER TABLE `salesrep`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `Address_fk0` FOREIGN KEY (`Add_userid`) REFERENCES `user_detail` (`user_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_fk0` FOREIGN KEY (`ord_userid`) REFERENCES `user_detail` (`user_id`),
  ADD CONSTRAINT `order_fk1` FOREIGN KEY (`ord_addressid`) REFERENCES `address` (`Add_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk0` FOREIGN KEY (`pro_catid`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `products_fk1` FOREIGN KEY (`pro_uploadedbyadmin`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
