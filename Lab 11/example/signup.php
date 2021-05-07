<?php
include("db.php");
session_start();
$error  ='';


if(isset($_POST['signup'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $co_password = $_POST['co-password'];
    $gender = $_POST['gender'];

    if($password == $co_password){
        $query = "SELECT * from user WHERE email = '$email'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $error = "email used by another user, please enter another one";
        }else{
           $query = "INSERT INTO user(fullname,email,gender,password) Values('$fullname','$email','$gender','$password')";
           if(mysqli_query($con,$query)){
               $error =  "you have created an account successfully";
           }else{
               $error = "error".mysqli_error($con);
           }
        }

    }else{
        $error = "password and co-password must be matching";
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
        .radio-btns{
            display:flex;
            width:40%;
            justify-content:space-between;
            align-items:center;
        }
    </style>
</head>

<body>
    <form method="post">
        <div class="field">
            <label>Enter Your Fullname </label>
            <input type="text" name="fullname" />
        </div>
        <div class="field">
            <label>Enter Your email </label>
            <input type="email" name="email" />
        </div>
        <div class="field">
            <label>Enter Your Password </label>
            <input type="password" name="password" />
        </div>
        <div class="field">
            <label>Confirm Your Password </label>
            <input type="password" name="co-password" />
        </div>
        <div class="field ">
            <div class="radio-btns">
                <input type="radio" name="gender" value="female" /><label>Female </label> 
               <input type="radio" name="gender" value="male" /><label>Male </label> 
            </div>            
        </div>        
        <input type="submit" value="SIGNUP" name="signup" />
<center><?php echo $error;?></center>

    </form>
</body>

</html>