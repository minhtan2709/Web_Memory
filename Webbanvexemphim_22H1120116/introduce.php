<?php
 session_start();
    
include("connection.php");
include("functions.php");


 $userdata = check_login($con);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/introduce.css">
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="icon" href="/22H1120116_TRANLEMINHTAN/HINH/logotab.jpg" type="image/x-icon">
</head>
<body>
<div class="header">
    <div class="outer">
        <div id="logo-bg">
        <a href="index.php" style="text-decoration: none;"><h1>WEB Watcher</h1></a>
            <span class="tag">Không Giới Hạn, Không Quảng Cáo</span>
        </div>
        <div id="film"></div>
        <div class="clear"></div>
        <div id="bg">
        <div id="toplinks"><a href="index.php">Trang chủ</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="gioithieu.php">Giới thiệu</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="vephim.php">Vé phim</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="khuyenmai.php">Khuyễn Mãi</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="lienhe.php">Liên hệ</a></div>
            
            <div id="log_in"><a href="dangnhap.php">admin</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2"> 
        <div class="Introduce">
            <h1>Về Web Watcher</h1>
            <p> Web Watcher là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã
                khẳng định
                thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu
                phim hiện
                đại, thu hút hàng triệu lượt người đến xem,Web Watcher còn hấp dẫn khán giả bởi không khí thân thiện
                cũng như
                chất lượng dịch vụ hàng đầu. Đến website Watcher.vn, khách hàng sẽ dễ dàng tham khảo các phim hay
                nhất, phim
                mới nhất đang chiếu hoặc sắp chiếu luôn được cập nhật thường xuyên. Lịch chiếu tại tất cả hệ thống
                rạp chiếu
                phim của Web Watcher cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ. Từ vũ trụ điện ảnh
                Marvel,
                người hâm mộ sẽ có cuộc tái ngộ với Người Nhện qua Spider-Man: No Way Home hoặc Doctor Strange 2.
                Ngoài ra 007:
                No Time To Die, Turning Red, Minions: The Rise Of Gru..., là những tác phẩm hứa hẹn sẽ gây bùng nổ
                phòng vé
                trong thời gian tới. </br>
            </p>
            <div class="content">
                <video loop controls poster="/22H1120116_TRANLEMINHTAN/HINH/fate.jpg" src="/VIDEO/royalty.mp4" height="500px" width=700px></video>
                <img src="/22H1120116_TRANLEMINHTAN/HINH/Padoru.gif"type="gif" height="450px" width="450px">
            </div>
           

            <p>
                Giờ đây đặt vé tại Web Watcher càng thêm dễ dàng chỉ với vài thao tác vô cùng
                đơn giản.
                Để mua vé, hãy vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim, theo rạp, hoặc theo ngày. Sau
                đó, tiến
                hành mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email
                phản hồi Đặt
                vé thành công của Web Watcher. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Web Watcher
                hoặc quét
                mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa. Nếu bạn đã chọn được phim
                hay để xem,
                hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ. Chỉ cần một phút, tin nhắn và email
                phản hồi của
                Web Watcher sẽ gửi ngay vào điện thoại và hộp mail của bạn. Nếu chưa quyết định sẽ xem phim mới nào,
                hãy tham
                khảo các bộ phim hay trong mục Phim Đang Chiếu cũng như Phim Sắp Chiếu tại rạp chiếu phim bằng cách
                vào mục Bình
                Luận Phim ở Góc Điện Ảnh để đọc những bài bình luận chân thật nhất, tham khảo và cân nhắc. Sau đó,
                chỉ việc đặt
                vé bằng box Mua Vé Nhanh ngay ở đầu trang để chọn được suất chiếu và chỗ ngồi vừa ý nhất. Web
                Watcher luôn có
                những chương trình khuyến mãi, ưu đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim
                miễn phí, tặng
                Combo, tặng quà phim… dành cho các khách hàng. Trang web Watcher.vn còn có mục Góc Điện Ảnh - nơi
                lưu trữ dữ
                liệu về phim, diễn viên và đạo diễn, những bài viết chuyên sâu về điện ảnh, hỗ trợ người yêu phim dễ
                dàng hơn
                trong việc lựa chọn phim và bổ sung thêm kiến thức về điện ảnh cho bản thân. Ngoài ra, vào mỗi
                tháng, Web Watcher
                cũng giới thiệu các phim sắp chiếu hot nhất trong mục Phim Hay Tháng . Hiện nay, Web Watcher đang
                ngày
                càng phát triển hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả
                những bộ phim
                bom tấn của thế giới và Việt Nam nhanh chóng và sớm nhất.</p>
        </div>
    </div>
</div>
<div class="footercontent">
<a href="index.php">Trang chủ</a>
    <a href="introduce.php">Giới Thiệu</a>
    <a href="ticket.php">Vé Phim</a>
    <a href="khuyenmai.php">Khuyến Mãi</a>
    <a href="contact.php">Liên Hệ</a>
</div>
<div class="clear"></div>
<div class="credit"></div>

</body>
</html>