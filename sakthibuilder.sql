-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 07:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakthibuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mailid` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `admin_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mailid`, `phone`, `username`, `password`, `admin_image`) VALUES
(1, 'Al Madinah Public School', 'almadinahcbse@gmail.com', '9626164164', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`, `status`) VALUES
(5, '1642239160_14.jpg', 'active'),
(6, '1642239161_ag-1.jpg', 'active'),
(7, '1642239161_ag-134.jpg', 'active'),
(8, 'ash-test.jpg', 'active'),
(9, 'asy1.jpg', 'active'),
(10, 'asy11.jpg', 'active'),
(11, '1642239161_check.png', 'active'),
(12, 'hj.jpg', 'active'),
(13, 'IMG_1372.JPG', 'active'),
(14, 'img-020.jpg', 'active'),
(15, 'logo (1).png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `project_name` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `images`, `project_name`, `status`) VALUES
(11, '1642172116_check.png', 'test', 'active'),
(12, '1642172116_hj.jpg', 'test', 'active'),
(13, '1642172116_IMG_1372.JPG', 'test', 'active'),
(14, '1642172116_img-020.jpg', 'test', 'active'),
(15, '1642172117_logo (1).png', 'test', 'active'),
(16, 'logo (2).png', 'test 5666', 'active'),
(17, 'logo.png', 'test 5666', 'active'),
(18, 'logo2.png', 'test 5666', 'active'),
(19, 'logo6.jpg', 'test 5666', 'active'),
(20, 'logo-home.png', 'test 5666', 'active'),
(21, 'logo-home2.jpg', 'test 5666', 'active'),
(22, 'logo-last.png', 'test 5666', 'active'),
(23, 'Mahesh.jpg', 'test 5666', 'active'),
(24, 'nc01.jpg', 'test 5666', 'active'),
(25, 'new1ui.jpg', 'test 5666', 'active'),
(26, 'SAMPLE IMAGES.jpg', 'test 5666', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(300) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`, `status`) VALUES
(6, 'https://www.youtube.com/embed/LzlrNj2c-GE', 'active'),
(7, 'https://www.youtube.com/embed/N_MjpdKcpCI', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
