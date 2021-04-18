<?php 
$email = "";
session_start();
if(isset($_COOKIE['email'])){
    $_SESSION['email'] = $_COOKIE['email'];
}
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}else{
    $email = $_SESSION['email'];
}


if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    setcookie("email","",time()-(60*60),"/");
    header("Location: login.php");
}

?>

<center> <h1> <?php echo " Your email is ".$email ;?></h1></center>
<center>
<form method="post">
<input type="submit" value="Logout" name="logout"/>
</form>
</center>