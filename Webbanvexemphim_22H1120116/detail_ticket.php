<?php
    session_start();
    
    include("connection.php");
    include("functions.php");

 $userdata = check_login($con)

?>

<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    
?>
<?php 
    if(isset($_FILES['image'])){
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'HINH/' . $file_name);
        
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
         $sql = "SELECT * FROM product WHERE id = $id";
         $query = mysqli_query($con,$sql);
         $rows = mysqli_fetch_array($query);
         $query  ="SELECT * FROM bill_cart"
    
    
?>

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Phim</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/ticket_detail.css">
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="icon" href="/22H1120116_TRANLEMINHTAN/HINH/logotab.jpg" type="image/x-icon">
</head>
<body>
<div class="header">
    <div class="outer">
        <div id="logo-bg">
            <h1>WEB Watcher</h1>
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
    
        <div class="card-news">   
            <div class="name">
                <h2><?php echo $rows['product_name'] ?></h2>                  
                <h5><?php echo $rows['date']?></h5>
            </div>
                <img src="/22H1120116_TRANLEMINHTAN/HINH/<?php echo $rows['image'] ?> " width=300 height=400 >
                <div class="detail">
                <h4>Thể Loại:<?php echo $rows['category']?></h4>
                <h4 style="margin-top:-400px">Sơ Lược Về Nội Dung:</h4>
                <p style="text-align: justify;"><?php echo $rows['product_detail']?></p>
                <video loop controls src="/VIDEO/<?php echo $rows['video']?> " width="500px"height="300px"></video>
                </div>
                <div class="cost"><?php echo $rows['cost']?></div>
                <div class="icon">
                <a href="bill_cart.php?id=<?php echo $rows['id'] ?>"><i class ="ti-shopping-cart" ></i></a>
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