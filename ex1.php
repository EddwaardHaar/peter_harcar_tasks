<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">

    <style>
    table, th, td {
    border-collapse: collapse;
    border: 1px solid #999;
    padding: 0.5rem;
    text-align: left;
}
</style>
  </head>
  <body>

    
    <?php

    $title = "PHP is interesting";

    echo"<h3>3.1 Write a simple PHP script to print your information (Name and your groupid). </h3>";

    echo "My name is Peter Harčar and my group id is 2. <br>";

    echo'<h3>3.2 Write PHP code to display the following message > Hello world! My name is "David" </h3>';

    echo 'Hello world! My name is "David" ';

    echo "<h3>3.3 Write the PHP code in to display the current date.  </h3>";

    echo date('d-m-y');

    $g1 = 5;
    $g2 = 4;
    $g3 = 5;

    $pic = "ex1_pic.png";

    
    ?>

    <h1><?php echo $title?></h1>
 
    <h3>These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h3>
    
<table class="">
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Pekka</td>
    <td><?php echo $g1?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Johanna</td>
    <td><?php echo $g2?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>John</td>
    <td><?php echo $g3?></td>
  </tr>
</table>
 
<h3> 4 Screenshot of dev env </h3>
 <?php
    echo'<img src="img/'. $pic .'" alt="" height="600px" width="1000px>';
 ?>




	<script src="index.js"></script>
  </body>
</html>
