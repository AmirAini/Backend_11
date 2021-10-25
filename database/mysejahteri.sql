-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 03:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysejahteri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(11) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Date_Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Email`, `Date_Created`) VALUES
(3, 'Amir', '', '2021-10-24 16:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Company_Name` varchar(70) NOT NULL,
  `Company_Location` varchar(70) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Customer_ID`, `Company_Name`, `Company_Location`, `Date_Created`) VALUES
(1, 0, 'KevinHaha Sdn Bhd', 'Kuala Lumpur', '2021-10-24 12:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Customer_Location` varchar(50) NOT NULL,
  `Customer_Activities` varchar(50) NOT NULL,
  `Date_Create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `User_ID`, `Customer_Location`, `Customer_Activities`, `Date_Create`) VALUES
(1, 0, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 19:46:41'),
(2, 0, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:22:37'),
(3, 0, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:35:54'),
(4, 0, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:38:06'),
(5, 0, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:39:50'),
(6, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:41:03'),
(7, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:41:20'),
(8, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:41:23'),
(9, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:41:25'),
(10, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:51:08'),
(11, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:55:58'),
(12, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:56:32'),
(13, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:58:13'),
(14, 17, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 20:59:08'),
(15, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:37:29'),
(16, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:37:37'),
(17, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:45:55'),
(18, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:46:25'),
(19, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:47:36'),
(20, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:48:44'),
(21, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:49:12'),
(22, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:50:49'),
(23, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:52:05'),
(24, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:52:48'),
(25, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:53:12'),
(26, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:54:43'),
(27, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:55:24'),
(28, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:56:23'),
(29, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:56:50'),
(30, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:57:06'),
(31, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:57:23'),
(32, 18, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-24 22:58:32'),
(33, 19, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 07:26:14'),
(34, 22, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:27:51'),
(35, 22, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:31:41'),
(36, 22, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:32:53'),
(37, 22, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:33:42'),
(38, 22, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:33:56'),
(39, 24, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 08:59:37'),
(40, 24, 'Kuala Lumpur', 'KevinHaha Sdn Bhd', '2021-10-25 09:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(4) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `User_Phone` int(10) NOT NULL,
  `user_tac` int(9) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Name`, `User_Phone`, `user_tac`, `Date_Created`) VALUES
(2, 'AmirAini', 23, 979419, '2021-10-24 12:42:37'),
(5, 'Amir', 2341, 566158, '2021-10-24 19:25:15'),
(6, 'Amir', 131234, 238026, '2021-10-24 19:32:29'),
(9, 'Amir', 3412341, 865053, '2021-10-24 19:40:35'),
(12, 'Amir', 2134123, 151268, '2021-10-24 19:46:29'),
(14, 'Amir', 12341, 298729, '2021-10-24 19:54:05'),
(16, 'Amir Aini', 2314234, 139113, '2021-10-24 20:23:22'),
(17, 'Amir Aini', 175276454, 268428, '2021-10-24 20:36:09'),
(18, 'Amir', 332, 957305, '2021-10-24 22:37:08'),
(19, 'Amir', 342134, 159788, '2021-10-25 07:25:57'),
(21, 'Amir', 43246, 907439, '2021-10-25 08:18:47'),
(22, 'Amir', 567, 851412, '2021-10-25 08:27:37'),
(24, 'Amir', 2312, 685888, '2021-10-25 08:58:01'),
(25, 'Amir', 3412, 511370, '2021-10-25 09:26:06'),
(26, 'Amir', 0, 0, '2021-10-25 09:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
