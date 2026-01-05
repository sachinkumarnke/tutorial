<?php

$h2_color="blue";
$h1_color="red";

echo "<h1 style='color:red;'>Welcome to PHP with HTML</h1>";
echo "<h2 style='color:black;'>Welcome to PHP with HTML</h2>";
echo "<h3 style='color:blue;'>Welcome to PHP with HTML</h3>";

?>

<?php

$name='sachin kumar';

echo "<h1 style='color:orange'> my name is $name</h1>";
?>


<h1 style='color:<?php echo $h1_color; ?>'>
 My real name is <?php echo $name; ?>
</h1>

<h2 style="color:<?php echo $h2_color; ?>">
    <?php echo "This is PHP inside HTML"; ?>
</h2>




<h2 style="color:<?php echo $h2_color; ?>">
    <?php 
        echo "Addition of 5 and 10 is: ";
        echo 5 + 10;
    ?>
    
</h2>

<h1 style="color:<?php echo $h1_color; ?>">
    <?php
    echo "Today is ".date("Y/m/d");
    ?>
</h1>
