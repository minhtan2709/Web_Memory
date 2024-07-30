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
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_detail = $_POST['product_detail'];
    $category = $_POST['category'];
    $cost = $_POST['cost'];
    $image = $_POST['image'];
    $video = $_POST['video'];
    $date  =$_POST['date'];
    if($cost == ""){
        echo("Vui lòng nhập giá! ");
    }
    if($product_id == ""){
        echo("Vui lòng nhập vào id phim! ");
    }
    if($product_name == ""){
        echo("Vui lòng nhập vào tên phim! ");
    }
    if($image == ""){
        echo("Vui lòng nhập vào ảnh phim! ");
    }
    if($category == ""){
        echo("Vui lòng nhập vào ảnh phim! ");
    }
    if($date == ""){
        echo("Vui lòng nhập vào thể loại phim! ");
    }
    if($video == ""){
        echo("Vui lòng nhập vào video phim! ");
    }
    if($product_id != "" && $product_name != "" && $cost != ""){
        $sql = "UPDATE  product SET product_id ='$product_id', product_name = '$product_name',product_detail = '$product_detail',category='$category', cost = '$cost',image='$image',date ='$date', video ='$video' WHERE id =$id";
        $query  =mysqli_query($con,$sql);
        header("Location: ticket.php");
    }
}
?>
<?php 
    if(isset($_FILES['video'])){
        $file = $_FILES['video'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'VIDEO/' . $file_name);
        
    }
?>
<?php
     $sql = "SELECT * FROM product WHERE id =$id";
     $query = mysqli_query($con,$sql);
     $rows = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/signup.css">
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
            
           <div id="log_in"><a href="dangnhap.php"></a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
<form method="POST" action=""style="margin-left:70px;margin-top:50px;">
    <label>ID</label><input type="text" name="product_id"><br></br>
    <label>Tên phim</label><input type="text" name="product_name"><br></br>
    <label>Nội dung phim</label><input type="text" name="product_detail"><br></br>
    <label>Thể loại</label><input type="text" name="category"><br></br>
    <label>Giá </label><input type="text" name="cost"><br></br>
    <label>Ảnh</label><input type="text" name="image" ><br></br>
    <label>Video</label><input type="text" name="video" ><br></br>
    <label>Thời gian</label><input type="text" name="date" ><br></br>
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