-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 04:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery2go`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `categ_id` int(11) NOT NULL,
  `categ_name` varchar(50) NOT NULL,
  `categ_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `cid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phoneNumb` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_table`
--

CREATE TABLE `delivery_table` (
  `tracking_id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `dt_date` date NOT NULL,
  `dt_location` varchar(250) NOT NULL,
  `dt_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `eid` int(11) NOT NULL,
  `emp_firstname` varchar(50) NOT NULL,
  `emp_lastname` varchar(50) NOT NULL,
  `emp_address` varchar(250) NOT NULL,
  `emp_phoneNumb` int(11) NOT NULL,
  `emp_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grocerymarket`
--

CREATE TABLE `grocerymarket` (
  `gm_id` int(11) NOT NULL,
  `gm_name` varchar(250) NOT NULL,
  `gm_phoneNumb` int(11) NOT NULL,
  `gm_descrip` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `itm_id` int(11) NOT NULL,
  `itm_name` int(11) NOT NULL,
  `itm_price` int(11) NOT NULL,
  `itm_descrip` varchar(250) NOT NULL,
  `gm_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_grocery_table`
--

CREATE TABLE `item_grocery_table` (
  `id_itm_gm` int(11) NOT NULL,
  `itm_id` int(11) NOT NULL,
  `gm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_time` time NOT NULL,
  `order_date` date NOT NULL,
  `cid` int(11) NOT NULL,
  `id_itm_gm` int(11) NOT NULL,
  `itm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `delivery_table`
--
ALTER TABLE `delivery_table`
  ADD PRIMARY KEY (`tracking_id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `grocerymarket`
--
ALTER TABLE `grocerymarket`
  ADD PRIMARY KEY (`gm_id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`itm_id`),
  ADD KEY `gm_id` (`gm_id`),
  ADD KEY `categ_id` (`categ_id`);

--
-- Indexes for table `item_grocery_table`
--
ALTER TABLE `item_grocery_table`
  ADD PRIMARY KEY (`id_itm_gm`),
  ADD KEY `itm_id` (`itm_id`),
  ADD KEY `gm_id` (`gm_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `id_itm_gm` (`id_itm_gm`),
  ADD KEY `itm_id` (`itm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `categ_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_table`
--
ALTER TABLE `delivery_table`
  MODIFY `tracking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grocerymarket`
--
ALTER TABLE `grocerymarket`
  MODIFY `gm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `itm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_grocery_table`
--
ALTER TABLE `item_grocery_table`
  MODIFY `id_itm_gm` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_table`
--
ALTER TABLE `delivery_table`
  ADD CONSTRAINT `delivery_table_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee_details` (`eid`),
  ADD CONSTRAINT `delivery_table_ibfk_2` FOREIGN KEY (`oid`) REFERENCES `order` (`oid`);

--
-- Constraints for table `item_details`
--
ALTER TABLE `item_details`
  ADD CONSTRAINT `item_details_ibfk_1` FOREIGN KEY (`gm_id`) REFERENCES `grocerymarket` (`gm_id`),
  ADD CONSTRAINT `item_details_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `category_details` (`categ_id`);

--
-- Constraints for table `item_grocery_table`
--
ALTER TABLE `item_grocery_table`
  ADD CONSTRAINT `item_grocery_table_ibfk_1` FOREIGN KEY (`itm_id`) REFERENCES `item_details` (`itm_id`),
  ADD CONSTRAINT `item_grocery_table_ibfk_2` FOREIGN KEY (`gm_id`) REFERENCES `grocerymarket` (`gm_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer_details` (`cid`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_itm_gm`) REFERENCES `item_grocery_table` (`id_itm_gm`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`itm_id`) REFERENCES `item_details` (`itm_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
