<?php
$title = "Control Flow";
include "header.php" ?>



<?php

echo "<h3>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not</h3>";

$current_month = date('F') . "<br>";

if($current_month == "August"){
    echo "It's August, so it's still holiday.";
}else{
    echo "Not August, this is" .  $current_month  . "  so I don't have any holidays";
}

echo "<hr> 
<h3>2.  Assign colour red to a variable name color and check to print one the following responses (if else statement)</h3> ";

$color = "red";

if($color == "Red"){
    echo "The color is red. <br>";
}else{
    echo "The color is not red. <br>";
}

echo "<hr> <h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. </h3>";
$total_score = 66;

if($total_score >= 80){
    echo "Excellent";
}elseif($total_score >= 70 && $total_score < 80){
    echo "Great";
}
elseif($total_score >= 60 && $total_score < 70){
    echo "Good";
}
elseif($total_score >= 50 && $total_score < 60){
    echo "Pass";
}
else{
    echo "Fail";
}



?>

<hr>

<h3>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,) </h3>"

 <h3> Eligible for voting ? </h3>

  <form method="POST">
      <h4>Name : </h4>
      <input type="text" name="name"><br>
      <h4>Age : </h4>
      <input type="text" name="age"><br><br>

      <input type="submit" value="Submit" name="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $age = $_POST['age'];

      if ($age >= 18) {
          echo 'Eligible for voting, bro. <br>';
      } else {
          echo 'You gonna need to wait, bro.<br>';
      }
  }

  echo '<hr> 
  <h3>5. In task 5, you used HTTP_USER_AGENT to get the browser name. 
  Use Switch statement with strops function to print the name of the browser as below: 
  If someone is using Chrome it should print, you are using Goolge Chrome…
   </h3>';

  $userAgent = $_SERVER['HTTP_USER_AGENT'];



    switch(true){
        case (strpos($userAgent, 'Chrome')):
            echo "u are using Chrome";
            break;
        case (strpos($userAgent, 'Firefox')):
            echo "u are using Firefox";
            break;
        case (strpos($userAgent, 'Edge')):
            echo "u are using Edge";
            break;
        case (strpos($userAgent, 'Opera')):
            echo "u are using Opera";
            break;
        default:
            echo "u are using definetly some browser";
            break;
    }

?>





<?php include "footer.php" ?>
