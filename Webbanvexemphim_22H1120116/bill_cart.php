<?php
session_start();

include("connection.php");
include("functions.php");
$userdata = check_login($con);


if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $sql = "SELECT * FROM product WHERE id = $id";
    $query = mysqli_query($con, $sql);



    if ($query) {

        $rows = mysqli_fetch_array($query);


        if ($rows) {

            $product_id = $rows['product_id'];
            $product_name = $rows['product_name'];
            $date = $rows['date'];
            $cost = $rows['cost'];
            $image = $rows['image'];
            $qr = "INSERT INTO bill_cart(product_id, product_name, date, cost,image) VALUES ('$product_id', '$product_name', '$date', '$cost','$image')";


            if (mysqli_query($con, $qr)) {

                header("Location: bill_cart.php");
                exit();
            } else {

                echo "Error: " . $qr . "<br>" . mysqli_error($con);
            }
        } else {
            echo "No data found for the provided ID.";
        }
    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} 
?>
<?php 
    if(isset($_FILES['image'])){
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], 'HINH/' . $file_name);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/ticktet.css">
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
        <h1 style ="color:#EE4C7C; text-align:center;">Hóa Đơn</h1>
        
    <table border ="0" align="center">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên Phim</th>
            <th>Ngày chiếu</th>
            <th>Giá</th>
            <th><a href="vephim.php"><i class="ti-plus" style="color:#EE4C7C;"></i></a></th>
        </tr>
       <?php 
         $totalCost = 0;
         $SQL = "SELECT * FROM bill_cart";
         $que = mysqli_query($con, $SQL);
         while($rows = mysqli_fetch_array($que)){
            $totalCost += $rows['cost'];
       
       ?>
        <tr>
            <td><?php echo $rows["product_id"] ?></td>
            <td><img src="/22H1120116_TRANLEMINHTAN/HINH/<?php echo $rows['image'] ?> " width=100px height=100px ></td>
            <td><?php echo $rows["product_name"] ?></td>
            <td><?php echo $rows["date"] ?></td>
            <td><?php echo number_format($rows["cost"], 3, '.', '.'); ?></td>
            <th><a href="delete_bill_cart.php?id=<?php echo $rows['id']?>"><i class="ti-trash"></i></a></th> 
        </tr>
       <?php } ?>
       <tr>
        <td colspan="4">Tổng</td>
        <td ><?php echo number_format($totalCost, 3, '.', '.') . 'đ'; ?></td>
        <td><button><a href="thanhtoan.php">Thanh toán</a></button></td>
       </tr>
        
    </table>

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