<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Người Dùng</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/signin.css">
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
            <div id="toplinks"><a href="ticket.php">Vé phim</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="khuyenmai.php">Khuyễn Mãi</a></div>
            <div class="sap">|</div>
            <div id="toplinks"><a href="contact.php">Liên hệ</a></div>
            
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
            <th>Mật Khẩu</th>
            <th>Ngày tạo</th>
            <th><a href="add.php"><i class ="ti-plus" ></i></a></th>
        </tr>
        <?php  
            $sql = "SELECT * FROM sign_up";
            $query = mysqli_query($con,$sql);
            while($rows = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $rows["username"] ?></td>
            <td><?php echo $rows["email"] ?></td>
            <td><?php echo $rows["password"] ?></td>
            <td><?php echo $rows["date"] ?></td>
            <td><a href="change.php?id=<?php echo $rows['id']; ?>"><i class ="ti-pencil-alt"></i></a>|<a href="delete_acc.php?id=<?php echo $rows['id']; ?>"><i class ="ti-trash"></i></a></td>
        </tr>
        
        <?php } ?>

    </table>

    </div>
</div>
<div class="footercontent">
    <a href="index.php">Trang chủ</a>
    <a href="gioithieu.php">Giới Thiệu</a>
    <a href="ticket.php">Vé Phim</a>
    <a href="khuyenmai.php">Khuyến Mãi</a>
    <a href="contact.php">Liên Hệ</a>
</div>
<div class="clear"></div>
<div class="credit"></div>

</body>
</html>