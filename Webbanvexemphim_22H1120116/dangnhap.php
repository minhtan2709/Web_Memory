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
                // đọc database
           
                $query = "SELECT * FROM sign_up WHERE username = '$username' LIMIT 1";

                $result =mysqli_query($con, $query);
                if($result){
                    if($result && mysqli_num_rows($result)>0){
                        $userdata = mysqli_fetch_assoc($result);
                    
                        if($userdata['password'] === $password && $userdata['username'] === $username ){
                            if($userdata['email'] === $email){
                            $_SESSION['userid'] = $userdata['userid'];
                            header("Location: index.php");
                            exit;
                            }
                            else {
                                $error = "Thông tin đăng nhập không chính xác";
                            }
                        
                        }
                       
                        
                    }
                    
                
                }
                
                
            }
            else{

                echo"Hãy nhập thông tin hợp lệ";
            }
            
            
           
         
         }
         else if($selectaccount == 2){
            if(!empty($username) && !empty($password) && !is_numeric($username)){
                // đọc database
           
                $que = "SELECT * FROM sign_up_admin WHERE username = '$username' LIMIT 1";

                $result =mysqli_query($con, $que);
                if($result){
                    if($result && mysqli_num_rows($result)>0){
                        $userdata = mysqli_fetch_assoc($result);
                    
                        if($userdata['password'] === $password && $userdata['username'] === $username ){
                            if($userdata['email'] === $email){
                            $_SESSION['userid'] = $userdata['userid'];
                            header("Location: user_acc.php");
                            exit;
                            }
                            else {
                                $error = "Thông tin đăng nhập không chính xác";
                            }
                        
                        }
                        
                    }
                   
                    
                
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
    <title>Đăng Nhập</title>
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
            
           <div id="log_in"><a href="dangnhap.php">Đăng nhập</a></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="container" id ="container">
    <div id="outer2">
        <div class="login-container">
            <h2>Đăng nhập</h2>
            <form method="post">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" id="username" name="username" required>
                <i class="ti-user"></i>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <i class="ti-email"></i>

                <label for="password">Nhập Mật Khẩu :</label>
                <input type="password" id="password" name="password" required>
                <i class="ti-lock"></i>

                <select name="account" id ="account" >
                    <option value="1">User</option>
                    <option value="2">Admin</option>
                </select>
            

            <button type="submit">Đăng Nhập</button>
            <a href="dangky.php"><button type="button">Đăng Ký</button></a>
            <div id="icon">
                <div id="icon" class="footer-socials">

                    <a href="https://www.facebook.com/" style="margin-right:-10px;"><i class="ti-facebook"></i></a>
                    <a href="https://www.twitter.com/" style="margin-right:-5px;"><i class="ti-twitter"></i></a>
                    <a href="https://www.instagram.com/" style="margin-right:-5px;"><i class="ti-instagram"></i></a>

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