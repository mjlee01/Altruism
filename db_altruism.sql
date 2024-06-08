-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2024 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_altruism`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(10) NOT NULL,
  `campaign_name` varchar(256) NOT NULL,
  `target_fund` int(10) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `user_id` int(20) NOT NULL,
  `d_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `campaign_name`, `target_fund`, `start_date`, `end_date`, `user_id`, `d_status`) VALUES
(1, 'Spring Fundraising', 50000, '2024-02-12 00:00:00', '2024-03-31 00:00:00', 1, 'active'),
(2, 'Autumn Fundraising', 100000, '2024-02-12 00:00:00', '2024-03-31 00:00:00', 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `donation_details`
--

CREATE TABLE `donation_details` (
  `ddetail_id` int(20) NOT NULL,
  `donation_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `amount` float(50,2) NOT NULL,
  `method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_details`
--

INSERT INTO `donation_details` (`ddetail_id`, `donation_id`, `user_id`, `amount`, `method`) VALUES
(1, 1, 1, 4250.00, 'e-wallet'),
(2, 1, 3, 100.00, 'e-wallet'),
(3, 1, 3, 20000.00, 'online-banking'),
(4, 1, 3, 2000.00, 'visa-&-mastercard'),
(5, 1, 3, 50.00, 'e-wallet'),
(6, 1, 3, 50.25, 'e-wallet'),
(7, 2, 3, 2000.00, 'e-wallet'),
(8, 2, 3, 2000.00, 'e-wallet'),
(9, 2, 3, 50.00, 'e-wallet'),
(10, 1, 3, 23.00, 'e-wallet'),
(11, 1, 3, 1000.00, 'e-wallet');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(20) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` varchar(256) NOT NULL,
  `event_startdate` datetime NOT NULL,
  `event_enddate` datetime NOT NULL,
  `volunteer_reward` int(100) NOT NULL,
  `expert_reward` int(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `e_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_description`, `event_startdate`, `event_enddate`, `volunteer_reward`, `expert_reward`, `user_id`, `e_status`) VALUES
(1, 'gotong royong', 'gotong royong in APU', '2024-02-12 18:25:15', '2024-02-14 01:25:15', 10, 20, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `expert_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `expert_position` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `news_date` datetime NOT NULL DEFAULT current_timestamp(),
  `news_title` varchar(50) NOT NULL,
  `article` longtext NOT NULL,
  `thumbnail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `news_date`, `news_title`, `article`, `thumbnail`) VALUES
(4, 1, '2024-02-18 00:00:00', 'Test News', 'Blablabla', 'uploads/cw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  `point` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `age`, `gender`, `email`, `password`, `contact_number`, `role`, `point`) VALUES
(1, 'Admin', 23, 'Male', 'admin1@gmail.com', '123', '123456789', 'admin', 0),
(3, 'user1', 18, 'Female', 'fe@gmail.com', '123', '012-3456789', 'user', 1098),
(10, 'user2', 21, 'Female', '123@gmail.com', '123', '0123456789', 'user', 10),
(11, 'user3', 22, 'Male', 'user3@gmail.com', '123', '0123456789', 'user', 0),
(13, 'user4', 31, 'Male', '123@gmail.com', '123', '0123456789', 'user', 0),
(14, 'user5', 32, 'Female', 'user5@gmail.com', '123', '0123456789', 'user', 0),
(15, 'user6', 26, 'Male', 'user6@gmail.com', '123', '0123456789', 'user', 0),
(16, 'user7', 29, 'Female', 'user7@gmail.com', '123', '0123456789', 'user', 0),
(19, 'user', 19, 'Male', 'user@gmail.com', '123', '0123456789', 'user', 80);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volunteer_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `user_id`, `event_id`, `type`) VALUES
(1, 3, 1, 'Volunteer'),
(7, 10, 1, 'Volunteer'),
(8, 11, 1, 'Expert'),
(9, 19, 1, 'Volunteer'),
(10, 19, 1, 'Volunteer'),
(11, 19, 1, 'Volunteer'),
(12, 19, 1, 'Volunteer'),
(13, 19, 1, 'Volunteer'),
(14, 19, 1, 'Volunteer'),
(15, 19, 1, 'Volunteer'),
(16, 19, 1, 'Volunteer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donation_details`
--
ALTER TABLE `donation_details`
  ADD PRIMARY KEY (`ddetail_id`),
  ADD KEY `donation_id` (`donation_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`expert_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volunteer_id`),
  ADD KEY `user_id` (`user_id`,`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donation_details`
--
ALTER TABLE `donation_details`
  MODIFY `ddetail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `expert_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volunteer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_details`
--
ALTER TABLE `donation_details`
  ADD CONSTRAINT `donation_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_details_ibfk_2` FOREIGN KEY (`donation_id`) REFERENCES `donation` (`donation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `expert_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `volunteer_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
