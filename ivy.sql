-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2021 lúc 01:59 PM
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

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `product_id`, `link`) VALUES
(87, 28, '/public/images/product/202110230518345a99f0aeeff6077da4b16d6ea5d8d235.jpg'),
(88, 28, '/public/images/product/202110230518348f81e02354acfdeccad0fe0155743153.jpg'),
(89, 28, '/public/images/product/2021102305183409b630553a9428244c8ef6a3508d5ac8.jpg'),
(90, 28, '/public/images/product/202110230518349a366b6776abe2e8f9109606456eecfc.jpg'),
(91, 28, '/public/images/product/202110230518341594c0103363299c4869eef817aa6b17.jpg'),
(92, 28, '/public/images/product/2021102305183480264a6917c2ed87f73f2768d12f0cb3.jpg'),
(93, 28, '/public/images/product/20211023051834d66fb5835f4cd6ba05318a5bf553c67e.jpg'),
(94, 28, '/public/images/product/20211023051834f799afcd4f38bf075408ae676689dc1c.jpg'),
(95, 28, '/public/images/product/20211023051834f443157d4e8441c338c8d20542d49f4c.jpg'),
(96, 29, '/public/images/product/202110230521472e3f9dfaa6d9dfda5faa17978a954850.jpg'),
(97, 29, '/public/images/product/2021102305214798d0448a5c4d403d9558c9376515d44d.jpg'),
(98, 29, '/public/images/product/20211023052148811c4368e740536813c6adf90dc532ff.jpg'),
(99, 29, '/public/images/product/202110230521483681aa5dee7016c36cdeea53dfa46b77.jpg'),
(100, 29, '/public/images/product/20211023052148b8775a9e484f61128521a16c0e6fb848.jpg'),
(101, 29, '/public/images/product/20211023052148ca2e4e11548a6ba343c145430ef92de2.jpg'),
(102, 29, '/public/images/product/20211023052148d57d9b3a77b23c2d891b5dc4594067d6.jpg'),
(103, 29, '/public/images/product/20211023052148e3b2bf0d6957850296f37e4d53f14f20.jpg'),
(104, 30, '/public/images/product/202110230524107f77c297b1d61cd0294d3e26459fdd37.jpg'),
(105, 30, '/public/images/product/2021102305241068d646a97d5f57ab2e8c91363497b3f7.jpg'),
(106, 30, '/public/images/product/20211023052410369f860d8b4747caddb0e031e1a9440f.jpg'),
(107, 30, '/public/images/product/20211023052410926e651441168d98033421ff82fe9809.jpg'),
(108, 30, '/public/images/product/20211023052410ada8f22599c2e1c7cb98101abf2f9638.jpg'),
(109, 30, '/public/images/product/20211023052410c0619838ac1fa1e5fa80d87e24aca7b6.jpg'),
(110, 30, '/public/images/product/20211023052410c60764318da8fae4e8e9847c46b029a9.jpg'),
(111, 30, '/public/images/product/20211023052410dfd6b64b4034343493bfa127c518d952.jpg'),
(112, 30, '/public/images/product/20211023052410e7a398005be2d77eb9e0add7cb5dee85.jpg'),
(113, 30, '/public/images/product/20211023052410f883d8be767405bc308f2323c8f93501.jpg'),
(114, 30, '/public/images/product/2021102305241015c7d3740c3553ef6e273356a81d88a5.jpg'),
(115, 31, '/public/images/product/20211023052523afcd7f81723c45791539eb6e6f994967.jpg'),
(116, 31, '/public/images/product/20211023052523fe210bdba879ecc0c5ff1a1a18b4ab5f.jpg'),
(117, 31, '/public/images/product/20211023052524d3c40fa1d9513dcf0d958f7d4597928e.jpg'),
(118, 32, '/public/images/product/202110230622572a3a54e1f65bf3de9ecb1f02420c053b.jpg'),
(119, 32, '/public/images/product/202110230622577bd4c3662607e6be5ebda9b004816237.jpg'),
(120, 32, '/public/images/product/20211023062257ce7e2a0186df5c62b379d7cc626c57f3.jpg'),
(121, 32, '/public/images/product/20211023062257cea5da9e3b054e1f3e20223678044858.jpg'),
(122, 32, '/public/images/product/20211023062257dd0f52119d9e6c512366b39a05b8af06.jpg'),
(123, 32, '/public/images/product/20211023062257ee5d1ce5424980e8c4de13fe73aa1119.jpg'),
(124, 33, '/public/images/product/202110230627264be8f0ec9d75814015b8facf993bb1f8.jpg'),
(125, 33, '/public/images/product/2021102306272624fb5b8f1f6744aea0093dea7bd48361.jpg'),
(126, 33, '/public/images/product/2021102306272633af7a2e21012f4ec10f1dfb455f3dfc.jpg'),
(127, 33, '/public/images/product/202110230627268872c257fff532217a62b12e13db9418.jpg'),
(128, 33, '/public/images/product/202110230627269229bd7e9f99692382e3a7a8265bd1d7.jpg'),
(129, 33, '/public/images/product/20211023062726a3993f3670469f6b55969a96eafdf79f.jpg'),
(130, 33, '/public/images/product/20211023062726c7230940020026facd51cc4432946e96.jpg'),
(131, 33, '/public/images/product/20211023062726cc4fd83a32acdf9744d5850893f64d55.jpg'),
(132, 33, '/public/images/product/20211023062726ea5b2765991195681991114270aabc9f.jpg'),
(133, 34, '/public/images/product/202110230628331ffa6de89ce8f50150c212b3061bc24f.jpg'),
(134, 34, '/public/images/product/202110230628332a0d14dd70803ff8f65395aa9afb8a28.jpg'),
(135, 34, '/public/images/product/202110230628335a03912077cdd3b3f6ead8bed3a64e4c.jpg'),
(136, 34, '/public/images/product/202110230628336c163f5c1c56f51bdfecba623d13acfe.jpg'),
(137, 34, '/public/images/product/2021102306283321d20345c822001b5d777b0aa4c2f15b.jpg'),
(138, 34, '/public/images/product/20211023062833c9ec01ea1130818770abd451a9526305.jpg'),
(139, 34, '/public/images/product/20211023062833c728fbf4653736aaa738db6e56456507.jpg'),
(140, 34, '/public/images/product/20211023062833cae6886b9b03da0873e9c1567b7893ef.jpg'),
(141, 35, '/public/images/product/202110230629570f3ffc846d05db787e54359311e2c773.jpg'),
(142, 35, '/public/images/product/202110230629571f4980563f868870280f46102f0d7ba8.jpg'),
(143, 35, '/public/images/product/202110230629571ffa6de89ce8f50150c212b3061bc24f.jpg'),
(144, 35, '/public/images/product/202110230629575a03912077cdd3b3f6ead8bed3a64e4c.jpg'),
(145, 35, '/public/images/product/202110230629579edf5498bb31cf0dd2477c729482ee43.jpg'),
(146, 35, '/public/images/product/2021102306295812e347152497b032ed3741296183ef7e.jpg'),
(147, 35, '/public/images/product/202110230629586480d5e76a7f93ab93428af4a73dda88.jpg'),
(148, 35, '/public/images/product/20211023062958c9ec01ea1130818770abd451a9526305.jpg');

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
  `quantity` int(100) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `soft_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `discount_fifty_percent`, `quantity`, `description`, `soft_delete`) VALUES
(28, 'Quần jeans baggy bạc màu MS 25B8014', 'quan-jeans-baggy-bac-mau-ms-25b8014', 990000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Quần jeans dáng baggy, có 4 túi. Ống đứng, gấu lật. Đai có đỉa. Cài khuy đôi và khóa kéo kim loại phía trước. Viền chỉ nổi màu trắng tạo điểm nhấn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Sản phẩm được hoàn thiện với độ chính xác cao với đường may dày, cẩn thận. Form quần thoải mái và tôn dáng khi mặc cùng với chất vải denim cao cấp có tính đàn hồi tốt giúp quần giữ được form nhiều lần giặt.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Xanh Lơ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size 27:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; list-style: none; color: rgb(51, 51, 51);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chiều cao:</strong></span> 1m65</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cân nặng:</strong></span> 48kg</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Số đo 3 vòng</strong></span>: 80-62-89</li></ul><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Quần</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Baggy</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ngang mắt cá chân</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Denim</td></tr></tbody></table>', 1),
(29, 'Áo len ôm tay dài MS 58B8039', 'ao-len-om-tay-dai-ms-58b8039', 890000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Áo len cổ V. Tay dài. Mặt trước xoắn tạo kiểu, xẻ gấu phía dưới.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chất len có độ dày vừa phải, mềm mịn cùng khả năng cách điện, cách nhiệt tốt. Dáng ôm vào body giúp nàng giữ ấm mà vẫn khoe trọn body của mình.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Là item không thể thiếu trong tủ đồ của các nàng vào mùa thu đông, không chỉ giữ ấm cơ thể mà còn thể hiện phong cách thời trang “xịn mịn”. Đừng quên mix cùng chân zuýp, quần jeans hay đôi boot đùi để có set đồ thời trang nhất nhé!</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Trắng - Đen - Tím Lavender</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size S:</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chiều cao: 1m68<br style=\"margin: 0px; padding: 0px;\">Cân nặng: 52kg<br style=\"margin: 0px; padding: 0px;\">Số đo 3 vòng: 83-62-95cm</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">&nbsp;</p><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Áo</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cổ áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Cổ khác</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Tay áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Tay dài</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ôm</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Dài thường</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Họa tiết khác</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Len</td></tr></tbody></table>', 1),
(30, 'Quần jeans đen ống đứng MS 25B8844', 'quan-jeans-den-ong-dung-ms-25b8844', 1090000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Quần bò cạp sử dụng khóa và khuy kim loại. Dáng quần suông ống đứng. Có 5 túi.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">- Thành phần chủ yếu cotton: Mềm mại, an toàn cho da nhạy cảm nhất<br style=\"margin: 0px; padding: 0px;\">-&nbsp;Không sử dụng các chất làm màu, hóa chất độc. Khi mua jeans, khách hàng được tặng gói hút ẩm để bảo quản sp tối ưu<br style=\"margin: 0px; padding: 0px;\">-&nbsp;Có độ bền cao, hạn chế phai, bạc màu: Khóa YKK, cúc được sản xuất riêng. Quá trình giặt cầm màu cho màu bền hơn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Đen</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size 27:</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chiều cao: 1m68<br style=\"margin: 0px; padding: 0px;\">Cân nặng: 52kg<br style=\"margin: 0px; padding: 0px;\">Số đo 3 vòng: 83-62-95cm</p><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Quần</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ống đứng</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ngang mắt cá chân</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Denim</td></tr></tbody></table>', 1),
(31, 'Quần yếm jeans bạc màu MS 18B8018', 'quan-yem-jeans-bac-mau-ms-18b8018', 1090000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Quần yếm jeans, cổ ngang, có hai dây đeo vai điều chỉnh được bằng khóa kim loại. Có 2 túi vuông có nắp&nbsp;phía trước và túi vuông phía sau.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Với thiết kế này bạn có thể dễ dàng hô biến thành&nbsp;cô nàng trẻ trung, khỏe khoắn. Ngoài ra còn giúp bạn có được sự đổi mới trong phong cách và cũng dễ dàng hơn cho bạn trong việc chọn và phối đồ. Cô nàng không nên bỏ qua item này cho những dịp đi chơi, dạo phố nhé.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Xanh Lơ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size S:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; list-style: none; color: rgb(51, 51, 51);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chiều cao:</strong></span>&nbsp;1m65</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cân nặng:</strong></span>&nbsp;48kg</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Số đo 3 vòng</strong></span>: 80-62-89</li></ul><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Jumpsuit</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cổ áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Cổ khác</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Tay áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Không tay</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Xuông</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Denim</td></tr></tbody></table>', 1),
(32, 'Quần jeans ống suông MS 25B8845', 'quan-jeans-ong-suong-ms-25b8845', 990000, 1, 20, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Quần jeans cạp cao có đỉa. Dáng suông,&nbsp;Có túi phía trước và 2 túi vuông&nbsp;phía sau. Cài khóa kéo và khuy kim loại.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chất liệu với hơn 95% cotton mềm mại, thoáng mát &amp; an toàn cho làn da nhạy cảm nhất.&nbsp;Những chiếc quần Jean có thể nói bất cứ ai cũng có thể mặc được dòng sản phẩm này, dù là đi chơi, đi học, hay đi làm.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Xanh Lơ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size 27:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; list-style: none; color: rgb(51, 51, 51);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chiều cao:</strong></span>&nbsp;1m65</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cân nặng:</strong></span>&nbsp;48kg</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Số đo 3 vòng</strong></span>: 80-62-89</li></ul><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Quần</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ống suông</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Qua mắt cá chân</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Denim</td></tr></tbody></table>', 1),
(33, 'Áo len tay hến MS 57B8040', 'ao-len-tay-hen-ms-57b8040', 690000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Áo len tay hến, cổ cách điệu. Dáng áo xuông. Gấu có viền len gân co giãn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Được thiết kế kiểu dáng thời trang, thích hợp mix với nhiều trang phục khác nhau: Zuýp, quần Jeans, legging....Với chất len mềm, mịn chiếc áo sẽ trở nên item đắt giá trong mùa Thu Đông này.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Hồng san hô - Nâu cà phê - Be</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size S:</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chiều cao: 1m68<br style=\"margin: 0px; padding: 0px;\">Cân nặng: 52kg<br style=\"margin: 0px; padding: 0px;\">Số đo 3 vòng: 83-62-95cm</p><div><br></div>', 1),
(34, 'Áo len tay hến MS 57B8040', 'ao-len-tay-hen-ms-57b8040-507', 690000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Áo len tay hến, cổ cách điệu. Dáng áo xuông. Gấu có viền len gân co giãn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Được thiết kế kiểu dáng thời trang, thích hợp mix với nhiều trang phục khác nhau: Zuýp, quần Jeans, legging....Với chất len mềm, mịn chiếc áo sẽ trở nên item đắt giá trong mùa Thu Đông này.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Hồng san hô - Nâu cà phê - Be</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size S:</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chiều cao: 1m68<br style=\"margin: 0px; padding: 0px;\">Cân nặng: 52kg<br style=\"margin: 0px; padding: 0px;\">Số đo 3 vòng: 83-62-95cm</p><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Áo</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cổ áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Cổ khác</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Tay áo</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Tay hến</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Xuông</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Dài thường</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Len</td></tr></tbody></table>', 1),
(35, 'Zuýp bò chữ A MS 32B8054', 'zuyp-bo-chu-a-ms-32b8054', 1090000, 1, 10, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Zuýp bò dáng chữ A. Có 4 túi vuông. Cạp cao có đỉa. Gấu xẻ phía trước. Cài bằng dây kéo và khuy kim loại.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Chất liệu với hơn 95% cotton mềm mại, thoáng mát &amp; an toàn cho làn da nhạy cảm nhất. Vải kiểu bạc màu tạo cảm giác mới mẻ trong tủ đồ của bạn. Dễ dàng mix với áo thun, áo sơ mi các loại.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">Màu sắc: Xanh Lơ</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Mẫu mặc size S:</strong></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: Helvetica, Arial, sans-serif; vertical-align: baseline; list-style: none; color: rgb(51, 51, 51);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chiều cao:</strong></span>&nbsp;1m65</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Cân nặng:</strong></span>&nbsp;48kg</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Số đo 3 vòng</strong></span>: 80-62-89</li></ul><p><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></p><table class=\"\" width=\"70%\" style=\"margin: 0px; padding: 0px; border-spacing: 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Dòng sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">You</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Nhóm sản phẩm</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Zuýp</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Kiểu dáng</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Chữ A</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Độ dài</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Ngang bắp</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Họa tiết</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Trơn</td></tr><tr style=\"margin: 0px; padding: 0px;\"><td style=\"margin: 0px; padding: 0px 0px 5px;\"><b style=\"margin: 0px; padding: 0px; font-weight: bold;\">Chất liệu</b></td><td style=\"margin: 0px; padding: 0px 0px 5px;\">Denim</td></tr></tbody></table>', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(100, 29, 54),
(101, 29, 59),
(102, 28, 54),
(103, 28, 66),
(104, 30, 54),
(105, 30, 66),
(106, 31, 54),
(107, 31, 66),
(108, 32, 54),
(109, 32, 66),
(110, 33, 54),
(111, 33, 59),
(112, 34, 54),
(113, 34, 59),
(114, 35, 54),
(115, 35, 63);

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
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
