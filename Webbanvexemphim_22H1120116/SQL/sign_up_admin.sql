-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2023 lúc 03:39 AM
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
-- Cấu trúc bảng cho bảng `sign_up_admin`
--

CREATE TABLE `sign_up_admin` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sign_up_admin`
--

INSERT INTO `sign_up_admin` (`id`, `userid`, `username`, `email`, `password`, `date`) VALUES
(1, 464733, 'MinhTan', '22h1120116@ut.edu.vn', '27092004', '2023-12-29 02:02:16'),
(2, 464733, 'MinhTan', '22h1120116@ut.edu.vn', '27092004', '2023-12-29 02:02:16'),
(3, 48075441264, 'Minh_Tan', '22h1120116@ut.edu.vn', '27092004', '2023-12-29 02:02:31'),
(4, 48075441264, 'Minh_Tan', '22h1120116@ut.edu.vn', '27092004', '2023-12-29 02:02:31'),
(5, 516418364010871, 'MinhTan', 'tantran2709vn@gmail.com', '27092004', '2023-12-29 02:06:01'),
(6, 516418364010871, 'MinhTan', 'tantran2709vn@gmail.com', '27092004', '2023-12-29 02:06:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sign_up_admin`
--
ALTER TABLE `sign_up_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`,`username`,`email`,`date`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sign_up_admin`
--
ALTER TABLE `sign_up_admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
