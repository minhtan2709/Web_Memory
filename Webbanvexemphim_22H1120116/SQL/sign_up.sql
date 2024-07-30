-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2023 lúc 03:36 AM
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
-- Cấu trúc bảng cho bảng `sign_up`
--

CREATE TABLE `sign_up` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `username` varchar(460) NOT NULL,
  `email` varchar(460) NOT NULL,
  `password` varchar(460) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sign_up`
--

INSERT INTO `sign_up` (`id`, `userid`, `username`, `email`, `password`, `date`) VALUES
(1, 285195484, 'Minh_Tan', '22h1120116@ut.edu.vn', '27092004', '2023-12-27 14:51:23'),
(2, 285195484, 'Minh_Tan', '22h1120116@ut.edu.vn', '27092004', '2023-12-27 14:51:23'),
(3, 399965424335754236, 'Minh_Tan', 'tantran2709vn@gmail.com', '270904', '2023-12-27 16:34:11'),
(5, 0, 'MinhTan', 'tantran2709vn@gmail.com', 'yeta2012', '2023-12-27 16:35:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`email`,`date`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
