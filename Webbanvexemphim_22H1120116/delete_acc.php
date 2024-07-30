<?php
session_start();

include "connection.php";
?>

<?php 
    if(isset($_GET["id"])){
        $id =$_GET["id"];
    }

?>
<?php 
    $sql ="DELETE FROM sign_up WHERE id = $id";
    $query = mysqli_query($con,$sql);
    // chuyển hướng đến trang user_acc.php
    header("Location: user_acc.php");
    exit();

?>