-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 09:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_admin`
--

CREATE TABLE `tm_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_profession` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_address` varchar(50) NOT NULL,
  `admin_cont` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_admin`
--

INSERT INTO `tm_admin` (`admin_id`, `admin_profession`, `admin_name`, `admin_address`, `admin_cont`, `admin_email`, `admin_pass`) VALUES
(1, 'Agent', 'Talim', 'Gurgaon', '8569745213', 'talim@gmail.com', 'Talim@1234'),
(2, 'Owner', 'Vaibhav Kumar', 'Delhi', '8459652365', 'vaibhav@gmail.com', 'Vaibhav@1234'),
(3, 'Owner', 'Kartik Sharma', 'Greater Noida', '7458963214', 'kartik@gmail.com', 'Kartik@1234');

-- --------------------------------------------------------

--
-- Table structure for table `tm_image`
--

CREATE TABLE `tm_image` (
  `img_id` int(11) NOT NULL,
  `proprty_img1` varchar(225) NOT NULL,
  `proprty_img2` varchar(225) NOT NULL,
  `proprty_img3` varchar(225) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_image`
--

INSERT INTO `tm_image` (`img_id`, `proprty_img1`, `proprty_img2`, `proprty_img3`, `p_id`) VALUES
(1, '0', 'p_imges/a horse walking 0.mp4', 'p_imges/horse caring a  1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_property`
--

CREATE TABLE `tm_property` (
  `p_id` int(11) NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `p_title` varchar(50) NOT NULL,
  `p_city` varchar(50) NOT NULL,
  `p_locality` varchar(50) NOT NULL,
  `p_landmark` varchar(50) NOT NULL,
  `p_buildyr` varchar(225) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_bedroom` varchar(50) NOT NULL,
  `p_hall` varchar(50) NOT NULL,
  `p_kitchen` varchar(50) NOT NULL,
  `p_bathroom` varchar(10) NOT NULL,
  `p_area` varchar(50) NOT NULL,
  `p_prkarea` varchar(50) NOT NULL,
  `p_hosnm` varchar(50) NOT NULL,
  `p_hosdis` varchar(50) NOT NULL,
  `p_schnm` varchar(50) NOT NULL,
  `p_schdis` varchar(50) NOT NULL,
  `p_tmplnm` varchar(50) NOT NULL,
  `p_tmpldis` varchar(50) NOT NULL,
  `p_statnnm` varchar(50) NOT NULL,
  `p_statndis` varchar(50) NOT NULL,
  `p_devlnm` varchar(50) NOT NULL,
  `p_orgnnm` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_property`
--

INSERT INTO `tm_property` (`p_id`, `p_type`, `p_title`, `p_city`, `p_locality`, `p_landmark`, `p_buildyr`, `p_price`, `p_bedroom`, `p_hall`, `p_kitchen`, `p_bathroom`, `p_area`, `p_prkarea`, `p_hosnm`, `p_hosdis`, `p_schnm`, `p_schdis`, `p_tmplnm`, `p_tmpldis`, `p_statnnm`, `p_statndis`, `p_devlnm`, `p_orgnnm`, `admin_id`) VALUES
(1, 'Flat', 'Kaweri App.', 'Greater Noida', 'Alpha 1', 'Near C-Market', '2010', '2000000', '1-Bedroom', '1-Hall', '2-Kitchen', '1-Bathroom', '20000', '30000', 'Kailash Hospital', 'Under 1KM', 'Sharma Vidyalay', 'Under 1KM', 'Shiv Mandir', 'Under 1KM', 'Alpha Metro Station', 'Under 1KM', 'Sindh Developer', 'Sindh Developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_user`
--

CREATE TABLE `tm_user` (
  `tm_id` int(11) NOT NULL,
  `tm_name` varchar(50) NOT NULL,
  `tm_address` varchar(200) NOT NULL,
  `tm_contact` varchar(50) NOT NULL,
  `tm_email` varchar(50) NOT NULL,
  `tm_pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tm_user`
--

INSERT INTO `tm_user` (`tm_id`, `tm_name`, `tm_address`, `tm_contact`, `tm_email`, `tm_pass`) VALUES
(0, 'Bipin Vishwakarma', 'Amal Phalia Namda', '9427487182', 'bipin@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_admin`
--
ALTER TABLE `tm_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tm_image`
--
ALTER TABLE `tm_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tm_property`
--
ALTER TABLE `tm_property`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_admin`
--
ALTER TABLE `tm_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_image`
--
ALTER TABLE `tm_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tm_property`
--
ALTER TABLE `tm_property`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
