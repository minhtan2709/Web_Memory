<?php
 session_start();
    
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']== "POST"){
    //something was posted
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST["account"])){
        $selectaccount = $_POST['account'];
        if($selectaccount == 1){
        if(!empty($username) && !empty($password) && !is_numeric($username)){
            // lưu vào database
            $userid = random_num(20);
            $query = "INSERT into sign_up (userid, username, email, password) values ('$userid','$username','$email','$password')";

            mysqli_query($con, $query);

            if ($con->query($query) === TRUE) {
                // Chuyển hướng đến trang đăng nhập
                header("Location: dangnhap.php");
                exit();
            } 
            else {
                echo "Error: " . $query . "<br>" . $con->error;
            }

        } 
        else{

            echo"Hãy nhập thông tin hợp lệ";
        }

    }
    else if($selectaccount == 2){
        if(!empty($username) && !empty($password) && !is_numeric($username)){
            // lưu vào database
            $userid = random_num(20);
            $query = "INSERT into sign_up_admin (userid, username, email, password) values ('$userid','$username','$email','$password')";

            mysqli_query($con, $query);

            if ($con->query($query) === TRUE) {
                // Chuyển hướng đến trang đăng nhập
                header("Location: dangnhap.php");
                exit();
            } 
            else {
                echo "Error: " . $query . "<br>" . $con->error;
            }

        } 
        else{

            echo"Hãy nhập thông tin hợp lệ";
        }

    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
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
            
           <div id="log_in"><a href="dangnhap.php">Đăng nhập</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
        <div class="login-container">
            <h2>Đăng ký</h2>
            <form id="myForm" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <i class="ti-email"></i>
                <div id="errorMessage_email" style="color:#EE4C7C"></div>

                <label for="username">Tên Đăng Ký:</label>
                <input type="text" id="username" name="username" required>
                <i class="ti-user"></i>
                <div id="errorMessage_username" style="color:#EE4C7C"></div>

                <label for="sex">Giới Tính: </label>
                <div class="sex">
                    <label>
                        <input type="checkbox" name="gender" value="male">Nam
                 
                    </label>
                 
                    <label>
                        <input type="checkbox" name="gender" value="female">Nữ
                 
                    </label>

                </div>
                <div id="errorMessage_gender" style="color:#EE4C7C;margin-top:10px;"></div>
               
        
                <label for="password">Nhập Mật Khẩu Đăng Ký:</label>
                <input type="password" id="password" name="password" required>
                <i class="ti-lock"></i>
                <div id="errorMessage_password" style="color:#EE4C7C"></div>

                <label for="nationality">Quốc Tịch</label>
                <select class="form">
                    <option value="0">Chọn Quốc Tịch</option>
                    <option value="1">Viet Nam</option>
                    <option value="2">Thailand</option>
                    <option value="3">England</option>
                    <option value="4">Finland</option>
                    <option value="5">Ireland</option>
                    <option value="6">Austria</option>
                    <option value="7">Germany</option>
                    <option value="8">Switzerland</option>
                    <option value="9">Italy</option>
                    <option value="10">Serbia</option>
                    <option value="11">Spain</option>
                    <option value="12">Croatia</option>
                    <option value="13">Russia</option>
                    <option value="14">Ukraine</option>
                    <option value="15">Ireland</option>
                    <option value="16">Canada</option>
                    <option value="17">Mexico</option>
                    <option value="18">United States</option>
                    <option value="19">Cuba</option>
                    <option value="20">Argentina</option>
                    <option value="21">Portugal</option>
                    <option value="22">France</option>
                    <option value="23">Sweden</option>
                    <option value="24">Yemen</option>
                    <option value="25">Zambia</option>
                    <option value="26">Zimbabwe</option>
                    <option value="27">Uruguay</option>
                    <option value="28">Uzbekistan</option>
                    <option value="29">Vanuatu</option>
                    <option value="30">Vatican City</option>
                    <option value="31">Venezuela</option>
                    <option value="32">Afghanistan</option>
                    <option value="33">Albania</option>
                    <option value="34">Algeria</option>
                    <option value="35">Andorra</option>
                    <option value="36">Angola</option>
                </select>
                <div id="errorMessage_nationality" style="color:#EE4C7C"></div>

                <label for="note">Ghi Chú:</label>
                <input type="text" id="note" name="note" required>
                <i class="ti-pencil"></i>

                <select name="account" id ="account" >
                    <option value="1">User</option>
                    <option value="2">Admin</option>
                </select>
               
            
            <button type="submit">Đăng Ký</button>
            <div id="icon">
                <div id="icon" class="footer-socials">
                    <a href="https://www.facebook.com/"style="margin-right:-8px;"><i class="ti-facebook"></i></a>
                    <a href="https://www.twitter.com/"><i class="ti-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>

                </div>
            </div>
        </form></br>
    
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