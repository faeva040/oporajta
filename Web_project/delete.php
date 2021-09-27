<?php

$servername="localhost";
$user="root";
$password="";
$database="oporajita";

$con=mysqli_connect($servername,$user,$password,$database);

$id=$_GET['id'];
$query="DELETE FROM usertbl WHERE uid=$id";
$data=mysqli_query($con,$query);
header("Location:view.php");

?>