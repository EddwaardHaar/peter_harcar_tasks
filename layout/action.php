<?php
$title = "Variables";
include "header.php"; 
?>

<div 
class = "wrapper" 
style="margin: auto; padding:10px;">

    <?php 

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $bdate = $_POST['bdate'];
        $color = $_POST['color'];


        echo "<h3>Your name is $fname $lname </h3>";
        echo "<h3>Your birthday is $bdate </h3>";
        echo "<h3>Your favorite color is $color </h3>";

    echo "<h3>Hello $fname $lname. You are welcome to my site</h3>";


?>

</div>

<?php include "footer.php" ?>