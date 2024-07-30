-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2023 lúc 03:39 AM
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
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `product_detail` varchar(460) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_id`, `product_name`, `category`, `product_detail`, `image`, `video`, `cost`, `date`) VALUES
(1, 1, 'Fate-Unlimited Blade Works', 'Anime bộ, Shounen, Supernatural, Fantasy, Magic, Action', 'Fuyuki City là một thành phố được bao quanh bởi các đại dương và những ngọn núi và giờ đã trở thành nơi được định sẵn cho một nghi lễ cổ xưa. Để tìm ra các huyền thoại Holy Grail, mà bất kì ai cũng mong muốn sở hữu nó, bảy cao nhân được cho bảy quỉ anh hùng lựa chọn bởi các Grail. Những linh hồn anh hùng này bao gồm: Saber, Lancer, Archer, Rider, Caster, Assassin, Berserker.', 'anh2.jpg', 'video1.mp4', '120.000đ', 'Thứ sáu, 6/02/2023, 00.00(GMT +7)'),
(2, 2, 'Kaguya Sama: Love Is War', 'Anime lẻ, Seinen, School, Romance, Psychological, Comedy', 'Kaguya Shinomiya và Miyuki Shirogane cùng là thành viên của hội học sinh học viện Shuchi\'in, được\r\n                        xem\r\n                        như là những thiên tài giữa các thiên tài. Thời gian bên nhau dần phát triển tình cảm họ dành\r\n                        cho\r\n                        nhau, nhưng lòng kiêu hãnh không cho phép họ là người thú nhận và ngỏ lời trước. Tình trường là\r\n                        chiến trường và trận chiến để khiến đối', 'anh11.jpg', 'video2.mp4', '100.000đ', 'Thứ ba, 7/05/2023, 5.00(GMT +7)'),
(4, 4, 'Bleach', 'Anime bộ, Shounen, Supernatural, Super Power, Adventure, Action', 'Ichigo Kurosaki là một thiếu niên có khả năng nhìn thấy linh hồn. Cuộc sống của anh thay đổi\r\n                        nhanh\r\n                        chóng bởi sự xuất hiện đột ngột của một Soul Reaper-một trong những người điều chỉnh dòng chảy\r\n                        của\r\n                        linh hồn giữa thế giới con người và thế giới bên kia, tên là Kuchiki Rukia, người đến thế giới\r\n                        con\r\n                        người để tìm ', 'anh13.jpg', 'video4.mp4', '110.000đ', 'Thứ tư, 12/11/2023, 12.00(GMT +7)'),
(5, 5, 'The End Of Evangelion', 'Anime lẻ, Sci-Fi, Mecha, Action', 'Sau khi cả 17 Angel đều đã bị tiêu diệt, SEELE đã biết được kế hoạch của chỉ huy Ikari Gendou và\r\n                        quyết định mở một cuộc tổng tấn công chiếm lại các Eva, Adam và Lilith Với lực lượng quân đội\r\n                        JSSDF\r\n                        và bộ Eva Series gồm 9 Eva trắng, cả trụ sở đều bị tổn hại nặng nề và Unit-02 không thể một mình\r\n                        kháng cự nổi. Cho tới khi Ikari Shinji bước vào buồng lái Eva Unit', 'anh14.jpg', 'video5.mp4', '120.000đ', 'Thứ sáu, 13/09/2023, 9.00(GMT +7)'),
(6, 6, 'Jujutsu Kaisen Movie 0', 'Anime bộ, Shounen, School, Supernatural, Demons, Horror, Action', 'Cho những ai chưa biết, Jujutsu Kaisen 0 là là tập truyện ngắn ra mắt trước khi Chú Thuật Hồi\r\n                        Chiến\r\n                        được sáng tác. Trọng tâm câu chuyện xoay quanh nguyền sư đặc cấp Yuta Okkotsu trong thời gian\r\n                        anh ta\r\n                        mới vào học viện chú thuật.Theo nhiều dự đoán, Jujutsu Kaisen 0 được chuyển thể anime movie là\r\n                        \"bước\r\n                        mở đường', 'anh15.jpg', 'video6.mp4', '100.000đ', 'Chủ nhật 24/12/2023, 00.00(GMT +7)'),
(7, 7, 'Naruto Movie 1', 'Anime bộ, Fantasy, Adventure, Action,', '12 năm trước, hồ ly 9 đuôi tấn công làng ninja Mộc Diệp, Hokage Đệ Tứ đã đánh bại và phong\r\n                        ấn vào cậu bé Naruto.Từ đó, Naruto bị mọi người xa lánh, vậy nên cậu tìm ra cách được thừa\r\n                        nhận và chú ý duy nhất qua các trò phá phách và nghịch ngợm.Câu chuyện chính bám theo sự\r\n                        trưởng thành và tiến bộ của Naruto và bạn cậu khi làm ninja, và nhấn mạnh mối quan hệ giữa\r\n                      ', 'anh16.jpg', 'video7.mp4', '100.000đ', 'Thứ năm, 27/12/2023, 15.00(GMT +7)'),
(8, 8, 'Attack On TiTan', 'Anime lẻ, Supernatural, Fantasy, Drama, Mystery, Military, Action', 'Hàng trăm năm về trước, loài người gần như bị diệt vong bởi Titan - một sinh vật khổng lồ, không\r\n                        có trí thông minh, và tồi tệ nhất là, dường như chúng ăn tươi nuốt sống con người chỉ vì niềm\r\n                        vui chứ không phải vì nhu cầu sinh tồn. Số ít nhân loại còn sống sót đã tự bảo vệ mình bằng cách\r\n                        nhốt mình trong những bức tường khổng lồ, cao hơn cả những Titan to lớn nhất. Một trăm năm yên\r\n ', 'anh18.jpg', 'video8.mp4', '120.000 ', 'Thứ Hai 4/01/2023, 8.00(GMT +7)'),
(9, 9, 'The Eminence In Shadow ', 'Anime bộ, Fantasy, Comedy, Action', 'Như bao người ngưỡng mộ những anh hùng khi còn nhỏ, nhân vật chính của chúng ta lại ngưỡng mộ\r\n                        những con người trong bóng tối. Sau khi giấu đi khả năng thật sự và sống 1 cuộc đời tầm thường\r\n                        của 1 thường dân vào ban ngày trong khi trải qua những khóa huấn luyện điên rồ vào ban đêm, anh\r\n                        ta cuối cùng cũng được chuyển sinh sang thê giới khác. Người đàn ông ấy, người mà chỉ phô diễn\r\n    ', 'anh17.jpg', 'video9.mp4', '130.000đ', 'Thứ bảy 23/05/2023, 6.00(GMT +7)'),
(11, 10, 'Solo Leveling', 'Adventure,Fantansy', 'etou sono', 'anh42.jpg', '', '110.000đ', 'Thứ Tư, 26/12/2023, 18.00(GMT +7)');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`product_name`,`category`,`image`,`video`,`cost`,`date`),
  ADD KEY `product_detail` (`product_detail`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
