<?php
$title = "Variables";
include "header.php" ?>

<div class = "wrapper" style="margin: auto;  padding:10px;">
<h3>Exercise 3. In-class Task Variable & Operators (variable.php)</h3>
<br>
<h2>
1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using h3 tag: Hello …., You are welcome to my site.
</h2>
<br>
<h3>Apply bootstrap style to the form.</h3>

<br>
<form action="action.php" method="post">
<div class = "row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control"> <br>
    
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
    </div>
</div>
    <div class="row">
        <div class="col">
        Birth Date: <input type="date" name="bdate" class="form-control"> <br>
        </div>
        <div class="col">
        Select fav Color: <input type="color" name="color" class="form-control"> <br>
        </div>

    </div>
    
    
    <input type="submit" value="Submit">
</form>

<br>


<div>
    <h3>3.  Prepare a simple html table and apply bootstrap style to the table.</h3>

<table class=" table table-bordered">
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <th>1</th>
        <th>Pekka</th>
        <th>1</th>
    </tr>
    <tr>
        <th>2</th>
        <th>Johanna</th>
        <th>2</th>
    </tr>
    <tr>
        <th>2</th>
        <th>John</th>
        <th>3</th>
    </tr>
</table>

<div>
    <br>
    <h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h3>
    <br>

    <?php
    $fname = "Peter";
    $lname = "Harcar";
    
    echo " <br> length of " . $fname . " and " . $lname . " is " . strlen($fname) + strlen($lname);
    ?>

</div>

<div>
    <br>
    <h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>
    <br>

    <?php
    $n1 = 298;
    $n2 = 234;
    $n3 = 46;
    $sum = $n1 + $n2 + $n3;
    echo " <br> The total of" . " " .  $n1 . " " . $n2 . " and " .  $n3 . " is " . $sum ;
    ?>
</div>

<div>
    <br>
    <h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h3>
    <br>

    <?php

    function getBrowser()
    {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "N/A";

    $browsers = [
        '/chrome/i' => 'Chrome',
        '/firefox/i' => 'Firefox',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        
    ];

    foreach ($browsers as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
        $browser = $value;
        }
    }

    return $browser;
    }

    echo "Browser: " . getBrowser();

    ?>

    </div>

    <div>
        <br>
        <h3>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time)</h3>
        <br>

        <?php 
            echo "check the footer"
        ?>

    </div>

</div>

<?php include "footer.php" ?>