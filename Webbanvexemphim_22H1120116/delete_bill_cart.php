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
    $sql ="DELETE FROM bill_cart WHERE id = $id";
    $query = mysqli_query($con,$sql);
    // chuyển hướng đến trang bill_cart.php
    header("Location: bill_cart.php");
    exit();
    
    
?>