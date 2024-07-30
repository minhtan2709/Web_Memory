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
    <title>Web Bán Vé Xem Phim</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/style.css">
    <link rel="icon" href="/22H1120116_TRANLEMINHTAN/HINH/logotab.jpg" type="image/x-icon">
</head>

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
            
           <div id="log_in"><a href="dangnhap.php"><?php echo $userdata['username']; ?></a></div>
           
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="container">
    <div id="outer2">
        <div id="left-nav">
            <h2>Film Showcase</h2>
            <div id="showcase">
                <div class="stxt-bg">
                    <h3>Film Name One</h3>
                    <div class="smalltext">
                        <a href="/22H1120116_TRANLEMINHTAN/HINH/anh9.jpg"><img src="/22H1120116_TRANLEMINHTAN/HINH/anh9.jpg" width="150" height="150"
                                border="0"></a>
                        <div class="clear"></div>
                        <span style="color: #fff;font-size: 12px;text-align: justify;">The Amazing Spider-Man</span>
                    </div>
                    <div style="clear:right; height:25px;">
                        <span class="read-more"><a href="#">Read More</a></span>
                    </div>

                </div>
            </div>
            <div id="showcase">
                <div class="stxt-bg">
                    <h3>Film Name Two</h3>
                    <div class="smalltext">
                        <a href="/22H1120116_TRANLEMINHTAN/HINH/anh3.jpg"><img src="/22H1120116_TRANLEMINHTAN/HINH/anh3.jpg" width="150" height="150"
                                border="0"></a>
                            
                        <div class="clear"></div>
                        <span style="color:#fff;font-size: 12px;text-align: justify;">Spider-Man: Across the Spider-Verse</span>
                    </div>
                    <div style="clear:right; height:25px;">
                        <span class="read-more"><a href="#">Read More</a></span>
                    </div>
                </div>
            </div>

            <div id="showcase">
                <div class="stxt-bg">
                    <h3>Film Name Three</h3>
                    <div class="smalltext">
                        <a href="/22H1120116_TRANLEMINHTAN/HINH/anh4.jpg"><img src="/22H1120116_TRANLEMINHTAN/HINH/anh4.jpg" width="150" height="150"
                                border="0"></a>
                        <div class="clear"></div><span style="color:#fff;font-size:12px;text-align: justify;">Kamen Rider Geats</span>
                    </div>
                    <div style="clear:right; height:25px;"><span class="read-more"><a href="#">Read More</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <h2>Welcome To Our Website</h2>
            <div id="main">
                Web Watcher là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã khẳng
                định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu
                phim hiện đại, thu hút hàng triệu lượt người đến xem,Web Watcher còn hấp dẫn khán giả bởi không khí thân
                thiện cũng như chất lượng dịch vụ hàng đầu. Đến website Watcher.vn, khách hàng sẽ dễ dàng tham khảo các
                phim hay nhất, phim mới nhất đang chiếu hoặc sắp chiếu luôn được cập nhật thường xuyên. Lịch chiếu tại
                tất cả hệ thống rạp chiếu phim của Web Watcher cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang
                chủ. Từ vũ trụ điện ảnh Marvel, người hâm mộ sẽ có cuộc tái ngộ với Người Nhện qua Spider-Man: No Way
                Home hoặc Doctor Strange 2. Ngoài ra 007: No Time To Die, Turning Red, Minions: The Rise Of Gru..., là
                những tác phẩm hứa hẹn sẽ gây bùng nổ phòng vé trong thời gian tới....
                <span class="read-more"><a href="#">Read More</a></span>
            </div>

            <h4>Film Content</h4>

            <a href="/22H1120116_TRANLEMINHTAN/HINH/anh7.jpg"><img src="/22H1120116_TRANLEMINHTAN/HINH/anh7.jpg" width=150 height=150 border="0"></a><p>Câu
            chuyện xoay quanh một tên học sinh trung học chán ghét xã hội tên Hachiman Hikigaya. Cậu ta có một cái nhìn
            lệch lạc về cuộc sống, nên chẳng mảy may có lấy một đứa bạn nào. Khi thấy bạn bè cùng trang lứa vui vẻ với
            nhau, cậu ta chỉ nghĩ: "lũ dối trá". Khi được hỏi về định hướng trong tương lai, cậu ta trả lời "không phải
            làm việc"...</p><span class="read-more"><a href="#">Read More</a></span>

            <div class="clear"></div>

            <h4>Film Content</h4>

            <a href="/22H1120116_TRANLEMINHTAN/HINH/anh8.jpg"><img src="/22H1120116_TRANLEMINHTAN/HINH/anh8.jpg" width=150 height=150 border="0"></a><p>Trong
            thời kỳ loạn lạc cuối thời Mạc phủ Tokugawa, danh xưng “Hitokiri Battousai”. Thời đại
            chuyển biến sang một trang sử mới hắn cũng được thiên hạ mệnh danh là
            “Kẻ mạnh nhất” trong lịch sử. Thời gian dần trôi, vào năm Minh Trị thứ 11, tại khu phố cổ ở
            Tokyo, một lãng khách tự xưng là Himura Kenshin,...</p><span class="read-more"><a href="#">Read More</a></span>

            <div class="clear"></div>

            <h2  style="margin-top:-15px;">Film News</h2>
            <p>Giờ đây đặt vé tại Web Watcher càng thêm dễ dàng chỉ với vài thao tác vô cùng đơn giản. Để mua vé, hãy
                vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim, theo rạp, hoặc theo ngày. Sau đó, tiến hành mua
                vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi Đặt vé
                thành công của Web Watcher....<span class="read-more"><a href="#">Read More</a></span></p>
                
                <p>Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Web Watcher hoặc quét
                mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa. Nếu bạn đã chọn được phim hay
                để xem, hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ...<span class="read-more"><a
                        href="#">Read
                        More</a></span></p>
            

            

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