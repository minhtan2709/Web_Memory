<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/signin.css">
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="icon" href="/22H1120116_TRANLEMINHTAN/HINH/logotab.jpg" type="image/x-icon">
</head>
<body>
<div class="header">
    <div class="outer">
        <div id="logo-bg">
            <a href="index.php" style="text-decoration: none;"><h1>WEB Watcher</h1></a>
            <span class="tag"style="margin-left:-8px;">Không Giới Hạn, Không Quảng Cáo</span>
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
            
           <div id="log_in"><a href="dangnhap.php">Admin</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
    <table border ="0" align="center">
        <tr>
            <th>Tên Người Dùng</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Nội Dung</th>
            <th>Ngày gửi</th>
            
        </tr>
        <?php  
            $sql = "SELECT * FROM contact";
            $query = mysqli_query($con,$sql);
            while($rows = mysqli_fetch_array($query)){

            
        ?>
        <tr>
            <td><?php echo $rows["username"] ?></td>
            <td><?php echo $rows["email"] ?></td>
            <td><?php echo $rows["phonenum"] ?></td>
            <td><?php echo $rows["content"] ?></td>
            <td><?php echo $rows["date"] ?></td>
            
        </tr>
        
        <?php } ?>

    </table>

    </div>
</div>
<div class="footercontent">
    <a href="index.php">Trang chủ</a>
    <a href="gioithieu.php">Giới Thiệu</a>
    <a href="vephim.php">Vé Phim</a>
    <a href="khuyenmai.php">Khuyến Mãi</a>
    <a href="lienhe.php">Liên Hệ</a>
</div>
<div class="clear"></div>
<div class="credit"></div>

</body>
</html>