<?php
$servername="localhost";
$username="root";
$password="";
$database="CRUED";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("failed to connect".mysqli_connect_error());
}
//create student table
$sql="CREATE TABLE student(rno INT(3) PRIMARY KEY AUTO_INCREMENT,sname VARCHAR(15) NOT NULL,scity VARCHAR(15) NOT NULL,s_sign VARCHAR(50) NOT NULL)";

if(mysqli_query($con,$sql)){
    echo "table student created successfully..";
}else{
    echo "failed to create table student";
}
mysqli_close($con);
?>