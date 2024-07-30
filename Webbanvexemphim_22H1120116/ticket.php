<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="/22H1120116_TRANLEMINHTAN/CSS/asset/ticket'.css">
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
    <div id="search">
        <form action=""method="POST">
            <input type="text" name ="txtsearch" placeholder="Nhập tên để tìm kiếm">
            <input type="submit"name="search" value="Search">
            <i class="ti-search" style="margin-top:-27px;margin-left:340px;color:#ccc;"></i> 
        </form>
    </div>
    <?php
    if(isset($_POST["search"])){
        $s = $_POST['txtsearch'];
        if($s ==""){
            echo "Vui lòng nhập vào thanh tìm kiếm";
            echo"<a href='ticket.php'>Home</a>";

        }
        else{
            $sql = "SELECT * FROM product WHERE product_name LIKE '%$s%'";
            $qr = mysqli_query($con,$sql);
            $count = mysqli_num_rows($qr);
            
            if($count <=0){
                echo "Không tìm thấy kết quả nào với từ khóa, ".$s."</br>";
                echo"<a href='ticket.php'>Home</a>";
            }
            else{
                echo"Tìm thấy ".$count." kết quả với từ khóa, ".$s."</br>";
                
            ?>

        <table border ="0" align="center" style="margin-top:100px;">
        <tr>
            <th>ID</th>
            <th>Tên Phim</th>
            <th>Nội Dung</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th><a href="add_product.php"><i class ="ti-plus"></i></a></th>
        </tr>
        <?php  
            
            while($rows = mysqli_fetch_array($qr)){
                
        ?>
        <tr>
            
            <td><?php echo $rows["product_id"] ?></td>
            <td><?php echo $rows["product_name"] ?></td>
            <td style="text-align:justify;"><?php echo $rows["product_detail"] ?></td>
            <td><?php echo $rows["cost"] ?></td>
            <td><?php echo $rows['image'] ?></td>
            <td><a href="change_product.php?id=<?php echo $rows['id']; ?>"><i class ="ti-pencil-alt" ></i></a>|<a href="delete_product.php?id=<?php echo $rows['id']; ?>"><i class ="ti-trash" ></i></a></td>
        </tr>

        
        <?php } ?>

    </table>
        <a href='ticket.php'style="margin-left:-220px;">Home</a>
                <?php

                
            }

        }
    }
    else{
        ?>
        <table border ="0" align="center" style="margin-top:100px;">
        <tr>
            <th>ID</th>
            <th>Tên Phim</th>
            <th>Nội Dung</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th><a href="add_product.php"><i class ="ti-plus"></i></a></th>
        </tr>
        <?php  
            $sql = "SELECT * FROM product";
            $query = mysqli_query($con,$sql);
            while($rows = mysqli_fetch_array($query)){
                
        ?>
        <tr>
            
            <td><?php echo $rows["product_id"] ?></td>
            <td><?php echo $rows["product_name"] ?></td>
            <td style="text-align:justify;"><?php echo $rows["product_detail"] ?></td>
            <td><?php echo $rows["cost"] ?></td>
            <td><?php echo $rows['image'] ?></td>
            <td><a href="change_product.php?id=<?php echo $rows['id']; ?>"><i class ="ti-pencil-alt" ></i></a>|<a href="delete_product.php?id=<?php echo $rows['id']; ?>"><i class ="ti-trash" ></i></a></td>
        </tr>

        
        <?php } ?>

    </table>

        <?php
    }
    ?>
    
    </div>
</div>
<div class="footercontent">
    <a href="index.php">Trang chủ</a>
    <a href="gioithieu.php">Giới Thiệu</a>
    <a href="vephim.php">Vé Phim</a>
    <a href="khuyenmai.php">Khuyến Mãi</a>
    <a href="contact.php">Liên Hệ</a>
</div>
<div class="clear"></div>
<div class="credit"></div>

</body>
</html>