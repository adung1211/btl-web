-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 11:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `username` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
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
(19, 'ccc', NULL, 'ccc', NULL, 0),
(21, 'user04', NULL, '123', NULL, 0),
(22, 'user05', NULL, '123', NULL, 0),
(23, 'user06', NULL, '123', NULL, 0),
(25, 'user07', NULL, '123', NULL, 0),
(26, 'user08', NULL, '123', NULL, 0),
(27, 'user09', NULL, '123', NULL, 0),
(28, 'user10', NULL, '123', NULL, 0),
(29, 'user11', NULL, '123', NULL, 0),
(30, 'user12', NULL, '123', NULL, 0),
(31, 'user13', NULL, '123', NULL, 0),
(32, 'user14', NULL, '123', NULL, 0),
(33, 'user15', NULL, '123', NULL, 0),
(34, 'user16', NULL, '123', NULL, 0),
(35, 'user17', NULL, '123', NULL, 0),
(36, 'user18', NULL, '123', NULL, 0),
(37, 'user19', NULL, '123', NULL, 0),
(38, 'user20', NULL, '123', NULL, 0),
(39, 'user21', NULL, '123', NULL, 0),
(40, 'user22', NULL, '213', NULL, 0),
(41, 'user23', NULL, '123', NULL, 0),
(42, 'user24', NULL, '123', NULL, 0),
(43, 'user25', NULL, '123', NULL, 0),
(44, 'user26', NULL, '123', NULL, 0),
(45, 'user27', NULL, '123', NULL, 0),
(46, 'user28', NULL, '123', NULL, 0),
(47, 'user29', NULL, '123', NULL, 0),
(48, 'user30', NULL, '123', NULL, 0),
(49, 'user31', NULL, '123', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  `read_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, 2, 'gs', 'gggggg', 1, '2024-05-04 10:53:53'),
(10, 1, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 0, '2024-05-05 16:40:05'),
(11, 2, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 1, '2024-05-05 16:40:13'),
(12, 2, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 1, '2024-05-06 03:49:26'),
(13, 2, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 1, '2024-05-06 03:49:47'),
(14, 1, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 0, '2024-05-06 04:59:23'),
(15, 2, 'Đơn hàng đã được xác nhận', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 0, '2024-05-06 04:59:28'),
(16, 2, 'Tình trạng đơn hàng đã được thay đổi', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 1, '2024-05-06 05:08:43'),
(17, 2, 'Tình trạng đơn hàng đã được thay đổi', 'Cảm ơn bạn đã mua hàng tại shop chúng tôi', 1, '2024-05-06 05:08:55'),
(18, 2, 'Đơn hàng đã được xác nhận', 'Shop đã nhận được đơn đặt hàng và đang đưa tới bạn trong thời gian sớm nhất', 0, '2024-05-06 06:13:09'),
(19, 2, 'Đơn hàng đã giao thanh cồng', 'Cảm ơn quý khách đã tin tưởng mua hàng tại website chúng tôi', 0, '2024-05-06 06:13:44'),
(20, 2, 'Đơn hàng đã bị huỷ', 'Rất tiếc đơn hàng của bạn đã bị huỷ', 0, '2024-05-06 08:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `note` text DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `full_name`, `email`, `phone_number`, `address`, `note`, `order_date`, `status`, `total_money`) VALUES
(1, 1, 'John Doe', 'john@example.com', '1234567890', '123 Main St', 'Please deliver after 5pm', '2024-04-30 14:21:35', 'Shipped', 100),
(2, 2, 'Jane Doe', 'jane@example.com', '0987654321', '456 Elm St', 'Leave at front door', '2024-04-30 14:21:35', 'Canceled', 200),
(23, 2, 'Dung', 'dung@gmail.com', '123456789', '365, ABC street', 'wwww', '2024-04-30 15:13:00', 'Shipped', 4537000),
(24, 2, 'Thang', 'tranthangusername@gmail.com', '0913999442', '365, ABC street', 'aaaaaa', '2024-04-30 15:13:26', 'Shipped', 10489000),
(25, 2, 'Tran Thang', 'tranthangusername@gmail.com', '0913999442', '365, ABC street', 'hello', '2024-05-04 07:29:46', 'Canceled', 319000),
(26, 2, 'Tran Thang', 'user@gmail.com', '0913999442', '365, ABC street, sdfjhds', 'wwww', '2024-05-04 08:14:55', 'Pending', 10170000),
(27, 2, 'Test', 'tsest@gmail.com', '21938129', '12938129', '891283912', '2024-05-06 12:07:40', 'Shipped', 5370000),
(28, 2, 'test', 'test@gmail.com', '3921389218', '1283912', 'askdjask', '2024-05-06 13:12:35', 'Shipped', 3580000),
(29, 21, 'Pham Kiet', '123@yahoo.com', '123', '123 ABC', 'Vui lòng giao nhanh nhất có thể.', '2024-05-06 17:38:34', 'Pending', 11109000),
(30, 22, 'Nguyen Thi Hang', 'hang.nguyen@example.com', '0987654321', '456 Phan Xích Long', '', '2024-05-07 03:44:37', 'Pending', 6140000),
(31, 23, 'Trần Văn Nam', 'nam.tran@example.com', '0123456789', '789 Lê Lợi', 'Giao nhanh nhé !!!', '2024-05-07 03:45:59', 'Pending', 5330000),
(32, 23, 'Lê Thị Mai', 'mai.le@example.com', '0901234567', '321 Điện Biên Phủ', '', '2024-05-07 03:47:06', 'Pending', 8360000),
(33, 25, 'Phạm Văn Hoàng', 'hoang.pham@example.com', '0976543210', '147 Nguyễn Văn Linh', '', '2024-05-07 03:48:19', 'Pending', 24580000),
(34, 26, 'Đỗ Minh Tuấn', 'tuan.do@example.com', '0965432109', '369 Nguyễn Trãi', '123\r\n', '2024-05-07 03:49:41', 'Pending', 7270000),
(35, 27, 'Nguyễn Văn A', 'van.a.nguyen@example.com', '0987123456', '555 Trần Hưng Đạo', '1234', '2024-05-07 03:50:42', 'Pending', 22200000),
(36, 28, 'Trần Thị B', 'b.tran@example.com', '0908765432', '888 Điện Biên Phủ', 'Giao hàng cẩn thận !!!', '2024-05-07 04:24:27', 'Pending', 18880000),
(37, 29, 'Hoàng Văn C', 'van.c.hoang@example.com', '0912345678', '777 Lê Lai', '', '2024-05-07 04:25:13', 'Pending', 70570000),
(38, 30, 'Phan Thị D', 'd.phan@example.com', '0932109876', '666 Võ Văn Tần', 'Nhớ gói kỹ hàng !!!', '2024-05-07 04:26:19', 'Pending', 24040000),
(39, 31, 'Nguyễn Văn E', 'van.e.nguyen@example.com', '0945678901', '999 Lý Tự Trọng', '', '2024-05-07 04:27:10', 'Pending', 47820000),
(40, 32, 'Lê Thị F', 'f.le@example.com', '0956789012', '111 Đinh Tiên Hoàng', '', '2024-05-07 04:27:50', 'Pending', 789000),
(41, 33, 'Trần Văn G', 'van.g.tran@example.com', '0987654321', '222 Trương Định', '', '2024-05-07 04:29:01', 'Pending', 67990000),
(42, 34, 'Nguyễn Thị H', 'h.nguyen@example.com', '0923456789', '333 Lý Thường Kiệt', 'Giao từ từ cũng được', '2024-05-07 04:29:46', 'Pending', 11870000),
(43, 35, 'Phạm Văn I', 'van.i.pham@example.com', '0912876543', '444 Nguyễn Văn Cừ', 'Bao bọc kĩ nha shop', '2024-05-07 04:30:29', 'Pending', 31180000),
(44, 36, 'Đỗ Thị K', 'k.do@example.com', '0934567890', '555 Trần Hưng Đạo', 'Hàng đẹp quá', '2024-05-07 04:31:20', 'Pending', 8450000),
(45, 37, 'Trần Văn L', 'van.l.tran@example.com', '0965432109', '666 Võ Văn Tần', '', '2024-05-07 04:32:01', 'Pending', 21209000),
(46, 38, 'Lê Thị M', 'm.le@example.com', '0909876543', '777 Lê Lai', 'Sản phẩm có vẻ tốt', '2024-05-07 04:32:52', 'Pending', 113209000),
(47, 39, 'Nguyễn Văn N', 'van.n.nguyen@example.com', '0987654321', '888 Điện Biên Phủ', 'Màn hình rẻ thế !!', '2024-05-07 04:33:47', 'Pending', 23310000),
(48, 40, 'Trần Thị P', 'p.tran@example.com', '0943210987', '999 Lý Tự Trọng', '', '2024-05-07 04:35:04', 'Pending', 10730000),
(49, 41, 'Hoàng Thị Q', 'q.hoang@example.com', '0912345678', '112 Đinh Tiên Hoàng', 'Mắc thế ', '2024-05-07 04:36:03', 'Pending', 31999000),
(50, 42, 'Nguyễn Văn R', 'van.r.nguyen@example.com', '0923456789', '221 Trương Định', '', '2024-05-07 04:36:44', 'Pending', 81990000),
(51, 43, 'Trần Thị S', 's.tran@example.com', '0934567890', '333 Lý Thường Kiệt', '', '2024-05-07 04:37:34', 'Pending', 2559000),
(52, 44, 'Lê Văn T', 'van.t.le@example.com', '0945678901', '444 Nguyễn Văn Cừ', '', '2024-05-07 04:38:10', 'Pending', 14480000),
(53, 45, 'Phạm Thị U', 'u.pham@example.com', '0956789012', '555 Trần Hưng Đạo', '', '2024-05-07 04:38:46', 'Pending', 10750000),
(54, 46, 'Đỗ Văn V', 'van.v.do@example.com', '0967890123', '666 Võ Văn Tần', 'Chuột mau hỏng quá', '2024-05-07 04:39:24', 'Pending', 1260000),
(55, 47, 'Nguyễn Thị X', 'x.nguyen@example.com', '0978901234', '778 Lê Lai', '', '2024-05-07 04:40:02', 'Pending', 5840000),
(56, 48, 'Trần Văn Y', 'van.y.tran@example.com', '0989012345', '888 Điện Biên Phủ', 'Đẹp nhưng đắt', '2024-05-07 04:40:40', 'Pending', 10800000),
(57, 49, 'Lê Thị Z', 'z.le@example.com', '0990123456', '997 Lý Tự Trọng', 'Bàn phím đủ màu sắc', '2024-05-07 04:41:24', 'Pending', 2380000),
(58, 49, ' Phạm Văn W', 'van.w.pham@example.com', '0901234567', '123 ABC', 'Màn hình rẻ vậy shop', '2024-05-07 04:41:56', 'Pending', 3540000),
(59, 49, 'Phạm Thị K', 'k.pham@example.com', '0990123456', '808 ABC', '', '2024-05-07 04:42:45', 'Pending', 13710000),
(60, 29, 'Trần Văn Yên', 'van.yen.tran@example.com', '0989012346', '880 Điện Biên Phủ', '', '2024-05-07 04:43:36', 'Pending', 2380000),
(61, 30, 'John Smith', 'john.smith@example.com', '0123456789', '123 Main Street', 'Please make a fast delivery for me !', '2024-05-07 11:28:47', 'Pending', 1939000),
(62, 30, 'Maria Garcia', 'maria.garcia@example.com', '0213456789', '456 Elm Street', '123', '2024-05-07 11:29:50', 'Pending', 43650000),
(63, 33, 'David Johnson', 'david.johnson@example.com', '0321456789', '789 Oak Avenue', 'Please ship for me as quick as possible', '2024-05-07 11:31:24', 'Pending', 42990000),
(64, 39, 'Emily Brown', 'emily.brown@example.com', '0412356789', '321 Pine Road', 'I like your e-store bro !!!', '2024-05-07 11:32:37', 'Pending', 101569000),
(65, 43, 'Michael Wang', 'michael.wang@example.com', '0541236789', '555 Cedar Lane', 'very cheap !!', '2024-05-07 11:33:39', 'Pending', 45259000);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(19, 26, 2, 1, 1790000, 1790000),
(20, 27, 2, 3, 1790000, 5370000),
(21, 28, 2, 2, 1790000, 3580000),
(22, 29, 1, 1, 9000000, 9000000),
(23, 29, 2, 1, 1790000, 1790000),
(24, 29, 3, 1, 319000, 319000),
(25, 30, 4, 1, 4190000, 4190000),
(26, 30, 21, 1, 1950000, 1950000),
(27, 31, 15, 1, 390000, 390000),
(28, 31, 27, 1, 590000, 590000),
(29, 31, 22, 1, 4350000, 4350000),
(30, 32, 16, 1, 420000, 420000),
(31, 32, 20, 1, 1800000, 1800000),
(32, 32, 22, 1, 4350000, 4350000),
(33, 32, 2, 1, 1790000, 1790000),
(34, 33, 1, 1, 9000000, 9000000),
(35, 33, 15, 1, 390000, 390000),
(36, 33, 18, 1, 1750000, 1750000),
(37, 33, 24, 1, 12990000, 12990000),
(38, 33, 17, 1, 450000, 450000),
(39, 34, 23, 2, 1490000, 2980000),
(40, 34, 26, 1, 4290000, 4290000),
(41, 35, 23, 1, 1490000, 1490000),
(42, 35, 25, 1, 19990000, 19990000),
(43, 35, 29, 1, 720000, 720000),
(44, 36, 21, 1, 1950000, 1950000),
(45, 36, 1, 1, 9000000, 9000000),
(46, 36, 28, 1, 5790000, 5790000),
(47, 36, 30, 1, 1250000, 1250000),
(48, 36, 35, 1, 890000, 890000),
(49, 37, 23, 1, 1490000, 1490000),
(50, 37, 36, 1, 1090000, 1090000),
(51, 37, 38, 1, 67990000, 67990000),
(52, 38, 2, 1, 1790000, 1790000),
(53, 38, 17, 1, 450000, 450000),
(54, 38, 21, 1, 1950000, 1950000),
(55, 38, 32, 1, 19850000, 19850000),
(56, 39, 22, 1, 4350000, 4350000),
(57, 39, 23, 1, 1490000, 1490000),
(58, 39, 24, 1, 12990000, 12990000),
(59, 39, 25, 1, 19990000, 19990000),
(60, 39, 1, 1, 9000000, 9000000),
(61, 40, 15, 1, 390000, 390000),
(62, 40, 14, 1, 80000, 80000),
(63, 40, 3, 1, 319000, 319000),
(64, 41, 38, 1, 67990000, 67990000),
(65, 42, 28, 1, 5790000, 5790000),
(66, 42, 26, 1, 4290000, 4290000),
(67, 42, 2, 1, 1790000, 1790000),
(68, 43, 1, 1, 9000000, 9000000),
(69, 43, 15, 1, 390000, 390000),
(70, 43, 20, 1, 1800000, 1800000),
(71, 43, 25, 1, 19990000, 19990000),
(72, 44, 2, 1, 1790000, 1790000),
(73, 44, 16, 1, 420000, 420000),
(74, 44, 21, 1, 1950000, 1950000),
(75, 44, 26, 1, 4290000, 4290000),
(76, 45, 3, 1, 319000, 319000),
(77, 45, 17, 1, 450000, 450000),
(78, 45, 27, 1, 590000, 590000),
(79, 45, 32, 1, 19850000, 19850000),
(80, 46, 4, 1, 4190000, 4190000),
(81, 46, 18, 1, 1750000, 1750000),
(82, 46, 23, 1, 1490000, 1490000),
(83, 46, 28, 1, 5790000, 5790000),
(84, 46, 33, 1, 31999000, 31999000),
(85, 46, 38, 1, 67990000, 67990000),
(86, 47, 14, 1, 80000, 80000),
(87, 47, 19, 1, 1790000, 1790000),
(88, 47, 24, 1, 12990000, 12990000),
(89, 47, 34, 1, 8450000, 8450000),
(90, 48, 20, 1, 1800000, 1800000),
(91, 48, 26, 1, 4290000, 4290000),
(92, 48, 17, 1, 450000, 450000),
(93, 48, 4, 1, 4190000, 4190000),
(94, 49, 33, 1, 31999000, 31999000),
(95, 50, 38, 1, 67990000, 67990000),
(96, 50, 39, 1, 9650000, 9650000),
(97, 50, 22, 1, 4350000, 4350000),
(98, 51, 3, 1, 319000, 319000),
(99, 51, 17, 1, 450000, 450000),
(100, 51, 2, 1, 1790000, 1790000),
(101, 52, 23, 1, 1490000, 1490000),
(102, 52, 24, 1, 12990000, 12990000),
(103, 53, 1, 1, 9000000, 9000000),
(104, 53, 18, 1, 1750000, 1750000),
(105, 54, 15, 1, 390000, 390000),
(106, 54, 16, 1, 420000, 420000),
(107, 54, 17, 1, 450000, 450000),
(108, 55, 22, 1, 4350000, 4350000),
(109, 55, 23, 1, 1490000, 1490000),
(110, 56, 26, 1, 4290000, 4290000),
(111, 56, 28, 1, 5790000, 5790000),
(112, 56, 29, 1, 720000, 720000),
(113, 57, 2, 1, 1790000, 1790000),
(114, 57, 27, 1, 590000, 590000),
(115, 58, 18, 1, 1750000, 1750000),
(116, 58, 19, 1, 1790000, 1790000),
(117, 59, 24, 1, 12990000, 12990000),
(118, 59, 29, 1, 720000, 720000),
(119, 60, 2, 1, 1790000, 1790000),
(120, 60, 27, 1, 590000, 590000),
(121, 61, 66, 1, 99000, 99000),
(122, 61, 61, 1, 450000, 450000),
(123, 61, 62, 1, 1390000, 1390000),
(124, 62, 55, 1, 12390000, 12390000),
(125, 62, 52, 1, 12890000, 12890000),
(126, 62, 47, 1, 4990000, 4990000),
(127, 62, 50, 1, 4390000, 4390000),
(128, 62, 51, 1, 8990000, 8990000),
(129, 63, 70, 1, 8990000, 8990000),
(130, 63, 54, 1, 15500000, 15500000),
(131, 63, 56, 1, 18500000, 18500000),
(132, 64, 53, 1, 999000, 999000),
(133, 64, 55, 1, 12390000, 12390000),
(134, 64, 60, 1, 17990000, 17990000),
(135, 64, 38, 1, 67990000, 67990000),
(136, 64, 46, 1, 950000, 950000),
(137, 64, 30, 1, 1250000, 1250000),
(138, 65, 68, 1, 2890000, 2890000),
(139, 65, 2, 1, 1790000, 1790000),
(140, 65, 45, 1, 890000, 890000),
(141, 65, 64, 1, 3490000, 3490000),
(142, 65, 65, 1, 3650000, 3650000),
(143, 65, 43, 1, 550000, 550000),
(144, 65, 33, 1, 31999000, 31999000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `price` int(11) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `warrant` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `img`, `price`, `manufacturer`, `warrant`, `description`, `deleted`) VALUES
(1, 'MSI GeForce RTX™ 4060 GAMING X 8G – 8GB GDDR6', 'VGA', 'https://hanoicomputercdn.com/media/product/72807_card_man_hinh_asus_dual_rtx_4060_ti_o8g_gaming__1_.jpg', 9000000, 'MSI', '36 tháng', 'Vẻ ngoài hầm hố với những chi tiết góc cạnh được gia công một cách tỉ mỉ. Kết hợp với đó là các dải đèn led chiếu sáng thông minh giúp VGA MSI GeForce RTX 4060 Ti GAMING X TRIO 8G GDDR6 thêm phần độc đáo cho không gian giải trí của bạn.', 0),
(2, 'Bàn phím cơ AKKO 5075B', 'Keyboard', 'https://product.hstatic.net/200000722513/product/akko-5075b-plus-white_81f0260e05a143fbb2a8916320338bbe_1024x1024.png', 1790000, 'Akko', '12 tháng', 'Layout: 85%\r\nKích thước: 335x 146 x 42 mm\r\nTrọng lượng: ~ 1.1Kg\r\nSwitch: AKKO Switch v3 Cream Yellow Pro\r\nTương thích: Windows / MacOS / Linux\r\n', 0),
(3, 'Chuột Rapoo M300 Silent Wireless Dark Grey', 'Mouse', 'https://product.hstatic.net/200000722513/product/70491_chuot_khong_day_rapoo_m300_silent_mau_den_wireless_bluetooth__2__3238f6169df24dd1935c939506a87321_1024x1024.jpg', 319000, 'Rapoo', '12 tháng', 'Có 3 màu: Dark Grey/Blue\r\nKết nối: Wireless Receiver / Bluetooth\r\nMã sản phẩm: Rapoo M300 Silent Wireless\r\nTương thích: iPad, Notebook, Macbook, PC, iMac\r\nĐộ phân giải: 600 - 1600 DPI\r\nCách kết nối: Bluetooth/ USB Receiver (đầu thu USB)\r\nĐộ dài dây / Khoảng cách kết nối: 10 m\r\nLoại pin: 1 viên pin AA\r\nTrọng lượng: 83g\r\nKích thước: 10.4 x 6.6 x 3.7 cm', 0),
(4, 'Màn hình AOC 27G4 27\" IPS 180Hz ', 'Screen', 'https://product.hstatic.net/200000722513/product/27g4_f_8c7f92b9ab874c36b153beecc1739f9c_1024x1024.png', 4190000, 'AOC', '36 tháng', 'Hỗ trợ đổi mới trong 7 ngày\r\nMàn hình AOC 27G4 IPS 180Hz là một lựa chọn tuyệt vời cho những game thủ đam mê trải nghiệm chơi game mượt mà và chất lượng hình ảnh cao. Với độ phân giải Full HD  (1920 x 1080) và tấm nền IPS mang lại hình ảnh sắc nét, màu sắc rực rỡ và góc nhìn rộng.', 0),
(14, 'Chuột có dây Logitech B100 910-006605', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-co-day-logitech-b100-910-001439-0-b8188ffa-50ca-43e4-bea8-52be8fabc00c.png?v=1646381188227', 80000, 'Logitech', '12 tháng', 'Logitech B100 sở hữu chất lượng và thiết kế mà Logitech đã đưa vào hơn 1 tỷ con chuột, nhiều hơn bất kỳ nhà sản xuất nào khác. Với chất lượng và độ tin cậy cao đã đưa Logitech trở thành hãng dẫn đầu toàn cầu về chuột.', 0),
(15, 'Chuột gaming Logitech G102 LIGHTSYNC RGB', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-gaming-logitech-g102-lightsync-rgb-1.jpg?v=1707322085437', 390000, 'Logitech', '12 tháng', 'Chuột Logitech G102 được các game thủ trên thế giới yêu thích và là món đồ ưa chuộng của những người chơi thể thao điện tử chuyên nghiệp, là kiểu thiết kế quen thuộc cùng tối ưu hóa từ trong ra ngoài để đạt độ linh hoạt và sự thoải mái trong sử dụng hàng ngày.', 0),
(16, 'Chuột Gaming Asus TUF Gaming M3 Gen II 90MP0320-BMUA00', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-gaming-asus-tuf-gaming-m3-gen-ii-90mp0320-bmua00-1.jpg?v=1713796075693', 420000, 'Asus', '24 tháng', 'Chuột Gaming Asus TUF Gaming M3 Gen II nhỏ gọn và nhẹ nhàng với trọng lượng chỉ 59g. Vỏ ngoài được thiết kế cong giúp tăng cường khả năng cầm nắm và kiểm soát cho những chuyển động nhanh và linh hoạt trong suốt trận đấu. Nhẹ hơn 30% so với thế hệ trước', 0),
(17, 'Chuột không dây Logitech Pebble Mouse 2 M350s', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-khong-day-logitech-pebble-m350s-1.jpg?v=1694057573480', 450000, 'Logitech', '12 tháng', 'Chuột không dây Logitech Pebble M350s có thiết kế đặc biệt với hình dáng tròn, mỏng. Kích thước nhỏ gọn và trọng lượng nhẹ giúp tăng tính di động, cho bạn thỏa thích bỏ vào túi xách mang theo bất cứ khi nào, bất cứ khi nào.', 0),
(18, 'Màn hình MSI PRO MP223 21.45 Inch VA 100Hz PRO-MP223', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/1-716faeb9-9b8c-496e-95f9-1d0e4dd3ce27.jpg?v=1708510706487', 1750000, 'MSI', '36 tháng', 'Màn hình MSI PRO MP223 có kích thước 21.45 Inch độ phân giải FHD và sử dụng tấm nền VA tiên tiến cho bạn góc nhìn rộng 178 độ, cho phép xem màn hình từ gần như bất kỳ góc nào. Màn hình MSI PRO MP223  đem lại độ phân giải Full HD 1920 x 1080 nâng cao, cho những chi tiết sinh động đi cùng với độ sáng cao, độ tương phản đến không thể tin nổi và màu sắc trung thực cho hình ảnh sống động như ngoài đời thực.', 0),
(19, 'Màn hình ASRock Challenger CL25FF 24.5 inch IPS 100Hz CL25FF', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/aeimageframe-35176610.png?v=1714838582920', 1790000, 'ASRock ', '24 tháng', 'Màn hình ASRock Challenger CL25FF sử dụng tấm nền IPS cho góc nhìn rộng lên đến 178 độ, đảm bảo hình ảnh luôn sắc nét và sống động dù bạn nhìn từ bất kỳ góc nào. Màn hình ASRock Challenger CL25FF IPS 100Hz có không gian màu bao phủ 99% sRGB cùng độ sáng 300 nits đáp ứng nhu cầu cơ bản làm việc bán chuyên.', 0),
(20, 'Màn hình LG 22 Inch VA 100Hz 22MR410-B.ATVQ', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/aeimageframe-33481403.png?v=1714838549820', 1800000, 'LG', '12 tháng', 'Màn hình LG 22 Inch VA 100Hz 22MR410-B.ATVQ được trang bị chế độ đọc sách và chế độ chống nháy, làm giảm hiện tượng nháy hình không thấy được trên màn hình, giúp đem lại cảm giác thoải mái khi làm việc trong thời gian dài.', 0),
(21, 'Màn hình Lenovo L22i-40 22 Inch IPS 75Hz 67AEKACBVN', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-lenovo-l22i-40-22-inch-ips-75hz-67aekacbvn.jpg?v=1703070325493', 1950000, 'Lenovo', '36 tháng', 'Màn hình Lenovo L22i-40 đem lại độ phân giải Full HD 1920 x 1080 nâng cao, cho những chi tiết sinh động đi cùng với độ sáng cao, độ tương phản đến không thể tin nổi và màu sắc trung thực cho hình ảnh sống động như ngoài đời thực.', 0),
(22, 'VGA Leadtek NVIDIA Quadro T400 4GB GDDR6', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-leadtek-nvidia-quadro-t400-4gb-gddr6.jpg?v=1687861232387', 4350000, 'Leadtek', '12 tháng', 'VGA Leadtek NVIDIA Quadro T400 được xây dựng trên kiến ​​trúc GPU NVIDIA Turing, là một giải pháp cho cấu hình thấp nhưng đủ mạnh mẽ để mang đến các tính năng, hiệu suất và khả năng đầy đủ theo yêu cầu của các ứng dụng chuyên nghiệp trong một card đồ họa nhỏ gọn.', 0),
(23, 'VGA Asus GeForce GT 730 2GB GDDR5 GT730-SL-2GD5-BRK', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-geforce-gt-730-2gb-gddr5-gt730-sl-2gd5-brk.png?v=1637988863340', 1490000, 'Asus', '24 tháng', 'ASUS GT 730 là card đồ họa tuyệt vời được chế tạo với thiết kế tản nhiệt 0dB hiệu quả cao, tản nhiệt hoàn toàn trong im lặng và làm cho ASUS GT 730 trở thành sự lựa chọn hoàn hảo cho dàn PC của bạn.', 0),
(24, 'VGA Sapphire NITRO+ Radeon RX 7700 XT Gaming OC 12G GDDR6', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-sapphire-nitro-plus-radeon-rx-7700-xt-gaming-oc-12g-gddr6.jpg?v=1706498595707', 12990000, 'Sapphire', '24 tháng', 'VGA Sapphire NITRO+ Radeon RX 7700 XT Gaming OC 12G GDDR6 được thiết kế với nguồn điện kỹ thuật số mang lại khả năng kiểm soát điện năng chính xác và hiệu suất sử dụng điện năng vượt trội', 0),
(25, 'VGA MSI GeForce RTX 4070 SUPER GAMING X SLIM WHITE 12G GDDR6X', 'VGA', 'https://bizweb.dktcdn.net/thumb/large/100/329/122/products/8-bed6b466-c62b-4649-8cd9-af18dd2ad836.jpg?v=1705630463000', 19990000, 'MSI', '36 tháng', 'VGA MSI GeForce RTX 4070 SUPER GAMING X SLIM WHITE 12G GDDR6X thiết kế mặt tiếp xúc bằng đồng mạ niken giúp việc hấp thụ nhiệt từ GPU và các mô-đun bộ nhớ nhanh chóng truyền đến các ống dẫn nhiệt, cải thiện hiệu suất tản nhiệt tổng thể.', 0),
(26, 'Bàn phím cơ Razer Huntsman V2 Analog RZ03-03610100-R3M1', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-razer-huntsman-v2-analog-rz03-03610100-r3m1.png?v=1706150488273', 4290000, 'Razer', '12 tháng', 'Switch Razer Analog optical. Điều chỉnh chiều cao từ 1.5mm đến 3.6mm để có được điểm kích hoạt mong muốn cho phù hợp với phong cách chơi của bạn và sử dụng đầu vào tương tự để điều khiển mượt mà hơn, sắc thái hơn. Loại bỏ chuyển động WASD 8 chiều cứng nhắc để có chuyển động 360 độ chân thực', 0),
(27, 'Bàn phím cơ Dareu EK75 Multi LED (Dareu Sw)', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/ban-phim-co-dareu-ek75-multi-led-dareu-sw.jpg?v=1710749767217', 590000, 'Dareu', '12 tháng', 'Bàn phím cơ Dareu EK75 Multi LED có thiết kế bố cục 75% nhỏ gọn, giúp giải phóng nhiều không gian cho chiếc bàn của bạn. Thiết kế cáp type-c có thể tháo rời giúp kết nối dễ dàng, an toàn và vận chuyển an toàn trong túi du lịch của bạn.', 0),
(28, 'Bàn phím cơ Corsair K100 Midnight Gold RGB OPX Optical CH-912A21A-NA', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-corsair-k100-midnight-gold-rgb-opx-optical-ch-912a21a-na.png?v=1636519130437', 5790000, 'Corsair', '24 tháng', 'Corsair K100 RGB là đỉnh cao của bàn phím Corsair, mang đến hiệu suất, kiểu dáng, độ bền và khả năng tùy chỉnh hàng đầu mà các game thủ cần có để vượt lên trên phần còn lại.', 0),
(29, 'Bàn phím Không dây Logitech Pebble Keys 2 K380s Multi-Device Tonal Rose 920-011755', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-khong-day-logitech-pebble-keys-2-k380s-multi-device-tonal-rose-920-011755.jpg?v=1694098966337', 720000, 'Logitech', '12 tháng', 'Pebble Keys 2 K380s Multi-Device thiết kế kết nối không dây Bluetooth tối giản cùng cấu hình mỏng tạo cho không gian làm việc của bạn trở nên gọn gàng, sạch sẽ hơn bao giờ hết.', 0),
(30, 'Bàn phím không dây Logitech Wave Keys Ergonomic', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/ban-phim-khong-day-logitech-wave-keys-ergonomic-2.jpg?v=1697103107543', 1250000, 'Logitech', '24 tháng', 'Bàn phím không dây Logitech Wave Keys Ergonomic thiết kế không dây tối giản cùng cấu hình mỏng tạo cho không gian làm việc của bạn trở nên gọn gàng, sạch sẽ hơn bao giờ hết.', 0),
(31, 'Bàn phím cơ TKL Dareu EK87L V2 Black (Dareu Sw)', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-tkl-dareu-ek87l-v2-black-00.jpg?v=1713331715170', 390000, 'Dareu', '12 tháng', 'Bàn phím cơ Dareu EK87L V2 Black được chế tạo từ chất liệu nhựa cao cấp, có độ bền bỉ cao và khả năng chống va đập tốt và mang lại cảm giác chắc chắn khi sử dụng. Bàn phím cơ Dareu EK87L V2 Black có chân nâng tạo góc nghiêng cho bàn phím mang lại cảm giác sử dụng thoải mái. ', 0),
(32, 'VGA Gigabyte GeForce RTX 4070 AORUS MASTER 12G GDDR6 GV-N4070AORUS-M-12GD', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-gigabyte-geforce-rtx-4070-aorus-master-12g-gddr6.jpg?v=1686715473073', 19850000, 'Gigabyte', '36 tháng', 'Gigabyte GeForce RTX 4070 AORUS MASTER 12G được thiết kế kiến trúc ADA Lovelace là kiến trúc RTX thế hệ 3, mang đến trải nghiệm thế giới ảo siêu rõ nét với sức mạnh công nghệ dò tia được khai phá toàn bộ và mô phỏng hoạt động của ánh sáng như trong thế giới thực.', 0),
(33, 'VGA Sapphire NITRO+ Radeon RX 7900 XTX Gaming OC Vapor-X 24G GDDR6', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-sapphire-nitro-plus-radeon-rx-7900-xtx-gaming-oc-vapor-x-24g-gddr6.jpg?v=1706502473807', 31999000, 'Sapphire', '48 tháng', 'Tụ điện nhôm polymer dẫn điện hiệu suất cực cao có chân PCB nhỏ nhưng điện dung thể tích lớn giúp có thể cấp nguồn 20 pha trên VGA Sapphire NITRO+ Radeon RX 7900 XTX Gaming OC Vapor-X 24G GDDR6. Tụ điện cung cấp điện dung ổn định ở tần số và nhiệt độ cao với độ nhiễu tín hiệu rất thấp, đảm bảo độ ổn định và độ tin cậy của sản phẩm.', 0),
(34, 'VGA Asus Dual GeForce RTX 4060 White OC Edition 8GB GDDR6 DUAL-RTX4060-O8G-WHITE', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-dual-geforce-rtx-4060-white-oc-edition-8gb-gddr6-dual-rtx4060-o8g-white-5.jpg?v=1712419416947', 8450000, 'Asus', '12 tháng', 'VGA Asus Dual GeForce RTX 4060 White OC Edition 8GB GDDR6 đã được tăng cường bằng Thép không gỉ 304 cứng hơn và có khả năng chống ăn mòn cao hơn, giúp bảo vệ các thành phần cũng như các đường dẫn khỏi bị hư hại. Ngoài ra thiết kế nhỏ gọn với tỉ lệ hoàn hảo giúp tối đa hóa khả năng tương thích với các khung mới nhất', 0),
(35, 'Chuột Gaming MSI M99', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/qua-tang-chuot-gaming-msi-m99.jpg?v=1655798746150', 890000, 'MSI', '12 tháng', 'Kết hợp nút bấm Chuột Gaming MSI M99 để thay đổi mức DPI phù hợp với mức sử dụng của bạn. Đồng thời 8 nút có thể cho phép thay đổi các chức năng để bạn đa dạng tùy chọn cho mọi ván đấu', 0),
(36, 'Chuột Gaming Razer Basilisk V3 RZ01-04000100-R3M1', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/aeimageframe-32123598.png?v=1714838710393', 1090000, 'Razer', '12 tháng', 'Tận dụng tối đa khả năng lập trình với 11 nút, Razer Hypershift là một tính năng nâng cao trong Razer Synapse 3 giúp tăng gấp đôi hiệu quả đầu vào chuột của bạn. Khi nhấn một phím, bạn có thể chuyển đổi cấu hình nút phụ để bạn có thể thay đổi quá trình chơi của mình một cách nhanh chóng.', 0),
(37, 'Màn hình MSI G2412 24 Inch IPS 170Hz G2412', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/aeimageframe-29449679.png?v=1714838571030', 2950000, 'MSI', '36 tháng', 'Màn hình MSI G2412 có kích thước 24 Inch độ phân giải FHD với tần số quét lên đến 170Hz 1ms và sử dụng tấm nền IPS tiên tiến cho bạn góc nhìn rộng 178/178 độ, cho phép xem màn hình từ gần như bất kỳ góc nào', 0),
(38, 'Màn hình 6K Dell UltraSharp 32 Inch IPS 60Hz U3224KB', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-6k-dell-ultrasharp-32-inch-ips-60hz-u3224kb.jpg?v=1709278407360', 67990000, 'Dell', '60 tháng', 'Màn hình 6K Dell UltraSharp 32 Inch IPS 60Hz U3224KB cho trải nghiệm màu sắc trung thực, ngay cả trong điều kiện ánh sáng yếu hoặc khắc nghiệt, chất lượng hình ảnh cao hơn, không bị nhòe chuyển động nhờ tính năng Giảm nhiễu video 3D/2D.', 0),
(39, 'Màn hình 4K Dell 27 Inch IPS 60Hz P2723QE', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-4k-dell-27-inch-ips-60hz-p2723qe.png?v=1648193400050', 9650000, 'Dell', '36 tháng', 'Màn hình P2723QE với tấm nền IPS sử dụng công nghệ tiên tiến cho bạn góc nhìn rộng 178/178 độ, cho phép xem màn hình từ gần như bất kỳ góc nào. Màn hình còn mang đến cho bạn hình ảnh sinh động cao với màu sắc sống động, giúp cho màn hình không chỉ lý tưởng cho các ứng dụng xem ảnh, video và duyệt web, mà cho cả các ứng dụng chuyên nghiệp yêu cầu luôn có độ chính xác màu và độ sáng ổn định.', 0),
(40, 'Màn hình Dell 27 Inch IPS 60Hz P2722H', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-dell-27-inch-ips-60hz-p2722h-3ee5c3ad-44df-4d81-85b8-3a8ff3d9fc56.png?v=1707321670357', 5150000, 'Dell', '24 tháng', 'Với thiết kế viền màn hình siêu mỏng và mỏng hơn so với đời trước mang lại cho màn hình Dell 27 Inch IPS 60Hz P2722H kích thước nhỏ hơn, giúp tăng khoảng không gian làm việc. Ngoài ra viền mỏng giúp thiết lập đa màn hình dễ dàng, giúp ta có thể tăng năng suất làm việc lên.', 1),
(41, 'Bàn phím Logitech K120 920-002582', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-logitech-k120-920-002582.png?v=1626168672813', 160000, 'Logitech', '6 tháng', 'Các bộ phận nhựa trong K120 bao gồm 51% nhựa tái chế sau tiêu thụ đã được chứng nhận - đem lại vòng đời thứ 2 cho nhựa đã hết hạn sử dụng từ các đồ điện tử cũ của người tiêu dùng và giúp bảo vệ môi trường.', 0),
(42, 'Chuột Corsair Harpoon RGB PRO CH-9301111-AP', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-corsair-harpoon-rgb-pro-ch-9301111-ap-77a8709b-2cb1-4005-8f72-35e59b5f1183.png?v=1706150506333', 450000, 'Corsair', '12 tháng', 'Chuột Corsair Harpoon RGB PRO được thiết kế chắc chắn có viền bền bao xung quanh, đảm bảo độ bền qua thời gian. Ngoài ra với nhiều các tính năng hiện đại, 12.000DPI có thể điều chỉnh, các nút có thể thiết lập giúp cho Corsair Harpoon PRO RGB trở thành một chiếc chuột tối ưu nhất trong tầm giá.', 0),
(43, 'Chuột không dây Logitech Signature M650', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-khong-day-logitech-signature-m650-9.png?v=1692592108213', 550000, 'Logitech', '12 tháng', 'Logitech Signature M650 được thiết kế để mang đến cảm giác thoải mái cùng nâng cao hiệu suất và tối ưu năng suất cho bạn dù đang làm việc ở văn phòng tại nhà, quán cà phê hay thậm chí là phòng chờ sân bay.', 0),
(44, 'Chuột Gaming không dây Asus TUF Gaming M4 Wireless 90MP02F0-BMUA00', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-gaming-khong-day-asus-tuf-gaming-m4-wireless-90mp02f0-bmua00.jpg?v=1710777793127', 790000, 'Asus', '12 tháng', 'Chuột Gaming không dây Asus TUF Gaming M4 Wireless có nắp trên PBT và các nút bên hông được xử lý bằng ion bạc chống vi khuẩn. Chất liệu PBT chống mài mòn hoặc bóng, đồng thời đảm bảo cảm giác chắc chắn và độ bám chắc chắn. Bề mặt an toàn với cồn cũng cho phép bạn làm sạch bề mặt chuột mà không cần lo lắng.', 0),
(45, 'Bàn phím cơ AKKO MonsGeek MG75 Prunus Lannesiana (Akko Sw V3)', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/ban-phim-co-akko-monsgeek-mg75-prunus-lannesiana-1.jpg?v=1706150680587', 890000, 'AKKO', '36 tháng', 'AKKO V3 switch là một dòng switch đời mới được AKKO kết hợp cùng KTT sản xuất nhằm thỏa mãn đam mê trải nghiệm cảm giác gõ phím của người dùng. Một điểm khác biệt lớn nhất giữa AKKO switch v3 và AKKO switch v2 là lò xo có biên độ dày hơn hứa hẹn sẽ đem lại trải nghiệm độc đáo và khác biệt cho người dùng.', 0),
(46, 'Chuột gaming Logitech HIGH PERFORMANCE HERO G502 910-005472', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-gaming-logitech-high-performance-hero-g502-910-005472.jpg?v=1710498491360', 950000, 'Logitech', '36 tháng', 'Trong thể thao điện tử, chiến thắng không được đo lường bằng mét hay giây mà bằng micro-mét và mili-giây. Khi số tiền đặt cược ở mức cao nhất, một cú nhấp chuột có thể tạo ra sự khác biệt giữa việc mang về nhà số tiền $5k hay $500k. Đó là lý do tại sao Logitech HIGH PERFORMANCE HERO ra đời. Được cải tiến với cảm biến tiên tiến nhất, mang lại tốc độ và độ chính xác đáng ngạc nhiên cần thiết để chiến thắng.', 0),
(47, 'Màn hình 2K LG 27 Inch IPS 75Hz 27QN600-B.ATV', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-2k-lg-27-inch-ips-75hz-27qn600-b-atv.jpg?v=1676260260857', 4990000, 'LG', '36 tháng', 'Màn hình 2K LG 27 27QN600-B với công nghệ HDR 10 hỗ trợ các mức độ màu và độ sáng nhất định vượt xa tính năng của các màn hình thông thường. Không chỉ mang đến cảm giác hồi hộp chưa từng có nhờ hình ảnh đẹp mắt, âm thanh chân thực mà còn giúp bạn chiến thắng nhiều hơn nhờ tính năng AMD FreeSync™, Dynamic Action Sync và Black Stabilizer.', 0),
(48, 'Màn hình cong Gigabyte G34WQCA 2K 34 Inch VA 144Hz', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-cong-2k-gigabyte-34-inch-va-144hz-g34wqca-1.jpg?v=1705237308860', 8490000, 'Gigabyte', '36 tháng', 'Màn hình cong Gigabyte G34WQCA 2K 34 Inch VA 144Hz và độ phủ màu lên đến 90% DCI-P3 thể hiện màu sắc trung thực cao, mang lại cảm giác chìm đắm hơn.', 0),
(49, 'Màn hình ASRock Challenger CL25FF 24.5 inch IPS 100Hz CL25FF', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-asrock-challenger-cl25ff-24-5-inch-ips-100hz-cl25ff-06.jpg?v=1715014925247', 2100000, 'ASRock', '12 tháng', 'Màn hình ASRock Challenger CL25FF IPS 100Hz sở hữu thiết kế hiện đại với viền bezel siêu mỏng ba cạnh, mang đến trải nghiệm không gian ấn tượng. Chân đế có thể nghiêng giúp bạn dễ dàng tìm được góc nhìn thoải mái nhất.', 0),
(50, 'Màn hình LG UltraGear 27 Inch IPS 144Hz 27GN65R-B', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-lg-ultragear-24-inch-ips-144hz-24gn65r-b-atv-8885b3e9-3c0d-48f2-9170-291e16a3dea1.jpg?v=1715014927603', 4390000, 'LG', '12 tháng', 'Màn hình LG UltraGear 27 Inch 27GN65R-B có kích thước 27 Inch độ phân giải FHD với tần số quét 144Hz 1ms và sử dụng tấm nền công nghệ IPS tiên tiến cho bạn góc nhìn rộng 178/178 độ, cho phép xem màn hình từ gần như bất kỳ góc nào.', 0),
(51, 'Màn hình ACER Aopen Fire Legend UM.KX2SV.F01 24.5 inch IPS 390Hz', 'Screen', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/man-hinh-acer-aopen-fire-legend-25xv2q-f-24-5-inch-ips-fhd-390hz-05.jpg?v=1713523207707', 8990000, 'Acer', '36 tháng', 'Bạn đang tìm kiếm một màn hình máy tính đáp ứng tốt nhu cầu giải trí và làm việc? Màn hình Acer Aopen Fire Legend 25XV2Q F 24.5 inch IPS FHD 390Hz là lựa chọn hoàn hảo dành cho bạn. Với thiết kế hiện đại, hiệu năng mạnh mẽ và giá cả hợp lý, đây là sản phẩm hứa hẹn mang đến cho bạn những trải nghiệm tuyệt vời nhất.', 0),
(52, 'VGA ASRock Radeon RX 7700 XT Steel Legend 12G OC GDDR6 RX7700XT-SL-12GO', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asrock-radeon-rx-7700-xt-steel-legend-12g-oc-gddr6-rx7700xt-sl-12go.jpg?v=1696584473603', 12890000, 'ASRock', '36 tháng', 'VGA ASRock Radeon RX 7700 XT Steel Legend 12G OC GDDR6 tận dụng các công nghệ làm mát tiên tiến từ các card đồ họa hàng đầu, thiết kế 3 fan giúp tối ưu hóa khả năng tản nhiệt và là sự lựa chọn hoàn hảo cho cho những hệ thống cân đối giữa hiệu năng và thiết kế.', 0),
(53, 'VGA Asus ROG Strix Radeon RX 7600 OC Edition 8GB GDDR6 ROG-STRIX-RX7600-O8G-GAMING', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-rog-strix-radeon-rx-7600-oc-edition-8gb-gddr6-rog-strix-rx7600-o8g-gaming-3.jpg?v=1689654270593', 999000, 'Asus', '12 tháng', 'ROG Strix Radeon RX 7600 OC Edition năm nay được khoác lên mình thiết kế vuông vức, hầm hố hơn, các bố cục trở nên nổi bật với dải led A-RGB được khắc trạm tạo điểm nhấn cho sản phẩm, ở fan của sản phẩm vẫn sẽ có biểu tượng đặc trưng của ROG.', 0),
(54, 'VGA PowerColor Radeon Hellhound Spectral White RX 7800 XT 16G OC GDDR6 RX-7800-XT-16G-L/OC/WHITE', 'VGA', 'https://bizweb.dktcdn.net/thumb/large/100/329/122/products/vga-powercolor-radeon-hellhound-spectral-white-rx-7800-xt-16g-oc-gddr6.jpg?v=1715014837000', 15500000, 'PowerColor', '12 tháng', 'VGA PowerColor Radeon Hellhound Spectral White RX 7800 XT mang lại hiệu suất, hiệu quả tiếng ồn thấp và tính thẩm mỹ cao mà các game thủ chuyên nghiệp đã công nhận và tin tưởng.', 0),
(55, 'VGA Sapphire Radeon PURE RX 7700 XT Gaming OC 12G GDDR6', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-sapphire-radeon-pure-rx-7700-xt-gaming-oc-12g-gddr6.jpg?v=1706351817190', 12390000, 'Sapphire', '12 tháng', 'VGA Sapphire Radeon PURE RX 7700 XT Gaming OC 12G GDDR6 được thiết kế với nguồn điện kỹ thuật số mang lại khả năng kiểm soát điện năng chính xác và hiệu suất sử dụng điện năng vượt trội.', 0),
(56, 'VGA Asus ProArt GeForce RTX 4070 12GB GDDR6X PROART-RTX4070-12G', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-proart-geforce-rtx-4070-12gb-gddr6x-proart-rtx4070-12g-1.jpg?v=1704274133507', 18500000, 'Asus', '12 tháng', 'VGA Asus ProArt GeForce RTX 4070 12GB GDDR6X thiết kế quạt công nghệ Axial giúp tối ưu hóa cho bộ tản nhiệt để tản nhiệt tốt hơn và diện tích bề mặt to hơn thế hệ trước. Số lượng cánh quạt đã được tăng lên cho cả ba quạt, với 13 cánh trên quạt trung tâm và 11 cánh trên quạt phụ. Vòng tròn bên ngoài nối liền với cánh quạt đã được làm mỏng đi cho phép hút gió bên ngoài nhiều hơn và dẫn luồng khí qua bộ tản nhiệt tốt hơn.', 0),
(57, 'VGA MSI GeForce RTX 4070 SUPER GAMING X SLIM 12G GDDR6X', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-msi-geforce-rtx-4070-super-gaming-x-slim-12g-gddr6x-8.jpg?v=1705633945587', 19290000, 'MSI', '12 tháng', 'VGA MSI GeForce RTX 4070 SUPER GAMING X SLIM 12G GDDR6X sử dụng Fan TORX 5.0 với hiểu quả được cải tiến vượt bật giúp cánh quạt tập trung được luồng không khí vào hệ thống làm mát.', 0),
(58, 'VGA Gigabyte Radeon RX 6600 EAGLE 8G GDDR6 GV-R66EAGLE-8GD', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-gigabyte-radeon-rx-6600-eagle-8g-gddr6.jpg?v=1686131850153', 5450000, 'Gigabyte', '12 tháng', 'VGA Gigabyte Radeon RX 6600 EAGLE mang lại hiệu suất, hiệu quả tiếng ồn thấp và tính thẩm mỹ cao mà các game thủ chuyên nghiệp đã công nhận và tin tưởng. Bạn có thể thưởng thức tất cả các trò chơi yêu thích của mình một cách mạnh mẽ nhưng luôn hoạt động mát mẻ và không gây tiếng ồn.', 0),
(59, 'VGA MSI GeForce RTX 4070 Ti SUPER VENTUS 2X 16G OC GDDR6X', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-msi-geforce-rtx-4070-ti-super-ventus-2x-16g-oc-gddr6x-3.jpg?v=1705655829940', 24550000, 'MSI', '12 tháng', 'VGA MSI GeForce RTX 4070 Ti SUPER VENTUS 2X 16G OC GDDR6X mang đến một thiết kế tập trung vào hiệu suất nhằm duy trì các yếu tố cần thiết để xử lý mọi dữ liệu cùng chương trình cần thiết. Việc bố trí quạt kép với một thiết kế cứng cáp cho phép card đồ họa trông sắc nét này phù hợp với mọi bộ PC của bạn.', 0),
(60, 'VGA MSI GeForce RTX 4070 SUPER VENTUS 2X WHITE 12G OC GDDR6X', 'VGA', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-msi-geforce-rtx-4070-super-ventus-2x-white-12g-oc-gddr6x-3.jpg?v=1705551077753', 17990000, 'MSI', '12 tháng', 'VGA MSI GeForce RTX 4070 SUPER VENTUS 2X WHITE 12G OC GDDR6X mang đến một thiết kế tập trung vào hiệu suất nhằm duy trì các yếu tố cần thiết để xử lý mọi dữ liệu cùng chương trình cần thiết. Việc bố trí quạt kép với một thiết kế cứng cáp cho phép card đồ họa trông sắc nét này phù hợp với mọi bộ PC của bạn.', 0),
(61, 'Chuột Gaming Razer DeathAdder Essential', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-gaming-razer-deathadder-essential-7.png?v=1701050362323', 450000, 'Razer', '6 tháng', 'Kiểu dáng công thái học cổ điển vốn là dấu ấn của các thế hệ Razer DeathAdder trước đây. Thân bóng bẩy và khác biệt của nó được thiết kế để tạo sự thoải mái, cho phép bạn duy trì mức hiệu suất cao trong suốt buổi chơi game kéo dài, vì vậy bạn sẽ không bao giờ chùn bước trước sức nóng của trận chiến.', 0),
(62, 'Chuột gaming Logitech G502 X HERO', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-gaming-logitech-g502-x-hero-1.jpg?v=1707322073757', 1390000, 'Logitech', '6 tháng', 'Chuột Gaming Logitech G502 X là sự bổ sung mới nhất cho dòng G502 huyền thoại với công nghệ chơi game tiên tiến được trang bị phím switch lai quang học và cơ học \"LIGHTFORCE\". Giờ đây, hiệu suất chơi game được tối ưu về tốc độ lẫn độ chính xác và độ tin cậy của chuột được cải thiện ở mức tối ưu nhất.', 0),
(63, 'Chuột không dây Ergonomic Logitech Lift Vertical', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-khong-day-ergonomic-logitech-lift-vertical.jpg?v=1692592099697', 1190000, 'Logitech', '12 tháng', 'Chuột không dây Ergonomic Logitech Lift Vertical được thiết kế công thái học để mang đến cảm giác thoải mái cùng nâng cao hiệu suất giúp bạn làm việc suốt cả ngày mà vẫn thấy thoái mái và tối ưu cho những đôi tay từ nhỏ đến trung bình.', 0),
(64, 'Chuột Gaming không dây Corsair M75 Wireless RGB', 'Mouse', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/chuot-gaming-khong-day-corsair-m75-wireless-rgb-06.jpg?v=1712722544450', 3490000, 'Corsair', '36 tháng', 'Chuột Gaming không dây Corsair M75 Wireless RGB là một lựa chọn tuyệt vời cho các game thủ đang tìm kiếm một con chuột không dây, siêu chính xác với thiết kế đối xứng phù hợp với game thủ. ', 0),
(65, 'Chuột không dây Corsair Nightsabre RGB CH-931B011-AP', 'Mouse', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/chuot-khong-day-corsair-nightsabre-rgb-ch-931b011-ap-2.jpg?v=1698909926467', 3650000, 'Corsair', '36 tháng', 'Chuột không dây Corsair Nightsabre RGB được thiết lập với khả năng kết nối đa dạng. Ta có thể kết nối adapter wireless với cổng cắm USB, kết nối với Bluetooth hoặc dùng dây USB rất tiện lợi trong nhiều trường hợp.', 0),
(66, 'Bàn phím Havit KB252', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-havit-kb252.jpg?v=1707322053027', 99000, 'Havit', '2 tháng', 'Bàn phím fullsize giúp cho việc nhập dữ liệu, tính toán và điều hướng diễn ra nhanh chóng. Phím bấm có độ nảy cao và hành trình phím sâu nên dù là mẫu bàn phím văn phòng thường nhưng khi sử dụng, người dùng sẽ cảm giác như đang sử dụng bàn phím cơ chuyên nghiệp. Ngoài ra, Havit còn phủ một lớp lớp chống tia cực tím để có thể bảo vệ chữ, giúp phím không bị mờ hay bong tróc sau một thời gian sử dụng.', 0),
(67, 'Bàn phím cơ TKL Dareu EK87L V2 White (Dareu Sw)', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-tkl-dareu-ek87l-v2-white-00.jpg?v=1713339520287', 390000, 'Dareu', '12 tháng', 'Bàn phím cơ TKL Dareu EK87L V2 White sở hữu thiết kế Tenkeyless (TKL) tiết kiệm tối đa không gian bàn làm việc của bạn. Nhờ vậy, bạn có thể dễ dàng mang theo bàn phím đến bất cứ đâu bạn muốn.', 0),
(68, 'Bàn phím cơ Corsair K65 PRO MINI RGB 65% OPX CH-91A401A-NA', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-corsair-k65-pro-mini-rgb-65-percentage-opx-ch-91a401a-na-1.jpg?v=1698724199710', 2890000, 'Corsair', '12 tháng', 'Bàn phím cơ Corsair K65 PRO MINI có kiểu dáng nhỏ gọn và đa năng, với layout 65%, nhỏ hơn so với bàn phím kích thước đầy đủ thông thường đồng thời cung cấp các phím đầy đủ tính năng phù hợp cho cả game thủ cũng như người dùng văn phòng.', 0),
(69, 'Bàn phím cơ Dareu EK75 White Led Full White (Dareu Sw)', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/1024x1024/100/329/122/products/ban-phim-co-dareu-ek75-white-led-full-white-dareu-sw-4.jpg?v=1707968521127', 590000, 'Dareu', '6 tháng', 'Bàn phím cơ Dareu EK75 White LED Full White có thiết kế bố cục 75% nhỏ gọn, giúp giải phóng nhiều không gian cho chiếc bàn của bạn. Thiết kế cáp type-c có thể tháo rời giúp kết nối dễ dàng, an toàn và vận chuyển an toàn trong túi du lịch của bạn.', 0),
(70, 'Bàn phím cơ không dây Dry Studio Black Diamond 75 Carbon Advance RGB Hotswap', 'Keyboard', 'https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/ban-phim-co-khong-day-dry-studio-black-diamond-75-carbon-advance-rgb-hotswap-04.jpg?v=1711430131033', 8990000, 'Dry Studio', '12 tháng', 'Bàn phím cơ không dây Dry Studio Black Diamond 75 Carbon Advance RGB Hotswap là biểu tượng cho sự kết hợp hoàn hảo giữa hiệu năng vượt trội, thiết kế độc đáo và khả năng tùy biến cao. Nổi bật với layout 75%, kết nối 3 chế độ và hotswap, Black Diamond 75 Carbon Advance RGB hứa hẹn mang đến trải nghiệm gõ phím đỉnh cao cho mọi đối tượng, từ game thủ chuyên nghiệp đến người dùng văn phòng.', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `username`, `rating`, `comment`, `created_at`) VALUES
(1, 4, 2, 'user01', 1, 'hello', '2024-05-05 13:11:04'),
(2, 4, 2, 'user01', 1, 'hello', '2024-05-05 13:12:12'),
(3, 4, 2, 'user01', 5, 'ngon', '2024-05-05 13:37:13'),
(4, 1, 2, 'user01', 5, 'oke', '2024-05-06 03:46:46'),
(5, 1, 2, 'user01', 3, 'oke', '2024-05-06 03:47:10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
