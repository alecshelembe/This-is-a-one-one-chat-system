-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2020 at 08:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14954189_kingchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `security_key` varchar(200) NOT NULL,
  `account_state` varchar(200) NOT NULL,
  `login_times` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `email`, `security_key`, `account_state`, `login_times`) VALUES
('Ace', 'alecshelembe@gmail.com', '1234', '1', '8'),
('Test', 'test@test', '1234', '1', '8');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
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
  `message_30` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`email1`, `email2`, `message_1`, `message_2`, `message_3`, `message_4`, `message_5`, `message_6`, `message_7`, `message_8`, `message_9`, `message_10`, `message_11`, `message_12`, `message_13`, `message_14`, `message_15`, `message_16`, `message_17`, `message_18`, `message_19`, `message_20`, `message_21`, `message_22`, `message_23`, `message_24`, `message_25`, `message_26`, `message_27`, `message_28`, `message_29`, `message_30`) VALUES
('test@test', 'alecshelembe@gmail.com', 'Test: hello', 'Ace: Hello', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  `contact_` varchar(200) NOT NULL,
  `contact_30` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`email`, `name`, `contact_1`, `contact_2`, `contact_3`, `contact_4`, `contact_5`, `contact_6`, `contact_7`, `contact_8`, `contact_9`, `contact_10`, `contact_11`, `contact_12`, `contact_13`, `contact_14`, `contact_15`, `contact_16`, `contact_17`, `contact_18`, `contact_19`, `contact_20`, `contact_21`, `contact_22`, `contact_23`, `contact_24`, `contact_25`, `contact_26`, `contact_27`, `contact_28`, `contact_`, `contact_30`) VALUES
('alecshelembe@gmail.com', 'Ace', 'test@test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('test@test', 'Test', 'alecshelembe@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`email1`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
