<?php 
   session_start();
   include "connection.php";
?>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
?>
<?php 
if(isset($_POST["sua"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    
    if($username == ""){
        echo("Vui lòng nhập vào Tên người dùng! ");
    }
    if($email == ""){
        echo("Vui lòng nhập vào Email! ");
    }
    if($password == ""){
        echo("Vui lòng nhập vào Mật khẩu! ");
    }
    if($username != "" && $email != "" && $password != ""){
        $sql = "UPDATE sign_up SET username = '$username', email = '$email', password = '$password' WHERE id =$id";
        $query  =mysqli_query($con,$sql);
        header("Location: user_acc.php");
    }
}
?>
<?php
     $sql = "SELECT * FROM sign_up WHERE id =$id";
     $query = mysqli_query($con,$sql);
     $rows = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
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
            
           <div id="log_in"><a href="dangnhap.php"></a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
<form method="POST" action="" style="margin-left:70px;margin-top:100px;">
    <label>Tên người dùng</label><input type="text" name="username" value ="<?php echo $rows ['username'];?>"><br></br>
    <label>Email</label><input type="text" name="email" value ="<?php echo $rows ['email'];?>"><br></br>
    <label>Mật khẩu </label><input type="text" name="password" value ="<?php echo $rows ['password'];?>"><br></br>
    <input type="submit" name="sua" value="Sửa"style="width: 150px;cursor:pointer; ">
</form>
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