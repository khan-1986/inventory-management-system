-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 05:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_manager` varchar(100) NOT NULL,
  `assist_manager` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_address`, `branch_manager`, `assist_manager`) VALUES
(1, 'Saddar', 'street 1, near food street, Saddar RWP', 'ABC123', 'DEF'),
(5, 'Sadiqabad', 'Street 4, back side police station sadiqabad RWP', 'Amir', '`Fahad');

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `id` int(10) NOT NULL,
  `factory_address` varchar(100) NOT NULL,
  `factory_manager` varchar(100) NOT NULL,
  `assistant_manager` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`id`, `factory_address`, `factory_manager`, `assistant_manager`) VALUES
(1, 'Street 2, plot 25 I/10 4, Islamabad', 'ABC', 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `branch` varchar(100) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_address`, `phone_no`, `order_type`, `order_date`, `delivery_date`, `branch`, `branch_address`, `status`, `amount`) VALUES
(1, 'ABC', 'street 1 sadiqabad', '1234565432', 'Urgent', '2021-03-06', '2021-03-16', 'Saddar', 'street 1, near food street, Saddar RWP', 'Delivered', 200),
(3, 'DEF', 'DK Street 2 rwp', '34532356', 'Regular', '2021-03-08', '2021-03-11', 'Sadiqabad', 'Street 4, back side police station sadiqabad RWP', 'Active', 100),
(4, 'ghi', 'street 10, shams colony saddar', '6556765454', 'Urgent', '2021-03-08', '2021-03-11', 'Saddar', 'street 1, near food street, Saddar RWP', 'Cancel', 120),
(5, 'Kamran', 'street 4, cape town USA', '954395323', 'Regular', '2021-03-10', '2021-03-14', 'Sadiqabad', 'Street 4, back side police station sadiqabad RWP', 'Active', 150);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `regular_price` varchar(100) NOT NULL,
  `urgent_price` varchar(100) NOT NULL,
  `regular_delivery_time` varchar(100) NOT NULL,
  `urgent_delivery_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `service`, `regular_price`, `urgent_price`, `regular_delivery_time`, `urgent_delivery_time`) VALUES
(1, 'ABC', '123', 'avasd', '100', '200', '3 day', '1 day'),
(4, 'DEF', '4323', 'Full', '100', '250', '4 day', '1 day');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullName`, `username`, `password`, `status`, `branch`) VALUES
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Active', ''),
(8, 'Ahsan', 'Ahsan', '827ccb0eea8a706c4c34a16891f84e7b', 'Half Access', ''),
(10, 'Kashif', 'kashif1', '827ccb0eea8a706c4c34a16891f84e7b', 'Sadiqabad', ''),
(11, 'Kashif', 'kashif1', 'd41d8cd98f00b204e9800998ecf8427e', 'Assistant Manager', 'Saddar'),
(12, 'Kashif', 'kashif1', 'd41d8cd98f00b204e9800998ecf8427e', 'Assistant Manager', 'Saddar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
