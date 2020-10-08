-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 10:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `index_num` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `security_key` varchar(200) NOT NULL,
  `account_state` varchar(200) NOT NULL,
  `last_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `login_times` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `index_id` int(200) NOT NULL,
  `email1` varchar(200) NOT NULL,
  `email2` varchar(200) NOT NULL,
  `message_1` varchar(200) NOT NULL,
  `message_2` varchar(200) NOT NULL,
  `message_3` varchar(200) NOT NULL,
  `message_4` varchar(200) NOT NULL,
  `message_5` varchar(200) NOT NULL,
  `message_6` varchar(200) NOT NULL,
  `message_7` varchar(200) NOT NULL,
  `message_8` varchar(200) NOT NULL,
  `message_9` varchar(200) NOT NULL,
  `message_10` varchar(200) NOT NULL,
  `message_11` varchar(200) NOT NULL,
  `message_12` varchar(200) NOT NULL,
  `message_13` varchar(200) NOT NULL,
  `message_14` varchar(200) NOT NULL,
  `message_15` varchar(200) NOT NULL,
  `message_16` varchar(200) NOT NULL,
  `message_17` varchar(200) NOT NULL,
  `message_18` varchar(200) NOT NULL,
  `message_19` varchar(200) NOT NULL,
  `message_20` varchar(200) NOT NULL,
  `message_21` varchar(200) NOT NULL,
  `message_22` varchar(200) NOT NULL,
  `message_23` varchar(200) NOT NULL,
  `message_24` varchar(200) NOT NULL,
  `message_25` varchar(200) NOT NULL,
  `message_26` varchar(200) NOT NULL,
  `message_27` varchar(200) NOT NULL,
  `message_28` varchar(200) NOT NULL,
  `message_29` varchar(200) NOT NULL,
  `message_30` varchar(200) NOT NULL,
  `message_31` varchar(200) NOT NULL,
  `message_32` varchar(200) NOT NULL,
  `message_33` varchar(200) NOT NULL,
  `message_34` varchar(200) NOT NULL,
  `message_35` varchar(200) NOT NULL,
  `message_36` varchar(200) NOT NULL,
  `message_37` varchar(200) NOT NULL,
  `message_38` varchar(200) NOT NULL,
  `message_39` varchar(200) NOT NULL,
  `message_40` varchar(200) NOT NULL,
  `message_41` varchar(200) NOT NULL,
  `message_42` varchar(200) NOT NULL,
  `message_43` varchar(200) NOT NULL,
  `message_44` varchar(200) NOT NULL,
  `message_45` varchar(200) NOT NULL,
  `message_46` varchar(200) NOT NULL,
  `message_47` varchar(200) NOT NULL,
  `message_48` varchar(200) NOT NULL,
  `message_49` varchar(200) NOT NULL,
  `message_50` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact_1` varchar(200) NOT NULL,
  `contact_2` varchar(200) NOT NULL,
  `contact_3` varchar(200) NOT NULL,
  `contact_4` varchar(200) NOT NULL,
  `contact_5` varchar(200) NOT NULL,
  `contact_6` varchar(200) NOT NULL,
  `contact_7` varchar(200) NOT NULL,
  `contact_8` varchar(200) NOT NULL,
  `contact_9` varchar(200) NOT NULL,
  `contact_10` varchar(200) NOT NULL,
  `contact_11` varchar(200) NOT NULL,
  `contact_12` varchar(200) NOT NULL,
  `contact_13` varchar(200) NOT NULL,
  `contact_14` varchar(200) NOT NULL,
  `contact_15` varchar(200) NOT NULL,
  `contact_16` varchar(200) NOT NULL,
  `contact_17` varchar(200) NOT NULL,
  `contact_18` varchar(200) NOT NULL,
  `contact_19` varchar(200) NOT NULL,
  `contact_20` varchar(200) NOT NULL,
  `contact_21` varchar(200) NOT NULL,
  `contact_22` varchar(200) NOT NULL,
  `contact_23` varchar(200) NOT NULL,
  `contact_24` varchar(200) NOT NULL,
  `contact_25` varchar(200) NOT NULL,
  `contact_26` varchar(200) NOT NULL,
  `contact_27` varchar(200) NOT NULL,
  `contact_28` varchar(200) NOT NULL,
  `contact_29` varchar(200) NOT NULL,
  `contact_30` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `Index_n` (`index_num`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`index_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `index_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `index_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
