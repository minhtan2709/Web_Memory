<?php   
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "minh_tan";
  if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    echo("Fail to connect.");
  }


?>