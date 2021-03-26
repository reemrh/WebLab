<?php 
$name= "";
$email = "";
$result = ""; 
$age="";
$phone = "";
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $result = "$name 's email is $email";
}

?>

<form method="post" action="Form.php">
<label>Enter Your Name</label><br>
<input type="text" name="name" value="<?php echo $name;?>"/>
<br><br>
<label>Enter Your Email</label><br>
<input type="email" name="email" value="<?php echo $email;?>"/>
<br><br>
<input type="submit" value="submit" name="submit" />
</form>
<?php 
if(isset($_GET['submit2'])){
   $age= $_GET['age'];
   $phone = $_GET['phone'];
   $result = "Age : $age <br> phone : $phone";
}

?>
<center><h1><?php echo $result;?></h1></center>
<form method="get" action="Form.php">
<label>Enter Your age</label><br>
<input type="text" name="age" value="<?php echo $age;?>"/>
<br><br>
<label>Enter Your phone</label><br>
<input type="phone" name="phone" value="<?php echo $phone;?>"/>
<br><br>
<input type="submit" value="submit" name="submit2" />
</form>
