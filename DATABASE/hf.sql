-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hf`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `adv_id` int(11) NOT NULL,
  `adv_giver_email` varchar(20) DEFAULT NULL,
  `adv_giver_phone` varchar(11) DEFAULT NULL,
  `avail_date` varchar(12) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `car_parking` varchar(4) DEFAULT NULL,
  `rent` varchar(6) DEFAULT NULL,
  `avail` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`adv_id`, `adv_giver_email`, `adv_giver_phone`, `avail_date`, `city`, `area`, `address`, `type`, `car_parking`, `rent`, `avail`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'farid@gmail.com', '01912500100', '2019-01-02', 'Dhaka', 'Gulshan', '1234', 'Office Space', 'Yes', '45000', 'Yes'),
(6, 'f@gmail.com', '01742319944', '12/01/2019', 'Dhaka', 'Mirpur', '45/i', 'Family Flat', 'Yes', '23000', 'No'),
(7, 'abc@gmail.com', '01912500100', '2018-12-10', 'Dhaka', 'Gulshan', 'wer', 'Family Flat', 'Yes', '30000', 'No'),
(8, 'a@gmail.com', '01554357301', '2018-12-14', 'Sylhet', 'Panchlaish', 'UIU', 'Family Flat', 'Yes', '45000', 'No'),
(9, '', '01912500100', '2018-12-26', 'Sylhet', 'Dhanmondi', 'Dhanmondi', 'Single Room', 'No', '20000', 'Yes'),
(10, 'abc@gmail.com', '01554357301', '2018-12-07', 'Chittagong', 'Malibagh', 'Dhanmondi', 'Family Flat', 'Yes', '45000', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `id`, `area`) VALUES
(1, 1, 'Mohammadpur'),
(2, 1, 'Dhanmondi'),
(3, 1, 'Mirpur'),
(4, 1, 'Malibagh'),
(5, 1, 'Gulshan'),
(6, 1, 'Banani'),
(7, 2, 'Halishohor'),
(8, 2, 'Panchlaish');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adv_id` int(11) DEFAULT NULL,
  `rent` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `adv_id`, `rent`) VALUES
(1, 1, 7, '30000'),
(3, 1, 8, '45000'),
(4, 2, 6, '23000');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Sylhet'),
(4, 'Rajshahi'),
(5, 'Khulna'),
(6, 'Barishal'),
(7, 'Rangpur'),
(8, 'Maymansingh');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adv_id` int(11) DEFAULT NULL,
  `amount` varchar(6) DEFAULT NULL,
  `TrxId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `adv_id`, `amount`, `TrxId`) VALUES
(2, 1, 7, '12000', 'ertgd'),
(3, 1, 8, '2000', 'gjhj'),
(4, 2, 6, '10000', 'hkhghgh'),
(5, 1, 7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_password` varchar(20) DEFAULT NULL,
  `user_phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`user_id`, `user_email`, `user_name`, `user_password`, `user_phone`) VALUES
(1, 'a@gmail.com', 'A', '1234', '01818009809'),
(2, 'b@gmail.com', 'B', '1234', '01742319944'),
(3, 'c@gmail.com', 'C', '1234', '01742319944'),
(4, 'anamwap@gmail.com', 'anam', '1234', '01738238012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `adv_id` (`adv_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `adv_id` (`adv_id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id`) REFERENCES `city` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_signup` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`adv_id`) REFERENCES `advertise` (`adv_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_signup` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`adv_id`) REFERENCES `advertise` (`adv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
