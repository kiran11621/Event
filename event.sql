-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 01:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpv_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('lokeshsinghal19', 'Lpv@12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_mobile` int(11) NOT NULL,
  `c_subject` varchar(1000) NOT NULL,
  `c_message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_startreg` datetime NOT NULL,
  `e_endreg` datetime NOT NULL,
  `e_startsub` datetime NOT NULL,
  `e_endsub` datetime NOT NULL,
  `e_poster` varchar(255) NOT NULL,
  `e_price` varchar(255) NOT NULL,
  `e_paymentlink` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_startreg`, `e_endreg`, `e_startsub`, `e_endsub`, `e_poster`, `e_price`, `e_paymentlink`) VALUES
(19, 'Testing event 1', '2021-10-17 16:15:00', '2021-10-18 16:15:00', '2021-11-01 16:15:00', '2021-11-30 16:15:00', 'Untitled.png', '1000', 'http://payment-link.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_key` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_and_submission`
--

CREATE TABLE `registration_and_submission` (
  `u_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_mobile` varchar(255) NOT NULL,
  `u_std` varchar(255) NOT NULL,
  `u_school` varchar(255) NOT NULL,
  `u_city` varchar(255) NOT NULL,
  `u_receiptno` varchar(255) DEFAULT 'Free Registration',
  `u_submission` varchar(500) DEFAULT 'Not Submitted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_designation` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_mobile` text NOT NULL,
  `t_intro` mediumtext NOT NULL,
  `t_biography` text NOT NULL,
  `t_education` varchar(255) NOT NULL,
  `t_profile_image` varchar(255) NOT NULL,
  `t_facebook` varchar(255) NOT NULL,
  `t_twitter` varchar(255) NOT NULL,
  `t_instagram` varchar(255) NOT NULL,
  `t_linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `t_name`, `t_designation`, `t_email`, `t_mobile`, `t_intro`, `t_biography`, `t_education`, `t_profile_image`, `t_facebook`, `t_twitter`, `t_instagram`, `t_linkedin`) VALUES
(16, 'harshkumar Vishwakarma', 'Student', 'harshkv9322@gmail.com', '09322224994', 'testing user', 'user', 'Be student', 'my-pic.jpg', '#', '#', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_key`);

--
-- Indexes for table `registration_and_submission`
--
ALTER TABLE `registration_and_submission`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `registration_and_submission`
--
ALTER TABLE `registration_and_submission`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
