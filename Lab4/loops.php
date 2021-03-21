<?php 


$strings = array("Ali","Moh","Ahmad","Ameer");
echo "<br>".$strings[0];
echo "<br>".$strings[1];
echo "<br>".$strings[2];
echo "<br>".$strings[3];

$arr2 = array(1,5,80,3,20);



echo "<br> <br>";
for($i = 0;$i<count($strings);$i++){
    echo "<br>".$strings[$i];
}

echo "<br> <br>";
$i = 0;
while($i < count($strings)){
    echo "<br> $strings[$i]";
    $i++;
}


echo "<br> <br>";
$i = 0;
do{
    echo "<br> $strings[$i]";
    $i++;
}while($i < count($strings));



echo "<br> <br>";
foreach($strings as $element){
    echo "<br> $element";
}

echo "<br> <br>";
$student_grades = array(
    "Mohammed" => 50,
    "Ahmed" =>40,
    "Ali" => 100,
);

echo "<br> ".$student_grades['Mohammed'];
echo "<br> ".$student_grades['Ahmed'];
echo "<br> ".$student_grades['Ali'];

foreach($student_grades as $key => $value){
    echo "<br> $key's grade is $value";
}


$numbers = array(
    array(1,5,9),
    array("ahmed","Ali"),
    array(true,5.3,5),
);
echo "<br>".$numbers[2][1];
foreach($numbers as $ar){
    foreach($ar as $value){
        echo"<br> $value";
    }

}

$students_marks = array(
    "Mohammed" => array(
        "Arabic" =>50,
        "English" =>70,
        "Maths" =>80,
    ),
    "Ahmed" => array(
        "Arabic" => 60,
        "English" =>90,
        "Maths" =>100,
    ),
    "Ali" => array(
        "Arabic" =>85,
        "English" =>75,
        "Maths" =>95,
    ),
);

echo "<br><br><br>";
foreach($students_marks as $student_name => $marks_array){
       echo "<br> $student_name 's marks are:";
       foreach($marks_array as $subject => $mark){
           echo "<br> $subject = $mark";
       }
}


$cities = array("Tokyo","New York","Gaza","Cairo","Dubi");

echo "<br> <br><br>";
foreach($cities as $city) {
    echo "$city,";
}

sort($cities);
echo "<br>";

foreach($cities as $city) {
    echo "$city,";
}

?>
<?php $locations = array(
    array("City","Country","Contenient"),
    array("Tokyo","Japan","Asia"),
    array("Gaza","Palestine","Asia"),
    array("New York","USA","North America"),
);

echo "<br> <br> <br>";

?>
<html>
    <head>
        <style>
            td,th{
                width:8em;
                border:1px solid black;
                padding-left:4px;
            }
            th{
                text-align:center;
            }

            table{
                border-collapse:collapse;
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <th>
                <td>
                    <?php echo $locations[0][0];?>
                </td>
                <td>
                    <?php echo $locations[0][1];?>
                </td>
                <td>
                    <?php echo $locations[0][2];?>
                </td>
            </th>

            <?php for($j =1;$j<count($locations);$j++){
                   echo "<tr>"; 
                   echo "<td></td>";
                foreach($locations[$j] as $item){
                    
                          echo "<td>";
                          echo $item;
                          echo "</td>";
                }
                echo"</tr>";
            }
            ?>
           
        </table>
    </body> 
</html>   