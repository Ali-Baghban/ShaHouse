-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 07:49 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_houses`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `id` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `details` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `private` varchar(2) COLLATE utf8_persian_ci NOT NULL,
  `chid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`id`, `city`, `details`, `private`, `chid`) VALUES
(1, 'شاهرود', 'خ فردوسی', '0', 1),
(2, 'شاهرود', 'خ تهران', '0', 2),
(3, 'فردوس', 'خ فردوسی', '0', 3),
(4, 'شاهرود', 'کمیشسی', '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `house_tbl`
--

CREATE TABLE `house_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `options` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `status` int(5) NOT NULL,
  `chid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `house_tbl`
--

INSERT INTO `house_tbl` (`id`, `name`, `type`, `options`, `time`, `price`, `status`, `chid`) VALUES
(1, 'صدف', 'آپارتمان', 'به دانشجویان و متاهل', 'Today', '400 اجاره + 15 رهن', 3, 3),
(2, 'مارال', 'آپارتمان', 'تمام مبله ', 'Today', '300 اجاره + 20 رهن', 1, 3),
(3, 'نگارین', 'ویلا', 'خیلی تمیز و مرتب', 'Today', '650 اجاره', 1, 3),
(4, 'مارال', 'ویلا', '************888', 'Today', '600000', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

CREATE TABLE `image_tbl` (
  `id` int(11) NOT NULL,
  `url` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `chid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`id`, `url`, `chid`) VALUES
(1, 'public/default/image/avatar.png', 0),
(2, 'public/default/image/avatar.png', 0),
(3, 'public/default/image/avatar.png', 0),
(4, 'http://s8.picofile.com/file/8345725584/apartman_a3_tara_kaludjerske_bare_s6.jpg', 1),
(5, 'http://s8.picofile.com/file/8345728100/KOC_6363w_1_1024x576.jpg', 1),
(6, 'http://s9.picofile.com/file/8345728126/IMG_BB2AA0_0E30D1_6DB565_89ED42_8CC782_CBC941.jpg', 1),
(7, 'http://s8.picofile.com/file/8345733550/vila_real_square.jpg', 2),
(8, 'public/default/image/default.png', 2),
(9, 'public/default/image/default.png', 2),
(10, 'public/default/image/default.png', 3),
(11, 'public/default/image/default.png', 3),
(12, 'public/default/image/default.png', 3),
(13, 'public/default/image/default.png', 4),
(14, 'public/default/image/default.png', 4),
(15, 'public/default/image/default.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu_tbl`
--

CREATE TABLE `menu_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu_tbl`
--

INSERT INTO `menu_tbl` (`id`, `title`, `url`, `status`, `sort`) VALUES
(1, 'دسته بندی', 'index.php?c=cat&a=cat', 1, 1),
(2, 'درباره ما', 'index.php?c=index&a=about', 1, 2),
(3, 'UAE', 'index.php?c=cat&a=cat', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `body` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `importance` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist_tbl`
--

CREATE TABLE `orderlist_tbl` (
  `id` int(11) NOT NULL,
  `chid` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `h_id` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `time` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orderlist_tbl`
--

INSERT INTO `orderlist_tbl` (`id`, `chid`, `h_id`, `time`, `status`) VALUES
(1, '2', '1', 'Today', 1),
(2, '2', '4', 'Today', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `user_type` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `id_number` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `img_id` varchar(2) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `user_type`, `status`, `username`, `password`, `email`, `phone`, `name`, `id_number`, `img_id`) VALUES
(1, 'admin', 1, 'Ali_baghban', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', '', '-', 'علی باغبان ', '-', '1'),
(2, 'customer', 1, 'Madihe', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', 'madihe@gmail.com', '09394982175', 'مدیحه', '', '2'),
(3, 'projectholder', 1, 'hasan', '4d9012b4a77a9524d675dad27c3276ab5705e5e8', 'hello@hello.hello', '09037112729', 'رضا عاملی', '0750182902', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_tbl`
--
ALTER TABLE `house_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist_tbl`
--
ALTER TABLE `orderlist_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `h_id` (`h_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `house_tbl`
--
ALTER TABLE `house_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `image_tbl`
--
ALTER TABLE `image_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderlist_tbl`
--
ALTER TABLE `orderlist_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
