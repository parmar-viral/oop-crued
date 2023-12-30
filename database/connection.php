<?php
$servername="localhost";
$username="root";
$password="";
$database="CRUED";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("failed to connect".mysqli_connect_error());
}else{
    echo "connection successfully..";
}

mysqli_close($conn);
?>