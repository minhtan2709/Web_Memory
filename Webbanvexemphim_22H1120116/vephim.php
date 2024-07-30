<?php
 session_start();
    
include("connection.php");
include("functions.php");

 $userdata = check_login($con)


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
    <title>Vé Phim</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/ticktet.css">
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="icon" href="/22H1120116_TRANLEMINHTAN/HINH/logotab.jpg" type="image/x-icon">
</head>
<body>
<div class="header">
    <div class="outer">
        <div id="logo-bg">
        <a href="index.php" style="text-decoration: none;"><h1>WEB Watcher</h1></a>
            <span class="tag" style="margin-left:-8px;">Không Giới Hạn, Không Quảng Cáo</span>
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
    <table  border="0">
                <tr>
                    <th>VÉ 2D</th>
                    <th colspan="5">GHẾ THƯỜNG (Giá 01/ Ghế)</th>
                </tr>
                <tr>
                    <th>Thời Gian</th>
                    <th>Trẻ em</th>
                    <th>Thành viên CGV Young</th>
                    <th>Sinh viên</th>
                    <th>Người cao tuổi</th>
                    <th>Người lớn</th>
                </tr>
                <tr>
                    <td rowspan="">Thứ 2-3-5</td>
                    <td colspan="4" rowspan="2">60k</td>
                    <td rowspan="2">70k</td>


                </tr>
                <tr>
                    <td>Suất đầu</td>

                </tr>
                <tr>
                    <td>Thứ 2-3-5</td>
                    <td colspan="2" rowspan="4">60k</td>
                    <td rowspan="2" colspan="3">70k</td>

                </tr>
                <tr>
                    <td>Suất trước 12h</td>
                </tr>
                <tr>
                    <td>Thứ 2-3-5</td>
                    <td rowspan="2">85k</td>
                    <td rowspan="2">70k</td>
                    <td rowspan="2">85k</td>
                </tr>
                <tr>
                    <td>Suất sau 12h</td>
                </tr>
                <tr>
                    <td>Thứ 4</td>
                    <td colspan="5">75k</td>
                </tr>
                <tr>
                    <td>Thứ 6-7-CN</td>
                    <td rowspan="2" colspan="2">70k</td>
                    <td rowspan="2" colspan="2">80k</td>
                    <td rowspan="2">105k</td>
                </tr>
                <tr>
                    <td>Suất trước 17h</td>

                </tr>
                <tr>
                    <td>Thứ 6-7-CN</td>
                    <td rowspan="2">70k</td>
                    <td rowspan="2">80k</td>
                    <td rowspan="2">105k</td>
                    <td rowspan="2">80k</td>
                    <td rowspan="2">105k</td>

                </tr>
                <tr>
                    <td>Suất sau 17h</td>
                </tr>



    </table>
            <h1 style = "color:#EE4C7C; text-align:center">Các Phim Nổi Bật </h1>
        <table border ="0" align="center">
        <tr>
            <th>ID Phim</th>
            <th>Ảnh</th>
            <th>Tên Phim</th>
            <th>Nội Dung</th>
            <th>Giá</th>
            
            
        </tr>
        <?php  
            $sql = "SELECT * FROM product";
            $query = mysqli_query($con,$sql);
            while($rows = mysqli_fetch_array($query)){

            
        ?>
        <tr>
            <td><?php echo $rows["product_id"] ?></td>
            <td><img src="/22H1120116_TRANLEMINHTAN/HINH/<?php echo $rows['image'] ?> " width=100px height=100px ></td>
            <td style="text-align: center;"><a href="detail_ticket.php?id=<?php echo $rows['id']; ?>"<td><?php echo $rows["product_name"] ?></td></a></td>
            <td style="text-align: justify;"><?php echo $rows["product_detail"] ?></td>
            <td><?php echo $rows["cost"] ?></td>            
        </tr>
        
        <?php } ?>

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