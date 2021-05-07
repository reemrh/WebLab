<?php 
include('db.php');
$user_id='';
$msg ="";
session_start();
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
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}else{
    $user_id = $_SESSION['user_id'];
}


if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    setcookie("token","",time()-(60*60),"/");
    $query = "DELETE FROM auth WHERE user_id = $user_id";
    if(mysqli_query($con,$query)){
        header("Location: login.php");
    }else{
        $msg = "failed logout".mysqli_error($con);
    }

}

if(isset($_POST['delete'])){
    $query = "DELETE FROM user WHERE id = $user_id";
    if(mysqli_query($con,$query)){
        session_unset();
        session_destroy();
        setcookie("token","",time()-(60*60),"/");
        header("Location: login.php");
    }else{
        $msg = "failed logout".mysqli_error($con);
    }

}

if(isset($_POST['update'])){
    $fullname=$_POST['fullname'];
    $email = $_POST['email'];
    $mobile=$_POST['mobile'];
    $country= $_POST['country'];
    $gender = $_POST['gender'];

    $query = "UPDATE user SET 
    fullname = '$fullname',
    email = '$email',
    mobile = '$mobile',
    country='$country',
    gender='$gender' 
    WHERE id=$user_id";
    if(mysqli_query($con,$query)){
        $msg = "updated profile successfully";
    }else{
        $msg = "error in updating profile".mysqli_error($con);
    }

}



$user_fullname = $user_email =$user_country=$user_gender=$user_mobile='';
$select_query = "SELECT * FROM user WHERE id = $user_id";
$select_result = mysqli_query($con,$select_query);
    while($select_row = mysqli_fetch_assoc($select_result)){
        $user_fullname = $select_row['fullname'];
        $user_email = $select_row['email'];
        $user_country = $select_row['country'];
        $user_mobile = $select_row['mobile'];
        $user_gender = $select_row['gender'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update user profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner" style="padding:20px!important;">
            
                <div class="content-panel" style="margin-left:-30px">
                    <div style="width:100%;display:flex;justify-content:space-between;align-items:center;">
                        <h2 class="title">Profile</h2>
                        <form method="post">
                           <input style="color:green;font-weight:900;text-decoration:underline;background-color:white;border:none" type="submit" value="Logout" name="logout"/>
                        </form>
                    </div>
                    <form class="form-horizontal" method="post">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Personal Info<span style="color:blue;font-size:18px"><?php echo $msg;?></span></h3>
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </figure>                                
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Fullname</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" name="fullname" value="<?php echo $user_fullname;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Country</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" name="country" value="<?php echo $user_country;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Gender</label>
                                <div class="col-md-10 col-sm-9 col-xs-12 radio-btns" >
                                <input type="radio" name="gender" value="female" <?php echo ($user_gender == 'female')?'checked':''?> /><label>Female </label> 
                                <input type="radio" name="gender" value="male" <?php echo ($user_gender == 'male')?'checked':''?>/><label>Male </label>
                                </div>
                            </div>
                  
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Contact Info</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" name="email" value="<?php echo $user_email;?>">
                                    <p class="help-block">This is the email </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Mobile</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $user_mobile;?>">
                                    <p class="help-block">This is the mobile</p>
                                </div>
                            </div>
                            
                        </fieldset>
                        <hr>
                        <div style="margin-left:160px;width:83%;display:flex;justify-content:space-between;align-items:center;">
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-error" type="submit" name="delete" value="Delete Account">
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html> 