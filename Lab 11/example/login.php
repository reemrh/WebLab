<?php
session_start();
include("db.php");
$msg ="";
if(isset($_COOKIE['token'])){
    $token = $_COOKIE['token'];
    $query = "SELECT * FROM auth WHERE token ='$token'";
    if($result = mysqli_query($con,$query)){
        while($row = mysqli_fetch_assoc($result)){
            $user_id = $row['user_id'];
            $_SESSION['user_id'] = $user_id;
        }
    }
}

if(isset($_SESSION['user_id'])){
    header("Location:/example/home.php");
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
            $user_id = $row['id'];
            $user_password = $row['password'];

            if($password == $user_password){
                 $_SESSION['user_id'] = $user_id;
                if(isset($_POST['remmember'])){
                    $token = openssl_random_pseudo_bytes(8);
                    $token = bin2hex($token);
                    setcookie("token",$token,time()+(30*24*60*60),"/");
                    $query = "INSERT INTO auth(user_id,token) VALUES($user_id,'$token')";
                    if(mysqli_query($con,$query)){
                          header("Location:/example/home.php");                         
                    }else{
                        $msg = "failed".mysqli_error($con);
                    }
                }
                header("Location:home.php");                         
            }else{
                $msg = "incorrect email or password";
            }
        }
    }else{
        $msg ="incorrect email or password";
    }
     
  
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 30%;
            min-height: 300px;
            background-color: lightsteelblue;
            display: flex;
            flex-direction: column;
            margin-top: 100px;
            padding: 30px;
        }

        .field {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            margin-bottom:  10px;
        }

        .field label {
            margin: 15px 0px;
        }

        .field input {
            height: 25px;
        }

        .remmeber {
            margin: 20px 0px;
        }

        input[type=submit] {
            height: 35px;
            margin-top: 20px;
            background-color: green;
            color: white;
            width: 60%;
            align-self: center;
            outline: none;
            border: none;
        }
        input[type=submit]:hover{
            background-color:lightseagreen;
            color:black;
            cursor:pointer;
        }
    </style>
</head>

<body>

    <form method="post">
        <div class="field">
            <label>Enter Your email </label>
            <input type="email" name="email" />
        </div>
        <div class="field">
            <label>Enter Your Password </label>
            <input type="password" name="password" />
        </div>
        <div class="remmember">
            <input type="checkbox" name="remmember" />
            <label>Remmember login? </label>
        </div>
        <input type="submit" value="LOGIN" name="login" />
        <center><?php  echo $msg;?></center>
    </form>
</body>

</html>