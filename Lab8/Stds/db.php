<?php
$host = "localhost";
$username="root";
$password = "";


// $con  =  mysqli_connect($host,$username,$password);
// if(!$con){
//     die("connection failed".mysqli_connect_error($con));
// }
// echo "Connected Successfully";


$conn = new mysqli($host,$username,$password);

if($conn -> connect_error ){
    die("Failed".$conn -> $connect_error);
}
echo " Done Successfully";


?>