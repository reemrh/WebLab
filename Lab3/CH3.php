<?PHP

//$day = date("D");

// if($day == "Tue"){
//     echo 'have a nice Tuesday';
// }else if($day == "Mon"){
//     echo "have a nice Monday ";
// }else if($day == "Sun"){
//     echo "have a nice Sunday ";
// }else if($day == "Sat"){
//     echo "have a nice Sat ";
// }else if($day == "Fri"){
//     echo "have a nice Friday ";
// }else{
//     echo "have a nice $day day ";
// }


// switch($day){
//     case "Tue": echo "have a nice $day day ";break;
//     case "Mon": echo "have a nice $day day ";break;
//     case "Sun": echo "have a nice $day day ";break;
//     case "Sat": echo "have a nice $day day ";break;
//     default: echo "have a nice $day day ";
// }


//////////////////////////////////
# the solution of the first activity 
////////////////////////////////// 

echo " <br> <br> The solution of the first activity";
$x = 10;
$y = 7;
$z= $x + $y;
echo  "<br> $x + $y = $z";
$z= $x - $y;
echo  "<br>$x - $y = $z";
$z= $x * $y;
echo  "<br>$x * $y = $z";
$z= $x / $y;
echo  "<br>$x / $y = $z";
echo  "<br>$x % $y =".($x % $y);

//////////////////////////////////
# the solution of the second activity 
//////////////////////////////////
echo " <br> <br> The solution of the second activity";

$S=8; 
echo "<br> value is now = $S";
echo"<br> ADD 2 value is now =".($S+=2);
echo"<br> SUB 4 value is now =".($S-=4);
echo"<br> MUL 5 value is now =".($S*=5);
echo"<br> DIV 3 value is now =".($S/=3);
echo"<br> INC value is now =".(++$S);
echo"<br> DEC value is now =".(--$S);

//////////////////////////////////
# the solution of the third activity 
# using (if else) 
//////////////////////////////////
echo " <br> <br> The solution of thethird activity";

$month = date("F");
if($month == "August"){
    echo '<br> It\'s Augest';
}else{
    echo '<br> It\'s not Augest, it is '.$month;
} 

//////////////////////////////////
# the solution of the third activity 
# using (conditiona statment ? : ) 
//////////////////////////////////
echo($month == "August") ? '<br> It\'s Augest' : '<br> It\'s not Augest ,it is '.$month;

?>