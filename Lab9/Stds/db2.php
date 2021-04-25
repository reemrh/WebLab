<?php
$host = "localhost";
$username="root";
$password = "";
$databasename = "user";


$conn = new mysqli($host,$username,$password,$databasename);
echo "file 2<br><br>";
if($conn -> connect_error ){
    die("Failed".$conn -> $connect_error);
}


// $query = "CREATE DATABASE user";
// if($conn -> query($query) == TRUE){
//     echo "created successfully <br><br>";
// }else{
//     echo "faild".$conn -> error;
// }

$query = "CREATE TABLE member(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(11) NOT NULL,
    lastname VARCHAR(11) NOT NULL,
    email VARCHAR(60) ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
)";

if($conn -> query($query) == TRUE){
 echo "table created successfully";
}else{
    echo"Error".$conn -> error;
}

?>