<?php
$hostname="localhost";
$username="root";
$password="";
//create connection
$con=mysqli_connect($hostname,$username,$password);
if(!$con){
  die("Connection failed: " . mysqli_connect_error());
}
//create database
$sql="CREATE DATABASE CRUED";
if(mysqli_query($con,$sql)){
  echo "database CRUED created successfully";
}
else{
  echo "database CRUED not created";
}
mysqli_close($con);

?>