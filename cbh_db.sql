-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 01:36 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13371459_cbh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tble_booking`
--

CREATE TABLE `tble_booking` (
  `booking_id` int(50) NOT NULL,
  `package_id` int(11) NOT NULL,
  `login_id` int(10) NOT NULL,
  `dateofbooking` date NOT NULL,
  `food` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_booking`
--

INSERT INTO `tble_booking` (`booking_id`, `package_id`, `login_id`, `dateofbooking`, `food`, `vehicle`, `total`, `status`) VALUES
(1, 8, 13, '0000-00-00', 'no', '', 1150, ''),
(5, 9, 13, '0000-00-00', 'NO', '', 2000, ''),
(6, 8, 40, '2020-03-07', 'NO', '', 1300, ''),
(7, 9, 40, '0000-00-00', 'YES', '', 2500, ''),
(9, 10, 40, '2020-03-06', 'NO', '', 7900, ''),
(10, 12, 40, '0000-00-00', 'NO', '', 6000, ''),
(11, 15, 40, '2020-03-13', 'NO', '', 6000, ''),
(12, 12, 41, '2020-03-06', 'NO', '', 5500, ''),
(13, 14, 40, '2020-04-22', 'NO', '', 11000, ''),
(14, 13, 40, '2020-05-02', 'NO', '', 7600, '');

-- --------------------------------------------------------

--
-- Table structure for table `tble_category`
--

CREATE TABLE `tble_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'karumadikuttan.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_category`
--

INSERT INTO `tble_category` (`category_id`, `category_name`, `image`) VALUES
(6, 'Ambalappuzha', 'ambalapuzhabeach.jpg'),
(7, 'Cherthala', 'mararikulam2.jpg'),
(8, 'Chengannur', 'Chengannur.jpg'),
(9, 'Karthikappaly', 'karthikappally-pallippad.jpg'),
(10, 'Mavelikkara', 'Mavelikara.jpg'),
(11, 'Kuttanad', 'Edathua_Church.jpg'),
(12, 'ambalauzha', 'karumadikuttan.jpg'),
(13, 'muttar', 'karumadikuttan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tble_images`
--

CREATE TABLE `tble_images` (
  `image_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `photo1` varchar(10) NOT NULL,
  `photo2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_images`
--

INSERT INTO `tble_images` (`image_id`, `product_id`, `photo1`, `photo2`) VALUES
(1, 1, 'aleppeyBEa', 'Ambalapuzh'),
(2, 1, 'Vembanad.j', 'Vembanad.j'),
(4, 3, '1.jpg', 'photo9jpg.'),
(7, 1, '5.jpg', 'allppey_li'),
(9, 1, 'aleppeyBEa', 'allppey_li'),
(10, 1, '5.jpg', 'allppey_li'),
(11, 2, 'images.jpg', 'allppey_li'),
(12, 2, '1.jpg', 'edathucHUR'),
(13, 11, 'Edathua_Ch', 'edathucHUR');

-- --------------------------------------------------------

--
-- Table structure for table `tble_package`
--

CREATE TABLE `tble_package` (
  `login_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `specification` varchar(50) NOT NULL,
  `no_of_adults` int(50) NOT NULL,
  `no_of_childrens` int(100) NOT NULL,
  `no_of_days` int(50) NOT NULL,
  `no_of_nights` int(100) NOT NULL,
  `stayamount` int(100) NOT NULL,
  `foodamount` int(100) NOT NULL,
  `busamount` int(100) NOT NULL,
  `trainamount` int(100) NOT NULL,
  `airamount` int(100) NOT NULL,
  `package_image` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_package`
--

INSERT INTO `tble_package` (`login_id`, `package_id`, `category_id`, `package_name`, `subcategory`, `specification`, `no_of_adults`, `no_of_childrens`, `no_of_days`, `no_of_nights`, `stayamount`, `foodamount`, `busamount`, `trainamount`, `airamount`, `package_image`) VALUES
(16, 8, 11, 'myTourKuttand', '13', 'edathua church', 7, 5, 2, 1, 3000, 7000, 9000, 3000, 1100, 'edathucHURCH.png'),
(11, 9, 10, 'infosyMavelikara', '17', 'mavelikara  buddha statue', 3, 5, 2, 2, 4000, 5000, 8000, 3700, 1080, 'Mavelikara_Buddha.jpg'),
(16, 10, 11, 'Terminal', '12', 'Kuttanad with its geographical pecularities has so', 8, 4, 3, 2, 5400, 5000, 10000, 8456, 2500, 'Kuttanad_beauty.jpg'),
(11, 11, 7, 'MyTrip ', '20', ' A Beautiful Beach Resort. ... no breakfast even a', 7, 3, 2, 1, 5990, 7845, 9080, 4230, 2400, 'cherthala.jpg'),
(11, 13, 11, 'Kuttand', '12', '9 Best Places to Stay in kuttanad Live the backwat', 5, 5, 4, 3, 5600, 8400, 4000, 2000, 1000, 'Kuttanad_kerala.jpg'),
(11, 14, 8, 'Chengannur', '16', 'Beautifully designed resort, once you get to it. R', 6, 4, 4, 3, 8000, 5000, 3000, 2300, 1200, 'Chengannur_gadhastick.JPG'),
(11, 15, 9, 'Karthikappally', '18', 'Haripad is the headquarters of Karthikappally talu', 5, 3, 3, 2, 5000, 5900, 1500, 1000, 800, 'karthikappally-Travancore_Anchal_Box_Krishnapuram_Palace.jpg'),
(16, 16, 6, 'myTourAmbalappuzha', '19', 'Best Hotels Near The Sri Krishna Temple, Ambalapuz', 2, 2, 1, 1, 0, 3500, 2000, 1000, 500, 'Ambalappuzha_beachjpg.jpg'),
(16, 17, 7, 'myTourCherthala', '20', 'Located in Cherthala, Vasundhara Sarovar Premiere ', 3, 2, 2, 2, 3500, 5000, 2000, 1750, 900, 'cherthala.jpg'),
(41, 18, 8, 'myTourChengannur', '15', 'one of the closest developing municipal towns in t', 2, 2, 2, 1, 5000, 6000, 1000, 800, 500, 'Chengannur-Mahadeva.jpg'),
(16, 19, 9, 'Karthikappally', '18', 'Haripad is the headquarters of Karthikappally talu', 10, 5, 2, 1, 10000, 10000, 9400, 5000, 2000, 'karthikappaly-cheruthana.jpg'),
(16, 20, 10, 'myTourMavelikkara', '17', 'Reviews Beautifully designed resort, once you get ', 8, 8, 2, 1, 10000, 15000, 25890, 10000, 5000, 'mavelikara-Mattam_narasimha_padippura.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tble_payment`
--

CREATE TABLE `tble_payment` (
  `payment_id` int(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `card_type` varchar(100) NOT NULL,
  `card_holder_name` varchar(100) NOT NULL,
  `card_number` int(100) NOT NULL,
  `cvv_number` int(3) NOT NULL,
  `expiry_date` date NOT NULL,
  `total_amount` int(100) NOT NULL,
  `status` int(2) NOT NULL,
  `login_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tble_subcategory`
--

CREATE TABLE `tble_subcategory` (
  `subcategory_id` int(10) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_subcategory`
--

INSERT INTO `tble_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(13, 'Edathua', 11),
(16, 'Ennakkad', 8),
(17, 'Chunakkara', 10),
(18, 'Arattupuzha', 9),
(19, 'Kalavoor', 6),
(20, 'Kadakkarappally', 7),
(23, 'kaloor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agencyreg`
--

CREATE TABLE `tbl_agencyreg` (
  `reg_id` int(20) NOT NULL,
  `agency_name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(25) NOT NULL,
  `aadhar_no` varchar(25) NOT NULL,
  `aadhar_cardholder_name` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agencyreg`
--

INSERT INTO `tbl_agencyreg` (`reg_id`, `agency_name`, `email_id`, `contact_no`, `aadhar_no`, `aadhar_cardholder_name`, `picture`) VALUES
(11, 'Infosy', 'infosy@gmail.com', '7896541053', '789654123045', '', ''),
(16, 'myTour', 'myTour@gmail.com', '7891458779', '', '', ''),
(18, 'Vacation', 'vacation@gmail.com', '9497247504', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `usertype` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `status`, `usertype`) VALUES
(11, 'infosy@gmail.com', 'sofy@12', 1, 2),
(16, 'myTour@gmail.com', 'myTour@12', 1, 2),
(21, 'vacation@gmail.com', 'Vacation@1', 0, 2),
(37, 'lijo97@gmail.com', '517fb5036bf09ade7823eb764c5ed99e', 0, 3),
(38, 'admin@gmail.com', 'Admin', 1, 1),
(39, 'anju@gmail.com', '177aaad5e461e263a30468b05d6f4f06', 0, 3),
(40, 'anumol@gmail.com', 'Anumol@12', 1, 3),
(41, 'achujoseph1995@gmail.com', 'Anju@12', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userreg`
--

CREATE TABLE `tbl_userreg` (
  `reg_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userreg`
--

INSERT INTO `tbl_userreg` (`reg_id`, `name`, `email_id`, `contact_no`) VALUES
(37, 'Lijo Mathew', 'lijo97@gmail.com', '8156964826'),
(39, 'Anju Joseph', 'anju@gmail.com', '9427440985'),
(40, 'Anumol Jose', 'anumol@gmail.com', '8974563201'),
(41, 'Anju Joseph', 'achujoseph1995@gmail.com', '9744239027');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `usertypeid` int(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertypeid`, `role`, `status`) VALUES
(1, 'admin', 1),
(2, 'travelagency', 1),
(3, 'customer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tble_booking`
--
ALTER TABLE `tble_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tble_category`
--
ALTER TABLE `tble_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tble_images`
--
ALTER TABLE `tble_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tble_package`
--
ALTER TABLE `tble_package`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tble_payment`
--
ALTER TABLE `tble_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tble_subcategory`
--
ALTER TABLE `tble_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_agencyreg`
--
ALTER TABLE `tbl_agencyreg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_userreg`
--
ALTER TABLE `tbl_userreg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`usertypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tble_booking`
--
ALTER TABLE `tble_booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tble_category`
--
ALTER TABLE `tble_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tble_images`
--
ALTER TABLE `tble_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tble_package`
--
ALTER TABLE `tble_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tble_payment`
--
ALTER TABLE `tble_payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tble_subcategory`
--
ALTER TABLE `tble_subcategory`
  MODIFY `subcategory_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_agencyreg`
--
ALTER TABLE `tbl_agencyreg`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_userreg`
--
ALTER TABLE `tbl_userreg`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertypeid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tble_package`
--
ALTER TABLE `tble_package`
  ADD CONSTRAINT `tble_package_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tble_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tble_package_ibfk_2` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
