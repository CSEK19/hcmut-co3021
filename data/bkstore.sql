SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE
IF NOT EXISTS `bkstore` DEFAULT CHARACTER
SET utf8mb4
COLLATE utf8mb4_general_ci;
USE `bkstore`;

CREATE TABLE `category`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `category` (`
id`,
`name
`) VALUES
(1, 'Vsmart'),
(2, 'iPhone'),
(3, 'Samsung'),
(102, 'Xiaomi'),
(104, 'Oppo'),
(105, 'Nokia'),
(109, 'Apple');

CREATE TABLE `feedback`
(
  `id` int
(11) NOT NULL,
  `note` varchar
(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int
(11) DEFAULT NULL,
  `product_id` int
(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int
(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `feedback` (`
id`,
`note
`, `user_id`, `product_id`, `created_at`, `updated_at`, `status`) VALUES
(53, 'Chủ đề Hello- Nội dung Tester', 55, 48, '2022-12-05 07:17:08', '2022-06-05 07:17:08', 0),
(54, 'Good!', 55, 21, '2022-12-05 07:17:29', '2022-06-05 07:17:29', 0),
(55, 'Chủ đề Test_2- Nội dung None', 55, 48, '2022-12-05 07:20:33', '2022-06-05 07:20:33', 0),
(56, 'Chủ đề Tester- Nội dung Tester', 56, 48, '2022-12-05 07:21:07', '2022-06-05 09:11:27', 0),
(57, 'Chủ đề Alo- Nội dung Alo', 55, 48, '2022-12-05 09:46:55', '2022-06-05 09:47:25', 0);

CREATE TABLE `orders`
(
  `id` int
(11) NOT NULL,
  `fullname` varchar
(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar
(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar
(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int
(11) NOT NULL,
  `status` int
(11) NOT NULL DEFAULT 0,
  `deleted` int
(11) NOT NULL DEFAULT 0,
  `address` varchar
(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `total_money` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`
id`,
`fullname
`, `email`, `phone`, `user_id`, `status`, `deleted`, `address`, `created_at`, `total_money`) VALUES
(43, 'tester', 'tester@gmail.com', '1234', 56, 3, 0, 'HCMUT', '2022-01-01 06:38:29', 169950000),
(44, 'tester', 'tester@gmail.com', '12345', 56, 3, 0, 'HCMUT2', '2022-02-02 11:39:03', 30900000),
(45, 'tester_1', 'tester_1@gmail.com', '1234', 56, 3, 0, 'tester_1', '2022-03-03 06:48:12', 5490000),
(46, 'tester2', 'tester2@gmail.com', '1234', 56, 3, 0, '1234', '2022-04-04 06:51:26', 5490000),
(47, 'tester', '1234@gmailc.om', '1234', 56, 3, 0, '1234', '2022-05-05 11:51:58', 25000000),
(48, 'tester', 'tester@gmail.com', '1234', 56, 3, 0, 'HCMUT', '2022-06-06 07:08:56', 35050000),
(49, 'tester', 'tester@gmail.com', '1234', 56, 3, 0, 'HCMUT', '2022-07-07 07:09:12', 21990000),
(50, 'tester', 'tester@gmail.com', '1234', 56, 3, 0, '1234', '2022-08-08 07:09:29', 8990000),
(51, 'tester2', 'tester2@gmail.com', '1234', 56, 3, 0, '1234', '2022-09-09 07:10:22', 6090000),
(52, 'tester2', '1@yahoo.com', '1234', 56, 3, 0, '1234', '2022-10-10 07:11:34', 28000000),
(53, 'tester2', 'test@gmail.com', '1234', 56, 3, 0, '1234', '2022-11-11 07:11:51', 25990000),
(54, 'tester', 'tester@gmail.com', '1234', 56, 3, 0, 'HCMUT', '2022-12-12 07:12:07', 115970000),
(55, 'test_ip', '1234@yahoo.com', '1234', 56, 3, 0, '1234', '2022-06-05 14:40:25', 33990000),
(56, 'test_ip_2', 'tester2@gmail.com', '1234', 56, 3, 0, '1234', '2022-06-05 09:40:55', 33990000),
(57, 'tester2', 'da@yahoo.com.vn', '312312', 56, 3, 0, '123', '2022-11-08 16:21:36', 95990000),
(58, 'user', 'CSE@hcmtu.edu.vn', '123121', 56, 0, 0, 'CSE', '2022-11-30 13:16:37', 191980000);

CREATE TABLE `order_details`
(
  `id` int
(11) NOT NULL,
  `order_id` int
(11) DEFAULT NULL,
  `product_id` int
(11) DEFAULT NULL,
  `price` int
(11) DEFAULT NULL,
  `num` int
(11) DEFAULT NULL,
  `total_money` int
(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `order_details` (`
id`,
`order_id
`, `product_id`, `price`, `num`, `total_money`) VALUES
(78, 43, 21, 33990000, 5, 169950000),
(79, 44, 1, 30900000, 1, 30900000),
(80, 45, 33, 5490000, 1, 5490000),
(81, 46, 33, 5490000, 1, 5490000),
(82, 47, 7, 25000000, 1, 25000000),
(83, 48, 7, 25000000, 1, 25000000),
(84, 48, 35, 4950000, 1, 4950000),
(85, 48, 39, 5100000, 1, 5100000),
(86, 49, 45, 21990000, 1, 21990000),
(87, 50, 34, 8990000, 1, 8990000),
(88, 51, 37, 6090000, 1, 6090000),
(89, 52, 4, 28000000, 1, 28000000),
(90, 53, 18, 25990000, 1, 25990000),
(91, 54, 6, 23990000, 1, 23990000),
(92, 54, 7, 25000000, 1, 25000000),
(93, 54, 11, 40990000, 1, 40990000),
(94, 54, 18, 25990000, 1, 25990000),
(95, 55, 21, 33990000, 1, 33990000),
(96, 56, 21, 33990000, 1, 33990000),
(97, 57, 53, 95990000, 1, 95990000),
(98, 58, 53, 95990000, 2, 191980000);

CREATE TABLE `payments`
(
  `id` int
(11) NOT NULL,
  `order_id` int
(11) NOT NULL,
  `user_id` int
(11) NOT NULL,
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar
(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar
(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar
(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar
(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `product`
(
  `id` int
(11) NOT NULL,
  `category_id` int
(11) DEFAULT NULL,
  `title` varchar
(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int
(11) DEFAULT NULL,
  `discount` int
(11) DEFAULT NULL,
  `thumbnail` varchar
(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int
(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `product` (`
id`,
`category_id
`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 2, 'iPhone 12 Pro Max', 30900000, 32990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12-pro-max_3__10.jpg', '', '2021-10-22 07:46:26', '2021-10-22 07:46:26', 0),
(2, 2, 'iPhone 13 Pro | Chính hãng VN/A', 30990000, NULL, 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5.jpg', NULL, '2021-10-22 12:57:16', '2021-10-22 12:57:16', 0),
(3, 2, 'iPhone 11 128GB', 19000000, 19900000, 'https://image.cellphones.com.vn/358x/media/catalog/product/l/a/layer_19_1.jpg', '', '2021-10-22 12:57:16', '2021-10-22 12:57:16', 0),
(4, 2, 'iPhone 12 Pro', 28000000, 30990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12-pro-max_3__10.jpg', '', '2021-10-22 12:58:32', '2021-10-22 12:58:32', 0),
(5, 3, 'Samsung Galaxy Note 20 Ultra 5G', 21500000, 32990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/y/e/yellow_final_2.jpg', NULL, '2021-10-22 10:10:44', '2021-10-22 10:10:44', 0),
(6, 3, 'Samsung Galaxy Z Flip3 5G', 23990000, 24990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/8/0/800x800_flip_3_cream.png', NULL, '2021-10-22 10:10:44', '2021-10-22 10:10:44', 0),
(7, 3, 'Samsung Galaxy S21 Ultra 5G', 25000000, 30990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637462630853935725_ss-s21-ultra-den-1_1.jpg', NULL, '2021-10-22 10:12:40', '2021-10-22 10:12:40', 0),
(8, 3, 'Samsung Galaxy A72', 10100000, 11490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a72-30.jpg', NULL, '2021-10-22 10:12:40', '2021-10-22 10:12:40', 0),
(10, 3, 'Samsung Galaxy S20 FE 256GB (Fan Edition)', 12250000, 15490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-20-fe_4_.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(11, 3, 'Samsung Galaxy Z Fold3 5G', 40990000, 41990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/m/sm-f926_zfold3_5g_openback_phantomgreen_210602.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(12, 3, 'Samsung Galaxy A52s 5G', 10000000, 10990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/0/4/04_2_4.png', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(13, 3, 'Samsung Galaxy A32', 5650000, 6690000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a32-20.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(14, 3, 'Samsung Galaxy A12', 4150000, 4290000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a12_2_.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(15, 3, 'Samsung Galaxy A22 4G', 5600000, 5890000, 'https://image.cellphones.com.vn/358x/media/catalog/product/a/2/a22-2.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(16, 3, 'Samsung Galaxy Note 20 Ultra', 19200000, 29990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/b/l/black_final.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(17, 3, 'Samsung Galaxy S21 Plus 5G', 20400000, 25990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-s21-plus-3.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(18, 3, 'Samsung Galaxy Z Flip3 5G 256GB', 25990000, 26990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/8/0/800x800_flip_3_lavender.png', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(19, 3, 'Samsung Galaxy A52', 8750000, 9290000, 'https://image.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-a52-26.jpg', NULL, '2021-10-22 12:47:54', '2021-10-22 12:47:54', 0),
(20, 2, 'iPhone 13 | Chính hãng VN/A', 24990000, NULL, 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/ip13-pro_2.jpg', NULL, '2021-10-22 12:58:32', '2021-10-22 12:58:32', 0),
(21, 2, 'iPhone 13 Pro Max | Chính hãng VN/A', 33990000, NULL, 'https://image.cellphones.com.vn/358x/media/catalog/product/i/p/iphone_13-_pro-5_4.jpg', 'Miễn phí 4G tốc độ cao 10GB/ Tháng trong 18 tháng \n- Công nghệ Vsim ảo đầu tiên\nCấu hình vượt trội, trải nghiệm mạnh mẽ \n- Chip Helio G35 8 nhân, RAM 3GB\nMàn hình siêu rộng, xem phim thả ga - Màn hình IPS LCD 6.528 inch, viền siêu mỏng\nSử dụng cả ngày dài - Pin 5000mAh, sạc nhanh 15W', '2021-10-22 12:58:32', '2021-10-22 12:58:32', 0),
(22, 2, 'iPhone 11 I Chính hãng VN/A', 16900000, 18000000, 'https://image.cellphones.com.vn/358x/media/catalog/product/l/a/layer_20_1.jpg', 'Miễn phí 4G tốc độ cao 10GB/ Tháng trong 18 tháng \n- Công nghệ Vsim ảo đầu tiên\nCấu hình vượt trội, trải nghiệm mạnh mẽ \n- Chip Helio G35 8 nhân, RAM 3GB\nMàn hình siêu rộng, xem phim thả ga - Màn hình IPS LCD 6.528 inch, viền siêu mỏng\nSử dụng cả ngày dài - Pin 5000mAh, sạc nhanh 15W', '2021-10-22 12:58:32', '2021-10-22 12:58:32', 0),
(28, 1, 'Vsmart Star 5', 2690000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/v/s/vsmart-star-5-3_3.jpg', 'Miễn phí 4G tốc độ cao 10GB/ Tháng trong 18 tháng \n- Công nghệ Vsim ảo đầu tiên\nCấu hình vượt trội, trải nghiệm mạnh mẽ \n- Chip Helio G35 8 nhân, RAM 3GB\nMàn hình siêu rộng, xem phim thả ga - Màn hình IPS LCD 6.528 inch, viền siêu mỏng\nSử dụng cả ngày dài - Pin 5000mAh, sạc nhanh 15W', '2021-10-25 11:30:19', '2021-10-25 11:30:19', 0),
(29, 1, 'Vsmart Joy 4', 3290000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/v/s/vsmart-joy-4_2_.png', NULL, '2021-10-25 11:34:50', '2021-10-25 11:34:50', 0),
(30, 1, 'Vsmart Joy 4 4GB', 3590000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/v/s/vsmart-joy-4_1__2.png', NULL, '2021-10-25 11:34:50', '2021-10-25 11:34:50', 0),
(31, 1, 'Vsmart Live 4', 4290000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/v/s/vsmart-live-_4_3_.jpg', NULL, '2021-10-25 11:34:50', '2021-10-25 11:34:50', 0),
(32, 1, 'Vsmart Aris 6GB 64GB', 4490000, 5990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/1/1/11_1_4.png', NULL, '2021-10-25 11:34:50', '2021-10-25 11:34:50', 0),
(33, 1, 'Vsmart Aris Pro', 5490000, 8490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/1/1/11_2_2.png', NULL, '2021-10-25 11:38:36', '2021-10-25 11:38:36', 0),
(34, 102, 'Xiaomi Mi 11 Lite 5G', 8990000, 10490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-mi-11-lite-5g-2_10.png', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(35, 102, 'Xiaomi Redmi Note 10 5G', 4950000, 5290000, 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/redmi-note-10-5g.jpg', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(36, 102, 'Xiaomi Redmi 10 (4GB - 128GB)\r\n', 4290000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/0/0/001_2.jpg', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(37, 102, 'Xiaomi Redmi Note 10 Pro 8GB', 6090000, 7490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-redmi-note-10-pro_2_.png', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(38, 102, 'Xiaomi Redmi 10 (4GB - 64GB)', 3990000, 0, 'https://image.cellphones.com.vn/358x/media/catalog/product/0/0/004.jpg', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(39, 102, 'Xiaomi Redmi Note 10', 5100000, 5490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/x/i/xiaomi-redmi-note-10_1.jpg', NULL, '2021-10-25 11:40:29', '2021-10-25 11:40:29', 0),
(40, 104, 'OPPO Reno6 5G', 12490000, 12990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/r/e/reno6-1_1.jpg', '', NULL, NULL, 0),
(41, 104, 'Oppo Reno5', 7790000, 8690000, 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-reno-5_3_.jpg', '', NULL, NULL, 0),
(42, 104, 'OPPO Reno6 Z 5G', 9190000, 9490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo_reno6.jpg', '', NULL, NULL, 0),
(43, 104, 'Oppo A54', 4350000, 4690000, 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-a54-4g-black-600x600.jpg', '', NULL, NULL, 0),
(44, 104, 'Oppo A73', 5190000, 5490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-a73_1_.jpg', '', NULL, NULL, 0),
(45, 104, 'OPPO Find X3 Pro 5G', 21990000, 26990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/o/p/oppo-find-x3-pro-5g-3_2.jpg', '', NULL, NULL, 0),
(46, 2, NULL, NULL, NULL, NULL, NULL, '2021-11-16 16:24:20', '2021-11-16 16:24:20', 1),
(47, 2, 'áda', 30900000, 32990000, 'aq', 'aaq', '2021-11-16 16:25:24', '2021-11-16 16:25:24', 1),
(48, 104, NULL, NULL, NULL, NULL, NULL, '2021-11-16 16:25:58', '2021-11-16 16:25:58', 1),
(49, 105, 'Nokia X10 5G', 5190000, 5490000, 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-x10.jpg', NULL, NULL, NULL, 0),
(50, 105, 'Nokia G21', 3490000, 4290000, 'https://image.cellphones.com.vn/358x/media/catalog/product/t/h/thumb_602966_default_big.jpg', NULL, NULL, NULL, 0),
(51, 105, 'Nokia C21 Plus 3GB 64GB\r\n', 2890000, 3190000, 'https://image.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-c21-plus-600x600_2_1.jpg', NULL, NULL, NULL, 0),
(52, 105, 'Nokia C30 2GB 32GB\r\n', 2390000, 2999000, 'https://image.cellphones.com.vn/358x/media/catalog/product/6/3/637649100605269420_nokia-c30-xanh-1_5_1_.jpg', NULL, NULL, NULL, 0),
(53, 109, 'MacBook Pro 14 inch 2022', 95990000, 99990000, 'https://image.cellphones.com.vn/358x/media/catalog/product/m/a/macbook-pro-14-inch-2021-32gb-1tb-1_8.jpg', '', NULL, NULL, 0),
(54, 2, 'iPhone 14 Pro 256GB | Chính hãng VN/A', 3490000, 3290000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_m_18.png', 'iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.\r\n\r\n', NULL, NULL, 0);

CREATE TABLE `role`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role` (`
id`,
`name
`) VALUES
(1, 'User'),
(2, 'Admin');

CREATE TABLE `tokens`
(
  `user_id` int
(11) NOT NULL,
  `token` varchar
(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tokens` (`
user_id`,
`token
`, `created_at`) VALUES
(55, '0e60521fee975cd08f2997f22ae6b6be', '2022-06-05 06:35:37'),
(55, '7356e583b498f530b8ac06c49a174097', '2022-11-08 16:17:15'),
(55, 'a0309454496fffae79f389cb31e15e28', '2022-11-30 13:11:50'),
(56, '1d1d7bc20388626c9d6d0d5973af8b9a', '2022-06-05 06:38:00'),
(56, '6b45ffbd6bc70ee4d1c0dbfaf4f32a07', '2022-11-30 13:16:09'),
(56, '77d147a786c2b374cb8b448d938674c1', '2022-11-08 16:20:49'),
(56, 'fe5e548aae5b975896f0bfde84745d33', '2022-06-05 09:39:41');

CREATE TABLE `user`
(
  `id` int
(11) NOT NULL,
  `fullname` varchar
(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar
(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar
(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar
(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar
(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int
(11) DEFAULT NULL,
  `deleted` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user`
  (`id`, `fullname
`, `email`, `phone_number`, `address`, `password`, `role_id`, `deleted`) VALUES
(55, 'Admin', 'admin@gmail.com', '1234', '1234', 'b4cbd48886a5331c5eb2fedadabe311c', 2, 0),
(56, 'tester', 'tester@gmail.com', '1234', '1234', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0),
(57, 'tester2', 'tester2@gmail.com', '123456', '123456', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0),
(58, 'tester3', 'tester3@gmail.com', '1234', 'Address', 'b4cbd48886a5331c5eb2fedadabe311c', 1, 0);


ALTER TABLE `category`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `feedback`
ADD PRIMARY KEY
(`id`),
ADD KEY `userreview`
(`user_id`),
ADD KEY `productreview`
(`product_id`);

ALTER TABLE `orders`
ADD PRIMARY KEY
(`id`),
ADD KEY `fk_orderSuccess`
(`user_id`);

ALTER TABLE `order_details`
ADD PRIMARY KEY
(`id`),
ADD KEY `product_id`
(`product_id`),
ADD KEY `a`
(`order_id`);

ALTER TABLE `payments`
ADD PRIMARY KEY
(`id`),
ADD KEY `paymentUserid`
(`user_id`);

ALTER TABLE `product`
ADD PRIMARY KEY
(`id`),
ADD KEY `category_id`
(`category_id`);

ALTER TABLE `role`
ADD PRIMARY KEY
(`id`);

ALTER TABLE `tokens`
ADD PRIMARY KEY
(`user_id`,`token`);

ALTER TABLE `user`
ADD PRIMARY KEY
(`id`),
ADD KEY `role_id`
(`role_id`);


ALTER TABLE `category`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

ALTER TABLE `feedback`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

ALTER TABLE `orders`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

ALTER TABLE `order_details`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

ALTER TABLE `payments`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `product`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

ALTER TABLE `role`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `user`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;


ALTER TABLE `feedback`
ADD CONSTRAINT `productreview` FOREIGN KEY
(`product_id`) REFERENCES `product`
(`id`),
ADD CONSTRAINT `userreview` FOREIGN KEY
(`user_id`) REFERENCES `user`
(`id`);

ALTER TABLE `orders`
ADD CONSTRAINT `fk_orderSuccess` FOREIGN KEY
(`user_id`) REFERENCES `user`
(`id`);

ALTER TABLE `order_details`
ADD CONSTRAINT `a` FOREIGN KEY
(`order_id`) REFERENCES `orders`
(`id`),
ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY
(`product_id`) REFERENCES `product`
(`id`);

ALTER TABLE `payments`
ADD CONSTRAINT `paymentUserid` FOREIGN KEY
(`user_id`) REFERENCES `user`
(`id`);

ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY
(`category_id`) REFERENCES `category`
(`id`);

ALTER TABLE `tokens`
ADD CONSTRAINT `fk_token` FOREIGN KEY
(`user_id`) REFERENCES `user`
(`id`);

ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY
(`role_id`) REFERENCES `role`
(`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
