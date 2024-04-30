-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 12:40 PM
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
(7, 'user04', NULL, '123', NULL, 0),
(10, 'user01', NULL, '123', NULL, 0);

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
(7, 2, 'Thang', 'ddvio.gaming@gmail.com', '0913999442', '365, ABC street, sdfjhds', 'dsd', '2024-04-30 12:16:22', 'Pending', 0),
(8, 2, 'Thang', 'ddvio.gaming@gmail.com', '0913999442', '365, ABC street, sdfjhds', 'dsd', '2024-04-30 12:18:09', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total_price`) VALUES
(1, 1, 1, 2, 50, 100),
(2, 2, 4, 1, 200, 200),
(3, 2, 2, 3, 50, 150),
(4, 1, 3, 1, 100, 100);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_account` (`user_id`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderline_product` (`product_id`),
  ADD KEY `fk_orderline_orders` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `fk_orderline_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderline_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
