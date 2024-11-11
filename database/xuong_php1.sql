-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2024 at 02:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuong_php1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL COMMENT 'Khóa chính tự động tăng',
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên sản phẩm',
  `category_id` int DEFAULT NULL COMMENT 'Id danh mục',
  `price` double DEFAULT NULL COMMENT 'Giá',
  `description` text COLLATE utf8mb4_general_ci COMMENT 'Mô tả ngắn',
  `article` text COLLATE utf8mb4_general_ci COMMENT 'Bài viết',
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Hình ảnh'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `description`, `article`, `image`) VALUES
(1, 'Iphone 11', 1, 1000, 'Iphone 11 rất đẹp', 'Đây là 1 bài viết dài', '11.jpg'),
(2, 'Iphone 12', 1, 2000, 'Iphone 12 rất đẹp', 'Đây là 1 bài viết dài', '12.jpg'),
(3, 'Iphone 13', 1, 3000, 'Iphone 132 rất đẹp', 'Đây là 1 bài viết dài', '13.jpg'),
(4, 'Iphone 14', 1, 4000, 'Iphone 14 rất đẹp', 'Đây là 1 bài viết dài', '14.jpg'),
(5, 'Iphone 15', 1, 5000, 'Iphone 15 rất đẹp', 'Đây là 1 bài viết dài', '15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL COMMENT 'Khóa chính',
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Mật khẩu',
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Quyền'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123456', 'admin'),
(2, 'guest', '123456', 'view');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính tự động tăng', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
