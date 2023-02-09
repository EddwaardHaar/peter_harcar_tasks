<?php
$title = "Control Flow";
include "header.php" ?>



<?php

echo "<h3>1. Write a php script to display courses as list. Use li html tag</h3>";
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

for($i = 0; $i < sizeof($courses); $i++){
    echo '<li> ' .  $courses[$i] . '</li>';
}

echo "<h3>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys. <br>Delete an element from the array below:</h3>";

$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
unset($courses1[1]);
var_dump($courses1);

echo "<h3>3. Sort the following array </h3>";


$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
var_dump($courses3);
ksort($courses3);
var_dump($courses3);
arsort($courses3);
var_dump($courses3);
krsort($courses3); 
var_dump($courses3);


echo "<h3>4. Change the following array's all values to upper case.</h3>";
$courses4=array("php", "html", "javascript", "cms", "project");

for ($i = 0; $i < (count($courses4)); $i++){
    $cUp = strtoupper($courses4[$i]);
    echo $cUp . "<br>";
}

echo "<h3>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h3>";

$colors = array("#000000" => "Black", "#DC143C" => "Crimson", "#FFFFFF" => "White");

    foreach($colors as $hex => $color){

        echo "<br>hexidecimal => $color => $hex";

    }

echo "<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>";

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? => Split a string into an array
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?  => This function is returning all the elements in an array.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?   => sort arrays in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop => for-loop first uses $temp_array_length variable what means total number of values in array...each value of the array starting from the 5th last position(value), echo is always printing the current value and adding a comma in the end of the round
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


?>


<?php include "footer.php" ?>
