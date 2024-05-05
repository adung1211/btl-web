-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 03:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` int(11) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `address`, `role`) VALUES
(1, 'admin', NULL, '123', NULL, 1),
(2, 'user01', NULL, '123', NULL, 0),
(4, 'user02', NULL, '123', NULL, 0),
(5, 'user03', NULL, '123', NULL, 0),
(6, 'admin1', NULL, '123', NULL, 1),
(15, 'aaa', NULL, 'aaa', NULL, 0),
(16, 'bbb', NULL, 'bbb', NULL, 0),
(18, 'user', NULL, '123', NULL, 0),
(19, 'ccc', NULL, 'ccc', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  `read_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `msg`, `read_status`, `created_at`) VALUES
(1, 2, 'test msg', 'this is a notification message', 1, '2024-05-04 09:06:30'),
(2, 2, 'test msg 2', 'this is a second notification message', 1, '2024-05-04 09:06:38'),
(3, 4, 'hi', 'hello', 1, '2024-05-04 09:11:31'),
(4, 2, 'gg', 'third msg', 1, '2024-05-04 09:16:56'),
(5, 2, 'wwwwwww wwwwwwww wwwwwwwww fqihvnriopqwh nrbi puqwhnwvrip  uqwhnbrio uqrwhnbipruqwh nbriuqwbhriuq whn briuqwhbr iquwb hriuqwbhri oqwbhriquwb hrqwibur', 'wwwwwww wwwwwwww wwwwwwwww fqihvnriopqwh nrbi puqwhnwvrip  uqwhnbrio uqrwhnbipruqwh nbriuqwbhriuq whn briuqwhbr iquwb hriuqwbhri oqwbhriquwb hrqwibur', 1, '2024-05-04 10:42:24'),
(6, 2, 'ff', 'wwwwwffwfwfwwwwwwwwwwwwww', 1, '2024-05-04 10:43:51'),
(7, 2, 'gg', 'gsg', 1, '2024-05-04 10:45:40'),
(8, 2, '224', 'fsggg', 1, '2024-05-04 10:48:00'),
(9, 2, 'gs', 'gggggg', 1, '2024-05-04 10:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `note` text DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `total_money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `full_name`, `email`, `phone_number`, `address`, `note`, `order_date`, `status`, `total_money`) VALUES
(1, 1, 'John Doe', 'john@example.com', '1234567890', '123 Main St', 'Please deliver after 5pm', '2024-04-30 14:21:35', 'Processing', 100),
(2, 2, 'Jane Doe', 'jane@example.com', '0987654321', '456 Elm St', 'Leave at front door', '2024-04-30 14:21:35', 'Shipped', 200),
(23, 2, 'Dung', 'dung@gmail.com', '123456789', '365, ABC street', 'wwww', '2024-04-30 15:13:00', 'Pending', 4537000),
(24, 2, 'Thang', 'tranthangusername@gmail.com', '0913999442', '365, ABC street', 'aaaaaa', '2024-04-30 15:13:26', 'Pending', 10489000),
(25, 2, 'Tran Thang', 'tranthangusername@gmail.com', '0913999442', '365, ABC street', 'hello', '2024-05-04 07:29:46', 'Pending', 319000),
(26, 2, 'Tran Thang', 'user@gmail.com', '0913999442', '365, ABC street, sdfjhds', 'wwww', '2024-05-04 08:14:55', 'Pending', 10170000);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total_price`) VALUES
(1, 1, 1, 2, 50, 100),
(2, 2, 4, 1, 200, 200),
(3, 2, 2, 3, 50, 150),
(4, 1, 3, 1, 100, 100),
(11, 23, 3, 3, 319000, 957000),
(12, 23, 2, 2, 1790000, 3580000),
(13, 24, 4, 2, 4190000, 8380000),
(14, 24, 1, 1, 0, 0),
(15, 24, 3, 1, 319000, 319000),
(16, 24, 2, 1, 1790000, 1790000),
(17, 25, 3, 1, 319000, 319000),
(18, 26, 4, 2, 4190000, 8380000),
(19, 26, 2, 1, 1790000, 1790000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `manufacturer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warrant` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `img`, `price`, `manufacturer`, `warrant`, `description`, `deleted`) VALUES
(1, 'RTX 4060', 'Laptop', 'https://hanoicomputercdn.com/media/product/72807_card_man_hinh_asus_dual_rtx_4060_ti_o8g_gaming__1_.jpg', 0, '', '0', '', 0),
(2, 'Bàn phím cơ AKKO 5075B', 'Keyboard', 'https://product.hstatic.net/200000722513/product/akko-5075b-plus-white_81f0260e05a143fbb2a8916320338bbe_1024x1024.png', 1790000, 'Akko', '12 tháng', 'Layout: 85%\r\nKích thước: 335x 146 x 42 mm\r\nTrọng lượng: ~ 1.1Kg\r\nSwitch: AKKO Switch v3 Cream Yellow Pro\r\nTương thích: Windows / MacOS / Linux\r\n', 0),
(3, 'Chuột Rapoo M300 Silent Wireless Dark Grey', 'Mouse', 'https://product.hstatic.net/200000722513/product/70491_chuot_khong_day_rapoo_m300_silent_mau_den_wireless_bluetooth__2__3238f6169df24dd1935c939506a87321_1024x1024.jpg', 319000, 'Rapoo', '12 tháng', 'Có 3 màu: Dark Grey/Blue\r\nKết nối: Wireless Receiver / Bluetooth\r\nMã sản phẩm: Rapoo M300 Silent Wireless\r\nTương thích: iPad, Notebook, Macbook, PC, iMac\r\nĐộ phân giải: 600 - 1600 DPI\r\nCách kết nối: Bluetooth/ USB Receiver (đầu thu USB)\r\nĐộ dài dây / Khoảng cách kết nối: 10 m\r\nLoại pin: 1 viên pin AA\r\nTrọng lượng: 83g\r\nKích thước: 10.4 x 6.6 x 3.7 cm', 0),
(4, 'Màn hình AOC 27G4 27\" IPS 180Hz ', 'Screen', 'https://product.hstatic.net/200000722513/product/27g4_f_8c7f92b9ab874c36b153beecc1739f9c_1024x1024.png', 4190000, 'AOC', '36 tháng', 'Hỗ trợ đổi mới trong 7 ngày\r\nMàn hình AOC 27G4 IPS 180Hz là một lựa chọn tuyệt vời cho những game thủ đam mê trải nghiệm chơi game mượt mà và chất lượng hình ảnh cao. Với độ phân giải Full HD  (1920 x 1080) và tấm nền IPS mang lại hình ảnh sắc nét, màu sắc rực rỡ và góc nhìn rộng.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `username`, `rating`, `comment`, `created_at`) VALUES
(1, 4, 2, 'user01', 1, 'hello', '2024-05-05 13:11:04'),
(2, 4, 2, 'user01', 1, 'hello', '2024-05-05 13:12:12'),
(3, 4, 2, 'user01', 5, 'ngon', '2024-05-05 13:37:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notifications_account` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_account` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderline_orders` (`order_id`),
  ADD KEY `fk_orderline_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reviews_products` (`product_id`),
  ADD KEY `fk_reviews_account` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_orderline_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderline_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
