<?php

session_start();
$_SESSION['id']=$_POST['uid'];
$servername="localhost";
$user="root";
$password="";
$database="oporajita";

$con=mysqli_connect($servername,$user,$password,$database);

$uid=$_POST['uid'];
$pass=$_POST['pass'];


$query="SELECT * FROM usertbl where uid='$uid' and pass='$pass'";

$data=mysqli_query($con,$query);



if(mysqli_fetch_array($data)){
    
    
  header("Location:view.php");
    exit;
}
else{
    
    header("Location:login.php");
}



?>

