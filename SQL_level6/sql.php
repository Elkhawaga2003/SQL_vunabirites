<?php
$servername="localhost";
$dp_name="shop1";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,$dp_name);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

?>