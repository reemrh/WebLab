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

// $query = "CREATE TABLE member(
//     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(11) NOT NULL,
//     lastname VARCHAR(11) NOT NULL,
//     email VARCHAR(60) ,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
// )";

// if(mysqli_query($con,$query)){
//     echo "table created successfully ";
// }else{
//     echo "failed".mysqli_error($con);
// }

// $query = "CREATE DATABASE users";
// if(mysqli_query($con, $query)){
//     echo "created database successfully <br><br>";
// }else{
//     echo "Failed".mysqli_error($con);
// }

// $query = "INSERT INTO member(firstname,lastname,email) VALUES('Asmaa','Mahmoud','asmaa@a.com')";
// if(mysqli_query($con,$query)){
//     echo "inserted";
// }else{
//     echo"failed".mysqli_error($con);
// }

// $query = "UPDATE member SET
//  firstname='Alaa',
//  email='alaa@a.com'
//   WHERE id=4";
// if(mysqli_query($con,$query)){
//     echo "updated";
// }else{
//     echo"failed".mysqli_error($con);
// }

// $delete_query = "DELETE FROM member where id=1";
// if(mysqli_query($con,$delete_query)){
//     echo"deleted";
// }else{
//     echo"failed".mysqli_error($con);
// }

$query = "SELECT * FROM member";
$result= mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
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