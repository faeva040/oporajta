<?php

$servername="localhost";
$user="root";
$password="";
$database="oporajita";

$con=mysqli_connect($servername,$user,$password,$database);

$name=$_POST['name'];
$uid=$_POST['uid'];
$email=$_POST['email'];
$bday=$_POST['bday'];
$area=$_POST['area'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$file=$_FILES['file']['name'];


$file = rand(1000,100000)."-".$_FILES['file']['name'];



$file_loc = $_FILES['file']['tmp_name'];
$folder="upload/";
$final_file=str_replace(' ','-',$file);



$supported_image = array('gif','jpg','jpeg','png');
$ext = strtolower(pathinfo($final_file, PATHINFO_EXTENSION));

if (in_array($ext, $supported_image)) {

move_uploaded_file($file_loc,$folder.$final_file);
$query="INSERT INTO usertbl VALUES('$name', '$uid', '$email', '$bday', '$area', '$pass', '$cpass', '$final_file')";
mysqli_query($con,$query);
   }


 header("Location:view.php");



?>