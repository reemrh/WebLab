<?php 
$string = "lorem ipsum dolor sit amet consectetur Dolor adipisicing  dolor elit. ";

echo "<br><br><br> the length of the string == ".strlen($string);
echo"<br> (sensitive)the first occurence of the 'dolor' == ".strstr($string,'dolor');
echo"<br> (sensitive)the first occurence of the 'Dolor' == ".strstr($string,'Dolor');
echo"<br> (insensitive)the first occurence of the 'Dolor' == ".stristr($string,'Dolor');
echo"<br> (insensitive)the first occurence of the 'reem' == ".stristr($string,'reem');
echo"<br> the count number of substring 'r' == ".substr_count($string,'r');
echo"<br> the count number of substring 'dolor' == ".substr_count($string,'dolor');
echo"<br> the count number of substring 'dolor' from index 12 to the end of the string== ".substr_count($string,'dolor',12);
echo"<br> the count number of substring 'dolor' from index 12 and 33 step after == ".substr_count($string,'dolor',12,33);
echo"<br> the count number of substring 'Dolor' == ".substr_count($string,'Dolor');
echo"<br> the count number of substring 'reem' == ".substr_count($string,'reem');
echo"<br> the count number of string words == ".str_word_count($string);
echo"<br> find the index of word 'dolor' == ".strpos($string,'dolor');
echo"<br> find the index of word 'reem' == ".strpos($string,'reem');
echo"<br> replace every substring 'or' with string 'Hello World!' == ".str_replace('or','Hello World!',$string);
echo"<br> all to uppercase' == ".strtoupper($string);
echo"<br> all to lowercase' == ".strtolower($string);
echo"<br> just first letter of the string to uppercase' == ".ucfirst($string);
echo"<br>convert first letter of every word of the string to upper case' == ".ucwords($string);
echo "<br> comparing two strings 'hello' and 'hello' ==".strcmp('hello','hello');
echo "<br> comparing two strings 'hello' and 'Hello' ==".strcmp('hello','Hello');
echo "<br> comparing two strings 'Hello' and 'hello' ==".strcmp('Hello','hello');
echo "<br> substring from index 0 to 5 ==".substr($string,0,5);
echo "<br> substring 'dolor' from the end of the string ==".substr($string,-12,5);
echo "<br> removig white spacing from both sides ==".trim($string);
echo "<br> removig white spacing from right side ==".rtrim($string);
echo "<br> removig white spacing from left side ==".ltrim($string);
echo "<br> padding the string from both sides with '$' until the length of string equel 80==".str_pad($string,80,'$',STR_PAD_BOTH);
echo "<br> padding the string from both sides with '$' until the length of string equel 81==".str_pad($string,81,'$',STR_PAD_BOTH);
echo "<br> padding the string from both sides with 'tr' until the length of string equel 80==".str_pad($string,80,'tr',STR_PAD_BOTH);
echo "<br> padding the string from both sides with 'tr' until the length of string equel 81==".str_pad($string,81,'tr',STR_PAD_BOTH);
echo "<br> padding the string from right side with 'k' until the length of string equel 80==".str_pad($string,80,'k',STR_PAD_RIGHT);
echo "<br> padding the string from left side with 'k' until the length of string equel 80==".str_pad($string,80,'k',STR_PAD_LEFT);


?>
