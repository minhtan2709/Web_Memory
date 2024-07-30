-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2023 lúc 03:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `minh_tan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_cart`
--

CREATE TABLE `bill_cart` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_cart`
--

INSERT INTO `bill_cart` (`id`, `product_id`, `product_name`, `date`, `cost`) VALUES
(5, '1', 'Fate-Unlimited Blade Works', 'Thứ sáu, 6/02/2023, 00.00(GMT +7)', 120),
(6, '1', 'Fate-Unlimited Blade Works', 'Thứ sáu, 6/02/2023, 00.00(GMT +7)', 120),
(7, '2', 'Kaguya Sama: Love Is War', 'Thứ 3, 7/05/2023, 5.00(GMT +7)', 100),
(10, '8', 'Attack On TiTan', 'Thứ Hai 4/01/2023, 8.00(GMT +7)', 120),
(11, '9', 'The Eminence In Shadow ', 'Thứ bảy 23/05/2023, 6.00(GMT +7)', 130);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill_cart`
--
ALTER TABLE `bill_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_name` (`product_name`,`date`,`cost`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill_cart`
--
ALTER TABLE `bill_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
