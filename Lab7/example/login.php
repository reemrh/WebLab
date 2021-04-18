<?php
session_start();

if(isset($_COOKIE['email'])){
    $_SESSION['email'] = $_COOKIE['email'];
}

if(isset($_SESSION['email'])){
    header("Location:home.php");
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remmember'])){
        setcookie("email",$email,time()+(2*24*60*60),"/");
    }
    $_SESSION['email'] = $email;
    header("Location:home.php");
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
    </form>
</body>

</html>