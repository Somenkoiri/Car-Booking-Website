-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_car_to_inventory`
--

CREATE TABLE `add_car_to_inventory` (
  `Sno` int(3) NOT NULL,
  `Car_Image` varchar(800) NOT NULL,
  `Car_Name` varchar(240) NOT NULL,
  `Model` int(20) NOT NULL,
  `Available_From` varchar(600) NOT NULL,
  `Available_To` varchar(600) NOT NULL,
  `Price` int(200) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_booking_list`
--

CREATE TABLE `car_booking_list` (
  `Sno` int(3) NOT NULL,
  `user_name` varchar(205) NOT NULL,
  `User_email` varchar(240) NOT NULL,
  `u_mobile` int(20) NOT NULL,
  `Journey` varchar(400) NOT NULL,
  `Car_type` varchar(40) NOT NULL,
  `trip_start` date NOT NULL,
  `trip_end` date NOT NULL,
  `u_Status` varchar(400) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_booking_list`
--

INSERT INTO `car_booking_list` (`Sno`, `user_name`, `User_email`, `u_mobile`, `Journey`, `Car_type`, `trip_start`, `trip_end`, `u_Status`, `date`) VALUES
(3, 'demo', '111demo@gmail.com', 12345678, 'city', 'Bmw', '2024-10-08', '2024-10-10', 'Approved', '2024-09-22 14:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin_user`
--

CREATE TABLE `login_admin_user` (
  `Sno` int(3) NOT NULL,
  `u_email` varchar(205) NOT NULL,
  `u_password` varchar(240) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin_user`
--

INSERT INTO `login_admin_user` (`Sno`, `u_email`, `u_password`, `date`) VALUES
(1, '111demo@gmail.com', 'demo@123', '2024-09-24 14:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `new_client_add_manage`
--

CREATE TABLE `new_client_add_manage` (
  `Sno` int(3) NOT NULL,
  `Customer_ID` int(205) NOT NULL,
  `Car_Image` varchar(700) NOT NULL,
  `Driver_Image` varchar(900) NOT NULL,
  `Customer_Name` varchar(270) NOT NULL,
  `Joining_Date` date NOT NULL,
  `Phone_Number` int(60) NOT NULL,
  `Status` varchar(60) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_car_to_inventory`
--
ALTER TABLE `add_car_to_inventory`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `car_booking_list`
--
ALTER TABLE `car_booking_list`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `login_admin_user`
--
ALTER TABLE `login_admin_user`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `new_client_add_manage`
--
ALTER TABLE `new_client_add_manage`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_car_to_inventory`
--
ALTER TABLE `add_car_to_inventory`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `car_booking_list`
--
ALTER TABLE `car_booking_list`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_admin_user`
--
ALTER TABLE `login_admin_user`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_client_add_manage`
--
ALTER TABLE `new_client_add_manage`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
