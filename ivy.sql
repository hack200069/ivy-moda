-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2021 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ivy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `for_object` int(1) NOT NULL,
  `parent_category` int(2) NOT NULL,
  `soft_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `for_object`, `parent_category`, `soft_delete`) VALUES
(54, 'Hàng nữ mới về', 'hang-nu-moi-ve', 2, 5, 1),
(55, 'New Secret', 'new-secret', 2, 5, 1),
(56, 'Thanh Sắc', 'thanh-sac', 2, 5, 1),
(57, 'Ladies, Suit Up!', 'ladies-suit-up', 2, 5, 1),
(58, 'Green Leaf', 'green-leaf', 2, 5, 1),
(59, 'Áo kiểu', 'ao-kieu', 2, 6, 1),
(60, 'Áo croptop', 'ao-croptop', 2, 6, 1),
(61, 'Áo vest nữ', 'ao-vest-nu', 2, 6, 1),
(62, 'Áo peplum', 'ao-peplum', 2, 6, 1),
(63, 'Áo thun nữ', 'ao-thun-nu', 2, 6, 1),
(64, 'Áo sơ mi nữ', 'ao-so-mi-nu', 2, 6, 1),
(65, 'Áo khoác nữ', 'ao-khoac-nu', 2, 6, 1),
(66, 'Quần jeans nữ', 'quan-jeans-nu', 2, 7, 1),
(67, 'Quần lửng/short nữ', 'quan-lung-short-nu', 2, 7, 1),
(68, 'Quần dài nữ', 'quan-dai-nu', 2, 7, 1),
(69, 'Đầm', 'dam', 2, 8, 1),
(70, 'Đầm maxi', 'dam-maxi', 2, 8, 1),
(71, 'Đầm thun', 'dam-thun', 2, 8, 1),
(72, 'Zuýp nữ', 'zuyp-nu', 2, 9, 1),
(73, 'Senora', 'senora', 2, 9, 1),
(74, 'Jumpsuit', 'jumpsuit', 2, 9, 1),
(75, 'Đồ lót', 'do-lot', 2, 9, 1),
(76, 'Giày nữ', 'giay-nu', 2, 9, 1),
(77, 'Phụ kiện nữ', 'phu-kien-nu', 2, 9, 1),
(78, 'Đồ bơi', 'do-boi', 2, 9, 1),
(79, 'Túi', 'tui', 2, 9, 1),
(80, 'Hàng nam mới về', 'hang-nam-moi-ve', 1, 1, 1),
(81, 'Safe Zone', 'safe-zone', 1, 1, 1),
(82, 'New Polo for Men', 'new-polo-for-men', 1, 1, 1),
(83, 'Áo sơ mi nam', 'ao-so-mi-nam', 1, 2, 1),
(84, 'Áo polo nam', 'ao-polo-nam', 1, 2, 1),
(85, 'Áo thun nam', 'ao-thun-nam', 1, 2, 1),
(86, 'Áo khoác nam', 'ao-khoac-nam', 1, 2, 1),
(87, 'Quần jeans nam', 'quan-jeans-nam', 1, 3, 1),
(88, 'Quần lửng/short nam', 'quan-lung-short-nam', 1, 3, 1),
(89, 'Quần dài nam', 'quan-dai-nam', 1, 3, 1),
(90, 'Quần kaki nam ', 'quan-kaki-nam', 1, 3, 1),
(91, 'Quần Tây Nam', 'quan-tay-nam', 1, 3, 1),
(92, 'Giày nam', 'giay-nam', 1, 4, 1),
(93, 'Phụ kiện  nam', 'phu-kien-nam', 1, 4, 1),
(94, 'Hàng mới về trẻ em', 'hang-moi-ve-tre-em', 3, 10, 1),
(95, 'Draw the Dream', 'draw-the-dream', 3, 10, 1),
(96, 'Quần bé gái', 'quan-be-gai', 3, 11, 1),
(97, 'Váy', 'vay', 3, 11, 1),
(98, 'Zuýp bé gái', 'zuyp-be-gai', 3, 11, 1),
(99, 'Áo bé gái', 'ao-be-gai', 3, 11, 1),
(100, 'Phụ kiện bé gái', 'phu-kien-be-gai', 3, 11, 1),
(101, 'Quần bé trai', 'quan-be-trai', 3, 12, 1),
(102, 'Áo bé trai', 'ao-be-trai', 3, 12, 1),
(103, 'Phụ kiện bé trai', 'phu-kien-be-trai', 3, 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `link` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `soft_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(100) NOT NULL,
  `discount` tinyint(1) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `discount_fifty_percent` tinyint(1) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `soft_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` int(1) NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`, `dob`, `gender`, `city`, `district`, `ward`, `address`, `role`) VALUES
(17, 'hoang2308@gmail.com', '$2y$12$X9F0vHZS.rmOpXm3B9iIlepn0Hpw47xM98/mF0cQglDdsKOxHS6v2', 'Trần', 'Huy Hoàng', '0123456789', '2000-08-23', 1, '1', '1', '25', '123 Giảng Võ', 2),
(18, 'customer@gmail.com', '$2y$12$b2P8nldkiBqD8lmVSdnALudZSu/vYmMbcOE.MuOgXxEg2pchUSmam', 'Vũ', 'Minh Tuấn', '0327439204', '2000-09-16', 1, '1', '1', '22', '10 ngõ 18', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
