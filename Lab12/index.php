<?php 
// require_once('file.php');
// echo "the rest of the index file";

$file = fopen('newFile.txt','w');
if($file == false){
    echo "error in creating or openning the file".exit();
}
echo "created successfully";
fwrite($file,"Hello , it is the first line in the file");
fwrite($file,"\nNew line.");
echo"<br> written successfully.";
fclose($file);


// $file = fopen('newFile.txt','w');
// if($file == false){
//     echo "error in creating or openning the file".exit();
// }
// fwrite($file,"writing after deleteing ...");
// echo"<br> written successfully.";
// fclose($file);

$file = fopen('newFile.txt','a');
if($file == false){
    echo "error in creating or openning the file".exit();
}
fwrite($file,"\nThis line from appending text at the end of the file");
echo"<br> appending successfully.";
fclose($file);


$file = fopen('newFile.txt','r');
if($file == false){
    echo "error in creating or openning the file".exit();
}
echo "<br> reading line by line <br>";

while(!feof($file)){
    echo fgets($file);
}
echo "<br> ";
echo"<br> read successfully.";
fclose($file);


$file = fopen('newFile.txt','r');
if($file == false){
    echo "error in creating or openning the file".exit();
}
echo "<br> reading character<br>";

while(!feof($file)){
    echo fgetc($file);
}
echo "<br> ";
echo"<br> read successfully.";
fclose($file);



unlink('newFile.txt');
echo "deleteing ...";

$date = date('d/m/Y');
echo "<br><br><br> date <br>";
echo $date;

echo "<br> ".date("l")." ".date("d")."-".date("M")."-".date("Y");
echo "<br> ".date("D")." ".date("d").date("M").date("y");

echo "<br> time is ".date('h:i:s a');
echo "<br> time is ".date('H:i:s A');





?>