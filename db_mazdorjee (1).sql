-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mazdorjee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `admin_id` int(11) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `service_id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `user_mobile` text NOT NULL,
  `user_address` text NOT NULL,
  `user_city` text NOT NULL,
  `engine_id` int(11) NOT NULL,
  `booking_working_date` date NOT NULL,
  `booking_timeslot` text NOT NULL,
  `assing_status` text NOT NULL DEFAULT 'Pending',
  `complete_status` text NOT NULL DEFAULT 'Pending',
  `confirm_status` text NOT NULL DEFAULT 'Pending',
  `booking_applydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_id`, `user_email`, `service_id`, `work_id`, `user_mobile`, `user_address`, `user_city`, `engine_id`, `booking_working_date`, `booking_timeslot`, `assing_status`, `complete_status`, `confirm_status`, `booking_applydate`) VALUES
(2, 1, 'h.ibrahimayub@gmail.com', 2, 1, '03242898858', 'Office No D2 Blade Trade Center', 'Karachi', 1, '2020-09-23', '12pm - 2pm', 'Pending', 'Pending', 'Confirm', '2020-09-20'),
(3, 0, 'admin@gmail.com', 2, 1, '03242898858', 'Office No D2 Blade Trade Center', 'Karachi', 1, '2020-09-24', '12pm - 2pm', 'Pending', 'Pending', 'Confirm', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engine`
--

CREATE TABLE `tbl_engine` (
  `engine_id` int(11) NOT NULL,
  `engine_title` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_engine`
--

INSERT INTO `tbl_engine` (`engine_id`, `engine_title`, `service_id`) VALUES
(1, '500CCs', 2),
(2, '500CC', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_title`) VALUES
(2, 'Bike Mechanics'),
(3, 'Car Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subscribe_id`, `subscribe_email`) VALUES
(1, 'h.ibrahimayuib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL,
  `ref_code` text NOT NULL,
  `ref_user_id` int(11) NOT NULL,
  `user_wallet` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `my_refcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_pass`, `ref_code`, `ref_user_id`, `user_wallet`, `reg_date`, `my_refcode`) VALUES
(1, 'Muhammad Ibrahim Warind', 'h.ibrahimayub@gmail.com', '123', '', 0, 50, '2020-09-14', '2518'),
(2, 'Muhammad Ibrahim Warind', 'ibrahimayub@gmail.com', '123', '', 0, 50, '2020-09-14', '3211'),
(3, 'Muhammad Ibrahim Warind', 'h.ibrahimyub@gmail.com', '123', '', 0, 50, '2020-09-14', '5034'),
(4, 'Muhammad Ibrahim Warind', 'h.ibrimayub@gmail.com', '123', '', 0, 50, '2020-09-14', 'hammad Ibrahim Warind31039'),
(5, 'Muhammad Ibrahim Warind', 'h.ibhimayub@gmail.com', '123', '', 0, 50, '2020-09-14', 'Mu126186'),
(7, 'Muhammad', 'b@gmail.com', '123', '', 0, 50, '2020-09-14', 'Mu127537'),
(8, 'BlueBoxIt', 'blueboxsolution.it@gmail.com', '', '', 0, 50, '2020-09-14', 'Blbl3170'),
(9, 'uzair', 'uzair@gmail.com', '123', '', 0, 50, '2020-09-14', 'uz124299');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_worker`
--

CREATE TABLE `tbl_worker` (
  `worker_id` int(11) NOT NULL,
  `worker_name` text NOT NULL,
  `worker_phone` text NOT NULL,
  `worker_address` text NOT NULL,
  `worker_cnic` text NOT NULL,
  `worker_join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_worker`
--

INSERT INTO `tbl_worker` (`worker_id`, `worker_name`, `worker_phone`, `worker_address`, `worker_cnic`, `worker_join_date`) VALUES
(1, 'Ibrahim Warind', '03232341', 'gulshan iqbal', '3242413123', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_works`
--

CREATE TABLE `tbl_works` (
  `work_id` int(11) NOT NULL,
  `work_title` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_works`
--

INSERT INTO `tbl_works` (`work_id`, `work_title`, `service_id`) VALUES
(1, 'Basic Tunings', 2),
(2, 'Basic Tuning', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_engine`
--
ALTER TABLE `tbl_engine`
  ADD PRIMARY KEY (`engine_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_worker`
--
ALTER TABLE `tbl_worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- Indexes for table `tbl_works`
--
ALTER TABLE `tbl_works`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_engine`
--
ALTER TABLE `tbl_engine`
  MODIFY `engine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_worker`
--
ALTER TABLE `tbl_worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_works`
--
ALTER TABLE `tbl_works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
