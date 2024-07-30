<?php
session_start();


include("connection.php");
include("functions.php");

 $userdata = check_login($con);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $phonenum =  $_POST['phonenum'];
    $content =  $_POST['content'];

    if (!empty($username) && !empty($content) && !is_numeric($username)) {
        // lưu vào database
        $userid = random_num(20);
        // Sửa lỗi syntax trong câu truy vấn SQL
        $query = "INSERT INTO contact (userid, username, email, phonenum, content) VALUES ('$userid','$username','$email','$phonenum','$content')";

        // Sử dụng mysqli_query để thực hiện truy vấn
        $result = mysqli_query($con, $query);

        if ($result) {
            // Chuyển hướng đến trang 
            header("Location: lienhe.php");
            exit;
        } 
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Hãy nhập thông tin hợp lệ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/contact.css">
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
            
            <div id="log_in"><a href="dangnhap.php"><?php echo $userdata['username']; ?></a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
        <div class="contact">
            <h2>LIÊN HỆ WEB WATCHER</h2>
            <div class="content-contact">
                <h2>Gửi Nội Dung Liên Hệ</h2>
                <form id="content-contact" method="post">
                    <input type="text" id="name" name="username" placeholder="Họ Tên(*):" required>
                    <input type="email" id = "email" name="email" placeholder="Nhập email(*):" required>
                    <input type="text" id="phone_number" name ="phonenum" placeholder="Điện thoại(*):" required>
                    <input type="text" id="content" name="content" placeholder="Nội dung(*):"required>
                    <button type="submit">Gửi</button>
                </form>
                
            </div>
            
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