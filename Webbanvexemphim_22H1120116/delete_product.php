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
    $sql ="DELETE FROM product WHERE id = $id";
    $query = mysqli_query($con,$sql);
    // chuyển hướng đến trang ticket.php
    header("Location: ticket.php");
    exit();

?>