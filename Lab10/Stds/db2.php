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

// $query = "CREATE TABLE member(
//     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(11) NOT NULL,
//     lastname VARCHAR(11) NOT NULL,
//     email VARCHAR(60) ,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
// )";

// if($conn -> query($query) == TRUE){
//  echo "table created successfully";
// }else{
//     echo"Error".$conn -> error;
// }



// $query = "INSERT INTO member(firstname,lastname,email) VALUES('Lama','Ahmad','Lama@a.com')";
// if($conn -> query($query) == TRUE){
//     echo "inserted";
// }else{
//     echo"failed".$conn ->error;
// }

$query = "UPDATE member SET
 firstname='Alaa',
 email='alaa@a.com'
  WHERE id=1";
if($conn -> query($query)){
    echo "updated";
}else{
    echo"failed".$conn ->error;
}

$delete_query = "DELETE FROM member where id=1";
if($conn -> query($delete_query)){
    echo"deleted";
}else{
    echo"failed".$conn ->error;
}

$query = "SELECT * FROM member";
$result= $conn ->query($query);
if($result -> num_rows > 0){
     while($row = $result -> fetch_assoc()){
         $id = $row['id'];
         $firstname = $row['firstname'];
         $lastname = $row['lastname'];
         $email = $row['email'];
         $reg_date= $row['reg_date'];
         
         echo "<br> member id = : ".$id;
         echo "<br> member name = : ".$firstname." ".$lastname;
         echo "<br> member email = : ".$email;
         echo "<br> member reg_date= : ".$reg_date;
         echo  "<br><br>////////////////////////";
     }
}else{
    echo "<br>no results found";
}
?>