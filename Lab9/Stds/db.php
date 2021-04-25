<?php
$host = "localhost";
$username="root";
$password = "";
$database = "users";

echo "file 1<br><br>";
$con  =  mysqli_connect($host,$username,$password,$database);
if(!$con){
    die("connection failed".mysqli_connect_error($con));
}

$query = "CREATE TABLE member(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(11) NOT NULL,
    lastname VARCHAR(11) NOT NULL,
    email VARCHAR(60) ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($con,$query)){
    echo "table created successfully ";
}else{
    echo "failed".mysqli_error($con);
}

// $query = "CREATE DATABASE users";
// if(mysqli_query($con, $query)){
//     echo "created database successfully <br><br>";
// }else{
//     echo "Failed".mysqli_error($con);
// }




?>