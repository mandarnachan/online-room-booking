-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 07:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_master`
--

CREATE TABLE `tbl_hotel_master` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(500) DEFAULT NULL,
  `hotel_address` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_master`
--

CREATE TABLE `tbl_room_master` (
  `room_id` int(11) NOT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `room_name` varchar(200) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `user_image_path` varchar(500) DEFAULT NULL,
  `role` char(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_addess` varchar(100) NOT NULL,
  `isdelted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `first_name`, `last_name`, `email`, `password`, `phone_no`, `user_image_path`, `role`, `created_date`, `updated_date`, `ip_addess`, `isdelted`) VALUES
(1, 'mandar', 'nachan', 'mandar.nachan@gmail.com', 'NDYyN2Y2NzczNzM3MTYwNw==', 0, NULL, 'U', '2019-01-14 14:47:38', '2019-01-14 14:47:38', '', 0),
(2, 'anket', 'nachan', 'aniket.nachan@gmail.com', '', 2147483647, 'uploads/', 'U', '2019-01-14 18:38:58', '2019-01-14 18:38:58', '::1', 0),
(5, 'frnaky', 'fernandes', 'franky@abc.com', 'MzM0MzYzNDM2MzEzMjYyN2M2ZjY=', 2147483647, 'uploads/', 'U', '2019-01-14 18:43:01', '2019-01-14 18:43:01', '::1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_hotel_master`
--
ALTER TABLE `tbl_hotel_master`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `tbl_room_master`
--
ALTER TABLE `tbl_room_master`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `emailindex` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_hotel_master`
--
ALTER TABLE `tbl_hotel_master`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room_master`
--
ALTER TABLE `tbl_room_master`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
