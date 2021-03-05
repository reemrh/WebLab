<?php 

// single line comment 
#single line comment 
/* multi lines comment*/

echo "<center><h1> Hello World </h1></center> ";

$sum = 5;
echo "<br> the sum is ".$sum;
echo "<br> the sum is $sum";
echo '<br> the sum is $sum';
echo '<br> the sum is'.$sum;


$var1=3;
$var2=" \"String variable \"";
$var_2='\"String variable \" defined with single quotes ';
$var3=55.55;
$var4=null;
$var5=true;
echo "<br>";

echo "this variable is integer ".$var1;
echo "<br>";
echo "this variable is string ".$var2;
echo "<br>";
echo "this variable is string ".$var_2;
echo "<br>";
echo "this variable is double ".$var3;
echo "<br>";
echo "this variable is null ".$var4;
echo "<br>";
echo "this variable is boolean ".$var5;
echo "<br>";
echo "\$var1.\$var3 =  ".$var1.$var3;

if($var5){
    echo " <br> if statement result \$var5 is True";
}else{
    echo "<br>  if statement result \$var5 is False";
}


$n1=20;
$n2=50;

function sum(){
   //GLOBAL $n1,$n2;
    return $GLOBALS['n1']+$GLOBALS['n2'];
}
$result = sum();
echo "<br> The result of sum two global vars is $result";


function sum2($n1,$n2){
     return $n1+$n2;
 }
 $result = sum2(20,20);
 echo "<br> The result of sum two parameters  is $result";
 

 function sum3(){
     $n1=40;$n2=10;
    return $n1+$n2;
}
$result = sum3();
echo "<br> The result of sum two local vars  is $result";


function counter(){
    STATIC $count =0;
    $count++;
    echo"<br> the value of \$counter = $count";
}
counter();
counter();
counter();
counter();
counter();


define("MINVALUE",40);
echo"<br> the value of the constant MINVALUE = ".MINVALUE;
echo "<br>".constant("MINVALUE");
















?>


